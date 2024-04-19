<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Explore Coorg</title>
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
  color: rgba(255,255,255,.70);
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
									data-scroll-nav="0">Home</a></li>
              		        <li class="nav-item"><a class="nav-link" href="#places" data-scroll-nav="3">Places</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about" data-scroll-nav="1">Info</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about1" data-scroll-nav="1">Festivals</a></li>
                            <li class="nav-item"><a href="#frstpage1" class="nav-link" data-scroll-nav="2">Photos</a></li>
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
	<section class="home_banner_area_coorg">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content" style="color: black">
						<p>A website to display Coorg's beauty</p>
						
                        <div id="parent" ><h2  style="color: black">Explore Coorg</h2><div id="border"></div></div>

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
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--N17Tx9PN--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/951/original/1539262336_shutterstock_1026266113.jpg.jpg" alt="" style=" width: 100%; height=100%;">
						</div>
						<div class="blog-details">

							<h5>
								Dubare Elephant Camp 
							</h5>
							<p>Dubare Elephant Camp in Coorg, Karnataka, is located on the magical natural island, Dubare, formed by the river Cauvery and surrounded by luscious green forests. It is an elephant conservatory-cum-training camp administered by the Forest Department of Karnataka and Jungle Lodges and Resorts Ltd.Known for the Asiatic Black Elephants, The Dubare Elephant Camp offers a chance to know these magnificent creatures very closely. There are over 150 elephants in the various camps across the state according to the Karnataka Forest Department, among which majority of them are at the Dubare Elephant Camp, one of the main camps in the state.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--JBiMHWZl--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/944/original/1607676942_shutterstock_1037227777.jpg.jpg" alt="" width="100%" height="100%" >
						</div>
						<div class="blog-details">

							<h5>

                                Madikeri Fort							</h5>
							<p> Madikeri Fort has been a popular tourist attraction to witness the lives, rise and fall of several glorious rulers and dynasty. Founded by Mudduraja in the second half of the 17th century and constructed in mud, it finally took shape in granite and has stood testimony to several incidents. It is a coming together of several religions and an amalgamation of different cultures and traditions.It is one of the best places to visit in Coorg and the beauty and culture of Coorg have been defined in a historical monument, The Madikeri Fort. The two-storied heritage property built by the erstwhile ruler of Kodagu has undergone several changes both structurally and functionally.</p>
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--AIcGc6O9--/c_fill,g_auto,h_460,w_768/dpr_1.0/v1/attractions/images/000/002/938/original/1556178464_shutterstock_572283850.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Abbey Falls
							</h5>
							<p>One of the famous attractions near Madikeri, Abbey Falls is a great way to have a fun-filled day with your loved ones. Amidst the lush green surroundings of Western Ghats, Abbey Falls is a delightful place to visit when you are looking to escape from the hustle and bustle. A must visit for nature lovers and photography enthusiasts, Abbey Falls is one of the most attractive waterfalls in South India and also one of the best places in Coorg. Falling down from a height of 70 feet in the middle of a panoramic landscape, the tourists are sure to be charmed by the spectacle.Joining river Kaveri, Abbey Falls is set amidst the verdant coffee plantations and known for its serene ambience.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--ErBHQMZ9--/c_fill,g_auto,h_460,w_768/dpr_1.0/v1/attractions/images/000/002/945/original/1556181271_shutterstock_1291221913.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">
							<h5>
								Tadiandamol Peak
							</h5>
							<p>One of the highest peaks in the Kodagu region, Tadiandamol has been a favourite not only amongst the trekkers but also with nature lovers, bird watchers and photo enthusiasts. The mountains have withstood the testimony of time and have inspired many since time immemorial.The erstwhile rulers of the Kodagu region have drawn serious inspiration from the mighty mountain. Trails of their legacy have been left behind at the Nalknad Palace which is close to 200-year old now. Tadiandamol has a rich diversity in its flora and fauna harmoniously co-existing amidst the dense forests and grasslands of the Western ghats.This peak stands at a height of 5,735 feet above sea level and is a favourite spot for nature lovers and adventure seekers alike.</p>
						</div>
					</div>
				</div>
				
                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--8kgnJ-Lt--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/943/original/omkareshwara-temple-coorg-tourism-entry-fee-timings-holidays-reviews-header.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">
							<h5>
                                Omkareshwara Temple							</h5>
							<p>Located on Omkareshwara Temple Road in the town of Madikeri, Omkareshwara Temple is an ancient Hindu architecture built by King Linga Rajendra II of the Kodagu Kingdom in Coorg, as early as the 19th century. The temple is designed along the Islamic architectural style and is shaped elaborately like a mosque.The temple is dedicated to Lord Shiva, and is one of the twelve Jyotirlinga shrines of Shiva located across the country. It is believed that it was altered to its Mohammedan style outlook during the rule of Tipu Sultan, in order to avoid destruction.Omkareshwara Temple remains open on all days of the year, and does not have any visiting restrictions.</p>
						</div>
					</div>
				</div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--FCtSLuZM--/c_fill,g_auto,h_460,w_768/dpr_1.0/v1/attractions/images/000/002/962/original/1507964985_Honnamana_Kere_Lake_-_places_to_visit_in_coorg.jpg.jpg.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">

							<h5>
                                Honnamana Kere Lake
                            </h5>
							<p>The biggest natural lake in Coorg is located in the Daddamalthe village which is around 7 to 8 KM from Somwarpet village. Emanating stillness and serenity in the air, nestled amid coffee plantation, verdant hills, and man-made caves the lake looks emerald clear. Gowri festival is celebrated with grandiose and the temple near the lake which is dedicated to Goddess Honnamana is decorated and people gather to conduct a full-fledged pooja. The lake is also named after goddess Honnamana who has said have sacrificed her life for a cause that saved the village. Through pure serendipity, if you ever to visit Honnamana Here lake as one of the places to visit in Coorg, you would definitely call for a treat to your heart, soul and mind. </p>
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
					<h1>ABOUT COORG</h1>
					<p style="font-size: 20px"> Coorg is famous for its coffee plantations, steep hills, countless streams, rich flora & fauna, lush forests and breathtaking views. Some of the must visit tourist attractions of Coorg include Nagarhole National Park, Abbi Falls, Iruppu Falls, The Raja's Seat, Madikeri Fort and Tibetan Buddhist Golden Temple.</p>
					<!--<a href="#" class="primary-btn">Book a Trip</a>-->
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
							<img class="img-fluid" src="https://www.coorgexpress.com/uploads/blog_pics/6/1564385631.jpg" width="100%" height="100%" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Kailpodhu
							</h5>
							<p>Kailpoldu is celebrated on 3 September. Officially, the festival begins on the 18th day after the sun enters the Simha Raasi (the Western sign of Leo). Kail means weapon or armoury and Pold means festival. The day signifies the completion of "nati" – meaning the transplantation of the rice (paddy) crop. The festival signifies the day when men should prepare to guard their crop from wild boars and other animals, since during the preceding months, in which the family were engaged in the fields, all weapons were normally deposited in the "Kanni Kombare", or the prayer room. </p>
                           
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://pbs.twimg.com/media/DMUJLa6UQAAJMgS.jpg" width="100%" height="100%"  alt="">
						</div>
						<div class="blog-details">

							<h5>
                                 Kaveri Sankramana					</h5>
							<p>The Kaveri Sankramana festival normally takes place in mid-October. It is associated with the river Kaveri, which flows through the district from its source at Talakaveri.Thousands of people gather to dip in this holy water. The water is collected in bottles and reaches every home throughout Kodagu. This holy water is called Theertha, and is preserved in all Kodava homes. A spoonful of this water is fed to the dying, in the belief that they will attain moksha (spiritual emancipation) and gain entry to heaven. On this day, married women wearing new silk saris perform puja to a vegetable, symbolising the goddess Kaveri.


