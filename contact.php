<!DOCTYPE html>
<html>
        <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Joha6210</a>
                </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="php.php">Pictures</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                <form class="navbar-form navbar-left">
                        <div class="input-group">
                            <input id="value" type="text" class="form-control" placeholder="Type Here!" value="">
                        </div class="input-group-btn">
                        <button id="btn1" type="Search" class="btn btn-success">Search</button>
                        <i class="glyphicon glyphicon-search"></i>
                </form>
            </div>
        </nav>
       <form action="welcome_get.php" method="get">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
        </form>
    </body>
</html>