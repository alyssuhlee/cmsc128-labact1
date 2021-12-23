<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../login/reviews.css">
  <title>KCE</title>
</head>
<body>

  <header>
    <div class="container">
      <div class="nav">
        <h1><i style="color: #c2ff3d;" class="fas fa-sticky-note"></i> Reviews </h1>
        <div>
          <button onclick="createNote()">Hide/Show "Write Review" </button>
          <button onclick="deleteNotes()">Delete reviews </button>
          <a href="../login/homepage.php"><button>Return to Homepage</button></a>
          <a href="../login/logout.php"><button>Log Out</button></a>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="createBox">
      <textarea placeholder="Write review..." id="user-input" maxlength="100"></textarea>
    </div>
    <div class="notes"></div>
  </div>
  
  <script src="../login/reviews.js"></script>
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