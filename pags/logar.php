

<div class="container">
    <div class="row">
    		
        <div class="col-lg-8 col-lg-offset-2 text-center">
        	<?php  
		include 'pags/mensagemvoluntario.php';
		?>
			<form method="post" action="pags/login.php">
				<div class="form-group">
		            <h3>Logar como:</h3>
		            <il>
		                <label><input type="radio" name="log" checked="true" value="1">Voluntario</label>
		                <label><input type="radio" name="log" value="2">Instituição</label>
		            </il>
		        </div>
				<div class="form-group">
					<label>Usuario</label>
					<input class="form-control" type="text" name="Usuario">
				</div>
				<div class="form-group">
					<label>Senha</label>
					<input class="form-control" type="password" name="Senha">
				</div>
				<div class="form-group">
					<button class="btn btn-success btn-xl" type="submit">Logar</button>
				</div>
			</form>
		</div>
	</div>
</div>