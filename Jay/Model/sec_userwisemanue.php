<?php
include_once __DIR__.'/../Configure/dbconnect.php';


class sec_userwisemanue extends dbconnect
{
    public $UserWiseManueID;
    public $ManueID;
    public $UserID;
    public $Created;
    public $Modified;
    public function SelectbyUserID($UserID)
    {
    $select = "SELECT ManueID from sec_userwisemanue where UserID=$UserID";
   
    $select1 = $this->connection->query($select);
    
    return $select1;
    }

    

    public function UserAccessOrNot($UserId,$FileName)
    {
    $select = "SELECT * from sec_userwisemanue 
     INNER JOIN mst_manue ON  mst_manue.ManueID =sec_userwisemanue.ManueID
     Where 
     mst_manue.ManueFileName='$FileName' And 
     sec_userwisemanue.UserID=$UserId
     ";
   
    $select1 = $this->connection->query($select);
    
    return $select1;
    }

    public function insertData()
    {
             
              
                                        
        $datetime =date('Y-m-d H:i:s');
        try{
        $select = "INSERT INTO `sec_userwisemanue` 
        (
            UserWiseManueID,
            ManueID,
            UserID, 
            Created,
            Modified
        ) 
        VALUES 
       (
            '$this->UserWiseManueID',
            '$this->ManueID',     
            '$this->UserID',
            '$datetime',
            '$datetime'
       );";
       
        $select1 = $this->connection->query($select);
    
        return $select1;

    }
    catch(Exception $e)
    {
    echo "<script>alert('There Are Something Problem');</script>";
    }
    }
   
    public function Update($pk)
    {
                                               
        $datetime =date('Y-m-d H:i:s');
        try{
        $select = "INSERT INTO `sec_userwisemanue` 
        (
            UserWiseManueID,
            ManueID,
            UserID, 
            Created,
            Modified
        ) 
        VALUES 
       (
            '$this->UserWiseManueID',
            '$this->ManueID',     
            '$this->$pk',
            '$datetime',
            '$datetime'
       );";
       
        $select1 = $this->connection->query($select);
    
        return $select1;

    }
    catch(Exception $e)
    {
    echo "<script>alert('There Are Something Problem');</script>";
    }
    }

    public function delete($pk)
    {
        $select = "DELETE from sec_userwisemanue 
       where 
         UserID = $pk";

        $select1 = $this->connection->query($select);
        return $select1;
    }



   }
