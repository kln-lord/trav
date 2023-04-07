<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trav | Search Results</title>
		<meta name="keywords" content="" />
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logo-icon1.png">
		<link rel="stylesheet" type="text/css" href="css/baseSearchResults.css" />
        <link rel="stylesheet" href= "{{ asset('css/font-awesome.min.css') }}"/>

		<script>
		document.documentElement.className = "js";
		var supportsCssVars = function() { var e, t = document.createElement("style"); return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e };
		supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
		</script>
	</head>
    <style>
        #myVideo{
            height: 700px;
        }
        .button {
            pointer-events: auto;
            cursor: pointer;
            background: #e7e7e7;
            border: none;
            padding: 1rem 3rem;
            margin: 0;
            margin-left: 349px;
            margin-top: -10px !important;
            font-family: inherit;
            font-size: inherit;
            position: relative;
            display: inline-block;
            scale: 0.7;
            width: 200px;
    }

    .button::before,
    .button::after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .button--mimas {
        text-transform: uppercase;
        letter-spacing: 0.05rem;
        font-weight: 700;
        font-size: 0.85rem;
        border-radius: 0.5rem;
        overflow: hidden;
        color: #fff;
        background: #e7e7e7;
    }

    .button--mimas span {
        position: relative;
        mix-blend-mode: difference;
    }

    .button--mimas::before {
        content: '';
        background: #000;
        width: 120%;
        left: -10%;
        transform: skew(30deg);
        transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
    }

    .button--mimas:hover::before {
        transform: translate3d(100%,0,0);
    }

    #stars{
        scale: 1.3;
    }
    .content__title {
	margin: 0.5rem 0;
    font-size: 6.6vw;
}

