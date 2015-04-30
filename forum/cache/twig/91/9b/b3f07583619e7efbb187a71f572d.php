<?php

/* index_body.html */
class __TwigTemplate_919bb3f07583619e7efbb187a71f572d extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<p class=\"";
        // line 3
        if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
        echo $_S_CONTENT_FLOW_END_;
        echo " responsive-center time";
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if ($_S_USER_LOGGED_IN_) {
            echo " rightside";
        }
        echo "\">";
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if ($_S_USER_LOGGED_IN_) {
            if (isset($context["LAST_VISIT_DATE"])) { $_LAST_VISIT_DATE_ = $context["LAST_VISIT_DATE"]; } else { $_LAST_VISIT_DATE_ = null; }
            echo $_LAST_VISIT_DATE_;
        } else {
            if (isset($context["CURRENT_TIME"])) { $_CURRENT_TIME_ = $context["CURRENT_TIME"]; } else { $_CURRENT_TIME_ = null; }
            echo $_CURRENT_TIME_;
        }
        echo "</p>
";
        // line 4
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if ($_S_USER_LOGGED_IN_) {
            echo "<p class=\"responsive-center time\">";
            if (isset($context["CURRENT_TIME"])) { $_CURRENT_TIME_ = $context["CURRENT_TIME"]; } else { $_CURRENT_TIME_ = null; }
            echo $_CURRENT_TIME_;
            echo "</p>";
        }
        // line 5
        echo "
