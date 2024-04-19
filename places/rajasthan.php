<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Explore Rajasthan</title>
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
.footer {
  left: 0;
  bottom: 0;
  width: 100%;
  height: 150px;
  background-color: blue;
  color: white;
  text-align: center;
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
							<li class="nav-item active"><a class="nav-link" href="../Betraveller/index.php"
									data-scroll-nav="0">Home</a></li>.
                            <li class="nav-item"><a class="nav-link" href="#about1" data-scroll-nav="1">Adventure</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about" data-scroll-nav="2">Info</a></li>
							<li class="nav-item"><a href="#frstpage1" class="nav-link" data-scroll-nav="3">Photos</a></li>
							<li class="nav-item"><a class="nav-link" href="#places" data-scroll-nav="4">Places</a></li>
							<li class="nav-item"><a class="nav-link" href="#places1" data-scroll-nav="">Hotels Nearby</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about2" data-scroll-nav="">Review</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area_rajasthan">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content" style="color: black">
						
                        <p>A website to display rajasthan's beauty</p>
						
                        <div id="parent" ><h2  style="color: black">Explore Rajasthan</h2><div id="border"></div></div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->
	<section class="feature-area section_gap_top">
		<div class="container" id="about1">
			<div class="row align-items-end justify-content-left">
				<div class="col-lg-12">
					<div class="main_title">

						<h1>Adventure</h1>
						<span class="title-widget-bg"></span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2019/11/Hot-Air-Ballooning_22nd-nov.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Hot Air Balloon Rides   							</h5>
                            <p>It is perhaps the most important thrilling adventure sport in Rajasthan that should be tried out by the tourists. If you want to explore the actual landscape of Rajasthan from a certain height, then most of the people, mainly visit this place to try this adventure sports tour in Rajasthan.  </p>
						</div>
                        
					</div>
				</div>

				
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2019/11/Ziplining_26th-Nov.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Zip Lining  							</h5>
                            <p>It is another one of the adventure sports to do in Rajasthan that is not for the faint hearted. If you want to explore any place from a certain height, then it will e a wise choice to choose zip line. Zip Line is a great way to refresh your body and soul and satisfy your adrenaline rush. Some trainers or instructors can assist you properly in this game. </p>
						</div>
                        
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2019/11/Trekking_26th-Nov.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Trekking 							</h5>
                            <p>Trekking is one of the most preferred adventure sports in Rajasthan. Trekking in Rajasthan is much thrilling, especially in the Aravalli range. Aravalli is one of the oldest ranges that offer excellent scope for trekking. The rough surface of Aravalli makes it challenging for trekking. It will add some extra flavor to your trip. </p>
						</div>
                        
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Feature Area =================-->

	<!--================ Start CTA Area =================-->
	<div class="cta-area section_gap"  id="about" data-scroll-index="1">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
           <h1>ABOUT RAJASTHAN</h1>
					<p style="font-size: 20px"> 
						Rajasthan is a state in northern India. The state covers an area of 342,239 square kilometres or 10.4 percent of the total geographical area of India. It is the largest Indian state by area and the seventh largest by population.
					</p>
					<!--<a href="#" class="primary-btn">Book a Trip</a>-->
				</div>
				<div class="offset-lg-1 col-lg-6">
					<img class="cta-img img-fluid" src="img/cta-img.png" alt="">
				</div>
			</div>
		</div> 
	</div>
	<!--================ End CTA Area =================-->

	<!--================ Start Trip Package Area =================-->
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
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--KTC9KHtH--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/041/577/original/1508235765_places-to-visit-in-rajasthan-_City_palace.jpg.jpg" alt="" style=" width: 100%; height=100%;">
						</div>
						<div class="blog-details">

							<h5>
								City Palace
							</h5>
							<p>The City Palace is one of the best tourist places to visit in Rajasthan. It is a palace complex in Jaipur that houses the famous Chandra Mahal and Mubarak Mahal. 
                                The Chandra Mahal is one of the most popular tourist places in Rajasthan. It was once the seat of the Maharaja of Jaipur and was built between 1729 and 1732. 
                                The construction of the palace was started by Maharaja Sawai Jai Singh II.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--utCV9cwG--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/118/536/original/1508148352_Places_to_visit_in_Rajasthan_-_Jal_Mahal.jpg.jpg" alt="" width="100%" height="100%" >
						</div>
						<div class="blog-details">

							<h5>
								Jal Mahal
							</h5>
							<p>Jal Mahal calls to be one of the most serene and calm places to visit in Rajasthan situated in the midst of the chaotic city of Jaipur. 
                                Jal Mahal is asymmetric low rise stately mansion which was once a shooting toll house for the Maharajah. The stone walls of the beautiful architecture Jal Mahal portrays to be a clear-cut contrast to the azure blue waters of the inland lake.</p>
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--MGsIdu2p--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/041/583/original/1473501338_2215663146_784a009d9a_b.jpg.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">

							<h5>
								Lake Pichola
							</h5>
							<p>Lake Pichola is one of the most popular tourist places in Rajasthan. It is an artificial lake which has been named after the Picholi village and was created in 1362 AD. It is one of the several contiguous lakes in Udaipur, which were primarily developed to meet the irrigation and drinking requirements of the people. There are four islands on the lake and palaces have been developed on these lakes.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--o323Sr_Y--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/041/618/original/Sam_Sand_Dunes.jpg.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
								Sam Sand Dunes
							</h5>
							<p>The Sam Sand Dunes make for one of the most popular tourist destinations in the state of Rajasthan. It is the point where one can completely lose oneself in the mesmerizing beauty of the Thar Desert. From this point there is only a vast stretch of sand dunes with sparse or no vegetation. There are several camps at this point which can offer you a Desert Safari on a camel. </p>
						</div>
					</div>
				</div>
				
                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--NqxR25S8--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/173/995/original/1571049784_baroli.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Baroli
							</h5>
							<p>Baroli is a place enriched with ancient temple. Eight beautiful carved stonework stand proudly since 9th Century.  Ghateshwara is currently pulling more tourists to it. Besides that, there are other temples 
                                dedicated to different gods like Ganesha, Shiva, Vamanavatar, Trimurti, Ashtamata and Sheshashyan. These temples tells the tales of the rich art and culture we had in those times. </p>
						</div>
					</div>
				</div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--7Bikz0Cu--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/178/933/original/1573728743_ranthambore.jpg.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">

							<h5>
                                Ranthambore							
                            </h5>
							<p>Ranthambore is an absolute paradise for wildlife enthusiasts. It is widely recognized for its National Park and Tiger Reserve, but these are not the only places that make Ranthambhore a popular tourist destination. 
                                The unquestionably mesmerizing locales, palaces, and royal ruins make Ranthambhore more than just a popular wildlife habitat.  </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Trip Package Area =================-->

	<!--================ Start Popular Places Area =================-->
    
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

                                <img src="https://images.thrillophilia.com/image/upload/s--ICBS5AuK--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/041/626/original/1571047599_ShubhTTC_mount-abu_807.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--ICBS5AuK--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/041/626/original/1571047599_ShubhTTC_mount-abu_807.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Guru Shikhar</h2>
                                   

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

                                <img src="https://images.thrillophilia.com/image/upload/s--PMkyZUEJ--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/118/558/original/1508155239_places-to-visit-in-rajasthan_-_anasagar.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--PMkyZUEJ--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/118/558/original/1508155239_places-to-visit-in-rajasthan_-_anasagar.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Anasagar Lake</h2>
                                    
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

                                <img src="https://images.thrillophilia.com/image/upload/s--5TT2dC1c--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/041/604/original/1571061196_Umaid-Bhawan-Palace-Jodhpur-India-1.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--5TT2dC1c--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/041/604/original/1571061196_Umaid-Bhawan-Palace-Jodhpur-India-1.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Umaid Bhawan Palace</h2>
                                  

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

                                <img src="https://images.thrillophilia.com/image/upload/s--jKVo7vVq--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/041/584/original/1473501406_086-185x125-Exterior-Fateh-Prakash-Palace.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--jKVo7vVq--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/041/584/original/1473501406_086-185x125-Exterior-Fateh-Prakash-Palace.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Fateh Prakash Palace</h2>
                                    
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

                                <img src="https://images.thrillophilia.com/image/upload/s--xzqqSyty--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/118/540/original/1508149870_places-to-visit-in-rajasthan_-Albert-Hall.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--xzqqSyty--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/118/540/original/1508149870_places-to-visit-in-rajasthan_-Albert-Hall.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Albert Museum</h2>
                                   

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

                                <img src="https://images.thrillophilia.com/image/upload/s--95Mbh75r--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/173/968/original/1570869122_jhalana-safari-image.jpg.jpg" alt="Paris">
                            </div>
                            <a id="myBt" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Jhalana Leopard Conservation Reserve</h2>
                                    

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                 

            </div>
        </div>
	<!--================ End Popular Places Area =================-->



	<!--================End Team Area =================-->

	<!--================ Start Blog Area =================-->
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
				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/230052437.jpg?k=19868429d5d9da41c247e5ea5ea419eee45606bef38824f5378389eff3e4f0f0&o=&hp=1" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Backpackers Villa     							</h5>
                            <p>Situated in Jaipur, less than 1 km from Sindhi Camp, Backpackers Villa features accommodation with a shared lounge, free private parking, a garden and a terrace. Located around 2.7 km from City Palace, the hotel with free WiFi. Guests at Backpackers Villa can enjoy a vegetarian breakfast. </p>
						</div>
                        
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/210148592.jpg?k=9ddc775789803d658a614c6a16f687c2d7409d675e425033eb961f4d7855d86c&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Alila Fort Bishangarh Jaipur
							</h5>
							<p>Perched magnificently upon a granite hill and offering a 360-degree view of Rajasthani landscape, Alila Fort Bishangarh offers complimentary WiFI, a sun terrace with a swimming pool, fitness centre and garden. Guests at Alila Fort Bishangarh can enjoy a continental breakfast.</p>
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/170097226.jpg?k=ab4bb1d63e8748df5f4c1283201637fecf6fd0c109845976907fe65ed286a7aa&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								
                                    Hotel Divine Palace Pushkar 
							</h5>
							<p>Located in Pushkar, 800 m from Pushkar Lake, Hotel Divine Palace Pushkar provides accommodation with a restaurant, free private parking, a garden and a terrace. Around 1.2 km from Brahma Temple, the property is also 1.3 km away from Varaha Temple and offers free WiFi. The accommodation offers a 24-hour front desk.</p>
                            
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--================ End Blog Area =================-->

	<!--================  Start Footer Area =================-->
	<div class="footer">
		<p>Copyright © 2021 BeeTraveller</p>
	  </div>
	<!--================ End Footer Area =================-->

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