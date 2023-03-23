<?php
	$conn=mysqli_connect("localhost","root","","myDB");
	if(!$conn)
		echo "Connection failed";
	$sql1="create table if not exists announcements(announce text);";
	mysqli_query($conn,$sql1);
	$sql="Select * from announcements ";
	$result1 = mysqli_query($conn,$sql);
	
	$sql2="create table if not exists notifications(notify text);";
	mysqli_query($conn,$sql2);
	$sql21="Select * from notifications ";
	$result2 = mysqli_query($conn,$sql21);
	
	$sql3="create table if not exists events(event text);";
	mysqli_query($conn,$sql3);
	$sql31="Select * from events ";
	$result3 = mysqli_query($conn,$sql31);
	
?>
<html>
    <head>
        <meta charset="utf-8">
            <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
            <title>Alumni Home</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
            
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
            <link rel="stylesheet" href="css/bootstrap.min.css"/>
                
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
            <link rel="stylesheet" href="css/mini.css">
            <style>
            *{
                margin:0;
                padding:0;
                box-sizing:border-box;
                font-family:'popins',sans-serif;
                
            }
            .section1{
            background:#000;
        }
            .section1{
            position:relative;
            width:100%;
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            overflow:hidden;
            padding:50px;
        }
            .section1 video{
                position:absolute;
            top:0;
            left:0;
            width:100%;
            height:100%;
            object-fit:cover;
            pointer-events:none;
        }
            .section1 h2{
                
            position:relative;
            color:#fff;
            font-size:3em;
        }
            .section1 p{
            position:relative;
            color:#fff;
            font-size:1em;
        }
            
            .ulclass{
                margin:0;
                padding:0;
                display:flex;
            }
            .ulclass .liclass{
                list-style:none;
                margin:0 20px;
                transition:0.5s;
            }
            .ulclass .liclass .aclass{
                display:block;
                position:relative;
                text-decoration:none;
                padding:5px;
                font-size:18px;
                font-family:sans-serif;
                color:#fff;
                text-transform:uppercase;
                transition:0.5s;
            }
            .ulclass:hover .liclass .aclass{
                opacity:.2;
                transform:scale(1);
                filter:blur(5px);
            }
            .ulclass .liclass .aclass:hover{
                opacity:1;
                transform:scale(1.5);
                filter:blur(0);
            }
            .ulclass .liclass .aclass:before{
                content:'';
                position:absolute;
                top:0;
                left:0;
                width:100%;
                height:100%;
                background:#ff497c;
                transition:transform:0.5s;
                transform-origin:right;
                transform:scaleX(0);
                z-index:-1;
            }
            .ulclass .liclass .aclass:hover:before{
                transition:transform:0.5s;
                transform-origin:left;
                transform:scaleX(1);
            }
            
            
            .section11{
                 position:absolute;
              display:flex;
                 width:90%;
                 height:100%;
                 border:2px solid #000;
                 align-items:center;
             }
             
             .section11 .slide1{
                 position:relative;
                 height:100%;
                 flex:1;
                 border-right:2px solid #000;
                 overflow:hidden;
                 transition:0.5s ease-in-out;
             }
             .section11 .slide1:last-child{
                 border-right:none;
             }
             .section11 .slide1:hover{
                 flex-grow:5;
             }
             .section11 .slide1:nth-child(1){
                 background:url('img/al6.jpg');
                 background-position: center center;
                 background-repeat: no-repeat;
                 background-size: cover;
             }
             .section11 .slide1:nth-child(2){
                 background:url('img/al2.jpg');
                 background-position: center center;
                 background-repeat: no-repeat;
                 background-size: cover;
             }
             .section11 .slide1:nth-child(3){
                 background:url('img/al3.jpg');
                 background-position: center center;
                 background-repeat: no-repeat;
                 background-size: cover;
             }
            .section11 .slide1:nth-child(4){
                background:url('img/al4.jpg');
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }
             .section11 .slide1 .content1{
                 position:absolute;
                 bottom:0;
                 margin:40px;
                 padding:30px;
                 background:#000;
                 color:#fff;
                 visibility:hidden;
                 opacity:0;
                 transition:0s;
                 transform:translateY(100px);
             }
             
             .section11 .slide1:hover .content1{
                 visibility:visible;
                 opacity:1;
                 transition:0.5s;
                 transition-delay:0.5s;
                 transform:translateY(0);
             }
             
            
            
            
            
            </style>
        </head>
    <body>
        <section class="section1">
            <video src="video/video.mp4" autoplay="" muted="" loop="">
            </video>
            </section>
        <section class="section1">
            <div class="content" >
        <h2>Alumni:</h2><br><br>
                <h5><p>Educational Institutes have a critical role in providing the students all the necessary inputs required to make them global citizens. In today’s advanced world, Institutes are more of a facilitator of knowledge than just provider of knowledge. Students need to be given all the knowledge, skills and ability so that they are able to appreciate the changes happening in the society and adapt to them. It will be my endeavor, to ensure that this institute remains always relevant.Educational Institutes have a critical role in providing the students all the necessary inputs required to make them global citizens. In today’s advanced world, Institutes are more of a facilitator of knowledge than just provider of knowledge. Students need to be given all the knowledge, skills and ability so that they are able to appreciate the changes happening in the society and adapt to them. It will be my endeavor, to ensure that this institute remains always relevant.</p>
                    <p class="float-right">-Pankaj Mohite</p></h5>
                </div>
            </section>
        
        <section>
        <div class="content" >
                <header>
                    
                    <div class="pad" >
                        <div class="container img-fluid " style="width:100%;height:auto;">
                            <div class="">
                                <div class="" style="display:flex;">
                                    <div class=""><img class=" float-right" src="img/almgif.gif" style="width:100%;height:auto;"></div>
                                    <div class="float-left mar  display-4"><strong><label class="text-center">Directorate of Technical Education, Alumni Department<br>तंत्रशिक्षण संचालनालय, माजी विद्यार्थी विभाग</label></strong></div>
                                    <div><img class="img-fluid float-right" src="img/almpost2.png" style="height:80%;width:40%"></div>
                                </div>
                                
                            
                            </div>
                        </div>
                    </div>
                </header>
                <div class="container-fluid img-fluid">
                    <div class="container">
                        <button class="btn-md btn-secondary dropdown-toggle but btn-info float-right" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i>  LOGIN  </button>
                            <ul class="navbar-nav ml-auto ulclass">
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background:#000">
                                            <li class="liclass"><a class="dropdown-item aclass" href="alumni/login.php">Alumni</a></li>
                                            <li class="liclass"><a class="dropdown-item aclass" href="admin/index.php">CLG Admin</a></li>
                                            <li class="liclass"><a class="dropdown-item aclass" href="dte/login.php">DTE Admin</a></li>
                            </div>
                        </ul>
                            <nav class="navbar-left navbar-expand-md bg-info rounded">
                                <div class="container-fluid">
                                    <ul class="navbar-nav ml-auto ulclass">
                                        <li class="nav-item liclass">
                                            <a class="nav-link text-white aclass" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item liclass">
                                            <a class="nav-link  text-white aclass" href="about.php">About Us</a>
                                        </li>
                                        <li class="nav-item liclass">
                                            <div class="dropdown show ">
                                            <a class="btn text-white dropdown-toggle nav-link  text-white aclass" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Important Links</a>
                                                <div class="dropdown-menu bg-white" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="https://mhrd.gov.in/">MHRD</a>
                                                <a class="dropdown-item" href="https://www.aicte-india.org/">AICTE</a>
                                                <a class="dropdown-item" href="http://rusa.nic.in/">RUSA</a>
                                                <a class="dropdown-item" href="https://www.maharashtra.gov.in/1125/Home">Govt. of Maharashtra</a>
                                                </div>
                                                </div>
                                                </li>
                                  </ul>
                               
                                   
                                    
                                 </div>
                                </nav>
                            <div style="display:flex;margin:.4% 0 0 0;">
                                <button class="btn btn-primary " type="submit" name="submit" style="padding:0% 1% 0% 1%" >Announcements:</button>
                                <div class="container" style="padding:0px">
                                    <marquee scrollamount=10 class="text-danger font-weight-bolder">
									<?php
                                        while($res=mysqli_fetch_array($result1)){
										echo "$res[0]";
										}
									?>
									</marquee>
                                </div>
                            </div>
                    </div>
                    <div class="container">
                        <div class="row" style="">
                            <div class="col-lg-4">
                            
                                <div class="bord" style="background-color:rgba(0,0,0,0.1);">
                                    <div class="line bg-title text-primary font-weight-bolder"><h4>NOTIFICATIONS</h4></div>
                                    <hr/>
                                    <div style="height:350px;width:100%;padding-left:30px;overflow:hidden;">
                                        <marquee class="text-success font-weight-bolder" style="height:70%" direction=up scrollamount="4" >
										<?php while($res=mysqli_fetch_array($result2)){
										echo "$res[0]";
										}
									?>									
										</marquee>
                                        <a href="#">Know More..</a>
                                    </div>
                                </div>
                                
                                <div class="bord1" style="background-color:rgba(0,0,0,0.1);">
                                    <div class="line1 bg-title text-primary font-weight-bolder"><h4>EVENTS</h4></div>
                                    <hr/>
                                    <div class="" style="height:350px;width:100%;padding-left:30px;overflow:hidden;">
                                        <marquee direction=up scrollamount=4 class="text-success font-weight-bolder " style="height:70%" >
										<?php while($res=mysqli_fetch_array($result3)){
										echo "$res[0]";
										}
									?>
										</marquee>
                                        <a href="#">Know More..</a>
                                    </div>
                                </div>
                            </div>
                            <div class="bord3 col-lg-8" style="background-color:rgba(0,0,0,0.1);">
                                <div class="img-fluid" style="width:100%;height:auto;">
                                        <div class="section11" >
                                        <div class="slide1">
                                            <div class="content1">
                                                <h2>Zig Ziglar</h2>
                                                <p>Your attitude, not your aptitude, will determine your altitude.</p>
                                                </div>
                                        </div>
                                        <div class="slide1">
                                            <div class="content1">
                                                <h2>Benjamin Franklin</h2>
                                                <p>An investment in knowledge pays the best interest. </p>
                                                </div>
                                        </div>
                                        <div class="slide1">
                                            <div class="content1">
                                                <h2>Leo Buscaglia</h2>
                                                <p>Change is the end result of all true learning. </p>
                                                </div>
                                            </div>
                                            <div class="slide1">
                                            <div class="content1">
                                                <h2>Oliver Wendell Holmes Jr.</h2>
                                                <p>A man's mind, stretched by new ideas, may never return to its original dimensions.</p>
                                                </div>
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="container-fluid bg-dark img-fluid p1 " style="width:100%;height:auto;">
                        <div class="row">
                        <div class="col-md-4 text-white ">
                            <h5>WEBSITE POLICY</h5>
                            <ul>
                                <li><a href="#" >Terms and Conditions.</a></li>
                                <li><a href="#" >Copyright Policy.</a></li>
                                <li><a href="#" >Privacy Policy.</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 text-white ">
                            <h5>VISITOR COUNTER</h5>
                            
                            <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/663388/t/5"></script>
                            
                        </div>
                        <div class="col-md-4 text-white ">
                            <h5>CONTACT INFORMATION</h5>
                            <ul>
                                <li>D.T.E association,Maharashtra<br>Tel:(020)226421542</li>
                            </ul>
                        </div>
                        <div class="col-12 text-center">
                            <hr class="whit">
                            <h5 class="text-white">&copy;Alumni TYCSE</h5>
                            
                        </div>
                        </div>
                    </div>
                </footer>


            </div>
        </section>
        
        <script type="text/javascript">
            let video= document.querySelector('video');
            window.addEventListener('scroll',function(){
                let value= 1 + window.scrollY/-600;
                video.style.opacity=value;
                })
                
                let data= document.querySelector('p');
                window.addEventListener('scroll',function(){
                                        let value1=2+window.scrollY/-600;
                    data.style.opacity=value1;
                    })
                    
            </script>
        </body>
</html>
