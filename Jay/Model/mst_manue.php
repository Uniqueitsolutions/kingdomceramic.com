<?php 
include_once __DIR__.'/../Configure/dbconnect.php';

class mst_manue extends dbconnect
{
public $ManueID;
public $ManueName;
public $ManueFileName;
public $Created;
public $Modified;

//select all data
public function selectalldata() {
$select = "SELECT ManueID,
ManueName,
ManueFileName,
Created,
Modified
FROM mst_manue ";
$select1 = $this->connection->query($select);
return $select1;
}
//select by pk
public function selectbypk($pk) {
$select = "SELECT ManueID,
ManueName,
ManueFileName,
Created,
Modified
FROM about
WHERE IsActive = 1 AND ManueID =$pk ";
$select1 = $this->connection->query($select);
return $select1;
}
}
?>