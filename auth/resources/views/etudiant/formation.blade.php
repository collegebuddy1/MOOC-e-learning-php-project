<form action="/logout" method="POST" id="logout-form">
             {{csrf_field()}}
             <a href="#" onclick="document.getElementById('logout-form').submit()"></a>

           </form>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>Formation</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/isotope.css" media="screen" />
	<link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li ><a href="/etudianthome">Acceuil</a></li>
					<li class="active"><a href="/etudiantformation">Formation</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-right.html">Système d'exploitation</a></li>
							<li><a href="formation.html">Programmation</a></li>
							<li><a href="#">Developement web</a></li>
							<li><a href="#">web design</a></li>
                            <li><a href="#">base de données</a></li>
                            <li><a href="#">Bureautique</a></li>
						</ul>
					</li>
                        <li action="/logout" method="POST" id="logout-form" class="pull-right"> 
             {{csrf_field()}}
             <a href="#" onclick="document.getElementById('logout-form').submit()">Logout</a>
       </li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Formation en ligne</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
                </div>
    </header>


	<!-- container -->
	<section class="container">
		<div class="row">
			<div class="col-md-12">
				<section id="portfolio" class="page-section section appear clearfix">
					<br />
					<br />
					<p>
						
					<br />
						<br />
					</p>


					 <div class="row">
            <nav id="filter" class="col-md-12 text-center">
              <ul>
                <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
                <li><a href="#" class="btn-theme btn-small" data-filter=".1">PHP</a></li>
                <li><a href="#" class="btn-theme btn-small" data-filter=".2">JAVA</a></li>
                <li><a href="#" class="btn-theme btn-small" data-filter=".4">LARAVEL</a></li>
                 <li><a href="#" class="btn-theme btn-small" data-filter=".3">NODEJS</a></li>
              </ul>
            </nav>
            <div class="col-md-12">
              <div class="row">
                <div class="portfolio-items isotopeWrapper clearfix" id="3">


                    @foreach($video as $key)

                    <article class="col-sm-4 isotopeItem {{$key->categorie_id}}">
                    <div class="portfolio-item">
                    <div class="card h-100">
                     <a href="#"><video width="320" height="240" controls>
                     <source src="{{$key->chemin}}" alt="..."  type="video/mp4"></video></a>
                       <div class="card-body">
                       <h4 class="card-title">
                       <a href="#">{{$key->name}}: <strong> {{$key->description}}</strong></a>
                       </h4>
                       </div>
                       </div>
                    </div>
                  </article>

  
                  @endforeach





                  
                 
              
                </div>

              </div>


            </div>
          </div>

				</section>
			</div>
		</div>

	</section>
	<!-- /container -->
 


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/jquery.isotope.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="assets/js/custom.js"></script>
	<!-- /container -->
 <footer id="footer">
 
		<div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Categorie
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                Developpement web 
              </a>
            </li>
            <li><a href="#">
                Developement mobile
              </a>
            </li>
            <li><a href="#">
                web Design
              </a>
            </li>
            <li><a href="#">
               Language de programmation
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Liens utiles
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li> <a href="#">
                Formation  </a>
            </li>
            <li><a href="#">
                Videos
              </a>
            </li>
            <li><a href="#">
                Qui somme nous?
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          De plus 
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                Devenir Formateur
              </a>
            </li>
            <li> <a href="#">
                Contact
              </a>
            </li>
            
            
            
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
            	<div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p></p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> GI-ENSAH<br>
            <i class="fa fa-phone"></i>+212666666<br>
             <i class="fa fa-envelope-o"></i> youremail@email.com
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
			

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2018.by GI1
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>


	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/jquery.isotope.min.js"></script>
	<script src="assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
