<?php

/* navbar_header.html */
class __TwigTemplate_bb32cc47b815980fcc2d0e954be164db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-main\" class=\"linklist bulletin\" role=\"menubar\">

\t\t<li id=\"quick-links\" class=\"small-icon responsive-menu dropdown-container";
        // line 6
        if (isset($context["S_DISPLAY_QUICK_LINKS"])) { $_S_DISPLAY_QUICK_LINKS_ = $context["S_DISPLAY_QUICK_LINKS"]; } else { $_S_DISPLAY_QUICK_LINKS_ = null; }
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if (((!$_S_DISPLAY_QUICK_LINKS_) && (!$_S_DISPLAY_SEARCH_))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t<a href=\"#\" class=\"responsive-menu-link dropdown-trigger\">";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("QUICK_LINKS");
        echo "</a>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t";
        // line 11
        if (isset($context["navbar_header_quick_links_before"])) { $_navbar_header_quick_links_before_ = $context["navbar_header_quick_links_before"]; } else { $_navbar_header_quick_links_before_ = null; }
        // line 12
        echo "
\t\t\t\t\t";
        // line 13
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if ($_S_DISPLAY_SEARCH_) {
            // line 14
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 15
            if (isset($context["S_REGISTERED_USER"])) { $_S_REGISTERED_USER_ = $context["S_REGISTERED_USER"]; } else { $_S_REGISTERED_USER_ = null; }
            if ($_S_REGISTERED_USER_) {
                // line 16
                echo "\t\t\t\t\t\t\t<li class=\"small-icon icon-search-self\"><a href=\"";
                if (isset($context["U_SEARCH_SELF"])) { $_U_SEARCH_SELF_ = $context["U_SEARCH_SELF"]; } else { $_U_SEARCH_SELF_ = null; }
                echo $_U_SEARCH_SELF_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t\t";
            if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
            if ($_S_USER_LOGGED_IN_) {
                // line 19
                echo "\t\t\t\t\t\t\t<li class=\"small-icon icon-search-new\"><a href=\"";
                if (isset($context["U_SEARCH_NEW"])) { $_U_SEARCH_NEW_ = $context["U_SEARCH_NEW"]; } else { $_U_SEARCH_NEW_ = null; }
                echo $_U_SEARCH_NEW_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t\t\t";
            if (isset($context["S_LOAD_UNREADS"])) { $_S_LOAD_UNREADS_ = $context["S_LOAD_UNREADS"]; } else { $_S_LOAD_UNREADS_ = null; }
            if ($_S_LOAD_UNREADS_) {
                echo " 
\t\t\t\t\t\t\t<li class=\"small-icon icon-search-unread\"><a href=\"";
                // line 22
                if (isset($context["U_SEARCH_UNREAD"])) { $_U_SEARCH_UNREAD_ = $context["U_SEARCH_UNREAD"]; } else { $_U_SEARCH_UNREAD_ = null; }
                echo $_U_SEARCH_UNREAD_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t<li class=\"small-icon icon-search-unanswered\"><a href=\"";
            if (isset($context["U_SEARCH_UNANSWERED"])) { $_U_SEARCH_UNANSWERED_ = $context["U_SEARCH_UNANSWERED"]; } else { $_U_SEARCH_UNANSWERED_ = null; }
            echo $_U_SEARCH_UNANSWERED_;
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"small-icon icon-search-active\"><a href=\"";
            // line 25
            if (isset($context["U_SEARCH_ACTIVE_TOPICS"])) { $_U_SEARCH_ACTIVE_TOPICS_ = $context["U_SEARCH_ACTIVE_TOPICS"]; } else { $_U_SEARCH_ACTIVE_TOPICS_ = null; }
            echo $_U_SEARCH_ACTIVE_TOPICS_;
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li class=\"small-icon icon-search\"><a href=\"";
            // line 27
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t\t\t\t";
        }
        // line 29
        echo "
\t\t\t\t\t";
        // line 30
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (isset($context["S_DISPLAY_MEMBERLIST"])) { $_S_DISPLAY_MEMBERLIST_ = $context["S_DISPLAY_MEMBERLIST"]; } else { $_S_DISPLAY_MEMBERLIST_ = null; }
        if (isset($context["U_TEAM"])) { $_U_TEAM_ = $context["U_TEAM"]; } else { $_U_TEAM_ = null; }
        if (((!$_S_IS_BOT_) && ($_S_DISPLAY_MEMBERLIST_ || $_U_TEAM_))) {
            // line 31
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 32
            if (isset($context["S_DISPLAY_MEMBERLIST"])) { $_S_DISPLAY_MEMBERLIST_ = $context["S_DISPLAY_MEMBERLIST"]; } else { $_S_DISPLAY_MEMBERLIST_ = null; }
            if ($_S_DISPLAY_MEMBERLIST_) {
                echo "<li class=\"small-icon icon-members\"><a href=\"";
                if (isset($context["U_MEMBERLIST"])) { $_U_MEMBERLIST_ = $context["U_MEMBERLIST"]; } else { $_U_MEMBERLIST_ = null; }
                echo $_U_MEMBERLIST_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 33
            echo "\t\t\t\t\t\t";
            if (isset($context["U_TEAM"])) { $_U_TEAM_ = $context["U_TEAM"]; } else { $_U_TEAM_ = null; }
            if ($_U_TEAM_) {
                echo "<li class=\"small-icon icon-team\"><a href=\"";
                if (isset($context["U_TEAM"])) { $_U_TEAM_ = $context["U_TEAM"]; } else { $_U_TEAM_ = null; }
                echo $_U_TEAM_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 34
            echo "\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t<li class=\"separator\"></li>

\t\t\t\t\t";
        // line 37
        if (isset($context["navbar_header_quick_links_after"])) { $_navbar_header_quick_links_after_ = $context["navbar_header_quick_links_after"]; } else { $_navbar_header_quick_links_after_ = null; }
        // line 38
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>

\t\t";
        // line 42
        if (isset($context["overall_header_navigation_prepend"])) { $_overall_header_navigation_prepend_ = $context["overall_header_navigation_prepend"]; } else { $_overall_header_navigation_prepend_ = null; }
        // line 43
        echo "\t\t<li class=\"small-icon icon-faq\" ";
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if ((!$_S_USER_LOGGED_IN_)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo "><a href=\"";
        if (isset($context["U_FAQ"])) { $_U_FAQ_ = $context["U_FAQ"]; } else { $_U_FAQ_ = null; }
        echo $_U_FAQ_;
        echo "\" rel=\"help\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
\t\t";
        // line 44
        if (isset($context["overall_header_navigation_append"])) { $_overall_header_navigation_append_ = $context["overall_header_navigation_append"]; } else { $_overall_header_navigation_append_ = null; }
        // line 45
        echo "\t\t";
        if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
        if ($_U_ACP_) {
            echo "<li class=\"small-icon icon-acp\" data-last-responsive=\"true\"><a href=\"";
            if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
            echo $_U_ACP_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>";
        }
        // line 46
        echo "\t\t";
        if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
        if ($_U_MCP_) {
            echo "<li class=\"small-icon icon-mcp\" data-last-responsive=\"true\"><a href=\"";
            if (isset($context["U_MCP"])) { $_U_MCP_ = $context["U_MCP"]; } else { $_U_MCP_ = null; }
            echo $_U_MCP_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</a></li>";
        }
        // line 47
        echo "
\t";
        // line 48
        if (isset($context["S_REGISTERED_USER"])) { $_S_REGISTERED_USER_ = $context["S_REGISTERED_USER"]; } else { $_S_REGISTERED_USER_ = null; }
        if ($_S_REGISTERED_USER_) {
            // line 49
            echo "\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if (isset($context["CURRENT_USER_AVATAR"])) { $_CURRENT_USER_AVATAR_ = $context["CURRENT_USER_AVATAR"]; } else { $_CURRENT_USER_AVATAR_ = null; }
            if ($_CURRENT_USER_AVATAR_) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t";
            // line 50
            if (isset($context["navbar_header_username_prepend"])) { $_navbar_header_username_prepend_ = $context["navbar_header_username_prepend"]; } else { $_navbar_header_username_prepend_ = null; }
            // line 51
            echo "\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t<a href=\"";
            // line 52
            if (isset($context["U_PROFILE"])) { $_U_PROFILE_ = $context["U_PROFILE"]; } else { $_U_PROFILE_ = null; }
            echo $_U_PROFILE_;
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (isset($context["CURRENT_USER_AVATAR"])) { $_CURRENT_USER_AVATAR_ = $context["CURRENT_USER_AVATAR"]; } else { $_CURRENT_USER_AVATAR_ = null; }
            if ($_CURRENT_USER_AVATAR_) {
                if (isset($context["CURRENT_USER_AVATAR"])) { $_CURRENT_USER_AVATAR_ = $context["CURRENT_USER_AVATAR"]; } else { $_CURRENT_USER_AVATAR_ = null; }
                echo $_CURRENT_USER_AVATAR_;
                echo " ";
            }
            if (isset($context["CURRENT_USERNAME_SIMPLE"])) { $_CURRENT_USERNAME_SIMPLE_ = $context["CURRENT_USERNAME_SIMPLE"]; } else { $_CURRENT_USERNAME_SIMPLE_ = null; }
            echo $_CURRENT_USERNAME_SIMPLE_;
            echo "</a>
\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t";
            // line 56
            if (isset($context["U_RESTORE_PERMISSIONS"])) { $_U_RESTORE_PERMISSIONS_ = $context["U_RESTORE_PERMISSIONS"]; } else { $_U_RESTORE_PERMISSIONS_ = null; }
            if ($_U_RESTORE_PERMISSIONS_) {
                echo "<li class=\"small-icon icon-restore-permissions\"><a href=\"";
                if (isset($context["U_RESTORE_PERMISSIONS"])) { $_U_RESTORE_PERMISSIONS_ = $context["U_RESTORE_PERMISSIONS"]; } else { $_U_RESTORE_PERMISSIONS_ = null; }
                echo $_U_RESTORE_PERMISSIONS_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>";
            }
            // line 57
            echo "\t
\t\t\t\t\t\t";
            // line 58
            if (isset($context["navbar_header_profile_list_before"])) { $_navbar_header_profile_list_before_ = $context["navbar_header_profile_list_before"]; } else { $_navbar_header_profile_list_before_ = null; }
            // line 59
            echo "\t
\t\t\t\t\t\t<li class=\"small-icon icon-ucp\"><a href=\"";
            // line 60
            if (isset($context["U_PROFILE"])) { $_U_PROFILE_ = $context["U_PROFILE"]; } else { $_U_PROFILE_ = null; }
            echo $_U_PROFILE_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t<li class=\"small-icon icon-profile\"><a href=\"";
            // line 61
            if (isset($context["U_USER_PROFILE"])) { $_U_USER_PROFILE_ = $context["U_USER_PROFILE"]; } else { $_U_USER_PROFILE_ = null; }
            echo $_U_USER_PROFILE_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>
\t
\t\t\t\t\t\t";
            // line 63
            if (isset($context["navbar_header_profile_list_after"])) { $_navbar_header_profile_list_after_ = $context["navbar_header_profile_list_after"]; } else { $_navbar_header_profile_list_after_ = null; }
            // line 64
            echo "\t
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li class=\"small-icon icon-logout\"><a href=\"";
            // line 66
            if (isset($context["U_LOGIN_LOGOUT"])) { $_U_LOGIN_LOGOUT_ = $context["U_LOGIN_LOGOUT"]; } else { $_U_LOGIN_LOGOUT_ = null; }
            echo $_U_LOGIN_LOGOUT_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 70
            if (isset($context["navbar_header_username_append"])) { $_navbar_header_username_append_ = $context["navbar_header_username_append"]; } else { $_navbar_header_username_append_ = null; }
            // line 71
            echo "\t\t</li>
\t\t";
            // line 72
            if (isset($context["S_DISPLAY_PM"])) { $_S_DISPLAY_PM_ = $context["S_DISPLAY_PM"]; } else { $_S_DISPLAY_PM_ = null; }
            if ($_S_DISPLAY_PM_) {
                // line 73
                echo "\t\t\t<li class=\"small-icon icon-pm rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 74
                if (isset($context["U_PRIVATEMSGS"])) { $_U_PRIVATEMSGS_ = $context["U_PRIVATEMSGS"]; } else { $_U_PRIVATEMSGS_ = null; }
                echo $_U_PRIVATEMSGS_;
                echo "\" role=\"menuitem\"><span>";
                echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
                echo " [</span><strong>";
                if (isset($context["PRIVATE_MESSAGE_COUNT"])) { $_PRIVATE_MESSAGE_COUNT_ = $context["PRIVATE_MESSAGE_COUNT"]; } else { $_PRIVATE_MESSAGE_COUNT_ = null; }
                echo $_PRIVATE_MESSAGE_COUNT_;
                echo "</strong><span>]</span></a>
\t\t\t</li>
\t\t";
            }
            // line 77
            echo "\t\t";
            if (isset($context["S_NOTIFICATIONS_DISPLAY"])) { $_S_NOTIFICATIONS_DISPLAY_ = $context["S_NOTIFICATIONS_DISPLAY"]; } else { $_S_NOTIFICATIONS_DISPLAY_ = null; }
            if ($_S_NOTIFICATIONS_DISPLAY_) {
                // line 78
                echo "\t\t\t<li class=\"small-icon icon-notification dropdown-container dropdown-";
                if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                echo $_S_CONTENT_FLOW_END_;
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 79
                if (isset($context["U_VIEW_ALL_NOTIFICATIONS"])) { $_U_VIEW_ALL_NOTIFICATIONS_ = $context["U_VIEW_ALL_NOTIFICATIONS"]; } else { $_U_VIEW_ALL_NOTIFICATIONS_ = null; }
                echo $_U_VIEW_ALL_NOTIFICATIONS_;
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\"><span>";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo " [</span><strong>";
                if (isset($context["NOTIFICATIONS_COUNT"])) { $_NOTIFICATIONS_COUNT_ = $context["NOTIFICATIONS_COUNT"]; } else { $_NOTIFICATIONS_COUNT_ = null; }
                echo $_NOTIFICATIONS_COUNT_;
                echo "</strong><span>]</span></a>
\t\t\t\t";
                // line 80
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->env->loadTemplate("notification_dropdown.html")->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 81
                echo "\t\t\t</li>
\t\t";
            }
            // line 83
            echo "\t";
        } else {
            // line 84
            echo "\t\t<li class=\"small-icon icon-logout rightside\"  data-skip-responsive=\"true\"><a href=\"";
            if (isset($context["U_LOGIN_LOGOUT"])) { $_U_LOGIN_LOGOUT_ = $context["U_LOGIN_LOGOUT"]; } else { $_U_LOGIN_LOGOUT_ = null; }
            echo $_U_LOGIN_LOGOUT_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t";
            // line 85
            if (isset($context["S_REGISTER_ENABLED"])) { $_S_REGISTER_ENABLED_ = $context["S_REGISTER_ENABLED"]; } else { $_S_REGISTER_ENABLED_ = null; }
            if (isset($context["S_SHOW_COPPA"])) { $_S_SHOW_COPPA_ = $context["S_SHOW_COPPA"]; } else { $_S_SHOW_COPPA_ = null; }
            if (isset($context["S_REGISTRATION"])) { $_S_REGISTRATION_ = $context["S_REGISTRATION"]; } else { $_S_REGISTRATION_ = null; }
            if (($_S_REGISTER_ENABLED_ && (!($_S_SHOW_COPPA_ || $_S_REGISTRATION_)))) {
                // line 86
                echo "\t\t\t<li class=\"small-icon icon-register rightside\" data-skip-responsive=\"true\"><a href=\"";
                if (isset($context["U_REGISTER"])) { $_U_REGISTER_ = $context["U_REGISTER"]; } else { $_U_REGISTER_ = null; }
                echo $_U_REGISTER_;
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a></li>
\t\t";
            }
            // line 88
            echo "\t\t";
            if (isset($context["navbar_header_logged_out_content"])) { $_navbar_header_logged_out_content_ = $context["navbar_header_logged_out_content"]; } else { $_navbar_header_logged_out_content_ = null; }
            // line 89
            echo "\t";
        }
        // line 90
        echo "\t</ul>

\t<ul id=\"nav-breadcrumbs\" class=\"linklist navlinks\" role=\"menubar\">
\t\t";
        // line 93
        if (isset($context["MICRODATA"])) { $_MICRODATA_ = $context["MICRODATA"]; } else { $_MICRODATA_ = null; }
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 94
        echo "\t\t";
        if (isset($context["overall_header_breadcrumbs_before"])) { $_overall_header_breadcrumbs_before_ = $context["overall_header_breadcrumbs_before"]; } else { $_overall_header_breadcrumbs_before_ = null; }
        // line 95
        echo "\t\t<li class=\"small-icon icon-home breadcrumbs\">
\t\t\t";
        // line 96
        if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
        if ($_U_SITE_HOME_) {
            echo "<span class=\"crumb\"><a href=\"";
            if (isset($context["U_SITE_HOME"])) { $_U_SITE_HOME_ = $context["U_SITE_HOME"]; } else { $_U_SITE_HOME_ = null; }
            echo $_U_SITE_HOME_;
            echo "\"";
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            echo $this->getAttribute($_definition_, "MICRODATA");
            echo " data-navbar-reference=\"home\">";
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
            echo "</a></span>";
        }
        // line 97
        echo "\t\t\t";
        if (isset($context["overall_header_breadcrumb_prepend"])) { $_overall_header_breadcrumb_prepend_ = $context["overall_header_breadcrumb_prepend"]; } else { $_overall_header_breadcrumb_prepend_ = null; }
        // line 98
        echo "\t\t\t<span class=\"crumb\"><a href=\"";
        if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
        echo $_U_INDEX_;
        echo "\" accesskey=\"h\"";
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "MICRODATA");
        echo " data-navbar-reference=\"index\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</a></span>
\t\t\t";
        // line 99
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "navlinks"));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 100
            echo "\t\t\t\t";
            if (isset($context["overall_header_navlink_prepend"])) { $_overall_header_navlink_prepend_ = $context["overall_header_navlink_prepend"]; } else { $_overall_header_navlink_prepend_ = null; }
            // line 101
            echo "\t\t\t\t<span class=\"crumb\"><a href=\"";
            if (isset($context["navlinks"])) { $_navlinks_ = $context["navlinks"]; } else { $_navlinks_ = null; }
            echo $this->getAttribute($_navlinks_, "U_VIEW_FORUM");
            echo "\"";
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            echo $this->getAttribute($_definition_, "MICRODATA");
            if (isset($context["navlinks"])) { $_navlinks_ = $context["navlinks"]; } else { $_navlinks_ = null; }
            if ($this->getAttribute($_navlinks_, "MICRODATA")) {
                echo " ";
                if (isset($context["navlinks"])) { $_navlinks_ = $context["navlinks"]; } else { $_navlinks_ = null; }
                echo $this->getAttribute($_navlinks_, "MICRODATA");
            }
            echo ">";
            if (isset($context["navlinks"])) { $_navlinks_ = $context["navlinks"]; } else { $_navlinks_ = null; }
            echo $this->getAttribute($_navlinks_, "FORUM_NAME");
            echo "</a></span>
\t\t\t\t";
            // line 102
            if (isset($context["overall_header_navlink_append"])) { $_overall_header_navlink_append_ = $context["overall_header_navlink_append"]; } else { $_overall_header_navlink_append_ = null; }
            // line 103
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t\t\t";
        if (isset($context["overall_header_breadcrumb_append"])) { $_overall_header_breadcrumb_append_ = $context["overall_header_breadcrumb_append"]; } else { $_overall_header_breadcrumb_append_ = null; }
        // line 105
        echo "\t\t</li>
\t\t";
        // line 106
        if (isset($context["overall_header_breadcrumbs_after"])) { $_overall_header_breadcrumbs_after_ = $context["overall_header_breadcrumbs_after"]; } else { $_overall_header_breadcrumbs_after_ = null; }
        // line 107
        echo "
\t\t";
        // line 108
        if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
        if (isset($context["S_IN_SEARCH"])) { $_S_IN_SEARCH_ = $context["S_IN_SEARCH"]; } else { $_S_IN_SEARCH_ = null; }
        if (($_S_DISPLAY_SEARCH_ && (!$_S_IN_SEARCH_))) {
            // line 109
            echo "\t\t\t<li class=\"rightside responsive-search\" style=\"display: none;\"><a href=\"";
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t";
        }
        // line 111
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 111,  483 => 109,  479 => 108,  476 => 107,  474 => 106,  471 => 105,  468 => 104,  460 => 102,  442 => 101,  423 => 98,  420 => 97,  407 => 96,  404 => 95,  397 => 93,  389 => 89,  372 => 85,  362 => 84,  359 => 83,  355 => 81,  343 => 80,  333 => 79,  323 => 77,  311 => 74,  308 => 73,  305 => 72,  302 => 71,  300 => 70,  284 => 64,  282 => 63,  263 => 60,  260 => 59,  258 => 58,  255 => 57,  245 => 56,  228 => 52,  225 => 51,  215 => 49,  212 => 48,  209 => 47,  196 => 46,  183 => 45,  181 => 44,  164 => 43,  162 => 42,  156 => 38,  154 => 37,  150 => 35,  147 => 34,  136 => 33,  126 => 32,  123 => 31,  118 => 30,  115 => 29,  107 => 27,  99 => 25,  83 => 22,  68 => 19,  64 => 18,  52 => 15,  49 => 14,  46 => 13,  43 => 12,  41 => 11,  34 => 7,  26 => 6,  462 => 103,  459 => 102,  449 => 98,  445 => 96,  439 => 100,  434 => 99,  432 => 91,  428 => 89,  416 => 88,  410 => 84,  401 => 94,  392 => 90,  386 => 88,  377 => 86,  371 => 74,  368 => 73,  364 => 72,  358 => 69,  353 => 68,  348 => 67,  327 => 78,  317 => 58,  315 => 57,  303 => 55,  299 => 53,  297 => 52,  291 => 50,  288 => 66,  286 => 48,  276 => 45,  272 => 61,  262 => 41,  259 => 40,  256 => 39,  246 => 37,  243 => 36,  234 => 34,  229 => 33,  223 => 50,  218 => 31,  210 => 30,  200 => 22,  193 => 20,  190 => 19,  187 => 18,  163 => 16,  143 => 15,  130 => 14,  117 => 13,  104 => 12,  91 => 24,  77 => 21,  74 => 9,  38 => 7,  33 => 6,  103 => 18,  89 => 16,  86 => 15,  81 => 12,  65 => 11,  60 => 10,  55 => 16,  50 => 6,  36 => 4,  22 => 2,  19 => 1,);
    }
}
