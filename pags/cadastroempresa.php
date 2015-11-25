<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
			<form method="post" action="pags/cadastramentoempresa.php">
				<div class="col-lg-12">
					<h2>Cadastro de Instituição</h2>
				</div>
		        <div class="form-group col-lg-12">
		            <label>Nome *</label>
		            <input class="form-control" type="text" name="nomeEmpresa">
		        </div>
		        <div class="form-group">
		            <div class="col-lg-6">
		                <label>CPF / CNPJ *</label>
		                <input class="form-control" type="text" name="cnpjEmpresa">
		            </div>
		            <div class="col-lg-6">
		                <label>Data de Fundação</label>
		                <input class="form-control" type="date" name="dataFundada">
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
		                <input class="form-control" type="text" name="ddd">
		            </div>
		            <div class="col-lg-4">
		                <label>Telefone *</label>
		                <input class="form-control" type="text" name="telefone">
		            </div>
		        </div>
		        <div class="form-group col-lg-12">
		                <label>Tipo de serviço voluntário que Necessita</label>
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
		            <label>Descreva sua Empresa *</label>
		            <textarea class="form-control" rows="5" placeholder="Descrição" name="descricao"></textarea>
		        </div>
		        <div class="form-group col-lg-12">
		            <label>Usuário</label>
		            <input class="form-control" maxlength="15" type="text" name="usuario">
		            <label>Senha</label>
		            <input class="form-control" minlength="5" maxlength="15" type="password" name="senha">
		        </div>
		        <div class="form-group col-lg-12">
		        <button class="btn btn-success form-group" type="submit">Cadastrar</button>
		        <button class="btn btn-danger form-group" type="reset">Limpar</button>
		    	</div>
			</form>
     	</div>
    </div>
</div>