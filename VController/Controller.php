<?php 
	include 'VModel/Model.php';
	include 'views/View.php';

	class Controller 
	{
		public function index()
		{
			$message = (new Model())->showPrincipal();
			return (new View())->showView();
		}
	}