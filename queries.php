<!DOCTYPE html>
<html>
	<head>
		<title>Queries Section</title>
		<link rel="stylesheet" href="query.css">
	</head>
	<body>
        <div class="log-out-btn">
    <a href="logout.php"><button>Log Out</button></a>
</div>
		<h1>Queries</h1>
		<div class="form">
		<form action="queries2.php" method="post">
			<div class="fill-up-box">
			<label>Name</label><input type="text" name="name" ><br>
            <label>Email</label><input type="email" name="email" ><br>
            <label>Phone</label><input type="text" name="phone" ><br>
            <label>Inquiry<span></span><textarea type="text" name="inquiry"></textarea></label>
            <label><span> </span><input type="submit" name="submit" value="Submit" /></label>
        </div>
		</form>
	</div>
	<section class="image">
		<div class="pic"><img src="do-you-have-queries.jpg"></div>
    </section>
    <div class="return">
        <a href="../login/homepage.php"><button>Return to Homepage</button></a>
    </div>

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