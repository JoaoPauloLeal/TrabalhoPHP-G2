        
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
                                    <tr>
                                        <th>Instituição</th>
                                        <th>Mensagem</th>
                                        <th colspan='2'>Acão</th>
                                    </tr>
                                <?php 
                                    $msg = new mensagemClass();
                                    $msg -> getAllVoluntario($id); 

                                    $result = $msg -> getConsulta();

                                    while ($linha = $result->fetch_assoc())
                                    {
                                    $idM = $linha['idMensagem']; 
                                    $idE = $linha['idEmpresa'];
                                ?>
                                    <tr>
                                        <td><?php  echo $linha['nomeEmpresa'];?></td>
                                        <td><?php  echo $linha['mensagem'];?></td>
                                        <td><a class="btn btn-info" href="index.php?adm=admVol&admE=<?php echo $idE; ?>">Responder</a></td>
                                        <td><a class="btn btn-danger" href="pags/deletarmensagem.php?idM=<?php echo $idM; ?>">Deletar</a></td>
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