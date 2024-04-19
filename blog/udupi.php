<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Explore Udupi</title>
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
	<section class="home_banner_area_udupi">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content" style="color: black">
						<p>A website to display Udupi's beauty</p>
						
                        <div id="parent" ><h2  style="color: black">Explore Udupi</h2><div id="border"></div></div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->
	
	<!--================ start places  Area =================-->
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
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--U6c8Fc_t--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/150/813/original/1607496521_shutterstock_774703105.jpg.jpg" alt="" style=" width: 100%; height=100%;">
						</div>
						<div class="blog-details">

							<h5>
								Sri Krishna Temple
							</h5>
							<p>Built in the 13th century, the Sri Krishna Temple, also known as the Sri Krishna Matha, is a Vaishnavite temple founded by Saint Jagadguru Sri Madhvacharya. This temple is known for a special feature, that is, that the deity is worshipped through a silver plated window with nine holes, known as the Navagraha kindi. The daily services to god are performed by the Ashta Mathas and people from all over the country flock to this temple to pay respect.</p>
						</div>
					</div>
				</div>
                
               
				
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--hsAKvnya--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/150/818/original/1607496742_shutterstock_1396908257.jpg.jpg" alt="" width="100%" height="100%" >
						</div>
						<div class="blog-details">

							<h5>
								St. Mary's Island
							</h5>
							<p>St. Mary’s Island is the most famous amongst the four rocky islands of Malpe Beach. Also known as Coconut Island, St. Mary’s is known for its rare crystallized basalt rock formations. This geological goldmine is also home to one of the 26 geological museums of India and is still an unexplored part of the country that holds massive tourism potential. These rock formations give the island its very unique landscape, making it a haven for nature and geology lovers alike.</p>
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--lbicoXSt--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/150/821/original/1555661801_1280px-Chaturmukha_Basadi_Karkala.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Chaturmukha Basadi
							</h5>
							<p>The Chaturmukha Basadi is an ancient symmetrical Jain temple located in the town of Karkala. Built by Immadi Bhairarasa Vodeya on a small rocky hill from the Santara dynasty in the 16th century, this massive temple is called ‘chaturmukh’ due to its four symmetrical faces.Completely carved out of granite, this temple is also known as Tribhuvana Tilaka Jina Chaityalaya.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s---dSFMbY5--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/150/814/original/1607496603_shutterstock_535600069.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">
							<h5>
								Malpe Beach
							</h5>
							<p>One of the most famous tourist places in Udupi, Malpe Beach is a natural port, traditionally known for its settlement of the Mogaveera fishermen community here. Now a famous tourist hotspot, Malpe Beach is the first Indian beach which provides free Wi-Fi all day long. There are also a number of watersport activities at the beach including Jet Ski and parasailing among others.</p>
						</div>
					</div>
				</div>
				
                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--FkuF5miy--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/150/830/original/1555666697_sita-falls.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Kudlu Theertha Falls
							</h5>
							<p>Kudlu Theertha Falls is a beautiful cascade situated in profound wildernesses of Western Ghats, close to Hebri. Otherwise called Sita Falls, this spot also makes for a great trekking destination. The water at these falls drop from a stature of 150 feet into a major pool.This is a lovely waterfall and it is safe to swim in the pool. One of the best tourist places in Udupi.</p>
						</div>
					</div>
				</div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--7QdDVMTG--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/150/829/original/1555666284_5.jpg.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">

							<h5>
                                Mookambika Temple							
                            </h5>
							<p>The Mookambika Temple is a Hindu shrine committed to the mother Goddess known as Mookambika Devi. Sitting majestically in the lower regions of Kudajadri slopes, on the southern bank of Souparnika River,also finds a spot in the 108 Durga Temples in ancient Kerala. The original shrine where Adi Shankaracharya meditated and Devi showed up before him is situated at the Kodachadri Peak.</p>
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
					<h1>ABOUT UDUPI</h1>
					<p style="font-size: 20px"> 
						Udupi is a city in the southwest Indian state of Karnataka. It's known for its Hindu temples, including the huge, 13th-century Sri Krishna Temple, which houses a statue of Lord Krishna and attracts many pilgrims. Nearby, the ancient Anantheshwara Temple is dedicated to the god Shiva. The Corporation Bank Heritage Museum features coins dating from 400 BC, plus stamps and displays about India’s banking industry.
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
							<img class="img-fluid" src="https://www.oneindia.com/ph-big/2018/01/udupi-paryaya-purapravesha-by-vidyadeeshsa-swamiji_151624723700.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Udupi Paryaya 
							</h5>
							<p>The ‘Paryaya Festival’ performed at the Udupi Krishna Temple once in every two years on 18th January is one of the most important religious rituals when the Puja rights and administration of the Krishna Temple are handed over from the Swamiji of one Matha to the Swamiji of other Matha. Shri Madhavacharya had established eight Krishna Mathas in total. And each Swamiji gets the chance to perform the Puja of the Udupi Krishna turn by turn. </p>
                           
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.oneindia.com/ph-big/2018/09/sri-krishna-janmashtami-celebration-2018-udupi-krishna-mutt_153598937750.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
                                 Udupi Krishna Janmashtami						</h5>
							<p>The Sri Krishna Mutt/Temple is the centre of attraction for both these popular festivals. About 800 years ago, Sri Madhwacharya, exponent of Dwaita philosophy, installed a Krishna idol here.The carrying of the clay idol of Krishna in the golden chariot around Car Street is the major attraction of Vittal Pindi festival.People dressed in folk costumes try to break these pots with sticks and this is known as ‘mosaru kudike.’


