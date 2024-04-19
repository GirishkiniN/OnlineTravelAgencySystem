<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Explore Hyderabad</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        
        .gallary {
    height: 800px;
    width: 100%;
    margin-top: -20px;
    background-color: white;
    padding-left: 50px;
}

div.gallery {
    margin: 20px;
    float: left;
    width: 250px;
    height: 250px;
}

.pic_dip {
    max-width: 900px;
    margin: auto;
   
}

div.gallery img {
    width: 100%;
    height: 100%;
}


/*flip box*/

.flip-box {
    background-color: transparent;
    width: 100%;
    height: 100%;
    border: 1px solid #f1f1f1;
    perspective: 1000px;
}

.flip-box-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
    transform: rotateY(180deg);
}

.flip-box-front,
.flip-box-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}

.flip-box-front {
    background-color: #bbb;
    color: black;
}

.flip-box-back {
    background-color: transparent;
    color: white;
    transform: rotateY(180deg);
}
EDIT ON
@import url('https://fonts.googleapis.com/css?family=Source+Code+Pro');

body{
  padding: 40px;
  background-color: #121212;  
}

#parent {
  height: 190px;
  white-space: nowrap;
  overflow: hidden; 
  font-family: 'Source Code Pro', monospace;  
  font-size: 28px;
s  color: rgba(255,255,255,.70);
  position: relative;
}

#border {
  border-bottom: solid 3px rgba(0,255,0,.75);
    font-family: 'Source Code Pro', monospace;  
  font-size: 28px;
  color: rgba(255,255,255,.70);
  position: absolute;
  right: -7px;
  width: 20px;
}

/* Animation */
#parent {
  animation: animated-text 2s steps(30,end) 1s 1 normal both;
      width:auto;
}

#border {
   animation: animated-cursor 600ms steps(60,end) infinite;
}

/* text animation */

@keyframes animated-text{
  from{width: 0;}
  to{width: 1100px;}
}

/* cursor animations */

@keyframes animated-cursor{
  from{border-bottom-color: rgba(0,255,0,.75);}
  to{border-bottom-color: transparent;}
}
        
    #feedback {
  max-width: 60%;
  width: 100%;
  margin: 10px auto;
  padding: 20px;
  border: solid 1px #f1f1f1;
  background: #fbfbfb;
  box-shadow: #e6e6e6 0 0 4px ;
  border-radius: 0.25rem;
}

@media (max-width: 720px) {
  #feedback{
    max-width: 90%;
  }
}

@media (max-width: 500px) {
  #feedback{
    padding: 10px;
  }
}

#fh2{
 padding: 2px 15px;
 color: black;
 text-align: center;
 
 
}

@media (max-width: 400px) {
  #fh2{
    font-size: 20px;
  }
}


#fh6 {
 padding: 2px 15px;
 color: #4d0er;
 text-align: center;
 font-weight: normal;
}

@media (max-width: 400px) {
  #fh6{
    font-size: 12px;
  }
}

.pinfo {
 margin: 8px auto;
 font-weight: bold;
 line-height: 1.5;
 color: #0d0d0d;
}
.form-group {
  margin-bottom: 1rem;
}
  
.form-control {
  display: block;
  width: 100%;
  padding: 0.5rem 0.75rem;
  font-size: 1rem;
  line-height: 1.25;
  font-weight: bold;
  color: #6C6262;
  background-color: #fff;
  background-image: none;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
  -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus {
  color: #696060;
  background-color: #fff;
  border-color: #5cb3fd;
  outline: none;
}

.form-control::-webkit-input-placeholder {
  color: #F34949;
  opacity: 1;
}

.form-control::-moz-placeholder {
  color: brown;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: blue;
  opacity: 1;
}

.form-control::placeholder {
  color: white;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: red;
  opacity: 1;
}

.form-control:disabled {
  cursor: not-allowed;
}

select.form-control:not([size]):not([multiple]) {
  height: calc(2.25rem + 2px);
}

select.form-control:focus::-ms-value {
  color: green;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
}

.input-group {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
}

.input-group .form-control {
  position: relative;
  z-index: 2;
  -webkit-box-flex: 1;
  -webkit-flex: 1 1 auto;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}

.input-group .form-control:focus, .input-group .form-control:active, .input-group .form-control:hover {
  z-index: 3;
}

.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}

.input-group-addon,
.input-group-btn {
  white-space: nowrap;
  vertical-align: middle;
}

