<?php
class BlogController
{
    function blog(){
        $template_engine = get_template_engine();
        echo $template_engine->render('blog');
    }
}