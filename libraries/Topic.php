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
    /*
     * Create Topic
     */
    public function create($data){
        //Insert Query
        $this->db->query("INSERT INTO topics (category_id, user_id, title, body, last_activity)
                                       VALUES(:category_id, :user_id, :title, :body, :last_activity)
                                    ");

        //Bind Values
        $this->db->bind(':category_id', $data['category_id']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':slug', $data['slug']);
        $this->db->bind(':body', $data['body']);
        $this->db->bind(':view_count', $data['view_count']);
        $this->db->bind(':last_activity', $data['last_activity']);

        //Execute
        if($this->db->execute()){
            return true;
        } else{
            return false;
        }
    }
    /*
     * Add Reply
     */
    public function reply($data){
        //Insert Query
        $this->db->query("INSERT INTO replies (topic_id, user_id, body)
                                   VALUES(:topic_id, :user_id, :body)
                                  ");

        //Bind Values
        $this->db->bind(':topic_id', $data['topic_id']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':body', $data['body']);

        //Execute
        if ($this->db->execute()){
            return true;
        } else{
            return false;
        }
    }
}
