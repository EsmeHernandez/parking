<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <header>
        <link rel="stylesheet" type="text/css" href="diseño_formulario.css">

      </header>
</head>
<body>
    
<form method="POST" action="iniSesionBD.php">
<div class="container" >

	
	<h1 class="text-center">Bienvenido</h1>
	<form class="registration-form">
		
        
        <label>
			<span class="label-text">Username</span>
			<input type="text" name="usuario_u">
		</label>
        <label>
			<span class="label-text">Password</span>
			<input type="text" name="password_u">
		</label>
        
		<label class="checkbox">
			<input type="checkbox" name="newsletter">
			<span>Topicos de la Industria 4.0</span>
		</label>
		<div class="text-center">
			<button style="color: white" class="submit" name="register">Iniciar Sesion</button>
		</div>
        <p>

	</form>
</div>
</form>
</body>
</html>
