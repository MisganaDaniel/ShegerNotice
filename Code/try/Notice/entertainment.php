<?php
echo "<b>";
echo "Welcome to";
echo "</b>";
?>
<!doctype html>
<html>
<head ><link rel="icon" href="pic/icon.png" />
<title>Sheger Notice</title>

<style type="text/css">
       body{ background-image:url(pic/body.jpg);
       	     background-size:cover;
       	     background-repeat:no-repeat;
             font-family: Segoe Print;}

      aside{ background-color: black;

      }

      header{ color:white;
      	      height:50px; }

      header a { text-decoration:none;
      	         color:white;
      	         font-size:24px;}
	  header a:link{ color: white;  }
	  header a:visited{ color: white;  }


      header p{ margin-top:-90pt;
      	        text-align:right;}

	  header p a{ color:white;
	  	           font-size:20px;  }
	   header p a:link{ color: white;  }
	   header p a:visited{ color: white;  }

      header a h1{ color:white;
      	           margin-top:-10pt;
                   font-size:40px; }

      header h1 a{ color:white;
                 font-weight: normal;
                 text-indent:30px;
                 margin: -40px 0px 5px 0px;}
      
      button#submit{ position : absolute;
                     top : -37pt;
                     left : 373pt;
                     height : 17pt; 
                     border-radius :10pt 10pt 10pt 10pt;
                     background-color : white;
                     border : 0;}

      #searchtextbox{ width : 300pt;
      	              height : 22pt;
      	              margin : -40pt 2pt 0pt 100pt;
      	              border-radius :10pt 10pt 10pt 10pt;}

      #formsearch{ position : absolute;
                   top : 55pt;
                   left : 290pt;}

      nav{ background:black;
      	   border-radius :15pt 15pt 15pt 15pt;
           color:white;
           opacity:0.8;
           font-family:Kristen ITC;
           text-indent:30px;
           width:850px;
           height: 50px;
           margin-left:245px;}

      nav li{ display : inline-block;
      	      padding-left: 10px; }

      nav li a{  text-decoration : none;
      	         font-family:Segoe Print;
	             font-size:26px;}
	  nav li a:link{ color: white;  }
	  nav li a:visited{ color: white;  }
                  
      section { border-radius :10px 10px 10px 10px;
                position : absolute;
                text-align:center;
                margin:20px 0px 0px 225px;
      	        opacity:0.8;
      	        background-color: black; 
      	        color:white;
      	        font-size:16pt;
      	        width:886px;
      	        height:500px;}

     section p { text-indent:20px;
     	         border-radius :10px 10px 10px 10px;
      	         opacity:0.8;
      	         background-color: white; 
      	         color:black;}

      section p h2{font-size:20pt;}
	  
	   .place img{ 
      margin: 5 0 10 -50px;
      width:150px;
      height:80px;
    }
	  
	  

      aside h2{ background-color:white;
                border-radius :30px 30px 30px 30px;
                text-align: center;}

      aside.l{ border-radius :10px 10px 10px 10px;
                       position : absolute;
                       top:100pt;
                       opacity:.8;
                       width:220px;


                       }



       aside.r{ border-radius :10px 10px 10px 10px;
                       position : absolute;
                       top:100pt;
                       opacity:.8;
                       width:220px;
                       text-align:center;}

      aside.l a, aside.r a { text-decoration : none;
      	                     font-family:verdana;
	                         font-size:18px;}
	           aside.l a:link{ color: white; }
	           aside.l a:visited{ color: white; }
               aside.l a:hover{color:gray; }
               aside.r a:link{ color: white; }
	           aside.r a:visited{ color: white; }
               aside.r a:hover{color:gray; }

      aside.r{right:8px;}

      aside.r img{width:50; height:50;}



        aside.l ul li ul li a{
    color:white;
    font-weight: lighter;
   }


   aside.l ul li ul li:hover a{ position:relative;
                           background:grey;
                           color:white;



                          }

   aside.l ul {
    list-style: none;
     margin-left:-25px;
   }

   aside.l ul li ul li {
    display:none;
    


   }


   aside.l ul li a{
    display:block;
     font-weight: bold;
    
   }

   aside.l li:hover ul li{
    display:block;

    

   }
                                            
      footer{  
      	       border-radius :10px 10px 10px 10px;
      	       background:black;
      	       opacity:0.8;
      	       font-family:verdana;
      	       margin-top:970px;   
      	       height:100px; }

      footer p{ font-size:16px;
	             color:white;}

	  footer p a { text-decoration : none;}
	           footer p a:link{ color: white; }
	           footer p a:visited{ color: white; }
