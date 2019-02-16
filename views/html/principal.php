<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta charset="utf-8">
	<title>Crud-CVDD</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css" />
	<link rel="stylesheet" type="text/css" href="../views/css/first_page.css">
</head>
<body>
	<h1 class="ui header">Gerenciamento do Alunos</h1>
	<div class="ui top attached tabular menu">
		<a class="item active" data-tab="first">Alunos</a>
		<a class="item" data-tab="second">Cursos</a>
	</div>
	<div class="ui bottom attached tab segment active" data-tab="first">
		<div class="ui segment">
			<button class="ui secondary button" id="add"><i class="ui add icon"></i>Adc. Aluno</button>
			<table class="ui celled table">
				<tr>
					<th>
						<h3>Nome</h3>
					</th>
					<th>
						<h3>Curso</h3>
					</th>
				</tr>
			</table>
		</div>
	</div>
	<!-- <div class="ui bottom attached tab segment" data-tab="second">
		<button class="ui primary button" id="addc"><i class="ui add icon"></i>Adc. Curso</button>
		<table class="ui celled table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Curso</th>
					<th>Status Curso</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	-->
	<div class="ui segment">
		<div class="ui modal modal1">
			<i class="close icon"></i>
			<div class="header">
				Adicionar Aluno
			</div>
			<div class="ui segment">
				<form class="ui form" method="POST" action="<?=$controller->receiveInsert()?>">
					<div class="field">
						<label>Nome</label>
						<input type="text" name="stname" placeholder="Nome Aluno" autocomplete="off">
					</div>
					<div class="field">
						<label>Curso</label>
						<input type="text" name="csrname" placeholder="Nome Curso" autocomplete="off">
					</div>

				</div>
				<div class="actions">
					<button class="ui secondary button" type="submit">
						<i class="checkmark icon"></i>
						Adicionar
					</button>
				</form>
			</div>
		</div>

			<!-- <div class="ui modal modal2">
				<i class="close icon"></i>
				<div class="header">
					Adicionar Curso
				</div>
				<div class="ui segment">
					<form class="ui form">
						<div class="field">
							<label>Nome Cursos</label>
							<input type="text" name="first-name" placeholder="Nome Curso" autocomplete="off">
						</div>
						<div class="field">
							<select class="ui dropdown">
								<option value="">Curso Status</option>
								<option value="">Ativo</option>
								<option value="">Inativo</option>
							</select>
						</div>
					</form>
				</div> 
				<div class="actions">
					<div class="ui positive right labeled icon button">
						Adicionar
						<i class="checkmark icon"></i>
					</div>
				</div>
			</div>-->

			<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.js"></script>
			<script type="text/javascript" src="../views/js/first_script.js"></script>
		</body>
		</html>