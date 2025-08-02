<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    {{--
    <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$titulo}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->

    <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">

    <link rel="stylesheet" href="{{asset('vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    <!-- endinject -->
    <!-- <link rel="shortcut icon" href="{{asset('img/logo.png')}}" /> -->
    <h4>Venda Gerenciada</h4>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- <script type="text/javascript" src="{{asset('public/js/vendagerenciada.js')}}"></script> -->
    <!-- javascript para venda-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



</head>

<body>
    <div class="container-scroller">

        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="/">
                    <!-- <img style="width: auto; height: 80px;"
                        src="/img/logo.png" class="mr-2" alt="logo" /> -->

                </a>
                <a class="navbar-brand brand-logo-mini" href="/"><img src="/img/logo.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end bg-light">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                    <h7 style="margin: left 40px;">Venda Gerenciada</h7>
                </button>

                <ul class="navbar-nav navbar-nav-right bg-light">


                    <div class="dropdown dropdown-light" style="background-color:#FFFFFF">
                        <style>
                            /* Style The Dropdown Button */
                            .dropbtn {
                                background-color: #4CAF50;
                                color: white;
                                padding: 16px;
                                font-size: 16px;
                                border: none;
                                cursor: pointer;
                            }

                            /* The container <div> - needed to position the dropdown content */
                            .dropdown {
                                position: relative;
                                display: inline-block;
                            }

                            /* Dropdown Content (Hidden by Default) */
                            .dropdown-content {
                                display: none;
                                position: absolute;
                                background-color: #f9f9f9;
                                min-width: 160px;
                                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                z-index: 1;
                            }

                            /* Links inside the dropdown */
                            .dropdown-content a {
                                color: black;
                                padding: 12px 16px;
                                text-decoration: none;
                                display: block;
                            }

                            /* Change color of dropdown links on hover */
                            .dropdown-content a:hover {
                                background-color: #f1f1f1
                            }

                            /* Show the dropdown menu on hover */
                            .dropdown:hover .dropdown-content {
                                display: block;
                            }

                            /* Change the background color of the dropdown button when the dropdown content is shown */
                            .dropdown:hover .dropbtn {
                                background-color: #3e8e41;
                            }
                        </style>

                        <div class="dropdown">
                            <button class="dropbtn">Olá, {{auth()->user()->name}}</button>
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a>
                                <a href="#">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                            <i class="fa fa-sign-out pull-right"></i>
                                            {{ __('Sair do sistema') }}
                                        </x-dropdown-link>
                                    </form>
                                </a>
                            </div>
                        </div>
                    </div>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">



            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">


                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <img src="{{asset("public/img/controle-de-qualidade.png")}}" width="50px" height="50px"
                                srcset="">
                            <span class="menu-title">Cadastros</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('categoria_nova')}}">Categorias</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('create_produto_famarcia')}}">Produtos</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('cidade_nova')}}">Cidades</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('cliente_novo')}}">Clientes</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('produto_unidade_novo')}}">Produtos com unidade</a></li>
                                <li class="nav-item"> 
                                    <a class="nav-link" href="{{route('produto_cartela_novo')}}">Produtos com cartela</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <img src="{{asset("public/img/atendimento-ao-cliente.png")}}" width="50px" height="50px"
                                srcset="">
                            <span class="menu-title">Cliente</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('cliente_index')}}">Lista de
                                        cliente</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('cliente_novo')}}">Novo
                                        cliente</a></li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <img src="{{asset("public/img/carrinho-de-compras.png")}}" width="50px" height="50px"
                                srcset="">
                            <span class="menu-title">Vendas</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('venda_index')}}">Lista</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('venda_nova')}}">Nova</a></li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <img src="{{asset("public/img/produtos.png")}}" width="50px" height="50px" srcset="">
                            <span class="menu-title">Produtos</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{route('produto_index')}}">Lista de
                                        produto</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('create_produto_famarcia')}}">Novo
                                        produto</a></li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <img src="{{asset("public/img/produtos.png")}}" width="50px" height="50px" srcset="">
                            <span class="menu-title">Produtos com unidade</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('index_produto_unidade')}}">Lista de
                                        produto</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('produto_unidade_novo')}}">Novo
                                        produto</a></li>

                            </ul>
                        </div>
                    </li>

                    <!-- produto com cartela -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <img src="{{asset("public/img/produtos.png")}}" width="50px" height="50px" srcset="">
                            <span class="menu-title">Produtos com cartela</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{route('index_produto_cartela')}}">Lista de
                                        produto</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{route('produto_cartela_novo')}}">Novo
                                        produto</a></li>

                            </ul>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/emitente">
                            <img src="{{asset("public/img/recibo.png")}}" width="50px" height="50px" srcset="">
                            <span class="menu-title">Emitente</span>
                        </a>
                    </li> -->
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            @if(session()->has('sucesso'))
                                <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
                                    {{ session()->get('sucesso') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if(session()->has('erro'))
                                <div class="alert alert-danger alert-dismissible fade show col-12" role="alert">
                                    {{ session()->get('erro') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>

                        @yield('body')
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <div class="theme-setting-wrapper">
                    <div id="settings-trigger"><i class="ti-settings"></i></div>
                    <div id="theme-settings" class="settings-panel">
                        <i class="settings-close ti-close"></i>
                        <p class="settings-heading">Menu lateral</p>
                        <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                        </div>
                        <div class="sidebar-bg-options" id="sidebar-dark-theme">
                            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                        </div>
                        <p class="settings-heading mt-2">Superior</p>
                        <div class="color-tiles mx-0 px-4">
                            <div class="tiles success"></div>
                            <div class="tiles warning"></div>
                            <div class="tiles danger"></div>
                            <div class="tiles info"></div>
                            <div class="tiles dark"></div>
                            <div class="tiles default"></div>
                        </div>
                    </div>
                </div>
                @yield('conteudo')
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                            {{date('Y')}}. Venda Gerenciada</span>
                    </div>

                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('js_theme/dataTables.select.min.js')}}"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script
        type="text/javascript">window.jQuery || document.write(unescape('%3Cscript src="/js/jquery.min.js"%3E%3C/script%3E'))</script>

    <script src="{{asset('js_theme/off-canvas.js')}}"></script>
    <script src="{{asset('js_theme/hoverable-collapse.js')}}"></script>
    <script src="{{asset('js_theme/template.js')}}"></script>
    <script src="{{asset('js_theme/settings.js')}}"></script>
    <script src="{{asset('js_theme/todolist.js')}}"></script>
    <script src="{{asset('vendors/select2/select2.min.js')}}"></script>
    <script src="{{asset('js_theme/select2.js')}}"></script>
    <script src="{{asset('js_theme/dashboard.js')}}"></script>
    <script src="{{asset('js_theme/Chart.roundedBarCharts.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>

    @yield('javascript')
</body>

</html>






