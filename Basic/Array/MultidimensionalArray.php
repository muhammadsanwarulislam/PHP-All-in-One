<?php

$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 8],
    ['Do exercise', 1],
];
$tasks[] = ['Build something matter in PHP', 2];
// unset($tasks[4]);
// array_splice($tasks[2], 2, 1);

foreach($tasks as $task)
{
    foreach($task as $task_details)
    {
        
        echo "<pre>";
        print_r($task_details);
        echo "</pre>";
    }
}

