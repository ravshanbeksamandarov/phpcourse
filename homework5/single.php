<?php

    include 'app/db.php';
    
    $coll=$_GET['id'];
    // var_dump($coll);
    // exit;
    foreach($views as $value)
    {
        if($value['id'] == $coll)
        {
            $query2=$connection->query("SELECT `count` FROM `new` WHERE `id`=$coll");
            $que=$query2->fetch();
            $que['count']=intval($que['count']);
            $que['count']+=1;
            $query3=$connection->prepare("UPDATE `new` SET `count`=? WHERE `id`=?");
            $query3->execute([$que['count'], $coll]);
            // $connection->exec($query3);
        }
    }
    $single = $connection->query("SELECT * FROM `new` WHERE `id` = $coll");
    $content = $single->fetch();
?>
<!DOCTYPE html>
<html>
<head>
<title>ColorMag | Single</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/font.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/structure.css">
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<header id="header">
  <!-- <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index.php"><span>Color</span>Mag</a> </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="index.php">Home</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jobs</a>
              <ul class="dropdown-menu" role="menu">
                <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Jobs Home</a> </li>
                <li><a href="#">Faq</a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Article</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Standard Blog Layout</a></li>
                <li><a href="#">Post With Comments</a></li>
                <li><a href="#">Page:Right Sidebar</a></li>
              </ul>
            </li>
            <li><a href="#">Shortcodes</a></li>
            <li><a href="#">Archive</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Download Template</a></li>
          </ul>
        </div>
      </div>
    </nav> -->
    <!-- <form id="searchForm">
      <input type="text" placeholder="Search...">
      <input type="submit" value="">
    </form> -->
  </div>
