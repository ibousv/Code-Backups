<?php

if (isset($_POST["soumettre"])) {
	# verifier s'il n'y a pas d'erreur au moment du téléversement
	if (isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] == 0) {

		$file_name = $_FILES["fichier"]["name"];
		$file_type = substr(strrchr($file_name, '.'), 1);
		$file_size = $_FILES["fichier"]["size"];

		if ($file_type != "pdf") {
			echo ("Erreur: Veuillez entrer un format pdf");
		} else {

			# verifier la taille du fichier
			$max_size = 2097152;  // soit 2mo en octet

			if ($file_size > $max_size) {
				echo ("Erreur: le fichier est trop grand ");
			} else {
				if (file_exists("uploads/" . $_FILES["fichier"]["name"]))
					echo $_FILES["fichier"]["name"] . " existe déjà!";
				else {
					move_uploaded_file(
						$_FILES["fichier"]["tmp_name"],
						"uploads/" . $_FILES["fichier"]["name"]
					);
					echo "Fichier sauvegarder avec succés";
				}
			}
		}
	} else {
		echo "Veuillez entrer un fichier";
	}
}
