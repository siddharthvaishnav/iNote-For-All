<?php 
$result=0;
$upt=0;
$del=0;
include 'dbconnect.php';
include 'create.php';
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">




    <title>iNotes-Notes 4 ALL</title>
</head>

<body>
    <!-- Button trigger modal -->
    <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
  Edit Modal
</button>-->

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action='/inote/index.php' method='POST'>
                        <div class="mb-3">
                            <input type="hidden" name="snoEdit" id="snoEdit">
                            <label for="exampleInputEmail1" class="form-label" id="title" name="title">Note
                                Title</label>
                            <input type="text" class="form-control" id="titleEdit" name="titleEdit">

                        </div>

                        <div class="form-group my-3">
                            <label for="description" name="description">Note Description</label>
                            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit"
                                rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Note</button>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="inote.png" alt="" width="40" height="40">
            </a>
            <a class="navbar-brand" href="index.php">iNotes</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.html">About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact US</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    <?php        
   
   if($result){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Succes!</strong> You're note has been addedd successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    if($upt){
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Succes!</strong> You're note has been UPDATED successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    if($del){
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> You're note has been DELETED .
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>
    <div class="container my-3">
    

    <h2>Add a Note</h2>
        <form action='/inote/index.php' method='POST'>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" id="title" name="title">Note Title</label>
                <input type="text" class="form-control" id="title" name="title">

            </div>

            <div class="form-group my-3">
                <label for="description" name="description">Note Description</label>
                <textarea class="form-control" id="description  " name="description" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>
    <div class="container my-4">
        <?php
        include 'display.php';
        ?>
    </div>
    <hr>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>


    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });</script>

    <script>
    <?php require_once("edit.js");?>
    </script>
    <script>
    <?php require_once("delete.js");?>
    </script>

</body>

</html>