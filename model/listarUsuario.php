<?php

include "connect.php";

$sql = "SELECT * FROM usuario";

$result = $connect->query($sql); // executando a query de select e $result é o conteúdo da busca
