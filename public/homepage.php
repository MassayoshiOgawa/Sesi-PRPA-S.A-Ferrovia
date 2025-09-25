<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../scripts/homepage/verRotas.js" defer></script>
    <script src="../scripts/homepage/atualizaHorario.js" defer></script>
    <script src="../scripts/homepage/barraLateral.js" defer></script>
    <script src="../scripts/homepage/homepage.js" defer></script>
    <script src="../scripts/OpcoesBarraLateral/notificacoes.js" defer></script>
    <title>Ferrovia</title>
</head>

<body>
    <header>
        <div class="flex width">
            <div class="headerSideBox"><img src="../assets/tresbarra.png" alt="" class="headerImage" id="tresBarraInicial" onclick="barFunction()" style="z-index: 21;"></div>
            <div class="headerMiddleBox">
                <h1>GitTrens</h1>
            </div>
            <div class="headerSideBox">
                <p id="horarioJS" style="font-weight: bold;"></p>
            </div>
        </div>
    </header>
    <main>

        <div class="containerMapaFerrovia">
            <img src="../assets/mapa/mainMapa.png" alt="">
            <img src="../assets/mapa/rota1Mapa.png" alt="" style="opacity: 0; z-index: 2;" id="rota1">
            <img src="../assets/mapa/rota2Mapa.png" alt="" style="opacity: 0; z-index: 2;" id="rota2">
            <img src="../assets/mapa/rota3Mapa.png" alt="" style="opacity: 0; z-index: 2;" id="rota3">
        </div>

        <!--INÍCIO BARRA LATERAL-->
        <div id="barraLateral">
            <div id="tresBarraContainer">
                <img src="" id="tresBarraFinal" onclick="barFunction()">
            </div>


            <div class="flex barraOpcoes">
                <div class="barraOpcoesSideLine"></div>
                <button onclick="irParaAbaRelatorioTrens()">
                    <h2>Relatório Trens</h2>
                </button>
            </div>
            <div class="flex barraOpcoes">
                <div class="barraOpcoesSideLine"></div>
                <button onclick="irParaAbaRelatorioRotas()">
                    <h2>Relatório Rotas</h2>
                </button>
            </div>
            <div class="flex barraOpcoes">
                <div class="barraOpcoesSideLine"></div>
                <button onclick="irParaAbaPerfil()">
                    <h2>Perfil</h2>
                </button>
            </div>
            <div class="flex barraOpcoes">
                <div class="barraOpcoesSideLine"></div>
                <button onclick="irParaAbaNotificacoes()">
                    <h2>Alertas</h2>
                </button>
            </div>
            <div class="flex barraOpcoes">
                <div class="barraOpcoesSideLine"></div>
                <button onclick="logOut()">
                    <h2>Voltar Para login</h2>
                </button>
            </div>

            <div class="flex barraOpcoes">
                <div class="barraOpcoesSideLine"></div>
                <button onclick="usuarios()">
                    <h2>Gerenciar usuários</h2>
                </button>
            </div>
        </div>
        <!--FIM BARRA LATERAL-->
    </main>
    <footer>
        <div class="containerVerRotas" id="containerVerRotas">
            <div class="grayLine" onclick="verRotas()"></div>
            <div class="boxRotas" onclick="selecionarRota(this, 1)">
                <p>Rota 1</p>
                <div class="colorRota1"></div>
            </div>
            <div class="boxRotas" onclick="selecionarRota(this, 2)">
                <p>Rota 2</p>
                <div class="colorRota2"></div>
            </div>
            <div class="boxRotas" onclick="selecionarRota(this, 3)">
                <p>Rota 3</p>
                <div class="colorRota3"></div>
            </div>
        </div>
    </footer>
</body>

</html>