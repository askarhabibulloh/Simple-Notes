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


        textarea {
            width: 100%;
            height: 80vh;
            /* From https://css.glass */
            background: rgba(255, 255, 255, 0.005);
            border: 1px solid rgba(255, 255, 255, 0.0);
            color: darkgray;
            resize: none;
            padding: 20px 20px;
            font: 18px/35px 'Cousine', monospace;
            /* font-family: 'Roboto Mono';
            font-weight: 300; */
        }

        nav {
            height: 100vh;
        }

        textarea:focus {
            outline: none;
        }

        .username {
            font-weight: bold;
        }

        .username:hover {
            background-color: white;
        }

        .logout:hover {
            color: black;
            background-color: #ffc107;
        }

        .clear:hover {
            color: black;
            background-color: #ffc107;
        }
    </style>
</head>

<body style="background: url('<?= base_url("assets/img/") ?>g.png') no-repeat center center fixed; background-size: cover; background-color:black;">

    <!-- Page Content-->
    <nav class="navbar bg-body-tertiary">
        <form class=" container justify-content-end gap-3">
            <textarea class=" fs-5 " name="" id="" cols="30" rows="10" placeholder="Type Something"></textarea>

            <div class="btn-group dropup">
                <button type="submit" class="btn btn-secondary">
                    Save Notes
                </button>
                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" style="min-width: 8rem;padding:0;">
                    <li>
                        <p class="dropdown-item username">Username</p>

                    <li><a class="dropdown-item logout" href="<?= base_url('user/logout') ?>">Logout</a></li>
                    <li><a class="dropdown-item clear" href="#">Clear Notes</a></li>
                </ul>
            </div>
        </form>
    </nav>



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/') ?>js/scripts.js"></script>
</body>

</html>