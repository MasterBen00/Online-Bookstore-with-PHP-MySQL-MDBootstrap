<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .pt-3-half {
            padding-top: 1.4rem;
        }
    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark blue-gradient fixed-top navbar-toggleable-md scrolling-navbar">
    <div class="container">



        <!-- Navbar brand -->
        <a class="navbar-brand" href="./user_login.php">Book Store</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./usedbooks.php">Used Books
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./user_history.php">My History</a>
                </li>




            </ul>
            <!-- Links -->

            <form class="form-inline" action="./search.php" method="get">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>
            <a href="logout.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3 btn-rounded" name="logout">Log Out</button></a>
        </div>
    </div>
    <!-- Collapsible content -->

</nav>
