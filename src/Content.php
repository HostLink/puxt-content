<?php

namespace PUXT;

class Content
{

    private $data = [];
    private $only = [];

    public function __construct(string $path)
    {

        if (file_exists("content/" . $path . ".json")) {
            $this->data = json_decode(file_get_contents("content/" . $path . ".json"), true);
        }
    }

    public function fetch()
    {
        $data = $this->data;
        

        if ($this->only) {
            $data = array_column($data, $this->only);
            print_R($data);
            die();
        }
        return $data;
    }

    /**
     * @param Array|string $key
     */
    public function only($keys)
    {
        if (is_string($keys)) {
            $this->only = [$keys];
        } else {
            $this->only = $keys;
        }
        return $this;
    }
}
