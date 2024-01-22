<?php



// Including the problem model for database operations related to problems.
include_once __DIR__.'/../Model/mst_finish.php';

header('Content-Type: application/json');
$jsonInput=json_decode(file_get_contents("php://input"),true);

$apikey=$jsonInput['apikey'];

$jsonArray = array();
$finishObj=new mst_finish();

if($apikey === "ADMIN123123")
{
    // Instantiate the problem object.
   
    
    // Retrieve all data related to the problem from the database.
    $result=$finishObj->selectAllDataForClientApi();
    
    // Fetch all results into an associative array.
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Set the response status and message.
    $jsonArray['status'] = true;
    $jsonArray['message'] = "Successfully";
    $jsonArray['data'] = $output;
}
else
{
    // If the API key does not match, set the response status and error message.
    $jsonArray['status'] = false;
    $jsonArray['message'] = "Please check the api key";
}

// Return the response in JSON format.2
echo json_encode($jsonArray);

?>
