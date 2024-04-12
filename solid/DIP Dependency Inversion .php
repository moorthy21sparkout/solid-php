<?php
interface Message {
    public function send($message);
}

class call implements Message {
    public function send($message) {
        echo "Email sent: $message\n";
    }
}

class Notification{
    private $messageSend;

    public function __construct(Message $messageSend) {
        $this->messageSend = $messageSend;
    }

    public function notify($message) {

        $this->messageSend->send($message);
    }
}

$obj = new call();
$notify = new Notification($obj);
$notify->notify("email send successfully....!");

?>