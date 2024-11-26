<!doctype html>
<html>

<head>
    <meta name="ac:route" content="/clientes">
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Untitled Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>
    <script src="dmxAppConnect/dmxCharts/Chart.min.js" defer></script>
    <script src="dmxAppConnect/dmxCharts/dmxCharts.js" defer></script>
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxBootstrap5TableGenerator/dmxBootstrap5TableGenerator.css" />
    <script src="dmxAppConnect/dmxSwiper/dmxSwiper.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxSwiper/swiper.min.css" />
    <script src="dmxAppConnect/dmxSwiper/swiper.min.js" defer></script>
    <script src="dmxAppConnect/dmxDataTraversal/dmxDataTraversal.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Tooltips/dmxBootstrap5Tooltips.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxMediumEditor/dmxMediumEditor.css" />
    <script src="dmxAppConnect/dmxMediumEditor/dmxMediumEditor.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxMediumEditor/medium-editor.css" />
    <script src="dmxAppConnect/dmxMediumEditor/medium-editor.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxMediumEditor/themes/default.css" />
</head>

<body is="dmx-app" id="home" class="style6">
    <dmx-serverconnect id="sc_clientes_processos" url="dmxConnect/api/clientes_processos.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_listar_clientes" url="dmxConnect/api/clientes.php"></dmx-serverconnect>
    <div is="dmx-browser" id="browser1"></div>


    <!doctype html>
    <html>

    <head>
        <meta name="ac:route" content="/clientes">
        <base href="/">
        <meta charset="UTF-8">
        <title>Untitled Document</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
        <link rel="stylesheet" href="dmxAppConnect/dmxBootstrap5TableGenerator/dmxBootstrap5TableGenerator.css" />
        <link rel="stylesheet" href="dmxAppConnect/dmxMediumEditor/dmxMediumEditor.css" />
        <link rel="stylesheet" href="dmxAppConnect/dmxMediumEditor/themes/default.css" />
    </head>

    <body is="dmx-app" id="home" class="style6">
        <dmx-serverconnect id="sc_clientes_processos" url="dmxConnect/api/clientes_processos.php"></dmx-serverconnect>
        <dmx-serverconnect id="sc_listar_clientes" url="dmxConnect/api/clientes.php"></dmx-serverconnect>
        <div is="dmx-browser" id="browser1"></div>


        <main class="dashboard">
            <div class="row row-cols-2 h-100">
                <div class="sidebar col-6 text-center">

                    <div class="d-flex justify-content-between topbar align-items-center pt-2 pb-2 pe-2">
                        <img src="assets/logo/as-favicon.png" height="35px"><button id="btn1" class="btn"><i class="fas fa-chevron-left"></i></button>
                    </div>
                    <div class="d-flex style9 mt-3 ps-4 pe-3 flex-column" dmx-style:gap="'10px'">
                        <button id="btn2" class="btn button text-start " dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/home\')`}})"><i class="fas fa-home">&nbsp; &nbsp;</i>Início</button>
                        <button id="btn3" class="btn button text-start nav-selected" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/agenda\')`}})"><i class="fas fa-user">&nbsp;&nbsp;</i>Clientes</button>
                        <button id="btn4" class="btn button text-start"><i class="fas fa-home">&nbsp;&nbsp;</i>Início</button>
                        <button id="btn5" class="btn button text-start"><i class="fas fa-home">&nbsp;&nbsp;</i>Início</button>
                    </div>



                </div>
                <div class="col main-content">
                    <div class="d-flex flex-row align-items-center topbar pt-2 pb-2 ps-5 pe-4">
                        <h1 class="title-page style8">Clientes</h1>
                    </div>

                    <div class="d-flex text-start justify-content-center flex-column w-100 pt-5 ps-5 pe-5" dmx-style:gap="'20px'">
                        <div class="d-flex" dmx-style:gap="'20px'">
                            <div class="d-flex table pt-3 pb-3 ps-3 pe-3 card-info w-50 flex-column justify-content-start">

                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <p class="text-secondary fw-bold align-self-center mb-0"><i class="far fa-clock card-icon" dmx-style:color="'#6C757D'"></i>Últimos clientes cadastrados</p>
                                </div>

                                <div class="table-responsive w-100">
                                    <table class="table table-hover w-100">
                                        <thead>
                                            <tr>
                                                <th class="text-secondary">Nome</th>
                                                <th class="text-secondary text-start">Tipo</th>
                                                <th class="text-secondary text-start">Departamento</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody is="dmx-repeat" dmx-generator="bs5table" dmx-bind:repeat="sc_listar_clientes.data.listar_clientes" id="tableRepeat1">
                                            <tr>
                                                <td dmx-text="nome" class="text-start"></td>
                                                <td dmx-text="tipo" class="text-start"></td>
                                                <td dmx-text="departamento" class="text-start"></td>
                                                <td dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/home\')`}})" dmx-bs-tooltip="'Ver mais'" data-bs-trigger="hover click" data-bs-placement="bottom" data-bs-html="true" dmx-style:cursor="'pointer'" class="text-center">...</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex table pt-3 pb-3 ps-3 pe-3 card-info w-50 flex-column justify-content-start">
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <p class="text-secondary fw-bold align-self-center mb-0"><i class="fas fa-flag card-icon" dmx-style:color="'#6C757D'"></i>Clientes em processos ativos</p>

                                </div>
                                <div>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>





                    </div>



                </div>



            </div>


        </main>
        <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
        <script>
            const ctx = document.getElementById('myChart');
        var x = dmx.app.data.sc_clientes_processos.data.clientes_totais_processos[0].total_clientes
        var y = dmx.app.data.sc_clientes_processos.data.clientes_totais_processos[0].clientes_com_processo_ativo
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Red', 'Blue'],
      datasets: [{
        label: '',
        data: [x, y],
      }]
    },
  });
        </script>
    </body>

    </html>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        var x = dmx.app.data.sc_clientes_processos.data.clientes_totais_processos[0].total_clientes
        var y = dmx.app.data.sc_clientes_processos.data.clientes_totais_processos[0].clientes_com_processo_ativo
  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Red', 'Blue'],
      datasets: [{
        label: '',
        data: [x, y],
      }]
    },
  });
    </script>
</body>

</html>