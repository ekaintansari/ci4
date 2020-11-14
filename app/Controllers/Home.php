<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
public function show(){
	$data['Nama'] = 'Eka Intan Sari';
	$data['NPM'] = '1817051022';

	echo view('Mahasiswa/header');
	echo view('Mahasiswa/index',$data);
	echo view('Mahasiswa/footer');
}
	//--------------------------------------------------------------------

}
