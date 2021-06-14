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

            <div class="info">
                <div class="container px-5">
                    <center>
                        <h4><span class="icon-plus-sign icon-large"></span> Add Supplier</h4>
                    </center>
                    <hr>
                    <form class="mx-5" id="addsupp" method="post" name="addsupp">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="suppname" id="suppname" placeholder="Supplier Name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cperson" id="cperson" placeholder="cperson" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="contact" id="contact" placeholder="Contact Number" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Address"></textarea>
                        </div>

                        <div class="d-flex">
                            <input type="submit" class="btn btn-primary px-5 mt-2 align-self-center mx-auto" value="Add">
                        </div>
                    </form>

                    <hr style="border: 1px solid grey;">
                </div>
                <div id="meds">

                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            showSupp();
        })


        function showSupp() {
            var showSupp = "showSupp";
            jQuery.ajax({
                url: 'showsupp.php',
                type: 'post',
                data: {
                    showSupp: showSupp
                },
                success: function(data) {
                    $('#meds').html(data);
                }
            });
        }


        jQuery('#addsupp').on('submit', function(e) {
            jQuery.ajax({
                url: 'addsuppbackend.php',
                type: 'post',
                data: jQuery('#addsupp').serialize(),
                success: function(data) {
                    if (data == "Supp_Added") {
                        showSupp();
                        $('#addsupp')[0].reset();
                    }
                }
            });
            e.preventDefault();
        });
    </script>
</body>

</html>