<?php 

class Model
{
		// Método que mostra a view principal
	public function showPrincipal()
	{
		echo $pscreen = file_get_contents("views/html/principal.php");
	}
		// MÉTODOS PARA INSERIR ALUNO
	public function insert()
	{
		$student_name = $_POST["stname"];
		$course_name = $_POST["csrname"];

		if (isset($student_name) && isset($course_name)) {
			$conex = new PDO("mysql:host=localhost;dbname=cvdd",'root','123');
			$inst = $conex->prepare('INSERT INTO cvdd.aluno (name,curso) VALUES(:name,:curso);');
			$inst->bindValue(':name',$_POST["stname"]);
			$inst->bindValue(':curso',$_POST["csrname"]);
			$inst->execute();
		}
	}
	public function read()
	{
		$conex = new PDO("mysql:host=localhost;dbname=cvdd",'root','123');
		$result = $conex->prepare("SELECT * FROM cvdd.aluno");
		if ($result->execute()) {
			foreach ($result as $value) {
					echo '<tr><td>There something</td></tr><tr><td>There something</td></tr>';	
			}
		}

	}
}
