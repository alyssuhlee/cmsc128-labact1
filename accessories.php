<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title> KCE </title>
	<link rel="stylesheet" href="../login/accessory.css">
</head>
<body>
	<div class="log-out-btn">
	<a href="logout.php"><button>Log Out</button></a>
</div>
	<div id="rectangle">Kontra Covid Essentials</div>
	<br>
<section class="imgs">
	<div class="icon1"><img src="../login/kce-logo.png"></div>
</section>
	<!-- Contains the navigation bar -->
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

<section class="content">
	<div class="title"> <h1> Accessories </h1> </div>
    <div class="mscm">
		<a href="#"><img src="../login/mscm1.jpg" alt="Mask Sterilizer Coating Machine" width="370px" height="260px"></a>
		<a href="#"><img src="../login/mscm2.jpg" alt="Mask Sterilizer Coating Machine" width="430px" height="260px"></a>
					<h2> Mask Sterilizer Coating Machine </h2>
				</div>
			</div>
    <div class="its">
		<a href="#"><img src="../login/its1.jpg" alt="Infrared Thermal Scanner" width="370px" height="260px"></a>
		<a href="#"><img src="../login/its2.jpg" alt="Mask Sterilizer Coating Machine" width="430px" height="260px"></a>
        <a href="#"><img src="../login/its3.jpg" alt="Mask Sterilizer Coating Machine" width="430px" height="260px"></a>
					<h3> Infrared Thermal Scanner </h3>
				</div>
			</div>

     <div class="atomizer-kc">
        <a href="#"><img src="../login/atomizer-kc.jpg" alt="Atomizer keychain" width="370px" height="260px"></a>
                    <h4> Atomizer keychain </h4>
                </div>
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