<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 15.05.2017
 * Time: 9:31
 */

namespace Blogger\BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig');
    }
}
