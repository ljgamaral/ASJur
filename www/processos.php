<!doctype html>
<html>
<!doctype html>
<html lang="pt">

<head>
    <meta name="ac:route" content="/processos">
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Processos - AS Jurídico</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>
    <script src="dmxAppConnect/dmxCharts/Chart.min.js" defer></script>
    <script src="dmxAppConnect/dmxCharts/dmxCharts.js" defer></script>
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
    <link rel="icon" href="assets/logo/as-favicon.png" type="image/png">
    <link rel="stylesheet" href="dmxAppConnect/dmxBootstrap5TableGenerator/dmxBootstrap5TableGenerator.css" />
    <script src="dmxAppConnect/dmxBootstrap5Tooltips/dmxBootstrap5Tooltips.js" defer></script>
</head>

<body is="dmx-app" id="Incio" class="style6">
    <dmx-serverconnect id="sc_listar_processos" url="dmxConnect/api/listar_processos.php"></dmx-serverconnect>
    <div is="dmx-browser" id="browser1"></div>


    <main class="dashboard">
        <div class="row row-cols-2 h-100">
            <div class="sidebar col-6 text-center">

                <div class="d-flex justify-content-between topbar align-items-center pt-2 pb-2 pe-2">
                    <img src="assets/logo/as-horizontal.png" height="35px"><button id="btn1" class="btn"><i class="fas fa-chevron-left"></i></button>
                </div>
                <div class="d-flex style9 mt-3 ps-4 pe-3 flex-column" dmx-style:gap="'10px'">
                    <button id="btn2" class="btn button text-start" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'home.php\')`}})"><i class="fas fa-home">&nbsp; &nbsp;</i>Início</button>
                    <button id="btn3" class="btn button text-start" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/clientes\')`}})"><i class="fas fa-user">&nbsp;&nbsp;</i>Clientes</button>
                    <button id="btn4" class="btn button text-start nav-selected"><i class="fas fa-file-invoice">&nbsp;&nbsp;</i>Processos</button>
                    <button id="btn5" class="btn button text-start"><i class="fas fa-home">&nbsp;&nbsp;</i>Início</button>
                </div>



            </div>
            <div class="col main-content">
                <div class="d-flex flex-row align-items-center topbar pt-2 pb-2 ps-5 pe-4">
                    <h1 class="title-page style8">Processos</h1>
                </div>

                <div class="d-flex text-start justify-content-center flex-column w-100 pt-5 ps-5 pe-5" dmx-style:gap="'20px'">
                    <div class="d-flex  card-default pt-3 pb-3 ps-3 pe-3 flex-column" dmx-style:gap="'20px'">

                        <p class="text-secondary fw-bold"><i class="fas fa-bars card-icon"></i>Lista de processos</p>
                        <table class="table align-middle table-hover">
                            <thead>
                                <tr>
                                    <th class="text-secondary">Processo</th>
                                    <th class="text-secondary">Último andamento</th>
                                    <th class="text-secondary">Órgão</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody is="dmx-repeat" dmx-generator="bs5table" dmx-bind:repeat="sc_listar_processos.data.listar_processos" id="tableRepeat2">
                                <tr>
                                    <td dmx-text="processo"></td>
                                    <td dmx-text="ultimo_andamento"></td>
                                    <td dmx-text="justica"></td>
                                    <td class="text-secondary" dmx-bs-tooltip="'Mais detalhes'" data-bs-trigger="hover" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/processos/\'+sc_listar_processos.data.listar_processos[0].slug)`}})" dmx-style:cursor="'pointer'">...</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>



            </div>



        </div>


    </main>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>