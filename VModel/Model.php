<?php 
	class Model
	{
		// Método que mostra a view principal
		public function showPrincipal()
		{

		echo $pscreen = file_get_contents("views/html/principal.html");

		}
	}