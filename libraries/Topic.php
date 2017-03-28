<?php

class Topic
{
    //Initialize the DB variable
    private $db;

    /*
     * Constructor
     */
    public function __construct()
    {
        $this->db = new Database;
    }

    /*
     * Get Topics By Category
     */
    public function getAllTopics()
    {
        $this->db->query("SELECT topics.*, categories.*, users.username, users.avatar, categories.name FROM topics
                            INNER JOIN categories
                            ON topics.category_id = category.id
                            INNER JOIN users
                            ON topics.user_id = users.id
                            WHERE topics.category_id = :category_id
                            ");
        $this->db->bind('category_id', category_id);

        //Assign the resultset
        $results = $this->db->resultset();

        return $results;
    }

    /*
     * Get Total Number of Topics
     */
    public
    function getTotalTopics()
    {
        $this->db->query('SELECT * FROM topics');
        $rows = $this->db->resultset();
        return $this->db->rowCOunt();
    }

    /*
     * Get Total Number of Categories
     */
    public
    function getTotalCategories()
    {
        $this->db->query('SELECT * FROM categories');
        $rows = $this->db->resultset();
        return $this->rowCount();
    }

    public
    function getCategory($category_id)
    {
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");
        $this->db->bind('category_id', $category_id);

        //Assign Row
        $row = $this->db->single();

        return $row;
    }

    /*
     * Get Total Number of Replies
     */
    public function getTotalReplies($topic_id)
    {
        $this->db->query('SELECT * FROM replies WHERE topic_id=' . $topic_id);
        $rows = $this->db->resultset();
        return $this->rowCount();
    }
}