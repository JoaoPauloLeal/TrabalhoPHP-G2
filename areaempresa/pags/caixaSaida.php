        
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Caixa de Saida <small>mensagens enviadas</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-e"></i> enviadas
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-envelope-o fa-fw"></i> Envios</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <tr>
                                        <td>Voluntario</td>
                                        <td>Mensagem</td>
                                        <td colspan='2'>Acão</td>
                                    </tr>
                                <?php 
                                    $msg = new mensagemClass();
                                    $msg -> getAllEmpresaSaida($id); 

                                    $result = $msg -> getConsulta();

                                    while ($linha = $result->fetch_assoc())
                                    {
                                    $idM = $linha['idMensagem']; 
                                    $idV = $linha['idVoluntario'];
                                ?>
                                    <tr>
                                        <td><?php  echo $linha['nomeVoluntario'];?></td>
                                        <td><?php  echo $linha['mensagem'];?></td>
                                        <td><a class="btn btn-info" href="index.php?adm=admL&idM=<?php echo $idM; ?>&idV=<?php echo $idV; ?>">Ler</a></td>
                                        <td><a class="btn btn-danger" href="pags/deletarmensagemsaida.php?idM=<?php echo $idM; ?>">Deletar</a></td>
                                    </tr>
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