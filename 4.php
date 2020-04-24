<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Excel To Mail</title>
<style type="text/css">
body {
	background-color: #1E7145;
}
body,td,th {
	color: #FFFFFF;
}
.downleft {	background-image: url(img/4.png);
	background-repeat: no-repeat;
}
.downright {	background-image: url(img/3.png);
	background-repeat: no-repeat;
}
.upleft {	background-image: url(img/1.png);
	background-repeat: no-repeat;
	font-size: xx-small;
	text-decoration: none;
}
.upright {	background-image: url(img/2.png);
	background-repeat: no-repeat;
	font-size: xx-small;
	text-decoration: none;
}
#down {	background-image: url(img/6.png);
	background-repeat: repeat-x;
}
#left {	background-image: url(img/8.png);
	background-repeat: repeat-y;
}
#right {	background-image: url(img/7.png);
	background-repeat: repeat-y;
}
#up {	background-image: url(img/5.png);
	background-repeat: repeat-x;
	font-size: xx-small;
	text-decoration: none;
}
.Body2 {
	font-family: Tahoma, Geneva, sans-serif;
}
.Main_Div {
	font-family: Tahoma, Geneva, sans-serif;
	-webkit-transition: all 0s ease 0s;
	-moz-transition: all 0s ease 0s;
	-ms-transition: all 0s ease 0s;
	-o-transition: all 0s ease 0s;
}
</style>
<link href="/SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<script src="/SpryAssets/SpryAccordion.js" type="text/javascript"></script>
</head>

<body>
<div align="center"><img src="img/image.png" width="876" height="256"/></div>
<br/>
<div align="center">
  
  <table border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
      <td width="15" height="15" class="upleft"></td>
      <td height="15" id="up"></td>
      <td width="15" height="15" class="upright"></td>
    </tr>
    <tr>
      <td width="15" id="left"></td>
      <td align="center" class="Body2">
      <div align="center">
      <img src="img/Lv4.png" width="766" height="122" /> </div></td>
      <td width="15" id="right"></td>
    </tr>
  </table>
  
  <table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="15" height="15" class="upleft"></td>
      <td height="15" id="up"></td>
      <td width="15" height="15" class="upright"></td>
    </tr>
    <tr>
      <td width="15" id="left"></td>
      <td align="center" class="Body2"><div>
      <?php
	   
	   	$XF = $_POST["M"];
	   	$XE = $_POST["Et"];
	   	require_once 'reader.php';
		$data = new Spreadsheet_Excel_Reader();
		$data->setOutputEncoding('UTF8');
		$data->read($XF);
		
		foreach ($data->sheets[0]['cells'] as $v1) {
    		foreach ($v1 as $v2) {
        		$y++;
    		}
			$x++;
		}
		$y=$y/$x;
		
		echo '<div id="Accordion1" class="Accordion" tabindex="0">';
		$ttem = $_POST["simple"];
		$ttemp = explode("$",$ttem);
		for ($j=1;$j<=$x;$j++){
			$tempp = $data->sheets[0]['cells'][$j][$XE]."\n";
			
			$z=0;
			foreach ($ttemp as $ii){
				$z++;
			}
			for ($ii=0;$ii<$z;$ii++){
				if ($ii%2==0){
					$full=$full.$ttemp[$ii];
				}else{
					$full=$full.$data->sheets[0]['cells'][$j][($ttemp[$ii]-'0')];
				}
			}
			echo '<div class="AccordionPanel">';
			echo '<div class="AccordionPanelTab">'.$tempp.'</div>';
			echo '<div class="AccordionPanelContent">'.$full.'</div>';
			echo '</div>';
			$full = "";
		}
		
		echo '</div>';
		
      ?>
      <br />
      <form action="final.php" method="post" name="Frm"><input name="send" type="submit" value="Send All" />
      <?php
	  $XF = $_POST["M"];
	  $XE = $_POST["Et"];
	  $ttem = $_POST["simple"];
	  $tem = $_POST["Subj"];
	  echo '<input type="hidden" value="'.$XF.'" name="M"><input type="hidden" value="'.$XE.'" name="Et"><input type="hidden" value="'.$ttem.'" name="simple"><input type="hidden" value="'.$tem.'" name="Subj">';	
	  ?>
      </form>
      </div>
      </td>
      <td width="15" id="right"></td>
    </tr>
    <tr>
      <td width="15" height="15" class="downleft"></td>
      <td height="15" id="down"></td>
      <td width="15" height="15" class="downright"></td>
    </tr>
  </table>
</div>
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>
</body>
</html>
