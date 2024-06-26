<style>
    /* * {
        border: 1px solid blac;
    } */

    :root {
        --main_color: black;
        --main_color2: #ffff;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    ::-webkit-scrollbar {
        width: 0px;
    }

    ::-webkit-scrollbar-thumb {
        background: black;
    }

    .main_content {
        background-color: var(--main_color);
        min-height: 100%;
        margin-bottom: 10vh;
    }

    .container_wrap {
        padding: 5% 10%;
    }

    .container_wrap .row_header {
        margin-top: 5%;
        margin-bottom: 3vh;
    }

    .container_wrap .row_header h4 {
        text-align: center;
        color: white;
        font-family: 'Poppins';
        letter-spacing: 2;
    }

    .HomeLogoImages img {
        margin: 1.62rem 0rem 0rem 4.5rem;
        border-radius: 50%;
        padding: 20px;
        width: 12rem;
        transition: 0.3s;
    }

    .row_input {
        margin-top: 3rem;
    }

    .row_input1 h6 {
        color: white;
        font-family: 'Poppins';
        margin-left: -10px;
        letter-spacing: 1;
    }


    .row_input1 input[type='text'] {
        margin-left: -10px;
        border-radius: 10px;
        width: 105%;
        font-size: 0.8rem;
        padding: 8px 20px 8px 15px;
        letter-spacing: 0.7;
        box-shadow: 2px 5px 25px rgba(0, 0, 0, 0.2);
        border: transparent;
    }

    .row_input2 h6 {
        color: white;
        font-family: 'Poppins';
        margin-left: -10px;
        margin-top: 20px;
        letter-spacing: 1;
    }

    .headerPassword i {
        color: var(--main_color2);
        margin: 20px 0px 0px 10px;
    }

    .row_input2 input[type='text'],
    input[type='password'] {
        border-radius: 10px;
        width: 100%;
        font-size: 0.8rem;
        padding: 8px 20px 8px 15px;
        letter-spacing: 0.7;
        box-shadow: 2px 5px 25px rgba(0, 0, 0, 0.2);
        border: transparent;
    }

    .showPassword,
    .showConfPassword,
    .hideConfPassword,
    .hidePassword:hover {
        cursor: pointer;
    }

    .row_input3 input[type='submit'] {
        border-radius: 5px;
        margin-top: 30px;
        background-color: white;
        color: var(--main_color);
        border: 2px;
        font-family: 'Poppins';
        float: right;
        box-shadow: 2px 5px 25px rgba(0, 0, 0, 0.2);
        width: 20%;
        font-size: 0.8rem;
        margin-right: -15px;
        padding: 8px 20px 8px 15px;
    }

    .punya_akun .col-12 {
        margin-top: 3rem;
        justify-content: center;
    }

    .punya_akun .col-12 p {
        font-size: 0.8rem;
        color: white;
        margin-right: 5px;
        font-weight: 600;
    }

    .punya_akun .col-12 a {
        font-size: 0.8rem;
        color: white;
        border: 2px;
        font-family: 'Poppins';
    }

    @media (max-width: 992px) {
        .HomeLogoImages img {
            margin-top: -2rem;
            transform: translateX(-2.5rem);
            transition: 0.2s;
        }
    }

    @media (max-width: 576px) {

        footer .row {
            margin-left: 0.5rem;
        }
    }

    @media (max-width: 768px) {
        .namaRegist h6 {
            margin-top: 20px;
        }
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="icon" href="images/logo-medsos.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Edu+NSW+ACT+Foundation:wght@700&family=Kanit:wght@500&family=Mochiy+Pop+One&family=Montserrat:wght@200;600;800&family=Poppins:ital,wght@0,700;1,900&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
</head>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<body>
    <div class="container-fluid main_content">
        <form action="{{ route('action_registrasi') }}" method="POST">
            @csrf
            <div class="container container_wrap">
                <div class="row row_header">
                    <div class="col-12">
                        <h4>Register</h4>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row d-flex">
                        <div class="col-lg-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 text-center HomeLogoImages">
                                        <img src="{{ asset('images/logo-medsos.png') }}" alt="image-login-container">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row row_input1">
                                            <div class="col-md-6">
                                                <h6>Username</h6>
                                                <input type="text"
                                                    class="@error('username') is-invalid border-danger @enderror"
                                                    name="username" id="usernameRegist" value="{{ old('username') }}"
                                                    placeholder="Masukkan username">
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        <p>{{ $message }}</p>
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 namaRegist">
                                                <h6>Nama</h6>
                                                <input type="text"
                                                    class="@error('name') is-invalid border-danger @enderror"
                                                    name="name" id="namaRegist" value="{{ old('name') }}"
                                                    placeholder="Masukkan nama lengkap">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row row_input2">
                                            <h6>E - Mail</h6>
                                            <input type="text"
                                                class="@error('email') is-invalid border-danger @enderror"
                                                name="email" id="emailRegist" value="{{ old('email') }}"
                                                placeholder="Masukkan akun e-mail">
                                            @error('email')
                                                @if ($message === 'The email has already been taken')
                                                    <div class="invalid-feedback">
                                                        <p>Email wajib diisi</p>
                                                    </div>
                                                @else
                                                    <div class="invalid-feedback">
                                                        <p>{{ $message }}</p>
                                                    </div>
                                                @endif
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="row row_input2">
                                        <div class="headerPassword d-flex">
                                            <h6>Password</h6>
                                            <span>
                                                <i class="fa-regular fa-eye showPassword"></i>
                                                <i class="fa-regular fa-eye-slash hidePassword"></i>
                                            </span>
                                        </div>
                                        <input type="password"
                                            class="@error('password') is-invalid border-danger @enderror"
                                            name="password" id="passwordRegist" placeholder="Masukkan password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="row row_input2">
                                        <div class="headerPassword d-flex">
                                            <h6>Konfirmasi Password</h6>
                                            <span>
                                                <i class="fa-regular fa-eye showConfPassword"></i>
                                                <i class="fa-regular fa-eye-slash hideConfPassword"></i>
                                            </span>
                                        </div>
                                        <input type="password"
                                            class="@error('cpassword') is-invalid border-danger @enderror"
                                            name="cpassword" id="confPasswordRegist" placeholder="Masukkan Confirm password">
                                        @error('cpassword')
                                            <div class="invalid-feedback">
                                                <p>Password tidak cocok</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row row_input3">
                                <div class="col-12">
                                    <input type="submit" name="Regist" value="Register" id="submit">
                                </div>
                            </div>
                            <div class="row punya_akun">
                                <div class="col-12 d-flex">
                                    <p>Sudah punya akun?</p>
                                    <a href="{{ route('login') }}" class="btnRegist">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
    <div class="container-fluid" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row" style="justify-content: space-between;">
                        <div class="col-md-9">
                            <div class="row" style="display: flex; align-items: center;">
                                <div class="col-md-1" style="justify-content: center; margin:auto; text-align: center;">
                                    <img src="images/logo-medsos.png" alt="image-logo" style="width: 50px;">
                                </div>
                                <div class="col-md-11" id="informasi">
                                    <h6 style="font-family: 'Poppins'; margin-top: 10px; margin-left: 15px;">Tentang
                                        Kami</h6>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <p style="font-size: 0.7rem; ">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam vel eaque
                                    quasi perspiciatis, placeat maiores eligendi minima rem iure similique minus
                                    perferendis reprehenderit inventore ab ipsum excepturi! Voluptate vitae
                                    perspiciatis nemo expedita dicta, voluptatem sequi iure sit laborum unde maxime
                                    corrupti consectetur rerum omnis quasi fuga blanditiis mollitia! Blanditiis
                                    obcaecati corrupti voluptas nemo repellendus laboriosam ipsam, numquam odio.
                                    Minus, quae!
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row" style="justify-content: space-between;">
                                <div class="col-md-12">
                                    <h6
                                        style="font-family: 'Poppins'; margin-top: 10px; margin-left: 15px; text-align: center;">
                                        Kontak
                                    </h6>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12" style="color: black; display: flex;">
                                    <i class="fa-solid fa-house" style="margin-right: 20px; font-size: 0.7rem;"></i>
                                    <p style="margin-top: -4px; font-size: 0.7rem;">Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit. Voluptas, voluptate.</p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px;">
                                <div class="col-md-12" style="color: black; display: flex;">
                                    <i class="fa-solid fa-envelope"
                                        style="margin-right: 20px; font-size: 0.7rem;"></i>
                                    <p style="margin-top: -5px; font-size: 0.7rem;">googlemail@gmail.com</p>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-md-12" style="color: black; display: flex;">
                                    <i class="fa-solid fa-phone" style="margin-right: 20px; font-size: 0.7rem;"></i>
                                    <p style="margin-top: -5px; font-size: 0.7rem;">(021) 22785123</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr style="color: var(--main_color); width: 100%; margin-top: 2%;">
                </div>
                <div class="row" style="margin: 1% 0% 0.7% 0%;">
                    <div class="col-9" style="display: flex;">
                        <div class="col-2">
                            <p style="color: grey; font-size: 0.6rem;">Sitemap</p>
                        </div>
                        <div class="col-3">
                            <p style="color: grey; font-size: 0.6rem;">Privacy Policy</p>
                        </div>
                        <div class="col-4">
                            <p style="color: grey; font-size: 0.6rem;">Terms & Condition</p>
                        </div>
                        <div class="col-2">
                            <p style="color: grey; font-size: 0.6rem;">Contact Us</p>
                        </div>
                        <div class="col-1">
                            <p style="color: grey; font-size: 0.6rem;">Forums</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <h6 style="color: grey; font-size: 0.6rem;">PT. Lorem Ipsum</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    $(document).ready(() => {
        $('.hidePassword').hide();
        //Button untuk menampilkan input password
        $('.showPassword').on('click', () => {
            $('#passwordRegist').attr('type', 'text')
            $('.showPassword').hide()
            $('.hidePassword').show()
        })
        //Button untuk menyembunyikan input password
        $('.hidePassword').on('click', () => {
            $('#passwordRegist').attr('type', 'password')
            $('.showPassword').show()
            $('.hidePassword').hide()
        })
        $('.hideConfPassword').hide();
        //Button untuk menampilkan input confirmasi password
        $('.showConfPassword').on('click', () => {
            $('#confPasswordRegist').attr('type', 'text')
            $('.showConfPassword').hide()
            $('.hideConfPassword').show()
        })
        $('.hideConfPassword').on('click', () => {
            $('#confPasswordRegist').attr('type', 'password')
            $('.showConfPassword').show()
            $('.hideConfPassword').hide()
        })
    })
</script>
