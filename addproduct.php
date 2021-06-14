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
                        <h4><i class="icon-plus-sign icon-large"></i> Add Medicine</h4>
                    </center>
                    <hr>
                    <form class="mx-5" id="addmed" method="post" name="addmed">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="brandname" id="brandname" placeholder="Brand Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="genericname" id="genericname" placeholder="Generic Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mcat">Medicine Category</label>
                                    <select class="form-control" name="mcat" id="mcat" required>
                                        <option value="Capsule">Capsule</option>
                                        <option value="Tablet">Tablet</option>
                                        <option value="Syrup">Syrup</option>
                                        <option value="Liquid">Liquid</option>
                                        <option value="Drop">Drop</option>
                                        <option value="Inhaler">Inhaler</option>
                                        <option value="Injection">Injection</option>
                                        <option value="Cream and Oinment">Cream and Oinment</option>
                                        <option value="Powder">Powder</option>
                                        <option value="Protein Suppliment">Protein Suppliment</option>
                                        <option value="Spray">Spray</option>
                                        <option value="Surgical Equipment">Surgical Equipment</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="desc">Description</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="desc" id="desc" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="adate">Arrival Date</label>
                                    <input type="date" class="form-control" name="adate" id="adate" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="adate">Expiry Date</label>
                                    <input type="date" class="form-control" name="xdate" id="edate" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="oprice">Original Price</label>
                                    <input type="number" class="form-control" name="oprice" id="oprice" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="sprice">Selling Price</label>
                                    <input type="number" class="form-control" name="sprice" id="sprice" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="qty">Quantity</label>
                                    <input type="number" class="form-control" name="qty" id="qty" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="supp">Supplier</label>
                                    <select class="form-control" id="supp" name="supp" required>
                                        <option value="Sun Pharma">Sun Pharma</option>
                                        <option value="Phyzer">Phyzer</option>
                                        <option value="Cipla">Cipla</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="eperson">Entry Person</label>
                                    <select class="form-control" id="eperson" name="eperson" required>
                                        <option value="Ajay">Ajay</option>
                                        <option value="Vijay">Vijay</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex">
                                <input type="submit" class="btn btn-primary btn-block mt-2 align-self-center mx-auto" value="Add">
                            </div>
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
            showMed();
        })


        function showMed() {
            var showMed = "showMed";
            jQuery.ajax({
                url: 'showmed.php',
                type: 'post',
                data: {
                    showMed: showMed
                },
                success: function(data) {
                    $('#meds').html(data);
                }
            });
        }


        jQuery('#addmed').on('submit', function(e) {
            jQuery.ajax({
                url: 'addproductbackend.php',
                type: 'post',
                data: jQuery('#addmed').serialize(),
                success: function(data) {
                    if (data == "Product_Added") {
                        showMed();
                        $('#addmed')[0].reset();
                    }
                }
            });
            e.preventDefault();
        });
    </script>






</body>

</html>