<html>
<body>

<?php

$pass = $_GET["pass"];
$user = $_GET["user"];

$old_user = "Joha6210";
$old_pass = "1234";

if ($user = $old_user && $pass = $old_pass){
    welcome();
}


else {
    error_log("Wrong Password or Username");
}
function welcome(){
echo $_GET["user"];
}
?><br>

</body>
</html>