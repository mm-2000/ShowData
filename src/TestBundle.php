<?php
namespace Mm2000\Bundle\TestBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class TestBundle extends AbstractBundle
{

    public function getVersion()
    {
        return '0.0.1';
    }

    public function test()
    {
        return 'test';
    }


}