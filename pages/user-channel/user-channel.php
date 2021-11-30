<!doctype html>
<html lang="en">
<head>

<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();
include('connect.php');

?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script> -->
	<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <title>KBTUtube</title>
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="user-channel.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <div class="navbar d-flex justify-content-between px-4 pb-2">
        <div>
            <img class="me-3" src="../../assets/core/header/menu.svg" alt="">
            <img class="me-3" src="../../assets/core/header/logo.svg" alt="">
        </div>
        <div class="d-flex flex-grow-1 align-items-center justify-content-center">
            <div class="search-form input-group">
                <input type="text" value="drake" class="form-control" placeholder="Введите запрос">
                <span class="input-group-text">
                    <a href="../../pages/search/search.html">
                        <img class="mx-2" src="../../assets/core/header/search.svg" alt="">
                    </a>
                </span>
            </div>
            <img class="ms-3" src="../../assets/core/header/micro.svg" alt="">
        </div>
        <div>
            <img class="ms-3" src="../../assets/core/header/new_video.svg" alt="">
            <img class="ms-3" src="../../assets/core/header/apps.svg" alt="">
            <img class="ms-3" src="../../assets/core/header/notifications.svg" alt="">
            <img class="ms-4 rounded-circle" width="32" height="32" src="../../assets/core/header/profile_photo.jpg" alt="">
        </div>
    </div>

    <div class="d-flex">

            <div class="left-side-bar px-2 pt-3 d-flex flex-column text-center" style="flex: 2">
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/home.svg" alt="">
                    <span class="left-side-bar__big-text">Главная</span>
                </div>
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/recommendations.svg" alt="">
                    <span class="left-side-bar__big-text">Навигатор</span>
                </div>
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/subscribes.svg" alt="">
                    <span class="left-side-bar__big-text">Подписки</span>
                </div>
                <hr class="dropdown-divider">
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/library.svg" alt="">
                    <span class="left-side-bar__big-text">Библиотека</span>
                </div>
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/history.svg" alt="">
                    <span class="left-side-bar__big-text">История</span>
                </div>
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/your-videos.svg" alt="">
                    <span class="left-side-bar__big-text">Ваши видео</span>
                </div>
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/watch_later.svg" alt="">
                    <span class="left-side-bar__big-text">Смотреть позже</span>
                </div>
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/extract.svg" alt="">
                    <span class="left-side-bar__big-text">Развернуть</span>
                </div>
                <hr class="dropdown-divider">
                <span class="left-side-bar__title">Другие возможности</span>
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/videogames.svg" alt="">
                    <span class="left-side-bar__big-text">Видеоигры</span>
                </div>
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/translations.svg" alt="">
                    <span class="left-side-bar__big-text">Трансляции</span>
                </div>
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/sport.svg" alt="">
                    <span class="left-side-bar__big-text">Спорт</span>
                </div>
                <hr class="dropdown-divider">
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/settings.svg" alt="">
                    <span class="left-side-bar__big-text">Настройки</span>
                </div>
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/reports.svg" alt="">
                    <span class="left-side-bar__big-text">Жалобы</span>
                </div>
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/info.svg" alt="">
                    <span class="left-side-bar__big-text">Справка</span>
                </div>
                <div class="left-side-bar__item d-flex align-items-center py-2 px-3">
                    <img height="24" width="24" src="../../assets/core/left-side-bar/send_report.svg" alt="">
                    <span class="left-side-bar__big-text">Отправить отзыв</span>
                </div>
            </div>


        <div id="user-channel-wrapper">

            <div id="user-channel-info">
            
            </div>
        
            <div class="div-tabs">
                <div class="tabs-display">
                    <div class="tabs-text-item">
                        <div class="tabs-text-item-style"><button onclick="openTab('main-tab-body', 'horizontal-line-main')">ГЛАВНАЯ</button></div>
                        <div id="horizontal-line-main" class="horizontal-line-selected-tab tabcontent" style="display: block;"></div>
                    </div>
                    <div class="tabs-text-item">
                        <div class="tabs-text-item-style"><button  onclick="openTab('video-tab-body', 'horizontal-line-video')">ВИДЕО</button></div>
                        <div id="horizontal-line-video" class="horizontal-line-selected-tab tabcontent"></div>
                    </div>
                    <div class="tabs-text-item">
                        <div class="tabs-text-item-style"><button onclick="openTab('playlist-tab-body', 'horizontal-line-playlist')">ПЛЕЙЛИСТЫ</button></div>
                        <div id="horizontal-line-playlist" class="horizontal-line-selected-tab tabcontent"></div>
                    </div>
                    <div class="tabs-text-item">
                        <div class="tabs-text-item-style"><button  onclick="openTab('community-tab-body', 'horizontal-line-community')">СООБЩЕСТВО</button></div>
                        <div id="horizontal-line-community" class="horizontal-line-selected-tab tabcontent"></div>
                    </div>
                    <div class="tabs-text-item">
                        <div class="tabs-text-item-style"><button  onclick="openTab('channels-tab-body', 'horizontal-line-channels')">КАНАЛЫ</button></div>
                        <div id="horizontal-line-channels" class="horizontal-line-selected-tab tabcontent"></div>
                    </div>
                    <div class="tabs-text-item">
                        <div class="tabs-text-item-style"><button onclick="openTab('about-channel-tab-body', 'horizontal-line-about-channel')">О КАНАЛЕ</button></div>
                        <div id="horizontal-line-about-channel" class="horizontal-line-selected-tab tabcontent"></div>
                    </div>
                </div>
            </div>

            <div id="main-tab-body" class="tabcontent" style="display: block;">
                <div id="channel-head-video-container" class="main-tab-head-video">
                    
                </div>

                <hr>

                <div class="main-tab-2nd-block">
                    <div class="album-title">Love Goes: Live at Abbey Roads Studios <span class="resume-all"><img width="24" height="24" src="../../assets/main/play-all-svg.svg"> ВОСПРОИЗВЕСТИ ВСЕ</span></div>
                    <div id="main-container-list-1" class="flex-container">
                        
                    </div>
                </div>

                <hr>

                <div class="main-tab-2nd-block">
                    <div class="album-title">Love Goes: Live at Abbey Roads Studios <span class="resume-all"><img width="24" height="24" src="../../assets/main/play-all-svg.svg"> ВОСПРОИЗВЕСТИ ВСЕ</span></div>
                    <div id="main-container-list-2" class="flex-container">
                        
                    </div>
                </div>

                <hr>

                <div class="all-playlist-text ">Альбом и синглы</div>
                <div id="album-container">
                
                </div>
                <hr>
            </div>

            <div id="video-tab-body" class="tabcontent">

                <div class="video-tab-uploads-text">Загрузки <img width="24px" height="24px" src="../../assets/main/down-arrow.svg"></div>

                <div class="main-tab-2nd-block">
                    <div id="uploaded-video-container" class="flex-container">
                           
                    </div>
                </div>
            </div>

            <div id="playlist-tab-body" class="tabcontent">
                <div class="video-tab-uploads-text">Все плейлисты <img width="24px" height="24px" src="../../assets/main/down-arrow.svg"></div>
                <div class="all-playlist-text ">Все плейлисты</div>
                <div id="playlist-container" class="flex-container">
                    
                </div>
                <hr>

                <div class="all-playlist-text ">Альбом и синглы</div>
                <div id="album-container-2">
                    
                </div>
            </div>

            <div id="community-tab-body" class="tabcontent">
                <div id="community-news-list">
                   
                </div>
            </div>

            <div id="channels-tab-body" class="tabcontent">
                <div class="video-tab-uploads-text">Подписки</div>
                <div id="subscribed-channels-list" class="flex-container">
                   
                </div>
            </div>

            <div id="about-channel-tab-body" class="tabcontent">
                <div id="about-channel-info" class="flex-container-about-channel">

             </div>
                
            </div>
        </div>
    </div>

	<!-- <script src="//code.jquery.com/jquery-1.11.2.min.js"></script> -->
	<script type="text/javascript">
