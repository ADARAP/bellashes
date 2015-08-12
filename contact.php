<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "bellashesdireccion@outlook.com";
    // $email_to = "jjuarez007@gmail.com";
    $email_subject = "New Contact Form Submission";
    
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(
        !isset($_POST['email']) ||
        !isset($_POST['name']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $website = $_POST['website']; // optional
	$comments = $_POST['comments']; // required
     

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    
	$email_message .= "Name: ".clean_string($name)."\n"; 
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "website: ".clean_string($website)."\n";
	$email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers); 
?>
<!DOCTYPE HTML>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Contact Us - BeautyFit Theme</title>

<!--// Stylesheets //-->

<link href="css/style.css" rel="stylesheet" media="screen" />

<link href="css/color.css" rel="stylesheet" media="screen" />

<link href="css/bootstrap.css" rel="stylesheet" media="screen" />

<link href="css/jquery.bxslider.css" rel="stylesheet" />

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" >

<!--// Responsive //-->

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen" />



</head>

<body id="home">

	<!--WRAPPER START-->

	<div class="wrapper">

    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-header">

    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

    <h3 id="myModalLabel">Login</h3>

    </div>

    <div class="modal-body">

    <input name="" type="text">

    <input name="" type="text">

    </div>

    <div class="modal-footer">

    <button>login</button>

    </div>

    </div>

    	<!--HEADER START-->

    	<div class="header">
            <!--TOP STRIP START-->
            <div class="top-strip" id="back-top">
                <div class="container">
                <div class="language">

                    <a href="index.html"><img src="images/login.png" width="17%" alt="bellashes"></a>
                    

                    
                </div>
                <div class="top-nav">
                    <ul>
                        <li><a href="plan.html">Plan de negocios</a></li>
                        
                        <li><a href="contacto.html">Contacto</a></li>
                        <li><a href="tel:+52 (222) 681 0865">¡Llámanos!</a></li>
                    </ul>                    
                </div>
            </div>
            </div>
            <!--TOP STRIP END-->            
            <div class="navigation">
                <div class="container">
                    <div class="row">
                        <div class="span5 visible-desktop">
                            <ul>
                                <li><a href="nosotros.html">Nosotros</a></li>
                                <li><a href="mirada.html">Plan de Mirada</a></li>
                                <li><a href="servicios.html">Servicios</a></li>
                                
                            </ul>
                        </div>
                        <div class="span2">
                            <div class="logo">
                                <a href="index.html"><img src="images/logo.png" alt="Bellashes"></a>
                             </div>
                        </div>
                        <div class="span5 visible-desktop">
                            <ul>

                               <li><a href="productos.html">Productos</a></li>

                               <li><a href="salones.html">Salones</a></li>
                               
                               <li><a href="instagram.html">Galería</a></li> 
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar hidden-desktop">
                <div class="navbar-inner">
                    <div class="container">
                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </a>
                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse collapse">
                    <!-- .nav, .navbar-search, .navbar-form, etc -->
                    <ul>
                        <li><a href="nosotros.html">Nosotros</a></li>
                        <li><a href="mirada.html">Plan de Mirada</a></li>
                        <li><a href="servicios.html">Servicios</a></li>
                        <li><a href="productos.html">Productos</a></li>
                        <li><a href="salones.html">Salones</a></li>
                        <li><a href="instagram.html">Galería</a></li>
                        
                        
                    </ul>
                    </div>
                     
                    </div>
                </div>
            </div>
        </div>

      <!--HEADER END-->   

        <div class="banner relative">

        	<div class="category-banner category-banner1">

            	<div class="container">

                	<h1>Mensaje enviado!</h1>

                </div>            

            </div>          

      </div>

        <div class="content">

        	<!--INTRO SECTION START-->

        	<div class="wrapper contact-us">
            	<div class="container">
					<div class="header">
						<h2>¡Gracias por escribir, nos comunicaremos contigo muy pronto!</h2>
					</div>
                </div>
            </div>

            <!--INTRO SECTION END-->

            <!--NEWSLETTERS START-->

            
            
            <div class="wrapper news-letters">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <h3>Recibe nuestras ofertas</h3>
                            <div class="input">
                                <input type="text">
                                <button>Registrate</button>
                            </div>
                        </div>
                        <div class="span6">
                            <h3>Suscríbete a nuestro blog</h3>
                            <p>Aquí te enterarás de los mejores tips de belleza y cuidado de la piel. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FOOTER START-->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <div id="magazine" class="carousel slide">
                        <ol class="carousel-indicators">
                        <li data-target="#magazine" data-slide-to="0" class="active"></li>
                        <li data-target="#magazine" data-slide-to="1"></li>
                        <li data-target="#magazine" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                        <div class="active item">
                            <div class="magazine">
                            <div class="thumb">
                                <a href="#"><img src="images/magazine.png" alt=""></a>
                            </div>
                            <div class="text">
                                <h3>Revista</h3>
                                
                                <h6><script type="text/javascript">
var mm=new Date();
var m2 = mm.getMonth() + 1;
var mesok = (m2 < 10) ? '0' + m2 : m2;
var mesok=new Array(12);
mesok[0]="Enero";
mesok[1]="Febrero";
mesok[2]="Marzo";
mesok[3]="Abril";
mesok[4]="Mayo";
mesok[5]="Junio";
mesok[6]="Julio";
mesok[7]="Agosto";
mesok[8]="Septiembre";
mesok[9]="Octubre";
mesok[10]="Noviembre";
mesok[11]="Diciembre";
document.write(" " + mesok[mm.getMonth()]);
</script></h6>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. 
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
                                <a href="#">Leer</a>
                            </div>
                        </div>
                        </div>
                        <div class="item">
                            <div class="magazine">
                            <div class="thumb">
                                <a href="#"><img src="images/magazine2.png" alt=""></a>
                            </div>
                            <div class="text">
                                <h3>Revista</h3>
                                
                                <h6><script type="text/javascript">
var mm=new Date();
var m2 = mm.getMonth() + 1;
var mesok = (m2 < 10) ? '0' + m2 : m2;
var mesok=new Array(12);
mesok[0]="Enero";
mesok[1]="Febrero";
mesok[2]="Marzo";
mesok[3]="Abril";
mesok[4]="Mayo";
mesok[5]="Junio";
mesok[6]="Julio";
mesok[7]="Agosto";
mesok[8]="Septiembre";
mesok[9]="Octubre";
mesok[10]="Noviembre";
mesok[11]="Diciembre";
document.write(" " + mesok[mm.getMonth()]);
</script></h6>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. 
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>
                                <a href="#">Leer</a>
                            </div>
                        </div>
                        </div>
                        <div class="item">
                            <div class="magazine">
                            <div class="thumb">
                                <a href="#"><img src="images/magazine.png" alt=""></a>
                            </div>
                            <div class="text">
                                <h3>Revista</h3>
                                
                                <h6><script type="text/javascript">
var mm=new Date();
var m2 = mm.getMonth() + 1;
var mesok = (m2 < 10) ? '0' + m2 : m2;
var mesok=new Array(12);
mesok[0]="Enero";
mesok[1]="Febrero";
mesok[2]="Marzo";
mesok[3]="Abril";
mesok[4]="Mayo";
mesok[5]="Junio";
mesok[6]="Julio";
mesok[7]="Agosto";
mesok[8]="Septiembre";
mesok[9]="Octubre";
mesok[10]="Noviembre";
mesok[11]="Diciembre";
document.write(" " + mesok[mm.getMonth()]);
</script></h6>
                                <p>Este mes en nuestro blog, Los mejores tips de maquillaje para el otoño. Mitos sobre la depilación. 7 formas de delinearte los ojos. </p>
                                <a href="#">Leer</a>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="span6">
                        <h3>Nuestro Salón</h3>
                        <div class="salon">
                            <div class="thumb">
                                <img src="images/salon.png" alt="">
                            </div>
                            <div class="text">
                                <p>En nuestros salones encontrarás especialistas que utilizan materiales de calidad en el momento de la personalización y colocación de las pestañas.</p>
                                
                            </div>
                        </div>
                        <div class="salon">
                            <div class="detail">
                                <h3>Horarios</h3>
                                <p>Lunes-Viernes: ______9.00 to 19.00</p>
                                <p>Sábado: ____________ 9.00 to 14.00</p>
                                
                                <p>¡Bellashes es la extensión de tu mirada!</p>
                            </div>
                            <div class="detail">
                                <h3>Contacto</h3>
                                <p>Calzada Zavaleta No. 130 Plaza Alta Vista Local 7, 72154 Puebla de Zaragoza</p>
                                <p>(222) 681 0865</p>
                                
                                <p>zavaleta@bellashessalones.com</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FOOTER END-->
        <div class="wrapper copyrights">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <img src="images/visa.png" alt="" class="pull-left">
                        <p class="pull-left">© 2015 - Bellashes</p>
                    </div>
                    <div class="span6">
                    <div class="go-top">
                            <a class="scroll-topp" id="back-top"><img src="images/go-to-top.png" alt=""></a>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
</div>

	<!--WRAPPER END-->

<!--// Javascript //-->

<script type="text/javascript" src="js/jquery-1.8.3.js"></script><!--jQuery-->

<script type="text/javascript" src="js/bootstrap.min.js"></script><!--Bootstrap Min-->

<script src="js/jquery.bxslider.min.js"></script><!--BxSlider Min-->

<script defer src="js/jquery.flexslider.js"></script><!--FlexSlider-->

<script defer src="js/jquery.scrollTo-min.js"></script><!--FlexSlider-->

<script type="text/javascript" src="js/functions.js"></script><!--Custom Functions-->	

</body>

</html>


<?php
}
?>