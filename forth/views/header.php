<!DOCTYPE html>

<html>

    <head>
        <!-- http://getbootstrap.com/ -->
        <link href="/public/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/public/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>C$50 Finance: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>C$50 Finance</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/public/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/public/js/bootstrap.min.js"></script>

        <script src="/public/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="C$50 Finance" src="/public/img/logo.png"/></a>
                </div>
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li><a href="/">Home</a></li>
                        <li><a href="quote.php">Quote</a></li>
                        <li><a href="buy.php">Buy</a></li>
                        <li><a href="sell.php">Sell</a></li>
                        <li><a href="history.php">History</a></li>
                        <?php echo "<li><a href='logout.php'><strong>Log Out</strong> ({$_SESSION['username']})</a></li>"; ?>
                    </ul>
                <?php endif ?>
            </div>

            <div id="middle">
