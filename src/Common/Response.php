<?php
namespace Common;

class Response {

    /**
     * @var \stdClass
     */
    protected $data;

    /**
     * Response constructor.
     * @param \stdClass $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return \stdClass
     */
    public function get() {
        return $this->data;
    }

}