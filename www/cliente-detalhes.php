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
    <link rel="stylesheet" href="dmxAppConnect/dmxBootstrap5TableGenerator/dmxBootstrap5TableGenerator.css" />
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.17.7/dist/tagify.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify@4.17.7/dist/tagify.css" />
    <script src="dmxAppConnect/dmxTagify/dmxTagify.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Tooltips/dmxBootstrap5Tooltips.js" defer></script>
</head>

<body is="dmx-app" id="clientedetalhes">
    <dmx-serverconnect id="sc_cliente_detalhes_historico" url="dmxConnect/api/cliente_detalhes_historico.php" dmx-param:id_cliente="sr_captura_slug.data.query[0].id"></dmx-serverconnect>
    <dmx-serverconnect id="sc_cliente_detalhes_andamentos" url="dmxConnect/api/cliente_detalhes_andamentos.php" dmx-param:id_cliente="sr_captura_slug.data.query[0].id"></dmx-serverconnect>


    <div is="dmx-browser" id="browser1"></div>
    <dmx-serverconnect id="sc_cliente_detalhes_documentos" url="dmxConnect/api/cliente_detalhes_documentos.php" dmx-param:id_cliente="sr_captura_slug.data.query[0].id"></dmx-serverconnect>
    <dmx-serverconnect id="sc_cliente_detalhes_processos" url="dmxConnect/api/cliente_detalhes_processos.php" dmx-param:id_cliente="sr_captura_slug.data.query[0].id"></dmx-serverconnect>
    <dmx-serverconnect id="sr_captura_slug" url="dmxConnect/api/capturar_slug.php" dmx-param:slug="browser1.location.pathparts.last(1)"></dmx-serverconnect>
    <main class="dashboard" dmx-style:overflow-y="'scroll'">
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
                    <div class="d-flex flex-column justify-content-start" dmx-style:gap="'20px'">
                        <div class="d-flex table pt-3 pb-3 ps-3 pe-3 card-info flex-row w-100 justify-content-center" dmx-show="!sr_captura_slug.data.query.isEmpty()">

                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-start mb-2 align-items-center">
                                    <p class="fw-bold align-self-center mb-0 text-black text-start">Data de cadastro:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0 text-start">{{sr_captura_slug.data.query[0].criado_em.formatDate('dd MMM yyyy - hh:mm')}}</p>
                                </div>
                                <div class="d-flex justify-content-start mb-2 align-items-center">
                                    <p class="fw-bold align-self-center mb-0 text-black text-start">Estado civil:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0 text-start">{{sr_captura_slug.data.query[0].estado_civil}}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <p class="fw-bold align-self-center mb-0 text-black">Profissão:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0">{{sr_captura_slug.data.query[0].profissao}}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <p class="fw-bold align-self-center mb-0 text-black">Endereço:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0">{{sr_captura_slug.data.query[0].endereco}}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <p class="fw-bold align-self-center mb-0 text-black">Celular:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0">{{sr_captura_slug.data.query[0].celular}}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <p class="fw-bold align-self-center mb-0 text-black">Data de nascimento:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0">{{sr_captura_slug.data.query[0].data_nascimento.formatDate('dd/MM/yyyy')}}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <p class="fw-bold align-self-center mb-0 text-black">Sexo:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0">{{sr_captura_slug.data.query[0].sexo}}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <p class="fw-bold align-self-center mb-0 text-black">Responsável:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0">{{sr_captura_slug.data.query[0].responsavel}}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <p class="fw-bold align-self-center mb-0 text-black">Pessoa:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0">{{sr_captura_slug.data.query[0].tipo.capitalize()}}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-start mb-2">
                                    <p class="fw-bold align-self-center mb-0 text-black">Nome:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0">{{sr_captura_slug.data.query[0].nome}}</p>
                                </div>
                            </div>









                            <div class="d-flex flex-column">

                                <div class="d-flex justify-content-start mb-2 align-items-center">
                                    <p class="fw-bold align-self-center mb-0 text-black text-start">Departamento:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0 text-start">{{sr_captura_slug.data.query[0].departamento}}</p>
                                </div>
                                <div class="d-flex justify-content-start mb-2 align-items-center">
                                    <p class="fw-bold align-self-center mb-0 text-black text-start">CEP:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0 text-start">{{sr_captura_slug.data.query[0].cep}}</p>
                                </div>
                                <div class="d-flex justify-content-start mb-2 align-items-center">
                                    <p class="fw-bold align-self-center mb-0 text-black text-start">Cidade:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0 text-start">{{sr_captura_slug.data.query[0].cidade}}</p>
                                </div>
                                <div class="d-flex justify-content-start mb-2 align-items-center">
                                    <p class="fw-bold align-self-center mb-0 text-black text-start">Bairro:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0 text-start">{{sr_captura_slug.data.query[0].bairro}}</p>
                                </div>
                                <div class="d-flex justify-content-start mb-2 align-items-center">
                                    <p class="fw-bold align-self-center mb-0 text-black text-start">CPF:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0 text-start">{{sr_captura_slug.data.query[0].cpf}}</p>
                                </div>
                                <div class="d-flex justify-content-start mb-2 align-items-center">
                                    <p class="fw-bold align-self-center mb-0 text-black text-start">RG:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0 text-start">{{sr_captura_slug.data.query[0].rg}}</p>
                                </div>
                                <div class="d-flex justify-content-start mb-2 align-items-center">
                                    <p class="fw-bold align-self-center mb-0 text-black text-start">Captador:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0 text-start">{{sr_captura_slug.data.query[0].captador}}</p>
                                </div>
                                <div class="d-flex justify-content-start mb-2 align-items-center">
                                    <p class="fw-bold align-self-center mb-0 text-black text-start">Filiação:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0 text-start">{{sr_captura_slug.data.query[0].filiacao}}</p>
                                </div>
                                <div class="d-flex justify-content-start mb-2 align-items-center">
                                    <p class="fw-bold align-self-center mb-0 text-black text-start">Origem:&nbsp;</p>
                                    <p class="text-secondary align-self-center mb-0 text-start">{{sr_captura_slug.data.query[0].origem}}</p>
                                </div>
                            </div>











                        </div>
                        <div class="d-flex" dmx-style:gap="'20px'">
                            <div class="d-flex w-50 align-items-center pt-3 pb-3 ps-3 pe-3 flex-column card-default" dmx-show="!sr_captura_slug.data.query.isEmpty()">
                                <div class="nav nav-tabs">
                                    <button id="btn6" class="btn button-tab text-secondary" data-bs-toggle="tab" data-bs-target="#processos_tab1" is="dmx-button" value="" type="button">Processos</button>
                                    <button id="btn6" class="btn active button-tab text-secondary" data-bs-toggle="tab" data-bs-target="#documentos_tab1" is="dmx-button" value="" type="button">Documentos</button>
                                    <button id="btn6" class="btn button-tab text-secondary" data-bs-toggle="tab" data-bs-target="#andamentos_tab1" is="dmx-button" value="" type="button">Andamentos</button>
                                </div>

                                <div class="tab-content" id="tab1">
                                    <div class="tab-pane w-100 mt-3 fade" id="processos_tab1" role="tabpanel" aria-labelledby="btn1">
                                        <p class="text-secondary">Processos vinculados</p>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-secondary">Descrição</th>
                                                        <th class="text-secondary">Status</th>
                                                        <th class="text-secondary">Último andamento</th>
                                                        <th class="text-secondary">Autor</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody is="dmx-repeat" dmx-generator="bs5table" dmx-bind:repeat="sc_cliente_detalhes_processos.data.cliente_detalhes_processos" id="tableRepeat1">
                                                    <tr>
                                                        <td dmx-text="descricao"></td>
                                                        <td dmx-text="status"></td>
                                                        <td dmx-text="ultimo_andamento"></td>
                                                        <td dmx-text="autor"></td>
                                                        <td dmx-style:cursor="'pointer'" dmx-bs-tooltip="'Mais detalhes'" data-bs-trigger="hover" class="text-secondary">...</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade mt-3" id="documentos_tab1" role="tabpanel" aria-labelledby="btn2">
                                        <p class="text-secondary">Documentos vinculados</p>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-secondary">Nome</th>
                                                    <th class="text-secondary">Tipo</th>
                                                    <th class="text-secondary">Descricao</th>
                                                    <th class="text-secondary">Criado em</th>
                                                </tr>
                                            </thead>
                                            <tbody is="dmx-repeat" dmx-generator="bs5table" dmx-bind:repeat="sc_cliente_detalhes_documentos.data.cliente_detalhes_documentos" id="tableRepeat4">
                                                <tr>
                                                    <td dmx-text="nome"></td>
                                                    <td dmx-text="tipo"></td>
                                                    <td dmx-text="descricao"></td>
                                                    <td dmx-text="criado_em"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade mt-3" id="andamentos_tab1" role="tabpanel">
                                        <p class="text-secondary">Andamentos vinculados</p>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-secondary">Descricao</th>
                                                    <th class="text-secondary">Data</th>
                                                    <th class="text-secondary">Status</th>
                                                    <th class="text-secondary">Criado em</th>
                                                </tr>
                                            </thead>
                                            <tbody is="dmx-repeat" dmx-generator="bs5table" dmx-bind:repeat="sc_cliente_detalhes_andamentos.data.query" id="tableRepeat4">
                                                <tr>
                                                    <td dmx-text="descricao"></td>
                                                    <td dmx-text="data"></td>
                                                    <td dmx-text="status"></td>
                                                    <td dmx-text="criado_em"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>





















                            </div>
                            <div class="d-flex card-info w-50 align-items-center pt-3 pb-3 ps-3 pe-3 flex-column justify-content-start" dmx-show="!sr_captura_slug.data.query.isEmpty()">
                                <div class="d-flex w-100">
                                    <p class="text-secondary">Timeline</p>
                                </div>
                                <div class="d-flex flex-row" is="dmx-repeat" id="repeat1" dmx-bind:repeat="sc_cliente_detalhes_historico.data.query" key="id">
                                    <div class="d-flex flex-column justify-content-center text-center">

                                        <p class="small text-secondary lh-1">{{sc_cliente_detalhes_historico.data.query[0].criado_em.formatDate('dd MMM yyyy')}}</p>
                                        <p class="small text-secondary lh-1">{{sc_cliente_detalhes_historico.data.query[0].criado_em.formatDate('hh:mm')}}</p>

                                    </div>
                                </div>























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