<?php
session_start();

if (isset($_SESSION['user_logged_in']) == TRUE ) {
    header('Location:../view/main.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title>Diplomások</title>
<h1 class = "cim"> DiplomaKözpont </h1>
  </head>
  <body>
    <div class="csomag">
      <div class="title">
Bejelentkezés</div>
<form action="../controller/controller.php" method="POST">
        <div class="field">
          <input type="text" required id="neptun" name="neptun" placeholder="Neptun kód">
        </div>
        <div class="field">
          <input type="password" id="password" name="password" required placeholder="Jelszó">
        </div>
<div class="content">
   
<div>
    <button class="btn" type="submit" value="Submit">Bejelentkezés</button>
</div>

</form>
</div>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  width: 100%;
  place-items: center;
  background: #460142;
  background-image: url("img/szines.png");
  background-repeat: no-repeat;
  background-position: 3% 65%;
  
}

h1{
  font-size: 30px;
  font-weight: 1000;
  text-align: center;
  line-height: 70px;
  width: 1400px;
  color: rgb(253, 222, 137);
  user-select: none;
  border-radius: 15px 15px 15px 15px;
  background:  #401b58;
  margin-top: -30px;
}
.csomag{
  height: 400px;
  width: 500px;
  background: rgb(253, 222, 137);
  border-radius: 20px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  margin-top: -50px;
  margin-left: 500px;
}
.csomag .title{ 
    /* felső lila rész*/
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: rgb(253, 222, 137);
  user-select: none;
  border-radius: 15px 15px 0 0;
  background:  #401b58;
}
.csomag form{
  padding: 10px 30px 50px 30px;
}
.csomag form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: 50%;
}
.csomag form .field input{
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 15px;
  border: 1px solid rgb(253, 222, 137);
  border-radius: 25px;
  transition: all 0.3s ease;
}

form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}

.btn{
  width:400px;
  background-color: #401b58;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 25px;
  font-size: 16px;
  margin-top: 40px;
}

select{
  font-size:12px;
}

form .field input[type="submit"]{
  color: rgb(253, 222, 137);
  border: none;
  padding-left: 0;
  margin-top: 0px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: #401b58;
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #262626;
  margin-top: 20px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #4158d0;
  text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
}
</style>

</body>
</html>
