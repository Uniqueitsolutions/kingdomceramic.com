<?php

include_once __DIR__.'/../Model/mst_type.php';
include_once __DIR__.'/../Model/mst_size.php';
include_once __DIR__.'/../Model/mst_look.php';
include_once __DIR__.'/../Model/mst_space.php';
include_once __DIR__.'/../Model/mst_finish.php';
include_once __DIR__.'/../Model/mst_contact.php';
include_once __DIR__.'/../Model/sec_user.php';
include_once __DIR__.'/../Model/pro_product.php';
include_once __DIR__.'/../Model/sli_slider.php';
include_once __DIR__.'/../Model/pro_catalouge.php';
include_once __DIR__.'/../Model/meta_staticpage.php';
include_once __DIR__.'/../Model/inq_inquiry.php';
include_once __DIR__.'/../Model/blo_blog.php';
include_once __DIR__.'/../Mail/sendmail.php';
include_once __DIR__.'/../Model/cryptor.php';
include_once __DIR__.'/../Model/catalouge_registration.php';
include_once __DIR__.'/../Model/mst_manue.php';
include_once __DIR__.'/../Model/sec_userwisemanue.php';


$UserAccesObj=new sec_userwisemanue();
$typeObj=new mst_type();
$sizeObj=new mst_size();
$lookObj=new mst_look();
$spaceObj=new mst_space();
$finishObj=new mst_finish();
$contactObj=new mst_contact();
$userObj=new sec_user();
$productObj=new pro_product();
$sliderObj=new sli_slider();
$catalougeObj=new pro_catalouge();
$staticpageObj=new meta_staticpage();
$inquiryObj=new inq_inquiry();
$blogObj=new blo_blog();
$mailObj=new sendmail();
$crypt = new cryptor(); 
$catreg=new catalouge_registration();
$manue=new mst_manue();
?>