<meta charset="utf-8">
<div>
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
  position:fixed;
  background: rgb(255, 220, 163);
  border-radius: 20px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  margin-top:120px; 
  margin-left:800px; 

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