<?php
 
Trait Database {

  private function connect(){
	$string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
 	$con = new PDO($string,DBUSER,DBPASS);
   return $con;
  }

//research prepared statements in php and also php security
  public function query($query , $data = [])
  {

     $con = $this->connect();
     $stmt = $con->prepare($query);
//This stmt above creates a prepared statement, which is a secure way to execute queries by separating the query itself from the data.
     $check = $stmt->execute($data);

     if($check)
     {
     	$result = $stmt->fetchAll(PDO::FETCH_OBJ);

     
     if(is_array($result) && count($result))
     {
          return $result;
     }
     	return false;
 	}
  }
}


// code above with error handling for testing
//<?php
//
//private function connect() {
//  $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
//  try {
//    $con = new PDO($dsn, DBUSER, DBPASS, [
//      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//      PDO::ATTR_EMULATE_PREPARES => false,
//    ]);
//    return $con;
//  } catch (PDOException $e) {
//    // Handle connection error (e.g., log the error, throw an exception)
//    echo "Connection failed: " . $e->getMessage();
//    exit;
//  }
//}
//
//public function query($query, $data = []) {
//  $con = $this->connect();
//
//  try {
//    $stmt = $con->prepare($query);
//    $stmt->execute($data);
//
//    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
//
//    if (is_array($result) && count($result)) {
//      return $result;
//    } else {
//      return false;
//    }
//  } catch (PDOException $e) {
//    // Handle query execution error (e.g., log the error)
//    echo "Query execution failed: " . $e->getMessage();
//  } finally {
//    // Close the connection (optional, can be handled by PDO garbage collection)
//    $con = null;
//  }
//}
//
//
