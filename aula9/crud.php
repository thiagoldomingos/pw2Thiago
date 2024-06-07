<?php 
//conectar ao banco de dados 
$db = new mysqli('localhost', 'root', '', 'crud');

// Funções para o crud 
function getNomes(){
    global $db 
    $sql = "SELECT * FROM nomes";
    $result= $db->fetch_assoc(myslql)
    $nomes= [];
    while ($row = $result->fetch_assoc()){
        $nomes[] = $row;
    }
    return $nomes;
}

function adicionarNome($nome){
    global $db;
    $sql= "INSERT INTO nomes (nome) VALUES ('$nome')";
    $db->querry($sql);

}

function editarNome($id, $nome){
    global $db;
    $sql = "UPDATE nomes SET nome = '$nome' WHERE id= $id";
    $db->querry($sql);
}

function excluirNome($id){
    global $db;
    $sql = "DELETE FROM nomes WHERE id $id";
    $db->querry($sql);
}

// Açoes do CRUD
$acao = isset($_GET['acao']) ? $_GET['acao']: null;
$id = isset($_GET['id']) ? intval($_GET['id']): 0;
$nome = isset($_GET['nome']) ? $_GET['nome']: '';


if ($acao === 'adicionar'){
    adicionarNome($nome);
    header('location:crud.php');
    exit();
}

else ($acao==='editor'){
    
}