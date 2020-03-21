<?php namespace App\Controllers;
use App\Models;
use App\Models\TestModel;
use App\Controllers\BaseController;


class Test extends BaseController
{

	public function __construct()
	{
		if(! session()->get('username'))
		{
			return redirect()->to('/login/index');
			exit();
			
		}
	}
	
	public function index()
	{
	
		echo view('sidebar/index');
	}

	public function view()
	{
		
		echo view('sidebar/view');
	}

	public function viewsession()
	{
		$TestModel = new TestModel();
		$data['fetch'] = $TestModel->viewData();
		echo view('sidebar/viewcode', $data);
	}


	public function create()
	{
		if(! isset($_POST['submit']))
		{
		 	return redirect()->to('error_404');
		 	exit();
		} 

			$validation =  \Config\Services::Validation();
			if(! $this->validate([
				'firstname' => 'required|trim',
				'lastname' => 'required|trim',
				'dob' => 'required',
				'year' => 'required', 	
				'cert' => 'required',
				'gender'=> 'required'

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

				$pic = $this->request->getFile('photo');
				if($pic->isValid())
				{
					//let set the rules
					$profile_pic = [
					'photo' => ['label' => 'Image', 'rules' => 'uploaded[photo]|max_size[photo,2048]|is_image[photo]',
					'errors'=>[
						'max_size' => 'The uploaded image not accepted',
						'is_image' => 'Image format not accepted'
					]]];

					//now let validate the picture
					if(!$this->validate($profile_pic))
					{
						//let store the error here
						$errors = array(
							'error' => $validation->listErrors('error_msg')
						);
						//show the error
						session()->setFlashdata($errors);
						return redirect()->back()->withInput();
					}
					else
					{
						//this is to get random
						$name = $pic->getRandomName();
						$pic->move('./assets/images/',$name);
					} 
					
					
				} else{
					//incase there is no image to send
					$name = 'profile.jpg';
				}

				//paste database connection here
				$data = array(
					'firstname' => $this->request->getPost('firstname'),
					'lastname' => $this->request->getPost('lastname'),
					'gender' => $this->request->getPost('gender'),
					'dob' => $this->request->getPost('dob'),
					'cert_number' => $this->request->getPost('cert'),
					'year_of_award' => $this->request->getPost('year'),
					'image' => $name
					
				);

				$TestModel = new TestModel();
				if($TestModel->createNewProject($data))
				{
					session()->setFlashdata('error', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<strong>Data inserted Successfully</strong> 
				  </div>');
				
				  return redirect()->back();
				}
			}
	}

	public function deletecert($id)
	{
		$TestModel = new TestModel();
		$TestModel->deleteit($id);
		return redirect()->back();
		
	}

	public function showsingle($id)
	{
		$TestModel = new TestModel();
		$data['single'] = $TestModel->show($id);
		echo view('sidebar/single', $data);
	}

	public function updateit($id)
	{
		$TestModel = new TestModel();
		$data['viewSingleData'] = $TestModel->viewSingleData($id);
		echo view('sidebar/update', $data);
	}

	public function validateUpdate($id)
	{
		if(! isset($_POST['submit']))
		{
		 	return redirect()->to('error_404');
		 	exit();
		} 

			$validation =  \Config\Services::Validation();
			if(! $this->validate([
				'firstname' => 'required|trim',
				'lastname' => 'required|trim',
				'dob' => 'required',
				'year' => 'required', 	
				'cert' => 'required',
				'gender'=> 'required'

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
				$pic = $this->request->getFile('photo');
				if($pic->isValid())
				{
					//let set the rules
					$profile_pic = [
					'photo' => ['label' => 'Image', 'rules' => 'uploaded[photo]|max_size[photo,2048]|is_image[photo]',
					'errors'=>[
						'max_size' => 'The uploaded image not accepted',
						'is_image' => 'Image format not accepted'
					]]];

					//now let validate the picture
					if(!$this->validate($profile_pic))
					{
						//let store the error here
						$errors = array(
							'error' => $this->validation->listErrors('error_msg')
						);
						//show the error
						session()->setFlashdata($errors);
						return redirect()->back()->withInput();
					}
					else
					{
						//this is to get random
						$name = $pic->getRandomName();
						$pic->move('./assets/images/',$name);
					}
					//incase there is no image to send
					
				} else
				{
					$name = 'profile.jpg';
				}

				//paste database connection here
				$data = array(
					'firstname' => $this->request->getPost('firstname'),
					'lastname' => $this->request->getPost('lastname'),
					'gender' => $this->request->getPost('gender'),
					'dob' => $this->request->getPost('dob'),
					'cert_number' => $this->request->getPost('cert'),
					'year_of_award' => $this->request->getPost('year'),
					'image' => $name
					
				);

				$id = $this->request->getPost('hidden');
				$TestModel = new TestModel();
				if($TestModel->updateTheData($data, $id))
				{
					session()->setFlashdata('error', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					<strong>Data Updated Successfully</strong> 
				  </div>');

				  return redirect()->back();
			
			}
				
			}
			
	}	
	
	public function send_mail()
	{
		$email = \Config\Services::email();
		
		$config['protocol'] = 'smtp';
		$config['SMTPHost'] = 'smtp.mailtrap.io';
		$config['SMTPUser'] = '7190e63df9a396';
		$config['SMTPPass'] = '3dac43c739a9b3';
		$config['SMTPPort'] = 25;
		$config['SMTPCrypto'] = 'tls';
		$config['mailType'] = 'html';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		
		
		$email->initialize($config);

		$email->setFrom('brainyworld@example.com', 'Brainyworld');
		$email->setTo('usmantijani@example.com');

		$email->setSubject('Email Test');
		$email->setMessage('Testing the email class.');

		$email->send(false);
		echo $email->printDebugger(['header']);
		

			}

}