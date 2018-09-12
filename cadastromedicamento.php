<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Medicamento</title>
    </head>
    <body>
        <?php
        require "navtop.php";
        ?>
        <div class="container">
            <form class="col-md-8 col-xl-9">     
                <div class="row">
                    <fieldset class="col-lg-6">
                        <legend><h1>Dados do Medicamento</h1></legend>
                        <p>Campos de entrada para medicamentos mantidos na farmácia do posto!</p>
                        <p>Preencha todos os campos!</p>
                        <p>Campos com (*) são obrigatorios!</p>

                        <div class="form-group">
                            <label for="inpId">Código * </label>
                            <input id="inpCodigo" class="form-control" type="text" name="codigo"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="inpNome">Nome * </label>
                            <input id="inpNome" class="form-control" type="text"
                                   name="nome" required >
                        </div>
                        
                        <div class="form-group">
                            <label for="inpMarca">Marca * </label>
                            <input id="inpMarca" class="form-control" type="text"
                                   name="marca" required >
                        </div>
                        
                        <div class="form-group">
                            <label for="inpDescricao">Descrição * </label>
                            <input id="inpDescricao" class="form-control" type="text"
                                   name="descricao" required>
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
