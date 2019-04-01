<?php

namespace frontend\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()

    	$prodi1 = "Sisten Informasi";
    	$prodi2 = "Teknik Informatika";
    	$mahasiswa1 = "Rahmat Panji Ramadhan";
    	$mahasiswa2 = "Salima Hayati";
    	$mahasiswa3 = "Muhammad Azhar Rasyad";
    	$mahasiswa = "Muhammad Achdiat Fata"
        

    {

        return $this->render('index',[
        	'si'=>$prodi1,
			'ti'=>$prodi2,
			'mhs1'=>$mahasiswa1,
			'mhs2'=>$mahasiswa2,
			'mhs3'=>$mahasiswa3
		);
    }

}
