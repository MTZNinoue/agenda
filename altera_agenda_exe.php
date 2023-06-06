<?php  
    include('conexao.php');
    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    
   

    echo "<h1>Alteração de dados </h1>";
    echo "<p>Usuario: $nome</p>";
    $sql = "UPDATE usuario SET
            nome='$nome',
            apelido='$apelido',
            telefone='$telefone',
            celular='$celular',
            
            WHERE id_usuario=$id_usuario";
        
    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados: $msqli_erro($con)!";
  
?>
<a href="index.php">Voltar</a>