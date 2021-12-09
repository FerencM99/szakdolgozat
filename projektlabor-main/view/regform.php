<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<title>Diplomások</title>
<h1 class = "cim"> DiplomaKözpont </h1>
    <link rel="stylesheet" href="css/uploader.css">
  </head>
  <body>
    <div class="csomag">
      <div class="title">
Regisztráció</div>
<form action="#">
        <div class="field">
          <input type="text" required placeholder="Neptun kód">
        </div>
<div class="field">
          <input type="password" required placeholder="Jelszó">
        </div>
        <div class="field">
            <input type="password" required placeholder="Jelszó újra">
          </div>

<div class="field">
    <select name="userlvl" id="userlvl">
        <option value="def" disabled selected>Felhasználó szintje</option>
        <option value="spec">Nézelödő</option>
        <option value="user">Felhasználó</option>
        <option value="admin">Admin</option>
    </select>
        </div>
        <button type="submit" class="btn" value="Submit" onclick="return Validate()" >Regisztrálás</button>

</form>
</div>

</body>


<script type="text/javascript">
    function Validate() {
        var option = document.getElementById("userlvl").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("password2").value;
            if (password != confirmPassword) {
                alert("A jelszó nem egyezik.");
                return false;
            }
            if (option == "def") {
                alert("Kérlek válassz felhasználói szintet");
                return false;
            }
                return true;
            }
</script>


</html>
