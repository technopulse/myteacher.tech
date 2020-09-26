<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>Let's Help - Build A House</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
}
</style>
<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
<style>
.title-w3ls {
	font: 'Merriweather', Helvetica, sans-serif;
	color: #2b2b2b;
	font-size: 23px;
}
</style>
<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
<style>
.fontdescription {
	font: 'Noto Sans';
	color: #000000;
	font-size: 12px;
}
</style>
<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
<style>
.rightbar {
	font: 'Anton';
	color: white;
}
</style>
</head>
<body>
<!-- <img src="WhatsApp Image 2020-09-16 at 11.30.06 AM - Copy.jpeg"> -->
<?php
function getVisIpAddr() { 
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
        return $_SERVER['HTTP_CLIENT_IP']; 
    } 
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
        return $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } 
    else { 
        return $_SERVER['REMOTE_ADDR']; 
    } 
} 
  
// Store the IP address 
$vis_ip = getVisIPAddr(); 
$data = file_get_contents('http://geoplugin.net/json.gp?ip=' . $vis_ip);
$decodedData = json_decode($data);
$countryname = $decodedData->geoplugin_countryName;
?>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    
    
    <!--====== PRINICNG START ======-->

    <section id="pricing" class="">
        <div class="container" style="position: relative;">

            <div class="row justify-content-center">

                <div class="col-lg-12 col-md-12 col-sm-9">
                    
					<div class="pricing-style mt-10" style="background: linear-gradient(#6ed0ff 0%, #6ed0ff 100%);padding: 10px 20px 18px;">

                        <div class="pricing-list" style="margin-top: 0px;">
<table style="width: 100%;" class="title-w3ls">
	<tr> 
		<td>
<div  style=""><b>Let's build a House for</b></div>
<div  style=""><b>someone who <b style="color: #f35854;">helped to</b></b></div>
<div  style=""><b style="color: #f35854;">build our Career</b></div>
		</td>
	</tr>
</table>

<div style="right: 0px;position: absolute;">
	<div style="text-align: right; width: 220px; height: 50px; background-color: #c1d830;border-top-left-radius: 55px;border-bottom-left-radius: 55px; padding-top: 10px; padding-bottom: 55px;padding-right: 10px;"><b style="color: black;">Campaigning</b><br>
	<b style="color: white;"  class="rightbar" >5<sup>th</sup> Sept</b> <b style="font-size: 14px;">to</b> <b style="color: white;"  class="rightbar" >5<sup>th</sup> Oct 2020</b><br>&nbsp;
	</div>
</div>
    
<bR>
<b class="fontdescription" >Dear All</b>

<b>
<br>
<br>
<div class="fontdescription">Abdur Rahman Sir had just began construction of his house before his sudden Demise.</div>
<div class="fontdescription">So Let us</div>
<div class="fontdescription">FULFILL A DREAM</div>
<div class="fontdescription">of Someone who helped us</div>
<div class="fontdescription">Fulfill our Dream</div>					
   </b>                    
   </div>




                    </div> <!-- pricing style one -->
					
<div id="homediv" style="right: 14px;position: absolute; top: 325px;border: 2px solid white;z-index: 1;">
<img src="assets/images/home.jpeg" style="width: 120px; height: 120px;">
</div>
    
					<div id="divbankdetail" class="pricing-style" style="background: linear-gradient(#2e3d5a 0%, #2e3d5a 100%); padding-top: 5px; padding-bottom: 15px;">
					
					


                        <div class="pricing-list" style="color: white;">

<div  style="font-size: 20px;"><b>Bank Details:</b></div><br>
<div style="font-size: 15px;">Account Number : 50100358785121</div>
<div style="font-size: 15px;">IFSC : HDFC0004012</div>
<div style="font-size: 15px;">Account Name : RAMEEZA DAUGHTER OF ABDUL RAHIMAN</div>
<div style="font-size: 15px;">Branch : HDFC DERALAKATTE</div>					
  
			
				
                        </div>

                    </div> <!-- pricing style one -->
					
					
