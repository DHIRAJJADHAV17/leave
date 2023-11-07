<?php
namespace App\Controllers;

    use App\Models\UserModel;
    
    
    use App\Models\NoticeModel;
   
    use CodeIgniter\Email\Email;
    use App\Libraries\Hash;
    
     
  
    class AuthController extends BaseController
    {
       

        public function signup()
        {
        
            $data=[];
            helper('form');
            
                $validation = \Config\Services::validation();

    $validation->setRules([
        'first_name' => [
            'label' => 'First_name',
            'rules' => 'required|regex_match[/^[A-Za-z\s\-]+$/]',
            'errors' => [
                'regex_match' => 'The {field} field should only contain letters, spaces, and dots.'
            ]
        ],
        'last_name' => [
            'label' => 'Last_name',
            'rules' => 'required|regex_match[/^[A-Za-z\s.-]+$/]',
            'errors' => [
                'regex_match' => 'The {field} field should only contain letters, spaces, and dots.'
            ]
        ],
        'phone' => [
            'label' => 'Phone',
            'rules' => 'required|regex_match[/^[0-9\- ]+$/]',
            'errors' => [
                'regex_match' => 'The {field} field should only contain numbers, dashes, and spaces.'
            ]
        ],
        'email' => [
            'label' => 'Email',
            'rules' => 'required|min_length[3]|max_length[50]|valid_email|is_unique[users.email]',
        ],
        'password' => [
            'label' => 'Password',
            'rules' => 'required|min_length[8]|max_length[50]',
        ],
        'confirm_password' => [
            'label' => 'Password',
            'rules' => 'matches[password]',
        ],
    ]);
            
             
    if ($this->request->getMethod() === 'post' && ! $validation->withRequest($this->request)->run()) {
        $data['first_name'] = $this->request->getPost('first_name');
        $data['last_name'] = $this->request->getPost('last_name');
        $data['phone'] = $this->request->getPost('phone');
        if (!empty($validation->getErrors())) {
            $data['validation'] = $validation;
           
        }
        
        return view('signup', $data);
    }
    else {
                    $userModel = new UserModel();
                    $first_name = $this->request->getPost('first_name');
                    $last_name = $this->request->getPost('last_name');
                    $email = $this->request->getPost('email');
                    $password = $this->request->getPost('password');
                    $phone = $this->request->getPost('phone');
    
                    
                    $dat =['name'=>$first_name." ".$last_name,'email'=>$email,'password'=>$password,'phone'=>$phone];
                    
                    
                    if (isset($_POST['g-recaptcha-response'])){
                        $recaptcha=$_POST['g-recaptcha-response'];
                        
                        if (!$recaptcha) {
                            echo '<script>alert("something went wrong")</script>';
                        return redirect()->to('/signup');
                       
                        
                        }
                    
                    
                        else{
                        $secret="6Lff178nAAAAAIalBr8Ne4StkUsR5kw8R-beof46" ;
                        $url='https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$recaptcha;
                        $response=file_get_contents($url);
                        $responseKeys =json_decode($response,true);
                                                                                
                            if($responseKeys['success']){
                                $session = session();
                                $session->set('user_data', $dat);
                              $generate_otp= $this->sentotp($dat['email']);
                            
                              $session->set('generate_otp',  $generate_otp);
                               
                               return redirect()->to('/verify');
                               
                          
                                
                            }
                            else{
                                    echo '<script>alert("something went wrong ")</script>';
                
                                }
                         }
                        }
                    }
            
     
        return view('/signup',$data);
    
    }

    private function sentotp($email){
        $otp = mt_rand(100000, 999999);
        $mail = \Config\Services::email();
        $mail->setFrom('2001dhirajjadhav@gmail.com', 'dhiraj'); // Set the 'From' address
        $mail->setTo($email);
        $mail->setSubject("Email Verification OTP");
        $mail->setMessage('Your OTP is: ' . $otp);

        if (!$mail->send()) {
            echo '<script>alert("something went wrong email is not sent")</script>';
           
            return redirect()->to('/signup');
        }

        
        
        return $otp;
    }
    
    
    
    public function login()
        {
            $this->setcheck();
            $data=[];
            helper(['form']);
            $validation = \Config\Services::validation();
    
            $validation->setRules([
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required|min_length[3]|max_length[50]|valid_email',
                    'errors' => [
                        'is_unique' => 'The {field} is already registered. Please choose a different email address.'
                    ],
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required|min_length[8]|max_length[50]',
                ],
            ]);

            if($this->request->getMethod()=='post'){
                if (!$validation->withRequest($this->request)->run()) {
                if (!empty($validation->getErrors())) {
                    $data['validation'] = $validation;
                }
            } else {
            
                    $email = $this->request->getPost('email');
                    $password = $this->request->getPost('password');
            
                    $userModel = new UserModel();
                    $admin = $userModel->where('email', $this->request->getPost('email'))->first();
                    if($admin!==null && password_verify( $password,$admin['password'])){                                  
                       
                                    $this->setUserSession($admin);
                                            
                                    return redirect()->to('/dashboard');
                             
                    
                    }
                    else{
                        $validation->setError('password',  'Invalid email or password');
                    $data['validation'] = $validation;
    
                    }

                        
                    
                       
                         }
                                                                                
                }
                       
    return view('login',$data);
  }



  public function dashboard()
{
    $data = [];
    session()->remove('mail');
    $data['main_content'] = 'dashboard';
    $noticeModel = new NoticeModel();

    $notices = $noticeModel->findAll();  // Fetch all records instead of using where()
    $data['mynumber'] = getenv('MY_NUMBER');

    if (!empty($notices)) {
        foreach ($notices as &$notice) {
            $notice['notice'] = $this->makeLinksClickable($notice['notice']);
        }
        $data['notices'] = $notices;
        
    }

    return view('include/template', $data);
}

  protected function makeLinksClickable($text)
  {
      // Convert URLs to clickable links
      $pattern = '/(https?:\/\/[^\s]+)/i';
      $replacement = '<a href="$1" target="_blank">$1</a>';
      $textWithLinks = preg_replace($pattern, $replacement, $text);
    //   print_r($textWithLinks); // Debugging statement
      return $textWithLinks;
  }





        
 public function logout(){
            if( session()->has('isLoggedIn') ){
            session()->remove('isLoggedIn');
            session()->destroy();
            return  redirect()->to('login');
                 
    }      else if( session()->has('isLoggInteach') ){
        session()->remove('isLoggInteach');
        session()->destroy();
        return  redirect()->to('teachlogin');
             
}
else{
    session()->remove('isadminLoggIn');
    session()->destroy();
    return  redirect()->to('adminlogin');
        
}
    
}

    private function setUserSession($admin){
$data=[
'id'=>$admin['id'],
'name'=>$admin['name'],
'email'=>$admin['email'],
'phone'=>$admin['phone'],
'isLoggedIn'=>true,


];
session()->set($data); 
return true;

    }


   

