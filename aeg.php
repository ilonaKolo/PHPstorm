@@ -16,22 +16,28 @@ function paev(){
}

function kuu(){
-    $kuud = array('Jaanuar', 'Veebruar', 'Märts', 'Aprill', 'Mai', 'Juuni', 'Juuli', 'August', 'September', 'Oktoober', 'November', 'Detsember');
-    /*$kuud = array();
+//    $kuud = array('Jaanuar', 'Veebruar', 'Märts', 'Aprill', 'Mai', 'Juuni', 'Juuli', 'August', 'September', 'Oktoober', 'November', 'Detsember');
+    $kuud = array();
for($i = 1; $i < 13; $i++){
-        $kuud[] = date('F', mktime(0, 0, 0, $i));
-    }*/
+        $kuuNimi = date('F', mktime(0, 0, 0, $i));
+        $kuuNumber = date('m', mktime(0, 0, 0, $i));
+        $kuud[$kuuNumber] = $kuuNimi;
+    }
$valik = '<select name="kuu">';
    -    foreach($kuud as $kuu){
    -        $valik = $valik.'<option value="'.$kuu.'">'.$kuu.'</option>';
    +    foreach($kuud as $kuuNumber => $kuuNimi){
    +        $valik = $valik.'<option value="'.$kuuNumber.'">'.$kuuNimi.'</option>';
    }
    $valik = $valik.'</select>';
return $valik;
}

function aasta(){
+    $hetkeAasta = date('Y', time());
$valik = '<select name="aasta">';
    for($aasta = 1920; $aasta < 2040; $aasta++){
    +        if($aasta == $hetkeAasta){
    +            $valik = $valik.'<option value="'.$aasta.'" selected>'.$aasta.'</option>';
    +        }
    $valik = $valik.'<option value="'.$aasta.'">'.$aasta.'</option>';
    }
    $valik = $valik.'</select>';
@@ -76,4 +82,11 @@ function registreerimisVorm(){
print_r($_POST);
/*
date_default_timezone_set('Europe/Tallinn');
-print_r(getdate());*/
+print_r(getdate());*/
+date_default_timezone_set('Europe/Tallinn');
+$hetkel = time();
+echo $hetkel.'<br />';
+$kell = date('H:i');
+echo $kell.'<br />';
+$aasta = date('Y', $hetkel);
+echo $aasta.'<br />';