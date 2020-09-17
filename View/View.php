<?php
abstract class View {
    protected $page;

    public function __construct(){
        $this->page = file_get_contents('HTML/head.html');
        $this->page .= file_get_contents('HTML/header.html');

    }

    public function display()
    {

        $this->page.=file_get_contents("HTML/footer.html");

        echo $this->page;

    }

    public function searchHTML($url){
        $this->page.= file_get_contents('HTML/'.$url.'.html');
    }

    public function replace($search, $item, $subject){
        $this->page = str_replace($search, $item, $subject);
    }
}