<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Summary of Orders</title>
    <meta name="description" content="Summary Orders">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/adminstyle.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->
    <?php include('./includes/header-admin.html'); ?>
    <div id="right-panel" class="right-panel">
    <?php include('./includes/header-admin2.html'); ?>
        <div class="col-md-12" style="padding: 0px;">
            <div class="card">
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead style="background color: #f89d13;">
                            <tr>
                                <th>ID</th>
                                <th>COSTUMER NAME</th>
                                <th>ORDER</th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark Santos</td>
                                <td>Buffalo Wings</td>
                                <td>P240</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Timothy Curtis</td>
                                <td>Buttered Wings</td>
                                <td>P520</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Lisa Mitchell</td>
                                <td>Korean Bbq Wings</td>
                                <td>P120</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Johnny Barrett</td>
                                <td>Honey Butter Wings</td>
                                <td>P360</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
