<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/user_page.css">
   <link rel="stylesheet" href="css/quiz.css">
    <script src="https://kit.fontawesome.com/1ba2cf90f3.js" crossorigin="anonymous"></script>
	<title>QUIZ</title>
	<!-- CSS for the loading animation -->
	<style>
		.loading-container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			background-color: #f2f2f2;
		}

		.loading-spinner {
			border: 10px solid #ddd;
			border-top: 10px solid #3498db;
			border-radius: 50%;
			width: 80px;
			height: 80px;
			animation: spin 2s linear infinite;
			margin-bottom: 20px;
		}

		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
	</style>
</head>
<body>
	<!-- Loading animation container -->
	<div class="loading-container">
		<div class="loading-spinner"></div>
		<p>Loading...</p>
	</div>

	<nav>
        <div class="menu">
          <div class="logo">
          <a href="admin_page.php">R.J.Gym</a>
          </div>
          <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="diet.php">DIET-chart</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="package.html">Packages</a></li>
            <li><a href="bmi.html">BMI</a></li>
            <li><a href="logout.php" class="btn">logout</a></li>
           
          </ul>
        </div>
      </nav>
	<!-- Main content container -->
	<div class="main-container" style="display: none;">
		<!-- Your page content goes here
		<h1>Welcome to My Page</h1>
		<p>This is my page content.</p> -->
		<section>

        <header class="sign-in">
         <h1>Quiz Sign in</h1>
            

            <form id="form-1">

                <input type="text" name="username" placeholder="Enter your name">

                <input type="number" name="userid" placeholder="Enter your id">

                <button type="button" name="reg-btn">Submit <i class="fas fa-caret-right"></i> </button>

            </form>

        </header>

        <main>

            <div class="head">
                <ul>
                    <li class="userid"></li>
                    <li class="username"></li>
                    <li class="page">1/4</li>
                </ul>
            </div>

            <div class="que-cont cont-1">

                <div class="que que-1">
                    <h1> &nbsp;<span>Q1-</span> &nbsp; &nbsp;What vitamin is needed by the retina of the eye?</h1>
                    <ul>
                        <li><button onclick="right_selection(value)" value="5">Vitamin A</button></li>
                        <li><button onclick="wrong_selection()">Vitamin C</button></li>
                        <li><button onclick="wrong_selection()">Vitamin D</button></li>
                        <li><button onclick="wrong_selection()">Vitamin B6</button></li>
                    </ul>
                </div>

                <div class="que que-2">
                    <h1> &nbsp;<span>Q2-</span> &nbsp; &nbsp;What is the name of the diamond shaped muscle in the back that is worked when rowing?</h1>
                    <ul>
                        <li><button onclick="wrong_selection()">Abdominals</button></li>
                        <li><button onclick="wrong_selection()">Hamstrings</button></li>
                        <li><button onclick="wrong_selection()">Biceps</button></li>
                        <li><button onclick="right_selection(value)" value="Trapezius">Trapezius</button></li>
                    </ul>
                </div>
                
                <div class="que que-3">
                    <h1> &nbsp;<span>Q3-</span> &nbsp; &nbsp;What type of exercise uses body weight for resistance in a rhythmic manner?</h1>
                    <ul>
                        <li><button onclick="wrong_selection()">Pilates</button></li>
                        <li><button onclick="wrong_selection()">Weight Lifting</button></li>
                        <li><button onclick="wrong_selection()">Yoga</button></li>
                        <li><button onclick="right_selection(4)" value="4">Calisthenics</button></li>
                    </ul>
                </div>
                
                <div class="que que-4">
                    <h1> &nbsp;<span>Q4-</span> &nbsp; &nbsp;What is hypertrophy?</h1>
                    <ul>
                        <li><button onclick="wrong_selection()">Increasing calorie intake</button></li>
                        <li><button onclick="right_selection(2)" value="2">Increasing Muscle fibre</button></li>
                        <li><button onclick="wrong_selection()">Increasing fat</button></li>
                        <li><button onclick="wrong_selection()">Increasing calorie intake</button></li>
                    </ul>
                </div>
                
                <div class="que que-5">
                    <h1> &nbsp;<span>Q5-</span> &nbsp; &nbsp;What is it called when your body converts fat into energy?</h1>
                    <ul>
                        <li><button onclick="wrong_selection()">Hypertrophy</button></li>
                        <li><button onclick="wrong_selection()">Overtraining</button></li>
                        <li><button onclick="wrong_selection()">flexibility</button></li>
                        <li><button onclick="right_selection(7)" value="7days">Ketosis</button></li>
                    </ul>
                    <button class="sec-page-btn" >Next <i class="fas fa-caret-right"></i> </button>
                </div>

            </div>

            <div class="que-cont cont-2">

                <div class="que que-6">
                    <h1> &nbsp;<span>Q6-</span> &nbsp; &nbsp;What does the term anaerobic mean?</h1>
                    <ul>
                        <li><button onclick="wrong_selection()">Minimize tissue oxidation</button></li>
                        <li><button onclick="wrong_selection()">Maximize tissue oxidation</button></li>
                        <li><button onclick="right_selection(12)" value="Without oxygen">Without oxygen</button></li>
                        <li><button onclick="wrong_selection()">With oxygen</button></li>
                    </ul>
                </div>

                <div class="que que-7">
                    <h1> &nbsp;<span>Q7-</span> &nbsp; &nbsp;Which vitamin can be toxic, if taken orally in large doses?</h1>
                    <ul>
                        <li><button onclick="wrong_selection()">B7</button></li>
                        <li><button onclick="wrong_selection()">B1</button></li>
                        <li><button onclick="wrong_selection()">B5</button></li>
                        <li><button onclick="right_selection(4)" value="B3">B3</button></li>
                    </ul>
                </div>
                
                <div class="que que-8">
                    <h1> &nbsp;<span>Q8-</span> &nbsp; &nbsp;What term means to eat frequent small amounts of food?</h1>
                    <ul>
                        <li><button onclick="right_selection(0)" value="Grazing">Grazing</button></li>
                        <li><button onclick="wrong_selection()">Gorging</button></li>
                        <li><button onclick="wrong_selection()">Binging</button></li>
                        <li><button onclick="wrong_selection()">starving</button></li>
                    </ul>
                </div>
                
                <div class="que que-9">
                    <h1> &nbsp;<span>Q9-</span> &nbsp; &nbsp;If you are working your obliques, what part of the body are you working?</h1>
                    <ul>
                        <li><button onclick="wrong_selection()">your thigh</button></li>
                        <li><button onclick="wrong_selection()">Your arms</button></li>
                        <li><button onclick="wrong_selection()">Your legs</button></li>
                        <li><button onclick="right_selection(50)" value="Your Stomach">Your Stomach</button></li>
                    </ul>
                </div>
                
                <div class="que que-10">
                    <h1> &nbsp;<span>Q10-</span> &nbsp; &nbsp;When should you do your warm ups?</h1>
                    <ul>
                        <li><button onclick="wrong_selection()">After You Wake Up</button></li>
                        <li><button onclick="wrong_selection()">Right After You Exercise</button></li>
                        <li><button onclick="right_selection(60)" value="Right Before You Exercise">Right Before You Exercise</button></li>
                        <li><button onclick="wrong_selection()">Before You Go To Bed</button></li>
                    </ul>
                    <button class="third-page-btn" >Next <i class="fas fa-caret-right"></i> </button>
                </div>

            </div>

            <div class="que-cont cont-3">

                <div class="que que-11">
                    <h1> &nbsp;<span>Q11-</span> &nbsp; &nbsp;What is the condition induced by an overdose of the aphrodisiac known as "Spanish Fly" called?</h1>
                    <ul>
                        <li><button onclick="right_selection(24)" value="Reese's Dementia">Reese's Dementia</button></li>
                        <li><button onclick="wrong_selection()">Von Willebrand's Syndrome</button></li>
                        <li><button onclick="wrong_selection()">Parkinson's Disease</button></li>
                        <li><button onclick="wrong_selection()">Huntington's Chorea</button></li>
                    </ul>
                </div>

                <div class="que que-12">
                    <h1> &nbsp;<span>Q12-</span> &nbsp; &nbsp;Who wrote the "South Beach Diet" book?</h1>
                    <ul>
                        <li><button onclick="wrong_selection()">Richard Simmons</button></li>
                        <li><button onclick="right_selection(2)" value="Arthur Agatston">Arthur Agatston</button></li>
                        <li><button onclick="wrong_selection()">Phil McGraw</button></li>
                        <li><button onclick="wrong_selection()">Azar Nafisi</button></li>
                    </ul>
                </div>
                
                <div class="que que-13">
                    <h1> &nbsp;<span>Q13-</span> &nbsp; &nbsp;When doing muscular strength and endurance training, it is best to start with?</h1>
                    <ul>
                        <li><button onclick="wrong_selection()">Weight Resistance Machines</button></li>
                        <li><button onclick="wrong_selection()">Pull Ups</button></li>
                        <li><button onclick="right_selection(12)" value="The Resistance Of Your Own Body">The Resistance Of Your Own Body</button></li>
                        <li><button onclick="wrong_selection()">Light Weights</button></li>
                    </ul>
                </div>
                
                <div class="que que-14">
                    <h1> &nbsp;<span>Q14-</span> &nbsp; &nbsp;A proper warm-up should involve and accomplish the following </h1>
                    <ul>
                        
                        <li><button onclick="wrong_selection()">Stretching</button></li>
                        <li><button onclick="wrong_selection()">Reduced risk of injury</button></li>
                        <li><button onclick="right_selection(20)" value="Both a & b">Both a & b</button></li>
                    </ul>
                </div>
                
                <div class="que que-15">
                    <h1> &nbsp;<span>Q15-</span> &nbsp; &nbsp;A superset with five or more consecutive exercises is known as</h1>
                    <ul>
                        <li><button onclick="wrong_selection()">tri set</button></li>
                        <li><button onclick="wrong_selection()">compound set</button></li>
                        <li><button onclick="wrong_selection()">paired set</button></li>
                        <li><button onclick="right_selection(10)" value="Gient set">Gient set</button></li>
                    </ul>
                    <button class="fourth-page-btn" >Next <i class="fas fa-caret-right"></i> </button>
                </div>

            </div>

                <div class="que-cont cont-4">

                    <div class="que que-16">
                        <h1> &nbsp;<span>Q16-</span> &nbsp; &nbsp;Which of the following can benefit and improve posture and body alignment?</h1>
                        <ul>
                            <li><button onclick="right_selection(2)" value="Anaerobic fitness">Anaerobic fitness</button></li>
                            <li><button onclick="wrong_selection()">Heart rate</button></li>
                            <li><button onclick="wrong_selection()">Flexibility</button></li>
                            <li><button onclick="wrong_selection()">Goal setting</button></li>
                        </ul>
                    </div>
    
                    <div class="que que-17">
                        <h1> &nbsp;<span>Q17-</span> &nbsp; &nbsp;A proper warm-up should consist of ______ minutes of stretching and a general warm-up.</h1>
                        <ul>
                            <li><button onclick="wrong_selection()">5-10</button></li>
                            <li><button onclick="wrong_selection()">25</button></li>
                            <li><button onclick="right_selection(360)" value="13-17">13-17</button></li>
                            <li><button onclick="wrong_selection()">15-22</button></li>
                        </ul>
                    </div>
                    
                    <div class="que que-18">
                        <h1> &nbsp;<span>Q18-</span> &nbsp; &nbsp;Which equipment is used for weightlifting and bodybuilding?</h1>
                        <ul>
                            <li><button onclick="wrong_selection()">Barbells</button></li>
                            <li><button onclick="wrong_selection()">kettlebells</button></li>
                            <li><button onclick="right_selection(110)" value="All">All of the above</button></li>
                            <li><button onclick="wrong_selection()">Dumbells</button></li>
                        </ul>
                    </div>
                    
                    <div class="que que-19">
                        <h1> &nbsp;<span>Q19-</span> &nbsp; &nbsp;10. Which of the following is not a cardiovascular training equipment</h1>
                        <ul>
                            <li><button onclick="wrong_selection()">Treadmill</button></li>
                            <li><button onclick="right_selection(195)" value="Leg">Leg Extension</button></li>
                            <li><button onclick="wrong_selection()">Elliptical</button></li>
                            <li><button onclick="wrong_selection()">Stairclimber</button></li>
                        </ul>
                    </div>
                    
                    <div class="que que-20">
                        <h1> &nbsp;<span>Q20-</span> &nbsp; &nbsp;What does the I in FITT stand for:</h1>
                        <ul>
                            <li><button onclick="wrong_selection()">Intravel</button></li>
                            <li><button onclick="wrong_selection()">Instruction</button></li>
                            <li><button onclick="wrong_selection()">Issue</button></li>
                            <li><button onclick="right_selection(4)" value="4">Intensity</button></li>
                        </ul>
                        <button class="fifth-page-btn" >Next <i class="fas fa-caret-right"></i> </button>
                    </div>
    
                </div>

            </main>
            
            <div class="result-page">
                <h1>your result is here</h1>
                <ul>
                    <li>Name: <span class="username"></span> </li>
                    <li>id: <span class="userid"></span> </li>
                    <li>total-que: <span>20</span> </li>
                    <li>correct-que: <span class="correct_que"></span> </li>
                    <li>wrong-que: <span class="wrong_que"></span> </li>
                    <li>attempted-que: <span class="att_que"></span></li>
                    <li>status: <span class="status"></span> </li>
                </ul>
                <b>Share your result</b>
                <ol>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                    <li><i class="fab fa-whatsapp"></i></li>
                </ol>
            </div>

    </section>

    <script src="js/script.js"></script>
	</div>

	<!-- JavaScript to hide the loading animation and show the main content after 3 seconds -->
	<script>
		setTimeout(function() {
			document.querySelector('.loading-container').style.display = 'none';
			document.querySelector('.main-container').style.display = 'block';
		}, 3000);
	</script>
</body>
</html>
