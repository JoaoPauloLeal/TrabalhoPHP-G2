        <?php

            $idM = $_GET["idM"];

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
                                    <?php 
                                        $msg = new mensagemClass();
                                        $msg -> getOneSaida($idM);

                                        $result = $msg -> getConsulta();
                                        
                                        if ($linha = $result->fetch_assoc())
                                        {
                                    ?>
                                    <div class="form-group">
                                        <label>Instituição</label><br>
                                        <label><?php echo $linha['nomeEmpresa'];; ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Mensagem</label>
                                        <p><?php echo $linha['mensagem']; ?></p>
                                    </div>

                                    
                                    
                                    <?php
                                    }
                                 ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>