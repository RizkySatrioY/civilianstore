<?php
session_start();
if($_SESSION['status_login'] != true){
    echo '<script>window.location="halamanutama.php"</script>';
}
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civilian</title>
    <link rel="icon" href="images/civilian.jpg">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/civilian.jpg" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#store">Civil Store</a>
        <a href="#products">Product Review</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- Notification -->

    <!DOCTYPE html>
<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="icons">
        
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:30px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:15px;"></span></a>
      <ul class="dropdown-menu"></ul>
        <div class="fas fa-bars" id="menu-btn"></div><br><br><br>
        <a href="logoutuser.php">Logout</a>
    </div>
</header>


<script>
$(document).ready(function(){
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.dropdown-menu').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
  }
 });
}
load_unseen_notification();
// submit form and get new records
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 if($('#subject').val() != '' && $('#comment').val() != '')
 {
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#comment_form')[0].reset();
    load_unseen_notification();
   }
  });
 }
 else
 {
  alert("Both Fields are Required");
 }
});
// load new notifications
$(document).on('click', '.dropdown-toggle', function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);
});
</script>

<!-- header Notification ends -->

<!-- home section starts  -->
<section class="home" id="home">

    <div class="content">
    <h1 class="heading">Selamat Datang <span><br><?php echo $_SESSION['u_global']->username_user?></span> </h1>
    <h2 class="heading"><span></span>di Website Civilian</h2>
    </div>
</section>
<!-- home section ends -->

<!-- menu section starts  -->

<!-- menu section ends -->

<section class="review" id="store">

    <h1 class="heading"> Civil <span>Store</span> </h1>

    <div class="box-container">

<div class="box">
        <div class="icons">
        </div>
        <?php
            $produk = mysqli_query($conn,"SELECT * FROM tb_product ORDER BY product_id DESC
            LIMIT 8");
            if(mysqli_num_rows($produk)> 0){
                while($p = mysqli_fetch_array($produk)){
            ?>
       
        <div class="image">
        <a href="barang/<?php echo $p['product_gambar'] ?>"><img src="barang/<?php echo $p['product_gambar'] ?>" width="270px" alt=""></a> 
        </div>
        <?php }} else{ ?>
            <h3 class="heading"> Produk Tidak Ada <span></span> </h3>
                <?php } ?>
</div>
</div>
<a href="civil.php" class="btn">Ke Civil Store</a>
<a href="rating.php" class="btn">Rating</a>

</section>
   
<!-- review section starts  -->

<section class="products" id="products">

    <h1 class="heading"> Product <span>Review</span> </h1>

    <!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

  <script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </head>
 <body>
       <div id="display_comment"></div>
  </div>
 </body>
</html>
<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });
load_comment();
function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }
$(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>

    
<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.7504225921234!2d112.59705071415583!3d-7.921117081051297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78818acde6ede7%3A0x454fbeffd5b85aab!2sGKB%203%20-%20Fakultas%20Teknik!5e0!3m2!1sen!2sid!4v1674696203716!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <form action="">
            <h3>Kontak Informasi</h3>
            <div class="inputBox">
                <span class=""></span>
                <h2 style="color:#ffffff;">Civilian UMM</h2>
            </div>
            <div class="inputBox">
                <span class=""></span>
                <h2 style="color:#ffffff;">Email    : civilianumm@gmail.com</h2>
            </div>
            <div class="inputBox">
                <span class=""></span>
                <h2 style="color:#ffffff;">No Telp  : 081230530792</h2>
            </div>

        </form>

    </div>

</section>

<!-- contact section ends -->


<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="https://www.instagram.com/civilianengineer_umm/" class="fab fa-instagram"></a>
        <a href="https://wa.me/6281230530792/" class="fab fa-whatsapp"></a>
        
    </div>

    <div class="links">
        <a href="#home">Home</a>
        <a href="#store">Civil Store</a>
        <a href="#products">Product Review</a>
        <a href="#contact">Contact</a>
        <a href="login.php">Login Admin</a>
    </div>

    <div class="credit">Copyright &copy<span>Civilian UMM</span> | All Rights Reserved</div>

</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>