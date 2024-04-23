<?php

/**
 * 
 */
class Model 
{

	use Database;
 protected $table = 'users';
	function test()
	{
		$query = "select * from users";
		$result = $this->query($query);
		show($result);
  }

  public function where($data){
    $query = "select * from $table where id = :id";
      $this->query($query, ['id' =>23 ]);
    // we use the query function to get the data from the database
  }
  public function first($data){
          
  }
  public function insert($data){
          
  }
//
  public function update($id, $data, $id_column = 'id'){
          
  }


  public function delete($id, $id_column = 'id'){
          
  }
}
