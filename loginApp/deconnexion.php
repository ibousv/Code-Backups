<?php
session_start();
session_destroy();
header("localtion:index.php?dec=Déconnexion Réussie");
