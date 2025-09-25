<?php

include '../../db.php';

$sql = "SELECT * FROM usuario";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {

    echo "<table border ='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Senha </th>
            <th> Telefone </th>
            <th> Cargo </th>
            <th> Nascimento </th>
            <th> Administrador </th>
        </tr>
         ";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
                <td> {$row['id']} </td>
                <td> {$row['nome_usuario']} </td>
                <td> {$row['email_usuario']} </td>
                <td> {$row['senha_usuario']} </td>
                <td> {$row['telefone_usuario']} </td>
                <td> {$row['cargo_usuario']} </td>
                <td> {$row['nascimento_usuario']} </td>
                <td> {$row['adm']} </td>
                <td> 
                    <a href='update.php?id={$row['id']}'>Editar<a>
                    <a href='delete.php?id={$row['id']}'>Excluir<a>
                
                </td>
              </tr>   
        ";
    }
    echo "</table>";
} else {
    echo "Nenhum registro encontrado.";
}

$mysqli -> close();

echo "<a href='cadastro.php'>Inserir novo Registro</a>";