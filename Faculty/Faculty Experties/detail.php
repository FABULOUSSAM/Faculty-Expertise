<!DOCTYPE html>
<html lang="en">
<?php
@session_start();
if(isset($_SESSION['s1'])){
echo '<script language="javascript"> alert("form submitted successfully");</script>';
$_SESSION['s1']=NULL;
}
?>
<?php
    
    include('connect.php');

     
if ($_SESSION['logged_in'] = false) {
    $_SESSION['message'] = 'You must Login to continue use this section.';
    header('location: error.php');
} 
?>   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="detailstyle.css">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Detail </title>
</head>
<body>
<header>
<div class="container">
    
<a href="option1.php">
<button class="button" >Faculty as Resource Person</button>
</a>
    
</div>
<div class="container">
<a href="option2.php">
<button class="button">Competitive Exams</button>
</a>
</div>
<div class="container">
<a href="option3.php">
<button class="button">Qualification till-date</button>
</a>
</div>
<div class="container">
<a href="option4.php">
<button class="button">Awards</button>
</a>
</div>
</header>
<section>
<div class="container">
<a href="option5.php">
<button class="button">Faculty Promotion</button>
</a>
</div>
<div class="container">
<a href="option6.php">
<button class="button">Faculty Long Live</button>
</a>
</div>
<div class="container">
<a href="individualreport.php">
<button class="button">Report</button>
</a>
</div>

</section>

</body>
</html>