<?php 
include 'VModel/Model.php';
include 'views/View.php';

class Controller 
{

	public function index()
	{
		 $message = (new Model())->showPrincipal();
		 (new View($message))->showView();
		 $this->receiveInsert();
	}

	public function receiveInsert()
	{
		 $student_name = $_POST["stname"];
		 $course_name = $_POST["csrname"];
		 $msg = new Model;
		 $msg->insert();
	}
}