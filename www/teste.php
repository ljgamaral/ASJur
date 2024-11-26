<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jurídico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary-color: #d4af37;
            --secondary-color: #f8f9fa;
            --text-color: #333333;
            --sidebar-bg: #ffffff;
            --sidebar-hover: #f1f3f5;
            --active-item: linear-gradient(135deg, #d4af37, #f1c40f);
            --card-bg: #ffffff;
            --card-border: #e0e0e0;
            --chart-color-1: rgba(212, 175, 55, 0.6);
            --chart-color-2: rgba(128, 128, 128, 0.6);
        }

        body {
            background-color: var(--secondary-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-color);
        }

        .sidebar {
            width: 280px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            background: var(--sidebar-bg);
            color: var(--text-color);
            padding: 1rem;
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .main-content {
            margin-left: 280px;
            padding: 2rem;
            transition: all 0.3s ease;
        }

        .nav-link {
            color: var(--text-color);
            padding: 0.8rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: 10px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .nav-link:hover {
            background: var(--sidebar-hover);
            color: var(--primary-color);
        }

        .nav-link.active {
            background: var(--active-item);
            color: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar-icon {
            width: 24px;
            margin-right: 10px;
            text-align: center;
        }

        .card {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .percentage-up {
            color: #27ae60;
            background: #e8f5e9;
            padding: 4px 8px;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: bold;
        }

        .percentage-down {
            color: #e74c3c;
            background: #ffeaea;
            padding: 4px 8px;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: bold;
        }

        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }

        .top-bar {
            background-color: var(--primary-color);
            color: #ffffff;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 10px;
            margin-bottom: 2rem;
        }

        .user-profile {
            display: flex;
            align-items: center;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            border: 2px solid #ffffff;
        }

        .notification-icon {
            font-size: 1.5rem;
            margin-left: 20px;
            cursor: pointer;
        }

        .btn-custom {
            background-color: var(--primary-color);
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #b8860b;
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
                overflow: hidden;
            }

            .main-content {
                margin-left: 70px;
            }

            .nav-link span:not(.sidebar-icon) {
                display: none;
            }

            .sidebar-icon {
                margin-right: 0;
            }

            .top-bar {
                padding: 0.5rem;
                flex-direction: column;
                align-items: flex-start;
            }

            .user-profile {
                margin-top: 1rem;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha384-XGjxtQfXaH2tnPFa9x+ruJTuLE3Aa6LhHSWRr1XeTyhezb4abCG4ccI5AkVDxqC+" crossorigin="anonymous" />
</head>

<body>\
    <dmx-serverconnect id="sc_listar_clientes" url="dmxConnect/api/listar_clientes.php"></dmx-serverconnect>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="d-flex align-items-center mb-4 ps-2">
            <h3 class="m-0" style="color: var(--primary-color);">AS</h3>
        </div>

        <nav class="nav flex-column">
            <a class="nav-link active" href="#">
                <span class="sidebar-icon"><i class="bi bi-house-door-fill"></i></span>
                <span>Início</span>
            </a>
            <a class="nav-link" href="#">
                <span class="sidebar-icon"><i class="bi bi-calendar3"></i></span>
                <span>Agenda</span>
            </a>
            <a class="nav-link" href="#">
                <span class="sidebar-icon"><i class="bi bi-folder2-open"></i></span>
                <span>Processos</span>
            </a>
            <a class="nav-link" href="#">
                <span class="sidebar-icon"><i class="bi bi-file-text"></i></span>
                <span>Publicações</span>
            </a>
            <a class="nav-link" href="#">
                <span class="sidebar-icon"><i class="bi bi-people-fill"></i></span>
                <span>Pessoas</span>
            </a>
            <a class="nav-link" href="#">
                <span class="sidebar-icon"><i class="bi bi-currency-dollar"></i></span>
                <span>Financeiro</span>
            </a>
            <a class="nav-link" href="#">
                <span class="sidebar-icon"><i class="bi bi-paperclip"></i></span>
                <span>GED</span>
            </a>
            <a class="nav-link" href="#">
                <span class="sidebar-icon"><i class="bi bi-journal-text"></i></span>
                <span>Acervo Jurídico</span>
            </a>
            <a class="nav-link" href="#">
                <span class="sidebar-icon"><i class="bi bi-clock-history"></i></span>
                <span>Timesheet</span>
            </a>
            <a class="nav-link" href="#">
                <span class="sidebar-icon"><i class="bi bi-handshake"></i></span>
                <span>Contratos</span>
            </a>
            <a class="nav-link" href="#">
                <span class="sidebar-icon"><i class="bi bi-gear"></i></span>
                <span>Configurações</span>
            </a>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar -->
        <div class="top-bar">
            <h1 class="mb-0">Dashboard Jurídico</h1>
            <div class="user-profile">
                <span>João Silva</span>
                <span class="notification-icon" title="Notificações">🔔</span>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <!-- Clientes Card -->
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="text-muted mb-3">Clientes Novos</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="m-0">300</h3>
                            <span class="percentage-up">+5%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Atendimentos Card -->
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="text-muted mb-3">Atendimentos Novos</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="m-0">200</h3>
                            <span class="percentage-down">-10%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Atendimentos Card -->
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="text-muted mb-3">Total Atendimentos</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="m-0">4000</h3>
                            <span class="percentage-down">-10%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Clientes Card -->
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="text-muted mb-3">Total Clientes</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="m-0">{{quantidade_novos_clientes}}</h3>
                            <span class="percentage-up">+24.5%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="row g-4">
            <!-- Relatorio Anual -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                                <h5 class="card-title mb-1">Relatório Anual</h5>
                                <p class="text-muted m-0">Dados de Atendimentos e Clientes</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-custom dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Exportar PDF</a></li>
                                    <li><a class="dropdown-item" href="#">Exportar Excel</a></li>
                                    <li><a class="dropdown-item" href="#">Imprimir</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="chart-container">
                            <canvas id="annualReportChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Novos Processos -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                                <h5 class="card-title mb-1">Novos Processos</h5>
                                <p class="text-muted m-0">Segundo Trimestre</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-custom dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="#">Detalhes</a></li>
                                    <li><a class="dropdown-item" href="#">Exportar</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="chart-container">
                            <canvas id="newProcessesChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        // Annual Report Chart
        const annualReportCtx = document.getElementById('annualReportChart').getContext('2d');
        new Chart(annualReportCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set'],
                datasets: [{
                    label: 'Atendimentos',
                    data: [130, 70, 200, 180, 90, 130, 170, 120, 30],
                    backgroundColor: 'rgba(212, 175, 55, 0.6)',
                    borderColor: 'rgba(212, 175, 55, 1)',
                    borderWidth: 1
                }, {
                    label: 'Clientes',
                    data: [100, 60, 180, 160, 80, 110, 150, 100, 20],
                    backgroundColor: 'rgba(128, 128, 128, 0.6)',
                    borderColor: 'rgba(128, 128, 128, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // New Processes Chart
        const newProcessesCtx = document.getElementById('newProcessesChart').getContext('2d');
        new Chart(newProcessesCtx, {
            type: 'radar',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
                datasets: [{
                    label: '2023',
                    data: [65, 59, 90, 81, 56, 55],
                    fill: true,
                    backgroundColor: 'rgba(212, 175, 55, 0.2)',
                    borderColor: 'rgb(212, 175, 55)',
                    pointBackgroundColor: 'rgb(212, 175, 55)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(212, 175, 55)'
                }, {
                    label: '2024',
                    data: [28, 48, 40, 19, 96, 27],
                    fill: true,
                    backgroundColor: 'rgba(128, 128, 128, 0.2)',
                    borderColor: 'rgb(128, 128, 128)',
                    pointBackgroundColor: 'rgb(128, 128, 128)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(128, 128, 128)'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                elements: {
                    line: {
                        borderWidth: 3
                    }
                }
            }
        });
    </script>
</body>

</html>