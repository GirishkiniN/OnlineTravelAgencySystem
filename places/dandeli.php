<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Explore Dandeli</title>
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
							<li class="nav-item"><a class="nav-link" href="#places1" data-scroll-nav="5">Hotels Nearby</a></li>
                            
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area_dandeli">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content" style="color: black">
						
                        <p>A website to display dandeli's beauty</p>
						
                        <div id="parent" ><h2  style="color: black">Explore Dandeli</h2><div id="border"></div></div>

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
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2019/11/Kayaking_26th-nov4.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Kayaking 							</h5>
                            <p>If you are interested in Dandeli water sports, then you must go and enjoy kayaking over there. You will love to paddle your boat in the beautiful water reservoirs of Dandeli, as the place has many water reservoirs where you can enjoy kayaking. Guides will take care of you while you go for kayaking in the river.  </p>
						</div>
                        
					</div>
				</div>

				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2019/11/Mountain-Camping_26th-nov1.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Mountain Camping  							</h5>
                            <p>The mountain camping is another sport form the list of Dandeli adventure sports in the city which is quite popular over there. If you are looking forward to getting an amazing experience which is a combination of both the thrill of mountain climbing with the camping experiences, this is an amazing option to look into.</p>
						</div>
                        
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2019/11/canyoning.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Canyoning 							</h5>
                            <p>If you are planning a vacation with friends and looking for adventure sports in Dandeli then you must consider canyoning in Dandeli. It is one of the toughest activities to do as it requires a lot of strength and the activity. Before doing this activity, you will first have to wear safety gear and check whether everything is working or not. </p>
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
					<h1>ABOUT DANDELI</h1>
					<p style="font-size: 20px"> 
						Dandeli is a town in the western Indian state of Karnataka. The Dandeli Wildlife Sanctuary, with its trails and dense forests, is home to animals including black panthers, monkeys and elephants, as well as many bird species. A temple stands at the entrance to the limestone Kavala Caves, known for their stalagmite formations. West of the caves, Anshi National Park encompasses the Kali Tiger Reserve.
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
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--2EUTzo35--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/045/original/1521623562_18588918_1485291524876143_6544163585105117524_o.jpg.jpg" alt="" style=" width: 100%; height=100%;">
						</div>
						<div class="blog-details">

							<h5>
								Dandeli Wildlife Sanctuary
							</h5>
							<p>Dandeli Wildlife Sanctuary is the foremost amongst the tourist places in Dandeli. It offers lush flora and rare species of fauna. Some unusual mammals you will come across in this wildlife sanctuary are sloth bears, black panther, barking deer, the Indian pangolin (an ant-eating mammal), the Malabar giant squirrel, rare black panther amongst others.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--fZf0thSk--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/830/original/1576150179_sathodi.jpg.jpg" alt="" width="100%" height="100%" >
						</div>
						<div class="blog-details">

							<h5>
								Sathodi Falls
							</h5>
							<p>A splendid vacation for nature lovers in Dandeli cannot be complete unless you pay a visit to the beautiful Sathodi Falls.
                                Jal Mahal is asymmetric low rise stately mansion which was once a shooting toll house for the Maharajah. The stone walls of the beautiful architecture Jal Mahal portrays to be a clear-cut contrast to the azure blue waters of the inland lake.</p>
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--1duNORxa--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/828/original/_13323164823.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Sri Mallikarjuna Temple
							</h5>
							<p>Believed to be older than the Shivaji Fort in Dandeli, Sri Mallikarjuna Temple is amongst the few famous temples in Karnataka that tourists should not miss out on visiting. There is a stone located inside the temple which says that the land over which this temple is built was donated by the Kadamba King Jayakeshi in the year 1144.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--yaqSLht0--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/829/original/DPjTHNbXUAAvi5T.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">
							<h5>
								Shivaji Fort
							</h5>
							<p>One of the most incredible places in Dandeli, Shivaji Fort is an ideal holiday destination for people who like to take nature walks, enjoy trekking, and want to know more about the heritage of Maharashtra. The fort is located nearly 25 km away from Dandeli town, and it is regarded as one of the top tourist’s attraction points in the region.</p>
						</div>
					</div>
				</div>
				
                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--nv5XAft8--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/833/original/mini-tibet-monastery-mundgod-wallpaper.jpg.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Mini Tibet
							</h5>
							<p>This place is referred to the town of Mundgod where the beautiful Tibetan culture comes alive and you can escape in the peaceful ambience. Also known as Doeguling Tibetan Settlement, Mini Tibet near Dandeli is a must for all the culture buffs and history lovers to make a trip to Dandeli. This place is replete with picturesque monasteries, stupas, monks and incessant vibes of serenity. </p>
						</div>
					</div>
				</div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--a3N1rhw---/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/049/original/1502863612_Syntheri_Rocks.JPG.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">

							<h5>
                                Syntheri Rock							
                            </h5>
							<p>Nature seekers and photographers have to add this place under their category of places to visit in Dandeli. You trek all the way to meet this monolith granite rock which is 300 meters in height. The place boasts a small waterfall and a rocky ravine. Though advisable to refrain from swimming or rock climbing, brave hearts can and do face the rocky adventure.</p>
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

                                <img src="https://images.thrillophilia.com/image/upload/s--GRqDxe1w--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/054/original/1502866320_Photo0025.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--GRqDxe1w--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/054/original/1502866320_Photo0025.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Sykes Point</h2>
                                   

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

                                <img src="https://images.thrillophilia.com/image/upload/s--I03jkfk0--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/050/original/1502863668_supa-dam.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--I03jkfk0--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/050/original/1502863668_supa-dam.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Supa Dam</h2>
                                    
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

                                <img src="https://images.thrillophilia.com/image/upload/s--0tXKP26V--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/053/original/1502866263_DudhSagar-1600x600.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--0tXKP26V--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/053/original/1502866263_DudhSagar-1600x600.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Shiroli Peak</h2>
                                  

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

                                <img src="https://images.thrillophilia.com/image/upload/s--tLUv6Izv--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/046/original/1521623858_kavalacave.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--tLUv6Izv--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/116/046/original/1521623858_kavalacave.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Kavala Caves</h2>
                                    
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

                                <img src="https://images.thrillophilia.com/image/upload/s--RNenKV7p--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/835/original/Moulangi.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--RNenKV7p--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/835/original/Moulangi.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Moulangi Eco Park</h2>
                                   

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
							<img class="img-fluid" src="https://images.thrillophilia.com/image/upload/s--ZEHxOi7c--/c_fill,h_600,q_auto,w_975/f_auto,fl_strip_profile/v1/images/photos/000/214/559/original/1586423693_dew_drop_1.png.jpg?1586423692" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
								Royal Palace  							</h5>
                            <p>Go for a soothing homestay experience in Dandeli where you stay constantly surrounded by natural beauty. This stay implies a perfect getaway from the hustle and bustle of the city and caters a perfect homestay for your perfect holiday. The friendly staff and the quick service will ensure catering to the personalized needs at any point of time.</p>
                            
        
						</div>
                        
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_auto,h_600,q_auto,w_auto/v1/filestore/8865sb7mrahjcxz2g02rnstbcec8_hyt5.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Lakeside Boutique
							</h5>
							<p>This peaceful property is a perfect hideaway amidst lush greenery and rich vegetation in an unexplored valley. It is enveloped by beautiful flower gardens, fruit trees, and tropical foliage.

								The best time to visit Dandeli is from October to February when the weather remains pleasant and moderate and the average temperature ranges from 200C to 300C.</p>
                            
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_auto,h_600,q_auto,w_auto/v1/filestore/u743qyl58ixm9z0s36v6ij49srbp_1472547067_COTTAGE_EXTERIOR_-_1.JPG.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
								
								Ambewadi Gram
							</h5>
							<p>The homestay is located in Dandeli amidst the dense Malavalli Shivanasamudra forests surrounded by many nearby waterfalls offering you the amazing experience of peace. With breathtaking views of the lush greenery and sunsets that will leave you spellbound. The property is a perfect blend of comfort and nature that is quite relaxing from the bustling city life.</p>
                            
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--================ End Blog Area =================-->
	<div class="footer">
		<p>Copyright © 2021 BeeTraveller</p>
	  </div>
	
	
	<!--================  Start Footer Area =================-->
	
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