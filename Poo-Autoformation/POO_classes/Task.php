<?php
class Task
{
    public $description;
    public $completed = false;
    public function __construct($description)
    {
        $this->description = $description;
    }
    public function complete()
    {
        return $this->completed = true;
    }
}

$task = new Task("Design Thinking");
$task2 = new Task("UML");
var_dump($task->description);
var_dump($task2->description);
$task->complete();
var_dump($task->completed);
