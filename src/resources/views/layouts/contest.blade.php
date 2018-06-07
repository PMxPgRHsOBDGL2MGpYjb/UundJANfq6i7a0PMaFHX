<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lucytvee</title>

    <!-- Bootstrap -->
    <link href="/contest/css/bootstrap.min.css" rel="stylesheet">
    <link href="/contest/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- header -->
<header>
    <div class="container">
        <img src="/contest/images/logo.png">
        <ul class="pull-right">
            <li>
                <a href="#">Rules </a>
            </li>
            <li>
                <a href="#">Terms & Conditions</a>
            </li>
        </ul>
    </div>
</header>
@yield('content')
<!-- footer -->
<footer>
    <div class="container">
        <div class="col-sm-5 hidden-xs">
            <ul>
                <li><a href="#">rules</a></li>
                <li><a href="#">terms & Conditions</a></li>
            </ul>
        </div>
        <div class="col-sm-7">
            <img src="/contest/images/foot-logo.png">
            <p class="pull-right">
                All rights reserved © 2018
            </p>
        </div>
</footer>
<script src="/contest/js/jquery.min.js"></script>
<script src="/contest/js/bootstrap.min.js"></script>
<script src="/contest/js/plugin.js"></script>

</body>

</html>
