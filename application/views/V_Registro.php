<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Registrarse</>
        </div>
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer">
            <input class="btn btn-primary" type="button" value="Registrarse"></input>
        </div>
	</div>
</div>



<div class="container my-5 mx-auto">
		<div class="row">
			<div class="col"></div>
			<div class="col-9 card loginCard my-5">
				<center>
				<h1 class="text-white mt-3 tituloLogin"><i class="fas fa-user"></i><b> Formulario de Registro</b></h1>
				<hr class="my-2" >
				<form class="form-inline my-3" method="post" action="<?= base_url('index.php/C_Registro/registrar') ?>">
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
						<p><i><b>Gracias por registrarse! 👍 </b></i></p>	
					</div>
				</form>
				</center>
			</div>
			<div class="col"></div>
		</div>
	</div>