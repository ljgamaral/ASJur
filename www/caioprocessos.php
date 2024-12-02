<!doctype html>
<html lang="pt">

<head>
    <meta name="ac:route" content="/processos">
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Processos - AS Jurídico</title>

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

    <!-- Flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="dmxAppConnect/dmxBootstrap5Modal/dmxBootstrap5Modal.js" defer></script>
    <script src="dmxAppConnect/dmxFormatter/dmxFormatter.js" defer></script>
    <script src="dmxAppConnect/dmxDataTraversal/dmxDataTraversal.js" defer></script>
    <script src="dmxAppConnect/dmxStateManagement/dmxStateManagement.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>
    <script src="dmxAppConnect/dmxNotifications/dmxNotifications.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Tooltips/dmxBootstrap5Tooltips.js" defer></script>
    <script src="dmxAppConnect/dmxCalendar/dmxCalendar.js" defer></script>
    <script src="dmxAppConnect/dmxDownload/dmxDownload.js" defer></script>

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

        .nav-link.nav-active {
            color: #fff;
        }

        .nav-link:hover {
            background: var(--light-gray);
            color: var(--primary-color);
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

        .nav-active {
            background-color: #2c2c2c;
            color: #FFF !important;
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

        .btn-filter {
            border: 1px solid var(--medium-gray);
            color: var(--secondary-color);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-filter.active {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }

        .btn-filter:hover:not(.active) {
            background: var(--light-gray);
            color: var(--primary-color);
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

        /* Novos estilos */
        .timeline {
            position: relative;
            padding: 1rem 0;
        }

        .timeline-item {
            position: relative;
            padding: 1rem 1.5rem;
            border-left: 2px solid var(--medium-gray);
            margin-bottom: 1rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -0.5rem;
            top: 1.5rem;
            width: 1rem;
            height: 1rem;
            border-radius: 50%;
            background: white;
            border: 2px solid var(--primary-color);
        }

        .timeline-date {
            font-size: 0.875rem;
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
        }

        .timeline-content {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .process-tag {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .process-tag.urgent {
            background-color: var(--danger-color);
            color: white;
        }

        .process-tag.pending {
            background-color: var(--warning-color);
            color: var(--dark-gray);
        }

        .process-tag.completed {
            background-color: var(--success-color);
            color: white;
        }

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

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--danger-color);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .search-highlight {
            background: #fff3cd;
            padding: 0.1rem 0.3rem;
            border-radius: 4px;
        }

        .flatpickr-calendar {
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            border: none;
        }

        .custom-tooltip {
            position: relative;
            display: inline-block;
        }

        .custom-tooltip .tooltip-text {
            visibility: hidden;
            background-color: var(--dark-gray);
            color: white;
            text-align: center;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 0.875rem;
            white-space: nowrap;
        }

        .custom-tooltip:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
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

        /* Melhorias nos cards de estatísticas */
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

        /* Responsividade aprimorada */
        @media (max-width: 768px) {
            .quick-actions {
                bottom: 1rem;
                right: 1rem;
            }

            .quick-action-btn {
                width: 3rem;
                height: 3rem;
                font-size: 1.2rem;
            }

            .timeline-item {
                padding: 0.75rem 1rem;
            }

            .process-tag {
                margin-bottom: 0.25rem;
            }
        }

        /* Melhorias na Responsividade */

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

            .quick-actions {
                bottom: 1rem;
                right: 1rem;
            }

            .quick-action-btn {
                width: 3rem;
                height: 3rem;
                font-size: 1.2rem;
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

            .timeline-item {
                padding: 0.75rem;
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

            .quick-action-btn {
                width: 2.5rem;
                height: 2.5rem;
                font-size: 1rem;
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
        }

        @media (max-width: 575.98px) {
            .dt-buttons {
                width: 100%;
                justify-content: center;
                margin-bottom: 1rem;
            }

            .dataTables_length {
                width: 100%;
                text-align: center;
                margin-bottom: 1rem;
            }

            .dataTables_filter {
                width: 100%;
                margin: 0;
            }

            .dataTables_filter input {
                width: 100%;
                margin: 0;
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

        /* Melhorias na Timeline */
        @media (max-width: 575.98px) {
            .timeline-item {
                margin-left: 0.5rem;
            }

            .timeline-content {
                padding: 0.75rem;
            }

            .process-tag {
                font-size: 0.7rem;
                padding: 0.2rem 0.5rem;
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
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/index.global.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/locales-all.global.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@6.1.11/index.global.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/index.global.min.js" defer></script>
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxNotifications/dmxNotifications.css" />
    <script src="dmxAppConnect/dmxBootstrap5Collapse/dmxBootstrap5Collapse.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css" />
    <script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer></script>
    <script src="dmxAppConnect/dmxBootbox5/bootstrap-modbox.min.js" defer></script>
    <script src="dmxAppConnect/dmxBootbox5/dmxBootbox5.js" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.2/css/all.css" integrity="sha384-PPIZEGYM1v8zp5Py7UjFb79S58UeqCL9pYVnVPURKEqvioPROaVAJKKLzvH2rDnI" crossorigin="anonymous" />
</head>

<body is="dmx-app" id="processos">
    <dmx-serverconnect id="sc_listar_processos" url="dmxConnect/api/listar_processos.php" dmx-param:limit="select1.value" dmx-param:offset="(pagina_atual_tabela.value-1)*select1.value" dmx-param:status="' '"></dmx-serverconnect>
    <dmx-serverconnect id="sc_excluir_processo" url="dmxConnect/api/excluir_processo.php"></dmx-serverconnect>
    <dmx-notifications id="notifies1"></dmx-notifications>
    <dmx-serverconnect id="sc_novo_processo" url="dmxConnect/api/cadastrar_processo.php" noload="true"></dmx-serverconnect>
    <dmx-data-detail id="data_detail1" key="id" dmx-bind:data="sc_listar_processos.data.listar_processos.data"></dmx-data-detail>
    <dmx-serverconnect id="sc_processos" url="dmxConnect/api/processos.php"></dmx-serverconnect>
    <dmx-value id="pagina_atual_tabela" dmx-bind:value="1"></dmx-value>
    <dmx-value id="filtro" dmx-bind:value="'Todos'"></dmx-value>
    <dmx-value id="varProcessoAtual"></dmx-value>
    <dmx-serverconnect id="sc_excluir_processo" url="dmxConnect/api/excluir_processo.php" noload dmx-on:success="sc_listar_processos.load();notifySuccess.success('Processo excluído com sucesso!')"></dmx-serverconnect>
    <div is="dmx-browser" id="browser1"></div>

    <!-- Mobile Nav Toggle -->
    <button class="mobile-nav-toggle" id="sidebarToggle">
        <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="container-fluid p-0 container">
        <div class="row g-0 w-100">
            <!-- Sidebar -->
            <nav class="col-auto d-md-block sidebar">
                <div class="sidebar-header">
                    <img src="assets/logo/as-horizontal.png" alt="AS Jurídico" height="35" class="d-block mx-auto">
                </div>

                <div class="d-flex flex-column justify-content-between navbar-itens">
                    <ul class="nav flex-column w-100 h-100">
                        <li class="nav-item">
                            <a class="nav-link style19" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto('/')`}})" href="/home">
                                <i class="fa-solid fa-house"></i>
                                Início
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./clientes">
                                <i class="fa-solid fa-user"></i>
                                Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-active" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto('/processos')`}})">
                                <i class="fa-solid fa-file-invoice"></i>
                                Processos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/agenda">
                                <i class="fa-solid fa-calendar"></i>
                                Agenda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/relatorios">
                                <i class="fa-solid fa-chart-bar"></i>
                                Relatórios
                            </a>
                        </li>
                        <li class="nav-item mt-auto">
                            <a class="nav-link" href="/configuracoes">
                                <i class="fa-solid fa-gear"></i>
                                Configurações
                            </a>
                        </li>
                    </ul>
                    <div class="collapse" id="collapse1" is="dmx-bs5-collapse">
                        <div class="d-flex flex-column mb-2 ms-4 me-4">
                            <button id="btn7" class="btn w-100 count-button text-secondary">
                                <font face="Font Awesome 6 Free"><b>Conta</b></font>
                            </button><button id="btn6" class="btn w-100 logout-button mt-1 text-light"><i class="fa-solid fa-arrow-right-from-bracket">&nbsp;&nbsp;</i>Sair da conta</button>

                        </div>
                    </div>
                    <div class="d-flex style18 align-items-center justify-content-between" dmx-style:box-shadow="'0 2px 20px rgba(0, 0, 0, 0.05)'" dmx-style:cursor="'pointer'" dmx-on:click="collapse1.toggle()">
                        <div class="d-flex align-items-center"><img src="assets/img/avatar-16.jpg" height="30" class="style20">
                            <div class="d-flex flex-column lh-sm">
                                <p class="mb-0 lh-sm">César</p>
                                <p class="mb-0 email-card text-secondary lh-sm">cesar.correia@abraoesilva...</p>
                            </div>
                        </div>



                        <i class="fa-solid fa-angle-right"></i>

                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col main-content">
                <!-- Page Header -->
                <div class="page-header animate-fade-in">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="page-title">Gestão de Processos</h1>
                            <p class="page-subtitle mb-0">Acompanhe e gerencie todos os processos em andamento</p>
                        </div>
                        <button class="btn btn-dark-custom" dmx-on:click="modalNovoProcesso.show()">
                            <i class="fa-solid fa-plus me-2"></i>Novo Processo
                        </button>
                    </div>
                </div>

                <!-- Filtros Rápidos -->
                <div class="mb-4">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.1s">
                            <div class="card stats-card">


                                <div class="stats-icon">
                                    <i class="fa-solid fa-file-invoice"></i>
                                </div>
                                <div>
                                    <div class="d-flex skeleton-loader" dmx-show="!sc_processos.status"></div>
                                    <p class="stats-value" dmx-show="sc_processos.status">{{sc_processos.data.query[0].total_processos||0}}</p>
                                </div>

                                <div class="stats-label">Total de Processos</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.2s">
                            <div class="card stats-card">

                                <div class="stats-icon">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <div>
                                    <div class="d-flex skeleton-loader" dmx-show="!sc_processos.status"></div>
                                    <p class="stats-value" dmx-show="sc_processos.status">{{sc_processos.data.query[0].processos_em_andamento||0}}</p>
                                </div>
                                <div class="stats-label">Em Andamento</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.3s">
                            <div class="card stats-card">
                                <div class="stats-icon">
                                    <i class="fa-solid fa-gavel"></i>
                                </div>
                                <div class="d-flex skeleton-loader" dmx-show="!sc_processos.status"></div>
                                <div>
                                    <p class="stats-value" dmx-show="sc_processos.status">{{sc_listar_processos.data.audiencias || 0}}</p>
                                </div>
                                <div class="stats-label">Audiências Marcadas</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.4s">
                            <div class="card stats-card">
                                <div class="stats-icon">
                                    <i class="fa-solid fa-box-archive"></i>
                                </div>
                                <div class="d-flex skeleton-loader" dmx-show="!sc_processos.status"></div>
                                <div>
                                    <p class="stats-value" dmx-show="sc_processos.status">{{sc_processos.data.query[0].processos_arquivados||0}}</p>
                                </div>
                                <div class="stats-label">Arquivados</div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" role="group">
                        <button class="btn btn-filter nav-active" dmx-on:click="sc_listar_processos.load({params: {filtro: 'todos'}});filtro.setValue('Todos')" id="todos2" dmx-show="filtro.value=='Todos'">
                            Todos
                        </button><button class="btn btn-filter buttons-radius" dmx-on:click="sc_listar_processos.load({params: {filtro: 'todos'}, limit: select1.value, offset: (pagina_atual_tabela.value-1)*select1.value});filtro.setValue('Todos')" id="todos" dmx-hide="filtro.value=='Todos'">
                            Todos
                        </button>
                        <button class="btn btn-filter nav-active" dmx-on:click="sc_listar_processos.load({params: {filtro: 'ativos'}, status: 'em andamento'});filtro.setValue('Em andamento')" id="em_andamento2" dmx-show="filtro.value=='Em andamento'">
                            Em Andamento
                        </button><button class="btn btn-filter" dmx-on:click="sc_listar_processos.load({params: {filtro: 'ativos'}, status: 'Em andamento'});filtro.setValue('Em andamento')" id="em_andamento" dmx-hide="filtro.value=='Em andamento'">
                            Em Andamento
                        </button>
                        <button class="btn btn-filter nav-active" dmx-on:click="sc_listar_processos.load({params: {filtro: 'arquivados'}, status: 'Arquivado'});filtro.setValue('Arquivado')" id="arquivado2" dmx-show="filtro.value=='Arquivado'">
                            Arquivados
                        </button><button class="btn btn-filter" dmx-on:click="sc_listar_processos.load({params: {filtro: 'arquivados'}, status: 'Arquivado'});filtro.setValue('Arquivado')" id="arquivado" dmx-hide="filtro.value=='Arquivado'">
                            Arquivados
                        </button>

                    </div>
                </div>

                <!-- Stats Cards -->


                <!-- Tabela de Processos -->
                <div class="table-container animate-fade-in" style="animation-delay: 0.5s">
                    <div class="d-flex align-items-center pt-2 pb-2 justify-content-between">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Exibir</p>
                            <div class="d-flex align-items-center"><select id="select1" class="form-select ms-2 me-2 pt-1 pb-1 ps-2" name="select1">
                                    <option value="1">1</option>
                                    <option selected="" value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                </select></div>
                            <p class="mb-0">resultados por página</p>
                        </div>
                        <div class="d-flex">
                            <button id="btn1" class="btn" dmx-on:click="pagina_atual_tabela.setValue(pagina_atual_tabela.value-1)"><i class="fa-solid fa-angle-left"></i></button>
                            <button id="btn2" class="btn" dmx-on:click="pagina_atual_tabela.setValue(pagina_atual_tabela.value+1)"><i class="fa-solid fa-angle-right"></i></button>
                        </div>




                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">PROCESSO</th>
                                    <th scope="col">ÚLTIMO ANDAMENTO</th>
                                    <th scope="col">ÓRGÃO</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody is="dmx-repeat" id="repeat2" dmx-bind:repeat="sc_listar_processos.data.listar_processos" key="id">
                                <tr>
                                    <td>{{processo}}</td>
                                    <td>{{ultimo_andamento}}</td>
                                    <td>{{justica}}</td>
                                    <td class="text-capitalize">{{status}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button id="btn3" class="btn" dmx-bs-tooltip="'Editar informações'" data-bs-trigger="hover" dmx-on:click="data_detail1.select(id);modalEditarProcesso.show();modalEditarProcesso.formEditarProcesso.inp_id.setValue(id);modalEditarProcesso.formEditarProcesso.inp_criado_em1.setValue(criado_em)"><i class="fa-solid fa-pen"></i></button>
                                            <button id="btn4" class="btn" dmx-bs-tooltip="'Excluir cliente'" data-bs-trigger="hover" dmx-on:click="run({'bootbox.confirm':{name:'excluirProcesso',message:'Tem certeza que deseja excluir esse processo?',title:'Excluir Processo',buttons:{confirm:{label:'Sim, excluir',className:'btn-danger'},cancel:{label:'Não, cancelar',className:'btn-secondary'}},size:'sm',then:{steps:[{serverConnect:{name:'sc_excluir_processo',outputType:'object',url:'dmxConnect/api/excluir_processo.php',site:'ASJur',params:{id_processo:`id`}}},{run:{outputType:'text',action:`notifies1.success(\'Processo excluído com sucesso!\');sc_processos.load({});sc_listar_processos.load({})`}}]}}})"><i class="fa-solid fa-trash"></i></button>
                                            <button id="btn5" class="btn" dmx-bs-tooltip="'Ver mais'" data-bs-trigger="hover" dmx-on:click="browser1.goto('/processos/'+slug)"><i class="fa-solid fa-circle-info"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex pt-3 pb-2">
                        <p class="text-secondary mb-0">Página:&nbsp;</p>
                        <p class="mb-0">{{pagina_atual_tabela.value}}</p>
                        <p class="mb-0 text-secondary">&nbsp;de&nbsp;</p>
                        <p class="mb-0 text-black">{{(sc_listar_processos.data.listar_processos[0].total)/select1.value}}</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Modal Novo Processo -->
    <div class="modal fade" id="modalNovoProcesso" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Processo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form is="dmx-serverconnect-form" id="formNovoProcesso" method="post" action="dmxConnect/api/cadastrar_processo.php" dmx-generator="bootstrap4" dmx-form-type="vertical" dmx-on:done="modalNovoProcesso.hide();notifies1.success('Processo cadastrado com sucesso!');sc_processos.load({});sc_listar_processos.load({limit: select1.value, offset: (pagina_atual_tabela.value-1)*select1.value})">
                        <div class="d-flex flex-row justify-content-around mb-3">
                            <div class="d-flex flex-column column-form">
                                <div class="form-group">
                                    <label for="inp_slug">Slug</label>
                                    <input type="text" class="form-control" id="inp_slug" name="slug" aria-describedby="inp_slug_help" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inp_arquivo_importacao">Arquivo importação</label>
                                    <input type="text" class="form-control" id="inp_arquivo_importacao" name="arquivo_importacao" aria-describedby="inp_arquivo_importacao_help" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inp_id_cliente">Id cliente</label>
                                    <input type="number" class="form-control" id="inp_id_cliente" name="id_cliente" aria-describedby="inp_id_cliente_help" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inp_processo">Processo</label>
                                    <input type="text" class="form-control" id="inp_processo" name="processo" aria-describedby="inp_processo_help" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inp_descricao">Descrição</label>
                                    <input type="text" class="form-control" id="inp_descricao" name="descricao" aria-describedby="inp_descricao_help">
                                </div>
                                <div class="form-group">

                                    <label for="inp_status">Status</label>
                                    <select id="inp_status" class="form-select" name="status">
                                        <option value="ativo">Ativo</option>
                                        <option value="em andamento">Em andamento</option>
                                        <option value="arquivado">Arquivado</option>
                                        <option value="pendente">Pendente</option>
                                        <option value="concluido">Concluído</option>
                                        <option value="cancelado">Cancelado</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inp_data_distribuicao">Data distribuição</label>
                                    <input class="form-control" id="inp_data_distribuicao" name="data_distribuicao" aria-describedby="inp_data_distribuicao_help">
                                </div>
                                <div class="form-group">
                                    <label for="inp_data_conclusao">Data conclusão</label>
                                    <input class="form-control" id="inp_data_conclusao" name="data_conclusao" aria-describedby="inp_data_conclusao_help">
                                </div>
                                <div class="form-group">
                                    <label for="inp_ultimo_andamento">Último andamento</label>
                                    <input type="text" class="form-control" id="inp_ultimo_andamento" name="ultimo_andamento" aria-describedby="inp_ultimo_andamento_help">
                                </div>
                                <div class="form-group">
                                    <label for="inp_penultimo_andamento">Penúltimo andamento</label>
                                    <input type="text" class="form-control" id="inp_penultimo_andamento" name="penultimo_andamento" aria-describedby="inp_penultimo_andamento_help">
                                </div>
                                <div class="form-group">
                                    <label for="inp_justica">Justiça</label>
                                    <input type="text" class="form-control" id="inp_justica" name="justica" aria-describedby="inp_justica_help">
                                </div>
                            </div>
                            <div class="d-flex flex-column column-form">
                                <div class="form-group">
                                    <label for="inp_comarca">Comarca</label>
                                    <input type="text" class="form-control" id="inp_comarca" name="comarca" aria-describedby="inp_comarca_help">
                                </div>
                                <div class="form-group">
                                    <label for="inp_vara">Vara</label>
                                    <input type="text" class="form-control" id="inp_vara" name="vara" aria-describedby="inp_vara_help">
                                </div>
                                <div class="form-group">
                                    <label for="inp_tese">Tese</label>
                                    <input type="text" class="form-control" id="inp_tese" name="tese" aria-describedby="inp_tese_help">
                                </div>
                                <div class="form-group">
                                    <label for="inp_autor">Autor</label>
                                    <input type="text" class="form-control" id="inp_autor" name="autor" aria-describedby="inp_autor_help">
                                </div>
                                <div class="form-group">
                                    <label for="inp_reu">Reu</label>
                                    <input type="text" class="form-control" id="inp_reu" name="reu" aria-describedby="inp_reu_help">
                                </div>
                                <div class="form-group">
                                    <label for="inp_id_clickup">Id clickup</label>
                                    <input type="number" class="form-control" id="inp_id_clickup" name="id_clickup" aria-describedby="inp_id_clickup_help" required="">
                                </div>
                                <div class="form-group">
                                    <label for="inp_url">Url</label>
                                    <input class="form-control" id="inp_url" name="url" aria-describedby="inp_url_help">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="inp_criado_em" name="criado_em" aria-describedby="inp_criado_em_help" placeholder="Enter Criado em" required="" data-msg-required="">
                                </div>
                            </div>
                        </div><button type="submit" class="btn btn-primary w-100 text-bg-dark" dmx-bind:disabled="state.executing">Criar<br></button>






















                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalEditarProcesso" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Processo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form is="dmx-serverconnect-form" id="formEditarProcesso" method="post" action="dmxConnect/api/editar_processo.php" dmx-generator="bootstrap4" dmx-form-type="vertical" dmx-on:done="modalEditarProcesso.hide();notifies1.success('Processo atualizado com sucesso!');sc_processos.load({});sc_listar_processos.load({})">
                        <div class="d-flex flex-row justify-content-around mb-3">
                            <div class="d-flex flex-column column-form">
                                <div class="form-group">
                                    <label for="inp_slug1">Slug</label>
                                    <input type="text" class="form-control" id="inp_slug1" name="slug" aria-describedby="inp_slug_help" required="" dmx-bind:value="data_detail1.data.slug">
                                    <input type="hidden" class="form-control" id="inp_id" name="id" aria-describedby="inp_slug_help" required="" dmx-bind:value="data_detail1.data.id">
                                </div>
                                <div class="form-group">
                                    <label for="inp_arquivo_importacao1">Arquivo importação</label>
                                    <input type="text" class="form-control" id="inp_arquivo_importacao1" name="arquivo_importacao" aria-describedby="inp_arquivo_importacao_help" required="" dmx-bind:value="data_detail1.data.arquivo_importacao">
                                </div>
                                <div class="form-group">
                                    <label for="inp_id_cliente1">Id cliente</label>
                                    <input type="number" class="form-control" id="inp_id_cliente1" name="id_cliente" aria-describedby="inp_id_cliente_help" required="" dmx-bind:value="data_detail1.data.id_cliente">
                                </div>
                                <div class="form-group">
                                    <label for="inp_processo1">Processo</label>
                                    <input type="text" class="form-control" id="inp_processo1" name="processo" aria-describedby="inp_processo_help" required="" dmx-bind:value="data_detail1.data.processo">
                                </div>
                                <div class="form-group">
                                    <label for="inp_descricao1">Descrição</label>
                                    <input type="text" class="form-control" id="inp_descricao1" name="descricao" aria-describedby="inp_descricao_help" dmx-bind:value="data_detail1.data.descricao">
                                </div>
                                <div class="form-group">
                                    <label for="inp_status1">Status</label>
                                    <select id="inp_status" class="form-select" name="status" dmx-bind:value="data_detail1.data.status">
                                        <option value="ativo">Ativo</option>
                                        <option value="em andamento">Em andamento</option>
                                        <option value="arquivado">Arquivado</option>
                                        <option value="pendente">Pendente</option>
                                        <option value="concluido">Concluído</option>
                                        <option value="cancelado">Cancelado</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inp_data_distribuicao1">Data distribuição</label>
                                    <input class="form-control" id="inp_data_distribuicao1" name="data_distribuicao" aria-describedby="inp_data_distribuicao_help" dmx-bind:value="data_detail1.data.data_distribuicao">
                                </div>
                                <div class="form-group">
                                    <label for="inp_data_conclusao1">Data conclusão</label>
                                    <input class="form-control" id="inp_data_conclusao1" name="data_conclusao" aria-describedby="inp_data_conclusao_help" dmx-bind:value="data_detail1.data.data_conclusao">
                                </div>
                                <div class="form-group">
                                    <label for="inp_ultimo_andamento1">Último andamento</label>
                                    <input type="text" class="form-control" id="inp_ultimo_andamento1" name="ultimo_andamento" aria-describedby="inp_ultimo_andamento_help" dmx-bind:value="data_detail1.data.ultimo_andamento">
                                </div>
                                <div class="form-group">
                                    <label for="inp_penultimo_andamento1">Penúltimo andamento</label>
                                    <input type="text" class="form-control" id="inp_penultimo_andamento1" name="penultimo_andamento" aria-describedby="inp_penultimo_andamento_help" dmx-bind:value="data_detail1.data.penultimo_andamento">
                                </div>
                                <div class="form-group">
                                    <label for="inp_justica1">Justiça</label>
                                    <input type="text" class="form-control" id="inp_justica1" name="justica" aria-describedby="inp_justica_help" dmx-bind:value="data_detail1.data.justica">
                                </div>
                            </div>
                            <div class="d-flex flex-column column-form">
                                <div class="form-group">
                                    <label for="inp_comarca1">Comarca</label>
                                    <input type="text" class="form-control" id="inp_comarca1" name="comarca" aria-describedby="inp_comarca_help" dmx-bind:value="data_detail1.data.comarca">
                                </div>
                                <div class="form-group">
                                    <label for="inp_vara1">Vara</label>
                                    <input type="text" class="form-control" id="inp_vara1" name="vara" aria-describedby="inp_vara_help" dmx-bind:value="data_detail1.data.vara">
                                </div>
                                <div class="form-group">
                                    <label for="inp_tese1">Tese</label>
                                    <input type="text" class="form-control" id="inp_tese1" name="tese" aria-describedby="inp_tese_help" dmx-bind:value="data_detail1.data.tese">
                                </div>
                                <div class="form-group">
                                    <label for="inp_autor1">Autor</label>
                                    <input type="text" class="form-control" id="inp_autor1" name="autor" aria-describedby="inp_autor_help" dmx-bind:value="data_detail1.data.autor">
                                </div>
                                <div class="form-group">
                                    <label for="inp_reu1">Reu</label>
                                    <input type="text" class="form-control" id="inp_reu1" name="reu" aria-describedby="inp_reu_help" dmx-bind:value="data_detail1.data.reu">
                                </div>
                                <div class="form-group">
                                    <label for="inp_id_clickup1">Id clickup</label>
                                    <input type="number" class="form-control" id="inp_id_clickup1" name="id_clickup" aria-describedby="inp_id_clickup_help" required="" dmx-bind:value="data_detail1.data.id_clickup">
                                </div>
                                <div class="form-group">
                                    <label for="inp_url1">Url</label>
                                    <input class="form-control" id="inp_url1" name="url" aria-describedby="inp_url_help" dmx-bind:value="data_detail1.data.url">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="inp_criado_em1" name="criado_em" aria-describedby="inp_criado_em_help" placeholder="Enter Criado em" required="" data-msg-required="">
                                </div>
                            </div>
                        </div><button type="submit" class="btn btn-primary w-100 text-bg-dark" dmx-bind:disabled="state.executing">Editar<br></button>






















                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Processo -->

    <!-- Quick Actions -->
    <div class="quick-actions">
        <button class="quick-action-btn" title="Novo Processo" dmx-on:click="modalNovoProcesso.show()">
            <i class="fa-solid fa-plus"></i>
        </button>
        <button class="quick-action-btn" title="Audiências" dmx-on:click="modalAudiencias.show()">
            <i class="fa-solid fa-gavel"></i>
            <span class="notification-badge">3</span>
        </button>
        <button class="quick-action-btn" title="Exportar" dmx-on:click="exportarProcessos()">
            <i class="fa-solid fa-file-export"></i>
        </button>
    </div>

    <!-- Modal Audiências -->
    <div class="modal fade" id="modalAudiencias" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Próximas Audiências</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">
                                <i class="fa-solid fa-calendar-days me-2"></i>15/03/2024 - 14:30
                            </div>
                            <div class="timeline-content">
                                <h6 class="mb-2">Audiência de Conciliação</h6>
                                <p class="mb-2">Processo nº 1234567-89.2024.8.26.0100</p>
                                <div class="d-flex align-items-center">
                                    <span class="process-tag urgent">Urgente</span>
                                    <span class="ms-2 text-muted">2ª Vara Cível</span>
                                </div>
                            </div>
                        </div>
                        <!-- Mais itens da timeline... -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Novo Andamento -->

    <!-- Scripts -->
    <script src="bootstrap/5/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/pt.js"></script>

    <script>
        // Inicializa Flatpickr para campos de data
            flatpickr(".flatpickr-date", {
                locale: "pt",
                dateFormat: "d/m/Y",
                allowInput: true
            });
            
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
            
            // Animação de pulse para notificações
            setInterval(function() {
                $('.notification-badge').toggleClass('pulse-animation');
            }, 2000);
            
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
            
            // Ajustar DataTables para melhor responsividade
            const table = $('#tabelaProcessos').DataTable({
                responsive: {
                    details: {
                        display: $.fn.dataTable.Responsive.display.modal({
                            header: function(row) {
                                const data = row.data();
                                return 'Detalhes do Processo';
                            }
                        }),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                            tableClass: 'table'
                        })
                    }
                },
                // ... outras configurações do DataTable ...
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
        
        // Função para exportar processos
        function exportarProcessos() {
            // Implementar lógica de exportação
        }
    
    </script>
</body>

</html>