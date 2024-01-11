<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Simple Notes Application For Assignment" />
    <meta name="author" content="Muhammad Askar Habibulloh" />
    <title>Simple Note</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/') ?>journal.svg" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
    <style>
        label {
            color: white;
        }
    </style>
</head>

<body style="background: url('<?= base_url("assets/img/") ?>g.png') no-repeat center center fixed; background-size: cover; background-color:black;">


    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-2 text-uppercase">Create Account</h2>
                            <form method="post" action="<?= base_url('user/registration') ?>">
                                <div class="form-outline form-white mb-4">
                                    <label for="typeUsername">Username</label>
                                    <input type="text" id="typeUsername" name="typeUsername" class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label for="typePassword">Password</label>
                                    <input type="password" id="typePassword" name="typePassword" class="form-control form-control-lg" />
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <label for="typePasswordConfirm">Password Confirmation</label>
                                    <input type="password" id="typePasswordConfirm" name="typePasswordConfirm" class="form-control form-control-lg" />
                                </div>
                                <button class="btn btn-outline-light btn-lg px-5 mt-3" type="submit">Register</button>
                            </form>
                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                            </div>

                        </div>

                        <div>
                            <p class="mb-0"> Have an account? <a href="<?= base_url('user/login_page') ?>" class="text-white-50 fw-bold">Sign In</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/') ?>js/scripts.js"></script>
</body>

</html>