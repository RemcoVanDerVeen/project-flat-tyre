<?php
abstract class BaseController
{
    public $page;

    public function __construct($page)
    {
        $this->page = $page;
    }

    public function control()
    {
        echo 'it works';
        echo '<br><br>';
        echo 'Hello world!';
    }
}
?>