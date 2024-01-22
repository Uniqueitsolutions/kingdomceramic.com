<?php
include_once __DIR__.'/../Configure/dbconnect.php';
class mst_contact extends dbconnect
{
    public $ContactDetailsI;
    public $ContactName;
    public $ContactNumber1;
    public $ContactNumber2;
    public $Email1;
    public $Email2;
    public $FacebookLink;
    public $YouTubeLink;
    public $TwitterLink;
    public $InstagramLink;
    public $SkypeLink;
    public $LinkedinLink;
    public $Address;
    public $GoogleMapLink;

    public $UserID;
    public $IsActive;
    public $Created;
    public $Modified;
    public $Deleted;

    public function selectAllDataForClient()
    {
        $select = "SELECT 
         ContactDetailsID,
        ContactName,
        ContactNumber1,
        ContactNumber2,
        Email1,
        Email2,
      FacebookLink,
    YouTubeLink,
TwitterLink,
   InstagramLink,
    SkypeLink,
    LinkedinLink,
    Address,
    GoogleMapLink,
 
        UserID,
        IsActive,
        Created,
        Modified,
        Deleted
         FROM  
         mst_contactdetails
         WHERE IsActive = 1 
         order by IsActive asc
         ";
    
        $select1 = $this->connection->query($select);

        return $select1;


    }
    public function selectAllDataForAdmin()
    {
        $select = "SELECT 
         ContactDetailsID,
        ContactName,
        ContactNumber1,
        ContactNumber2,
        Email1,
        Email2,
      FacebookLink,
    YouTubeLink,
TwitterLink,
   InstagramLink,
    SkypeLink,
    LinkedinLink,
    Address,
    GoogleMapLink,

        UserID,
        IsActive,
        Created,
        Modified,
        Deleted
         FROM  
         mst_contactdetails
         WHERE IsActive in (0 , 1) 
         order by IsActive asc
         ";
    
        $select1 = $this->connection->query($select);

        return $select1;


    }
    //select by pk
    public function selectbypk($pk)
    {
    
        $select = "SELECT 
        ContactDetailsID,
        ContactName,
        ContactNumber1,
        ContactNumber2,
        Email1,
        Email2,
        FacebookLink,
    YouTubeLink,
TwitterLink,
   InstagramLink,
    SkypeLink,
    LinkedinLink,
    Address,
    GoogleMapLink,

        UserID,
        IsActive,
        Created,
        Modified,
        Deleted
         FROM  
         mst_contactdetails
         WHERE ContactDetailsID=$pk
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
   //insert data
    public function insertData()
    {
        
        $datetime =date('Y-m-d H:i:s');
        try{
        $select = "INSERT INTO `mst_contactdetails` 
        (
        ContactName,
        ContactNumber1,
        ContactNumber2,
        Email1,
        Email2,
      FacebookLink,
    YouTubeLink,
TwitterLink,
   InstagramLink,
    SkypeLink,
    LinkedinLink,
    Address,
    GoogleMapLink,

        UserID,
        IsActive,
        Created,
        Modified
        ) 
        VALUES 
       (
            '$this->ContactName',
            '$this->ContactNumber1',
            '$this->ContactNumber2',     
            '$this->Email1',
            '$this->Email2',
            '$this->FacebookLink',
            '$this->YouTubeLink',
            '$this->TwitterLink',
            '$this->InstagramLink',
            '$this->SkypeLink',
            '$this->LinkedinLink',
            '$this->Address',
            '$this->GoogleMapLink',
          
            '$this->UserID',
            '$this->IsActive',
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
    //update data
    public function updatedata($pk)
    {
  
        $datetime =date('Y-m-d H:i:s');
        try{
        $select = "UPDATE mst_contactdetails
        SET 
        ContactName='$this->ContactName',
        ContactNumber1='$this->ContactNumber1',
        ContactNumber2='$this->ContactNumber2',
        
        Email1='$this->Email1',
        Email2='$this->Email2',
        FacebookLink='$this->FacebookLink',
        YouTubeLink='$this->YouTubeLink',
        TwitterLink='$this->TwitterLink',
        InstagramLink='$this->InstagramLink',
        SkypeLink='$this->SkypeLink',
        LinkedinLink='$this->LinkedinLink',
        Address='$this->Address',
        GoogleMapLink='$this->GoogleMapLink',
       
        UserID='$this->UserID',
        IsActive='$this->IsActive',
        Modified='$datetime'
         WHERE 
         ContactDetailsID=$pk";
        $select1 = $this->connection->query($select);
       
        return $select1;
        }
        catch(Exception $e)
    {
    echo "<script>alert('There Are Something Problem');</script>";
    }
    }
    //delete data
    public function delete($pk)
    {
        $datetime =date('Y-m-d H:i:s');
      $select = "UPDATE mst_contactdetails 
       SET 
         IsActive=2,
         Deleted='$datetime'
         WHERE 
         ContactDetailsID= $pk";

        $select1 = $this->connection->query($select);
        return $select1;
    }


}
