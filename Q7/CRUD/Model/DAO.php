<?php

/* FUNÇÃO INSERIR CIDADES*/
function insereCidade($conexao, $nome_cidade, $id_estado)
{
   $nome_cidade = addslashes($nome_cidade);
   $query = "INSERT INTO cidades (nome, id_estado) VALUES ('{$nome_cidade}', '{$id_estado}')";
   return mysqli_query($conexao, $query);
}

/*FUNÇÃO LISTAR CIDADES*/
function listaCidades($conexao)
{
   $cidades = array();
   $resultado = mysqli_query($conexao, "SELECT c.*, e.nome AS id_estado FROM cidades c inner join estados e ON c.id_estado = e.id");

   while ($cidade = mysqli_fetch_assoc($resultado)) {
      array_push($cidades, $cidade);
   }
   return $cidades;
}

/*FUNÇÃO ALTERAR CIDADES*/
function alteraCidade($conexao, $id, $nome_cidade, $id_estado)
{
   $query = "UPDATE cidades SET nome = '{$nome_cidade}', id_estado = '{$id_estado}' where id ='{$id}' ";
   return mysqli_query($conexao, $query);
}

/*FUNÇÃO REMOVER CIDADES*/
function removeCidade($conexao, $id)
{
   $query = "DELETE FROM cidades WHERE id = {$id}";
   return mysqli_query($conexao, $query);
}

/*FUNÇÃO BUSCAR CIDADES*/
function buscaCidade($conexao, $id)
{
   $query = "SELECT * FROM cidades WHERE id = {$id}";
   $resultado = mysqli_query($conexao, $query);
   return mysqli_fetch_assoc($resultado);
}


/* FUNÇÃO LISTAR ESTADOS*/
function listaEstados($conexao)
{
   $estados = array();

   $query = "SELECT * FROM estados";
   $resultado = mysqli_query($conexao, $query);

   while ($estado = mysqli_fetch_assoc($resultado)) {
      array_push($estados, $estado);
   }
   return $estados;
}
