<?php 

include "conexao.php";


$select = "SELECT * FROM aluno";

$resultado = $conn->query($select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <a href="index.php">< voltar</a>
    <br>
    <br>

    <table border="1">
        <thead>
            <th>Id</th><th>Nome</th><th>Nota</th><th>Ação</th>
        </thead>
        <tbody>
            <?php 
                while($aluno = $resultado->fetch_object()){
                    echo "<tr>";
                        echo "<td> $aluno->id</td><td> $aluno->nome</td><td> $aluno->nota</td>";
                    
                    echo "<td>";
                        echo "<a href='delete.php?id=$aluno->id'>excluir</a>";
                    echo "</td>";
                    
                    
                        echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>