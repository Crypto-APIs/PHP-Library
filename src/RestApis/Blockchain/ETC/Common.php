<?php

namespace RestApis\Blockchain\ETC;

use Common\Request;

abstract class Common extends Request {
    protected $endpoint = '/bc/etc';
}
