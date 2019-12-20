<?php

namespace RestApis\Blockchain\Layers\OmniLayer;

use Common\Request;

abstract class Common extends Request {
    protected $endpoint = '/bc/btc/omni';
}
