<?php

class ProjectsController{

    function projects() {

        $projects = getAllProjects();


        //Hier haal je de template engine op, die weet dat de views in private/views staan
        $template_engine = get_template_engine();

        //De template engine opdracht geven de juiste view weergeven: homepage (de ".php" mag je weglaten uit de naam van de view)
        echo $template_engine->render( 'projects', [
            'projects' => $projects
        ] );
    }
    function project($id){
        $project = getAllProjects();
        $template_engine = get_template_engine();
        echo $template_engine->render('view-project', [
            'project' => $project
        ]);
    }
}
