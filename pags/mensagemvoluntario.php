<?php 

if(isset($_SESSION['mensagemvoluntario'])) 
{ ?>
	<div class="alert alert alert-warning alert-dismissible" role="alert">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	    </button>
	        <strong><?php echo $_SESSION['mensagemvoluntario']; ?></strong> 
    </div>
    <?php unset($_SESSION['mensagemvoluntario']);
} ?>