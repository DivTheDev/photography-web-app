<?php include_once("index_backend.php")?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Photography Website</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <div id="top-area">
            <div><a href="home.php"><img src="/photography_web/img/circular_profile_picture.png"></img></a></div> 
            <div><a href="home.php"><h3>piXel</h3></a></div>
            <div><a href="home.php"><i class="fa fa-sign-out fa-2x"></i></a></div>
        </div>
            <div id="dashboard">
            <div><a href="home.php"><i class="fa fa-home fa-2x"></i></a></div>
            <div><a href="upload_image/upload_image.php"><i class="fa fa-upload fa-2x"></i></a></div>  
            <div><a href="new_user/new_user.php"><i class="fa fa-user-plus fa-2x"></i></a></div>
            <div><a href="login/login.php"><i class="fa fa-user fa-2x"></i></a></div>
        </div>
        
        <!--================Home Gallery Area =================-->
        <section class="home_gallery_area p_120">
        	<div class="container">
        		<div class="isotope_fillter">
        			<ul class="gallery_filter list">
						<li class="active" data-filter="*"><a href="home.php?date=now" id="date">Date</a></li>
						<li data-filter=".ap"><a id="location"onclick="change_address(this)" href="home.php">Location</a></li>
						<li data-filter=".unp"><a id="type" onclick="change_address(this)" href="home.php">Tags</a></li>
						<li data-filter=".unv"><a id="near" onclick="change_address(this)" href="home.php">Near Me</a></li>
					</ul>
        		</div>
        	</div>
        	<div class="container box_1620">
                <div class="row">
                <?php foreach ($response as $key => $value):?>
                <div class="col-lg-3 col-md-4 col-sm-6 ap">
        		    <div class="imageGallery1"> <!-- class="gallery_f_inner row imageGallery1" -->
        				<div class="h_gallery_item">
        					<img src="upload_image/images/<?php echo $value['image'];?>" alt="">
        					<div class="hover">
        						<a class="light" href="upload_image/images/<?php echo $value['image'];?>"><i class="fa fa-expand"></i>
                                <div class="meta_data d-none">
                                    <ul>
                                        <li>Title: <?php echo $value['title'];?></li>
                                        <li>Description: <?php echo $value['description'];?></li>
                                        <li>Tags: <?php echo $value['type'];?></li>
                                        <li>Location: <?php echo $value['location'];?></li>
                                        <li>Number: <?php echo $value['numbers'];?></li>
                                    </ul>
                                </div>
                                </a>
        					</div>
        				</div>
        			</div>
        		</div>
                <?php endforeach;?>
                 </div>
        		<div class="button_more">
        			<a class="btn theme_btn" href="#">Load More Images</a>
        		</div>
        	</div>
        </section>
        <!--================End Home Gallery Area =================-->
     
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/theme.js"></script>
        <script src="js/alerts.js" type="text/javascript"></script>
    </body>
</html>