.input-group-addon {
  width: 45px;
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: normal;
  line-height: 1.25;
  color: #2e2e2e;
  text-align: center;
  background-color: #eceeef;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.input-group-addon.form-control-sm,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .input-group-addon.btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}

.input-group-addon.form-control-lg,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .input-group-addon.btn {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}

.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}

.input-group .form-control:not(:last-child),
.input-group-addon:not(:last-child),
.input-group-btn:not(:last-child) > .btn,
.input-group-btn:not(:last-child) > .btn-group > .btn,
.input-group-btn:not(:last-child) > .dropdown-toggle,
.input-group-btn:not(:first-child) > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:not(:first-child) > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}

.input-group-addon:not(:last-child) {
  border-right: 0;
}

.input-group .form-control:not(:first-child),
.input-group-addon:not(:first-child),
.input-group-btn:not(:first-child) > .btn,
.input-group-btn:not(:first-child) > .btn-group > .btn,
.input-group-btn:not(:first-child) > .dropdown-toggle,
.input-group-btn:not(:last-child) > .btn:not(:first-child),
.input-group-btn:not(:last-child) > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}

.form-control + .input-group-addon:not(:first-child) {
  border-left: 0;
}

.btn {
  display: inline-block;
  font-weight: normal;
  line-height: 1.25;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  border: 1px solid transparent;
  padding: 0.5rem 1rem;
  font-size: 1rem;
  border-radius: 0.25rem;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.btn:focus, .btn:hover {
  text-decoration: none;
}

.btn:focus, .btn.focus {
  outline: 0;
  -webkit-box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.25);
          box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.25);
}

.btn.disabled, .btn:disabled {
  cursor: not-allowed;
  opacity: .65;
}

.btn:active, .btn.active {
  background-image: none;
}

a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}

.btn-primary {
  color: #fff;
  background-color: #0275d8;
  border-color: #0275d8;
}

.btn-primary:hover {
  color: #fff;
  background-color: #025aa5;
  border-color: #01549b;
}

.btn-primary:focus, .btn-primary.focus {
  -webkit-box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.5);
          box-shadow: 0 0 0 2px rgba(2, 117, 216, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  background-color: #0275d8;
  border-color: #0275d8;
}

.btn-primary:active, .btn-primary.active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #025aa5;
  background-image: none;
  border-color: #01549b;
}

   table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 60%;

}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
tr:nth-child(odd) {
  background-color: white;
}     
    </style>

</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="../new design/pakage_blog.php"
									data-scroll-nav="0">Home</a></li>.
                        <li class="nav-item"><a class="nav-link" href="#places" data-scroll-nav="3">Places</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about" data-scroll-nav="1">Info</a></li>
                             <li class="nav-item"><a class="nav-link" href="#about1" data-scroll-nav="1">Festivals</a></li>
							<li class="nav-item"><a href="#frstpage1" class="nav-link" data-scroll-nav="2">Gallery</a></li>
							<li class="nav-item"><a class="nav-link" href="#places1" data-scroll-nav="4">Popular Hotels</a></li>
                            <li class="nav-item"><a class="nav-link" href="#fh2" data-scroll-nav="4">Review</a></li>

						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area_hyderabad">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content" style="color: black">
						<center> <h3 style="color: white">A website to display Hyderabad's beauty</h3></center>
						
                     <center>   <div id="parent" ><h2  style="color: white">Explore Hyderabad</h2><div id="border"></div></div></center>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->
	
	<!--================ Start Places Area =================-->
