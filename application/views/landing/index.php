<!DOCTYPE html>
<html lang="en">

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
        .container-custom {
            height: 100%;
        }

        textarea {
            width: 100%;
            height: 80vh;
        }
    </style>
</head>

<body style="background: url('<?= base_url("assets/img/") ?>bg.png') no-repeat center center fixed; background-size: cover;">

    <!-- Navigation-->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand fs-6" href="#!">Simple Note by Askarhabibulloh</a>
        </div>
    </nav> -->
    <!-- Page Content-->
    <div class="container position-relative">
        <textarea class="my-5" name="" id="" cols="30" rows="10"></textarea>

    </div>
    <nav class="navbar bg-body-tertiary">
        <form class="container justify-content-end">
            <button class="btn btn-outline-success me-2" type="button">Save</button>
            <button class="btn btn-outline-danger" type="button">Clear</button>
        </form>
    </nav>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/') ?>js/scripts.js"></script>
</body>

</html>