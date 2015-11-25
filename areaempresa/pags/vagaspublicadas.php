        
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Voluntarios
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
                                <h3 class="panel-title"><i class="glyphicon glyphicon-th-list"></i> Voluntarios</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Nome do Voluntario</th>
                                        <th>Telefone</th>
                                        <th>Atividade a Desempenhar</th>
                                        <th>Ação</th>
                                        <th>Status</th>
                                    </tr>
                                    <?php 
                                    include "../cls/voluntarioClass.php";
                                    $disponibilidade = new voluntarioClass();
                                    $disponibilidade -> getAllDisponibilidade(); 
                                    
                                    $result = $disponibilidade -> getConsulta();

                                    if (!$result) {
                                        throw new Exception("Database Error [{$this->database->error}] {$this->database->error}");
                                    }
                                    else
                                    {
                                        while ($linha = $result->fetch_assoc())
                                            {
                                                if ($linha['status']==0) {
                                                    $st = "Livre";
                                                }
                                                if ($linha['status']==1) {
                                                    $st = "Ocupado";
                                                }
                                                if ($linha['status']==2) {
                                                    $st = "Esta sendo Voluntario";
                                                }
                                        
                                        ?>
                                        <tr>
                                            <td><a class="btn btn-default col-lg-12" href="?adm=admView&idVol=<?php echo $linha['idVoluntario'] ?>"><?php  echo $linha['nomeVoluntario'];?></a></td>
                                            <td>(<?php  echo $linha['dddTelefone'];?>) <?php  echo $linha['telefone'];?></td>
                                            <td><?php  echo $linha['nomeAtividade'];?></td>
                                            <td><a href="?adm=admEmp&admV=<?php echo $linha['idVoluntario']; ?>" class="btn btn-success col-lg-8">Convidar</a></td>
                                            <td class="btn <?php if ($st == "Livre") {
                                                echo "btn-success";
                                            } if ($st == "Ocupado") {
                                                echo "btn-info";
                                            } if ($st == "Esta sendo Voluntario") {
                                                echo "btn-danger";
                                            } ?>" disabled><?php echo $st; ?></td>
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