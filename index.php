<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .carousel-caption
        {
          top: 45%;
        }
      
        .imagesss
        {
          max-width: 100%;
          max-height: 100%;
        }

        .thirdpage
        {
          height: 1080px;
          width: 100%;
          background: url("norm.png");
        }

        .input-group
        {
          width: 45%;
          left: 25%;
          top: 5%;
        }

        .btn-outline-secondary
        {
          background-image: linear-gradient(to right, #2193b0,#6dd5ed);
          color: black;
          font-weight: bold;
        }
        .btn-outline-secondary:hover
        {
          background-image: linear-gradient(to right, #eb3349 ,#f45c43);
        }
        .form-control
        {
          border-radius: .5rem;
        }

        .thirdcard
        {
          margin-top: 100px;
          
        }
        .pasherlikha
        {
          margin-top: 80px;
          color: white;
        }

        .aboutus
        {
          height: 275px;
          width: 100%;
        }

        .rounded-circle
        {
          border: 2px solid #73AD21;
        }
        .box select
        {
          background: #0563af;
          color: #fff;
          height: 40px;
          border: none;
          font: 20px;
          box-shadow: 0 5px 25px rgba(0,0,0,0.5);
          -webkit-appearance: button;
        }
        
        .searchtext
        {
            color: #15f4ee;
            background: transparent;
            border: 3px solid #15f4ee;
            transition: 1.5s;
            width: 240px;
            height: 40px;
        }
        .searchtext:hover
        {
            box-shadow: 0 3px 5px 0 #15f4ee inset,0 3px 5px 0 #15f4ee inset,
            0 3px 5px 0 #15f4ee inset, 0 3px 5px 0 #15f4ee inset;
            text-shadow: 0 0 5px #15f4ee, 0 0 5px #15f4ee;
        }
        .searchtext:after
        {
            color: #15f4ee;
            background: transparent;
            border: 3px solid #15f4ee;
            width: 240px;
            height: 40px;
        }
        .searchbtn
        {
            height: 40px;
            display: inline-block;
            transition: 0.3s;
            border: 3px solid #255784;
            background: transparent;
            color: #2196f3;
            overflow: hidden;
        }
        .searchbtn:hover
        {
            background: #2196f3;
            box-shadow: 0 0 10px #2196f3,0 0 40px #2196f3,
            0 0 80px #2196f3;
            color: white;
        }
        .txtxt1
        {
            animation: mymove 5s infinite;
            color: #FCF6F5FF;
        }
        @keyframes mymove {
  50% {color: #0063b2ff;}
}

.txtxt
        {
            animation: mve 5s infinite;
            color: red;
        }
        @keyframes mve {
  50% {color: blue;}
}

.txt2
{
    animation: my 5s infinite;
            color: greenyellow;
}

@keyframes my {
  50% {color: whitesmoke;}
}
.txt3
{
    animation: hudai 5s infinite;
            color: #12232E;
}

@keyframes hudai {
  50% {color: #4DA8DA;}
}

.crd:hover
{
            background: #2196f3;
            box-shadow: 0 0 10px #2196f3,0 0 40px #2196f3,
            0 0 80px #2196f3;
}
        
    </style>
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#tp">Weather status</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#carouselExampleIndicators">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutuss">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#tp">Weather Update</a>
                
            </li>
            
          </ul>
        </div>
      </nav>

      <!-- Carousel -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          
          <div class="carousel-item active">
            
            <img class="d-block w-100" src="weather.jpg" alt="First slide">
            
            <div class="carousel-caption d-none d-md-block">
              
                <h5 style="font-weight: bold;">Welcome To This Website</h5>
                <p style="font-weight: bold;">We are here to provide our services</p>
                <a href="#tp">
                <button type="button" class="btn btn-outline-light" style="margin-top: 40px; font-weight: bold;">Get Started</button>
                </a>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="snow1.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="font-weight: bold; color:black;">Current Weather Update</h5>
                <p style="font-weight: bold; color:black;">We are here to update any city's current weather update.</p>
                <a href="#tp">
                <button type="button" class="btn btn-outline-dark" style="margin-top: 40px; font-weight: bold;">Get Started</button>
                </a>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="sunny1.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 style="font-weight: bold;">Wind Speed & Humidity</h5>
                <p style="font-weight: bold;">Your desired city's wind speed and humidity update will be in hand.</p>
                <a href="#tp">
                <button type="button" class="btn btn-outline-light" style="margin-top: 40px; font-weight: bold;">Get Started</button>
                </a>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      

      <!--Third page-->

      <section class="thirdpage" id="tp">
      <div class="container" >
      <div class="row">
    <div class="col-sm-6 col-md-5 col-lg-6"></div>
    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0 searchbox">
    
    <form method="POST" style="margin-top: 20px;">
        <input type="text" placeholder="Enter City Name" name="searchbar" class="searchtext" style="border-radius:20px; padding-left:8px;">
        <input type="submit" name="submit" value="Search" class="searchbtn" style= "border-radius:20px;">
        </form>

    </div>
    </div>
      </div>

        <?php
        $api_key = '20a0642f18ab84572bfe3d240ebf1eb6';
        $flag = 0;
if(isset($_POST['submit']))
{
    $city_name = $_POST['searchbar'];
    $flag = 1;
  
}

if($flag == 1)
{
  //main code
  $api_url= 'http://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;
$weather_data = json_decode(file_get_contents($api_url),true);
$temparature = $weather_data['main']['temp'];
$temparature_in_celc= $temparature-273.15;

$wind = $weather_data['wind']['speed'];
$feelslike = $weather_data['main']['feels_like'];
$feelslike_in_calc = $feelslike-273.15;
$hum = $weather_data['main']['humidity'];
$name = $weather_data['sys']['country'];
$desc = $weather_data['weather']['0']['description'];
$icon = $weather_data['weather']['0']['icon'];
$date = $weather_data['dt'];
//echo $wind;
//echo "<pre>";
//print_r($weather_data);
}
?>

        <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-5 col-lg-6 thirdcard">

            <div class="card-group crd">
              <div class="card">
                  <?php
                  if($flag==0)
                  {
                    echo "<img class='card-img-top' src='hudai.jpg' alt='Card image cap'>";
                  }
                  else
                  {
                    if($temparature_in_celc<6)
                  {
                    echo "<img class='card-img-top' src='snow.jpg' alt='Card image cap'>";
                  }
                  elseif($temparature_in_celc>6 && $temparature_in_celc<23)
                  {
                    echo "<img class='card-img-top' src='weather.jpg' alt='Card image cap'>";
                  }
                  elseif($temparature_in_celc>=23)
                  {
                    echo "<img class='card-img-top' src='sunny.jpg' alt='Card image cap'>";
                  }
                  }
                  
                  ?>
                
                <div class="card-body" style="background-image:linear-gradient(to right,#a1c4fd,#c2e9fb)">
                  <h5 class="card-title txtxt">
                  <?php
                  if($flag == 0)
                  {echo "...";}
                  else{echo $city_name;}
                  ?>
                  </h5>
                  <p class="card-text txt3" style="font-weight: bold;">
                  Current Temparature:
                  <?php
                  if($flag == 0)
                  {echo "...";}
                  else{echo round($temparature_in_celc);}
                  
                  ?><sup>0</sup>C<br>
                  Current Wind Speed:
                  <?php
                  if($flag == 0)
                  {echo "...";}
                  else
                  {echo $wind;}
                  ?>
                  m/sec<br>
                  Current Humidity:
                  <?php
                  if($flag == 0)
                  {echo "...";}
                  else{echo $hum;}
                  
                  ?>%<br>
                  Current Weather Details: <?php 
                  if($flag == 0)
                  {echo "...";}
                  else{echo $desc;}
                  ?><br>
                  Cuurent Weather Condition: <img src="http://openweathermap.org/img/wn/<?php echo $icon?>@2x.png" alt="..."/><br>
                  Today's Date: <?php 
                  if($flag == 0)
                  {echo "...";}
                  else{echo date('d M',$date);}
                  ?>
                  </p>
                </div>
                <div class="card-footer">
                  <small class="text-muted" style="font-weight: bold;">Feels Like:
                  <?php
                  if($flag == 0)
                  {echo "...";}
                  else{echo round($feelslike_in_calc);}
                  ?><sup>0</sup>C
                  </small>
                </div>
              </div>
            </div>

          </div>

          <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0 pasherlikha">
            <h4 class="txt2" style="margin-top: 40px;text-align:right;">Any city of the world you can search</h5>
              <p class="txtxt1" style="margin-top: 20px;font-weight: bold;text-align:end;">We will inform you about the city's temparature</p>
              <p class="txtxt1" style="text-align:end; font-weight: bold;">You will be able to know weather condition.</p>
              <p class="txtxt1" style="text-align:end; font-weight: bold;">We provide you the wind speed.</p>
              <p class="txtxt1" style="text-align:end; font-weight: bold;">You will be able to know current date and month.</p>
          </div>
        </div>
      </div>

        
      </section>


      <!-- About us -->

      <section class="aboutus" id="aboutuss">
        <div class="container">
        <div class="col align-self-center">
          <h4 style="text-align: center; color: red; margin-top: 10px;">ABOUT ME</h4>
        </div>
      </div>

        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-5 col-lg-6">
              <p style="font-weight: bold;">Name: Fuad Chowdhury</p>
              <p style="font-weight: bold;">Contact: 01710-******</p>
              <p style="font-weight: bold;">Email: fuadaust007@gmail.com</p>
              <p style="font-weight: bold;">You can give any kind of suggestion related to this project via email</p>

            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
              
              <img src="fuad.jpg" alt="Author's pic" class="rounded-circle img-fluid" style="margin-left: 200px;">
              <a href="https://github.com/rio137">
              <img src="github.png" alt="Author's pic" class="rounded-circle img-fluid" style="margin-top: 40px;">
            </a>
              </div>
        </div>
      </section>

      
      
    
      <script type="text/javascript">
        $(document).ready(function () {
            $('.carousel').carousel({
                interval: 10
            });
        
            $('.carousel').carousel('cycle');
        });
        </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
