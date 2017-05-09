<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "PixieDustbyGMO";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
// echo "Connection to " . $servername . " " . $dbname . " success <br>";

// source: https://stackoverflow.com/a/26891213
function sql_to_html_table($sqlresult, $delim = "\n") {
   // starting table
   $htmltable = "<table>" . $delim;
   $counter   = 0;
   // putting in lines
   while ($row = $sqlresult->fetch_assoc()) {
       if ($counter === 0) {
           // table header
           $htmltable .= "<tr>" . $delim;
           foreach ($row as $key => $value) {
               $htmltable .= "<th>" . $key . "</th>" . $delim;
           }
           $htmltable .= "</tr>" . $delim;
           $counter = 22;
       }
       // table body
       $htmltable .= "<tr>" . $delim;
       foreach ($row as $key => $value) {
           $htmltable .= "<td>" . $value . "</td>" . $delim;
       }
       $htmltable .= "</tr>" . $delim;
   }
   // closing table
   $htmltable .= "</table>" . $delim;
   // return
   return ($htmltable);
}

?>
