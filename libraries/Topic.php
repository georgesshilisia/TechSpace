<?php
class Topic{
 //Initialize the DB variable
    private $db;

    /*
     * Constructor
     */
    public function __construct(){
        $this->db = new Database;
    }
    /*
     * Get all Topics
     */
    public function getAllTopics(){
        $this->db->query('SELECT topics.*, users.username, users.avatar, categories.name FROM topics
                            INNER JOIN users
                            ON topics.user_id = users.id
                            INNER JOIN categories
                            ON topics.category_id = categories.id
                            ORDER BY create_date DESC
                            ');

        //Assign the resultset
    $results = $this->db->resultset();

    return $results;
        }
      /*
       * Get Total Number of Topics
       */
    public function getTotalTopics(){
        $this->db->query('SELECT * FROM topics');
        $rows = $this->db->resultset();
        return $this->db->rowCOunt();
    }
      /*
       * Get Total Number of Categories
       */
      public function getTotalCategories(){
          $this->db->query('SELECT * FROM categories');
          $rows = $this->db->resultset();
          return $this->rowCount();
      }
    /*
     * Get Total Number of Replies
     */
    public function getTotalReplies($topic_id){
        $this->db->query('SELECT * FROM replies WHERE topic_id='.$topic_id);
        $rows = $this->db->resultset();
        return $this->rowCount();
    }
    }