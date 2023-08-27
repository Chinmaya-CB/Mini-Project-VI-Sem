<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_main.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
        <title>Document</title>
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="index.html">MeduBook</a>
                <div class="nav-links" id="navlinks">
                    <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="">HOME</a></li>
                        <li><a href="index.php">ITEM-LIST</a></li>
                        <li><a href="item-create.php">ITEM ADD</a></li>
                        <li><a href="billing.php">INVOICE</a></li>
                        <li><a href="login.php">LOG OUT</a></li>
                    </ul>
                </div>
                <i class="fa-solid fa-bars" onclick="showMenu()"></i>
            </nav>
            <div class="text-box">
                <h1>MeduBook<br></h1>
                <p>MeduBook is a handy tool for all singly owned medical stores that require a site with minimal maintenance and the ability to perform various tasks effortlessly, while maximizing productivity with minimal effort.<br></p>
                <a href="">For more information</a>
            </div>
        </section>
<script>
    var navlinks = document.getElementById("navlinks");
    function showMenu(){
        navlinks.style.right = "0";
    }
    function hideMenu(){
        navlinks.style.right = "-200px";
    }
</script>
    </body>
</html>