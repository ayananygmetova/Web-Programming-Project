<?php


include('backend/DatabaseConnector.php');

include('backend/video_gateway.php');

header("Access-Control-Allow-Origin: *");

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );


if ($uri[1] !== 'backend_apis.php') {
    header("HTTP/1.1 404 Not Found");
    exit();
}
$requestMethod = $_SERVER["REQUEST_METHOD"];
$conn = new DatabaseConnector();
$dbConnection = $conn->getConnection();


switch ($requestMethod) {
    case 'GET':
        // if ($this->userId) {
        //     $response = $this->getUser($this->userId);
        // } else {
            $videoGateway = new VideoGateway($dbConnection);
            $result = $videoGateway->video_details($uri[2]);
            $response['status_code_header'] = 'HTTP/1.1 200 OK';
            $response['body'] = json_encode($result);
        // };
        break;
    // case 'POST':
    //     $response = $this->createUserFromRequest();
    //     break;
    // case 'PUT':
    //     $response = $this->updateUserFromRequest($this->userId);
    //     break;
    // case 'DELETE':
    //     $response = $this->deleteUser($this->userId);
    //     break;
    default:
        $response = $this->notFoundResponse();
        break;
}
header($response['status_code_header']);
if ($response['body']) {
    echo $response['body'];
}