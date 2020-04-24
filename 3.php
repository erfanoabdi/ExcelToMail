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
	word-break: break-all;
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
      <div align="center">
      <img src="img/Lv3.png" width="766" height="122" /> </div></td>
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
      <td align="center" class="Body2"><div class="Main_Div">
      
      <form action="4.php" method="post" name="Frm">
      لطفا نمونه ارسال را وارد کنید
      <br /><br />
      <textarea name="simple" cols="100" rows="10"></textarea><br /><br />
      لطفا موضوع ایمیل را وارد کنید
      <br /><br />
      
      <input name="Subj" type="text" />
      <?php
	  $XF = $_POST["M"];
	  $XE = $_POST["Et"];
	  echo '<input type="hidden" value="'.$XF.'" name="M"><input type="hidden" value="'.$XE.'" name="Et">';	
	  ?><br />
      <input name="Sub" type="submit" value="Enter" />
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
</body>
</html>
