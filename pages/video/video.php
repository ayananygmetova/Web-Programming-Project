<html lang="en">
 <head>
    <title>KBTUtube</title>
    <link rel="stylesheet" href="video.css"> 
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="../../style.css">
    <script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
                     <img class="mx-2" src="../../assets/core/header/search.svg" alt="">
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
    <section class="video_details">
       <div id="video_info_details">
         
      </div>
      <div id="comments">
         <div class="d-flex align-items-center">
            <div><span>132 201 комментария</span></div>
         </div>
         <div id="my_comment">
            <img height="36" width="36" class="rounded-circle" src="../../assets/core/header/profile_photo.jpg" alt="">
            <form name="comment" method="post" class="form_comment" id="form_in_comment">
               <input type="text" class="in_comment" id="comment_input">
            </form>
         </div>
         <div id="list_comments"></div>
         
      </div>
    </section>
    <section class="similar">
      
      <div id="other_sim_videos"></div>

      
</section>
   </body>
    <footer>

    </footer>
  </body>
  </html>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
   function listComments()
        {
         const urlParams = new URLSearchParams(window.location.search);
            jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
					'get_comments' : 'get_comments',
               'video_id': urlParams.get('video_id')
                },
                success: function(data){
                    commentList = JSON.parse(data);
                        $.each(commentList, function(key1){
						$('#list_comments').append(
                     '<div class="d-flex comment">\
                     <img height="36" width="36" class="rounded-circle" src="../../assets/core/header/profile_photo.jpg" alt="">\
                     <div class="channel_info">\
                     <div class="d-flex align-items-center">\
                   <div><span class="name ">'+commentList[key1].fio+'</span></div>\
                   <div><img src="../../assets/core/common/verification.svg" alt=""></div>\
                   <div><span class="time_posted">'+commentList[key1].date_created+'</span></div>\
                </div>\
               <div>\
                  <span>'+commentList[key1].comment_text+'</span>\
               </div>\
               <div class="d-flex align-items-center comment_actions">\
               </div>\
             </div>\
         </div>'

                  );
                  });

                }
            });
        }



   $("#form_in_comment").submit(function() {
      console.log(document.getElementById('comment_input').value);
      const urlParams = new URLSearchParams(window.location.search);
      jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
                  'create_comments' : 'create_comments',
                  'comments_text': document.getElementById('comment_input').value,
                  'video_id': urlParams.get('video_id')
                },
                success: function(data){
                     $('#comment_input').val('');
                    console.log(data);
                    listComments();

                  }
               })


    return false;
   });

   
        listComments();
        function set_likes(video_id, is_liked){
         const urlParams = new URLSearchParams(window.location.search);
      jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
                  'set_likes' : 'set_likes',
                  'is_liked': is_liked,
                  'video_id': urlParams.get('video_id')
                },
                success: function(data){
                    console.log(data);
                    videoDetails();
                  }
               })
   }
   function set_dislikes(video_id, is_disliked){
         const urlParams = new URLSearchParams(window.location.search);
      jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
                  'set_dislikes' : 'set_dislikes',
                  'is_disliked': is_disliked,
                  'video_id': urlParams.get('video_id')
                },
                success: function(data){
                    console.log(data);
                    videoDetails();
                  }
               })
   }


   const urlParams = new URLSearchParams(window.location.search);
      function videoDetails()
        {
         const urlParams = new URLSearchParams(window.location.search);
            jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
					'video_details' : 'video_details',
               'video_id': urlParams.get('video_id')
                },
                success: function(data){
                    userVideoList = JSON.parse(data);
                    console.log(urlParams.get('video_id'));
                    
                    $('#video_info_details').val('')
                        $.each(userVideoList, function(key1){
						$('#video_info_details').html(
                     
                     '<iframe class="video_playing" src="'+userVideoList[key1].video_url+'"\
                     frameborder="0" allowfullscreen></iframe>\
         <div class="video_info">\
            <p class="align-items-end"><a class="hashtags" href="">#SamSmith</a> <a class="hashtags" href="">#ImNotTheOnlyOne</a></p>\
            <p class="title">'+userVideoList[key1].video_title+'</p>\
            <div>\
               <div class="d-flex feedback">\
                  <div class="d-flex">\
                     <span>1 403 808 867 просм.</span>\
                     <span> · </span>\
                     <span>'+userVideoList[key1].date_created+'г.</span>\
                  </div>\
                  <div class="d-flex actions">\
                     <div class="d-flex align-items-center act"><img src="../../assets/core/common/like.svg" alt="" onclick="set_likes('+userVideoList[key1].id+', '+userVideoList[key1].is_liked+')">'+userVideoList[key1].likes_num+'</div>\
                     <div class="d-flex align-items-center act"><img src="../../assets/core/common/dislike.svg" alt="" onclick="set_dislikes('+userVideoList[key1].id+', '+userVideoList[key1].is_disliked+')">'+userVideoList[key1].dislikes_num+'</div>\
                     <div class="d-flex align-items-center act"><img src="../../assets/core/common/share.svg" alt="">ПОДЕЛИТЬСЯ</div>\
                     <div class="d-flex align-items-center act"><img src="../../assets/core/common/save.svg" alt="">СОХРАНИТЬ</div>\
                     <div class="d-flex align-items-center act"><img src="../../assets/core/common/extra.svg" alt=""></div>\
                  </div>\
               </div>\
            </div>\
         </div>\
         <div class="info">\
            <div class="d-flex align-items-center bd-highlight">\
                  <div class="d-flex p-2 w-100 bd-highlight user">\
                     <div>\
                        <img height="36" width="36" class="rounded-circle" src="../../assets/core/header/profile_photo.jpg" alt="">\
                     </div>\
                     <div class="user_info">\
                        <div><span class="username">'+userVideoList[key1].fio+'</span></div>\
                     </div>\
                  </div>\
                  <div class="p-2 flex-shrink-1 bd-highlight">\
                  </div>\
            </div>\
            <div class="description">\
               <div><span>'+userVideoList[key1].video_description+'</span></div>\
            </div>\
         </div>' );
                  });

                }
            });
        }
        videoDetails();
      function listUserVideos()
        {
           const urlParams = new URLSearchParams(window.location.search);
           
            jQuery.ajax({
                type: 'POST',
                url: 'requests.php',
                data:{
					'other_videos' : 'other_videos',
               'video_id': urlParams.get('video_id')
                },
                success: function(data){
                    userVideoList = JSON.parse(data);
                        $.each(userVideoList, function(key1){
						$('#other_sim_videos').append(
                     '<div class="d-flex"> \
                     <div>\
                     <iframe width="168" height="90" src="'+userVideoList[key1].video_url+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>\
                     </div>\
                     <a href="video.php?video_id='+userVideoList[key1].id+'">\
                     <div class="video_short_info">\
                        <span class="video_name">'+userVideoList[key1].video_title+'</span>\
                        <span class="little_text">SAM SMITH</span>\
                        <span class="little_text v" >1,1 млрд просмотров</span>\
                           <span class="little_text v" >·</span>\
                           <span class="little_text v" >'+userVideoList[key1].date_created+'</span>\
                     </div>\
                     <\a>\
                     </div>'   

                  );
                  });

                }
            });
        }
        listUserVideos();
   

</script>
