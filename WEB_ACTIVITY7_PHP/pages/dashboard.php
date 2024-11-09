<?php 
    session_start();
    if(!isset($_SESSION['email']) || !isset($_SESSION['password'])){
        header('location:../');
        exit();
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
        <title>Dashboard</title>
        <?php include('../layout/style.php');?>
    </head>
    <body class="sb-nav-fixed">
       <?php include('../layout/header.php');?>
        <div id="layoutSidenav">
            <?php include('../layout/navigation.php');?>
                    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Your Email: <?php echo $_SESSION['email'];?></li>
                            <li class="breadcrumb-item active">Your Password: <?php echo $_SESSION['password'];?></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
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
                                    <tbody>
                                        <tr>
                                            <td>DC.HERMAN </td>
                                            <td>INFORMATION TECHNOLOGY</td>
                                            <td>JAPAN</td>
                                            <td>45</td>
                                            <td>2015/07/15</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>MEKOL CARB</td>
                                            <td>INFORMATION SYSTEM</td>
                                            <td>Tokyo</td>
                                            <td>47</td>
                                            <td>2016/08/16</td>
                                            <td>$270,210</td>
                                        </tr>
                                        <tr>
                                            <td>JOHNNY SINS</td>
                                            <td>M.D.</td>
                                            <td>JAPANIES</td>
                                            <td>46</td>
                                            <td>2017/09/17</td>
                                            <td>$150,000</td>
                                        </tr>
                                        <tr>
                                            <td>LEXIE HERNANDES </td>
                                            <td>ENGINEERING</td>
                                            <td>JAPANNIES</td>
                                            <td>49</td>
                                            <td>2018/03/29</td>
                                            <td>$500,000</td>
                                        </tr>
                                        <tr>
                                            <td>TOKILL S.</td>
                                            <td>COMPUTER ENGINEERING</td>
                                            <td>PAKASKASAN</td>
                                            <td>24</td>
                                            <td>2019/32/23</td>
                                            <td>$450,000</td>
                                        </tr>
                                        <tr>
                                            <td>TOP 1 PH</td>
                                            <td>COMPUTER SCIENCE</td>
                                            <td>QUEZON</td>
                                            <td>28</td>
                                            <td>2020/06/16</td>
                                            <td>$100,000</td>
                                        </tr>
                                        <tr>
                                            <td>BELLA D. CRUZ</td>
                                            <td>COMPUTER SCIENCE</td>
                                            <td>BOAC</td>
                                            <td>19</td>
                                            <td>2021/02/09</td>
                                            <td>$1200,500</td>
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