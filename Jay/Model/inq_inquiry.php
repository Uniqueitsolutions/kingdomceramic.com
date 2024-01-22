<?php
include_once __DIR__.'/../Configure/dbconnect.php';
class inq_inquiry extends dbconnect
{
    public $InquiryID;
    public $Name;
    public $ContactNumber;
    public $EmailID;
    public $CountryName;
    public $Subject;
    public $Massage;
    public $Created;
    public $Modified;
    public $Deleted;

    public function selectAllDataForClient()
    {
        $select = "SELECT 
        InquiryID ,
        Name,
        FinishDescription,
        ContactNumber,
        EmailID,
        Subject,
        Massage,
        Created
         FROM  
         inq_inquiry";
    
        $select1 = $this->connection->query($select);
        return $select1;
    }
    public function selectAllDataForAdmin()
    {
        $select = "SELECT 
        InquiryID,
        Name,
        ContactNumber,
        CountryName,
        EmailID,
        IsActive,
        Subject,
        Massage,
        Created 
         FROM  
         inq_inquiry
         where IsActive=0
         order by Created asc
         ";
    
        $select1 = $this->connection->query($select);

        return $select1;


    }

    public function selectAllDataForAdminChanged()
    {
        $select = "SELECT 
        InquiryID,
        Name,
        ContactNumber,
        CountryName,
    EmailID,
    IsActive,
        Subject,
        Massage,
        Created 
         FROM  
         inq_inquiry
         where IsActive=1
         order by Created asc
         ";
    
        $select1 = $this->connection->query($select);

        return $select1;


    }
    //select by pk
    public function selectbypk($pk)
    {
    
        $select = "SELECT 
        InquiryID ,
        Name,
        IsActive,
        ContactNumber,
        sequence,
        EmailD,
        Subject,
        Created,
        Modified,
        Deleted,
       
         FROM  
         inq_inquiry
         WHERE InquiryID=$pk
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
   //insert data
    public function insertData()
    {
        
        $datetime =date('Y-m-d H:i:s');
        try{
        $select = "INSERT INTO `inq_inquiry` 
        (
            
            Name,
            ContactNumber,
            EmailID,
            CountryName,
            IsActive,
            Subject,
            Massage,
            Created,
            Modified
        ) 
        VALUES 
        (
            
            '$this->Name',
            '$this->ContactNumber',
            '$this->EmailID',
            '$this->CountryName',
            '0',
            '$this->Subject',
            '$this->Massage',
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
    //delete data
    public function delete($pk)
    {
      
        $datetime =date('Y-m-d H:i:s');
        $select = "UPDATE inq_inquiry 
         SET 
           IsActive=2,
           Deleted='$datetime'
           WHERE 
           InquiryID = $pk";
  
          $select1 = $this->connection->query($select);
          return $select1;
    }
    public function Change($pk)
    {
        $datetime =date('Y-m-d H:i:s');
        $select = "UPDATE inq_inquiry 
         SET 
           IsActive=1,
           Modified='$datetime'
           WHERE 
           InquiryID = $pk";
  
          $select1 = $this->connection->query($select);
          return $select1;
    }


}
