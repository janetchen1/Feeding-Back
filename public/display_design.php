<?php
   
   /**
     * display_design.php
     *
     * Janet Chen
     * Computer Science 50
     * Final Project
     * 
     * Directs user to design document.
     */
     
    // configuration
    require("../includes/config.php");
    
    // show design
    render("design.php", ["title" => "Design"]);
    
?>