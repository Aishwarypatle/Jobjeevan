<?php
$con=mysqli_connect("localhost","root","","jobjeevan");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM recruiter");
?>
<!DOCTYPE html>
<html>
<head>
<Title>Jobs</Title>
<link rel="stylesheet" href="showjobs.css">

</head>
<body>
<header>

<img src="logo.png" alt="Job Tree">

    <div class="topnav">
        
        <a href="main.html"><b>Home</b></a>
        <a href="contact.html"><b>Contact</b></a>
        <a href="about.html"><b>About</b></a>
        <a href="Registration Page.html"><b>Join</b></a>
        <a href="login.html"><b>Login</b></a>
        
    </div>

    </header>   
    <marquee behavior="scroll" scrollamount="15" direction="left"><h1 class="top"> Largest local Jobs Available here  </marquee>
<div class="Searchbox">

<input type="text" name="searchbox" placeholder="Find job..." id="searchbox">
<input type="text" name="search-location" placeholder="Location" id="searchbox1">
<button type="submit" id="btn"> Search </button>

</div>



<div class="trr">
<?php
 "<table border='1'>
<tr>
<th>job_name</th>
<th>location</th>
<th>salary</th>
<th>mo.no.<th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<h3>" . $row['job_name'] . "</h3>";
echo "<p>Address:- " . $row['location'] . "</p>";
echo "<p>salary:- " . $row['salary'] . "</p>";
echo "<p>Mobile No.:-" . $row['mobile_no'] . "</p>";


echo "</tr>";
}
echo "</table>";

?>
<?php
mysqli_close($con);
?>
</div>
<footer class="footer-distributed">
 
    <div class="footer-left">
  <img src="image/logo.png">
        <h3>About<span>jobs</span></h3>

        <p class="footer-links">
            <a href="main.html">Home</a>
            |
            <a href="contact.html">contact</a>
            |
            <a href="about.html">About</a>
        </p>

        <p class="footer-company-name">xyz</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
              <p><span>sardar bhagat singh ward,
                 vijay nagar</span>
                gondia - 441601</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+91 7024718103</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mysite.com">mysite.com</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About the company</span>
            We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
        <div class="footer-icons">
            <a href="facebook.com"><i class="fa fa-facebook"></i></a>
            <a href="twitter.com"><i class="fa fa-twitter"></i></a>
            <a href="instgram.com"><i class="fa fa-instagram"></i></a>
            <a href="youtube.com"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</footer>
</body>
</html>