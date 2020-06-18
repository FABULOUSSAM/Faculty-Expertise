<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="optionstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <title>Option5</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark ">
    <div class="navbar_title">Faculty Promotion</div>
<img src="../img/rait logo.jpeg" class="navbar-brand ml-auto " alt="#" width=160px>
</nav>

<form action="/action_page.php">
    <div class="form-group">
        <label for="Name">Name:</label>
        <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter name" id="name"></div>
    </div>
    <div class="col-5">
      <label for="join-date-input" >Date of joining </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" value="2011-08-19" id="join-date-input">
      </div>
    </div>
    <div class="form-group">
        <label for="SDRN">SDRN Number:</label>
        <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter number" id="SDRN"></div>
    </div>
    <div class="form-group">
    <label for="RAIT Experinece">RAIT Experinece</label>
    <div class="col-5">
        <textarea class="form-control border border-secondary" id="RAIT Experinece" rows="3"></textarea>
    </div>
    </div>
    <div class="form-group">
    <label for="Other Teaching Experinece">Other Teaching Experinece</label>
    <div class="col-5">
        <textarea class="form-control border border-secondary" id="Other Teaching Experinece" rows="3"></textarea>
    </div>
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1"> Total Experinece</label>
    <div class="col-5">
        <textarea class="form-control border border-secondary" id="Total Experinece" rows="3"></textarea>
    </div>
    </div>
    <div class="form-group">
        <label for="Designation">Designation of Faculty as on date of joining:</label>
        <div class="col-5"><input type="name" class="form-control border border-secondary"  id="Designation"></div>
    </div>
    <div class="form-group">
        <label for="Promoted Designation first">1st Promoted Designation:</label>
        <div class="col-5"><input type="name" class="form-control border border-secondary"  id=" Promoted Designation first"></div>
    </div>
    <div class="col-5">
      <label for="Promotionfirst" >Date of 1st Promotion </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" value="2011-08-19" id="Promotionfirst">
      </div>
    </div>
    <div class="form-group">
        <label for="Promoted Designation second">2nd Promoted Designation:</label>
        <div class="col-5"><input type="name" class="form-control border border-secondary"  id=" Promoted Designation second"></div>
    </div>
    <div class="col-5">
      <label for="Promotionsecond" >Date of2nd Promotion </label>
      <div class="col-6">
        <input class="form-control border border-secondary" type="date" value="2011-08-19" id="Promotionsecond">
      </div>
    </div>
    <label style="margin-left:10px" for="pdf Upload" >pdf Upload:</label>
    <div class="custom-file mb-3">
    <div class="col-5">
      <input  type="file" class="custom-file-input" id="customFile" name="filename">
      <label style="margin-left:30px" class="custom-file-label border border-secondary" for="customFile">Choose file</label>
    </div>
    </div>

  <div class="btn">
  <button type="submit" class="btn btn-primary ">Submit</button>
    </div>



</form>   
</body>


<script>

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</html>