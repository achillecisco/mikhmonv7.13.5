																																																																		
<?php
// Copier coller ce code dans [Settings -> Template Editor].

if(substr($validity,-1) == "d"){
  $validity = "Validité:".substr($validity,0,-1)."Journée";
}else if(substr($validity,-1) == "h"){
  $validity = "Validité:".substr($validity,0,-1)."Heure";
}
if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){+
  $timelimit = "Durée:".((substr($timelimit,0,-1)*7) +  substr($timelimit, 2,1))."jour";
}else if(substr($timelimit,-1) == "d"){
  $timelimit = "Durée:".substr($timelimit,0,-1)."Jour";
}else if(substr($timelimit,-1) == "h"){
  $timelimit = "Durée:".substr($timelimit,0,-1)."Heure";
}else if(substr($timelimit,-1) == "w"){
  $timelimit = "Durée:".(substr($timelimit,0,-1)*7)."Jour";
}

//CiscoTek Togo. +22892910794 /99313800

//Copier ceci pour ajouter de la couleur en fonction du prix, puis collez-le au-dessus de la ligne 

if($getsprice == "201"){ $color = "#2196F3";} // si le prix == "1000" utilisé ce couleur = "#2196F3"
elseif($getsprice == "800"){ $color = "#009688";}
elseif($getsprice == "2001"){ $color = "#FF9800";} 

// Couleur si non
else{ $color = "#FFFFFF";}
?>

<style type="text/css">
.rotate {
  vertical-align: bottom;
  text-align: center;
}
.rotate span {
  -ms-writing-mode: tb-rl;
  -webkit-writing-mode: vertical-rl;
  writing-mode: vertical-rl;
  transform: rotate(180deg);
  white-space: nowrap;
}
.qrcode{
		height:60px;
		width:60px;
}
</style>

<table class="voucher" style="width: 230px;">
  <tbody>
    <tr>
      <td class="rotate" style="font-weight: bold; border-right: 1px solid black; background-color:<?php echo $color;?>; -webkit-print-color-adjust: exact;" rowspan="4"><span><?= $price; ?></span></td>
      <td style="font-weight: bold" colspan="2"><?= $hotspotname; ?> </td>
      <?php if ($qr == "yes") { ?>
      <td style="" rowspan="3"><?= $qrcode ?></td>
      <?php 
    } else { ?>
      <td style="" rowspan="3"><img style="width: 60px; height: 60px;" src="<?= $logo ?>" alt="logo"></td>  
      <?php 
    } ?>
    </tr>
    <tr>
      <?php if ($usermode == "vc") { ?>  
      <td style="width: 100%; font-weight: bold; font-size: 20px; text-align: center;"><?= $username; ?></td>
      <?php 
    } elseif ($usermode == "up") { ?>
      <td style="width: 100%; font-weight: bold; font-size: 15px; text-align: center;"><?= "User: " . $username . "<br>Pass: " . $password; ?></td>
      <?php 
    } ?>  
    </tr>
    <tr>
      <td style="font-size: 10px;"><?= $validity; ?> <?= $timelimit; ?> <?= $datalimit; ?></td>
    </tr>
    <tr>
      <td colspan="3" style="font-size: 10px;">Portail: http://<?= $dnsname; ?> <span id="num"> <?= " [$num]"; ?></span></td>
    </tr>
  </tbody>
</table>	        	        	        	        	        	        	        	        	        