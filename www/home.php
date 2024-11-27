<!doctype html>
<html lang="pt">

<head>
    <meta name="ac:route" content="/home">
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Início - AS Jurídico</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>
    <script src="dmxAppConnect/dmxCharts/Chart.min.js" defer></script>
    <script src="dmxAppConnect/dmxCharts/dmxCharts.js" defer></script>
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
</head>

<body is="dmx-app" id="Incio" class="style6">
    <div is="dmx-browser" id="browser1"></div>
    <dmx-serverconnect id="sc_listar_clientes_novos" url="dmxConnect/api/listar_clientes.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_listar_andamentos" url="dmxConnect/api/listar_andamentos.php"></dmx-serverconnect>


    <main class="dashboard">
        <div class="row row-cols-2 h-100">
            <div class="sidebar col-6 text-center">

                <div class="d-flex justify-content-between topbar align-items-center pt-2 pb-2 pe-2">
                    <img src="assets/logo/as-favicon.png" height="35px"><button id="btn1" class="btn"><i class="fas fa-chevron-left"></i></button>
                </div>
                <div class="d-flex style9 mt-3 ps-4 pe-3 flex-column" dmx-style:gap="'10px'">
                    <button id="btn2" class="btn button text-start nav-selected"><i class="fas fa-home">&nbsp; &nbsp;</i>Início</button>
                    <button id="btn3" class="btn button text-start" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/clientes\')`}})"><i class="fas fa-user">&nbsp;&nbsp;</i>Clientes</button>
                    <button id="btn4" class="btn button text-start"><i class="fas fa-home">&nbsp;&nbsp;</i>Início</button>
                    <button id="btn5" class="btn button text-start"><i class="fas fa-home">&nbsp;&nbsp;</i>Início</button>
                </div>



            </div>
            <div class="col main-content">
                <div class="d-flex flex-row align-items-center topbar pt-2 pb-2 ps-5 pe-4">
                    <h1 class="title-page style8">Início</h1>
                </div>

                <div class="d-flex text-start justify-content-center flex-column w-100 pt-5 ps-5 pe-5" dmx-style:gap="'20px'">
                    <div class="d-flex w-100" dmx-style:gap="'20px'">

                        <div class="d-block card-info pt-xxl-3 pb-xxl-3 ps-xxl-3 pe-xxl-3 pt-3 pb-3 ps-3 pe-3">
                            <div class="d-flex align-items-center">
                                <p class="text-secondary fw-bolder"><i class="fas fa-user card-icon"></i>Total Clientes</p>
                            </div>

                            <div class="d-flex flex-xxl-row justify-content-between align-items-center">
                                <p class="fw-bold info-card">{{sc_listar_clientes_novos.data.listar_clientes_clientes_novos[0].total_clientes}}</p>
                            </div>
                        </div>
                        <div class="d-block card-info pt-xxl-3 pb-xxl-3 ps-xxl-3 pe-xxl-3 pt-3 pb-3 ps-3 pe-3">
                            <p class="text-secondary fw-bolder"><i class="fas fa-user-plus card-icon"></i>
                                Clientes Novos</p>
                            <div class="d-flex flex-xxl-row">
                                <p class="fw-bold info-card">{{sc_listar_clientes_novos.data.listar_clientes_clientes_novos[0].novos_clientes}}</p>
                            </div>
                        </div>
                        <div class="d-block card-info pt-xxl-3 pb-xxl-3 ps-xxl-3 pe-xxl-3 pt-3 pb-3 ps-3 pe-3">
                            <p class="text-secondary fw-bolder"><i class="fas fa-hourglass card-icon"></i>
                                Total Andamentos</p>
                            <div class="d-flex flex-xxl-row">
                                <p class="fw-bold info-card">{{sc_listar_andamentos.data.listar_andamentos[0].total_andamentos}}</p>
                            </div>
                        </div>
                        <div class="d-block card-info pt-xxl-3 pb-xxl-3 ps-xxl-3 pe-xxl-3 pt-3 pb-3 ps-3 pe-3">
                            <p class="text-secondary fw-bolder"><i class="fas fa-plus card-icon"></i>Andamentos Novos</p>
                            <div class="d-flex flex-xxl-row">
                                <p class="fw-bold info-card">{{sc_listar_andamentos.data.listar_andamentos[0].andamentos_recentes}}</p>
                            </div>
                        </div>


                    </div>
                    <div class="d-flex" dmx-style:gap="'20px'">
                        <div class="d-flex flex-row w-50" dmx-style:gap="'10px'">
                            <div class="d-flex w-100 card-info flex-column pt-3 pb-3 ps-3 pe-3">
                                <div class="d-flex justify-content-between align-items-center mb-4 flex-column">

                                    <div>
                                        <h5 class="card-title mb-1">Relatório Anual</h5>
                                        <p class="text-muted m-0">Dados de Atendimentos e Clientes</p>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-custom dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Exportar PDF</a></li>
                                            <li><a class="dropdown-item" href="#">Exportar Excel</a></li>
                                            <li><a class="dropdown-item" href="#">Imprimir</a></li>
                                        </ul>
                                    </div>
                                    <dmx-chart id="chart2" dataset-1="" width="" responsive="true" dmx-bind:data="" label-x="'Mês'" label-y="'Quantidade'" labels="'(Mês, Quantidade)'"></dmx-chart>
                                </div>
                                <div class="chart-container">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex pt-2 pb-2 ps-2 pe-2 card-info w-50">
                            <dmx-chart id="chart1" dataset-1="" height="80" width="" point-size="" type="bar" colors="colors1" responsive="true" legend="bottom" class="style10" cutout="" dmx-bind:data="sc_listar_clientes_novos.data.listar_clientes_clientes_novos[0].total_clientes"></dmx-chart>
                        </div>
                    </div>


                </div>



            </div>



        </div>


    </main>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>