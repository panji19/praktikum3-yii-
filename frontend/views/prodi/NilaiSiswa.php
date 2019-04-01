<?php
namespace fronend\models;

class NilaiSiswa{
	public $nama;
	public $nim;
	public $nilai;

	//konstructor class nim, nama

	public fuction__construct($nim, $nama)
		$this->nim = $nim;
		$this->nama = $nama;
	}

	public function kelulusan(){
		if($this->nilai > 55)
			return "LULUS"
			}
