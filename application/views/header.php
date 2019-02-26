<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Preparations</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css" />
</head>
<body>
<nav class="navbar navbar-inverse" id="header">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>home">Web Preparations</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="#"><a href="<?php echo base_url(); ?>home">Home</a></li>
                <li class="#"><a href="<?php echo base_url(); ?>jobs">Jobs</a></li>
                <li class="#"><a href="<?php echo base_url(); ?>user">User</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>user/registration"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="<?php echo base_url(); ?>user/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
