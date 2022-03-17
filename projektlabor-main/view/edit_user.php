<meta charset="utf-8">
<link rel="stylesheet" href="css/reg.css">

<div style="margin-top: -10px; margin-left: -10px;">
    <?php
   include 'header.php';
    ?>
</div>
    <?php
        $id=$_GET["id"];

        $udb = new usersDB();

        $data = $udb->getuserdata($id);
        
        
    ?>

        <div class="row-fluid">
            <div class="box">
                <div class="title" style="text-size=20px">
                 Módosítás</div>
                <form name="form1" method="post" class="form-horizontal" action="../controller/editOtherUser.php">
                
                <input type="hidden" id="uid" name="uid" value=<?php echo $data[0]['ID'];   ?>>
                    <div class="field">
                        <input name="neptun" id="neptun" type="text" value=<?php echo $data[0]['Username']; ?>>
                    </div>
                    <div class="field">
                        <input name="pw" id="pw" type="hidden" value=<?php echo $data[0]['Password']; ?>>
                    </div>

                <div class="field">
                    <select class="select" name="userlvl" id="userlvl">
                        <option value="def" disabled selected>Felhasználó szintje</option>
                        <option value="2" <?php if($data[0]['Userlvl'] == 2) {echo "selected";} ?>>Admin</option>
                        <option value="1" <?php if($data[0]['Userlvl'] == 1) {echo "selected";} ?>>Oktató</option>
                        <option value="0" <?php if($data[0]['Userlvl'] == 0) {echo "selected";} ?>>Hallgató</option>
                    </select>
                </div>
        <div class="form-actions">
        <button type="submit" class="btn btn-succes">Mentés</button>
        </div>
    </form>
        </div>

        </div>
    </div>
    
    
<?php
    include 'footer.php';
?>