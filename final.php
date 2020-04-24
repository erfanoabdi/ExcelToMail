<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Excel To Mail</title>
<link rel="stylesheet" href="jquery-ui.css">
  <script src="jquery-1.9.1.js"></script>
  <script src="jquery-ui.js"></script>
  
  <script>
  $(function() {
    $( "#progressbar" ).progressbar({
      value: 0
    });
  });
  </script>
<style type="text/css">
body {
	background-color: #1E7145;
}
.boooy {
	font-family: "Trebuchet MS", "Helvetica", "Arial",  "Verdana", "sans-serif";
	font-size: 62.5%;
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
</style>
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
      
      
    <table width="0" border="0" cellspacing="0" cellpadding="0"><tr>
    <td width="500" align="center">
    Sending E-Mail ...
    <div id="progressbar" class="boooy" ></div></td></tr></table>



	<?php
	    $Subj = $_POST["Subj"];
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
			
			
			$headers = 'From: '."EmailSender@ExcelTOMail.Com"."\r\n".
			'Reply-To: '."EmailSender@ExcelTOMail.Com"."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			@mail($tempp, $Subj, $full, $headers);  
			
			
			$PBV = $PBV + (100/$x);
			echo '
			<script>
  $(function() {
    $( "#progressbar" ).progressbar({
      value: '. $PBV .'
    });
  });
  </script>
  ';
			
			$full = "";
		}
		
		unlink($XF);
		
		
		
		
      ?>


      
  
  <script>
  $(function() {
    $( "#progressbar" ).progressbar({
      value: 100
    });
  });
  </script>
      <div align="center">
        <form action="1.html" method="get" >
          <input name="Again" type="submit" id="buy" value="Enter New Excel" disabled="disabled"/></form>
          
          <?php
		  echo '
		<script>
		
	document.getElementById("buy").disabled = "";

		</script>
		';
		  ?>
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
</body>
</html>
