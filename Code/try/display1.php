<?php
include "config.php";
    ?> 
    <head>
    <style>
    body{ background-image: url(body.jpg); 
    font-family: Multicolore;
      color:white;}
    
  nav{ background:black;
     border-radius :15pt;
     text-indent: -35px;
     color:white;
     opacity:0.8;
     text-align: center;
     width:900px;
     padding:5px;
     margin: 0px auto 0 auto;}

nav li{ display:inline-block;
        padding-left: 65px; }

nav li a{ text-decoration : none;
          font-size:20px;}
nav li a:link,nav li a:visited{ color: white; }
nav li a:hover{ color: black;
                background:white;}
table{background:black; 
       color:white;
       font-family:arial;
     opacity:0.9;
     width:1000px;
     border-radius:15px; 
     line-height:1.5em; }
     </style>
     </head>
     <nav style='margin:10px 0 0 290;'>
     <ul>
       <li><a href="index.php"> HOME </a></li>
       <li><a href="contact.php"> CONTACT </a></li>
       <li><a href ="about us.php"> ABOUT US </a></li> 
       <li><a href ="Forum.php"> FORUM</a></li> 
       <li><a href="help.php"> HELP </a></li>
    </ul>
    </nav>
    <br>
    
    <form action="display1.php" method="post"> 
    <table cellpadding="15" border=1 bgcolor=black align=center style=" opacity:0.9; color:white;"> 
    <tr align=center> <th>Company</th> <th>Format</th><th>Category</th> <th>File</th><th>Details</th><th>Status</th></tr>
     <?php
     //$sql=mysql_query("UPDATE $t SET details='$details' WHERE company='$name'");
     $sql=mysql_query("SELECT *from advert_p ");
if(mysql_affected_rows()!=0)
{
while($r=mysql_fetch_assoc($sql)){
             echo "<tr>";
             echo"<td>".$r['company']."</td>";
             echo"<td>".$r['format']."</td>";
             echo"<td>".$r['category']."</td>";
      	     echo "<td><img width=200 height=200 src=\"{$r['file']}\"></td>"; 
      	     echo" <td>".$r['details']."</td>";
             echo" <td>".$r['status']."</td>";
      	     echo "</tr>";
      	    }
      	}
 ?>
  </table> 
</form>