";
        // line 6
        if (isset($context["index_body_markforums_before"])) { $_index_body_markforums_before_ = $context["index_body_markforums_before"]; } else { $_index_body_markforums_before_ = null; }
        // line 7
        if (isset($context["U_MARK_FORUMS"])) { $_U_MARK_FORUMS_ = $context["U_MARK_FORUMS"]; } else { $_U_MARK_FORUMS_ = null; }
        if ($_U_MARK_FORUMS_) {
            // line 8
            echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
            // line 9
            if (isset($context["U_MARK_FORUMS"])) { $_U_MARK_FORUMS_ = $context["U_MARK_FORUMS"]; } else { $_U_MARK_FORUMS_ = null; }
            echo $_U_MARK_FORUMS_;
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 12
        if (isset($context["index_body_markforums_after"])) { $_index_body_markforums_after_ = $context["index_body_markforums_after"]; } else { $_index_body_markforums_after_ = null; }
        // line 13
        echo "
";
        // line 14
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("forumlist_body.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 15
        echo "
";
        // line 16
        if (isset($context["index_body_forumlist_body_after"])) { $_index_body_forumlist_body_after_ = $context["index_body_forumlist_body_after"]; } else { $_index_body_forumlist_body_after_ = null; }
        // line 17
        echo "
";
        // line 18
        if (isset($context["S_USER_LOGGED_IN"])) { $_S_USER_LOGGED_IN_ = $context["S_USER_LOGGED_IN"]; } else { $_S_USER_LOGGED_IN_ = null; }
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (((!$_S_USER_LOGGED_IN_) && (!$_S_IS_BOT_))) {
            // line 19
            echo "\t<form method=\"post\" action=\"";
            if (isset($context["S_LOGIN_ACTION"])) { $_S_LOGIN_ACTION_ = $context["S_LOGIN_ACTION"]; } else { $_S_LOGIN_ACTION_ = null; }
            echo $_S_LOGIN_ACTION_;
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 20
            if (isset($context["U_LOGIN_LOGOUT"])) { $_U_LOGIN_LOGOUT_ = $context["U_LOGIN_LOGOUT"]; } else { $_U_LOGIN_LOGOUT_ = null; }
            echo $_U_LOGIN_LOGOUT_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a>";
            if (isset($context["S_REGISTER_ENABLED"])) { $_S_REGISTER_ENABLED_ = $context["S_REGISTER_ENABLED"]; } else { $_S_REGISTER_ENABLED_ = null; }
            if ($_S_REGISTER_ENABLED_) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                if (isset($context["U_REGISTER"])) { $_U_REGISTER_ = $context["U_REGISTER"]; } else { $_U_REGISTER_ = null; }
                echo $_U_REGISTER_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</a>";
            }
            echo "</h3>
\t\t<fieldset class=\"quick-login\">
\t\t\t<label for=\"username\"><span>";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"text\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</span> <input type=\"password\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\" /></label>
\t\t\t";
            // line 24
            if (isset($context["U_SEND_PASSWORD"])) { $_U_SEND_PASSWORD_ = $context["U_SEND_PASSWORD"]; } else { $_U_SEND_PASSWORD_ = null; }
            if ($_U_SEND_PASSWORD_) {
                // line 25
                echo "\t\t\t\t<a href=\"";
                if (isset($context["U_SEND_PASSWORD"])) { $_U_SEND_PASSWORD_ = $context["U_SEND_PASSWORD"]; } else { $_U_SEND_PASSWORD_ = null; }
                echo $_U_SEND_PASSWORD_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 27
            echo "\t\t\t";
            if (isset($context["S_AUTOLOGIN_ENABLED"])) { $_S_AUTOLOGIN_ENABLED_ = $context["S_AUTOLOGIN_ENABLED"]; } else { $_S_AUTOLOGIN_ENABLED_ = null; }
            if ($_S_AUTOLOGIN_ENABLED_) {
                // line 28
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 30
            echo "\t\t\t<input type=\"submit\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 31
            if (isset($context["S_LOGIN_REDIRECT"])) { $_S_LOGIN_REDIRECT_ = $context["S_LOGIN_REDIRECT"]; } else { $_S_LOGIN_REDIRECT_ = null; }
            echo $_S_LOGIN_REDIRECT_;
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 35
        echo "
";
        // line 36
        if (isset($context["index_body_stat_blocks_before"])) { $_index_body_stat_blocks_before_ = $context["index_body_stat_blocks_before"]; } else { $_index_body_stat_blocks_before_ = null; }
        // line 37
        echo "
";
        // line 38
        if (isset($context["S_DISPLAY_ONLINE_LIST"])) { $_S_DISPLAY_ONLINE_LIST_ = $context["S_DISPLAY_ONLINE_LIST"]; } else { $_S_DISPLAY_ONLINE_LIST_ = null; }
        if ($_S_DISPLAY_ONLINE_LIST_) {
            // line 39
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 40
            if (isset($context["U_VIEWONLINE"])) { $_U_VIEWONLINE_ = $context["U_VIEWONLINE"]; } else { $_U_VIEWONLINE_ = null; }
            if ($_U_VIEWONLINE_) {
                echo "<h3><a href=\"";
                if (isset($context["U_VIEWONLINE"])) { $_U_VIEWONLINE_ = $context["U_VIEWONLINE"]; } else { $_U_VIEWONLINE_ = null; }
                echo $_U_VIEWONLINE_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 41
            echo "\t\t<p>
\t\t\t";
            // line 42
            if (isset($context["index_body_block_online_prepend"])) { $_index_body_block_online_prepend_ = $context["index_body_block_online_prepend"]; } else { $_index_body_block_online_prepend_ = null; }
            // line 43
            echo "\t\t\t";
            if (isset($context["TOTAL_USERS_ONLINE"])) { $_TOTAL_USERS_ONLINE_ = $context["TOTAL_USERS_ONLINE"]; } else { $_TOTAL_USERS_ONLINE_ = null; }
            echo $_TOTAL_USERS_ONLINE_;
            echo " (";
            echo $this->env->getExtension('phpbb')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            if (isset($context["RECORD_USERS"])) { $_RECORD_USERS_ = $context["RECORD_USERS"]; } else { $_RECORD_USERS_ = null; }
            echo $_RECORD_USERS_;
            echo "<br /> <br />";
            if (isset($context["LOGGED_IN_USER_LIST"])) { $_LOGGED_IN_USER_LIST_ = $context["LOGGED_IN_USER_LIST"]; } else { $_LOGGED_IN_USER_LIST_ = null; }
            echo $_LOGGED_IN_USER_LIST_;
            echo "
\t\t\t";
            // line 44
            if (isset($context["LEGEND"])) { $_LEGEND_ = $context["LEGEND"]; } else { $_LEGEND_ = null; }
            if ($_LEGEND_) {
                echo "<br /><em>";
                echo $this->env->getExtension('phpbb')->lang("LEGEND");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["LEGEND"])) { $_LEGEND_ = $context["LEGEND"]; } else { $_LEGEND_ = null; }
                echo $_LEGEND_;
                echo "</em>";
            }
            // line 45
            echo "\t\t\t";
            if (isset($context["index_body_block_online_append"])) { $_index_body_block_online_append_ = $context["index_body_block_online_append"]; } else { $_index_body_block_online_append_ = null; }
            // line 46
            echo "\t\t</p>
\t</div>
";
        }
        // line 49
        echo "
";
        // line 50
        if (isset($context["S_DISPLAY_BIRTHDAY_LIST"])) { $_S_DISPLAY_BIRTHDAY_LIST_ = $context["S_DISPLAY_BIRTHDAY_LIST"]; } else { $_S_DISPLAY_BIRTHDAY_LIST_ = null; }
        if ($_S_DISPLAY_BIRTHDAY_LIST_) {
            // line 51
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 52
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 54
            if (isset($context["index_body_block_birthday_prepend"])) { $_index_body_block_birthday_prepend_ = $context["index_body_block_birthday_prepend"]; } else { $_index_body_block_birthday_prepend_ = null; }
            // line 55
            echo "\t\t\t";
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "birthdays"))) {
                echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "birthdays"));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    if (isset($context["birthdays"])) { $_birthdays_ = $context["birthdays"]; } else { $_birthdays_ = null; }
                    echo $this->getAttribute($_birthdays_, "USERNAME");
                    if (isset($context["birthdays"])) { $_birthdays_ = $context["birthdays"]; } else { $_birthdays_ = null; }
                    if (($this->getAttribute($_birthdays_, "AGE") !== "")) {
                        echo " (";
                        if (isset($context["birthdays"])) { $_birthdays_ = $context["birthdays"]; } else { $_birthdays_ = null; }
                        echo $this->getAttribute($_birthdays_, "AGE");
                        echo ")";
                    }
                    if (isset($context["birthdays"])) { $_birthdays_ = $context["birthdays"]; } else { $_birthdays_ = null; }
                    if ((!$this->getAttribute($_birthdays_, "S_LAST_ROW"))) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS");
            }
            // line 56
            echo "\t\t\t";
            if (isset($context["index_body_block_birthday_append"])) { $_index_body_block_birthday_append_ = $context["index_body_block_birthday_append"]; } else { $_index_body_block_birthday_append_ = null; }
            // line 57
            echo "\t\t</p>
