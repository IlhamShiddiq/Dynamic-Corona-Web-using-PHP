<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- More CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/all.min.css">

    <link rel="icon" type="image/png" href="assets/image/icon.png">

    <title>Admin Login | Corona Web</title>
</head>
<body>
    
    <div class="container-fluid bg-login">
        <div class="overlay-white">
            <div class="container">
                <div class="text mt-5">
                    <h1 class="welcome">Welcome Admin</h1>
                    <h5 class="no">No <strong>Account</strong>, No <strong>Access</strong></h5>
                </div>
                <div class="wrapper-form">
                    <div class="circle-wrapper">
                        <div class="circle-virus">
                            <img src="assets/image/virus.png" width="75">
                        </div>
                    </div>
                    <div class="form">
                        <form action="process/login-check.php" method="post">
                            <div class="form-group">
                              <label >Username</label>
                              <input type="text" class="form-control" name="username" autocomplete="off" required placeholder="Enter username">
                            </div>
                            <div class="form-group">
                              <label >Password</label>
                              <input type="password" class="form-control" name="password" autocomplete="off" required placeholder="Enter password">
                            </div>
                            <div class="button">
                                <button type="submit" class="btn btn-primary mt-4 shadow">Submit</button>
                            </div>
                        </form>
                    </div>

                    <?php if(isset($_GET['failed_request_data'])): ?>

                    <div class="alert alert-dismissible fade show text-center" role="alert">
                        <strong>Account</strong> is not recognized!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- More JS -->
    <script src="assets/js/all.min.js"></script>

</body>
</html>