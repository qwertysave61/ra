<?php
/* Bu kod @sarvar_offical0017 tomonidan yozilgan
Barchamizga yaqinlashib kelayotgan Muborak Ramazon oyi qutlug' bo'lsin! Omin 🤲 */

$admin = '1215424881'; // Admin ID
$token = '5571503607:AAHvem3lFbtFpSG7AV6OEKslPDROhA64wpw';  //Bot token

function bot($method,$datas=[]){
global $token;
$url = "https://api.telegram.org/bot".$token."/".$method;
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

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$name = $message->from->first_name;
$UzWebDev = file_get_contents("data/$from_id/ali.txt");
$Uzb = file_get_contents("data/$from_id/uzb.txt");
$Uzb1 = file_get_contents("data/$from_id/uzb1.txt");
$Uzb2 = file_get_contents("data/$from_id/uzb2.txt");
$Uzb3 = file_get_contents("data/$from_id/uzb3.txt");
$Uzb4 = file_get_contents("data/$from_id/uzb4.txt");
$Uzb5 = file_get_contents("data/$from_id/uzb5.txt");
$Uzb6 = file_get_contents("data/$from_id/uzb6.txt");
$to =  file_get_contents("data/$from_id/token.txt");
$url =  file_get_contents("data/$from_id/url.txt");

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🕋Ramazon Tabrigi"]],
[['text'=>"🕋Ramazon Tabrigi2️⃣"]],
[['text'=>"🕋Ramazon Tabrigi3️⃣"]],
[['text'=>"🕋Ramazon Tabrigi4️⃣"]],
[['text' =>"🕋Ramazon Tabrigi5️⃣"]],
[['text' =>"🕋Ramazon Tabrigi6️⃣"]],
[['text'=>"🏡Uyda Qoling"],['text'=>"🕋Juma Muborak"]], 
[['text'=>"Namoz Kitobi📖"],['text'=>"Namoz Vaqti⏰"]], 
[['text'=>"📅Ramazon Taqvimi"],['text' =>"🛠️Yaratuvchi"]],
]
]);

if($text=="🛠️Yaratuvchi"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/php_dasturchi0017/2",
'caption'=>" Ushbu Bot Yaratuvchisi #Sarvar #Gaybullaev Instagram: #sarvargaybullaev2001◾Telegram:@sarvar_offical0017◾You tube: Sarvar Gaybullaev Tomonidan Yaratilgan",
'parse_mode'=>"html"
]);
}

$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],
]
]);

if($type=="private"){
if($text=="/start"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Assalomu Alaykum $name</b>\n\n Ismingiz qatnashgan Ramazon Tabrigini ▪️Juma Tabrigini Yasab Beruvchi botimizga xush kelibsiz. Ushbu bot Dasturchi @sarvar_offical0017 tomonidan yaratildi! ",
'parse_mode'=>'html',
'reply_markup'=>$key,
]);
}}

if($tx == "📅Ramazon Taqvimi"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/taqvimsarvar/4",
'caption'=>"Ushbu Ramazon Taqvimi 2020 yil uchun Tuzib chiqilgan bu yerda og'iz ochish yopish duolari ham kiritilgan Bu taqvim Rasmiy Saytlardan olingan #Sarvar #Gaybullaev",
'parse_mode'=>"html"


]);
}

