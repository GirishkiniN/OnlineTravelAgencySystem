<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Explore Wayanad</title>
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
	<section class="home_banner_area_wayanad">
		<div class="banner_inner">
			<div class="container">
				<div class="row fullscreen d-flex align-items-center justify-content-center">
					<div class="banner_content" style="color: black">
						
                        <p>A website to display Wayanad's beauty</p>
						
                        <div id="parent" ><h2  style="color: black">Explore Wayanad</h2><div id="border"></div></div>

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
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2014/11/Carving-in-Ekkadal-Caves.jpg" alt="" style=" width: 100%; height=100%;">
						</div>
						<div class="blog-details">

							<h5>
								Edakkal Caves
							</h5>
							<p>For the best Wayanad sightseeing, head to the famous Edakkal Caves. Edakkal Rock engraving are invaluable treasures of the world heritage. The site combines the spectacular vistas of nature and the timeless appeal of the nearby prehistoric caves. Human figures depicted in different styles are the most beautiful items among the carving.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2019/12/karlad-lake.jpg" alt="" width="100%" height="100%" >
						</div>
						<div class="blog-details">

							<h5>
								Karlad Lake
							</h5>
							<p> Karlad Lake is one of the top places to see in Wayanad that you cannot afford to miss. The best time to visit this lake is between the months of October and January. Make sure that you visit this Wayanad destination before 5 pm as it is the closing time for visitors. It has become a popular picnic spot for families and friends so make sure that you include it in your itinerary.</p>
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2019/02/Kanthanpara-Waterfallsepb0310.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Kanthanpara Waterfalls
							</h5>
							<p>Kanthanpara Waterfalls is a small waterfall located in Meppadi of Wayanad district. This is one of the hidden places to visit in Wayanad for visiting as a tourist. The white waters gushing down the rocky mountain is a refreshing sight to watch. Make sure you follow the safety instructions while visiting this place as the rocks may be loose and slippery.</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2019/12/Pallikkunnu-Church.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">
							<h5>
								Pallikkunnu Church
							</h5>
							<p>Pallikkunnu Church is counted among the top places to see in Wayanad. The church was brought into existence by a French Priest in the year 1908 which is why it is one of the oldest churches in the town that is still intact. Every year in the month of February, the church organizes a fest which gathers many tourists from all over India.</p>
						</div>
					</div>
				</div>
				
                <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2014/11/ghat-view-point.jpg" alt="" width="100%">
						</div>
						<div class="blog-details">

							<h5>
								Ghat View Point
							</h5>
							<p>The adventurous spot in Wayanad is around 700 meters above sea level. Ghati viewpoint is nested at Lakkidi which has 9 hairpin curves within 16 kilometers. It gives an eyeshot of great steep, misty mountains and a glance of Arabian Sea. You can enjoy the sunset at this famous Wayanad sightseeing in the evening with your beloved.</p>
						</div>
					</div>
				</div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2019/02/wildlife-sanctuary-e1559108344844.jpg" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">

							<h5>
                                Wayanad Wildlife Sanctuary							
                            </h5>
							<p>Wayanad sanctuary is a home to rare and endangered species of both flora and fauna. Birdwatching and trekking are a few activities that travelers can be a part of when visiting the wildlife sanctuary. Travelers can witness deers, langurs, tigers, elephants and other wildlife in their natural habitat. If you are an animal lover then you should not miss this Wayanad sightseeing spot. </p>
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
					<h1>ABOUT WAYANAD</h1>
					<p style="font-size: 20px"> 
						Wayanad is a rural district in Kerala state, southwest India. In the east, the Wayanad Wildlife Sanctuary is a lush, forested region with areas of high altitude, home to animals including Asiatic elephants, tigers, leopards and egrets. In the Ambukuthi Hills to the south, Edakkal Caves contain ancient petroglyphs, some dating back to the Neolithic age.
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

