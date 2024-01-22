<?php
include_once __DIR__.'/../Configure/dbconnect.php';
class pro_catalouge extends dbconnect
{
    public $CatalougeID;
    public $CatalougePriviewTitle;
    public $TypeID;
    public $SizeID;
    public $ImagePath;
    public $ImageDescription;
    public $CatalougePDF;
    public $CatalougePDFDescription;
    public $CatalougeDescription;
    public $Sequence;
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
        pro_catalouge.CatalougeID,
        pro_catalouge.CatalougePriviewTitle,
        pro_catalouge.TypeID,
        pro_catalouge.SizeID,
        mst_type.TypeName,
        mst_size.SizeName,
        pro_catalouge.ImagePath,
        pro_catalouge.ImageDescription,
        pro_catalouge.CatalougePDF,
        pro_catalouge.CatalougePDFDescription,
        pro_catalouge.CatalougeDescription,
        pro_catalouge.Sequence,
        pro_catalouge.MetaTitle,
        pro_catalouge.MetaKeywords,
        pro_catalouge.MetaDescription,
        pro_catalouge.MetaOgTitle,
        pro_catalouge.MetaOgImage,
        pro_catalouge.MetaOgDescription,
        pro_catalouge.MetaOgUrl,
        pro_catalouge.UserID,
        pro_catalouge.IsActive,
        pro_catalouge.Created,
        pro_catalouge.Modified,
        pro_catalouge.Deleted
         FROM  
         pro_catalouge  inner join mst_type on
         mst_type.TypeID=pro_catalouge.TypeID
         inner join mst_size on mst_size.SizeID=pro_catalouge.SizeID
         WHERE pro_catalouge.IsActive = 1
         ORDER BY pro_catalouge.Sequence ASC";