</p>
                           
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.tvdaijiworld.com/images6/asha_28318_kapumari2.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Kaup Maripooja
							</h5>
							<p>Three Kalavadi Maripooja known as Suggi Maripooja, Aati Maripooja and Jarde Maripooja at an interval of every four months. Kalavadi Maripooja procedure begins every first Tuesday which comes after “Sankranthi” of Meena, Karkataka and Vrashchika month for all three Maripooja respectively and if Sankrathi comes on Tueday itself then same day will be considered as first Tuesday.Rituals begin with “Kuri- Biduvudu”[It means arranging sheep for sacrifice.</p>
                           
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

                                <img src="https://www.fabhotels.com/blog/wp-content/uploads/2019/06/Kaup-Beach.jpg" alt="Paris">
                            </div>
                            <a href="https://www.fabhotels.com/blog/wp-content/uploads/2019/06/Kaup-Beach.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Kaup Beach</h2>
                                   

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

                                <img src="https://www.fabhotels.com/blog/wp-content/uploads/2019/06/Jomlu-Theertha.jpg" alt="Paris">
                            </div>
                            <a href="https://www.fabhotels.com/blog/wp-content/uploads/2019/06/Jomlu-Theertha.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Jomlu Theertha</h2>
                                    
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

                                <img src="https://www.trawell.in/admin/images/thumbs/033529804GomatheshwaraStatue_Karkala_Main_thumb.jpg" alt="Paris">
                            </div>
                            <a href="https://www.trawell.in/admin/images/thumbs/033529804GomatheshwaraStatue_Karkala_Main_thumb.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Gomatheshwara Statue, Karkala</h2>
                                  

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

                                <img src="https://www.trawell.in/admin/images/thumbs/671015153StLawrence_Attur_Main_thumb.jpg" alt="Paris">
                            </div>
                            <a href="https://www.trawell.in/admin/images/thumbs/671015153StLawrence_Attur_Main_thumb.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> St. Lawrence Church, Attur</h2>
                                    
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

                                <img src="https://www.trawell.in/admin/images/thumbs/932329160Varanga_Main_thumb.jpg" alt="Paris">
                            </div>
                            <a href="https://www.trawell.in/admin/images/thumbs/932329160Varanga_Main_thumb.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Kere Basadi, Varanga</h2>
                                   

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

                                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0b/e5/b7/49/mattu-beach.jpg?w=400&h=400&s=1" alt="Paris">
                            </div>
                            <a id="myBt" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Mattu Beach</h2>
                                    

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
						<h1>Hotels NearBy</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://q-xx.bstatic.com/xdata/images/hotel/max1200/232841856.jpg?k=3848b174956b468eae9a3e321f1d6ee152a441e03747706376d8b95092105170&o=" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Radisson Manipal      							</h5>
                            <p>Located in Manipal, Country Inns and Suites By Radisson Manipal provides an outdoor swimming pool, fitness centre and bar. With free WiFi, this 4-star hotel offers a 24-hour front desk. There is a restaurant. A continental breakfast can be enjoyed at the property. The nearest airport is Mangalore International Airport, 46 km from the hotel. The nearest airport is Mangalore International Airport, 46 km from the hotel.</p>
                            
                           
						</div>
                        
					</div>
				</div>

				
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://q-xx.bstatic.com/xdata/images/hotel/max1200/86421613.jpg?k=fbd6afcbe0595cb7f6831715f86c49a31e8dd6579d65ee79a5f2cf40bfc23ab6&o=" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Samanvay Boutique Hotel
							</h5>
							<p>Samanvay Boutique Hotel offers accommodation in Udupi. Guests can enjoy the on-site restaurant. Free private parking is available on site. All air-conditioned rooms are fitted with a flat-screen cable TV and a tea/coffee maker. Every room is equipped with a private bathroom. For your comfort, you will find bathrobes, slippers and free toiletries. There is a 24-hour front desk at the property.</p>
                           
						</div>
					</div>
				</div>

				
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://q-xx.bstatic.com/xdata/images/hotel/max1200/124533016.jpg?k=17329e1fd8182dec4ad1106c809fb5f80632c333972d8db5bcc9057d7d59c92e&o=" alt="">
						</div>
						<div class="blog-details">

							<h5>
								
                                    Hotel Tranquil, Manipal
							</h5>
							<p>Hotel Tranquil Manipal is offering accommodation in Manipala. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi throughout the property. The hotel has newspapers and an ATM machine that guests can use.All rooms are fitted with air conditioning, a flat-screen TV with cable channels, a fridge, a kettle. Guests at Hotel Tranquil Manipal can enjoy a continental or a buffet breakfast.</p>
                           
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--================ End Blog Area =================-->
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
        $pname = "udupi";
        $prname = $_POST['rname'];
        $preview = $_POST['review'];
        $prating = $_POST['rating'];  
        $querystring = "INSERT INTO blog_review(customer_name,review,blog_place,rating) VALUES('$prname','$preview','$pname','$prating')";
        mysqli_query($conn,$querystring);
		echo '<script>alert("Your Review submited succesfully !")</script>';
		echo '<script>window.location= "udupi.php";</script>';
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
					$ptname = "udupi";
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

	<!--================ End review Area =================-->


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