
<div class="container my-5 mx-auto">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6 card loginCard my-5">
				<center>
				<h1 class="text-white mt-3 tituloLogin"><i class="fas fa-user"></i><b> Iniciar Sesión</b></h1>
				<hr class="my-2" >
				<?php if (!$mensajeError==null): ?>
					<h4><?= $mensajeError ?></h4>
				<?php endif ?>
				<form class="form-inline my-3" method="post" action="<?= base_url('index.php/C_InicioSesion/InicioSesion') ?>">
					<div class="form-group mb-2 col-3 text-white ">
						<label class="mb-1 mr-5" for="usuario"><b>Email </b></label>
						<label class="mt-3 mr-5" for="contraseña"><b>Password </b></label>
					</div>
					<div class="form-group mb-2 col-6">
						<input type="text" class="form-control ml-5" id="usuario" name="usuario" aria-describedby="emailHelp" placeholder="Ingrese su email..." required="required" >
						<input type="password" class="form-control mt-2 ml-5" id="password" name="password" placeholder="Ingrese su contraseña..." required="required" >
					</div>
					<div class="container-fluid posicionBoton text-white mx-auto">
						<button type="submit" class="btn btn-success mb-1 mt-2">Iniciar Sesión</button>
						<hr class="my-2" >
						<p><i><b>No esta registrado? </b><a id="linkRegistro" href="<?= base_url('index.php/C_Registro') ?>" > Registrese aquí.</a></i></p>	
					</div>
				</form>
				</center>
			</div>
			<div class="col-3"></div>
		</div>
	</div>


