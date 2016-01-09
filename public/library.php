<?php

/**
 * library.php
 *
 * Janet Chen
 * Computer Science 50
 * Final Project
 * Adapted from dictionary.c, Problem Set 5, with help from Week 7 Wed Lecture
 *
 * Implements a dictionary's functionality.
 */

// size of dictionary
$size = 0;

// array to store words
$table[] = [];

/**
 * Returns true if word is in specified dictionary else false.
 */
function check($word, $dictionary)
{
    global $table;
    if (isset($table[$dictionary][strtolower($word)])) 
    {
        return true;
    }
    else
    {
        return false;
    }
}

/**
 * Loads dictionary into memory.  Returns true if successful else false.
 */
function load($dictionary)
{
    global $table, $size;
    if (!file_exists($dictionary) && is_readable($dictionary))
    {
        return false;
    }
    foreach (file($dictionary) as $word) 
    {
        $table[$dictionary][chop($word)] = true; 
        $size++;
    }
    return true;
}

?>
