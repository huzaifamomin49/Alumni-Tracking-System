<html>
    <head>
        <meta charset="utf-8">
            <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
            <title>About us</title>
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
			 .about1{
				 padding-top:2%;
				 padding-bottom:5%;
			 }
			 .posi{
				
				 font-size:25px;
				 font-family:calibri;
				 color:;
				 padding-left: 2%;
					overflow: hidden;
			 }
			 .posit{
				 padding-left:2%;
				 padding-right:2%;
				 font-size:22px;
				 font-family:calibri;
				 color:;
				 overflow: hidden;
			 }
             .spa{
				 padding-right:2%;
			 }
			 .ima{
				 box-shadow: 11px 13px 7px 2px rgba(46, 61, 73, 0.18);
			 }
           
            
            
            
            </style>
        </head>
    <body>
	<div class="content" >
                <header>
                    
                    <div class="pad" >
                        <div class="container img-fluid " style="width:100%;height:auto;">
                            <div class="">
                                <div class="" style="display:flex;">
                                    <div class=""><img class=" float-right" src="img/almgif.gif" style="width:100%;height:auto;"></div>
                                    <div class="float-left mar  display-4"><strong><label class="text-center"> Directorate of Technical Education, Alumni Department<br>तंत्रशिक्षण संचालनालय, माजी विद्यार्थी विभाग </label></strong></div>
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
											  <a class="btn text-white dropdown-toggle nav-link  text-white aclass" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Important Links
											  </a>

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
					</div>
					<div class="container">
					
						<div class="about1">
							<h3 class="text-primary text-center"><i class="fas fa-eye"></i>&emsp; VISION:</h3>
							<br/>
							<div >
								<span class="spa"><img class="float-left ima" width="30%" height="24%" src="img/1.jpg"></span> &emsp;
								<p class="posi">To become a world class, globally competitive, flexible and learning higher education institutions responsive to the individual, institutional and social developmental needs of the people of Maharashtra and India.</p>
							</div>
						</div>
						
						<div class="about1 ">
							<h3 class="text-primary text-center"><i class="fab fa-modx"></i>&emsp; MISSION:</h3>
							<br/>
							<div>
								<span><img class="float-right ima" width="40%" height="30%" src="img/2.jpg"></span> &emsp;
								<ul class="posit">
									<li>Enhance the quality of Technical Education Institutions, programs and systems towards achieving international standards.</li>
									<li>Efficiently and effectively manage the Technical Education System, ensuring transparency and integrity.</li>
									<li>Develop Technical manpower to meet the needs of the industry and growth of economy.</li>
									<li>Elevating research levels in Technical Education system.</li>
								</ul>
								
								
							</div>
						</div>
						
						<div class="about1">
							<h3 class="text-warning text-center"><i class="fab fa-teamspeak"></i>&emsp; This Project Is Developed By Team <strong>HASHERS</strong>.</h3>
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
	</body>
</html>
						
								
								
