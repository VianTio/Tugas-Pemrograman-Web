<html>

<head>
    <title>Vian Site</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Private CSS -->
    <link rel="stylesheet" href="template.css" type="text/css">
</head>

<body>
    <header class="title" id="header">
        <div class="overlay">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top pt-3" id="mainNav">
                <button class="btn btn-secondary" onclick="openSB()">> Sidebar</button>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>My Amazing Template Site</h1>
                        <span class="subheading">Situs Resmi Milik Vian</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Begin Dynamic Content -->
    <div class="content" id="content">
        <?php
        //include the main.php page
        //include_once('main.php');
        ?>
        <?php
        // create an array of allowed pages
        $allowedPages = array('page1', 'page2', 'page3');
        // check if the page variable is set and check if it is the array of allowed pages
        if (isset($_GET['page']) && in_array($_GET['page'], $allowedPages)) {
            // first check that the file exists
            if (file_exists($_GET['page'] . '.php')) {
                // If all is well, we include the file
                include_once $_GET['page'] . '.php';
            } else {
                // A little error message if the file does not exist
                echo 'No such file exists';
            }
        }
        // if somebody typed in an incorrect url
        else {
            // if things are not as they should be, we included the default page
            if (file_exists('main.php')) {
                // include the default page
                include_once 'main.php';
            } else {
                // if the default page is missing, we have a problem and it needs to be fixed.
                echo 'main.php is missing. Please fix me.';
            }
        }
        ?>
    </div>
    <!-- End Dynamic Content -->

    <!-- Begin sidebar Content -->
    <div class="sidebar" id="sidebar">
        <ul class="menu">
            <a href="javascript:void(0)" class="closebtn" onclick="closeSB()">&times;</a>
            <li><a href="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">Home</a></li>
            <li><a href="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>?page=page1">Page One</a></li>
            <li><a href="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>?page=page2">Page Two</a></li>
            <li><a href="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>?page=page3">Page Three</a></li>
        </ul>
        <div class="other">
            <p>Get all your PHP needs from <a href="#">PHPro.org</a> - pelajari pada iklan ini</p>
        </div>
    </div>
    <!-- End sidebar Content -->

    <!-- Private JavaScript -->
    <script>
        function openSB() {
            document.getElementById("sidebar").style.width = "250px";
            document.getElementById("content").style.marginLeft = "250px";
            document.getElementById("header").style.marginLeft = "250px";
            document.getElementById("mainNav").style.marginLeft = "250px";
        }

        function closeSB() {
            document.getElementById("sidebar").style.width = "0";
            document.getElementById("content").style.marginLeft = "0";
            document.getElementById("header").style.marginLeft = "0";
            document.getElementById("mainNav").style.marginLeft = "0";
        }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>