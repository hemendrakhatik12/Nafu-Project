<?php

$conn = mysqli_connect('localhost','root','','marketing');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Nafu Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link href="assets/font/Montserrat.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/font/Lato.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <?php

        $sql_query = mysqli_query($conn,"select * from menus");

        while ($row = mysqli_fetch_array($sql_query)) {?>
         <li><a href="<?php echo $row['link'];?>"><?php echo $row['title'];?></a></li>
         <?php 
        }

        ?>
        
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
