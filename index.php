<!DOCTYPE html>
<html lang="en">
	<head>
		<title>MTSA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/global.css" type="text/css">
		<link rel="stylesheet" href="css/food-blog.css" type="text/css">
		<link rel="stylesheet" href="css/houses.css" type="text/css">
		<link rel="stylesheet" href="css/sponsors.css" type="text/css">
		<link rel="stylesheet" href="css/team.css" type="text/css">
		<link rel="stylesheet" href="css/contact.css" type="text/css">
		<!-- Bootstrap -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script>
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/smoothscroll.js"></script>
	</head>
	<body data-spy="scroll" data-target="#menu-holder">
		<!-- get wordpress -->
		<?php
		require('../food/wp-blog-header.php');
		?>
		<!-- main mofo container -->
		<div class="container-fluid">
			<div class="row"  id="events">
				<!-- left side menu bar -->
				<div class="col-md-2" id="leftFrame">
					<div id="fixedMenuBar">
						<a id="logoholder" href="http://mtsa.tw/newSite2014"><img id="mtsa-logo" src="http://mtsa.tw/newSite2014/images/logo.png"></a>
						<div id="menu-holder">
							<ul class="nav" id="menuAffix">
								<li><a href="#events" class="smoothScroll"><h3>EVENTS</h3></a></li>
								<li><a href="#food-blog" class="smoothScroll"><h3>FOOD BLOG</h3></a></li>
								<li><a href="#houses" class="smoothScroll"><h3>HOUSES</h3></a></li>
								<li><a href="#sponsors" class="smoothScroll"><h3>SPONSORS</h3></a></li>
								<li><a href="#team" class="smoothScroll"><h3>TEAM</h3></a></li>
								<li><a href="#contact" class="smoothScroll"><h3>CONTACT</h3></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- center container main show -->
				<div class="col-md-offset-2 col-md-10 mainframe">
					<div class="align-left row">
						<div class="col-md-offset-1 col-md-10 col-md-offset-1">
							<h1 class="big-white-h1">EVENTS</h1>
							<div id="myCarousel" class="carousel slide" data-interval='false' data-ride="carousel">
							  <!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
							    	<li data-target="#myCarousel" data-slide-to="2"></li> 
							    	<li data-target="#myCarousel" data-slide-to="3"></li> 
							  	</ol>
							  <!-- Wrapper for slides -->
							  	<div class="carousel-inner">
							  		<?php $my_query = new WP_Query('category_name=Events&showposts=4'); ?>
									<?php $eventcount = 1; ?>
									<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
									<?php if ($eventcount==1): ?>
										<div class="item active">
							      			<img src="<?php echo $url; ?>" alt="">
							      			<div class="carousel-caption">
							      				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
							      					<h1><?php the_title(); ?></h1>
												</a>
							      			</div>
							    		</div>
							    	<?php $eventcount ++; ?>
									<?php elseif( $eventcount > 1): ?>
										<div class="item">
							      			<img src="<?php echo $url; ?>" alt="">
							      			<div class="carousel-caption">
							      				<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
							      					<h1><?php the_title(); ?></h1>
												</a>
							      			</div>
							    		</div>
							    	<?php $eventcount ++; ?>
									<?php endif; ?>
									<?php endwhile; ?>
								    
							    	<!-- 
							    	<div class="item">
							      		<img src="..." alt="...">
							      		<div class="carousel-caption">
							        		...
							      		</div>
							    	</div> -->
							  	</div>
							
							  	<!-- Controls -->
							  	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							    	<span class="glyphicon glyphicon-chevron-left"></span>
							  	</a>
							  	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							    	<span class="glyphicon glyphicon-chevron-right"></span>
							  	</a>
							</div>
						</div>
						
					</div>
					<div class="row events-box-container">
						<div class="col-md-offset-1 col-md-5 events-box">
							
						</div>
						<a href="https://www.facebook.com/mcgill.mtsa"><div class="col-md-5" id="facebook">
							<h2>FIND US ON FACEBOOK</h2>
						</div></a>
					</div>
					
				</div>
			</div>
			<!--end first row -->
			<div class="row" id="food-blog">
				<div class="col-md-offset-2 col-md-10 mainframe">
					<div class="align-left">
						<div class="row">
							<h1 class="big-white-h1 col-md-offset-1 col-md-11">FOOD BLOG</h1>
						</div>
						<div class="row food-blog-container">
							<?php $my_query = new WP_Query('category_name=FoodBlog&showposts=3'); ?>
							<?php $i = 1; ?>
							<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
							<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
							<?php if($i==1): ?>
							<div id="food-blog-left" class="col-md-offset-1 col-md-5">
								
								<a href="<?php the_permalink(); ?>"><img id="food-blog-left-img" src="<?php echo $url ?>"></a>
								<div class="food-blog-text-box">
									<a href="<?php the_permalink(); ?>"><h2 class="food-blog-title"><?php the_title(); ?></h2></a>
									<div class="food-blog-description-box">
										<?php the_content(); ?>
									</div>
								</div>
								<div class="food-blog-read-more-box">
									<a href="<?php the_permalink(); ?>"><h3 class="food-blog-read-more-text">READ MORE</h3></a>
								</div>
							</div><div id="food-blog-right" class="col-md-5">
							<?php $i++; ?>
							<?php elseif($i == 2): ?>
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
								<div id="food-blog-right-top">
									<a href="<?php the_permalink(); ?>"><img id="food-blog-right-top-img" src="<?php echo $url ?>"></a>
									<div class="food-blog-text-box">
										
										<a href="<?php the_permalink(); ?>"><h2 class="food-blog-title"><?php the_title(); ?></h2></a>
										<div id="food-blog-description-right-box">
											<?php the_excerpt(); ?>
										</div>
									</div>
									<div class="food-blog-read-more-box">
										<a href="<?php the_permalink(); ?>"><h3 class="food-blog-read-more-text">READ MORE</h3></a>
									</div>
								</div>
							<?php $i++; ?>
							<?php elseif($i==3): ?><div class="row food-blog-right-bottom-box">
							<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
									<div class="col-md-6 food-blog-right-bottom-box1" background="<?php echo $url ?>">
										<a href="<?php the_permalink(); ?>"><h2 class="food-blog-title"><?php the_title(); ?></h2></a>
									</div>
									<div class="col-md-6 food-blog-right-bottom-box2">
										<a href="http://mtsa.tw/food"><h2 class="food-blog-title">CLICK HERE TO READ MORE</h2></a>
									</div>
								</div>
							</div>
							<?php endif; ?>
							<?php endwhile; ?>
								
								
						</div>
						
					</div>
				</div>
			</div>
			<div class="row" id="houses">
				<div class="col-md-offset-2 col-md-10 mainframe">
					<div class="row align-left">
						<h1 class="big-white-h1 col-md-offset-1 col-md-11">HOUSES</h1>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-10 house-main">
							<div class="row">
								<div class="col-md-6" id="house-photo">
							
								</div>
								<div class="col-md-6" id="house-intro">
									
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 house-col">
									<img class="house-logo" src="images/houses/wolfpack.png">
									<div class="house-description">
										<h3 class="house-name">WolfPack</h3>
										<p>As defined by Yahoo! Answers, Wolves are known to be affectionate, playful, and loyal. This is what the Wolfpack Famry is all about. We value friendship, open-mindedness, and sharing. Our main goal is to share a small amount of happiness errday to all our family members! Hosting chill, indoor activities, such as KTV, themed potlucks, restrautant crawl, study parties, and movie nights, we're all about dose down-to-earth vibes when bonding with our members! </p>
									</div>
									<div class="row">
										<div class="col-md-6 house-col-bottom">
											<p>Points</p>
										</div>
										<div class="col-md-6 house-col-bottom">
											<p>Blog</p>
										</div>
									</div>
								</div>
								<div class="col-md-3 house-col">
									<img class="house-logo" src="images/houses/bomb.png">
									<div class="house-description">
										<h3 class="house-name">Bombdiggity</h3>
										<p>Bombdiggity is a spirited team of CREATIVE, SASSY individuals who can charm their way into anything. With great dreams, great pride, and amazing talents, we are not afraid to take down whatever stands in our way. Join this family and we guarantee that you will have the best time at McGill! #HouseBombdiggity</p>
									</div>
									<div class="row">
										<div class="col-md-6 house-col-bottom">
											<p>Points</p>
										</div>
										<div class="col-md-6 house-col-bottom">
											<p>Blog</p>
										</div>
									</div>
								</div>
								<div class="col-md-3 house-col">
									<img class="house-logo" src="images/houses/soloyolo.png">
									<div class="house-description">
										<h3 class="house-name">Solo-Yolo</h3>
										<p>Solo Yolo is centered towards being the most energetic and original amongst them all. Creativity is our instrument, curiosity is our fuel and family is our glue. We have the greatest passion towards living life at its greatest #YOLO while working our individual uniqueness #SOLO. We drink bubble tea non-stop during the day and later on mix in shots going into and throughout the night. Join us on an adventure of a lifetime! #HouseSoloYolo</p>
									</div>
									<div class="row">
										<div class="col-md-6 house-col-bottom">
											<p>Points</p>
										</div>
										<div class="col-md-6 house-col-bottom">
											<p>Blog</p>
										</div>
									</div>
								</div>
								<div class="col-md-3 house-col">
									<img class="house-logo" src="images/houses/shark.png">
									<div class="house-description">
										<h3 class="house-name">Sharknado</h3>
										<p>Team Sharknado is easygoing, and we believe in bonding through casual occasions. Our main goal is to keep calm and stay chill. Therefore, the activities we prefer are laid-back movie nights, potlucks, and chilling. We believe non-pressured environments make the best bonds within a group! #HouseSharknado</p>
									</div>
									<div class="row">
										<div class="col-md-6 house-col-bottom">
											<p>Points</p>
										</div>
										<div class="col-md-6 house-col-bottom">
											<p>Blog</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" id="sponsors">
				<div class="col-md-offset-2 col-md-10 mainframe">
					<div class="row align-left">
						<h1 class="big-white-h1 col-md-offset-1 col-md-11">SPONSORS</h1>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-10">
							<div class="row"
							<div class="row">
								<div class="col-md-10" id="mapContainer">
									
								</div>
								<div class="col-md-2" id="sponsorList"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" id="team">
				<div class="col-md-offset-2 col-md-10 mainframe">
					<div class="row align-left">
						<h1 class="big-white-h1 col-md-offset-1 col-md-11">TEAM</h1>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-10 col-md-offset-1">
							<img id="team-photo" src="images/main.jpg">
							<div class="row team-box">
								<div class="col-md-6 team-box1 yellow-box">
									<h1 class="big-yellow-font">OUR TEAM</h1>
								</div>
								<div class="col-md-6 team-box2 yellow-box">
									<h1 class="big-yellow-font">JOIN US!</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" id="contact">
				<div class="col-md-offset-2 col-md-10 mainframe">
					<div class="row">
						<div class="col-md-offset-1 col-md-10 col-md-offset-1">
							<div class="row">
								<div class="col-md-6" id="contact-left">
									<h1>CONTACT</h1>
									<h3>
										You can reach us by email at:
