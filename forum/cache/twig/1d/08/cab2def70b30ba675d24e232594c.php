<?php

/* overall_header.html */
class __TwigTemplate_1d08cab2def70b30ba675d24e232594c extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo "\" lang=\"";
        if (isset($context["S_USER_LANG"])) { $_S_USER_LANG_ = $context["S_USER_LANG"]; } else { $_S_USER_LANG_ = null; }
        echo $_S_USER_LANG_;
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width\" />
";
        // line 6
        if (isset($context["META"])) { $_META_ = $context["META"]; } else { $_META_ = null; }
        if ($_META_) {
            if (isset($context["META"])) { $_META_ = $context["META"]; } else { $_META_ = null; }
            echo $_META_;
        }
        // line 7
        echo "<title>";
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        echo "</title>

<link href=\"style/admin.css?assets_version=";
        // line 9
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />

<script type=\"text/javascript\">
// <![CDATA[
var jump_page = '";
        // line 13
        echo addslashes($this->env->getExtension('phpbb')->lang("JUMP_PAGE"));
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "';
var on_page = '";
        // line 14
        if (isset($context["CURRENT_PAGE"])) { $_CURRENT_PAGE_ = $context["CURRENT_PAGE"]; } else { $_CURRENT_PAGE_ = null; }
        echo $_CURRENT_PAGE_;
        echo "';
var per_page = '";
        // line 15
        if (isset($context["PER_PAGE"])) { $_PER_PAGE_ = $context["PER_PAGE"]; } else { $_PER_PAGE_ = null; }
        echo $_PER_PAGE_;
        echo "';
var base_url = '";
        // line 16
        if (isset($context["BASE_URL"])) { $_BASE_URL_ = $context["BASE_URL"]; } else { $_BASE_URL_ = null; }
        echo twig_escape_filter($this->env, $_BASE_URL_, "js");
        echo "';

/**
* Jump to page
*/
function jumpto()
{
\tvar page = prompt(jump_page, on_page);

\tif (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
\t{
\t\tif (base_url.indexOf('?') == -1)
\t\t{
\t\t\tdocument.location.href = base_url + '?start=' + ((page - 1) * per_page);
\t\t}
\t\telse
\t\t{
\t\t\tdocument.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
\t\t}
\t}
}

/**
* Mark/unmark checkboxes
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
\tvar parent = document.getElementById(id) || document[id];

\tif (!parent)
\t{
\t\treturn;
\t}

\tvar rb = parent.getElementsByTagName('input');
\t
\tfor (var r = 0; r < rb.length; r++)
\t{
\t\tif (rb[r].name.substr(0, name.length) == name)
\t\t{
\t\t\trb[r].checked = state;
\t\t}
\t}
}

/**
* Find a member
*/
function find_username(url)
{
\tpopup(url, 760, 570, '_usersearch');
\treturn false;
}

/**
* Window popup
*/
function popup(url, width, height, name)
{
\tif (!name)
\t{
\t\tname = '_popup';
\t}

\twindow.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);
\treturn false;
}

// ]]>
</script>

";
        // line 88
        if (isset($context["acp_overall_header_head_append"])) { $_acp_overall_header_head_append_ = $context["acp_overall_header_head_append"]; } else { $_acp_overall_header_head_append_ = null; }
        // line 89
        echo "
";
        // line 90
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "STYLESHEETS");
        echo "

";
        // line 92
        if (isset($context["acp_overall_header_stylesheets_after"])) { $_acp_overall_header_stylesheets_after_ = $context["acp_overall_header_stylesheets_after"]; } else { $_acp_overall_header_stylesheets_after_ = null; }
        // line 93
        echo "
</head>

<body class=\"";
        // line 96
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo " ";
        if (isset($context["BODY_CLASS"])) { $_BODY_CLASS_ = $context["BODY_CLASS"]; } else { $_BODY_CLASS_ = null; }
        echo $_BODY_CLASS_;
        echo " nojs\">

";
        // line 98
        if (isset($context["acp_overall_header_body_before"])) { $_acp_overall_header_body_before_ = $context["acp_overall_header_body_before"]; } else { $_acp_overall_header_body_before_ = null; }
        // line 99
        echo "
<div id=\"wrap\">
\t<div id=\"page-header\">
\t\t<h1>";
        // line 102
        echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL");
        echo "</h1>
\t\t<p><a href=\"";
        // line 103
        if (isset($context["U_ADM_INDEX"])) { $_U_ADM_INDEX_ = $context["U_ADM_INDEX"]; } else { $_U_ADM_INDEX_ = null; }
        echo $_U_ADM_INDEX_;
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("ADMIN_INDEX");
        echo "</a> &bull; <a href=\"";
        if (isset($context["U_INDEX"])) { $_U_INDEX_ = $context["U_INDEX"]; } else { $_U_INDEX_ = null; }
        echo $_U_INDEX_;
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUM_INDEX");
        echo "</a></p>
\t\t<p id=\"skip\"><a href=\"#acp\">";
        // line 104
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t</div>
\t
\t<div id=\"page-body\">
\t\t<div id=\"tabs\">
\t\t\t<ul>
\t\t\t";
        // line 110
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "t_block1"));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 111
            echo "\t\t\t\t<li class=\"tab";
            if (isset($context["t_block1"])) { $_t_block1_ = $context["t_block1"]; } else { $_t_block1_ = null; }
            if ($this->getAttribute($_t_block1_, "S_SELECTED")) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            if (isset($context["t_block1"])) { $_t_block1_ = $context["t_block1"]; } else { $_t_block1_ = null; }
            echo $this->getAttribute($_t_block1_, "U_TITLE");
            echo "\">";
            if (isset($context["t_block1"])) { $_t_block1_ = $context["t_block1"]; } else { $_t_block1_ = null; }
            echo $this->getAttribute($_t_block1_, "L_TITLE");
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t</ul>
\t\t</div>

