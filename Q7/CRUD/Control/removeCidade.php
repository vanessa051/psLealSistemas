<?php
require_once("../Model/conexao.php");
require_once("../Model/DAO.php");


$id = $_GET['id']; 

    
removeCidade($conexao, $id);
header('Location: ../View/listaCidades.php');
die();  