<section class="package-area section_gap_top" id="places" data-scroll-index="1">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="ol-lg-12">
					<div class="main_title">
						<p>A Display of</p>
						<h1>Some Beautiful Places</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.holidify.com/images/cmsuploads/compressed/Ramoji_Film_city_-_Photo_from_the_road_from_Main_entrance_to_inside3187_20180302140624.JPG" alt="" style=" width: 100%; height=100%;">
						</div>
						<div class="blog-details">

							<h5>
								Ramoji Film City 
							</h5>
							<p>Located on the outskirts of Hyderabad, Ramoji Film City is certified as the World's largest Film Studio Complex by the Guinness Book of World Records. spread over 2500 acres, it can accommodate 20 film units at one go. One can reach Ramoji Film City through a number of packaged tours and buses that leave regularly from the city.</p>
						</div>
					</div>
				</div>
                
               
				
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.thehindu.com/news/cities/Hyderabad/d9nh5i/article33864232.ece/ALTERNATES/LANDSCAPE_1200/hy23Charminar" alt="" width="100%" height="100%" >
						</div>
						<div class="blog-details">

							<h5>
                                Charminar		
                            </h5>
							<p>An identifying feature of the city, Charminar is the most prominent landmark of Hyderabad. It was erected by Quli Qutub Shah to signify the founding of Hyderabad. Everyone coming to the city, definitely visits the Charminar. It is also famous for the market that sprawls around it and is called 'Laad' or 'Chudi' Bazaar.</p>
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.holidify.com/images/cmsuploads/compressed/1290_20190227143657.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Hussain Sagar Lake
							</h5>
							<p>Hussain Sagar Lake is one of a largest man-made lake situated in Hyderabad. Renowned for its monolith of Lord Buddha placed right at the center of the lake, the place is famously known as a Tank Bund, a popular spot of tourist attraction.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.holidify.com/images/cmsuploads/compressed/attr_1565_20180806200940.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">
							<h5>
								Golconda Fort
							</h5>
							<p>Golconda Fort is a massive fortress whose ruins stand proudly even today displaying the glory of its rich past and some untold sagas of city's history. It is reputed for being the area where once, the mighty Koh-I-Noor diamond was stored. </p>
						</div>
					</div>
				</div>
				
                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://traveology.com/wp-content/uploads/sites/7/2019/05/Jalavihar.jpeg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Jala Vihar
							</h5>
							<p>Sprawling over an area of 12.5 acres adjacent to Hussain Lake, Jalvihar is the largest water amusement park in Hyderabad. It also has rain dance, indoor game zone, dry rides and an enormous food court.</p>
						</div>
					</div>
				</div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.holidify.com/images/cmsuploads/compressed/1024px-Qutb_Shahi_Tomb_5_20190729134518_20200526100813.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">

							<h5>
                               Qutub Shahi Tombs							
                            </h5>
							<p>Located in the Ibrahim Bagh, Qutub Shahi Tombs are a group of small and big mosques and tombs built by the rulers of the Qutub Shah dynasty. The tombs are all built on a raised platform and have a dome-shaped structure. 

</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<!--================ End places Area =================-->

	<!--================ Start CTA Area =================-->
	<div class="cta-area section_gap"  id="about" data-scroll-index="1">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<h1>ABOUT HYDERABAD</h1>
					<p style="font-size: 20px"> 
						Hyderabad is the capital of southern India's Telangana state. A major center for the technology industry, it's home to many upscale restaurants and shops. Its historic sites include Golconda Fort, a former diamond-trading center that was once the Qutb Shahi dynastic capital. 
					</p>
					<!--					<a href="#" class="primary-btn">Book a Trip</a>-->
				</div>
				<div class="offset-lg-1 col-lg-6">
					<img class="cta-img img-fluid" src="img/cta-img.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<!--================ End CTA Area =================-->

	<!--================ Start festivals Area =================-->
	<section class="feature-area section_gap_top">
		<div class="container" id="about1">
			<div class="row align-items-end justify-content-left">
				<div class="col-lg-12">
					<div class="main_title">

						<h1>Festivals</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.telanganatourism.gov.in/bathukamma/images/inner/about-bathkama/Main.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Batkamma Panduga

							</h5>
							<p>The Telangana area also plays host to another widely known festival that falls on Asvija Shuddha Dasami (Sep/Oct), called Batkamma Panduga. Celebrated for nine days in a row, this festival is dedicated to a married Vaisya woman, who was killed by her own brother at the instigation of his wife.</p>
                           
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://1.bp.blogspot.com/-dhU3rjKvyRo/Xr5Otv_cZBI/AAAAAAAAJEg/AJePamwze6YmMAn1wQ9ZsAVzA0-dP1fvwCLcBGAsYHQ/s1600/Bathukamma%2B%25281%2529.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
                                 Batkamma				</h5>
							<p>The festival mainly belongs to or has been originated in the Telangana region and is hence, very special to the locals there. Celebrated with liveliness and enthusiasm, this festival continues for a month. The idol of the Goddess Batkamma is worshipped during this time. It is then left afloat gently on the rivers and lakes.
