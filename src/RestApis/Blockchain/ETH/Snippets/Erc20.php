<?php namespace RestApis\Blockchain\ETH\Snippets;

class Erc20 implements TokenTypeInterface {

    /**
     * @var string
     */
    private $type = 'ERC-20';

    /**
     * @return string
     */
    public function get() {
        return $this->type;
    }
}