<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="CSS/Formulario.css">
	<title>FORMULARIO</title>
</head>
<body>
<main>
	<img src="IMG/logo-1.jpg" class="logo">
	<img src="IMG/logo-cetis-2.png" class="logo-cetis">
	<form action="RESULTADO.php" method="post" class="formulario" id="formulario">
		<p class="formulario_instrucciones">Por favor, selecciona los siguientes datos.</p>
		<!--GRUPO KIA-->
		<div id="grupo_kia" class="formulario_grupo">
			<label for="KIA" class="formulario_label">Introduce el KIA:</label>
			<select name="KIA" id="KIA">
				<option value="A/A">A/A</option>
				<option value="Alc/A">Alc/A</option>
			</select>
		</div>

		<!--GRUPO GAS-->
		<div id="grupo_gas" class="formulario_grupo">
			<label class="formulario_label" for="GAS">Introduce le GAS:</label>
			<select name="GAS" id="GAS">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="++">++</option>
				<option value="+/-">+/-</option>
				<option value="-/+">-/+</option>
			</select>
		</div>

		<!--GRUPO H2S-->
		<div id="grupo_h2s" class="formulario_grupo">
			<label class="formulario_label" for="H2S">Introduce el H2S:</label>
			<select name="H2S" id="H2S">
				<option value="+">+</option>
				<option value="-">-</option>
			</select>
		</div>

		<!--GRUPO RM-->
		<div id="grupo_rm" class="formulario_grupo">
			<label class="formulario_label" for="RM">Introduce el RM:</label>
			<select name="RM" id="RM">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="-/+">-/+</option>
			</select>
		</div>

		<!--GRUPO IND-->
		<div id="grupo_ind" class="formulario_grupo">
			<label class="formulario_label" for="IND">Introduce el IND:</label>
			<select name="IND" id="IND">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="+/-">+/-</option>
				<option value="-/+">-/+</option>
			</select>
		</div>

		<!--GRUPO CIT-->
		<div id="grupo_cit" class="formulario_grupo">
			<label class="formulario_label" for="CIT">Introduce el CIT:</label>
			<select name="CIT" id="CIT">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="+/-">+/-</option>
				<option value="-/+">-/+</option>
			</select>
		</div>

		<!--GRUPO URE-->
		<div id="grupo_ure" class="formulario_grupo">
			<label class="formulario_label" for="URE">Introduce el URE:</label>
			<select name="URE" id="URE">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="++">++</option>
				<option value="+/-">+/-</option>
				<option value="-/+">-/+</option>
			</select>
		</div>

		<!--GRUPO MOV-->
		<div id="grupo_mov" class="formulario_grupo">
			<label class="formulario_label" for="MOV">Introduce el MOV:</label>
			<select name="MOV" id="MOV">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="+/-">+/-</option>
			</select>
		</div>

		<!--GRUPO LIS-->
		<div id="grupo_lis" class="formulario_grupo">
			<label class="formulario_label" for="LIS">Introduce el LIS:</label>
			<select name="LIS" id="LIS">
				<option value="+">+</option>
				<option value="-">-</option>
			</select>
		</div>

		<!--GRUPO ORN-->
		<div id="grupo_orn" class="formulario_grupo">
			<label for="ORN" class="formulario_label">Introduce el ORN</label>
			<select name="ORN" id="ORN">
				<option value="+">+</option>
				<option value="-">-</option>
			</select>
		</div>
		<button type="submit">EVALUAR</button>
	</form>
</main>

</body>
</html>