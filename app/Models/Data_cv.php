<?php
namespace App\Models;
use CodeIgniter\Models;


class Data_cv extends Models
{
	protected $table = 'identitas'

	public function getIdentitas($id = false)
	{
		if ($id === false) {
			return $this->findAll();
		}else{
			return $this->getWhere(['id' => $id]); 
		}
	}
}