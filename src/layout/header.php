<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> <?php echo $title ?> </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="description" content="<?php echo $md; ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
    <link href="layout/style.css" rel = "stylesheet">
    <script src="layout/js/site.js"></script>
</head>

<body>
<div class="container" >
    <div class="row">
    <nav class="navbar navbar-expand-lg" style="background-color: rgb(65, 7, 109);" >
      <div class="container-fluid">
      <a class="navbar-brand" href="#">Zhenyu Yang </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ex1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">task2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">task3</a>
        </li>
        
      </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

<div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">
            <div class="col-sm-3" style="background-color: rgba(228, 235, 194, 0.353);">
                <h3>List of Tasks</h3>
                <li>
                    <a href="ex1.php" class="active" style="color: black;">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">ex1.php</span>
                    </a>
                </li>
                <li>
                    <a href="index.php" class="active" style="color: black;">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">index.php</span>
                    </a>
                </li>
                <li>
                    <a href="variable.php" class="active" style="color: black;">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">variable.php</span>
                    </a>
                </li>
                <li>
                    <a href="controlflow.php" class="active" style="color: black;">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">controlflow.php</span>
                    </a>
                </li>
                <li>
                    <a href="array.php" class="active" style="color: black;">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">array.php</span>
                    </a>
                </li>
            </div>
            
            <div class="col-sm-9">

            


 

