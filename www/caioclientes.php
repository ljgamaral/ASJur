<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Cliente - Dashboard Jurídico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
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
            --folder-bg: #fff8e1;
            --folder-border: #d4af37;
            --folder-active: #ffd700;
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
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .btn-custom {
            background-color: var(--primary-color);
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #b8860b;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(184, 134, 11, 0.3);
        }

        .badge-custom {
            background-color: var(--primary-color);
            color: #ffffff;
        }

        .folder-tabs {
            display: flex;
            overflow-x: auto;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--folder-border);
            margin-bottom: -2px;
        }

        .folder-tab {
            background-color: var(--folder-bg);
            border: 2px solid var(--folder-border);
            border-bottom: none;
            border-radius: 10px 10px 0 0;
            padding: 12px 24px;
            margin-right: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            top: 2px;
            font-weight: 600;
        }

        .folder-tab:hover {
            background-color: #fff3c4;
        }

        .folder-tab.active {
            background-color: var(--folder-active);
            border-bottom: 2px solid var(--folder-active);
            font-weight: bold;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
        }

        .folder-content {
            background-color: var(--folder-bg);
            border: 2px solid var(--folder-border);
            border-top: none;
            border-radius: 0 0 15px 15px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .folder-item {
            background-color: #ffffff;
            border: 1px solid var(--folder-border);
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .folder-item:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }

        .activity-icon {
            background-color: var(--folder-bg);
            color: var(--primary-color);
            padding: 15px;
            border-radius: 50%;
            margin-right: 20px;
            font-size: 1.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .client-avatar {
            width: 100px;
            height: 100px;
            background-color: var(--primary-color);
            color: #ffffff;
            font-size: 2.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .client-info {
            background: linear-gradient(135deg, #fff8e1, #fffde7);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .client-info p {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .client-info i {
            margin-right: 10px;
            color: var(--primary-color);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
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

            .folder-tabs {
                flex-wrap: wrap;
            }

            .folder-tab {
                margin-bottom: 5px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha384-XGjxtQfXaH2tnPFa9x+ruJTuLE3Aa6LhHSWRr1XeTyhezb4abCG4ccI5AkVDxqC+" crossorigin="anonymous" />
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="d-flex align-items-center mb-4 ps-2">
            <h3 class="m-0" style="color: var(--primary-color);">AS</h3>
        </div>

        <nav class="nav flex-column">
            <a class="nav-link" href="#">
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
            <a class="nav-link active" href="#">
                <span class="sidebar-icon"><i class="bi bi-people-fill"></i></span>
                <span>Clientes</span>
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
        <div class="container-fluid">
            <!-- Breadcrumb/Back Button -->
            <div class="d-flex align-items-center mb-4">
                <a href="#" class="btn btn-link text-decoration-none" style="color: var(--primary-color);">
                    <i class="bi bi-arrow-left me-2"></i>Voltar para Clientes
                </a>
            </div>

            <!-- Client Header -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="client-avatar me-4">
                            AE
                        </div>
                        <div class="flex-grow-1">
                            <h1 class="mb-1">A ABRAO E SILVA ADVOGADOS ASSOCIADOS</h1>
                            <p class="text-muted mb-2">(Associado do escritório)</p>
                            <div>
                                <span class="badge bg-warning text-dark me-2">Pessoa Jurídica</span>
                                <span class="badge bg-light text-dark me-2">OAB MA 2552</span>
                                <span class="badge bg-light text-dark">OAB GO 002552</span>
                            </div>
                        </div>
                        <button class="btn btn-custom"><i class="bi bi-plus-circle me-2"></i>Novo Processo</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Left Column - Client Info and Tabs -->
                <div class="col-lg-8">
                    <!-- Client Info Card -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Informações do Cliente</h5>
                            <div class="client-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><i class="bi bi-building"></i> <strong>Tipo de Pessoa:</strong> Pessoa Jurídica</p>
                                        <p><i class="bi bi-envelope"></i> <strong>Email:</strong> abraoesilvaadv@hotmail.com</p>
                                        <p><i class="bi bi-telephone"></i> <strong>Telefone:</strong> -</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><i class="bi bi-calendar-check"></i> <strong>Data de Cadastro:</strong> 27 mai 2024</p>
                                        <p><i class="bi bi-globe"></i> <strong>Site:</strong> -</p>
                                        <p><i class="bi bi-geo-alt"></i> <strong>Endereço:</strong> -</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Folder Tabs -->
                    <div class="folder-tabs mb-3">
                        <div class="folder-tab active" data-tab="processos">Processos</div>
                        <div class="folder-tab" data-tab="compromissos">Compromissos</div>
                        <div class="folder-tab" data-tab="documentos">Documentos</div>
                        <div class="folder-tab" data-tab="financeiro">Financeiro</div>
                    </div>

                    <div class="folder-content">
                        <div class="tab-content active" id="processos">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="card-title">Processos Ativos</h5>
                                <button class="btn btn-custom">
                                    <i class="bi bi-plus-circle me-2"></i>Novo Processo
                                </button>
                            </div>
                            <p class="text-muted text-center">Nenhum processo encontrado</p>
                        </div>
                        <div class="tab-content" id="compromissos">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="card-title">Compromissos</h5>
                                <div>
                                    <button class="btn btn-outline-warning me-2">
                                        <i class="bi bi-clock me-2"></i>Timeline
                                    </button>
                                    <button class="btn btn-custom">
                                        <i class="bi bi-plus-circle me-2"></i>Novo Compromisso
                                    </button>
                                </div>
                            </div>
                            <div class="mb-4">
                                <span class="badge bg-secondary me-2">Pendente</span>
                                <span class="badge bg-secondary me-2">Cancelado</span>
                                <span class="badge bg-secondary me-2">Concluído</span>
                                <span class="badge bg-secondary">Em andamento</span>
                            </div>
                            <p class="text-muted text-center">Nenhum compromisso encontrado</p>
                        </div>
                        <div class="tab-content" id="documentos">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="card-title">Documentos</h5>
                                <button class="btn btn-custom">
                                    <i class="bi bi-plus-circle me-2"></i>Novo Documento
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-4">
                                    <div class="folder-item">
                                        <i class="bi bi-folder2 fs-1 text-warning mb-2"></i>
                                        <p class="mb-1">Documentos Pessoais</p>
                                        <small class="text-muted">3 arquivos</small>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="folder-item">
                                        <i class="bi bi-folder2 fs-1 text-warning mb-2"></i>
                                        <p class="mb-1">Procurações</p>
                                        <small class="text-muted">2 arquivos</small>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="folder-item">
                                        <i class="bi bi-folder2 fs-1 text-warning mb-2"></i>
                                        <p class="mb-1">Contratos</p>
                                        <small class="text-muted">5 arquivos</small>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-4">
                                    <div class="folder-item">
                                        <i class="bi bi-plus-circle fs-1 text-muted mb-2"></i>
                                        <p class="mb-1">Nova Pasta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="financeiro">
                            <h5 class="card-title mb-4">Financeiro</h5>
                            <p class="text-muted text-center">Nenhuma movimentação financeira encontrada</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Recent Activity -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Atividade Recente</h5>
                            <div class="d-flex mb-4 align-items-center">
                                <div class="activity-icon">
                                    <i class="bi bi-file-text"></i>
                                </div>
                                <div>
                                    <p class="mb-1"><strong>Documento adicionado</strong></p>
                                    <p class="mb-1 text-muted">Procuração.pdf foi adicionado à pasta Documentos</p>
                                    <small class="text-muted">Há 2 horas</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="activity-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                                <div>
                                    <p class="mb-1"><strong>Cliente atualizado</strong></p>
                                    <p class="mb-1 text-muted">Informações do cliente foram atualizadas</p>
                                    <small class="text-muted">Há 1 dia</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const folderTabs = document.querySelectorAll('.folder-tab');
            const tabContents = document.querySelectorAll('.tab-content');

            folderTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');

                    // Remove active class from all tabs and contents
                    folderTabs.forEach(t => t.classList.remove('active'));
                    tabContents.forEach(c => c.classList.remove('active'));

                    // Add active class to clicked tab and corresponding content
                    this.classList.add('active');
                    document.getElementById(tabId).classList.add('active');
                });
            });
        });
    </script>
</body>

</html>