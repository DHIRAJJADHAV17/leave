<?php
namespace application\Controllers;
    use application\models\AdminModel;
    use application\models\CourseModel;
    use application\models\EnrollModel;
    use application\models\PaymentModel;

    use application\mibraries\Hash;
    class AuthController extends BaseController
    {
        protected $helpers = ['url', 'form'];

        
        public function index()
        {$data=[];
            $this->setcheck();
            

            
            return view('home',$data);     

        } 
        public function courses()
        {$data=[];
            if(session()->get('isLoggInteach')){

                $dat =session()->get();
               
                
                $courseModel = new CourseModel();
              
                $data['userdata'] = $courseModel->where('teacher',$dat['name'])->findAll();
                $data['main_content']='courses';
                return view('include/template',$data); 
            }

            $courseModel = new CourseModel();
          
            $data['userdata'] = $courseModel->findAll();
            $data['main_content']='courses';
            return view('include/newtemp',$data);     


        }
        public function editcourses($id,$val)
        {$data=[];
            $data['main_content'] = 'admincont/editcourse';
                $courseModel = new CourseModel();
                $data['usdata'] = $courseModel->where('co_id',$id)->findAll();
             
             
                if($val==="update"){
                
            
                
            if ($this->request->getMethod() == 'post') {
                
                $course = $this->request->getPost('cname');
                $price = $this->request->getPost('price');
         
                $data = array('course' => $course,'price'=>$price);
                $query = $courseModel->update($id,$data);
                if($query){
                    
                    return  redirect()->to('/courses');
                }
            }
            
            return view('admincont/editcourse',$data);     
        }
        if($val==="delete"){
            
            $query = $courseModel->where('co_id',$id)->delete();
            if($query){
                    
                return  redirect()->to('/courses');
            }
            
            return view('admincont/editcourse',$data);     
        }
    
          

            return view('admincont/editcourse',$data);     


        }




        






        



        public function signup()
        {
        
            $data=[];
            helper('form');
            if($this->request->getMethod()=='post'){
                
            
                $rules =[
                    'first_name'=>'required|min_length[3]|max_length[20]',
                    'last_name'=>'required|min_length[3]|max_length[20]',
                    'email'=>'required|min_length[3]|max_length[50]|valid_email|is_unique[admin.email]',
                    'password'=>'required|min_length[8]|max_length[50]',
                    'confirm_password'=>'matches[password]',
                    
                ];
                
                if(!$this->validate($rules)){
                    $data['validation']=$this->validator;
                }else{
                    $userModel = new AdminModel();
                    $first_name = $this->request->getPost('fname');
                    $last_name = $this->request->getPost('lname');
                    $email = $this->request->getPost('email');
                    $password = $this->request->getPost('password');
                    $phone = $this->request->getPost('phone');
                   
                    
                    $data =['name'=>$first_name." ".$last_name,'email'=>$email,'password'=>$password,'phone'=>$phone];

                    $query =$userModel->insert($data);
                    $admin= $userModel->where('email',$email)->first();
                    if(! $query){
                        $data['Flash_message']=TRUE;

                        return redirect()->to('/signup');
                    }else {
                        $data['Flash_message']=FALSE;
                        $this->setUserSession($admin);
                       
                        return redirect()->to('/dashboard');
                    }



                }


        }
        return view('signup',$data);
    
    }
        
    
    
    public function login()
        {
            $this->setcheck();
            $data=[];
            helper(['form']);
            if($this->request->getMethod()=='post'){
                
            
                $rules =[
                    
                    'email'=>'required|min_length[3]|max_length[50]|valid_email',
                    'password'=>'required|min_length[8]|max_length[50]',
                    
                ];
                $errors=[
                    'password'=>[
                        'validateUser'=>'Email or Password not match']
                ];
                
                if(!$this->validate($rules,$errors)){
                    $data['validation']=$this->validator;
                }else{

                    
                    $email = $this->request->getPost('email');
                    // $password = $this->request->getPost('password');
              
                    $userModel = new AdminModel();
                $admin = $userModel->where('email', $this->request->getPost('email'))->first();
               

                if(password_verify( $this->request->getPost('password'),$admin['password'])){

               
                   $this->setUserSession($admin);
                   
                     return redirect()->to('/dashboard');
                   
                    
                    
                }else{
                    $data['Flash_message']=TRUE;
                    return redirect()->to('/login');
                }


        }
        
    }
    return view('login',$data);
  }



 public function dashboard()
        {$data=[];

            $data['main_content']='dashboard';

            
            $model = new AdminModel();
            $data['userdata']  = $model->findAll();


                return view('include/template',$data);     
            
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


    private function setcheck(){
        $data=[];
          
        $db =\Config\Database::connect();

        $enrollModel = new EnrollModel();
        $master = $db->table('enroll');
        
                $mast=$master->get()->getResultArray();

                

foreach($mast as $key=>$va){
  
    $dateend=strtotime($va['validtill']) ;
    $date3= $dateend+(60 * 60 * 24 );
    
    

         $currentdate = strtotime(date('Y-m-d'));
         
    $diff = $date3-$currentdate;
    $duration = floor($diff / (60 * 60 * 24));

    if($va['status']!=="pending"){        
        if($duration>0){ 
        $dat =array('duration'=>$duration,'status'=>"Active");
                $query =$enrollModel->update($va['er_id'],$dat);

    }
    
   
    if($duration<=0){
       
        $dat =array('duration'=>$duration,'status'=>"Due");
                $query =$enrollModel->update($va['er_id'],$dat);
    }
}
   
}

            return redirect()->back();
        }

        
 public function payment()
 {$data=[];
    $data =session()->get();
    $payment = new PaymentModel();
    require_once "../connection.php";


     if(session()->get('isLoggedIn'))
     { $id= $data['id'];
        $data['pay']  = $payment->where('id',$id)->findAll();
        if ($this->request->getMethod() == 'post' ) {
       
       
            $from = $this->request->getPost('from_date');
            $to = $this->request->getPost('to_date');
             
                
             $query= "SELECT * from payment WHERE payment.id=$id AND created_at BETWEEN '$from' AND '$to' ";
             $data['pay']= mysqli_query($con,$query);
             
        }
    }
     
     if(session()->get('isadminLoggIn')){

        $db = \Config\Database::connect();
        $builder = $db->table('payment');
        $builder->join('admin', 'admin.id=payment.id');
       
        $data['pay'] = $builder->get()->getResultArray();

        if ($this->request->getMethod() == 'post' ) {
            $from = $this->request->getPost('from_date');
            $to = $this->request->getPost('to_date');
            $name = $this->request->getPost('code');
           $data['to']=$to;
          

            if($from&&$name&&$to){
                
             
                $query= "SELECT * from admin JOIN payment ON admin.id=payment.id WHERE name ='$name' AND  created_at BETWEEN '$from' AND '$to'  ";
               
                $data['pay']= mysqli_query($con,$query);
                  
                
            }else{
                if($from&&$to){
                  
                    $query= "SELECT  * from admin JOIN payment ON admin.id=payment.id WHERE  created_at BETWEEN '$from' AND '$to'   ";
                     $data['pay']= mysqli_query($con,$query);
                       
                    
                
            }
    
            if($name){
                $query= "SELECT * from admin JOIN payment ON admin.id=payment.id WHERE name ='$name'  ";
                 $data['pay']= mysqli_query($con,$query);
                 
               
            }
            }
            
 
        }
        
       
            
     }     
     $data['main_content']='payment';
         return view('include/template',$data);     
     
 }

 
 



 }