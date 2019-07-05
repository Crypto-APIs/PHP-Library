<?php

namespace RestApis\Blockchain\BTC;

use Common\Request;

abstract class Common extends Request {
    protected $endpoint = '/bc/btc';
}