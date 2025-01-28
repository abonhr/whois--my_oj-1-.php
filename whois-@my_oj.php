<?php
ob_start();
  // in the name of god
// coded by [@s000bot ]
// channel  https://t.me/my_oj
// channel  https://t.me/my_oj
/*
by @hi000bot
https://t.me/my_oj
*/
$API_KEY = ''; //7570918024:AAHZ_He6G2heFmzQ1dAETEhNIs9hU2ONNMI
$channel="my_oj"; //timelove237
$add = "";// تبلیغات کنار نوشته
define('API_KEY',$API_KEY);
function boT($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//============= Functions ===============
function SendMessage($chatid,$text,$parsmde,$disable_web_page_preview,$keyboard){
    boT('sendMessage',[
        'chat_id'=>$chatid,
        'text'=>$text,
        'parse_mode'=>$parsmde,
        'disable_web_page_preview'=>$disable_web_page_preview,
        'reply_markup'=>$keyboard
    ]);
}  // in the name of god
// coded by [@s000bot ]
// channel  https://t.me/my_oj
// channel  https://t.me/my_oj
/*
by @hi000bot
https://t.me/my_oj
*/
if(!is_dir("data/$from_id")){
mkdir("data/$from_id");
}//============= t000c ===============
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $update->message->chat->id;
$from_id = $update->message->from->id;
$text = $update->message->text;
$name = $update->message->from->first_name;
$step = file_get_contents("data/$from_id/step.txt");
$truechannel = json_decode(file_get_contents("https://api.telegram.org/bot".$API_KEY."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$tch = $truechannel->result->status;
//============= t000c ===============
$menu = json_encode(['keyboard'=>[
[['text'=>"دریافت اطلاعات🔑"]],
],'resize_keyboard'=>true]);
$button_remove = json_encode(['Remove_keyboard'=>[
],'remove_keyboard'=>true]);
//============= t000c ===============
if($text == '/start'){
if (!file_exists("data/$from_id/step.txt")) {
        mkdir("data/$from_id");
        file_put_contents("data/$from_id/step.txt","none");
        $myfile2 = fopen("Member.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
    }
sendMessage($chat_id,"سلام کاربر | $name 🌿به رباتـ اطلاعات دامنه خوش آمدی","HTML","true",$menu);
}
elseif($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
    SendMessage($chat_id,"📛 برای حمایت از ما و همچنان ربات ابتدا وارد کانال زیر بشید 👇

@$channel

✅ سپس روی JOIN بزنید و به ربات برگشته عبارت 👇

🔸 /start
✴️ رو بزنید تا دکمه های ربات نمایش داده بشن👌","html","true",$button_remove);
}
elseif($text == "دریافت اطلاعات🔑"){
 file_put_contents("data/$from_id/step.txt","tra");
 boT('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"دامنه را بدون `https` ارسال کنید",
 'parse_mode'=>"html",
 ]);
}//============= t000c ===============
elseif($step == "tra"){
$who = file_get_contents("https://r2f.ir/web/ho1.php?url="."$text");
 file_put_contents("data/$from_id/step.txt","none");
    $info = json_decode(file_get_contents("https://r2f.ir/web/ho1.php?url="."$text"),true);
   $o= $text;
    
$nam = "👨🏻‍💻👩🏻‍💻".$info['person'].$add;

$tele = "📞".$info['phone'].$add;

$emeil = "📥".$info['e-mail'].$add;

$saheb = "🔖".$info['holder-c'].$add;

$tol ="🔑".$info['last-updated'].$add;

$engh = "📅".$info['expire-date'].$add;

$server = "📡".$info['nserver'].$add;

$adres = "🛌".$info['remarks'].$add;
boT('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 
 $o
 
 $nam
 
 $tele
 
 $emeil
 
$saheb

$tol

$engh

$server

$adres

ch : @my_oj
 ",
'parse_mode'=>$parsmde,
'disable_web_page_preview'=>$disable_web_page_preview,
'reply_markup'=>json_encode([
 'keyboard'=>[
 [['text'=>"دریافت اطلاعات🔑"]],
],
'resize_keyboard'=>true
])
 ]);
} else {
bot('sendmessage', [
'chat_id'=>$from_id,
'text'=>"به این صورت ارسال کنید 
r2f.ir",
]);
}  // in the name of god
// coded by [@s000bot ]
// channel  https://t.me/my_oj
// channel  https://t.me/my_oj
/*
by @t000c
https://t.me/my_oj
*/
unlink("error_log");
?>
