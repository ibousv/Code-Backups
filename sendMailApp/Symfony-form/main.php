<?php
# inclusion du fichier autoload.php
# inclusion du fichier envoi_mail.php

require './vendor/autoload.php';
require 'envoi_mail.php';

# importation de la classe ExceptionInterface pour pouvoir debugger le code


use Symfony\Component\Mailer\Transport;

# importation de la classe Mailer

use Symfony\Component\Mailer\Mailer;

# importation de la classe Email

use Symfony\Component\Mime\Email;

# creation du transport

$transport = Transport::fromDsn('smtp://devilsog2.0@gmail.com:eoujmarlcwlemmou@smtp.gmail.com:25');

# creation d'un objet Mailer

$mailer = new Mailer($transport);

# creation d'un objet Email

$email = (new Email());

/* Utilisation des methodes from, to, subject, text, et send pour l'envoie du mail */

$email->from('devilsog2.0@gmail.com');

$email->to($destinataire);

$email->subject($objet);

$email->text($message);

$mailer->send($email);
