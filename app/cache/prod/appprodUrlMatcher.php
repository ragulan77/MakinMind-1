<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // MakinMindEditorBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MakinMind\\EditorBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'MakinMindEditorBundle_homepage'));
        }

        // MakinMindResourceBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MakinMind\\ResourceBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'MakinMindResourceBundle_homepage'));
        }

        // show_project
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>\\d+)\\-(?P<url>[a-zA-Z0-9-]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::showProjectAction',)), array('_route' => 'show_project'));
        }

        // project_confidentiality
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>\\d+)\\-(?P<url>[a-zA-Z0-9-]+)/confidentiality$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::confidentialityAction',)), array('_route' => 'project_confidentiality'));
        }

        // project_contract
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>\\d+)\\-(?P<url>[a-zA-Z0-9-]+)/contract$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::contractAction',)), array('_route' => 'project_contract'));
        }

        // projects
        if ($pathinfo === '/projects') {
            return array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectsListAction',  '_route' => 'projects',);
        }

        // my_projects
        if ($pathinfo === '/my-projects') {
            return array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::myProjectsListAction',  '_route' => 'my_projects',);
        }

        // project_list_developpers
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>\\d+)\\-(?P<url>[a-zA-Z0-9-]+)/developers$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectDevelopersListAction',)), array('_route' => 'project_list_developpers'));
        }

        // project_retained_candidates
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>\\d+)\\-(?P<url>[a-zA-Z0-9-]+)/candidates/retained$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectRetainedCandidatesListAction',)), array('_route' => 'project_retained_candidates'));
        }

        // project_candidates
        if (preg_match('#^/(?P<id>\\d+)\\-(?P<url>[a-zA-Z0-9-]+)/candidates$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectCandidatesListAction',)), array('_route' => 'project_candidates'));
        }

        // project_modifyResume
        if (preg_match('#^/(?P<id>\\d+)/modifyResume$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectModifyResumeAction',)), array('_route' => 'project_modifyResume'));
        }

        // project_modifyApplyTerms
        if (preg_match('#^/(?P<id>\\d+)/modifyApplyTerms$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectModifyApplyTermsAction',)), array('_route' => 'project_modifyApplyTerms'));
        }

        // project_status
        if (preg_match('#^/(?P<id>\\d+)\\-(?P<url>[a-zA-Z0-9-]+)/status$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectStatusAction',)), array('_route' => 'project_status'));
        }

        // project_createProject
        if ($pathinfo === '/project/create') {
            return array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::createProjectAction',  '_route' => 'project_createProject',);
        }

        // portal_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'portal_home');
            }
            return array (  '_controller' => 'MakinMind\\PortalBundle\\Controller\\DefaultController::indexAction',  '_route' => 'portal_home',);
        }

        // about_us
        if ($pathinfo === '/about-us') {
            return array (  '_controller' => 'MakinMind\\PortalBundle\\Controller\\DefaultController::aboutUsAction',  '_route' => 'about_us',);
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

            // fos_user_change_password
            if ($pathinfo === '/profile/password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }
                return array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_showUser
            if (preg_match('#^/profile/(?P<username>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_showUser;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\ProfileController::showUserAction',)), array('_route' => 'fos_user_profile_showUser'));
            }
            not_fos_user_profile_showUser:

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
