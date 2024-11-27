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
    <dmx-serverconnect id="sr_captura_slug" url="dmxConnect/api/capturar_slug_cliente.php" dmx-param:slug="browser1.location.pathparts.last(1)"></dmx-serverconnect>
    <main class="dashboard" dmx-style:overflow-y="'scroll'">
        <div class="row row-cols-2 h-100">
            <div class="sidebar col-6 text-center">

                <div class="d-flex justify-content-between topbar align-items-center pt-2 pb-2 pe-2">
                    <img src="assets/logo/as-horizontal.png" height="35px"><button id="btn1" class="btn"><i class="fas fa-chevron-left"></i></button>
                </div>
                <div class="d-flex style9 mt-3 ps-4 pe-3 flex-column" dmx-style:gap="'10px'">
                    <button id="btn2" class="btn button text-start " dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/home\')`}})"><i class="fas fa-home">&nbsp; &nbsp;</i>Início</button>
                    <button id="btn3" class="btn button text-start nav-selected" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/clientes\')`}})"><i class="fas fa-user">&nbsp;&nbsp;</i>Clientes</button>
                    <button id="btn4" class="btn button text-start" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/processos\')`}})"><i class="fas fa-file-invoice">&nbsp;&nbsp;</i>Processos</button>
                    <button id="btn5" class="btn button text-start"><i class="fas fa-home">&nbsp;&nbsp;</i>Início</button>
                </div>



            </div>
            <div class="col main-content">
                <div class="d-flex flex-row align-items-center topbar pt-2 pb-2 ps-5 pe-4">
                    <h1 class="title-page style8">Detalhes</h1>
                </div>

                <div class="d-flex text-start justify-content-center flex-column w-100 pt-5 ps-5 pe-5" dmx-style:gap="'20px'">
                    <div class="d-flex flex-column justify-content-start mb-3" dmx-style:gap="'5px'">
                        <div class="d-flex table  ps-1 flex-column" dmx-show="!sr_captura_slug.data.query.isEmpty()">

                            <p class="text-secondary fw-bold">
                                <i class="fas fa-info card-icon-info"></i>Informações pessoais
                            </p>
                            <div class="d-flex">
                                <table class="table align-middle infos-table" dmx-style:width="">
                                    <tbody>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Nome</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].nome.isEmpty()">{{sr_captura_slug.data.query[0].nome}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].nome.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Responsável</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].responsavel.isEmpty()">{{sr_captura_slug.data.query[0].responsavel}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].responsavel.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Endereço</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].endereco.isEmpty()">{{sr_captura_slug.data.query[0].endereco}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].endereco.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Bairro</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].bairro.isEmpty()">{{sr_captura_slug.data.query[0].bairro}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].bairro.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Cidade</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].cidade.isEmpty()">{{sr_captura_slug.data.query[0].cidade}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].cidade.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">UF</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].uf.isEmpty()">{{sr_captura_slug.data.query[0].uf}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].uf.isEmpty()">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table align-middle infos-table">
                                    <tbody>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Departamento</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].nome.isEmpty()">{{sr_captura_slug.data.query[0].departamento}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].nome.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Data nascimento</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].responsavel.isEmpty()">{{sr_captura_slug.data.query[0].data_nascimento.formatDate('dd/MM/yyyy')}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].responsavel.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">CPF</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].endereco.isEmpty()">{{sr_captura_slug.data.query[0].cpf.replace(/\D/g, "").replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4")}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].endereco.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Estado civil</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].bairro.isEmpty()">{{sr_captura_slug.data.query[0].estado_civil}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].bairro.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Profissão</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].cidade.isEmpty()">{{sr_captura_slug.data.query[0].profissao}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].cidade.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Sexo</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].uf.isEmpty()">{{sr_captura_slug.data.query[0].sexo}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].uf.isEmpty()">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table align-middle infos-table">
                                    <tbody>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Filiação</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].nome.isEmpty()">{{sr_captura_slug.data.query[0].filiacao}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].nome.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Celular</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].responsavel.isEmpty()">{{sr_captura_slug.data.query[0].celular.replace(/\D/g, "").replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3")}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].responsavel.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Origem</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].endereco.isEmpty()">{{sr_captura_slug.data.query[0].origem}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].endereco.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Captador</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].bairro.isEmpty()">{{sr_captura_slug.data.query[0].captador}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].bairro.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Pessoa</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].cidade.isEmpty()">{{sr_captura_slug.data.query[0].tipo}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].cidade.isEmpty()">-</td>
                                        </tr>
                                        <tr class="align-middle celula-tabela">
                                            <td class="celula-tabela text-secondary">Cadastrado em</td>
                                            <td class="celula-tabela" dmx-show="!sr_captura_slug.data.query[0].uf.isEmpty()">{{sr_captura_slug.data.query[0].criado_em.formatDate('dd/MM/yyyy - hh:mm')}}</td>
                                            <td class="celula-tabela" dmx-show="sr_captura_slug.data.query[0].uf.isEmpty()">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>























                        </div>
                        <div class="d-flex" dmx-style:gap="'20px'">
                            <div class="d-flex w-50 align-items-center pt-3 pb-3 ps-3 pe-3 flex-column card-default" dmx-show="!sr_captura_slug.data.query.isEmpty()">
                                <div class="nav nav-tabs w-100">
                                    <button id="btn6" class="btn button-tab text-secondary" data-bs-toggle="tab" data-bs-target="#processos_tab1" is="dmx-button" value="" type="button">Processos</button>
                                    <button id="btn6" class="btn button-tab text-secondary" data-bs-toggle="tab" data-bs-target="#documentos_tab1" is="dmx-button" value="" type="button">Documentos</button>
                                    <button id="btn6" class="btn button-tab text-secondary" data-bs-toggle="tab" data-bs-target="#andamentos_tab1" is="dmx-button" value="" type="button">Andamentos</button>
                                </div>

                                <div class="tab-content" id="tab1" dmx-style:width="'100%'">
                                    <div class="tab-pane w-100 mt-3 fade" id="processos_tab1" role="tabpanel" aria-labelledby="btn6">
                                        <p class="text-secondary">Processos vinculados</p>
                                        <div class="table-responsive">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-secondary">Processo</th>
                                                            <th class="text-secondary">Último andamento</th>
                                                            <th class="text-secondary">Orgão</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody is="dmx-repeat" dmx-generator="bs5table" dmx-bind:repeat="sc_cliente_detalhes_processos.data.cliente_detalhes_processos" id="tableRepeat1">
                                                        <tr>
                                                            <td dmx-text="processo"></td>
                                                            <td dmx-text="ultimo_andamento"></td>
                                                            <td dmx-text="justica"></td>
                                                            <td dmx-bs-tooltip="'Mais detalhes'" data-bs-trigger="hover" data-bs-html="true" dmx-style:cursor="'pointer'" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/processos/\'+slug)`}})">...</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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
                                        <table class="table align-middle table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-secondary">Andamento</th>
                                                    <th class="text-secondary">Processo</th>
                                                    <th class="text-secondary">Data</th>
                                                    <th class="text-secondary">Criado em</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody is="dmx-repeat" dmx-generator="bs5table" dmx-bind:repeat="sc_cliente_detalhes_andamentos.data.query" id="tableRepeat2">
                                                <tr>
                                                    <td dmx-text="andamento"></td>
                                                    <td dmx-text="processo"></td>
                                                    <td dmx-text="data"></td>
                                                    <td dmx-text="criado_em"></td>
                                                    <td dmx-bs-tooltip="'Mais detalhes'" data-bs-trigger="hover" data-bs-html="true" dmx-style:cursor="'pointer'">...</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>





















                            </div>
                            <div class="d-flex card-info align-items-center pt-3 pb-3 ps-3 pe-3 flex-column justify-content-start h-25 w-50" dmx-show="!sr_captura_slug.data.query.isEmpty()">
                                <div class="d-flex w-100 align-items-center">
                                    <p class="text-secondary style14">
                                        <i class="fas fa-clock card-icon"></i>Timeline
                                    </p>
                                </div>
                                <div class="d-flex flex-row align-items-center w-50 justify-content-around" is="dmx-repeat" id="repeat1" dmx-bind:repeat="sc_cliente_detalhes_historico.data.query" key="id">
                                    <div class="d-flex flex-column justify-content-center text-end">

                                        <p class="small text-secondary lh-1">{{sc_cliente_detalhes_historico.data.query[0].criado_em.formatDate('dd MMM yyyy')}}</p>
                                        <p class="small text-secondary lh-1">{{sc_cliente_detalhes_historico.data.query[0].criado_em.formatDate('hh:mm')}}</p>

                                    </div>
                                    <div class="d-flex">
                                        <p class="text-black">{{descricao}}</p>
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