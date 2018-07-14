<html>
    <head>
        <link rel="stylesheet" href="packages/material.min.css" />
        <script src="packages/material.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="packages/jquery-3.3.1.min.js"></script>
        <title>ADMIN Stadt, Land, Fluss by philipprogramm</title>
    </head>
    <body>
        <!-- Always shows a header, even in smaller screens. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Stadt, Land, Fluss | Admin</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a class="mdl-navigation__link" href="http://philipprogramm.azurewebsites.net/" target="_blank">philipprogramm</a>
                        <a class="mdl-navigation__link"></a>
                        <a class="mdl-navigation__link"></a>
                        <a class="mdl-navigation__link"></a>
                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Menu</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="index.php" target="_blank">Zum Spiel</a>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">
                    <!-- Your content goes here -->
                    <br />
                    <center>
                        <form action="" method="post">
                            <input type="submit" name="start" value="Spiel starten" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"/>
                        </form>
                        <form action="" method="post">
                            <input type="submit" name="stop" value="Spiel stoppen" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" />
                        </form>
                        <?php
                        if(isset($_POST["start"])) {
                            $buchstabe = chr( mt_rand( 97 , 122 ) );
                            file_put_contents("data.txt", $buchstabe);
                            echo '<span class="mdl-chip mdl-chip--deletable">
    <span class="mdl-chip__text">Spiel erfolgreich gestartet</span>
    <button type="button" class="mdl-chip__action"><i class="material-icons">cancel</i></button>
</span>';
                        };
                        if(isset($_POST["stop"])) {
                            file_put_contents("data.txt", 'stop');
                            file_put_contents("table.txt", "Musterlösung|Not Available|Not Available|Not Available|Not Available|Not Available|Not Available ");
                            echo '<span class="mdl-chip mdl-chip--deletable">
    <span class="mdl-chip__text">Spiel erfolgreich gestoppt.</span>
    <button type="button" class="mdl-chip__action"><i class="material-icons">cancel</i></button>
</span>';
                        };


                        ?>
                    </center>
                    <center>
                    <script>
                        function sortTable(n) {
                            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                            table = document.getElementById("myTable2");
                            switching = true;
                            // Set the sorting direction to ascending:
                            dir = "asc";
                            /* Make a loop that will continue until
                            no switching has been done: */
                            while (switching) {
                                // Start by saying: no switching is done:
                                switching = false;
                                rows = table.getElementsByTagName("TR");
                                /* Loop through all table rows (except the
                                first, which contains table headers): */
                                for (i = 1; i < (rows.length - 1); i++) {
                                    // Start by saying there should be no switching:
                                    shouldSwitch = false;
                                    /* Get the two elements you want to compare,
                                    one from current row and one from the next: */
                                    x = rows[i].getElementsByTagName("TD")[n];
                                    y = rows[i + 1].getElementsByTagName("TD")[n];
                                    /* Check if the two rows should switch place,
                                    based on the direction, asc or desc: */
                                    if (dir == "asc") {
                                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                            // If so, mark as a switch and break the loop:
                                            shouldSwitch = true;
                                            break;
                                        }
                                    } else if (dir == "desc") {
                                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                            // If so, mark as a switch and break the loop:
                                            shouldSwitch = true;
                                            break;
                                        }
                                    }
                                }
                                if (shouldSwitch) {
                                    /* If a switch has been marked, make the switch
                                    and mark that a switch has been done: */
                                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                                    switching = true;
                                    // Each time a switch is done, increase this count by 1:
                                    switchcount++;
                                } else {
                                    /* If no switching has been done AND the direction is "asc",
                                    set the direction to "desc" and run the while loop again. */
                                    if (switchcount == 0 && dir == "asc") {
                                        dir = "desc";
                                        switching = true;
                                    }
                                }
                            }
                        }
                    </script>
                    <table id="myTable2" class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                        <thead>
                            <tr>
                                <th onclick="sortTable(0)" class="mdl-data-table__cell--non-numeric">Name der Gruppe/Der Person</th>
                                <th onclick="sortTable(1)">Stadt</th>
                                <th onclick="sortTable(2)">Land</th>
                                <th onclick="sortTable(3)">Fluss</th>
                                <th onclick="sortTable(4)">Benutzerdefiniert 1</th>
                                <th onclick="sortTable(5)">Benutzerdefiniert 2</th>
                                <th onclick="sortTable(6)">Benutzerdefiniert 3</th>
                            </tr>
                        </thead>
                        <?php
    $file = fopen("table.txt", "r") or die("Unable to open file!");
    while (!feof($file)){
        $data = fgets($file);
        list($yname, $stadt, $land, $fluss, $name, $tier, $essen) = explode("|", $data);
                        ?>
                        <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">
                                    <?=$yname ?>
                                </td>
                                <td class="mdl-data-table__cell--non-numeric">
                                    <?=$stadt ?>
                                </td>
                                <td class="mdl-data-table__cell--non-numeric">
                                    <?=$land ?>
                                </td>
                                <td class="mdl-data-table__cell--non-numeric">
                                    <?=$fluss ?>
                                </td>
                                <td class="mdl-data-table__cell--non-numeric">
                                    <?=$name ?>
                                </td>
                                <td class="mdl-data-table__cell--non-numeric">
                                    <?=$tier ?>
                                </td>
                                <td class="mdl-data-table__cell--non-numeric">
                                    <?=$essen ?>
                                </td>
                            </tr>
                            <?php
    }
        fclose($file);
                            ?>
                        </tbody>
                    </table></center>
                </div>
            </main>
        </div>



    </body>
</html>
