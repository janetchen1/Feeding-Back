<?php

    /**
     * getcomments.php
     *
     * Janet Chen
     * Computer Science 50
     * Final Project
     * 
     * Adds newly submitted comments to database, redirects to displaycomments.php.
     */
    
    // configuration
    require(__DIR__ . "/../includes/config.php");
    
    // set time zone to EST
    date_default_timezone_set('EST');

    // handle empty location
    if ($_POST["cafename"] == '' && $_POST["graduate_dining_hall"] == '' && $_POST["undergraduate_dining_hall"] == '')
    {
        $place = NULL;
    }
    
    // handle multiple locations entered, also store location in $place
    else 
    {
        if ($_POST["cafename"] != '')
        {
            $place = $_POST["cafename"];
        }
        
        if ($_POST["graduate_dining_hall"] != '')
        {
            $place = $_POST["graduate_dining_hall"];
        }
        
        if ($_POST["undergraduate_dining_hall"] != '')
        {
            $place = $_POST["undergraduate_dining_hall"];
        }
    }
    
    // comment
    
    // handle empty comment
    if (strlen(trim($_POST["comment"])) == 0)
    {
        // redirect to disply comments
        redirect("displaycomments.php");
    }
    // store comment in $comment, also trimming whitespace
    else
    {
        $comment = trim($_POST["comment"]);
    }
    
    // user name
    
    // enter NULL if no user
    if (strlen(trim($_POST["name"])) == 0)
    {
        $name = NULL;
    }
    // store trimmed name in $name
    else
    {
        $name = trim($_POST["name"]);
    }
    
    // user email
    
    // handle lack of email
    if (strlen(trim($_POST["email"])) == 0)
    {
        $email = NULL;
    }
    
    // store trimmed email in $email
    else
    {
        $email = trim($_POST["email"]);
    }
    
    // user phone
    if (strlen(trim($_POST["phone"])) == 0)
    {
        $phone = NULL;
    }
    else
    {
        $phone = $_POST["phone"];
    }
    
    // insert comment into comments table
    $insert = CS50::query("INSERT INTO comments (place_name, comment,
    user_name, user_email, user_phone, processed) VALUES (?, ?, ?, ?, ?, '0')", 
    $place, $comment, $name, $email, $phone);
    
    // redirect to display comments
    redirect("displaycomments.php");
       
?>