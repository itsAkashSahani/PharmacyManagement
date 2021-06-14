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
                        <h4><span class="icon-plus-sign icon-large"></span> Add </h4>
                    </center>
                    <hr>
                    <form class="mx-5" id="addsp" method="post" name="addsp">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="contact" id="contact" placeholder="Contact Number" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="contact" id="contact" placeholder="Contact Number" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="qual">Qualification</label>
                                    <select class="form-control" id="qual" name="qual" required>
                                        <option value="D Pharm">D Pharm</option>
                                        <option value="B Pharm">B Pharm</option>
                                        <option value="M Pharm">M Pharm</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="exp">Experience</label>
                                    <input type="number" class="form-control" name="exp" id="exp" placeholder="Years" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="uid">UID No.</label>
                                    <input type="text" class="form-control" name="uid" id="uid" placeholder="Aadhar or Pan No." required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label for="sal">Salary</label>
                                    <input type="number" class="form-control" name="sal" id="sal" placeholder="Per Annum" required>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <input type="submit" class="btn btn-primary px-5 align-self-center mx-auto" value="Add">
                        </div>
                    </form>

                    <hr style="border: 1px solid grey;">
                </div>
                <div id="sp">

                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            showSp();
        })


        function showSp() {
            var showSp = "showSp";
            jQuery.ajax({
                url: 'showperson.php',
                type: 'post',
                data: {
                    showSp: showSp
                },
                success: function(data) {
                    $('#sp').html(data);
                }
            });
        }


        jQuery('#addsp').on('submit', function(e) {
            jQuery.ajax({
                url: 'addpersonbackend.php',
                type: 'post',
                data: jQuery('#addsp').serialize(),
                success: function(data) {
                    if (data == "Person_Added") {
                        showSp();
                        $('#addsp')[0].reset();
                    }
                }
            });
            e.preventDefault();
        });
    </script>
</body>

</html>