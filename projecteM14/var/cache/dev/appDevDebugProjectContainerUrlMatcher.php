<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/back-end')) {
            // gestor_projectes_backend_login
            if ('/back-end' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\FormulariController::loginAction',  '_route' => 'gestor_projectes_backend_login',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gestor_projectes_backend_login'));
                }

                return $ret;
            }

            if (0 === strpos($pathinfo, '/back-end/tasca')) {
                // tasca_index
                if ('/back-end/tasca' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_tasca_index;
                    }

                    $ret = array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\TascaController::indexAction',  '_route' => 'tasca_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'tasca_index'));
                    }

                    return $ret;
                }
                not_tasca_index:

                // tasca_show
                if (preg_match('#^/back\\-end/tasca/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_tasca_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasca_show')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\TascaController::showAction',));
                }
                not_tasca_show:

                // tasca_new
                if ('/back-end/tasca/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_tasca_new;
                    }

                    return array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\TascaController::newAction',  '_route' => 'tasca_new',);
                }
                not_tasca_new:

                // tasca_edit
                if (preg_match('#^/back\\-end/tasca/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_tasca_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasca_edit')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\TascaController::editAction',));
                }
                not_tasca_edit:

                // tasca_delete
                if (preg_match('#^/back\\-end/tasca/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_tasca_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tasca_delete')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\TascaController::deleteAction',));
                }
                not_tasca_delete:

                // gestor_projectes_backend_crearTasca
                if ('/back-end/tasca' === $pathinfo) {
                    return array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\CrudController::creaTascaAction',  '_route' => 'gestor_projectes_backend_crearTasca',);
                }

            }

            elseif (0 === strpos($pathinfo, '/back-end/subtasca')) {
                // subtasca_index
                if ('/back-end/subtasca' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_subtasca_index;
                    }

                    $ret = array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\SubtascaController::indexAction',  '_route' => 'subtasca_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'subtasca_index'));
                    }

                    return $ret;
                }
                not_subtasca_index:

                // subtasca_show
                if (preg_match('#^/back\\-end/subtasca/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_subtasca_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subtasca_show')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\SubtascaController::showAction',));
                }
                not_subtasca_show:

                // subtasca_new
                if ('/back-end/subtasca/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_subtasca_new;
                    }

                    return array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\SubtascaController::newAction',  '_route' => 'subtasca_new',);
                }
                not_subtasca_new:

                // subtasca_edit
                if (preg_match('#^/back\\-end/subtasca/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_subtasca_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subtasca_edit')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\SubtascaController::editAction',));
                }
                not_subtasca_edit:

                // subtasca_delete
                if (preg_match('#^/back\\-end/subtasca/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_subtasca_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subtasca_delete')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\SubtascaController::deleteAction',));
                }
                not_subtasca_delete:

                // gestor_projectes_backend_crearSubtasca
                if ('/back-end/subtasca' === $pathinfo) {
                    return array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\CrudController::creaSubtascaAction',  '_route' => 'gestor_projectes_backend_crearSubtasca',);
                }

            }

            elseif (0 === strpos($pathinfo, '/back-end/estat')) {
                // estat_index
                if ('/back-end/estat' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_estat_index;
                    }

                    $ret = array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\EstatController::indexAction',  '_route' => 'estat_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'estat_index'));
                    }

                    return $ret;
                }
                not_estat_index:

                // estat_show
                if (preg_match('#^/back\\-end/estat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_estat_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estat_show')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\EstatController::showAction',));
                }
                not_estat_show:

                // estat_new
                if ('/back-end/estat/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_estat_new;
                    }

                    return array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\EstatController::newAction',  '_route' => 'estat_new',);
                }
                not_estat_new:

                // estat_edit
                if (preg_match('#^/back\\-end/estat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_estat_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estat_edit')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\EstatController::editAction',));
                }
                not_estat_edit:

                // estat_delete
                if (preg_match('#^/back\\-end/estat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_estat_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'estat_delete')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\EstatController::deleteAction',));
                }
                not_estat_delete:

            }

            elseif (0 === strpos($pathinfo, '/back-end/usuaris')) {
                // usuaris_index
                if ('/back-end/usuaris' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_usuaris_index;
                    }

                    $ret = array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\UsuarisController::indexAction',  '_route' => 'usuaris_index',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'usuaris_index'));
                    }

                    return $ret;
                }
                not_usuaris_index:

                // usuaris_show
                if (preg_match('#^/back\\-end/usuaris/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_usuaris_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuaris_show')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\UsuarisController::showAction',));
                }
                not_usuaris_show:

                // usuaris_new
                if ('/back-end/usuaris/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_usuaris_new;
                    }

                    return array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\UsuarisController::newAction',  '_route' => 'usuaris_new',);
                }
                not_usuaris_new:

                // usuaris_edit
                if (preg_match('#^/back\\-end/usuaris/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_usuaris_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuaris_edit')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\UsuarisController::editAction',));
                }
                not_usuaris_edit:

                // usuaris_delete
                if (preg_match('#^/back\\-end/usuaris/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_usuaris_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuaris_delete')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\UsuarisController::deleteAction',));
                }
                not_usuaris_delete:

            }

            elseif (0 === strpos($pathinfo, '/back-end/logout')) {
                // gestor_projectes_backend_logout
                if ('/back-end/logout1' === $pathinfo) {
                    return array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\FormulariController::logoutAction',  '_route' => 'gestor_projectes_backend_logout',);
                }

                // logout
                if ('/back-end/logout' === $pathinfo) {
                    return array('_route' => 'logout');
                }

            }

            // login
            if ('/back-end/login' === $pathinfo) {
                return array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\UsuarisController::loginAction',  '_route' => 'login',);
            }

            // gestor_projectes_backend_registrar_usuario
            if ('/back-end/reg' === $pathinfo) {
                return array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\CrudController::creaUsuariAction',  '_route' => 'gestor_projectes_backend_registrar_usuario',);
            }

            // gestor_projectes_backend_buscaTasques
            if (0 === strpos($pathinfo, '/back-end/home2') && preg_match('#^/back\\-end/home2(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gestor_projectes_backend_buscaTasques')), array (  '_controller' => 'GestorProjectes\\BackendBundle\\Controller\\CrudController::buscaTasquesAction',  'id' => 0,));
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
