<?php

namespace frontend\controllers;

class ProdiController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$prodi1 = "Sisten Informasi";
    	$prodi2 = "Teknik Informatika";
    	$dosen1 = "Sirojul Munir";
    	$dosen2 = "Amaliah Rahmah";
    	$dosen3 = "Rio Adriansyah";
        

        return $this->render('index',[
        	'si'=>$prodi1,
			'ti'=>$prodi2,
			'dsn1'=>$dosen1,
			'dsn2'=>$dosen2,
			'dsn3'=>$dosen3

        ]);
 


    }

}