<!--================ start festivals Area =================-->

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
							<img class="img-fluid" src="https://1.bp.blogspot.com/-3wXIyDjiGYA/YBjKmkZS9FI/AAAAAAAAbls/ndtYEKLO0F4bs1PNYixqrodWf--701WBQCLcBGAsYHQ/s600/Thirunelli%2BTemple%2BBali%2BTimings%2B%25E2%2580%2593%2BBali%2BTharpanam%2BAt%2BThirunelli%2BTemple%2BIn%2BWayanad%2BKerala.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Thirunelli Festival
							</h5>
							<p>In Medam (April), which is a Malayalam month, annual festival of Sree Thirunelli Devaswom at Thirunelli is celebrated in Wayanad. It’s a festival that is celebrated with aplomb for two days on Vishu and its eve. Itis celebrated atthe Thirunelli Temple in Wayanad, which is said to be the only temple in the world where devotees can perform all the rituals pertaining to life, death, and life after death.</p>
                           
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://malayalam.nativeplanet.com/img/2018/10/5valliyoorkkavutemple-1540361638.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
                                Valliyoorkkavu Festival							</h5>
							<p>The Valliyoorkkavu temple, located high in the Wayanad hills at Valliyoorkkavu, 3 km from Mananthavady town is dedicated to Goddess Bhagavathy. Here goddess is worshipped in three of her principal forms - Vana Durga, Bhadrakali and Jala Durga.The annual 14 day arattu festival of this temple whose idol is believed to have been self-manifested is held in the month of March.</p>
                           
						</div>
					</div>
				</div>
				<!-- single-feature -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://www.astroved.com/astropedia/assets/images/festivals/karthigaidepam.jpg" alt="">
						</div>
						<div class="blog-details">

							<h5>
                                Karthika Deepam							</h5>
							<p>Karthigai Deepam, Thrikarthika or Karthikai Vilakkidu is a festival of lights that is observed by Hindus of Kerala, Tamil Nadu and Sri Lanka. It falls in the month of Kārttikai as per Tamil calendar. The full moon day of this Karthigai month is called Karthigai pournami.The village temple arranges for a bonfire of useless materials and every family takes a burning torch made of palm leaves (Chootu) from this fire to the house. </p>
                           
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

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

                                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/03/63/93/3b/kalpetta.jpg?w=400&h=400&s=1" alt="Paris">
                            </div>
                            <a href="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/03/63/93/3b/kalpetta.jpg?w=400&h=400&s=1" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Chembra Peak</h2>
                                   

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

                                <img src="https://images.thrillophilia.com/image/upload/s--xPbY199H--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/854/original/Banasura_20Sagar_20Dam_kerala_20trips.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--xPbY199H--/c_fill,g_auto,h_450,w_753/dpr_1.0/v1/attractions/images/000/002/854/original/Banasura_20Sagar_20Dam_kerala_20trips.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Banasura Sagar Dam</h2>
                                    
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

                                <img src="https://images.thrillophilia.com/image/upload/s--ZelgVESZ--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/053/343/original/1552467497_shutterstock_1173279064.jpg.jpg" alt="Paris">
                            </div>
                            <a href="https://images.thrillophilia.com/image/upload/s--ZelgVESZ--/c_fill,g_center,h_450,q_auto,w_753/dpr_1.0,f_auto,fl_strip_profile/v1/images/photos/000/053/343/original/1552467497_shutterstock_1173279064.jpg.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Kuruva Island</h2>
                                  

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

                                <img src="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2014/11/neelimala-view-point.jpg" alt="Paris">
                            </div>
                            <a href="https://img.traveltriangle.com/blog/wp-content/tr:w-700,h-400/uploads/2014/11/neelimala-view-point.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2> Neelimala View Point</h2>
                                    
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

                                <img src="https://www.trawell.in/admin/images/upload/4860726Vythiri_Main.jpg" alt="Paris">
                            </div>
                            <a href="https://www.trawell.in/admin/images/upload/4860726Vythiri_Main.jpg" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Vythiri</h2>
                                   

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

                                <img src="https://www.trawell.in/admin/images/upload/486072514SulthaBathery_JainTemple_Main.jpg" alt="Paris">
                            </div>
                            <a id="myBt" style="cursor: pointer;">
                                <div class="flip-box-back"><br><br><br><br>

                                    <h2>Jain Temple</h2>
                                    

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                 

            </div>
        </div>
	<!--================ End gallery Area =================-->



	

	<!--================ Start hotels Area =================-->
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
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/286499859.jpg?k=82c1e487b2443ac30b06d8c5656832e1acc4613f3b9680110ba111f626299cd2&o=&hp=1" alt="" width="100%" height="100%">
						</div>
						<div class="blog-details">
							<h5>
                                    Morickap Resort     							</h5>
                            <p>Extra health and safety measuresThis property has taken extra health and hygiene measures to ensure that your safety is their priority See health and safety detailsOne of our top picks in Vythiri. The units come with air conditioning, a flat-screen TV with satellite channels, a kettle, a shower, free toiletries and a wardrobe.Morickap Resort offers accommodation with a restaurant, free private parking, an outdoor swimming pool and a fitness centre. Among the facilities at this property are a 24-hour front desk and room service, along with free WiFi throughout the property. Guests at the accommodation can enjoy a buffet breakfast.</p>
                            
						</div>
                        
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1280x900/227459759.jpg?k=281499411f672c5557a073b72cf3ef90d731a9f7ccfa5951a014541cde931ac3&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								Hotel Wilton
							</h5>
							<p>Set in Sultan Bathery, 3.6 km from Ancient Jain Temple, hotel wilton features views of the city. Among the facilities of this property are a restaurant, a 24 hour front desk and room service, along with free WiFi. The hotel features family rooms. The units come with a flat-screen TV with satellite channels, a kettle, a shower, a hairdryer and a desk. At the hotel all rooms are equipped with a wardrobe and a private bathroom. Hotel wilton offers a continental or Asian breakfast. Edakkal Caves is 15 km from the accommodation. The nearest airport is Calicut International, 69 km from hotel wilton.</p>
                           
						</div>
					</div>
				</div>

				<!-- single-blog -->
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="single-blog">
						<div class="blog-thumb">
							<img class="img-fluid" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/217404848.jpg?k=34a2991ef3872b07bfa4deae5655cb3015ad44d557a97668559b7c24a5c84394&o=&hp=1" alt="">
						</div>
						<div class="blog-details">

							<h5>
								
                                    Mintotel Wayanad
							</h5>
							<p>Set in Sultan Bathery, 1.6 km from Ancient Jain Temple, Mintotel Wayanad offers accommodation with a restaurant, free private parking, a shared lounge and a garden. All rooms boast a flat-screen TV with cable channels and a private bathroom. The accommodation provides a 24-hour front desk, room service and currency exchange for guests. All guest rooms at the hotel feature air conditioning and a wardrobe.Edakkal Caves is 13 km from the accommodation. The nearest airport is Calicut International, 67 km from Mintotel Wayanad, and the property offers a free airport shuttle service.</p>
                       
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--================ End hotels Area =================-->
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
        $pname = "wayanad";
        $prname = $_POST['rname'];
        $preview = $_POST['review'];
        $prating = $_POST['rating'];  
        $querystring = "INSERT INTO blog_review(customer_name,review,blog_place,rating) VALUES('$prname','$preview','$pname','$prating')";
        mysqli_query($conn,$querystring);
		echo '<script>alert("Your Review submited succesfully !")</script>';
		echo '<script>window.location= "wayanad.php";</script>';
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
					$ptname = "wayanad";
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