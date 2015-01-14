<?php

namespace Midnight\ImageModule\View\Helper;

use Midnight\ImageModule\ImageFactory;
use Zend\View\Helper\AbstractHelper;

/**
 * Class Image
 *
 * @package Midnight\ImageModule\View\Helper
 */
class Image extends AbstractHelper
{
    /**
     * @var ImageFactory
     */
    private $imageFactory;

    /**
     * @param ImageFactory $imageFactory
     */
    public function __construct(ImageFactory $imageFactory)
    {
        $this->imageFactory = $imageFactory;
    }

    /**
     * @param string $file
     * @return \Midnight\Image\Image
     */
    public function __invoke($file)
    {
        return $this->imageFactory->create($file);
    }
}
