<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Cadastro de Usuários</title>
</head>

<body>

    <div class="container">
        <div class="pt-2 ">
            <div class="card bg-light">
                <div class="card-header bg-dark text-light">
                    <h1>Cadastro de Usuários</h1>
                </div>
                <div class="card-body">

                    <form method="POST" action="../model/cadastrarUsuarios.php" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label for="inputNome" class="form-label">Nome</label>
                                <input name="nome" type="nome" class="form-control" id="inputNome" >
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md">
                                <label for="inputEmail" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="inputEmail" >
                            </div>
                            <div class="col-md">
                                <label for="inputPassword" class="form-label">Senha</label>
                                <input name="senha" type="password" class="form-control" id="inputPassword" >
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="inputSexo" class="form-label">Sexo</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="M" >
                                        <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="F">
                                        <label class="form-check-label" for="inlineRadio2">Feminino</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="inputPhone" class="form-label">Telefone</label>
                                <input name="telefone" type="text" class="form-control" id="inputPhone" placeholder="(XX) XXXXX-XXXX" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputDate" class="form-label">Data de Nascimento</label>
                                <input name="nascimento" type="date" class="form-control" id="inputDate" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputType" class="form-label">Tipo</label>
                                <select name="tipo" class="form-select" aria-label="Default select example" >
                                    <option selected></option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Usuário</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="formFile" class="form-label">Avatar</label>
                                <input class="form-control" type="file" id="formFile" name="avatar">
                            </div>
                        </div>

                        <div class="row g-3 pt-3">
                            <div class="col-md">
                                <button type="submit" class="btn btn-dark text-white">Cadastrar</button>
                                <a class="btn btn-dark text-white float-end" href="../view/listarUsuariosView.php" role="button">Listar</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer bg-dark text-white">
                    Autor: Aluno
                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- jQuery, Popper.js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

    <!--value="<?= isset($_POST['nome']) ? $_POST['nome'] : '' ?>"-->
</body>

</html>