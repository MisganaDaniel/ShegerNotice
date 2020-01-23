<?php
echo "<b>";
echo "&nbsp; Welcome to";
echo "</b>";
?>
<!Doctype html>
<html lang="en">
<head><link rel="icon" href="pic/icon.png" />
<meta charset="utf-8" />
<title>ShegerNotice.com</title>
<link rel="stylesheet" href="css/css.css" type="text/css">
<script type="text/javascript" src="jscript.js"></script>
</head>
<body>
<header>
<a href="index.php"><h1>Sheger Notice</h1></a>
<p><a href="register/register.php"> Register </a>| 
<a href = 'login/login.php'>Login</a></p><br>
<?php 
$Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo "<br> &nbsp; $new";
?>
<form name = "searchform" id = "formsearch"> 
<input type = "text" id = "searchtextbox">
<button id = "submit" type = "submit"><img src ="pic/search.png" alt="search logo" width=19></button>
</form>
</header>
 <nav>
     <ul>
       <li><a href="index.php"> HOME </a></li>
       <li><a href="contact.php"> CONTACT </a></li>
       <li><a href ="aboutus.php"> ABOUT US </a></li> 
       <li><a href="help.php"> HELP </a></li>
    </ul>
    </nav>
    <aside>
<h3>Advert</h3>
<ul>
<li><a href="">Entertainment</a>
<ul>
<li><a href="cinema.php">Cinema</a></li>
<li><a href="music_festival.php">Music Festival</a></li>
<li><a href="concerts.php">Concert</a></li>
<li><a href="music_album.php">Music Album</a></li>
<li><a href="books_magazines.php">Books and Magazines</a></li>
<li><a href="sportevents.php">Sport Events</a></li>
<li><a href="tv_show.php">TV</a></li>
</li>
</ul>
<li><a href="#">Beverage</a>
<ul>
<li><a href="soft_drinks.php">Soft Drinks</a></li>
<li><a href="alcohol.php">Alcohol</a></li>
</li>
</ul>
<li><a href="Medicalcenter.php">Medical Center</a></li>
<li><a href="#">Hotel and Spa</a>
<ul>
<li><a href="starhotel.php">Start Hotel</a></li>
<li><a href="hotelspa.php">Hotel and Spa</a></li>
<li><a href="hotel.php">Hotel</a></li>
<li><a href="spa.php">Spa</a></li>
</li>
</ul>
<li><a href="#">Bar and Restaurant</a>
<ul>
<li><a href="bar.php">Bar</a></li>
<li><a href="restaurant.php">Restaurand</a></li>
</li>
</ul>
<li><a href="#">Bank Service</a></li>
<li><a href="sportcenter.php">Sport Centers</a>
<ul>
<li><a href="gymnasium.php">Gymnasium</a></li>
</li>
</ul>
<li><a href="#">Mall</a>
<ul>
<li><a href="mallrent.php">Rent</a></li>
<li><a href="mallbuy.php">Buy</a></li>
</li>
</ul>
<li><a href="">Tour and Travel</a></li>
</ul>
<h3>Notice</h3>
<ul>
<li><a href="#"> Notice </a>
<ul>
<li><a href="tender.php">Tender</a></li>
<li><a href="jobs.php">Jobs</a></li>
<li><a href="education.php">Educations</a></li>
<li><a href="events.php">Events</a></li>
<li><a href="books.php">Books & magazines</a></li>
</ul>
</li>
<li><a href="#">Entertainment</a>
<ul>
<li><a href="cancelled.php">Cancelled </a></li>
<li><a href="venue_change.php">Venue changed</a></li>
<li><a href="price_cahnge.php">Entrance price changed</a></li>
<li><a href="schedule_change.php">Schedule changed</a></li>
</ul>
</li>
<li><a href ="#">Court</a>
<ul>
<li><a href="court_date.php">Official court date</a></li>
<li><a href="court_forclusures.php">Court foreclosures</a></li>
<li><a href="court_changed_date.php">Court changed date </a></li>
<li><a href="court_notice_board.php">Court notice board</a></li>
</ul>
</li>
<li><a href="#">Rent</a>
<ul>
<li><a href="houses.php">House Rent Notices</a></li>
<li><a href="shops.php">Shop Rent Notices</a></li>
<li><a href="cars.php">Car Rent Notices</a></li>
<li><a href="equipments.php">Equipment Rent Notices</a></li>
</ul>
</li>
<li><a href ="#">Sale</a>
<ul>
<li><a href="sale_notice_houses.php">House Sale  Notices</a></li>
<li><a href="sale_notice_car.php">Car Sale Notices</a></li>
<li><a href="sale_notice_equipments.php">Equipments Sale Notices</a></li>
<li><a href="sale_notice_cosmos.php">Cosmetics Sale Notices</a></li>
</ul>
</li>
<li><a href ="bill.php">Bills</a></li>
</ul>
</aside>
    <section>
 <h2>Saint Marie</h2>
 <a href="1.php"><img src="1.jpg"></a>
 <a href="1.php"><img src="2.jpg"></a>
</section>
<aside class="right">
 <h3>Latest News</h3>
<a href="">Hotel(2)</a><br>
<a href="">Entertaiment(1)</a><br>
<a href="">Tour(1)</a><br>
<a href="">Clinic(3)</a>
 <h3>Sponsors</h3>
  <br><a href="http://www.cocacola.com"><img id="big" src="pics/1 (9).jpg" ></a><br>
  <a href="http://www.midroc.com"><label>Midroc Companies</label></a><br>
 <h3>Follow us on</h3>
 <br>
  <a href="http://www.fb.com"><img id="small" src="pic/f.png" /></a>
  <a href="http://www.twitter.com"><img id="small" src="pic/t.png"/></a>
  <a href ="http://www.youtube.com"><img id="small" src="pic/y.png"/></a><br>
</aside>
<footer>
      <p>Copyright &copy; 2018. <a href="index.php">ShegerNotice.com</a></p>
</footer>
</body>
</html>

