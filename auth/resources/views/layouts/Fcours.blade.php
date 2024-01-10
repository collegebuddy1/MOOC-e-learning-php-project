<form action="/logout" method="POST" id="logout-form">
             {{csrf_field()}}
             <a href="#" onclick="document.getElementById('logout-form').submit()"></a>

           </form>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Cours</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
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
					<li ><a href="/formateurhome">Acceuil</a></li>
					<li><a href="/formateurformation">Formation</a></li>
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-right.html">Système d'exploitation</a></li>
							<li><a href="#">Programmation</a></li>
							<li><a href="#">Developement web</a></li>
							<li><a href="#">web design</a></li>
                            <li><a href="#">base de données</a></li>
                            <li><a href="#">Bureautique</a></li>
						</ul>
					</li>
					<li><a href="/etudiantformation">Ajouter Video</a></li>
					<li><a href="/etudiantformation">Mes Videos</a></li>
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
                    <h1>JAVA FORMATION</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
                </div>
    </header>

    
    <div class="container">
<!-- <h3>JAVA</h3>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
</p> -->
<br/>
<ul class="list-unstyled video-list-thumbs row">
	<!-- <li class="col-lg-3 col-sm-4 col-xs-6">
		<a href="" data-toggle="modal" data-target="#myModal" title="java">
			<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="java" class="img-responsive" height="130px" />
			<h2>java introduction</h2>
			<span class="play-button"></span>
			<span class="duration">03:15</span>
		</a>
	</li>
	<li class="col-lg-3 col-sm-4 col-xs-6">
		<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
			<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="java" class="img-responsive" height="130px" />
			<h2>java courses</h2>
			<span class="play-button"></span>
			<span class="duration">03:15</span>
		</a>
	</li>
	<li class="col-lg-3 col-sm-4 col-xs-6">
		<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
			<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="java" class="img-responsive" height="130px" />
			<h2>java courses</h2>
			<span class="play-button"></span>
			<span class="duration">03:15</span>
		</a>
	</li>
	<li class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
		<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
			<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="java" class="img-responsive" height="130px" />
			<h2>java courses</h2>
			<span class="play-button"></span>
			<span class="duration">03:15</span>
		</a>
	</li> 
    <li class="col-lg-3 col-sm-4 col-xs-6">
		<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
			<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="java" class="img-responsive" height="130px" />
			<h2>java courses</h2>
			<span class="play-button"></span>
			<span class="duration">03:15</span>
		</a>
	</li>
    <li class="col-lg-3 col-sm-4 col-xs-6">
		<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
			<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="java" class="img-responsive" height="130px" />
			<h2>java courses</h2>
			<span class="play-button"></span>
			<span class="duration">03:15</span>
		</a>
	</li>
    <li class="col-lg-3 col-sm-4 col-xs-6">
		<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
			<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="java" class="img-responsive" height="130px" />
			<h2>java courses</h2>
			<span class="play-button"></span>
			<span class="duration">03:15</span>
		</a>
	</li>
    <li class="col-lg-3 col-sm-4 col-xs-6">
		<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
			<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="java" class="img-responsive" height="130px" />
			<h2>java courses</h2>
			<span class="play-button"></span>
			<span class="duration">03:15</span>
		</a>
	</li>
    <li class="col-lg-3 col-sm-4 col-xs-6">
		<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
			<img src="http://i.ytimg.com/vi/ZKOtE9DOwGE/mqdefault.jpg" alt="java" class="img-responsive" height="130px" />
			<h2>java courses</h2>
			<span class="play-button"></span>
			<span class="duration">03:15</span>
		</a>
	</li> -->
	@yield('content');
</ul>

</div>
	
	<!-- container -->
	








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
	<script src="assets/js/custom.js"></script>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Java introduction</h4>
        </div>
        <div class="modal-body">
         <video width="100%" height="" controls>
<source src="assets/videotest.mp4" type="video/mp4">
        </div>
             </div>
      
    </div>
  </div>



</body>
</html>
