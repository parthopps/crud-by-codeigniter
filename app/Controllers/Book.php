<?php 
namespace App\Controllers;
use App\Models\BookModel;

class Book extends BaseController
{
	public function index()
	{
		$model = new BookModel();
		$booksArray = $model->getRecords();
		$data['books'] = $booksArray;
		return view('books/list',$data);
	}

	public function create()
	{

		$session = \Config\Services::session();
		helper('form');
		$data =[];

		if($this->request->getMethod() == 'post'){
			$input = $this->validate([
                 
               'name' =>'required',
               'author' =>'required'


			]);

			if($input == true)
			{
             $model = new BookModel();

             $model->save([

              'name' => $this->request->getPost('name'),
              'author' => $this->request->getPost('author'),
              'isbn_no' => $this->request->getPost('isbn_no')

             ]);

             $session->setFlashdata('success','winner');
             return redirect()->to('/books');

			}else{
				//ffd
				$data['validation'] = $this->validator;
			}
		}
      return view('books/create',$data);
    }

    public function edit($id)
    {
    	$session = \Config\Services::session();
		helper('form');

		$model = new BookModel();

		$book = $model->getRow($id);

        if(empty($book)){
        	return redirect()->to('/books');
        }





		$data =[];
		$data['book'] =$book;

		if($this->request->getMethod() == 'post'){
			$input = $this->validate([
                 
               'name' =>'required',
               'author' =>'required'


			]);

			if($input == true)
			{
             $model = new BookModel();

             $model->update($id,[

              'name' => $this->request->getPost('name'),
              'author' => $this->request->getPost('author'),
              'isbn_no' => $this->request->getPost('isbn_no')

             ]);

             $session->setFlashdata('success','winner');
             return redirect()->to('/books');

			}else{
				//ffd
				$data['validation'] = $this->validator;
			}
		}
      return view('books/edit',$data);
    }

	//--------------------------------------------------------------------

	public function delete($id)
	{
		$session = \Config\Services::session();
		

		$model = new BookModel();

		$book = $model->getRow($id);

        if(empty($book))
        {
        	return redirect()->to('/books');
        }

        $model = new BookModel();

		$model->delete($id);


		
		return redirect()->to('/books');
	}

}
