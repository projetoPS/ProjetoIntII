<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Atendente</title>
    </head>
    <body>        
        <?php
        require "navtop.php";
        ?>
        <div class="container">
            <form class="col-md-8 col-xl-9">     
                <div class="row">
                    <fieldset class="col-lg-6">
                        <legend><h1>Dados do Atendente</h1></legend>
                        <p>Dados para os responsaveis pelo serviço de Atendimento!</p>
                        <p>Preencha todos os campos!</p>
                        <p>Campos com (*) são obrigatorios!</p>

                        <div class="form-group">
                            <label for="inpId">ID * </label>
                            <input id="inpId" class="form-control" type="text" name="id"
                                   placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="inpNome">Nome * </label>
                            <input id="inpNome" class="form-control" type="text"
                                   name="nome" placeholder="Ex.: João da Silva"
                                   required >
                        </div>

                        <div class="form-group">
                            <label for="inpCpf">CPF * </label>
                            <input id="inpCpf" class="form-control" type="text"
                                   name="cpf" placeholder="Ex.: 999.999.999-99"
                                   pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="inpDataNasc">Data de Nascimento * </label>
                            <input id="inpDataNasc" class="form-control" type="date"
                                   name="data de nascimento" required>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inpBairro">
                                        UF * 
                                    </label>
                                </div>
                                <input list="lsUf" id="inpUf" type="text" name="bairro"
                                       maxlength="2" required>
                                <datalist id="lsUf">
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
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
                                </datalist>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inpCidade">Cidade * </label>
                            <input id="inpCidade" class="form-control" type="text"
                                   name="cidade" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <label for="inpBairro">Bairro * </label>
                            <input id="inpBairro" class="form-control" type="text"
                                   name="bairro" required>
                        </div>

                        <div class="form-group">
                            <label for="inpEndereco">Endereço * </label>
                            <input id="inpEndereco" class="form-control" type="text"
                                   name="endereco" required>
                        </div>

                        <div class="form-group">
                            <label for="inpTelefone">Telefone * </label>
                            <div class="input-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text oi oi-phone"></span>
                                    <input id="inpTelefone" class="form-control" type="tel"
                                           name="telefone" placeholder="Ex.: (99)9999-9999"
                                           required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inpEmail">E-mail * </label>
                            <div class="input-group mb-3">
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input id="inpEmail" class="form-control" type="email"
                                           name="email" placeholder="Ex.: joaosilva@gmail.com"
                                           required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input id="inpSubmit" class="btn btn-success btn-lg"
                                   type="submit" value="Salvar">
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </body>
</html>