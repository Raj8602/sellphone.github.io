<?php

if(isset($_POST["btn-submit"]))
{
  $mobile          = !empty($_POST['mobile'])?$_POST['mobile']:'';
  $brand           = !empty($_POST['brand'])?$_POST['brand']:'';
  $model           = !empty($_POST['model'])?$_POST['model']:'';
  $color           = !empty($_POST['color'])?$_POST['color']:'';
  $storage         = !empty($_POST['storage'])?$_POST['storage']:'';
  $check_condition = !empty($_POST['check_condition'])?$_POST['check_condition']:'';
  $device_age      = !empty($_POST['device_age'])?$_POST['device_age']:'';
  $accessories     = !empty($_POST['accessories'])?$_POST['accessories']:'';
  $name            = !empty($_POST['name'])?$_POST['name']:'';
  $email           = !empty($_POST['email'])?$_POST['email']:'';
  $mobile_no       = !empty($_POST['mobile_no'])?$_POST['mobile_no']:'';
  $alternate_no    = !empty($_POST['alternate_no'])?$_POST['alternate_no']:'';
  $address         = !empty($_POST['address'])?$_POST['address']:'';
  $pincode         = !empty($_POST['pincode'])?$_POST['pincode']:'';
  $pick_up_date    = !empty($_POST['pick_up_date'])?$_POST['pick_up_date']:'';
  $pick_up_time    = !empty($_POST['pick_up_time'])?$_POST['pick_up_time']:'';
  

  require 'phpmailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;                               
  $mail->isSMTP();                                     
  $mail->Host = 'smtp.gmail.com';              
  $mail->SMTPAuth = true;                               
  $mail->Username = 'rajeshyaduwanshi@collegedoors.com';                 
  $mail->Password = 'lwrcuxrlxqqylvlx';                           
  $mail->SMTPSecure = 'tls';                            
  $mail->Port = 587;                                    

  $mail->From = $email;
  $mail->FromName = 'Sellphone';
  $mail->addAddress('rajeshyaduwanshi@collegedoors.com');            

  //$mail->addAttachment('/var/tmp/file.tar.gz');         
  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    
  $mail->isHTML(true);                                  

  $mail->Subject = 'Sell Old Mobile';

  $bodyContent = '<h3>Customer Details</h3>'; 
  $bodyContent .= '<p><b>Name :</b> '.$name.'</p>';
  $bodyContent .= '<p><b>Email :</b> '.$email.'</p>';
  $bodyContent .= '<p><b>Mobile No. :</b> '.$mobile_no.'</p>';
  $bodyContent .= '<p><b>Alternet Mobile No.:</b> '.$alternate_no.'</p>';
  $bodyContent .= '<p><b>Address :</b> '.$address.'</p>';
  $bodyContent .= '<p><b>Pincode :</b> '.$pincode.'</p>';
  $bodyContent .= '<p><b>Pick Up Date :</b> '.$pick_up_date.'</p>';
  $bodyContent .= '<p><b>Pick Up Time :</b> '.$pick_up_time.'</p><br><br>';


  $bodyContent .= '<h3>Mobile Details</h3>'; 
  $bodyContent .= '<p><b>Brand :</b> '.$brand.'</p>';
  $bodyContent .= '<p><b>Model :</b> '.$model.'</p>';
  $bodyContent .= '<p><b>Color :</b> '.$color.'</p>';
  $bodyContent .= '<p><b>Storage :</b> '.$storage.'</p>';
  $bodyContent .= '<p><b>Device Condition :</b> '.$check_condition.'</p>';
  $bodyContent .= '<p><b>Device Age :</b> '.$device_age.'</p>';
  $bodyContent .= '<p><b>Accessories :</b> '.json_encode($accessories).'</p>';
      
  $mail->Body    = $bodyContent; 

  if(!$mail->send()) {
      $msg =  'Message could not be sent, Mailer Error: ' . $mail->ErrorInfo;
  } else {
      $msg = 'Message has been sent';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sellphone | Sell Mobile & Laptop in Mumbai - Get Best Price</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style type="text/css">
      * {
          margin: 0;
          padding: 0
      }

      html {
          height: 100%
      }

      p {
          color: grey
      }

      #heading {
          text-transform: uppercase;
          color: #a4c639;
          font-weight: normal
      }

      #msform {
          text-align: center;
          position: relative;
          margin-top: 20px;
          border: 2px solid #a4c639;
          padding: 30px;
      }

      #msform fieldset {
          background: white;
          border: 0 none;
          border-radius: 0.5rem;
          box-sizing: border-box;
          width: 100%;
          margin: 0;
          padding-bottom: 20px;
          position: relative
      }

      .form-card {
          text-align: left
      }

      #msform fieldset:not(:first-of-type) {
          display: none
      }

      #msform input,
      #msform textarea {
          padding: 12px 15px 12px 15px;
          border: 1px solid #ccc;
          border-radius: 0px;
          margin-bottom: 25px;
          margin-top: 2px;
          /*width: 100%;*/
          box-sizing: border-box;
          /*font-family: math;*/
          color: #000000;
          background-color: #ECEFF1;
          font-size: 16px;
          letter-spacing: 1px;
      }

      #msform select {
          padding: 8px 15px 8px 15px;
          border: 1px solid #ccc;
          border-radius: 0px;
          margin-bottom: 25px;
          margin-top: 2px;
          width: 100%;
          box-sizing: border-box;
          /*font-family: math;*/
          color: #000000;
          background-color: #ECEFF1;
          font-size: 16px;
          letter-spacing: 1px;
          height: 50px;
      }

      #msform .custom_input{
        height: 50px!important;
      }

      #msform input:focus,
      #msform textarea:focus {
          -moz-box-shadow: none !important;
          -webkit-box-shadow: none !important;
          box-shadow: none !important;
          border: 1px solid #a4c639;
          outline-width: 0
      }

      #msform .action-button {
          width: 100px;
          background: #a4c639;
          font-weight: bold;
          color: white;
          border: 0 none;
          border-radius: 0px;
          cursor: pointer;
          padding: 10px 5px;
          margin: 10px 0px 10px 5px;
          float: right
      }

      #msform .action-button:hover,
      #msform .action-button:focus {
          background-color: #a4c639
      }

      #msform .action-button-previous {
          width: 100px;
          background: #616161;
          font-weight: bold;
          color: white;
          border: 0 none;
          border-radius: 0px;
          cursor: pointer;
          padding: 10px 5px;
          margin: 10px 5px 10px 0px;
          float: right
      }

      #msform .action-button-previous:hover,
      #msform .action-button-previous:focus {
          background-color: #000000
      }

      .card {
          z-index: 0;
          border: none;
          position: relative
      }

      .fs-title {
          font-size: 18px;
          color: gray;
          margin-bottom: 15px;
          font-weight: normal;
          text-align: left
      }

      .purple-text {
          color: #673AB7;
          font-weight: normal
      }

      .steps {
          font-size: 18px;
          color: gray;
          margin-bottom: 10px;
          font-weight: normal;
          text-align: right
      }

      .fieldlabels {
          color: #000000;
          text-align: left;
          font-weight: 600;
      }

      #progressbar {
          margin-bottom: 30px;
          overflow: hidden;
          color: lightgrey
      }

      #progressbar .active {
          color: #673AB7
      }

      #progressbar li {
          list-style-type: none;
          font-size: 15px;
          width: 25%;
          float: left;
          position: relative;
          font-weight: 400
      }

      #progressbar #account:before {
          font-family: FontAwesome;
          content: "\f13e"
      }

      #progressbar #personal:before {
          font-family: FontAwesome;
          content: "\f007"
      }

      #progressbar #payment:before {
          font-family: FontAwesome;
          content: "\f030"
      }

      #progressbar #confirm:before {
          font-family: FontAwesome;
          content: "\f00c"
      }

      #progressbar li:before {
          width: 50px;
          height: 50px;
          line-height: 45px;
          display: block;
          font-size: 20px;
          color: #ffffff;
          background: lightgray;
          border-radius: 50%;
          margin: 0 auto 10px auto;
          padding: 2px
      }

      #progressbar li:after {
          content: '';
          width: 100%;
          height: 2px;
          background: lightgray;
          position: absolute;
          left: 0;
          top: 25px;
          z-index: -1
      }

      #progressbar li.active:before,
      #progressbar li.active:after {
          background: #673AB7
      }

      .progress {
          height: 20px
      }

      .progress-bar {
          background-color: #673AB7
      }

      .fit-image {
          width: 100%;
          object-fit: cover
      }
    </style>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-envelope"></i>contact@company.com</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>123-456-7890</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Sellphone</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">HOME
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="sell_your_device.php">SELL YOUR DEVICE</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="buy_mobile.php">BUY MOBILE</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="sell_laptop.php">SELL LAPTOP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACT US</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Sell Your Device</h1>
            <span>Lorem ipsum dolor sit amet.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="container-fluid">
              <div class="row justify-content-center">
                  <div class="col-12 text-center p-0 mt-3 mb-2">
                      <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                          <h2 id="heading"><strong>SELL OLD MOBILE</strong></h2>
                          <form id="msform" method="POST">
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row">
                                          <div class="col-7">
                                              <h2 class="fs-title">Resellfone - Selling Simplified | Same Day Pickup | Assured Sell | Best Price Fields marked with an * are required:</h2>
                                          </div>
                                      </div> 
                                      <label class="fieldlabels">What Are You Selling? <span class="text-danger">*</span></label> 
                                      <select name="mobile" class="form-control" required="">
                                        <option value="mobile" selected="selected">Mobile</option>
                                      </select>

                                      <label class="fieldlabels">Select Your Mobile Brand <span class="text-danger">*</span></label> 
                                      <select name="brand" class="form-control" required="">
                                        <option value="iphone" selected="selected">iPhone</option>
                                        <option value="oneplus">OnePlus</option>
                                        <option value="samsung">Samsung</option>
                                        <option value="google-pixel">Google Pixel</option>
                                        <option value="realme">Realme</option>
                                        <option value="mi">Mi</option>
                                        <option value="oppo">Oppo</option>
                                        <option value="vivo">Vivo</option>
                                        <option value="motorola">Motorola</option>
                                        <option value="other">Other</option>
                                      </select>

                                      <label class="fieldlabels">Model <span class="text-danger">*</span></label> <span id="error_one" class="text-danger"></span>
                                      <input type="text" class="form-control custom_input" id="model" name="model" placeholder="Example - iPhone 11 Pro , Samsung Note10 , OnePlus 7 Pro" /> 

                                      <label class="fieldlabels">Color <span class="text-danger">*</span></label> <span id="error_two" class="text-danger"></span>
                                      <input type="text" class="form-control custom_input" name="color" id="color" />

                                      <label class="fieldlabels">Storage <span class="text-danger">*</span></label> 
                                      <select name="storage" class="form-control" required="">
                                        <option value="16gb" selected="selected">16GB</option>
                                        <option value="32gb">32GB</option>
                                        <option value="64gb">64GB</option>
                                        <option value="128gb">128GB</option>
                                        <option value="256gb">256GB</option>
                                        <option value="512gb">512GB</option>
                                        <option value="1tb">1TB</option>
                                      </select>
                                  </div> 
                                  <input type="button" name="next" class="next action-button" value="Next" />
                              </fieldset>
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row">
                                          <div class="col-7">
                                              <h2 class="fs-title">Resellfone - Selling Simplified | Same Day Pickup | Assured Sell | Best Price Fields marked with an * are required:</h2>
                                          </div>
                                          <div class="col-5">
                                              
                                          </div>
                                          <div class="col-12">
                                            <strong>Condition <span class="text-danger">*</span></strong>
                                          </div>
                                          <br><br>
                                          <div class="col-12">
                                            <strong>Mint</strong>- Your device has no scratches or scuffs anywhere on the body. All of the functions work perfectly. Looks basically brand new
                                          </div>
                                          <br><br>
                                          <div class="col-12">
                                            <strong>Good</strong>- Your device has some light scratches on the body. There are no large scratches or scuffs. No cracks or dents anywhere on the body. All of the functions work perfectly
                                          </div>
                                          <br><br><br>
                                          <div class="col-12">
                                            <strong>Fair</strong>- Your device has a lot of scratches and/or scuffs on the body. There are dents on the body. All of the functions work perfectly.
                                          </div>
                                          <br><br>
                                          <div class="col-12">
                                            <strong>Faulty</strong>- Your device is not functioning properly due to issues.
                                          </div>
                                          <br>
                                          <br>
                                          <div class="col-12">
                                            <strong>Note : We do not accept devices that are water damaged</strong>
                                          </div>
                                          <br><br>
                                          <div class="col-12">
                                            <ul>
                                              <li>
                                                <input type="radio" class="check_condition" name="check_condition" value="mint" required="">
                                                <label for="" class="">Mint</label>
                                              </li>
                                              <li>
                                                <input type="radio" class="check_condition" name="check_condition" value="good" required="" >
                                                <label for="" class="">Good </label>
                                              </li>
                                              <li>
                                                <input type="radio" class="check_condition" name="check_condition" value="fair" required="" >
                                                <label for="" class="">Fair</label>
                                              </li>
                                              <li>
                                                <input type="radio" class="check_condition" name="check_condition" value="faulty" required="" >
                                                <label for="" class="">Faulty</label>
                                              </li>
                                            </ul>
                                            <span id="error_three" class="text-danger"></span>
                                          </div>
                                          <div class="col-12">
                                            <strong>Select Device Age <span class="text-danger">*</span></strong>
                                          </div>
                                          <br><br>
                                          <div class="col-12">
                                            <ul aria-describedby="nf-error-20">
                                              <li>
                                                <input type="radio" name="device_age" class="check_condition" value="Below 3 Months" >
                                                <label for="" class="">Below 3 Months</label>
                                              </li>
                                              <li>
                                                <input type="radio" name="device_age" class="check_condition" value="4 months - 8 months" >
                                                <label for="" class="">4 months - 8 months</label>
                                              </li>
                                              <li>
                                                <input type="radio" name="device_age" class="check_condition" value="9 months - 11 months" >
                                                <label for="" class="">9 months - 11 months</label>
                                              </li>
                                              <li>
                                                <input type="radio" name="device_age" class="check_condition" value="Above 11 months" >
                                                <label for="" class="">Above 11 months</label>
                                              </li>
                                            </ul>
                                            <span id="error_four" class="text-danger"></span>
                                          </div>

                                          <div class="col-12">
                                            <strong>Do you have following Accessories <span class="text-danger">*</span></strong>
                                          </div>
                                          <br><br>
                                          <div class="col-12">
                                            <p>Please select accessories which are available</p>
                                            <ul>
                                              <li>
                                                <input type="checkbox" name="accessories[]" value="Original Charger">
                                                <label for="" class="">Original Charger</label>
                                              </li>
                                              <li>
                                                <input type="checkbox" name="accessories[]" value="Box" >
                                                <label for="" class="">Box</label>
                                              </li>
                                              <li>
                                                <input type="checkbox" name="accessories[]" value="Valid Bill" >
                                                <label for="" class="">Valid Bill</label>
                                              </li>
                                              <li>
                                                <input type="checkbox" name="accessories[]" value="Earphones" >
                                                <label for="" class="">Earphones</label>
                                              </li>
                                              <li>
                                                <input type="checkbox" name="accessories[]" value="None of Above">
                                                <label for="" class="">None of Above</label>
                                              </li>
                                            </ul>
                                            <span id="error_five" class="text-danger"></span>
                                          </div>
                                      </div> 
                                  </div> 
                                  <input type="button" name="next" class="next_one action-button" value="Next" /> 
                                  <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                              </fieldset>
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row">
                                          <div class="col-7">
                                              <h2 class="fs-title">Resellfone - Selling Simplified | Same Day Pickup | Assured Sell | Best Price Fields marked with an * are required:</h2>
                                          </div>
                                      </div> 
                                      <label class="fieldlabels">Name <span class="text-danger">*</span>
                                      </label> <span id="error_six" class="text-danger"></span> 
                                      <input type="text" class="form-control custom_input" name="name" id="name"> 

                                      <label class="fieldlabels">Email <span class="text-danger">*</span></label> <span id="error_seven" class="text-danger"></span> 
                                      <input type="text" class="form-control custom_input" name="email" id="email">
                                      <div class="row">
                                        <div class="col-6">
                                          <label class="fieldlabels">Mobile <span class="text-danger">*</span></label> <span id="error_eight" class="text-danger"></span>
                                          <input type="number" class="form-control custom_input" name="mobile_no" id="mobile_no">
                                        </div>
                                        <div class="col-6">
                                          <label class="fieldlabels">Alternate No <span class="text-danger">*</span></label> <span id="error_nine" class="text-danger"></span>
                                          <input type="number" class="form-control custom_input" name="alternate_no" id="alternate_no">
                                        </div>
                                      </div>
                                      <label class="fieldlabels">Address <span class="text-danger">*</span></label> <span id="error_ten" class="text-danger"></span>
                                      <input type="text" class="form-control custom_input" placeholder="Please Provide Proper Address..." name="address" id="address">
                                      <label class="fieldlabels">Pincode <span class="text-danger">*</span></label> <span id="error_eleven" class="text-danger"></span>
                                      <input type="text" class="form-control custom_input" name="pincode" id="pincode">
                                      <div class="row">
                                        <div class="col-6">
                                          <label class="fieldlabels">Pick Up Date <span class="text-danger">*</span></label> <span id="error_twelv" class="text-danger"></span>
                                          <input type="date" class="form-control custom_input" data-date-format="dd/mm/yyyy" name="pick_up_date" id="pick_up_date">
                                        </div>
                                        <div class="col-6">
                                          <label class="fieldlabels">Pickup Time <span class="text-danger">*</span></label> <span id="error_thirteen" class="text-danger"></span>
                                          <select name="pick_up_time" id="pick_up_time" class="form-control" >
                                            <option value="10-am-12-pm" selected="selected">10AM - 12PM</option>
                                            <option value="12-pm-2-pm">12PM - 2PM</option>
                                            <option value="2-pm-4-pm">2PM - 4PM</option>
                                            <option value="4-pm-6-pm">4PM - 6PM</option>
                                            <option value="6-pm-8-pm">6PM - 8PM</option>
                                          </select>
                                        </div>
                                      </div>
                                  </div> 
                                  <input type="submit" name="btn-submit" class="next_two action-button" value="Get Quote" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                              </fieldset>
                              <fieldset>
                                  <div class="form-card">
                                      <div class="row">
                                          <div class="col-7">
                                              <h2 class="fs-title">Finish:</h2>
                                          </div>
                                          <div class="col-5">
                                              
                                          </div>
                                      </div> 
                                      <br><br>
                                      <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                      <div class="row justify-content-center">
                                          <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                      </div> <br><br>
                                      <div class="row justify-content-center">
                                          <div class="col-7 text-center">
                                              <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                          </div>
                                      </div>
                                  </div>
                              </fieldset>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>

        <br>
        <br>
      </div>
    </div>

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Sellphone</h4>
            <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Useful Links</h4>
            <ul class="menu-list">
              <li><a href="sell_your_device.php">Sell Old Mobile</a></li>
              <li><a href="sell_laptop.php">Sell Old Laptop</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Additional Pages</h4>
            <ul class="menu-list">
              <li><a href="sell_your_device.php">Sell Old Mobile</a></li>
              <li><a href="sell_laptop.php">Sell Old Laptop</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" name="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>
                Copyright © 2020 - <a href="index.php">Sellphone</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    setProgressBar(current);

    $(".next").click(function(){
      var color = $('#color').val();
      var model = $('#model').val();
      $('#error_one').html('');
      $('#error_two').html('');

      if(model == ""){
        $('#error_one').append('This is a required field.!');
        return false;
      }else{
        $('#error_one').hide();
      }

      if(color == ""){
        $('#error_two').append('This is a required field.!');
        return false;
      }else{
       $('#error_two').hide();
      }

      current_fs = $(this).parent();
      next_fs = $(this).parent().next();

      //Add Class Active
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style

      current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        next_fs.css({'opacity': opacity});
        },
        duration: 500
      });
      setProgressBar(++current);
    });

    $(".next_one").click(function(){
      $('#error_three').html('');
      $('#error_four').html('');
      $('#error_five').html('');

      if (document.querySelectorAll('input[name="check_condition"]:checked').length > 0) {
        $('#error_three').hide();
      } else {
        $('#error_three').append('This is a required field.!');
        return false;
      }

      if (document.querySelectorAll('input[name="device_age"]:checked').length > 0) {
        $('#error_four').hide();
      } else {
        $('#error_four').append('This is a required field.!');
        return false;
      }

      if (document.querySelectorAll('input[name="accessories[]"]:checked').length > 0) {
        $('#error_five').hide();
      } else {
        $('#error_five').append('This is a required field.!');
        return false;
      }

      current_fs = $(this).parent();
      next_fs = $(this).parent().next();

      //Add Class Active
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style

      current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        next_fs.css({'opacity': opacity});
        },
        duration: 500
      });
      setProgressBar(++current);
    });

    $(".next_two").click(function(){
      $('#error_six').html('');
      $('#error_seven').html('');
      $('#error_eight').html('');
      $('#error_nine').html('');
      $('#error_ten').html('');
      $('#error_eleven').html('');
      $('#error_twelv').html('');
      $('#error_thirteen').html('');

      var name = $('#name').val();
      var email = $('#email').val();
      var mobile_no = $('#mobile_no').val();
      var alternate_no = $('#alternate_no').val();
      var address = $('#address').val();
      var pincode = $('#pincode').val();
      var pick_up_date = $('#pick_up_date').val();
      var pick_up_time = $('#pick_up_time').val();

      if(name == ""){
        $('#error_six').append('This is a required field.!');
        return false;
      }else{
        $('#error_six').hide();
      }

      if(email == ""){
        $('#error_seven').append('This is a required field.!');
        return false;
      }else{
        $('#error_seven').hide();
      }

      if(mobile_no == ""){
        $('#error_eight').append('This is a required field.!');
        return false;
      }else{
        $('#error_eight').hide();
      }

      if(alternate_no == ""){
        $('#error_nine').append('This is a required field.!');
        return false;
      }else{
        $('#error_nine').hide();
      }

      if(address == ""){
        $('#error_ten').append('This is a required field.!');
        return false;
      }else{
        $('#error_ten').hide();
      }

      if(pincode == ""){
        $('#error_eleven').append('This is a required field.!');
        return false;
      }else{
        $('#error_eleven').hide();
      }

      if(pick_up_date == ""){
        $('#error_twelv').append('This is a required field.!');
        return false;
      }else{
        $('#error_twelv').hide();
      }

      if(pick_up_time == ""){
        $('#error_thirteen').append('This is a required field.!');
        return false;
      }else{
        $('#error_thirteen').hide();
      }



      current_fs = $(this).parent();
      next_fs = $(this).parent().next();

      //Add Class Active
      $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style

      current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        next_fs.css({'opacity': opacity});
        },
        duration: 500
      });
      setProgressBar(++current);
    });

    $(".previous").click(function(){

      current_fs = $(this).parent();
      previous_fs = $(this).parent().prev();

      //Remove class active
      $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

      //show the previous fieldset
      previous_fs.show();

      //hide the current fieldset with style
      current_fs.animate({opacity: 0}, {
        step: function(now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });
        previous_fs.css({'opacity': opacity});
        },
        duration: 500
      });
      setProgressBar(--current);
    });

    function setProgressBar(curStep){
      var percent = parseFloat(100 / steps) * curStep;
      percent = percent.toFixed();
      $(".progress-bar")
      .css("width",percent+"%")
    }

    $(".submit").click(function(){
      return false;
    })

});
</script>