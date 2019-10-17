<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fitness & Bodybuilding</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
<style>
#navbar{	
	bottom:30px;
	
}

#navfont{
	font-size: 20px;
	font-family: "Franklin Gothic Heavy";
}
.article{
	font-size:12px;
	font-family: Verdana, Geneva, sans-serif;
	margin-top: -5px;
}
.title{
	font-size:18px;
	font-family:"Lato Heavy";
}
#box{
   margin-top:100px;
   margin-bottom:100px;
}
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-10 {    
    width: 10%;
    margin-top: 6px;
	margin-left: 20px;
}

.col-50 {
    width: 50%;
    margin-top: 6px;
	
}

.col-30{
	width: 20%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.error {
	color: #FF0000;
}

.col-sm-4{
	left:0%;
	padding:0px;
}
	

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-10, .col-50, .col-30, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>

<body>
<!-- Navbar -->
<div class="w3-container w3-black">
<div class="container w3-black" id="navbar">
  
  <div class="w3-bar w3-black w3-card w3-center" id="navfont">
   <img class="w3-bar-item" src="img/logo.png" style="width:70px;height:60px;">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
   
    <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-center">HOME</a>
    <a href="index.html#news" style="transition: all 0.2s linear;" id="newslink" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-center">NEWS</a>
    <a href="index.html#lifetitle" style="transition: all 1s linear;" id="lifestyle" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-center">LIFESTYLE</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button w3-center" title="Workouts">WORKOUTS <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="exercises.html" class="w3-bar-item w3-button">Exercises</a>
        <a href="musclegroups.html" class="w3-bar-item w3-button">Muscle Groups</a>
        <a href="crossfit.html" class="w3-bar-item w3-button">Crossfit</a>
        <a href="cycling.html" class="w3-bar-item w3-button">Cycling</a>
      </div>
    </div>
    <a href="about.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-center">ABOUT</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-center">CONTACT</a>
    
  
  </div>
</div>


<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
   <a href="#news" class="w3-bar-item w3-button w3-padding-large">NEWS</a>
   <a href="#lifetitle" class="w3-bar-item w3-button w3-padding-large">LIFESTYLE</a>
   <a href="workouts.html" class="w3-bar-item w3-button w3-padding-large">WORKOUTS</a>
   <a href="about.html" class="w3-bar-item w3-button w3-padding-large">ABOUT</a>
   <a href="contact.php" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
</div>

 <header class="w3-display-container w3-content w3-wide" style="max-width:2500px;max-height:844px;">
  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
  <img src="img/banner.jpg" style="width:100%;height:auto;max-width:2500px;max-height:844px;opacity:0.8;">
    <div class="w3-display-middle w3-container w3-text-white w3-padding-32 w3-hide-small">
       <h2 style="font-family: 'Franklin Gothic Heavy'">FIND YOUR </h2>
       <h2 style="font-family: 'Franklin Gothic Heavy'">MORE INTO </h2>
       <h2 style="font-family: 'Franklin Gothic Heavy'">HEALTH & FITNESS</h2>
       <br>
      <p class="w3-text-deep-orange"><b>Discover how to create yourself, train better, to stay motivated and feel great.</b></p>   
    </div>
  </div>
   <div class="mySlides w3-display-container w3-center">
   <img src="img/banner2.jpg" style="width:100%;height:auto;max-width:2500px;max-height:844px;opacity:0.8;">
     <div class="w3-display-middle w3-container w3-text-white w3-padding-32 w3-hide-small">
       <h2 style="font-family: 'Franklin Gothic Heavy'">WORKOUT</h2>
       <h2 style="font-family: 'Franklin Gothic Heavy'">ANYWHERE </h2>
       <h2 style="font-family: 'Franklin Gothic Heavy'">ANYTIME</h2>
       <br>
      <p class="w3-text-lime"><b>Stay motivated, determined, and always push to the limit</b></p>   
     </div>
   </div>
   <div class="mySlides w3-display-container w3-center">
   <img src="img/banner3.jpg" style="width:100%;height:auto;max-width:2500px;max-height:844px;opacity:0.8;">
     <div class="w3-display-middle w3-container w3-text-white w3-padding-32 w3-hide-small">
       <h2 style="font-family: 'Franklin Gothic Heavy'" class="w3-text-amber">YOU'VE GOT </h2>
       <h2 style="font-family: 'Franklin Gothic Heavy'"><span class="w3-text-amber">THE</span> POWER </h2>
      
       <br>
      <p><b>Make your dreams a reality</b></p>   
     </div>
   </div>
  </header>
 
</div> <!-- end of container -->

<?php
   
   $conn = new mysqli("localhost", "id5518227_geoakr", "Dikefalos04", "id5518227_fitnessdb");
   
   if ($conn->connect_error){
      die("Connection failed: " .$conn->connect_error);
   }	
	
	$name_err = $surname_err = $email_err = $comment_err = "";
	$name = $surname = $email = $comment = "";
	$message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
	if (isset($_POST['name']) AND isset($_POST['surname']) AND isset($_POST['email']) AND isset($_POST['comment'])){
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if (empty($_POST["name"])) {
		   $name_err="Name is required";
	   }
	   else{
		   $name = $_POST["name"];
		    // check name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			$name_err = "Only letters and white space allowed";
			}
	   }
	   
	   if (empty($_POST["surname"])){
		   $surname_err = "Surname is required";
	   }
	   else{
		   $surmame = $_POST["surname"];
		   // check surname only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
			$surname_err = "Only letters and white space allowed";
			}
	   }
	   
	   if (empty($_POST["email"])){
		   $email_err = "Email is required";
	   }
	   else{
		   $email = $_POST["email"];
		   // check if e-mail address syntax is valid or not
			if (!preg_match($email_exp,$email)) {
			$email_err = "Invalid email format";
			}
	   }
	   
	   if (empty($_POST["comment"])){
		   $comment_err = "Please write your comment";
	   }
	   else{
		   $comment = $_POST["comment"];
	   }
	   
	}
	
	
	$sql = "INSERT INTO Comments (Name, Surname, Email, Comment) VALUES ('$name', '$surname', '$email', '$comment')";	
	
	
	if (isset($_POST['submit'])){
	

        $message="Your message has been sent successfully. We appreciate your comments.";
	 }
     
	  if ($conn->query($sql) === FALSE ){
		  
		  $message = "Error";
	  }
   }
     $conn -> close();

	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

