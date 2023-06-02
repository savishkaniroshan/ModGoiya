<?php
ob_start();
?>

<?php

class Favorites
{
  public $db = null;

  public function __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }

  // insert into favorite table
  public  function insertIntoFavorite($params = null, $table = "favorite")
  {
    if ($this->db->con != null) {
      if ($params != null) {

        $columns = implode(',', array_keys($params));
        $values = implode(',', array_values($params));

        // create sql query
        $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

        // execute query
        $result = $this->db->con->query($query_string);
        return $result;
      }
    }
  }


  // to get user_id and add_id and insert into cart table
  public  function addToFavorite($user_id, $add_id)
  {
    if (isset($user_id) && isset($add_id)) {

      $params = array(
        "user_id" => $user_id,
        "add_id" => $add_id
      );

      $sql = "SELECT add_id FROM favorite";
      $result = $this->db->con->query($sql);

      //add to cart
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          if ($row["add_id"] != $add_id) {
            // insert data into cart
            $result = $this->insertIntoFavorite($params);
            if ($result) {
              // auto refresh the page
              header("Location: " . $_SERVER['PHP_SELF']);
            }
          }
        }
      } else {
        $result = $this->insertIntoFavorite($params);
        if ($result) {
          // auto refresh the page
          header("Location: " . $_SERVER['PHP_SELF']);
        }
      }
    }
  }

  // delete cart item using cart item user_id
  public function deleteCart($add_id = null, $table = null)
  {
    if ($add_id != null) {
      $result = $this->db->con->query("DELETE FROM {$table} WHERE add_id={$add_id}");
      if ($result) {
        header("Location:" . $_SERVER['PHP_SELF']);
      }
      return $result;
    }
  }
}
