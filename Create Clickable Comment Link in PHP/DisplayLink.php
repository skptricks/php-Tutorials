<?php
Class DisplayLink {	

function Convert_link_to_urls($text = '')
{
	$text = preg_replace('#(script|about|applet|activex|chrome):#is', "\\1:", $text);
	$finaltext = ' ' . $text;
	$finaltext = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<span class='ccc'><a href=\"\\2\" target=\"_blank\"><font style='font-family: Verdana, Geneva, sans-serif;color: blue;font-size:13px; line-height:20px;'>\\2</font></a></span>", $finaltext);
	$finaltext = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<span class='ccc'><a href=\"http://\\2\" target=\"_blank\"><font style='font-family: Verdana, Geneva, sans-serif;color: blue;font-size:13px; line-height:20px;'>\\2</font></a></span>", $finaltext);
	$finaltext = preg_replace("#(^|[\n ])([a-z0-9&\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#i", "\\1<span class='ccc'><a href=\"mailto:\\2@\\3\"><font style='font-family: Verdana, Geneva, sans-serif;color: blue;font-size:13px; line-height:20px;'>\\2@\\3</font></a></span>", $finaltext);
	$finaltext = substr($finaltext, 1);
	return $finaltext;
}

}

?>