</header>
<section id="contentbody">
  <div class="container">
    <div class="row">
      <div class=" col-sm-12 col-md-12 col-lg-12">
        <div class="row">
          <div class="leftbar_content">
            <!-- <h2>The New Stuff</h2>            -->
            <div class="singlepost_area">
              <h2><?=$content['Title']?></h2>
              <h2><?=$content['Short']?></h2>
              <img class="img-center" src="<?=$content['Image']?>" alt="">            
            <h2><?=$content['Content']?></h2>
              <!-- <div class="singlepost_content"> <a href="#" class="stuff_category">Technology</a> <span class="stuff_date">Nov <strong>17</strong></span> -->
              <!-- <img class="img-center" src="images/hot_img1.jpg" alt=""> -->
              <!-- <p>Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. Vestibulum sodales ante a purus volutpat euismod. Proin sodales quam nec ante sollicitudin lacinia. Ut egestas bibendum tempor. Morbi non nibh sit amet ligula blandit ullamcorper in nec risus. Pellentesque fringilla diam faucibus tortor bibendum vulputate. Etiam turpis urna, rhoncus et mattis ut, dapibus eu nunc. Nunc sed aliquet nisi. Nullam ut magna non lacus adipiscing volutpat. Aenean odio mauris, consectetur quis consequat quis, blandit a nunc. Sed orci erat, placerat ac interdum ut, suscipit eu augue. Nunc vitae mi tortor. Ut vel justo quis lectus elementum </p>
                <blockquote>Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque adipiscing, neque ut pulvinar tincidunt, est sem euismod odio, eu ullamcorper turpis nisl sit amet velit. Nullam vitae nibh odio, non scelerisque nibh. Vestibulum ut est augue, in varius purus.</blockquote>
                <ul>
                  <li>Nunc tincidunt, elit non cursus euismod, lacus augue</li>
                  <li>Nunc tincidunt, elit non cursus euismod, lacus augue</li>
                  <li>Nunc tincidunt, elit non cursus euismod, lacus augue</li>
                  <li>Nunc tincidunt, elit non cursus euismod, lacus augue</li>
                  <li>Nunc tincidunt, elit non cursus euismod, lacus augue</li>
                  <li>Nunc tincidunt, elit non cursus euismod, lacus augue</li>
                </ul>
                <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula, lacus justo semper libero, quis porttitor turpis odio sit amet ligula. Duis dapibus fermentum orci, nec malesuada libero vehicula ut. Integer sodales, urna eget interdum eleifend, nulla nibh laoreet nisl, quis dignissim mauris dolor eget mi. Donec at mauris enim. Duis nisi tellus, adipiscing a convallis quis, tristique vitae risus. Nullam molestie gravida lobortis. Proin ut nibh quis felis auctor ornare. Cras ultricies, nibh at mollis faucibus, justo eros porttitor mi, quis auctor lectus arcu sit amet nunc. Vivamus gravida vehicula arcu, vitae vulputate augue lacinia faucibus.</p>
                <h3>This is H3 Text Format</h3>
                <h4>This is H4 Text Format</h4>
                <h5>This is H5 Text Format</h5>
                <h6>This is H6 Text Format</h6> -->
                <!-- <a href="#" class="btn btn-primary">Primary</a> <a href="#" class="btn btn-success">Success</a> <a href="#" class="btn btn-info">Info</a> <a href="#" class="btn btn-danger">Danger</a> <a href="#" class="btn yellow_btn">Yellow</a> <a href="#" class="btn blue_btn">Blue</a> <a href="#">link</a>
                <div class="singlepage_pagination"> <a class="previous_btn" href="#">Previous</a> <a class="next_btn" href="#">Next</a> </div>
                <div class="social_area wow fadeInLeft">
                  <ul>
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                  </ul>
                </div>
                <div class="author"> <a href="#"><img src="images/100x100.jpg" alt=""></a>
                  <div class="author_details">
                    <h3><a href="#">Author Name</a></h3>
                    <p>About Author Content lobortis. Proin ut nibh quis felis auctor ornare. Cras ultricies, nibh at mollis faucibus, justo eros porttitor mi, quis auctor lectus arcu sit amet nunc. Vivamus gravida vehicula arcu, vitae vulputate augue lacinia faucibus</p>
                  </div>
                </div>
              </div>
            </div>           
            <div class="similar_post_area">
              <h2>Similar Post You May Like <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="featured_nav similarpost_nav wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <li> <a href="#" class="featured_img"><img alt="" src="../images/featured_img1.jpg"></a>
                  <div class="featured_title"> <a href="#" class="">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
                <li> <a href="#" class="featured_img"><img alt="" src="images/featured_img1.jpg"></a>
                  <div class="featured_title"> <a href="#" class="">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
                <li> <a href="#" class="featured_img"><img alt="" src="images/featured_img1.jpg"></a>
                  <div class="featured_title"> <a href="#" class="">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-2 col-lg-2">
        <div class="row">
          <div class="middlebar_content">
            <h2 class="yellow_bg">What's Hot</h2>
            <div class="middlebar_content_inner">
              <ul class="middlebar_nav wow fadeInDown">
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img2.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a class="mbar_thubnail" href="#"><img src="images/hot_img1.jpg" alt=""></a> <a class="mbar_title" href="#">Sed luctus semper odio aliquam rhoncus</a> </li>
              </ul>
            </div>
            <div class="popular_categori">
              <h2 class="limeblue_bg">Most Popular Categories</h2>
              <ul class="poplr_catgnva wow fadeInDown">
                <li><a href="#">Business</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Life & Style</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Slider</a></li>
                <li><a href="#">Sports</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="row">
          <div class="rightbar_content">
            <div class="single_blog_sidebar">
              <h2>The Featured Stuff</h2>
              <ul class="featured_nav wow fadeInDown">
                <li> <a class="featured_img" href="#"><img src="images/featured_img1.jpg" alt=""></a>
                  <div class="featured_title"> <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
                <li> <a class="featured_img" href="#"><img src="images/featured_img1.jpg" alt=""></a>
                  <div class="featured_title"> <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
                <li> <a class="featured_img" href="#"><img src="images/featured_img1.jpg" alt=""></a>
                  <div class="featured_title"> <a class="" href="#">Sed luctus semper odio aliquam rhoncus</a> </div>
                </li>
              </ul>
            </div>
            <div class="single_blog_sidebar">
              <h2>Popular Posts</h2>
              <ul class="middlebar_nav wow fadeInDown">
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img2.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
                <li> <a href="#" class="mbar_thubnail"><img alt="" src="images/hot_img1.jpg"></a> <a href="#" class="mbar_title">Sed luctus semper odio aliquam rhoncus</a> </li>
              </ul>
            </div>
            <div class="single_blog_sidebar">
              <h2>Popular Tags</h2>
              <ul class="poplr_tagnav wow fadeInDown">
                <li><a href="#">Arts</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Nature</a></li>
                <li><a href="#">Comedy</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Tourism</a></li>
                <li><a href="#">Videos</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</section>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer_inner">
          <p class="pull-left">Muallif huquqi himoyalangan &copy; 2020 Ravshanbek</p>
          <p class="pull-right">Developed By WpFreeware</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>