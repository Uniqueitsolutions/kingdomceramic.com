<?php
include_once __DIR__.'/../Configure/dbconnect.php';

class pro_product extends dbconnect
{
    public $ProductID;
    public $ProductName;
    public $TypeID;
    public $SizeID;
    public $LookID;
    public $FinishID;
    public $SpaceID;
    public $ProductDescription;
    public $ProductUrl;
    public $ForCompany;
    public $Sequence;
    public $ImagePath;
    public $ImageDescription;
    public $MetaTitle;
    public $IsActive;
    public $MetaKeywords;
    public $MetaDescription;
    public $MetaOgTitle;
    public $MetaOgUrl;
    public $MetaOgImage;
    public $MetaOgDescription;
    public $UserID;
    public $Created;
    public $Modified;
    public $Deleted;
public function selectTop4DataForClient()
{
    $select = "SELECT 
        pro_product.ProductID,
        pro_product.ProductName,
        pro_product.TypeID,
        pro_product.SizeID,
        pro_product.LookID,
        pro_product.FinishID,
        pro_product.SpaceID,
        pro_product.ProductDescription,
        pro_product.ProductUrl,
        pro_product.ForCompany,
        pro_product.Sequence,
        mst_type.TypeName,
        mst_size.SizeName,
        mst_finish.FinishName,
        mst_look.LookName,
        mst_space.SpaceName,
        pro_product.ImagePath,
        pro_product.ImageDescription,
        pro_product.MetaTitle,
        pro_product.MetaKeywords,
        pro_product.MetaDescription,
        pro_product.MetaOgTitle,
        pro_product.MetaOgUrl,
        pro_product.MetaOgImage,
        pro_product.MetaOgDescription,
        pro_product.UserID,
        pro_product.IsActive,
        pro_product.Created,
        pro_product.Modified,
        pro_product.Deleted
    FROM  
        pro_product 
    INNER JOIN mst_type ON  mst_type.TypeID =pro_product.TypeID 
    INNER JOIN mst_size ON mst_size.SizeID =pro_product.SizeID  
    INNER JOIN mst_look ON mst_look.LookID=pro_product.LookID
    INNER JOIN mst_space ON mst_space.SpaceID=pro_product.SpaceID 
    INNER JOIN mst_finish ON mst_finish.FinishID=pro_product.FinishID 
    WHERE 
        pro_product.IsActive = 1
    ORDER BY 
        pro_product.Sequence ASC
    LIMIT 4";

    $result = $this->connection->query($select);
    return $result;
}


    public function selectAllDataForClient()
    {
        $select = "SELECT 
        pro_product.ProductID,
        pro_product.ProductName,
        pro_product.TypeID,
        pro_product.SizeID,
        pro_product.LookID,
        pro_product.FinishID,
        pro_product.SpaceID,
        pro_product.ProductDescription,
        pro_product.ProductUrl,
        pro_product.ForCompany,
        pro_product.Sequence,
        mst_type.TypeName,
        mst_size.SizeName,
        mst_finish.FinishName,
        mst_look.LookName,
        mst_space.SpaceName,
        pro_product.ImagePath,
        pro_product.ImageDescription,
        pro_product.MetaTitle,
        pro_product.MetaKeywords,
        pro_product.MetaDescription,
        pro_product.MetaOgTitle,
        pro_product.MetaOgUrl,
        pro_product.MetaOgImage,
        pro_product.MetaOgDescription,
        pro_product.UserID,
        pro_product.IsActive,
        pro_product.Created,
        pro_product.Modified,
        pro_product.Deleted
    FROM  
        pro_product 
    INNER JOIN mst_type ON  mst_type.TypeID =pro_product.TypeID 
    INNER JOIN mst_size ON mst_size.SizeID =pro_product.SizeID  
    INNER JOIN mst_look ON mst_look.LookID=pro_product.LookID
    INNER JOIN mst_space ON mst_space.SpaceID=pro_product.SpaceID 
    INNER JOIN mst_finish ON mst_finish.FinishID=pro_product.FinishID 
    WHERE 
    pro_product.IsActive = 1 and  pro_product.ForCompany in (1,3)
        ORDER BY 
        pro_product.Sequence ASC";

        $result = $this->connection->query($select);
        return $result;
    }

