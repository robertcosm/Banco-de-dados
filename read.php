<?php 

    include "conexao.php";

    $select = "SELECT * FROM aluno";

    $resultado = $conn->query($select);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <table>
        <thead>
                <th>#</th> <th>Nome</th> <th>Nota</th>
        </thead>
            <tbody>
                <?php 
                    while ($aluno = $resultado->fetch_object()){
                        echo "<tr>";
                            echo "<td> $aluno->id</td><td> $aluno->nome</td><td> $aluno->nota</td>";
                        echo "</tr>";
                    }
                
                
                ?>
            </tbody>
    </table>
</body>
</html>