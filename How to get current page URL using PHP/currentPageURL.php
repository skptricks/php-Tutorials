<?php
function getCurrentPageURL($queryString = false) {
   $port = $_SERVER['SERVER_PORT'];
            
   $url  = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $port == 443) ? "https://" : "http://";
   $url .= $_SERVER['HTTP_HOST'];
   $url .= ($port == '80' || $port == '443' ? '' :  ':' . $port);
   $url .= $_SERVER['PHP_SELF'];
   $url .= ($queryString == true ? '?' . $_SERVER['QUERY_STRING'] : '');
            return $url;
}
// get URL without query string
echo "<b>Current page URL without query string :</b> " . getCurrentPageURL();
echo '<br>';
// get URL with query string
echo "<b>Current page URL with query string :</b> " . getCurrentPageURL(true);
?>