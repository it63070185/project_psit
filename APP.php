<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/Logo.png" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="menubar-d">
        <div class="container-d">
            <div class="logo">
                <h1>MY DIARY</h1>
            </div>
            <ul class="menu-d">
                <li>
                    <a href="index.html">HOME</a>
                </li>
                <li>
                    <a href="about.html">ABOUT</a>
                </li>
                <li>
                    <a href="contact.html">CONTACT</a>
                </li>
            </ul>
        </div>

    <div class="clearfix"></div>

    </div>
    <div class="container">
        <div>
            <h2><?php 
                 echo $_POST['name'];
                ?>'s Diary</h2>
        </div>
        <div class="header">
            <div class="clear">
                <i class="fa fa-refresh"></i>
            </div>
            <div id="date"></div>
        </div>
        <div class="content">
            <ul id="list">
               <!-- 
                <li class="item">
                    <i class="fa fa-circle-thin co" job="complete" id="0"></i>
                    <p class="text">Eat</p>
                    <i class="fa fa-trash de" job="delete" id="0"></i> 
                </li> -->
            </ul>
        </div>
        <div class="add-to-do">
            <i class="fa fa-plus-circle"></i>
            <input type="text" id="input" placeholder="ADD">
        </div>
    </div>
    <script src="js/app.js"></script>
    
</body>
</html>
