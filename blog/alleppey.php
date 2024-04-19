<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Explore Alleppey</title>
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
}  </style>

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
							<li class="nav-item"><a class="nav-link" href="#places1" data-scroll-nav="4">popular Hotels</a></li>
                            <li class="nav-item"><a class="nav-link" href="#fh2" data-scroll-nav="4">Review</a></li>

						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area_alleppey">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content" style="color: black">
						<center> <h3 style="color: white">A website to display Alleppey's beauty</h3></center>
						
                     <center>   <div id="parent" ><h2  style="color: white">Explore Alleppey</h2><div id="border"></div></div></center>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->
	<!--================ Start places Area =================-->
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
							<img class="img-fluid" src="https://www.fabhotels.com/blog/wp-content/uploads/2019/04/Alappuzha-Beach.jpg" alt="" style=" width: 100%; height=100%;">
						</div>
						<div class="blog-details">

							<h5>
								Alappuzha Beach
							</h5>
							<p>Also known as Alleppey Beach, it is one of the most popular attractions in the city. The scenic beach has a 150-year old pier merging into the sea. Alappuzha beach hosts many festivals including the famous Sand Art Festival. While the beach is loved by visitors who want to spend some quiet time, the place is also a hit among adventure lovers. You can try surfing, parasailing, and other activities on the beach.</p>
						</div>
					</div>
				</div>
                
               
				
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.fabhotels.com/blog/wp-content/uploads/2019/04/Vembanad-Lake.jpg" alt="" width="100%" height="100%" >
						</div>
						<div class="blog-details">

							<h5>
								Vembanad Lake
							</h5>
							<p>The longest lake in India, Vembanad Lake flows across several districts in Kerala. It is called by several names including Punamada Lake, Kochi Lake, and Vembanadu Lake. Among the major highlights of this lake is Kettuvallams (houseboats), numerous resorts along the banks and the famous Nehru Trophy Boat Race.</p>
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.fabhotels.com/blog/wp-content/uploads/2019/04/Ambalappuzha-Sree-Krishna-Temple.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Ambalappuzha Sree Krishna Temple
							</h5>
							<p>Also called ‘Dwarka of the South’, Ambalapuzha Sree Krishna Temple is said to be built between 15th – 17th century AD. Dedicated to Lord Krishna, the temple is one of the oldest shrines in the region. The main deity in the temple is Parthasarathi, which is another name for Lord Krishna. The idol is carved out of black granite and has a conch (shankh) in the left hand and holds a whip in right hand.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.fabhotels.com/blog/wp-content/uploads/2019/04/St.-Mary%E2%80%99s-Forane-Church.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">
							<h5>
								St. Mary’s Forane Church
							</h5>
							<p>With construction dating back to 427 AD, St. Mary’s Forane Church is amongst the oldest Syrian Catholic churches in the country. The rich history, architecture, and legacy of the church attract several tourists every day. The architecture of the church is a mix of Syrian and Portuguese designs. The church is believed to be the reason for the restoration of friendly relations between Jacobian Syrians and Catholics.</p>
						</div>
					</div>
				</div>
				
                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.fabhotels.com/blog/wp-content/uploads/2019/04/Alleppey-Lighthouse.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Alleppey Lighthouse
							</h5>
							<p>One of the oldest such structures of Kerala, Alleppey Lighthouse was also the marker of busiest ports and trade centres in the state. The lighthouse was constructed during the reign of Marthanda Varma II, and the tower was installed in 1862. The lighthouse offers a 360-degree view of the Arabian Ocean, and one can easily spend hours enjoying the infinity feeling.</p>
						</div>
					</div>
				</div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.fabhotels.com/blog/wp-content/uploads/2019/04/Karumadi1.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">

							<h5>
                               Karumadi							
                            </h5>
							<p>Karumadi is a small village which is famous for a 3 ft. tall, half broken statue of Lord Buddha; the left-hand side of the statue is missing. This black granite statue that is believed to be dating back to the 11th century was abandoned in a nearby stream and recovered by a British official named Sir Robert Bristow in 1930s. It is said that the statue has healing powers and anybody who touches the feet of the statue gets rid of their illness.</p>
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
					<h1>ABOUT ALLEPPEY</h1>
					<p style="font-size: 20px"> 
						Alappuzha, also known by its former name Alleppey, is the administrative headquarters of Alappuzha district in the Indian state of Kerala. It is a city and a municipality in Kerala with an urban population of 174,164 and ranks third among the districts in literacy rate in the state.In Alappuzha, Malayalam is the most spoken language.
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

	<!--================ Start festival Area =================-->
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
							<img class="img-fluid" src="https://cdn.s3waas.gov.in/s3577ef1154f3240ad5b9b413aa7346a1e/uploads/bfi_thumb/2019120449-olw8qtngyl40br3rx8e609o3h7asfmkoqiqsttnxdy.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Onam
							</h5>
							<p>Onam, a harvest festival that falls in the months of August/September annually, is celebrated across India and the world, and is main festival among Keralites. According to the Malayali calendar month of Chingam, the festival falls on the 22nd Nakshatra Thiruvonam, and marks the beginning of the Malayalam year, called Kolla Varsham.</p>
                           
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.newindianexpress.com/uploads/user/imagelibrary/2021/5/28/w900X450/St_George_Forane_Church_Edathua.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
                                 St. George's Church Festival						</h5>
							<p>Saint George's Day, also called the Feast of Saint George, is the feast day of Saint George as celebrated by various Christian Churches and by the several nations, old kingdoms, regions, states, countries and cities of which Saint George is the patron saint including Bulgaria, England, Georgia, Portugal, Cáceres, Alcoy, Aragon and Catalonia. 

