<?php
##*HEADER*##

jimport('joomla.application.component.view');

/**
 * HTML View class for the ECR_COM_NAME Component.
 *
 * @package    ECR_COM_NAME
 */
class ECR_COM_NAMEViewECR_COM_NAME extends JView
{
    /**
     * ECR_COM_NAME view display method.
     *
     * @param string $tpl The name of the template file to parse;
     *
     * @return void
     */
    public function display($tpl = null)
    {
        $greeting = "Hello World!";
        $this->assignRef('greeting', $greeting);

        parent::display($tpl);
    }//function
}//class
