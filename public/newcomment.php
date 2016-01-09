<?php
    
    /**
     * newcomment.php
     *
     * Janet Chen
     * Computer Science 50
     * Final Project
     * 
     * Renders form for new comments.
     */
    
    require(__DIR__ . "/../includes/config.php");
    
    // render newcomment_form
    render("newcomment_form.php", ["title" => "New Comment"]);
?>