<?php

class VideoGateway{
    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findAll(){
        $statement = "
        SELECT 
            id, video_url, video_title, video_description, user_id
        FROM
            kbtube.videos;
    ";

    try {
        
        $result = mysqli_query($this->db,$statement);
        $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
        // $videos = array();
        // foreach ($row as &$val) {
        //     $videoData['video_id'] = $val['id'];
        //     $videoData['video_url'] = $val['video_url'];
        //     $videoData['video_title'] = $val['video_title'];
        //     $videoData['video_description'] = $val['video_description'];
        //     $videoData['date_created'] = $val['date_created'];
        //     array_push($videos, $videoData);
        // }
        
        return $row;
    } catch (Exception $e) {
        exit($e->getMessage());
    }
    }
        

}


?>