<?php
include_once __DIR__.'/../Configure/dbconnect.php';

class blo_blog extends dbconnect
{
    public $BlogID;
    public $BlogTitle;
    public $BlogDescription;
    public $BlogUrl;
    public $ImagePath1;
    public $ImagePath2;
    public $ImagePath3;
    public $ImagePath4;
    public $ImagePath5;
    public $ImagePath6;
    public $ImageDescription1;
    public $ImageDescription2;
    public $ImageDescription3;
    public $ImageDescription4;
    public $ImageDescription5;
    public $ImageDescription6;
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
        BlogID,
            BlogTitle,
            BlogDescription,
            BlogUrl,
            ImagePath1,
            ImagePath2,
            ImagePath3,
            ImagePath4,
            ImagePath5,
            ImagePath6,
            ImageDescription1,
            ImageDescription2,
            ImageDescription3,
            ImageDescription4,
            ImageDescription5,
            ImageDescription6,
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
            Modified,
            Deleted
         FROM  
         blo_blog
         WHERE IsActive = 1
         order by Sequence asc
         ";

        $select1 = $this->connection->query($select);
        return $select1;
    }
    public function selectAllDataForAdmin()
    {
        $select = "SELECT 
        BlogID,
            BlogTitle,
            BlogDescription,
            BlogUrl,
            ImagePath1,
            ImagePath2,
            ImagePath3,
            ImagePath4,
            ImagePath5,
            ImagePath6,
            ImageDescription1,
            ImageDescription2,
            ImageDescription3,
            ImageDescription4,
            ImageDescription5,
            ImageDescription6,
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
            Modified,
            Deleted
         FROM  
         blo_blog
         WHERE IsActive in (0 , 1) 
         order by IsActive desc,Sequence asc
         ";
    
        $select1 = $this->connection->query($select);

        return $select1;


    }
    public function selectByPK($pk)
    {
        $select = "SELECT 
            BlogID,
            BlogTitle,
            BlogDescription,
            BlogUrl,
            ImagePath1,
            ImagePath2,
            ImagePath3,
            ImagePath4,
            ImagePath5,
            ImagePath6,
            ImageDescription1,
            ImageDescription2,
            ImageDescription3,
            ImageDescription4,
            ImageDescription5,
            ImageDescription6,
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
            Modified,
            Deleted
        FROM  
            blo_blog
        WHERE 
            BlogID = $pk";

        $result = $this->connection->query($select);
        return $result;
    }

    public function selectByUrl($BlogUrl)
    {
        $select = "SELECT 
            BlogID,
            BlogTitle,
            BlogDescription,
            BlogUrl,
            ImagePath1,
            ImagePath2,
            ImagePath3,
            ImagePath4,
            ImagePath5,
            ImagePath6,
            ImageDescription1,
            ImageDescription2,
            ImageDescription3,
            ImageDescription4,
            ImageDescription5,
            ImageDescription6,
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
            Modified,
            Deleted
        FROM  
            blo_blog
        WHERE 
            BlogUrl = '$BlogUrl';";
            
        $result = $this->connection->query($select);
        return $result;
    }

    public function insertData()
    {
        $datetime = date('Y-m-d H:i:s');
        try {
            $insert = "INSERT INTO blo_blog 
            (
                BlogTitle,
                BlogDescription,
                BlogUrl,
                ImagePath1,
                ImagePath2,
                ImagePath3,
                ImagePath4,
                ImagePath5,
                ImagePath6,
                ImageDescription1,
                ImageDescription2,
                ImageDescription3,
                ImageDescription4,
                ImageDescription5,
                ImageDescription6,
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
                '$this->BlogTitle',
                '$this->BlogDescription',
                '$this->BlogUrl',
                '$this->ImagePath1',
                '$this->ImagePath2',
                '$this->ImagePath3',
                '$this->ImagePath4',
                '$this->ImagePath5',
                '$this->ImagePath6',
                '$this->ImageDescription1',
                '$this->ImageDescription2',
                '$this->ImageDescription3',
                '$this->ImageDescription4',
                '$this->ImageDescription5',
                '$this->ImageDescription6',
                $this->Sequence,
                '$this->MetaTitle',
                '$this->MetaKeywords',
                '$this->MetaDescription',
                '$this->MetaOgTitle',
                '$this->MetaOgImage',
                '$this->MetaOgDescription',
                '$this->MetaOgUrl',
                $this->UserID,
                $this->IsActive,
                '$datetime',
                '$datetime'
            )";
         
            $result = $this->connection->query($insert);
            return $result;
        }catch (Exception $e) {
            echo "<script>alert('There is a problem with the query.');</script>";
        }
    }

    public function updateData($pk)
    {
        $datetime = date('Y-m-d H:i:s');
        try {
            $update = "UPDATE blo_blog 
            SET 
                BlogTitle = '$this->BlogTitle',
                BlogDescription = '$this->BlogDescription',
                BlogUrl = '$this->BlogUrl',
                ImagePath1 = '$this->ImagePath1',
                ImagePath2 = '$this->ImagePath2',
                ImagePath3 = '$this->ImagePath3',
                ImagePath4 = '$this->ImagePath4',
                ImagePath5 = '$this->ImagePath5',
                ImagePath6 = '$this->ImagePath6',
                ImageDescription1 = '$this->ImageDescription1',
                ImageDescription2 = '$this->ImageDescription2',
                ImageDescription3 = '$this->ImageDescription3',
                ImageDescription4 = '$this->ImageDescription4',
                ImageDescription5 = '$this->ImageDescription5',
                ImageDescription6 = '$this->ImageDescription6',
                Sequence = $this->Sequence,
                MetaTitle = '$this->MetaTitle',
                MetaKeywords = '$this->MetaKeywords',
                MetaDescription = '$this->MetaDescription',
                MetaOgTitle = '$this->MetaOgTitle',
                MetaOgImage = '$this->MetaOgImage',
                MetaOgDescription = '$this->MetaOgDescription',
                MetaOgUrl = '$this->MetaOgUrl',
                UserID = $this->UserID,
                IsActive = $this->IsActive,
                Modified = '$datetime'
            WHERE 
                BlogID = $pk";
            $result = $this->connection->query($update);
            return $result;
        } catch (Exception $e) {
            echo "<script>alert('There is a problem with the query.');</script>";
        }
    }

    public function delete($pk)
    {
        $datetime = date('Y-m-d H:i:s');
        $update = "UPDATE blo_blog 
        SET 
            IsActive = 2,
            Deleted = '$datetime'
        WHERE 
            BlogID = $pk";

        $result = $this->connection->query($update);
        return $result;
    }
}
?>
