<?php

namespace application\controllers;

use application\models\AdminModel;
use application\models\CourseModel;
use application\models\EnrollModel;
use application\models\AdmiModel;
use application\models\MasterModel;
use application\models\PaymentModel;
use application\libraries\Hash;

class Home extends BaseController
{
    protected $helpers = ['url', 'form'];


    public function index()
    {
        $data = [];
        $data['main_content'] = 'admincont/addash';
        return view('include/tempdash', $data);
    }


    public function adminlogin()
    {
        $this->setcheck();
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[3]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[50]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password not match'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $email = $this->request->getPost('email');
                $masterModel = new MasterModel();
                $master = $masterModel->where('email', $this->request->getPost('email'))->first();
                if ($this->request->getPost('password') == $master['password']) {
                    $this->setAdminSession($master);
                    return redirect()->to('addash');
                } else {
                    $data['Flash_message'] = TRUE;
                    return redirect()->to('/adminlogin');
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



    public function learning()
    {
        $this->setcheck();
        $data = [];
        $data['main_content'] = 'learning';
        $cons = session()->get();
        $idd =  $cons['id'];
        $db = \Config\Database::connect();
        $enrollModel = new EnrollModel();
        $builder = $db->table('enroll');
        $builder->select()->join('courses', 'courses.co_id=enroll.co_id')->where('id', $idd);
        $data['courses'] = $builder->get()->getResultArray();
        return view('include/template', $data);
    }



    public function addcourse()
    {

        $data = [];
        if ($this->request->getMethod() == 'post') {
            $courseModel = new CourseModel();
            $course = $this->request->getPost('cname');
            $price = $this->request->getPost('price');
            $teacher = $this->request->getPost('tname');
            $data = ['course' => $course, 'price' => $price, 'teacher' => $teacher];
            $query = $courseModel->insert($data);
            if ($query) {
                return  redirect()->to('/courses');
            }
        }
        $data['main_content'] = 'admincont/addcourse';
        return view('admincont/addcourse', $data);
    }

    public function activedetail()
    {
        $data = [];
        $data['main_content'] = 'detail';
        $this->setcheck();
        $db = \Config\Database::connect();
        $enrollModel = new EnrollModel();
        $builder = $db->table('enroll');
        $builder->join('admin', 'admin.id=enroll.id');
        $builder->join('courses', 'courses.co_id=enroll.co_id');
        $data['userdata'] = $builder->where('status', "Active")->get()->getResultArray();
        return view('include/tempdash', $data);
    }
    public function duedetail()
    {
        $data = [];
        $data['main_content'] = 'detail';
        $this->setcheck();
        $db = \Config\Database::connect();
        $enrollModel = new EnrollModel();
        $builder = $db->table('enroll');
        $builder->join('admin', 'admin.id=enroll.id');
        $builder->join('courses', 'courses.co_id=enroll.co_id');
        $data['userdata'] = $builder->where('status', "Due")->get()->getResultArray();
        return view('include/tempdash', $data);
    }



    public function enroll($co_id)
    {
        $data = [];

        // $da['main_content']='enroll';
        $cons = session()->get();
        $id =  $cons['id'];
        $courseModel = new CourseModel();


        $data['usdata'] = $courseModel->where('co_id', $co_id)->findAll();
        if ($this->request->getMethod() == 'post') {

            $validated = $this->validate([
                'image' => [
                    'uploaded[image]',
                    'mime_in[image,image/jpg,image/jpeg,image/png]',
                    'max_size[image,4096]',
                ],
            ]);

            if (!$validated) {
                return view('enroll', [
                    'validation' => $this->validator
                ]);
            }

            // Grab the file by name given in HTML form
            $file = $this->request->getFile('image');

            // Generate a new secure name
            $imgname = $file->getRandomName();

            // Move the file to the directory
            $file->move('uploads', $imgname);

            $enrollModel = new EnrollModel();
            $trans = $this->request->getPost('tran');
            $mode = $this->request->getPost('mode');
            $amount = $this->request->getPost('amount');



            $data = ['co_id' => $co_id, 'id' => $id, 'trans_id' => $trans, 'mode' => $mode, 'amount' => $amount,  'status' => "pending", 'duration' => 0, 'img' => $imgname];
            $query = $enrollModel->insert($data);
            if ($query) {
                return  redirect()->to('/courses');
            }
            return view('enroll', $data);
        }
        return view('enroll', $data);
    }

    public function renew($er_id)
    {
        $data = [];
        $db = \Config\Database::connect();
        $builder = $db->table('enroll');
        $builder->join('courses', 'courses.co_id=enroll.co_id')->where('er_id', $er_id);
        $data['usda'] = $builder->get()->getResultArray();

        $enrollModel = new EnrollModel();

        if ($this->request->getMethod() == 'post') {



            $validated = $this->validate([
                'image' => [
                    'uploaded[image]',
                    'mime_in[image,image/jpg,image/jpeg,image/png]',
                    'max_size[image,4096]',
                ],
            ]);

            if (!$validated) {
                return view('admincont/renew', [
                    'validation' => $this->validator
                ]);
            }

            // Grab the file by name given in HTML form
            $file = $this->request->getFile('image');

            // Generate a new secure name
            $imgname = $file->getRandomName();

            // Move the file to the directory
            $file->move('uploads', $imgname);

            $trans = $this->request->getPost('tran');
            $mode = $this->request->getPost('mode');
            $amount = $this->request->getPost('amount');

            $dat = array('trans_id' => $trans, 'mode' => $mode, 'amount' => $amount,  'status' => "pending", 'img' => $imgname);
            $query = $enrollModel->update($er_id, $dat);
            if ($query) {
                return  redirect()->to('/My_learning');
            }
            return view('admincont/renew', $data);
        }


        return view('admincont/renew', $data);
    }









    public function request()
    {
        $dat = [];
        $enrollModel = new EnrollModel();
        $dat['main_content'] = 'admincont/request';


        $db = \Config\Database::connect();

        $enrollModel = new EnrollModel();
        $builder = $db->table('enroll');
        $builder->join('admin', 'admin.id=enroll.id');
        $builder->join('courses', 'courses.co_id=enroll.co_id');
        $dat['usdata'] = $builder->where('status', "pending")->get()->getResultArray();




        return view('include/tempdash', $dat);
    }






    public function edit($er_id, $id)
    {

        $data = [];
        $db = \Config\Database::connect();
        $builder = $db->table('enroll');
        $builder->join('admin', 'admin.id=enroll.id');
        $builder->join('courses', 'courses.co_id=enroll.co_id')->where('er_id', $er_id);
        $data['usdata'] = $builder->get()->getResultArray();


        $enrollModel = new EnrollModel();
        $payModel = new PaymentModel();

        $data['main_content'] = 'admincont/request';
        if ($this->request->getMethod() == 'post') {

            $mode = $this->request->getPost('mode');
            $trans = $this->request->getPost('trans');
            $amount = $this->request->getPost('amount');
            $startdate = $this->request->getPost('startdate');
            $validtill = $this->request->getPost('validtill');
            $status = $this->request->getPost('status');
            $findimg = $enrollModel->select('img')->where('er_id', $er_id)->findAll();
            $img = $findimg[0]['img'];

            if ($status === "Due") {
                $dat = array('status' => "Due");

                $quer = $enrollModel->update($er_id, $dat);
                if ($quer) {
                    return  redirect()->to('/request');
                }
            }
            $datestart = strtotime($startdate);
            $dateend = strtotime($validtill);
            $date3 = $dateend + (60 * 60 * 24);
            $renewdate = date('Y-m-d', $date3);


            $currentdate = strtotime(date('Y-m-d'));

            $diff = $date3 - $currentdate;
            $duration = floor($diff / (60 * 60 * 24));

            $dat = array('duration' => $duration, 'renewdate' => $renewdate, 'startdate' => $startdate, 'validtill' => $validtill, 'status' => $status);

            $query = $enrollModel->update($er_id, $dat);

            $paydat = array('id' => $id, 'start_date' => $startdate, 'end_date' => $validtill, 'trans_id' => $trans, 'mide' => $mode, 'amount' => $amount, 'img' => $img);

            $query2 = $payModel->insert($paydat);

            if ($query && $query2) {

                return  redirect()->to('/request');
            }




            return view('admincont/request', $data);
        }
        return view('include/tempdash', $data);
    }
    public function delet($id)
    {
        $enrollModel = new EnrollModel();
        if ($enrollModel->where('er_id', $id)->delete()) {

            return  redirect()->to('/request');
        }

        return view('admincont/request', $data);
    }


    public function student()
    {
        $data = [];

        $courseModel = new CourseModel();
        $cons = session()->get();
        $email =  $cons['email'];

        $db = \Config\Database::connect();

        $enrollModel = new EnrollModel();
        $builder = $db->table('enroll');
        $builder->select()->join('admin', 'admin.id=enroll.id');
        $res = $builder->join('courses', 'courses.co_id=enroll.co_id');

        $builder->where('courses.email', $email);
        $data['admin'] = $builder->get()->getResultArray();



        if ($this->request->getMethod() == 'post') {

            $courseModel = new CourseModel();
            $con = session()->get('email');

            $da = $courseModel->where('email', "$con")->findAll();

            $code = $this->request->getPost('code');

            foreach ($da as $key => $ad) {

                if ($ad['co_id'] == $code) {

                    //     $db =\Config\Database::connect();

                    // $enrollModel = new EnrollModel();
                    $builder = $db->table('enroll');
                    $builder->select()->join('admin', 'admin.id=enroll.id');
                    $builder->join('courses', 'courses.co_id=enroll.co_id');
                    $data['admin'] = $builder->where('courses.co_id', "$code")->get()->getResultArray();
                }
            }
        }
        $data['main_content'] = 'students';

        return view('include/thead', $data);
    }


    public function teachlogin()
    {
        $this->setcheck();
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {


            $rules = [

                'email' => 'required|min_length[3]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[50]',

            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password not match'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {



                $password = $this->request->getPost('password');

                $adModel = new AdmiModel();
                $cour = $adModel->where('email', $this->request->getPost('email'))->first();


                if ($this->request->getPost('password') == $cour['password']) {


                    $this->setteacherSession($cour);

                    return redirect()->to('student');
                } else {

                    $data['Flash_message'] = TRUE;
                    return redirect()->to('/teachlogin');
                }
            }
        }
        return view('teacherlogin', $data);
    }

    public function teachsignup()
    {

        $data = [];
        helper('form');
        if ($this->request->getMethod() == 'post') {


            $rules = [
                'fname' => 'required|min_length[3]|max_length[20]',
                'lname' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[3]|max_length[50]|valid_email|is_unique[admin.email]',
                'password' => 'required|min_length[8]|max_length[50]',
                'confirm_password' => 'matches[password]',

            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {

                $fname = $this->request->getPost('fname');
                $lname = $this->request->getPost('lname');
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');
                $phone = $this->request->getPost('phone');


                $da = ['name' => $fname . " " . $lname, 'email' => $email, 'password' => $password, 'phone' => $phone];

                $aModel = new AdmiModel();

                $query = $aModel->insert($da);

                $admin = $aModel->where('email', $email)->first();
                if (!$query) {
                    $data['Flash_message'] = TRUE;

                    return redirect()->to('/teachsignup');
                } else {

                    $data['Flash_message'] = FALSE;
                    $this->setteacherSession($admin);

                    return redirect()->to('/teachprofile');
                }
            }
        }
        return view('teachersignup', $data);
    }
    private function setteacherSession($cour)
    {

        $data = [

            'id' => $cour['id'],
            'email' => $cour['email'],
            'name' => $cour['name'],
            'phone' => $cour['phone'],
            'isLoggInteach' => true,


        ];
        session()->set($data);
        return true;
    }



    private function setcheck()
    {
        $data = [];

        $db = \Config\Database::connect();

        $enrollModel = new EnrollModel();
        $master = $db->table('enroll');

        $mast = $master->get()->getResultArray();

        foreach ($mast as $key => $va) {

            $dateend = strtotime($va['validtill']);
            $date3 = $dateend + (60 * 60 * 24);


            $currentdate = strtotime(date('Y-m-d'));

            $diff = $date3 - $currentdate;
            $duration = floor($diff / (60 * 60 * 24));


            if ($va['status'] !== "pending") {
                if ($duration > 0) {
                    $dat = array('duration' => $duration, 'status' => "Active");
                    $query = $enrollModel->update($va['er_id'], $dat);
                }


                if ($duration <= 0) {

                    $dat = array('duration' => $duration, 'status' => "Due");
                    $query = $enrollModel->update($va['er_id'], $dat);
                }
            }
        }

        return redirect()->back();
    }


    public function authstudent()
    {
        $data = [];
        $userModel = new AdminModel();
        $teachModel = new AdmiModel();
        $data['usdata'] = $userModel->findAll();
        $data['main_content'] = 'editstudent';
        return view('include/template', $data);
    }
    public function authteacher()
    {
        $data = [];

        $teachModel = new AdmiModel();
        $data['usdata'] = $teachModel->findAll();
        $data['main_content'] = 'editteacher';
        return view('include/template', $data);
    }


    public function editmember($id, $val)
    {
        $data = [];
        helper('form');
        $userModel = new AdminModel();
        $teachModel = new AdmiModel();
        if ($val === "updatemem") {

            $active = $this->request->getPost('active');
            $name = $this->request->getPost('name');
            $phone = $this->request->getPost('phone');
            $email = $this->request->getPost('email');
            $dat = array('name' => $name, 'phone' => $phone, 'email' => $email, 'active' => $active);

            $query = $userModel->update($id, $dat);
            if ($query) {
                return redirect()->back();
            }
        }
        if ($val === "updateteach") {

            $name = $this->request->getPost('name');
            $phone = $this->request->getPost('phone');
            $email = $this->request->getPost('email');

            $dat = array('name' => $name, 'phone' => $phone, 'email' => $email);


            $query = $teachModel->update($id, $dat);
            if ($query) {
                return redirect()->back();
            }
        }
        if ($val === "deletemem") {
            $query = $userModel->where('id', $id)->delete();
            if ($query) {
                return redirect()->back();
            }
        }
        if ($val === "deleteteach") {
            $query = $teachModel->where('id', $id)->delete();
            if ($query) {
                return redirect()->back();
            }
        }
    }


    public function image($id, $val)
    {
        $data = [];

        if ($val === 'req') {
            $db = \Config\Database::connect();
            $builder = $db->table('enroll');
            $builder->where('img', $id);
            $data['usda'] = $builder->get()->getResultArray();
            return view('image', $data);
        } else {
            $db = \Config\Database::connect();
            $builder = $db->table('payment');
            $builder->where('img', $id);
            $data['usda'] = $builder->get()->getResultArray();
            return view('image', $data);
        }


        return view('image', $data);
    }
}
