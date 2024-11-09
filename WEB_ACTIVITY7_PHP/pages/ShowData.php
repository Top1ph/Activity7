<?php 
session_start();
if(!isset($_SESSION['email'])){
    header('Location:../');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Show Data</title>
        <?php include('../layout/style.php');?>
    </head>
    <body class="sb-nav-fixed">
       <?php include('../layout/header.php');?>
        <div id="layoutSidenav">
            <?php include('../layout/navigation.php');?>
                      
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Show Data</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Show Data</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>INFORMATION SYSTEM</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2004/03/31</td>
                                            <td>$103,600</td>
                                        </tr> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
              <?php include('../layout/footer.php');?>
            </div>
        </div>
       <?php include('../layout/script.php');?>
    </body>
</html>