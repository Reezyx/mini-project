<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    :root {
        --main_color: white;
        --main_color-2: black;
        --main_color-3: #52D3D8;
        --main_color-4: #3F979B;
        --text-color: #D9D9D9;
    }

    * {
        /* border: 1px solid white; */
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
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

    .sidebar {
        background-color: var(--main_color-2);
        position: fixed;
        z-index: 100;
        overflow: auto;
        overflow-x: hidden;
        height: 100%;
        width: 16rem;
        /* background: var(--main_color); */
        box-shadow: 1px 1px 1px rgba(63, 151, 155, 0.4);
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

    .sidebar .link-navigasi li a p {
        height: 100%;
        width: 10%;
        margin-top: 45px;
        transition: all 0.4s ease;
    }

    .sidebar .link-navigasi li i {
        min-width: 60px;
        text-align: center;
        font-size: 14px;
        color: var(--main_color);
    }

    .sidebar .link-navigasi li .links_name {
        color: var(--main_color);
        font-size: 13px;
        font-weight: 400;
        white-space: nowrap;
    }

    .sidebar .link-navigasi .sidebarActive i {
        color: #52D3D8;
    }

    .sidebar .link-navigasi .sidebarActive .links_name {
        color: #52D3D8;
        font-weight: 600;
        letter-spacing: 1;
    }

    .sidebar .link-navigasi li {
        position: relative;
        list-style: none;
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

    .home-section {
        position: relative;
        width: calc(100% - 240px);
        left: 240px;
        padding: 2.5rem 5rem 0rem 5rem;
        transition: all 0.5s ease;
    }

    .containerForm {
        min-width: 30rem;
        max-width: 45rem;
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
        color: var(--text-color);
    }

    #wrapAnker {
        margin-top: -5px;
        display: flex;
        text-decoration: none;
        color: black;
    }

    #feeds {
        margin: 0rem -0.2rem 0rem 1rem;
    }

    #feeds .col-4 {
        margin: 0px -10px 4px -10px;
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
        color: var(--main_color);
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
        .nav-section {
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

    @media (width <=600px) {
        .home-section .containerForm {
            margin-left: -3rem;
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

    footer .btn-edit-akun:hover {
        box-shadow: 2px 1px 5px rgba(0, 0, 0, 0.4);
        transition: all ease 0.2s;
    }

    footer .btn-edit-akun {
        float: right;
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
        margin-top: 20px;
    }

    footer .btn-edit-akun {
        font-size: 0.9rem;
        margin-bottom: 24px;
        background-color: white;
        margin-top: 20px;
        color: black;
        font-weight: 600;
        padding: 10px 20px 10px 20px;
        border-radius: 15px;
    }

    .sidebar {
        position: fixed;
        z-index: 100;
        overflow: auto;
        overflow-x: hidden;
        height: 100%;
        width: 16rem;
        /* background: var(--main_color); */
        box-shadow: 1px 1px 1px rgba(63, 151, 155, 0.4);
        transition: all 0.5s ease;
    }

    .sidebar .detail_logo {
        height: 80px;
        display: flex;
        align-items: center;
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

    .sidebar .detail_logo .namaProfileAuthor {
        color: #fff;
        font-size: 24px;
        font-weight: 500;
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

    .home-section {
        position: relative;
        width: calc(100% - 240px);
        left: 240px;
        padding: 1rem 2rem 2rem 2rem;
        transition: all 0.5s ease;
    }

    .home-section .imagesFollowers {
        margin: 2rem;
    }

    .home-section .imagesFollowers img {
        aspect-ratio: 16/9;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .navigasiFilter {
        position: relative;
        width: calc(100% - 240px);
        left: 240px;
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
        transition: all ease 0.3s;
        justify-content: center;
        aspect-ratio: 1/1;
        width: 8rem;
        height: 8rem;
    }

    .home-section #arrowLeft {
        color: var(--main_color);
        cursor: pointer;
        font-weight: 600;
        font-size: 1.5rem;
    }

    .home-section #back {
        color: var(--main_color);
        cursor: pointer;
        font-weight: 600;
        font-size: 1rem;
        margin-top: 0.3rem;
        margin-left: 0.6rem;
    }

    .home-section #usernameProfile {
        font-size: 1.5rem;
        font-weight: 700;
    }

    #feeds {
        margin: 0rem -0.2rem 0rem 1rem;
    }

    #feeds .col-4 {
        margin: 0px -10px 4px -10px;
    }

    .home-section #countProfile {
        font-weight: 600;
        font-size: 0.9rem;
        margin-right: 5px;
    }

    .home-section #informationProfile {
        font-size: 0.9rem;
        margin-right: 20px;
    }

    .home-section #namaLengkapProfile {
        font-size: 0.9rem;
        font-weight: 600;
    }

    #bioProfile {
        margin-top: -0.8rem;
    }

    .home-section #bioProfile {
        margin-right: 20px;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .home-section .usernameDetailFollow {
        color: var(--main_color);
        margin: 1rem 0rem 1rem -2rem;
        justify-content: center;
        font-weight: 600;
    }

    .konten-home h3 {
        font-weight: 800;
        margin-bottom: 20px;
    }

    #allFollowers {
        margin: 1rem 0rem 0rem 1rem;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .listFollowersSearch a {
        margin-left: 10px;
        text-decoration: none;
    }

    .listFollowersSearch img {
        aspect-ratio: 1/1;
        width: 2.7rem;
        height: 2.7rem;
        padding: 2px;
        border-radius: 50%;
    }

    .listFollowersSearch .usernameFollowers {
        font-size: 0.9rem;
        margin: 5px 0px 0px -10px;
        font-family: 'Poppins';
        font-weight: 600;
        color: var(--text-color);
    }

    .listFollowersSearch .namaFollowers {
        font-size: 0.5rem;
        margin: 0px 0px 0px -10px;
        font-family: 'Poppins';
        font-weight: 300;
        color: var(--text-color);
    }

    .listFollowersSearch .searchFollowing {
        color: var(--text-color);
        border: none;
        padding: 0.6rem 0.6rem 0.6rem 1rem;
        margin: 20px 10px 10px 5px;
        background: transparent;
    }

    .listFollowersSearch .form-control {
        color: var(--text-color);
        border: 1.8px solid rgba(220, 220, 220, 0.3);
        background: transparent;
    }

    .listFollowersSearch .form-control:focus {
        background: transparent;
        color: var(--text-color);
        border: none;
    }

    .headerSearchFollowing p {
        color: var(--text-color);
        margin: 20px 0px -12px 10px;
        font-weight: 600;
    }

    .searchFollowing #isiCari {
        border-radius: 10px;
        width: 88%;
        height: 2.2rem;
        font-size: 0.7rem;
    }

    .listFollowersSearch #btnKirimCari {
        color: var(--main_color-3);
        border: none;
        margin: 0px 0px 0px 20px;
        background: transparent;
    }

    .listFollowers a {
        margin-top: 12px;
        margin-left: 10px;
        text-decoration: none;
    }

    .listFollowers img {
        aspect-ratio: 1/1;
        width: 2.7rem;
        height: 2.7rem;
        padding: 2px;
        border-radius: 50%;
    }

    .listFollowers .usernameFollowers {
        font-size: 0.9rem;
        margin: 5px 0px 0px -10px;
        font-family: 'Poppins';
        font-weight: 600;
        color: var(--text-color);
    }

    .listFollowers .namaFollowers {
        font-size: 0.5rem;
        margin: 0px 0px 0px -10px;
        font-family: 'Poppins';
        font-weight: 300;
        color: var(--text-color);
    }

    #follow {
        font-weight: 600;
        color: var(--main_color-3);
        font-size: 0.7rem;
    }

    .listFollowers #listAll {
        color: var(--text-color);
        margin: 20px 0px 10px 10px;
        font-weight: 600;
    }

    .navigasi .navigasi-item a {
        font-size: 0.7rem;
        text-align: center;
        margin-right: 100px;
        text-decoration: none;
        color: var(--text-color);
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
        .nav-section {
            width: calc(100% - 60px);
            left: 60px;
        }

        .navigasiFilter {
            width: calc(100% - 100px);
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

    footer .btn-edit-akun:hover {
        box-shadow: 2px 1px 5px rgba(0, 0, 0, 0.4);
        transition: all ease 0.2s;
    }

    footer .btn-edit-akun {
        float: right;
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
        margin-top: 20px;
    }

    footer .btn-edit-akun {
        font-size: 0.9rem;
        margin-bottom: 24px;
        background-color: white;
        margin-top: 20px;
        color: black;
        font-weight: 600;
        padding: 10px 20px 10px 20px;
        border-radius: 15px;
    }


    .sidebar {
        position: fixed;
        z-index: 100;
        overflow: auto;
        overflow-x: hidden;
        height: 100%;
        width: 16rem;
        /* background: var(--main_color); */
        box-shadow: 1px 1px 1px rgba(63, 151, 155, 0.4);
        transition: all 0.5s ease;
    }

    .sidebar .detail_logo {
        height: 80px;
        display: flex;
        align-items: center;
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

    .sidebar .detail_logo .namaProfileAuthor {
        color: #fff;
        font-size: 24px;
        font-weight: 500;
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
        transition: all ease 0.3s;
        justify-content: center;
        aspect-ratio: 1/1;
        width: 5rem;
        height: 5rem;
        border-radius: 50%;
    }

    .home-section .fotoProfile label {
        cursor: pointer;
        background-color: white;
        padding: 7px;
        border: 1px solid grey;
        border-radius: 50%;
        margin: 3.2rem 0rem 0rem -1.5rem;
        position: absolute;
    }

    .home-section .fotoProfile label i {
        font-size: 12px;
        cursor: pointer;
        color: var(--main_color-4);
    }

    .home-section .fotoProfile #btnUbahProfile {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    .headerEditProfile p {
        color: var(--main_color);
        margin: 1rem 0rem 1rem 0rem;
        font-weight: 500;
        text-align: center;
    }

    .home-section #usernameProfile {
        font-size: 1.1rem;
        font-weight: 700;
    }

    .formEdtProfile #edtUsername {
        color: var(--text-color);
        font-weight: 600;
    }

    .formEdtProfile #inpUsername {
        background-color: black;
        color: var(--main_color);
        width: 100%;
        padding: 5px 5px 5px 10px;
        border-radius: 5px;
        border: 1.8px solid rgba(220, 220, 220, 0.3);
        font-size: 0.9rem;
    }

    .formEdtProfile #edtNama {
        color: var(--text-color);
        font-weight: 600;
    }

    .formEdtProfile #inpNama {
        background-color: black;
        color: var(--main_color);
        width: 100%;
        padding: 5px 5px 5px 10px;
        border-radius: 5px;
        border: 1.8px solid rgba(220, 220, 220, 0.3);
        font-size: 0.9rem;
    }

    .formEdtProfile #edtEmail {
        color: var(--text-color);
        font-weight: 600;
    }

    .formEdtProfile #inpEmail {
        background-color: black;
        color: var(--main_color);
        width: 100%;
        padding: 5px 5px 5px 10px;
        border-radius: 5px;
        border: 1.8px solid rgba(220, 220, 220, 0.3);
        font-size: 0.9rem;
    }

    .formEdtProfile #edtBio {
        color: var(--text-color);
        font-weight: 600;
    }

    .formEdtProfile #inpBio {
        height: 7rem;
        background-color: black;
        color: var(--main_color);
        width: 100%;
        padding: 5px 5px 5px 10px;
        border-radius: 5px;
        border: 1.8px solid rgba(220, 220, 220, 0.3);
        font-size: 0.9rem;
    }

    .edtData #buttonEdit {
        padding: 5px 40px 5px 40px;
        color: white;
        border: none;
        font-weight: 500;
        border-radius: 5px;
        font-size: 0.8rem;
        box-shadow: 1px 3px 7px rgba(0, 0, 0, 0.2);
        float: right;
        background-color: var(--main_color-4);
    }

    #wrapAnker {
        display: flex;
        text-decoration: none;
        color: black;
    }

    #feeds {
        margin: 0rem -0.2rem 0rem 1rem;
    }

    #feeds .col-4 {
        margin: 0px -10px 4px -10px;
    }

    .home-section #countProfile {
        font-weight: 600;
        font-size: 0.9rem;
        margin-right: 5px;
    }

    .home-section #informationProfile {
        font-size: 0.9rem;
        margin-right: 20px;
    }

    .home-section #namaLengkapProfile {
        margin-top: -5px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    #bioProfile {
        margin-top: -0.8rem;
    }

    .home-section #bioProfile {
        margin-right: 20px;
        font-size: 0.75rem;
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
        .nav-section {
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
</style>
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
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
                    <i><img style="object-fit: cover;" src="{{ asset('images/logo-medsos.png') }}" alt="gambar foto profile"></i>
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
    <section class="home-section">
        <div class="container-fluid containerForm">
            <form action="{{ route('editProfile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row formEdtProfile">
                    <div class="col-12 fotoProfile text-center">
                        <img style="object-fit: cover;" id="isiGambar" src="{{ asset('images/profile/'.old('image',$user->image)) }}" alt="LogoProfile">
                        <label for="btnUbahProfile">
                            <i class="fa-solid fa-camera"></i>
                            <input type="file" name="image" value="{{ old('image',$user->image) }}" id="btnUbahProfile">
                        </label>
                          @error('image')
                                <div class="invalid-feedback">
                                    <p class="text-light">{{ $message }}</p>
                                </div>
                            @enderror

                    </div>
                    <div class="row">
                        <div class="col-12 headerEditProfile" style="margin-left: 12px">
                            <p>Edit Profile</p>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p id="edtUsername">Username</p>
                        </div>
                        <div class="col-md-9">
                            <p><input type="text" name="username" id="inpUsername"
                                    value="{{ old('username', $user->username) }}"></p>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p id="edtNama">Nama</p>
                        </div>
                        <div class="col-md-9">
                            <p><input type="text" name="name" id="inpNama"
                                    value="{{ old('name', $user->name) }}"></p>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p id="edtBio">Bio</p>
                        </div>
                        <div class="col-md-9">
                            <p>
                                <textarea type="text" name="bio" id="inpBio">{{ old('bio', $user->bio) }}</textarea>
                                @error('bio')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md edtData">
                            <button type="submit" id="buttonEdit">Edit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</div>

</html>
<script>
    historyBack= () => {
        window.history.back()
    }
    $('.pilihKategoriFollow').on('click', function() {
        $('.pilihKategoriFollow').removeClass('active');
        $(this).addClass('active');
    });

    const image = document.getElementById("isiGambar");
    const input = document.getElementById("btnUbahProfile");

    input.addEventListener("change", () => {
        image.src = URL.createObjectURL(input.files[0]);
    });
</script>
