        
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Vagas recentes <small>-ultimas sete vagas para ser um voluntario-</small>
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
                                <h3 class="panel-title"><i class="glyphicon glyphicon-th-list"></i> Vagas</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Nome da Instituição</th>
                                        <th>Telefone</th>
                                        <th>Atividade a Desempenhar</th>
                                        <th>Ação</th>
                                    </tr>
                                    <?php 
                                    include "../cls/empresaClass.php";
                                    $necessidades = new empresaClass();
                                    $necessidades -> getSete(); 
                                    
                                    $result = $necessidades -> getConsulta();

                                    if (!$result) {
                                        throw new Exception("Database Error [{$this->database->error}] {$this->database->error}");
                                    }
                                    else
                                    {
                                        while ($linha = $result->fetch_assoc())
                                            {
                                        
                                        ?>
                                        <tr>
                                            <td><a class="btn btn-default col-lg-12" href="?adm=admView&idE=<?php echo $linha['idEmpresa'] ?>"><?php  echo $linha['nomeEmpresa'];?></a></td>
                                            <td>(<?php  echo $linha['ddd'];?>) <?php  echo $linha['telefone'];?></td>
                                            <td><?php  echo $linha['nomeAtividade'];?></td>
                                            <td><a href="?adm=admVol&admE=<?php echo $linha['idEmpresa']; ?>" class="btn btn-success">Voluntariar-se</a></td>
                                        </tr>
                                        <?php
                                           }
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>