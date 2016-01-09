<?php

    
    /**
     * replyprepare.php
     *
     * Janet Chen
     * Computer Science 50
     * Final Project
     * 
     * Feeds user information to, prepares reply form.
     */
    
    // configuration
    require("../includes/config.php");
    
    $recipient = CS50::query("SELECT user_name, user_email, user_phone FROM comments WHERE id = ?", $_POST["userid"]);
    
    // check for failure
    if ($recipient == 0)
    {
        apologize("Failed.");
    }
    
    if ($recipient[0]["user_name"] != NULL)
    {
        $name = $recipient[0]["user_name"];
    }
    else
    {
        $name = NULL;
    }
    
    if ($recipient[0]["user_email"] != NULL)
    {
        $useremail = $name . " <" . htmlspecialchars($recipient[0]["user_email"]) . ">";
    }
    else
    {
        $useremail = NULL;
    }
    
    if ($recipient[0]["user_phone"] != NULL)
    {
        $phone = $recipient[0]["user_phone"];
    }
    else
    {
        $phone = NULL;
    }
    
    
    // associated array for user's contact info
    $user = [
        "user" => $name,
        "phone" => $phone,
        "useremail" => $useremail
    ];
    
    // render home_comments
    render("reply_form.php", ["user" => $user, "title" => "Reply"]);
?>