#!/usr/bin/env php
<?php
    // parse csv file for comments, store dining hall, comments, name, phone, email in SQL table
    // also have column for "processed" --> bool
    
    // separate table for comments received for each location, "point score" for each location
    
    // ADAPTED FROM IMPORT, PSET8
    
    // CS50 Library and config
    require(__DIR__ . "/../includes/config.php");
    
    // check if file exists
    if (is_readable($argv[1]))
    {
        // open file
        $file = fopen($argv[1], "a");
        
        // check for failure
        if ($file == NULL)
        {
            echo "Could Not Open File";
            exit;
        }
        
        // read feedback line by line, cutting it at every tab until end of file reached
        // also makes sure no empty lines read in
        while (($data = fgetcsv($file, 0, "^")) !== FALSE)
        {
            if ($data != NULL)
            {
                // insert line into array
                $insert = CS50::query("INSERT INTO comments (place_id, comment,
                user_name, user_email, user_phone, processed) VALUES (?, ?, ?, ?, ?, '0')", $data[0], 
                $data[1], $data[2], $data[3], $data[4]);
            }
        }
        
        ftruncate($file, 0);
        
        fclose($file);
    }
    // if file does not exist or is not readable
    else
    {
        echo "File does not exist or is not readable";
        exit;
    }
    
?>