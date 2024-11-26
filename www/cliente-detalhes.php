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
</head>

<body is="dmx-app" id="clientedetalhes">
    <div is="dmx-browser" id="browser1"></div>
    <dmx-serverconnect id="sr_captura_slug" url="dmxConnect/api/capturar_slug.php" dmx-param:slug="browser1.location.pathparts.last(1)"></dmx-serverconnect>
    <h1>{{sr_captura_slug.data.query[0].nome}}</h1>
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>