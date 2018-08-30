<?php
require "connect.php";
$meSql = "SELECT * FROM pttes2 ";
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
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add DATA</button>
  </nav>

  <form action="new.php" method="post">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">tomerID</label>
<input type="number" class="form-control" id="1" name="1" placeholder="tomerID">
</div>
<div class="form-group col-md-6">
<label for="inputPassword4">Name(eng)</label>
<input type="text" class="form-control" id="2" name="2"placeholder="Name(eng)">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-5">
<label for="inputEmail4">Name(Thai)</label>
<input type="text" class="form-control" id="3" name="3" placeholder="Name(Thai)">
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
<input type="text" class="form-control" id="7" name="7" placeholder="Tel1">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-4">
<label for="inputEmail4">Tel2</label>
<input type="text" class="form-control" id="8"  name="8" placeholder="Tel2">
</div>
<div class="form-group col-md-4">
<label for="inputPassword4">O1</label>
<input type="text" class="form-control" id="9" name="9" placeholder="O1">
</div>
<div class="form-group col-md-4">
<label for="inputPassword4">Email</label>
<input type="email" class="form-control" id="10" name="10" placeholder="Email">
</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">ADD</button>
      </div>
    </div>
  </div>
</div>
</form>
  <br>
  <br>
  <br>
  <table class="table table-striped">
                  <thead>
                      <tr>
                          <th scope="col">tomerID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Name2</th>

                          <th scope="col">Dep</th>

                          <th scope="col">Tel1</th>
                          <th scope="col">Tel2</th>
                          <th scope="col">O1</th>
                          <th scope="col">Email</th>
                          <th scope="col">#</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      while ($meResult = mysqli_fetch_assoc($meQuery))
                      {
                          ?>
                          <tr >

                              <th scope="row"><?php echo $meResult['tomerID']; ?></td>
                              <td><?php echo $meResult['Name']; ?></td>
                              <td><?php echo $meResult['Name2']; ?></td>

                              <td><?php echo $meResult['Dep']; ?></td>

                              <td><?php echo $meResult['Tel1']; ?></td>
                              <td><?php echo $meResult['Tel2']; ?></td>
                              <td><?php echo $meResult['O1']; ?></td>
                              <td><?php echo $meResult['Email']; ?></td>
                              <td><button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">เพิ่มเติม</button>
                                <div class="dropdown-menu">

                                <a class="dropdown-item"href="edit.php?editId=<?php echo $meResult['tomerID']; ?>" role="button">

                                    แก้ไข</a>
                                  <a class="dropdown-item" href="delete.php?Id=<?php echo $meResult['tomerID']; ?>" role="button">

                                      ลบ</a>
</div>
                              </td>

                          </tr>
                          <?php
                      }
                      ?>
                        <form method="post" action="new.php?Id=<?php echo $meResult['tomerID']; ?>">

                          </form>
                  </tbody>
              </table>
              <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
