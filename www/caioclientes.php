<!doctype html>
<html lang="pt">

<head>
    <meta name="ac:route" content="/clientes">
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Clientes - AS Jurídico</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="assets/logo/as-favicon.png" type="image/png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="dmxAppConnect/dmxBootstrap5Modal/dmxBootstrap5Modal.js" defer></script>
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <script src="dmxAppConnect/dmxDataTraversal/dmxDataTraversal.js" defer></script>
    <script src="dmxAppConnect/dmxStateManagement/dmxStateManagement.js" defer></script>
    <script src="dmxAppConnect/dmxNotifications/dmxNotifications.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Tooltips/dmxBootstrap5Tooltips.js" defer></script>

    <style>
        :root {
            --primary-color: #2c2c2c;
            --secondary-color: #666666;
            --accent-color: #1a1a1a;
            --light-gray: #f5f5f5;
            --medium-gray: #e0e0e0;
            --dark-gray: #333333;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-gray);
            color: var(--primary-color);
        }

        /* Sidebar Styles */
        .sidebar {
            background: white;
            box-shadow: 2px 0 20px rgba(0, 0, 0, 0.1);
            height: 100vh;
            position: fixed;
            padding: 0;
            z-index: 100;
            transition: all 0.3s ease;
        }

        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--medium-gray);
            margin-bottom: 1rem;
        }

        .nav-item {
            margin: 0.5rem 1rem;
        }

        .nav-link {
            color: var(--secondary-color);
            padding: 0.8rem 1.2rem;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .nav-link:hover {
            background: var(--light-gray);
            color: var(--primary-color) !important;
        }

        .nav-link.active {
            background: var(--primary-color);
            color: white !important;
        }

        .nav-link i {
            width: 20px;
            margin-right: 10px;
            font-size: 1.1rem;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
            background: white;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .stats-card {
            padding: 1.5rem;
        }

        .stats-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            background: var(--light-gray);
            color: var(--primary-color);
            font-size: 1.5rem;
        }

        .stats-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.25rem;
        }

        .stats-label {
            color: var(--secondary-color);
            font-size: 0.875rem;
            font-weight: 500;
        }

        /* Header */
        .page-header {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            margin-bottom: 2rem;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
        }

        .page-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--primary-color);
            margin: 0;
            line-height: 1.2;
        }

        .page-subtitle {
            color: var(--secondary-color);
            font-size: 1rem;
            margin-top: 0.5rem;
        }

        /* Buttons */
        .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--accent-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Table */
        .table-container {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
        }

        .table {
            margin: 0;
        }

        .table thead th {
            background: var(--light-gray);
            border: none;
            color: var(--secondary-color);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            padding: 1rem;
        }

        .table tbody td {
            padding: 1rem;
            border-bottom: 1px solid var(--medium-gray);
            color: var(--primary-color);
            font-size: 0.875rem;
            vertical-align: middle;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        /* Status Badge */
        .status-badge {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.025em;
            background: var(--light-gray);
            color: var(--primary-color);
        }

        /* Action Buttons */
        .action-buttons .btn {
            width: 32px;
            height: 32px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            margin: 0 4px;
            transition: all 0.2s ease;
            border: 1px solid var(--medium-gray);
            color: var(--secondary-color);
        }

        .action-buttons .btn:hover {
            background: var(--light-gray);
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Avatar */
        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: var(--light-gray);
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 1.2rem;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease forwards;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .page-header {
                padding: 1.5rem;
                margin-bottom: 1.5rem;
            }

            .page-title {
                font-size: 1.5rem;
            }

            .table-container {
                padding: 1rem;
            }

            .stats-card {
                margin-bottom: 1rem;
            }
        }

        /* Melhorias na Responsividade */
        @media (max-width: 1200px) {
            .stats-card {
                margin-bottom: 1rem;
            }

            .stats-value {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 992px) {
            .sidebar {
                width: 250px;
                transform: translateX(-100%);
                position: fixed;
                top: 0;
                left: 0;
                height: 100vh;
                z-index: 1000;
                transition: transform 0.3s ease;
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0 !important;
                width: 100% !important;
            }

            .mobile-nav-toggle {
                display: block !important;
            }
        }

        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .action-buttons {
                display: flex;
                justify-content: center;
                margin-top: 0.5rem;
            }

            .table-responsive {
                margin: 0 -1rem;
            }

            .status-badge {
                padding: 0.25rem 0.5rem;
                font-size: 0.7rem;
            }
        }

        @media (max-width: 576px) {
            .stats-card {
                margin-bottom: 1rem;
            }

            .table-container {
                padding: 1rem;
            }

            .action-buttons .btn {
                width: 28px;
                height: 28px;
                font-size: 0.8rem;
            }
        }

        /* Overlay para menu mobile */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .sidebar-overlay.show {
            display: block;
        }

        /* Botão toggle menu mobile */
        .mobile-nav-toggle {
            display: none;
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 1001;
            padding: 0.5rem;
            background: white;
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Paginação personalizada */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0.5rem 1rem;
            margin: 0 2px;
            border-radius: 8px;
            border: 1px solid var(--medium-gray);
            background: white;
            color: var(--primary-color) !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: var(--primary-color) !important;
            color: white !important;
            border-color: var(--primary-color);
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: var(--light-gray) !important;
            color: var(--primary-color) !important;
            border-color: var(--medium-gray);
        }

        /* Filtros e busca */
        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid var(--medium-gray);
            border-radius: 8px;
            padding: 0.5rem 1rem;
            margin-left: 0.5rem;
        }

        .dataTables_wrapper .dataTables_length select {
            border: 1px solid var(--medium-gray);
            border-radius: 8px;
            padding: 0.5rem;
            margin: 0 0.5rem;
        }

        /* Layout Base */
        .main-content {
            transition: margin-left 0.3s ease;
            min-height: 100vh;
            padding: 1rem;
        }

        /* Desktop */
        @media (min-width: 992px) {
            .sidebar {
                width: 280px;
            }

            .main-content {
                margin-left: 280px;
                padding: 2rem;
            }

            .mobile-nav-toggle {
                display: none !important;
            }
        }

        /* Tablet */
        @media (min-width: 768px) and (max-width: 991.98px) {
            .sidebar {
                width: 240px;
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
                padding: 1.5rem;
            }

            .stats-card {
                margin-bottom: 1rem;
            }

            .page-header {
                flex-direction: row !important;
                text-align: left !important;
            }
        }

        /* Mobile */
        @media (max-width: 767.98px) {
            .sidebar {
                width: 100%;
                max-width: 300px;
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
                padding: 1rem;
            }

            .page-header {
                flex-direction: column !important;
                text-align: center;
                padding: 1.5rem !important;
            }

            .page-header .d-flex {
                flex-direction: column;
                gap: 1rem;
            }

            .stats-card {
                margin-bottom: 1rem;
            }

            .table-container {
                padding: 1rem !important;
                margin: -1rem;
                border-radius: 0;
            }

            .table-responsive {
                margin: 0 -1rem;
            }

            .btn-group {
                flex-wrap: wrap;
                gap: 0.5rem;
            }

            .btn-filter {
                flex: 1;
                min-width: calc(33.333% - 0.5rem);
                text-align: center;
            }

            .modal-dialog {
                margin: 0.5rem;
            }
        }

        /* Small Mobile */
        @media (max-width: 575.98px) {
            .page-title {
                font-size: 1.5rem !important;
            }

            .page-subtitle {
                font-size: 0.875rem !important;
            }

            .stats-value {
                font-size: 1.5rem !important;
            }

            .stats-label {
                font-size: 0.75rem !important;
            }

            .btn-filter {
                min-width: calc(50% - 0.5rem);
            }

            .table thead th {
                font-size: 0.75rem !important;
                padding: 0.75rem !important;
            }

            .table tbody td {
                font-size: 0.813rem !important;
                padding: 0.75rem !important;
            }

            .action-buttons .btn {
                width: 28px;
                height: 28px;
                font-size: 0.875rem;
            }

            .modal-body {
                padding: 1rem;
            }
        }

        /* Ajustes para telas muito pequenas */
        @media (max-width: 359.98px) {
            .page-title {
                font-size: 1.25rem !important;
            }

            .btn-filter {
                min-width: 100%;
            }

            .stats-card {
                padding: 1rem !important;
            }
        }

        /* Ajustes para telas muito grandes */
        @media (min-width: 1400px) {
            .container-fluid {
                max-width: 1600px;
                margin: 0 auto;
            }

            .sidebar {
                width: 300px;
            }

            .main-content {
                margin-left: 300px;
                padding: 2.5rem;
            }

            .page-title {
                font-size: 2rem !important;
            }

            .stats-value {
                font-size: 2.5rem !important;
            }
        }

        /* Ajustes para altura da tela */
        @media (max-height: 700px) {
            .sidebar {
                overflow-y: auto;
            }

            .nav-item {
                margin: 0.25rem 1rem;
            }

            .nav-link {
                padding: 0.6rem 1rem;
            }
        }

        /* Melhorias na Tabela Responsiva */
        .table-responsive {
            margin: 0;
            border-radius: inherit;
        }

        @media (max-width: 991.98px) {
            .table-responsive .table {
                min-width: 800px;
            }
        }

        /* Melhorias nos Botões de Exportação */
        .dt-buttons {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            margin-right: 1rem;
        }

        .dt-buttons .btn {
            white-space: nowrap;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: auto;
        }

        .dataTables_wrapper .dataTables_length {
            margin-right: 1rem;
        }

        .dataTables_wrapper .dataTables_filter {
            margin-left: auto;
        }

        @media (max-width: 767.98px) {
            .dataTables_wrapper .d-flex {
                flex-direction: column;
                gap: 1rem;
            }

            .dt-buttons {
                margin-right: 0;
                justify-content: center;
                width: 100%;
            }

            .dataTables_length {
                text-align: center;
                width: 100%;
                margin-right: 0;
            }

            .dataTables_filter {
                width: 100%;
                margin-left: 0;
            }

            .dataTables_filter input {
                width: 100%;
                margin-left: 0;
            }
        }

        /* Melhorias nos Modais */
        @media (max-width: 575.98px) {
            .modal-dialog {
                margin: 0;
                min-height: 100vh;
                display: flex;
                align-items: flex-end;
            }

            .modal-content {
                border-radius: 1.5rem 1.5rem 0 0;
                min-height: 80vh;
            }

            .modal-header {
                border-radius: 1.5rem 1.5rem 0 0;
                padding: 1.25rem;
            }

            .modal-footer {
                padding: 1rem;
                flex-wrap: nowrap;
            }

            .modal-footer .btn {
                flex: 1;
            }
        }

        /* Ajustes para Dark Mode do Sistema */
        @media (prefers-color-scheme: dark) {
            .search-highlight {
                background: rgba(255, 243, 205, 0.2);
            }

            .table-hover tbody tr:hover {
                background-color: rgba(255, 255, 255, 0.05) !important;
            }
        }

        /* Botões personalizados */
        .btn-dark-custom {
            background-color: var(--primary-color);
            border: none;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-dark-custom:hover {
            background-color: var(--accent-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            color: white;
        }

        /* Quick Actions */
        .quick-actions {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 1000;
        }

        .quick-action-btn {
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            margin-top: 1rem;
        }

        .quick-action-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
            background: var(--accent-color);
            color: white;
        }

        /* Melhorias nos cards */
        .stats-card {
            position: relative;
            overflow: hidden;
        }

        .stats-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(to right, var(--primary-color), var(--accent-color));
        }

        .stats-trend {
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        .stats-trend.up {
            color: var(--success-color);
        }

        .stats-trend.down {
            color: var(--danger-color);
        }

        /* Melhorias na tabela */
        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: var(--light-gray);
            transform: scale(1.01);
        }

        .action-buttons .btn {
            position: relative;
            overflow: hidden;
        }

        .action-buttons .btn::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.3s, height 0.3s;
        }

        .action-buttons .btn:active::after {
            width: 200%;
            height: 200%;
        }

        /* Animações */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease forwards;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        /* Melhorias nos modais */
        .modal-content {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            border-bottom: 1px solid var(--medium-gray);
            padding: 1.5rem;
        }

        .modal-footer {
            border-top: 1px solid var(--medium-gray);
            padding: 1.5rem;
        }

        .modal-body {
            padding: 2rem;
        }

        /* Responsividade */
        @media (max-width: 767.98px) {
            .quick-actions {
                bottom: 1rem;
                right: 1rem;
            }

            .quick-action-btn {
                width: 3rem;
                height: 3rem;
                font-size: 1.2rem;
            }

            .modal-body {
                padding: 1.5rem;
            }
        }

        @media (max-width: 575.98px) {
            .modal-dialog {
                margin: 0;
                min-height: 100vh;
                display: flex;
                align-items: flex-end;
            }

            .modal-content {
                border-radius: 1.5rem 1.5rem 0 0;
                min-height: 80vh;
            }

            .modal-header {
                border-radius: 1.5rem 1.5rem 0 0;
                padding: 1.25rem;
            }

            .modal-footer {
                padding: 1rem;
                flex-wrap: nowrap;
            }

            .modal-footer .btn {
                flex: 1;
            }
        }
    </style>
    <link rel="stylesheet" href="dmxAppConnect/dmxNotifications/dmxNotifications.css" />
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
</head>

