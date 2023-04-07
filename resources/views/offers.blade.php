<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trav - Offers</title>
		<meta name="description" content="A draggable image strip layout with a content preview powered by Draggabilly and TweenMax." />
		<meta name="keywords" content="draggable, images, horizontal, layout, flexbox, grid, css, tweenmax, draggabilly, web design" />
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logo-icon1.png">
		<link rel="stylesheet" href="css/ugp0unb.css">
		<link rel="stylesheet" type="text/css" href="css/base.css" />
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	</head>
    <style>
        span,h2{
            color: white !important;
        }

        body{
            font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif !important;
            user-select:none;

        }
        .logo{
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 1.5rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif !important;
    color: #fff;
    font-size: 2em;
    fill-rule: evenodd;
    fill: currentColor;
    text-align: center;
    padding-top: 27px;
    padding-bottom: 50px;
    width: 100%;
    height:55px;
    user-select: none;
    transition: all .6s ease;

}
.kln-banner{
    z-index: 100;
    background-color: transparent;
    height: 100px;
    margin-bottom: -100px;

}
/* .kln-banner:hover .logo{
    transition: all .6s ease;
    background-color: #fff;
    color: black;
}

.kln-banner:hover .fa{
    color: black !important;
    transition: all .6s ease;

} */

.btn-secondary {
    display: block;
    z-index: 10;
    position: absolute;
    margin-left: -55px;
    margin-top: 610px;
    text-align: center;
    background: white;
    border-radius: 3px;
    box-shadow: 0 10px 20px -8px #d09b68;
    padding: 10px 17px;
    font-size: 18px;
    border: none;
    outline: none;
    color: #1a1a1a;
    text-decoration: none;
    -webkit-transition: 0.3s ease;
    transition: all 0.6s ease;
    scale: 0.8;
    cursor: pointer;
    bottom: 0%;
    width: 120%;
    bottom: 0%;
    transform: translateY(-50%);
    }
    /* .btn-secondary:hover {
        transform: translateY(-3px);
    } */
    .btn-secondary .fa {
        margin-right: 5px;
    }



    </style>
	<body class="loading">
		<main>
            <div class="kln-banner">
                <div style = "cursor: pointer;" class = "logo" onclick="window.location.replace('home')">TRAV</div>
                <i style="position: absolute;color:white;scale:1.5;margin-left:40px;margin-top:-49px;cursor: pointer;z-index:10" onclick="window.location.replace('home')" class="fa fa-arrow-left" aria-hidden="true"></i>
            </div>

			<div class="frame">

				<h3 class="frame__subtitle">Trav - 2023</h3>
				<div class="frame__indicator"></div>
			</div>
			<div class="strip-outer">
				<div class="strip-inner">
					<div class="draggable"></div>
					<div class="strip">
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-s"><div class="img-inner" style="background-image:url('OffersImgs/city.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>01</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="img-outer img-outer--size-m strip__item-link"><div class="img-inner" style="background-image:url('OffersImgs/chefchaouen.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>02</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-xl"><div class="img-inner" style="background-image:url('OffersImgs/cityNight2.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>03</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-l"><div class="img-inner" style="background-image:url('OffersImgs/mexico.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>04</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-s"><div class="img-inner" style="background-image:url('OffersImgs/paris.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>05</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-m"><div class="img-inner" style="background-image:url('OffersImgs/cityDay2.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>06</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-s"><div class="img-inner" style="background-image:url('OffersImgs/Seoul.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>07</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-l"><div class="img-inner" style="background-image:url('OffersImgs/Barcelona.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>08</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-s"><div class="img-inner" style="background-image:url('OffersImgs/madrid.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>09</span></a><span class="strip__item-plus"></span></span>
						</div>
						{{-- <div class="strip__item">
							<div class="strip__item-link img-outer"><div class="img-inner" style="background-image:url('OffersImgs/10.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>10</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-s"><div class="img-inner" style="background-image:url('OffersImgs/11.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>11</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-xl"><div class="img-inner" style="background-image:url('OffersImgs/12.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>12</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-s"><div class="img-inner" style="background-image:url('OffersImgs/13.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>13</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-l"><div class="img-inner" style="background-image:url('OffersImgs/14.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>14</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="strip__item-link img-outer img-outer--size-s"><div class="img-inner" style="background-image:url('OffersImgs/15.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>15</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="img-outer strip__item-link img-outer--size-l"><div class="img-inner" style="background-image:url('OffersImgs/16.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>16</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="img-outer strip__item-link img-outer--size-m"><div class="img-inner" style="background-image:url('OffersImgs/17.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>17</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="img-outer strip__item-link"><div class="img-inner" style="background-image:url('OffersImgs/18.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>18</span></a><span class="strip__item-plus"></span></span>
						</div>
						<div class="strip__item">
							<div class="img-outer strip__item-link img-outer--size-s"><div class="img-inner" style="background-image:url('OffersImgs/19.jpg');"></div></div>
							<span class="strip__item-number"><a class="strip__item-link"><span>19</span></a><span class="strip__item-plus"></span></span>
						</div> --}}
					</div><!--/strip-->
				</div><!--/strip-inner-->
				<div class="strip-cover">
					<h2 style = "color:white !important" class="strip-cover__title">Trav</h2>
					<span class="strip-cover__subtitle">2023</span>
				</div>
			</div><!--/strip-outer-->
			<div class="content">
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/city.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input id="buttonId" type="hidden" name="buttonId" value="{{$buttons[0]->id}}"><input id="state-btn1" type="hidden" name="state" value="{{$buttons[0]->state}}"><input type="hidden" name="image" value="city"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary1"><i class="fa fa-heart" @if($buttons[0]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[0]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">New York</h2>
						<p class="content__item-text">New York City is one of the most-loved and most-visited cities in the world, but it's also one of the most expensive travel destinations.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/chefchaouen.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input id="buttonId" type="hidden" name="buttonId" value="{{$buttons[1]->id}}"><input id="state-btn2" type="hidden" name="state" value="{{$buttons[1]->state}}"><input type="hidden" name="image" value="chefchaouen"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary2"><i class="fa fa-heart" @if($buttons[1]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[1]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Chefchaouen</h2>
						<p class="content__item-text">or Chaouen, is a city in the Rif Mountains of northwest Morocco. It’s known for the striking, blue-washed buildings of its old town.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/cityNight2.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input id="buttonId" type="hidden" name="buttonId" value="{{$buttons[2]->id}}"><input id="state-btn3" type="hidden" name="state" value="{{$buttons[2]->state}}"><input type="hidden" name="image" value="cityNight2"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary3"><i class="fa fa-heart" @if($buttons[2]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[2]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">The Himalayas</h2>
						<p class="content__item-text"> or Himalaya, is a mountain range in Asia, separating the plains of the Indian subcontinent from the Tibetan Plateau.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/mexico.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input id="buttonId" type="hidden" name="buttonId" value="{{$buttons[3]->id}}"><input id="state-btn4" type="hidden" name="state" value="{{$buttons[3]->state}}"><input type="hidden" name="image" value="mexico"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary4"><i class="fa fa-heart" @if($buttons[3]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[3]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Mexico</h2>
						<p class="content__item-text">Tourism in Mexico is a very important industry. Since the 1960s, it has been heavily promoted by the Mexican government, as "an industry without smokestacks."</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/paris.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input id="buttonId" type="hidden" name="buttonId" value="{{$buttons[4]->id}}"><input id="state-btn5" type="hidden" name="state" value="{{$buttons[4]->state}}"><input type="hidden" name="image" value="paris"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary5"><i class="fa fa-heart" @if($buttons[4]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[4]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Paris</h2>
						<p class="content__item-text">Tourism in Paris is a major income source. Paris received 12.6 million visitors in 2020, measured by hotel stays, a drop of 73 percent from 2019, due to the COVID-19 pandemic. The number of foreign visitors declined by 80.7 percent.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/cityDay2.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input id="buttonId" type="hidden" name="buttonId" value="{{$buttons[5]->id}}"><input id="state-btn6" type="hidden" name="state" value="{{$buttons[5]->state}}"><input type="hidden" name="image" value="cityDay2"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary6"><i class="fa fa-heart" @if($buttons[5]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[5]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Rabat</h2>
						<p class="content__item-text">Rabat, Morocco's capital, rests along the shores of the Bouregreg River and the Atlantic Ocean. It's known for landmarks that speak to its Islamic and French-colonial heritage, including the Kasbah of the Udayas.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/Seoul.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input id="buttonId" type="hidden" name="buttonId" value="{{$buttons[6]->id}}"><input id="state-btn7" type="hidden" name="state" value="{{$buttons[6]->state}}"><input type="hidden" name="image" value="Seoul"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary7"><i class="fa fa-heart" @if($buttons[6]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[6]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Seoul</h2>
						<p class="content__item-text">Seoul is the most fantastic destination, offering everything from incredible food, fascinating ancient culture, modern art, fashion and technology, as well as the friendliest people who want you to love their city and country.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/Barcelona.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input id="buttonId" type="hidden" name="buttonId" value="{{$buttons[7]->id}}"><input id="state-btn8" type="hidden" name="state" value="{{$buttons[7]->state}}"><input type="hidden" name="image" value="Barcelona"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary8"><i class="fa fa-heart" @if($buttons[7]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[7]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Barcelona</h2>
						<p class="content__item-text">Barcelona, the cosmopolitan capital of Spain’s Catalonia region, is known for its art and architecture.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/madrid.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input id="buttonId" type="hidden" name="buttonId" value="{{$buttons[8]->id}}"><input id="state-btn9" type="hidden" name="state" value="{{$buttons[8]->state}}"><input type="hidden" name="image" value="madrid"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary9"><i class="fa fa-heart" @if($buttons[8]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[8]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Madrid</h2>
						<p class="content__item-text">Like most places to visit in Spain, Madrid is considered a safe destination. Still, Madrid is a big city. With over three million metropolitan residents, it's the largest city in Spain.</p>
					</div>
				</article>
				{{-- <article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/10.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input type="hidden" name="image" value="chefchaouen"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary10"><i class="fa fa-heart" @if($buttons[9]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[9]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Moiety</h2>
						<p class="content__item-text">Virtually no important undertaking is now carried on without it, whether that enterprise be building a cathedral, endowing a university, marketing a moving picture, floating a large bond issue, or electing a president.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/11.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input type="hidden" name="image" value="chefchaouen"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary11"><i class="fa fa-heart" @if($buttons[10]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[10]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Mondegreen</h2>
						<p class="content__item-text">Virtually no important undertaking is now carried on without it, whether that enterprise be building a cathedral, endowing a university, marketing a moving picture, floating a large bond issue, or electing a president.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/12.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input type="hidden" name="image" value="chefchaouen"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary12"><i class="fa fa-heart" @if($buttons[11]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[11]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Cathedral</h2>
						<p class="content__item-text">Virtually no important undertaking is now carried on without it, whether that enterprise be building a cathedral, endowing a university, marketing a moving picture, floating a large bond issue, or electing a president.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/13.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input type="hidden" name="image" value="chefchaouen"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary13"><i class="fa fa-heart" @if($buttons[12]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> $buttons[12]->state</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Gambol</h2>
						<p class="content__item-text">Virtually no important undertaking is now carried on without it, whether that enterprise be building a cathedral, endowing a university, marketing a moving picture, floating a large bond issue, or electing a president.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/14.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input type="hidden" name="image" value="chefchaouen"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary14"><i class="fa fa-heart" @if($buttons[13]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[13]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Forbearance</h2>
						<p class="content__item-text">Virtually no important undertaking is now carried on without it, whether that enterprise be building a cathedral, endowing a university, marketing a moving picture, floating a large bond issue, or electing a president.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/15.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input type="hidden" name="image" value="chefchaouen"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary15"><i class="fa fa-heart" @if($buttons[14]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> $buttons[14]->state</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Evanescent</h2>
						<p class="content__item-text">Virtually no important undertaking is now carried on without it, whether that enterprise be building a cathedral, endowing a university, marketing a moving picture, floating a large bond issue, or electing a president.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/16.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input type="hidden" name="image" value="chefchaouen"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary16"><i class="fa fa-heart" @if($buttons[15]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[15]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Embrocation</h2>
						<p class="content__item-text">Virtually no important undertaking is now carried on without it, whether that enterprise be building a cathedral, endowing a university, marketing a moving picture, floating a large bond issue, or electing a president.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/17.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input type="hidden" name="image" value="chefchaouen"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary17"><i class="fa fa-heart" @if($buttons[16]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[16]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Bucolic</h2>
						<p class="content__item-text">Virtually no important undertaking is now carried on without it, whether that enterprise be building a cathedral, endowing a university, marketing a moving picture, floating a large bond issue, or electing a president.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/18.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input type="hidden" name="image" value="chefchaouen"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary18"><i class="fa fa-heart" @if($buttons[17]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[17]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Eloquence</h2>
						<p class="content__item-text">Virtually no important undertaking is now carried on without it, whether that enterprise be building a cathedral, endowing a university, marketing a moving picture, floating a large bond issue, or electing a president.</p>
					</div>
				</article>
				<article class="content__item">
					<div class="img-outer img-outer--content">
						<div class="img-inner img-inner--content" style="background-image: url(OffersImgs/19.jpg);"><iframe name="votar" style="display:none;"></iframe><form target="votar" action="/addToFav" method="post">@csrf <input type="hidden" name="image" value="chefchaouen"><button name="btn-secondary1" class="btn-secondary" id = "btn-secondary19"><i class="fa fa-heart" @if($buttons[18]->state=="Liked") style="color: #ed2553" @endif aria-hidden="true"></i> {{$buttons[18]->state}}</button></form></div>
					</div>
					<div class="content__item-copy">
						<h2 class="content__item-title">Cathedral</h2>
						<p class="content__item-text">Virtually no important undertaking is now carried on without it, whether that enterprise be building a cathedral, endowing a university, marketing a moving picture, floating a large bond issue, or electing a president.</p>
					</div>
				</article> --}}
				<button class="content__close" aria-label="Close content"><svg width="12" height="26" viewBox="0 0 12 26"><path d="M5.293 25H5v-.293l-5-5L.707 19 5 23.293V0h1v23.657L10.657 19l.707.707-5.657 5.657-.025-.025-.025.025L5.293 25z"/></svg></svg></button>
			</div>
		</main>
		<div class="cursor">
			<div class="cursor__inner cursor__inner--circle">
				<div class="cursor__side cursor__side--left"></div>
				<div class="cursor__side cursor__side--right"></div>
			</div>
		</div>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/TweenMax.min.js"></script>
		<script src="js/draggabilly.pkgd.min.js"></script>
		<script src="js/demo.js"></script>
		<script>
			// Preload all the images in the page
			imagesLoaded(document.querySelectorAll('.img-inner'), {background: true}, () => document.body.classList.remove('loading'));

    var likeButton1 = document.getElementById("btn-secondary1");
    likeButton1.addEventListener('click',function(){
        if(likeButton1.innerHTML.includes('Liked')){
            likeButton1.innerHTML='<i style = "color : #1a1a1a;" class="fa fa-heart" aria-hidden="true"></i> Like';
            document.getElementById('state-btn1').value = "Liked";
        }
        else {
            likeButton1.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
            document.getElementById('state-btn1').value = "Like";

        }
    })
    var likeButton2 = document.getElementById("btn-secondary2");
    likeButton2.addEventListener('click',function(){
        if(likeButton2.innerHTML.includes('Liked')){
            likeButton2.innerHTML='<i style = "color : #1a1a1a;" class="fa fa-heart" aria-hidden="true"></i> Like';
            document.getElementById('state-btn2').value = "Liked";
        }
        else {
            likeButton2.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
            document.getElementById('state-btn2').value = "Like";

        }
    })
    var likeButton3 = document.getElementById("btn-secondary3");
    likeButton3.addEventListener('click',function(){
        if(likeButton3.innerHTML.includes('Liked')){
            likeButton3.innerHTML='<i style = "color : #1a1a1a;" class="fa fa-heart" aria-hidden="true"></i> Like';
            document.getElementById('state-btn3').value = "Liked";
        }
        else {
            likeButton3.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
            document.getElementById('state-btn3').value = "Like";

        }    })
    var likeButton4 = document.getElementById("btn-secondary4");
    likeButton4.addEventListener('click',function(){
        if(likeButton4.innerHTML.includes('Liked')){
            likeButton4.innerHTML='<i style = "color : #1a1a1a;" class="fa fa-heart" aria-hidden="true"></i> Like';
            document.getElementById('state-btn4').value = "Liked";
        }
        else {
            likeButton4.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
            document.getElementById('state-btn4').value = "Like";

        }    })
    var likeButton5 = document.getElementById("btn-secondary5");
    likeButton5.addEventListener('click',function(){
        if(likeButton5.innerHTML.includes('Liked')){
            likeButton5.innerHTML='<i style = "color : #1a1a1a;" class="fa fa-heart" aria-hidden="true"></i> Like';
            document.getElementById('state-btn5').value = "Liked";
        }
        else {
            likeButton5.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
            document.getElementById('state-btn5').value = "Like";

        }    })
    var likeButton6 = document.getElementById("btn-secondary6");
    likeButton6.addEventListener('click',function(){
        if(likeButton6.innerHTML.includes('Liked')){
            likeButton6.innerHTML='<i style = "color : #1a1a1a;" class="fa fa-heart" aria-hidden="true"></i> Like';
            document.getElementById('state-btn6').value = "Liked";
        }
        else {
            likeButton6.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
            document.getElementById('state-btn6').value = "Like";

        }    })
        var likeButton7 = document.getElementById("btn-secondary7");
    likeButton7.addEventListener('click',function(){
        if(likeButton7.innerHTML.includes('Liked')){
            likeButton7.innerHTML='<i style = "color : #1a1a1a;" class="fa fa-heart" aria-hidden="true"></i> Like';
            document.getElementById('state-btn7').value = "Liked";
        }
        else {
            likeButton7.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
            document.getElementById('state-btn7').value = "Like";

        }    })
        var likeButton8 = document.getElementById("btn-secondary8");
    likeButton8.addEventListener('click',function(){
        if(likeButton8.innerHTML.includes('Liked')){
            likeButton8.innerHTML='<i style = "color : #1a1a1a;" class="fa fa-heart" aria-hidden="true"></i> Like';
            document.getElementById('state-btn8').value = "Liked";
        }
        else {
            likeButton8.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
            document.getElementById('state-btn8').value = "Like";

        }    })
        var likeButton9 = document.getElementById("btn-secondary9");
    likeButton9.addEventListener('click',function(){
        if(likeButton9.innerHTML.includes('Liked')){
            likeButton9.innerHTML='<i style = "color : #1a1a1a;" class="fa fa-heart" aria-hidden="true"></i> Like';
            document.getElementById('state-btn9').value = "Liked";
        }
        else {
            likeButton9.innerHTML='<i style = "color : #ed2553;" class="fa fa-heart" aria-hidden="true"></i> Liked';
            document.getElementById('state-btn9').value = "Like";

        }    })
		</script>
	</body>
</html>
