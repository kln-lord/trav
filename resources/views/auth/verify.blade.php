<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trav - Register</title>
		<meta name="description" content="Visual feedback for password strength on an image that gets pixelated or blurred." />
		<meta name="keywords" content="password strength, visual feedback, image, canvas, javascript, css, blur, pixelated" />
		<meta name="author" content="Codrops" />
        <link rel="icon" type="image/png" sizes="16x16" href=".././assets/images/logo-icon1.png">
		<link rel="stylesheet" type="text/css" href="../../css/baseRegisterTest.css" />
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	</head>
    <style>
        .invalid-feedback{
            /* position: absolute; */
            font-size: 0.7rem;
            color: #ff2440;
        }
        .form__item:not(:last-child) {
    margin: 0 0 0.5rem;
}
    .logo{
        width: 20px;
        height: 20px;
        position: absolute;
        scale: 0.4;
        z-index: 1;
        text-align: center;
        margin: 10px 10px;

    }

    </style>
	<body class="demo-1 loading">

		<main>
            <div class = 'logo'><img src=".././assets/images/logo-icon1.png" alt="">
                <img style="margin-left:122px; margin-top:-120px" src=".././assets/images/logo-text1.png" alt="homepage" class="dark-logo" style="width: 126px;
                height:50px; object-fit: cover; scale:0.8;"/>
            </div>
			<div style = "margin-top:-200px !important"  class="content content--side">
				<form style = "margin-top: 0px;top: 60%;" class="form" action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="card-body">
                        @if (session('resent'))
					<div style="top:20%" class="form__item">
                        <label class="form__label">A fresh verification link has been sent to your email address.</label>
                        <br>
                    @endif
                    <label class="form__label">Verify Your Email Address</label>


                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}

					</div>

                    <br>

                    <br>



                    {{-- <div class="form__item">
						<label class="form__label" for="password">Password</label>
						<div class="form__input-wrap">
							<input class="form__input" type="password" name="password_confirmation" id="password-confirm" required>
							<p  class="form__password-strength" id="strength-output"></p>
						</div>
					</div> --}}
					<div class="form__item form__item--actions" style="    margin: 10px 0;">
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="form__button">{{ __('click here to request another') }}</button>.
                        </form>
					</div>
				</form>
			</div>
			<div class="content content--side">
				<div class="poster" style="background-image:url(../images/iceberg.png)"></div>
				<div class="canvas-wrap">
					{{-- <canvas></canvas> --}}
				</div>
				{{-- <nav class="demos">
					<a class="demo demo--current" href="index.html"><span>Demo 1</span></a>
					<a class="demo" href="index2.html"><span>Demo 2 (reverse)</span></a>
				</nav>
				<a class="github" href="https://github.com/codrops/PasswordStrengthVisualization/" title="Find this project on GitHub"><svg class="icon icon--github"><use xlink:href="#icon-github"></use></svg></a> --}}
			</div>
		</main>
		<script src="../js/imagesloaded.pkgd.min.js"></script>
		<script src="../js/zxcvbn.js"></script>
		<script src="../js/demo2.js"></script>
	</body>
</html>
