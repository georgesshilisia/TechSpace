<?php
class User
{
    /*
     * Init DB Variable
     */
    private $db;
    /*
     * Constructor
     */
    public function __construct(){
        $this->db = new Database();
}
    /*
     * Register User
     */
    function register($data){
        $this->db->query('INSERT INTO users (name, email, avatar, username, password, about,last_activity)
                                      VALUES (:name, :email, :avatar, :username, :password, :about, :last_activity))');
        //Bind Values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':avatar', $data['avatar']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':about', $data['about']);
        $this->db->bind(':last_activity', $data['last_activity']);

        //Execute
        if($this->db->execute()){
            return true;
        } else{
            return false;
        }
        //echo $this->db->lastInsertId();
    }

     /*
     * Upload User Avatar
     */
    public function uploadAvatar()
    {
        $allowedExts = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $_FILES["avatar"]["name"]);
        $extension = end($temp);

        if ((($_FILES["avatar"]["type"] == "image/gif")
                || ($_FILES["avatar"]["type"] == "image/jpeg")
                || ($_FILES["avatar"]["type"] == "image/jpg")
                || ($_FILES["avatar"]["type"] == "image/pjpeg")
                || ($_FILES["avatar"]["type"] == "image/x-png")
                || ($_FILES["avatar"]["type"] == "image/png"))
            && ($_FILES["avatar"]["size"] < 20000)
            && in_array($extension, $allowedExts)
        ) {
            if ($_FILES["avatar"]["error"] > 0) {
                redirect('register.php', $_FILES["avatar"]["error"], 'error');
            } else {
                if (file_exists("images/avatars" . $_FILES["avatar"]["name"])) {
                    redirect('register.php', 'File Already Exists', 'error');
                } else {
                    move_uploaded_file($_FILES["avatar"]["tmp_name"], "images/avatars/" . $_FILES["avatar"]["name"]);

                    return true;
                }
            }
        } else {
            redirect('register.php', 'Invalid File Type', 'error');
        }
    }
}