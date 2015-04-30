<?php

/* acp_send_statistics.html */
class __TwigTemplate_1a1d89ab07059a25895e43c7f1222635 extends Twig_Template
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
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("SEND_STATISTICS");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("EXPLAIN_SEND_STATISTICS");
        echo "</p>

<script type=\"text/javascript\">
//<![CDATA[
var iframect = 0;

function iframe_updated()
{
\tif (iframect++ == 0)
\t{
\t\treturn;
\t}

\tphpbb.toggleDisplay('questionnaire-form', -1);
\tphpbb.toggleDisplay('questionnaire-thanks', 1);
}
//]]>
</script>

<iframe onload=\"iframe_updated();\" name=\"questionaire_result\" style=\"display: none;\"></iframe>

<form action=\"";
        // line 28
        if (isset($context["U_COLLECT_STATS"])) { $_U_COLLECT_STATS_ = $context["U_COLLECT_STATS"]; } else { $_U_COLLECT_STATS_ = null; }
        echo $_U_COLLECT_STATS_;
        echo "\" method=\"post\" target=\"questionaire_result\" id=\"questionnaire-form\">

\t<p><a href=\"";
        // line 30
        if (isset($context["U_ACP_MAIN"])) { $_U_ACP_MAIN_ = $context["U_ACP_MAIN"]; } else { $_U_ACP_MAIN_ = null; }
        echo $_U_ACP_MAIN_;
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("DONT_SEND_STATISTICS");
        echo "</a></p>

\t<p>";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("EXPLAIN_SHOW_STATISTICS");
        echo "</p>

\t<p id=\"show-button\"><input type=\"button\" class=\"button2\" onclick=\"phpbb.toggleDisplay('configlist', 1); phpbb.toggleDisplay('show-button', -1);\" value=\"";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("SHOW_STATISTICS");
        echo "\" /></p>

\t<div id=\"configlist\">
\t\t<input type=\"button\" class=\"button2\" onclick=\"phpbb.toggleDisplay('show-button', 1); phpbb.toggleDisplay('configlist', -1);\" value=\"";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("HIDE_STATISTICS");
        echo "\" />
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 39
        echo $this->env->getExtension('phpbb')->lang("SEND_STATISTICS");
        echo "\" />
\t\t</p>

\t\t";
        // line 42
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "providers"));
        foreach ($context['_seq'] as $context["_key"] => $context["providers"]) {
            // line 43
            echo "\t\t<fieldset>
\t\t\t<legend>";
            // line 44
            if (isset($context["providers"])) { $_providers_ = $context["providers"]; } else { $_providers_ = null; }
            echo $this->getAttribute($_providers_, "NAME");
            echo "</legend>
\t\t\t";
            // line 45
            if (isset($context["providers"])) { $_providers_ = $context["providers"]; } else { $_providers_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_providers_, "values"));
            foreach ($context['_seq'] as $context["_key"] => $context["values"]) {
                // line 46
                echo "\t\t\t<dl>
\t\t\t\t<dt>";
                // line 47
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo $this->getAttribute($_values_, "KEY");
                echo "</dt>
\t\t\t\t<dd>";
                // line 48
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                echo $this->getAttribute($_values_, "VALUE");
                echo "</dd>
\t\t\t</dl>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t</fieldset>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['providers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t</div>
\t<p class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"systemdata\" value=\"";
        // line 55
        if (isset($context["RAW_DATA"])) { $_RAW_DATA_ = $context["RAW_DATA"]; } else { $_RAW_DATA_ = null; }
        echo $_RAW_DATA_;
        echo "\" />
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("SEND_STATISTICS");
        echo "\" />
\t</p>
</form>

<div id=\"questionnaire-thanks\" class=\"successbox\">
\t<p><strong>";
        // line 61
        echo $this->env->getExtension('phpbb')->lang("THANKS_SEND_STATISTICS");
        echo "</strong><br /><br /><a href=\"";
        if (isset($context["U_ACP_MAIN"])) { $_U_ACP_MAIN_ = $context["U_ACP_MAIN"]; } else { $_U_ACP_MAIN_ = null; }
        echo $_U_ACP_MAIN_;
        echo "\">&laquo; ";
        echo $this->env->getExtension('phpbb')->lang("GO_ACP_MAIN");
        echo "</a></p>
</div>

";
        // line 64
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
        return "acp_send_statistics.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 64,  161 => 61,  153 => 56,  148 => 55,  144 => 53,  137 => 51,  127 => 48,  122 => 47,  119 => 46,  114 => 45,  109 => 44,  106 => 43,  101 => 42,  95 => 39,  90 => 37,  84 => 34,  79 => 32,  71 => 30,  65 => 28,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
