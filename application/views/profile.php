<html lang="en" manifest="cache.appcache">

<head>
    <base href="<?php echo base_url();?>"></base>

    <meta charset="utf-8">
    <title>APOGEE 2016| LinkIt</title>
    <link href="style/jquery.countdown.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="meta/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="keywords" content="HTML,CSS,Javascript,Make your own 2048,Play 2048">
    <meta name="google-signin-client_id" content="738693532334-c4to4fjjbg6gpaf9hq93aimrkoa37eg6.apps.googleusercontent.com">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta name="format-detection" content="telephone=no" />
    <meta property="og:title" content="2048 game" />
    <meta property="og:site_name" content="2048 game" />
    <meta property="og:description" content="A poetic form of '2048' which shall give you some words at the end to create a masterpiece!" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/autosize.min.js"></script>
    <!-- //js -->
    <link href='fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body style="background-color: rgb(238, 223, 173) ! important;">
    <!-- banner-body -->
    <div class="banner-body">
        <div class="container">
            <div class="banner-body-content">
                <div class="welcome pull-right" style="position: relative; bottom: 5vh;">
<?php
$this->load->library('session');
if ($this->session->userdata('logged_in')) {
	echo '<p>Welcome '.$this->session->userdata('name').'</p>';
	echo '<p>'.$this->session->userdata('email').'</p>';
	echo '<img src="'.$this->session->userdata('imageUrl').'" alt="">';
} else {
	$this->load->view('index');
}
?>
</div>
                <br>
               <a href="index.php/welcome/logout" class="pull-right" style="position: relative; right: -20vh;">Sign out</a>
               <br>
               <div class="col-xs-3 banner-body-left">
                <div class="logo">
                    <h1><a href="index.php/welcome/index">Link <span>It</span></a></h1>
                </div>
                <div class="top-nav">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                            <nav class="stroke">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php/welcome/index"><i class="home"></i>Home</a></li>
                                    <li><a href="index.php/welcome/play" class="hvr-underline-from-left"><i class="picture1"></i>Play</a></li>
                                    <li class="active"><a href="index.php/welcome/profile" class="hvr-underline-from-left"><i class="text-size1"></i>Profile</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
            <div class="col-xs-9 banner-body-right">
                <div class="wmuSlider example1">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="banner">
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="banner1">
                                </div>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <div class="banner2">
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <script src="js/jquery.wmuSlider.js"></script>
                <script>
                    $('.example1').wmuSlider();
                </script>
            </div>
            <div class="clearfix"> </div>
            <center>
                <h2 id="writeHead">Here are your poem(s).</h2>
            </center>
            <br>
            <!-- </span> -->
            <div class="row">
<?php
$i = 1;
foreach ($poems as $name) {
	?>
																                   <div class="col-xs-6">
																                      <!-- <button id="margin" type="button" data-toggle="modal" data-target="#myModal<?php echo $i;?>"> -->

					<!-- <button id="margin" type="button" > -->
																                          <textarea placeholder="Your words" id="poems" name="poems" rows="4" style="overflow: hidden; word-wrap: break-word; height: auto; " disabled>
	<?php echo $name['title'];?>
																                           <?php echo $name['poem'];?>
																                       </textarea>
																                   <!-- </button> -->
																               </div>
																               <div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
																                <div class="modal-dialog">

																                  <!-- Modal content-->
																                  <div class="modal-content">
																                    <div class="modal-header">
																                      <button type="button" class="close" data-dismiss="modal">&times;</button>
																                      <center>
																                          <h4 class="modal-title"><?php echo $name['title'];?></h4>
																                      </center>
																                  </div>
																                  <div class="modal-body">
																                    <p style="overflow: hidden; word-wrap: break-word; height: auto; "><?php echo $name['poem'];
	?></p>
																                   </div>
																                   <div class="modal-footer">
																                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																                  </div>
																              </div>

																          </div>
																      </div>
	<?php
	$i++;
}
?>
</div>
<div class="clearfix"> </div>
<div class="footer">
    <div class="footer-left">
        <span><b>E-mail Us at:</b><br></span>
        <a href="mailto:poetryclub.bits@gmail.com" class="link1"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>poetryclub.bits@gmail.com</a>
    </div>
    <div class="footer-right">
        <a href="https://www.facebook.com/bitspoetry/?fref=ts" title=""><img src="images/poetrylogo.png" alt=""></a>
    </div>
    <div class="clearfix"> </div>
</div>
</div>
</div>
</div>
<!-- //banner-body -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script>
    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function() {
            console.log('User signed out.');
        });

    }
    autosize(document.querySelectorAll('textarea'));
</script>
</body>

</html>
