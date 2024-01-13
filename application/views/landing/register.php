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

        .btn-outline-light:disabled {
            color: gray;
            border-color: gray;
        }
    </style>
</head>

<body style="background: url('<?= base_url("assets/img/") ?>g.png') no-repeat center center fixed; background-size: cover; background-color:black;">


    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5"><?= $this->session->flashdata('message') ?>

                            <h2 class="fw-bold mb-2 text-uppercase">Create Account</h2>
                            <form method="post" action="<?= base_url('user/registration') ?>">
                                <div class="form-outline form-white mb-4">
                                    <label for="typeUsername">Username</label>
                                    <input type="text" id="typeUsername" name="typeUsername" class="form-control form-control-lg" />
                                    <div class="text-danger" id="usernameWarning"></div>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <label for="typePassword">Password</label>
                                    <input type="password" id="typePassword" name="typePassword" class="form-control form-control-lg" />
                                    <div class="text-danger" id="passlength"></div>
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <label for="typePasswordConfirm">Password Confirmation</label>
                                    <input type="password" id="typePasswordConfirm" name="typePasswordConfirm" class="form-control form-control-lg" />
                                    <div class="text-danger" id="passconf"></div>
                                </div>
                                <button type="button" class="btn btn-outline-light btn-lg px-5 mt-3" id='registerButton' data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Pastikan sudah mengisi data dengan benar">Register</button>
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
    <!--  jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        //tooltip
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        let tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        let tombol = 'button';
        const warningElement = document.getElementById('usernameWarning');

        const name = document.getElementById('typeUsername');
        const pass1 = document.getElementById('typePassword');
        const pass2 = document.getElementById('typePasswordConfirm');
        const registerButton = document.getElementById('registerButton');

        // Menambahkan event listener pada kedua elemen password

        name.addEventListener('input', checkUsernameAvailability);
        name.addEventListener('blur', checkUsernameAvailability);
        name.addEventListener('input', checkPasswordMatch);
        pass1.addEventListener('input', checkPasswordMatch);
        pass1.addEventListener('input', checkLength);
        pass2.addEventListener('input', checkPasswordMatch);
        pass2.addEventListener('input', checkConfirm);

        function checkPasswordMatch() {
            const namevalue = name.value;
            const pass1Value = pass1.value;
            const pass1ValueLength = pass1.value.length;
            const pass2Value = pass2.value;




            if (namevalue != '' && pass1ValueLength == 5 && pass1Value === pass2Value) {
                registerButton.setAttribute('type', tombol);
            } else {
                registerButton.setAttribute('type', 'button');
            }
        }

        function checkConfirm() {
            const pass1Value = pass1.value;
            const pass2Value = pass2.value;

            if (pass1Value.length === 5 && pass1Value === pass2Value) {
                document.getElementById('passconf').innerText = ''; // Password match, clear any existing message
            } else {
                document.getElementById('passconf').innerText = 'Password does not match';
            }
        }

        function checkLength() {
            const pass1 = document.getElementById('typePassword');
            const pass1ValueLength = pass1.value.length;

            if (pass1ValueLength > 0 && pass1ValueLength < 5) {
                document.getElementById('passlength').innerText = "Minimum 5 Characters";
            } else if (pass1ValueLength === 0) {
                document.getElementById('passlength').innerText = 'Please enter a password';
            } else {
                // Handle other cases or clear any existing messages
                document.getElementById('passlength').innerText = '';
            }
            checkConfirm();
        }

        function checkUsernameAvailability() {
            if (name.value.length == 0) {
                warningElement.innerText = "";
                return;
            }
            var username = name.value;

            // Menggunakan library seperti jQuery untuk memudahkan Ajax
            $.ajax({
                url: '<?= base_url('user/verifUsername') ?>', // Sesuaikan dengan URL di mana Anda memeriksa username
                type: 'POST',
                data: {
                    username: username
                },
                success: function(response) {
                    responseParsed = JSON.parse(response);
                    if (responseParsed.message == 'Yes') {
                        warningElement.innerText = 'Username is already taken';
                        tombol = 'button';
                        registerButton.setAttribute('type', tombol);

                    } else {
                        warningElement.innerText = '';
                        tombol = 'submit';
                        registerButton.setAttribute('type', tombol);


                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>
</body>

</html>