    public function selectAllDataForAdmin()
    {
        
        $select = "SELECT 
        pro_product.ProductID,
        pro_product.ProductName,
        pro_product.TypeID,
        pro_product.SizeID,
        pro_product.LookID,
        pro_product.FinishID,
        pro_product.SpaceID,
        pro_product.ProductDescription,
        pro_product.ProductUrl,
        pro_product.Sequence,
        mst_type.TypeName,
        mst_size.SizeName,
        mst_finish.FinishName,
        pro_product.ForCompany,
        mst_look.LookName,
        mst_space.SpaceName,
        pro_product.ImagePath,
        pro_product.ImageDescription,
        pro_product.MetaTitle,
        pro_product.MetaKeywords,   
        pro_product.MetaDescription,
        pro_product.MetaOgTitle,
        pro_product.MetaOgUrl,
        pro_product.MetaOgImage,
        pro_product.MetaOgDescription,
        pro_product.UserID,
        pro_product.IsActive,
        pro_product.Created,
        pro_product.Modified,
        pro_product.Deleted
    FROM  
        pro_product 
    left outer JOIN mst_type ON  mst_type.TypeID =pro_product.TypeID 
    left outer join mst_size ON mst_size.SizeID =pro_product.SizeID  
    left outer join mst_look ON mst_look.LookID=pro_product.LookID
    left outer join mst_space ON mst_space.SpaceID=pro_product.SpaceID 
    left outer join mst_finish ON mst_finish.FinishID=pro_product.FinishID 
    WHERE 
        pro_product.IsActive IN (0, 1) 
    ORDER BY 
        pro_product.IsActive ASC, pro_product.Sequence ASC;
    ";

        $result = $this->connection->query($select);
        return $result;
    }

    public function selectByProductUrl($ProductUrl)
    {
        
        $select = "SELECT 
        pro_product.ProductID,
        pro_product.ProductName,
        pro_product.TypeID,
        pro_product.SizeID,
        pro_product.LookID,
        pro_product.FinishID,
        pro_product.SpaceID,
        pro_product.ProductDescription,
        pro_product.ProductUrl,
        pro_product.Sequence,
        mst_type.TypeName,
        mst_size.SizeName,
        mst_finish.FinishName,
        pro_product.ForCompany,
        mst_look.LookName,
        mst_space.SpaceName,
        pro_product.ImagePath,
        pro_product.ImageDescription,
        pro_product.MetaTitle,
        pro_product.MetaKeywords,   
        pro_product.MetaDescription,
        pro_product.MetaOgTitle,
        pro_product.MetaOgUrl,
        pro_product.MetaOgImage,
        pro_product.MetaOgDescription,
        pro_product.UserID,
        pro_product.IsActive,
        pro_product.Created,
        pro_product.Modified,
        pro_product.Deleted
    FROM  
        pro_product 
    left outer JOIN mst_type ON  mst_type.TypeID =pro_product.TypeID 
    left outer join mst_size ON mst_size.SizeID =pro_product.SizeID  
    left outer join mst_look ON mst_look.LookID=pro_product.LookID
    left outer join mst_space ON mst_space.SpaceID=pro_product.SpaceID 
    left outer join mst_finish ON mst_finish.FinishID=pro_product.FinishID 
    WHERE  pro_product.ProductUrl = '$ProductUrl';";

        $result = $this->connection->query($select);
        return $result;
    }
    public function selectByPK($pk)
    {
        $select = "SELECT 
            ProductID,
            ProductName,
            TypeID,
            SizeID,
            LookID,
            FinishID,
            SpaceID,
            ProductDescription,
            ProductUrl,
            Sequence,
            ImagePath,
            ForCompany,
            ImageDescription,
            MetaTitle,
            MetaKeywords,
            MetaDescription,
            MetaOgTitle,
            MetaOgUrl,
            MetaOgImage,
            MetaOgDescription,
            UserID,
            IsActive,
            Created,
            Modified,
            Deleted
        FROM  
            pro_product
        WHERE 
            ProductID = $pk";

        $result = $this->connection->query($select);
        return $result;
    }
    public function selectProductForBecasaClient($TypeUrl,$SizeUrl,$LookUrl,$SpaceUrl,$FinishUrl)
    {$select = "SELECT 
        pro_product.ProductID,
        pro_product.ProductName,
        pro_product.TypeID,
        pro_product.SizeID,
        pro_product.LookID,
        pro_product.FinishID,
        pro_product.SpaceID,
        pro_product.ForCompany,
        pro_product.ProductDescription,
        pro_product.ProductUrl,
        pro_product.Sequence,
        mst_type.TypeName,
        mst_size.SizeName,
        mst_size.SizeUrl,
        mst_finish.FinishName,
        mst_look.LookName,
        mst_space.SpaceName,
        pro_product.ImagePath,
        pro_product.ImageDescription,
        pro_product.MetaTitle,
        pro_product.MetaKeywords,   
        pro_product.MetaDescription,
        pro_product.MetaOgTitle,
        pro_product.MetaOgUrl,
        pro_product.MetaOgImage,
        pro_product.MetaOgDescription,
        pro_product.UserID,
        pro_product.IsActive,
        pro_product.Created,
        pro_product.Modified,
        pro_product.Deleted
    FROM  
        pro_product 
    LEFT OUTER JOIN mst_type ON mst_type.TypeID = pro_product.TypeID 
    LEFT OUTER JOIN mst_size ON mst_size.SizeID = pro_product.SizeID  
    LEFT OUTER JOIN mst_look ON mst_look.LookID = pro_product.LookID
    LEFT OUTER JOIN mst_space ON mst_space.SpaceID = pro_product.SpaceID 
    LEFT OUTER JOIN mst_finish ON mst_finish.FinishID = pro_product.FinishID 
    WHERE pro_product.IsActive=1 and pro_product.ForCompany in (2,3)";

if (!empty($TypeUrl)) {
    $select .= " AND (mst_type.TypeUrl = '$TypeUrl')";
}

if (!empty($FinishUrl)) {
    $select .= " AND (mst_finish.FinishUrl = '$FinishUrl')";
}

if (!empty($SpaceUrl)) {
    $select .= " AND (mst_space.SpaceUrl = '$SpaceUrl')";
}

if (!empty($LookUrl)) {
    $select .= " AND (mst_look.LookUrl = '$LookUrl')";
}

if (!empty($SizeUrl)) {
    $select .= " AND ( mst_size.SizeUrl = '$SizeUrl')";
}

$select .= " ORDER BY Sequence ASC";

$result = $this->connection->query($select);
return $result;

    }