?>

<div class="container" style="margin-top:60px;" id="con1">
	<h1 class="w3-wide w3-center">CONTACT</h1>
    <p class="w3-opacity w3-center"><i>Liked my work? Just drop a note!</i></p>
       
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	<div class="row">
      <div class="col-sm-1">
        <label for="fname"><b>Name</b></label>
      </div>
      <div class="col-sm-6">
        <input type="text" id="fname" name="name" placeholder="Your name..">
      </div>
      <div class="col-sm-4">
      <span class="error">* <?php echo $name_err?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-1">
        <label for="lname"><b>Surname</b></label>
      </div>
      <div class="col-sm-6">
        <input type="text" id="sname" name="surname" placeholder="Your surname..">
      </div>
      <div class="col-sm-4">
      <span class="error">* <?php echo $surname_err?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-1">
        <label for="country"><b>Email</b></label>
      </div>
      <div class="col-sm-6">
        <input type="text" id="email" name="email" placeholder="Your email..">
      </div>
      <div class="col-sm-4">
      <span class="error">* <?php echo $email_err?></span>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-1">
        <label for="subject"><b>Comment</b></label>
      </div>
      <div class="col-sm-6">
        <textarea id="comment" name="comment" placeholder="Write something.." style="height:300px" value="<?php echo isset($_POST["comment"]) ? $_POST["comment"] : ''; ?>"></textarea>
      </div>
      <div class="col-sm-4">
      <span class="error">* <?php echo $comment_err?></span>
      </div>
    </div>
    <div class="row">
       <div class="col-sm-1">
       </div>
        <div class="col-sm-6 submit">
      <input type="submit" name="submit" style="margin-top:30px;width:130px;font-size:20px;font-family: Ebrima" value="SEND">
      <span><?php echo $message?></span>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
</form>

    
    </div> <!-- end of row -->

</div> <!-- end of container -->



<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-blue-grey w3-xlarge" style="width:100%;height:450px;">
   <div class="w3-content w3-padding-64">
   <h3>Powered by George Akritidis</h3>
    <a target="_blank" href="https://www.facebook.com/george.akritidis.79">
    <i id="gl" class="fa fa-facebook-official" style="font-size:36px;" data-toggle="tooltip" title="Facebook"></i>
    </a>
    <a href="https://twitter.com/geoakr84" target="_blank">
    <i id="gl" class="fa fa-twitter-square" style="font-size:36px" data-toggle="tooltip" title="Twitter"></i>
    </a>
    <a  href="https://www.instagram.com/geoakr84/" target="_blank">
    <i id="gl" class="fa fa-instagram" style="font-size:36px" data-toggle="tooltip" title="Instagram"></i>
    </a>
    <a href="https://www.flickr.com/photos/145257136@N06/" target="_blank">
      <i id="gl" class="fa fa-flickr" style="font-size:36px" data-toggle="tooltip" title="Flickr"></i>
    </a>
    <i id="gl" class="fa fa-skype" style="font-size:36px;color:#3377ff" data-toggle="modal" data-target="#myModal" onmouseover="this.style.cursor='pointer'"></i>
    </div> <!-- end of w3-content -->
</footer>

<!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title">Skype Personal Info</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>         
        </div>
        <div class="modal-body">
          <p>If you want to communicate through skype, my username is <b>geoakr84</b>.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div> <!-- end of modal -->

<script>
window.onscroll = function() {toggleFunction()};

function toggleFunction(){
	var navbar = document.getElementById("navfont");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
	
	
}

// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 6000);    
}

</script>
</body>
</html>
