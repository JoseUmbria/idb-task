<?php
   $page="home";
   $section="";
   if (isset($_GET['page'])){
      $page=$_GET['page'];
 	  if (($page=="home")||($page=="terms")){
		  $section="";
	  }else{
	     $section=$_GET['section'];
	  }
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Moira</title>
  <meta name="viewport" content="width=290, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/swiper-bundle.css" />
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">

</head>

<body>
<header>
 <div class="login-container" id="loginPopup"> <div class="login-popup" >

    <div class="logo"><a href="https://moira.club"><img src="/assets/images/logo.png"></a></div>
    <i class="close-login" id="closeLogin" onclick="closeLogin()"></i>
    <div class="tab">
    <button class="tablinks active" onclick="openLogin(event, 'Sign-up')">Sign Up</button>
    <button class="tablinks" onclick="openLogin(event, 'Sign-in')">Sign In</button>
  </div>
  
  <div id="Sign-up" class="tabcontent">
  
    <h3>Sign Up</h3>
    <input type="text" placeholder="Mobile Number or Email">
    <input type="text" placeholder="Password">
    <sub id="signupError" style="display: none;">Unexpected error has ocurred</sub>
    <label class="login-check-wrap">Remember me<input type="checkbox" checked="checked"> <span class="login-check"></span></label> <label class="login-check-wrap">
        I wish to receive news and updates      
       <input type="checkbox" checked="checked"> <span class="login-check"></span></label> <button onclick="showError()" class="btn btn-login">Sign Up</button>
  </div>
  
  <div id="Sign-in" class="tabcontent">
    <h3>Sign In</h3>
      <input type="email" id="emailLogin" placeholder="Mobile Number or Email">
      <input type="password" id="passwordLogin" placeholder="Password">
      <sub id="loginError" style="display: none;">User email or password are incorrect</sub>
      <div class="remember">
      <label class="login-check-wrap">Remember me<input type="checkbox" checked="checked"> <span class="login-check"></span></label> <a href="" class="forgot">Forgot password?</a></div><button onclick="checkLogin()" class="btn btn-login">Sign In</button>
  </div>
  </div>
  <script>
  
  var enterIn = document.getElementById('Sign-in');
  
  enterIn.addEventListener('keydown', (e)=>{
    if(e.key === 'Enter'){
      checkLogin();
    }
  }); 
  
  
  function showError(){
    document.getElementById('signupError').style.display = "revert";
  }
  
  function checkLogin(){
    let user = document.getElementById('emailLogin').value;
    let pass = document.getElementById('passwordLogin').value;
  
    if(user == 'info@moira.club' && pass == 'moira2021'){
      document.getElementById('loginPopup').style.display = "none";
      document.getElementById('main-container-login').style.display = "none";
      document.cookie = "login=true; path=/";
      location.reload();
    } else {
      document.getElementById('loginError').style.display = "revert";
    }
  
  }
  
  function logout(){
    document.cookie = "login=false; path=/";
    location.reload();
  }
  
  function showLogin(){
    document.getElementById('loginPopup').style.display = "revert";
    document.getElementById('main-container-login').style.display = "revert";
  }
  
  function closeLogin(){
    document.getElementById('loginPopup').style.display = "none";
    document.getElementById('main-container-login').style.display = "none";
  }
  
  </script>

    </div>
  <nav>
    <div id="logo"><a href="index.php?page=home"><img src="assets/images/logo.png"></a></div>
    <label for="drop" class="toggle toggle-icon"><i class="menu-icon"></i></label>
    <input type="checkbox" id="drop" />
    <ul class="menu">
        <li><a href="index.php?page=home">Home</a></li>
        <li class="have-children"><a href="#">Games</a>
          <ul>
            <li><a href="index.php?page=apps&section=action-apps">Action</a></li>
            <li><a href="index.php?page=apps&section=adventure-apps">Adventure</a></li>
            <li><a href="index.php?page=apps&section=strategy-apps">Strategy</a></li> 
          </ul>
        </li>
        <li class="have-children"><a href="#">Apps</a>
          <ul>
            <li><a href="index.php?page=apps&section=education-apps">Education</a></li>
            <li><a href="index.php?page=apps&section=quiz-apps">Quiz</a></li>
            <li><a href="index.php?page=apps&section=courses-apps">Courses</a></li>
          </ul>
        </li>
        <li class="have-children"><a href="#">Videos</a>
          <ul>
            <li><a href="index.php?page=videos&section=gaming-videos">Gaming</a></li>
            <li><a href="index.php?page=videos&section=sport-videos">Sport</a></li>
            <li><a href="index.php?page=videos&section=funny-videos">Funny</a></li>
          </ul>
        </li>
        <li><a href="index.php?page=gallery&section=gaming-gallery">Gallery</a></li>
		<li><a href="index.php?page=terms">Terms</a></li>
         
         
      <a href="index.php?page=login" class="login  hidden-desktop"><button class="btn btn-login"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ1Ni4zNjggNDU2LjM2OCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8Zz4KCQkJPHBhdGggZD0iTTMyNC4xOTQsMjIwLjUyNmMtNi4xNzIsNy43NzItMTMuMTA2LDE0Ljk0Ny0yMS4wNywyMS40MjNjNDUuNDU5LDI2LjA3Niw3Ni4xNDksNzUuMSw3Ni4xNDksMTMxLjE1OCAgICAgYzAsMzAuMjktNjYuMzY3LDU0LjAxOC0xNTEuMDksNTQuMDE4cy0xNTEuMDktMjMuNzI4LTE1MS4wOS01NC4wMThjMC01Ni4wNTgsMzAuNjktMTA1LjA4Miw3Ni4xNDktMTMxLjE1OCAgICAgYy03Ljk2My02LjQ3Ni0xNC44OTctMTMuNjUtMjEuMDctMjEuNDIzYy01MC42MjQsMzEuOTY5LTg0LjMyMiw4OC40MS04NC4zMjIsMTUyLjU4MWMwLDE5LjQzOSwxMC42NDQsNDYuNTMsNjEuMzU1LDY1LjIwMSAgICAgYzMxLjYzMiwxMS42NDcsNzMuODg2LDE4LjA2LDExOC45NzksMTguMDZjNDUuMDkzLDAsODcuMzQ3LTYuNDEzLDExOC45NzktMTguMDZjNTAuNzEtMTguNjcxLDYxLjM1NS00NS43NjIsNjEuMzU1LTY1LjIwMSAgICAgQzQwOC41MTYsMzA4LjkzNiwzNzQuODE4LDI1Mi40OTUsMzI0LjE5NCwyMjAuNTI2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJCQk8cGF0aCBkPSJNMjI4LjE4MiwyMzkuNzk1YzU2LjgzMywwLDEwMC41OTctNTQuOTM2LDEwMC41OTctMTE5Ljg5N0MzMjguNzc5LDU0LjkwNywyODQuOTkzLDAsMjI4LjE4MiwwICAgICBjLTU2LjgzMywwLTEwMC41OTcsNTQuOTM2LTEwMC41OTcsMTE5Ljg5N0MxMjcuNTg1LDE4NC44ODgsMTcxLjM3MiwyMzkuNzk1LDIyOC4xODIsMjM5Ljc5NXogTTIyOC4xODIsMjkuMjQzICAgICBjMzkuMzQ0LDAsNzEuMzU0LDQwLjY2Nyw3MS4zNTQsOTAuNjU0cy0zMi4wMSw5MC42NTQtNzEuMzU0LDkwLjY1NHMtNzEuMzU0LTQwLjY2Ny03MS4zNTQtOTAuNjU0UzE4OC44MzgsMjkuMjQzLDIyOC4xODIsMjkuMjQzICAgICB6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+CgkJPC9nPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=">
        Login </button></a>
    </ul>
    <a href="index.php?page=login" class="login hidden-mobile"><button class="btn btn-login"><img
      src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ1Ni4zNjggNDU2LjM2OCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgY2xhc3M9IiI+PGc+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+Cgk8Zz4KCQk8Zz4KCQkJPHBhdGggZD0iTTMyNC4xOTQsMjIwLjUyNmMtNi4xNzIsNy43NzItMTMuMTA2LDE0Ljk0Ny0yMS4wNywyMS40MjNjNDUuNDU5LDI2LjA3Niw3Ni4xNDksNzUuMSw3Ni4xNDksMTMxLjE1OCAgICAgYzAsMzAuMjktNjYuMzY3LDU0LjAxOC0xNTEuMDksNTQuMDE4cy0xNTEuMDktMjMuNzI4LTE1MS4wOS01NC4wMThjMC01Ni4wNTgsMzAuNjktMTA1LjA4Miw3Ni4xNDktMTMxLjE1OCAgICAgYy03Ljk2My02LjQ3Ni0xNC44OTctMTMuNjUtMjEuMDctMjEuNDIzYy01MC42MjQsMzEuOTY5LTg0LjMyMiw4OC40MS04NC4zMjIsMTUyLjU4MWMwLDE5LjQzOSwxMC42NDQsNDYuNTMsNjEuMzU1LDY1LjIwMSAgICAgYzMxLjYzMiwxMS42NDcsNzMuODg2LDE4LjA2LDExOC45NzksMTguMDZjNDUuMDkzLDAsODcuMzQ3LTYuNDEzLDExOC45NzktMTguMDZjNTAuNzEtMTguNjcxLDYxLjM1NS00NS43NjIsNjEuMzU1LTY1LjIwMSAgICAgQzQwOC41MTYsMzA4LjkzNiwzNzQuODE4LDI1Mi40OTUsMzI0LjE5NCwyMjAuNTI2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPgoJCQk8cGF0aCBkPSJNMjI4LjE4MiwyMzkuNzk1YzU2LjgzMywwLDEwMC41OTctNTQuOTM2LDEwMC41OTctMTE5Ljg5N0MzMjguNzc5LDU0LjkwNywyODQuOTkzLDAsMjI4LjE4MiwwICAgICBjLTU2LjgzMywwLTEwMC41OTcsNTQuOTM2LTEwMC41OTcsMTE5Ljg5N0MxMjcuNTg1LDE4NC44ODgsMTcxLjM3MiwyMzkuNzk1LDIyOC4xODIsMjM5Ljc5NXogTTIyOC4xODIsMjkuMjQzICAgICBjMzkuMzQ0LDAsNzEuMzU0LDQwLjY2Nyw3MS4zNTQsOTAuNjU0cy0zMi4wMSw5MC42NTQtNzEuMzU0LDkwLjY1NHMtNzEuMzU0LTQwLjY2Ny03MS4zNTQtOTAuNjU0UzE4OC44MzgsMjkuMjQzLDIyOC4xODIsMjkuMjQzICAgICB6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+CgkJPC9nPgoJPC9nPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjxnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjwvZz4KPGcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPC9nPgo8ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8L2c+CjwvZz48L3N2Zz4=">
  Login </button></a>
</nav>
</header>
    <main>
        <?php
	        include('/play/home.php');
	    ?> 
	    <div class="intro">
            <h1>Moira, unlimited content</h1>
            <h2>Play Movies, Series, Videos, Music, Games and More</h2>
        </div>
        <section class="games-section">
        <?php
		    echo "Página a cargar: ".$page." Sección: ". $section."<br/>";
            include('/play/games/home.php');
		    include('/play/apps/home.php');
	    ?>
        </section>
        <section class="stream-section">
        <?php  
		    include('/play/articles/home.php');
        ?>
        </section>

        </div>
        <!--Here ends the home page-->
        <footer>
          <div class="footer-wrap">
            <p>© Moira.tv, all rights reserved.</p>
          </div>


        </footer>
      </div>
 
    </main>

  <div class="bottom-menu">
    <div><a href=""><i class="arrow-down"></i></a></div>
    <div><a href=""><i class="home"></i></a></div>
    <div> <a href=""><i class="community"></i></a></div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/swiper-bundle.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>

  <script>
    const swiper = new Swiper('.Slider', {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      autoplay: {
        delay: 3000,
      },
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },
  
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  
      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
  </script>
  <script>
    var swiperItems = new Swiper(".myApps", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        "@0.00": {
          slidesPerView: 3.5,
        spaceBetween:20,
        },
        "@0.75": {
          slidesPerView: 5,
          spaceBetween: 60,
        },
        "@1.00": {
          slidesPerView:6,
          spaceBetween: 4,
        },
        "@1.50": {
          slidesPerView: 6,
          spaceBetween:8,
        },
      },
    });
  </script>
  <script>
    var swiperTips = new Swiper(".myTips", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        "@0.00": {
          slidesPerView: 2,
        spaceBetween:20,
        },
        "@0.75": {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        "@1.00": {
          slidesPerView:3,
          spaceBetween: 4,
        },
        "@1.50": {
          slidesPerView: 3,
          spaceBetween:10,
        },
      },
    });
  </script>
  <script>
    var swiperRecipes = new Swiper(".myRecipes", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        "@0.00": {
          slidesPerView: 2,
        spaceBetween:20,
        },
        "@0.75": {
          slidesPerView: 3,
          spaceBetween: 10,
        },
        "@1.00": {
          slidesPerView:3,
          spaceBetween: 4,
        },
        "@1.50": {
          slidesPerView: 3,
          spaceBetween:8,
        },
      },
    });
  </script>
</body>

</html>