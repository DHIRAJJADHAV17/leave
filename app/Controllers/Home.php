<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Models\AdminModel;

use App\Models\NoticeModel;
use App\Models\WasteModel;
use App\Libraries\Hash;

class Home extends BaseController
{
    protected $helpers = ['url', 'form'];


    
       

    public function adminlogin()
    {$adminModel = new AdminModel();
       
            $this->setcheck();
            $data = [];
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
        
            if ($this->request->getMethod() === 'post') {
                if (!$validation->withRequest($this->request)->run()) {
                    if (!empty($validation->getErrors())) {
                        $data['validation'] = $validation;
                    }
                } else {
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');
                $masterModel = new AdminModel();
                $master = $masterModel->where('email', $this->request->getPost('email'))->first();
                if( $master!==null&&$password==$master['password']){   
                    $this->setAdminSession($master);
                    return redirect()->to('admindashboard');
                } else {
                    $validation->setError('password',  'Invalid email or password');
                    $data['validation'] = $validation;
                  
                }
            }
        }
        return view('admincont/login', $data);
    }
    private function setAdminSession($master)
    {
        $data = [
            'isadminLoggIn' => true,
        ];
        session()->set($data);
        return true;
    }


    public function profile()
    {
        $data = [];
        $data['main_content'] = 'profile';
        if (session()->get('isLoggInteach')) {
            return view('include/thead', $data);
        }
        return view('include/template', $data);
    }



   


    public function waste()
    {
        $data = [];
        helper('form');
    
        // $da['main_content']='enroll';
        $cons = session()->get();
        $id = $cons['id'];
        $wasteModel = new WasteModel();
    
       
    
        if ($this->request->getMethod() === 'post') {
            $name = htmlspecialchars($this->request->getPost('name'), ENT_QUOTES, 'UTF-8');
            
           
            
                $department = $this->request->getPost('department');
                $days = $this->request->getPost('days');
                $from = $this->request->getPost('from');
                $reason = $this->request->getPost('reason');
    
                $data = ['id'=>$id, 'name' => $name, 'department' => $department,'days' => $days, 'status' => "pending", 'from' => $from,'reason' =>$reason];
                $query = $wasteModel->insert($data);
    
                if ($query) {
                    return redirect()->to('/My_leave');
                }
    
                return view('waste', $data);
            }
            return view('waste', $data);
        
    }

    public function index()
        { require_once "../connection.php";
            $noticeModel = new NoticeModel();
            $data = [];
            $data['main_content'] = 'admincont/addash';
        
            // Load the database connection if you haven't already.
            // Assuming you've set up the $con variable.
        
            $query = "SELECT * from users";
            $data_query = mysqli_query($con, $query);
            $data['row'] = mysqli_num_rows($data_query);
        
            $query = "SELECT * from enroll WHERE status='Due' ";
            $data_query = mysqli_query($con, $query);
            $data['row1'] = mysqli_num_rows($data_query);
        
            $query = "SELECT * from enroll WHERE status='pending' ";
            $data_query = mysqli_query($con, $query);
            $data['row2'] = mysqli_num_rows($data_query);
        
            $query = "SELECT sum(amount)  from payment";
            $data_query = mysqli_query($con, $query);
            $result = mysqli_fetch_array($data_query);
            $data['total'] = $result['sum(amount)'];
        
            // Initialize the validation service
            $validation = \Config\Services::validation();
        
            // Define validation rules
            $validationRules = [
                'title' => [
                    'label' => 'Title',
                    'rules' => 'required|regex_match[/^[A-Za-z\s\-]+$/]',
                    'errors' => [
                        'regex_match' => 'The {field} field should only contain letters and spaces.',
                    ],
                ],
                'notice' => [
                    'label' => 'Notice',
                    'rules' => 'required|regex_match[~^(?:[A-Za-z\s\-.,:?/]+(\s|$)|(https?|ftp)://[^\s/$.?#].[^\s]*)$~]',
                    'errors' => [
                        'regex_match' => 'The {field} field should contain text, spaces, and/or valid URLs.',
                        'required' => 'The {field} field is required.',
                    ],
                ],
            ];
        
            // Set the validation rules
            $validation->setRules($validationRules);
        
            if ($this->request->getMethod() === 'post') {
                // Validate the form
                if (! $validation->withRequest($this->request)->run()) {
                    // Validation failed, send errors to the view
                    $data['validation'] = $validation;
                } else {
                    // Validation passed, insert the data into the database
                    $title = $this->request->getPost('title');
                    $notice = $this->request->getPost('notice');
                    $dataToInsert = ['title' => $title, 'notice' => $notice];
        
                    // Insert data into the database
                    if ($noticeModel->insert($dataToInsert)) {
                        // Redirect upon successful insertion
                        return redirect()->to('/dashboard');
                    }
                }
            }
        
            return view('include/tempdash', $data);
        }

    public function requestt()
    {
      
        $data = [];
        $data['main_content'] = 'requestt';
        $db = \Config\Database::connect();
        $wasteModel = new wasteModel();
        $builder = $db->table('waste');
        $builder->join('users', 'users.id=waste.id');
        $builder->where('waste.status', "pending");
        $data['get'] = $builder->get()->getResultArray();
        return view('include/template', $data);
        
    }
    public function editpage($wid, $id)
    {

        $data = [];
        $db = \Config\Database::connect();
        $builder = $db->table('waste');
        $builder->join('users', 'users.id=waste.id');
        $data['gets'] = $builder->get()->getResultArray();


        $wasteModel = new WasteModel();
      

        $data['main_content'] = 'requestt';
        if ($this->request->getMethod() == 'post') {

          
            $days = $this->request->getPost('days');
            $from = $this->request->getPost('from');
           
           
            $dat = array('days' => $days, 'from' => $from ,'status' => "Approved");

            $query = $wasteModel->update($wid, $dat);

           
            if ($query) {

                return  redirect()->to('/requestt');
            }



        
            return view('requestt', $data);
        }
        return view('include/tempdash', $data);
    }
    public function deletpage($id)
    {
        $wasteModel = new WasteModel();
        if ($wasteModel->where('wid', $id)->delete()) {

            return  redirect()->to('/requestt');
        }

        return view('requestt', $data);
    }
    public function leave()
    {
        $data = [];
        $data['main_content'] = 'learning';
        $db = \Config\Database::connect();
        $wasteModel = new WasteModel();
        $builder = $db->table('waste');
        
        $cons = session()->get();
        $idd =  $cons['id'];
        $builder->select('*');
        $builder->join('users', 'users.id = waste.id');
        $builder->where('waste.id', $idd);
        $data['courses'] = $builder->get()->getResultArray();
       
        return view('include/template', $data);
        
    }

}