        $select1 = $this->connection->query($select);
        return $select1;
    }

    public function selectAllDataForAdmin()
    {
        $select = "SELECT 
        pro_catalouge.CatalougeID,
        pro_catalouge.CatalougePriviewTitle,
        pro_catalouge.TypeID,
        mst_type.TypeName,
        mst_size.SizeName,
        pro_catalouge.ImagePath,
        pro_catalouge.ImageDescription,
        pro_catalouge.CatalougePDF,
        pro_catalouge.CatalougePDFDescription,
        pro_catalouge.CatalougeDescription,
        pro_catalouge.Sequence,
        pro_catalouge.MetaTitle,
        pro_catalouge.MetaKeywords,
        pro_catalouge.MetaDescription,
        pro_catalouge.MetaOgTitle,
        pro_catalouge.MetaOgImage,
        pro_catalouge.MetaOgDescription,
        pro_catalouge.MetaOgUrl,
        pro_catalouge.UserID,
        pro_catalouge.IsActive,
        pro_catalouge.Created,
        pro_catalouge.Modified,
        pro_catalouge.Deleted
         FROM  
         pro_catalouge  inner join mst_type on
         mst_type.TypeID=pro_catalouge.TypeID
         inner join mst_size on mst_size.SizeID=pro_catalouge.SizeID
         WHERE pro_catalouge.IsActive IN (0, 1) 
         ORDER BY pro_catalouge.Sequence ASC, pro_catalouge.IsActive ASC";

        $select1 = $this->connection->query($select);
        return $select1;
    }

    public function selectByTypeID($pk)
    {
        $select = "SELECT 
        pro_catalouge.CatalougeID,
        pro_catalouge.CatalougePriviewTitle,
        pro_catalouge.TypeID,
        mst_type.TypeName,
        mst_size.SizeName,
        pro_catalouge.ImagePath,
        pro_catalouge.ImageDescription,
        pro_catalouge.CatalougePDF,
        pro_catalouge.CatalougePDFDescription,
        pro_catalouge.CatalougeDescription,
        pro_catalouge.Sequence,
        pro_catalouge.MetaTitle,
        pro_catalouge.MetaKeywords,
        pro_catalouge.MetaDescription,
        pro_catalouge.MetaOgTitle,
        pro_catalouge.MetaOgImage,
        pro_catalouge.MetaOgDescription,
        pro_catalouge.MetaOgUrl,
        pro_catalouge.UserID,
        pro_catalouge.IsActive,
        pro_catalouge.Created,
        pro_catalouge.Modified,
        pro_catalouge.Deleted
         FROM  
         pro_catalouge  inner join mst_type on
         mst_type.TypeID=pro_catalouge.TypeID
         inner join mst_size on mst_size.SizeID=pro_catalouge.SizeID
         WHERE  pro_catalouge.TypeID = $pk AND   pro_catalouge.IsActive = 1 
         ORDER BY pro_catalouge.Sequence ASC, pro_catalouge.IsActive ASC";

        $select1 = $this->connection->query($select);
        return $select1;
    }

    // Select by primary key
    public function selectByPK($pk)
    {
        $select = "SELECT 
        pro_catalouge.CatalougeID,
        pro_catalouge.CatalougePriviewTitle,
        pro_catalouge.TypeID,
        pro_catalouge.SizeID,
        mst_type.TypeName,
        mst_size.SizeName,
        pro_catalouge.ImagePath,
        pro_catalouge.ImageDescription,
        pro_catalouge.CatalougePDF,
        pro_catalouge.CatalougePDFDescription,
        pro_catalouge.CatalougeDescription,
        pro_catalouge.Sequence,
        pro_catalouge.MetaTitle,
        pro_catalouge.MetaKeywords,
        pro_catalouge.MetaDescription,
        pro_catalouge.MetaOgTitle,
        pro_catalouge.MetaOgImage,
        pro_catalouge.MetaOgDescription,
        pro_catalouge.MetaOgUrl,
        pro_catalouge.UserID,
        pro_catalouge.IsActive,
        pro_catalouge.Created,
        pro_catalouge.Modified,
        pro_catalouge.Deleted
         FROM  
         pro_catalouge  inner join mst_type on
         mst_type.TypeID=pro_catalouge.TypeID
         inner join mst_size on mst_size.SizeID=pro_catalouge.SizeID
         WHERE pro_catalouge.CatalougeID = $pk";

        $select1 = $this->connection->query($select);
        return $select1;
    }

    // Insert data
    public function insertData()
    {
        $datetime = date('Y-m-d H:i:s');
        try {
            $select = "INSERT INTO `pro_catalouge` 
            (
                CatalougePriviewTitle,
            TypeID,
            SizeID,
            ImagePath,
            ImageDescription,
            CatalougePDF,
            CatalougePDFDescription,
            CatalougeDescription,
            Sequence,
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
                '$this->CatalougePriviewTitle',
                '$this->TypeID',
                '$this->SizeID',
                '$this->ImagePath',
                '$this->ImageDescription',
                '$this->CatalougePDF',
                '$this->CatalougePDFDescription',
                '$this->CatalougeDescription',
                '$this->Sequence',
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
        } catch (Exception $e) {
            echo "<script>alert('There Are Something Problem');</script>";
        }
    }

    // Update data
    public function updateData($pk)
    {
        $datetime = date('Y-m-d H:i:s');
        try {
            $select = "UPDATE pro_catalouge 
            SET 
            CatalougePriviewTitle = '$this->CatalougePriviewTitle',
            TypeID = '$this->TypeID',
            SizeID = '$this->SizeID',
            ImagePath = '$this->ImagePath',
            ImageDescription = '$this->ImageDescription',
            CatalougePDF = '$this->CatalougePDF',
            CatalougePDFDescription = '$this->CatalougePDFDescription',
            CatalougeDescription = '$this->CatalougeDescription',
            Sequence = '$this->Sequence',
            MetaTitle = '$this->MetaTitle',
            MetaKeywords = '$this->MetaKeywords',
            MetaDescription = '$this->MetaDescription',
            MetaOgTitle = '$this->MetaOgTitle',
            MetaOgImage = '$this->MetaOgImage',
            MetaOgDescription = '$this->MetaOgDescription',
            MetaOgUrl = '$this->MetaOgUrl',
            UserID = '$this->UserID',
            IsActive = '$this->IsActive',
            Modified = '$datetime'
            WHERE 
            CatalougeID = $pk";

            $select1 = $this->connection->query($select);
            return $select1;
        } catch (Exception $e) {
            echo "<script>alert('There Are Something Problem');</script>";
        }
    }

    // Delete data
    public function delete($pk)
    {
        $datetime = date('Y-m-d H:i:s');
        $select = "UPDATE pro_catalouge 
        SET 
        IsActive = 2,
        Deleted = '$datetime'
        WHERE 
        CatalougeID = $pk";

        $select1 = $this->connection->query($select);
        return $select1;
    }

    public function selectLast3AddedDataForAdmin()
    {
        $select = "SELECT 
        pro_catalouge.CatalougeID,
        pro_catalouge.CatalougePriviewTitle,
        pro_catalouge.TypeID,
        mst_type.TypeName,
        mst_size.SizeName,
        pro_catalouge.ImagePath,
        pro_catalouge.ImageDescription,
        pro_catalouge.CatalougePDF,
        pro_catalouge.CatalougePDFDescription,
        pro_catalouge.CatalougeDescription,
        pro_catalouge.Sequence,
        pro_catalouge.MetaTitle,
        pro_catalouge.MetaKeywords,
        pro_catalouge.MetaDescription,
        pro_catalouge.MetaOgTitle,
        pro_catalouge.MetaOgImage,
        pro_catalouge.MetaOgDescription,
        pro_catalouge.MetaOgUrl,
        pro_catalouge.UserID,
        pro_catalouge.IsActive,
        pro_catalouge.Created,
        pro_catalouge.Modified,
        pro_catalouge.Deleted
         FROM  
         pro_catalouge  inner join mst_type on
         mst_type.TypeID=pro_catalouge.TypeID
         inner join mst_size on mst_size.SizeID=pro_catalouge.SizeID
         WHERE pro_catalouge.IsActive IN (0, 1) 
         ORDER BY pro_catalouge.Created ASC, pro_catalouge.IsActive ASC
         LIMIT 3; ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
}
