<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'MakinMindEditorBundle_homepage' => true,
       'resource_homepage' => true,
       'resource_personal_uploads' => true,
       'show_project' => true,
       'project_confidentiality' => true,
       'project_contract' => true,
       'projects' => true,
       'my_projects' => true,
       'project_list_developpers' => true,
       'project_retained_candidates' => true,
       'project_candidates' => true,
       'project_modifyResume' => true,
       'project_modifyApplyTerms' => true,
       'project_status' => true,
       'project_createProject' => true,
       'portal_home' => true,
       'about_us' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_edit' => true,
       'fos_user_change_password' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_showUser' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getMakinMindEditorBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MakinMind\\EditorBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getresource_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\ResourceBundle\\Controller\\uploadController::uploadAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/uploads/',  ),));
    }

    private function getresource_personal_uploadsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\ResourceBundle\\Controller\\uploadController::displayUploadsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/uploads/my-uploads',  ),));
    }

    private function getshow_projectRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::showProjectAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_confidentialityRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::confidentialityAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'text',    1 => '/confidentiality',  ),  1 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_contractRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::contractAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'text',    1 => '/contract',  ),  1 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getprojectsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectsListAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/projects',  ),));
    }

    private function getmy_projectsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::myProjectsListAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/my-projects',  ),));
    }

    private function getproject_list_developpersRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectDevelopersListAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'text',    1 => '/collaborators',  ),  1 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_retained_candidatesRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectRetainedCandidatesListAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'text',    1 => '/candidates/retained',  ),  1 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_candidatesRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectCandidatesListAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'text',    1 => '/candidates',  ),  1 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),));
    }

    private function getproject_modifyResumeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectModifyResumeAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'text',    1 => '/modifyResume',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),));
    }

    private function getproject_modifyApplyTermsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectModifyApplyTermsAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'text',    1 => '/modifyApplyTerms',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),));
    }

    private function getproject_statusRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectStatusAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'text',    1 => '/status',  ),  1 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),));
    }

    private function getproject_createProjectRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::createProjectAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/project/create',  ),));
    }

    private function getportal_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\PortalBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getabout_usRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\PortalBundle\\Controller\\DefaultController::aboutUsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/about-us',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/profile/password',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_showUserRouteInfo()
    {
        return array(array (  0 => 'username',), array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\ProfileController::showUserAction',), array (  '_method' => 'GET',  'username' => '.+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '.+',    3 => 'username',  ),  1 =>   array (    0 => 'text',    1 => '/profile',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }
}
