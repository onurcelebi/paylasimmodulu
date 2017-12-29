<?php

use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;


$this->title = 'Create paylasimmodulu';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;



$this->params['pageTitle'] 	= $this->title;
$this->params['pageDesc'] 	= 'describes the paylasimmodulu features';

$data['model']          = $model;
$data['uploadImage']    = $uploadImage;
$formView	            = $this->render('_form',$data);

Portlet::begin(['title' => $this->title, 'icon' => 'glyphicon glyphicon-cog']);

    echo $this->render('create', ['formView' => $formView]);

Portlet::end();




	