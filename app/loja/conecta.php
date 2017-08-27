<?php
# $conexao = mysqli_connect("mysql.hostinger.com.br", "u548680052_loja", "lojaloja", "u548680052_loja");

$conexao = mysqli_connect($_ENV["LOJA_DB_HOST"], $_ENV["LOJA_DB_USER"], "", $_ENV["LOJA_DB_NAME"]);
