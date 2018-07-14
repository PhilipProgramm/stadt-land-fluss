
<html>
<head>
    <title>Stadt, Land, Fluss by philipprogramm</title>
    <link rel="stylesheet" href="packages/material.min.css" />
    <script src="packages/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="packages/jquery-3.3.1.min.js"></script>
</head>
<body>
    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Stadt, Land, Fluss</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href=""></a>
                    <a class="mdl-navigation__link" href=""></a>
                    <a class="mdl-navigation__link" href=""></a>
                    <a class="mdl-navigation__link" href=""></a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Mehr</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="index.php">Neues Spiel</a>
                <a class="mdl-navigation__link" href=""></a>
                <a class="mdl-navigation__link" href=""></a>
                <a class="mdl-navigation__link" href=""></a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <center>
                <?php
                $name = $_POST["yname"];
                $stadt = $_POST["stadt"];
                $land = $_POST["land"];
                $fluss = $_POST["fluss"];
                $def1 = $_POST["Def1"];
                $def2 = $_POST["Def2"];
                $def3 = $_POST["Def3"];
                $write = "\n".$name."|".$stadt."|".$land."|".$fluss."|".$def1."|".$def2."|".$def3;
                file_put_contents("table.txt", $write, FILE_APPEND);
                echo 'Erfolgreich gesendet. Bitte warten...';
                ?></center>







            </div>
        </main>
    </div>


</body>


</html>