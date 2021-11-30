<?php

include('table_gateways/video_gateway.php');
class VideoController {

    private $db;
    private $requestMethod;

    private $videoGateway;

    private $video_id;

    public function __construct($db, $requestMethod, $video_id)
    {
        $this->db = $db;
        $this->requestMethod = $requestMethod;
        $this->video_id = $video_id;

        $this->videoGateway = new VideoGateway($db);
    }

    public function processRequest()
    {
        switch ($this->requestMethod) {
            case 'GET':
                // if ($this->userId) {
                //     $response = $this->getUser($this->userId);
                // } else {
                    $response = $this->getVideoDetails($this->video_id);
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
    }

    private function getVideoDetails($video_id)
    {
        $result = $this->videoGateway->video_details($video_id);
        $response['status_code_header'] = 'HTTP/1.1 200 OK';
        $response['body'] = json_encode($result);
        return $response;
    }

    // private function getUser($id)
    // {
    //     $result = $this->personGateway->find($id);
    //     if (! $result) {
    //         return $this->notFoundResponse();
    //     }
    //     $response['status_code_header'] = 'HTTP/1.1 200 OK';
    //     $response['body'] = json_encode($result);
    //     return $response;
    // }

    // private function createUserFromRequest()
    // {
    //     $input = (array) json_decode(file_get_contents('php://input'), TRUE);
    //     if (! $this->validatePerson($input)) {
    //         return $this->unprocessableEntityResponse();
    //     }
    //     $this->personGateway->insert($input);
    //     $response['status_code_header'] = 'HTTP/1.1 201 Created';
    //     $response['body'] = null;
    //     return $response;
    // }

    // private function updateUserFromRequest($id)
    // {
    //     $result = $this->personGateway->find($id);
    //     if (! $result) {
    //         return $this->notFoundResponse();
    //     }
    //     $input = (array) json_decode(file_get_contents('php://input'), TRUE);
    //     if (! $this->validatePerson($input)) {
    //         return $this->unprocessableEntityResponse();
    //     }
    //     $this->personGateway->update($id, $input);
    //     $response['status_code_header'] = 'HTTP/1.1 200 OK';
    //     $response['body'] = null;
    //     return $response;
    // }

    // private function deleteUser($id)
    // {
    //     $result = $this->personGateway->find($id);
    //     if (! $result) {
    //         return $this->notFoundResponse();
    //     }
    //     $this->personGateway->delete($id);
    //     $response['status_code_header'] = 'HTTP/1.1 200 OK';
    //     $response['body'] = null;
    //     return $response;
    // }

    // private function validatePerson($input)
    // {
    //     if (! isset($input['firstname'])) {
    //         return false;
    //     }
    //     if (! isset($input['lastname'])) {
    //         return false;
    //     }
    //     return true;
    // }

    private function unprocessableEntityResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 422 Unprocessable Entity';
        $response['body'] = json_encode([
            'error' => 'Invalid input'
        ]);
        return $response;
    }

    private function notFoundResponse()
    {
        $response['status_code_header'] = 'HTTP/1.1 404 Not Found';
        $response['body'] = null;
        return $response;
    }
}