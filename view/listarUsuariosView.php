<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Listar Usuários</title>
</head>

<body>
    <div class="container">
    <!-- inserir php no html -->

        <?php
            include "../model/listarUsuario.php";

            // $result contém registros retornados para o banco
            if ($result->num_rows > 0) {
                // imprimir na tela cada registro do banco
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            $connect->close();
        ?>

        <div class="row g-3 pt-3">
            <div class="col-md">
                <a class="btn btn-dark text-white float-end" href="../view/formulario.php" role="button">Voltar ao cadastro</a>
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