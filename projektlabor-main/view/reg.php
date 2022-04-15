<html>
<head>
<?php
    if (session_status () == PHP_SESSION_NONE)
    {
        session_start ();
    }
?>
<meta name="viewport" content= "width=device-width, user-scalable=no" charset="utf-8">

<div>
   <?php
   include 'header.php';
    ?>
</div>
</head>

<body>
<div class="box">
    <div class="title">
            Regisztráció</div>
    <form method="POST" action="../controller/register.php">
        <div class="field">
          <input name="neptun" type="text" required placeholder="Neptun kód">
        </div>
    <div class="field">
          <input name="psw" type="password" required placeholder="Jelszó">
        </div>

        <div name="userlvl" class="field">
            <select class="select" name="Userlvl" id="Userlvl">
            <option disabled selected>Felhasználó szintje</option>
            <option value="2">Admin</option>
            <option value="1">Oktató</option>
            <option value="0">Hallgató</option>
            </select>
        </div>
            <button type="submit" name="submit" class="btn" value="submit" onclick="return Validate()" >Regisztrálás</button>

    </form>
    </div>
    </div>
</div>
<style>
  body{
	background: #fff;
    background-image: url("img/szines.png");
    background-repeat: no-repeat;
    background-position: 100px;
	color: rgb(255, 233, 198);
	font-family: Arial;
	font-size: 20px;
}

.box{
  width: 380px;
  background: rgb(255, 220, 163);
  border-radius: 20px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  margin:130px; 
  float:right;
  }

  .box .title{ 
      /* felső lila rész*/
    font-size: 35px;
    font-weight: 600;
    text-align: center;
    line-height: 100px;
    color: rgb(250, 197, 111);
    user-select: none;
    border-radius: 15px 15px 0 0;
    background:  #401b58;
  }
  .box form{
    padding: 10px 30px 50px 30px;
    
  }
  .box form .field{
    height: 50px;
    width: 100%;
    margin-top: 20px;

    
    
  }
  .box form .field input{
    height: 100%;
    width: 100%;
    outline: none;
    font-size: 17px;
    padding-left: 20px;
    border: 1px solid lightgrey;
    border-radius: 25px;
    transition: all 0.3s ease;
  }

  .btn{
      background-color: #401b58;
      border: none;
    color: rgb(250, 197, 111);
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 25px;
    width:318px;
  }

  .select {
    margin-left: 80px;
    font-family: Arial;
    background-color: rgb(255, 220, 163);
    top: 445px;
    width: 160px;
    height: 40px;
    border-radius: 20px;
  }
  
  
  </style>