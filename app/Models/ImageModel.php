<?php
namespace App\Models;
use CodeIgniter\Model;
/**
 * 
 */
class ImageModel extends Model
{

	protected $table ='imagetest';
	protected $allowedFields =['des','image'];


	public function getRecords()
	{
		return $this->orderBy('id','desc')->findAll();
	}

}