</style>
</head>
<body>
<header>
   <a href="index.php"><h1>Sheger Notice</h1></a>
<p><a href="register/register.html"> Register | </a> 
<a href = 'login/login.html'>Login</a></p><br>
<?php 
$Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo $new;

?>
<form name = "searchform" method = "get" action = "search.php" id = "formsearch"> 
<input type = "text" id = "searchtextbox"  name ="query" style = "">
<button id = "submit" type = "submit"><img src ="pic/search.png" alt = "search logo" width="17pt"></button>
</form> 
</header>
    <nav>
     <ul>
       <li><a href="index.php"> HOME  | </a></li>
       <li><a href="contact.php"> CONTACT </a></li>
       <li><a href ="aboutus.php"> |  ABOUT US </a></li> 
       <li><a href="help.php"> | HELP </a></li>
    </ul>
    </nav>
  <section>
     
     <h2>Entertainments</h2>
<div class="place">
<a href="jobs.php"><img src="../Advert_Medical_center/baverage_pics/1.jpg"></a>
<a href="education.php"><img src="../Advert_Medical_center/baverage_pics/2.jpg"></a>
<a href="events.php"><img src="../Advert_Medical_center/baverage_pics/1.jpg"></a>
<a href="books.php"><img src="../Advert_Medical_center/baverage_pics/2.jpg"></a>

</div>

     </section>
     
      <aside class=l>
<h2>Advetisment</h2>
<ul>
<li><a href="#">Entertainment</a>
         <ul>
                <li><a href="Advert/cinema_home.php">Cinima</a></li>
                <li><a href="film.php">Film</a></li>
                <li><a href="Advert/theater_home.php">Theater</a></li>
                <li><a href="Advert/music_festival_home.php">Music Festival</a></li>
                <li><a href="Advert/concert_home.php">Concert</a></li>
                <li><a href="Advert/music_album_home.php">Music Album</a></li>
                <li><a href="Advert/books_magazines_home.php">Books and Mag's</a></li>
                <li><a href="Advert/sport_events_home.php">Sport Events</a></li>
                <li><a href="Advert/tv_home.php">TV</a></li>
                <li><a href="Advert/radio_home.php">Radio</a></li>
         </ul>
</li>

<ul>
<li><a href="Advert_Baverage\baverage_home.php">Beverage</a>
         <ul>
                  
                  <li><a href="soft_drinks.php">Soft drink</a></li>
                  <li><a href="alcohols.php">Alcohol</a></li>
             </ul>

                   <li><a href="jobs.php">Jobs</a>
                      <ul>
                          <li><a href="helth_center.php">Health center</a></li>
                          <li><a href="clinic.php">Clinics</a></li>
                          <li><a href="hospital.php">Hospitals</a></li>
						   <li><a href="hospital.php">Hospitals</a></li>
                      </ul>


                  <li><a href ="hotel.php">Hotel and Spa</a>
                       <ul>
                          <li><a href="Advert/star_hotel_home.php">Start Hotel</a></li>
                          <li><a href="Advert/hotel_spa_home.php">Hotel and Spa</a></li>
                          <li><a href="Advert/hotel_home.php">Hotel</a></li>
                          <li><a href="Advert/spa_home.php">Spa</a></li>
                       </ul>
                  </li>

      <li><a href="jobs.php">jobs</a>
                     <ul>
                          <li><a href="Advert/health_center_home.php">Heath Center</a></li>
                          <li><a href="Advert/clinics_home.php">Clinics</a></li>
                          <li><a href="Advert/hospital_home.php">Hospitals</a></li>
                     </ul>
      </li>
         
         
             <ul>
                    <li><a href ="pharmacy.php">Pharmacy</a></li>
                    <li><a href="airliance.php">Airliance</a></li>
                    <li><a href="">Bank Service</a>

             </ul>
             </li>
                       <li><a href="Advert/development_bank_home.php">Development Bank</a></li>
                       <li><a href="Advert/construction_bank_home.php">Construction Bank</a></li>
                       <li><a href="Advert/private_bank_home.php">Private Bank</a></li>
                       <li><a href="Advert/ste_owned_bank_home.php">State Owned Bank</a></li>
         </ul>
         </li>
                <ul>
                      <li><a href ="Advert/gym.php">Sport Center</a></li>
                      <li><a href ="#">Tourism Destination</a>
                 </ul>

                        <li><a href="Advert/local.php">Local </a></li>
                        <li><a href="Advert/abroad.php">Abroad </a></li>
                     </ul>
                     </li>
