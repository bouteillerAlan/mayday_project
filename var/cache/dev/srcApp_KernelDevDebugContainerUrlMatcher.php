<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdminBlogController::index'], null, null, null, false, false, null]],
            '/admin/new-blog-entry' => [[['_route' => 'admin.unique.new', '_controller' => 'App\\Controller\\Admin\\AdminBlogController::new'], null, null, null, false, false, null]],
            '/admin/user' => [[['_route' => 'admin.user', '_controller' => 'App\\Controller\\Admin\\AdminUserController::index'], null, null, null, false, false, null]],
            '/admin/new-user-entry' => [[['_route' => 'admin.user.new', '_controller' => 'App\\Controller\\Admin\\AdminUserController::new'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\Admin\\AdminAuthenticationController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/blog/([a-z 0-9 \\-]*)\\-([^/]++)(*:200)'
                    .'|/admin/modif\\-(?'
                        .'|([a-z 0-9 \\-]*)\\-([^/]++)(?'
                            .'|(*:253)'
                        .')'
                        .'|([^/]++)(*:270)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            200 => [[['_route' => 'blog.unique', '_controller' => 'App\\Controller\\BlogController::unique'], ['slug', 'id'], null, null, false, true, null]],
            253 => [
                [['_route' => 'admin.unique.edit', '_controller' => 'App\\Controller\\Admin\\AdminBlogController::edit'], ['slug', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
                [['_route' => 'admin.unique.delete', '_controller' => 'App\\Controller\\Admin\\AdminBlogController::delete'], ['slug', 'id'], ['DELETE' => 0], null, false, true, null],
            ],
            270 => [[['_route' => 'admin.user.delete', '_controller' => 'App\\Controller\\Admin\\AdminUserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        ];
    }
}
