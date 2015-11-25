<?php 
    session_start();
    include '../cls/conexaoClass.php'; 
?>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Area do Voluntario</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>
    <?php if(isset($_SESSION['logado']) && $_SESSION['logado']==TRUE) 
    { 
        $id = $_SESSION["idVoluntario"];
        include "../cls/voluntarioClass.php";

    ?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Area do Voluntario</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <?php 
                            include '../cls/mensagemClass.php';
                            
  
                            $msg = new mensagemClass();
                            $msg -> getSeteVoluntario($id); 
                        ?>
                        <?php
                            $result = $msg -> getConsulta();
                            while ($linha = $result->fetch_assoc())
                            {
                        ?>
                        <li class="message-preview">
                            <?php 
                                $idM = $linha['idMensagem'];
                            ?>
                            <a href="pags/trocastatusmensagem.php?idM=<?php echo $idM; ?>">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" width="55dp" height="50dp" src="../areaempresa/img/perfil/<?php echo $linha['idEmpresa'] ?>.jpg" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php  echo $linha['nomeEmpresa'];?></strong>
                                        </h5>
                                        
                                        <p><?php  echo $linha['mensagem'];?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php
                            }
                         ?>

                        <li class="message-footer">
                            <a href="?adm=admE">Ver todas as Mensagens</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="pags/trocastatus.php?st=0">Livre<span class="label label-default">L</span></a>
                        </li>
                        <li>
                            <a href="pags/trocastatus.php?st=1">Ocupado<span class="label label-primary">O</span></a>
                        </li>
                        <li>
                            <a href="pags/trocastatus.php?st=2">Sendo Voluntario<span class="label label-success">V</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Gerenciar</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                        <?php 
                            $vol = new voluntarioClass();
                            $vol -> getOne($id); 
                        ?>
                        <?php 
                            $result = $vol -> getConsulta();
                           while ($linha = $result->fetch_assoc())
                            {
                        ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php  echo $linha['nomeVoluntario'];?> <b class="caret"></b></a>
                    <?php
                            }
                         ?>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="?adm=admPerfil"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="?adm=admE"><i class="fa fa-fw fa-envelope"></i> Mensagens</a>
                        </li>
                        <li>
                            <a href="?adm=admG"><i class="fa fa-fw fa-gear"></i> Configuração</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="pags/logout.php"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                        </li>
                    </ul>
                    
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Visão Geral</a>
                    </li>
                    <li>
                        <a href="?adm=admP"><i class="fa fa-fw fa-bar-chart-o"></i> Vagas Publicadas</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-envelope"></i> Mensagens<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="?adm=admE"><i class="fa fa-fw fa-send"></i>Caixa de Entrada</a>
                            </li>
                            <li>
                                <a href="?adm=admS"><i class="fa fa-fw fa-edit"></i>Caixa de Saida</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="?adm=admPerfil"><i class="fa fa-fw fa-desktop"></i> Perfil</a>
                    </li>
                    <li>
                        <a href="?adm=admG"><i class="fa fa-fw fa-wrench"></i> Gerenciar Conta</a>
                    </li>
                    
                    <li>
                        <a href="pags/logout.php"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <?php 
            if(!isset($_GET['adm']))
                require_once('pags/visaogeral.php');
            else{
                switch($_REQUEST['adm']){
                                
                    case 'admE':
                    require_once('pags/caixaEntrada.php');
                    break;

                    case 'admS':
                    require_once('pags/caixaSaida.php');
                    break;

                    case 'admP':
                    require_once('pags/vagaspublicadas.php');
                    break;

                    case 'admL':
                    require_once('pags/leituravoluntario.php');
                    break;

                    case 'admMs':
                    require_once('pags/leituravoluntariosaida.php');
                    break;

                    case 'admPerfil':
                    require_once('pags/atualizadados.php');
                    break;

                    case 'admVol':
                    require_once('pags/escrevermensagem.php');
                    break;

                    case 'admView':
                    require_once('pags/verinstituicao.php');
                    break;

                    case 'admG':
                    require_once('pags/gerenciar.php');
                    break;


                }
            }
        ?>
        

    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <?php 
    }
    else
    { 
        echo "<script>window.location='../index.php?m=l&#about'</script>";
    } ?>

</body>

</html>
