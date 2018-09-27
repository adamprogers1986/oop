<?php 

namespace Src\Site\Routing;

use Src\Admin\Parameters\AdminRoutes;

class Routes{

    public function __construct(){
        $adminRoutes = new AdminRoutes;
        $adminRoutes->addToRoutes("/", "hello", "you");
        $adminRoutes->addToRoutes("/ssss", "hello", "you");
        $adminRoutes->addToRoutes("/new", "hello", "you");
    }

}
