<fieldset>

<legend>Mis Datos</legend>
<?php
							if(isset($_SESSION['email'])){ $email = $_SESSION['email'];}
							if(isset($_SESSION['usuario'])){ $nombre = $_SESSION['usuario'];}
							if(isset($_SESSION['genero'])){ $genero = $_SESSION['genero'];}
							if(isset($_SESSION['pass'])){ $pass = $_SESSION['pass'];}
						?>
<form name="form_data" method="" action="">
	<br>
	<p>
	<label>Nombre:</label>
	<input class="form-control button2 " style="background-color:#fff;"type="email" value="<?php echo $_SESSION['usuario']; ?>" readonly>
</p>
<p>
	<label>Genero:</label>
	<input class="form-control button2 colorboton"  style="background-color:#fff;"  type="text" value="<?php echo $_SESSION['genero']; ?>" readonly>
</p>
<p>
	<label>E-mail:</label>
	<input class="form-control button2 colorboton"  style="background-color:#fff;" type="text" value="<?php echo $_SESSION['email']; ?>" readonly>
</p>
<p>
	<label>Contraseña:</label>
	<input class="form-control button2 colorboton"  style="background-color:#fff;" type="text" value="<?php echo $_SESSION['pass']; ?>" readonly>
</p>
</form>
	
	<p>
</form>
</fieldset>						