<?php
namespace Demo\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function showStyles(Twig $twig):string
    {
        return $twig->render('Demo::content.styles');
    }
}