<?php
    session_start();
    include('connect.php');
    $successInfo = "success";
    $errorInfo = "error occurred!";


    if(isset($_POST['listMainContainer'])){
        $massiv = Array();

        $sqlRequest = "SELECT * FROM userVideos";
    
        $result = mysqli_query($link, $sqlRequest);
        while ($row = mysqli_fetch_assoc($result)){
            $massiv[] = $row;
        }

        echo json_encode($massiv);
    } 

    if(isset($_POST['userChannelHeader'])){
        $massiv = Array();

        $sqlRequest = "SELECT * FROM userChannel";
       
        $result = mysqli_query($link, $sqlRequest);
        while ($row = mysqli_fetch_assoc($result)){
            $massiv[] = $row;
        }

        echo json_encode($massiv);
    } 

    if(isset($_POST['channelHeadVideo'])){
        $massiv = Array();

        $sqlRequest = "SELECT * FROM userHeadVideo";
       
        $result = mysqli_query($link, $sqlRequest);
        while ($row = mysqli_fetch_assoc($result)){
            $massiv[] = $row;
        }

        echo json_encode($massiv);
    } 

    if(isset($_POST['channelAlbums'])){
        $massiv = Array();

        $sqlRequest = "SELECT * FROM album";
       
        $result = mysqli_query($link, $sqlRequest);
        while ($row = mysqli_fetch_assoc($result)){
            $massiv[] = $row;
        }

        echo json_encode($massiv);
    } 

    if(isset($_POST['uploadedVideos'])){
        $massiv = Array();

        $sqlRequest = "SELECT * FROM uploadedvideos";
       
        $result = mysqli_query($link, $sqlRequest);
        while ($row = mysqli_fetch_assoc($result)){
            $massiv[] = $row;
        }

        echo json_encode($massiv);
    }

    if(isset($_POST['channelPlaylist'])){
        $massiv = Array();

        $sqlRequest = "SELECT * FROM playlist";
       
        $result = mysqli_query($link, $sqlRequest);
        while ($row = mysqli_fetch_assoc($result)){
            $massiv[] = $row;
        }

        echo json_encode($massiv);
    }

    if(isset($_POST['subscribedChannels'])){
        $massiv = Array();

        $sqlRequest = "SELECT * FROM subscribedChannels";
       
        $result = mysqli_query($link, $sqlRequest);
        while ($row = mysqli_fetch_assoc($result)){
            $massiv[] = $row;
        }

        echo json_encode($massiv);
    }

    if(isset($_POST['posts'])){
        $massiv = Array();

        $sqlRequest = "SELECT * FROM posts";
       
        $result = mysqli_query($link, $sqlRequest);
        while ($row = mysqli_fetch_assoc($result)){
            $massiv[] = $row;
        }

        echo json_encode($massiv);
    }
    


?>