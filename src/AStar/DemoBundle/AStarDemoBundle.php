<?php

namespace AStar\DemoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AStarDemoBundle extends Bundle
{

    public function getParent()
    {
        return 'SonataAdminBundle';
    }

}
