<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinmukhammed</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
      body{
    font-size:15px;
    font-family: 'night_still_comesregular';
    color:#8f8f8f;
    margin: 0 auto;
    background-color: #efefef;
}
.header {
    min-height: 600px;
    height: 600px;
    width: 100%;
    background-image: url(eban1.png);
    background-size: cover;
    color: white;
    background-repeat: no-repeat;
    background-position: center;
    margin-top: 0;

}
h1,h2,h3,h4,h5{padding:0;margin:0;}
a,a:hover{
    text-decoration:none;
}
.header h3{
	font-size: 45px;
	letter-spacing: 18px;
	font-family: 'Lato', sans-serif;
	text-transform: uppercase;
}
.header p
{
    font-size:18px;
    font-family: 'night_still_comesregular';
    letter-spacing:1px;
}
.hhh{
   text-align:center;
   padding-top: 200px;
   color:#fff;
}
.container{
    margin-top: 100px;
}
.row{
    margin-top: 150px;
}

.info-img {
    position: relative;
    top: -100px;
    right: -100px;
}
.shad {
    position: absolute;
    top: 70px;
    left: -90px;
}
#img1{
    position: absolute;
}
img {
    max-width: 369px;
    max-height: 518px;
}
.row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 0 4px;
    margin-top: 250px;
  }
  .close {
    cursor: pointer;
    position: absolute;
    top: 40px;
    color: white;
    right: 40px;
    font-size: 25px;
    width: 30px;
    height: 30px;

  }
  .bari {
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    max-width: 1519px;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.425);
    justify-content: center;

  }
.post1 {
  width: 369px;
   height: 518px;
   background-color: white;
   position: absolute;
   top: 20%;
   padding: 20px 20px;
   font-size: 20px;
}
  
  .column {
    flex: 60%;
    padding: 0 4px;
    
  }
  
  .column img {
    margin-top: 400px;
    vertical-align: middle;
    margin-left: 180px;
  }
  .img1{
      position: absolute;
      top: 1100px;
      
  }
  .img2{
      position: absolute;
      top: 970px;
      left: 375px;
  }
  .img3{
      position: absolute;
      top: 970px;
      left: 760px;
  }
  .img4{
      position: absolute;
      top: 1635px;
     
  }
  .img5{
      position: absolute;
      top: 1500px;
      left: 375px;
  }
  .img6{
    position: absolute;
    top: 1500px;
      left: 760px;
}
.img7{
    position: absolute;
    top: 6000px;
      left: 600px;
}
.textt{
    position: absolute;
    width: 350px;
    left: 180px;
    top: 1360px;
}
h3{
    font-size: 30px;
}
footer{
    color: rgb(255, 255, 255);
    margin: 0;
    padding: 0;
    top: 2800px;
    position: absolute;
    width: 100%;
    background: #363535;
    margin-top: 0px;
    
  }
   .form-control{
     background-color: gray;
   }
  .main-content{
    display: flex;
  }
  .main-content .box{
    flex-basis: 50%;
    padding: 10px 20px;
  }
  .box .contentx{
    margin:   20px 0 0 0;
  }
  .social-med a span{
    height: 40px;
    width: 40px;
    background: grey;
    line-height: 40px;
    text-align: center;
    font-size: 18px;
    color:white;
  }
  .main img {
    -moz-transition: all 1s ease-out;
    -o-transition: all 1s ease-out;
    -webkit-transition: all 1s ease-out;
  }
    
  .main img:hover{
    -webkit-transform: scale(1.04);
    -moz-transform: scale(1.04);
    -o-transform: scale(1.04);
  }
  .main {
    overflow:hidden;
  }
  #img1:hover {
    box-shadow:
    1px 1px #8f8f8f,
    2px 2px #8f8f8f,
    3px 3px #8f8f8f,
    4px 4px #8f8f8f,
    5px 5px #8f8f8f,
    6px 6px #8f8f8f,
    7px 7px #8f8f8f;
    -webkit-transform: translateX(-7px);
    transform: translateX(-7px);
  }
  .img11, .img22, .img33, .img44, .img55, .img66{
    position: absolute;
    top: 0px;

  }    
  @media(max-width: 700px){
    
      .header h3{
        font-size: 30px;
        letter-spacing: 18px;
        font-family: 'Lato', sans-serif;
        text-transform: uppercase;
      }
      .header p
      {
          font-size:15px;
          font-family: 'night_still_comesregular';
          letter-spacing:1px;
      }
      .container {
        margin-top: -150px;
      }
      .info-img {
        margin-top: 100px;
      }
      .main {
        display: block;

      }
      .column {
        flex: 60%;
        padding: 0 4px;
        height: 1500px;
        
      }
      
      .column img {
        margin-top: 400px;
        vertical-align: middle;
        margin-left: 180px;
      }
      .img1{
          position: absolute;
          top: 1300px;
          left: -100px;
          
      }
      .img2{
          position: relative;
          top: 1850px;
          left: -100px;
      }
      .img3{
          position: relative;
          top: 2400px;
          left: -100px;
      }
      .img4{
          position: relative;
          top: 2950px;
          left: -100px;
      }
      .img5{
          position: relative;
          top: 3500px;
          left: -100px;
      }
      .img6{
        position: relative;
        top: 4050px;
          left: -100px;
      }
      .img7{
        position: relative;
        top: 4600px;
          left: -100px;
      }
          
      .textt{
        position: relative;
        width: 350px;
        left: 0px;
        top: 250px;
      }
      footer{
        color: rgb(255, 255, 255);
        margin: 0;
        padding: 0;
        top: 700px;
        position: relative;
        width: 100%;
        background: #363535;
        
      }
  }
    </style>
