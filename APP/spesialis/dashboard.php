<?php

?>

<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard Specialist</title>
  </head>
  <body>
    
    <div class="main-container d-flex">
        <?php include ("sidebar.php") ?>
        <div class="content">
            <!--
            <nav class="navbar pb-3 sticky-top">
                <div class="container-fluid py-3">
                    <button class="btn btn-outline-success" type="button"><i class="fas fa-plus-square"></i>&nbsp Add Job Order</button>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </nav>-->
            <div class="col-md-12 py-3 px-3">
                <!--<div class="card">
                    <div class="card-header">
                        Job Order List
                    </div>
                    <div class="card-body">-->
                        <div class="container-fluid px-1">
                            <button class="btn btn-primary" type="button" onclick="">Add Job Order</button>
                            
                            <!--filter specialist-->
                            <div class="btn-group">
                                <form name="filter-specialist" id="filter-specialist" action="">
                                    <select class="form-control priority selectFilter" data-tagert="">
                                        <option value="" selected="selected">Sort by Specialist </option>
                                        <option data-ref="">GMO</option>
                                        <option data-ref="">YKN</option>
                                        <option data-ref="">MMI</option>
                                        <option data-ref="">MEA</option>
                                    </select>
                                </form>
                            </div>
                            <!--filter designer-->
                            <div class="btn-group">
                                <form name="filter-specialist" id="filter-specialist" action="">
                                    <select class="form-control priority selectFilter" data-tagert="">
                                        <option value="" selected="selected">Sort by Process</option>
                                        <option data-ref="">GMO</option>
                                        <option data-ref="">YKN</option>
                                        <option data-ref="">MMI</option>
                                        <option data-ref="">MEA</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr class="title">
                                    <th>No</th>
                                    <th>JO</th>
                                    <th>Product</th>
                                    <th>Due Date</th>
                                    <th>Specialist</th>
                                    <th>Process</th>
                                    <th>Action</th>
                                </tr>
                                <tbody class="isi">
                                    <tr>
                                        <td>1</td>
                                        <td>1234</td>
                                        <td>Paracetamol forte capsule powder for injection</td>
                                        <td>31 may 2022</td>
                                        <td>GMO</td>
                                        <td>Drafting</td>
                                        <td>
                                            <button class="btn btn-danger" type="button" onclick="">Details</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </thead>
                        </table>
                    <!--</div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
  </body>
</html>