<?php

/**
 * analysis.php
 *
 * Janet Chen
 * Computer Science 50
 * Final Project
 * 
 * Analyses comments for sentiment.
 */

    // configuration
    require("../includes/config.php");
    require ("library.php");
    
    // libraries to be searched
    $libraries = [
        "food" => 'food.txt',
        "service" => 'service.txt',
        "negative" => 'negative.txt',
        "positive" => 'positive.txt',
        "deceptive" => 'deceptive.txt'
    ];

    // repeat analysis process while still comments unprocessed
    do
    {
        // get location and comment for comments not yet processed (one at a time)
        $info = CS50::query("SELECT place_name, comment, id FROM comments WHERE processed = 'false' LIMIT 1");
        
        // if entry selected
        if (count($info) !== 0)
        {
            // update comment quantity in locations table to reflect incoming comment, if location given
            if ($info[0]["place_name"] != NULL)
            {
                $updatelocations = CS50::query("UPDATE locations SET comments_received = comments_received + 1 WHERE place_name = ?", $info[0]["place_name"]);
            }
            
            // if location not given, add comment to "unspecified location" row
            else
            {
                $updatelocations = CS50::query("UPDATE locations SET comments_received = comments_received + 1 WHERE place_name = ''");
            }
          
            // prepare to parse comment
            
            // trim whitespace around comment
            $nopunct = trim($info[0]["comment"]);
            
            // get rid of commas
            $nopunct = str_replace(',', '', $nopunct);
            
            // get rid of periods
            $nopunct = str_replace('.', '', $nopunct);
            
            // get rid of exclamation points
            $nopunct = str_replace('!', '', $nopunct);
            
            // no question marks
            $nopunct = str_replace('?', '', $nopunct);
            
            // no semicolons
            $nopunct = str_replace(';', '', $nopunct);
            
            // no colons
            $nopunct = str_replace(':', '', $nopunct);
            
            
            // explode comment into array of words
            $comment = explode(' ', $nopunct);

            // prepare array to track hits
            $tracker = [];
            
            // determine words in comment
            $terms = count($comment);
            
            // initialize tracker
            for ($i = 0; $i < $terms; $i++)
            {
                $tracker[$i] = '';
            }
            
            // repeat for each library
            foreach ($libraries as $key => $value)
            {
                // open .txt file
                $lib = fopen("../libraries/" . $value, "r");
                
                // load words into memory
                $loaded = load("../libraries/" . $value);
                
                // check for failure
                if ($loaded == false)
                {
                    apologize("Analysis failed.");
                }
                
                // iterate through comment
                for ($i = 0; $i < $terms; $i++)
                {
                    // check comment for keywords in current library, remember occurences in tracker
                    if (check($comment[$i], "../libraries/" . $value) == true)
                    {
                        $tracker[$i] = $tracker[$i] . " " . $key;
                    }
                }
                
                // close .txt file
                fclose($lib);
            }
            
            
            // check for deceiving words, as in "not good". filter them out.
            for ($i = 0; $i < $terms - 2; $i++)
            {
                // if a word marked as "deceiving"
                if (strpos($tracker[$i], 'deceiving') !== false)
                {
                    // check up to 2 terms following deceptive word for positives
                    for ($j = 1; $j <= 2; $j++)
                    {
                        // if positive found, replace positive with negative in tracker
                        if (strpos($tracker[$i + $j], 'positive') !== false)
                        {
                            str_replace('positive', 'negative', $tracker[$i + $j]);
                        }
                    }
                }
            }
             
            // check if negatives, positives apply to food or service; also apply to overall score.
            // iterate through comment
            for ($i = 0; $i < $terms; $i++)
            {
                // positive
                
                // if word has positive tag
                if (strpos($tracker[$i], 'positive') !== false)
                {
                    // first update overall score
                    $updateoverallscore = CS50::query("UPDATE locations SET overall_score = overall_score + 1 WHERE place_name = ?", $info[0]["place_name"]);
                    
                    // check for positive food
                    for ($j = -3; $j <= 3; $j++)
                    {
                        // check if i + j within array.
                        if ($i + $j >= 0 && $i + $j < $terms)
                        {
                            // check up to three words before and after positive, as well as positive itself. 
                            if (strpos($tracker[$i + $j], 'food') !== false)
                            {
                                // update food score if location given in comment
                                if ($info[0]["place_name"] != '')
                                {
                                    $updatefoodscore = CS50::query("UPDATE locations SET food_score = food_score + 1 WHERE place_name = ?", $info[0]["place_name"]); 
                                }
                                
                                // else update food score of unspecified location entry
                                else
                                {
                                    $updatefoodscore = CS50::query("UPDATE locations SET food_score = food_score + 1 WHERE place_name = ''");
                                }
                            }
                        }
                    }
                    
                    // check for positive service
                    for ($j = -3; $j <= 3; $j++)
                    {
                        // check if i + j within array.
                        if ($i + $j >= 0 && $i + $j < $terms)
                        {
                            // check up to three words before and after, as well as tracker[$i] itself. 
                            if (strpos($tracker[$i + $j], 'service') !== false)
                            {
                                // update service score if location given in comment
                                if ($info[0]["place_name"] != '')
                                {
                                    $updatefoodscore = CS50::query("UPDATE locations SET service_score = service_score + 1 WHERE place_name = ?", $info[0]["place_name"]); 
                                }
                                
                                // else update service score in location unspecified entry
                                else
                                {
                                    $updatefoodscore = CS50::query("UPDATE locations SET service_score = service_score + 1 WHERE place_name = ''");
                                }
                            }
                        }
                    }
                }
                
                // negative
                if (strpos($tracker[$i], 'negative') !== false)
                {
                    // first update overall score
                    $updateoverallscore = CS50::query("UPDATE locations SET overall_score = overall_score - 1 WHERE place_name = ?", $info[0]["place_name"]);
                    
                    // negative food
                    for ($j = -3; $j <= 3; $j++)
                    {
                        // check if i + j within array.
                        if ($i + $j >= 0 && $i + $j < $terms)
                        {
                            // check up to three words before and after, as well as tracker[$i] itself. 
                            if (strpos($tracker[$i + $j], 'food') !== false)
                            {
                                // update food score if location given in comment
                                if ($info[0]["place_name"] != '')
                                {
                                    $updatefoodscore = CS50::query("UPDATE locations SET food_score = food_score - 1 WHERE place_name = ?", $info[0]["place_name"]); 
                                }
                                
                                // else update food score in location unspecified row
                                else
                                {
                                    $updatefoodscore = CS50::query("UPDATE locations SET food_score = food_score - 1 WHERE place_name = ''");
                                }
                            }
                        }
                    }
                    
                    // check for negative service
                    for ($j = -3; $j <= 3; $j++)
                    {
                        // check if i + j within array.
                        if ($i + $j >= 0 && $i + $j < $terms)
                        {
                            // check up to three words before and after, as well as tracker[$i] itself. 
                            if (strpos($tracker[$i + $j], 'service') !== false)
                            {
                                // update service score if location given in comment
                                if ($info[0]["place_name"] != '')
                                {
                                    $updatefoodscore = CS50::query("UPDATE locations SET service_score = service_score - 1 WHERE place_name = ?", $info[0]["place_name"]); 
                                }
                                
                                // else update service score in location unspecified row
                                else
                                {
                                    $updatefoodscore = CS50::query("UPDATE locations SET service_score = service_score - 1 WHERE place_name = ''");
                                }
                            }
                        }
                    }
                }
            }
            
            // mark comment as processed
            $processed = CS50::query("UPDATE comments SET processed = true WHERE id = ?", $info[0]["id"]);
        }
        
              
    }
    // repeat until all comments processed
    while (count($info) !== 0);
    
    // retrieve scores for all locations
    $scores = CS50::query("SELECT place_name, comments_received, overall_score, food_score, service_score FROM locations");
    
    // array to store scores
    $locations = [];
    
    foreach ($scores as $score)
    {
        $locations[] = [
            "location" => $score["place_name"],
            "num_comments" => $score["comments_received"],
            "overall" => $score["overall_score"],
            "food" => $score["food_score"],
            "service" => $score["service_score"]
        ];
    }
    
    
    
    // render analysis_view
    render("analysis_view.php", ["locations" => $locations, "title" => "Analysis"]);

?>