    public function selectnbyParameter($TypeUrl,$SizeUrl,$LookUrl,$SpaceUrl,$FinishUrl)
    {$select = "SELECT 
        pro_product.ProductID,
        pro_product.ProductName,
        pro_product.TypeID,
        pro_product.SizeID,
        pro_product.LookID,
        pro_product.FinishID,
        pro_product.SpaceID,
        pro_product.ForCompany,
        pro_product.ProductDescription,
        pro_product.ProductUrl,
        pro_product.Sequence,
        mst_type.TypeName,
        mst_size.SizeName,
        mst_size.SizeUrl,
        mst_finish.FinishName,
        mst_look.LookName,
        mst_space.SpaceName,
        pro_product.ImagePath,
        pro_product.ImageDescription,
        pro_product.MetaTitle,
        pro_product.MetaKeywords,   
        pro_product.MetaDescription,
        pro_product.MetaOgTitle,
        pro_product.MetaOgUrl,
        pro_product.MetaOgImage,
        pro_product.MetaOgDescription,
        pro_product.UserID,
        pro_product.IsActive,
        pro_product.Created,
        pro_product.Modified,
        pro_product.Deleted
    FROM  
        pro_product 
    LEFT OUTER JOIN mst_type ON mst_type.TypeID = pro_product.TypeID 
    LEFT OUTER JOIN mst_size ON mst_size.SizeID = pro_product.SizeID  
    LEFT OUTER JOIN mst_look ON mst_look.LookID = pro_product.LookID
    LEFT OUTER JOIN mst_space ON mst_space.SpaceID = pro_product.SpaceID 
    LEFT OUTER JOIN mst_finish ON mst_finish.FinishID = pro_product.FinishID 
    WHERE pro_product.IsActive=1 and pro_product.ForCompany in (1,3) ";

if (!empty($TypeUrl)) {
    $select .= " AND (mst_type.TypeUrl = '$TypeUrl')";
}

if (!empty($FinishUrl)) {
    $select .= " AND (mst_finish.FinishUrl = '$FinishUrl')";
}

if (!empty($SpaceUrl)) {
    $select .= " AND (mst_space.SpaceUrl = '$SpaceUrl')";
}

if (!empty($LookUrl)) {
    $select .= " AND (mst_look.LookUrl = '$LookUrl')";
}

if (!empty($SizeUrl)) {
    $select .= " AND ( mst_size.SizeUrl = '$SizeUrl')";
}

$select .= " ORDER BY Sequence ASC";

$result = $this->connection->query($select);
return $result;

    }


    
    public function insertData()
    {
        $datetime = date('Y-m-d H:i:s');
        try {
            $insert = "INSERT INTO pro_product 
            (
                ProductName,
                TypeID,
                SizeID,
                LookID,
              
                FinishID,
                SpaceID,
                ProductDescription,
                ProductUrl,
                Sequence,
                ForCompany,
                ImagePath,
                ImageDescription,
                MetaTitle,
                MetaKeywords,
                MetaDescription,
                MetaOgTitle,
                MetaOgUrl,
                MetaOgImage,
                MetaOgDescription,
                UserID,
                IsActive,
                Created,
                Modified
            ) 
            VALUES 
            (
                '$this->ProductName',
                '$this->TypeID',
                '$this->SizeID',
                '$this->LookID',
                '$this->FinishID',
                '$this->SpaceID',
                '$this->ProductDescription',
                '$this->ProductUrl',
                '$this->Sequence',
                '$this->ForCompany',
                '$this->ImagePath',
                '$this->ImageDescription',
                '$this->MetaTitle',
                '$this->MetaKeywords',
                '$this->MetaDescription',
                '$this->MetaOgTitle',
                '$this->MetaOgUrl',
                '$this->MetaOgImage',
                '$this->MetaOgDescription',
                '$this->UserID',
                '$this->IsActive',
                '$datetime',
                '$datetime'
            )";

            $result = $this->connection->query($insert);
            
            return $result;
        } catch (Exception $e) {
            echo "<script>alert('There is a problem with the query.');</script>";
        }
    }

