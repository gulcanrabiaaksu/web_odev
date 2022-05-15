<!DOCTYPE html>
<html lange="tr">
<head>

 <meta charset="UTF-8"/>
 <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
 <title>Panel Sayfası</title>
 



 <link rel="icon" href="resim/favicon.ico" type="image/x-icon"/>
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <!--BOOTSTRAP CSS-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
 integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="bootstrap.css" >




</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-a fixed-top">


</button>
<div class="collapse navbar-collapse" id="navbarNav">
 <ul class="navbar-nav mx-auto">
  <li class="nav-item">
    <a class="nav-link" href="#"> GÜLCAN RABİA AKSU</a>
  </li>
   <li class="nav-item">
     <a class="nav-link" href="hakkimda.html"> HAKKIMDA</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="ozgecmis.html"> ÖZ GEÇMİŞ</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="sehrim.html"> ŞEHRİM</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="takımımız.html"> TAKIMIMIZ</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="ilgi.html"> İLGİ ALANLARIM</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="iletisim.html"> İLETİŞİM</a>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="login.php"> GİRİŞ YAP</a>
  </li>
   
  </ul>
  </div>
  </nav>
  <br>
  <br>
</div>

<!--BASLİK-->
<center>
<h1 ><strong> Panel </strong></h1><br><br>
</center>

		<div class="container">
			
			<?php 

				include("kisiler.php");

        //if komutuyla eğer formdaki user ve password kısmı post edilirse bu komutlar calışsın
				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
				  
			       echo(" HOŞGELDİNİZ ' $user ' ");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış !<br>";
			            echo " Login Sayfasına Yönlendiriliyorsunuz. ";
			            header('Refresh: 2; url="login.php"');
			    }
			
			?>
			
		</div>

	</main>
    