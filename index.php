<?php
/**
 * Created by PhpStorm.
 * User: rp
 * Date: 12.07.18
 * Time: 14:23
 */

require('vendor/autoload.php');

$imagine = new Imagine\Gd\Imagine();
$image = $imagine->open(__DIR__.'/jack.jpg');

$image->resize(new \Imagine\Image\Box(200 , 200))
        ->save(__DIR__.'/jack2.jpg');