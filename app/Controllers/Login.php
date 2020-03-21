<?php namespace App\Controllers;


use App\Models\LoginModel;
use App\Controllers\BaseController;


class Login extends BaseController
{
    public function __construct()
    {
       
    }

    public function index()
    {
        
        return view('loginuser');

    }

    //To verify login user
    public function create()
    {
        if(!isset($_POST['submit']))
        {
            return redirect()->to('error_404');
        } 
        else
        {
           $validation = \Config\Services::Validation();
           if(!$this->validate([
               'email' => 'required|trim',
               'pass' => 'required|trim'
           ]))

           {
               $errors = array(
                   'error' => $validation->listErrors('error_msg')
               );
               session()->setFlashdata($errors);
               return redirect()->back();
           } 
           else
           {
               $user = $this->request->getPost('email');
               $pass = $this->request->getPost('pass');

               $LoginModel = new LoginModel();
               $userid = $LoginModel->passGate($user, $pass);
                if($LoginModel->passGate($user, $pass))
                {
                    $data = array(
                        'userid' => $userid,
                        'username' => $user,
                        'islogin' => true
                    );
                    $session = session();
                    $session->set($data);
                      
                    return redirect()->to('/test/index');
                }
                else{

                    session()->setFlashdata('error', '<div class="alert alert-primary" role="alert">
                    <strong>Invalid login details</strong>
                </div>');
                return redirect()->back();

                }
           }
        }

    }

    public function welcome()
    {
        if(isset($_SESSION['username']))
        {
            echo  '<h2>Welcome to our official page  </h2>';
            echo session()->get('username');
        } else

        {
            echo 'No session';
        }
       
    }


}

