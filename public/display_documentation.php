<?php

    /**
     * display_documentation.php
     *
     * Janet Chen
     * Computer Science 50
     * Final Project
     * 
     * Directs user to documentation.
     */
   
    // configuration
    require("../includes/config.php");
    
    // show documentation
    render("documentation.php", ["title" => "Documentation"]);
    
?>