<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Login - SMA Peminatan </title>
<!-- Boxicons CSS -->
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

<script data-search-pseudo-elements="" defer=""
    src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
    /* Google Fonts - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        column-gap: 30px;
    }

    .form {
        position: absolute;
        max-width: 600px;
        width: 100%;
        padding: 30px;
        border-radius: 6px;
        background: #FFF;
    }

    .form.signup {
        opacity: 0;
        pointer-events: none;
    }

    .forms.show-signup .form.signup {
        opacity: 1;
        pointer-events: auto;
    }

    .forms.show-signup .form.login {
        opacity: 0;
        pointer-events: none;
    }

    header {
        font-size: 28px;
        font-weight: 600;
        color: #232836;
        text-align: center;
    }

    form {
        margin-top: 30px;
    }

    .form .field {
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 20px;
        border-radius: 6px;
    }

    .field input,
    .field button {
        height: 100%;
        width: 100%;
        border: none;
        font-size: 16px;
        font-weight: 400;
        border-radius: 6px;
    }

    .field input {
        outline: none;
        padding: 0 15px;
        border: 1px solid#CACACA;
    }

    .field input:focus {
        border-bottom-width: 2px;
    }

    .eye-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        font-size: 18px;
        color: #8b8b8b;
        cursor: pointer;
        padding: 5px;
    }

    .field button {
        color: #fff;
        background-color: #0171d3;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .field button:hover {
        background-color: #016dcb;
    }

    .form-link {
        text-align: center;
        margin-top: 10px;
    }

    .form-link span,
    .form-link a {
        font-size: 14px;
        font-weight: 400;
        color: #232836;
    }

    .form a {
        color: #0171d3;
        text-decoration: none;
    }

    .form-content a:hover {
        text-decoration: underline;
    }

    .line {
        position: relative;
        height: 1px;
        width: 100%;
        margin: 36px 0;
        background-color: #d4d4d4;
    }

    .line::before {
        content: 'Or';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #FFF;
        color: #8b8b8b;
        padding: 0 15px;
    }

    .media-options a {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    a.facebook {
        color: #fff;
        background-color: #4267b2;
    }

    a.facebook .facebook-icon {
        height: 28px;
        width: 28px;
        color: #0171d3;
        font-size: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
    }

    .facebook-icon,
    img.google-img {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
    }

    img.google-img {
        height: 20px;
        width: 20px;
        object-fit: cover;
    }

    a.google {
        border: 1px solid #CACACA;
    }

    a.google span {
        font-weight: 500;
        opacity: 0.6;
        color: #232836;
    }

    @media screen and (max-width: 400px) {
        .form {
            padding: 20px 10px;
        }

    }
</style>
<html lang="en">

<head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login Peminatan</header>
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                        <strong>Email atau Password</strong> Yang Dimasukkan Salah
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('proses') }}" method="POST">
                    @csrf
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="email">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="password">
                        <i class="bx bx-hide eye-icon"></i>
                    </div>



                    <div class="field button-field">
                        <button type="submit">Login</button>
                    </div>
                </form>


            </div>


            <div class="line"></div>

            <div class="media-options">
                <a href="/auth/google" class="field google">
                    <img src="/../img/google.png" alt="" class="google-img">
                    <span><b>Login Sebagai Siswa</b></span>
                </a>
            </div>


            <div class="media-options">
                <a href="#" class="field facebook">
                    <span>Manual Book</span>
                </a>
            </div>
            <br>


            <div class="row">
                <div class="d-flex justify-content-center"><b>Created by <a
                            href="https://www.instagram.com/ibrbbra?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Ibra</a>
                        & <a href="https://www.instagram.com/e_erlanggaa?igsh=OGQ5ZDc2ODk2ZA==">Erlangga</a> 2024</b>
                </div>
            </div>
        </div>



        </div>

        <!-- Signup Form -->




    </section>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const forms = document.querySelector(".forms"),
            pwShowHide = document.querySelectorAll(".eye-icon"),
            links = document.querySelectorAll(".link");

        pwShowHide.forEach(eyeIcon => {
            eyeIcon.addEventListener("click", () => {
                let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");

                pwFields.forEach(password => {
                    if (password.type === "password") {
                        password.type = "text";
                        eyeIcon.classList.replace("bx-hide", "bx-show");
                        return;
                    }
                    password.type = "password";
                    eyeIcon.classList.replace("bx-show", "bx-hide");
                })

            })
        })

        links.forEach(link => {
            link.addEventListener("click", e => {
                e.preventDefault(); //preventing form submit
                forms.classList.toggle("show-signup");
            })
        })
    </script>

@if (session('email'))
    <script>
        Swal.fire({
            icon: "error",
            title: "Oops..",
            text: "Login harus memakai Email Sekolah"
        });
    </script>
@endif
</body>

</html>
