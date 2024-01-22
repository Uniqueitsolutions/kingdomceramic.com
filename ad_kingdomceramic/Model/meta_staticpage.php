
<?php
include_once __DIR__.'/../Configure/dbconnect.php';

class meta_staticpage extends dbconnect
{
    public $SPMetaID;
    public $SEOFor;
    public $MetaFor;
    public $MetaTitle;
    public $MetaKeywords;
    public $MetaDescription;
    public $MetaOgTitle;
    public $MetaOgImage;
    public $MetaOgDescription;
    public $MetaOgUrl;
    public $UserID;
    public $IsActive;
    public $Created;
    public $Modified;
    public $Deleted;

    public function selectAllDataForClient()
    {
        $select = "SELECT 
        SPMetaID,
        MetaFor,
        SEOFor, 
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
         meta_staticpage
         WHERE IsActive = 1
         ORDER BY SPMetaID ASC";

        $select1 = $this->connection->query($select);
        return $select1;
    }

    public function selectAllDataForAdmin()
    {
        $select = "SELECT 
        SPMetaID,
        MetaFor,
        SEOFor, 
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
         meta_staticpage
         WHERE IsActive IN (0, 1) 
         ORDER BY SPMetaID ASC, IsActive ASC";

        $select1 = $this->connection->query($select);
        return $select1;
    }

    public function selectByPK($pk)
    {
        $select = "SELECT 
        SPMetaID,
        MetaFor,
        SEOFor, 
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
         meta_staticpage
         WHERE SPMetaID = $pk";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    public function selectByMetaFor($MetaFor)
    {
        $select = "SELECT 
        SPMetaID,
        MetaFor,
        SEOFor, 
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
         meta_staticpage
         WHERE MetaFor = '$MetaFor'";

        $select1 = $this->connection->query($select);
        
        return $select1;
    }

    public function insertData()
    {
        $datetime = date('Y-m-d H:i:s');

        try {
            $insert = "INSERT INTO `meta_staticpage` 
            (
            MetaTitle,
            MetaFor,
        SEOFor, 
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
                '$this->MetaTitle',
                '$this->MetaFor',
                '$this->SEOFor',   
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

            $insertResult = $this->connection->query($insert);
            return $insertResult;
        } catch (Exception $e) {
            echo "<script>alert('There is something wrong.');</script>";
        }
    }

    public function updateData($pk)
    {
        $datetime = date('Y-m-d H:i:s');

        try {
            $update = "UPDATE meta_staticpage 
            SET 
            MetaTitle='$this->MetaTitle',
            SEOFor='$this->SEOFor',
            MetaFor='$this->MetaFor',
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
            SPMetaID=$pk";

            $updateResult = $this->connection->query($update);
            return $updateResult;
        } catch (Exception $e) {
            echo "<script>alert('There is something wrong.');</script>";
        }
    }

    public function delete($pk)
    {
        $datetime = date('Y-m-d H:i:s');
        $delete = "UPDATE meta_staticpage 
        SET 
        IsActive=2,
        Deleted='$datetime'
        WHERE 
        SPMetaID = $pk";

        $deleteResult = $this->connection->query($delete);
        return $deleteResult;
    }
}
?>