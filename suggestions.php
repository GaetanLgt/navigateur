<?php

if(isset($_POST['chemin'])){
$chemin = $_POST['chemin'];
afficheDossiers($chemin);
}else{
$chemin =".";
afficheDossiers($chemin);
}

function afficheDossiers($chemin) {
      // Ouverture du répertoire
      $repertoire = opendir($chemin);
      while($fichier = readdir($repertoire)) {
	    // Stockage nom fichier dans un tableau
	    $liste_fichiers[] = $fichier;
          $test = $chemin."/".$fichier;
       if(is_dir($test)) {
      if($fichier==="."){
       echo("");
            }else if($fichier===".."){
                  $NewcheminSplit = explode("/",$chemin);
                  $Newchemin ="";
                  $max = sizeof($NewcheminSplit);
                  if($max>1){
                  for($k=1 ; $k<$max-1; $k++){
                  $Newchemin = $Newchemin."/".$NewcheminSplit[$k];
                  }
                  echo ("<div class='col-sm-12 pt-3 pb-1'><p><button class='directory btn btn-warning' value='".$Newchemin."' type='submit'><i class='far fa-caret-square-up text-white'></i></button></br></p></div>");
                  }
                        }else {
                        echo ("<div class='col-sm-3 pt-3 pb-1 border border-warning'><p><button class='directory btn btn-success' value='".$chemin."/".$fichier."' type='submit'><i class='far fa-folder-open'></i></button></br>$fichier</p></div>");
                        }
      } else {
      echo ("<div class='col-sm-3 pt-3 pb-1 border border-warning'><p><a class='btn btn-danger'><i class='far fa-file'></i></a></br>$fichier</p></div>");
      }
      }  
}   