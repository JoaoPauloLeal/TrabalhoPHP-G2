<?php 

$idvol = $_GET['idVol'];

?>
       
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dados do Voluntario
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-e"></i> 
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-e fa-desktop"></i> Dados</h3>
                            </div>
                            <div class="panel-body">
                                <div>
                                    <?php
                                    include '../cls/voluntarioClass.php';
                                    $empresa = new voluntarioClass();
                                    $empresa -> getOne($idvol); 
                                    
                                    $result = $empresa -> getConsulta();

                                    if (!$result) {
                                        throw new Exception("Database Error [{$this->database->error}] {$this->database->error}");
                                    }
                                    else
                                    {
                                        if ($linha = $result->fetch_assoc())
                                            {
                                        
                                        ?>
                                        
                                    
                                        <div class="col-lg-12">
                                            <h2>Dados do Voluntario</h2>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Nome</label>
                                            <input class="form-control" type="text" value="<?php  echo $linha['nomeVoluntario'];?>" name="nomeVoluntario" disabled>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-4">
                                                <label>CPF / CNPJ</label>
                                                <input class="form-control" type="text" value="<?php  echo $linha['cpfVoluntario'];?>" name="cpfVoluntario" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12">
                                                <label>Email</label>
                                                <input class="form-control" type="mail" value="<?php  echo $linha['email'];?>" name="email" disabled>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-4">
                                                <label>CEP</label>
                                                <input class="form-control" type="text" value="<?php  echo $linha['cep'];?>" name="cep" disabled>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Estado</label>
                                                <input class="form-control" type="text" value="<?php  echo $linha['estado'];?>" name="estado" disabled>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Cidade</label>
                                                <input class="form-control" type="text" value="<?php  echo $linha['nomeCidade'];?>" name="nomeCidade" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-4">
                                                <label>Telefone</label>
                                                <input class="form-control" type="text" value="(<?php  echo $linha['dddTelefone'];?>)<?php  echo $linha['telefone'];?>" name="dddTelefone" disabled>
                                            </div>
                                            
                                        </div>
                                    <?php
                                           }
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>