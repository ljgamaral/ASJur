<!doctype html>
<html lang="pt">

<head>
    <meta name="ac:route" content="/relatorios">
    <base href="/">
    <script src="dmxAppConnect/dmxAppConnect.js"></script>
    <meta charset="UTF-8">
    <title>Relatórios - AS Jurídico</title>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js" integrity="sha256-CutOzxCRucUsn6C6TcEYsauvvYilEniTXldPa6/wu0k=" crossorigin="anonymous"></script>
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

        .nav-active {
            background-color: #2c2c2c;
            color: #FFF !important;
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

        .contain-flex-1 {
            width: 50%;
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

            .contain-flex {
                flex-flow: column wrap;
            }

            .contain-flex-1 {
                width: 100%;
                padding: 0;
            }
        }

        .nav-active {
            background-color: #2c2c2c;
            color: #FFF !important;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxDatePicker/daterangepicker.min.css" />
    <script src="dmxAppConnect/dmxDatePicker/daterangepicker.min.js" defer></script>
    <link rel="stylesheet" href="dmxAppConnect/dmxDatePicker/dmxDatePicker.css" />
    <script src="dmxAppConnect/dmxDatePicker/dmxDatePicker.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/index.global.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/locales-all.global.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@6.1.11/index.global.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/index.global.min.js" defer></script>
    <script src="dmxAppConnect/dmxCalendar/dmxCalendar.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Popovers/dmxBootstrap5Popovers.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Collapse/dmxBootstrap5Collapse.js" defer></script>
    <script src="dmxAppConnect/dmxRouting/dmxRouting.js" defer></script>
    <script src="dmxAppConnect/dmxBootstrap5Offcanvas/dmxBootstrap5Offcanvas.js" defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.2/css/all.css" integrity="sha384-PPIZEGYM1v8zp5Py7UjFb79S58UeqCL9pYVnVPURKEqvioPROaVAJKKLzvH2rDnI" crossorigin="anonymous" />
    <link rel="stylesheet" href="dmxAppConnect/dmxNotifications/dmxNotifications.css" />
    <script src="dmxAppConnect/dmxBootstrap5Navigation/dmxBootstrap5Navigation.js" defer></script>
    <script src="dmxAppConnect/dmxBrowser/dmxBrowser.js" defer></script>
</head>

<body is="dmx-app" id="clientes">
    <dmx-serverconnect id="sc_financeiro" url="dmxConnect/api/relatorio_financeiro.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_documentos" url="dmxConnect/api/relatorio_documentos.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_andamentos" url="dmxConnect/api/relatorio_andamentos.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_clientes" url="dmxConnect/api/relatorio_clientes.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_tarefas" url="dmxConnect/api/relatorio_tarefas.php"></dmx-serverconnect>
    <dmx-serverconnect id="sc_processos" url="dmxConnect/api/relatorio_processos.php"></dmx-serverconnect>
    <dmx-value id="filtro" dmx-bind:value="'geral'"></dmx-value>
    <div class="modal fade" id="modal1" is="dmx-bs5-modal" tabindex="-1">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Baixar relatório</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <button id="btn2" class="btn w-100 text-bg-dark mb-2">Baixar versão .xlsx</button>
                    <button id="btn3" class="btn w-100 text-bg-dark mb-2">Baixar versão .csv</button>
                    <button id="btn4" class="btn w-100 text-bg-dark">Baixar versão .pdf</button>
                </div>
            </div>
        </div>
    </div>
    <div is="dmx-browser" id="browser1"></div>

    <!-- Mobile Nav Toggle -->
    <button class="mobile-nav-toggle" id="sidebarToggle">
        <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="container-fluid p-0 w-100">
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
                            <a class="nav-link" href="/clientes">
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
                            <a class="nav-link nav-active">
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
                    <div class="d-flex justify-content-between w-100 align-items-center">
                        <h1 class="page-title">Relatórios</h1>
                        <div class="d-flex flex-row" dmx-style:gap="'5px'">

                            <select id="select1" class="form-select" name="periodo">
                                <option value="1">Hoje</option>
                                <option selected="" value="2">Última semana</option>
                                <option value="3">Último mês</option>
                                <option value="4">Último semestre</option>
                                <option value="5">Último ano</option>
                            </select>

                        </div>



                    </div>


                </div>



                <!-- Filtros Rápidos -->
                <div class="d-flex mt-3 mb-3">
                    <div class="btn-group" role="group">
                        <button class="btn btn-filter nav-active" id="geral2" dmx-show="filtro.value=='geral'">Geral</button><button class="btn btn-filter buttons-radius" dmx-on:click="filtro.setValue('geral')" id="geral" dmx-hide="filtro.value=='geral'">Geral</button><button class="btn btn-filter nav-active" id="processos2" dmx-show="filtro.value=='processos'">Processos</button>
                        <button class="btn btn-filter buttons-radius" dmx-on:click="filtro.setValue('processos')" id="processos" dmx-hide="filtro.value=='processos'">Processos</button>

                        <button class="btn btn-filter nav-active" id="clientes2" dmx-show="filtro.value=='clientes'">Clientes</button><button class="btn btn-filter" dmx-on:click="filtro.setValue('clientes')" id="clientes" dmx-hide="filtro.value=='clientes'">Clientes</button><button class="btn btn-filter nav-active" id="andamentos2" dmx-show="filtro.value=='andamentos'">Andamentos</button>
                        <button class="btn btn-filter" dmx-on:click="filtro.setValue('andamentos')" id="andamentos" dmx-hide="filtro.value=='andamentos'">Andamentos</button>

                        <button class="btn btn-filter nav-active" id="tarefas2" dmx-show="filtro.value=='tarefas'">Tarefas</button>

                        <button class="btn btn-filter" id="tarefas" dmx-on:click="filtro.setValue('tarefas')" dmx-hide="filtro.value=='tarefas'">Tarefas</button><button class="btn btn-filter nav-active" id="documentos2" dmx-show="filtro.value=='documentos'">Documentos</button>
                        <button class="btn btn-filter" dmx-on:click="filtro.setValue('documentos')" id="documentos" dmx-hide="filtro.value=='documentos'">Documentos</button>
                        <button class="btn btn-filter nav-active" id="financeiro2" dmx-show="filtro.value=='financeiro'">Financeiro</button><button class="btn btn-filter" id="financeiro" dmx-on:click="filtro.setValue('financeiro')" dmx-hide="filtro.value=='financeiro'">Financeiro</button>

                    </div>
                </div>

                <!-- Stats Cards -->


                <!-- Tabela de Clientes -->
                <div class="d-flex me-0 pe-0 contain-flex flex-column">
                    <div class="d-flex table-container animate-fade-in flex-column" id="relatoriogeral" dmx-show="filtro.value=='geral'">
                        <div class="d-flex w-100 titulo-relatorio justify-content-between mb-3 pb-3">

                            <h3>Relatório Geral</h3>
                            <div class="dropdown">
                                <button id="dropdown1" class="btn btn-secondary dropdown-toggle d-print-none text-bg-dark" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-download"></i></button>
                                <div class="dropdown-menu" aria-labelledby="dropdown1">
                                    <a class="dropdown-item" href="#">Baixar .pdf</a><a class="dropdown-item" href="#">Baixar .xslx</a>

                                    <a class="dropdown-item" href="#">Baixar .cls</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start">
                            <p class="subtitulo-relatorio">Resumo</p>


                            <table class="table table-sm w-100 table-bordered">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Processos Ativos</td>
                                        <td class="bg-body-tertiary text-secondary">Tarefas Pendentes</td>
                                        <td class="bg-body-tertiary text-secondary">Clientes Atendidos</td>
                                        <td class="bg-body-tertiary text-secondary">Saldo Financeiro</td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="text-black">{{sc_processos.data.query_processos[0].quantidade_processos_ativos || "0"}}</td>
                                        <td class="text-black">{{sc_tarefas.data.query_tarefas[0].quantidade_tarefas_pendentes || "0"}}</td>
                                        <td class="text-black">&nbsp;54</td>
                                        <td class="text-black">R$ 25.300,00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start mt-3">
                            <p class="subtitulo-relatorio">Processos</p>


                            <table class="table table-responsive table-bordered table-hover table-sm w-100">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Título</td>
                                        <td class="bg-body-tertiary text-secondary">Cliente</td>
                                        <td class="bg-body-tertiary text-secondary">Status</td>
                                        <td class="bg-body-tertiary text-secondary">Último Andamento</td>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat1" dmx-bind:repeat="sc_processos.data.query_processos" key="id">
                                    <tr>
                                        <td class="text-black">{{processo}}</td>
                                        <td class="text-black">{{id_cliente}}</td>
                                        <td class="text-black">{{status || "-"}}</td>
                                        <td class="text-black">{{ultimo_andamento}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start mt-3">
                            <p class="subtitulo-relatorio">Clientes</p>


                            <table class="table table-bordered table-hover table-sm w-100">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Nome</td>
                                        <td class="bg-body-tertiary text-secondary">Pessoa</td>

                                        <td class="bg-body-tertiary text-secondary">&nbsp;Número de Processos</td>
                                        <td class="bg-body-tertiary text-secondary">Responsável</td>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat4" dmx-bind:repeat="sc_clientes.data.query" key="id">

                                    <tr>
                                        <td class="text-black">{{nome}}</td>
                                        <td class="text-black text-capitalize">{{tipo}}</td>

                                        <td class="text-black">-</td>
                                        <td class="text-black">{{responsavel}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start mt-3">
                            <p class="subtitulo-relatorio">Andamentos</p>


                            <table class="table table-bordered table-hover table-sm w-100">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Processo</td>
                                        <td class="bg-body-tertiary text-secondary">Andamento</td>
                                        <td class="bg-body-tertiary text-secondary">Data</td>
                                        <td class="bg-body-tertiary text-secondary">Cliente</td>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat6" dmx-bind:repeat="sc_andamentos.data.query" key="id">

                                    <tr>
                                        <td class="text-black">{{processo}}</td>
                                        <td class="text-black">{{andamento}}</td>
                                        <td class="text-black">{{repeat6[0].data.formatDate('dd/MM/yyyy')||"-"}}</td>
                                        <td class="text-black">{{id_cliente}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start mt-3">
                            <p class="subtitulo-relatorio">Tarefas</p>


                            <table class="table table-bordered table-hover table-sm w-100">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Nome</td>
                                        <td class="bg-body-tertiary text-secondary">Data Limite</td>
                                        <td class="bg-body-tertiary text-secondary">Status</td>
                                        <td class="bg-body-tertiary text-secondary">Cliente</td>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat2" dmx-bind:repeat="sc_tarefas.data.query_tarefas" key="id">

                                    <tr>
                                        <td class="text-black">{{descricao}}</td>
                                        <td class="text-black">{{repeat2.data}}</td>
                                        <td class="text-black">{{status}}</td>
                                        <td class="text-black">{{id_cliente}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start mt-3">
                            <p class="subtitulo-relatorio">Documentos</p>


                            <table class="table table-bordered table-hover table-sm w-100">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Nome</td>
                                        <td class="bg-body-tertiary text-secondary">Tipo</td>
                                        <td class="bg-body-tertiary text-secondary">Data de Envio</td>
                                        <td class="bg-body-tertiary text-secondary">Processo relacionado</td>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat9" dmx-bind:repeat="sc_documentos.data.query" key="id">

                                    <tr>
                                        <td class="text-black">{{nome}}</td>
                                        <td class="text-black">{{tipo}}</td>
                                        <td class="text-black">{{criado_em.formatDate('dd/MM/yyyy')}}</td>
                                        <td class="text-black">{{id_processo}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start mt-3">
                            <p class="subtitulo-relatorio">Financeiro</p>


                            <table class="table table-bordered table-hover table-sm w-100">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Processo</td>
                                        <td class="bg-body-tertiary text-secondary">Descrição</td>
                                        <td class="bg-body-tertiary text-secondary">Valor</td>
                                        <td class="bg-body-tertiary text-secondary">Data de pagamento</td>
                                        <td class="bg-body-tertiary text-secondary">Status</td>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat11" dmx-bind:repeat="sc_financeiro.data.query" key="id">

                                    <tr>
                                        <td class="text-black">{{id_processo}}</td>
                                        <td class="text-black">{{descricao}}</td>
                                        <td class="text-black">{{valor}}</td>
                                        <td class="text-black">{{data_pagamento}}</td>
                                        <td class="text-black">{{status}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>



                    </div>
                    <div class="d-flex table-container animate-fade-in flex-column" id="relatorioprocessos" dmx-show="filtro.value=='processos'">
                        <div class="d-flex w-100 titulo-relatorio justify-content-between mb-3 pb-3">

                            <h3>Relatório de Processos</h3>
                            <div class="dropdown">
                                <button id="dropdown2" class="btn btn-secondary dropdown-toggle d-print-none text-bg-dark" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-download"></i></button>
                                <div class="dropdown-menu" aria-labelledby="dropdown1">
                                    <a class="dropdown-item" href="#">Baixar .pdf</a><a class="dropdown-item" href="#">Baixar .xslx</a>

                                    <a class="dropdown-item" href="#">Baixar .cls</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start mt-2">
                            <p class="subtitulo-relatorio">Processos</p>


                            <table class="table table-responsive table-bordered table-hover table-sm w-100">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Título</td>
                                        <td class="bg-body-tertiary text-secondary">Cliente</td>
                                        <td class="bg-body-tertiary text-secondary">Status</td>
                                        <td class="bg-body-tertiary text-secondary">Último Andamento</td>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat3" dmx-bind:repeat="sc_processos.data.query_processos" key="id">

                                    <tr>
                                        <td class="text-black">{{processo}}</td>
                                        <td class="text-black">{{id_cliente}}</td>
                                        <td class="text-black">{{status || "-"}}</td>
                                        <td class="text-black">{{ultimo_andamento}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div class="d-flex table-container animate-fade-in flex-column" id="relatorioclientes" dmx-show="filtro.value=='clientes'">
                        <div class="d-flex w-100 titulo-relatorio justify-content-between mb-3 pb-3">

                            <h3>Relatório de Clientes</h3>
                            <div class="dropdown">
                                <button id="dropdown3" class="btn btn-secondary dropdown-toggle d-print-none text-bg-dark" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-download"></i></button>
                                <div class="dropdown-menu" aria-labelledby="dropdown1">
                                    <a class="dropdown-item" href="#">Baixar .pdf</a><a class="dropdown-item" href="#">Baixar .xslx</a>

                                    <a class="dropdown-item" href="#">Baixar .cls</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start mt-2">
                            <p class="subtitulo-relatorio">Clientes</p>


                            <table class="table table-bordered table-hover table-sm w-100">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Nome</td>
                                        <td class="bg-body-tertiary text-secondary">Pessoa</td>

                                        <td class="bg-body-tertiary text-secondary">&nbsp;Número de Processos</td>
                                        <td class="bg-body-tertiary text-secondary">Responsável</td>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat5" dmx-bind:repeat="sc_clientes.data.query" key="id">

                                    <tr>
                                        <td class="text-black">{{nome}}</td>
                                        <td class="text-black text-capitalize">{{tipo}}</td>

                                        <td class="text-black">-</td>
                                        <td class="text-black">{{responsavel}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div class="d-flex table-container animate-fade-in flex-column" id="relatorioandamentos" dmx-show="filtro.value=='andamentos'">
                        <div class="d-flex w-100 titulo-relatorio justify-content-between mb-3 pb-3">

                            <h3>Relatório de Andamentos</h3>
                            <div class="dropdown">
                                <button id="dropdown4" class="btn btn-secondary dropdown-toggle d-print-none text-bg-dark" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-download"></i></button>
                                <div class="dropdown-menu" aria-labelledby="dropdown1">
                                    <a class="dropdown-item" href="#">Baixar .pdf</a><a class="dropdown-item" href="#">Baixar .xslx</a>

                                    <a class="dropdown-item" href="#">Baixar .cls</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start mt-2">
                            <p class="subtitulo-relatorio">Andamentos</p>


                            <table class="table table-bordered table-hover table-sm w-100">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Processo</td>
                                        <td class="bg-body-tertiary text-secondary">Andamento</td>
                                        <td class="bg-body-tertiary text-secondary">Data</td>
                                        <td class="bg-body-tertiary text-secondary">Cliente</td>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat7" dmx-bind:repeat="sc_andamentos.data.query" key="id">

                                    <tr>
                                        <td class="text-black">{{processo}}</td>
                                        <td class="text-black">{{andamento}}</td>
                                        <td class="text-black">{{repeat6[0].data.formatDate('dd/MM/yyyy') || "-"}}</td>
                                        <td class="text-black">{{id_cliente}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div class="d-flex table-container animate-fade-in flex-column" id="relatoriotarefas" dmx-show="filtro.value=='tarefas'">
                        <div class="d-flex w-100 titulo-relatorio justify-content-between mb-3 pb-3">

                            <h3>Relatório de Tarefas</h3>
                            <div class="dropdown">
                                <button id="dropdown5" class="btn btn-secondary dropdown-toggle d-print-none text-bg-dark" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-download"></i></button>
                                <div class="dropdown-menu" aria-labelledby="dropdown1">
                                    <a class="dropdown-item" href="#">Baixar .pdf</a><a class="dropdown-item" href="#">Baixar .xslx</a>

                                    <a class="dropdown-item" href="#">Baixar .cls</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start mt-2">
                            <p class="subtitulo-relatorio">Tarefas</p>


                            <table class="table table-bordered table-hover table-sm w-100">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Nome</td>
                                        <td class="bg-body-tertiary text-secondary">Data Limite</td>
                                        <td class="bg-body-tertiary text-secondary">Status</td>
                                        <td class="bg-body-tertiary text-secondary">Cliente</td>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat8" dmx-bind:repeat="sc_tarefas.data.query_tarefas" key="id">

                                    <tr>
                                        <td class="text-black">{{descricao}}</td>
                                        <td class="text-black">{{repeat2.data}}</td>
                                        <td class="text-black">{{status}}</td>
                                        <td class="text-black">{{id_cliente}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div class="d-flex table-container animate-fade-in flex-column" id="relatoriodocumentos" dmx-show="filtro.value=='documentos'">
                        <div class="d-flex w-100 titulo-relatorio justify-content-between mb-3 pb-3">

                            <h3>Relatório de Documentos</h3>
                            <div class="dropdown">
                                <button id="dropdown6" class="btn btn-secondary dropdown-toggle d-print-none text-bg-dark" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-download"></i></button>
                                <div class="dropdown-menu" aria-labelledby="dropdown1">
                                    <a class="dropdown-item" href="#">Baixar .pdf</a><a class="dropdown-item" href="#">Baixar .xslx</a>

                                    <a class="dropdown-item" href="#">Baixar .cls</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start mt-2">
                            <p class="subtitulo-relatorio">Documentos</p>


                            <table class="table table-bordered table-hover table-sm w-100">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Nome</td>
                                        <td class="bg-body-tertiary text-secondary">Tipo</td>
                                        <td class="bg-body-tertiary text-secondary">Data de Envio</td>
                                        <td class="bg-body-tertiary text-secondary">Processo relacionado</td>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat10" dmx-bind:repeat="sc_documentos.data.query" key="id">

                                    <tr>
                                        <td class="text-black">{{nome}}</td>
                                        <td class="text-black">{{tipo}}</td>
                                        <td class="text-black">{{criado_em.formatDate('dd/MM/yyyy')}}</td>
                                        <td class="text-black">{{id_processo}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div class="d-flex table-container animate-fade-in flex-column" id="relatoriofinanceiro" dmx-show="filtro.value=='financeiro'">
                        <div class="d-flex w-100 titulo-relatorio justify-content-between mb-3 pb-3">

                            <h3>Relatório do Financeiro</h3>
                            <div class="dropdown">
                                <button id="dropdown7" class="btn btn-secondary dropdown-toggle d-print-none text-bg-dark" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-download"></i></button>
                                <div class="dropdown-menu" aria-labelledby="dropdown1">
                                    <a class="dropdown-item" href="#">Baixar .pdf</a><a class="dropdown-item" href="#">Baixar .xslx</a>

                                    <a class="dropdown-item" href="#">Baixar .cls</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex resumo-geral text-start flex-column justify-content-start align-items-start mt-2">
                            <p class="subtitulo-relatorio">Financeiro</p>


                            <table class="table table-bordered table-hover table-sm w-100">
                                <thead>
                                    <tr>

                                        <td class="bg-body-tertiary text-secondary">Processo</td>
                                        <td class="bg-body-tertiary text-secondary">Descrição</td>
                                        <td class="bg-body-tertiary text-secondary">Valor</td>
                                        <td class="bg-body-tertiary text-secondary">Data de pagamento</td>
                                        <td class="bg-body-tertiary text-secondary">Status</td>
                                    </tr>
                                </thead>
                                <tbody is="dmx-repeat" id="repeat12" dmx-bind:repeat="sc_financeiro.data.query" key="id">

                                    <tr>
                                        <td class="text-black">{{id_processo}}</td>
                                        <td class="text-black">{{descricao}}</td>
                                        <td class="text-black">{{valor}}</td>
                                        <td class="text-black">{{data_pagamento}}</td>
                                        <td class="text-black">{{status}}</td>
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
                            <input type="text" class="form-control" name="nome" required dmx-bind:value="varClienteAtual.data.nome">
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
         const ctx = document.getElementById('myChart1');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Finalizado', 'Em andamento', 'Aguardando documentos', 'Suspenso', 'Arquivado', 'Em revisão'],
      datasets: [{
        label: 'Processos por status',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  const ctx2 = document.getElementById('myChart2');

  new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: ['Entrada', 'Saída', 'Aguardando documentos', 'Suspenso', 'Arquivado', 'Em revisão'],
      datasets: [{
        label: 'Processos por status',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
    </script>
</body>

</html>