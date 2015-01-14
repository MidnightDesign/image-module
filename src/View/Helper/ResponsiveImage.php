<?php

namespace Midnight\ImageModule\View\Helper;

use Zend\View\Helper\HelperInterface;
use Zend\View\Renderer\RendererInterface as Renderer;

class ResponsiveImage extends \Midnight\Image\View\Helper\ResponsiveImage implements HelperInterface
{
    /**
     * @var Renderer
     */
    private $view;

    /**
     * Set the View object
     *
     * @param  Renderer $view
     * @return HelperInterface
     */
    public function setView(Renderer $view)
    {
        $this->view = $view;
    }

    /**
     * Get the View object
     *
     * @return Renderer
     */
    public function getView()
    {
        return $this->view;
    }
}
