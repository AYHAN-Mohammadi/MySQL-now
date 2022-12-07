<?php

#hi my ayhan m.i
#te.m/ayhan_dev

include "MYSQL.php";

$user_host = "Ayhan-Mohammadi"; #user host You
$pass_host = "love dev";  #pass host You

$Domain_host = "devexpr.site"; //Domain hosting

$uapi = new cpanelAPI($user_host,$pass_host,$Domain_host);

function FGs($add){
$list  = '123456789+-*/%QWERYUIOPASDFGHJKLMNBVCXZ*!:#@&$zxcvbnmlkjhgftyuopirdsrwaq';
$con = $list;
$ioo = '';
for($i = 0;$i < $add;$i++){
$li_r = rand(0,strlen($con)-1);
$ioo .= substr($con, $li_r, 1);
}
return $ioo;
}

$data = FGs(5);
$pass = FGs(12);

$database = "$user_host_$data";
$data_pass = "$pass";

$uapi->uapi->Mysql->create_database(array('name' => $database)); 
$uapi->uapi->Mysql->create_user(array('name' => $database,'password' => 
  $data_pass));
$uapi->uapi->Mysql->set_privileges_on_database(array('user' => $database, 
'database' => $database, 'privileges' => 'ALL'));


?>