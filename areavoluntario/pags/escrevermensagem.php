        <?php

            $idE = $_GET["admE"];

        ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Caixa de Entrada <small>mensagens recebidas</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-e"></i> recebidas
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-envelope-o fa-fw"></i> Entrada</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <form method="post" action="pags/enviamensagem.php">
                                    <div class="form-group">
                                        <label>Instituição</label><br>
                                        <?php 
                                            include "../cls/empresaClass.php";
                                            $mensagem = new empresaClass();
                                            $mensagem -> getOne($idE); 
                                            
                                            $_SESSION['idEmp'] = $idE;
                                            $_SESSION['idVol'] = $_SESSION["idVoluntario"];

                                            $result = $mensagem -> getConsulta();
                                            
                                        if ($linha = $result->fetch_assoc())
                                        {
                                           
                                        ?> 
                                        <label><?php echo $linha['nomeEmpresa']; ?></label>
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