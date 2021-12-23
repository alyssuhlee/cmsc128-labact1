<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title> KCE </title>
	<link rel="stylesheet" href="prod.css">
</head>
<body>
<div class="log-out-btn">
	<a href="logout.php"><button>Log Out</button></a>
</div>
	<div id="rectangle">Kontra Covid Essentials</div>
	<br>
<section class="images">
	<div class="icon1"><img src="../login/kce-logo.png"></div>
</section>
	<header>
		<br>
		<a href="../login/products.php"><button>Products</button></a>
	</br>
	<br>
	<br>
	<a href="../login/reviews.php"><button>Reviews</button></a>
	</br>
	<br>
	<br>
	<a href="../login/about.php"><button>About</button></a>
	</br>
<br>
	<br>
	<a href="../login/queries.php"><button>Queries</button></a>
	</br>
		</header>

<div class="rcorner"></div>

<section class="prod">
	<div class="grid-ctnr1">
		<a href="../login/ppes.php"><div class="ppes"></div></a>
		<a href="../login/disinfectants.php"><div class="disinfectants"></div></a>
	</div>
	<div class="grid-ctnr2">
		<a href="../login/accessories.php"><div class="accessories"></div></a>
	</div>
</section>
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