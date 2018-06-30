<?php include ('templates/head.php'); 

if(isset($_GET['error'])){
	include ('views/errors/errors.php');
}
?>
 <br>
 <br>
<body style="background-color:#F7F6FC  ;">
	

	<div class="container spacing-top">
          
			
				
				<fieldset>
					<legend style="font-size:35px;">Formulario de Registro</legend>
						<form name="register" method="post" action="http://localhost/webmail2/app/Http/Controllers/registroController.php">
							<br><br>
							<p>
								
								<select class="button6" name="genre" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
                                <input type="text" id="name" class="form-control button2" name="nombre" placeholder="Nombre completo.." required>
                                 </p>
                                 
                                 <p>
                                 <input type="email" id="correo" name="correo" class="form-control button2" placeholder="Correo electronico.." required>
                                 </p>
  

                                  <p>
                                   
                                 <input type="password" id="password" class="form-control button2" name="password"  placeholder="Ingresa Contraseña..."
			                     pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
			                     onchange="this.setCustomValidty(this.validity.patternMismatch ? 'Debe contener entre 8 y 
			                     16 caracteres: (Digitos, minusculas, mayusculas, y simbolos)' : ''); if(this.
			                     checkValidity()) form.confirm_password.pattern = this.value;" required>
                                 </p>

                                 <p>
                                   
                                 <input type="password"id="confirm_password" class="form-control button2" name="conf_pass"  placeholder="Confirma tu contraseña.." pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[
                                 a-z])\S{8,16}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Por 
                                 favor, ingresa la misma contraseña de arriba' : '');" required>
                                 </p>
                                
                                

                                 <p>
	                            <input  type="submit" name="btn-register" class="button6"value="Registrar usuario";>
	                            <input  type="reset" class="button7" value="Limpiar datos">
                                </p>
                             </form>
                         </fieldset>
                         <p><a href="http://localhost/webmail2/views/front/login.php" class="registrado">Ya estoy registrado!</a></p>

			</div>

	
	
<br><br><br><br>
<?php include ('templates/foot.php'); ?>