<?php
// filter function
// ----vid 77---->
print_r(filter_list());

echo '<br>';
echo filter_id("boolean");//258
echo '<br>';
$val = true;
if (filter_var($val,FILTER_VALIDATE_BOOL)){
    echo "THIS IS TRUE";
} else {
    echo "THIS IS TRUE";
}
echo '<br>';
// ----vid 78---->
$bool = "true";
var_dump(filter_var($bool,FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE));

echo '<br>';
 $url = "https://elzero.org/";
 var_dump(filter_var($url,FILTER_VALIDATE_URL,[FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));
echo '<br>';
$ip = "192.168.2.1";

var_dump(filter_var($ip,FILTER_VALIDATE_IP));
echo '<br>';
// ----vid 79--->
$int = "100";//int 
var_dump(filter_var($int,
FILTER_VALIDATE_INT,
["flags" => FILTER_NULL_ON_FAILURE,'options'=>["min_range" =>50,"max_range"=>100]]));
 
echo '<br>';

$float = "100";//float
var_dump(filter_var($float,
FILTER_VALIDATE_FLOAT,
["flags" => FILTER_NULL_ON_FAILURE,'options'=>["min_range" =>50,"max_range"=>100]]));

echo '<br>';
// --- vid 80 ----->

$email = "o@nn.sa";

var_dump(filter_var($email,FILTER_SANITIZE_EMAIL));//remove all but letters+digits

echo '<br>';
$int = 100;

var_dump(filter_var($int,FILTER_SANITIZE_NUMBER_INT));//stringm---.remove all but digits ,+,-

echo '<br>';

$float = "1,950,150,6541";

var_dump(filter_var($float,
FILTER_SANITIZE_NUMBER_FLOAT,
["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]));

echo '<br>';
// --- vid 81 ---->
// echo $_get["num"];

echo filter_input(INPUT_GET,"num",FILTER_VALIDATE_INT);
?>
<form action=""method"get">
    <input type="text" name="num">
    <input type="submit" value="send">
</form>
<?php
// <----vid 82----->

echo disk_total_space("c:")/1024 / 1024 / 1024;
echo '<br>';
echo disk_free_space("c:")/1024 / 1024 / 1024;
var_dump(file_exists("alaa.txt"));
echo '<br>';
 echo filesize("alaa.txt");
echo '<br>';

// --- vid 83 ----->
// var_dump(is_dir("lessons"));

echo '<br>';

// var_dump(is_dir("alaa.txt"));

echo '<br>';

// mkdir("test");

echo '<br>';
// rndir('test/upload');

echo '<br>';

// ---- vid 84---->
mkdir("Y",0700);
echo fileperms("Y");
echo '<br>';
// ----vid 85--->
echo basename(__FILE__);

echo '<br>';

echo dirname(__FILE__,1);

echo '<br>';

echo realpath(__FILE__);

echo '<br>';

echo "<pre>";
print_r(pathinfo(__FILE__));
"</pre>";

echo '<br>';
// ----vid 86---->
$handle = fopen("alaa.txt","W");

// echo fgets($handle,4);

echo fread($handle,1024);

fclose($handle);

echo '<br>';
// ---vid 87-->
$handle = fopen("alaa.txt","a");

fwrite($handle,'i love elzero web school');

$handle = fopen("alaa.txt","a+");
 
$handle = fopen("alaa.txt","x");

$handle = fopen("alaa.txt","x+");

$handle = fopen("alaa.txt","a");



fclose($handle);


echo '<br>';
// ---- vid 88 ---->
// echo "<pre>";
// print_r(file("alaa.txt"));
// echo "</pre>";
// echo count(file("alaa.txt"));

$handle = fopen("alaa.txt","r");

$line = 1;

while (! feof($handle)) {
    echo fgets($handle)."<br>";

    $line++;

}// we can use for loop insteat while loop

fclose($handle);

echo '<br>';

// ---- vid 89 --->

$handle = fopen("alaa.txt","r");

echo ftell($handle);//0

echo '<br>';

rewind($handle);

echo fgets($handle);

echo '<br>';

echo ftell($handle);

echo '<br>';

fclose($handle);

echo mb_strlen("elzero\r\nweb\r\n","8bit");

echo '<br>';

echo fgets($handle);//elzero
echo '<br>';

echo fseek($handle,30,SEEK_CUR);

echo '<br>';

echo fgets($handle);//zero web school

echo '<br>';
// ---- vid 90 --->
echo "<pre>";
print_r(glob("old/*.*"));
echo "</pre>";

//rename =. same place
// rename("old/test.txt","old/testing.txt");

// //rename =>other place =>cut || move
//  rename("old/testing.txt","new/testing_2.txt");

// move to other place 
// rename("old/elzero.pptx","new/elzero.pptx");

//copy without  rename
// copy("old/info.docx","new/info.docx");

//copy wth rename
// copy("ols/info.txt","new/working.txt");


unlink("old/work.rtf");


echo '<br>';
//<---vid 91---->
echo get_include_path(). "<br>";

// echo file_get_contents("farah.txt",true,null,4,5);

file_put_contents("alaa.txt","r\nhello elzero web school <3",FILE_APPEND);
echo '<br>';

// -----vid 92---> 
echo date_default_timezone_get();

echo '<br>';

echo date("Y-m-d H:i:s");

echo '<br>';

date_default_timezone_set(("africa/cairo"));

echo '<br>';

echo date("y-m-d h-i-s");

echo '<br>';

echo date_default_timezone_get();

echo '<br>';

$d = date_create("",timezone_open("indian/antananarivo"));

echo '<br>';

echo date_format($d,"y-m-d H-i-s");

echo '<br>';

var_dump(checkdate(10,25,1982));

echo '<br>';
var_dump(checkdate(31,02,1982));

echo '<br>';
var_dump(checkdate(31,02,3500));

echo '<br>';

// ---vid 93--> 
date_default_timezone_get("Africa/Cairo");

$d = date_create("2022-10-01 15:5:10");
// $d = date_create();

echo date_format($d,"Y");

echo '<br>';

echo date_format($d,"y");

echo '<br>';

echo date_format($d,"Y-m") . "<br>";

echo date_format($d,"Y-m");

echo '<br>';
echo date_format($d,"Y-M");

echo '<br>';
echo date_format($d,"Y-F");

echo '<br>';

echo date_format($d,"t");//30 days

echo '<br>';

echo date_format($d,"j");// month without zero

echo '<br>';

echo date_format($d,"D");

echo '<br>';

echo date_format($d,"l");

echo '<br>';

echo date_format($d,"Y-M-l-z");

echo '<br>';
// --- vid 94---> 
//time 
echo date_format($d,"y-m-d g a");
echo '<br>';
echo date_format($d,"y-m-d g A");

echo '<br>';
echo date_format($d,"y-m-d h a");

echo '<br>';
echo date_format($d,"y-m-d G ");

echo '<br>';
echo date_format($d,"y-m-d H ");

echo '<br>';
echo date_format($d,"y-m-d H/i/s u");

echo '<br>';
//---vid 95--->
date_default_timezone_get("africa/cairo");

$d = date_create();

// date_add($d,date_interval_create_from_date_string("2months"));

// date_sub($d,date_interval_create_from_date_string("2months"));

// date_modify($d,"+1 year");

date_default_timezone_set('Africa/cairo');
echo time();
echo '<br>';


// echo date_format($d,'y/m/d H-i-s a');

echo '<br>';
echo time() / 60 . "minutes<br>";
echo time() / 60 / 60 . "hours<br>";
echo time() / 60 / 60 / 24 . "days<br>";
echo time() / 60 / 60 / 24 / 365 . "years<br>";

echo '<br>';
echo "<pre>";
print_r(getdate());
echo "</pre>";

echo '<br>';
$t = getdate();

echo $t["years"];

echo "<pre>";
print_r(date_parse("1985-10-25 14:25:15"));
echo "</pre>";


echo '<br>';

// ---vid 96---> 
$reg = date_create("2022-01-09");
$now = date_create("now");

$diff = date_diff($reg,$now);

echo "<pre>";
print_r($diff);
echo "</pre>";

echo  " you are a member for " . $diff->days . "days<br>";

echo '<br>';

echo date("y-m-d h:i:s",strtotime("next friday"));

echo '<br>';

echo date("y-m-d h:i:s",strtotime("+1 years"));

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

setcookie ("style","dark",time()+ 60*60*60*30);
// infinite cookie
setcookie ("style","dark",strotime("+1 month")); 
echo $_COOKIE["style"]; //-> to access it
header ("location:" $_SERVER["RESQUES_URI"])
session_start();
session_unset();
session_destroy();
header("HTTP/1.0 404 Not Found");
header("expires: Sat, 01 Jan 2022 01:00:00");
header("cache-control: no-cache , must-revalidate");
echo "<a href ='test.php'>TEST</a>";
header("location:test.php");
header("Refresh:5;url=test.php");
exit ; -> most important in the end of header -> more secure

?>