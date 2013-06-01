<?php

namespace Paradigma\Bundle\ImageBundle\Tests;

use Paradigma\Bundle\ImageBundle\Libs\ImageResizer;
use Paradigma\Bundle\ImageBundle\Libs\ImageSize;

class ImageSizeTest extends \PHPUnit_Framework_TestCase
{
    public function test()
    {
        $imageResizer = new ImageResizer();

        $filename_input  = __DIR__ . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'test.jpg';
        $filename_output = __DIR__ . DIRECTORY_SEPARATOR . 'Resources' . DIRECTORY_SEPARATOR . 'test_16.jpg';

        $imageResizer->resize($filename_input, $filename_output, new ImageSize(16, 16));

        $this->assertTrue(file_exists($filename_output));

        @unlink($filename_output);
    }

}
