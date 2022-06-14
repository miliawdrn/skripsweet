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

    <style>
        th {
            width: 20%;
            }
        td {
            width: fit-content;
        }
    </style>

    <title>Corrector Job Order Details</title>
  </head>
  <body>
    
    <div class="main-container d-flex">
        <?php include ("sidebar-corrector.php") ?>
        <div class="content">
            <div class="col-md-12 py-3 px-3">
                    <!--<div class="card">-->
                        <!--<div class="card-body">-->
                            <div class="container-fluid px-1">
                                <table class="table table-bordered">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Registration</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                                        <label class="form-check-label" for="inlineRadio3">Launching</label>
                                    </div>
                                    <tbody>
                                        <tr>
                                            <th>JO</th>
                                            <td>emilia</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>Registration</td>
                                        </tr>
                                        <tr>
                                            <th>Input Date</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Due Date</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Product Name</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Generic Name</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Drug Category</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Dosage Form</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Route Of Administration</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Storage</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Manufactured by</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>For</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Marketed by</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Imported by</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Under License</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Distributed by</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>No Change Control</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Change Detail</th>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Composition</th>
                                            <td>emilia</td>
                                        </tr>
                                        <tr>
                                            <th>Presentation</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>NIE</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Packaging</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Dimension</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Material</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Item Number</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Specialist</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Designer</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Corrector</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Attachment</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Process</th>
                                            <td>Drafting</td>
                                        </tr>
                                        <tr>
                                            <th>Attachment</th>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mb-3">
                                    <label for="attachment" class="form-label">Final Artwork</label>
                                    <textarea class="form-control" id="attachment" rows="3" placeholder="Upload Artwork"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="attachment" class="form-label">Note</label>
                                    <textarea class="form-control" id="attachment" rows="3" placeholder="Upload attachment"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="corrector" class="form-label">Assign To</label>
                                    <select class="form-select mb-3" aria-label=".form-select-lg example">
                                        <option selected disabled>Corrector</option>
                                        <option value="1">EDI</option>
                                        <option value="2">BSM</option>
                                        <option value="3">NHT</option>
                                        <option value="4">NAH</option>
                                    </select>
                                </div>
                                <button class="btn btn-danger" type="button" onclick="">Done</button>
                                <button class="btn btn-danger" type="button" onclick="">Cancel</button>
                            </div>
                        <!--</div>-->
                    <!--</div>-->
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