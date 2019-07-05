<?php

namespace RestApis\Blockchain\LTC;

use Common\Request;

abstract class Common extends Request {
    protected $endpoint = '/bc/ltc';
}