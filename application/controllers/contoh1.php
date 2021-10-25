<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller 
{

	public function index()
	{
		echo "<h1> Perkenalkan </h1>";
		echo "Nama saya Apriliyanti <br>
			Saya tinggal di Pangulah Baru <br>
			Olahraga yang saya sukai adalah 
			Dancer dan menyanyi";
	}
}