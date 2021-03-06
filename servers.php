<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once "include/SessionManager.php";

$user = SessionManager::get();
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Server List - Much Assembly Required</title>
    <meta charset="utf-8"/>
    <meta name="description"
          content="Much Assembly Required is a game where you can program your robot's microprocessor in x86-like assembly language in a procedurally generated universe">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.min.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ie8.min.css"/><![endif]-->

    <style>

        @font-face {
            font-family: 'fixedsys';
            src: url("./mar/fonts/FSEX301-L2.ttf");
        }

    </style>

</head>
<body class="homepage">

<!-- Nav -->
<nav id="nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="current"><a href="servers.php">Play</a></li>
        <li>
            <a href="#">Account</a>
            <ul>
                <?php if ($user) { ?>
                    <li><a href="account.php"><?php echo $user["username"] ?></a></li>
                    <li><a href="logout.re.php">Logout</a></li>
                <?php } else { ?>
                    <li><a href="login.php">login</a></li>
                <?php } ?>
            </ul>
        </li>
    </ul>
</nav>

<div id="page-wrapper">

    <?php // include "header.inc.html" ?>

    <!-- Main -->
    <div id="main-wrapper">
        <div id="main" class="container">
            <div class="12u">


                <style>

                    table {
                        margin: 0 0 2.25em 0;
                        width: 100%;
                        border-collapse: collapse;
                        border-spacing: 0;
                    }

                    table tbody tr {
                        border: solid 2px #f4f4f4;
                        border-left: 0;
                        border-right: 0;
                    }

                    table tbody tr:nth-child(2n + 1) {
                        background-color: #fafafa;
                    }

                    table td {
                        padding: 0.75em 0.75em;
                    }

                    table th {
                        color: #777;
                        font-size: 0.9em;
                        font-weight: 700;
                        padding: 0 0.75em 0.75em 0.75em;
                        text-align: left;
                    }

                    table thead {
                        border-bottom: solid 4px #e4e4e4;
                    }

                    table tfoot {
                        border-top: solid 4px #e4e4e4;
                    }

                </style>

                <h2>Server list</h2>

                <table id="serverList">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>


                    <?php
                    foreach (SERVER_LIST as $server) {
                        echo "<tr>";
                        echo "<td><a class='button' href='$server[1]'>$server[0]</a></td>";
                        echo "<td>$server[2]</td>";

                        echo "</tr>";

                    }
                    ?>
                </table>

            </div>
        </div>
    </div>

    <?php //include "footer.inc.html" ?>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.min.js"></script>
<!--[if lte IE 8]>
<script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.min.js"></script>

</body>
</html>