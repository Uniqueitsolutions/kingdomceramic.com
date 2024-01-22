<?php
include_once __DIR__.'/../Configure/dbconnect.php';
class catalouge_registration extends dbconnect
{
    public $CatalougeRegistrationID;
    public $Name;
    public $ContactNumber;
    public $Email;
   public $IsActive;
    public $CatalougeID;
    public $Description;
    public $Created;
    public $Modified;
    public $Deleted;

    public function selectCatalougeInquiry()
    {
        $select = "SELECT 
        mst_type.TypeName, 
        COUNT(catalouge_registration.CatalougeRegistrationID) AS NumOfRegistrations 
        FROM catalouge_registration 
        INNER JOIN pro_catalouge ON pro_catalouge.CatalougeID = catalouge_registration.CatalougeID 
        INNER JOIN mst_type ON mst_type.TypeID = pro_catalouge.TypeID 
        WHERE catalouge_registration.IsActive = 0 
        GROUP BY mst_type.TypeName 
        ORDER BY catalouge_registration.Created ASC;
         ";
    
        $select1 = $this->connection->query($select);
        return $select1;


    }
   
    public function selectAllDataForAdmin()
    {
        $select = "SELECT 
        CatalougeRegistrationID,
        Name,
        Email,
        CatalougeID,
        ContactNumber,
        IsActive,
        Description,
        Created 
         FROM  
         catalouge_registration
         where IsActive=0
         order by Created asc
         ";
    
        $select1 = $this->connection->query($select);

        return $select1;


    }
    public function insertData()
    {
        
        $datetime =date('Y-m-d H:i:s');
        try{
        $select = "INSERT INTO `catalouge_registration` 
        (
            
            Name,
            ContactNumber,
            Email,
            CatalougeID,
            IsActive,
            Created,
            Modified
        ) 
        VALUES 
        (
            '$this->Name',
            '$this->ContactNumber',
            '$this->Email',
            '$this->CatalougeID',
            0,
            '$datetime',
            '$datetime'
    
       );";

 
      
   
        $select1 = $this->connection->query($select);
        return $select1;
    }
    catch(Exception $e)
    {
    echo "<script>alert('There Are Something  Problem');</script>";
    }
    }
    //update data
    //delete data
    public function delete($pk)
    {
      
        $datetime =date('Y-m-d H:i:s');
        $select = "UPDATE  catalouge_registration 
         SET 
           IsActive=2,
           Deleted='$datetime'
           WHERE 
           CatalougeRegistrationID = $pk";
  
          $select1 = $this->connection->query($select);
          return $select1;
    }


}
