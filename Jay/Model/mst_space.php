<?php
include_once __DIR__.'/../Configure/dbconnect.php';
class mst_space extends dbconnect
{
    public $SpaceID ;
    public $SpaceName ;
    public $SpaceDescription;
    public $SpaceUrl;
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
        SpaceID,
        SpaceName,
        SpaceDescription,
        SpaceUrl,
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
         mst_space
         WHERE IsActive = 1
         order by sequence asc
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    public function selectAllDataForClientApi()
    {
        $select = "SELECT 
        SpaceID,
        SpaceName,
        
        SpaceUrl
         FROM  
         mst_space
         
         WHERE IsActive = 1
         order by sequence asc
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    public function selectAllDataForAdmin()
    {
        $select = "SELECT 
        SpaceID,
        SpaceName,
        SpaceDescription,
        SpaceUrl,
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
         mst_space
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
        SpaceID,
        SpaceName,
        SpaceDescription,
        SpaceUrl,
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
         mst_space
         WHERE SpaceID=$pk
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
   //insert data
    public function insertData()
    {
        
        $datetime =date('Y-m-d H:i:s');
        try{
        $select = "INSERT INTO `mst_space` 
        (
        SpaceName,
        SpaceDescription,
        SpaceUrl, 
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
            '$this->SpaceName',
            '$this->SpaceDescription',
            '$this->SpaceUrl',     
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
    public function updatedata($pk)
    {

        $datetime =date('Y-m-d H:i:s');
        try{
        $select = "UPDATE mst_space 
        SET 
        SpaceName='$this->SpaceName',
        SpaceDescription='$this->SpaceDescription',
        SpaceUrl='$this->SpaceUrl',
        
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
         SpaceID=$pk";

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
       $select = "UPDATE mst_space 
       SET 
         IsActive=2,
         Deleted='$datetime'
         WHERE 
         SpaceID = $pk";

        $select1 = $this->connection->query($select);
        return $select1;
    }


}
