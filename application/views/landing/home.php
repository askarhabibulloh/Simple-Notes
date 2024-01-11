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
        @import url('https://fonts.googleapis.com/css2?family=Cousine&display=swap');
    </style>
</head>

<body style="background: url('<?= base_url("assets/img/") ?>g.png') no-repeat center center fixed; background-size: cover; background-color:black;">

    <!-- Page Content-->
    <nav class="position-absolute text-center bg-body-tertiary top-50 start-50 translate-middle">

        <a class="btn btn-outline-light btn-lg px-5 mx-auto d-block" href="<?= base_url('user/login_page') ?>">Login</a>
        <p class="text-light  my-3">Or</p>
        <a class="btn btn-outline-light btn-lg px-5 mx-auto d-block" href="<?= base_url('user/register') ?>">Register</a>
    </nav>



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/') ?>js/scripts.js"></script>
</body>

</html>