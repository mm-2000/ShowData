<?php
namespace Mm2000\ShowDataBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class ShowDataBundle extends AbstractBundle
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