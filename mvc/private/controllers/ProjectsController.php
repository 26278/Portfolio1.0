<?php
class ProjectsController{

    function projects() {

        $topProjects = getAllTopProjects();
        $otherProjects = getAllOtherProjects();


        //Hier haal je de template engine op, die weet dat de views in private/views staan
        $template_engine = get_template_engine();

        //De template engine opdracht geven de juiste view weergeven: homepage (de ".php" mag je weglaten uit de naam van de view)
        echo $template_engine->render( 'projects', [
            'topProjects' => $topProjects,
            'otherProjects' => $otherProjects
        ] );
    }
    function project($id){

        if($id == 1 || $id == 2 || $id == 3 ) {
            $project = getTopProject($id);
        } else{
            $project = getOtherProject($id);
        }
        $template_engine = get_template_engine();
        echo $template_engine->render('show-project', [
            'project' => $project,

        ]);
    }
}
