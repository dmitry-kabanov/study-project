<?php

class View {
    private $layout = 'layout.tpl.php';

    public function display($template, $context) {
        extract($context);
        ob_start();
        include $template.'.tpl.php';
        $content = ob_get_clean();
        include $this->layout;
    }
}
