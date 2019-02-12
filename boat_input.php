<!DOCTYPE html>
<html>
<head>
  <title>Boat Input</title>
  <link rel="stylesheet" href="mystyles.css">
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
  <h1>Boat</h1>
  <div class="inputheading">
    <h1>Boat Details</h1>
  </div>
  <form  class="boatinput" action="connect.php" method="post" target="_self">
    Boat Name<br>
    <input type="text" name="boat_name">
    <br>
    <br>
    Owner<br>
    <input type="text" name="owner_name">
    <br>
    <br>
    Design<br>
    <input type="text" name="boat_design">
    <br>
    <input type="submit" name="Input">
    <br>
  </form>
</body>
</html>