//////////////////////////////////////////////////////////////////////////////////////////////////////////
	
    function loadUserChannelHeader() {
                jQuery.ajax({
                    type: 'POST',
                    url: 'requests.php',
                    data:{
                        'userChannelHeader' : 'userChannelHeader'
                    },
                    success: function(data){
                        console.log(data);
                        userChannelHeader = JSON.parse(data);
                        console.log(userChannelHeader);
                            $.each(userChannelHeader, function(key1){
                            $('#user-channel-info').append(
                                '<img class="channel-head-bg" src="'+userChannelHeader[key1].userPhoto+'" alt="">\
                                <div class="channel-head-bg-bottom">\
                                <div class="channel-display">\
                                <div style="flex:1;">\
                                <img height="80" width="80" class="rounded-circle" src="'+userChannelHeader[key1].userAvatar+'" alt="">\
                                </div>\
                                <div style="flex:8;">\
                                <span class="channel-title-text">'+userChannelHeader[key1].userTitle+'</span><img style="margin: 0px 0px 0px 4px;" width="14px" height="14px" src="../../assets/main/melody.svg">\
                                <br>\
                                <span class="channel-sub-sum-text">'+userChannelHeader[key1].userSubscribers+'</span>\
                                </div>\
                                <div style="flex:1;">\
                                <button id="subscribe-btn-bg">ПОДПИСАТЬСЯ</button>\
                                </div>\
                                </div>\
                                </div>'
                            );
                            });
                    }
                });
    }

    function loadChannelHeadVideo() {
        jQuery.ajax({
            type: 'POST',
            url: 'requests.php',
            data:{
            'channelHeadVideo' : 'channelHeadVideo'
            },
            success: function(data){
            console.log(data);
            userHeadVideo = JSON.parse(data);
            console.log(userHeadVideo);
            $.each(userHeadVideo, function(key1){
            $('#channel-head-video-container').append(
                '<iframe src="'+userHeadVideo[key1].iframeInfo+'" width="424" height="238" frameborder="0" allowfullscreen></iframe>\
                    <div style="width: 33%; margin-left: 24px;">\
                        <div class="main-tab-head-video-title">'+userHeadVideo[key1].videoTitle+'</div>\
                        <div class="main-tab-head-video-views">'+userHeadVideo[key1].videoViews+'</div>\
                        <div class="main-tab-head-video-text-3">'+userHeadVideo[key1].description+' <br>\
                            <a href="http://samsmith.world/CatalogueID">http://samsmith.world/CatalogueID</a> \
                        </div>\
                        <a class="main-tab-head-video-text-4" href="'+userHeadVideo[key1].videoLink+'">ПОДРОБНЕЕ...</a>\
                    </div>'     
            );
            });

            }
        });
    }


    function listUserVideos1() {
            jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
					'listMainContainer' : 'listMainContainer'
                },
                success: function(data){
                    console.log(data);
                    userVideoList = JSON.parse(data);
                    console.log(userVideoList);
                        $.each(userVideoList, function(key1){
						$('#main-container-list-1').append(
                            '<div class="wrap-1">\
                            <img width="210px" height="117.8px" src="'+userVideoList[key1].preview+'">\
                            <div class="box-video-title">'+userVideoList[key1].title+'</div>\
                            <div class="box-video-channel">'+userVideoList[key1].author+'</div>\
                            <div class="box-video-channel">'+userVideoList[key1].views+'</div>\
                            <div class="box-video-channel">'+userVideoList[key1].date+'</div>\
                            </div>'
                        );
                        });

                }
            });
    }

	function listUserVideos2() {
            jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
					'listMainContainer' : 'listMainContainer'
                },
                success: function(data){
                    console.log(data);
                    userVideoList = JSON.parse(data);
                    console.log(userVideoList);
                        $.each(userVideoList, function(key1){
						$('#main-container-list-2').append(
                            '<div class="wrap-1">\
                            <img width="210px" height="117.8px" src="'+userVideoList[key1].preview+'">\
                            <div class="box-video-title">'+userVideoList[key1].title+'</div>\
                            <div class="box-video-channel">'+userVideoList[key1].author+'</div>\
                            <div class="box-video-channel">'+userVideoList[key1].views+'</div>\
                            <div class="box-video-channel">'+userVideoList[key1].date+'</div>\
                            </div>'
                        );
                        });

                }
            });
    }

    function loadChannelAlbums() {
            jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
					'channelAlbums' : 'channelAlbums'
                },
                success: function(data){
                    console.log(data);
                    userAlbum = JSON.parse(data);
                    console.log(userAlbum);
                        $.each(userAlbum, function(key1){
						$('#album-container').append(
                            '<div class="album-block">\
                                <img width="138px" height="138px" src="'+userAlbum[key1].songPreview+'">\
                                <div class="album-bg">'+userAlbum[key1].songQuantity+' <img width="24px" height="24px" src="../../assets/main/playlist-logo.svg"></div>\
                                </div>\
                                <div class="album-text-block">\
                                <div class="playlist-text-1">'+userAlbum[key1].albumTitle+'</div>\
                                <div class="playlist-text-2">'+userAlbum[key1].author+'</div>\
                                <div class="playlist-text-3">'+userAlbum[key1].songTitle+'</div>\
                                <div class="box-video-channel">ПОСМОТРЕТЬ ВЕСЬ ПЛЕЙЛИСТ</div>\
                            </div>'
                        );
                        });

                }
            });
    }

    function loadUploadedVideos() {
            jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
					'uploadedVideos' : 'uploadedVideos'
                },
                success: function(data){
                    console.log(data);
                    uploadedVideos = JSON.parse(data);
                    console.log(uploadedVideos);
                        $.each(uploadedVideos, function(key1){
						$('#uploaded-video-container').append(
                            '<div class="wrap-1">\
                            <img width="210px" height="117.8px" src="'+uploadedVideos[key1].preview+'">\
                            <div class="box-video-title">'+uploadedVideos[key1].title+'</div>\
                            <div class="box-video-channel">'+uploadedVideos[key1].author+'</div>\
                            <div class="box-video-channel">'+uploadedVideos[key1].views+'</div>\
                            <div class="box-video-channel">'+uploadedVideos[key1].date+'</div>\
                            </div>'
                        );
                        });

                }
            });
    }

    function loadChannelPlaylist() {
            jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
					'channelPlaylist' : 'channelPlaylist'
                },
                success: function(data){
                    console.log(data);
                    playlistVideos = JSON.parse(data);
                    console.log(playlistVideos);
                        $.each(playlistVideos, function(key1){
						$('#playlist-container').append('<div class="wrap-1">\
                        <div class="playlist-bg">\
                            <div class="playlist-bg-song-num">\
                                <div>'+playlistVideos[key1].number+'</div>\
                                <img width="24px" height="24px" src="../../assets/main/playlist-logo.svg"> \
                            </div>\
                        </div>\
                        <div class="box-video-title">'+playlistVideos[key1].title+'</div>\
                        <div class="box-video-channel">ПОСМОТРЕТЬ ВЕСЬ ПЛЕЙЛИСТ</div>\
                    </div>'
                    );
                    });

                }
            });
    }

    function loadChannelAlbums2() {
            jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
					'channelAlbums' : 'channelAlbums'
                },
                success: function(data){
                    console.log(data);
                    userAlbum = JSON.parse(data);
                    console.log(userAlbum);
                        $.each(userAlbum, function(key1){
						$('#album-container-2').append(
                            '<div class="album-block">\
                            <img width="138px" height="138px" src="'+userAlbum[key1].songPreview+'">\
                            <div class="album-bg">'+userAlbum[key1].songQuantity+'<img width="24px" height="24px" src="../../assets/main/playlist-logo.svg"></div>\
                            </div>\
                            <div class="album-text-block">\
                            <div class="playlist-text-1">'+userAlbum[key1].albumTitle+'</div>\
                            <div class="playlist-text-2">'+userAlbum[key1].author+'</div>\
                            <div class="playlist-text-3">'+userAlbum[key1].songTitle+'</div>\
                            <div class="box-video-channel">ПОСМОТРЕТЬ ВЕСЬ ПЛЕЙЛИСТ</div>\
                            </div>'
                        );
                        });

                }
            });
    }


    function loadPosts() {
            jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
					'posts' : 'posts'
                },
                success: function(data){
                    console.log(data);
                    posts = JSON.parse(data);
                    console.log(posts);
                        $.each(posts, function(key1){
						$('#community-news-list').append(
                            '<div class="community-item-block">\
                                <img height="40" width="40" class="rounded-circle" src="'+posts[key1].avatar+'" alt="">\
                                <div class="community-right-block">\
                                    <span class="community-text-1">'+posts[key1].author+'</span>\
                                    <span class="community-text-2">'+posts[key1].date+'</span>\
                                    <div class="community-text-3">'+posts[key1].postHeader+'</div>\
                                    <div class="video-published-block">\
                                        <img height="117.83px" width="210px" src="'+posts[key1].postImage+'">\
                                        <div class="video-published-text-container">\
                                            <div class="community-text-3">'+posts[key1].postContent+'</div>\
                                        </div>\
                                    </div>\
                                    <img width="16px" height="16px" src="../../assets/main/like-svg.svg">\
                                    <span class="community-text-2" style="margin-right: 8px; margin-left: 8px;">'+posts[key1].likesNum+' </span><img width="16px" height="16px" style="margin-right: 16px" src="../../assets/main/dislike-svg.svg">\
                                    <img width="16px" height="16px" src="../../assets/main/comment-svg.svg">\
                                    <span class="community-text-2" style="margin-left: 8px; color: #030303">'+posts[key1].commentaries+'</span>\
                                </div>\
                            </div>'
                        );
                        });

                }
            });
    }


    function loadFollowingChannels() {
            jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
					'subscribedChannels' : 'subscribedChannels'
                },
                success: function(data){
                    console.log(data);
                    subscribedChannels = JSON.parse(data);
                    console.log(subscribedChannels);
                        $.each(subscribedChannels, function(key1){
						$('#subscribed-channels-list').append(
                            '<div class="wrap-2">\
                                <img height="103" width="103" class="rounded-circle" src="'+subscribedChannels[key1].subAvatar+'" alt="">\
                                <div class="channel-card-title">'+subscribedChannels[key1].title+'</div>\
                                <div class="box-video-channel">'+subscribedChannels[key1].subNumber+'</div>\
                                <button>ПОДПИСАТЬСЯ</button>\
                            </div>'
                        );
                        });

                }
            });
    }

    function loadAboutChannel() {
        jQuery.ajax({
                    type: 'POST',
                    url: 'requests.php',
                    data:{
                        'userChannelHeader' : 'userChannelHeader'
                    },
                    success: function(data){
                        console.log(data);
                        userChannelInfo = JSON.parse(data);
                        console.log(userChannelInfo);
                            $.each(userChannelInfo, function(key1){
                            $('#about-channel-info').append(
                                '<div class="description-block">\
                                        <div class="about-channel-tab-desciprtion-text">Описание</div>\
                                        <div class="about-channel-text-1">'+userChannelInfo[key1].description+'</div>\
                                <hr>\
                                <div class="links-text-style">Ссылки</div>\
                                <div class="flex-container-links">\
                                    <div class="social-networks-1">\
                                        <a href="#">Instagram</a>\
                                        <a href="#">Spotify</a>\
                                        <a href="#">Website</a>\
                                        <a href="#">Soundcloud</a>\
                                        <a href="#">Vevo</a>\
                                    </div>\
                                    <div class="social-networks-2">\
                                        <a href="#">Apple Music</a>\
                                        <a href="#">Twitter</a>\
                                        <a href="#">Facebook</a>\
                                        <a href="#">TikTok</a>\
                                        <a href="#">Sam Smith Complete Playlist</a>\
                                    </div>\
                                    </div>\
                                    <hr>\
                                    </div>\
                                    <div class="statistics-block">\
                                        <div class="about-channel-tab-statistics-text">Статистика</div>\
                                        <hr>\
                                        <div class="about-channel-text-2">Дата регистрации: '+userChannelInfo[key1].dateCreate+'.</div>\
                                        <hr>\
                                        <div class="about-channel-text-2">'+userChannelInfo[key1].totalViews+'</div>\
                                    </div>');
                            });
                    }
                });
    }

    loadUserChannelHeader();
    loadChannelHeadVideo();

    listUserVideos1();
    listUserVideos2();
    loadChannelAlbums();

    loadUploadedVideos();

    loadChannelPlaylist();
    loadChannelAlbums2();

    loadPosts();

    loadFollowingChannels();

    loadAboutChannel();

	</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
