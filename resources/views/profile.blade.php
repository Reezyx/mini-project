<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    :root {
        --main_color: #EEEEEE;
        --main_color-2: black;
        --main_color-3: #3F979B;
        --main_color-4: #3F979B;
        --main_color-5: #FF004D;
        --text-color: #D9D9D9;
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

    * {
        /* border: 1px solid white; */
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .sidebar {
        background-color: var(--main_color-2);
        position: fixed;
        z-index: 100;
        overflow: auto;
        overflow-x: hidden;
        height: 100%;
        width: 16rem;
        /* background: var(--main_color); */
        box-shadow: 1px 2px 1px rgba(256, 256, 256, 0.3);
        transition: all 0.5s ease;
    }

    .sidebar .detail_logo {
        height: 80px;
        display: flex;
        align-items: center;
    }

    .sidebar .detail_logo img {
        width: 37px;
        aspect-ratio: 1/1;
        padding: 2px;
        border-radius: 20px;
    }

    .sidebar .detail_logo a {
        text-decoration: none;
    }

    .sidebar .detail_logo i {
        font-size: 28px;
        font-weight: 500;
        color: #fff;
        min-width: 60px;
        text-align: center
    }

    .sidebar .detail_logo #usernameProfileAuthor {
        margin-top: 2px;
        font-size: 0.9rem;
        color: white;
        font-weight: 500;
    }

    .sidebar .detail_logo #namaProfileAuthor {
        font-size: 0.6rem;
        font-family: 'Poppins';
        font-weight: 300;
        color: var(--main_color);
    }

    .detail_logo .rowUsername {
        margin: 0px 0px 0px -15px;
    }

    .konten-home .card {
        border-radius: 15px;
        border: 1px solid rgba(63, 151, 155, 0.6);
        box-shadow: 2px 1px 2px rgba(0, 0, 0, 0.09);
        padding: 1rem 2rem 2rem 2rem;
        margin-bottom: -1.3rem;
        transition: all 0.5s ease;
    }

    .card .card-text {
        margin-top: -0.7rem;
    }

    .rowUsername span {
        margin-top: -2px;
    }

    .sidebar .link-navigasi {
        margin-top: -8px;
    }

    .sidebar .link-navigasi li {
        color: var(--main_color);
        position: relative;
        list-style-type: none;
        height: 45px;
    }

    .sidebar .link-navigasi li a {
        height: 100%;
        width: 10%;
        margin-left: -32px;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
    }

    .sidebar .link-navigasi li p {
        height: 100%;
        width: 10%;
        margin-top: 45px;
        transition: all 0.4s ease;
    }

    .sidebar .link-navigasi li i {
        min-width: 60px;
        text-align: center;
        font-size: 14px;
        color: var(--main_color-4);
    }

    .sidebar .link-navigasi li .links_name {
        color: white;
        font-size: 13px;
        font-weight: 400;
        white-space: nowrap;
    }

    .sidebar .link-navigasi .log_out {
        margin: 15px 0px 0px -32px;
        width: 100%;
    }

    .sidebar .link-navigasi .log_out button {
        border: unset;
        background: unset;
    }

    .sidebar .link-navigasi .log_out p {
        margin-top: -2px;
        color: white;
    }

    .sidebar .link-navigasi .SidebarBottomText {
        margin-left: -1rem;
        margin-right: 1rem;
        position: absolute;
        bottom: 10;
        font-size: 0.7rem;
    }

    .sidebar .link-navigasi .SidebarBottomText p {
        font-size: 0.2rem;
    }

    .logoHomepage {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logoHomepage img {
        padding-top: 1rem;
        width: 2rem;
    }

    .navFilter {
        margin-left: -15rem;
    }

    @keyframes animationERROR_DOWN {
        from {
            transform: translateY(-20vh);
        }

        to {
            transform: translateY(0vh);
        }
    }

    @keyframes animationERROR_UP {
        from {
            transform: translateY(0vh);
        }

        to {
            transform: translateY(-20vh);
        }
    }

    .alertError {
        background-color: var(--main_color-5);
        position: relative;
        width: calc(100% - 240px);
        left: 240px;
        padding: 1rem 0rem 0rem 3rem;
    }

    .animationERROR_DOWN {
        animation: animationERROR_DOWN 0.7s ease;
    }

    .animationERROR_UP {
        animation: animationERROR_UP 0.7s ease;
    }

    .alertError .container {
        width: 100%;
        justify-content: space-between;
    }

    .alertError p {
        font-weight: 600;
        letter-spacing: 1;
        color: white;
    }

    .alertError i {
        margin: 5px 20px 0px 5px;
        color: white;
    }

    .home-section {
        position: relative;
        width: calc(100% - 240px);
        left: 240px;
        padding: 2.5rem 5rem 0rem 5rem;
        transition: all 0.5s ease;
    }

    .nav-section {
        position: relative;
        width: calc(100% - 240px);
        left: 280px;
        transition: all 0.5s ease;
    }

    .logoHomepage {
        margin-left: -15rem;
    }

    .sidebar.active~.home-section {
        width: calc(100% - 60px);
        left: 60px;
    }

    .home-section nav {
        display: flex;
        justify-content: space-between;
        height: 80px;
        background: #fff;
        display: flex;
        align-items: center;
        position: fixed;
        width: calc(100% - 240px);
        left: 240px;
        padding: 0 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
    }

    .sidebar.active~.home-section nav {
        left: 60px;
        width: calc(100% - 60px);
    }

    .home-section .konten-home {
        position: relative;
        margin: 0rem 2rem 0rem 2rem;
    }

    .home-section .fotoProfile img {
        border-radius: 50%;
        transition: all ease 0.3s;
        justify-content: center;
        aspect-ratio: 1/1;
        width: 8rem;
        height: 8rem;
    }

    .home-section #usernameProfile {
        color: var(--main_color);
        font-size: 1.1rem;
        font-weight: 700;
    }

    .col-4 .btn-edit-akun {
        margin-left: 6rem;
        color: var(--text-color);
        transition: all ease 0.5s;
    }

    .col-4 .btn-edit-akun:hover {
        transform: rotate(50deg);
        transition: all ease 0.5s;
    }

    #wrapAnker {
        margin-top: -5px;
        display: flex;
        text-decoration: none;
        color: black;
    }

    #feeds {
        margin: 0rem -0.2rem 0rem 0rem;
    }

    #feeds .col-4 {
        margin: 0px -10px 4px -10px;
    }

    .footer {
        position: fixed;
        bottom: 0;
        position: relative;
        width: calc(100% - 240px);
        padding: 2.5rem 5rem 0rem 5rem;
        transition: all 0.5s ease;
    }

    .footer .lorem {
        margin-right: 1rem;
    }

    .home-section #countProfile {
        color: var(--text-color);
        font-weight: 600;
        font-size: 0.7rem;
        margin-right: 5px;
    }

    .home-section #informationProfile {
        color: var(--text-color);
        font-size: 0.7rem;
        margin-right: 20px;
    }

    .home-section #namaLengkapProfile {
        color: var(--text-color);
        margin-top: -5px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    #bioProfile {
        color: var(--text-color);
        margin-top: -0.8rem;
    }

    .home-section #bioProfile {
        margin-right: 50px;
        font-size: 0.6rem;
        font-weight: 500;
    }

    .konten-home h3 {
        font-weight: 800;
        margin-bottom: 20px;
    }

    .navigasi {
        margin-right: 10rem;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .navigasi .navigasi-item a {
        font-size: 0.7rem;
        text-align: center;
        margin-right: 100px;
        text-decoration: none;
        color: black;
    }

    .navigasi-item .active p {
        font-weight: 600;
        letter-spacing: 1;
        padding-bottom: 5px;
        border-bottom: 2px solid var(--main_color-3);
        transition: all ease 0.3s;
    }

    .navigasi {
        font-family: 'DM Sans', sans-serif;
        list-style-type: none;
        display: flex;
        justify-content: center;
    }

    .navigasi a {
        color: black;
    }

    .profileAuthor {
        margin-left: -17px;
        display: flex;
    }

    .profileAuthor img {
        width: 70px;
        aspect-ratio: 1/1;
        margin-left: -10px;
        background-color: white;
        padding: 10px;
        border-radius: 50%;
        margin-top: -1rem;
    }

    .profileAuthor #usernamePosting {
        font-weight: 700;
        color: var(--main_color-3);
    }

    .profileAuthor #timePosting {
        color: black;
        margin-top: -18px;
        font-size: 0.7rem;
    }

    .profileAuthor span {
        margin: 10px 0px 0px 5px;
    }

    .saveToBookmark {
        float: right;
        margin-right: -1rem;
        font-size: 1.6rem;
        color: var(--main_color-3);
        margin-top: -3rem;
        background-color: unset;
        border: unset;
    }

    .fiturPostingan p {
        font-size: 0.9rem;
    }

    .fiturPostingan i {
        font-size: 1.2rem;
    }

    @media (width <=991px) {

        .home-section #SuggestFollowing {
            display: none;
        }

        .sidebar {
            width: 60px;
        }

        .rowUsername {
            display: none;
        }

        .link-navigasi p {
            display: none;
        }

        .sidebar.active {
            width: 220px;
        }

        .home-section,
        .nav-section,
        .alertError {
            width: calc(100% - 60px);
            left: 60px;
        }

        .nav-section {
            width: calc(100% - 60px);
            left: 60px;
        }

        .logoHomepage {
            margin-left: 0rem;
        }

        .navFilter {
            margin-left: 0rem;
        }

        .sidebar.active~.home-section {
            overflow: hidden;
            left: 220px;
        }

        .home-section nav {
            width: calc(100% - 60px);
            left: 60px;
        }

        .sidebar.active~.home-section nav {
            width: calc(100% - 220px);
            left: 220px;
        }
    }

    @media(width <=768px) {
        .card {
            transform: translateX(-10%);
            width: 130%;
        }
    }

    @media (width <=576px) {
        footer .row {
            margin-left: 0.5rem;
        }
    }

    @media (width <=560px) {
        .profileAuthor .namaProfileAuthorPost p {
            font-size: 0.7rem;
        }
    }

    @media(width <=462px) {
        .konten-home .card {
            padding: 0.6rem 1.2rem 1.2rem 1.2rem;
            transition: all 0.5s ease;
        }

        .card .card-text {
            margin-top: -1rem;
            font-size: 0.7rem;
        }

        .profileAuthor .container p {
            margin-top: -5px;
        }

        .profileAuthor img {
            width: 50px;
            height: 50px;
        }

        .profileAuthor #usernamePosting {
            font-size: 0.7rem;
        }

        .profileAuthor #timePosting {
            font-size: 0.6rem;
        }

        .fiturPostingan p {
            display: none;
        }

        .fiturPostingan i {
            margin-right: -2rem;
            font-size: 1rem;
        }

        .saveToBookmark {
            font-size: 1.3rem;
            transform: translateY(0.5rem);
        }
    }

    .sidebar .detail_logo .namaProfileAuthor,
    .suggestedFollowing,
    #timePosting,
    #usernamePosting {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    @media (width <=400px) {
        .card {
            transform: translateX(-15%);
            width: 150%;
            transition: all 0.5s ease;
        }

        .navigasi-item {
            width: 60%;
            font-size: 0.7rem;
        }

        .home-section nav {
            width: 100%;
            left: 70px;
        }
    }

    .card-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    footer {
        background-color: var(--main_color-3);
        bottom: 0;
        z-index: 101;
        position: fixed;
        width: 100%;
    }

    footer .column-text-footer {
        margin-top: 10px;
        justify-content: center;
    }

    footer #text-1 {
        padding-top: 10px;
        font-size: 1rem;
        font-weight: 600;
        color: white;
    }

    footer #text-2 {
        font-size: 0.7rem;
        font-weight: 500;
        color: white;
        margin-top: -10px;
    }

    footer .btn-login-footer {
        font-size: 0.9rem;
        margin-bottom: 24px;
        background-color: none;
        border: 1px solid white;
        margin-top: 20px;
        color: white;
        font-weight: 600;
        padding: 10px 30px 10px 30px;
        border-radius: 15px;
        margin-right: 20px;
    }

    footer .btn-login-footer:hover {
        color: white;
        box-shadow: 2px 1px 5px rgba(0, 0, 0, 0.4);
        transition: all ease 0.2s;
    }

    footer .btn-regist-footer:hover {
        box-shadow: 2px 1px 5px rgba(0, 0, 0, 0.4);
        transition: all ease 0.2s;
    }

    footer .btn-regist-footer {
        font-size: 0.9rem;
        margin-bottom: 24px;
        background-color: white;
        margin-top: 20px;
        color: black;
        font-weight: 600;
        padding: 10px 20px 10px 20px;
        border-radius: 15px;
    }

    .footer p {
        font-size: 0.6rem;
        color: grey;
        margin: 20px 20px 0px 0px;
    }

    .footer #copyright {
        margin: 20px 0px 20px 0px;
    }

    @keyframes animasiModalUp {
        from {
            transform: translateY(-20rem);
        }

        to {
            transform: translateY(0rem);
        }
    }

    @keyframes animasiModalDown {
        from {
            transform: translateY(0rem);
        }

        to {
            transform: translateY(-20rem);
        }
    }

    .animasiModalUp {
        animation: animasiModalUp 0.5s ease;
    }

    .animasiModalDown {
        animation: animasiModalDown 0.5s ease;
    }

    .fa-xmark,
    .fa-gear:hover {
        cursor: pointer;
    }
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="icon" href="images/logo-medsos.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&family=Edu+NSW+ACT+Foundation:wght@700&family=Kanit:wght@500&family=Mochiy+Pop+One&family=Montserrat:wght@200;600;800&family=Poppins:ital,wght@0,700;1,900&family=Ubuntu:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body style="background-color: black;">
    <div class="sidebar">
        <div class="detail_logo">
            <a href="{{ route('myProfile') }}" style="display: flex;">
                @auth
                    <i><img style="object-fit: cover;" src="{{ asset('images/profile/' . $user->image) }}" alt="gambar postingan"></i>
                    <div class="container-fluid rowUsername">
                        <div class="row">
                            <span id="usernameProfileAuthor">{{ $user->username }}</span>
                        </div>
                        <div class="row">
                            <span id="namaProfileAuthor">{{ $user->name }}</span>
                        </div>
                    </div>
                @else
                    <i><img src="{{ asset('images/logo-medsos.png') }}" alt="gambar foto profile"></i>
                    <div class="container-fluid rowUsername">
                        <div class="row">
                            <span id="usernameProfileAuthor" style="margin-left: 0.2rem">Silahkan Login Dahulu</span>
                        </div>
                        <div class="row">
                            <span id="namaProfileAuthor" style="margin-left: 0.2rem">Ayo Login</span>
                        </div>
                    </div>
                @endauth
            </a>
        </div>
        <hr
            style="color: var(--main_color); opacity: 0.3; width: 100%; margin-top: -0px; height: 1.6px; justify-content: center;">
        <ul class="link-navigasi">
            <li class="sidebarActive">
                <a href="{{ route('home') }}">
                    <i class="fa-solid fa-house aktif"></i>
                    <p class="links_name" id="beranda">Beranda</p>
                </a>
            </li>
            <li>
                <a href="{{ route('explorePeople') }}">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <p class="links_name" id="explore">Explore</p>
                </a>
            </li>
            @auth
                <li>
                    <a href="{{ route('myNotifikasi') }}">
                        <i class="fa-solid fa-bell"></i>
                        <p class="links_name" id="notifikasi">Notifikasi</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('formPost') }}">
                        <i class="fa-solid fa-plus"></i>
                        <p class="links_name" id="posting">Posting</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('myBookmark') }}">
                        <i class="fa-solid fa-bookmark"></i>
                        <p class="links_name" id="bookmarks">Bookmarks</p>
                    </a>
                </li>
            @endauth
            @auth
                <li class="log_out">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="d-flex">
                            <i class="fa-solid fa-arrow-left"></i>
                            <p class="links_name">Log out</p>
                        </button>
                    </form>
                </li>
            @else
                <li class="login">
                    <a href="{{ route('login') }}">
                        <i class="fa-solid fa-arrow-left"></i>
                        <p class="links_name">Login</p>
                    </a>
                </li>
            @endauth
            <li class="SidebarBottomText">
                <p style="font-size: 0.48rem; width: 100%; color: grey; margin-top: 1rem;">
                    Terms of Service
                    Privacy Policy
                    Cookie Policy
                    Accessibility
                    Ads info
                    More
                    © 2024 Sosmed
                </p>
            </li>
        </ul>
    </div>

    @if (session()->has('failed'))
        <div class="containerErorr alertError animationERROR_DOWN">
            <div class="container d-flex">
                <p>Password tidak sesuai</p>
                <i class="fa-solid fa-xmark btnCloseError"></i>
            </div>
        </div>
    @endif
    @if (session()->has('message'))
        <div class="containerErorr alertError animationERROR_DOWN" style="background-color: #3F979B">
            <div class="container d-flex">
                <p>{{ session('message') }}</p>
                <i class="fa-solid fa-xmark btnCloseError"></i>
            </div>
        </div>
    @endif
    <section class="home-section">
        <div class="container-fluid nav" style="display: flex; justify-content: center;">
            <div class="container modalEdit"
                style="margin: auto; width: 32rem; border-radius: 6px; background-color: black; border: 1.8px solid rgba(220, 220, 220, 0.3); z-index: 999; padding: 1.2rem; position:fixed;">
                <form action="{{ route('confirmPassword') }}" method="post">
                    @csrf
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <h6 style="color: white; font-weight: 800; letter-spacing: 1; margin-bottom: 0.5rem;">Konfirmasi
                            Password</h6>
                        <i class="fa-solid fa-xmark btn-edit-akun"
                            style="font-size: 1rem; margin: -8px 0px 0px 0px; color: white;"></i>
                    </div>
                    <div class="mb-3">
                        <input style="font-size: 0.6rem;" type="password" name="password" class="form-control"
                            id="form-password" placeholder="Masukan Password">
                    </div>
                    <button
                        style="background-color: unset; float: right; border: unset; padding: 6px 04 px 5px 12px; border-radius: 3px; font-size: 0.7rem; color: var(--main_color); font-weight: 600;"
                        type="submit">Konfirmasi</button>
                </form>
            </div>
            <div class="col-md-3 col-12">
                <div class="col-12 fotoProfile text-center">
                    <img style="object-fit: cover;" src="{{ asset('images/profile/' . $people->image) }}" alt="LogoProfile">
                </div>
            </div>
            <div class="col-md-9 col-12">
                <div class="row d-flex">
                    <div class="col-12 d-flex">
                        <div class="col-8 d-flex">
                            <p id="usernameProfile">{{ $people->username }}</p>
                            @if ($people->is_me)
                                {{-- kosongin saja --}}
                            @else
                                <form action="{{ route('follow', ['people' => $people->id]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn"
                                        style="font-weight: 700; font-size: 0.7rem; color: var(--main_color-3); margin-left: 3px;">{{ $people->is_follow ? 'Unfollow' : 'Follow' }}</button>
                                </form>
                            @endif
                        </div>
                        <div class="col-4">
                            @if ($people->is_me)
                                <i class="fa-solid fa-gear btn-edit-akun"></i>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex" class="dataInformation">
                        <a href="" id="wrapAnker">
                            <p id="countProfile">{{ $people->postCount() }}</p>
                            <p id="InformationProfile">Posts</p>
                        </a>
                        <a href="{{ route('seeFollower', ['people' => $people->id]) }}" id="wrapAnker">
                            <p id="countProfile"> {{ $people->followerCount() }}</p>
                            <p id="InformationProfile">Followers</p>
                        </a>
                        <a href="{{ route('seeFollowing', ['people' => $people->id]) }}" id="wrapAnker">
                            <p id="countProfile"> {{ $people->followingCount() }}</p>
                            <p id="InformationProfile">Following</p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p id="namaLengkapProfile">{{ $people->name }}</p>
                        <p id="bioProfile">{{ $people->bio }}</p>
                    </div>
                </div>
            </div>
            <div class="row" style="min-height: 50vh;" id="feeds">
                @if ($people->post->isEmpty())
                    <p
                        style="color: white; font-size: 13px; opacity: 0.3; justify-content: center; display: flex; align-items:center;">
                        Belum ada postingan yang dapat ditampilkan</p>
                @else
                    <div class="row" id="feeds">
                        @foreach ($people->post as $post)
                            <div class="col-xl-4 col-lg-4 col-md-3 col-sm-4 col-6">
                                <a href="{{ route('seePost', ['post' => $post->id]) }}">
                                    <img style="aspect-ratio: 1/1; object-fit: cover; margin-top: 25px; width: 100%;"
                                        src="{{ asset('images/post/' . $post->image) }}" alt="Image Postingan Feeds">
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="container-fluid footer">
                <div class="row d-flex justify-content-center">
                    <div class="col-1 lorem">
                        <p>lorem</p>
                    </div>
                    <div class="col-1 lorem">
                        <p>lorem</p>
                    </div>
                    <div class="col-1 lorem">
                        <p>lorem</p>
                    </div>
                    <div class="col-1 lorem">
                        <p>lorem</p>
                    </div>
                    <div class="col-1 lorem">
                        <p>lorem</p>
                    </div>
                    <div class="col-1 lorem">
                        <p>lorem</p>
                    </div>
                    <div class="col-1 lorem">
                        <p>lorem</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <p id="copyright">Copyright 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@guest
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 column-text-footer">
                    <p id="text-1">Jangan ketinggalan berita terbaru</p>
                    <p id="text-2">login, untuk pengalaman yang baru</p>
                </div>
                <div class="col-lg-4 col-12 d-flex column-btn">
                    <a href="{{ route('login') }}" class="btn btn-login-footer">Login</a>
                    <a href="{{ route('registrasi') }}" class="btn btn-regist-footer">Register</a>
                </div>
            </div>
    </footer>
@endguest
</div>

</html>
<script>
    $(document).ready(() => {
        $('.modalEdit').hide();
        $('.fa-gear').on('click', () => {
            $('.modalEdit').show().addClass('animasiModalUp')
        })
        $('.fa-xmark').on('click', () => {
            $('.modalEdit').removeClass('animasiModalUp').addClass('animasiModalDown'),
                setTimeout(() => {
                    $('.modalEdit').removeClass('animasiModalDown').hide()
                }, 400);
        })
        $('.btnCloseError').on('click', () => {
            $('.alertError').removeClass('animationERROR_DOWN').addClass('animationERROR_UP'),
                setTimeout(() => {
                    $('.alertError').removeClass('animationERROR_UP').hide();
                }, 700);
        })
    })
    $('.pilihKategoriPostingan').on('click', function() {
        $('.pilihKategoriPostingan').removeClass('active');
        $(this).addClass('active');
    });
</script>
