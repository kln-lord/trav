<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/logo-icon1.png">
    <title>Trav - Search results</title>
</head>
<style>
    body{
        font-family: 'futura';
        background: url();
    }
    .containerCard {
        margin-top: 20px;
        width:fit-content;
        height:500px;
        backdrop-filter: blur(15px) saturate(180%);
        -webkit-backdrop-filter: blur(16px) saturate(180%);
        background-color: rgba(17, 25, 40, 0.25);
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.125);
        padding: 38px;
        filter: drop-shadow(0 30px 10px rgba(0,0,0,0.125));
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content:center;
        text-align: center;

      }

      .wrapper {
        width: 50%;
        height: 50%;

      }

      .banner-image {
        background-position: center;
        background-size: cover;
        height: 100px;
        width: 100%;
        border-radius: 12px;
        margin-top: -20px;
      }

      h1{
        font-family: 'Righteous', sans-serif;
        color: rgba(255,255,255,0.98);
        text-transform: uppercase;
        font-size: 1rem;
      }

      p {
        color: #fff;
        font-family: 'futura', sans-serif;
        text-align: center;
        font-size: 0.8rem;
        line-height: 150%;
        letter-spacing: 2px;
        text-transform: uppercase;
        width: 150px;
        margin-left: -10px;
        margin-top: -10px;
      }

      .button-wrapper{
        margin-top: 75px;
      }

      .btn {
        border: none;
        padding: 12px 24px;
        border-radius: 24px;
        font-size: 12px;
        font-size: 0.8rem;
        letter-spacing: 2px;
        cursor: pointer;
        scale: 0.8;
      }

      .btn + .btn {
        margin-left: 10px;
      }

      .outline {
        background: transparent;
        color: #1a1a1a;
        border: 1px solid #1a1a1a;
        transition: all .3s ease;

      }

      .outline:hover{
        transform: scale(1.125);
        color: rgba(255, 255, 255, 0.9);
        border-color: rgba(255, 255, 255, 0.9);
        transition: all .3s ease;
      }

      .fill {
        background: #1a1a1a;
        color: rgba(255,255,255,0.95);
        filter: drop-shadow(0);
        font-weight: bold;
        transition: all .3s ease;
      }

      .fill:hover{
        transform: scale(1.125);
        border-color: rgba(255, 255, 255, 0.9);
        filter: drop-shadow(0 10px 5px rgba(0,0,0,0.125));
        transition: all .3s ease;
      }
            /* alert */
      .alert-container{
        position: fixed;
        width: 100%;
      }
      .alert {
        z-index: 100;
        width: 40%;
        margin: 20px auto;
        padding: 30px;
        padding-top: 6px;
        position: relative;
        border-radius: 5px;
        box-shadow: 0 0 15px 5px #ccc;
        margin-top: -4000px;
        scale: 0.6;
      }

      .closeMesseage {
        position: absolute;
        width: 30px;
        height: 30px;
        opacity: 0.5;
        border-width: 1px;
        border-style: solid;
        border-radius: 50%;
        right: 15px;
        top: 25px;
        text-align: center;
        font-size: 1.6em;
        cursor: pointer;
      }

      .simple-alert {
        background-color: #ebebeb;
        border-left: 5px solid #6c6c6c;
        height:40px;

      }
      .simple-alert .closeMesseage {
        border-color: #6c6c6c;
        color: #6c6c6c;
      }

      .success-alert {
        background-color: #a8f0c6;
        border-left: 5px solid #178344;
        height:40px;
        color:black;
      }
      .success-alert .closeMesseage {
        border-color: #178344;
        color: #178344;
      }

      .danger-alert {
        background-color: #f7a7a3;
        border-left: 5px solid #8f130c;
        height:40px;

      }
      .danger-alert .closeMesseage {
        border-color: #8f130c;
        color: #8f130c;
      }

      .warning-alert {
        background-color: #ffd48a;
        border-left: 5px solid #8a5700;
      }
      .warning-alert .closeMesseage {
        border-color: #8a5700;
        color: #8a5700;
      }

      .flights{
        text-align: center;
        margin-top: 20px;
        color: black;
        font-size: 1rem;
      }
</style>
<body>

            <div class="flights">Available Offers for {{$destination}} :
            <table id="resultTable" style="position:absolute;left:36%">
            @foreach ($results as $result)
            <td><form method="post" action="/addToCart"><div style = "background-image:linear-gradient(rgba(50,50,50,0.5), rgba(50,50,50,0.5)),url({{asset('images/' . str_replace(' ','',$result->destination) . '.jpg')}});background-size:cover;background-position:center;" class="containerCard">
                @csrf
                <div class="wrapper">
                <div class="banner-image" style="background-image: url({{asset('images/' . str_replace(' ','',$result->destination) . '.jpg')}})
                "> </div>
                <h1>{{$result->destination}}</h1>
                <p><input name="id" type = "hidden" value = "{{$result->id}}" ><input name="departing_date" type = "hidden" value = "{{$departing_date}}" ><br/>
                    {{$result->offer}} For only  {{$result->price}} Expiration Date: {{$result->expiration_date}}</p>
                </div>
                <div class="button-wrapper">
                <button class="btn outline" type="button">DETAILS</button>
                <button class="btn fill" name="addToCart" type="submit">BOOK NOW</button>
                </div>
                </div>
            </div></td>

            @endforeach
    </table>



</body>
</html>
