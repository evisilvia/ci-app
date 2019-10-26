<?php  

//config
$config['base_url'] = 'http://localhost/ci-app/Peoples/index';
$config['num_links'] = 5;

//stayling
$config['full_tag_open'] ='<nav><ul class ="pagination justify-content-center">';
$config['full_tag_close'] = '</ul></nav>';

$config['first_link'] = 'First';
$config['first_tag_open'] = '<li class="page-item">';
$config['first_tag_close'] = '</li>';

$config['first_link'] = 'Last';
$config['first_tag_open'] = '<li class="page-item">';
$config['first_tag_close'] = '</li>';

$config['first_link'] = '&raquo';
$config['first_tag_open'] = '<li class="page-item">';
$config['first_tag_close'] = '</li>';

$config['first_link'] = '&laquo';
$config['first_tag_open'] = '<li class="page-item">';
$config['first_tag_close'] = '</li>';

$config['full_tag_open'] ='<li class="page-item active"><a class="page-link" href="#">';
$config['full_tag_close'] = '</a></li>';

$config['full_tag_open'] ='<li class="page-item">';
$config['full_tag_close'] = '</li>';

$config['attributes'] = array('class' => 'page-link');
 ?>