<!DOCTYPE html>
<html>
<head>
<title>Hobby App</title>
<link rel  = "stylesheet" href  = "/css/bootstrap.min.css"/>
<link rel  = "stylesheet" href  = "/css/style.css"/>
<link rel = "stylesheet" href = "/font-awesome/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="/slick/slick/slick.css"/>
</head>
<style>
body{
    background-image:url(/img/colour-4.jpg);
    width:100%;

}
</style>
<body>
    <nav class = "navbar navbar-default">
        <div class = "navbar-header">
            <a class = "navbar-brand" href = "">HobbyApp</a>
        </div>
        <ul class = "nav navbar-nav navbar-right">
            <li class = "wel-message">Welcome {{ ucwords(Auth::user()->username)}}!</li>
            <li class = "dropdown"><a href = "" class = "dropdown-toggle wel-icon" data-toggle = "dropdown"><i class = "fa fa-user" arial-hidden = "true"></i></a>
                <div class = "dropdown-menu pull-left" style = "width:250px;margin-top:3px;">
                    <div class = "col-lg-12">
                        <div class = "col-xs-4">
                            <p class = "user-letter">{{ ucwords(Auth::user()->username[0]) }}</p>
                        </div>
                        <div class = "col-xs-8" style = "padding-left:0px;">
                            <p class = "user-name">{{ Auth::user()->username}}</p>
                            <p class = "user-email">{{Auth::user()->email}}</p>
                        </div>
                        <a  href = "/logout" class = "btn btn-success" type = "button" name = "logout" style = "margin-bottom: 10px;">Log Out</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <div class = "hobby-slideshow">
        <div class = "slideshow">
            <img class = "img-responsive" src = "/img/read.jpg"/>
            <h1 style = "">I LOVE READING</h1>
        </div>
        <div class  ="slideshow text-center">
            <img class = "img-responsive" src = "/img/movies.jpg"/>
            <h1>I LOVE WATCHING<br/> MOVIES</h1>
        </div>
        <div  class  ="slideshow">
            <img class = "img-responsive" src = "/img/swim.jpg"/>
            <h1>I LOVE SWIMMING</h1>
        </div>
    </div>
    <div class="container">
          <h3 style = "color:white;">Hobbies:</h3>
          <div class= "content">
             <table class = "table table-responsive table-hover">
                @if(empty($user_hobbies))
                    <h5 class="text-center" style="font-size:36px;padding-top:40px;">No Hobbies added yet</h5>
                @else
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Hobbies</th>
                        <th>Date Posted</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($user_hobbies as $hobbies)
                        <tr>
                            <td>{{++$sn}}</td>
                            <td>{{$hobbies->hobby}}</td>
                            <td>Posted on : {{\Carbon\Carbon::parse($hobbies->created_at)->format('d F Y h:i A')}}</td>
                        </tr>
                    @endforeach
                </tbody>
                @endif
            </table>
        </div>
   
    <form role = "form" action = "{{URL('/add')}}" method = "POST" style = "margin-left:20px;">
        {{ csrf_field() }}
        <label for="hobby" style = "color:green;">Add hobby:</label>
        <input type = "text" class ="form-control" id = "search" name = "new_hobby">
        <button class = "btn btn-success" type = "submit" id = "save" name = "submit">SAVE</button>
    </form>
    </div>
    <div class = "container-fluid" style = "padding-left:0px;padding-right:0px;margin-top:34px;color:white;">
        <div class = "footer" style = "background-color:#282C35;background-color: rgb(123, 22, 38);border-top: 2px solid;">
            <div class = "row" style = "margin-right:0px;margin-left:0px;">
                <div class = "col-md-6">
                    <div class = "about">
                        <h3>About HobbyApp</h3>
                        <p>HobbyApp is a simple website that allows a user to Login,Sign Up and upload his or her Hobbies.<br/>When the user upload's his or her Hobbies a test message and an email is sent to the user as a notification.It is a simple test that is given to students or Intern that are beginners when it comes to web development</p>
                    </div>
                </div>
                <div class = "col-md-6">
                    <h3>Contact</h3>
                    <p>Email-Address:adummy598@gmail.com</p>
                    <p>Phone-Number:08108667183</p>
                    <div class = "social-icons">
                        <a href = ""><img class = "img-responsive" alt = "Facebook" src = "/img/facebook.png"/></a>
                        <a href = "https://twitter.com/_Eduvin"><img class = "img-responsive" alt = "twitter" src = "/img/twitter.png"/></a>
                        <a href = ""><img class = "img-responsive" alt = "whatsapp" src = "/img/whatsapp.png"/></a>
                        <a href = ""><img class = "img-responsive" alt = "skype" src = "/img/skype.png"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src = "/js/jquery.min.js"></script>
<script>
    $(function(){
        $('.hobby-slideshow').slick({
            arrows:false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            infinite: true,
            speed: 1500,
            fade: true,
            cssEase: 'linear'
            
        });
    });
</script>
<script type="text/javascript" src="/slick/slick/slick.min.js"></script>
<script src = "/js/bootstrap.min.js"></script>

</body>
</html>