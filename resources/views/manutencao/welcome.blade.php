<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Venda Gerenciada - O sistema de controle de vendas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ ('public/pagina_principal/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ ('public/pagina_principal/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ ('public/pagina_principal/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ ('public/pagina_principal/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ ('public/pagina_principal/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ ('public/pagina_principal/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand ms-lg-5">
            <h1 class="display-5 m-0 text-primary">Venda  <span class="text-secondary">Gerenciada</span></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Dashboard</a>
                <a href="{{ route('login') }}" class="nav-item nav-link">Entrar</a>
                <a href="{{ route('clienteAsaas.create') }}" class="nav-item nav-link">Cadastrar</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        <a href="team.html" class="dropdown-item">The Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div> -->
                <a href="contact.html" class="nav-item nav-link">Contato</a>
                <a href="tel:+77998585609" class="nav-item nav-link nav-contact bg-secondary text-white px-5 ms-lg-5"><i class="bi bi-telephone-outbound me-2"></i>77998585609</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="w-100" src="{{('public/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Venda Gerenciada</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Vendar mais é melhor</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Controle de estoque</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Controle de Cliente</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{('img/carousel-3.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Carregamento de arquivos para cadastrar produtos mais rápido</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">api de cadastrar de produtos para facilitar no cadastramento de produtos</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Produtos mais vendidos</a>
                            <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Melhores fornecedores</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->    

    <!-- Services Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Venda Gerenciada - O sistema de controle de vendas                    
                    </h5>
                <h1 class="display-5 mb-0">Nossos excelentes serviços de tecnologias para gerenciamento de vendas</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="flaticon-cctv d-block display-1 fw-normal text-secondary mb-3"></i>
                            <h5 class="text-primary mb-0">Plano básico</h5>
                            <h3 class="mb-3">Funcionalidade</h3>
                            <p>Cadastro de fornecedor</p>
                            <p>atualização de fornecedor</p>
                            <p>delete de fornecedor</p>
                            <p>Cadastro de categoria</p>
                            <p>atualização de categoria</p>
                            <p>delete de categoria</p>
                            <p>Cadastro de produtos</p>
                            <p>atualização de produtos</p>
                            <p>delete de produtos</p>
                            <p>Cadastro de cidade</p>
                            <p>atualização de cidade</p>
                            <p>delete de cidade</p>
                            <p>Cadastro de cliente</p>
                            <p>atualização de cliente</p>
                            <p>delete de cliente</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="flaticon-surveillance d-block display-1 fw-normal text-secondary mb-3"></i>
                            <h5 class="text-primary mb-0">Plano médio</h5>
                            <h3 class="mb-3">Funcionalidade</h3>
                            <p>Cadastro de fornecedor</p>
                            <p>atualização de fornecedor</p>
                            <p>delete de fornecedor</p>
                            <p>Cadastro de categoria</p>
                            <p>atualização de categoria</p>
                            <p>delete de categoria</p>
                            <p>Cadastro de produtos</p>
                            <p>atualização de produtos</p>
                            <p>delete de produtos</p>
                            <p>Cadastro de cidade</p>
                            <p>atualização de cidade</p>
                            <p>delete de cidade</p>
                            <p>Cadastro de cliente</p>
                            <p>atualização de cliente</p>
                            <p>delete de cliente</p>
                            <p>controle de estoque</p>
                            <p>relatorio de vendas</p>
                            <p>relatorio de vendas</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="flaticon-camera d-block display-1 fw-normal text-secondary mb-3"></i>
                            <h5 class="text-primary mb-0">Plano Avançado</h5>
                            <h3 class="mb-3">Funcionalidade</h3>
                            <p>Cadastro de fornecedor</p>
                            <p>atualização de fornecedor</p>
                            <p>delete de fornecedor</p>
                            <p>Cadastro de categoria</p>
                            <p>atualização de categoria</p>
                            <p>delete de categoria</p>
                            <p>Cadastro de produtos</p>
                            <p>atualização de produtos</p>
                            <p>delete de produtos</p>
                            <p>Cadastro de cidade</p>
                            <p>atualização de cidade</p>
                            <p>delete de cidade</p>
                            <p>Cadastro de cliente</p>
                            <p>atualização de cliente</p>
                            <p>delete de cliente</p>
                            <p>controle de estoque</p>
                            <p>relatorio de vendas</p>
                            <p>relatorio de vendas</p>
                            <p>importação de arquivo para facilitar o cadastro de produto</p>
                            <p>Inserção automatica de alguns campos de produtos para facilitar o cadastro</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 75px;">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Preço dos planos</h5>
                <h1 class="display-5 mb-0">Preço dos planos básico, médio, avançado</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <h3 class="text-white">Plano básico</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">R$</small>50<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mês</small>
                            </h1>
                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de fornecedor</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de fornecedor</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de fornecedor</p>
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de categoria</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de categoria</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de categoria</p>
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de produtos</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de produtos</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de produtos</p>
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de cidade</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de cidade</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de cidade</p>
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de cliente</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de cliente</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de cliente</p>
                        </div>
                        <a href="" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">ASSINE AGORA</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative border border-secondary rounded">
                        <div class="bg-secondary text-center pt-5 pb-4">
                            <h3 class="text-white">Plano médio</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">R$</small>100<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mês</small>
                            </h1>
                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de fornecedor</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de fornecedor</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de fornecedor</p>
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de categoria</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de categoria</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de categoria</p>
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de produtos</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de produtos</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de produtos</p>
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de cidade</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de cidade</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de cidade</p>
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de cliente</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de cliente</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de cliente</p>
                            <p class="border-bottom border-light mb-2 pb-2">controle de estoque</p>
                            <p class="border-bottom border-light mb-2 pb-2">relatorio de vendas</p>
                            <p class="border-bottom border-light mb-2 pb-2">relatorio de vendas</p>
                        </div>
                        <a href="" class="btn btn-secondary py-2 px-4 position-absolute top-100 start-50 translate-middle">ASSINE AGORA</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <h3 class="text-white">Plano avançado</h3>
                            <h1 class="display-4 text-white">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">R$</small>150<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mês</small>
                            </h1>
                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de fornecedor</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de fornecedor</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de fornecedor</p>
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de categoria</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de categoria</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de categoria</p>
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de produtos</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de produtos</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de produtos</p>
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de cidade</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de cidade</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de cidade</p>
                            <p class="border-bottom border-light mb-2 pb-2">Cadastro de cliente</p>
                            <p class="border-bottom border-light mb-2 pb-2">atualização de cliente</p>
                            <p class="border-bottom border-light mb-2 pb-2">delete de cliente</p>
                            <p class="border-bottom border-light mb-2 pb-2">controle de estoque</p>
                            <p class="border-bottom border-light mb-2 pb-2">relatorio de vendas</p>
                            <p class="border-bottom border-light mb-2 pb-2">relatorio de vendas</p>
                            <p class="border-bottom border-light mb-2 pb-2">importação de arquivo para facilitar o cadastro de produto</p>
                            <p class="border-bottom border-light mb-2 pb-2">Inserção automatica de alguns campos de produtos para facilitar o cadastro</p>
                            <p class="border-bottom border-light mb-2 pb-2">emissão de nfe</p>
                            <p class="border-bottom border-light mb-2 pb-2">Suporte via whatsapp</p>
                        </div>
                        <a href="" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">ASSINE AGORA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->   
    <!-- Offer End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-light py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Venda Gerenciada</a>. Todos os direitos reservados.</p>
                </div>
                <!-- <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>