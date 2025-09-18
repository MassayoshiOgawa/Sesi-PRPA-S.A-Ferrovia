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
        <div class="containerNotificacoes" id="containerNotificacoes">
            <div class="notificacoes" id="mainNoticia" onclick="deletar(this)">
                <div class="flex" style="height: 100%;">
                    <div class="notiLeft">
                        <div class="notiLeftLine">
                            <p class="leftLineLabel" id="noti_nome">Trem 0041</p>
                        </div>
                        <div class="notiLeftMiddle">
                            <p class="descricao" id="noti_desc">Desencarrilhou na curva 750 Via beira mar 1505 ponto 3</p>
                        </div>
                        <div class="notiLeftLine">
                            <p class="leftLineLabel" id="noti_estado">Estado: Não resolvido</p>
                        </div>
                    </div>
                    <div class="notiRight">
                        <div style="height: 50%;" class="">
                            <img src="../assets/alertaICON.png" alt="" class="notiRightICON">
                        </div>
                        <div style="height: 30%;">
                            <div class="notiRightDiv notiRightGrau">
                                <p class="labelGrau" id="noti_grau">Grave</p>
                            </div>
                        </div>
                        <div style="height: 20%;">
                            <div class="notiRightDiv notiRightHorario">
                                <p class="labelHorario" id="noti_horario">14:30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
            <h1 onclick="relatar()" id="botaoRelatar">Relatar ocorrido</h1>
        <p><!--NÃO APAGA ESSE PARAGRAFO--></p>
    </main>
    <footer>

    </footer>
</body>
</html>