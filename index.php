<?php header('Location: pr1ma-staging/');
?>
<?php
include 'header.php';
?>
<?php
include 'include/db_conn.php';
?>

<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Nov 16 2020 06:58:53 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5faaa7da09083e7a728474be" data-wf-site="5faaa7da09083e399f8474bd">
<head>
  <meta charset="utf-8">
  <title>PR1MA</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/pr1ma.webflow.css" rel="stylesheet" type="text/css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Roboto:300,300italic,regular,500,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>

    <div class="herocontainer">
      <div class="socialwrapper">
        <a href="#" class="herolink w-inline-block"><img src="images/Facebook-Dark-icon.svg" loading="lazy" width="36" height="36" alt=""></a>
        <a href="#" class="w-inline-block"><img src="images/Instagram-Dark-icon.svg" loading="lazy" width="36" alt=""></a>
      </div>
      
      
                      
        <div class="herocontent">
        <h1 class="heroh1">home <br><span class="text-span-2">is where <br>the heart is</span></h1>
        <div data-animation="slide" data-duration="500" data-infinite="1" class="heroslider w-slider">
          <div class="w-slider-mask">
            <div class="slide-2 w-slide"></div>
            <div class="slide w-slide"></div>
          </div>
          <div class="left-arrow w-slider-arrow-left">
            <div class="w-icon-slider-left"></div>
          </div>
          <div class="right-arrow w-slider-arrow-right">
            <div class="w-icon-slider-right"></div>
          </div>
          <div class="slide-nav w-slider-nav w-round"></div>
        </div>
      </div>
     
      <div class="scrolldown">
        <div data-w-id="afb7ff33-f8f4-1772-3a0a-4f8589d5a8f6" data-animation-type="lottie" data-src="documents/lottieflow-scroll-down-01-29327b-easey.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="3.04" data-duration="0" class="lottie-animation"></div>
        <div>scroll down</div>
      </div>
    </div>
  </div>
  <div class="main-section">
    <div class="maincontainer">
      <h2>explore more</h2>
      <div class="line"></div>
      <div class="explorecontainer">
        <a href="#" class="maincard corporate w-inline-block">
          <div>corporate</div>
          <div class="button discover light">
            <div>discover</div>
          </div>
        </a>
        <a href="#" class="maincard property w-inline-block">
          <div>property</div>
          <div class="button discover light">
            <div>discover</div>
          </div>
        </a>
        <a href="#" class="maincard community w-inline-block">
          <div>community</div>
          <div class="button discover light">
            <div>discover</div>
          </div>
        </a>
      </div>
      	                                
                                                                        
                                                           
      <h2>news &amp; highlights</h2>
      <div class="line"></div>
      <div class="newscontainer">
        <div class="subcard">
          <div class="subcardimage"><?php $query = "select * from uploads WHERE id_loc='01' and id_sort='01' and sts_use='A' ";

//echo $query;
$result = mysqli_query($con,$query);
$sno=1;
    if(mysqli_affected_rows($con)!=0){
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){  echo "<img src='images/".$row['file_name']."' width='250' height='170'>"; $sno++;
    }
   }?> </div>
          <div class="subcardcontent" >
            <h3 class="date">jul 20</h3>
            <p class="p-sub"><?php $query = "select * from uploads WHERE id_loc='01' and id_sort='01' and sts_use='A'  ";

//echo $query;
$result = mysqli_query($con,$query);
$sno=1;
    if(mysqli_affected_rows($con)!=0){
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){  echo "" .$row['description']."" ; $sno++;
    }
   }?></p>
            <a href="#" class="button discover w-inline-block">
              <div>discover</div>
            </a>
          </div>
        </div>
        <div class="subcard">
          <div class="subcardimage"><?php $query = "select * from uploads WHERE id_loc='01' and id_sort='02' and sts_use='A' ";

//echo $query;
$result = mysqli_query($con,$query);
$sno=1;
    if(mysqli_affected_rows($con)!=0){
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){  echo "<img src='images/".$row['file_name']."' width='250' height='170'>"; $sno++;
    }
   }?> </div>
          <div class="subcardcontent">
            <h3 class="date">jul 20</h3>
            <p class="p-sub"><?php $query = "select * from uploads WHERE id_loc='01' and id_sort='02' and sts_use='A'  ";

//echo $query;
$result = mysqli_query($con,$query);
$sno=1;
    if(mysqli_affected_rows($con)!=0){
          while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){  echo "" .$row['description']."" ; $sno++;
    }
   }?></p>
            <a href="#" class="button discover w-inline-block">
              <div>discover</div>
            </a>
          </div>
        </div>
        <div class="subcard">
          <div class="subcardimage"><img src="images/Interior_02.jpg" loading="lazy" alt="" class="newsimage"></div>
          <div class="subcardcontent">
            <h3 class="date">jul 20</h3>
            <p class="p-sub">RESIDENSI lorem ipsum dolor sit ametmenawarkan kediaman indah dilengkapitaman rekreasi yang menarik serta dilengkapidengan kemudahan. Di tengah persekitaranyang tenan mesra keluarga dan komuniti.</p>
            <a href="#" class="button discover w-inline-block">
              <div>discover</div>
            </a>
          </div>
        </div>
      </div>
      <a href="#" class="button viewmore w-inline-block">
        <div>view more</div>
      </a>
    </div>
  </div>

</body>
</html>
<?php
include 'footer.php';
?>
