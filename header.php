<?php
    require_once 'src/database.php';
/**
 * Created by PhpStorm.
 * User: Somart
 * Date: 02.09.15
 * Time: 17:54
 */
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>TEMPLATE BY SOMART</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//bootswatch.com/darkly/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">devchat</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                   <li><a href="#">Profile</a></li>
                    <!--<li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                       <ul class="dropdown-menu" role="menu">
                           <li><a href="#">Action</a></li>
                           <li><a href="#">Another action</a></li>
                           <li><a href="#">Something else here</a></li>
                           <li class="divider"></li>
                           <li><a href="#">Separated link</a></li>
                           <li class="divider"></li>
                           <li><a href="#">One more separated link</a></li>
                       </ul>
                   </li>-->
                </ul>
               <!--ss="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://vk.com/somart_origins">Author</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <h1><?php
        if(false) {
            echo "Wellcome my lord!";
        } else {
            echo "Wellcome!"; //. $_POST['name'] . "!";
        }
        ?></h1>