</p>
                           
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.deccanherald.com/sites/dh/files/styles/article_detail/public/articleimages/2020/11/28/file6xtp6mwvn441d29jco3s-920820-1606540899.jpg?itok=1YwffccM" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Puthari 
							</h5>
							<p>Puttari means "new rice" and is the rice harvest festival. This takes place in late November or early December and is always on the night of a full moon. Celebrations and preparations for this festival start a week in advance by all family members cleaning up the entire house and satroundings,painting the house (whitewash in olden days). On the day of Puttari, the whole family assembles and all the ancestral homes (ain mane) and houses are decorated with marigold flowers and green mango leaves. </p>
                           
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

                                <img src="https://images.thrillophilia.com/image/upload/s--Z0A1lkxO--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/942/original/1556179739_shutterstock_1055454140.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--Z0A1lkxO--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/942/original/1556179739_shutterstock_1055454140.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Iruppu Falls</h2>
                                   

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

                                <img src="https://images.thrillophilia.com/image/upload/s--JLIrL0bU--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/940/original/1607677027_shutterstock_1364879939.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--JLIrL0bU--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/940/original/1607677027_shutterstock_1364879939.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Nisargadhama</h2>
                                    
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

                                <img src="https://images.thrillophilia.com/image/upload/s--5GUpVlJY--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/948/original/1607677204_shutterstock_1731278740.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--5GUpVlJY--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/948/original/1607677204_shutterstock_1731278740.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Pushpagiri Hill</h2>
                                  

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

                                <img src="https://images.thrillophilia.com/image/upload/s--rYg_o78V--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/952/original/-18825_46891.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--rYg_o78V--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/952/original/-18825_46891.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Kote Betta Hill</h2>
                                    
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

                                <img src="https://images.thrillophilia.com/image/upload/s--_yM0mm-z--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/962/original/1507964985_Honnamana_Kere_Lake_-_places_to_visit_in_coorg.jpg.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--_yM0mm-z--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/962/original/1507964985_Honnamana_Kere_Lake_-_places_to_visit_in_coorg.jpg.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Honnamana Kere Lake</h2>
                                   

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

                                <img src="https://images.thrillophilia.com/image/upload/s--IwekedoM--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/965/original/Harangi_Dam_1.jpg.jpg.jpg" alt="Paris">
                            </div>
                            <a id="myBt" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Harangi Dam</h2>
                                    

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                 

            </div>
        </div>
	<!--================ End gallery Area =================-->





	<!--================ Start Hotel Area =================-->
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
				
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/283963627.jpg?k=c1eefb2646b31950f6d62d32359c7ed7d0eeb7f5757efa0a80ed0870d647c01c&o=&hp=1" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                  The Birchwood Retreat   							</h5>
                            <p>Set in Madikeri, 17 km from Raja Seat, The Birchwood Retreat, Madikeri offers accommodation with a restaurant, free private parking, an outdoor swimming pool and a fitness centre. 17 km from Madikeri Fort and 20 km from Abbi Falls, the property provides a garden and a terrace. The accommodation features a 24-hour front desk, room service and organising tours for guests.All guest rooms at the resort come with a seating area, a flat-screen TV with satellite channels and a private bathroom with free toiletries and a shower. Guest rooms will provide guests with a wardrobe and a kettle.The Birchwood Retreat, Madikeri offers a continental or buffet breakfast.The accommodation offers a children's playground. You can play billiards and table tennis at The Birchwood Retreat, Madikeri, and the area is popular for cycling.</p>
                           
						</div>
                        
					</div>
				</div>

				
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/181960825.jpg?k=e74bd575265e5e086dfc04f7a49a76ef59777fe9ffde1da9f0f8512909468691&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Heritage Resort
							</h5>
							<p>Set amidst lush green forests, tea/coffee plantations and misty hills, Heritage Resort features an outdoor pool, a fitness centre and a multi-cuisine restaurant. Free Wi-Fi access is available in its public areas, while parking is provided on site at no charge.Offering nature’s tranquility, semi-detached cottages are fitted with thatched roofs and tiled flooring. Cottages come with a personal safe, wardrobe, an electric kettle and a TV with satellite channels. Shower is provided in the attached bathroom.Heritage Resort operates a 24-hour front desk that can assist with currency exchange, laundry and ironing services. Guests may rent a car to explore the area, while the tour desk can arrange for sightseeing and travel excursions.The in-house restaurant serves delectable Indian, Continental and Chinese dishes.</p>
                           
						</div>
					</div>
				</div>

				
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/49498965.jpg?k=ce11a7540015991625a988bf82ed56de98bc5c3cee3a4f9b081be9143513951b&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								
                                    Lotus The Cottages
							</h5>
							<p>Featuring garden views, Lotus The Cottages offers accommodation with a garden and a patio, around 4 km from Madikeri Fort. Our mission is to fill the Heart of Guests with the Light and warmth of hospitality, while our vision is to be the first choice of any hospitality promoters in Coorg, building on the rich culture and heritage, and the strength of Lotus Hospitality.The air-conditioned accommodation is 3.7 km from Raja Seat, and guests benefit from private parking available on site and free WiFi.The chalet features 2 bedrooms, a flat-screen TV with cable channels, an equipped kitchen, a washing machine and 2 bathrooms with a shower.Guests at the chalet can enjoy a vegetarian breakfast.A car rental service is available at Lotus The Cottages.Abbi Falls is 8 km from the accommodation. The nearest airport is Kannur International Airport, 61 km from Lotus The Cottages.</p>
                           
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
        $pname = "coorg";
        $prname = $_POST['rname'];
        $preview = $_POST['review'];
        $prating = $_POST['rating'];  
        $querystring = "INSERT INTO blog_review(customer_name,review,blog_place,rating) VALUES('$prname','$preview','$pname','$prating')";
        mysqli_query($conn,$querystring);
		echo '<script>alert("Your Review submited succesfully !")</script>';
		echo '<script>window.location= "coorg.php";</script>';
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
					$ptname = "coorg";
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