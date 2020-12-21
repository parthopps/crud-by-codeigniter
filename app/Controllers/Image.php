<?php 
namespace App\Controllers;
use App\Models\ImageModel;

class Image extends BaseController
{

	public function index()
	{
		$model = new ImageModel();
		$booksArray = $model->getRecords();
		$data['books'] = $booksArray;
		return view('image/list',$data);
	}

	public function create()
	{
		return view('image/index');
	}
	public function createstore()
	{
	
        //  $file = $this->request->getfile('image');
        //  $des = $this->request->getPost('des');
        //  $name = $file->getName();
        //  echo $name."</br>";
        // // var_dump($file);
        //  echo $des."</br>";

        //     $file = $this->request->getfile('image');
        //      if($file->isValid())
        //      {
        //      	$file->move('./public/upload');
        //      }



		$session = \Config\Services::session();
		helper('form');
		$data =[];

		if($this->request->getMethod() == 'post'){
			$input = $this->validate([
                 
               'des' =>'required',
               


			]);

			if($input == true)
			{
             $model = new ImageModel();
              $file = $this->request->getfile('image');
          //$des = $this->request->getPost('des');
          $name = $file->getName();

             $model->save([

              'des' => $this->request->getPost('des'),
              'image' => $name,
             

             ]);

             $file = $this->request->getfile('image');
             if($file->isValid())
             {
             	$file->move('./public/upload');
             }

             $session->setFlashdata('success','winner');
             return redirect()->to('/books');

			}else{
				//ffd
				$data['validation'] = $this->validator;
			}
		}
      return view('image/index',$data);
    }

}	