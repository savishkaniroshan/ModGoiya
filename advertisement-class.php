<?php

class Advertisement
{
    // variable to store the DBController instance
    public $db = null;

    // Constructor for Advertisement
    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // Function to fetch all the advertisements from the database
    public function getAllAds($table = 'advertisements')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    // Function to fetch a specific advertisement from the database
    public function getSpecificAd($itemId)
    {
        $table = 'advertisements';
        $result = $this->db->con->query("SELECT * FROM {$table} WHERE book_id = $itemId");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}
