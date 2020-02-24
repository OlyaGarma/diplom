<?php

namespace Olgagarma\Diplom\Controllers;

use Olgagarma\Diplom\Core\Controller;

class ContactController extends Controller
{
	
	public function index()
	{
		$title = 'Контакты';
		$content = 'contact/contact.php'; 
		$data =[
			'title'=> $title,
			 
		];
		return parent::generateResponse($content,$data);
	}

}