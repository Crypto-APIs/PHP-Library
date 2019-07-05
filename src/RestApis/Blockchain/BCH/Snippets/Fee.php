<?php

namespace RestApis\Blockchain\BCH\Snippets;

class Fee {

    private $item = [];
    /**
     * @param $value double
     * @param $address string
     */
    public function set($value, $address = null) {
        $data = ['value' => $value];
        if(!is_null($address)) {
            $data['address'] = $address;
        }
        $this->item = $data;
    }

    /**
     * @return array
     */
    public function get() {
        return $this->item;
    }
}