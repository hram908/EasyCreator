<?php
##*HEADER*##

/**
 * ECR_COM_SCOPE Plugin.
 *
 * @package     ECR_COM_NAME
 * @subpackage  Plugin
 */
class plgECR_COM_SCOPEECR_COM_NAME extends JPlugin
{
    /**
     * Constructor.
     */
    public function __construct(&$subject, $config)
    {
        parent::__construct($subject, $config);
    }//function

    /**
     * This will trigger the event 'OnDoSomething'.
     *
     * @return string Demo: 'Did something'
     */
    function onDoSomething()
    {
        return 'Did something';
    }//function
}//class
