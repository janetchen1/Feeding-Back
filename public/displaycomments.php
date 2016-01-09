<?php

    /**
     * displacomments.php
     *
     * Janet Chen
     * Computer Science 50
     * Final Project
     * 
     * Retrieves twenty most recent comments from database.
     */

    // configuration
    require("../includes/config.php");
    
    // set time zone to EST
    date_default_timezone_set('EST');
    
    // retrieve 20 most recent comments from comments table
    $comments = CS50::query("SELECT id, place_name, user_name, comment, 
    user_email, user_phone, time FROM comments ORDER BY id DESC LIMIT 20");
        
    // associative array for comments
    $positions = [];
            
    // fill $positions[]
    foreach ($comments as $comment)
    {
        $positions[] = [
            "id" => $comment["id"],
            "location" => $comment["place_name"],
            "user" => $comment["user_name"],
            "comment" => $comment["comment"],
            "email" => $comment["user_email"],
            "phone" => $comment["user_phone"],
            "time" => $comment["time"]
        ];
    }
       
   
    
    // render home_comments
    render("home_comments.php", ["positions" => $positions, "title" => "Home"]);
    
?>