<?php namespace RestApis\Blockchain\ETH\Snippets;

class Erc721 implements TokenTypeInterface {

    /**
     * @var string
     */
    private $type = 'ERC-721';

    /**
     * @return string
     */
    public function get() {
        return $this->type;
    }
}