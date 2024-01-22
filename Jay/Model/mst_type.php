<?php
include_once __DIR__.'/../Configure/dbconnect.php';
class mst_type extends dbconnect
{
    public $TypeID ;
    public $TypeName ;
    public $TypeDescription;
    public $TypeUrl;
    public $sequence;
    public $MetaTitle;
    public $MetaKeywords;
    public $MetaDescription;
    public $MetaOgTitle;
    public $MetaOgImage;
    public $MetaOgDescription;
    public $MetaOgUrl;
    public $UserID ;
    public $IsActive;
    public $Created;
    public $Modified;
    public $Deleted;

    public function selectAllDataForClient()
    {
        $select = "SELECT 
        TypeID,
        TypeName,
        TypeDescription,
        TypeUrl,
        sequence,
        MetaTitle,
        MetaKeywords,
        MetaDescription,
        MetaOgTitle,
        MetaOgImage,
        MetaOgDescription,
        MetaOgUrl,
        UserID,
        IsActive,
        Created,
        Modified,
        Deleted
         FROM  
         mst_type
         
         WHERE IsActive = 1
         order by sequence asc
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    public function selectAllDataForClientApi()
    {
        $select = "SELECT 
        TypeID,
        TypeName,
        
        TypeUrl
         FROM  
         mst_type
         
         WHERE IsActive = 1
         order by sequence asc
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    public function selectAllDataForAdmin()
    {
        $select = "SELECT 
        TypeID,
        TypeName,
        TypeDescription,
        TypeUrl,
        sequence,
        MetaTitle,
        MetaKeywords,
        MetaDescription,
        MetaOgTitle,
        MetaOgImage,
        MetaOgDescription,
        MetaOgUrl,
        UserID,
        IsActive,
        Created,
        Modified,
        Deleted
         FROM  
         mst_type
        
          WHERE IsActive in (0 , 1) 
         order by sequence asc,IsActive asc
         ";
        
        $select1 = $this->connection->query($select);

        return $select1;


    }
    //select by pk
    public function selectbypk($pk)
    {
        $select = "SELECT 
        TypeID,
        TypeName,
        TypeDescription,
        TypeUrl,
        sequence,
        MetaTitle,
        MetaKeywords,
        MetaDescription,
        MetaOgTitle,
        MetaOgImage,
        MetaOgDescription,
        MetaOgUrl,
        UserID,
        IsActive,
        Created,
        Modified,
        Deleted
         FROM  
         mst_type
         WHERE TypeID=$pk
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
   //insert data
    public function insertData()
    {
        $datetime =date('Y-m-d H:i:s');
        try{
        $select = "INSERT INTO `mst_type` 
        (
        TypeName,
        TypeDescription,
        TypeUrl, 
        sequence,
        MetaTitle,
        MetaKeywords,
        MetaDescription,
        MetaOgTitle,
        MetaOgImage,
        MetaOgDescription,
        MetaOgUrl,
        UserID,
        IsActive,
        Created,
        Modified
        ) 
        VALUES 
       (
            '$this->TypeName',
            '$this->TypeDescription',
            '$this->TypeUrl',     
            '$this->sequence',
            '$this->MetaTitle',
            '$this->MetaKeywords',
            '$this->MetaDescription',
            '$this->MetaOgTitle',
            '$this->MetaOgImage',
            '$this->MetaOgDescription',
            '$this->MetaOgUrl',
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
    public function updateData($pk)
    {

        $datetime =date('Y-m-d H:i:s');
        try{
        $select = "UPDATE mst_type 
        SET 
        TypeName='$this->TypeName',
        TypeDescription='$this->TypeDescription',
        TypeUrl='$this->TypeUrl',

        sequence='$this->sequence',
        MetaTitle='$this->MetaTitle',
        MetaKeywords='$this->MetaKeywords',
        MetaDescription='$this->MetaDescription',
        MetaOgTitle='$this->MetaOgTitle',
        MetaOgImage='$this->MetaOgImage',
        MetaOgDescription='$this->MetaOgDescription',
        MetaOgUrl='$this->MetaOgUrl',
        UserID='$this->UserID',
        IsActive='$this->IsActive',
        Modified='$datetime'
         WHERE 
         TypeID=$pk";
          
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
       $select = "UPDATE mst_type 
       SET 
         IsActive=2,
         Deleted='$datetime'
         WHERE 
         TypeID = $pk";

        $select1 = $this->connection->query($select);
        return $select1;
    }


}
