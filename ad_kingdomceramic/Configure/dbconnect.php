<?php 
error_reporting(0); 
date_default_timezone_set('Asia/Kolkata');
 class dbconnect 
  { 
  private $_localhost = 'localhost'; 
  private $_user = 'uniquvhx_jay'; 
  private $_password = 'Jay@1234567890'; 
  private $_dbname = 'uniquvhx_kingdomceramic'; 
  protected $connection;
   public function __construct()
   { 
   if(!isset($this-> connection)) 
   { 
               
               $this->connection = new mysqli($this->_localhost , $this->_user , $this->_password , $this->_dbname); 
   
   }
   return $this->connection;
   } 
 } 
 ?>