<?php
$token = "6080403064:AAGURMf_WEWD2l2fohy2ZZQQmAJFqWbdi6c";
define('API_KEY',$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
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
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$join = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chj&user_id=".$from_id);
$message = $update->message;
$text = $message->text;
$from_id = $message->from->id;
$fn = $message->from->first_name;
$user = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
$admin = "22163598";
$chat_id = $message->chat->id;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 =  $update->callback_query->message->message_id;
$name = $message->from->first_name;
$username = $message->from->username;
$from_id = $message->from->id;
$carlossi = "22163598"; 
$carlos = file_get_contents("carlos.txt");
$carlos0 = file_get_contents("carlos0.txt");
$carlos1= file_get_contents("carlos1.txt");
$carlos5 = file_get_contents("carlos2.txt");
$carlos6 = file_get_contents("carlos3.txt");
$carlos20 = json_decode(file_get_contents("php://input"));
$carlos18 = $update->message;
$carlos13 = $carlos18->chat->id;
$carlos17 = $carlos18->text;
$carlos19 = $carlos20->callback_query->data;
$carlos12 = $carlos20->callback_query->message->chat->id;
$carlos14 =  $carlos20->callback_query->message->message_id;
$carlos15 = $carlos18->from->first_name;
$carlos16 = $carlos18->from->username;
$carlos11 = $carlos18->from->id;
$carlos2 = explode("\n",file_get_contents("carlos4.txt"));
$carlos3 = count($carlos2)-1;
if ($carlos18 && !in_array($carlos11, $carlos2)) {
    file_put_contents("carlos4.txt", $carlos11."\n",FILE_APPEND);
  }
$carlos9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$carlos0&user_id=".$carlos11);
$carlos10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$carlos1&user_id=".$carlos11);

if($carlos18 && (strpos($carlos9,'"status":"left"') or strpos($carlos9,'"Bad Request: USER_ID_INVALID"') or strpos($carlos9,'"status":"kicked"') or strpos($carlos10,'"status":"left"') or strpos($carlos10,'"Bad Request: USER_ID_INVALID"') or strpos($carlos10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$carlos13,
'text'=>"
• يجب عليك اشتراك في قنوات البوت حتي تستطيع استخدامه •
• اشترك في القنوات ثم ارسل /start •
• قنوات البوت •
• قناة الاول : $carlos0 💕•
• قناة الثانيه : $carlos1 💕•
لطريقه الاستخدام ارسل /help
",
]);return false;}
if($carlos17 == "مطور" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"🦁┇اهلأ فيك عزيزي المطور 
🎗┇اليك اوامر خاصه بيك 
🧬┇يمكنك تحكم في جميع الاوامر",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- ‏-عدد المشتركين↵{ $carlos3 }." ,"callback_data"=>"tiger2"]],
[["text"=>"- الاشتراك" ,"callback_data"=>"tiger"],["text"=>"-  الإذاعة" ,"callback_data"=>"tiger1"],["text"=>"- الاحصائيات" ,"callback_data"=>"tiger2"]],
[["text"=>"- اوامر تنبيه الدخول" ,"callback_data"=>"tiger3"]],
[["text"=>"- اوامر توجيه رسائل الاعضاء" ,"callback_data"=>"tiger4"]],
   ] 
   ])
]);
}
if($carlos19 == "blodi" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"🦁┇اهلأ فيك عزيزي المطور 
🎗┇اليك اوامر خاصه بيك 
🧬┇يمكنك تحكم في جميع الاوامر",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- ‏-عدد المشتركين↵{ $carlos3 }." ,"callback_data"=>"tiger2"]],
[["text"=>"- الاشتراك" ,"callback_data"=>"tiger"],["text"=>"-  الإذاعة" ,"callback_data"=>"tiger1"],["text"=>"- الاحصائيات" ,"callback_data"=>"tiger2"]],
[["text"=>"- اوامر تنبيه الدخول" ,"callback_data"=>"tiger3"]],
[["text"=>"- اوامر توجيه رسائل الاعضاء" ,"callback_data"=>"tiger4"]],
   ] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"🦁┇اهلأ فيك عزيزي المطور 
🎗┇اليك قسم اوامر الاشتراك الاجباري",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- وضع قناة¹" ,"callback_data"=>"carlos0"],["text"=>"- وضع قناة٢" ,"callback_data"=>"carlos2"]],
[["text"=>"- حذف القناة¹" ,"callback_data"=>"carlos1"],["text"=>"- حذف القناة²" ,"callback_data"=>"carlos3"]],
[["text"=>"- عرض قنوات الإشتراك الإجباري" ,"callback_data"=>"carlos4"]],
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger1" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"🦁┇اهلأ فيك عزيزي المطور 
🎗┇اليك قسم اوامر الاذاعة",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- نشر رساله" ,"callback_data"=>"carlos6"],["text"=>"- توجيه رساله" ,"callback_data"=>"carlos5"]],
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger2" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"🦁┇اهلأ عزيزي المطور
🎗┇اليك الاحصائيات بوت
🧬┇عدد المشتركين↵{ $carlos3 }.",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>" ‏-عدد المشتركين↵{ $carlos3 }." ,"callback_data"=>"tiger2"]],
[["text"=>"- اوامر الاذاعة" ,"callback_data"=>"tiger1"]],
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger3" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"🦁┇اهلأ فيك عزيزي المطور 
🎗┇اليك قسم اوامر تنبيه دخول الاعضاء",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- تفعيل التنبيه" ,"callback_data"=>"carlos9"],["text"=>"- تعطيل التنبيه" ,"callback_data"=>"carlos10"]],
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "tiger4" ){
bot("EditMessageText",[
"chat_id"=>$carlos12,
"message_id"=>$carlos14,
"text"=>"🦁┇اهلأ فيك عزيزي المطور 
🎗┇اليك قسم اوامر توجيه رسائل الاعضاء",
"reply_markup"=>json_encode([ 
"inline_keyboard"=>[
[["text"=>"- تفعيل التوجيه" ,"callback_data"=>"carlos11"],["text"=>"- تعطيل التوجيه" ,"callback_data"=>"carlos12"]],
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
] 
   ])
]);
unlink("carlos.txt");
}
if($carlos19 == "carlos0"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇ارسل معرف قناتك معه @",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
file_put_contents("carlos.txt","carlos0");
}
if($carlos17 and $carlos == "carlos0" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"🦁┇تم حفظ معرف القناة
🎗┇قم برفع البوت ليعمل صحيح",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
file_put_contents("carlos0.txt","$carlos17");
unlink("carlos.txt");
}
if($carlos19 == "carlos1"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇تم حذف قناة بنجاح",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
unlink("carlos.txt");
unlink("carlos0.txt");
}
if($carlos19 == "carlos2"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇ارسل معرف قناتك معه @",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
file_put_contents("carlos.txt","carlos1");
}
if($carlos17 and $carlos == "carlos1" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"🦁┇تم حفظ معرف القناة
❄️┇قم برفع البوت ليعمل صحيح
",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
file_put_contents("carlos1.txt","$carlos17");
unlink("carlos.txt");
}
if($carlos19 == "carlos3"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇تم حذف قناة بنجاح",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
unlink("carlos.txt");
unlink("carlos1.txt");
}
if($carlos19 == "carlos4"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇اليك قنوات الاشتراك الاجباري
🎗┇القنوات  $carlos - $carlos1
",

 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
️[['text'=>'- رجوع' ,'callback_data'=>"blodi"]],
]])
]);
unlink("carlos.txt");
}
if($carlos19 == "carlos5"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇ارسل رسالتك ليتم 
🎗┇نشرها توجيه لجميع الاعضاء",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
file_put_contents("carlos.txt","carlos2");
}
if($carlos18 and $carlos == "carlos2" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"🦁┇تم توجيه رسالتك بنجاح",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
for($i=0;$i<count($carlos2); $i++){
bot("forwardMessage", [
"chat_id"=>$carlos2[$i],
"from_chat_id"=>$carlos11,
"message_id"=>$carlos18->message_id
]);
unlink("carlos.txt");
}
}
if($carlos19 == "carlos6"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇ارسل رسالتك ليتم 
🎗┇نشرها لجميع الاعضاء",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
file_put_contents("carlos.txt","carlos3");
}
if($carlos17 and $carlos == "carlos3" and $carlos11 == $carlossi){
bot("sendmessage",[
"chat_id"=>$carlos13,
"text"=>"🦁┇تم نشر بنجاح",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
for($i=0;$i<count($carlos2); $i++){
bot("sendMessage", [
"chat_id"=>$carlos2[$i],
"text"=>$carlos17
]);
unlink("carlos.txt");
}
}
if($carlos19 == "carlos7"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇عدد مشتركين البوت - $carlos3",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
unlink("carlos.txt");
}
if($carlos19 == "carlos9"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇تم تفعيل تنبيه الدخول",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
file_put_contents("carlos2.txt","carlos");
}
if($carlos17 == "/start" and $carlos5 == "carlos" and $carlos11 != $carlossi){
bot("sendmessage",[
"chat_id"=>$carlossi,
"text"=>"🦁┇تم دخول مشترك
🎗┇$carlos15
🦠┇$carlos16
🧬┇$carlos11
"
]);
}
if($carlos19 == "carlos10"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$Armof14,
"text"=>"🦁┇تم تعطيل تنبيه الدخول",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
unlink("carlos.txt");
unlink("carlos2.txt");
}
if($carlos19 == "carlos11"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇تم تفعيل توجيه الرسائل",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
file_put_contents("carlos3.txt","carlos");
}
if($carlos18 and $carlos6 == "carlos" and $carlos11 != $carlossi){
bot("forwardMessage", [
"chat_id"=>$carlossi,
"from_chat_id"=>$carlos11,
"message_id"=>$carlos18->message_id
]);
}
if($carlos18 and $carlos6 == "carlos" and $carlos11 == $carlossi){
bot("sendMessage",[
"chat_id"=>$carlos18->reply_to_message->forward_from->id,
    "text"=>$carlos17,
    ]);
}
if($carlos19 == "carlos12"){
bot("EditMessageText",[
    "chat_id"=>$carlos12,
    "message_id"=>$carlos14,
"text"=>"🦁┇تم تعطيل توجيه الرسائل",
 "reply_markup"=>json_encode([ 
      "inline_keyboard"=>[
[["text"=>"- رجوع" ,"callback_data"=>"blodi"]],
]])
]);
unlink("carlos.txt");
unlink("carlos3.txt");
}
if($text == "/help"){
    bot('sendVideo',['chat_id'=>$chat_id,
    video =>"https://t.me/CinemaCQ/224",
    'caption'=>" - طريقة استخدام البوت ",
    'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($text == '/start' or $text == 'start' or $text == 'ابدء'  or $text == 'عمر'  or $text == 'Start'){ 
bot('sendphoto',[
'chat_id'=>$chat_id, 
'photo'=>"https://t.me/U_R_Il2003",
'caption'=>' مرحبا بك في بوت• Egypt movies|مصر افلام
•يتم عرض جميع المسلسلات يوميا 🆕
•  قناه التحديثات🆕 : @U_R_Il2003 
• مطور البوت🧑🏻‍💻 :  @YxYxYo',
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"- المسلسلات",'callback_data'=>"home"]],
[['text'=>"- المسلسلات الاجنبي",'callback_data'=>"AG"]],
[['text'=>'- قناة البوت','url'=>"t.me/U_R_Il2003"]],
[['text'=>'- جروب الطلبات','url'=>"t.me/YxYxYo_1"]],
[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],
]])]);}
if($data == "start"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il2003",
'caption'=>' مرحبا بك في بوت• Egypt movies|مصر افلام
•يتم عرض جميع المسلسلات يوميا 🆕
•  قناه التحديثات🆕 : @U_R_Il2003 
• مطور البوت🧑🏻‍💻 :  @YxYxYo',
]),'reply_markup' => json_encode(['inline_keyboard' => [
[['text'=>"- المسلسلات",'callback_data'=>"home"]],
[['text'=>"- المسلسلات الاجنبي",'callback_data'=>"AG"]],
[['text'=>'- قناة البوت','url'=>"t.me/U_R_Il2003"]],
[['text'=>'- جروب الطلبات','url'=>"t.me/YxYxYo_1"]],
[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],
]])]);}
if($data == "AG"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il2003",
'caption'=>'- مرحبا بك في قسم المسلسلات اللجنبيه
•  قناه التحديثات🆕 : @U_R_Il2003 
• مطور البوت🧑🏻‍💻 :  @YxYxYo',
]),'reply_markup' => json_encode(['inline_keyboard' => [
[['text'=>"- Moon Knight",'callback_data'=>"MoonK"]],
[['text'=>"- Peaky Blinders S6",'callback_data'=>"Pekyy"]],
[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],
]])]);}
if($data == "home"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il2003",
'caption'=>'- مرحبا بك في قائمة المسلسلات 
- اضغط علي زر المسلسل الذي تريد مشاهدته ثم اختر الحلقه ',
]),'reply_markup' => json_encode(['inline_keyboard' => [
[['text'=>'° المداح - مكتمل °','callback_data'=>"tv1"]],
[['text'=>'° جزيره غمام ° ','callback_data'=>"tv2"]],
[['text'=>'° رامز موفي ستار  °','callback_data'=>"tv3"]],
[['text'=>'° الكبير اوي - مكتمل ° ','callback_data'=>"tv4"]],
[['text'=>'° عائدون ° ','callback_data'=>"tv5"]],
[['text'=>'° الاختيار ° ','callback_data'=>"tv6"]],
[['text'=>'° المشوار ° ','callback_data'=>"tv7"]],
[['text'=>'° توبه -مكتمل ° ','callback_data'=>"tv12"]],
[['text'=>'° ملف سري - مكتمل ° ','callback_data'=>"tv9"]],
[['text'=>'° بابلو - مكتمل° ','callback_data'=>"tv10"]],
[['text'=>'- التالي ','callback_data'=>"home1"]],
[['text'=>'- واجهة البوت','callback_data'=>"start"]],
]])]);}
if($data == "home1"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il2003",
'caption'=>'- مرحبا بك في قائمة المسلسلات 
- اضغط علي زر المسلسل الذي تريد مشاهدته ثم اختر الحلقه ',
]),'reply_markup' => json_encode(['inline_keyboard' => [
[['text'=>'° رانيا وسكينه - مكتمل °','callback_data'=>"tv11"]],
[['text'=>'° في بيتنا روبوت ° ','callback_data'=>"tv8"]],
[['text'=>'° راجعين يا هوي  °','callback_data'=>"tv13"]],
[['text'=>'° احلام سعيده - مكتمل ° ','callback_data'=>"tv14"]],
[['text'=>'° فاتن امل حربي ° ','callback_data'=>"tv15"]],
[['text'=>'° بطلوع الروح - مكتمل ° ','callback_data'=>"tv21"]],
[['text'=>'° دايما عامر ° ','callback_data'=>"tv17"]],
[['text'=>'° Suits ° ','callback_data'=>"tv18"]],
[['text'=>'° يوتيرن - مكتمل ° ','callback_data'=>"tv19"]],
[['text'=>'° مكتوب عليا ° ','callback_data'=>"tv20"]],
[['text'=>'° مين قال - مكتمل ° ','callback_data'=>"tv16"]],
[['text'=>'- السابق ','callback_data'=>"home"]],
[['text'=>'- واجهة البوت','callback_data'=>"start"]],
]])]);}

