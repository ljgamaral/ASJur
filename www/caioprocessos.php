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
            background: transparent;
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
</head>

<body is="dmx-app" id="processos">
    <dmx-value id="varProcessoAtual"></dmx-value>
    <dmx-serverconnect id="sc_listar_processos" url="dmxConnect/api/listar_processos.php" dmx-on:success="notifySuccess.success('Dados atualizados com sucesso!')"></dmx-serverconnect>
    <dmx-serverconnect id="sc_excluir_processo" url="dmxConnect/api/excluir_processo.php" noload dmx-on:success="sc_listar_processos.load();notifySuccess.success('Processo excluído com sucesso!')"></dmx-serverconnect>
    <div is="dmx-browser" id="browser1"></div>
    <dmx-notifications id="notifySuccess"></dmx-notifications>

    <!-- Mobile Nav Toggle -->
    <button class="mobile-nav-toggle" id="sidebarToggle">
        <i class="fas fa-bars"></i>
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
                                <i class="fas fa-home"></i>
                                Início
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./clientes">
                                <i class="fas fa-user"></i>
                                Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-active" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto('/processos')`}})">
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
                            <h1 class="page-title">Gestão de Processos</h1>
                            <p class="page-subtitle mb-0">Acompanhe e gerencie todos os processos em andamento</p>
                        </div>
                        <button class="btn btn-dark-custom" dmx-on:click="modalNovoProcesso.show()">
                            <i class="fas fa-plus me-2"></i>Novo Processo
                        </button>
                    </div>
                </div>

                <!-- Filtros Rápidos -->
                <div class="mb-4">
                    <div class="btn-group" role="group">
                        <button class="btn btn-filter active" dmx-on:click="sc_listar_processos.load({params: {filtro: 'todos'}})">
                            Todos
                        </button>
                        <button class="btn btn-filter" dmx-on:click="sc_listar_processos.load({params: {filtro: 'ativos'}, status: 'Em andamento'})">
                            Em Andamento
                        </button>
                        <button class="btn btn-filter" dmx-on:click="sc_listar_processos.load({params: {filtro: 'arquivados'}, status: 'Arquivados'})">
                            Arquivados
                        </button>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.1s">
                        <div class="card stats-card">
                            <div class="stats-icon">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                            <div class="stats-value">{{sc_listar_processos.data.total || 0}}</div>
                            <div class="stats-label">Total de Processos</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.2s">
                        <div class="card stats-card">
                            <div class="stats-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="stats-value">{{sc_listar_processos.data.em_andamento || 0}}</div>
                            <div class="stats-label">Em Andamento</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.3s">
                        <div class="card stats-card">
                            <div class="stats-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <div class="stats-value">{{sc_listar_processos.data.audiencias || 0}}</div>
                            <div class="stats-label">Audiências Marcadas</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.4s">
                        <div class="card stats-card">
                            <div class="stats-icon">
                                <i class="fas fa-archive"></i>
                            </div>
                            <div class="stats-value">{{sc_listar_processos.data.arquivados || 0}}</div>
                            <div class="stats-label">Arquivados</div>
                        </div>
                    </div>
                </div>

                <!-- Tabela de Processos -->
                <div class="table-container animate-fade-in" style="animation-delay: 0.5s">
                    <div class="table-responsive">
                        <table id="tabelaProcessos" class="table">
                            <thead>
                                <tr>
                                    <th>Processo</th>
                                    <th>Cliente</th>
                                    <th>Último Andamento</th>
                                    <th>Órgão</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody is="dmx-repeat" id="repeat1" dmx-bind:repeat="sc_listar_processos.data.listar_processos" key="id">
                                <tr>
                                    <td>
                                        <div class="fw-semibold">{{processo}}</div>
                                        <small class="text-muted">Cadastrado em {{data_cadastro.formatDate('dd/MM/yyyy')}}</small>
                                    </td>
                                    <td>{{cliente}}</td>
                                    <td>
                                        <div>{{ultimo_andamento}}</div>
                                        <small class="text-muted">{{data_andamento.formatDate('dd/MM/yyyy')}}</small>
                                    </td>
                                    <td>{{justica}}</td>
                                    <td>
                                        <span class="status-badge" dmx-class:bg-success-subtle="status=='Em Andamento'" dmx-class:text-success="status=='Em Andamento'" dmx-class:bg-secondary-subtle="status=='Arquivado'" dmx-class:text-secondary="status=='Arquivado'">
                                            {{status}}
                                        </span>
                                    </td>
                                    <td class="action-buttons">
                                        <button class="btn" title="Editar" dmx-bs-tooltip="'Editar processo'" data-bs-trigger="hover" dmx-on:click="modalEditarProcesso.show();varProcessoAtual.setValue($this.dmxRowData)">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn" title="Excluir" dmx-bs-tooltip="'Excluir processo'" data-bs-trigger="hover" dmx-on:click="if(confirm('Deseja realmente excluir este processo?')){sc_excluir_processo.load({data:{id:id}});}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <button class="btn" title="Detalhes" dmx-bs-tooltip="'Ver detalhes'" data-bs-trigger="hover" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto('/processos/'+slug)`}})">
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

    <!-- Modal Novo Processo -->
    <div class="modal fade" id="modalNovoProcesso" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Processo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formNovoProcesso" is="dmx-serverconnect-form" method="post" action="dmxConnect/api/cadastrar_processo.php" dmx-on:success="modalNovoProcesso.hide();sc_listar_processos.load();notifySuccess.success('Processo cadastrado com sucesso!')">
                        <div class="mb-3">
                            <label class="form-label">Número do Processo</label>
                            <input type="text" class="form-control" name="processo" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cliente</label>
                            <select class="form-select" name="cliente_id" required>
                                <option value="">Selecione um cliente</option>
                                <option dmx-repeat="sc_listar_clientes.data.clientes" value="{{id}}">{{nome}}</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Órgão</label>
                            <input type="text" class="form-control" name="justica" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status" required>
                                <option value="Em Andamento">Em Andamento</option>
                                <option value="Arquivado">Arquivado</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-dark-custom" form="formNovoProcesso">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Processo -->
    <div class="modal fade" id="modalEditarProcesso" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Processo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formEditarProcesso" is="dmx-serverconnect-form" method="post" action="dmxConnect/api/editar_processo.php" dmx-on:success="modalEditarProcesso.hide();sc_listar_processos.load();notifySuccess.success('Processo atualizado com sucesso!')">
                        <input type="hidden" name="id" dmx-bind:value="varProcessoAtual.data.id">
                        <div class="mb-3">
                            <label class="form-label">Número do Processo</label>
                            <input type="text" class="form-control" name="processo" required dmx-bind:value="varProcessoAtual.data.processo">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cliente</label>
                            <select class="form-select" name="cliente_id" required dmx-bind:value="varProcessoAtual.data.cliente_id">
                                <option value="">Selecione um cliente</option>
                                <option dmx-repeat="sc_listar_clientes.data.clientes" value="{{id}}">{{nome}}</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Órgão</label>
                            <input type="text" class="form-control" name="justica" required dmx-bind:value="varProcessoAtual.data.justica">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status" required dmx-bind:value="varProcessoAtual.data.status">
                                <option value="Em Andamento">Em Andamento</option>
                                <option value="Arquivado">Arquivado</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-dark-custom" form="formEditarProcesso">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="quick-actions">
        <button class="quick-action-btn" title="Novo Processo" dmx-on:click="modalNovoProcesso.show()">
            <i class="fas fa-plus"></i>
        </button>
        <button class="quick-action-btn" title="Audiências" dmx-on:click="modalAudiencias.show()">
            <i class="fas fa-gavel"></i>
            <span class="notification-badge">3</span>
        </button>
        <button class="quick-action-btn" title="Exportar" dmx-on:click="exportarProcessos()">
            <i class="fas fa-file-export"></i>
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
                                <i class="fas fa-calendar-alt me-2"></i>15/03/2024 - 14:30
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
    <div class="modal fade" id="modalNovoAndamento" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Andamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formNovoAndamento" is="dmx-serverconnect-form" method="post" action="dmxConnect/api/cadastrar_andamento.php">
                        <input type="hidden" name="processo_id" dmx-bind:value="varProcessoAtual.data.id">
                        <div class="mb-3">
                            <label class="form-label">Data</label>
                            <input type="text" class="form-control flatpickr-date" name="data" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <textarea class="form-control" name="descricao" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status" required>
                                <option value="Pendente">Pendente</option>
                                <option value="Em Andamento">Em Andamento</option>
                                <option value="Concluído">Concluído</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Próxima Ação</label>
                            <input type="text" class="form-control" name="proxima_acao">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-dark-custom" form="formNovoAndamento">Salvar</button>
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/pt.js"></script>

    <script>
        $(document).ready(function() {
            // Inicializa DataTable com recursos extras
            var table = $('#tabelaProcessos').DataTable({
                responsive: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/pt-BR.json'
                },
                dom: '<"d-flex justify-content-between align-items-center mb-4"<"d-flex align-items-center"lB><"d-flex"f>>rtip',
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
        });
        
        // Função para exportar processos
        function exportarProcessos() {
            // Implementar lógica de exportação
        }
    </script>
</body>

</html>