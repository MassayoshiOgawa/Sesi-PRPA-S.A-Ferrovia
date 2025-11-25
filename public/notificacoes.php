<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../scripts/OpcoesBarraLateral/notificacoes.js" defer></script>
    <title>Notificações</title>
</head>
<body>
    <header style="background-color: rgba(255, 0, 0, 0);">
        <img src="../assets/voltarICON.png" alt="" class="voltarICON" onclick="voltar()">
    </header>
    <main>
       <?php
       include '../db.php';

        $sql = "SELECT * FROM notificacao";

        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                 echo "
                 <div class='containerNotificacoes' id='containerNotificacoes'>
                     <div class='notificacoes' id='mainNoticia' onclick='deletar(this)'>
                         <div class='flex' style='height: 100%;'>
                             <div class='notiLeft'>
                                 <div class='notiLeftLine'>
                                     <p class='leftLineLabel' id='noti_nome'>Assunto</p>
                                 </div>
                                 <div class='notiLeftMiddle'>
                                     <p class='descricao' id='noti_desc'> {$row['descricao']}</p>
                                 </div>  
                                 <div class='notiLeftLine'>
                                     <p class='leftLineLabel' id='noti_estado'>Estado: {$row['estado']}</p>
                                 </div>
                             </div>
                             <div class='notiRight'>
                                 <div style='height: 50%;'>
                                     <img src='../assets/alertaICON.png' alt='' class='notiRightICON'>
                                 </div>
                                 <div style='height: 30%;'>
                                     <div class='notiRightDiv notiRightGrau'>
                                         <p class='labelGrau' id='noti_grau'> {$row['prioridade']}</p>
                                     </div>
                                 </div>
                                 <div style='height: 20%;'>
                                     <div class='notiRightDiv notiRightHorario'>
                                         <p class='labelHorario' id='noti_horario'>{$row['horario']}</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 ";

            }

        } else {
            echo "Nenhum registro encontrado.";
        }

        ?>

            <h1 onclick="relatar()" id="botaoRelatar">Relatar ocorrido</h1>
        <p><!--NÃO APAGA ESSE PARAGRAFO--></p>
    </main>
    <footer>

    </footer>
</body>
</html>