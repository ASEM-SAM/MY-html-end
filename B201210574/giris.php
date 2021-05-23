<?php

session_start();
ob_start();


if(($_POST["user"]=="b201210574@ogr.sakarya.edu.tr") && ($_POST["pass"]=="123"))
{

$_SESSION["login"] = "true";
$_SESSION["user"] = "b201210574@ogr.sakarya.edu.tr";
$_SESSION["pass"] = "123";

echo "Hosgeldiniz b201210574 . Giriş basarili. Anasayfaya yonlendiriliyorsunuz. Lütfen bekleyin..";
header("Refresh:2; url=index.html");

}
elseif(($_POST["user"]==null) && ($_POST["pass"]==null))
{
echo "Kullanici adi veya sifre bos birakilamaz.";
header("Refresh: 2; url=giris.html");
}
else
{
echo "Kullanici adi veya sifre yanlis.";
header("Refresh: 2; url=giris.html");
}


ob_end_flush();
?>