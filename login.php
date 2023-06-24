
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="screen" type="text/css" href="login.css"/>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
</style>

</head>
<body >

  <div class="form">
    
    <ul class="tab-group">
      <li class="tab active"><a href="#signup">Sign Up</a></li>
      <li class="tab"><a id="lienlogin" href="#login">Log In</a></li>
    </ul>
    
    <div class="tab-content">
      <div id="signup">   
        <h1>Sign Up for Free</h1>
        
        <form action="inscription.php" method="post">
        
        <div class="top-row">
          <div class="field-wrap">
            <label>
              First Name<span class="req">*</span>
            </label>
            <input type="text" required name="prenom"  autocomplete="off" />
          </div>
      
          <div class="field-wrap">
            <label>
              Last Name<span class="req">*</span>
            </label>
            <input type="text" required name="nom"  autocomplete="off"/>
          </div>
        </div>

        <div class="field-wrap">
          <label>
            Email Address<span class="req">*</span>
          </label>
          <input type="email" required name="email" autocomplete="off"/>
        </div>
        
        <div class="field-wrap">
          <label>
            Set A Password<span class="req">*</span>
          </label>
          <input type="password" required name="mdp" autocomplete="off"/>
        </div>
        
        <button type="submit" class="button button-block"/>Get Started</button>
        
        </form>

      </div>
      
      <div id="login">   
        <h1>Welcome Back!</h1>
        
        <form action="authentification.php" method="post">
        
          <div class="field-wrap">
          <label>
            Email Address<span class="req">*</span>
          </label>
          <input type="email" required name="email" autocomplete="off"/>
        </div>
        
        <div class="field-wrap">
          <label>
            Password<span class="req">*</span>
          </label>
          <input type="password" required name="mdp" autocomplete="off"/>
        </div>
        
        <p class="forgot"><a href="#">Forgot Password?</a></p>
        
        <button type="submit" class="button button-block"/>Log In</button>
          <?php
          if(isset($_GET['erreur'])){
          $err = $_GET['erreur'];
          if($err==1 )
          
          echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
          if($err==2)
          echo "<p style='color:red'>utilisateur ou mot de passe vide</p>";
          }
          ?>
        </form>

      </div>
      
    </div><!-- tab-content -->
    
  </div> <!-- /form --> 
  
<script
src="https://code.jquery.com/jquery-3.7.0.js"
integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
crossorigin="anonymous"></script>
<script type="text/javascript" src="login.js"></script>

<script type="text/javascript">
  const urlParams = new URLSearchParams(document.referrer);
console.log(urlParams);

const queryString = window.location.search;
const params = new URLSearchParams(queryString);


if (params.has('erreur')) {
  const err = params.get('erreur');
  console.log(typeof(err));
  if(err == "1"){
    var button = document.getElementById('lienlogin');
    button.click();
  }
}
  
</script>

</body>


</html>


