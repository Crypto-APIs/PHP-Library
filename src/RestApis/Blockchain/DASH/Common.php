<?php

namespace RestApis\Blockchain\DASH;

use Common\Request;

abstract class Common extends Request {
    protected $endpoint = '/bc/dash';
}