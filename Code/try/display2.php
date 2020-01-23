<html>
    <head>
        <title>Download File From MySQL Database</title>
        <meta http-equiv="Content-Type" content="text/html; 
              charset=iso-8859-1">
    </head>
    <body>
        <?php
        $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
        $db = mysql_select_db('shegernotice', $con);
        $query = "SELECT * FROM advert_a";
        $result = mysql_query($query) or die('Error, query failed');
        if (mysql_num_rows($result) == 0) {
            echo "Database is empty <br>";
        } else {
            while (list($file) = mysql_fetch_array($result)) {
                ?>
                <a href="display2.php?file=<?php echo urlencode($file); ?>"
                   ><?php echo urlencode($file); ?></a> <br>
                <?php
            }
        }
        mysql_close();
        ?>
    </body>
</html>
           <?php
           if (isset($_GET['file'])) {
               $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
               $db = mysql_select_db('shegernotice', $con);
               $file = $_GET['file'];
               $query = "SELECT * FROM advert_a WHERE file = '$file'";
               $result = mysql_query($query) or die('Error, query failed');
               list($name, $type, $size, $content) = mysql_fetch_array($result);
               header("Content-length: $size");
               header("Content-type: $type");
               header("Content-Disposition: attachment; filename=$name");
               ob_clean();
               flush();
               echo $content;
               mysql_close();
               exit;
           }
           ?>