<?php
require_once 'base_controller.php';
require_once './views/base_page.php';

class PageController extends BaseController
{
    public function control()
    {
        $action = new BasePage($this->page);
        $action->show();
    }
}
?>