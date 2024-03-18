<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The Hello World program, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Clara Tyman" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-indigo.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link sizes="32x32" href="favicon-32x32.png" />
  <link sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>The Hello World program,in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js">
    function button1() {
      alert("Hello, Wordl!")
    }
  </script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The Hello World program, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/red panda-gif.gif" alt="red panda gif" width="250" />
      </div>
      <div class="page-content-php">
        <form action="answer.php" method="POST">
          <p>Length calculation</p>
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" onclick="button1()">
            Hello, World!
          </button>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="length">
            <label class="mdl-textfield__label" for="length-input">Type length here ...</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          <br />
          <!-- button -->
        </form>
      </div>
    </main>
  </div>
</body>

</html>