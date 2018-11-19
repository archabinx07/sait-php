<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>Night Mode Reddit</title>
</head>
<body>
<!--***********************************
Header
*************************************-->
<header>
    <div class="header-section flex flex-h">
        <i class="fab fa-reddit fa-2x"><span>reddit</span></i>

<!---------------------------------------------------------->
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="fas fa-chart-line"></i>Popular
            <i class="fas fa-caret-down"></i></button>
            <ul class="dropdown-menu">
                <input type="text" placeholder="Filter" class="filter">
                <li class="dropdown-header">REDDIT FEEDS</li>
                <li><a href="#"><i class="fas fa-chart-line"></i>Popular</a></li>
                <li><a href="#"><i class="fas fa-chart-bar"></i>All</a></li>
                <li><a href="#"><i class="fas fa-street-view"></i>Original Content</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">OTHER</li>
                <li><a href="#"><i class="far fa-copyright"></i>Coins</a></li>
                <li><a href="#"><i class="fas fa-shield-alt"></i>Premium</a></li>
            </ul>
        </div>

<!---------------------------------------------------------->
        <i class="fa fa-search"></i>
        <input type="text" placeholder="Search Reddit" class="search">

<!---------------------------------------------------------->
        <div class="icons">
            <i class="fas fa-chart-line"></i>
            <i class="fas fa-chart-bar"></i>
            <i class="fas fa-street-view"></i>
        </div> 
        <span class="vdiv">|</span>

<!---------------------------------------------------------->
        <div class="user-action">
            <button type="button" class="loginBtn"><a href="/login">log in</a></button>
            <button type="button" class="signupBtn"><a href="/register">sign up</a></button>
        </div>

<!---------------------------------------------------------->
        <div class="old-reddit">
            <i class="fas fa-external-link-alt"></i><button type="button" class="oldReddit">Visit Old Reddit</button>
        </div>

<!---------------------------------------------------------->
        <div class="user-options">
            <button class="user-options"><i class="fas fa-user"></i><i class="fas fa-caret-down"></i></button>
        </div>
            
    </div>
</header>
<main>
    <!---****************************************************-->
    <!---Main-Top Section-->
    <!---****************************************************-->
    <div class="view-section flex flex-h">
    <?php if(Auth::check()): ?>
        <div class="userName">
            <strong>Hello, <?php echo request()->user()->name ?></strong>
        </div>
        @include ('logout')
    <?php endif; ?>
        <div class="view-container flex flex-h">
            <span class="view">view</span>
            <div class="view-icons">
                <i class="fas fa-columns"></i>
                <i class="fas fa-bars"></i>
                <i class="fas fa-align-justify"></i>
            </div>
            <span class="view-vdiv">|</span>
            <span class="sort">sort</span>
            <button class="hot">
                <i class="fas fa-fire"></i>
                <span class="hotLabel">hot</span>
                <i class="fas fa-caret-down"></i>
            </button>
            <button class="country">
                <span class="countryLabel">Canada</span>
                <i class="fas fa-caret-down"></i>
            </button>
        </div>
    </div>
    @yield('content')
</main>

</body>
</html>