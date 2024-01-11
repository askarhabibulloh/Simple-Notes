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
        @import url('https://fonts.googleapis.com/css2?family=Cousine&display=swap');

        .container-custom {
            height: 100%;
        }

        textarea {
            width: 100%;
            height: 80vh;
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.005);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(2px);
            -webkit-backdrop-filter: blur(2px);
            border: 1px solid rgba(255, 255, 255, 0.0);
            color: darkgray;
            resize: none;
            padding: 20px 20px;
            font: 18px/35px 'Cousine', monospace;
            /* font-family: 'Roboto Mono';
            font-weight: 300; */
        }

        textarea:focus {
            outline: none;
        }
    </style>
</head>

<body style="background: url('<?= base_url("assets/img/") ?>bg.png') no-repeat center center fixed; background-size: cover;">

    <!-- Page Content-->
    <nav class="navbar bg-body-tertiary">
        <form class=" container justify-content-end gap-3">
            <textarea class="my-5 fs-5 " name="" id="" cols="30" rows="10"></textarea>
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