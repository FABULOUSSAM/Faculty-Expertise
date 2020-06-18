<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="optionstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Option3</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark ">
        <div class="navbar_title">Qualification till-date</div>
    <img src="../img/rait logo.jpeg" class="navbar-brand ml-auto " alt="#" width=160px>
    </nav>

<form action="/action_page.php">
    <div class="form-group">
    <label for="Name">Name:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter name" id="name"></div>
    </div>
    <div class="form-group">
    <label for="Admitted for Programme">Admitted for Programme:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter programme name" id="program_name"></div>
    </div>
    <div class="form-group">
    <label for="Specialization/Department:">Specialization/Department:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter Specialization/Department" id="spec"></div>
    </div>
    <div class="form-group">
    <label for="Year of Admission:">Year of Admission:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter Year" id="addYear"></div>
    </div>
    <div class="form-group">
    <label for="University:">University:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter University Name" id="University"></div>
    </div>
    <div class="form-group">
    <label for="Registration Number:">Registration Number:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter Number" id="Registration Number"></div>
    </div>
    <div class="form-group">
    <label for="Name of College:">Name of College:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter College Name" id="Name of College"></div>
    </div>
    <div class="form-group">
    <label for="Status:">Status:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter the Status" id="Status"></div>
    </div>
    <div class="form-group">
    <label for="Topic Name:">Research Topic Name /Course Topic Name:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter the Topic" id="Topic Name"></div>
    </div>
    <div class="form-group">
    <label for="Guide Name:">Guide Name:</label>
    <div class="col-5"><input type="name" class="form-control border border-secondary" placeholder="Enter the Name" id="Guide Name"></div>
    </div>

    <label style="margin-left:10px" for="pdf Upload" >pdf Upload:</label>
    <div class="custom-file mb-3">
    <div class="col-5">
      <input  type="file" class="custom-file-input" id="customFile" name="filename">
      <label style="margin-left:33px" class="custom-file-label border border-secondary" for="customFile">Choose file</label>
    </div>
    </div>
    
    <div class="btn">
    <button type="submit" class="btn btn-primary ">Submit</button>
    </div>
    
  
   
</form>




<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>