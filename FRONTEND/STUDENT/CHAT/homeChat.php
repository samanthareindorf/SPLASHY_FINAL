 
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Chat Page</title>
        <!--links for chat--> 

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
          <script src="homeChat.js"></script>
          <link rel="stylesheet" href="homeChat.css">
   </head>
   <body>
              <!--chat section--> 
	<!--Coded With Love By Mutiullah Samim-->
  <!--left-side of chat-->
  <div class="container-fluid h-100 ">
                    <div class="row justify-content-center h-100">
                      <div class="col-md-3 col-xl-4 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
                        <div class="card-header bg-danger">
                          <div class="input-group">
                            <input type="text" placeholder="Search..." name="" class="form-control search">
                            <div class="input-group-prepend">
                              <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="card-body contacts_body bg-dark">
                          <ui class="contacts">
                          <li class="active">
                            <div class="d-flex bd-highlight">
                              <div class="img_cont">
                                <img src="" class="rounded-circle user_img">
                                <span class="online_icon"></span>
                              </div>
                              <div class="user_info">
                                <span>uSER 1</span>
                                <p>User 1 is online</p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex bd-highlight">
                              <div class="img_cont">
                                <img src="" class="rounded-circle user_img">
                                <span class="online_icon offline"></span>
                              </div>
                              <div class="user_info">
                                <span>User 2</span>
                                <p>User 2 is online</p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex bd-highlight">
                              <div class="img_cont">
                                <img src="" class="rounded-circle user_img">
                                <span class="online_icon"></span>
                              </div>
                              <div class="user_info">
                                <span>User 3</span>
                                <p>User 3 is online</p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex bd-highlight">
                              <div class="img_cont">
                                <img src="" class="rounded-circle user_img">
                                <span class="online_icon offline"></span>
                              </div>
                              <div class="user_info">
                                <span>User 4</span>
                                <p>User 4 left 30 mins ago</p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex bd-highlight">
                              <div class="img_cont">
                                <img src="" class="rounded-circle user_img">
                                <span class="online_icon offline"></span>
                              </div>
                              <div class="user_info">
                                <span>User 5</span>
                                <p>User 5 left 50 mins ago</p>
                              </div>
                            </div>
                          </li>
                          </ui>
                        </div>
                        <div class="card-footer bg-danger"></div>
                      </div></div>
				

				<!--for the chat itself-->
        <!-- <div class="chatItself"> -->
				<div class="col-md-4 col-xl-6 chat">
					<div class="card text-dark bg-dark">
						<div class="card-header msg_head bg-danger">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Chat with User</span>
									<p>Count  Messages</p>
								</div>
								<div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span>
                  <span><i class='fas fa-user-plus'></i></span>

								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>
						<div class="card-body msg_card_body">
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<!--sender image-->
									<img src="" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									Hi, how are you user?
									<span class="msg_time">8:40 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Hi user2 you good?
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
							<img src="" class="rounded-circle user_img_msg">
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<!--sender image-->
								<div class="img_cont_msg">
									<img src="" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									I am good too, user 2
									<span class="msg_time">9:00 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									You are welcome user1
									<span class="msg_time_send">9:05 AM, Today</span>
								</div>
								<div class="img_cont_msg">
							<img src="" class="rounded-circle user_img_msg">
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<!--seder image-->
									<img src="" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									user2 any assignments?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Ok, thank you have a good day
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
						<img src="" class="rounded-circle user_img_msg">
								</div>
							</div>
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									Bye, see you
									<span class="msg_time">9:12 AM, Today</span>
								</div>
							</div>
						</div>
						<div class="card-footer bg-danger">
							<div class="input-group">
								<div class="input-group-append">
									<span id="attach_menu_btn" class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                                     <div class="attach_menu"> <!--previously action_menu-->
								<ul>
									<li><i class='far fa-file-image'></i>Image</li>
									<li><i class='fa fa-video-camera'></i>Video</li>
									<li><i class='fas fa-file-alt'></i> Document</li>
									<li><i class='fas fa-headphones'></i> Audio</li>
								</ul>
							</div>
								</div>
								<textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
								<div class="input-group-append">
									<span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
    <!-- </div> -->
			</div>
		</div><br>
	
        <!--buttons to go to previous page-->
        <button id="prev" onclick="previous()" type="button" class="btn btn-primary"><i class='fas fa-angle-left'></i>Previous</button>


       
   </body>
   </html>
   
  


       
       
       
       
       
     