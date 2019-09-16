<?php
include "class/MyLinkedList.php";

$link1 = new MyLinkedList();
$link1->addFirst(20);
$link1->addLast(10);
$link1->addFirst(30);
$link1->add(0,92);
echo implode("-",$linkData);
$link1->removeValue(20);
$link1->removeIndex(2);
$linkData = $link1->readList();
echo implode("-",$linkData);
