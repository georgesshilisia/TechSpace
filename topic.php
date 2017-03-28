<?php require ('core/init.php');?>

<?php

//Get Template & Assign Vars
$template = new Template('templates/topic.php');

//Assign Vars
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

//Display template
echo $template;