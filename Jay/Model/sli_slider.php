<?php
include_once __DIR__ . '/../Configure/dbconnect.php';

class sli_slider extends dbconnect
{
    public $SliderID;
    public $SliderTitle;
    public $SliderDescription;
    public $ImagePath;
    public $ImageDescription;
    public $Sequence;
    public $UserID;
    public $IsActive;
    public $Created;
    public $Modified;
    public $Deleted;

    public function selectAllDataForClient()
    {
        $select = "SELECT 
       SliderID,
       SliderTitle,
       SliderDescription,
       ImagePath,
       ImageDescription,
       Sequence,
       UserID,
       IsActive,
       Created,
       Modified,
       Deleted
    FROM  
    sli_slider
    WHERE 
 IsActive = 1
        ORDER BY 
    Sequence ASC";

        $result = $this->connection->query($select);
        return $result;
    }

    public function selectAllDataForAdmin()
    {

        $select = "SELECT 
        SliderID,
       SliderTitle,
       SliderDescription,
       ImagePath,
       ImageDescription,
       Sequence,
       UserID,
       IsActive,
       Created,
       Modified,
       Deleted
    FROM  
    sli_slider 
    
    WHERE 
        IsActive IN (0, 1) 
    ORDER BY 
        IsActive ASC, Sequence ASC;
    ";

        $result = $this->connection->query($select);
        return $result;
    }

    public function selectByPK($pk)
    {
        $select = "SELECT 
           SliderID,
       SliderTitle,
       SliderDescription,
       ImagePath,
       ImageDescription,
       Sequence,
       UserID,
       IsActive,
       Created,
       Modified,
       Deleted
        FROM  
        sli_slider
        WHERE 
            SliderID = $pk";

        $result = $this->connection->query($select);
        return $result;
    }

    public function insertData()
    {
        $datetime = date('Y-m-d H:i:s');
        try {
            $insert = "INSERT INTO sli_slider 
            (           
       SliderTitle,
       SliderDescription,
       ImagePath,
       ImageDescription,
       Sequence,
       UserID,
       IsActive,
       Created,
       Modified
            ) 
            VALUES 
            (
                '$this->SliderTitle',
                '$this->SliderDescription',
                '$this->ImagePath',
                '$this->ImageDescription',
                '$this->Sequence',
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
            $update = "UPDATE sli_slider
            SET 
            SliderTitle = '$this->SliderTitle',
            SliderDescription = '$this->SliderDescription',
            ImagePath = '$this->ImagePath',
            ImageDescription = '$this->ImageDescription',
            Sequence = '$this->Sequence',
                UserID = '$this->UserID',
                IsActive = '$this->IsActive',
                Modified = '$datetime'
            WHERE 
                SliderID = $pk";

            $result = $this->connection->query($update);
            return $result;
        } catch (Exception $e) {
            echo "<script>alert('There is a problem with the query.');</script>";
        }
    }

    public function delete($pk)
    {
        $datetime = date('Y-m-d H:i:s');
        $update = "UPDATE sli_slider 
        SET 
            IsActive = 2,
            Deleted = '$datetime'
        WHERE 
            sliderID = $pk";

        $result = $this->connection->query($update);
        return $result;
    }
}