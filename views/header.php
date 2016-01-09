<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>
        
        <link href="tablestyle.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Feeding Back <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Feeding Back</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div id="logo">
                    <a href="/"><img alt="Feeding Back" src="/img/logo.jpg"/></a>
                    <br>
                </div>
                
                
                    <ul class="nav nav-pills">
                        <li><a href="displaycomments.php">Comments</a></li>
                        <li><a href="analysis.php">Analysis</a></li>
                        <li><a href="newcomment.php">New Comment</a></li>
                        <li><a href="display_documentation.php">Documentation</a></li>
                        <li><a href="display_design.php">Design</a></li>
                    </ul>
            
            </div>

            <div id="middle">
