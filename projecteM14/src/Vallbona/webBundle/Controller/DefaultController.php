<?php

namespace Vallbona\webBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('VallbonawebBundle:Default:index.html.twig');
    }

    public function articlesAction() {
        return $this->render('VallbonawebBundle:Default:articles.html.twig');
    }

    public function articleAction($id) {
        $a = "asdfasdf";
        $b = "affffffff";
        return $this->render('VallbonawebBundle:Default:article.html.twig',
        array(
        'id' => $id,
        'a' => $a,
        'b' => $b,
        ));
    }

}
