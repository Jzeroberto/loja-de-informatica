<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin ZP Shop</title>

    <!-- Otimização interna -->
    <link rel="preload" href="css/style.css" as="style">
    <link rel="preload" href="js/script.js" as="script">

    <link rel="stylesheet" href="css/style.css">

    <!-- Otimização para o Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <!-- <link rel="preconnect" href="https://maxcdn.bootstrapcdn.com" crossorigin>
    <link rel="preload" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://code.jquery.com/jquery-3.2.1.slim.min.js" as="script">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" as="script">
    <link rel="preload" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" as="script">
    <link rel="dns-prefetch" href="https://maxcdn.bootstrapcdn.com">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark container-fluid">
            <div class="container">
            <h1><b><span style="color: white">Adm ZP SHOP</span></b></h1>

                <button class="navbar-toggler d-lg-none" type="button" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                            <button class="btn btn-logout-top" href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">&#x279E; Logout</button>
                        </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="bar"></div>

    <main>
        <div class="container">
            <div class="row">
                <!-- Navbar lateral -->
                <nav class="col-md-3 col-lg-3 d-md-block bg-dark sidebar d-lg-block" id="menu-lateral">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column nav-pills">
                            <li class="nav-item">
                                <h6
                                    class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1">
                                    <span>Opções</span>
                                </h6>
                                <ul class="nav flex-column mb-2">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/produto">Produto</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/cliente">Clientes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contato">Contatos</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <ul class="nav flex-column mb-2">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/comentario">Comentarios</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                    <li class="nav-item">
                                        <a class="nav-link logout-link" href="info.main">&#x279E; Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </nav>

                <!-- Conteúdo principal -->
                <main role="main" class="col-md-9 col-lg-9 mt-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>

                    <h1>ADM ZP SHOP</h1>
                    <p>----------SELECIONE UMA OPÇÃO AO LADO PARA INICIAR UM CADASTRO-----------</p>
                    @yield('content')
                </main>
            </div>
        </div>

    </main>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>