<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- css link -->
 <link rel="stylesheet" href="./assets/css/style.css">

 <!-- box icon -->
 <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
 <title>DIEMS - library</title>
</head>

<body>
 <!-- film -->
 <div class="film" id="film"></div>

 <!-------------- SIDE NAVIGATION --------------->
 <?php
 include "components/Sidenav.php";
 ?>
 <!------------ MAIN CONTENT ------------->
 <main class="main">

  <!-- header -->
  <?php
  include "components/_header.php";
  ?>

  <!------------------- MODALS ----------------->
  <!-- book modal -->
  <?php
  include "modals/book_modal.php";
  ?>
  <!-- category modal -->
  <?php
  include "modals/category_modal.php";
  ?>

  <!-- student modal -->
  <?php
  include "modals/student_modal.php";
  ?>

  <!-- Admin modal -->
  <?php
  include "modals/admin_modal.php";
  ?>
  <!-- main content -->
  <div class="content" id="content">
   <!-- dash-items -->
   <?php
   include "_dash_items.php";
   ?>
  </div>
 </main>
</body>

<script src="./assets/js/main.js"></script>

</html>