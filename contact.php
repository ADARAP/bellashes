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

                    <div class="dropdown">

                    <a class="dropdown-toggle arrow" data-toggle="dropdown" href="#">Language: English</a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">

                        	<li><a href="#">English</a></li>

                            <li><a href="#">Urdu</a></li>

                            <li><a href="#">Arabic</a></li>

                            <li><a href="#">Spanish</a></li>

                        </ul>

                    </div>

                    <div class="dropdown">

                    <a class="dropdown-toggle arrow" data-toggle="dropdown" href="#">Currency: EUR</a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">

                            <li><a href="#">Dollar</a></li>

                            <li><a href="#">Diner </a></li>

                            <li><a href="#">Dirham</a></li>

                            <li><a href="#">PKR</a></li>                        

                       </ul>

                    </div>

                    <p>Telephone: +565 975 658</p>

                </div>

                <div class="top-nav">

                	<ul>

                    	<li><a href="#">Account</a></li>

                        <li><a href="#myModal" role="button" data-toggle="modal">Login</a></li>

                        <li><a href="#">Register</a></li>

                        <li><a href="#">Checkout</a></li>

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

                                <li><a href="#">Home</a>

                                	<ul>

                                        <li><a href="index.html">Full Width</a></li>

                                        <li><a href="index-boxed.html">Boxed</a></li>

                                        <li><a href="index-dark.html">Dark theme</a></li>

                                    </ul>

                                </li>

                                <li><a href="services.html">Services</a></li>

                                <li><a href="team.html">Meet the team</a></li>

                            </ul>

                        </div>

                        <div class="span2">

                        	<div class="logo">

                            	<img src="images/logo.png" alt="Hair Salon">

                             </div>

                        </div>

                        <div class="span5 visible-desktop">

                        	<ul>

                                <li><a href="blog.html">Blog</a>

                                    <ul>

                                        <li><a href="blog.html">Blog</a></li>

                                        <li><a href="blog-detail.html">Blog Detail</a>

                                        	<ul>

                                                <li><a href="blog.html">Blog</a></li>

                                                <li><a href="blog-detail.html">Blog Detail</a></li>

                                            </ul>

                                        </li>

                                    </ul>

                                </li>

                                <li><a href="contact-us.html">Contact</a></li>

                                <li><a href="#">Other Pages</a>

                                    <ul>

                                        <li><a href="news.html">News</a></li>

                                        <li><a href="news-detail.html">News Detail</a></li>

                                        <li><a href="cart.html">Cart</a></li>

                                        <li><a href="products.html">Product</a></li>

                                        <li><a href="products-detail.html">Product Detail</a></li>

                                        <li><a href="products-list.html">Product List</a></li>

<li><a href="about-us.html">About Us</a></li>

                                    </ul>

                                </li>

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

                        <li><a href="index.html">Home</a>

                            <ul>

                                <li><a href="index.html">Full Width</a></li>

                                <li><a href="index-boxed.html">Boxed</a></li>

                                <li><a href="index-dark.html">Dark theme</a></li>

                            </ul>

                        </li>

                        <li><a href="services.html">Services</a></li>

                        <li><a href="team.html">Meet the team</a></li>

                        <li><a href="blog.html">Blog</a>

                            <ul>

                                <li><a href="blog.html">Blog</a></li>

                                <li><a href="blog-detail.html">Blog Detail</a></li>

                            </ul>

                        </li>

                        <li><a href="contact-us.html">Contact</a></li>

                        <li><a href="#">Other Pages</a>

                            <ul>

                                <li><a href="news.html">News</a></li>

                                <li><a href="news-detail.html">News Detail</a></li>

                                <li><a href="cart.html">Cart</a></li>

                                <li><a href="products.html">Product</a></li>

                                <li><a href="products-detail.html">Product Detail</a></li>

                                <li><a href="products-list.html">Product List</a></li>

<li><a href="about-us.html">About Us</a></li>

                            </ul>

                        </li>

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

                	<h1>Successful Message!</h1>

                </div>            

            </div>          

      </div>

        <div class="content">

        	<!--INTRO SECTION START-->

        	<div class="wrapper contact-us">
            	<div class="container">
					<div class="header">
						<h2>Thank you for your submission! we will get back you shortly!</h2>
					</div>
                </div>
            </div>

            <!--INTRO SECTION END-->

            <!--NEWSLETTERS START-->

            <div class="wrapper news-letters">

            	<div class="container">

                	<div class="row">

                    	<div class="span6">

                        	<h3>Sign Up for Our Newsletter</h3>

                            <div class="input">

                            	<input type="text">

                                <button>Submit</button>

                            </div>

                        </div>

                        <div class="span6">

                        	<h3>24/7 Customer Service</h3>

                            <p>Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu dictum justo urna et mi. Integer dictum est vitae sem.Nullam ac nisi non eros gravida venenatis.Nullam ac nisi non eros gravida venenatis.....Read More</p>

                        </div>

                    </div>

                </div>

            </div>

            <!--NEWSLETTERS END-->

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

                            	<h3>Magazine</h3>

                                <h6>Subscribe</h6>

                                <h6>Buy this issue</h6>

                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. 

Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>

								<a href="#">Read more</a>

                            </div>

                        </div>

                        </div>

                        <div class="item">

                        	<div class="magazine">

                        	<div class="thumb">

                            	<a href="#"><img src="images/magazine2.png" alt=""></a>

                            </div>

                            <div class="text">

                            	<h3>Magazine</h3>

                                <h6>Subscribe</h6>

                                <h6>Buy this issue</h6>

                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. 

Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>

								<a href="#">Read more</a>

                            </div>

                        </div>

                        </div>

                        <div class="item">

                        	<div class="magazine">

                        	<div class="thumb">

                            	<a href="#"><img src="images/magazine.png" alt=""></a>

                            </div>

                            <div class="text">

                            	<h3>Magazine</h3>

                                <h6>Subscribe</h6>

                                <h6>Buy this issue</h6>

                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. 

Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p>

								<a href="#">Read more</a>

                            </div>

                        </div>

                        </div>

                        </div>

                        </div>

                    </div>

                    <div class="span6">

                    	<h3>The Salon</h3>

                    	<div class="salon">

                        	<div class="thumb">

                            	<img src="images/salon.png" alt="">

                            </div>

                            <div class="text">

                            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hendrerit dictum praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est.</p>

                                <a href="#">Read More</a>

                            </div>

                        </div>

                        <div class="salon">

                        	<div class="detail">

                            	<h3>Opening Time</h3>

                                <p>Monday-Friday: ______8.00 to 18.00</p>

								<p>Saturday: ____________ 9.00 to 18.00</p>

								<p>Sunday: _____________10.00 to 16.00</p>

								<p>Every 30 day of month Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            </div>

                            <div class="detail">

                            	<h3>Contact Us</h3>

                                <p>Avenue of the American Independent, st. 133/2 New York City, NY, United States</p>

                                <p>(555) 438-555-314</p>

                                <p>(555) 367-252-333</p>

                                <p>info@Shop.com</p>

                                <p>info@freshshop.com</p>

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

                        <p class="pull-left">Designed by Crunchpress.com</p>

                    </div>

                    <div class="span6">

                    <div class="go-top">

                        	<a class="scroll-topp" id="back-top"><img src="images/go-to-top.png" alt=""></a>

                        </div>

                    	<p class="pull-right">© 2013 - Beauty Theme. All Rights Reserved.</p>

                        

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