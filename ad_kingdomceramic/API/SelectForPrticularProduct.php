<?php



// Including the problem model for database operations related to problems.
include_once __DIR__.'/../Model/pro_product.php';
include_once __DIR__.'/../Configure/crossplatform.php'; 
cors();
header('Content-Type: application/json');
$jsonInput=json_decode(file_get_contents("php://input"),true);

$apikey=$jsonInput['apikey'];
$ProductUrl=$jsonInput['ProductUrl'];

$jsonArray = array();
$productObj=new pro_product();

if($apikey === "ADMIN123123")
{
    // Instantiate the problem object.
   
    
    // Retrieve all data related to the problem from the database.
    $result=$productObj->selectByProductUrl($ProductUrl);
    
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
