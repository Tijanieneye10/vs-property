$pic = $this->request->getFile('image');
				var_dump($pic);
				exit();
					
				
					// if($pic->isValid())

					// {
						
					// 	//store the error in the next variaable
					// 	$picture_error = ['label'=> 'image', 'rules' => 'uploaded[image]|max_size[image,4506]|ext_in[image,png,jpg]', 
					// 	['errors'=>[
					// 	//manual error showing
					// 		'max_size' => 'Image file too big',
					// 		'ext_in' => 'File extension not accepted'
					// 	]]];
					// //validate the picture_error
					// // if(!$this->validate($picture_error))
					// // {
					// // 	$errors = array(
					// // 		'error' => $this->validation->listErrors('error_msg')
					// // 	);
					// // 	//return the error
					// // 	session()->setFlashdata($errors);
					// // 	return redirect()->back()->withInput();
					// // } else
					// // {
					// // 	//change the name of the picture to avoid collision in database
					// // 	$image = $pic->getRandomName();
					// // 	$pic->move('./assets/images', $image);
					// // }
					// } else

					{
						
					}
				
					$data = array(
						'firstname' => $this->request->getPost('firstname'),
						'lastname' => $this->request->getPost('lastname'),
						'gender' => $this->request->getPost('gender'),
						'dob' => $this->request->getPost('dob'),
						'cert_number' => $this->request->getPost('cert'),
						'year_of_award' => $this->request->getPost('year'),
						'image' => $image
						
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
