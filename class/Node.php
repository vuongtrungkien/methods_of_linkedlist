<?php


class Node
{
public $next;
public $data;


    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function getData()
    {
        return $this->data;
    }
}