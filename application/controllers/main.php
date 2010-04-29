<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Main template for all pages
 *
 * @package    Core
 * @author     http://harpywar.com
 * @copyright  (c) 2010 HarpyWar
 */
abstract class Main_Controller extends Controller
{
// Template view name
    public $template = 'template';

    // Default to do auto-rendering
    public $auto_render = TRUE;

    /**
     * Template loading and setup routine.
     */
    public function __construct()
    {
        parent::__construct();

        // Load the template
        $this->template = new View($this->template);
        $this->template->title = Kohana::lang("content.page_notfound");

        if ($this->auto_render == TRUE)
        {
        // Render the template immediately after the controller method
            Event::add('system.post_controller', array($this, '_render'));
        }
    }

    /**
     * Render the loaded template.
     */
    public function _render()
    {


        if ($this->auto_render == TRUE)
        {
        // Render the template when the class is destroyed
            $this->template->render(TRUE);
        }
    }




} // End Template_Controller