<?php
##*HEADER*##

/**
 * The main uninstaller function
 */
function com_uninstall()
{
    echo '<h2>'.JText::sprintf('%s Uninstaller', 'ECR_COM_NAME').'</h2>';

    /*
     * Custom uninstall function
     *
     * If something goes wrong..
     */

    // return false;

    /*
     * otherwise...
     */

    return true;
}//function
