<?php
include('conectadb.php');
$sql = "DELETE FROM tb_usuarios WHERE selecionado >=0";
mysqli_query($link, $sql);
$sql = "INSERT INTO tb_usuarios (nome, email, funcao, selecionado) VALUES
('João da Silva', 'joao.silva@gmail.com', 'Analista de Sistemas',0),
('Maria Souza', 'maria.souza@hotmail.com', 'Gerente de Projetos',0),
('Pedro Rocha', 'pedro.rocha@yahoo.com', 'Desenvolvedor Web',0),
('Ana Paula Oliveira', 'ana.oliveira@outlook.com', 'DBA',0),
('Luiz Carlos Santos', 'luiz.santos@empresa.com.br', 'Coordenador de TI',0),
('Juliana Oliveira', 'juliana.oliveira@gmail.com', 'Analista de Suporte',0),
('Fernando Costa', 'fernando.costa@empresa.com.br', 'Arquiteto de Software',0),
('Márcio Nunes', 'marcio.nunes@outlook.com', 'Analista de Dados',0);";
mysqli_query($link, $sql);
header('Location:index.php');