<?php

namespace App\Controllers;

use App\Models\DataDiri;

class Portofolio extends BaseController
{
    public function __construct()
    {
        $this->identitas = new DataDiri();
    }

    public function index(){
    	return view('portofolio/cv_dua', ['identitas'=> $this->identitas->first()]);
    }

    public function add(){
    	return view('portofolio/add');
    }

    public function ubah(){
        return view('portofolio/ubah');
    }

    public function simpan(){
    	$this->identitas->save(
    		[
    			'nama'=> $this->request->getvar('nama'),
    			'ttl'=> $this->request->getvar('ttl'),
    			'alamat'=> $this->request->getvar('alamat'),
    			'hobi'=> $this->request->getvar('hobi'),
    		]
    	);
    	return redirect()->to('/portofolio');
    }

     public function update()
    {
        $model = new DataDiri;
        $id = $this->request->getPost('id');
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'ttl'  => $this->request->getPost('ttl'),
            'hobi'  => $this->request->getPost('hobi')
        );
        $model->editIdentitas($data,$id);
        echo '<script>
                alert("Sukses Edit Data Barang");
                window.location="'.base_url('portofolio').'"
            </script>';

    }
}
