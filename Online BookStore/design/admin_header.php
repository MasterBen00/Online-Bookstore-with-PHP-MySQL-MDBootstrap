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
        .table-wrapper-scroll-y {
            display: block;
            max-height: 500px;
            overflow-y: auto;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }
    </style>


</head>

<body>
<!--Navbar-->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark unique-color fixed-top scrolling-navbar">

        <!-- Navbar brand -->
        <div class="container">
            <a class="navbar-brand" href="./index.php">HOME</a>

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
                        <a class="nav-link" href="./admindashboard.php">Book Store
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./add_new_book.php">Add New Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin_history.php">History</a>
                    </li>


                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">More</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./admin_view_user.php">View Users</a>
                            <a class="dropdown-item" href="./admin_view_order1.php">View Order</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>


                </ul>
                <!-- Links -->

                <form class="form-inline" action="./admin_search.php" method="get">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                    </div>
                </form>
                <a href="./admin_logout.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3 btn-rounded" name="logout">Log Out</button></a>
            </div>
            <!-- Collapsible content -->
        </div>

    </nav>
</header>
