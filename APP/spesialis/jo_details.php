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
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" disabled>
                    <label class="form-check-label" for="inlineCheckbox1">Registrasi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" disabled>
                    <label class="form-check-label" for="inlineCheckbox2">Launching</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                    <label class="form-check-label" for="inlineCheckbox3">New</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4" disabled>
                    <label class="form-check-label" for="inlineCheckbox4">Change</label>
                </div>
                            <div class="mb-3">
                                <label for="JONumber" class="form-label">JO Number</label>
                                <input type="text" class="form-control" id="JONumber" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="InputDate" class="form-label">Input Date</label>
                                <input type="text" class="form-control" id="InputDate" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="DueDate" class="form-label">Due Date</label>
                                <input type="text" class="form-control" id="DueDate" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="ProductName" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="ProductName" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="GenericName" class="form-label">Generic Name</label>
                                <input type="text" class="form-control" id="GenericName" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="DrugCategory" class="form-label">Drug Category</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" disabled>
                                    <option selected disabled>Drug Category</option>
                                    <option value="1">Obat Bebas</option>
                                    <option value="2">Obat Keras</option>
                                    <option value="3">Obat Bebas Terbatas</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="DossageForm" class="form-label">Dossage Form</label>
                                <input type="text" class="form-control" id="DossageForm" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="ROA" class="form-label">Route Of Administration</label>
                                <input type="text" class="form-control" id="ROA" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="Storage" class="form-label">Storage</label>
                                <input type="text" class="form-control" id="Storage" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="mfg" class="form-label">Manufactured By</label>
                                <input type="text" class="form-control" id="mfg" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="for" class="form-label">For</label>
                                <input type="text" class="form-control" id="for" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="marketed" class="form-label">Marketed By</label>
                                <input type="text" class="form-control" id="marketed" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="imported" class="form-label">Imported By</label>
                                <input type="text" class="form-control" id="imported" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="licensed" class="form-label">Under License</label>
                                <input type="text" class="form-control" id="licensed" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="distributed" class="form-label">Distributed By</label>
                                <input type="text" class="form-control" id="distributed" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="cc" class="form-label">No Change Control</label>
                                <input type="text" class="form-control" id="cc" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="ccDetail" class="form-label">Change Detail</label>
                                <textarea class="form-control" id="ccDetail" rows="3" disabled></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="cc" class="form-label">No Change Control</label>
                                <input type="text" class="form-control" id="cc" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="Composition" class="form-label">Composition</label>
                                <input type="text" class="form-control" id="Composition" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="presentation" class="form-label">Presentation</label>
                                <input type="text" class="form-control" id="presentation" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="nie" class="form-label">NIE</label>
                                <input type="text" class="form-control" id="nie" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="packaging" class="form-label">Packaging</label>
                                <input type="text" class="form-control" id="packaging" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="no-item" class="form-label">No Item</label>
                                <input type="text" class="form-control" id="no-item" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="dimension" class="form-label">Dimension</label>
                                <input type="text" class="form-control" id="dimension" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="material" class="form-label">Material</label>
                                <input type="text" class="form-control" id="material" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="spesialis" class="form-label">Specialist</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" disabled> 
                                    <option selected disabled>Specialist</option>
                                    <option value="1">GMO</option>
                                    <option value="2">YKN</option>
                                    <option value="3">MMI</option>
                                    <option value="4">MEA</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="designer" class="form-label">Designer</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" disabled>
                                    <option selected disabled>Designer</option>
                                    <option value="1">DYA</option>
                                    <option value="2">DDN</option>
                                    <option value="3">HAO</option>
                                    <option value="4">HDA</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="corrector" class="form-label">Corrector</label>
                                <select class="form-select mb-3" aria-label=".form-select-lg example" disabled>
                                    <option selected disabled>Corrector</option>
                                    <option value="1">EDI</option>
                                    <option value="2">BSM</option>
                                    <option value="3">NHT</option>
                                    <option value="4">NAH</option>
                                </select>
                            </div>
                            <!-- attachment
                            <div class="mb-3">
                                <label for="attachment" class="form-label">Attachment</label>
                                <textarea class="form-control" id="attachment" rows="3" placeholder="Upload attachment"></textarea>
                            </div>-->
                            <!--ini harusnya download sih-->
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Attachment</label>
                                <input class="form-control" type="file" id="formFile" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Artwork Draft</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Artwork final</label>
                                <input class="form-control" type="file" id="formFile">
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