<?php

require "vendor/autoload.php";

$transport = (new Swift_SmtpTransport('smtp.elasticmail.com', 2525,'tls'))
    ->setUsername('testmail@archuser.com')
    ->setPassword('9B40C2B17A5972F8D6F67BA82E418490ACAD');


$mailer = new Swift_Mailer($transport);


$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['devilsog2.0@dgmail.com' => 'Ibou'])
    ->setTo(['ifall0282@gmail.com' => 'A name'])
    ->setBody('Here is the message itself')
;

$mailer->send($message);

