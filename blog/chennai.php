<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Explore chennai</title>
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
							<li class="nav-item"><a class="nav-link" href="#places1" data-scroll-nav="4">Popular Hotels </a></li>
                            <li class="nav-item"><a class="nav-link" href="#fh2" data-scroll-nav="4">Review</a></li>

						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area_chennai">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content" style="color: black">
						<p>A website to display chennai's beauty</p>
						
                        <div id="parent" ><h2 style="font-size:120px; color:black">Explore Chennai</h2><div id="border"></div></div>

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
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--jsqNfesw--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/040/808/original/1608115721_shutterstock_1189177720.jpg.jpg" alt="" style=" width: 100%; height=100%;">
						</div>
						<div class="blog-details">

							<h5>
								Marina Beach  
							</h5>
							<p>India's largest beach is right around the corner when one is in Chennai. With an extent from Fort St. George to Besant Nagar, the beach is lined with up palm trees. A view when sky and water meet at both the ends is just visible right in front of the eyes when one stands at the shores. </p>
						</div>
					</div>
				</div>
                
               
				
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--12Qj_aIP--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/040/811/original/1608116635_photo-lieu-109-3.jpg.jpg" alt="" width="100%" height="100%" >
						</div>
						<div class="blog-details">

							<h5>
                                Fort St. George	
                            </h5>
							<p>History of India with the British is a fact that can't be changed. And the live example standing in front is Fort St. George. During British rule, it was made as a centre point for official purposes but now encompasses St. George museum with paintings, coins, silverware, arms, porcelain, and documents. </p>
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--ZH95Rlta--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/040/828/original/1525787737_Thousand-Lights-Mosque-1.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Thousand Lights Mosque 
							</h5>
							<p>Since the architecture has a special corner in the heart of Chennai, Thousand Lights Mosque stands tall in this list. The place has got its name because of a special feature i.e. a total of 1000 oil lamps light up the hall of the mosque. Imagine the beauty!!! Also, it is one of the biggest mosques in the country.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--2Yspa0zT--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/170/806/original/1568182462_Ashtalakshmi_temple_2.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">
							<h5>
								Ashtalaxmi Temple 
							</h5>
							<p>Lying on the gorgeous expanse of the Besant Beach, this is the only temple dedicated to Goddess Mahalakshmi on Tamil Nadu’s east coast. You can see the idols of Dashavatara, Ganesha, and Guruvayoorappan. The magnificence of the architecture lies in its ‘OM’ shaped design, making it one of the most enchanting places to visit in Chennai. </p>
						</div>
					</div>
				</div>
				
                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--g-Nz10uY--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/040/817/original/1608116773_shutterstock_1780669706.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Vellankani Shrine 
							</h5>
							<p>This grand monument stands off the Elliot's Beach and gives a totally different aura to the whole zone. The pristine white structure of the church having tall towers stands overlooking the Bay of Bengal and is visited by thousands of solace-seekers every day.One can also attend the mass prayer conducted both in Tamil and English.</p>
						</div>
					</div>
				</div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--aZG-t_t4--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/040/844/original/1571723550_1.JPG.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">

							<h5>
                               Dakshina Chitra						
                            </h5>
							<p>Also known by the term ‘Living-history museum', the museum is built in order to explain the historical aspects of Tamil culture to the present generation. Built in an area of 10 acres, DakshinaChitra is a small village has been recreated using replicas of traditional South Indian houses dating back to the 19th and 20th centuries. 

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
					<h1>ABOUT CHENNAI</h1>
					<p style="font-size: 20px"> 
						Chennai, on the Bay of Bengal in eastern India, is the capital of the state of Tamil Nadu. The city is home to Fort St. George, built in 1644 and now a museum showcasing the city’s roots as a British military garrison and East India Company trading outpost, when it was called Madras. Religious sites include Kapaleeshwarar Temple, adorned with carved and painted gods.
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
							<img class="img-fluid" src="https://www.tourmyindia.com/states/tamilnadu/images/saraswati-puja-festival.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Saraswathi Pooja

							</h5>
							<p>One of the most venerated festivals that not just celebrates the victory of good over evil but also embeds the meaning 'Worship of Instruments', is Saraswati Pooja. Out of the array of top festivals of Tamilnadu, Ayudha Pujai/Astra Puja (Saraswati Puja) is revered the most as it falls on the 9th day of the Navarathri celebrations and holds deep historical importance.</p>
                           
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.tourmyindia.com/states/tamilnadu/images/music-dance-festival.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
                                 Music and Dance Festival, Chennai	
                            </h5>
							<p>Celebrated in the months of mid-December and mid-January, this cultural festival falls in the Margazhi month as per the Tamil calendar. Formerly called the Margazhi Festival, this famous festival of South India takes place over a month and is observed as a way to connect one's soul to God by the means of mystic music and dance. Holding over 300 concerts, the event witnesses astounding performances by solo and group dancers
                            </p>
                           
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.tourmyindia.com/states/tamilnadu/images/karthigai-deepam-festival.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
                                    Karthigai Deepam

							</h5>
							<p>Find divinity nestled in the lights that guide you to this famous festival of Tamilnadu, Karthigai Deepam. Rejoiced in the month of Karttikai (November-December) this festival is linked with the conjunction of moon with pournami and the constellation Karthigai(Pleiades). Festival of lights is what people revere this 3-day celebration as with the first day called Appa Karthigai: second as Vadai Karthigai and third as Thiru Karthigai. </p>
                           
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

                                <img src="https://images.thrillophilia.com/image/upload/s--unDtXsfh--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/040/848/original/1608116849_shutterstock_1850927386.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--unDtXsfh--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/040/848/original/1608116849_shutterstock_1850927386.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Guindy National Park and Snake Park </h2>
                                   

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

                                <img src="https://images.thrillophilia.com/image/upload/s--lhomVx2N--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/101/231/original/1608116818_shutterstock_684613882.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--lhomVx2N--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/101/231/original/1608116818_shutterstock_684613882.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Mylapore </h2>
                                    
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

                                <img src="https://images.thrillophilia.com/image/upload/s--cBiT4M56--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/040/850/original/1525785568_Birla_Planitorium.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--cBiT4M56--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/040/850/original/1525785568_Birla_Planitorium.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Birla Planetarium</h2>
                                  

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

                                <img src="https://images.thrillophilia.com/image/upload/s---L289D8S--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/101/261/original/1571723730_2.JPG.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s---L289D8S--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/101/261/original/1571723730_2.JPG.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Nettukuppam</h2>
                                    
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

                                <img src="https://images.thrillophilia.com/image/upload/s--6OW47jp3--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/170/816/original/1568183840_madras-war-cemetery-chennai-tourism-entry-fee-timings-holidays-reviews-header.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--6OW47jp3--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/170/816/original/1568183840_madras-war-cemetery-chennai-tourism-entry-fee-timings-holidays-reviews-header.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Madras War Memorial </h2>
                                   

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

                                <img src="https://images.thrillophilia.com/image/upload/s--zfS-zEhZ--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/170/817/original/1568184147_Chennai_High_Court.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--zfS-zEhZ--/c_fill,g_center,h_300,q_auto,w_576/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/170/817/original/1568184147_Chennai_High_Court.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Prakasam Salai </h2>
                                    

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
				<!-- single-hotelblog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/11352550.jpg?k=37f6434ad025dbeb2ee68c8bd5c106f789954b4839d0884f129586b90ca873ab&o=&hp=1" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                     Savera Hotel			
                            </h5>
                            <p>Savera Hotel offers 4-star rooms with free Wi-Fi and satellite flat-screen TVs located 1.5 km from Marina Beach. Offering free parking, it boasts a spa, fitness centre and outdoor pool.Fitted with classic wood furnishings, Savera’s air-conditioned rooms feature neutral fabrics and a safe. For convenience, a minibar and free tea/coffee making amenities are provided. Private bathrooms have hot/cold showers and a hairdryer.</p>
                            
                           
						</div>
                        
					</div>
				</div>

				<!-- single-hotelblog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/34212263.jpg?k=a577625a372536fd64fc32a304705ac2ff777fb06e76322aeed36a8fb6e82c1e&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Taj Connemara
							</h5>
							<p>Featuring a fitness centre, Taj Connemara, Chennai is situated in Chennai and is 200 m from Spencer Plaza Mall. A 13-minute walk from Government Museum Chennai, the hotel provides a garden and a shared lounge.At the hotel, the rooms come with a wardrobe and a flat-screen TV. Rooms come complete with a private bathroom equipped with a shower and free toiletries.</p>
                           
						</div>
					</div>
				</div>

				<!-- single-hotelblog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/89367373.jpg?k=c0494c2920fd8fbf53c98434ea9096ca79e320ad0d12a06835b4134f1b968b88&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								
                                    Citadines OMR Chennai 
							</h5>
							<p>Situated in Chennai, Citadines OMR Chennai features a fitness centre and a garden. Popular points of interest around the property include Indian Institute of Technology, Madras and Anna University. Guests can sample European and international dishes at the on-site restaurant.All rooms features a flat-screen TV with cable channels, a kettle, a bath, free toiletries.</p>
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
        $pname = "chennai";
        $prname = $_POST['rname'];
        $preview = $_POST['review'];
        $prating = $_POST['rating'];  
        $querystring = "INSERT INTO blog_review(customer_name,review,blog_place,rating) VALUES('$prname','$preview','$pname','$prating')";
        mysqli_query($conn,$querystring);
		echo '<script>alert("Your Review submited succesfully !")</script>';
		echo '<script>window.location= "chennai.php";</script>';
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
					$ptname = "chennai";
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
    
     <footer style="padding:25px; text-align: center; background-color: #251974;color: white; font-size: 15px">&copy; Copyright 2021 BeeTraveller</footer>

	

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