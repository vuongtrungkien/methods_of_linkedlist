<?php
include "Node.php";

class MyLinkedList
{

    private $firstNode;

    private $lastNode;

    private $numberNode;

    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->numberNode = 0;
    }

    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode == null) {
            $this->lastNode = $link;
        }
        $this->numberNode++;
    }

    public function addLast($data)
    {
        if ($this->firstNode != NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->numberNode++;
        } else {
            $this->addFirst($data);
        }
    }

    public function add($index, $data)
    {
        if ($index == 0) {
            $this->addFirst($data);
        } else {

            $link = new Node($data);
            $current = $this->firstNode;
            $previous = $this->firstNode;
            for ($i = 0; $i < $index; $i++) {
                $previous = $current;
                $current = $current->next;
            }
            $link->next = $current;
            $previous->next = $link;
            $this->numberNode++;
        }
    }


    public function removeValue($value)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;
        for ($i = 0; $i < $this->numberNode; $i++) {
            $previous = $current;
            if ($value == $previous->data) {
                $current1 = $this->firstNode;
                for ($j = 0; $j < $i; $j++) {
                    $previous1 = $current1;
                    $current1 = $current1->next;
                }
                $previous1->next = $previous->next;
                $this->numberNode--;
                break;
            }
            $current = $current->next;

        }
    }

    public function removeIndex($index)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;
        for ($i = 0; $i < $index; $i++) {
            $previous = $current;
            $current = $current->next;
        }
        $temp = $previous;
        $previous = $current;
        $temp->next = $previous->next;

    }

    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;

        while ($current != NULL) {
            array_push($listData, $current->getData());
            $current = $current->next;
        }
        return $listData;
    }



}