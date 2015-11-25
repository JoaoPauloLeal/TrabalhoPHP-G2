        <?php

            $idV = $_GET["admV"];

        ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Escrever Mensagem <small>enviando mensagem para um voluntario</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-e"></i> enviar
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-envelope-o fa-fw"></i> saida</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <form method="post" action="pags/enviamensagemsaida.php">
                                    <div class="form-group">
                                        <label>Voluntario</label><br>
                                        <?php 
                                            include "../cls/voluntarioClass.php";
                                            $mensagem = new voluntarioClass();
                                            $mensagem -> getOne($idV); 
                                            
                                            $_SESSION['idVol'] = $idV;
                                            $_SESSION['idEmp'] = $_SESSION["idEmpresa"];

                                            $result = $mensagem -> getConsulta();
                                            
                                        if ($linha = $result->fetch_assoc())
                                        {
                                           
                                        ?> 
                                        <label><?php echo $linha['nomeVoluntario']; ?></label>
                                        <?php  
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Mensagem</label>
                                        <fieldset>
                                        <textarea class="form-control" rows="5" name="msg"></textarea>
                                        </fieldset>
                                    </div>
                                    <button class="btn btn-success form-group" type="submit">Enviar</button>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>