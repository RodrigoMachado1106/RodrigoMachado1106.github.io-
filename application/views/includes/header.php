<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"> 
	<title>WebDev</title>

    <base href="<?php echo base_url();?>">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
    <link href="assets/css/main.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    

    </head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">

        <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" class="w-50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" width="50px">
        
            <form class="d-flex">

                <input class="form-control" name="pesquisa" id="pesquisa" type="search" placeholder="Pesquise sua série ou filme" aria-label="Search">
                
                <div 
                    class="position-absolute w-50"
                    id="resultadoPesquisa">
              
                </div>

            </form>

        </div>

    </div>
</nav>