</ul>

   
<h2>Notices</h2>
<ul>
         <li><a href="notice.php"> Notice </a>

													   <ul>
														  <li><a href="../misg/Notice/jobs.php">Jobs</a></li>
														 <li><a href="../misg/Notice/education.php">Educations</a></li>
														 <li><a href="../misg/Notice/events.php">Events</a></li>
														 <li><a href="../misg/Notice/books.php">Books & magazines</a></li>

													 </ul>
													   </li>


         
        <li><a href="entertainment.php">Entertainment</a>

													 <ul>
														<li><a href="cancel.php">Cancelled </a></li>
														 <li><a href="venue_change.php">Venue changed</a></li>
														 <li><a href="price_cahnge.php">Entrance price changed</a></li>
														 <li><a href="schedule_change.php">Schedule changed</a></li>

													 </ul>
													   </li>


        <li><a href ="court.php">Court</a>
        
													 <ul>
														<li><a href="court_date.php">Official court date</a></li>
														 <li><a href="court_forclusures.php">Court foreclosures</a></li>
														 <li><a href="court_changed_date.php">Court changed date </a></li>
														 <li><a href="court_notice_board.php"></a>Court notice board</li>

													 </ul>
													   </li>


        <li><a href="rent.php">Rent</a>

												 <ul>
													<li><a href="jobs.php">Jobs</a></li>
													 <li><a href="jobs.php">Jobs</a></li>
													 <li><a href="jobs.php">Jobs</a></li>
													 <li><a href="jobs.php">Jobs</a></li>

												 </ul>
												   </li>


        <li><a href ="sale.php">Sale</a>
													 <ul>
														<li><a href="sale_notice_houses.php">Jobs</a></li>
														 <li><a href="sale_notice_car.php">Jobs</a></li>
														 <li><a href="sale_notice_equipments.php">Jobs</a></li>
														 <li><a href="sale_notice_cosmos.php">Jobs</a></li>

													 </ul>
													   </li>


         <li><a href ="bill.php">Bills</a>

         
													 <ul>
														<li><a href="phone.php">Jobs</a></li>
														 <li><a href="electric.php">Jobs</a></li>
														 <li><a href="water.php">Jobs</a></li>
														 <li><a href="fines.php">Jobs</a></li>

													 </ul>
													   </li>

</ul>
      

</aside>

       <aside class=r>
       <h2>Latest News</h2>
<a href="">Hotel(2)</a><br>
<a href="">Entertaiment(1)</a><br>
<a href="">Tour(1)</a><br>
<a href="">Clinic(3)</a>
       <h2>Sponsors</h2>

       <a href="http://www.cocacola.com"><img src="pic/c.jpg" width="100" height="100"></a><br>
       <a href="http://www.cocacola.com"><label>Coca cola</label></a>
       <h2>Follow us on</h2>
<a href="http://www.fb.com"><img src="pic/f.png" /></a>
<a href="http://www.twitter.com"><img src="pic/t.png"/></a>
<a href ="http://www.youtube.com"><img src="pic/y.png"/></a><br>

    

       </aside>
      <footer>
      <br>
      <p align=center>Copyright &copy; 2018. <a href="index.php">ShegerNotice.com</a></p>
      </footer>
</body>
</html>
