<?php

session_start();
if(isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
} 
if(!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en'; // default value
}
include('lang'. '/' . $_SESSION['lang'] . '.php'); // include lang file

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="François Lévesque">
    <link rel="icon" href="../../favicon.ico">

    <title>Nordresa - <?php echo $pageTitle ?></title>

    <!-- Main CSS -->
    <link href="/css/main.css" rel="stylesheet">
    <link href="/bower_components/PACE/themes/blue/pace-theme-minimal.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- TypeKit -->
    <script src="https://use.typekit.net/zcr2yom.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>