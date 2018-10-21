<?php
$page_title = "Dashboard";
include_once $_SERVER['DOCUMENT_ROOT'] . "/echocash/web-assets/tpl/app_header.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/echocash/web-assets/tpl/app_nav.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/echocash/web-assets/tpl/app_footer.php";
?>
<html>
<head>
  <link rel="stylesheet" href="style.css"/>
</head>

<body>
        <div id="about">
            <h1 id="intro">It's your <span id="fancy">Dashboard</span></h1>
            <img src="data/echoCash.png" width="300" height="300"/>
            <p>Welcome to your EchoCash dashboard! Here you can view your pending payments.
              Use the menu bar to navigate to your bank account, friends list, and settings.
              Try saying <i>"Alexa pay my friend $15 for lunch yesterday"</i></p>
        </div>
</body>
</html>