</p>
                           
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://imgk.timesnownews.com/story/Ramzan_2021_Day_3_Sehri_and_Iftar_Timings.jpg?tr=w-400,h-300,fo-auto" alt="">
						</div>
						<div class="blog-details">

							<h5>
                                    Ramzan

							</h5>
							<p>The holy month of Ramzan is a special occasion in the life of a Muslim. Muslims fast the whole month and at the end of it they celebrate the Ramzan with joy. Fasting during this month is considered as the third pillar of Islam. In the twin cities, most of the busy shopping areas like Abids, SP Road, Sultan Bazar and Pathergatti will be bustling with shopping activity.</p>
                           
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End festivals Area =================-->

	<!--================ Start gallery Area =================-->
    
	 <div class="gallary" id="frstpage1">
            <div class="pic_dip">
                <div class="row align-items-end justify-content-left">
				<div class="col-lg-12">
					<div class="main_title">

						<h1>Gallery</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
                <!--model1-->
                <div class="gallery">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            
                            <div class="flip-box-front">

                                <img src="https://images.thrillophilia.com/image/upload/s--pA3I7hD_--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/171/340/original/1568618767_shutterstock_143114077.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--pA3I7hD_--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/171/340/original/1568618767_shutterstock_143114077.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Chowmahalla Palace</h2>
                                   

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--model2-->
                <div class="gallery">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">

                                <img src="https://images.thrillophilia.com/image/upload/s--tGfTVbbY--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/171/353/original/1568621059_birla-science-museum-hyderabad-tourism-entry-ticket-price.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--tGfTVbbY--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/171/353/original/1568621059_birla-science-museum-hyderabad-tourism-entry-ticket-price.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>B.M. Birla Science Museum</h2>
                                    
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--model3-->
                <div class="gallery">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">

                                <img src="https://images.thrillophilia.com/image/upload/s--wXqxVSWa--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/039/933/original/Spotted_deer_or_Axis_Axis_from_Nehru_Zoological_park_Hyderabad_4216.JPG.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--wXqxVSWa--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/039/933/original/Spotted_deer_or_Axis_Axis_from_Nehru_Zoological_park_Hyderabad_4216.JPG.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Nehru Zoological Park</h2>
                                  

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--model4-->
                <div class="gallery">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">

                                <img src="https://images.thrillophilia.com/image/upload/s--J6mGrAhl--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/039/934/original/1525778950_Salar_Jung_Museum.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--J6mGrAhl--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/039/934/original/1525778950_Salar_Jung_Museum.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Salar Jung Museum</h2>
                                    
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--model5-->
                <div class="gallery">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">

                                <img src="https://images.thrillophilia.com/image/upload/s--xt6Z0l-L--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/171/014/original/1568292174_2019-09-12.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--xt6Z0l-L--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/171/014/original/1568292174_2019-09-12.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Laad Bazaar</h2>
                                   

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--model6-->
                <div class="gallery">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">

                                <img src="https://images.thrillophilia.com/image/upload/s--Ln2oSqcp--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/171/352/original/1568620901_shutterstock_445465732.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--Ln2oSqcp--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/171/352/original/1568620901_shutterstock_445465732.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>NTR Gardens</h2>
                                    

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                 

            </div>
        </div>
	<!--================ End gallery Area =================-->



	

	<!--================ Start hotel Area =================-->
	<section class="home-blog-area" id="places1" data-scroll-index="3">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12">
					<div class="main_title">
						<h1>Popular Hotels</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/131386209.jpg?k=f4de4b51e82cd8fd403b27d0a460529ca2395da77e339b82734ffff1876e743e&o=&hp=1" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Hyatt Hyderabad Gachibowli   							</h5>
                            <p>Hyatt Hyderabad Gachibowli is an urban lifestyle property for discerning businessmen and well-travelled corporate guests, as we offer unique inviting experiences through our restful natural ambience and prime location in financial district, surrounded by I.T Park. The property is located 23 km from Rajiv Gandhi International Airport which is just a 30 minutes’ drive.Tastefully decorated, the rooms boast modern interiors. They are well equipped with a flat-screen TV, cozy seating area, walk-in closet and an private bathroom.For fitness enthusiasts, a jogging track meandering through the lush greenery offers a perfect start to the day. Featuring a spa, swimming pool and open lawns, the hotel is a pet-friendly property with a 24-hour front desk and 2 dining options. Collage is all day dining multi-cuisine restaurant.</p>
                            
						</div>
                        
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/11783602.jpg?k=0519bc5aeea6d56739c85e40f942f9daff3469b3a0632791fbb8d75115ec23ac&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Hotel Hyderabad Banjara Hills
							</h5>
							<p>ust 1 km from GVK One, Hyderabad’s largest shopping mall, the 5-star Radisson Blu Plaza Hotel boasts 3 dining options and an outdoor swimming pool. Guests enjoy free Wi-Fi and free parking.Tastefully decorated, the luxurious rooms boast stylish modern interiors and large bay windows. They are well equipped with a flat-screen TV, cosy seating area and an en suite bathroom with a bathtub.Recreational choices include indulging in a relaxing body massage. Travel and sightseeing plans can be made at the tour desk.Available for all-day dining, Chill restaurant serves a spread of local and international dishes, while Pan-Asian cuisine is offered at the Holy Basil. For light snacks and refreshing beverages, guests can visit Bar 41. </p>
                          
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/207494812.jpg?k=16726e92701da2dee13324778b78853807edc21ba63b8bb8748976a56a0cdca9&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								
                                    Novotel Hyderabad Convention Centre
							</h5>
							<p>Located in the business hub of Hyderabad, HITEC City, this 5-star hotel is connected to Hyderabad International Convention Centre. The hotel is at a 45-minute drive from Rajiv Gandhi International Airport and shares a close proximity to corporates & IT Parks like Cyber Tower (2.2 km), Mindspace (3.9 km), Google (3.7 km), Gachibowli (5 km), IBM (6.5 km), Accenture (8 km) and Microsoft (8 km).The hotel comprises of newly renovated 288 well-appointed rooms & suites, elegantly decorated with modern-day amenities like satellite TV, a minibar, and tea/coffee making facilities. The rooms offer views of the pool, vast green spaces and city skyline.The hotel provides car rental facilities for convenience.For great wine and dine options Food Exchange, La Cantina, Le Café and The Bar.</p>
                         
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
<!--================  Start review Area =================-->
	 <script src="https://use.fontawesome.com/a6f0361695.js"></script>

