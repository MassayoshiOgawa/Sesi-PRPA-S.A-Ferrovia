<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trem</title>
    <link rel="stylesheet" href="../../style/style.css">
    <script src="../../scripts/OpcoesBarraLateral/trens.js" defer></script>
</head>

<body style="overflow-y: scroll;">
    <header style="background-color: rgba(0, 0, 255, 0);">
        

        <img src="../../assets/seta.png" alt="" class="voltarICON" onclick="voltar()" >
       
    </header>
    <main>
        <a href="cadastro_trem.php">cadstrar trem</a>
        <?php 
        include '../../db.php';
        $id = 1;

        $sql = "SELECT * FROM trem ";

        $result = $mysqli->query($sql);
        
        while ($row = $result->fetch_assoc()) {
            
            
            echo "
            <div class='ContainerTren'>
                <div class='BoxStatus' onclick='abrir(this)'>
                    <div class='caixaTriangulo'>
                        <div class='flex2'>
    
                            <div class='bloco'>
                                <br>
                                
                            </div>
                            <h1>Trem {$row['id_trem']}</h1>
                        </div>
                        <img src='../../assets/trianguloICON.png' alt=''>
                    </div>
                    <div class='infoTren'>
                        <p>Rota atual:</p>
                        <p>Desempenho{$row['desempenho']}:</p>
                        <p>Dados de consumo:{$row['consumo_energia']}</p>
                        <p>Tempo de funcionamento diario:</p>
                        <p>Modelo:</p>
                    </div>
    
                    <div class='InfoMotorista'>
                        <div>
                            <h3>Maquinista</h3>
                            <p>Nome:</p>
                            <p>Telefone:</p>
                        </div>
                        <div>
                            <img src='../../assets/userICON.png' alt='' class='motoristaImg'>
                        </div>
                    </div>
                    <a href='update_trem.php?id={$row['id_trem']}'>Editar<a>
                    <a href='delete_trem.php?id={$row['id_trem']}'>Excluir<a>
                </div>
                
            </div>
            ";
           
        }
        ?>
    </main>
</body>

</html>