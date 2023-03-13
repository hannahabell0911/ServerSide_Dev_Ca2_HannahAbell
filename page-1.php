<?php
$host = "localhost";
$username = "D00249620";
$password = "dyPSnVPj";
$database = "D00249620";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Now you can execute queries using the $conn variable
$sql = "SELECT * FROM fashion";
$result = mysqli_query($conn, $sql);


// Get products
$sql = "SELECT * FROM fashion";
$result = mysqli_query($conn, $sql);


header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
?>



<?php include 'includes/header.php';?>
<link href="css/mystyle.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
<body>
<script src="js/bootstrap.bundle.min.js"></script>

  
<div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext">1 / 3</div>
  <img   src="images/long.jpg.crdownload" style="width:100%">
  <div class="golden">Golden</div>
</div>

<div class="mySlides">
  <div class="numbertext">2 / 3</div>
  <img src="images/long2.png" style="width:100%">
  <div class="golden">Golden</div>
</div>

<div class="mySlides">
  <div class="numbertext">3 / 3</div>
  <img src="images/long3.png" style="width:100%">
  <div class="golden">Golden</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

    <main >
    
    <div class="wrapper">  
<?php 
while($fashion = mysqli_fetch_assoc($result)) {
  echo '<div class="card">';
  echo '<div class="product-img">
  <img src="'.$fashion['image_url'].'"height="220" width="290" alt="'.$fashion['fashionCode'].'">';
  echo '</div>';
  echo '<h1><b class ="product-name">'.$fashion['fashionName'].'</b></h1>';
  echo '<p class= "product-description">'.$fashion['fashionDescription'].'</p>';
 echo '<div class="product-price-btn">';
 echo ' <span>$'.$fashion['fashionPrice'].'</span>' ;
 echo '<button type="button">buy now</button>';
  echo '</div>';
  echo '</div>';
}
?>
    </div>
    
    </div>
    
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>

</main>
    
</body>

</html>
<?php include 'includes/footer.php';?>