if($data == "Pekyy"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il2003197",
'caption'=>'-الاسم: Peaky Blinders الجزء السادس
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"Shl1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"Shl2"]],
[['text'=>"• الحلقة الثالثه",'callback_data'=>"Shl3"]],
[['text'=>"• الحلقة الرابعه",'callback_data'=>"Shl4"]],
[['text'=>"• الحلقة الخامسه",'callback_data'=>"Shl5"]],
[['text'=>"• الحلقة الاخيره",'callback_data'=>"Shl6"]],
[['text'=>'- الرئيسية','callback_data'=>"start"]],
]])]);}
if($data == "Shl1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il2003195",
'caption'=>" • E1 - S6  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "Shl2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il2003198",
'caption'=>" • E2 - S6 ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "Shl3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003199",
video =>"https://t.me/U_R_Il2003199",
'caption'=>" • E3 - S6  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "Shl4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il2003200",
'caption'=>" • E4 - S6 ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "Shl5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il2003201",
'caption'=>" • E5 - S6  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "Shl6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il2003202",
'caption'=>" • END - S6 ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "MoonK"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il2003193",
'caption'=>'-الاسم: Moon Knight
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"Mknight1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"Mknight2"]],
[['text'=>"• الحلقة الثالثه",'callback_data'=>"Mknight3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"Mknight4"]],
[['text'=>"• الحلقة خامسه",'callback_data'=>"Mknight5"]],
[['text'=>'- الرئيسية','callback_data'=>"start"]],
]])]);}

