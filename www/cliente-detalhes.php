<!doctype html>
<html lang="pt">

<head>
    <meta name="ac:route" content="/clientes/:slug">
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Cliente detalhes</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <link rel="icon" href="assets/logo/as-favicon.png" type="image/png">
</head>

<body is="dmx-app" id="clientedetalhes">
    <div is="dmx-browser" id="browser1"></div>
    <dmx-serverconnect id="sr_captura_slug" url="dmxConnect/api/capturar_slug.php" dmx-param:slug="browser1.location.pathparts.last(1)"></dmx-serverconnect>
    <main class="dashboard">
        <div class="row row-cols-2 h-100">
            <div class="sidebar col-6 text-center">

                <div class="d-flex justify-content-between topbar align-items-center pt-2 pb-2 pe-2">
                    <img src="assets/logo/as-horizontal.png" height="35px"><button id="btn1" class="btn"><i class="fas fa-chevron-left"></i></button>
                </div>
                <div class="d-flex style9 mt-3 ps-4 pe-3 flex-column" dmx-style:gap="'10px'">
                    <button id="btn2" class="btn button text-start " dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/home\')`}})"><i class="fas fa-home">&nbsp; &nbsp;</i>Início</button>
                    <button id="btn3" class="btn button text-start nav-selected" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/clientes\')`}})"><i class="fas fa-user">&nbsp;&nbsp;</i>Clientes</button>
                    <button id="btn4" class="btn button text-start"><i class="fas fa-home">&nbsp;&nbsp;</i>Início</button>
                    <button id="btn5" class="btn button text-start"><i class="fas fa-home">&nbsp;&nbsp;</i>Início</button>
                </div>



            </div>
            <div class="col main-content">
                <div class="d-flex flex-row align-items-center topbar pt-2 pb-2 ps-5 pe-4">
                    <h1 class="title-page style8">Detalhe</h1>
                </div>

                <div class="d-flex text-start justify-content-center flex-column w-100 pt-5 ps-5 pe-5" dmx-style:gap="'20px'">
                    <div class="d-flex" dmx-style:gap="'20px'">
                        <div class="d-flex table pt-3 pb-3 ps-3 pe-3 card-info justify-content-start w-100 flex-column" dmx-show="!sr_captura_slug.data.query.isEmpty()">

                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <p class="fw-bold align-self-center mb-0 text-black">Nome:&nbsp;</p>
                                <p class="text-secondary align-self-center mb-0">{{sr_captura_slug.data.query[0].nome}}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <p class="fw-bold align-self-center mb-0 text-black">Pessoa:&nbsp;</p>
                                <p class="text-secondary align-self-center mb-0">{{sr_captura_slug.data.query[0].tipo.capitalize()}}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-start mb-2">
                                <p class="fw-bold align-self-center mb-0 text-black">Responsável:&nbsp;</p>
                                <p class="text-secondary align-self-center mb-0">{{sr_captura_slug.data.query[0].responsavel}}</p>
                            </div>

                        </div>
                        <div class="d-flex pt-3 pb-3 ps-3 pe-3  justify-content-start w-100 flex-column" dmx-show="sr_captura_slug.data.query.isEmpty()">

                            <div class="d-flex align-items-center justify-content-start mb-2 flex-column">
                                <p class="fw-bold align-self-center mb-0 text-black">Este cliente não existe</p>
                                <p class="text-secondary align-self-center text-center mt-2 mb-0">O cliente que você está buscando não existe, ou a página pode ter sido removida. <a href="/home">Voltar para o início.</a></p>
                            </div>

                        </div>
                    </div>





                </div>



            </div>



        </div>


    </main>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>