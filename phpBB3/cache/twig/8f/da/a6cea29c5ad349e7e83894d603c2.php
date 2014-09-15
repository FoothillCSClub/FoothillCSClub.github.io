<?php

/* overall_footer.html */
class __TwigTemplate_8fdaa6cea29c5ad349e7e83894d603c2 extends Twig_Template
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
        echo "\t\t";
        if (isset($context["overall_footer_content_after"])) { $_overall_footer_content_after_ = $context["overall_footer_content_after"]; } else { $_overall_footer_content_after_ = null; }
        // line 2
        echo "\t</div>

";
        // line 4
        if (isset($context["overall_footer_page_body_after"])) { $_overall_footer_page_body_after_ = $context["overall_footer_page_body_after"]; } else { $_overall_footer_page_body_after_ = null; }
        // line 5
        echo "
<div id=\"page-footer\">
\t";
        // line 7
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("navbar_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 10
        if (isset($context["overall_footer_copyright_prepend"])) { $_overall_footer_copyright_prepend_ = $context["overall_footer_copyright_prepend"]; } else { $_overall_footer_copyright_prepend_ = null; }
        // line 11
        echo "\t\t";
        if (isset($context["CREDIT_LINE"])) { $_CREDIT_LINE_ = $context["CREDIT_LINE"]; } else { $_CREDIT_LINE_ = null; }
        echo $_CREDIT_LINE_;
        echo "
\t\t";
        // line 12
        if (isset($context["TRANSLATION_INFO"])) { $_TRANSLATION_INFO_ = $context["TRANSLATION_INFO"]; } else { $_TRANSLATION_INFO_ = null; }
        if ($_TRANSLATION_INFO_) {
            echo "<br />";
            if (isset($context["TRANSLATION_INFO"])) { $_TRANSLATION_INFO_ = $context["TRANSLATION_INFO"]; } else { $_TRANSLATION_INFO_ = null; }
            echo $_TRANSLATION_INFO_;
        }
        // line 13
        echo "\t\t";
        if (isset($context["overall_footer_copyright_append"])) { $_overall_footer_copyright_append_ = $context["overall_footer_copyright_append"]; } else { $_overall_footer_copyright_append_ = null; }
        // line 14
        echo "\t\t";
        if (isset($context["DEBUG_OUTPUT"])) { $_DEBUG_OUTPUT_ = $context["DEBUG_OUTPUT"]; } else { $_DEBUG_OUTPUT_ = null; }
        if ($_DEBUG_OUTPUT_) {
            echo "<br />";
            if (isset($context["DEBUG_OUTPUT"])) { $_DEBUG_OUTPUT_ = $context["DEBUG_OUTPUT"]; } else { $_DEBUG_OUTPUT_ = null; }
            echo $_DEBUG_OUTPUT_;
        }
        // line 15
        echo "\t\t";
        if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
        if ($_U_ACP_) {
            echo "<br /><strong><a href=\"";
            if (isset($context["U_ACP"])) { $_U_ACP_ = $context["U_ACP"]; } else { $_U_ACP_ = null; }
            echo $_U_ACP_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></strong>";
        }
        // line 16
        echo "\t</div>

\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>
\t<div id=\"loading_indicator\"></div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 37
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if ((!$_S_IS_BOT_)) {
            if (isset($context["RUN_CRON_TASK"])) { $_RUN_CRON_TASK_ = $context["RUN_CRON_TASK"]; } else { $_RUN_CRON_TASK_ = null; }
            echo $_RUN_CRON_TASK_;
        }
        // line 38
        echo "</div>

<script type=\"text/javascript\" src=\"";
        // line 40
        if (isset($context["T_JQUERY_LINK"])) { $_T_JQUERY_LINK_ = $context["T_JQUERY_LINK"]; } else { $_T_JQUERY_LINK_ = null; }
        echo $_T_JQUERY_LINK_;
        echo "\"></script>
";
        // line 41
        if (isset($context["S_ALLOW_CDN"])) { $_S_ALLOW_CDN_ = $context["S_ALLOW_CDN"]; } else { $_S_ALLOW_CDN_ = null; }
        if ($_S_ALLOW_CDN_) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write(unescape('%3Cscript src=\"";
            if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
            echo $_T_ASSETS_PATH_;
            echo "/javascript/jquery.min.js?assets_version=";
            if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
            echo $_T_ASSETS_VERSION_;
            echo "\" type=\"text/javascript\"%3E%3C/script%3E'));</script>";
        }
        // line 42
        echo "<script type=\"text/javascript\" src=\"";
        if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
        echo $_T_ASSETS_PATH_;
        echo "/javascript/core.js?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\"></script>
";
        // line 43
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 44
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 45
        echo "
";
        // line 46
        if (isset($context["overall_footer_after"])) { $_overall_footer_after_ = $context["overall_footer_after"]; } else { $_overall_footer_after_ = null; }
        // line 47
        echo "
";
        // line 48
        if (isset($context["S_PLUPLOAD"])) { $_S_PLUPLOAD_ = $context["S_PLUPLOAD"]; } else { $_S_PLUPLOAD_ = null; }
        if ($_S_PLUPLOAD_) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("plupload.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 49
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "SCRIPTS");
        echo "

";
        // line 51
        if (isset($context["overall_footer_body_after"])) { $_overall_footer_body_after_ = $context["overall_footer_body_after"]; } else { $_overall_footer_body_after_ = null; }
        // line 52
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 52,  197 => 48,  194 => 47,  192 => 46,  189 => 45,  174 => 44,  159 => 43,  139 => 41,  134 => 40,  124 => 37,  105 => 23,  85 => 16,  66 => 14,  63 => 13,  56 => 12,  48 => 10,  44 => 8,  32 => 7,  28 => 5,  188 => 39,  172 => 35,  168 => 34,  138 => 29,  125 => 27,  122 => 26,  110 => 25,  94 => 23,  73 => 21,  67 => 20,  61 => 17,  58 => 16,  40 => 9,  37 => 8,  30 => 7,  25 => 5,  494 => 111,  483 => 109,  479 => 108,  476 => 107,  474 => 106,  471 => 105,  468 => 104,  460 => 102,  442 => 101,  423 => 98,  420 => 97,  407 => 96,  404 => 95,  397 => 93,  389 => 89,  372 => 85,  362 => 84,  359 => 83,  355 => 81,  343 => 80,  333 => 79,  323 => 77,  311 => 74,  308 => 73,  305 => 72,  302 => 71,  300 => 70,  284 => 64,  282 => 63,  263 => 60,  260 => 59,  258 => 58,  255 => 57,  245 => 56,  228 => 52,  225 => 51,  215 => 49,  212 => 49,  209 => 47,  196 => 46,  183 => 45,  181 => 37,  164 => 43,  162 => 42,  156 => 31,  154 => 37,  150 => 42,  147 => 30,  136 => 33,  126 => 32,  123 => 31,  118 => 30,  115 => 29,  107 => 27,  99 => 25,  83 => 22,  68 => 19,  64 => 18,  52 => 15,  49 => 11,  46 => 13,  43 => 12,  41 => 11,  34 => 7,  26 => 4,  462 => 103,  459 => 102,  449 => 98,  445 => 96,  439 => 100,  434 => 99,  432 => 91,  428 => 89,  416 => 88,  410 => 84,  401 => 94,  392 => 90,  386 => 88,  377 => 86,  371 => 74,  368 => 73,  364 => 72,  358 => 69,  353 => 68,  348 => 67,  327 => 78,  317 => 58,  315 => 57,  303 => 55,  299 => 53,  297 => 52,  291 => 50,  288 => 66,  286 => 48,  276 => 45,  272 => 61,  262 => 41,  259 => 40,  256 => 39,  246 => 37,  243 => 36,  234 => 34,  229 => 33,  223 => 50,  218 => 51,  210 => 30,  200 => 22,  193 => 42,  190 => 19,  187 => 18,  163 => 33,  143 => 15,  130 => 38,  117 => 13,  104 => 12,  91 => 22,  77 => 21,  74 => 15,  38 => 7,  33 => 6,  103 => 18,  89 => 18,  86 => 15,  81 => 12,  65 => 11,  60 => 10,  55 => 15,  50 => 11,  36 => 4,  22 => 2,  19 => 1,);
    }
}
