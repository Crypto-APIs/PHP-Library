<?php

namespace RestApis\Blockchain\ETH;

use Common\Request;

abstract class Common extends Request {
    protected $endpoint = '/bc/eth';
}