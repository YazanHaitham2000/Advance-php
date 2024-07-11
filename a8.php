<?php
$cookie_name="user";
$cookie_value="yazan";
$cookie_expair=time()+3600;
$cookie_path="/";
$cookie_domin=$_SERVER["HTTP_HOST"];
$cookie_secure=isset($_SERVER["HTTP"]);
$httponly=true;
setcookie($cookie_name,$cookie_value,$cookie_expair,$cookie_path,$cookie_domin,$cookie_secure,$httponly);
echo "done"."<br>";




?>
<?php

if(count($_COOKIE)>0){
    foreach($_COOKIE as $name=>$value){
        echo "cookie name: $name cookie value: $value";
    }
}else{
    echo "dont have any array";
}

?>
<?php
echo "<br>";
$cookie_name="user";
$cookie_expair=time()-3600;
setcookie($cookie_name,"",$cookie_expair,"/");
echo "cookie deleted";

?>