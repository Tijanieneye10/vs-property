<?php namespace App\Controllers;

use App\Models\RegModel;
use App\Models\TestModel;
use App\Controllers\BaseController;

class Registration extends BaseController
{

    public function index()
    {
       echo view('frontend/checkit');
    }
    public function index1()
    {
        return view('register');
    }

    public function reg()
    {
        $validation = \Config\Services::Validation();
        if(!$this->validate([
            'email' => 'required|trim',
            'pass' => 'required|trim',
            'cpass' => 'required|trim|matches[pass]'
        ]))
        {
            $errors = array(
                'error' => $validation->listErrors('error_msg')
            );
            session()->setFlashdata($errors);
            return redirect()->back();
        } else
        {
            $passit = $this->request->getPost('pass');
            $password = password_hash($passit, PASSWORD_BCRYPT);

            $data = array(
                'user' => $this->request->getPost('email'),
                'pass' => $password
            );

            $regModel = new RegModel;
            if($regModel->regUser($data))
            {
                session()->setFlashdata('error', '<div class="alert alert-success" role="alert">
                <strong>Registration Successful!</strong>
            </div>');
            return redirect()->back();
            }

        }
    }

     public function verifycert()
    {
        $validation =  \Config\Services::Validation();
			if(! $this->validate([
				'name' => 'required|trim',
			

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
                $user = $this->request->getPost('name');
                $regModel = new RegModel();

                $userid = $regModel->checkcert($user);

                if($regModel->checkcert($user))
                {
                    $data = array(
                        'id' => $userid,
                        'cert_number' => $user,
                        'islogin' => true
                    );

                    
                    session()->set($data);
                      
                    return redirect()->to('/registration/verify');
                
                } else

                {
                    session()->setFlashdata('error', '<div class="alert alert-danger text-center" role="alert">
                    <strong>Data not found </strong>
                </div>');
                return redirect()->back();
                }

			}
    }
            //Verify the certificate
            public function verify()
                {
                    $sess = $_SESSION['cert_number'];
                    $regModel = new RegModel();
                    $data['sess'] =  $regModel->viewSession($sess);
                    echo view('frontend/verify', $data);
                }

            //logout 
            public function logout()
            {
                session()->stop();
                return redirect()->to('/registration/index');
            }

}