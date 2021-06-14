<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="js/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Humera`s Pharmacy</title>
</head>

<body>
    <div class="container my-5 d-flex">
        <form class="my-5 align-self-center mx-auto" id="log" method="post" name="log">

            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Username" required>
            </div>


            <div class="form-group">
                <input type="text" class="form-control" name="pass" id="pass" placeholder="Password" required>
            </div>


            <div class="d-flex">
                <input type="submit" class="btn btn-primary px-5 align-self-center mx-auto" value="Add">
            </div>
        </form>
    </div>


    <script>
        jQuery('#log').on('submit', function(e) {
            var uname = ('#name').val();
            alert(uname);
            e.preventDefault();
        });

        function login() {

        }
    </script>
</body>

</html>