<h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
<h6 id="fh6">Your review will help us to improve</h6>


<form id="feedback" action="" method="POST">
	<div class="pinfo">Your personal info</div>
  
	<div class="form-group">
		<div class="col-md-4 inputGroupContainer">
			<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-user"></i></span>
			<input type="text" name="rname" placeholder="Enter your Name" required />
			</div>
		</div>
	</div>

	


 <div class="pinfo">Rate our overall services.</div>
  

<div class="form-group">
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-heart"></i></span>
   <select class="form-control" id="rate" name="rating">
      <option value="1star">1</option>
      <option value="2stars">2</option>
      <option value="3stars">3</option>
      <option value="4stars">4</option>
      <option value="5stars">5</option>
    </select>
    </div>
  </div>
</div>

 <div class="pinfo">Write your feedback.</div>
  

		<div class="form-group">
			<div class="col-md-4 inputGroupContainer">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
					<textarea style="width:98%; height:90px; padding-left:5px;" placeholder="Enter your Review" id="w3review" name="review" rows="4" cols="50" required></textarea>
 
				</div>
			</div>
		</div>

			<input type="submit" name="sub3" class="btn btn-primary" value = "Submit" />


</form>
<?php
    $conn=mysqli_connect("localhost","root","","projectmeteor");
    if(isset($_POST['sub3']))
    {
        $pname = "hyderabad";
        $prname = $_POST['rname'];
        $preview = $_POST['review'];
        $prating = $_POST['rating'];  
        $querystring = "INSERT INTO blog_review(customer_name,review,blog_place,rating) VALUES('$prname','$preview','$pname','$prating')";
        mysqli_query($conn,$querystring);
		echo '<script>alert("Your Review submited succesfully !")</script>';
		echo '<script>window.location= "hyderabad.php";</script>';
    }
?><br><br><br>
<!-- Start review Area -->
				<section class="review-area section-gap" id="testimonial">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="menu-content pb-60 col-lg-10">
								<div class="title text-center">
									<h1 class="mb-10">How Our Customers felt for Us</h1>
								</div>
							</div>
						</div>							
										
						
                    </div>	
				</section>
				<table align="center">
				
				<tr>
					<th>Customer Name</th>
					<th>Review</th>
					<th>Rating</th>
				</tr>
				<?php
					$conn=mysqli_connect("localhost:3306","root","","projectmeteor");
					if($conn -> connect_error) {
						die("Connection failed" . $conn -> connect_error );
					}
					$ptname = "hyderabad";
					$sql = "select * from blog_review WHERE blog_place='$ptname'";
					$result = mysqli_query($conn,$sql);
					if(mysqli_num_rows($result) > 0) 
					{
						while($row = mysqli_fetch_assoc($result))
						{
							echo "<tr><td>"  .$row['customer_name']. "</td><td>" .$row['review'].  "</td><td>" .$row['rating']. "</td></tr>";
							
						}   
					
					}
					else {
						echo "<tr><td colspan='3'>No reviews </td></tr>";
					}
				?>
			</table>
		</div>
    </div><br><br>
				<!-- End review Area --><br>
    
     <footer style="text-align: center; padding:25px; background-color: #251974;color: white; font-size: 15px">&copy; Copyright 2021 BeeTraveller</footer>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/scrollIt.min.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>