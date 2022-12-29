<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Welcome - Woltz | Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	

			<meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" 
            rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" type="text/css" href="welcome.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/inlogachtergrond.webp);">


<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="index.htm">Home</a>
    <a href="products.html">Products</a>
    <a href="#">About</a>
    <a href="#">Account</a>
    <a href="login.php">Login</a>
  </div>
</div>

    <div class="header2">
    <div class="container_">
        <div class="navbar">
                <div class="logo">
                        <img src="images/woltz-logo3.png" width="125px" class="myImg" alt="This is a WoltzStore website created by Max Woltz. &#169; Copyright all rights reserved.">
                </div>
                <nav>
                    <ul id="MenuItems" class="nav-color">
                        <li><a href="index.htm">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Account</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li class="silas">

                        <div class="wrapper">
<form action="/action_page.php">
  <div class="searchBar">
    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
      </svg>
    </button>
  </div>
</div>  
</form>

                        </li>

                            <li class="none">
<div class="fixed">
<div class="bottomMenu" style="display: block;"><img src="images/menu2.png" onclick="openNav()"></div>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
  $('.bottomMenu').fadeOut();
}
function closeNav() {
  document.getElementById("myNav").style.height = "0%";
  $('.bottomMenu').fadeIn();
}

</script>

<script type="text/javascript">
    $('.bottomMenu').hide();
        $(document).scroll(function() {
  var y = $(this).scrollTop();
  var h = window.innerHeight;
  if (y > h) {
    $('.bottomMenu').show();
  } else {
    $('.bottomMenu').hide();
  }
});
    </script>

</div>
                        </li>
                        </ul>
                </nav>
                <img src="images/cart-2.png" width="50px" class="carel">
                <img src="images/menu2.png" class="menu-icon" onclick="menutoggle()">
        </div>
                
    </div>
 </div>


 <div id="myModal" class="modal2">
  <span class="sluit">&times;</span>
  <img class="modal2-content" id="img01">
  <div id="caption"></div>
</div>


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">
                        Hey, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welkom op mijn website.</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">

			
	            <div class="form-group">
	            	<a href="index.htm"><button class="form-control btn btn-primary submit px-3">Continue Browsing</button></a>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Want to change your password? &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="reset-password.php" class="px-2 py-2 mr-md-1 rounded reset"><span class="ion-logo-facebook mr-2"></span>Reset Password</a>
	          </div>
               <p class="w-100 text-center">&mdash; Want to logout? &mdash;</p>
                <div class="social d-flex text-center">
                <a href="logout.php" class="px-2 py-2 mr-md-1 rounded logout"><span class="ion-logo-facebook mr-2"></span>Log Out</a>
              </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
	(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$(".toggle-password").click(function() {

	  $(this).toggleClass("fa-eye fa-eye-slash");
	  var input = $($(this).attr("toggle"));
	  if (input.attr("type") == "password") {
	    input.attr("type", "text");
	  } else {
	    input.attr("type", "password");
	  }
	});

})(jQuery);</script>
<!---------- js for toggle menu --------->
    <script type="text/javascript">
        var MenuItems = document.getElementById("MenuItems")

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "330px";
            }
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

<script>
var modal2 = document.getElementById('myModal');

var img = document.getElementsByClassName('myImg');
var modal2Img = document.getElementById("img01");
var captionText = document.getElementById("caption");

var showModal = function(){
    modal2.style.display = "block";
    modal2Img.src = this.src;
    captionText.innerHTML = this.alt;
}

for (var i = 0; i < img.length; i++) {
    img[i].addEventListener('click', showModal);
}

var span = document.getElementsByClassName("sluit")[0];

span.onclick = function() { 
    modal2.style.display = "none";
}
</script>

	</body>
</html>