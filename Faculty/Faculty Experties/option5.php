<!DOCTYPE html>
<html lang="en">
<?php
@session_start();
if(isset($_SESSION['o1'])){
echo '<script language="javascript"> alert("DETAILS ALREADY EXISTS"); </script>';
$_SESSION['o1']=NULL;
}
?>
<?php

include('connect.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="optionstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Option5</title>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title" style=" font-family: 'Times New Roman', Times, serif; font-size: 50px; color: whitesmoke;">Faculty Promotion</div>
<img src="images/rait_logo.jpeg" class="navbar-brand ml-auto " alt="#" width=160px id="optionalstuff">
</nav>


<form action="option11.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="Name">Name:</label>
        <div class="col-md-5"><input type="name" value="<?php echo $_SESSION['firstname'] ." ". $_SESSION['middlename'] ." ". $_SESSION['thirdname'];?>" class="form-control border border-secondary" name="name3" id="name" disabled></div>
    </div>
    <div class="col-md-5">
      <label for="join-date-input" >Date of joining </label>
      <div class="col-md-6">
        <input class="form-control border border-secondary" type="date" name="joindate" id="join-date-input">
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-sm-2 col-md-form-label" for="SDRN">SDRN Number:</label>
        <div class="col-md-2"><input type="name" value="<?php echo $_SESSION['Sdrn'];?>" class="form-control border border-secondary" name="sdrn" id="SDRN" disabled></div>
    </div>

    <div class="form-group">
    <label for="RAIT Experience">RAIT Experience</label> 
  <div class="form-row">
    <div class="col-md-3">
    <input type="number" class="form-control border border-secondary" placeholder="Enter Year" name="RAITyear" id="RAITyear">
    </div>
    <div class="col-md-3">
    <input type="number" class="form-control border border-secondary" placeholder="Enter Months" name="RAITmonths" id="RAITmonths">
    </div>
  </div>
  </div>

  <div class="form-group">
  <label for="RAIT Experience">Other Teaching Experience</label> 
  <div class="form-row">
    <div class="col-md-3">
    <input type="number" class="form-control border border-secondary" placeholder="Enter Year" name="Otheryear" id="Otheryear">
    </div>
    <div class="col-md-3">
    <input type="number" class="form-control border border-secondary" placeholder="Enter Months" name="Othermonths" id="Othermonths">
    </div>
  </div>
  </div>

  <div class="form-group">
  <label for="RAIT Experience">Industry Experience</label> 
  <div class="form-row">
    <div class="col-md-3">
    <input type="number" class="form-control border border-secondary" placeholder="Enter Year" name="Industryyear" id="Industryyear">
    </div>
    <div class="col-md-3">
    <input type="number" class="form-control border border-secondary" placeholder="Enter Months" name="Industrymonths" id="Industrymonths">
    </div>
  </div>
  </div>

  <div class="form-group">
  <label for="RAIT Experience">Total Experience</label> 
  <div class="form-row">
    <div class="col-md-3">
    <input type="number" class="form-control border border-secondary" placeholder="Enter Year" name="Totalyear" id="Totalyear">
    </div>
    <div class="col-md-3">
    <input type="number" class="form-control border border-secondary" placeholder="Enter Months" name="Totalmonths" id="Totalmonths">
    </div>
  </div>
  </div>
    <div class="form-group">
        <label for="Designation">Designation of Faculty as on date of joining:</label>
        <div class="col-md-5"><input type="text" class="form-control border border-secondary" name="Designation" id="Designation"></div>
    </div>
    <div class="form-group">
        <label for="Promoted Designation first">1st Promoted Designation:</label>
        <div class="col-md-5"><input type="text" class="form-control border border-secondary" name="Promoted_designation_1" id=" Promoted Designation first"></div>
    </div>
    <div class="col-md-5">
      <label for="Promotionfirst" >Date of 1st Promotion </label>
      <div class="col-md-6">
        <input class="form-control border border-secondary" type="date" name="Promotion_first_date" id="Promotionfirst">
      </div>
    </div>
    <div class="form-group">
        <label for="Promoted Designation second">2nd Promoted Designation:</label>
        <div class="col-md-5"><input type="text" class="form-control border border-secondary" name="Promoted_designation_2" id=" Promoted Designation second"></div>
    </div>
    <div class="col-md-5">
      <label for="Promotionsecond" >Date of2nd Promotion </label>
      <div class="col-md-6">
        <input class="form-control border border-secondary" type="date" name="Promotion_second_date" id="Promotionsecond">
      </div>
    </div>
    <label style="margin-left:10px" for="pdf Upload" >pdf Upload:</label>
    <div class="custom-file mb-3">
    <div class="col-md-5">
      <input  type="file" class="custom-file-input" id="customFile" name="file">
      <label style="margin-left:30px" class="custom-file-label border border-secondary" for="customFile">Choose file</label>
    </div>
    </div>

    
    

  <div class="btn">
  <button type="submit" name="submit5" class="btn btn-primary ">Submit</button>
    </div>



</form>   
</body>


<script>

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});



</script>



</html>