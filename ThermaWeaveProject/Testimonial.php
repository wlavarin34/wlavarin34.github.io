<?php
include("db.php");
?>
<!doctype html>
<!--
Created using JS Bin
http://jsbin.com

Copyright (c) 2018 by wlavarin34 (http://jsbin.com/netotib/1/edit)

Released under the MIT license: http://jsbin.mit-license.org
-->
<meta name="robots" content="noindex">
<!--
Created using JS Bin
http://jsbin.com

Copyright (c) 2018 by wlavarin34 (http://jsbin.com/pazeseg/4/edit)

Released under the MIT license: http://jsbin.mit-license.org
-->
<meta name="robots" content="noindex">
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
<!--
Created using JS Bin
http://jsbin.com

Copyright (c) 2018 by wlavarin34 (http://jsbin.com/goyokug/3/edit)

Released under the MIT license: http://jsbin.mit-license.org
-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!---- Social Media Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>ThermaWeave - Contacts</title>
 
<style id="jsbin-css">
  textarea{
  border:2px solid white;
  box-shadow:0px 0px 3px 3px;
  border-radius:7px;
}

input{
  border:2px solid white;
  box-shadow:0px 0px 3px 3px;
  border-radius:2px
}
button{
  background:#5c5c5c;
  color:white;
  border:2px solid #5c5c5c;
  border-radius:5px;
}
/******* Social media ******/
.fa {
  padding: 20px;
  font-size: 20px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin:5px 7px;
  border-radius:100%;
  box-shadow:0px 0px 5px 5px black
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}




/********* Home Page ********/
.selector-for-some-widget {
  box-sizing: content-box;
}      
.container{
  margin-bottom:30px;
}
nav{
  box-shadow:0px 0px 5px 5px;
}
#background{
  width:50%;
  height:400px;
  opacity:1;
}
#headerCard{
  position:absolute;
  height:100px;
  width:60%;
  background:lightgrey;
  margin-top:140px;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  border-radius:10px;
  box-shadow:0px 0px 5px 5px;
}
#headerCard p{
  font-size:25px;
  
}
{
  position:absolute;
  height:100px;
  width:60%;
  background:lightgrey;
  margin-top:140px;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  border-radius:10px;
  
}
footer{
  margin-top:-40px;
 border-top:solid grey;
}
@media only screen and (max-width: 600px) {
#background{
  height:auto;
  width:100%;
  opacity:1;
}
}

@media only screen and (max-width: 600px) {
#background{
  height:auto;
  width:100%;
  opacity:1;
}
}
</style>
<style id="jsbin-css">
textarea{
  border:2px solid white;
  box-shadow:0px 0px 3px 3px;
  border-radius:7px;
}

input{
  border:2px solid white;
  box-shadow:0px 0px 3px 3px;
  border-radius:2px
}
button{
  background:#5c5c5c;
  color:white;
  border:2px solid #5c5c5c;
  border-radius:5px;
}
</style>
</head>
  <body>
    <nav class="navbar sticky-top navbar-light bg-light">
 
       <a class="navbar-brand" href="#">ThermaWeave</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.html">About Us</a>
      </li>
     <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.html">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Newsletter.html">Subscribe To Newsletter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Testimonial.php">Testimonials</a></li>
      <li class="nav-item">
        <a class="nav-link" href="Map.html">Find Us Here</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
   <!--Insert Body Here -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container" style="background:;margin-top:-40px;color:black;">
    <center><div id="contactFooter" style="color:black" class="col-sm-4" ><br>
      <h2> Testimonials </h2>
          
        </div></center>
  </div>
 <center> <div style="background:#343434;color:white;width:100%;height:300px;overflow-y:scroll;">
  <?php
  include("db.php");
  
  $sql = "SELECT * FROM Testimonials";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 'id: ' . $row["id"]. ' - Name: ' . $row["Name"]. ' says "' . $row["Message"]. '"<br><br>';
    }
} else {
    echo "0 results";
}
$con->close();
?>
</div></center>
      <!--
   <center><div class="card" style="width: 18rem;">
  <img style="box-shadow:0px 0px 5px 5px;" class="card-img-top" src="" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Technology</h5>
    <p class="card-text">Our technology seamlessly integrates into the designs that you already produce and consumers already love</p>
    <a href="AboutUs.html" class="btn btn-primary">Check us out</a>
  </div>
</div></center>
      -->
     <center> <form action="submit1.php" method="post">
       <input style="height:30px;width:50%;" type="" placeholder="Enter name" name="testName" id="testName"/><br><br>
        <textarea style="height:120px;width:70%;resize:none;" placeholder="Enter Testimonial" name="testTet" id="testTet" > </textarea>
       <br><br>
       <button type="submit" id="testSubmit" name="testSubmit">Submit</button>
       </form>
       </center>
      
</div>
   <footer class="py-5 bg-dark">
      <center><p><a href="#" class="fa fa-facebook"></a><a href="#" class="fa fa-twitter"></a><a href="#" class="fa fa-google"></a><a href="#" class="fa fa-youtube"></a></p></center>
      <center>
        </center>
       <p class="m-0 text-center text-white"> &copy; ThermaWeave 2018</p>
      <!-- /.container -->
      <center><br>  <p>Created by<br> <img  width="200"  src="https://s7.postimg.org/4k24vmya3/Logo_Makr_4h_ELky.png"/></p>
      </center>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
