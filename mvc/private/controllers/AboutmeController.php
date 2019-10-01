<?php

class AboutmeController
{
    function aboutme()
    {
        $template_engine = get_template_engine();
        echo $template_engine->render('aboutme');
    }
}