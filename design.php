<!DOCTYPE html> 
<html lang="en">

<head>

<meta charset="UTF-8">

<title> Be Hero </title> 
<link rel="stylesheet" href="css/design.css">
<style>
    .slider {
  
  width: 100%;
  height: 100vh; 
  position: relative; 
  transition: all 0.55;
  display: flex;
  overflow: hidden;
  }
  
  .slider .slide {
   width: 20%;
  height: 100;
  position: relative;
  text-align: center;
  transition: 0.5s;
  }
  .slider .slide:nth-child(1) 
  {
      background: url("https://images.unsplash.com/photo-1434754205268-ad3b5f549b11?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=874&q=80");
  background-size: cover;
  background-repeat: no-repeat; 
  background-position: left;
  }
  .slider .slide:nth-child(2) 
  { 
      background: url("https://images.unsplash.com/photo-1545346315-f4c47e3e1b55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"); 
      background-size: cover;
      background-repeat: no-repeat;
     background-position: left;
     }
  .slider .slide:nth-child(3) { background: url("https://images.unsplash.com/photo-1632781297772-1d68f375d878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80");
  background-size: cover;
   background-repeat: no-repeat;
  background-position: left;
  }
  
  .slider .slide:nth-child(4)
  {
      background: url("https://images.unsplash.com/photo-1636007596622-90bf5679f5dc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80");
  background-size: cover;
   background-repeat: no-repeat;
  background-position: left;
  }
  
  .slider .slide:nth-child(5) { 
      
      background: url("https://images.unsplash.com/photo-1610312856669-2cee66b2949c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=405&q=80"); 
      background-size: cover;
      background-repeat: no-repeat;
       background-position: left;
      
      } 
      .slider .slide:hover {
      width: 80%; 
      cursor: pointer;
      }

      .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, 0%);
        -ms-transform: translate(-50%, 0%);
      }
      .slide:hover .overlay {
        height: 100%;
      }
      .slide {
        position: relative;
        display: inline-block;
      }

      .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.5);
        overflow: hidden;
        width: 100%;
        height: 0;
        transition: .5s ease;
      }
</style>
</head> <body>

<header class="hero">
<ul class="slider">
<li class="slide">
<div class="overlay">
          <div class="text"><b style="color:blue">TRICEPS</b> <ul style="list-style-type:square"> 
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Close-Grip Bench Press</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Decline Triceps Extension</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Lying Triceps Extension</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Pullover</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Lying Dumbbell Triceps Extension</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Underhand Kickback</li>
        </ul></div>
        </div>
</li>
<li class="slide">
<div class="overlay">
          <div class="text">
          <b style="color:blue">CHEST</b>
            <ul>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Incline push up</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Flat bench press</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Incline bench press</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Decline bench press</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> CPushup</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Cable crossover</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Chest dip</li>

            </ul>
          </div>
        </div>
</li>
<li class="slide">
<div class="overlay">
          <div class="text">
          <b style="color:blue">SHOULDER</b>
            <ul>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Arnold Press</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Lateral Raise</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Bent-Over Reverse Fly</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Upright Row</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Front Raises</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>3-Way Shoulder Raise</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Shrugs</li>

            </ul>
          </div>
        </div>
</li>
<li class="slide">
<div class="overlay">
          <div class="text">
          <b style="color:blue">Back</b>
            <ul>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Deadlift</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Bent-Over Row</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>T-Bar Row</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Bent-Over Row</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Seated Row</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Dumbbell Pull-Over</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Single-Arm Dumbbell Row</li>

            </ul>
          </div>
        </div>
</li>
<li class="slide">
<div class="overlay">
          <div class="text"><b style="color:blue">BICEPS</b>
            <ul>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>EZ-Bar Preacher Curl</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i> Reverse Curl</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Wide-Grip Curl</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Close-Grip Curl</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Conventional Barbell Curl</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Dumbbell Curl</li>
            <li><i class="fas fa-dumbbell" style="color:blue"></i>Hammer Curl</li>

            </ul></div>
        </div>
</li>

</ul>
</header> 
</body> 
</html>