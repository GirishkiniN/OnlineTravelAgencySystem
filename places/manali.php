<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Explore Manali</title>
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
 s color: rgba(255,255,255,.70);
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
                            <li class="nav-item"><a class="nav-link" href="#about" data-scroll-nav="1">Info</a></li>
							<li class="nav-item"><a href="#frstpage1" class="nav-link" data-scroll-nav="2">Photos</a></li>
							<li class="nav-item"><a class="nav-link" href="#places" data-scroll-nav="3">Places</a></li>
							<li class="nav-item"><a class="nav-link" href="#places1" data-scroll-nav="4">Hotels Nearby</a></li>
                        
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area_manali">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content" style="color: black">
						<p>A website to display Manali's beauty</p>
						
                        <div id="parent" ><h2  style="color: black">Explore Manali</h2><div id="border"></div></div>

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
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2015/09/me05mr011-ed.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    River Rafting  							</h5>
                            <p>For those who wish to conquer the hard currents of water, river rafting in Manali is a must. The challenge of surviving through the wicked twists and turns of the rapids will quench your thirst for adventure in Manali. Before starting, the rafters are given a brief introduction and made wary of the lurking dangers.</p>
						</div>
                        
					</div>
				</div>

				
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2015/09/skiing-2.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Skiing 							</h5>
                            <p>Enjoy your snowy rendezvous with skiing, at the famous Solang Valley near Manali. One of the most sought-after adventure sports in Manali, Skiing is offered along with prior assistance. One can also go Skiing in Rohtang, Marhi, Gulaba and Dhundi, but there is a good chance that the experience of skiing in Manali will reign supreme.</p>
						</div>
                        
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2015/09/a7.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Mountaineering							</h5>
                            <p>If scaling heights ranges high on your priority list, Manali is your answer. Before taking on the heights, basic lessons are provided to mountaineers regarding the equipment, so that they can easily face difficulties starting from rock-climbing and altitude-climbing, everything is covered under mountaineering done at Manali.</p>
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
					<h1>ABOUT MANALI</h1>
					<p style="font-size: 20px"> Manali is a high-altitude Himalayan resort town in India’s northern Himachal Pradesh state. It has a reputation as a backpacking center and honeymoon destination. Set on the Beas River, it’s a gateway for skiing in the Solang Valley and trekking in Parvati Valley. It's also a jumping-off point for paragliding, rafting and mountaineering in the Pir Panjal mountains, home to 4,000m-high Rohtang Pass.</p>
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
							<img class="img-fluid" src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Solang-Valley.jpg" alt="" style=" width: 100%; height=100%;">
						</div>
						<div class="blog-details">

							<h5>
								Solang Valley, Manali
							</h5>
							<p>A mini valley located at about 8400 feet above sea level, Solang Nala is a short drive away from Manali. It is a haven for adventure and sports lovers and while here, you can try your skills on a pair of skis or go for a snowmobile exploration. When the weather warms up, people flock here for zorbing and paragliding. You can also hop onto a cable car and enjoy mesmerizing views of the Himalayas.</p>
						</div>
					</div>
				</div>
                
               
				
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Hadimba-Temple.jpg" alt="" width="100%" height="100%" >
						</div>
						<div class="blog-details">

							<h5>
								 Hadimba Temple, Manali
							</h5>
							<p>Hidimba Devi Temple and Dhungari Temple, this ancient shrine was built by Maharaja Bahadur Singh way back in 1553. As the name suggests, the temple is dedicated to Hidimba Devi, wife of Bheema. The wooden architecture of the shrine is very distinct from most Hindu temples you will come across in the country. </p>
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Himalayan-Nyingmapa-Buddhist-Temple.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								 Himalayan Nyingmapa Buddhist Temple
							</h5>
							<p>The soothing silence of the Nyingmapa Buddhist Temple in Manali will calm even the most frazzled of nerves. This Shangri-La-like haven sits in the middle of the busy town, while its pagoda-style architecture and vibrant tones add a mystical allure to the whole setting. While here, don’t forget to spin the prayer wheels and admire the Sakyamuni idol and wall paintings.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Museum-of-Himachal-Culture-and-Folk-Art.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">
							<h5>
								Museum of Himachal Culture and Folk Art
							</h5>
							<p>A quick stop at the Museum of Himachal Culture and Folk Art is recommended for those who want a glimpse into the traditions and rich local heritage of the region. Some of the exhibits here include a collection of masks used in festival dances, traditional garments, and musical instruments. Established in 1998, this small yet culturally rich place also has models of ancient houses and temples.</p>
						</div>
					</div>
				</div>
				
                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Gulaba1.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Gulaba, Manali
							</h5>
							<p> A trip to Manali should include visits to nearby villages to experience the distinct culture of the place along with stunning visuals. You will not be disappointed if you add Gulaba to your list. A favorite haunt for winter travelers who yearn for some snowy landscapes, the village has some of the most captivating trekking routes in Himachal Pradesh.</p>
						</div>
					</div>
				</div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Chandrakhani-Pass.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">

							<h5>
                                Chandrakhani Pass, Manali							
                            </h5>
							<p>The arresting natural beauty of Himachal Pradesh can be encapsulated by a trek to the Chandrakhani Pass. It is also at this pass that you can visit the famed village of Malana, which is home to a very distinct community and famous for its cannabis crops. Chandrakhani Pass is a favorite spot for photographers as it is a vantage point to view the prominent peaks of the region.</p>
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

                                <img src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Beas-River.jpg" alt="Paris">
                            </div>
                            <a href="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Beas-River.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>
                           
                                    <h2> Beas River, Manali</h2>
                                   

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

                                <img src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Gauri-Shankar-Temple.jpg" alt="Paris">
                            </div>
                            <a href="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Gauri-Shankar-Temple.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Gauri Shankar Temple, Manali</h2>
                                    
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

                                <img src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Rohtang-Pass.jpg" alt="Paris">
                            </div>
                            <a href="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Rohtang-Pass.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Rohtang Pass, Manali</h2>
                                  

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

                                <img src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Kothi1.jpg" alt="Paris">
                            </div>
                            <a href="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Kothi1.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Kothi, Manali</h2>
                                    
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

                                <img src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Bhrigu-Lake.jpg" alt="Paris">
                            </div>
                            <a href="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/Bhrigu-Lake.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Bhrigu Lake</h2>
                                   

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

                                <img src="https://www.fabhotels.com/blog/wp-content/uploads/2019/03/The-Manali-Gompa.jpg" alt="Paris">
                            </div>
                            <a id="myBt" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>The Manali Gompa</h2>
                                    

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
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/278247890.jpg?k=afe1873b304c97ca49ce80d17eb58fa9bef2bb28b2f292230473209f6958a7be&o=&hp=1" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Snow Valley Resort      							</h5>
                            <p>Hollywood inn is offering accommodation in Manāli. The property is close to several well-known attractions, less than 1 km from Hidimba Devi Temple, a 2-minute walk from Tibetan Monastery and 800 m from Circuit House. The hotel features a terrace and a 24-hour front desk.</p>
						</div>
                        
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/285385986.jpg?k=5a08533f68568607e672a3d7f1aeb523efec0c7ddffc9843da252a4692190484&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								The Deephill Vivid
							</h5>
							<p>The Deephill Vivid in Manāli provides adults-only accommodation with a restaurant, a shared lounge and a garden. Boasting a 24-hour front desk, this property also provides guests with a children's playground. Free WiFi is available and private parking.</p>
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/172808300.jpg?k=93e1edfb02d60c4b5f22c35c8dc7411b955aeddd7cef61a4d6af44963a35e0d5&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								
                                    Hotel Mountain Face By Snow City Hotels
							</h5>
							<p>Set in Manali, 5 km from Hidimba Devi Temple, Hotel Mountain face by Snow City Hotels offers accommodation with a restaurant, free private parking, a shared lounge and a garden. Each accommodation at the 3-star hotel has garden views and free WiFi.</p>
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