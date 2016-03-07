
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
		<link rel="shortcut icon" href="img/title.ico" >
    	<!-- meta character set -->
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>InSoft</title>		
		<!-- Meta Description -->
        <meta name="description" content="Empresa Junior de Engenharia de Software, InSoft">
        <meta name="keywords" content="">
		
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
		<script type="text/javascript">
			$('.nav a').click(function(){
			 window.open(this.href);
			})
		</script>
    </head>
	
    <body id="body" data-spy="scroll" data-target=".navbar-header">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
			
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
                	<!-- logo -->
					<h1 class="navbar-brand">
						<img style="margin-left:20px"src="img/logo_header.png" height="50" width="140" >
					</h1>
			<!-- /logo -->
				</div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a id="itemSecao1"href="#body">Início</a></li>
                        <li><a id="itemSecao1" href="#sobre">A Empresa</a></li>
                        <li><a id="itemSecao1" href="#mej">MEJ</a></li>
						<li><a id="itemSecao1" href="#servicos">Serviços</a></li>
                        <li><a id="itemSecao1" href="#contato">Contato</a></li>
						<li><a id="fbLike" onclick='window.open("https://www.facebook.com/InSoft.FGA/?fref=ts");' href="https://www.facebook.com/InSoft.FGA/?fref=ts" target='_blank'><img id="faceicon" src="img/icons/facebookicon.png" height="25" width="25"></i></a></li>
						<li><a id="fbLike" onclick='window.open("https://twitter.com/InsoftEj");'href="https://twitter.com/InsoftEj" target='_blank'><img id="tweeticon" src="img/icons/twittericon.png" height="25" width="25"></i></a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
			
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                            <div class="caption-content">
                                <h2 class="animated fadeInDown">Bem-vindo</h2>
                                <span class="animated fadeInDown">EMPRESA JÚNIOR DE ENGENHARIA DE SOFTWARE DA UNB</span>

                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>Família InSoft</h2>
                                <span></span>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>Unidos</h2>
                                <span>Fazemos do impossível nossa zona de conforto!</span>
                            </div>
                        </div>

					</div>

				</div><!-- /sl-slider -->

                <!-- 
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->
                
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>
                

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
			
			<!-- about section -->
			<section id="sobre" >
				
				<div class="container">
						<div class="row">
						
						<div class="col-md-7 col-md-offset-1 wow animated fadeInRight">
							<div class="welcome-block">
								<h2>O que somos</h3>								
						     	 <div class="message-body"><br />
						       		<p class="justificado">A Insoft é a empresa de engenharia de software da Faculdade do Gama(FGA), foi criada no ano de 2015 por estudantes do curso de engenharia de software e tem como objetivo poder colocar em prática toda a teoria apresentada em sala de aula. Ela tem como objetivo poder transformar a sociedade atráves de soluções em software, afetando todas as áreas e classes da sociedade.</p>
						     	 </div>
						    </div>
						</div>
						<div class="col-md-4 wow animated fadeInLeft">
							<div class="recent-works">
								<h2>Missão, visão e valores</h3>
								<div id="works">
									<div class="work-item">
							
									<p id="topico">Missão</p>
										<p class="justificado">Preparar os alunos para o mercado de trabalho, fomentando o empreendedorismo e transformando a realidade de todos os envolvidos.</p>
									</div>
									<div class="work-item">
									<p id="topico">Visão</p>
	
										<p class="">Fazer do impossível nossa zona de conforto</p>
									</div>
									<div class="work-item">
										<p>
											
											<p id="topico">Valores</p>
											<ul>
												<li>Colaborativismo</li>
												<li>Responsabilidade</li>
												<li>Cultura Empreendedora</li>
												<li>Determinação</li>
												<li>Paixão</li>
											</ul>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="separador">
				</div>
				<!--
				<div id="membros"class="container" style="">
					<div class="row">
				
						<div class="sec-title text-center wow animated fadeInDown linhaTitulo">
							<h2>Cofundadores</h2>
							<p></p>
						</div>
						

						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/membros/01.jpg" class="img-responsive" alt="Ricardo">
								<figcaption class="mask letraMenor">
									<h3>Ricardo Canela</h3>
									<p>Presidente</p>
								</figcaption>									
							</li>
							<li class="portfolio-item">
								<img src="img/membros/03.jpg" class="img-responsive" alt="Paulo">
								<figcaption class="mask letraMenor">
									<h3>Paulo Markes</h3>
									<p>Diretor Administrativo e Financeiro</p>
								</figcaption>
							</li>
							<li class="portfolio-item">
								<img src="img/membros/02.jpg" class="img-responsive" alt="Bruno">
								<figcaption class="mask letraMenor">
									<h3>Bruno Contessotto</h3>
									<p>Diretor de Gestão de Pessoas</p>
								</figcaption>
								
							</li>
							<li class="portfolio-item">
								<img src="img/membros/06.jpg" class="img-responsive" alt="Rodrigo">
								<figcaption class="mask letraMenor">
									<h3>Rodrigo Oliveira</h3>
									<p>Programador of the High Heavens</p>
								</figcaption>
							</li>
							<li class="portfolio-item">
								<img src="img/membros/02.jpg" class="img-responsive" alt="Bruno">
								<figcaption class="mask letraMenor">
									<h3>Bruno Contessotto</h3>
									<p>Diretor de Gestão de Pessoas</p>
								</figcaption>
								
							</li>
							<li class="portfolio-item">
								<img src="img/membros/03.jpg" class="img-responsive" alt="Paulo">
								<figcaption class="mask letraMenor">
									<h3>Paulo Markes</h3>
									<p>Diretor Administrativo e Financeiro</p>
								</figcaption>
							</li>
							
							<li class="portfolio-item">
								<img src="img/membros/01.jpg" class="img-responsive" alt="Ricardo">
								<figcaption class="mask letraMenor">
									<h3>Ricardo Canela</h3>
									<p>Presidente</p>
								</figcaption>									
							</li>
							<li class="portfolio-item">
								<img src="img/membros/03.jpg" class="img-responsive" alt="Paulo">
								<figcaption class="mask letraMenor">
									<h3>Paulo Markes</h3>
									<p>Diretor Administrativo e Financeiro</p>
								</figcaption>
							</li>
							<li class="portfolio-item">
								<img src="img/membros/05.jpg" class="img-responsive" alt="Pablo">
								<figcaption class="mask letraMenor">
									<h3>Pablo Diego</h3>
									<p>Diretor de Desenvolvimento e Negócios</p>
								</figcaption>
								
							</li>
							<li class="portfolio-item">
								<img src="img/membros/01.jpg" class="img-responsive" alt="Ricardo">
								<figcaption class="mask letraMenor">
									<h3>Ricardo Canela</h3>
									<p>Presidente</p>
								</figcaption>									
							</li>
							<li class="portfolio-item">
								<img src="img/membros/03.jpg" class="img-responsive" alt="Paulo">
								<figcaption class="mask letraMenor">
									<h3>Paulo Markes</h3>
									<p>Diretor Administrativo e Financeiro</p>
								</figcaption>
							</li>
							<li class="portfolio-item">
								<img src="img/membros/02.jpg" class="img-responsive" alt="Bruno">
								<figcaption class="mask letraMenor">
									<h3>Bruno Contessotto</h3>
									<p>Diretor de Gestão de Pessoas</p>
								</figcaption>
								
							</li>
							<li class="portfolio-item">
								<img src="img/membros/06.jpg" class="img-responsive" alt="Rodrigo">
								<figcaption class="mask letraMenor">
									<h3>Rodrigo Oliveira</h3>
									<p>Programador of the High Heavens</p>
								</figcaption>
							</li>
							<li class="portfolio-item">
								<img src="img/membros/02.jpg" class="img-responsive" alt="Bruno">
								<figcaption class="mask letraMenor">
									<h3>Bruno Contessotto</h3>
									<p>Diretor de Gestão de Pessoas</p>
								</figcaption>
								
							</li>
							<li class="portfolio-item">
								<img src="img/membros/03.jpg" class="img-responsive" alt="Paulo">
								<figcaption class="mask letraMenor">
									<h3>Paulo Markes</h3>
									<p>Diretor Administrativo e Financeiro</p>
								</figcaption>
							</li>
							
							<li class="portfolio-item">
								<img src="img/membros/01.jpg" class="img-responsive" alt="Ricardo">
								<figcaption class="mask letraMenor">
									<h3>Ricardo Canela</h3>
									<p>Presidente</p>
								</figcaption>									
							</li>
							<li class="portfolio-item">
								<img src="img/membros/03.jpg" class="img-responsive" alt="Paulo">
								<figcaption class="mask letraMenor">
									<h3>Paulo Markes</h3>
									<p>Diretor Administrativo e Financeiro</p>
								</figcaption>
							</li>
							<li class="portfolio-item">
								<img src="img/membros/06.jpg" class="img-responsive" alt="Rodrigo">
								<figcaption class="mask letraMenor">
									<h3>Rodrigo Oliveira</h3>
									<p>Programador of the High Heavens</p>
								</figcaption>
							</li>
							<li class="portfolio-item">
								<img src="img/membros/04.jpg" class="img-responsive" alt="Thiago">
								<figcaption class="mask letraMenor">
									<h3>Thiago Nogueira</h3>
									<p>Membro</p>
								</figcaption>
								
							</li>
							<li class="portfolio-item">
								<img src="img/membros/02.jpg" class="img-responsive" alt="Bruno">
								<figcaption class="mask letraMenor">
									<h3>Bruno Contessotto</h3>
									<p>Diretor de Gestão de Pessoas</p>
								</figcaption>
								
							</li>
						</ul>
						
					</div>
				</div>
			-->
			</section>
			<!-- end portfolio section -->
			
			<!-- Testimonial section -->
			<section id="mej" class="parallax">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Movimento MEJ</h2>
							</div>
							
							<div id="testimonial" class=" wow animated fadeInUp">
								<div class="testimonial-item text-center">
									<img src="img/mej/mej.jpg" alt="Our Clients">
									<div class="clearfix">
										<span>O que é MEJ?</span>
										<p>
										&nbsp&nbspIniciado em 1967 na França, o Movimento Empresa Júnior (MEJ) surgiu com o objetivo de estudos de mercado ou enquetes comerciais nas empresas. A ideia se dinfundiu no meio acadêmico francês e começou a ser levada para outros países, chegando em 1988 no Brasil.
										Formada por universitários de todo o território brasileiro, o MEJ no Brasil conta com cerca de 700 empresas juniores e mais de 22 mil estudantes que juntos querem alcançar o objetivo principal do movimento: <br>GERAR IMPACTO NA SOCIEDADE</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="img/mej/concentro.png" alt="Our Clients">
									<div class="clearfix">
										<span>Concentro</span>
										<p>&nbsp&nbspA Concentro é a Federação das Empresas Juniores do Distrito Federal, uma das 14 federações da Brasil Júnior. Ela foi criada em 1999 a partir da união e do trabalho das empresas juniores do DF, incentivada pela necessidade de representar seus interesses e dar condições para fortalecer o Movimento Empresa Júnior na região.</p>
									</div>
								</div>
								<div class="testimonial-item text-center">
									<img src="img/mej/brasilj.png" alt="Our Clients">
									<div class="clearfix">
										<span>Brasil Jr</span>
										<p>Confederação Brasileira de Empresas Juniores é a instâcia que representa as empresas juniores brasileiras, impulsionando a vivência empresarial que elas proporcionam e legitimando-as à sociedade.</p>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			
			<!-- Service section -->
			<section id="servicos">
				<div class="overlay">
					<div class="container">
						<div class="row">
						
							<div class="sec-title text-center white wow animated fadeInDown">
								<h2>Serviços</h2>
								<img src="img/icons/webicon.png" height="70" width="70">
								<p>Desenvolvimento Web</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end Social section -->
			
			
			<!-- Contact section -->
			<section id="contato" >
				<div class="container">
					<div class="row">
						
						<div class="sec-title text-center wow animated fadeInDown">
							<h2 style="color:#000">Contato</h2>
							<p>Mande uma mensagem<br /> Ficaremos felizes em lhe atender!</p>
						</div>
						<div class="col-md-7 contact-form wow animated fadeInLeft">
							<form action="enviarEmail.php" method="post">
								<div class="input-field">
									<input type="text" name="nome" class="form-control" placeholder="Nome">
								</div>
								<div class="input-field">
									<input type="email" name="email" class="form-control" placeholder="Email">
								</div>
								<div class="input-field">
									<input type="text" name="assunto" class="form-control" placeholder="Assunto">
								</div>
								<div class="input-field">
									<textarea name="mensagem" class="form-control" placeholder="Mensagem"></textarea>
								</div>
						       	<button type="submit" id="submit" data-loading-text="Enviando" class="btn btn-blue btn-effect" style="float:right">Enviar</button>
							</form>
						</div>
						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3 style="color:#000; margin-top:8px">Contate-nos</h3>						
								<p><i class="fa fa-pencil"></i>InSoft<span>Universidade de Brasília - Faculdade Gama</span><span>Área Especial de Indústria Projeção A Brasília</span><span>Gama, Distrito Federal</span><span>CEP: 72.444-240</span><span>Brasil</span></p><br>
								<p><i class="fa fa-phone"></i>Telefone: (61) xxxx-xxxx </p>
								<p><i class="fa fa-envelope"></i>insoft.ej@gmail.com</p>
							</address>
						</div>
						
						
						
			
					</div>
				</div>
			</section>
			<!-- end Contact section -->
		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
					</div>
						Copyright  2015-2016 ©Insoft - Todos os direitos reservados
					
				</div>
			</div>
		</footer>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="js/bootstrap.js"></script>
		<!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
		<!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="js/main.js"></script>
		
    </body>
</html>