<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Page</title>
    <!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/personalpage.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"> 
</head>
<body>
<!-- Header Section Begin -->
{{-- @include("layouts.frontend.header") --}}
<!-- Header End -->
    <div class="page"> 
        <div class="row profile">        
            <div class="col-md-3">          
                <div class="profile-sidebar">                          
                    <div class="profile-userpic"><img src="https://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_user_profile/images/profile_user.jpg" class="img-responsive" alt="Thông tin cá nhân"> 
                </div>                                            
                <div class="profile-usertitle">                   
                    <div class="profile-usertitle-name">HocwebGiare</div>                  
                    <div class="profile-usertitle-job">Web Developer</div>              
                </div>                                                
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-success btn-sm">
                        <a href="{{URL("/")}}">
                            Trang chủ     
                        </a>
                    </button>                  
                    <button type="button" class="btn btn-danger btn-sm">
                        <a href="{{route('auth.logout')}}">Thoát ra</a> 
                    </button>                
                </div>                                            
                <div class="profile-usermenu">                    
                    <ul class="nav">    
                        <li class="active">
                            <a href="https://hocwebgiare.com/">
                            <i class="glyphicon glyphicon-info-sign"></i>Cập nhật thông tin cá nhân 
                            </a>                     
                        </li>                       
                        <li>
                            <a href="https://hocwebgiare.com/">
                            <i class="glyphicon glyphicon-heart"></i>Sản phẩm yêu thích 
                            </a>                     
                        </li>                       
                        <li>
                            <a href="https://hocwebgiare.com/" target="_blank">                         
                            <i class="glyphicon glyphicon-shopping-cart"></i>Quản lý đơn hàng 
                            </a>                       
                        </li>                       
                        <li>
                            <a href="https://hocwebgiare.com/">                         
                            <i class="glyphicon glyphicon-envelope"></i>Tin nhắn 
                            </a>                       
                        </li>                   
                    </ul>                
                </div>                            
            </div>     
        </div>      
        <div class="col-md-9"> 
            <div class="profile-content"> Chào mừng Bạn đến với website hocwebgiare.com </div>     
        </div>  
        </div>
    </div> 
<!-- Footer -->
{{-- @include("layouts.frontend.footer") --}}
<!-- Footer End -->
</body>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</html>