    public function updateData($pk)
    {
        $datetime = date('Y-m-d H:i:s');
        try {
            $update = "UPDATE pro_product
            SET 
                ProductName = '$this->ProductName',
                TypeID = '$this->TypeID',
                SizeID = '$this->SizeID',
                LookID = '$this->LookID',
                FinishID = '$this->FinishID',
                SpaceID = '$this->SpaceID',
                ProductDescription = '$this->ProductDescription',
                ProductUrl = '$this->ProductUrl',
                Sequence = '$this->Sequence',
                ForCompany = '$this->ForCompany',
                ImagePath = '$this->ImagePath',
                ImageDescription = '$this->ImageDescription',
                MetaTitle = '$this->MetaTitle',
                MetaKeywords = '$this->MetaKeywords',
                MetaDescription = '$this->MetaDescription',
                MetaOgTitle = '$this->MetaOgTitle',
                MetaOgUrl = '$this->MetaOgUrl',
                MetaOgImage = '$this->MetaOgImage',
                MetaOgDescription = '$this->MetaOgDescription',
                UserID = '$this->UserID',
                IsActive = '$this->IsActive',
                Modified = '$datetime'
            WHERE 
                ProductID = $pk";

            $result = $this->connection->query($update);
            return $result;
        } catch (Exception $e) {
            echo "<script>alert('There is a problem with the query.');</script>";
        }
    }

    public function delete($pk)
    {
        $datetime = date('Y-m-d H:i:s');
        $update = "UPDATE pro_product 
        SET 
            IsActive = 2,
            Deleted = '$datetime'
        WHERE 
            ProductID = $pk";

        $result = $this->connection->query($update);
        return $result;
    }
    public function selectLast3AddedDataForAdmin()
{
    $select = "SELECT 
        pro_product.ProductID,
        pro_product.ProductName,
        pro_product.TypeID,
        pro_product.SizeID,
        pro_product.LookID,
        pro_product.FinishID,
        pro_product.SpaceID,
        pro_product.ProductDescription,
        pro_product.ProductUrl,
        pro_product.Sequence,
        mst_type.TypeName,
        mst_size.SizeName,
        pro_product.ForCompany,
        mst_finish.FinishName,
        mst_look.LookName,
        mst_space.SpaceName,
        pro_product.ImagePath,
        pro_product.ImageDescription,
        pro_product.MetaTitle,
        pro_product.MetaKeywords,   
        pro_product.MetaDescription,
        pro_product.MetaOgTitle,
        pro_product.MetaOgUrl,
        pro_product.MetaOgImage,
        pro_product.MetaOgDescription,
        pro_product.UserID,
        pro_product.IsActive,
        pro_product.Created,
        pro_product.Modified,
        pro_product.Deleted
    FROM  
        pro_product 
    LEFT OUTER JOIN mst_type ON mst_type.TypeID = pro_product.TypeID 
    LEFT OUTER JOIN mst_size ON mst_size.SizeID = pro_product.SizeID  
    LEFT OUTER JOIN mst_look ON mst_look.LookID = pro_product.LookID
    LEFT OUTER JOIN mst_space ON mst_space.SpaceID = pro_product.SpaceID 
    LEFT OUTER JOIN mst_finish ON mst_finish.FinishID = pro_product.FinishID 
    WHERE 
        pro_product.IsActive IN (0, 1) 
    ORDER BY 
        pro_product.Created DESC
    LIMIT 3; 
    ";

    $result = $this->connection->query($select);
    return $result;
}
}
