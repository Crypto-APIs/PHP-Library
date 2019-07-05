<?php

namespace RestApis\Blockchain\BCH\Snippets;

class Input {

    private $items = [];
    /**
     * @param $address string
     * @param $value double
     */
    public function add($address, $value) {
        $this->items[] = ['address' => $address, 'value' => $value];
    }

    /**
     * @return array
     */
    public function get() {
        return $this->items;
    }
}