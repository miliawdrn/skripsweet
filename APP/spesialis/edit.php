<?php

?>

<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Job Order Details</title>
  </head>
  <body>
    
    <div class="main-container d-flex">
        <?php include ("sidebar.php") ?>
        <div class="content">
            <div class="col-md-12 py-3 px-3">
                    <div class="card">
                        <div class="card-header">
                            Job Order List >> Details >> Edit
                        </div>
                        <div class="card-body">
                            <div class="container-fluid px-1">
                                <table class="table table-bordered">
                                    <!--Edit JO-->
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <label for="JobOrder" class="col-form-label">JO</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="JobOrder" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <!--Edit Input Date-->
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <label for="InputDate" class="col-form-label">Input Date</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="InputDate" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <!--Edit Due Date-->
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <label for="DueDate" class="col-form-label">Due Date</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="DueDate" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <!--Edit Product Name-->
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <label for="ProductName" class="col-form-label">Product Name</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="ProductName" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <!--Edit Genecric Name-->
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <label for="GenericName" class="col-form-label">Generic Name</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="GenericName" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <!--Edit Drug Category-->
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <label for="category" class="col-form-label">Drug Category</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="category" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <!--Edit Dossage Form-->
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <label for="Dossage" class="col-form-label">Dossage Form</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="Dossage" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <!--Edit ROA-->
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <label for="ROA" class="col-form-label">Route Of Administration</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="ROA" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <!--Edit storage-->
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <label for="storage" class="col-form-label">Storage</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="storage" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <!--Edit MFG-->
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <label for="mfg" class="col-form-label">Manufactured</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="mfg" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <!--Edit For-->
                                    <div class="row g-3">
                                        <div class="col-auto">
                                            <label for="mfg" class="col-form-label">For</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="mfg" class="form-control" disabled>
                                        </div>
                                    </div>
                                    
                                </table>
                                <button class="btn btn-danger" type="button" onclick="">Save</button>
                                <button class="btn btn-danger" type="button" onclick="">Cancel</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/jquery-3.6.0.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>