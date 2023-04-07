<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trav - GoodBye</title>
		<meta name="description" content="A set of animated ambient canvas backgrounds with different effects" />
		<meta name="keywords" content="canvas, ambient, background, animation, javascript, demo, web development" />
		<meta name="author" content="Codrops" />
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logo-icon1.png">
		<link rel="stylesheet" type="text/css" href="css/baseRedirectingPage.css" />
		<link rel="stylesheet" type="text/css" href="css/demo2.css" />
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	</head>
    <style>
        .demo-2 {

        --color-text: #ffffff;
        --color-link: #ffcdb6;
        --color-link-hover: #fff;
        --color-title: #fff;
        }
        body{
            color: white;
            font-family: 'futura';

        }
        h2,h3{
            text-shadow: 0 0 10px #ffffff
        }
        .lds-heart {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  transform: rotate(45deg);
  transform-origin: 40px 40px;
  box-shadow:0 0 10px #ffffff;
}
.lds-heart div {
  top: 32px;
  left: 32px;
  position: absolute;
  width: 32px;
  height: 32px;
  background: #fff;
  animation: lds-heart 3s infinite cubic-bezier(0.215, 0.61, 0.355, 1);
}
.lds-heart div:after,
.lds-heart div:before {
  content: " ";
  position: absolute;
  display: block;
  width: 32px;
  height: 32px;
  background: #fff;
}
.lds-heart div:before {
  left: -24px;
  border-radius: 50% 0 0 50%;
}
.lds-heart div:after {
  top: -24px;
  border-radius: 50% 50% 0 0;
}
@keyframes lds-heart {
  0% {
    transform: scale(0.7);
  }
  50%{
    transform: scale(1.0);
  }
  100%{
    transform: scale(0.7);

  }
}

video{
    width:100vw;
    object-fit: cover
}

    </style>
	<body>
        <video autoplay loop muted plays-inline>
            <source src="images/globe.mp4" type="video/mp4">
        </video>
		<main>
			<div class="frame">
			</div>
			<div class="content content--canvas" style="top:0% !important;position: absolute;" style="text-align: center">
				<h2 class="content__title" style="font-size: 1rem">You're leaving Us now</h2>
                <h3 class="content__title" style="font-size: 2rem;padding-top:20px">Make sure you come back</h3>
                <br>
                <div class="lds-heart" style="z-index: 100"><div></div></div>
			</div>
		</main>
		{{-- <script src="js/noise.min.js"></script> --}}
		{{-- <script src="js/util.js"></script> --}}
		{{-- <script src="js/swirl.js"></script> --}}
        <script>
            window.addEventListener('load', function () {
                setTimeout(callBack_func, 4000);
            })
             function callBack_func() {
                window.location.replace('{{$url}}');
            }

        </script>
	</body>
</html>
