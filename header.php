<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Analytics4Athletes</title>

    <?php wp_head(); ?>

  </head>

<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="<?php bloginfo('template_directory'); ?>/images/logo_nav.png" alt="Analytics4Athletes">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://seanhasensteindemo.com">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropdown-menu dropdown-menu-left">
              <li><a href="http://seanhasensteindemo.com/player-analysis">Player Analysis</a></li>
              <li><a href="http://seanhasensteindemo.com/player-development">Player Development</a></li>
              <li><a href="http://seanhasensteindemo.com/team-scouting-report">Team Scouting Report</a></li>
            </ul>
          </li>
          <li><a href="http://seanhasensteindemo.com/about">About Us</a></li>
          <li><a href="http://seanhasensteindemo.com/contact">Contact Us</a></li>
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>