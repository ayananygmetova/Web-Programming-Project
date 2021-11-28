<?php

class VideoGateway{
    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function video_details($video_id){
        $one_video = "
        SELECT 
            id, video_url, video_title, video_description, user_id
        FROM
            kbtube.videos
        WHERE id= " . $video_id;

        $other_videos = "
        SELECT 
            id, video_url, video_title, video_description, user_id
        FROM
            kbtube.videos
        WHERE id != " . $video_id;

    try {
        
        $video_query = mysqli_query($this->db,$one_video);
        $video_res = mysqli_fetch_array($video_query,MYSQLI_ASSOC);
        $other_video_queries = mysqli_query($this->db,$other_videos);
        $other_video_res = mysqli_fetch_all($other_video_queries,MYSQLI_ASSOC);
        $video_info['video_details'] = $video_res;
        $video_info['other_videos'] = $other_video_res;
        // $video_info['comments'] = ;
        
        return $video_info;
    } catch (Exception $e) {
        exit($e->getMessage());
    }
    }
        

}


?>