</head>
<body>
    <div class="header">
        <div class="hhh">
            <h3>Dinmukhammed Yerzhanov</h3>
            <p>This is my portfolio for a bonus project</p>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 info">
                <h2>Hello</h2>
                <h3>I'm Dinmukhammed</h3>
                <p class="details">My name is Dinmukhammed. I was born and live in the city of Shymkent. 
                    Now I am studying at the SDU University. By profession a programmer. 
                    In my free time I like to play sports. 
                    I really love sports, especially swimming, crossfit, freestyle wrestling and arm wrestling. Also, I like to play computer games. 
                    All this is my hobby. Sometimes I read books, develop my creativity. For example, vocals, learning to play the guitar, developing diction.. 
                </p>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="info-img">
                    
                    <div class="shad" style="width: 351px; height: 468px; border: 3px solid #8f8f8f;"></div>
                    <img src="1.jpg" height="468px" id="img1" />
                    
                    
                </div>	
            </div>
        </div>
    </div>
    <div class="main">
      <div class="row">
        <div class="textt">
            <h3>Portfolio</h3>
            <p>This is my bonus portfolio. I would like to show you a photo from my life!</p>
        </div>
        <div class="column" >
          <div class="img11" onclick="show_hide1()" style="width: 369px; height: 518px;">
             <img class="img1" src="2.jpg" width="369px" height="518px" >
          </div>
          <div class="img22" onclick="show_hide2()" style="width: 369px; height: 518px;">
            <img class="img2" src="3.jpg" width="369px" height="518px" >
          </div>
          <div class="img33" onclick="show_hide3()" style="width: 369px; height: 518px;">
            <img class="img3" src="4.jpg" width="369px" height="518px">
          </div>
         <div class="img44" onclick="show_hide4()" style="width: 369px; height: 518px;">
           <img class="img4" src="5.jpg" width="369px" height="518px">
         </div>
                 
       </div>
        <div class="column">
          <div class="img55" onclick="show_hide5()" style="width: 369px; height: 518px;">
             <img class="img5" src="7.jpg" width="369px" height="518px">
          </div>
         <div class="img66" onclick="show_hide6()" style="width: 369px; height: 518px;">
           <img class="img6" src="8.jpg" width="369px" height="518px">
         </div>
          
         
        </div>
    </div>
    </div>
    <div class="bari" id="open1">
      <span onclick="document.getElementById('open1').style.display='none'" class="close" title="Close Modal">X</span>
      <div class="post1">
        <span>My name is Dinmukhammed. I was born and live in the city of Shymkent. Now I am studying at the SDU University. By profession a programmer. In my free time I like to play sports. I really love sports, especially swimming, crossfit, freestyle wrestling and arm wrestling. Also, I like to play computer games. All this is my hobby. Sometimes I read books, develop my creativity. For example, vocals, learning to play the guitar, developing diction..</span>
      </div>
    </div>
    <div class="bari" id="open2">
      <span onclick="document.getElementById('open2').style.display='none'" class="close" title="Close Modal">X</span>
      <div class="post1">
        <span>My name is Dinmukhammed. I was born and live in the city of Shymkent. Now I am studying at the SDU University. By profession a programmer. In my free time I like to play sports. I really love sports, especially swimming, crossfit, freestyle wrestling and arm wrestling. Also, I like to play computer games. All this is my hobby. Sometimes I read books, develop my creativity. For example, vocals, learning to play the guitar, developing diction..</span>
      </div>
    </div>
    <div class="bari" id="open3">
      <span onclick="document.getElementById('open3').style.display='none'" class="close" title="Close Modal">X</span>
      <div class="post1">
        <span>My name is Dinmukhammed. I was born and live in the city of Shymkent. Now I am studying at the SDU University. By profession a programmer. In my free time I like to play sports. I really love sports, especially swimming, crossfit, freestyle wrestling and arm wrestling. Also, I like to play computer games. All this is my hobby. Sometimes I read books, develop my creativity. For example, vocals, learning to play the guitar, developing diction..</span>
      </div>
    </div>
    <div class="bari" id="open4">
      <span onclick="document.getElementById('open4').style.display='none'" class="close" title="Close Modal">X</span>
      <div class="post1">
        <span>My name is Dinmukhammed. I was born and live in the city of Shymkent. Now I am studying at the SDU University. By profession a programmer. In my free time I like to play sports. I really love sports, especially swimming, crossfit, freestyle wrestling and arm wrestling. Also, I like to play computer games. All this is my hobby. Sometimes I read books, develop my creativity. For example, vocals, learning to play the guitar, developing diction..</span>
      </div>
    </div>
    <div class="bari" id="open5">
      <span onclick="document.getElementById('open5').style.display='none'" class="close" title="Close Modal">X</span>
      <div class="post1">
        <span>My name is Dinmukhammed. I was born and live in the city of Shymkent. Now I am studying at the SDU University. By profession a programmer. In my free time I like to play sports. I really love sports, especially swimming, crossfit, freestyle wrestling and arm wrestling. Also, I like to play computer games. All this is my hobby. Sometimes I read books, develop my creativity. For example, vocals, learning to play the guitar, developing diction..</span>
      </div>
    </div>
    <div class="bari" id="open6">
      <span onclick="document.getElementById('open6').style.display='none'" class="close" title="Close Modal">X</span>
      <div class="post1">
        <span>My name is Dinmukhammed. I was born and live in the city of Shymkent. Now I am studying at the SDU University. By profession a programmer. In my free time I like to play sports. I really love sports, especially swimming, crossfit, freestyle wrestling and arm wrestling. Also, I like to play computer games. All this is my hobby. Sometimes I read books, develop my creativity. For example, vocals, learning to play the guitar, developing diction..</span>
      </div>
    </div>
    <footer>
        <div class="main-content">
          <div class="left box">
            <div class="social-med">
              <a href="#"><span class="fab fa-facebook"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
              <h6><br>Создатель: Dinmukhammed Yerzhanov</h6>
              <p>Battle Breakers<br>Shadow Complex<br>Fortnite<br>Infinity Blade<br>Robo Recall</p>
            </div>
          </div> 
        <div class="center box">
          <h2>Address</h2>
          <div class="contentx">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Kazakhstan, Almaty</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+7(707)-707-77-77</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">angel@gmail.com</span>
            </div>
          </div>
        </div>
          <div class="right box">
        <h2>Contact us</h2> 
        <div class="contentx">
            <div class="input-group margin-bottom-sm">
              <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
              <input class="form-control" id="inputt" type="text" placeholder="Email address">
            </div>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
              <input class="form-control" id="inputt" type="password" placeholder="Password">
            </div>
            
          </form>
         </div> 
        </div> 
        </div>
        </footer>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script>
         function show_hide1() {
            var click = document.getElementById("open1");
            if(click.style.display==="none"){
                click.style.display = "flex";
            }else {
                click.style.display="none" ;   
            }
            $("#log").fadeout(2000).fadein(2000);
        }
        function show_hide2() {
            var click = document.getElementById("open2");
            if(click.style.display==="none"){
                click.style.display = "flex";
            }else {
                click.style.display="none" ;   
            }
            $("#log").fadeout(2000).fadein(2000);
        }
        function show_hide3() {
            var click = document.getElementById("open3");
            if(click.style.display==="none"){
                click.style.display = "flex";
            }else {
                click.style.display="none" ;   
            }
            $("#log").fadeout(2000).fadein(2000);
        }
        function show_hide4() {
            var click = document.getElementById("open4");
            if(click.style.display==="none"){
                click.style.display = "flex";
            }else {
                click.style.display="none" ;   
            }
            $("#log").fadeout(2000).fadein(2000);
        }
        function show_hide5() {
            var click = document.getElementById("open5");
            if(click.style.display==="none"){
                click.style.display = "flex";
            }else {
                click.style.display="none" ;   
            }
            $("#log").fadeout(2000).fadein(2000);
        }
        function show_hide6() {
            var click = document.getElementById("open6");
            if(click.style.display==="none"){
                click.style.display = "flex";
            }else {
                click.style.display="none" ;   
            }
            $("#log").fadeout(2000).fadein(2000);
        }
        </script>
</body>
</html>