public function virfyotp(){
    $userModel = new UserModel();
    $session = session();
    $user = $session->get('user_data');
  
     
        if (!$user) {
            echo '<script>alert("Session Expired")</script>';

            return redirect()->to('/signup');
        }
    
    if ($this->request->getMethod() == 'post' )
    {
        $userOTP = $this->request->getPost('otp');
        $storedOTP = $session->get('generate_otp');
      
       
        if ($userOTP == $storedOTP) {
            $query =$userModel->insert($user);
                                $admin= $userModel->where('email',$user['email'])->first();
                                if(! $query){
                                    $data['Flash_message']=TRUE;
                                    $session->remove('generate_otp');
                                    $session->remove('user_data');
                    
                                    return redirect()->to('/signup');
                                }else {
                                    $session->remove('generate_otp');
                                    $session->remove('user_data');
                                    $data['Flash_message']=FALSE;
                                    $this->setUserSession($admin);
                                   
                                    return redirect()->to('/dashboard');
                                }
        } else {
            
            return redirect()->to('/signup');
        }
    }
       
        return view('verifiotp');
    
}

public function resetpass(){
    $data=[];
    session()->remove('email_sent');
    helper(['form']);
    if($this->request->getMethod()=='post'){
        $mail = $this->request->getPost('email');
        $userModel = new UserModel();
       
        require_once "../connection.php";
        $email = mysqli_real_escape_string($con, $mail); 

$query = "SELECT * FROM users WHERE email='$email'";
       
        $data_query = mysqli_query($con,$query);
        $row=mysqli_num_rows($data_query);
        if($row>0){
            $session = session();
            $generate_otp= $this->sentotp($mail);
            $session->set('otp', $generate_otp );
            $session->set('mail', $mail );
            $session->set('email_sent', TRUE);
            return redirect()->to('/changepass');


           
        }else{
            $query = "SELECT * FROM coach WHERE email='$email'";
       
        $data_query = mysqli_query($con,$query);
        $row=mysqli_num_rows($data_query);

        if($row>0){
            $session = session();
            $generate_otp= $this->sentotp($mail);
            $session->set('otp', $generate_otp );
            $session->set('mail', $mail );
            $session->set('email_sent', TRUE);
            return redirect()->to('/changepass');

        }else{
            return redirect()->to('/verify');
        }
        }
        }

    return view('resetpass',$data);
}
public function changepass(){
    $userModel = new UserModel();
    $coachModel = new CoachModel();
    $mail=session()->get('mail');

    if (!$mail) {
        echo '<script>alert("Session Expired")</script>';

        return redirect()->to('/reset');
    }
    $admin = $userModel->where('email', $mail)->first();
    if($admin===null){
        $admin = $coachModel->where('email', $mail)->first();
        if($this->request->getMethod()=='post'){
            $pass = $this->request->getPost('pass');                     
            $confpass = $this->request->getPost('confpass');
            $otp = $this->request->getPost('otp');
           
            if( session()->get('otp')==$otp &&$pass=== $confpass){
                
                $dat = array('password' => $pass);
            $query = $coachModel->update($admin['id'], $dat);
            if($query){
                
    
                $this->setteacherSession($admin);
                session()->remove('otp');
                session()->remove('mail');
                
    
                return redirect()->to('/dashboard');
            }
            else{
                session()->remove('otp');
                session()->remove('mail');
    
                    echo '<script>alert("something went wrong")</script>';
                    return redirect()->to('/reset');
                }
            }
            else{
                echo '<script>alert("something went wrong")</script>';
                return redirect()->to('/reset');
            }
    
        }

    }
    if($this->request->getMethod()=='post'){
        $pass = $this->request->getPost('pass');                     
        $confpass = $this->request->getPost('confpass');
        $otp = $this->request->getPost('otp');
       
        if( session()->get('otp')==$otp &&$pass=== $confpass){
            
            $dat = array('password' => $pass);
        $query = $userModel->update($admin['id'], $dat);
        if($query){
            

            $this->setUserSession($admin);
            session()->remove('otp');
            session()->remove('mail');
            

            return redirect()->to('/dashboard');
        }
        else{
            session()->remove('otp');
            session()->remove('mail');

                echo '<script>alert("something went wrong")</script>';
                return redirect()->to('/reset');
            }
        }
        else{
            echo '<script>alert("something went wrong")</script>';
            return redirect()->to('/reset');
        }



    }

    return view('changepass');
}




  public function pagenotfound()
  {
      // Load a view to display a custom 404 error page
      return view('errors/html/error_404');
  }


 }