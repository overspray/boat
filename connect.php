<!DOCTYPEhtml>
<html>
<head>
<title>connect</title>
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
</body>
</html>

<?php
include_once 'login.php';

$connection =  mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
if($connection->connect_error) die("unable to connect to sql" . $connection->connect_error);

if( isset($_POST['boat_name']) &&
    isset($_POST['owner_name']) &&
    isset($_POST['boat_design'])) {

    $boat_name  = get_post('boat_name');
    $owner      = get_post('owner_name');
    $design     = get_post('boat_design');
    if (empty($boat_name || $owner || $design)){echo "Error! Didnt input required perameter"."<br>";
        echo '<a href="boat_input.php">Return to boat input </a>';
    }

    If(!empty($boat_name && $owner && $design)){
    $query = "INSERT INTO boat VALUES('NULL', '$boat_name', '$owner', '$design')";

    echo "$boat_name"."<br>";
    echo "$owner"."<br>";
    echo "$design"."<br>"."<br>";
    echo 'Sucessfully added to Database ';
    echo '<a href="boat_input.php">Input another boat </a>' ;
    }
  }
else {echo "not input correctly";
      echo '<a href="boat_input.php">Return to boat input </a>';
    }

$result = $connection->query($query);
if (!$result){ die($connection->error);
echo '<a href="boat_input.php">Return to boat input </a>';
}

function get_post($var){
  return $_POST[$var];
}
?>
