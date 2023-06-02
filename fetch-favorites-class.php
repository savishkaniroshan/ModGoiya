<?php

class FetchFavorites
{
  // variable to store the DBController instance
  public $db = null;

  // Constructor for Advertisement
  public function __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }

  // Function to fetch all the favorites from the database
  public function getAllFavorites($table = 'favorites')
  {
    $result = $this->db->con->query("SELECT
    favorites.fav_id,
    favorites.user_id,
    favorites.add_id,

    users.first_name,
    users.last_name,
    
    advertisements.title,
    advertisements.description,
    advertisements.email,
    advertisements.quntity,
    advertisements.unit_price,
    advertisements.image_url,
    advertisements.location,
    advertisements.category
    
  FROM favorites
  INNER JOIN users ON favorites.user_id = users.user_id
  INNER JOIN advertisements ON favorites.add_id = advertisements.add_id;
  ");
    $resultArray = array();
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      $resultArray[] = $item;
    }
    return $resultArray;
  }
}
