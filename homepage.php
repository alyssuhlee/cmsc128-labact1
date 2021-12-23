<?php session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title> KCE </title>
	<link rel="stylesheet" href="homepage.css">
</head>
<body>
<div class="log-out-btn">
	<a href="logout.php"><button>Log Out</button></a>
</div>
	<div id="rectangle"> Kontra Covid Essentials </div>
	<br>
<section class="images">
	<div class="icon1"><img src="kce-logo.png"></div>
</section>
	<header>
		<br>
		<a href="products.php"><button>Products</button></a>
	</br>
	<br>
	<br>
	<a href="reviews.php"><button>Reviews</button></a>
	</br>
	<br>
	<br>
	<a href="about.php"><button>About</button></a>
	</br>
<br>
	<br>
	<a href="queries.php"><button>Queries</button></a>
	</br>
		</header>

<div class="icon2"><img src="homepage_bg.jpg"></div>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    var idleTime = 0;
    $(document).ready(function () {
        // Increment the idle time counter every second.
        var idleInterval = setInterval(timerIncrement, 1000); // 1 seconds

        // Zero the idle timer on mouse movement.
        $(this).mousemove(function (e) {
        	// console.log("Mouse moved");
            idleTime = 0;
        });
        $(this).keypress(function (e) {
        	// console.log("Key pressed");
            idleTime = 0;
        });
    });

    function timerIncrement() {
        idleTime = idleTime + 1;
        console.log(idleTime);
        if (idleTime > 300) { // 5 minutes
            window.location.href = "logout.php";
        }
    }
</script>
</html>