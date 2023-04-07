<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trav - Flights</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
</head>
<style>

    body{
        font-family: 'futura';
    }
:root{
    --dark-color: #262727;
    --color-fff: #FFFFFF;
    --color-100: #F0F0F0;
    --color-200: #EEEEEE;
    --color-300: #E0E0E0;
    --color-400: #BDBDBD;
    --color-500: #525252;
    --color-600: #464545;
    --color-700: #363535;
    --color-800: #252525;
    --color-900: #181818;
    --color-000: #000000;
    --border-color: #e9e6e1;
    --card-color: #f3f1f1;
    --body-color: #f8f6f2;
    --white-color: #ffffff;
    --sidebar-color: #ffffff;

    --primary-color: #1a1a1a;
    --secondary-color: #f3f1f1;
}

input{
    outline: none !important;

}

.form-check-input:checked {
    background-color: #1a1a1a !important;
    border-color: #1a1a1a !important;
}

input:focus{
    color: #000000 !important;
    outline-width: 0 !important;
}

.form-control, .form-select {
    border-color: var(--border-color);
    color: var(--color-900);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    font-size: 12px;
}

.btn.btn-primary {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}

.btn{
    font-size: 0.8rem;

}

.card{
    background-color: var(--card-color);
    border: 0;
}

input[type="date"],input[type="date"],select{
    height: 55px !important;
}


::selection{
    color: #1a1a1a;
}

label{
    font-size: 0.7rem;
}

.logo{
    -webkit-text-size-adjust: 100%;
    letter-spacing: .025rem;
    line-height: 1.5rem;
    font-family: "futura","Helvetica Neue","Helvetica",Arial,sans-serif !important;
    color: #1a1a1a;
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
    margin-bottom: -10px;

}
.kln-banner:hover .logo{
    transition: all .6s ease;
    background-color: #1a1a1a;
    color: white;
}

.kln-banner:hover .fa{
    color: white !important;
    transition: all .6s ease;

}

</style>
<div class="kln-banner">
    <div style = "cursor: pointer;" class = "logo" onclick="window.location.replace('home')">TRAV</div>
    <i style="position: absolute;color:white;scale:1.5;margin-left:40px;margin-top:-49px;cursor: pointer;z-index:10" onclick="window.location.replace('home')" class="fa fa-arrow-left" aria-hidden="true"></i>
</div>
<div class="container">

<form action="/flightsSearch" method="post">
    @csrf
    <div class="card p-4 mt-5">
        <div class="row g-3">
            <h1><center>Welcome To Our Flights Search Engine</center></h1>
            <div class="col-12 mb-4">
                <h4>Flight Booking</h4>
                <span class="text-muted">Please note that the results of your search are real-time and updated every 10 seconds.</span>
            </div>
            <div class="col-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Roundtrip" value="option1">
                    <label class="form-check-label" for="Roundtrip">Roundtrip</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" checked='true' type="radio" name="inlineRadioOptions" id="Oneway" value="option2">
                    <label class="form-check-label" for="Oneway">One way</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MultiCity" value="option3">
                    <label class="form-check-label" for="MultiCity">Multi-City</label>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="form-floating">
                    <input name="goingFrom" style="height: 50px ;" type="text" class="form-control" placeholder="FLYING FROM" required>
                    <label>FLYING FROM</label>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="form-floating">
                    <input name="goingTo" style="height: 50px ; outline:none" type="text" class="form-control" placeholder="FLYING TO" required>
                    <label>FLYING TO</label>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="form-floating">
                    <input type="date" name="checkIn" class="form-control" placeholder="DEPARTING" required>
                    <label>DEPARTING</label>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="form-floating">
                    <input type="date" name="checkOut" class="form-control" placeholder="RETURNING" required>
                    <label>RETURNING</label>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="form-floating">
                    <select name="numberOfAdults" class="form-select" required>
        {{-- <option selected="" hidden="">Open this select menu</option> --}}
        <option value="1" selected="true">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        </select>
                    <label>ADULTS(18+)</label>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="form-floating">
                    <select class="form-select" required>
        {{-- <option hidden="">Open this select menu</option> --}}
        <option value="1" selected="true">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        </select>
                    <label>CHILDREN(0-17)</label>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="form-floating">
                    <select name="TravelClass" class="form-select" required>
        {{-- <option selected="" hidden="">Open this select menu</option> --}}
        <option value="economy" selected="true">Economy</option>
        <option value="premiumeconomy">Premium</option>
        <option value="business">Business</option>
        <option value="first">First</option>

        </select>
                    <label>TRAVEL CLASS</label>
                </div>
            </div>
            <div class="col-12 mt-4">
                <button class="btn btn-secondary text-uppercase" type="reset">Close</button>
                <button class="btn btn-primary text-uppercase" name="" type="submit">SHOWN FLIGHTS<i class="fa fa-plane ms-3"></i></button>
            </div>
        </div>
    </div>
    </form>

</div>

<!-- <script src="https://tp.media/content?trs=216990&shmarker=418774&show_hotels=false&powered_by=true&locale=en&currency=usd&searchUrl=www.aviasales.com%2Fsearch&color_button=%231A1A1a&color_icons=%231A1A1A&dark=%23262626&light=%23FFFFFF&secondary=%23FFFFFF&special=%23C4C4C4&color_focused=%231A1A1A&border_radius=0&no_labels=&plain=true&promo_id=7879&campaign_id=100" charset="utf-8"></script> -->

</body>
</html>
