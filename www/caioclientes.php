<!doctype html>
<html lang="pt">

<head>
    <meta name="ac:route" content="/clientes">
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Clientes - AS Jurídico</title>

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.2/css/all.css" integrity="sha384-PPIZEGYM1v8zp5Py7UjFb79S58UeqCL9pYVnVPURKEqvioPROaVAJKKLzvH2rDnI" crossorigin="anonymous" />
    <script src="dmxAppConnect/dmxBootstrap5Collapse/dmxBootstrap5Collapse.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxValidator/dmxValidator.css" />
    <script src="dmxAppConnect/dmxValidator/dmxValidator.js" defer></script>
    <script src="dmxAppConnect/dmxBootbox5/bootstrap-modbox.min.js" defer></script>
    <script src="dmxAppConnect/dmxBootbox5/dmxBootbox5.js" defer></script>
</head>

<body is="dmx-app" id="clientes">
    <dmx-value id="abaform" dmx-bind:value="'dados-pessoais'"></dmx-value>

    <dmx-serverconnect id="sc_deletar_cliente" url="dmxConnect/api/excluir_cliente.php"></dmx-serverconnect>
    <dmx-notifications id="notifies1"></dmx-notifications>
    <dmx-serverconnect id="sc_novo_cliente" url="dmxConnect/api/cadastrar_cliente.php"></dmx-serverconnect>
    <dmx-value id="pagina_atual_tabela" dmx-bind:value="1"></dmx-value>
    <div is="dmx-browser" id="browser1"></div>
    <dmx-data-detail id="data_detail1" dmx-bind:data="sc_listar_clientes.data.query.data" key="id"></dmx-data-detail>
    <dmx-serverconnect id="sc_listar_clientes" url="dmxConnect/api/clientes.php" dmx-param:limit="select1.value" dmx-param:offset="(pagina_atual_tabela.value-1)*select1.value"></dmx-serverconnect>
    <dmx-serverconnect id="sc_processosativos" url="dmxConnect/api/percentual_mensal_processos_ativos.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_estados_clientes" url="dmxConnect/api/percentual_estados_clientes.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_clientes" url="dmxConnect/api/listar_clientes.php"></dmx-serverconnect>
    <dmx-value id="varClienteAtual"></dmx-value>
    <dmx-serverconnect id="sc_listar_clientes_novos" url="dmxConnect/api/listar_clientes.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_excluir_cliente" url="dmxConnect/api/excluir_cliente.php" noload dmx-on:success="sc_listar_clientes.load();notifySuccess.success('Cliente excluído com sucesso!')"></dmx-serverconnect>

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
                            <a class="nav-link nav-active">
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
                <!-- Page Header -->
                <div class="page-header animate-fade-in">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="page-title">Gestão de Clientes</h1>
                            <p class="page-subtitle mb-0">Gerencie todos os seus clientes em um só lugar</p>
                        </div>
                        <button class="btn btn-dark-custom" dmx-on:click="modalNovoCliente.show()">
                            <i class="fa-solid fa-plus me-2"></i>Novo Cliente
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
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div>
                                <div class="d-flex skeleton-loader" dmx-show="!sc_listar_clientes_novos.status"></div>
                                <p class="stats-value" dmx-show="sc_clientes.status">{{sc_clientes.data.listar_clientes_clientes_novos[0].total_clientes||0}}</p>
                            </div>
                            <div>
                                <p class="stats-label mb-0">
                                    Total de Clientes<i class="fa-solid fa-circle-info fa-xs info-tooltip" dmx-bs-tooltip="'Quantidade total de clientes cadastrados até o momento'"></i></p>
                            </div>
                            <div class="d-flex skeleton-loader-little" dmx-show="!sc_clientes.status"></div>
                            <div class="d-flex stats-trend up flex-row align-items-center" dmx-show="sc_listar_clientes.status">
                                <p class="mb-0">{{sc_clientes.data.listar_clientes_clientes_novos[0].mensagem_variacao_total_mensal}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.2s">
                        <div class="card stats-card">
                            <div class="stats-icon">
                                <i class="fa-solid fa-user-plus"></i>
                            </div>
                            <div>
                                <div class="d-flex skeleton-loader" dmx-show="!sc_listar_clientes_novos.status"></div>
                                <p class="stats-value" dmx-show="sc_clientes.status">{{sc_clientes.data.listar_clientes_clientes_novos[0].novos_clientes_semana||0}}</p>
                            </div>
                            <div>
                                <p class="stats-label mb-0">
                                    Novos Clientes<i class="fa-solid fa-circle-info fa-xs info-tooltip" dmx-bs-tooltip="'Clientes cadastrados essa semana'" data-bs-trigger="hover"></i></p>
                            </div>
                            <div class="d-flex skeleton-loader-little" dmx-show="!sc_listar_clientes_novos.status"></div>
                            <div class="d-flex stats-trend up flex-row align-items-center" dmx-show="sc_clientes.status">

                                <p class="mb-0">{{sc_clientes.data.listar_clientes_clientes_novos[0].mensagem_variacao_clientes_novos_semanal}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.3s">
                        <div class="card stats-card">
                            <div class="stats-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <div class="d-flex skeleton-loader" dmx-show="!sc_estados_clientes.status"></div>
                                <p class="stats-value" dmx-show="sc_estados_clientes.status">{{sc_estados_clientes.data.percentual_estados_clientes[0].total_estados_atual||0}}</p>
                            </div>
                            <div class="stats-label">Estados com clientes</div>
                            <div class="d-flex skeleton-loader-little" dmx-show="!sc_estados_clientes.status"></div>
                            <div class="d-flex stats-trend up flex-row align-items-center" dmx-show="sc_estados_clientes.status">
                                <p class="mb-0">{{sc_estados_clientes.data.percentual_estados_clientes[0].mensagem}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 animate-fade-in" style="animation-delay: 0.4s">
                        <div class="card stats-card">
                            <div class="stats-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <div>
                                <div class="d-flex skeleton-loader" dmx-show="!sc_processosativos.status"></div>
                                <p class="stats-value flex-shrink-0" dmx-show="sc_processosativos.status">{{sc_processosativos.data.query[0].processos_ativos||0}}</p>
                            </div>

                            <div class="stats-label">Processos Ativos</div>
                            <div class="d-flex skeleton-loader-little" dmx-show="!sc_processosativos.status"></div>
                            <div class="d-flex stats-trend up flex-row align-items-center" dmx-show="sc_processosativos.status">
                                <p class="mb-0">{{sc_processosativos.data.query[0].mensagem_processos_ativos}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabela de Clientes -->
                <div class="table-container animate-fade-in" style="animation-delay: 0.5s">
                    <div class="d-flex align-items-center pt-2 pb-2 justify-content-between">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Exibir</p>
                            <div class="d-flex align-items-center"><select id="select1" class="form-select ms-2 me-2 pt-1 pb-1 ps-2" name="quantidade_celulas">
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
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">TELEFONE</th>
                                    <th scope="col">PESSOA</th>
                                    <th scope="col">AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody is="dmx-repeat" id="repeat2" dmx-bind:repeat="sc_listar_clientes.data.query.data" key="id">
                                <tr>
                                    <td>{{id}}</td>
                                    <td>{{nome}}</td>
                                    <td>{{celular.replace(/\D/g, "").replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3")}}</td>
                                    <td class="text-capitalize">{{tipo}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button id="btn3" class="btn" dmx-bs-tooltip="'Editar informações'" data-bs-trigger="hover" dmx-on:click="data_detail1.select(id);modalEditarCliente.show();modalEditarCliente.formEditarCliente.inp_slug1.setValue(slug);modalEditarCliente.formEditarCliente.inp_id.setValue(id);modalEditarCliente.formEditarCliente.inp_id_crm1.setValue(id_crm);modalEditarCliente.formEditarCliente.inp_tipo2.setValue(tipo);modalEditarCliente.formEditarCliente.inp_nome2.setValue(nome);modalEditarCliente.formEditarCliente.inp_responsavel1.setValue(responsavel);modalEditarCliente.formEditarCliente.inp_endereco2.setValue(endereco);modalEditarCliente.formEditarCliente.inp_bairro2.setValue(bairro);modalEditarCliente.formEditarCliente.inp_cep2.setValue(cep);modalEditarCliente.formEditarCliente.inp_cidade2.setValue(cidade);modalEditarCliente.formEditarCliente.inp_uf2.setValue(uf);modalEditarCliente.formEditarCliente.inp_departamento2.setValue(departamento);modalEditarCliente.formEditarCliente.inp_data_nascimento1.setValue(data_nascimento);modalEditarCliente.formEditarCliente.inp_rg1.setValue(rg);modalEditarCliente.formEditarCliente.inp_cpf1.setValue(cpf);modalEditarCliente.formEditarCliente.inp_estado_civil1.setValue(estado_civil);modalEditarCliente.formEditarCliente.inp_profissao1.setValue(profissao);modalEditarCliente.formEditarCliente.inp_sexo1.setValue(sexo);modalEditarCliente.formEditarCliente.inp_filiacao1.setValue(filiacao);modalEditarCliente.formEditarCliente.inp_celular2.setValue(celular);modalEditarCliente.formEditarCliente.inp_origem1.setValue(origem);modalEditarCliente.formEditarCliente.inp_captador1.setValue(captador);modalEditarCliente.formEditarCliente.inp_captador2.setValue(criado_em)"><i class="fa-solid fa-pen"></i></button>
                                            <button id="btn4" class="btn" dmx-bs-tooltip="'Excluir cliente'" data-bs-trigger="hover" dmx-on:click="run({'bootbox.confirm':{name:'excluirCliente',message:'Tem certeza que deseja excluir esse cliente?',title:'Excluir Cliente',buttons:{confirm:{label:'Sim, excluir',className:'btn-danger'},cancel:{label:'Não, cancelar',className:'btn-secondary'}},size:'sm',then:{steps:[{serverConnect:{name:'sc_excluir_cliente',outputType:'object',url:'dmxConnect/api/excluir_cliente.php',site:'ASJur',params:{id_cliente:`id`}}},{run:{outputType:'text',action:`notifies1.success(\'Cliente excluído com sucesso!\');sc_listar_clientes.load({});sc_estados_clientes.load({});sc_clientes.load({});sc_listar_clientes_novos.load({})`}}]}}})"><i class="fa-solid fa-trash"></i></button>
                                            <button id="btn5" class="btn" dmx-bs-tooltip="'Ver mais'" data-bs-trigger="hover" dmx-on:click="browser1.goto('/clientes/'+slug)"><i class="fa-solid fa-circle-info"></i></button>
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
                        <p class="mb-0 text-black">{{sc_listar_clientes.data.query.page.total}}</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Quick Actions -->

    <!-- Modal Novo Cliente -->
    <div class="modal fade" id="modalExcluirCliente" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Você tem certeza que deseja excluir o cliente? A ação é irreversível!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não, cancelar</button>
                    <button type="button" class="btn btn-primary text-bg-danger" dmx-on:click="">Sim, excluir</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalNovoCliente" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <form is="dmx-serverconnect-form" id="formNovoCliente" method="post" action="dmxConnect/api/cadastrar_cliente.php" dmx-generator="bootstrap4" dmx-form-type="horizontal" dmx-on:done="notifies1.success('Cliente cadastrado com sucesso!');sc_listar_clientes.load({});sc_estados_clientes.load({});sc_clientes.load({});sc_listar_clientes_novos.load({});modalNovoCliente.hide();abaform.setValue('dados-pessoais')">
                        <div class="d-flex justify-content-around flex-column">
                            <div class="d-flex flex-column mt-4" id="dadospessoais" dmx-show="abaform.value=='dados-pessoais'">


                                <p class="mb-1 title-form">Dados pessoais</p>



                                <div class="form-group column">
                                    <label for="inp_nome" class="col-sm-2 col-form-label">Nome</label>
                                    <input type="text" class="form-control" id="inp_nome" name="nome" aria-describedby="inp_nome_help" required="">
                                </div>
                                <div class="form-group column">

                                    <label for="inp_tipo1" class="col-sm-2 col-form-label">Pessoa</label>
                                    <select id="inp_tipo" class="form-select" name="tipo">
                                        <option value="fisica">Física</option>
                                        <option value="juridica">Jurídica</option>
                                    </select>
                                </div>

                                <div class="d-flex">
                                    <div class="form-group column w-50 me-2">
                                        <label for="inp_cpf" class="col-sm-2 col-form-label">CPF</label>
                                        <input class="form-control" id="inp_cpf" name="cpf" aria-describedby="inp_cpf_help" required="" oninput="mascara(this)">
                                    </div>
                                    <div class="form-group column w-50">
                                        <label for="inp_rg" class="col-sm-2 col-form-label">RG</label>
                                        <input type="text" class="form-control" id="inp_rg" name="rg" aria-describedby="inp_rg_help" required="" oninput="mascaraRG(this)">
                                    </div>
                                </div>



                                <div class="form-group column">

                                    <label for="inp_sexo" class="col-sm-2 col-form-label">Sexo</label>
                                    <select id="inp_sexo" class="form-select" name="sexo">
                                        <option selected="" value="masculino">Masculino</option>
                                        <option value="feminino">Feminino</option>
                                    </select>
                                </div>
                                <div class="form-group column">
                                    <label for="inp_data_nascimento" class="sm-2 col-form-label">Data nascimento</label>
                                    <input type="date" class="form-control" id="inp_data_nascimento" name="data_nascimento" aria-describedby="inp_data_nascimento_help" placeholder="Enter Data nascimento" required="">
                                </div>
                                <div class="form-group column">

                                    <label for="inp_estado_civil" class="sm-2 col-form-label">Estado civil</label>
                                    <select id="inp_estado_civil" class="form-select" name="estado_civil">
                                        <option value="Solteiro">Solteiro</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Separado">Separado</option>
                                        <option value="Divorciado">Divorciado</option>
                                        <option value="Viúvo">Viúvo</option>
                                    </select>
                                </div>

                                <div class="form-group column">
                                    <label for="inp_filiacao" class="col-sm-2 col-form-label">Filiação</label>
                                    <input type="text" class="form-control" id="inp_filiacao" name="filiacao" aria-describedby="inp_filiacao_help" required="">
                                </div>
                                <button id="btn8" class="btn text-bg-dark mt-3" dmx-on:click="abaform.setValue('contato')">Continuar&nbsp;<i class="fa-solid fa-arrow-right fa-xs"></i></button>





                            </div>
                            <div class="d-flex flex-column mt-3" id="contato" dmx-show="abaform.value=='contato'">
                                <div class="d-flex"><button id="btn10" class="btn text-secondary mb-1 ps-0" dmx-on:click="abaform.setValue('dados-pessoais')"><i class="fa-solid fa-arrow-left fa-xs"></i>&nbsp;Voltar para dados pessoais</button>
                                </div>
                                <p class="mb-1 title-form">Informações de contato</p>
                                <div class="form-group column">
                                    <label for="inp_celular1" class="col-sm-2 col-form-label">Celular</label>
                                    <input type="text" class="form-control" id="inp_celular" name="celular" aria-describedby="inp_celular_help" oninput="mascaraCelular(this)">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_bairro" class="col-sm-2 col-form-label">Bairro</label>
                                    <input type="text" class="form-control" id="inp_bairro" name="bairro" aria-describedby="inp_bairro_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_uf1" class="col-sm-2 col-form-label">UF</label>
                                    <select id="inp_uf" class="form-select" name="uf">
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option selected="" value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>

                                </div>
                                <div class="form-group column">
                                    <label for="inp_cidade" class="col-sm-2 col-form-label">Cidade</label>
                                    <input type="text" class="form-control" id="inp_cidade" name="cidade" aria-describedby="inp_cidade_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_cep" class="col-sm-2 col-form-label">CEP</label>
                                    <input class="form-control" id="inp_cep" name="cep" aria-describedby="inp_cep_help" required="" type="number" max="99999999" data-rule-max="99999999">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_endereco" class="col-sm-2 col-form-label">Endereco</label>
                                    <input type="text" class="form-control" id="inp_endereco" name="endereco" aria-describedby="inp_endereco_help" required="">
                                </div><button id="btn9" class="btn text-bg-dark mt-3" dmx-on:click="abaform.setValue('adicionais')">Continuar&nbsp;<i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                            <div class="d-flex flex-column mt-3" id="adicionais" dmx-show="abaform.value=='adicionais'">
                                <div class="d-flex"><button id="btn11" class="btn text-secondary mb-1 ps-0" dmx-on:click="abaform.setValue('contato')"><i class="fa-solid fa-arrow-left fa-xs"></i>&nbsp;Voltar para informações de contato</button>
                                </div>
                                <p class="mb-1 title-form">Informações adicionais</p>
                                <div class="form-group column">
                                    <label for="inp_profissao" class="col-sm-2 col-form-label">Profissão</label>
                                    <input type="text" class="form-control" id="inp_profissao" name="profissao" aria-describedby="inp_profissao_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_slug" class="col-sm-2 col-form-label col">Slug</label>
                                    <input type="text" class="form-control" id="inp_slug" name="slug" aria-describedby="inp_slug_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_id_crm" class="col-sm-2 col-form-label">Id crm</label>
                                    <input type="number" class="form-control" id="inp_id_crm" name="id_crm" aria-describedby="inp_id_crm_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_departamento" class="col-sm-2 col-form-label">Departamento</label>
                                    <input type="text" class="form-control" id="inp_departamento" name="departamento" aria-describedby="inp_departamento_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_responsavel" class="col-sm-2 col-form-label">Responsável</label>
                                    <input type="text" class="form-control" id="inp_responsavel" name="responsavel" aria-describedby="inp_responsavel_help" required="">
                                </div>









                                <div class="form-group column">
                                    <label for="inp_origem" class="col-sm-2 col-form-label">Origem</label>
                                    <input type="text" class="form-control" id="inp_origem" name="origem" aria-describedby="inp_origem_help">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_captador" class="col-sm-2 col-form-label">Captador</label>
                                    <input type="text" class="form-control" id="inp_captador" name="captador" aria-describedby="inp_captador_help">
                                </div><button type="submit" class="btn btn-primary w-100 mt-3" dmx-bind:disabled="state.executing">Cadastrar<span class="spinner-border spinner-border-sm" role="status" dmx-show="state.executing"></span></button>
                            </div>
                        </div>






















                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalEditarCliente" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form is="dmx-serverconnect-form" id="formEditarCliente" method="post" action="dmxConnect/api/editar_cliente.php" dmx-generator="bootstrap4" dmx-form-type="horizontal" dmx-on:done="notifies1.success('Cliente cadastrado com sucesso!');sc_listar_clientes.load({});sc_estados_clientes.load({});sc_clientes.load({});sc_listar_clientes_novos.load({});modalEditarCliente.hide()">
                        <div class="d-flex justify-content-around mb-3">
                            <div class="d-flex flex-column column-form">
                                <div class="form-group column">
                                    <label for="inp_slug1" class="col-sm-2 col-form-label col">Slug</label>
                                    <input type="text" class="form-control" id="inp_slug1" name="slug" aria-describedby="inp_slug_help" required="">
                                    <input type="hidden" class="form-control" id="inp_id" name="id" aria-describedby="inp_slug_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_id_crm1" class="col-sm-2 col-form-label">Id crm</label>
                                    <input type="number" class="form-control" id="inp_id_crm1" name="id_crm" aria-describedby="inp_id_crm_help" required="">
                                </div>
                                <div class="form-group column">

                                    <label for="inp_tipo1" class="col-sm-2 col-form-label">Pessoa</label>
                                    <select id="inp_tipo2" class="form-select" name="tipo">
                                        <option value="fisica">Física</option>
                                        <option value="juridica">Jurídica</option>
                                    </select>
                                </div>
                                <div class="form-group column">
                                    <label for="inp_nome2" class="col-sm-2 col-form-label">Nome</label>
                                    <input type="text" class="form-control" id="inp_nome2" name="nome" aria-describedby="inp_nome_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_responsavel1" class="col-sm-2 col-form-label">Responsável</label>
                                    <input type="text" class="form-control" id="inp_responsavel1" name="responsavel" aria-describedby="inp_responsavel_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_endereco2" class="col-sm-2 col-form-label">Endereco</label>
                                    <input type="text" class="form-control" id="inp_endereco2" name="endereco" aria-describedby="inp_endereco_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_bairro2" class="col-sm-2 col-form-label">Bairro</label>
                                    <input type="text" class="form-control" id="inp_bairro2" name="bairro" aria-describedby="inp_bairro_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_cep2" class="col-sm-2 col-form-label">CEP</label>
                                    <input class="form-control" id="inp_cep2" name="cep" aria-describedby="inp_cep_help" required="" type="number" max="99999999" data-rule-max="99999999">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_cidade2" class="col-sm-2 col-form-label">Cidade</label>
                                    <input type="text" class="form-control" id="inp_cidade2" name="cidade" aria-describedby="inp_cidade_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_uf1" class="col-sm-2 col-form-label">UF</label>
                                    <select id="inp_uf2" class="form-select" name="uf">
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option selected="" value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>

                                </div>
                                <div class="form-group column">
                                    <label for="inp_departamento2" class="col-sm-2 col-form-label">Departamento</label>
                                    <input type="text" class="form-control" id="inp_departamento2" name="departamento" aria-describedby="inp_departamento_help" required="">
                                </div>

                            </div>
                            <div class="d-flex flex-column column-form">
                                <div class="form-group column">
                                    <label for="inp_data_nascimento1" class="sm-2 col-form-label">Data nascimento</label>
                                    <input type="date" class="form-control" id="inp_data_nascimento1" name="data_nascimento" aria-describedby="inp_data_nascimento_help" placeholder="Enter Data nascimento" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_rg1" class="col-sm-2 col-form-label">RG</label>
                                    <input type="text" class="form-control" id="inp_rg1" name="rg" aria-describedby="inp_rg_help" required="" oninput="mascaraRG(this)">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_cpf1" class="col-sm-2 col-form-label">CPF</label>
                                    <input class="form-control" id="inp_cpf1" name="cpf" aria-describedby="inp_cpf_help" required="" oninput="mascara(this)">
                                </div>
                                <div class="form-group column">

                                    <label for="inp_estado_civil1" class="sm-2 col-form-label">Estado civil</label>
                                    <select id="inp_estado_civil1" class="form-select" name="estado_civil">
                                        <option value="Solteiro">Solteiro</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Separado">Separado</option>
                                        <option value="Divorciado">Divorciado</option>
                                        <option value="Viúvo">Viúvo</option>
                                    </select>
                                </div>
                                <div class="form-group column">
                                    <label for="inp_profissao1" class="col-sm-2 col-form-label">Profissão</label>
                                    <input type="text" class="form-control" id="inp_profissao1" name="profissao" aria-describedby="inp_profissao_help" required="">
                                </div>
                                <div class="form-group column">

                                    <label for="inp_sexo1" class="col-sm-2 col-form-label">Sexo</label>
                                    <select id="inp_sexo1" class="form-select" name="sexo">
                                        <option selected="" value="masculino">Masculino</option>
                                        <option value="feminino">Feminino</option>
                                    </select>
                                </div>
                                <div class="form-group column">
                                    <label for="inp_filiacao1" class="col-sm-2 col-form-label">Filiação</label>
                                    <input type="text" class="form-control" id="inp_filiacao1" name="filiacao" aria-describedby="inp_filiacao_help" required="">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_celular1" class="col-sm-2 col-form-label">Celular</label>
                                    <input type="text" class="form-control" id="inp_celular2" name="celular" aria-describedby="inp_celular_help" oninput="mascaraCelular(this)">
                                </div>

                                <div class="form-group column">
                                    <label for="inp_origem1" class="col-sm-2 col-form-label">Origem</label>
                                    <input type="text" class="form-control" id="inp_origem1" name="origem" aria-describedby="inp_origem_help">
                                </div>
                                <div class="form-group column">
                                    <label for="inp_captador1" class="col-sm-2 col-form-label">Captador</label>
                                    <input type="text" class="form-control" id="inp_captador1" name="captador" aria-describedby="inp_captador_help">
                                    <input type="hidden" class="form-control" id="inp_captador2" name="criado_em" aria-describedby="inp_captador_help">
                                </div>
                            </div>
                        </div>





















                        <button type="submit" class="btn btn-primary w-100" dmx-bind:disabled="state.executing">Atualizar&nbsp;<span class="spinner-border spinner-border-sm" role="status" dmx-show="state.executing"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Editar Cliente -->

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
        function mascara(i){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   i.setAttribute("maxlength", "14");
   if (v.length == 3 || v.length == 7) i.value += ".";
   if (v.length == 11) i.value += "-";

}

function mascaraRG(i) {
    var v = i.value;

    i.setAttribute("maxlength", "9"); // Tamanho máximo do RG formatado
}
function mascaraCelular(i) {
    var v = i.value;

    // Impede entrada de caracteres que não sejam números
    if (isNaN(v[v.length - 1])) {
        i.value = v.substring(0, v.length - 1);
        return;
    }

    i.setAttribute("maxlength", "15"); // Tamanho máximo do telefone formatado

    // Adiciona os parênteses, espaço e o traço automaticamente
    if (v.length === 1) i.value = "(" + v;
    if (v.length === 3) i.value += ") ";
    if (v.length === 10) i.value += "-";
}

function mascaraCEP(i) {
    var v = i.value;

    i.setAttribute("maxlength", "8"); // Tamanho máximo do CEP formatado
}
    </script>
</body>

</html>