<?php
/**
 * Template File Doc Comment
 * 
 * PHP version 7
 
 
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

/**
 * Template Class Doc Comment
 * 
 * Template Class
 * 
 * @category Validateur_Class
 * @package  Validateur_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */
class Validateur
{
    /**
     * This function calculates the square of a number.
     *
     * @param int $input The number to be squared.
     * 
     * @return int The squared result.
     */
    public function check( $input ) 
    {
        if (strlen($input)<2) {
            return false;
        } else {
            return true;       
        }
       
    }   
}