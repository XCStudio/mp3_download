<?php
/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 7/14/2018
 * Time: 7:56 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home | MP3 Down</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome-->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/github-button.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="<?= base_url() ?>">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="about.html">DMCA</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Main component for a primary marketing message or call to action -->
<div class="header">
    <div class="container">
        <h1>Download CodeIgniter</h1>
    </div>
</div>

<div id="news" class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">

        </div>
    </div>

</div>

<div class="footer">
    <div class="footer-menu">
        <div class="container">
            <div class="row bcit50">
                <ul class="nav nav-pills">

                    <li class=""><a href="/help">Term & Conditions</a></li>

                    <li class=""><a href="/help/legal">Sitemap</a></li>

                    <li class=""><a href="/help/about">About</a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">

                <p class="text-center">Created by <a href="">Xiaocids</a>. Copyright &copy; 2018</p>
            </div>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>