h4 p{
    margin: 7px 0px;
}




    </style>
	<body class="loading">
		<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 " />
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z" />
				<path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z" />
			</symbol>
			<symbol id="icon-longarrow" viewBox="0 0 54 24">
				<title>longarrow</title>
				<path d="M.42 11.158L12.38.256c.333-.27.696-.322 1.09-.155.395.166.593.467.593.903v6.977h38.87c.29 0 .53.093.716.28.187.187.28.426.28.716v5.98c0 .29-.093.53-.28.716a.971.971 0 0 1-.716.28h-38.87v6.977c0 .416-.199.717-.592.903-.395.167-.759.104-1.09-.186L.42 12.62a1.018 1.018 0 0 1 0-1.462z" />
			</symbol>
			<symbol id="icon-navarrow" viewBox="0 0 408 408">
				<title>navarrow</title>
				<polygon fill="#fff" fill-rule="nonzero" points="204 0 168.3 35.7 311.1 178.5 0 178.5 0 229.5 311.1 229.5 168.3 372.3 204 408 408 204"></polygon>
			</symbol>
		</svg>
		<main>
			<div class="frame">
				<header class="codrops-header">
                    <div class="headTitle" style="
                        width: 380px;
                ">Available Flights From {{$results[0]->legs[0]->origin->name}} To {{$results[0]->legs[0]->destination->name}}</div>
				</header>
			</div>
			<div class="slideshow">
				<div class="slideshow__deco"></div>
                @for ($i=0;$i<6;$i++)
                    @if ($i>=count($results))
                    <div class="slide">
                        <div class="slide__img-wrap">
                            <div class="slide__img"><video autoplay muted loop id="myVideo">
                                <source src="{{asset('img/ComingSoon.mp4')}}" type="video/mp4">
                              </video></div>
                        </div>
                        <div class="slide__side">Offer &amp; ComingSoon</div>
                        <div class="slide__title-wrap">
                            <span class="slide__number">{{$i+1}}</span>
                            <h3 class="slide__title">ComingSoon</h3>
                            <h4 class="slide__subtitle">ComingSoon</h4>
                        </div>
                    </div>

                    @else
                    <div class="slide">
                        <div class="slide__img-wrap">
                            <div class="slide__img" style="background-image: url({{$photos[$i]->src->large2x}});"></div>
                        </div>
                        <div class="slide__side">Flight To {{$results[$i]->legs[0]->destination->name}}</div>
                        <div class="slide__title-wrap">
                            <span class="slide__number">{{$i+1}}</span>
                            <h3 class="slide__title">{{$destination}}</h3>
                            <h4 class="slide__subtitle">
                                {{-- <input name="id" type = "hidden" value = "{{$results[$i]->id}}" ><input name="departing_date" type = "hidden" value = "{{$departing_date}}" > --}}
                                <br/>
                                From {{$results[$i]->legs[0]->origin->name}} To {{$results[$i]->legs[0]->destination->name}} For $ {{$results[$i]->pricing_options[0]->price->amount}} duration in minutes {{$results[$i]->legs[0]->durationInMinutes}} Book Now Before: {{$results[$i]->legs[0]->departure}}</h4>
                        </div>
                    </div>
                    @endif

                @endfor

				<button class="nav nav--prev">
					<svg class="icon icon--navarrow-prev">
						<use xlink:href="#icon-navarrow"></use>
					</svg>
				</button>
				<button class="nav nav--next">
					<svg class="icon icon--navarrow-next">
						<use xlink:href="#icon-navarrow"></use>
					</svg>
				</button>
			</div>
			<div class="content">
                @for($j=0;$j<6;$j++)
                @if($j>=count($results))
                    <div class="content__item">
					<span class="content__number">{{$j+1}}</span>
					<h3 class="content__title">Coming Soon</h3>
					<h4 class="content__subtitle">Stay Tuned</h4>
					<div class="content__text">Just let this happen. We just let this flow right out of our minds. Just relax and let it flow. That easy. Let's put some happy little clouds in our world. It's a very cold picture, I may have to go get my coat. It’s about to freeze me to death. This is gonna be a happy little seascape. Let's go up in here, and start having some fun The least little bit can do so much. Work on one thing at a time. Don't get carried away - we have plenty of time. Put your feelings into it, your heart, it's your world. These trees are so much fun. I get started on them and I have a hard time stopping.</div>
				    </div>
                @else
                    <div class="content__item">
					<span class="content__number">{{$j+1}}</span>
					<h3 class="content__title" style="color:#1a1a1a">{{$destination}}<img class="flightIcon" src="images/flightIcon.png" style="
                                width: 300px;
                                height: 300px;
                                scale: 0.9;
                                object-fit: cover;
                                position: absolute;
                                margin-top: -95px;
                                margin-left: 0px;
                    "></h3>
					<h4 class="content__subtitle"><br/>
                        From {{$results[$j]->legs[0]->origin->name}} To {{$results[$j]->legs[0]->destination->name}} For ${{$results[$j]->pricing_options[0]->price->amount}} <br><br> <p><span style="color: black">duration in minutes : </span>{{$results[$j]->legs[0]->durationInMinutes}} </p><p><span style="color:black">departing date : </span>{{$results[$j]->legs[0]->departure}} </p><p><span style="color:black">arrival date : </span>{{$results[$j]->legs[0]->arrival}} </p><p><span style="color:black">Airlines : </span>{{$results[$j]->legs[0]->carriers->marketing[0]->name}}</h4>
					<div class="content__text">
                            <b style="position: absolute;margin-top:-27;scale:1.15;margin-left: 13px;">Rating: <span @if (isset($results[$j]->pricing_options[0]->agents[0]->rating))
                                class="{{$results[$j]->pricing_options[0]->agents[0]->rating}}"
                            @endif id=stars></span></b>
                            <form action="/redirectingPage" method="post"> @csrf <input name='url' type="hidden" value="{{$results[$j]->deeplink}}"><button class="button  button--mimas"><span>Book</span></button></form>

                    </div>


				    </div>
                @endif

                @endfor

				<button class="content__close">
					<svg class="icon icon--longarrow">
						<use xlink:href="#icon-longarrow"></use>
					</svg>
				</button>
			</div>
		</main>
		<script src="js/imagesloadedSearchResults.pkgd.min.js"></script>
		<script src="js/charming.min.js"></script>
		<script src="js/TweenMaxSearchResults.min.js"></script>
		<script src="js/demoSearchResults.js"></script>
        <script>
            var elements  = document.querySelectorAll('#stars');
            var array = [...elements];
            array.forEach(element => {
                var rating = element.className;
                element.innerHTML = getStars(parseFloat(rating));
            });

            function getStars(rating) {

            // Round to nearest half
            rating = Math.round(rating * 2) / 2;
            let output = [];

            // Append all the filled whole stars
            for (var i = rating; i >= 1; i--)
                output.push('<i class="fa fa-star" aria-hidden="true" style="color: gold;"></i>&nbsp;');

            // If there is a half a star, append it
            if (i == .5) output.push('<i class="fa fa-star-half-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');

            // Fill the empty stars
            for (let i = (5 - rating); i >= 1; i--)
                output.push('<i class="fa fa-star-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');

            return output.join('');

            }
        </script>
	</body>
</html>
