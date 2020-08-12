<!DOCTYPE html>
<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175249118-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-175249118-1');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ciano Web</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/fontawesome/css/all.min.css') }}" rel="stylesheet" /> 
    <link href="{{ URL::asset('assets/css/templatemo-diagoona.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="tm-container">        
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <a href="#"><img src="{{ URL::asset('/assets/img/ciano.png') }}" class="rubik-logo" height="85"></a>
                        <div class="media-body title-ciano">
                            <h1 class="tm-sitename text-uppercase">CIANO</h1>
                            <p class="tm-slogon">Desenvolvimento Web</p>
                        </div>        
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" 
                            data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item active">
                                    <a href="#inicio" class="nav-link tm-nav-link inicio">Inicio<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sobre" class="nav-link tm-nav-link sobre">Sobre</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#servico" class="nav-link tm-nav-link servicos">Serviços</a>
                                </li>                            
                                <li class="nav-item">
                                    <a href="#contato" class="nav-link tm-nav-link contato">Contato</a>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>

            <div class="div-home">
                <div class="tm-row">
                    <div class="tm-col-left"></div>
                    <main class="tm-col-right">
                        <section class="tm-content">
                            <h2 class="mb-5 tm-content-title">Bem vindo à Ciano</h2>
                            <p class="mb-5">Aqui você pode encontrar a solução para o seu negócio.</p>
                        </section>
                    </main>
                </div>
            </div>

            <div class="div-about hidden">
                <div class="tm-row">
                    <div class="tm-col-left"></div>
                    <main class="tm-col-right">
                        <section class="tm-content tm-about">
                            <h2 class="mb-5 tm-content-title">Sobre</h2>
                            <hr class="mb-4">
                            <div class="media my-3">
                                <i class="fas fa-shapes fa-3x p-3 mr-4"></i>
                                <div class="media-body">
                                    <p>Queremos fornecer produtos e serviços de qualidade, ajudando a aumentar a visibilidade do seu negócio. Podemos criar ferramentas com conteúdo visual para seus clientes, com um nível diferencial de divulgação e assim aumentando seus canais de mídia profissional, e com qualidade.</p>
                                </div> 
                            </div>
                            <div class="media my-3">
                                <i class="fas fa-bookmark fa-3x p-3 mr-4"></i>
                                <div class="media-body">
                                    <p>A Ciano Web foca na satisfação de seus clientes, buscando sempre o melhor para ambos. Queremos poder ajudar cada vez mais o seu negócio, para ir além. Nós da Ciano, acreditamos que juntos podemos buscar sempre a melhor maneira de que você consiga mostrar a sua arte e a qualidade de seus produtos e serviços.</p>
                                </div> 
                            </div>                        
                        </section>
                    </main>
                </div>
            </div>

            <div class="div-service hidden">
                <div class="tm-row">
                    <div class="tm-col-left"></div>
                    <main class="tm-col-right">
                        <section class="tm-content">
                            <div class="media my-3 mb-5 tm-service-media tm-service-media-img-l">
                                <div class="media-body tm-service-text">
                                    <h2 class="mb-4 tm-content-title">O melhor para o seu negócio</h2>
                                    <p> Sistemas De Gestão | E-commerce | Integração com Marketplace | API'S</p>
                                </div> 
                            </div>
                            <div class="media my-3 mb-5 tm-service-media">                            
                                <div class="media-body tm-service-text">
                                    <h2 class="mb-4 tm-content-title">Interativo</h2>
                                    <p>Blog's | Sites Intitucionais</p>
                                </div> 
                                {{-- <img src="{{ URL::asset('assets/img/services-2.jpg') }}" alt="Image" class="tm-service-img-r"> --}}
                            </div>
                            <div class="media my-3 tm-service-media tm-service-media-img-l">
                                {{-- <img src="{{ URL::asset('assets/img/services-3.jpg') }}" alt="Image" class="tm-service-img"> --}}
                                <div class="media-body tm-service-text">
                                    <h2 class="mb-4 tm-content-title">Seu Negócio X Cliente</h2>
                                    <p>Chat Bot | Integração com Redes Sociais</p>
                                </div> 
                            </div>                      
                        </section>
                    </main>
                </div>
            </div>

            <div class="div-contact hidden">
                <div class="tm-row">
                    <div class="tm-col-left"></div>
                    <main class="tm-col-right tm-contact-main"> <!-- Content -->
                        <section class="tm-content tm-contact">
                            <h2 class="mb-4 tm-content-title">Contato</h2>
                            <p class="mb-85">Nos envie uma mensagem que entraremos em contato, vamos desenvolver soluções para o seu negócio!</p>
                            <form id="contact-form" action="" method="POST">
                                <div class="form-group mb-4">
                                    <input type="text" name="name" class="form-control" placeholder="Nome" required="" />
                                </div>
                                <div class="form-group mb-4">
                                    <input type="telefone" name="telefone" class="form-control" id="telefone" placeholder="Telefone" required="" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}"/>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                                </div>
                                <div class="form-group mb-5">
                                    <textarea rows="6" name="message" class="form-control" placeholder="Sua mensagem..." required=""></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-big btn-primary">Enviar</button>
                                </div>
                            </form>
                        </section>
                    </main>
                </div>
            </div>
        </div>        

        <div class="tm-row">
            <div class="tm-col-left text-center">            
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>            
            </div>        
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Desenvolvido por Ciano Web - 
                    <img src="{{ URL::asset('assets/img/Visa.png') }}" class="width-1" title="Visa">
                    <img src="{{ URL::asset('assets/img/Mastercard.png') }}" class="width-1" title="MasterCard">
                    <img src="{{ URL::asset('assets/img/Mater.png') }}" class="width-1" title="American Express">
                    <img src="{{ URL::asset('assets/img/Diners.png') }}" class="width-1" title="Diners">
                    <img src="{{ URL::asset('assets/img/boleto.jpg') }}" class="width-2" title="Boleto">
                    <img src="{{ URL::asset('assets/img/Elo.png') }}" class="width-3" title="Elo">
                    <img src="{{ URL::asset('assets/img/hiper.jpg') }}" class="width-4" title="Elo">
                </footer>
            </div>  
        </div>

        <!-- Diagonal background design -->
        <div class="tm-bg">
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/maskMoney.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.mask.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/menu-home.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-1.12.4.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery.backstretch.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/templatemo-script.js') }}"></script>
</body>
</html>
