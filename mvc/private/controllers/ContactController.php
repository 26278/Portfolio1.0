<?php
class ContactController
{
    function contact(){
        $template_engine = get_template_engine();
        echo $template_engine->render('contact');
    }
}