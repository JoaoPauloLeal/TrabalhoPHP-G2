
<div class="container">
    <div class="row">

        <div class="col-lg-8 col-lg-offset-2 text-center">
			<form method="post" action="pags/cadastramentovoluntario.php">
				<?php  
					include 'pags/mensagemvoluntario.php';
				?>
				<div class="col-lg-12">
					<h2>Cadastro de Voluntários</h2>
				</div>
		        <div class="form-group col-lg-12">
		            <label>Nome *</label>
		            <input class="form-control" type="text" name="nomeVoluntario">
		        </div>
		        <div class="form-group">
		            <div class="col-lg-4">
		                <label>CPF / CNPJ *</label>
		                <input class="form-control" type="text" name="cpfVoluntario">
		            </div>
		            <div class="col-lg-4">
		                <label>Data de nascimento *</label>
		                <input class="form-control" type="date" name="dataNascimento">
		            </div>
		            <div class="col-lg-4">
		                <label>Sexo *</label>
		                <div class="radio">
		                        <li type="none">
		                            <label><input type="radio" name="sexo" value="masculino">Masculino</label>
		                            <label><input type="radio" name="sexo" value="feminino">Feminino</label>
		                        </li>
		                </div>
		            </div>
		        </div>
		        <div class="form-group col-lg-12">
		                <label>Email *</label>
		                <input class="form-control" type="mail" name="email">
		        </div>

	            <div class="form-group">
	                <div class="col-lg-4">
	                    <label>CEP *</label>
	                    <input class="form-control" type="text" name="cep">
	                </div>
	                <div class="col-lg-4">
	                    <label>Estado *</label>
	                        <select class="form-control" name="estado">
	                        	<option value="">Selecione</option>
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espirito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MT">Mato Grosso</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
	                        </select>
	                </div>
	                <div class="col-lg-4">
	                    <label>Cidade *</label>
	                    <input class="form-control" type="text" name="nomeCidade">
	                </div>
	            </div>

		        <div class="form-group">
		            <div class="col-lg-2">
		                <label>DDD *</label>
		                <input class="form-control" type="text" name="dddTelefone">
		            </div>
		            <div class="col-lg-4">
		                <label>Telefone *</label>
		                <input class="form-control" type="text" name="telefone">
		            </div>
		            <div class="col-lg-2">
		                <label>DDD</label>
		                <input class="form-control" type="text" name="dddCelular">
		            </div>
		            <div class="col-lg-4">
		                <label>Celular</label>
		                <input class="form-control" type="text" name="celular">
		            </div>
		        </div>
		        <div class="form-group">
		            <div class="form-group col-lg-6">
		                <label>Área em que você atua *</label>
		                        <select class="form-control" name="areaT">
		                            <option value="Tecnologia">Tecnologia</option>
		                            <option value="Administração">Administração</option>
		                            <option value="Gastronomia">Gastronomia</option>
		                        </select>
		            </div>
		            <div class="form-group col-lg-6">
		                <label>Escolaridade *</label>
		                        <select class="form-control" name="escolaridade">
		                            <option value="Fundamental">Fundamental</option>
		                            <option value="Medio">Medio</option>
		                            <option value="Superior">Superior</option>
		                        </select>
		            </div>
		        </div>
		        <div class="form-group col-lg-12">
		            <h3>Já foi voluntário?</h3>
		            <ul type="">
		                <label><input type="radio" name="volJa" value="sim">Sim</label>
		                <label><input type="radio" name="volJa" value="nao">Não</label>
		            </ul>
		        </div>
		        <div class="form-group col-lg-12">
		                <label>Tipo de serviço voluntário</label>
		                    <?php 
	                    	include 'cls/tipoClass.php';
							include 'cls/conexaoClass.php';
  
						 	$tipo = new tipoClass();
						 	$tipo -> getAll(); 
						?>
						<select class="form-control" name="idAtividade">
						<?php 
					 		$result = $tipo -> getConsulta();
					 		while ($linha = $result->fetch_assoc())
					 		{
					 	?>
					 	 	<option value="<?php  echo $linha['idAtividade'];?>"><?php  echo $linha['nomeAtividade'];?></option>
					 	 	
					 	<?php
					 		}
					 	 ?>
	                        </select>
		        </div>
		        <div class="form-group col-lg-12">
		            <label>Publico que você tem afinidade</label>
		            <ul type="" class="form-group">
		                <label><input type="checkbox" name="afinidade" value="Crianças">Crianças </label>
		                <label><input type="checkbox" name="afinidade" value="Adolescentes">Adolescentes </label>
		                <label><input type="checkbox" name="afinidade" value="Jovens">Jovens </label>
		                <label><input type="checkbox" name="afinidade" value="Adultos">Adultos </label>
		                <label><input type="checkbox" name="afinidade" value="Idosos">Idosos</label>
		            </ul>
		        </div>
		        <div class="form-group col-lg-12">
		            <label>Porque quer ser Voluntário?</label>
		            <textarea class="form-control" name="descricao" rows="5" placeholder="Descrição"></textarea>
		        </div>
		        <div class="form-group col-lg-12">
		            <label>Disponibilidade</label>
		            <select class="form-control" name="disponibilidade">
		                <option value="">Selecione</option>
		                <option value="entre 1 e 5 horas por mês">entre 1 e 5 horas por mês</option>
		                <option value="entre 6 e 10 horas por mês">entre 6 e 10 horas por mês</option>
		                <option value="entre 10 e 20 horas por mês">entre 10 e 20 horas por mês</option>
		                <option value="mais que 20 horas por mês">mais que 20 horas por mês</option>
		            </select>
		        </div>
		        <div class="form-group col-lg-12">
		            <label>Usuário</label>
		            <input class="form-control" maxlength="15" type="text" placeholder="Usuario para logar no site" name="Login">
		            <label>Senha</label>
		            <input class="form-control" minlength="5" maxlength="15" placeholder="Senha para se logar no site" type="password" name="Senha">
		        </div>
		        <div class="form-group col-lg-12">
		        <button class="btn btn-success form-group" type="submit">Cadastrar</button>
		        <button class="btn btn-danger form-group" type="reset">Limpar</button>
		    	</div>
			</form>
     	</div>
    </div>
</div>