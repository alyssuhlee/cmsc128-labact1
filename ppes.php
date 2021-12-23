<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title> KCE </title>
	<link rel="stylesheet" href="../login/ppe.css">
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
	<div class="title"> <h1> PPEs </h1> </div>
    <div class="face-masks-1">
		<a href="#"><img src="../login/face-masks-1.jpg" alt="3 ply disposable protective face masks (available in assorted colors)" width="370px" height="260px"></a>
		<a href="#"><img src="../login/face-masks-2.jpg" alt="3 ply disposable protective face masks (available in assorted colors)" width="430px" height="260px"></a>
        <a href="#"><img src="../login/face-masks-3.jpg" alt="3 ply disposable protective face masks (available in assorted colors)" width="430px" height="260px"></a>
					<h2> 3 ply disposable protective face masks (available in assorted colors) </h2>
				</div>
			</div>
    <div class="face-masks-2">
        <a href="#"><img src="../login/face-masks-4.jpg" alt="3 ply disposable protective face masks" width="370px" height="260px"></a>
        <a href="#"><img src="../login/face-masks-5.jpg" alt="3 ply disposable printed protective face masks for kids" width="370px" height="260px"></a>
                    <h3> 3 ply disposable protective face masks </h3>
                </div>
            </div>
    
    <div class="face-masks-3">
        <a href="#"><img src="../login/face-masks-6.jpg" alt="3 ply disposable printed protective face masks for kids" width="370px" height="260px"></a>
        <a href="#"><img src="../login/face-masks-7.jpg" alt="3 ply disposable printed protective face masks for kids" width="370px" height="260px"></a>
                    <h4> 3 ply disposable printed protective face masks for kids </h4>
                </div>
            </div>

    <div class="coppermask">
        <a href="#"><img src="../login/coppermask.jpg" alt="Coppermask (Anti-microbial face mask)" width="370px" height="260px"></a>
        <h5> Coppermask (Anti-microbial face mask) </h5>
    </div>

    <div class="kn95">
        <a href="#"><img src="../login/kn95-protective-mask-1.jpg" alt="KN95 Protective Mask" width="370px" height="260px"></a>
        <a href="#"><img src="../login/kn95-protective-mask-2.jpg" alt="KN95 Protective Mask" width="370px" height="260px"></a>
        <h5> KN95 Protective Mask </h5>
    </div>

    <div class="neoprene">
        <a href="#"><img src="../login/neoprene-face-mask.png" alt="Neoprene Face Mask with pocket" width="370px" height="260px"></a>
        <h5> Neoprene Face Mask with pocket </h5>
    </div>

    <div class="transparentfaceshield">
        <a href="#"><img src="../login/tfs1.png" alt="Transparent Face Shield" width="370px" height="260px"></a>
        <a href="#"><img src="../login/tfs2.png" alt="Transparent Face Shield" width="370px" height="260px"></a>
        <a href="#"><img src="../login/tfs3.png" alt="Transparent Face Shield" width="370px" height="260px"></a>
        <h6> Transparent Face Shield </h6>
    </div>

    <div class="tfs4kids">
        <a href="#"><img src="../login/tfs4kids.png" alt="Transparent Face Shield for kids" width="370px" height="440px"></a>
        <h7> <br><br> Transparent Face Shield for kids </h7>
    </div>

    <div class="hengdeeyeshield">
        <a href="#"><img src="../login/hengdeeyeshield1.png" alt="Heng De Eye Shield" width="370px" height="370px"></a>
        <a href="#"><img src="../login/hengdeeyeshield2.png" alt="Heng De Eye Shield" width="370px" height="370px"></a>
        <a href="#"><img src="../login/hengdeeyeshield3.png" alt="Heng De Eye Shield" width="370px" height="370px"></a>
        <h8> <br><br> Heng De Eye Shield <br> (available in different colors) </h8>
    </div>

    <div class="ppesuit">
        <a href="#"><img src="../login/ppe-suit1.jpg" alt="Hospital Grade PPE Suit" width="370px" height="260px"></a>
        <a href="#"><img src="../login/ppe-suit2.png" alt="Hospital Grade PPE Suit" width="370px" height="260px"></a>
        <h9> <br>Hospital Grade PPE Suit </h9>
    </div>

    <div class="vinylexamglove">
        <a href="#"><img src="../login/vinylexamglove.jpg" alt="Vinyl Exam Glove" width="370px" height="260px"></a>
        <h10><br><br> Vinyl Exam Glove </h10>
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