\t</div>
";
        }
        // line 60
        echo "
";
        // line 61
        if (isset($context["NEWEST_USER"])) { $_NEWEST_USER_ = $context["NEWEST_USER"]; } else { $_NEWEST_USER_ = null; }
        if ($_NEWEST_USER_) {
            // line 62
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 65
            if (isset($context["index_body_block_stats_prepend"])) { $_index_body_block_stats_prepend_ = $context["index_body_block_stats_prepend"]; } else { $_index_body_block_stats_prepend_ = null; }
            // line 66
            echo "\t\t\t";
            if (isset($context["TOTAL_POSTS"])) { $_TOTAL_POSTS_ = $context["TOTAL_POSTS"]; } else { $_TOTAL_POSTS_ = null; }
            echo $_TOTAL_POSTS_;
            echo " &bull; ";
            if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
            echo $_TOTAL_TOPICS_;
            echo " &bull; ";
            if (isset($context["TOTAL_USERS"])) { $_TOTAL_USERS_ = $context["TOTAL_USERS"]; } else { $_TOTAL_USERS_ = null; }
            echo $_TOTAL_USERS_;
            echo " &bull; ";
            if (isset($context["NEWEST_USER"])) { $_NEWEST_USER_ = $context["NEWEST_USER"]; } else { $_NEWEST_USER_ = null; }
            echo $_NEWEST_USER_;
            echo "
\t\t\t";
            // line 67
            if (isset($context["index_body_block_stats_append"])) { $_index_body_block_stats_append_ = $context["index_body_block_stats_append"]; } else { $_index_body_block_stats_append_ = null; }
            // line 68
            echo "\t\t</p>
\t</div>
";
        }
        // line 71
        echo "
";
        // line 72
        if (isset($context["index_body_stat_blocks_after"])) { $_index_body_stat_blocks_after_ = $context["index_body_stat_blocks_after"]; } else { $_index_body_stat_blocks_after_ = null; }
        // line 73
        echo "
";
        // line 74
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 74,  348 => 73,  346 => 72,  343 => 71,  338 => 68,  336 => 67,  321 => 66,  319 => 65,  314 => 63,  311 => 62,  308 => 61,  305 => 60,  300 => 57,  297 => 56,  265 => 55,  263 => 54,  258 => 52,  255 => 51,  252 => 50,  249 => 49,  244 => 46,  241 => 45,  230 => 44,  216 => 43,  214 => 42,  211 => 41,  197 => 40,  194 => 39,  191 => 38,  188 => 37,  186 => 36,  183 => 35,  175 => 31,  170 => 30,  164 => 28,  160 => 27,  151 => 25,  148 => 24,  141 => 23,  134 => 22,  116 => 20,  110 => 19,  106 => 18,  103 => 17,  101 => 16,  98 => 15,  86 => 14,  83 => 13,  81 => 12,  72 => 9,  69 => 8,  66 => 7,  64 => 6,  61 => 5,  53 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
