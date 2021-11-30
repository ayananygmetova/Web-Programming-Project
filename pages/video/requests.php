<?php
    session_start();
    include('connector.php');
    $successInfo = "success";
    $errorInfo = "error occurred!";
    if(isset($_POST['create_comments'])){
        $text = $_POST['comments_text'];
        $video_id = $_POST['video_id'];
        $sqlRequest = "INSERT INTO kbtube.comments (comment_text, user_id, video_id) VALUES ('$text', 1, '$video_id')";
        if (mysqli_query($link, $sqlRequest)) {
            echo json_encode($successInfo);
        } else {
            echo json_encode($errorInfo);
        }
    }

    if(isset($_POST['get_comments'])){
        $video_id = $_POST['video_id'];
        $sqlRequest = "
        SELECT a.*,
            CONCAT(a.day, a.month, a.year) as date_created	
        FROM (
            SELECT t.*,
                DATE_FORMAT(t.date_created, '%d') day,
                case when MONTH(t.date_created)= 1 then ' янв. '
                    when MONTH(t.date_created)= 2 then ' фев. '
                    when MONTH(t.date_created)= 3 then ' мар. '
                    when MONTH(t.date_created)= 4 then ' апр. '
                    when MONTH(t.date_created)= 5 then ' мая '
                    when MONTH(t.date_created)= 6 then ' июн. '
                    when MONTH(t.date_created)= 7 then ' июл. '
                    when MONTH(t.date_created)= 8 then ' авг. '
                    when MONTH(t.date_created)= 9 then ' сен. '
                    when MONTH(t.date_created)= 10 then ' окт. '
                    when MONTH(t.date_created)= 11 then ' нояб. '
                    when MONTH(t.date_created)= 12 then ' дек. '
                    else '' end as month,
                DATE_FORMAT(t.date_created, '%Y') as year,
                CONCAT(t2.firstname, ' ', t2.lastname) fio 
            FROM kbtube.comments t
            LEFT JOIN kbtube.users t2 on t2.id=t.user_id
            WHERE t.video_id='$video_id' 
            order by t.date_created desc
            ) a
        
        ";
        $result = mysqli_query($link, $sqlRequest);
        while ($row = mysqli_fetch_assoc($result)){
            $massiv[] = $row;
        }
        echo json_encode($massiv);
    }

    

    if(isset($_POST['other_videos'])){
        $massiv = Array();
        $video_id = $_POST['video_id'];
        $sqlRequest = "
        SELECT a.*,
            CONCAT(a.day, a.month, a.year) as date_created	
        FROM (SELECT t.id, 
                t.video_url, 
                t.video_title, 
                t.video_description, 
                t.user_id, 
                DATE_FORMAT(t.date_created, '%d') day,
                case when MONTH(t.date_created)= 1 then ' янв. '
                    when MONTH(t.date_created)= 2 then ' фев. '
                    when MONTH(t.date_created)= 3 then ' мар. '
                    when MONTH(t.date_created)= 4 then ' апр. '
                    when MONTH(t.date_created)= 5 then ' мая '
                    when MONTH(t.date_created)= 6 then ' июн. '
                    when MONTH(t.date_created)= 7 then ' июл. '
                    when MONTH(t.date_created)= 8 then ' авг. '
                    when MONTH(t.date_created)= 9 then ' сен. '
                    when MONTH(t.date_created)= 10 then ' окт. '
                    when MONTH(t.date_created)= 11 then ' нояб. '
                    when MONTH(t.date_created)= 12 then ' дек. '
                    else '' end as month,
                DATE_FORMAT(t.date_created, '%Y') as year,
                CONCAT(t5.firstname, ' ', t5.lastname) fio 
                
        FROM kbtube.videos t
        LEFT JOIN kbtube.users t5 on t5.id=t.user_id
        where t.id<>'$video_id') a
        
        
        ";
        $result = mysqli_query($link, $sqlRequest);
        while ($row = mysqli_fetch_assoc($result)){
            $massiv[] = $row;
        }
        echo json_encode($massiv);
    } 
    if(isset($_POST['video_details'])){
        $massiv = Array();
        $video_id = $_POST['video_id'];
        $sqlRequest = "
        SELECT a.*,
            CONCAT(a.day, a.month, a.year) as date_created	
        FROM (SELECT t.id, 
                t.video_url, 
                t.video_title, 
                t.video_description, 
                t.user_id, 
                DATE_FORMAT(t.date_created, '%d') day,
                case when MONTH(t.date_created)= 1 then ' янв. '
                    when MONTH(t.date_created)= 2 then ' фев. '
                    when MONTH(t.date_created)= 3 then ' мар. '
                    when MONTH(t.date_created)= 4 then ' апр. '
                    when MONTH(t.date_created)= 5 then ' мая '
                    when MONTH(t.date_created)= 6 then ' июн. '
                    when MONTH(t.date_created)= 7 then ' июл. '
                    when MONTH(t.date_created)= 8 then ' авг. '
                    when MONTH(t.date_created)= 9 then ' сен. '
                    when MONTH(t.date_created)= 10 then ' окт. '
                    when MONTH(t.date_created)= 11 then ' нояб. '
                    when MONTH(t.date_created)= 12 then ' дек. '
                    else '' end as month,
                DATE_FORMAT(t.date_created, '%Y') as year,
                count(t1.id) likes_num,
                case when count(t2.id)>0 then true
                else false
                end is_liked,
                count(t3.id) dislikes_num,
                case when count(t4.id)>0 then true
                else false
                end is_disliked,
                CONCAT(t5.firstname, ' ', t5.lastname) fio 
                
        FROM kbtube.videos t
        LEFT JOIN kbtube.likes t1 on t1.video_id=t.id
        LEFT JOIN kbtube.likes t2 on t2.video_id=t.id and t2.user_id=1
        LEFT JOIN kbtube.dislikes t3 on t3.video_id=t.id
        LEFT JOIN kbtube.dislikes t4 on t4.video_id=t.id and t4.user_id=1
        LEFT JOIN kbtube.users t5 on t5.id=t.user_id
        where t.id='$video_id') a
        
        ";
        $result = mysqli_query($link, $sqlRequest);
        while ($row = mysqli_fetch_assoc($result)){
            $massiv[] = $row;
        }
        echo json_encode($massiv);
    }

    if(isset($_POST['set_likes'])){
        $massiv = Array();
        $video_id = $_POST['video_id'];
        $sqlRequest2 = "delete from kbtube.dislikes where user_id=1 and video_id='$video_id'";
        if ($_POST['is_liked']){
            $sqlRequest = "delete from kbtube.likes where user_id=1 and video_id='$video_id'";
        }
        else{
            $sqlRequest = "insert into kbtube.likes(user_id, video_id) values (1, '$video_id')";
        }
        $result = mysqli_query($link, $sqlRequest2);
        if (mysqli_query($link, $sqlRequest)) {
            echo json_encode($successInfo);
        } else {
            echo json_encode($errorInfo);
        }
    }
    if(isset($_POST['set_dislikes'])){
        $massiv = Array();
        $video_id = $_POST['video_id'];
        $sqlRequest2 = "delete from kbtube.likes where user_id=1 and video_id='$video_id'";
        if ($_POST['is_disliked']){
            $sqlRequest = "delete from kbtube.dislikes where user_id=1 and video_id='$video_id'";
        }
        else{
            $sqlRequest = "insert into kbtube.dislikes(user_id, video_id) values (1, '$video_id')";
        }
        $result = mysqli_query($link, $sqlRequest2);
        if (mysqli_query($link, $sqlRequest)) {
            echo json_encode($successInfo);
        } else {
            echo json_encode($errorInfo);
        }
    }

?>