<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // gestor_projectes_frontend_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'GestorProjectes\\FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gestor_projectes_frontend_homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gestor_projectes_frontend_homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/back-end')) {
            // gestor_projectes_backend_homepage
            if ('/back-end' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\DefaultController::loginAction',  '_route' => 'gestor_projectes_backend_homepage',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gestor_projectes_backend_homepage'));
                }

                return $ret;
            }

            // gestor_projectes_backend_formi_ini
            if ('/back-end/home' === $pathinfo) {
                return array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\FormulariController::createAction',  '_route' => 'gestor_projectes_backend_formi_ini',);
            }

        }

        // vallbonaweb_homepage
        if ('/public-web/home' === $pathinfo) {
            return array (  '_controller' => 'Vallbona\\webBundle\\Controller\\DefaultController::indexAction',  '_route' => 'vallbonaweb_homepage',);
        }

        if (0 === strpos($pathinfo, '/public-web/article')) {
            // vallbonaweb_articles
            if ('/public-web/articles' === $pathinfo) {
                return array (  '_controller' => 'Vallbona\\webBundle\\Controller\\DefaultController::articlesAction',  '_route' => 'vallbonaweb_articles',);
            }

            // vallbonaweb_article
            if (preg_match('#^/public\\-web/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vallbonaweb_article')), array (  '_controller' => 'Vallbona\\webBundle\\Controller\\DefaultController::articleAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
