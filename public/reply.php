<?php
    
    /**
     * reply.php
     *
     * Janet Chen
     * Computer Science 50
     * Final Project
     * 
     * Receives info from reply_form.php, sends email through Mailgun.
     */
    
    // configuration
    require("../includes/config.php");
  
    // include the Autoloader
    require ("../mailgun-php/vendor/autoload.php");
    use Mailgun\Mailgun;

    // instantiate the client.
    $mgClient = new Mailgun('key-cc5ba96a70b1bc00767c0db7afbc0877');
    $domain = "sandbox7045a441d3644df9a75679ea1893a75f.mailgun.org";
    
    // prepare message
    $message = wordwrap($_POST["message"], 70, "\r\n");

    // make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
        'from'    => 'HUDS <mailgun@sandbox7045a441d3644df9a75679ea1893a75f.mailgun.org>',
        'to'      => $_POST["to"],
        'subject' => $_POST["subject"],
        'text'    => $message
    ));

    // check for failure
    if ($result == false)
    {
        apologize("Response failed. Email address invalid.");
    }
    
    // on success, return to home page
    else
    {
        redirect("displaycomments.php");
    }
?>