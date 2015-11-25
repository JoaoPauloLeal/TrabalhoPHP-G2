       
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Atualizar dados <small> mantenha atualizado seus dados</small>
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
                                <h3 class="panel-title"><i class="fa fa-e fa-desktop"></i> Perfil</h3>
                            </div>
                            <div class="panel-body">
                                <div>
                                    <?php 
                                    $voluntario = new voluntarioClass();
                                    $voluntario -> getOne($id); 
                                    
                                    $result = $voluntario -> getConsulta();

                                    if (!$result) {
                                        throw new Exception("Database Error [{$this->database->error}] {$this->database->error}");
                                    }
                                    else
                                    {
                                        while ($linha = $result->fetch_assoc())
                                            {
                                        $_SESSION['idVol'] = $id;
                                        ?>
                                        
                                    <form method="post" action="pags/updatevoluntario.php">
                                        <div class="col-lg-12">
                                            <h2>Atualizar dados do Voluntário</h2>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Nome *</label>
                                            <input class="form-control" type="text" value="<?php  echo $linha['nomeVoluntario'];?>" name="nomeVoluntario">
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-4">
                                                <label>CPF / CNPJ *</label>
                                                <input class="form-control" type="text" value="<?php  echo $linha['cpfVoluntario'];?>" name="cpfVoluntario">
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Data de nascimento *</label>
                                                <input class="form-control" type="date" value="<?php  echo $linha['dataNascimento'];?>" name="dataNascimento">
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Sexo *</label>
                                                <div class="radio">
                                                    <?php  
                                                    $sex = $linha['sexo'];
                                                    ?>
                                                        <ul>
                                                            <label><input type="radio" name="sexo" <?php if ($sex=="masculino")
                                                            {   echo " checked='true'"; } ?>  value="masculino">Masculino</label>
                                                            <label><input type="radio" <?php if ($sex=="feminino") { echo "checked='true'"; } ?> name="sexo" value="feminino">Feminino</label>
                                                           
                                                        </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12">
                                                <label>Email *</label>
                                                <input class="form-control" type="mail" name="email" value="<?php  echo $linha['email'];?>" >
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-4">
                                                <label>CEP *</label>
                                                <input class="form-control" type="text" name="cep" value="<?php  echo $linha['cep'];?>" >
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Estado *</label>
                                                    <select class="form-control" name="estado">
                                                       
                                                        <option value="AC" <?php if ($linha['estado']=="AC") { echo  "selected"; }?> >Acre</option>
                                                        <option value="AL" <?php if ($linha['estado']=="AL") { echo  "selected"; }?> >Alagoas</option>
                                                        <option value="AP" <?php if ($linha['estado']=="AP") { echo  "selected"; }?> >Amapá</option>
                                                        <option value="AM" <?php if ($linha['estado']=="AM") { echo  "selected"; }?> >Amazonas</option>
                                                        <option value="BA" <?php if ($linha['estado']=="BA") { echo  "selected"; }?> >Bahia</option>
                                                        <option value="CE" <?php if ($linha['estado']=="CE") { echo  "selected"; }?> >Ceará</option>
                                                        <option value="DF" <?php if ($linha['estado']=="DF") { echo  "selected"; }?> >Distrito Federal</option>
                                                        <option value="ES" <?php if ($linha['estado']=="ES") { echo  "selected"; }?> >Espirito Santo</option>
                                                        <option value="GO" <?php if ($linha['estado']=="GO") { echo  "selected"; }?> >Goiás</option>
                                                        <option value="MA" <?php if ($linha['estado']=="MA") { echo  "selected"; }?> >Maranhão</option>
                                                        <option value="MS" <?php if ($linha['estado']=="MS") { echo  "selected"; }?> >Mato Grosso do Sul</option>
                                                        <option value="MT" <?php if ($linha['estado']=="MT") { echo  "selected"; }?> >Mato Grosso</option>
                                                        <option value="MG" <?php if ($linha['estado']=="MG") { echo  "selected"; }?> >Minas Gerais</option>
                                                        <option value="PA" <?php if ($linha['estado']=="PA") { echo  "selected"; }?> >Pará</option>
                                                        <option value="PB" <?php if ($linha['estado']=="PB") { echo  "selected"; }?> >Paraíba</option>
                                                        <option value="PR" <?php if ($linha['estado']=="PR") { echo  "selected"; }?> >Paraná</option>
                                                        <option value="PE" <?php if ($linha['estado']=="PE") { echo  "selected"; }?> >Pernambuco</option>
                                                        <option value="PI" <?php if ($linha['estado']=="PI") { echo  "selected"; }?> >Piauí</option>
                                                        <option value="RJ" <?php if ($linha['estado']=="RJ") { echo  "selected"; }?> >Rio de Janeiro</option>
                                                        <option value="RN" <?php if ($linha['estado']=="RN") { echo  "selected"; }?> >Rio Grande do Norte</option>
                                                        <option value="RS" <?php if ($linha['estado']=="RS") { echo  "selected"; }?> >Rio Grande do Sul</option>
                                                        <option value="RO" <?php if ($linha['estado']=="RO") { echo  "selected"; }?> >Rondônia</option>
                                                        <option value="RR" <?php if ($linha['estado']=="RR") { echo  "selected"; }?> >Roraima</option>
                                                        <option value="SC" <?php if ($linha['estado']=="SC") { echo  "selected"; }?> >Santa Catarina</option>
                                                        <option value="SP" <?php if ($linha['estado']=="SP") { echo  "selected"; }?> >São Paulo</option>
                                                        <option value="SE" <?php if ($linha['estado']=="SE") { echo  "selected"; }?> >Sergipe</option>
                                                        <option value="TO" <?php if ($linha['estado']=="TO") { echo  "selected"; }?> >Tocantins</option>
                                                    </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Cidade *</label>
                                                <input class="form-control" type="text" value="<?php  echo $linha['nomeCidade'];?>" name="nomeCidade">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-2">
                                                <label>DDD *</label>
                                                <input class="form-control" type="text" value="<?php  echo $linha['dddTelefone'];?>" name="dddTelefone">
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Telefone *</label>
                                                <input class="form-control" type="text" value="<?php  echo $linha['telefone'];?>" name="telefone">
                                            </div>
                                            <div class="col-lg-2">
                                                <label>DDD</label>
                                                <input class="form-control" type="text" value="<?php  echo $linha['dddCelular'];?>" name="dddCelular">
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Celular</label>
                                                <input class="form-control" type="text" value="<?php  echo $linha['celular'];?>" name="celular">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group col-lg-6">
                                                <label>Área em que você atua *</label>
                                                        <select class="form-control" name="areaT">
                                                            <option value="Tecnologia" <?php if ($linha['areaT']=="Tecnologia"){ echo "selected"; } ?> >Tecnologia</option>
                                                            <option value="Administração" <?php if ($linha['areaT']=="Administração"){ echo "selected"; } ?> >Administração</option>
                                                            <option value="Gastronomia" <?php if ($linha['areaT']=="Gastronomia"){ echo "selected"; } ?> >Gastronomia</option>
                                                        </select>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Escolaridade *</label>
                                                        <select class="form-control" name="escolaridade">
                                                            
                                                            <option value="Fundamental" <?php if ($linha['escolaridade']=="Fundamental") {
                                                                echo "selected";
                                                            } ?> >Fundamental</option>
                                                            <option value="Medio" <?php if ($linha['escolaridade']=="Medio") {
                                                                echo "selected";
                                                            } ?> >Medio</option>
                                                            <option value="Superior" <?php if ($linha['escolaridade']=="Superior") {
                                                                echo "selected";
                                                            } ?> >Superior</option>
                                                        </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-lg-8">
                                                <label>Tipo de serviço voluntário</label>
                                                <?php 
                                                    include '../cls/tipoClass.php';
                          
                                                    $tipo = new tipoClass();
                                                    $tipo -> getAll(); 
                                                ?>
                                                <select class="form-control" name="idAtividade">
                                                <?php 
                                                    $result = $tipo -> getConsulta();
                                                    while ($linha2 = $result->fetch_assoc())
                                                    {
                                                ?>
                                                    <option value="<?php  echo $linha2['idAtividade'];?>"><?php  echo $linha2['nomeAtividade'];?></option>
                                                    
                                                <?php
                                                    }
                                                 ?>
                                                    </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <h3>Já foi voluntário?</h3>
                                            <ul type="">
                                                <?php 
                                                $vlj = $linha['volJa'];
                                                {
                                                ?>
                                                    <label><input type="radio" name="volJa" <?php if ($vlj=="sim") {
                                                        echo "checked=true";
                                                    } ?>  value="sim">Sim</label>
                                                    <label><input type="radio" name="volJa" <?php if ($vlj=="não") {
                                                        echo "checked=true";
                                                    } ?> value="não">Não</label>
                                                <?php
                                                }
                                                ?>
                                                
                                                
                                            </ul>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Publico que você tem afinidade</label>
                                            <ul type="" class="form-group">
                                                <label><input type="checkbox" name="afinidade" value="/Crianças/">Crianças </label>
                                                <label><input type="checkbox" name="afinidade" value="/Adolescentes/">Adolescentes </label>
                                                <label><input type="checkbox" name="afinidade" value="/Jovens/">Jovens </label>
                                                <label><input type="checkbox" name="afinidade" value="/Adultos/">Adultos </label>
                                                <label><input type="checkbox" name="afinidade" value="/Idosos/">Idosos</label>
                                            </ul>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Porque quer ser Voluntário?</label>
                                            <textarea class="form-control" name="descricao" value="<?php  echo $linha['descricao'];?>" rows="5" placeholder="Descrição"><?php  echo $linha["descricao"];?></textarea>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Disponibilidade</label>
                                            <select class="form-control" name="disponibilidade">
                                                <option value="entre 1 e 5 horas por mês" <?php if ($linha['disponibilidade']=="entre 1 e 5 horas por mês") {
                                                     echo "selected";
                                                } ?> >entre 1 e 5 horas por mês</option>
                                                <option value="entre 6 e 10 horas por mês" <?php if ($linha['disponibilidade']=="entre 6 e 10 horas por mês") {
                                                     echo "selected";
                                                } ?> >entre 6 e 10 horas por mês</option>
                                                <option value="entre 10 e 20 horas por mês" <?php if ($linha['disponibilidade']=="entre 10 e 20 horas por mês") {
                                                    echo "selected";
                                                } ?> >entre 10 e 20 horas por mês</option>
                                                <option value="mais que 20 horas por mês" <?php if ($linha['disponibilidade']=="mais que 20 horas por mês") {
                                                    echo "selected";
                                                } ?> >mais que 20 horas por mês</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Usuário</label>
                                            <input class="form-control" value="<?php  echo $linha['Login'];?>" maxlength="15" type="text" placeholder="Usuario para logar no site" name="Login">
                                            <label>Senha</label>
                                            <input class="form-control" value="<?php  echo $linha['Senha'];?>" minlength="5" maxlength="15" placeholder="Senha para se logar no site" type="password" name="Senha">
                                        </div>
                                        <div class="form-group col-lg-12">
                                        <button class="btn btn-success form-group" type="submit">Atualizar</button>
                                        </div>
                                        
                                    </form>
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