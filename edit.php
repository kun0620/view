<?php
require 'connect.php';
$editid = isset($_GET['editId']) ? $_GET['editId'] : "";
$meSql = "SELECT * FROM pttes2 WHERE tomerID = '$editid'";
$pi = $editid;
$meQuery = mysqli_query($con,$meSql);
 ?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <title>Edit Data</title>
  </head>

  <body>
    <nav class="navbar fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#">DATA</a>
    <a href="index.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">BACK</a>
    </nav>
    <br>
    <br>
    <br>
    <form action="update.php" method="post">
      <?php
      while ($meResult = mysqli_fetch_assoc($meQuery))
      {
          ?>
          <tr >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-row">
  <div class="form-group col-md-6">
  <label for="inputEmail4">tomerID</label>
  <input type="number" class="form-control" id="1" name="1" value="<?php echo $meResult['tomerID']; ?>" readonly="readonly">
  </div>
  <div class="form-group col-md-6">
  <label for="inputPassword4">Name(eng)</label>
  <input type="text" class="form-control" id="2" name="2"value="<?php echo $meResult['Name']; ?>">
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-5">
  <label for="inputEmail4">Name(Thai)</label>
  <input type="text" class="form-control" id="3" name="3" value="<?php echo $meResult['Name2']; ?>">
  </div>
  <div class="form-group col-md-3">
    <label for="inputState">Dep</label>
          <select id="5" name="5" class="form-control">
            <option selected>PSD</option>
            <option>KE</option>
            <option>SHE</option>
            <option>RAI</option>
            <option>SCP</option>
            <option>BD</option>
            <option>HR</option>
          </select>
  </div>
  <div class="form-group col-md-4">
  <label for="inputPassword4">Tel1</label>
  <input type="text" class="form-control" id="7" name="7" value="<?php echo $meResult['Tel1']; ?>">
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
  <label for="inputEmail4">Tel2</label>
  <input type="text" class="form-control" id="8"  name="8" value="<?php echo $meResult['Tel2']; ?>">
  </div>
  <div class="form-group col-md-4">
  <label for="inputPassword4">O1</label>
  <input type="text" class="form-control" id="9" name="9" value="<?php echo $meResult['O1']; ?>">
  </div>
  <div class="form-group col-md-4">
  <label for="inputPassword4">Email</label>
  <input type="email" class="form-control" id="10" name="10" value="<?php echo $meResult['Email']; ?>">
  </div>
  </div>
        </div>
        <div class="modal-footer">

          <button type="submit" class="btn btn-primary">SAVE</button>
        </div>
      </div>
    </div>
  <?php } ?>
  </form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
