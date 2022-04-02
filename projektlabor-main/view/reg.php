<html>
<head>
<?php
    if (session_status () == PHP_SESSION_NONE)
    {
        session_start ();
    }
?>
<meta name="viewport" content= "width=device-width, user-scalable=no" charset="utf-8">
<link rel="stylesheet" href="css/reg.css">

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
          <input name="psw" type="psw" required placeholder="Jelszó">
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
