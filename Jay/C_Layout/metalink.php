<?php 
$page=basename($_SERVER['PHP_SELF']);

include_once __DIR__.'/../ad_kingdomceramic/Configure/dbconfig.php'; 
$result=$staticpageObj->selectByMetaFor($page);
$row=mysqli_fetch_assoc($result);
echo' 

<!-- ===============================================-->
<!--    Document Title-->
<!-- ===============================================-->
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>'.$row["MetaTitle"].'- kingdom ceramic</title>  

    <meta content="'.$row["MetaDescription"].'" name="description">

    <meta content="'.$row["MetaKeywords"].'" name="keywords">
    

    <meta property="og:title" content="'.$row["MetaOgTitle"].'">

    <meta property="og:description" content="'.$row["MetaOgDescription"] .'">

    <meta property="og:image" content="'.$row["MetaOgImage"].'">

'?>