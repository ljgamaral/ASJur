<!doctype html>
<html lang="pt">

<head>
    <meta name="ac:route" content="/processos/:slug">
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Processo detalhes</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <link rel="icon" href="assets/logo/as-favicon.png" type="image/png">
    <link rel="stylesheet" href="dmxAppConnect/dmxBootstrap5TableGenerator/dmxBootstrap5TableGenerator.css" />
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.17.7/dist/tagify.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.17.7/dist/tagify.css" />
    <script src="dmxAppConnect/dmxTagify/dmxTagify.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Tooltips/dmxBootstrap5Tooltips.js" defer></script>
</head>

<body is="dmx-app" id="clientedetalhes">


    <div is="dmx-browser" id="browser1"></div>
    <dmx-serverconnect id="sr_captura_slug_processo" url="dmxConnect/api/capturar_slug_processo.php" dmx-param:slug="browser1.location.pathparts.last(1)"></dmx-serverconnect>
    <main class="dashboard" dmx-style:overflow-y="'scroll'">
        <div class="row row-cols-2 h-100">
            <div class="sidebar col-6 text-center">

                <div class="d-flex justify-content-between topbar align-items-center pt-2 pb-2 pe-2">
                    <img src="assets/logo/as-horizontal.png" height="35px"><button id="btn1" class="btn"><i class="fas fa-chevron-left"></i></button>
                </div>
                <div class="d-flex style9 mt-3 ps-4 pe-3 flex-column" dmx-style:gap="'10px'">
                    <button id="btn2" class="btn button text-start " dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/home\')`}})"><i class="fas fa-home">&nbsp; &nbsp;</i>Início</button>
                    <button id="btn3" class="btn button text-start" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/clientes\')`}})"><i class="fas fa-user">&nbsp;&nbsp;</i>Clientes</button>
                    <button id="btn4" class="btn button text-start nav-selected" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/processos\')`}})"><i class="fas fa-file-invoice">&nbsp;&nbsp;</i>Processos</button>
                    <button id="btn5" class="btn button text-start"><i class="fas fa-home">&nbsp;&nbsp;</i>Início</button>
                </div>



            </div>
            <div class="col main-content">
                <div class="d-flex flex-row align-items-center topbar pt-2 pb-2 ps-5 pe-4">
                    <h1 class="title-page style8">Detalhes</h1>
                </div>

                <div class="d-flex text-start justify-content-center flex-column w-100 pt-5 ps-5 pe-5" dmx-style:gap="'20px'">
                    <div class="d-flex flex-column justify-content-start" dmx-style:gap="'5px'">
                        <div class="d-flex card-info w-100 pt-3 pb-3 ps-3 pe-3 flex-row">
                            <table class="table table-sm align-middle w-25">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Processo</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].processo">{{sr_captura_slug_processo.data.query[0].processo}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].processo.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Descrição</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].descricao.isEmpty()">{{sr_captura_slug_processo.data.query[0].descricao}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].descricao.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Status</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].status.isEmpty()">{{sr_captura_slug_processo.data.query[0].status}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].status.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Data distribuição</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].data_distribuicao.isEmpty()">{{sr_captura_slug_processo.data.query[0].data_distribuicao}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].data_distribuicao.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Data conclusão</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].data_conclusao.isEmpty()">{{sr_captura_slug_processo.data.query[0].data_conclusao}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].data_conclusao.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Último andamento</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].ultimo_andamento.isEmpty()">{{sr_captura_slug_processo.data.query[0].ultimo_andamento}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].ultimo_andamento.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Penúltimo andamento</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].penultimo_andamento.isEmpty()">{{sr_captura_slug_processo.data.query[0].penultimo_andamento}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].penultimo_andamento.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Justiça</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].justica.isEmpty()">{{sr_captura_slug_processo.data.query[0].justica}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].justica.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Comarca</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].comarca.isEmpty()">{{sr_captura_slug_processo.data.query[0].comarca}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].comarca.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Vara</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].vara.isEmpty()">{{sr_captura_slug_processo.data.query[0].vara}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].vara.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Tese</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].tese.isEmpty()">{{sr_captura_slug_processo.data.query[0].tese}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].tese.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Autor</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].autor.isEmpty()">{{sr_captura_slug_processo.data.query[0].autor}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].autor.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Réu</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].reu.isEmpty()">{{sr_captura_slug_processo.data.query[0].reu}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].reu.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Link</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].url.isEmpty()" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(sr_captura_slug_processo.data.query[0].url)`}})" dmx-style:cursor="'pointer'">{{sr_captura_slug_processo.data.query[0].url}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].url.isEmpty()">-</td>
                                    </tr>
                                    <tr>
                                        <td class="celula-tabela text-secondary">Criado em</td>
                                        <td class="celula-tabela" dmx-show="!sr_captura_slug_processo.data.query[0].criado_em.isEmpty()">{{sr_captura_slug_processo.data.query[0].criado_em.formatDate('dd/MM/yyyy - hh:mm')}}</td>
                                        <td class="celula-tabela" dmx-show="sr_captura_slug_processo.data.query[0].criado_em.isEmpty()">-</td>
                                    </tr>
                                </tbody>
                            </table>



                        </div>


                    </div>





                </div>



            </div>



        </div>


    </main>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>