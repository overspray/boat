
<?php
include_once 'login.php';
$connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database)
            or die("couldn't connect to server");
 ?>
 <!DOCTYPEhtml>
 <html>
<head>
<title>Select Boats</title>
<link rel="stylesheet" type="text/css"  href="mystyles.css">
</head>
<body>
  <div class="menu_bar">
    <ul>
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a href="boat_input.php">Add Boats</a>
      </li>
    </ul>
  </div>
<h1>Select option for search</h1>
</body>
 </html>

 <?php
 /*
if ($_POST['display_button'] == "showboat"){
  echo "showboat"."<br/>";
  $query = "SELECT *
            FROM boat
            WHERE boat_name = '$_POST[boat_name]'";
  $result = mysqli_query($connection,$query) or die("Couldn't connect");
  $row = mysqli_fetch_assoc($result);
  extract($row);
  echo "$boat_name <br /> $owner <br /> $design";
}

elseif ($_POST['display_button'] == "delete"){
  echo "delete";
  $query = "DELETE FROM boat WHERE boat_name = '$_POST[boat_name]'";
  If (!mysqli_query($connection, $query)){
    echo "Delete failed: $query<br>" . mysql_error(). "<br><br>";
  }

//echo "<p>  <a href="index.html"> Return to Index</a></p>";
}

elseif ($_POST['display_button'] == "boats"){
  echo "Show all<br/>";
  $query = "SELECT * FROM boat";
  $result = mysqli_query($connection, $query)
  or die("Couldn't execute");
  /*$row = mysqli_fetch_assoc($result);*/
  echo "<th>Name</th><th>boat</th><th>owner</th><th>Design</th>";
  while($row = mysqli_fetch_assoc($result)){
    extract($row);
    echo "<table>";

    echo "<tr> \n
    <td> $boat_id</td>\n
    <td> $boat_name</td> \n
    <td> $owner</td> \n
    <td> $design</td>
    </tr> \n" ;
    echo "</table";
  }
}


function get_post($var){
  return $_POST[$var];
}

*/
  ?>
