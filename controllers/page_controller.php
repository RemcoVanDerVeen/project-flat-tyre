<?php
require_once 'base_controller.php';

class PageController extends BaseController
{
    public function control()
    {
        parent::control();
        echo '<br><br>';
        echo $this->page;
        $this->showMenu();
    }

    protected function showMenu()
    {
        echo 
        "
        <ul>
            <li><a href='?page=home'>Home</a></li>
            <li><a href='?page=about'>About</a></li>
            <li><a href='?page=contact'>Contact</a></li>
        </ul>
        ";
    }
}
?>