</p>
                           
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Boat_race_chundan.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Vallam Kali
							</h5>
							<p>Vallam Kali is a traditional boat race in Kerala, India. It is a form of canoe racing, and uses paddled war canoes. It is mainly conducted during the season of the harvest festival Onam in spring. Vallam kali includes races of many kinds of paddled longboats and 'snake boats'.</p>
                           
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End festival Area =================-->

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

                                <img src="https://www.trawell.in/admin/images/thumbs/963467362Vagamon_Main_thumb.jpg" alt="Paris">
                            </div>
                            <a href="https://www.trawell.in/admin/images/thumbs/963467362Vagamon_Main_thumb.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Vagamon</h2>
                                   

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

                                <img src="https://www.makemytrip.com/travel-guide/media/dg_image/alleppey/Backwaters_0.jpg" alt="Paris">
                            </div>
                            <a href="https://www.makemytrip.com/travel-guide/media/dg_image/alleppey/Backwaters_0.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Backwaters in Alleppey</h2>
                                    
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

                                <img src="https://www.makemytrip.com/travel-guide/media/dg_image/alleppey/Arthunkal-Church-Challiyil-Eswaramangalath-Vipin-wikimedia-commons.jpg" alt="Paris">
                            </div>
                            <a href="hhttps://www.makemytrip.com/travel-guide/media/dg_image/alleppey/Arthunkal-Church-Challiyil-Eswaramangalath-Vipin-wikimedia-commons.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Arthunkal Church</h2>
                                  

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

                                <img src="https://www.makemytrip.com/travel-guide/media/dg_image/alleppey/Krishnapuram-Palace-Appusviews-wikimedia-commons.jpg" alt="Paris">
                            </div>
                            <a href="https://www.makemytrip.com/travel-guide/media/dg_image/alleppey/Krishnapuram-Palace-Appusviews-wikimedia-commons.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Krishnapuram Palace r</h2>
                                    
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

                                <img src="https://www.trawell.in/admin/images/thumbs/486072697PathiramanalIsland_Main_thumb.jpg" alt="Paris">
                            </div>
                            <a href="https://www.trawell.in/admin/images/thumbs/486072697PathiramanalIsland_Main_thumb.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Pathiramanal Island</h2>
                                   

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

                                <img src="https://www.trawell.in/admin/images/thumbs/486072995Champakulam_Main_thumb.jpg" alt="Paris">
                            </div>
                            <a href="https://www.trawell.in/admin/images/thumbs/486072995Champakulam_Main_thumb.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Champakulam</h2>
                                    

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
						<h1>Popular Hotels </h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/83484100.jpg?k=8e917a1167cfe4c2ad3a1b50199e6e5aed5587b9a01462f1faa44f5404867916&o=&hp=1" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Baywatch Beach Resort    							</h5>
                            <p>Baywatch Beach Resort, a beachfront property is located 100 m from Alleppey Beach, 300 m from Jain Temple and 1 km from Ravi Karunakaran Museum. Free WiFi access is available in this resort.Fitted with a desk and tiled/marble flooring, the rooms have private bathrooms that come with free toiletries. You can enjoy sea view from the room.At Baywatch Beach Resort you will find free shuttle service, a garden and barbecue facilities. </p>
                            
                           
                                
						</div>
                        
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/23934500.jpg?k=67166dcbe0b61be9fe4bd63e538ac6927037f34f87dd9645c6497969a670fc60&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Ramada Alleppey
							</h5>
							<p>Ramada Alleppey is located in Alleppey. Free Wi-Fi access is available.The property is 50 m from Nehru Trophy Boat Race Finishing Point, 2 km from Alleppey Beach and 6 km from Pathiramanal Island. The KSRTC Bus Station is 1 km. The Alleppey Railway Station is 4 km while the Cochin International Airport is 85 km.Rooms here will provide you with a flat-screen TV, air conditioning and a minibar.  </p>
                          
                                
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/229816171.jpg?k=fbfe2db7fdc4acd0c662bd5938130b26ec8b5591eee61fdfb3f75544f7fa7ca3&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								
                                    Triveny River Palace
							</h5>
							<p>Located in Alleppey, 17 km from Nehru Trophy Boat Race, Triveny River Palace provides accommodation with a restaurant, free private parking, an outdoor swimming pool and a garden. Among the facilities at this property are a 24-hour front desk and room service, along with free WiFi throughout the property. The resort features family rooms.All units in the resort are equipped with a kettle. </p>
                          
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--================ End hotel Area =================-->
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
        $pname = "alleppey";
        $prname = $_POST['rname'];
        $preview = $_POST['review'];
        $prating = $_POST['rating'];  
        $querystring = "INSERT INTO blog_review(customer_name,review,blog_place,rating) VALUES('$prname','$preview','$pname','$prating')";
        mysqli_query($conn,$querystring);
		echo '<script>alert("Your Review submited succesfully !")</script>';
		echo '<script>window.location= "alleppey.php";</script>';
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
				<!-- End review Area --><br>
			<div >
    	 <div class="scroll">
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
					$ptname = "alleppey";
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
     <footer style=" padding:25px; text-align: center; background-color: #251974;color: white; font-size: 15px">&copy; Copyright 2021 BeeTraveller</footer>

	
	

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