<?php

class MessageController {

    Public function newMessage($topic){
        if ($_SESSION['loggedUser'] != '' && $_POST['newMessage'] != ''){
            (new NewMessage($_POST['newMessage'], $_SESSION['loggedUser'], $topic))->sendMessage();
            echo '<meta http-equiv="refresh" content="0; URL=index.php?page=Topic&Topic='.$topic.'">';
        }

        require_once '../app/View/topic/sendMessage.php';
    }

    public function msgList($topic) {
        $messages=(new MessageList())->getMessages($topic);
        foreach($messages as $key=>$message){
            $messages[$key]=new Message($message["content"], $message["creationDate"], $message["author"], $message["editionDate"], $message["topic"], $message["deleted"], $message["edited"], $message["ID"]);
        }
        require_once "../app/View/topic/messageList.php";
    }
}