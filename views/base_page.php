<?php
class BasePage
{
    public $page;

    public function __construct($page)
    {
        $this->page = $page;
    }

    public function show()
    {
        $this->_loadHtml();
        $this->_showMenu();
        $this->_showPage();
        $this->_showFooter();
        $this->_unloadHtml();
    }

    // 
    // 
    // 

    protected function _loadHtml()
    {
        echo '<html>';
        echo '<head>';
        echo '<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">';
        echo '<link rel="stylesheet" type="text/css" href="./css/main.css">';
        echo '<script type="text/javascript" src="js/bootstrap.js"></script>';
        echo '<title>Project Flat Tyre -='.ucwords($this->page).'=-</title>';
        echo '</head>';
        echo '<body>';
    }

    protected function _showMenu()
    {
        echo '<ul class="menu">';
        echo '<li class="menuitem"><a href="?page=home">Home</a></li>';
        echo '<li class="menuitem"><a href="?page=about">About</a></li>';
        echo '<li class="menuitem"><a href="?page=contact">Contact</a></li>';
        echo '</ul>';
    }

    protected function _showPage()
    {
        echo '<div class="main_page">';
        echo '<h1>'.ucwords($this->page)." is here!</h1>";
        echo '</div>';
    }

    protected function _showFooter()
    {
        echo "<footer>
                <div class='footerdiv_left'>Project Flat Tyre</div>
                <div class='footerdiv_right'>(c) Remco van der Veen 2020</div>
            </footer>";
    }

    protected function _unloadHtml()
    {
        echo "</body>";
        echo "</html>";
    }
}
?>