if($data == "Mknight1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il2003192",
'caption'=>" • E1 - S1  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "Mknight2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il2003194",
'caption'=>" • E2 - S1 ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "Mknight3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il2003333",
'caption'=>" • E3 - S1 ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "Mknight4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il2003594",
'caption'=>" • E4 - S1 ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "Mknight5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il2003665",
'caption'=>" • E5 - S1 ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

#بداية المسلسلات #

#مسلسل المداح#
if($data == "tv1"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il20032",
'caption'=>'- مسلسل المداح الجزء الثاني 
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"md1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"md2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"md3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"md4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"md5"]],
[['text'=>"الحلقة السادسة ",'callback_data'=>"md6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"md7"]],
[['text'=>"الحلقة التامنه",'callback_data'=>"md8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"md9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"md10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"md11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"md12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"md13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"md14"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"md15"]],
[['text'=>"التالي",'callback_data'=>"mdah"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
if($data == "mdah"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il20032",
'caption'=>'- مسلسل المداح الجزء الثاني 
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"الحلقه السادسه عشر",'callback_data'=>"md16"]],
[['text'=>"السابعه عشر",'callback_data'=>"md17"]],
[['text'=>"الثامنه عشر",'callback_data'=>"md18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"md19"]],
[['text'=>"العشرين",'callback_data'=>"md20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"md21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"md22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"md23"]],
[['text'=>"الرابعه والعشرين",'callback_data'=>"md24"]],
[['text'=>"خمسه وعشرين",'callback_data'=>"md25"]],
[['text'=>"26",'callback_data'=>"md26"]],
[['text'=>"27",'callback_data'=>"md27"]],
[['text'=>"28",'callback_data'=>"md28"]],
[['text'=>"29",'callback_data'=>"md29"]],
[['text'=>"الاخيره",'callback_data'=>"md30"]],
[['text'=>"السابق",'callback_data'=>"tv1"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}

#حلقات المداح#

if($data == "md20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003518",
'caption'=>" • الحلقة العشرون - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003540",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003565",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003591",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003605",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003636",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003657",
'caption'=>" • الحلقة السادس و العشرين - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003681",
'caption'=>" • الحلقة السابع و العشرين - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003705",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003724",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003743",
'caption'=>" • الحلقة الثلاثون - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

# مسلسل جزيره غمام #

if($data == "tv2"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200352",
'caption'=>'- مسلسل جزيره غمام 
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"3m1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"3m2"]],
[['text'=>"• الحلقة التالتة",'callback_data'=>"3m3"]],
[['text'=>"الحلقة الرابعة",'callback_data'=>"3m4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"3m5"]],
[['text'=>"الحلقه السادسه",'callback_data'=>"3m6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"3m7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"3m8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"3m9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"3m10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"3m11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"3m12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"3m13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"3m14"]],
[['text'=>"الخامسه عشر",'callback_data'=>"3m15"]],
[['text'=>"التالي",'callback_data'=>"3mahm"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
if($data == "3mahm"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200352",
'caption'=>'- مسلسل جزيره غمام 
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"السادسه عشر",'callback_data'=>"3m16"]],
[['text'=>"السابعه عشر",'callback_data'=>"3m17"]],
[['text'=>"الثامنه عشر",'callback_data'=>"3m18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"3m19"]],
[['text'=>"عشرين",'callback_data'=>"3m20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"3m21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"3m22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"3m23"]],
[['text'=>"اربعه وعشرين",'callback_data'=>"3m24"]],
[['text'=>"25",'callback_data'=>"3m25"]],
[['text'=>"26",'callback_data'=>"3m26"]],
[['text'=>"27",'callback_data'=>"3m27"]],
[['text'=>"28",'callback_data'=>"3m28"]],
[['text'=>"29",'callback_data'=>"3m29"]],
[['text'=>"30",'callback_data'=>"3m30"]],
[['text'=>"السابق",'callback_data'=>"tv2"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}

# حلقات جزيره غمام #



if($data == "3m20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003542",
'caption'=>" • الحلقة العشرون - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003570",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003590",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003609",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003635",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003664",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003684",
'caption'=>" • الحلقة السادس و العشرين - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003707",
'caption'=>" • الحلقة السابع و العشرين - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003725",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003746",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003762",
'caption'=>" • الحلقة الثلاثون - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

# مسلسل رامز #

if($data == "tv3"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il20034",
'caption'=>'- برنامج رامز موفي ستار 
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"rm1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"rm2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"rm3"]],
[['text'=>"الحلقة الرابعة",'callback_data'=>"rm4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"rm5"]],
[['text'=>"الحلقة السادسة",'callback_data'=>"rm6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"rm7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"rm8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"rm9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"rm10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"rm11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"rm12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"rm13"]],
[['text'=>"الرابعه عشر",'callback_data'=>"rm14"]],
[['text'=>"الخامسه عشر",'callback_data'=>"rm15"]],
[['text'=>"التالي",'callback_data'=>"ramz"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
if($data == "ramz"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il20034",
'caption'=>'- برنامج رامز موفي ستار 
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"16",'callback_data'=>"rm16"]],
[['text'=>"17",'callback_data'=>"rm17"]],
[['text'=>"18",'callback_data'=>"rm18"]],
[['text'=>"19",'callback_data'=>"rm19"]],
[['text'=>"20",'callback_data'=>"rm20"]],
[['text'=>"21",'callback_data'=>"rm21"]],
[['text'=>"22",'callback_data'=>"rm22"]],
[['text'=>"23",'callback_data'=>"rm23"]],
[['text'=>"24",'callback_data'=>"rm24"]],
[['text'=>"25",'callback_data'=>"rm25"]],
[['text'=>"26",'callback_data'=>"rm26"]],
[['text'=>"27",'callback_data'=>"rm27"]],
[['text'=>"28",'callback_data'=>"rm28"]],
[['text'=>"29",'callback_data'=>"rm29"]],
[['text'=>"30",'callback_data'=>"rm30"]],
[['text'=>"السابق",'callback_data'=>"tv3"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}

#حلقات رامز#


if($data == "rm30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003759",
'caption'=>" • الحلقة الثلاثون - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

# مسلسل الكبير #

if($data == "elkbir"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il20035",
'caption'=>'- مسلسل الكبير اوي
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"الحلقه السادسه عشر",'callback_data'=>"kb16"]],
[['text'=>"السابعه عشر",'callback_data'=>"kb17"]],
[['text'=>"الثامنه عشر",'callback_data'=>"kb18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"kb19"]],
[['text'=>"العشرين",'callback_data'=>"kb20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"kb21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"kb22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"kb23"]],
[['text'=>"الرابعه والعشرين",'callback_data'=>"kb24"]],
[['text'=>"الخامسه والعشرين",'callback_data'=>"kb25"]],
[['text'=>"السادسه والعشرون",'callback_data'=>"kb26"]],
[['text'=>"السابع والعشرون",'callback_data'=>"kb27"]],
[['text'=>"الثامن والعشرون",'callback_data'=>"kb28"]],
[['text'=>"التاسع والعشرون",'callback_data'=>"kb29"]],
[['text'=>"الاخيره",'callback_data'=>"kb30"]],
[['text'=>"السابق",'callback_data'=>"tv4"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}

# حلقات الكبير

if($data == "kb20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003522",
'caption'=>" • الحلقة العشرون - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003549",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003571",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003593",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003615",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003639",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003666",
'caption'=>" • الحلقة السادس و العشرين - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003691",
'caption'=>" • الحلقة السابع و العشرين - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003708",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003728",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003749",
'caption'=>" • الحلقة الثلاثون - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
# مسلسل عائدون #
if($data == "tv5"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il20036",
'caption'=>'- مسلسل عائدون
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"ado1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"ado2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"ado3"]],
[['text'=>"الحلقة الرابعة",'callback_data'=>"ado4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"ado5"]],
[['text'=>"الحلقة السادسه",'callback_data'=>"ado6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"ado7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"ado8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"ado9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"ado10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"ado11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"ado12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"ado13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"ado14"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"ado15"]],
[['text'=>"التالي",'callback_data'=>"adon"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
if($data == "adon"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il20036",
'caption'=>'- مسلسل عائدون
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"16",'callback_data'=>"ado16"]],
[['text'=>"17",'callback_data'=>"ado17"]],
[['text'=>"18",'callback_data'=>"ado18"]],
[['text'=>"19",'callback_data'=>"ado19"]],
[['text'=>"20",'callback_data'=>"ado20"]],
[['text'=>"21",'callback_data'=>"ado21"]],
[['text'=>"22",'callback_data'=>"ado22"]],
[['text'=>"23",'callback_data'=>"ado23"]],
[['text'=>"24",'callback_data'=>"ado24"]],
[['text'=>"25",'callback_data'=>"ado25"]],
[['text'=>"26",'callback_data'=>"ado26"]],
[['text'=>"27",'callback_data'=>"ado27"]],
[['text'=>"28",'callback_data'=>"ado28"]],
[['text'=>"29",'callback_data'=>"ado29"]],
[['text'=>"30",'callback_data'=>"ado30"]],
[['text'=>"السابق",'callback_data'=>"tv5"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}

#حلقات عائدون #


if($data == "ado29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003742",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003760",
'caption'=>" • الحلقة الثلاثون - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tv21"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il2003389",
'caption'=>'- مسلسل بطلوع الروح
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"btlo1"]],
[['text'=>"الحلقه الثانيه",'callback_data'=>"btlo2"]],
[['text'=>"الحلقه الثالثه",'callback_data'=>"btlo3"]],
[['text'=>"الرابعه",'callback_data'=>"btlo4"]],
[['text'=>"الخامسه",'callback_data'=>"btlo5"]],
[['text'=>"السادسه",'callback_data'=>"btlo6"]],
[['text'=>"السابعه",'callback_data'=>"btlo7"]],
[['text'=>"الثامنه",'callback_data'=>"btlo8"]],
[['text'=>"التاسعه",'callback_data'=>"btlo9"]],
[['text'=>"العاشره",'callback_data'=>"btlo10"]],
[['text'=>"الحاديه عشر",'callback_data'=>"btlo11"]],
[['text'=>"الثانيه عشر",'callback_data'=>"btlo12"]],
[['text'=>"الثالثه عشر",'callback_data'=>"btlo13"]],
[['text'=>"14",'callback_data'=>"btlo14"]],
[['text'=>"الاخيره",'callback_data'=>"btlo15"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
#حلقات بطلوع الروح
if($data == "btlo1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003431",
'caption'=>" • الحلقة الاولي - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003433",
'caption'=>" • الحلقة الثانيه - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003452",
'caption'=>" • الحلقة الثالثة - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003476",
'caption'=>" • الحلقة الرابعة - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003499",
'caption'=>" • الحلقة الخامسة - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003517",
'caption'=>" • الحلقة السادسة - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003544",
'caption'=>" • الحلقة السابعة - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003566",
'caption'=>" • الحلقة الثامنة - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003607",
'caption'=>" • الحلقة التاسعة - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003662",
'caption'=>" • الحلقة العاشرة - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003656",
'caption'=>" • الحلقة الحادية عشر - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003688",
'caption'=>" • الحلقة الثانية عشر - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003689",
'caption'=>" • الحلقة الثالثة عشر - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003711",
'caption'=>" • الحلقة الرابعة عشر - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "btlo15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003744",
'caption'=>" • الحلقة الاخيره - مسلسل بطلوع الروح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
# مسلسل الاختيار #
if($data == "tv6"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il20037",
'caption'=>'- مسلسل الاختيار
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"2kti1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"2kti2"]],
[['text'=>"• الحلقة التالتة",'callback_data'=>"2kti3"]],
[['text'=>"الحلقة الرابعة",'callback_data'=>"2kti4"]],
[['text'=>"الحلقة الخامسه",'callback_data'=>"2kti5"]],
[['text'=>"الحلقه السادسه",'callback_data'=>"2kti6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"2kti7"]],
[['text'=>"الحلقة الثامنة",'callback_data'=>"2kti8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"2kti9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"2kti10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"2kti11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"2kti12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"2kti13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"2kti14"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"2kti15"]],
[['text'=>"التالي",'callback_data'=>"ekhtiar"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
if($data == "ekhtiar"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il20037",
'caption'=>'- مسلسل الاختيار
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"السادسه عشر",'callback_data'=>"2kti16"]],
[['text'=>"السابعه عشر",'callback_data'=>"2kti17"]],
[['text'=>"الثامنه عشر",'callback_data'=>"2kti18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"2kti19"]],
[['text'=>"عشرين",'callback_data'=>"2kti20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"2kti21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"2kti22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"2kti23"]],
[['text'=>"اربعه وعشرين",'callback_data'=>"2kti24"]],
[['text'=>"25",'callback_data'=>"2kti25"]],
[['text'=>"26",'callback_data'=>"2kti26"]],
[['text'=>"27",'callback_data'=>"2kti27"]],
[['text'=>"28",'callback_data'=>"2kti28"]],
[['text'=>"29",'callback_data'=>"2kti29"]],
[['text'=>"30",'callback_data'=>"2kti30"]],
[['text'=>"السابق",'callback_data'=>"tv6"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}

#حلقات الاختيار#

if($data == "2kti29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003747",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003763",
'caption'=>" • الحلقة الثلاثون - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
#مسلسل المشوار #
if($data == "tv7"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il20038",
'caption'=>'- مسلسل المشوار
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"ms1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"ms2"]],
[['text'=>"• الحلقة التالتة",'callback_data'=>"ms3"]],
[['text'=>"الحلقة الرابعة",'callback_data'=>"ms4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"ms5"]],
[['text'=>"الحلقة السادسه",'callback_data'=>"ms6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"ms7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"ms8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"ms9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"ms10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"ms11"]],
[['text'=>"الحلقة الثانية عشر",'callback_data'=>"ms12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"ms13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"ms14"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"ms15"]],
[['text'=>"التالي",'callback_data'=>"mesour"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
if($data == "mesour"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il20038",
'caption'=>'- مسلسل المشوار
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"16",'callback_data'=>"ms16"]],
[['text'=>"17",'callback_data'=>"ms17"]],
[['text'=>"18",'callback_data'=>"ms18"]],
[['text'=>"19",'callback_data'=>"ms19"]],
[['text'=>"20",'callback_data'=>"ms20"]],
[['text'=>"21",'callback_data'=>"ms21"]],
[['text'=>"22",'callback_data'=>"ms22"]],
[['text'=>"23",'callback_data'=>"ms23"]],
[['text'=>"24",'callback_data'=>"ms24"]],
[['text'=>"25",'callback_data'=>"ms25"]],
[['text'=>"26",'callback_data'=>"ms26"]],
[['text'=>"27",'callback_data'=>"ms27"]],
[['text'=>"28",'callback_data'=>"ms28"]],
[['text'=>"29",'callback_data'=>"ms29"]],
[['text'=>"30",'callback_data'=>"ms30"]],
[['text'=>"السابق",'callback_data'=>"tv7"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
#حلقات المشوار#

if($data == "ms29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003740",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003761",
'caption'=>" • الحلقة الثلاثون - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
#مسلسل في بيتنا روبوت #
if($data == "tv8"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200368",
'caption'=>'- مسلسل في بيتنا روبوت
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"rh1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"rh2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"rh3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"rh4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"rh5"]],
[['text'=>"الحلقة السادسة",'callback_data'=>"rh6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"rh7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"rh8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"rh9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"rh10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"rh11"]],
[['text'=>"الحبقه الثانيه عشر",'callback_data'=>"rh12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"rh13"]],
[['text'=>"الرابعه عشر",'callback_data'=>"rh14"]],
[['text'=>"الخامسه عشر",'callback_data'=>"rh15"]],
[['text'=>"التالي",'callback_data'=>"elroh"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
if($data == "elroh"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200368",
'caption'=>'- مسلسل في بيتنا روبوت
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"السادسه عشر",'callback_data'=>"rh16"]],
[['text'=>"السابعه عشر",'callback_data'=>"rh17"]],
[['text'=>"الثامنه عشر ",'callback_data'=>"rh18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"rh19"]],
[['text'=>"العشرين",'callback_data'=>"rh20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"rh21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"rh22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"rh23"]],
[['text'=>"اربعه وعشرين",'callback_data'=>"rh24"]],
[['text'=>"خمسه وعشرين",'callback_data'=>"rh25"]],
[['text'=>"26",'callback_data'=>"rh26"]],
[['text'=>"27",'callback_data'=>"rh27"]],
[['text'=>"28",'callback_data'=>"rh28"]],
[['text'=>"29",'callback_data'=>"rh29"]],
[['text'=>"30",'callback_data'=>"rh30"]],
[['text'=>"السابق",'callback_data'=>"tv8"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}

# حلقات في بيتنا روبوت #

if($data == "rh29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003733",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003756",
'caption'=>" • الحلقة الثلاثون - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
# مسلسل ملف سري #
if($data == "tv9"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200310",
'caption'=>'- مسلسل ملف سري
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"mlf1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"mlf2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"mlf3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"mlf4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"mlf5"]],
[['text'=>"الحلقة السادسة",'callback_data'=>"mlf6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"mlf7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"mlf8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"mlf9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"mlf10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"mlf11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"mlf12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"mlf13"]],
[['text'=>"الرابعه عشر",'callback_data'=>"mlf14"]],
[['text'=>"الخامسه عشر",'callback_data'=>"mlf15"]],
[['text'=>"التالي",'callback_data'=>"sery"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
if($data == "sery"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200310",
'caption'=>'- مسلسل ملف سري
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"16",'callback_data'=>"mlf16"]],
[['text'=>"السابعه عشر",'callback_data'=>"mlf17"]],
[['text'=>"الثامنه عشر",'callback_data'=>"mlf18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"mlf19"]],
[['text'=>"العشرين",'callback_data'=>"mlf20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"mlf21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"mlf22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"mlf23"]],
[['text'=>"اربعه وعشرين",'callback_data'=>"mlf24"]],
[['text'=>"خمسه وعشرين",'callback_data'=>"mlf25"]],
[['text'=>"26",'callback_data'=>"mlf26"]],
[['text'=>"27",'callback_data'=>"mlf27"]],
[['text'=>"28",'callback_data'=>"mlf28"]],
[['text'=>"29",'callback_data'=>"mlf29"]],
[['text'=>"30",'callback_data'=>"mlf30"]],
[['text'=>"السابق",'callback_data'=>"tv9"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
# حلقات ملف


if($data == "mlf29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003736",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003752",
'caption'=>" • الحلقة الثلاثون - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
# مسلسل بابلو #
if($data == "tv10"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200311",
'caption'=>'- مسلسل بابلو
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"bb1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"bb2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"bb3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"bb4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"bb5"]],
[['text'=>"الحلقة السادسة",'callback_data'=>"bb6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"bb7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"bb8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"bb9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"bb10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"bb11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"bb12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"bb13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"bb14"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"bb15"]],
[['text'=>"التالي",'callback_data'=>"bablo"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
if($data == "bablo"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200311",
'caption'=>'- مسلسل بابلو
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"الحلقه السادسه عشر",'callback_data'=>"bb16"]],
[['text'=>"17",'callback_data'=>"bb17"]],
[['text'=>"18",'callback_data'=>"bb18"]],
[['text'=>"19",'callback_data'=>"bb19"]],
[['text'=>"20",'callback_data'=>"bb20"]],
[['text'=>"21",'callback_data'=>"bb21"]],
[['text'=>"22",'callback_data'=>"bb22"]],
[['text'=>"23",'callback_data'=>"bb23"]],
[['text'=>"24",'callback_data'=>"bb24"]],
[['text'=>"25",'callback_data'=>"bb25"]],
[['text'=>"26",'callback_data'=>"bb26"]],
[['text'=>"27",'callback_data'=>"bb27"]],
[['text'=>"28",'callback_data'=>"bb28"]],
[['text'=>"29",'callback_data'=>"bb29"]],
[['text'=>"30",'callback_data'=>"bb30"]],
[['text'=>"السابق",'callback_data'=>"tv10"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
#حلقات بابلو #

if($data == "bb21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003550",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003551",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003552",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003610",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003638",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003663",
'caption'=>" • الحلقة السادس و العشرين - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003686",
'caption'=>" • الحلقة السابع و العشرين - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003687",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003730",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003748",
'caption'=>" • الحلقة الثلاثون - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
#مسلسل رانيا وسكينه #
if($data == "tv11"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200317",
'caption'=>'- مسلسل رانيا وسكينه
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"rai1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"rai2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"rai3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"rai4"]],
[['text'=>"• الحلقة الخامسة",'callback_data'=>"rai5"]],
[['text'=>"الحلقة السادسة",'callback_data'=>"rai6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"rai7"]],
[['text'=>"الحلقة الثامنة",'callback_data'=>"rai8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"rai9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"rai10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"rai11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"rai12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"rai13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"rai14"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"rai15"]],
[['text'=>"التالي",'callback_data'=>"rskin"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
if($data == "rskin"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200317",
'caption'=>'- مسلسل رانيا وسكينه
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"الحلقه السادسه عشر",'callback_data'=>"rai16"]],
[['text'=>"الحلقه السابعه عشر",'callback_data'=>"rai17"]],
[['text'=>"الثامنه عشر",'callback_data'=>"rai18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"rai19"]],
[['text'=>"عشرين",'callback_data'=>"rai20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"rai21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"rai22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"rai23"]],
[['text'=>"رابعه وعشرين",'callback_data'=>"rai24"]],
[['text'=>"خامسه وعشرين",'callback_data'=>"rai25"]],
[['text'=>"السادسه والعشرين",'callback_data'=>"rai26"]],
[['text'=>"27",'callback_data'=>"rai27"]],
[['text'=>"28",'callback_data'=>"rai28"]],
[['text'=>"29",'callback_data'=>"rai29"]],
[['text'=>"30",'callback_data'=>"rai30"]],
[['text'=>"السابق",'callback_data'=>"tv11"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
#حلقات رانيا وسكينه #


if($data == "rai21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003523",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003548",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003572",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003592",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003616",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003640",
'caption'=>" • الحلقة السادس و العشرين - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003667",
'caption'=>" • الحلقة السابع و العشرين - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003690",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003709",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003727",
'caption'=>" • الحلقة الثلاثون - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
#مسلسل توبه

if($data == "topa"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200318",
'caption'=>'- مسلسل توبة
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"الحلقه السادسه عشر",'callback_data'=>"tw16"]],
[['text'=>"17",'callback_data'=>"tw17"]],
[['text'=>"18",'callback_data'=>"tw18"]],
[['text'=>"19",'callback_data'=>"tw19"]],
[['text'=>"20",'callback_data'=>"tw20"]],
[['text'=>"21",'callback_data'=>"tw21"]],
[['text'=>"22",'callback_data'=>"tw22"]],
[['text'=>"23",'callback_data'=>"tw23"]],
[['text'=>"24",'callback_data'=>"tw24"]],
[['text'=>"25",'callback_data'=>"tw25"]],
[['text'=>"26",'callback_data'=>"tw26"]],
[['text'=>"27",'callback_data'=>"tw27"]],
[['text'=>"28",'callback_data'=>"tw28"]],
[['text'=>"29",'callback_data'=>"tw29"]],
[['text'=>"30",'callback_data'=>"tw30"]],
[['text'=>"السابق",'callback_data'=>"tv12"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
#حلقات توبه

if($data == "tw30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003739",
'caption'=>" • الحلقة الثلاثون - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
#مسلسل راجعين يا هوي
if($data == "tv13"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200319",
'caption'=>'- مسلسل راجعين يا هوي
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"rg1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"rg2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"rg3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"rg4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"rg5"]],
[['text'=>"الحلقة السادسة",'callback_data'=>"rg6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"rg7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"rg8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"rg9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"rg10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"rg11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"rg12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"rg13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"rg14"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"rg15"]],
[['text'=>"التالي",'callback_data'=>"rag3en"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
if($data == "rag3en"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200319",
'caption'=>'- مسلسل راجعين يا هوي
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"16",'callback_data'=>"rg16"]],
[['text'=>"السلبعه عشر",'callback_data'=>"rg17"]],
[['text'=>"الثامنه عشر",'callback_data'=>"rg18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"rg19"]],
[['text'=>"العشرين",'callback_data'=>"rg20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"rg21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"rg22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"rg23"]],
[['text'=>"الرابعه والعشرين",'callback_data'=>"rg24"]],
[['text'=>"خمسه وعشرين",'callback_data'=>"rg25"]],
[['text'=>"26",'callback_data'=>"rg26"]],
[['text'=>"27",'callback_data'=>"rg27"]],
[['text'=>"28",'callback_data'=>"rg28"]],
[['text'=>"29",'callback_data'=>"rg29"]],
[['text'=>"30",'callback_data'=>"rg30"]],
[['text'=>"السابق",'callback_data'=>"tv13"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
#حلقات راجعين يا هوي

if($data == "rg29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003735",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003755",
'caption'=>" • الحلقة الثلاثون - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
#مسلسل احلام سعيده
if($data == "tv14"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200312",
'caption'=>'- مسلسل احلام سعيده
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"ahs1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"ahs2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"ahs3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"ahs4"]],
[['text'=>"الحلقة الخامسه",'callback_data'=>"ahs5"]],
[['text'=>"الحلقة السادسه",'callback_data'=>"ahs6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"ahs7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"ahs8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"ahs9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"ahs10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"ahs11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"ahs12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"ahs13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"ahs14"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"ahs15"]],
[['text'=>"التالي",'callback_data'=>"alam"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
if($data == "alam"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200312",
'caption'=>'- مسلسل احلام سعيده
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"الحلقه السادسه عشر",'callback_data'=>"ahs16"]],
[['text'=>"السابعه عشر",'callback_data'=>"ahs17"]],
[['text'=>"الثامنه عشر",'callback_data'=>"ahs18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"ahs19"]],
[['text'=>"عشرين",'callback_data'=>"ahs20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"ahs21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"ahs22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"ahs23"]],
[['text'=>"اربعه وعشرين",'callback_data'=>"ahs24"]],
[['text'=>"خمسه وعشرين",'callback_data'=>"ahs25"]],
[['text'=>"سادسه وعشرين",'callback_data'=>"ahs26"]],
[['text'=>"27",'callback_data'=>"ahs27"]],
[['text'=>"28",'callback_data'=>"ahs28"]],
[['text'=>"29",'callback_data'=>"ahs29"]],
[['text'=>"30",'callback_data'=>"ahs30"]],
[['text'=>"السابق",'callback_data'=>"tv14"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
#حلقات احلام سعيده
if($data == "ahs1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200332",
'caption'=>" • الحلقة الاولي - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200356",
'caption'=>" • الحلقة الثانيه - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200379",
'caption'=>" • الحلقة الثالثة - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003110",
'caption'=>" • الحلقة الرابعة - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003138",
'caption'=>" • الحلقة الخامسة - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003168",
'caption'=>" • الحلقة السادسة - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003207",
'caption'=>" • الحلقة السابعة - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003233",
'caption'=>" • الحلقة الثامنة - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003256",
'caption'=>" • الحلقة التاسعة - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003278",
'caption'=>" • الحلقة العاشرة - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003300",
'caption'=>" • الحلقة الحادية عشر - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003321",
'caption'=>" • الحلقة الثانية عشر - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003344",
'caption'=>" • الحلقة الثالثة عشر - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003369",
'caption'=>" • الحلقة الرابعة عشر - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003418",
'caption'=>" • الحلقة الخامسة عشر - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003441",
'caption'=>" • الحلقة السادسة عشر - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003465",
'caption'=>" • الحلقة السابعة عشر - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003493",
'caption'=>" • الحلقة الثامنة عشر - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003504",
'caption'=>" • الحلقة التاسعة عشر - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003554",
'caption'=>" • الحلقة العشرون - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003553",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003573",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003613",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003614",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003644",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003669",
'caption'=>" • الحلقة السادس و العشرين - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003701",
'caption'=>" • الحلقة السابع و العشرين - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003712",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003729",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ahs30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003750",
'caption'=>" • الحلقة الثلاثون - مسلسل احلام سعيده  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
#مسلسل فاتن امل حربي
if($data == "tv15"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200313",
'caption'=>'- مسلسل فاتن امل حربي
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"fah1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"fah2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"fah3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"fah4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"fah5"]],
[['text'=>"الحلقة السادسه",'callback_data'=>"fah6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"fah7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"fah8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"fah9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"fah10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"fah11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"fah12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"fah13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"fah14"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"fah15"]],
[['text'=>"التالي",'callback_data'=>"ften"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
if($data == "ften"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200313",
'caption'=>'- مسلسل فاتن امل حربي
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"الحلقه السادسه عشر",'callback_data'=>"fah16"]],
[['text'=>"الحلقه السابعه غشر",'callback_data'=>"fah17"]],
[['text'=>"الثامنه عشر",'callback_data'=>"fah18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"fah19"]],
[['text'=>"العشرين",'callback_data'=>"fah20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"fah21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"fah22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"fah23"]],
[['text'=>"اربعه وعشرين",'callback_data'=>"fah24"]],
[['text'=>"خمسه وعشرين",'callback_data'=>"fah25"]],
[['text'=>"٢٦",'callback_data'=>"fah26"]],
[['text'=>"27",'callback_data'=>"fah27"]],
[['text'=>"28",'callback_data'=>"fah28"]],
[['text'=>"29",'callback_data'=>"fah29"]],
[['text'=>"30",'callback_data'=>"fah30"]],
[['text'=>"السابق",'callback_data'=>"tv15"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
#حلقات فاتن امل حربي

if($data == "fah21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003555",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003577",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003596",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003618",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003646",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003671",
'caption'=>" • الحلقة السادس و العشرين - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003703",
'caption'=>" • الحلقة السابع و العشرين - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003714",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003732",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003758",
'caption'=>" • الحلقة الثلاثون - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}


#قايمه دايما عامر

if($data == "dimn"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200315",
'caption'=>'- مسلسل دايما عامر
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"الحلقه السادسه عشر",'callback_data'=>"dm316"]],
[['text'=>"السابعه عشر",'callback_data'=>"dm317"]],
[['text'=>"الثامنه عشر",'callback_data'=>"dm318"]],
[['text'=>"التاسعه عشر",'callback_data'=>"dm319"]],
[['text'=>"العشرين",'callback_data'=>"dm320"]],
[['text'=>"واحد وعشرين",'callback_data'=>"dm321"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"dm322"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"dm323"]],
[['text'=>"الرابعه والعشرين",'callback_data'=>"dm324"]],
[['text'=>"خمسه وعشرين",'callback_data'=>"dm325"]],
[['text'=>"26",'callback_data'=>"dm326"]],
[['text'=>"27",'callback_data'=>"dm327"]],
[['text'=>"28",'callback_data'=>"dm328"]],
[['text'=>"29",'callback_data'=>"dm329"]],
[['text'=>"30",'callback_data'=>"dm330"]],
[['text'=>"السابق",'callback_data'=>"tv17"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
#حلقات ديما عامر


if($data == "dm329"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003734",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm330"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003757",
'caption'=>" • الحلقة الثلاثون - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
#قايمه Suits
if($data == "tv18"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200316",
'caption'=>'- مسلسل Suits
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"so1"]],
[['text'=>"• الحلقة التانية",'callback_data'=>"so2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"so3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"so4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"so5"]],
[['text'=>"الحلقة السادسة",'callback_data'=>"so6"]],
[['text'=>"الحلقة السابعه",'callback_data'=>"so7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"so8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"so9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"so10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"so11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"so12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"so13"]],
[['text'=>"الرابعه عشر",'callback_data'=>"so14"]],
[['text'=>"الخامسه عشر",'callback_data'=>"so15"]],
[['text'=>"التالي",'callback_data'=>"s2tis"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
if($data == "s2tis"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200316",
'caption'=>'- مسلسل Suits
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"16",'callback_data'=>"so16"]],
[['text'=>"السابعه عشر",'callback_data'=>"so17"]],
[['text'=>"الثامنه عشر",'callback_data'=>"so18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"so19"]],
[['text'=>"العشرين",'callback_data'=>"so20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"so21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"so22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"so23"]],
[['text'=>"الرابعه والعشرين",'callback_data'=>"so24"]],
[['text'=>"خمسه وعشرين",'callback_data'=>"so25"]],
[['text'=>"26",'callback_data'=>"so26"]],
[['text'=>"27",'callback_data'=>"so27"]],
[['text'=>"28",'callback_data'=>"so28"]],
[['text'=>"29",'callback_data'=>"so29"]],
[['text'=>"30",'callback_data'=>"so30"]],
[['text'=>"السابق",'callback_data'=>"tv18"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
#حلقات سوتس



if($data == "so29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003737",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003754",
'caption'=>" • الحلقة الثلاثون - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
#يوتيرن
if($data == "tv19"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200320",
'caption'=>'- مسلسل يوتيرن
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"ytr1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"ytr2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"ytr3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"ytr4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"ytr5"]],
[['text'=>"الحلقة السادسة",'callback_data'=>"ytr6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"ytr7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"ytr8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"ytr9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"ytr10"]],
[['text'=>"الحلقه الحلديه عشر",'callback_data'=>"ytr11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"ytr12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"ytr13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"ytr14"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"ytr15"]],
[['text'=>"التالي",'callback_data'=>"you"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
if($data == "you"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200320",
'caption'=>'- مسلسل يوتيرن
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"الحلقه السادسه عشر",'callback_data'=>"ytr16"]],
[['text'=>"السابعه عشر",'callback_data'=>"ytr17"]],
[['text'=>"الثامنه عشر",'callback_data'=>"ytr18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"ytr19"]],
[['text'=>"العشرين",'callback_data'=>"ytr20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"ytr21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"ytr22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"ytr23"]],
[['text'=>"اربعه وعشرين",'callback_data'=>"ytr24"]],
[['text'=>"خمسه وعشرين",'callback_data'=>"ytr25"]],
[['text'=>"٢٦",'callback_data'=>"ytr26"]],
[['text'=>"27",'callback_data'=>"ytr27"]],
[['text'=>"28",'callback_data'=>"ytr28"]],
[['text'=>"29",'callback_data'=>"ytr29"]],
[['text'=>"30",'callback_data'=>"ytr30"]],
[['text'=>"السابق",'callback_data'=>"tv19"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
#حلقات يوتيرن


if($data == "ytr21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003556",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003576",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003595",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003617",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003645",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003670",
'caption'=>" • الحلقة السادس و العشرين - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003702",
'caption'=>" • الحلقة السابع و العشرين - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003713",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003731",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003751",
'caption'=>" • الحلقة الثلاثون - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
#قايمه مكتوب عليا
if($data == "tv20"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200337",
'caption'=>'- مسلسل مكتوب عليا
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"mk3l1"]],
[['text'=>"• الحلقة التانية",'callback_data'=>"mk3l2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"mk3l3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"mk3l4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"mk3l5"]],
[['text'=>"الحلقة السادسه",'callback_data'=>"mk3l6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"mk3l7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"mk3l8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"mk3l9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"mk3l10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"mk3l11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"mk3l12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"mk3l13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"mk3l14"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"mk3l15"]],
[['text'=>"التالي",'callback_data'=>"M2k"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
if($data == "M2k"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200320",
'caption'=>'- مسلسل مكتوب عليا
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"الحلقه السادسه عشر",'callback_data'=>"mk3l16"]],
[['text'=>"السابعه عشر",'callback_data'=>"mk3l17"]],
[['text'=>"الثامنه عشر",'callback_data'=>"mk3l18"]],
[['text'=>"التاسعه عشر",'callback_data'=>"mk3l19"]],
[['text'=>"العشرين",'callback_data'=>"mk3l20"]],
[['text'=>"واحد وعشرين",'callback_data'=>"mk3l21"]],
[['text'=>"اتنين وعشرين",'callback_data'=>"mk3l22"]],
[['text'=>"تلاته وعشرين",'callback_data'=>"mk3l23"]],
[['text'=>"الرابعه والعشرين",'callback_data'=>"mk3l24"]],
[['text'=>"خمسه وعشرين",'callback_data'=>"mk3l25"]],
[['text'=>"26",'callback_data'=>"mk3l26"]],
[['text'=>"27",'callback_data'=>"mk3l27"]],
[['text'=>"28",'callback_data'=>"mk3l28"]],
[['text'=>"29",'callback_data'=>"mk3l29"]],
[['text'=>"30",'callback_data'=>"mk3l30"]],
[['text'=>"السابق",'callback_data'=>"tv20"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
#حلقات مكتوب عليا


if($data == "mk3l29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003738",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l30"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003753",
'caption'=>" • الحلقة الثلاثون - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "tv16"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200314",
'caption'=>'- مسلسل مين قال
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"mq1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"mq2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"mq3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"mq4"]],
[['text'=>"• الحلقة الخامسة",'callback_data'=>"mq5"]],
[['text'=>"الحلقة السادسة",'callback_data'=>"mq6"]],
[['text'=>"الحلقة السابعة",'callback_data'=>"mq7"]],
[['text'=>"الحلقة التامنه",'callback_data'=>"mq8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"mq9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"mq10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"mq11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"mq12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"mq13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"mq14"]],
[['text'=>"الحلقه الاخيره",'callback_data'=>"mq15"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
#حلقات مين قال
if($data == "mq1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200322",
'caption'=>" • الحلقة الاولي - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200323",
'caption'=>" • الحلقة الثانيه - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200347",
'caption'=>" • الحلقة الثالثة - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200375",
'caption'=>" • الحلقة الرابعة - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003100",
'caption'=>" • الحلقة الخامسة - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003126",
'caption'=>" • الحلقة السادسة - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003153",
'caption'=>" • الحلقة السابعة - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003186",
'caption'=>" • الحلقة الثامنة - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003224",
'caption'=>" • الحلقة التاسعة - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003249",
'caption'=>" • الحلقة العاشرة - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003271",
'caption'=>" • الحلقة الحادية عشر - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003293",
'caption'=>" • الحلقة الثانية عشر - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003314",
'caption'=>" • الحلقة الثالثة عشر - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003339",
'caption'=>" • الحلقة الرابعة عشر - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mq15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003357",
'caption'=>" • الحلقة الاخيره - مسلسل مين قال  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tv22"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il2003405",
'caption'=>'- مسلسل وجوه
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"wgooh1"]],
[['text'=>"#",'callback_data'=>"wgooh2"]],
[['text'=>"#",'callback_data'=>"wgooh3"]],
[['text'=>"#",'callback_data'=>"wgooh4"]],
[['text'=>"#",'callback_data'=>"wgooh5"]],
[['text'=>"#",'callback_data'=>"wgooh6"]],
[['text'=>"#",'callback_data'=>"wgooh7"]],
[['text'=>"#",'callback_data'=>"wgooh8"]],
[['text'=>"#",'callback_data'=>"wgooh9"]],
[['text'=>"#",'callback_data'=>"wgooh10"]],
[['text'=>"#",'callback_data'=>"wgooh11"]],
[['text'=>"#",'callback_data'=>"wgooh12"]],
[['text'=>"#",'callback_data'=>"wgooh13"]],
[['text'=>"#",'callback_data'=>"wgooh14"]],
[['text'=>"#",'callback_data'=>"wgooh15"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
#حلقات وجوه
if($data == "wgooh1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003390",
'caption'=>" • الحلقة الاولي - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003391",
'caption'=>" • الحلقة الثانيه - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003392",
'caption'=>" • الحلقة الثالثة - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003393",
'caption'=>" • الحلقة الرابعة - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003394",
'caption'=>" • الحلقة الخامسة - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003395",
'caption'=>" • الحلقة السادسة - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003396",
'caption'=>" • الحلقة السابعة - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003397",
'caption'=>" • الحلقة الثامنة - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003398",
'caption'=>" • الحلقة التاسعة - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003399",
'caption'=>" • الحلقة العاشرة - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003400",
'caption'=>" • الحلقة الحادية عشر - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003401",
'caption'=>" • الحلقة الثانية عشر - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003402",
'caption'=>" • الحلقة الثالثة عشر - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003403",
'caption'=>" • الحلقة الرابعة عشر - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "wgooh15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003404",
'caption'=>" • الحلقة الاخيره - مسلسل وجوه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "tv12"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200318",
'caption'=>'- مسلسل توبة
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"tw1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"tw2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"tw3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"tw4"]],
[['text'=>"• الحلقة الخامسه",'callback_data'=>"tw5"]],
[['text'=>"الحلقة السادسة",'callback_data'=>"tw6"]],
[['text'=>"الحلقة السابعة",'callback_data'=>"tw7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"tw8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"tw9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"tw10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"tw11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"tw12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"tw13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"tw14"]],
[['text'=>"الخامسه عشر",'callback_data'=>"tw15"]],
[['text'=>"التالي",'callback_data'=>"topa"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
if($data == "tv4"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il20035",
'caption'=>'- مسلسل الكبير اوي
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"kb1"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"kb2"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"kb3"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"kb4"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"kb5"]],
[['text'=>"الحلقة السادسة",'callback_data'=>"kb6"]],
[['text'=>"الحلقه السابعه",'callback_data'=>"kb7"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"kb8"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"kb9"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"kb10"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"kb11"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"kb12"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"kb13"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"kb14"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"kb15"]],
[['text'=>"التالي",'callback_data'=>"elkbir"]],
[['text'=>'- الرئيسية','callback_data'=>"home"]],
]])]);}
if($data == "tv17"){
bot('editmessagemedia',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'media'=>json_encode([
'type'=>'photo',
'media'=>"https://t.me/U_R_Il200315",
'caption'=>'- مسلسل دايما عامر
- اختر • الحلقة وسيتم ارسالها ',
]),
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"• الحلقة الاولي",'callback_data'=>"dm31"]],
[['text'=>"• الحلقة الثانية",'callback_data'=>"dm32"]],
[['text'=>"• الحلقة الثالثة",'callback_data'=>"dm33"]],
[['text'=>"• الحلقة الرابعة",'callback_data'=>"dm34"]],
[['text'=>"الحلقة الخامسة",'callback_data'=>"dm35"]],
[['text'=>"الحلقة السادسة",'callback_data'=>"dm36"]],
[['text'=>"الحلقة السابعة",'callback_data'=>"dm37"]],
[['text'=>"الحلقه الثامنه",'callback_data'=>"dm38"]],
[['text'=>"الحلقه التاسعه",'callback_data'=>"dm39"]],
[['text'=>"الحلقه العاشره",'callback_data'=>"dm310"]],
[['text'=>"الحلقه الحاديه عشر",'callback_data'=>"dm311"]],
[['text'=>"الحلقه الثانيه عشر",'callback_data'=>"dm312"]],
[['text'=>"الحلقه الثالثه عشر",'callback_data'=>"dm313"]],
[['text'=>"الحلقه الرابعه عشر",'callback_data'=>"dm314"]],
[['text'=>"الحلقه الخامسه عشر",'callback_data'=>"dm315"]],
[['text'=>"التالي",'callback_data'=>"dimn"]],
[['text'=>'- الرئيسية','callback_data'=>"home1"]],
]])]);}
if($data == "md1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il200395",
'caption'=>" • الحلقة الاولي - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200350",
'type' =>"file",
'thumb' => "media/thumb.png",
'caption'=>" • الحلقة الثانيه - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200372",
'caption'=>" • الحلقة الثالثة - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003102",
'caption'=>" • الحلقة الرابعة - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003129",
'caption'=>" • الحلقة الخامسة - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003152",
'caption'=>" • الحلقة السادسة - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003187",
'caption'=>" • الحلقة السابعة - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003226",
'caption'=>" • الحلقة الثامنة - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003250",
'caption'=>" • الحلقة التاسعة - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003272",
'caption'=>" • الحلقة العاشرة - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003294",
'caption'=>" • الحلقة الحادية عشر - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003315",
'caption'=>" • الحلقة الثانية عشر - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003337",
'caption'=>" • الحلقة الثالثة عشر - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003359",
'caption'=>" • الحلقة الرابعة عشر - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003406",
'caption'=>" • الحلقة الخامسة عشر - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003434",
'caption'=>" • الحلقة السادسة عشر - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003454",
'caption'=>" • الحلقة السابعة عشر - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003477",
'caption'=>" • الحلقة الثامنة عشر - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "md19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003496",
'caption'=>" • الحلقة التاسعة عشر - مسلسل المداح  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "3m1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200351",
'caption'=>" • الحلقة الاولي - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200376",
'caption'=>" • الحلقة الثانيه - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003103",
'caption'=>" • الحلقة الثالثة - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003130",
'caption'=>" • الحلقة الرابعة - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003158",
'caption'=>" • الحلقة الخامسة - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003190",
'caption'=>" • الحلقة السادسة - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003228",
'caption'=>" • الحلقة السابعة - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003252",
'caption'=>" • الحلقة الثامنة - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003274",
'caption'=>" • الحلقة التاسعة - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003296",
'caption'=>" • الحلقة العاشرة - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003317",
'caption'=>" • الحلقة الحادية عشر - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003342",
'caption'=>" • الحلقة الثانية عشر - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003361",
'caption'=>" • الحلقة الثالثة عشر - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003408",
'caption'=>" • الحلقة الرابعة عشر - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003437",
'caption'=>" • الحلقة الخامسة عشر - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003456",
'caption'=>" • الحلقة السادسة عشر - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003478",
'caption'=>" • الحلقة السابعة عشر - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003497",
'caption'=>" • الحلقة الثامنة عشر - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "3m19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003519",
'caption'=>" • الحلقة التاسعة عشر - مسلسل جزيره غمام  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "bb1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200327",
'caption'=>" • الحلقة الاولي - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200354",
'caption'=>" • الحلقة الثانيه - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200377",
'caption'=>" • الحلقة الثالثة - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003105",
'caption'=>" • الحلقة الرابعة - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003131",
'caption'=>" • الحلقة الخامسة - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003159",
'caption'=>" • الحلقة السادسة - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003191",
'caption'=>" • الحلقة السابعة - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003208",
'caption'=>" • الحلقة الثامنة - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003209",
'caption'=>" • الحلقة التاسعة - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003210",
'caption'=>" • الحلقة العاشرة - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003297",
'caption'=>" • الحلقة الحادية عشر - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003318",
'caption'=>" • الحلقة الثانية عشر - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003324",
'caption'=>" • الحلقة الثالثة عشر - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003325",
'caption'=>" • الحلقة الرابعة عشر - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003364",
'caption'=>" • الحلقة الخامسة عشر - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003365",
'caption'=>" • الحلقة السادسة عشر - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003457",
'caption'=>" • الحلقة السابعة عشر - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003480",
'caption'=>" • الحلقة الثامنة عشر - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003501",
'caption'=>" • الحلقة التاسعة عشر - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "bb20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003524",
'caption'=>" • الحلقة العشرون - مسلسل بابلو  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "kb1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200335",
'caption'=>" • الحلقة الاولي - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200359",
'caption'=>" • الحلقة الثانيه - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200385",
'caption'=>" • الحلقة الثالثة - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003107",
'caption'=>" • الحلقة الرابعة - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003134",
'caption'=>" • الحلقة الخامسة - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003163",
'caption'=>" • الحلقة السادسة - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003204",
'caption'=>" • الحلقة السابعة - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003235",
'caption'=>" • الحلقة الثامنة - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003254",
'caption'=>" • الحلقة التاسعة - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003276",
'caption'=>" • الحلقة العاشرة - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003299",
'caption'=>" • الحلقة الحادية عشر - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003331",
'caption'=>" • الحلقة الثانية عشر - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003343",
'caption'=>" • الحلقة الثالثة عشر - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003368",
'caption'=>" • الحلقة الرابعة عشر - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003413",
'caption'=>" • الحلقة الخامسة عشر - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003438",
'caption'=>" • الحلقة السادسة عشر - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003461",
'caption'=>" • الحلقة السابعة عشر - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003481",
'caption'=>" • الحلقة الثامنة عشر - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "kb19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003502",
'caption'=>" • الحلقة التاسعة عشر - مسلسل الكبير اوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "rai1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200330",
'caption'=>" • الحلقة الاولي - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200331",
'caption'=>" • الحلقة الثانيه - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200355",
'caption'=>" • الحلقة الثالثة - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200386",
'caption'=>" • الحلقة الرابعة - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003109",
'caption'=>" • الحلقة الخامسة - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003136",
'caption'=>" • الحلقة السادسة - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003166",
'caption'=>" • الحلقة السابعة - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003206",
'caption'=>" • الحلقة الثامنة - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003253",
'caption'=>" • الحلقة التاسعة - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003255",
'caption'=>" • الحلقة العاشرة - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003277",
'caption'=>" • الحلقة الحادية عشر - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003298",
'caption'=>" • الحلقة الثانية عشر - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003320",
'caption'=>" • الحلقة الثالثة عشر - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003345",
'caption'=>" • الحلقة الرابعة عشر - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003373",
'caption'=>" • الحلقة الخامسة عشر - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003412",
'caption'=>" • الحلقة السادسة عشر - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003440",
'caption'=>" • الحلقة السابعة عشر - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003462",
'caption'=>" • الحلقة الثامنة عشر - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003482",
'caption'=>" • الحلقة التاسعة عشر - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rai20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003503",
'caption'=>" • الحلقة العشرون - مسلسل رانيا وسكينه  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "ytr1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200333",
'caption'=>" • الحلقة الاولي - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200357",
'caption'=>" • الحلقة الثانيه - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200380",
'caption'=>" • الحلقة الثالثة - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003112",
'caption'=>" • الحلقة الرابعة - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003139",
'caption'=>" • الحلقة الخامسة - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003171",
'caption'=>" • الحلقة السادسة - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003212",
'caption'=>" • الحلقة السابعة - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003234",
'caption'=>" • الحلقة الثامنة - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003257",
'caption'=>" • الحلقة التاسعة - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003281",
'caption'=>" • الحلقة العاشرة - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003302",
'caption'=>" • الحلقة الحادية عشر - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003322",
'caption'=>" • الحلقة الثانية عشر - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003347",
'caption'=>" • الحلقة الثالثة عشر - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003371",
'caption'=>" • الحلقة الرابعة عشر - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003420",
'caption'=>" • الحلقة الخامسة عشر - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003443",
'caption'=>" • الحلقة السادسة عشر - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003463",
'caption'=>" • الحلقة السابعة عشر - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003483",
'caption'=>" • الحلقة الثامنة عشر - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003506",
'caption'=>" • الحلقة التاسعة عشر - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ytr20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003526",
'caption'=>" • الحلقة العشرون - مسلسل يوتيرن  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "fah1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200334",
'caption'=>" • الحلقة الاولي - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200358",
'caption'=>" • الحلقة الثانيه - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200381",
'caption'=>" • الحلقة الثالثة - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003113",
'caption'=>" • الحلقة الرابعة - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003140",
'caption'=>" • الحلقة الخامسة - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003172",
'caption'=>" • الحلقة السادسة - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003213",
'caption'=>" • الحلقة السابعة - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003231",
'caption'=>" • الحلقة الثامنة - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003258",
'caption'=>" • الحلقة التاسعة - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003282",
'caption'=>" • الحلقة العاشرة - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003301",
'caption'=>" • الحلقة الحادية عشر - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003323",
'caption'=>" • الحلقة الثانية عشر - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003346",
'caption'=>" • الحلقة الثالثة عشر - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003372",
'caption'=>" • الحلقة الرابعة عشر - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003419",
'caption'=>" • الحلقة الخامسة عشر - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003442",
'caption'=>" • الحلقة السادسة عشر - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003464",
'caption'=>" • الحلقة السابعة عشر - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003484",
'caption'=>" • الحلقة الثامنة عشر - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003507",
'caption'=>" • الحلقة التاسعة عشر - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "fah20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003525",
'caption'=>" • الحلقة العشرون - مسلسل فاتن امل حربي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "mk3l1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200338",
'caption'=>" • الحلقة الاولي - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200360",
'caption'=>" • الحلقة الثانيه - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200388",
'caption'=>" • الحلقة الثالثة - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003108",
'caption'=>" • الحلقة الرابعة - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003135",
'caption'=>" • الحلقة الخامسة - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003164",
'caption'=>" • الحلقة السادسة - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003230",
'caption'=>" • الحلقة السابعة - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003244",
'caption'=>" • الحلقة الثامنة - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003262",
'caption'=>" • الحلقة التاسعة - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003285",
'caption'=>" • الحلقة العاشرة - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003306",
'caption'=>" • الحلقة الحادية عشر - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003326",
'caption'=>" • الحلقة الثانية عشر - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003348",
'caption'=>" • الحلقة الثالثة عشر - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003380",
'caption'=>" • الحلقة الرابعة عشر - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003426",
'caption'=>" • الحلقة الخامسة عشر - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003444",
'caption'=>" • الحلقة السادسة عشر - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003466",
'caption'=>" • الحلقة السابعة عشر - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003485",
'caption'=>" • الحلقة الثامنة عشر - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003509",
'caption'=>" • الحلقة التاسعة عشر - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003527",
'caption'=>" • الحلقة العشرون - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "dm31"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200324",
'caption'=>" • الحلقة الاولي - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm32"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200325",
'caption'=>" • الحلقة الثانيه - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm33"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200326",
'caption'=>" • الحلقة الثالثة - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm34"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003106",
'caption'=>" • الحلقة الرابعة - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm35"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003133",
'caption'=>" • الحلقة الخامسة - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm36"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003161",
'caption'=>" • الحلقة السادسة - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm37"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003203",
'caption'=>" • الحلقة السابعة - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm38"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003237",
'caption'=>" • الحلقة الثامنة - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm39"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003267",
'caption'=>" • الحلقة التاسعة - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm310"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003289",
'caption'=>" • الحلقة العاشرة - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm311"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003304",
'caption'=>" • الحلقة الحادية عشر - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm312"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003327",
'caption'=>" • الحلقة الثانية عشر - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm313"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003350",
'caption'=>" • الحلقة الثالثة عشر - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm314"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003379",
'caption'=>" • الحلقة الرابعة عشر - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm315"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003421",
'caption'=>" • الحلقة الخامسة عشر - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm316"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003439",
'caption'=>" • الحلقة السادسة عشر - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm317"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003467",
'caption'=>" • الحلقة السابعة عشر - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm318"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003486",
'caption'=>" • الحلقة الثامنة عشر - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm319"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003508",
'caption'=>" • الحلقة التاسعة عشر - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "so1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200336",
'caption'=>" • الحلقة الاولي - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200361",
'caption'=>" • الحلقة الثانيه - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200383",
'caption'=>" • الحلقة الثالثة - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003116",
'caption'=>" • الحلقة الرابعة - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003144",
'caption'=>" • الحلقة الخامسة - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003177",
'caption'=>" • الحلقة السادسة - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003220",
'caption'=>" • الحلقة السابعة - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003241",
'caption'=>" • الحلقة الثامنة - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003263",
'caption'=>" • الحلقة التاسعة - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003283",
'caption'=>" • الحلقة العاشرة - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003309",
'caption'=>" • الحلقة الحادية عشر - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003329",
'caption'=>" • الحلقة الثانية عشر - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003352",
'caption'=>" • الحلقة الثالثة عشر - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003377",
'caption'=>" • الحلقة الرابعة عشر - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003424",
'caption'=>" • الحلقة الخامسة عشر - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003448",
'caption'=>" • الحلقة السادسة عشر - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003471",
'caption'=>" • الحلقة السابعة عشر - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003490",
'caption'=>" • الحلقة الثامنة عشر - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003511",
'caption'=>" • الحلقة التاسعة عشر - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "rh1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200370",
'caption'=>" • الحلقة الاولي - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200369",
'caption'=>" • الحلقة الثانيه - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200382",
'caption'=>" • الحلقة الثالثة - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003114",
'caption'=>" • الحلقة الرابعة - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003141",
'caption'=>" • الحلقة الخامسة - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003174",
'caption'=>" • الحلقة السادسة - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003216",
'caption'=>" • الحلقة السابعة - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003238",
'caption'=>" • الحلقة الثامنة - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003261",
'caption'=>" • الحلقة التاسعة - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003284",
'caption'=>" • الحلقة العاشرة - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003305",
'caption'=>" • الحلقة الحادية عشر - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003332",
'caption'=>" • الحلقة الثانية عشر - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003349",
'caption'=>" • الحلقة الثالثة عشر - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003376",
'caption'=>" • الحلقة الرابعة عشر - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003425",
'caption'=>" • الحلقة الخامسة عشر - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003445",
'caption'=>" • الحلقة السادسة عشر - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003468",
'caption'=>" • الحلقة السابعة عشر - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003487",
'caption'=>" • الحلقة الثامنة عشر - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003512",
'caption'=>" • الحلقة التاسعة عشر - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003531",
'caption'=>" • الحلقة العشرون - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "mlf1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200343",
'caption'=>" • الحلقة الاولي - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200362",
'caption'=>" • الحلقة الثانيه - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200389",
'caption'=>" • الحلقة الثالثة - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003115",
'caption'=>" • الحلقة الرابعة - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003143",
'caption'=>" • الحلقة الخامسة - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003176",
'caption'=>" • الحلقة السادسة - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003219",
'caption'=>" • الحلقة السابعة - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003239",
'caption'=>" • الحلقة الثامنة - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003259",
'caption'=>" • الحلقة التاسعة - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003287",
'caption'=>" • الحلقة العاشرة - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003303",
'caption'=>" • الحلقة الحادية عشر - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003330",
'caption'=>" • الحلقة الثانية عشر - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003353",
'caption'=>" • الحلقة الثالثة عشر - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003375",
'caption'=>" • الحلقة الرابعة عشر - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003422",
'caption'=>" • الحلقة الخامسة عشر - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003447",
'caption'=>" • الحلقة السادسة عشر - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003469",
'caption'=>" • الحلقة السابعة عشر - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003489",
'caption'=>" • الحلقة الثامنة عشر - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003513",
'caption'=>" • الحلقة التاسعة عشر - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "rg1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200344",
'caption'=>" • الحلقة الاولي - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200366",
'caption'=>" • الحلقة الثانيه - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200387",
'caption'=>" • الحلقة الثالثة - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003117",
'caption'=>" • الحلقة الرابعة - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003142",
'caption'=>" • الحلقة الخامسة - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003175",
'caption'=>" • الحلقة السادسة - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003218",
'caption'=>" • الحلقة السابعة - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003240",
'caption'=>" • الحلقة الثامنة - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003260",
'caption'=>" • الحلقة التاسعة - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003286",
'caption'=>" • الحلقة العاشرة - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003307",
'caption'=>" • الحلقة الحادية عشر - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003328",
'caption'=>" • الحلقة الثانية عشر - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003351",
'caption'=>" • الحلقة الثالثة عشر - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003374",
'caption'=>" • الحلقة الرابعة عشر - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003423",
'caption'=>" • الحلقة الخامسة عشر - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003446",
'caption'=>" • الحلقة السادسة عشر - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003470",
'caption'=>" • الحلقة السابعة عشر - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003488",
'caption'=>" • الحلقة الثامنة عشر - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003510",
'caption'=>" • الحلقة التاسعة عشر - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "tw1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200340",
'caption'=>" • الحلقة الاولي - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200342",
'caption'=>" • الحلقة الثانيه - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200365",
'caption'=>" • الحلقة الثالثة - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200390",
'caption'=>" • الحلقة الرابعة - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003119",
'caption'=>" • الحلقة الخامسة - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003145",
'caption'=>" • الحلقة السادسة - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003181",
'caption'=>" • الحلقة السابعة - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003221",
'caption'=>" • الحلقة الثامنة - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003242",
'caption'=>" • الحلقة التاسعة - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003266",
'caption'=>" • الحلقة العاشرة - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003288",
'caption'=>" • الحلقة الحادية عشر - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003310",
'caption'=>" • الحلقة الثانية عشر - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003334",
'caption'=>" • الحلقة الثالثة عشر - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003354",
'caption'=>" • الحلقة الرابعة عشر - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003384",
'caption'=>" • الحلقة الخامسة عشر - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003427",
'caption'=>" • الحلقة السادسة عشر - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003449",
'caption'=>" • الحلقة السابعة عشر - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003472",
'caption'=>" • الحلقة الثامنة عشر - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003491",
'caption'=>" • الحلقة التاسعة عشر - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003514",
'caption'=>" • الحلقة العشرون - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}


if($data == "mk3l21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003562",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003583",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003597",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003620",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003647",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003674",
'caption'=>" • الحلقة السادس و العشرين - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003692",
'caption'=>" • الحلقة السابع و العشرين - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mk3l28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003715",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل مكتوب عليا  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}


if($data == "dm320"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003529",
'caption'=>" • الحلقة العشرون - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm321"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003557",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm322"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003581",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm323"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003598",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm324"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003622",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm325"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003649",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm326"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003675",
'caption'=>" • الحلقة السادس و العشرين - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm327"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003696",
'caption'=>" • الحلقة السابع و العشرين - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "dm328"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003716",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل دايما عامر  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003560",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003582",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003600",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003625",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003648",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003677",
'caption'=>" • الحلقة السادس و العشرين - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003693",
'caption'=>" • الحلقة السابع و العشرين - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rh28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003717",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل في بيتنا روبوت  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}



if($data == "rg20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003533",
'caption'=>" • الحلقة العشرون - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003558",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003580",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003601",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003621",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003651",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003676",
'caption'=>" • الحلقة السادس و العشرين - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003694",
'caption'=>" • الحلقة السابع و العشرين - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rg28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003718",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل راجعين يا هوي  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}


if($data == "mlf20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003532",
'caption'=>" • الحلقة العشرون - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003559",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003579",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003599",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003630",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003652",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003678",
'caption'=>" • الحلقة السادس و العشرين - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003698",
'caption'=>" • الحلقة السابع و العشرين - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "mlf28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003719",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل ملف سري  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "so20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003530",
'caption'=>" • الحلقة العشرون - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003561",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003578",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003602",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003623",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003653",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003673",
'caption'=>" • الحلقة السادس و العشرين - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003695",
'caption'=>" • الحلقة السابع و العشرين - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "so28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003720",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل Suits  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}


if($data == "tw21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003534",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003563",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003584",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003603",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003628",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003654",
'caption'=>" • الحلقة السادس و العشرين - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003672",
'caption'=>" • الحلقة السابع و العشرين - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003697",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "tw29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003721",
'caption'=>" • الحلقة التاسع و العشرين - مسلسل توبة  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "ms1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200345",
'caption'=>" • الحلقة الاولي - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200371",
'caption'=>" • الحلقة الثانيه - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200396",
'caption'=>" • الحلقة الثالثة - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003124",
'caption'=>" • الحلقة الرابعة - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003148",
'caption'=>" • الحلقة الخامسة - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003188",
'caption'=>" • الحلقة السادسة - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003225",
'caption'=>" • الحلقة السابعة - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003246",
'caption'=>" • الحلقة الثامنة - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003269",
'caption'=>" • الحلقة التاسعة - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003291",
'caption'=>" • الحلقة العاشرة - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003312",
'caption'=>" • الحلقة الحادية عشر - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003335",
'caption'=>" • الحلقة الثانية عشر - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003356",
'caption'=>" • الحلقة الثالثة عشر - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003387",
'caption'=>" • الحلقة الرابعة عشر - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003429",
'caption'=>" • الحلقة الخامسة عشر - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003451",
'caption'=>" • الحلقة السادسة عشر - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003474",
'caption'=>" • الحلقة السابعة عشر - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003494",
'caption'=>" • الحلقة الثامنة عشر - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003515",
'caption'=>" • الحلقة التاسعة عشر - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003537",
'caption'=>" • الحلقة العشرون - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003568",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003588",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003608",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003631",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003659",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003679",
'caption'=>" • الحلقة السادس و العشرين - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003699",
'caption'=>" • الحلقة السابع و العشرين - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ms28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003722",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل المشوار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200346",
'caption'=>" • الحلقة الاولي - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200374",
'caption'=>" • الحلقة الثانيه - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200399",
'caption'=>" • الحلقة الثالثة - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003125",
'caption'=>" • الحلقة الرابعة - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003154",
'caption'=>" • الحلقة الخامسة - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003185",
'caption'=>" • الحلقة السادسة - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003229",
'caption'=>" • الحلقة السابعة - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003248",
'caption'=>" • الحلقة الثامنة - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003270",
'caption'=>" • الحلقة التاسعة - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003292",
'caption'=>" • الحلقة العاشرة - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003313",
'caption'=>" • الحلقة الحادية عشر - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003338",
'caption'=>" • الحلقة الثانية عشر - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003358",
'caption'=>" • الحلقة الثالثة عشر - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003388",
'caption'=>" • الحلقة الرابعة عشر - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003430",
'caption'=>" • الحلقة الخامسة عشر - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003453",
'caption'=>" • الحلقة السادسة عشر - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003475",
'caption'=>" • الحلقة السابعة عشر - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003495",
'caption'=>" • الحلقة الثامنة عشر - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003516",
'caption'=>" • الحلقة التاسعة عشر - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003543",
'caption'=>" • الحلقة العشرون - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003567",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003585",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003606",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003633",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003655",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003680",
'caption'=>" • الحلقة السادس و العشرين - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003704",
'caption'=>" • الحلقة السابع و العشرين - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "ado28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003723",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل عائدون  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "2kti1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200349",
'caption'=>" • الحلقة الاولي - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200373",
'caption'=>" • الحلقة الثانيه - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003104",
'caption'=>" • الحلقة الثالثة - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003127",
'caption'=>" • الحلقة الرابعة - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003156",
'caption'=>" • الحلقة الخامسة - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003189",
'caption'=>" • الحلقة السادسة - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003227",
'caption'=>" • الحلقة السابعة - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003251",
'caption'=>" • الحلقة الثامنة - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003275",
'caption'=>" • الحلقة التاسعة - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003295",
'caption'=>" • الحلقة العاشرة - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003316",
'caption'=>" • الحلقة الحادية عشر - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003341",
'caption'=>" • الحلقة الثانية عشر - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003360",
'caption'=>" • الحلقة الثالثة عشر - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003410",
'caption'=>" • الحلقة الرابعة عشر - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003435",
'caption'=>" • الحلقة الخامسة عشر - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003455",
'caption'=>" • الحلقة السادسة عشر - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003479",
'caption'=>" • الحلقة السابعة عشر - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003498",
'caption'=>" • الحلقة الثامنة عشر - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003520",
'caption'=>" • الحلقة التاسعة عشر - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003541",
'caption'=>" • الحلقة العشرون - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003569",
'caption'=>" • الحلقة الحادي و العشرين - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003589",
'caption'=>" • الحلقة الثاني و العشرين - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003611",
'caption'=>" • الحلقة الثالث و العشرين - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003634",
'caption'=>" • الحلقة الرابع و العشرين - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003660",
'caption'=>" • الحلقة الخامس و العشرين - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003683",
'caption'=>" • الحلقة السادس و العشرين - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003706",
'caption'=>" • الحلقة السابع و العشرين - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "2kti28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003726",
'caption'=>" • الحلقة الثامن و العشرين - مسلسل الاختيار  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
if($data == "rm1"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200339",
'caption'=>" • الحلقة الاولي - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm2"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il200364",
'caption'=>" • الحلقة الثانيه - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm3"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il200394",
'caption'=>" • الحلقة الثالثة - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm4"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'thumb' => "https://t.me/U_R_Il2003",
video =>"https://t.me/U_R_Il2003120",
'caption'=>" • الحلقة الرابعة - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm5"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003146",
'caption'=>" • الحلقة الخامسة - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm6"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003183",
'caption'=>" • الحلقة السادسة - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm7"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003222",
'caption'=>" • الحلقة السابعة - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm8"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003243",
'caption'=>" • الحلقة الثامنة - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm9"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003268",
'caption'=>" • الحلقة التاسعة - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm10"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003290",
'caption'=>" • الحلقة العاشرة - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm11"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003311",
'caption'=>" • الحلقة الحادية عشر - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm12"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003336",
'caption'=>" • الحلقة الثانية عشر - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm13"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003363",
'caption'=>" • الحلقة الثالثة عشر - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm14"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003385",
'caption'=>" • الحلقة الرابعة عشر - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm15"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003428",
'caption'=>" • الحلقة الخامسة عشر - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm16"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003450",
'caption'=>" • الحلقة السادسة عشر - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm17"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003473",
'caption'=>" • الحلقة السابعة عشر - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm18"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003492",
'caption'=>" • الحلقة الثامنة عشر - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm19"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003521",
'caption'=>" • الحلقة التاسعة عشر - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm20"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003536",
'caption'=>" • الحلقة العشرون - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm21"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003564",
'caption'=>" • الحلقة الحادي و العشرين - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm22"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003587",
'caption'=>" • الحلقة الثاني و العشرين - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm23"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003604",
'caption'=>" • الحلقة الثالث و العشرين - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm24"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003629",
'caption'=>" • الحلقة الرابع و العشرين - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm25"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003658",
'caption'=>" • الحلقة الخامس و العشرين - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm26"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003682",
'caption'=>" • الحلقة السادس و العشرين - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm27"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003700",
'caption'=>" • الحلقة السابع و العشرين - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm28"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003745",
'caption'=>" • الحلقة الثامن و العشرين - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}

if($data == "rm29"){
bot('sendVideo',['chat_id'=>$chat_id2,'message_id'=>$message_id,
video =>"https://t.me/U_R_Il2003",
'caption'=>" • الحلقة التاسع و العشرين - برنامج رامز  ",
'reply_markup' => json_encode(['inline_keyboard' => [[['text'=>'- 🧑🏻‍💻الدعم','url'=>"t.me/YxYxYo_1"]],]])]);}