\t\t<div id=\"acp\">
\t\t\t\t<div id=\"content\">
\t\t\t\t\t<div id=\"menu\">
\t\t\t\t\t\t<p>";
        // line 119
        echo $this->env->getExtension('phpbb')->lang("LOGGED_IN_AS");
        echo "<br /><strong>";
        if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
        echo $_USERNAME_;
        echo "</strong> [&nbsp;<a href=\"";
        if (isset($context["U_LOGOUT"])) { $_U_LOGOUT_ = $context["U_LOGOUT"]; } else { $_U_LOGOUT_ = null; }
        echo $_U_LOGOUT_;
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("LOGOUT");
        echo "</a>&nbsp;][&nbsp;<a href=\"";
        if (isset($context["U_ADM_LOGOUT"])) { $_U_ADM_LOGOUT_ = $context["U_ADM_LOGOUT"]; } else { $_U_ADM_LOGOUT_ = null; }
        echo $_U_ADM_LOGOUT_;
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("ADM_LOGOUT");
        echo "</a>&nbsp;]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
\t\t\t\t\t\t";
        // line 120
        if (isset($context["LI_USED"])) { $_LI_USED_ = $context["LI_USED"]; } else { $_LI_USED_ = null; }
        $value = 0;
        $context['definition']->set('LI_USED', $value);
        // line 121
        echo "\t\t\t\t\t\t";
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "l_block1"));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 122
            echo "\t\t\t\t\t\t\t";
            if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
            if ($this->getAttribute($_l_block1_, "S_SELECTED")) {
                // line 123
                echo "\t
\t\t\t\t\t\t";
                // line 124
                if (isset($context["l_block1"])) { $_l_block1_ = $context["l_block1"]; } else { $_l_block1_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_l_block1_, "l_block2"));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 125
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                    if (twig_length_filter($this->env, $this->getAttribute($_l_block2_, "l_block3"))) {
                        // line 126
                        echo "\t\t\t\t\t\t\t";
                        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                        if ($this->getAttribute($_definition_, "LI_USED")) {
                            echo "</ul></div>";
                        }
                        // line 127
                        echo "\t\t\t\t\t\t\t<div class=\"menu-block\">
\t\t\t\t\t\t\t\t<a class=\"header\" href=\"javascript:void(0);\">";
                        // line 128
                        if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                        echo $this->getAttribute($_l_block2_, "L_TITLE");
                        echo "</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                        // line 130
                        if (isset($context["LI_USED"])) { $_LI_USED_ = $context["LI_USED"]; } else { $_LI_USED_ = null; }
                        $value = 1;
                        $context['definition']->set('LI_USED', $value);
                        // line 131
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 132
                    echo "\t
\t\t\t\t\t\t\t";
                    // line 133
                    if (isset($context["l_block2"])) { $_l_block2_ = $context["l_block2"]; } else { $_l_block2_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_l_block2_, "l_block3"));
                    foreach ($context['_seq'] as $context["_key"] => $context["l_block3"]) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t<li";
                        if (isset($context["l_block3"])) { $_l_block3_ = $context["l_block3"]; } else { $_l_block3_ = null; }
                        if ($this->getAttribute($_l_block3_, "S_SELECTED")) {
                            echo " id=\"activemenu\"";
                        }
                        echo "><a href=\"";
                        if (isset($context["l_block3"])) { $_l_block3_ = $context["l_block3"]; } else { $_l_block3_ = null; }
                        echo $this->getAttribute($_l_block3_, "U_TITLE");
                        echo "\"><span>";
                        if (isset($context["l_block3"])) { $_l_block3_ = $context["l_block3"]; } else { $_l_block3_ = null; }
                        echo $this->getAttribute($_l_block3_, "L_TITLE");
                        echo "</span></a></li>
\t\t\t\t\t\t\t\t";
                        // line 135
                        if (isset($context["LI_USED"])) { $_LI_USED_ = $context["LI_USED"]; } else { $_LI_USED_ = null; }
                        $value = 1;
                        $context['definition']->set('LI_USED', $value);
                        // line 136
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t\t\t\t\t";
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if ($this->getAttribute($_definition_, "LI_USED")) {
            // line 142
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 145
        echo "\t\t\t\t\t</div>
\t
\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t\t<div class=\"main\">
";
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 145,  352 => 142,  348 => 141,  342 => 140,  338 => 138,  332 => 137,  326 => 136,  322 => 135,  308 => 134,  303 => 133,  300 => 132,  297 => 131,  293 => 130,  287 => 128,  284 => 127,  278 => 126,  274 => 125,  269 => 124,  266 => 123,  262 => 122,  256 => 121,  252 => 120,  235 => 119,  227 => 113,  209 => 111,  204 => 110,  195 => 104,  183 => 103,  179 => 102,  174 => 99,  163 => 96,  158 => 93,  156 => 92,  150 => 90,  147 => 89,  145 => 88,  69 => 16,  64 => 15,  59 => 14,  54 => 13,  46 => 9,  39 => 7,  33 => 6,  22 => 2,  172 => 98,  161 => 61,  153 => 56,  148 => 55,  144 => 53,  137 => 51,  127 => 48,  122 => 47,  119 => 46,  114 => 45,  109 => 44,  106 => 43,  101 => 42,  95 => 39,  90 => 37,  84 => 34,  79 => 32,  71 => 30,  65 => 28,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
