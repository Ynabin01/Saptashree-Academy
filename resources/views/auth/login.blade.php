<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel | User Login</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/bootstrap/css/bootstrap.min.css')}}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/font-awesome.min.css')}}" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="icon" type="image/png" href="{{asset('assets/img/fav.png')}}" sizes="16x16">

    <script type="text/javascript" src="{{asset('assets/admin/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>


</head>

<body>

    <div class="login-wrapper">

        <div class="login-card">

            <!-- Logo -->
            <div class="login-logo">
                <i class="fa fa-shield"></i>
            </div>

            <!-- Title -->
            <h2 class="login-title">Admin Login</h2>

            <p class="login-subtitle">
                Secure access to dashboard panel
            </p>

            <!-- Form -->
            <form method="post" action="{{ route('login.submit') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <i class="fa fa-user"></i>

                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Username" required>
                </div>

                <div class="form-group">
                    <i class="fa fa-lock"></i>

                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter Password" required>
                </div>

                <button type="submit" name="login" class="btn btn-login">
                    <i class="fa fa-sign-in"></i>
                    Login to Dashboard
                </button>

            </form>

        </div>

        <!-- Footer -->
        <div class="footer-text">

            Copyright &copy;
            <script>
            document.write(new Date().getFullYear());
            </script>
            All Rights Reserved

            <br>

            Saptashree Academy | Damak

            <br>

            Developed By
            <a href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile"
                target="_blank">
                NABIN
            </a>

        </div>

    </div>

</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        position: relative;
        overflow: hidden;

        background:
            linear-gradient(135deg, #0f172a 0%, #1e3a8a 45%, #38bdf8 100%);
    }
    /* BACKGROUND GLOW */
    body::before {
        content: '';
        position: absolute;
        width: 420px;
        height: 420px;
        background: rgba(255, 255, 255, 0.07);
        border-radius: 50%;
        top: -180px;
        right: -120px;
        filter: blur(10px);
    }

    body::after {
        content: '';
        position: absolute;
        width: 350px;
        height: 350px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        bottom: -140px;
        left: -100px;
        filter: blur(10px);
    }

    /* LOGIN WRAPPER */

    .login-wrapper {
        width: 100%;
        max-width: 350px;
        position: relative;
        z-index: 10;
    }

    /* LOGIN CARD */

    .login-card {
        background: rgba(255, 255, 255, 0.12);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);

        border: 1px solid rgba(255, 255, 255, 0.15);

        border-radius: 24px;

        padding: 30px 26px;

        box-shadow:
            0 10px 40px rgba(0, 0, 0, 0.25);

        animation: fadeUp .8s ease;

        transition: all .3s ease;
    }

    .login-card:hover {
        transform: translateY(-3px);
        box-shadow:
            0 15px 45px rgba(0, 0, 0, 0.35);
    }

    /* ANIMATION */

    @keyframes fadeUp {

        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* LOGO */

    .login-logo {
        width: 68px;
        height: 68px;
        margin: 0 auto 16px;

        border-radius: 50%;

        background:
            linear-gradient(135deg, #38bdf8, #2563eb);

        display: flex;
        align-items: center;
        justify-content: center;

        box-shadow:
            0 10px 25px rgba(0, 0, 0, 0.25);
    }

    .login-logo i {
        font-size: 28px;
        color: #fff;
    }

    /* TITLE */

    .login-title {
        text-align: center;
        color: #fff;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 5px;
        letter-spacing: .5px;
    }

    .login-subtitle {
        text-align: center;
        color: rgba(255, 255, 255, 0.75);
        margin-bottom: 24px;
        font-size: 12px;
        line-height: 20px;
    }

    /* FORM */

    .form-group {
        margin-bottom: 16px;
        position: relative;
    }

    .form-group i {
        position: absolute;
        top: 16px;
        left: 16px;
        color: #94a3b8;
        font-size: 13px;
        z-index: 2;
    }

    .form-control {
        height: 48px;
        border-radius: 12px;
        border: none;

        padding-left: 42px;

        font-size: 14px;
        font-weight: 500;

        background: rgba(255, 255, 255, 0.95);

        box-shadow: none;

        transition: all .3s ease;
    }

    .form-control:focus {
        border: none;
        outline: none;

        background: #fff;

        box-shadow:
            0 0 0 4px rgba(56, 189, 248, 0.25);
    }

    /* BUTTON */

    .btn-login {
        width: 100%;
        height: 48px;

        border: none;
        border-radius: 12px;

        background:
            linear-gradient(135deg, #38bdf8, #2563eb);

        color: #fff;

        font-size: 14px;
        font-weight: 600;

        letter-spacing: .3px;

        transition: all .3s ease;
    }

    .btn-login i {
        margin-right: 6px;
    }

    .btn-login:hover {
        transform: translateY(-2px);

        box-shadow:
            0 12px 25px rgba(37, 99, 235, 0.35);

        color: #fff;
    }

    /* FOOTER */

    .footer-text {
        text-align: center;

        margin-top: 20px;

        color: rgba(255, 255, 255, 0.75);

        font-size: 12px;

        line-height: 22px;
    }

    .footer-text a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        transition: .3s;
    }

    .footer-text a:hover {
        color: #38bdf8;
    }

    /* MOBILE */

    @media(max-width:480px) {

        body {
            padding: 25px 15px;
        }

        .login-wrapper {
            max-width: 320px;
        }

        .login-card {
            padding: 24px 20px;
            border-radius: 20px;
        }

        .login-title {
            font-size: 22px;
        }

        .login-subtitle {
            font-size: 11px;
        }

        .form-control {
            height: 46px;
            font-size: 13px;
        }

        .btn-login {
            height: 46px;
            font-size: 13px;
        }

    }
    </style>