<div class="pricing-style" style="background: linear-gradient(#ffffff 0%, #fdf3f3 100%); padding-top: 5px; padding-bottom: 15px;">

<table style="width: 100%">
	<tr>
		<td>
		<img src="assets/images/bhimupi.jpg" align="left" style="width: 30px;height: 30px;">&nbsp;&nbsp;
		<img src="assets/images/pe.png" align="left" style="width: 30px;height: 30px;">&nbsp;&nbsp;
		<img src="assets/images/gpay.jpg" align="left" style="width: 30px;height: 30px;">
		</td>
		<th style="text-align: right;">
		+91&nbsp;9353573541<br>UPI&nbsp;:&nbsp;9353573541@ybl
		</th>
	</tr>
</table>


</div>
					
<div class="pricing-style" style="background: linear-gradient(#ffffff 0%, #ffffff 100%); padding-top: 5px; padding-bottom: 15px;">

<img src="assets/images/thanks.jpeg" style="width: 50px;height: 50px;" align="middle" >&nbsp; &nbsp;&nbsp;<B style="font-size: 20px;">Thanking in Advance</b>


</div> <!-- pricing style one -->
					
					
					
                </div>
                

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PRINICNG ENDS ======-->
    <br><br><br> <br>

<div class="footer" style="z-index: 5;">
<?php
if($countryname == "India")
{
?>
<p><table style="width: 100%;">
<tr>
<td style=""><a class="btn btn-success" href="upi://pay?pa=9353573541@ybl&pn=RehmanSir&tid=<?php echo rand(); ?>&tr=Donor2000&am=2000&tn=Help to Build a House&cu=INR&url=https://myteacher.tech/success.php&mode=05&orgid=000000"  style="width: 100%;">Donate <br> ₹2000</a></td>
<td><a class="btn btn-info" href="upi://pay?pa=9353573541@ybl&pn=RehmanSir&tid=<?php echo rand(); ?>&tr=Donor5000&am=5000&tn=Help to Build a House&cu=INR&url=https://myteacher.tech/success.php&mode=05&orgid=000000" style="width: 100%;">Donate <br> ₹5000</a></td>
<td><a class="btn btn-success" href="upi://pay?pa=9353573541@ybl&pn=RehmanSir&tid=<?php echo rand(); ?>&tr=Donor10000&am=10000&tn=Help to Build a House&cu=INR&url=https://myteacher.tech/success.php&mode=05&orgid=000000" style="width: 100%;">Donate <br> ₹10000</a></td>
<td><a class="btn btn-info" href="upi://pay?pa=9353573541@ybl&pn=RehmanSir&tid=<?php echo rand(); ?>&tr=AnyAmount&tn=Help to Build a House&cu=INR&url=https://myteacher.tech/success.php&mode=05&orgid=000000" style="width: 100%; ">Any&nbsp;Other<br>Amount</a></td>
</tr>
</table>

</p>
<?php
}
else
{
?><br><br><br><br>
<table style="width: 100%;background-color: black;text-align: left;color: white;" >
<tr><td><b  style="margin-left: 5px;">Bank Details:</b><BR>
<B style="margin-left: 5px;">Account Number :</B> 50100358785121<BR>
<B style="margin-left: 5px;">IFSC :</B> HDFC0004012<BR>
<span style="margin-left: 5px;"><B>Account Name :</B> RAMEEZA DAUGHTER OF ABDUL RAHIMAN<BR></span>
<B style="margin-left: 5px;">Branch :</B> HDFC DERALAKATTE
</td></tr>
</table>
<?php
}
?>
</div>
	
    
    
    <!--====== BACK TOP TOP PART START ======-->

    <?php /* <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a> */ ?>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>
    
    <!--====== Isotope js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>


<script>
    $(document).ready(function() {
            var position = $("#divbankdetail").position();
           // alert("Current position of the box is: (left: " + position.left + ", top: " + position.top + ")");
			$('#homediv').css({top:position.top-50});

    });
</script>
	
<script>
var i = 0;
var txt = 'Lorem ipsum dummy text blabla.';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>

</body>

</html>
