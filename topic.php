<?php require ('core/init.php');?>

<?php
//Create Topic Object
$topic = new Topic;

//Get ID from URL
$topic_id = $_GET['id'];

//Get Template & Assign Vars
$template = new Template('templates/topic.php');

//Assign Vars
$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->getTopic($topic_id)->title;

//Process Reply
if(isset($_POST['do_reply'])){
    //Create Data Array
    $data = array();
    $data['topic_id'] = $_GET['id'];
    $data['body'] = $_POST['body'];
    $data['user_id'] = getUser()['user_id'];

    //Create Validator Object
    $validate = new Validator;

    //Required Fields
    $field_array = array('body');

    if($validate->isRequired($field_array)) {
        //Register User
        if ($topic->reply($data)) {
            redirect('topic.php?id=' . $topic_id, 'Your Topic has been posted', 'success');
        } else {
            redirect('topic.php?id=' . $topic_id, 'Something went wrong with your post', 'error');
        }
    } else{
        redirect('topic_php?id=' .$topic_id,'Your reply form is blank', 'error');
    }
}
//Display template
echo $template;