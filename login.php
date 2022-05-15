<!DOCTYPE html>
<html lange="tr">
<head>

 <meta charset="UTF-8"/>
 <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
 <title>Giriş Yap Sayfası</title>
 



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
    <a class="nav-link" href="login.html"> GİRİŞ YAP</a>
  </li>
  
  </ul>
</div>
</nav>
<br>
<br>	
	
	<main>
<!--BASLİK-->
<center>
<h1><strong> Login Sayfası </strong> </h1><br><br>
</center>
		<div class="container">
			
			<form action="panel.php" method="POST">
				<div class="form-group">
					<label for="email "><strong>Mail Adresi :</strong></label>
					<input type="text" name="email" class="form-control" placeholder="Emailinizi 'b123456789@sakarya.edu.tr veya 'g123456789@sakarya.edu.tr' veya 'b12345678@sakarya.edu.tr' giriniz." required="required">
				</div>
				<div class="form-group">
					<label for="password"><strong>Şifre :</strong></label>
					<input type="password" name="password" class="form-control" placeholder="Şifreyi '12345' giriniz." required="required">
				</div>
				<button class="btn btn btn-dark " type="submit">Gönder</button>
				<br><br><br>
			</form>
		</div>
	</main>
	
	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
</body>
</html>