mcgill.mtsa@gmail.com
Balhcblsadfhasldkjf;a You can reach us by email at:
mcgill.mtsa@gmail.com
Balhcblsadfhasldkjf;a You can reach us by email at:
mcgill.mtsa@gmail.com
										You can reach us by email at:
mcgill.mtsa@gmail.com
Balhcblsadfhasldkjf;a You can reach us by email at:
mcgill.mtsa@gmail.com
Balhcblsadfhasldkjf;a You can reach us by email at:
mcgill.mtsa@gmail.com
										You can reach us by email at:
mcgill.mtsa@gmail.com
Balhcblsadfhasldkjf;a You can reach us by email at:
mcgill.mtsa@gmail.com
Balhcblsadfhasldkjf;a You can reach us by email at:
mcgill.mtsa@gmail.com
									</h3>
								</div>
								<div class="col-md-6" id="contact-right">
									<div class="row" id="contact-social-media">
										<div class="col-md-6" id="contact-facebook">
											
										</div>
										<div class="col-md-6" id="contact-instagram">
											
										</div>
										<div class="col-md-6" id="contact-youtube">
											
										</div>
										<div class="col-md-6" id="contact-twitter">
											
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- bg that wont scroll -->
		<div align="center"><img id="bg" src="images/101.jpg"></div>  
		<!-- include Js at the bottom for performance -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>