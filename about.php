<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title> KCE </title>
	<link rel="stylesheet" href="../login/about.css">
</head>
<div class="about-section">
    <h1>About Us Page</h1>
    <p>This page contains information about the website and about the owner.</p>
    <a href="../login/homepage.php"><button>Return to Homepage</button></a>
    <a href="../login/logout.php"><button>Log Out</button></a>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <div class="container">
          <h2>About the website</h2>
          <p>Kontra Covid Essentials is a website that showcases what we sell which are anti-COVID essentials such as PPEs, disinfectants, and accessories. The location where you can buy these products is 74 Iznart Street Iloilo City, Philippines. It is beside both BDO and Metrobank. </p>
          <p>335-10-45</p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="../login/alyssa-pic.png" alt="Alyssa's picture" style="width:100%">
        <div class="container">
          <h2>Alyssa Alexandra Lee</h2>
          <p class="title">Owner</p>
          <p>She is a 2nd year student from the University of the Philippines Visayas who enjoys selling stuff. When the COVID pandemic peaked in the PH, she thought of selling products that might help other people. Behold, Kontra COVID Essentials!</p>
          <p>09204103487</p>
        </div>
      </div>
    </div>
  </div>
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