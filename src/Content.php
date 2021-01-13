<?php

namespace PUXT;

class Content
{

    private $data;

    public function __construct(string $path)
    {

        if (file_exists("content/" . $path . ".json")) {
            $this->data = json_decode(file_get_contents("content/" . $path . ".json"), true);
        }
    }

    public function fetch()
    {
        return $this->data;
    }
}
