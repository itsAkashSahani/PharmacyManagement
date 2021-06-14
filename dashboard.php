<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMS</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="js/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>Humera`s Pharmacy</h2>
            <ul>
                <li><a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="sales.php"><i class="fas fa-shopping-cart"></i>Purchase</a></li>
                <li><a href="addproduct.php"><i class="fas fa-plus"></i>Add Medicine</a></li>
                <li><a href="addsuppliers.php"><i class="fas fa-industry"></i>Suppliers</a></li>
                <li><a href="addperson.php"><i class="fas fa-industry"></i>Sales Person</a></li>
                <li><a href="sales.php"><i class="fas fa-chart-bar"></i>Report</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
            </ul>
            <div class="social_media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="main_content">
            <div class="header">Welcome!! Have a nice day.</div>
            <div class="info">
                <div class="dashboard">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h1 class="card-title text-center text-primary">85</h1>
                                    <h5 class="card-title text-center"><span class="fas fa-poll"></span> Sales</h5>
                                    <!-- <a href="#" class="btn btn-primary btn-block">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h1 class="card-title text-center text-primary">1200</h1>
                                    <h5 class="card-title text-center"><span class="fas fa-tablets"></span> Medicines</h5>
                                    <!-- <a href="#" class="btn btn-primary btn-block">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h1 class="card-title text-center text-primary">85</h1>
                                    <h5 class="card-title text-center"><span class="fas fa-industry"></span> Suppliers</h5>
                                    <!-- <a href="#" class="btn btn-primary btn-block">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h1 class="card-title text-center text-primary">4</h1>
                                    <h5 class="card-title text-center"><span class="fas fa-user-friends"></span> Sales Persons</h5>
                                    <!-- <a href="#" class="btn btn-primary btn-block">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h1 class="card-title text-center text-primary">85</h1>
                                    <h5 class="card-title text-center"><span class="fas fa-users"></span> Customers</h5>
                                    <!-- <a href="#" class="btn btn-primary btn-block">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h1 class="card-title text-center text-primary"><span class="fas fa-rupee-sign"></span> 2000</h1>
                                    <h5 class="card-title text-center"><span class="fas fa-chart-line"></span> Profit</h5>
                                    <!-- <a href="#" class="btn btn-primary btn-block">Go somewhere</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>