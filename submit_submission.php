<html>

<head>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>
<div class="whitebox">
<?php
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $instagram_handle = $_POST["instagram_handle"];
  $post_url = $_POST["post_url"];

  $con = mysqli_connect("servername","username","password", "database");
  if (!$con){
    die('Could not connect: ' . mysqli_error($con));
  }
  
  $sql= "INSERT INTO feature_submission (first_name, last_name, email, instagram_handle, post_url)
  VALUES
  ('$first_name', '$last_name', '$email', '$instagram_handle', '$post_url')";

  if (!mysqli_query($con, $sql)){
    die('Error: ' . mysqli_error($con));
  }
  echo "<h1>Thank you $first_name for your submission!</h1>";
  echo "<p>We'll send an email to $email if $instagram_handle's photo is selected.</p>";

  mysqli_close($con)
?>
</div>

</body>
</html>
