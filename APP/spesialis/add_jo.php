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
        .form-label {
            font-weight : bold;
            margin-top : 5px;
        }
    </style>
    <title>Add Job Order</title>
  </head>
  <body>
    
    <div class="main-container d-flex">
        <?php include ("sidebar.php") ?>
        <div class="content">
            <div class="col-md-12 py-3 px-3">
                <div class="row">
                    <div class="col">
                        <label for="JONumber" class="form-label">JO Number</label>
                        <input type="text" class="form-control" placeholder="JO Number" aria-label="JONumber">
                    </div>
                    <div class="col py-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Registrasi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Launching</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">New</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                            <label class="form-check-label" for="inlineCheckbox4">Change</label>
                        </div>
                        <button class="btn btn-warning" type="button" onclick="" style="float-right">Cancel</button>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="formFile" class="form-label">Input Date</label>
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                        <label for="formFile" class="form-label">Due Date</label>
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="ProductName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" placeholder="Product name" id="ProductName" aria-label="ProductName">
                    </div>
                    <div class="col">
                        <label for="GenericName" class="form-label">Generic Name</label>
                        <input type="text" class="form-control" placeholder="GenericName" id="GenericName" aria-label="GenericName">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="DrugCategory" class="form-label">Drug Category</label>
                        <select class="form-select mb-3" aria-label=".form-select-lg example">
                                    <option selected disabled>Drug Category</option>
                                    <option value="1">Obat Bebas</option>
                                    <option value="2">Obat Keras</option>
                                    <option value="3">Obat Bebas Terbatas</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="DossageForm" class="form-label">Dossage Form</label>
                        <input type="text" class="form-control" placeholder="Dossage Form" id="DossageForm" aria-label="DossageForm">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="ROA" class="form-label">Route Of Administration</label>
                        <input type="text" class="form-control" placeholder="Route Of Administration" id="ROA" aria-label="ROA">
                    </div>
                    <div class="col">
                        <label for="Storage" class="form-label">Storage</label>
                        <input type="text" class="form-control" placeholder="Storage" id="Storage" aria-label="Storage">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="mfg" class="form-label">Manufactured By</label>
                        <input type="text" class="form-control" placeholder="Manufactured By" id="mfg" aria-label="mfg">
                    </div>
                    <div class="col">
                        <label for="for" class="form-label">For</label>
                        <input type="text" class="form-control" placeholder="For" id="for" aria-label="for">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="mkt" class="form-label">Marketed By</label>
                        <input type="text" class="form-control" placeholder="Marketed By" id="mkt" aria-label="mkt">
                    </div>
                    <div class="col">
                        <label for="imported" class="form-label">Imported By</label>
                        <input type="text" class="form-control" placeholder="Imported By" id="imported" aria-label="imported">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="licensed" class="form-label">Under License</label>
                        <input type="text" class="form-control" placeholder="Under License" id="license" aria-label="license">
                    </div>
                    <div class="col">
                        <label for="distributed" class="form-label">Distributed By</label>
                        <input type="text" class="form-control" placeholder="Distributed By" id="distributed" aria-label="distributed">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="ccNumber" class="form-label">No Change Control</label>
                        <textarea class="form-control" id="ccNumber" rows="3"></textarea>
                    </div>
                    <div class="col">
                        <label for="ccDetail" class="form-label">Change Control Detail</label>
                        <textarea class="form-control" id="ccDetail" rows="3"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="composition" class="form-label">Composition</label>
                        <textarea class="form-control" id="composition" rows="3"></textarea>
                    </div>
                    <div class="col">
                        <label for="persentation" class="form-label">Persentation</label>
                        <textarea class="form-control" id="persentation" rows="3"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="nie" class="form-label">NIE</label>
                        <input type="text" class="form-control" placeholder="NIE" id="nie" aria-label="nie">
                    </div>
                    <div class="col">
                        <label for="distributed" class="form-label">Distributed By</label>
                        <select class="form-select mb-3" aria-label=".form-select-lg example">
                            <option selected disabled>Packaging type</option>
                            <option value="1">Doos</option>
                            <option value="2">Label</option>
                            <option value="3">Poly</option>
                            <option value="4">Alufoil</option>
                            <option value="5">Alutube</option>
                            <option value="6">Leaflet</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="NoItem" class="form-label">No Item</label>
                        <input type="text" class="form-control" placeholder="No Item" id="NoItem" aria-label="NoItem">
                    </div>
                    <div class="col">
                        <label for="dimension" class="form-label">Dimension</label>
                        <input type="text" class="form-control" placeholder="20x30x50 mm" id="dimension" aria-label="dimension">
                    </div>
                    <div class="col">
                        <label for="material" class="form-label">Material</label>
                        <input type="text" class="form-control" placeholder="Ivory 320 gsm" id="material" aria-label="material">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="specialist" class="form-label">Specialist</label>
                        <select class="form-select mb-3" aria-label=".form-select-lg example">
                            <option selected disabled>Specialist</option>
                            <option value="1">GMO</option>
                            <option value="2">a</option>
                            <option value="3">b</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="corrector" class="form-label">Corrector</label>
                        <select class="form-select mb-3" aria-label=".form-select-lg example">
                            <option selected disabled>Corrector</option>
                            <option value="1">Emilia</option>
                            <option value="2">c</option>
                            <option value="3">b</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="drafter" class="form-label">Drafter</label>
                        <select class="form-select mb-3" aria-label=".form-select-lg example">
                            <option selected disabled>Drafter</option>
                            <option value="1">Emilia</option>
                            <option value="2">c</option>
                            <option value="3">b</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <label for="Attachment" class="form-label">Attachment</label>
                        <input type="file" class="form-control mb-2" id="inputGroupFile01">
                        <button type="submit" class="btn btn-primary">Download Attachment</button>
                    </div>
                    <div class="col">
                        <label for="ArtwrokDraft" class="form-label">Artwrok Draft</label>
                        <input type="file" class="form-control mb-2" id="inputGroupFile01" disabled>
                        <button type="submit" class="btn btn-primary" disabled>Download Artwrok Draft</button>
                    </div>
                    <div class="col">
                        <label for="ArtwrokFinal" class="form-label">Artwrok Final</label>
                        <input type="file" class="form-control mb-2" id="inputGroupFile01" disabled>
                        <button type="submit" class="btn btn-primary" disabled>Download Artwrok Final</button>
                    </div>
                    
                </div>

                <div class="mb-3">
                    <button class="btn btn-danger" type="button" onclick="">Submit</button>
                    <button class="btn btn-warning" type="button" onclick="">Cancel</button>
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