if($text=="🕋Ramazon Tabrigi"){
file_put_contents("data/$from_id/ali.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🕋 <b>Ramazon tabrigida ishtirok etadigan Ismingizni yozib yuboring. Eslatma Yuborayotgan ismda Faqat Lotin Harflari ishtirok etsin:</b>

<b>Masalan:</b> Sarvar",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],

]
])
]);
}
elseif($UzWebDev == "to"){
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://sarvar1421.000webhostapp.com/Logo2/indexuz.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>Alloh Ramazon oyida barchamizga kuch quvvat a`to etsin Ramazon oyi Muborak bo'lsin Ushbu bot Dasturchi @sarvar_offical0017 tomonidan yaratildi. </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],
]
])
]);
unlink("data/$from_id/ali.txt");
exit();
}
if($text=="🕋Ramazon Tabrigi2️⃣"){
file_put_contents("data/$from_id/uzb.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🕋 <b>Ramazon tabrigida ishtirok etadigan Ismingizni yozib yuboring Eslatma Yuborayotgan ismda Faqat Lotin Harflari ishtirok etsin:</b>

<b>Masalan:</b> Sarvar",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],

]
])
]);
}
elseif($Uzb == "to"){
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://sarvar1421.000webhostapp.com/Logo1/indexuz.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>Alloh Ramazon oyida barchamizga kuch quvvat a`to etsin Ramazon oyi Muborak bo'lsin Ushbu bot  @sarvar_offical0017 tomonidan yaratildi. </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],
]
])
]);
unlink("data/$from_id/uzb.txt");
exit();
}
if($text=="🕋Ramazon Tabrigi3️⃣"){
file_put_contents("data/$from_id/uzb1.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🕋 <b>Ramazon tabrigida ishtirok etadigan Ismingizni yozib yuboring Eslatma Yuborayotgan ismda Faqat Lotin Harflari ishtirok etsin:</b>

<b>Masalan:</b> Sarvar",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],

]
])
]);
}
elseif($Uzb1 == "to"){
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://sarvar1421.000webhostapp.com/Rasm11/indexuz.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>Alloh Ramazon oyida barchamizga kuch quvvat a`to etsin Ramazon oyi Muborak bo'lsin Ushbu bot @sarvar_offical0017  tomonidan yaratildi. </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],
]
])
]);
unlink("data/$from_id/uzb1.txt");
exit();
}
if($text=="🕋Ramazon Tabrigi4️⃣"){
file_put_contents("data/$from_id/uzb2.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🕋 <b>Ramazon tabrigida ishtirok etadigan Ismingizni yozib yuboring. Ushbu bot  @sarvar_offical0017 tomonidan yaratildi:</b>

<b>Masalan:</b> Sarvar",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],

]
])
]);
}
elseif($Uzb2 == "to"){
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://sarvar1421.000webhostapp.com/Logo3/indexuz.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>Alloh Ramazon oyida barchamizga kuch quvvat a`to etsin Ramazon oyi Muborak bo'lsin Ushbu bot  @sarvar_offical0017 tomonidan yaratildi. </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],
]
])
]);
unlink("data/$from_id/uzb2.txt");
exit();
}
if($text=="🕋Ramazon Tabrigi5️⃣"){
file_put_contents("data/$from_id/uzb3.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🕋 <b>Ramazon tabrigida ishtirok etadigan Ismingizni yozib yuboring. Eslatma Yuborayotgan ismda Faqat Lotin Harflari ishtirok etsin:</b>

<b>Masalan:</b> Sarvar",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],

]
])
]);
}
elseif($Uzb3 == "to"){
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://sarvar1421.000webhostapp.com/Logo4/indexuz.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>Alloh Ramazon oyida barchamizga kuch quvvat a`to etsin Ramazon oyi Muborak bo'lsin Ushbu bot  @sarvar_offical0017 tomonidan yaratildi. </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],
]
])
]);
unlink("data/$from_id/uzb3.txt");
exit();
}
if($text=="🕋Ramazon Tabrigi6️⃣"){
file_put_contents("data/$from_id/uzb4.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🕋 <b>Ramazon tabrigida ishtirok etadigan Ismingizni yozib yuboring 👉!Eslatma Yuborayotgan ismda Faqat Lotin Harflari ishtirok etsin </b>

<b>Masalan:</b> Sarvar",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],

]
])
]);
}
elseif($Uzb4 == "to"){
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://sarvar1421.000webhostapp.com/Rasm4/indexuz1.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>Alloh Ramazon oyida barchamizga kuch quvvat a`to etsin Ramazon oyi Muborak bo'lsin Ushbu bot  @sarvar_offical0017 tomonidan yaratildi. </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],
]
])
]);
unlink("data/$from_id/uzb4.txt");
exit();
}
if($text=="🏡Uyda Qoling"){
file_put_contents("data/$from_id/uzb5.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🕋 <b>Uyda Qoling ishtirok etadigan Ismingizni yozib yuboring 👉!Eslatma Yuborayotgan Ismda Faqat Lotin Harflari Ishtirok etsin</b>

<b>Masalan:</b> Sarvar",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],

]
])
]);
}
elseif($Uzb5 == "to"){
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://sarvar1421.000webhostapp.com/Rasm7/index.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>Alloh Ramazon oyida barchamizga kuch quvvat a`to etsin Ramazon oyi Muborak bo'lsin  Ushbu bot @sarvar_offical0017 tomonidan yaratildi. </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],
]
])
]);
unlink("data/$from_id/uzb5.txt");
exit();
}
if($text=="🕋Juma Muborak"){
file_put_contents("data/$from_id/uzb6.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🕋 <b>Juma Tabrigida ishtirok etadigan Ismingizni yozib yuboring 👉!Eslatma Yuborayotgan Ismda Faqat Lotin Harflari Ishtirok etsin</b>

<b>Masalan:</b> Sarvar",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],

]
])
]);
}
elseif($Uzb6 == "to"){
$ex=$text;
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://sarvar1421.000webhostapp.com/Logo/indexuz.php?text=$ex",
'caption'=>" <b>Bizning Botdan foydalanganingiz uchun minnatdormiz!</b>\n
<i>Alloh Ramazon oyida barchamizga kuch quvvat a`to etsin Ramazon oyi Muborak bo'lsin  Ushbu bot @sarvar_offical0017 tomonidan yaratildi. </i>",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga qaytish"]],
]
])
]);
unlink("data/$from_id/uzb6.txt");
exit();
}

if($text=="📅Ramazon Taqvimi"){
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/taqvimsarvar/3",
'caption'=>" Ramazon Taqvimi 2020 Ro'za tutish (og'iz yopish) hamda Iftorlik (og'iz ochish) vaqtlari hamda duolari (Toshkent vaqti bilan). Barcha musulmonlarga ULASHING. SAVOBGA SHERIK BO'LING!

🛠️Yaratuvchi: Sarvar Gaybullaev ",
'parse_mode'=>"html"
]);
}
if($text=="Namoz Kitobi📖"){
bot('senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/nomozsarvar/3",
'caption'=>"    𝑼 𝑺 𝑯 𝑩 𝑼  𝑵 𝑨 𝑴 𝑶 𝒁    𝑲 𝑰 𝑻 𝑶 𝑩 𝑰 𝑫 𝑨  𝑵 𝑨 𝑴 𝑶 𝒁  𝑶 '𝑸 𝑰 𝑺 𝑯  𝑻 𝑨 𝑹 𝑻 𝑰 𝑩 𝑳 𝑨 𝑹 𝑰  𝑲 𝑨 𝑻 𝑻 𝑨  𝑽 𝑨  𝑲 𝑰 𝑪 𝑯 𝑰 𝑲  𝑫 𝑼 𝑶 𝑳 𝑨 𝑹 , 𝑺 𝑼 '𝑹 𝑨  𝑳 𝑨 𝑹  𝑱 𝑶 𝒀 𝑳 𝑨 𝑵 𝑨 𝑮 𝑨 𝑵  𝑩 𝑶 𝑻  𝒀 𝑨 𝑹 𝑨 𝑻 𝑼 𝑽 𝑪 𝑯 𝑰 𝑺 𝑰 : #Sarvar #Gaybullaev",
'parse_mode'=>"html"
]);
}


if($text=="Orqaga qaytish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Siz bosh menyudasiz.</b>",
'parse_mode'=>'html',
'reply_markup'=>$key
]);
}

$lichka = file_get_contents("lichka.txt");
mkdir("data");
mkdir("data/$cid");
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.txt","$lichka\n$cid");
}
}
$reply = $message->reply_to_message->text;
$rpl = json_encode([
'resize_keyboard'=>false,
'force_reply' => true,
'selective' => true
]);


if($text=="/send" and $cid==$admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Yuboriladigan xabar matnini kiriting!",'parse_mode'=>"html",'reply_markup'=>$rpl
]);
}
if($reply=="Yuboriladigan xabar matnini kiriting!"){
$lich = file_get_contents("lichka.txt");
$lichka = explode("\n",$lich);
foreach($lichka as $uid){
bot("sendmessage",[
'chat_id'=>$uid,
'text'=>"$text"]);
}
}
if($text=="/stat" and $cid==$admin){
$lich = substr_count($lichka,"\n");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bot foydalanuvchilari soni $lich ta.",
'parse_mode'=>"html"
]);
}

?>
