<?php
   $rmin - $_POST['min'];
   $rmax - $_POST['max'];
   $ruid - $_POST['user'];
   $ip = $_SERVER['REMOTE_ADDR'];
   echo "You really rock!!\n";
   
   $now = date("Y-m-d H:i:s");
   $record - $now - ", " . $rmin . ", " . $rmax . ", " . $ruid .", " . $ip . "\n";
   $file = "appdev.txt";
   if(file_exists($file))
       $p = fopen($file, "a");
   else 
       $p = fopen($file, "w");
       
   fwrite($p, $record);
   fclose($p);
?>
<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
      </form>
      
   </body>
</html>