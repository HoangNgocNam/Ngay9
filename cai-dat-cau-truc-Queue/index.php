<?php

include_once "Queue.php";

$queue = new Queue(10);
$queue->enQueue("sack 1");
$queue->enQueue("sack 2");
$queue->enQueue("sack 3");
$queue->enQueue("sack 4");
$queue->enQueue("sack 5");
$queue->deQueue();
$queue->deQueue();
$queue->deQueue();
$queue->isEmpty();
$queue->enQueue("toan");
$queue->enQueue("van");
$queue->deQueue();
$queue->deQueue();
$queue->deQueue();
$queue->deQueue();
$queue->isEmpty();
echo "<pre>";
print_r($queue);