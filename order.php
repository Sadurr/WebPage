<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Strona o najlepszej muzyce" >
  <meta name="keywords" content="music, muzyka, hit, top">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatibile" content="IE=edge,chrome=1">
  <link href="style.css" rel="stylesheet" type="text/css">

  <title>php-order</title>

</head>

<body>

<div class="logo"><img src="thebeatles.png"></div>


<div class="menu">

  <ol>
    <ol>
      <li><a href="index.html">Home page</a></li>
      <li><a href="members.html">Members</a>
          <ul>
            <li><a href="members.html#lennon">John Lennon</a></li>
            <li><a href="members.html#paul">Paul McCartney</a></li>
            <li><a href="members.html#george">George Harrison</a></li>
            <li><a href="members.html#ringo">Ringo Starr</a></li>
          </ul>
      </li>
      <li><a href="#">Best songs</a>
        <ul>
          <li><a href="#">Here Comes The Sun</a></li>
          <li><a href="#">Twist And Shout</a></li>
          <li><a href="#">Hey Jude</a></li>
          <li><a href="#">Yellow Submarine</a></li>
          <li><a href="#">Come Together</a></li>
        </ul>
      </li>
      <li><a href="index.php">Albums</a>
        <!-- <ul>
          <li><a href="#">Please Please Me</a></li>
          <li><a href="#">With The Beatles</a></li>
          <li><a href="#">A Hard Day's Night</a></li>
          <li><a href="#">Beatles for Sale</a></li>
          <li><a href="#">Help!</a></li>
          <li><a href="#">Rubber Soul</a></li>
          <li><a href="#">Revolver</a></li>
          <li><a href="#">Sgt. Pepper's Lonely Hearts Club Band</a></li>
          <li><a href="#">The Beatles [White Album]</a></li>
          <li><a href="#">Abbey Road</a></li>
          <li><a href="#">Let It Be</a></li>
        </ul> -->
      </li>
      <li><a href="info.html">Info</a></li>
    </ol>
</div>

<?php

require_once "connect.php";

$whichalbum = $_POST['album'];

echo "<h2>$whichalbum</h2>";

$connection = @new mysqli($serwer,$login,$pass, $nazwa_bazy);

if($connection->connect_errno!=0)
{
  echo "Error:".$connection->connect_errno;
}
else
{

 $sql = "SELECT songs FROM albums WHERE album='$whichalbum'";

 if ($result = @$connection->query($sql))
 {
  $howManySongs = $result->num_rows;
  if($howManySongs>0)
  {
    $row = $result->fetch_assoc();
    $song = $row['songs'];

    $result->free();

    echo $song;
    
  }
  else
  {

  }
 }

  $connection->close();
}

?>

<a href="index.php">Back to the home page </a>

</body>

</html>
