<?php
class App
{
 private $controller = "Home";
  private $method = "index";
  private function splitURL()
  {

    $URL = $_GET['url'] ?? 'home';
    $URL = explode("/", $URL);
    
    return $URL;
  }


  public function loadController()
  {
    $URL = $this->splitURL();
    $filename = "../app/controllers/".ucfirst($URL[0]).".php";
  // We want to be able to conditionally render the view accorrding to the value of the controller file name in the URL getting visited in the browser as well as the method which the controller is executing
    if (file_exists($filename)) {
      require $filename;
       $this->controller = ucfirst($URL[0]);
     // the URL becomes the value of the controller at phpthis poiunt and this is what is going to be used to choose the view that is to be loaded at the request of the user
    } else {
      $filename = "../app/controllers/_404.php";
      require $filename;
      $this->controller = "_404";

    }

/* instantiating the Home class in Home controller here gives us access to the Home controller so can we can conditonally start working with any method in the Home controller. It has to be done here during loadController method so that it picks up and runs from here */
  $controller = new $this->controller;
  call_user_func([$controller, $this->method ]);
  } 

}
