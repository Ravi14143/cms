<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="icon2.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  
<script>  
   $(window).on('load', function () {  
       $(".loadp").fadeOut("slow");  
  });  
</script>   
<title>CERTIFICATE MANAGEMENT SYSTEM</title>

<style>
  * {box-sizing: border-box;}
  body {font-family: Verdana, sans-serif;}
  .mySlides {display: none;}
  img {vertical-align: middle;}
  
  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }
  
  
  /* The dots/bullets/indicators */
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
  .active {
    background-color: #717171;
  }
  
  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }
  
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
  }

body {
  padding: 25px;
  background-color: white;
  color: black;
  font-size: 25px;
}

.dark-mode {
  background-color: black;
  color: white;
}
button{
  border-radius: 100%;
}
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: whitesmoke;
  color: black;
}

.flip-card-back {
  background-color: #ffffff;
  color: rgb(0, 0, 0);
  transform: rotateY(180deg);
}
.btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
	background-size: 200%;
	font-size: 1.2rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	text-transform: uppercase;
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.btn:hover{
	background-position: right;
}

* {
  box-sizing: border-box;
}

.img-container {
  float: left;
  width: 33.33%;
  padding: 5px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.n{
  text-decoration: none;
}
  </style>


</head>
<body>
  <img src="pscmr.jpg" style="width: 100%;">
<div class="loadp">  
   <img src="load.gif" alt="">  
</div>
  <div class="csm"><img src="title.gif" height="10%" width="100%"></div>
  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="1.gif" style="width:100%">
      
    </div>
    
    <div class="mySlides fade">
      <img src="2.gif" style="width:100%">
     
    </div>
    
    <div class="mySlides fade">
      <img src="3.gif" style="width:100%">
      
    </div>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
<div>
  <div class="clearfix">
    <div class="img-container">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="student.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1 style="font-family: Serif;">Student</h1> 
      <p style="font-family: Serif;">To Maintain Your Certificate Collection<br>login to your account</p>
      <a class="n" href="login1.php"><button type="button" class="btn">login</button></a>
    </div>
  </div>
</div>
</div>
<div class="img-container">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="teacher.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1 style="font-family: Serif;">Faculty</h1> 
      <p style="font-family: Serif;">To Maintain your Certificate Collection<br>login to your account</p>
      <a class="n" href="login2.php"><button type="button" class="btn">login</button></a>
    </div>
  </div>
</div>
</div>
<div class="img-container">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="admin.svg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h1 style="font-family: Serif;">Admin</h1> 
      <p style="font-family: Serif;">To Maintain Your Certificate Collection<br>login to your account</p>
      <a class="n" href="login3.php"><button type="button" class="btn">login</button></a>
    </div>
  </div>
</div>
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
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }

  </script>

  
</body>

</html>