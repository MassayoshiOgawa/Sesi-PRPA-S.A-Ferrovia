<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotas</title>
    <link rel="stylesheet" href="../../style/style.css">
    <script src="../../scripts/OpcoesBarraLateral/trens.js" defer></script>
</head>

<body style="overflow-y: scroll;">
    <header style="background-color: rgba(0, 0, 255, 0);">
        <img src="../../assets/seta.png" alt="" class="voltarICON" onclick="voltar()">
    </header>
    <main>
        
            
              
        <?php 
        include '../../db.php';
        $id = 1;

        $sql = "SELECT * FROM rota ";

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
                                <h1>Rota {$row['id_rota']}</h1>
                            </div>
                            <img src='../../assets/trianguloICON.png' alt=''>
                        </div>
                            <p>modelo: {$row['nome_rota']}</p>
                            <p>capacidade de carga: {$row['estação_origem']}</p>
                            <p>empresa proprietaria: {$row['estação_destino']}</p>
                            <p>status trem: {$row['distancia']}</p>
                            <p>consumo de combustível: {$row['intensidade_movimento']}</p>
                            <p>ano trem: {$row['horario_funcionamento']}</p>
                            <a href='update_trem.php?id={$row['id_rota']}'>Editar<a>
                        </div>

                    </div>
                
                </div>
           
            ";

        }
        ?>
        
    </main>
</body>

</html>