<?php

class App
{

  private function splitURL()
  {

    $URL = $_GET['url'] ?? 'home';
    $URL = explode("/", $URL);
    
    return $URL;
  }

  /*
	 * short version of the splitURL function
	 *private function splitURL() {
    return explode("/", $_GET['url'] ?? 'home');sds
}
	 */

  public function loadController()
  {

    $URL = $this->splitURL();
    $filename = "../app/controllers/".ucfirst($URL[0]).".php";

    if (file_exists($filename)) {
      echo $URL;
       require $filename;
    } else {
      $filename = "..app/controllers/_404.php";
      require $filename;

    }
  }
}
