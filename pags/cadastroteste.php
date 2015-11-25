<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
<form method="post" action="#">
        <div class="form-group">
            <label>Nome:</label>
            <input class="form-control" type="text" name="nome">
        </div>
        <div class="form-group">
            <div class="col-lg-4">
                <label>CPF:</label>
                <input class="form-control" type="text" name="cpf">
            </div>
            <div class="col-lg-4">
                <label>Data de nascimento:</label>
                <input class="form-control" type="date" name="data">
            </div>
            <div class="col-lg-4">
                <label>Sexo</label>
                <div class="radio">
                        <ul>
                            <label><input type="radio" name="sexo" value="masculino">Masculino</label>
                            <label><input type="radio" name="sexo" value="feminino">Feminino</label>
                        </ul>
                </div>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input class="form-control" type="mail" name="email">
            </div>
            <div class="form-group">
                <div class="col-lg-4">
                    <label>CEP:</label>
                    <input class="form-control" type="text" name="cep">
                </div>
                <div class="col-lg-4">
                    <label>Estado</label>
                        <select class="form-control" name="estado">
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                        </select>
                </div>
                <div class="col-lg-4">
                    <label>Cidade</label>
                    <input class="form-control" type="text" name="cidade">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-2">
                <label>DDD</label>
                <input class="form-control" type="text" name="ddd">
            </div>
            <div class="col-lg-4">
                <label>Telefone</label>
                <input class="form-control" type="text" name="telefone">
            </div>
            <div class="col-lg-2">
                <label>DDD</label>
                <input class="form-control" type="text" name="ddd">
            </div>
            <div class="col-lg-4">
                <label>Celular</label>
                <input class="form-control" type="text" name="celular">
            </div>
        </div>
        <div class="form-group">
            <div class="form-group col-lg-8">
                <label>Área em que você atua</label>
                        <select class="form-control" name="atua">
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                        </select>
            </div>
            <div class="form-group col-lg-8">
                <label>Escolaridade</label>
                        <select class="form-control" name="escolaridade">
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SP">SP</option>
                        </select>
            </div>
        </div>
        <div class="form-group col-lg-12">
            <label>Já foi voluntario?</label>
            <ul type="">
                <label><input type="radio" name="voluntarioja" value="sim">Sim</label>
                <label><input type="radio" name="voluntarioja" value="nao">Não</label>
            </ul>
        </div>
        <div class="form-group col-lg-12">
                <label>Tipo de serviço voluntario</label>
                    <select class="form-control" name="escolaridade">
                        <option value="RS">RS</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                    </select>
        </div>
        <div class="form-group col-lg-12">
            <label>Publico que você tem afinidade</label>
            <ul type="" class="form-control">
                <label><input type="checkbox" name="afinidade" value="Crianças">Crianças </label>
                <label><input type="checkbox" name="afinidade" value="Adolescentes">Adolescentes </label>
                <label><input type="checkbox" name="afinidade" value="Jovens">Jovens </label>
                <label><input type="checkbox" name="afinidade" value="Adultos">Adultos </label>
                <label><input type="checkbox" name="afinidade" value="Idosos">Idosos</label>
            </ul>
        </div>
        <div class="form-group col-lg-12">
            <label>Porque quer ser Voluntario?</label>
            <textarea class="form-control" rows="5" placeholder="Descrição"></textarea>
        </div>
        <div class="form-group col-lg-12">
            <label>Disponibilidade</label>
            <select class="form-control" name="disponibilidae">
                <option value="">Selecione</option>
                <option value="1">entre 1 e 5 horas por mês</option>
                <option value="2">entre 6 e 10 horas por mês</option>
                <option value="3">entre 10 e 20 horas por mês</option>
                <option value="4">mais que 20 horas por mês</option>
            </select>
        </div>
        <div class="col-lg-12">
            <label>Usuário</label>
            <input class="form-control" maxlength="15" type="text" name="usuario">
            <label>Senha</label>
            <input class="form-control" minlength="5" maxlength="15" type="password" name="senha">
        </div>
    </form>
     </div>
    </div>
</div>