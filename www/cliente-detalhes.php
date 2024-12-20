<!doctype html>
<html lang="pt">

<head>
    <meta name="ac:route" content="/clientes/:slug">
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Cliente detalhes - AS Jurídico</title>

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.2/css/all.css" integrity="sha384-PPIZEGYM1v8zp5Py7UjFb79S58UeqCL9pYVnVPURKEqvioPROaVAJKKLzvH2rDnI" crossorigin="anonymous" />
    <script src="dmxAppConnect/dmxBootstrap5Collapse/dmxBootstrap5Collapse.js" defer></script>
</head>

<body is="dmx-app" id="clientes">
    <dmx-serverconnect id="sc_andamentos" url="dmxConnect/api/cliente_detalhes_andamentos.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_documentos" url="dmxConnect/api/cliente_detalhes_documentos.php" dmx-param:id_cliente="sc_captura_slug.data.query[0].id"></dmx-serverconnect>
    <dmx-serverconnect id="sc_processos" url="dmxConnect/api/cliente_detalhes_processos.php" dmx-param:id_cliente="sc_captura_slug.data.query[0].id"></dmx-serverconnect>
    <dmx-value id="filtro" dmx-bind:value="'processos'"></dmx-value>
    <dmx-serverconnect id="sc_captura_slug" url="dmxConnect/api/capturar_slug_cliente.php" dmx-param:slug="browser1.location.pathparts.last(1)"></dmx-serverconnect>
    <div is="dmx-browser" id="browser1"></div>

    <!-- Mobile Nav Toggle -->
    <button class="mobile-nav-toggle" id="sidebarToggle">
        <i class="fa-solid fa-bars"></i>
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
                                <i class="fa-solid fa-house"></i>
                                Início
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-active" href="/clientes">
                                <i class="fa-solid fa-user"></i>
                                Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" dmx-on:click="run({run:{outputType:'text',action:`browser1.goto('/processos')`}})" href="/processos">
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
                <button id="btn1" class="btn text-secondary" dmx-on:click="browser1.back()"><i class="fa-solid fa-angle-left"></i>&nbsp;Voltar</button>
                <!-- Page Header -->

                <!-- Filtros Rápidos -->
                <div class="mb-4">
                </div>

                <!-- Stats Cards -->

                <!-- Tabela de Clientes -->
                <div class="table-container animate-fade-in" style="animation-delay: 0.5s">
                    <div class="d-flex justify-content-between align-items-center w-100 flex-column">
                        <div class="d-flex w-100 titulo-relatorio mb-3 pb-3 align-items-center justify-content-between">

                            <h3>Ficha do cliente</h3>
                            <div class="dropdown">
                                <button id="dropdown1" class="btn btn-secondary dropdown-toggle d-print-none text-bg-dark" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-download"></i></button>
                                <div class="dropdown-menu" aria-labelledby="dropdown1">
                                    <a class="dropdown-item" href="#">Baixar .pdf</a><a class="dropdown-item" href="#">Baixar .xslx</a>

                                    <a class="dropdown-item" href="#">Baixar .cls</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex w-100">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="mb-0 text-secondary">Nome:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].nome}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-secondary mb-0">CPF:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].cpf}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-secondary mb-0">RG:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].rg}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="mb-0 text-secondary">Data de nascimento:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].data_nascimento}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex w-100">

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-secondary mb-0">Sexo:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].sexo}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="mb-0 text-secondary">Endereço:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].endereco}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-secondary mb-0">Bairro:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].bairro}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="mb-0 text-secondary">Cidade:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].cidade}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex w-100">


                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-secondary mb-0">UF:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].uf}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-secondary mb-0">CEP:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].cep}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="mb-0 text-secondary">Profissão:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].profissao}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-secondary mb-0">Estado civil:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].estado_civil}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex w-100">



                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-secondary mb-0">Origem:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].origem}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="mb-0 text-secondary">Celular:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].celular}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="mb-0 text-secondary">Filiação:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].filiacao}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-secondary mb-0">Cadastrado em:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].criado_em.formatDate('dd/MM/yyyy - hh:mm')}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex w-100">





                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-secondary mb-0">Responsável:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].responsavel}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-secondary mb-0">Departamento:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].departamento}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <p class="text-secondary mb-0">Captador:</p>
                                                <p class="mb-0">{{sc_captura_slug.data.query[0].captador}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <div class="btn-group" role="group">
                        <button class="btn btn-filter nav-active" id="processos2" dmx-show="filtro.value=='processos'">Processos</button><button class="btn btn-filter buttons-radius" dmx-on:click="filtro.setValue('processos')" id="processos" dmx-hide="filtro.value=='processos'">Processos</button>
                        <button class="btn btn-filter nav-active" id="em_andamento2" dmx-show="filtro.value=='documentos'">Documentos</button><button class="btn btn-filter" dmx-on:click="filtro.setValue('documentos')" id="em_andamento" dmx-hide="filtro.value=='documentos'">Documentos</button>
                        <button class="btn btn-filter nav-active" id="arquivado2" dmx-show="filtro.value=='andamentos'">Andamentos</button><button class="btn btn-filter" dmx-on:click="filtro.setValue('andamentos')" id="arquivado" dmx-hide="filtro.value=='andamentos'">Andamentos</button>

                    </div>
                </div>

                <div class="table-container animate-fade-in card-detalhes" style="animation-delay: 0.5s">
                    <div class="d-flex align-items-center w-100 flex-column justify-content-start" dmx-show="filtro.value=='processos'" id="processos">
                        <div class="d-flex w-100">
                            <p class="text-start">Processos vinculados</p>
                        </div>
                        <div class="table-responsive w-100">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">título</th>
                                        <th scope="col">última movimentação</th>
                                        <th scope="col">órgão</th>
                                        <th scope="col">data de conclusão</th>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat1" dmx-bind:repeat="sc_processos.data.cliente_detalhes_processos" key="id">
                                    <tr dmx-on:click="run({run:{outputType:'text',action:`browser1.goto(\'/processos/\'+slug)`}})" dmx-style:cursor="'pointer'">
                                        <td>{{processo}}</td>
                                        <td>{{ultimo_andamento}}</td>
                                        <td>{{justica}}</td>
                                        <td>{{data_conclusao}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="d-flex align-items-center w-100 flex-column justify-content-start" dmx-show="filtro.value=='documentos'" id="documentos">
                        <div class="d-flex w-100">
                            <p class="text-start">Documentos vinculados</p>
                        </div>
                        <div class="table-responsive w-100">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">NOME</th>
                                        <th scope="col">DESCRIÇÃO</th>
                                        <th scope="col">TIPO</th>
                                        <th scope="col">CADASTRADO EM</th>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat2" dmx-bind:repeat="sc_documentos.data.cliente_detalhes_documentos" key="id">
                                    <tr>
                                        <td>{{nome}}</td>
                                        <td>{{descricao}}</td>
                                        <td>{{tipo}}</td>
                                        <td>{{criado_em}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="d-flex align-items-center w-100 flex-column justify-content-start" dmx-show="filtro.value=='andamentos'" id="andamentos">
                        <div class="d-flex w-100">
                            <p class="text-start">Andamentos vinculados</p>
                        </div>
                        <div class="table-responsive w-100">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">tÍTULO</th>
                                        <th scope="col">PROCESSO</th>
                                        <th scope="col">DESCRIÇÃO</th>
                                        <th scope="col">DATA</th>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat3" dmx-bind:repeat="sc_andamentos.data.query" key="id">
                                    <tr>
                                        <td>{{andamento}}</td>
                                        <td>{{processo}}</td>
                                        <td>{{descricao}}</td>
                                        <td>{{repeat3[0].data}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="quick-actions">
        <button class="quick-action-btn" title="Novo Cliente" dmx-bs-tooltip="'Adicionar novo cliente'" data-bs-trigger="hover" dmx-on:click="modalNovoCliente.show()">
            <i class="fa-solid fa-plus"></i>
        </button>
        <button class="quick-action-btn" title="Exportar" dmx-bs-tooltip="'Exportar dados'" data-bs-trigger="hover">
            <i class="fa-solid fa-file-export"></i>
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