<body is="dmx-app" id="clientes">
    <div is="dmx-browser" id="browser1"></div>
    <dmx-data-detail id="data_detail1" dmx-bind:data="sc_listar_clientes.data.query" key="id"></dmx-data-detail>
    <dmx-serverconnect id="sc_listar_clientes" url="dmxConnect/api/clientes.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_processosativos" url="dmxConnect/api/percentual_mensal_processos_ativos.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_estados_clientes" url="dmxConnect/api/percentual_estados_clientes.php"></dmx-serverconnect>
    <dmx-notifications id="notifies1"></dmx-notifications>
    <dmx-serverconnect id="sc_clientes" url="dmxConnect/api/listar_clientes.php"></dmx-serverconnect>
    <dmx-value id="varClienteAtual"></dmx-value>
    <dmx-serverconnect id="sc_listar_clientes_novos" url="dmxConnect/api/listar_clientes.php" dmx-on:success="notifies1.success('Dados atualizados com sucesso!')"></dmx-serverconnect>
    <dmx-serverconnect id="sc_excluir_cliente" url="dmxConnect/api/excluir_cliente.php" noload dmx-on:success="sc_listar_clientes.load();notifySuccess.success('Cliente excluído com sucesso!')"></dmx-serverconnect>

    <!-- Mobile Nav Toggle -->
    <button class="mobile-nav-toggle" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Sidebar -->
            <nav class="col-auto d-md-block sidebar">
                <div class="sidebar-header">
                    <img src="assets/logo/as-horizontal.png" alt="AS Jurídico" height="35" class="d-block mx-auto">
                </div>

                <div class="d-flex flex-column justify-content-between navbar-itens">
                    <ul class="nav flex-column w-100 h-100">
                        <li class="nav-item">
                            <a class="nav-link style19" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto('/')`}})" href="/home">
                                <i class="fas fa-home"></i>
                                Início
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-active">
                                <i class="fas fa-user"></i>
                                Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/processos" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto('/processos')`}})">
                                <i class="fas fa-file-invoice"></i>
                                Processos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/agenda">
                                <i class="fas fa-calendar"></i>
                                Agenda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/relatorios">
                                <i class="fas fa-chart-bar"></i>
                                Relatórios
                            </a>
                        </li>
                        <li class="nav-item mt-auto">
                            <a class="nav-link" href="/configuracoes">
                                <i class="fas fa-cog"></i>
                                Configurações
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex style18 align-items-center justify-content-between" dmx-style:box-shadow="'0 2px 20px rgba(0, 0, 0, 0.05)'" dmx-style:cursor="'pointer'">
                        <div class="d-flex align-items-center"><img src="assets/img/avatar-16.jpg" height="30" class="style20">
                            <div class="d-flex flex-column lh-sm">
                                <p class="mb-0 lh-sm">César</p>
                                <p class="mb-0 email-card text-secondary lh-sm">cesar.correia@abraoesilva...</p>
                            </div>
                        </div>



                        <i class="fas fa-angle-right"></i>

                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col main-content">
                <!-- Page Header -->
                <div class="page-header animate-fade-in">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="page-title">Gestão de Clientes</h1>
                            <p class="page-subtitle mb-0">Gerencie todos os seus clientes em um só lugar</p>
                        </div>
                        <button class="btn btn-dark-custom" dmx-on:click="modalNovoCliente.show()">
                            <i class="fas fa-plus me-2"></i>Novo Cliente
                        </button>
                    </div>
                </div>

                <!-- Filtros Rápidos -->
                <div class="mb-4">
                </div>

                <!-- Stats Cards -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.1s">
                        <div class="card stats-card">
                            <div class="stats-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stats-value">{{sc_clientes.data.listar_clientes_clientes_novos[0].total_clientes||0}}</div>
                            <div>
                                <p class="stats-label mb-0">
                                    Total de Clientes<i class="fas fa-info-circle fa-xs info-tooltip" dmx-bs-tooltip="'Quantidade total de clientes cadastrados até o momento'"></i></p>
                            </div>
                            <div class="stats-trend up">
                                <i class="fas fa-arrow-up me-1"></i>{{sc_clientes.data.listar_clientes_clientes_novos[0].mensagem_variacao_total_mensal}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.2s">
                        <div class="card stats-card">
                            <div class="stats-icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="stats-value">{{sc_clientes.data.listar_clientes_clientes_novos[0].novos_clientes_semana||0}}</div>
                            <div>
                                <p class="stats-label mb-0">
                                    Novos Clientes<i class="fas fa-info-circle fa-xs info-tooltip" dmx-bs-tooltip="'Clientes cadastrados essa semana'" data-bs-trigger="hover"></i></p>
                            </div>
                            <div class="stats-trend up">
                                <i class="fas fa-arrow-up me-1"></i>{{sc_clientes.data.listar_clientes_clientes_novos[0].mensagem_variacao_clientes_novos_semanal}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.3s">
                        <div class="card stats-card">
                            <div class="stats-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="stats-value">{{sc_estados_clientes.data.percentual_estados_clientes[0].total_estados_atual||0}}</div>
                            <div class="stats-label">Estados com clientes</div>
                            <div class="stats-trend up">
                                {{sc_estados_clientes.data.percentual_estados_clientes[0].mensagem}}
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.4s">
                        <div class="card stats-card">
                            <div class="stats-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="stats-value">{{sc_processosativos.data.query[0].processos_ativos||0}}</div>
                            <div class="stats-label">Processos Ativos</div>
                            <div class="stats-trend up">
                                <i class="fas fa-arrow-up me-1"></i>{{sc_processosativos.data.query[0].mensagem_processos_ativos}}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabela de Clientes -->
                <div class="table-container animate-fade-in" style="animation-delay: 0.5s">
                    <div class="table-responsive">
                        <table id="tabelaClientes" class="table w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>PESSOA</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody is="dmx-repeat" id="repeat1" key="id" dmx-bind:repeat="sc_listar_clientes.data.query">
                                <tr>
                                    <td>#{{id}}</td>
                                    <td>{{nome}}
                                    </td>
                                    <td>{{celular.replace(/\D/g, "").replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3")}}</td>
                                    <td>{{tipo}}

                                    </td>
                                    <td class="action-buttons">
                                        <button class="btn" title="Editar" dmx-bs-tooltip="'Editar cliente'" data-bs-trigger="hover" dmx-on:click="data_detail1.select(id);modalEditarCliente.show();varClienteAtual.setValue()">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn" title="Excluir" dmx-bs-tooltip="'Excluir cliente'" data-bs-trigger="hover" dmx-on:click="if(confirm('Deseja realmente excluir este cliente?')){sc_excluir_cliente.load({data:{id:id}});}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <button class="btn" title="Detalhes" dmx-bs-tooltip="'Ver detalhes'" data-bs-trigger="hover" dmx-on:click="browser1.goto('/clientes/'+slug)">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="quick-actions">
        <button class="quick-action-btn" title="Novo Cliente" dmx-bs-tooltip="'Adicionar novo cliente'" data-bs-trigger="hover" dmx-on:click="modalNovoCliente.show()">
            <i class="fas fa-plus"></i>
        </button>
        <button class="quick-action-btn" title="Exportar" dmx-bs-tooltip="'Exportar dados'" data-bs-trigger="hover">
            <i class="fas fa-file-export"></i>
        </button>
    </div>

    <!-- Modal Novo Cliente -->
    <div class="modal fade" id="modalNovoCliente" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formNovoCliente" is="dmx-serverconnect-form" method="post" action="dmxConnect/api/cadastrar_cliente.php" dmx-on:success="modalNovoCliente.hide();sc_listar_clientes.load();notifySuccess.success('Cliente cadastrado com sucesso!')">
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="telefone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status" required>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" form="formNovoCliente">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Cliente -->
    <div class="modal fade" id="modalEditarCliente" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formEditarCliente" is="dmx-serverconnect-form" method="post" action="dmxConnect/api/editar_cliente.php" dmx-on:success="modalEditarCliente.hide();sc_listar_clientes.load();notifySuccess.success('Cliente atualizado com sucesso!')">
                        <input type="hidden" name="id" dmx-bind:value="varClienteAtual.data.id">
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" required="" dmx-bind:value="data_detail1.data.nome">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required dmx-bind:value="varClienteAtual.data.email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Telefone</label>
                            <input type="tel" class="form-control" name="telefone" required dmx-bind:value="varClienteAtual.data.telefone">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status" required dmx-bind:value="varClienteAtual.data.status">
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" form="formEditarCliente">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detalhes Cliente -->
    <div class="modal fade" id="modalDetalhesCliente" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes do Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="avatar me-3">
                            {{varClienteAtual.data.nome.charAt(0)}}
                        </div>
                        <div>
                            <h4 class="mb-1">{{varClienteAtual.data.nome}}</h4>
                            <p class="text-muted mb-0">Cliente #{{varClienteAtual.data.id}}</p>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label text-muted">Email</label>
                            <p class="mb-0">{{varClienteAtual.data.email}}</p>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted">Telefone</label>
                            <p class="mb-0">{{varClienteAtual.data.telefone.formatPhone()}}</p>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted">Status</label>
                            <p class="mb-0">
                                <span class="status-badge" dmx-class:bg-success-subtle="varClienteAtual.data.status=='Ativo'" dmx-class:text-success="varClienteAtual.data.status=='Ativo'" dmx-class:bg-danger-subtle="varClienteAtual.data.status=='Inativo'" dmx-class:text-danger="varClienteAtual.data.status=='Inativo'">
                                    {{varClienteAtual.data.status}}
                                </span>
                            </p>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted">Data de Cadastro</label>
                            <p class="mb-0">{{varClienteAtual.data.data_cadastro.formatDate('dd/MM/yyyy')}}</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inicializa DataTable com recursos extras
            var table = $('#tabelaClientes').DataTable({
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json'
                },
                dom: '<"d-flex flex-wrap align-items-center mb-4"<"me-auto d-flex align-items-center"lB>f>rtip',
                buttons: [
                    {
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel me-2"></i>Excel',
                        className: 'btn btn-sm btn-dark-custom',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf me-2"></i>PDF',
                        className: 'btn btn-sm btn-dark-custom ms-2',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    }
                ],
                pageLength: 10,
                lengthMenu: [[5, 10, 25, 50], [5, 10, 25, 50]],
                order: [[0, 'desc']],
                columnDefs: [
                    {
                        targets: -1,
                        orderable: false
                    }
                ]
            });
            
            // Ajuste automático da altura do sidebar
            function adjustSidebarHeight() {
                const windowHeight = window.innerHeight;
                const sidebar = document.querySelector('.sidebar');
                if (sidebar) {
                    sidebar.style.height = `${windowHeight}px`;
                }
            }
            
            // Chamar no carregamento e no redimensionamento
            adjustSidebarHeight();
            window.addEventListener('resize', adjustSidebarHeight);
            
            // Fechar sidebar ao clicar em link em telas pequenas
            $('.nav-link').on('click', function() {
                if (window.innerWidth < 992) {
                    $('.sidebar').removeClass('show');
                    $('#sidebarOverlay').removeClass('show');
                }
            });
            
            // Ajustar layout em tempo real
            function adjustLayout() {
                const width = window.innerWidth;
                
                // Ajustar cards de estatísticas
                if (width < 768) {
                    $('.stats-card').parent().removeClass('col-md-3').addClass('col-6');
                } else {
                    $('.stats-card').parent().removeClass('col-6').addClass('col-md-3');
                }
                
                // Ajustar botões de ação
                if (width < 576) {
                    $('.action-buttons').addClass('d-flex justify-content-center');
                } else {
                    $('.action-buttons').removeClass('d-flex justify-content-center');
                }
            }
            
            // Chamar ajustes iniciais e no redimensionamento
            adjustLayout();
            window.addEventListener('resize', adjustLayout);
            
            // Melhorar scroll em dispositivos móveis
            if ('ontouchstart' in window) {
                document.querySelector('.sidebar').style.overscrollBehavior = 'contain';
                document.querySelector('.main-content').style.overscrollBehavior = 'contain';
            }
            
            // Highlight na pesquisa
            var searchTimeout;
            $('.dataTables_filter input').on('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(function() {
                    var searchTerm = $('.dataTables_filter input').val();
                    if (searchTerm) {
                        $('.table tbody td').each(function() {
                            var text = $(this).text();
                            if (text.toLowerCase().indexOf(searchTerm.toLowerCase()) >= 0) {
                                $(this).html(text.replace(new RegExp(searchTerm, 'gi'), 
                                    '<span class="search-highlight">$&</span>'));
                            }
                        });
                    } else {
                        $('.search-highlight').contents().unwrap();
                    }
                }, 300);
            });
            
            // Inicializar tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
</body>

</html>