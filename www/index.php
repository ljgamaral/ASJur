<!DOCTYPE html>
<html lang="pt">

<head>
    <meta name="ac:route" content="/*">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dashboard Jurídico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha384-XGjxtQfXaH2tnPFa9x+ruJTuLE3Aa6LhHSWRr1XeTyhezb4abCG4ccI5AkVDxqC+" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <script src="dmxAppConnect/dmxBootstrap5Alert/dmxBootstrap5Alert.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxNotifications/dmxNotifications.css" />
    <script src="dmxAppConnect/dmxNotifications/dmxNotifications.js" defer></script>
    <script src="dmxAppConnect/dmxTyped/dmxTyped.js" defer></script>
    <script src="dmxAppConnect/dmxTyped/typed.min.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css" />
    <script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer></script>
    <link rel="icon" href="assets/logo/as-favicon.png" type="image/x-icon">
    <script src="dmxAppConnect/dmxBootbox5/bootstrap-modbox.min.js" defer></script>
    <script src="dmxAppConnect/dmxBootbox5/dmxBootbox5.js" defer></script>
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
</head>

<body class="d-flex align-items-center justify-content-center" is="dmx-app" id="login">
    <div is="dmx-browser" id="browser1"></div>

    <main class="main">
        <section>
            <div class="container content">


                <img src="assets/logo/as-horizontal.png" width="300px" class="style2 mb-3">
                <div class="d-block text-center style3">
                    <h5 class="display-6 style4 fw-normal">Entrar</h5>
                    <p class="text-light-emphasis mb-3">Insira as informações abaixo para prosseguir</p>
                </div>
                <div class="d-block style2 w-100">
                    <form action="dmxConnect/api/login.php" post-data="json" is="dmx-serverconnect-form" id="serverconnectform1" site="undefined" method="post" dmx-on:success="run({run:{outputType:'text',action:`browser1.goto(\'home.php\')`}})" dmx-on:unauthorized="">
                        <label for="email" class="label col-form-label">Email</label>
                        <input id="email" name="email" type="email" class="form-input"><label for="senha" class="label col-form-label">Senha</label>
                        <input id="senha" name="senha" type="password" class="form-input">
                        <button id="btn2" class="btn btn-dark w-100 button mt-2" style="--bs-btn-border-radius: 10px;" type="submit" dmx-on:click="">Entrar</button>

                    </form>

                </div>
            </div>

        </section>
        <div class="container image"></div>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>