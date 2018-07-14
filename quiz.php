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
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href=""></a>
      <a class="mdl-navigation__link" href=""></a>
      <a class="mdl-navigation__link" href=""></a>
      <a class="mdl-navigation__link" href=""></a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
      <center><form action="getdata.php" method="post" name="eingabe">
            Dein Name/Gruppenname: <input type="text" name="yname" onkeyup="saveData('yname')" id="yname"/><br /><hr />
                            Stadt: <input type="text" name="stadt" onkeyup="saveData('stadt')" id="stadt" />
                            <br />
                            Land: <input type="text" name="land" onkeyup="saveData('land')" id="land" />
                            <br />
                            Fluss: <input type="text" name="fluss" onkeyup="saveData('fluss')" id="fluss" />
                            <br />
                            Benutzerdefiniert 1:<input type="text" name="Def1" onkeyup="saveData('Def1')" id="Def1" />
                            <br />
                            Benutzerdefiniert 2<input type="text" name="Def2" onkeyup="saveData('Def2')" id="Def2" />
                            <br />
                            Benutzerdefiniert 3<input type="text" name="Def3" onkeyup="saveData('Def3')" id="Def3" />
                            <br />
        </form></center>
      <script>
              document.eingabe.reset();
              setTimeout(function () {
                  // Code, der erst nach 2 Sekunden ausgeführt wird
                  alert("ENDE!");
                  document.eingabe.submit();
              }, 30000);


      </script>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      </div>
  </main>
</div>


</body>


</html>