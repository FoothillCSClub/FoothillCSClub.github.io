<?php

/* forumlist_body.html */
class __TwigTemplate_5d7b2f438b67ac89c84e6a444beec85b extends Twig_Template
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
        echo "
";
        // line 2
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "forumrow"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t";
            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
            if ((($this->getAttribute($_forumrow_, "S_IS_CAT") && (!$this->getAttribute($_forumrow_, "S_FIRST_ROW"))) || $this->getAttribute($_forumrow_, "S_NO_CAT"))) {
                // line 4
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 9
            echo "
\t";
            // line 10
            if (isset($context["forumlist_body_category_header_before"])) { $_forumlist_body_category_header_before_ = $context["forumlist_body_category_header_before"]; } else { $_forumlist_body_category_header_before_ = null; }
            // line 11
            echo "\t";
            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
            if ((($this->getAttribute($_forumrow_, "S_IS_CAT") || $this->getAttribute($_forumrow_, "S_FIRST_ROW")) || $this->getAttribute($_forumrow_, "S_NO_CAT"))) {
                // line 12
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 17
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "S_IS_CAT")) {
                    echo "<a href=\"";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "U_VIEWFORUM");
                    echo "\">";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_NAME");
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 18
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist forums\">
\t";
            }
            // line 26
            echo "\t";
            if (isset($context["forumlist_body_category_header_after"])) { $_forumlist_body_category_header_after_ = $context["forumlist_body_category_header_after"]; } else { $_forumlist_body_category_header_after_ = null; }
            // line 27
            echo "
\t";
            // line 28
            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
            if ((!$this->getAttribute($_forumrow_, "S_IS_CAT"))) {
                // line 29
                echo "\t\t";
                if (isset($context["forumlist_body_forum_row_before"])) { $_forumlist_body_forum_row_before_ = $context["forumlist_body_forum_row_before"]; } else { $_forumlist_body_forum_row_before_ = null; }
                // line 30
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 31
                if (isset($context["forumlist_body_forum_row_prepend"])) { $_forumlist_body_forum_row_prepend_ = $context["forumlist_body_forum_row_prepend"]; } else { $_forumlist_body_forum_row_prepend_ = null; }
                // line 32
                echo "\t\t\t<dl class=\"icon ";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "FORUM_IMG_STYLE");
                echo "\">
\t\t\t\t<dt title=\"";
                // line 33
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "FORUM_FOLDER_IMG_ALT");
                echo "\">
\t\t\t\t\t";
                // line 34
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "S_UNREAD_FORUM")) {
                    echo "<a href=\"";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "U_VIEWFORUM");
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 35
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 36
                if (isset($context["S_ENABLE_FEEDS"])) { $_S_ENABLE_FEEDS_ = $context["S_ENABLE_FEEDS"]; } else { $_S_ENABLE_FEEDS_ = null; }
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if (($_S_ENABLE_FEEDS_ && $this->getAttribute($_forumrow_, "S_FEED_ENABLED"))) {
                    echo "<!-- <a class=\"feed-icon-forum\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_NAME");
                    echo "\" href=\"";
                    if (isset($context["U_FEED"])) { $_U_FEED_ = $context["U_FEED"]; } else { $_U_FEED_ = null; }
                    echo $_U_FEED_;
                    echo "?f=";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_ID");
                    echo "\"><img src=\"";
                    if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
                    echo $_T_THEME_PATH_;
                    echo "/images/feed.gif\" alt=\"";
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_NAME");
                    echo "\" /></a> -->";
                }
                // line 37
                echo "
\t\t\t\t\t\t";
                // line 38
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "FORUM_IMAGE")) {
                    echo "<span class=\"forum-image\">";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_IMAGE");
                    echo "</span>";
                }
                // line 39
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "U_VIEWFORUM");
                echo "\" class=\"forumtitle\">";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                echo $this->getAttribute($_forumrow_, "FORUM_NAME");
                echo "</a>
\t\t\t\t\t\t";
                // line 40
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "FORUM_DESC")) {
                    echo "<br />";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "FORUM_DESC");
                }
                // line 41
                echo "\t\t\t\t\t\t";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "MODERATORS")) {
                    // line 42
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "L_MODERATOR_STR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "MODERATORS");
                    echo "
\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t";
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ((twig_length_filter($this->env, $this->getAttribute($_forumrow_, "subforum")) && $this->getAttribute($_forumrow_, "S_LIST_SUBFORUMS"))) {
                    // line 45
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["forumlist_body_subforums_before"])) { $_forumlist_body_subforums_before_ = $context["forumlist_body_subforums_before"]; } else { $_forumlist_body_subforums_before_ = null; }
                    // line 46
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "L_SUBFORUM_STR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 47
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_forumrow_, "subforum"));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 48
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        echo $this->getAttribute($_subforum_, "U_SUBFORUM");
                        echo "\" class=\"subforum";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        if ($this->getAttribute($_subforum_, "S_UNREAD")) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        if ($this->getAttribute($_subforum_, "UNREAD")) {
                            echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        echo $this->getAttribute($_subforum_, "SUBFORUM_NAME");
                        echo "</a>";
                        if (isset($context["subforum"])) { $_subforum_ = $context["subforum"]; } else { $_subforum_ = null; }
                        if ((!$this->getAttribute($_subforum_, "S_LAST_ROW"))) {
                            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        }
                        // line 49
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["forumlist_body_subforums_after"])) { $_forumlist_body_subforums_after_ = $context["forumlist_body_subforums_after"]; } else { $_forumlist_body_subforums_after_ = null; }
                    // line 51
                    echo "\t\t\t\t\t\t";
                }
                // line 52
                echo "
\t\t\t\t\t\t";
                // line 53
                if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
                if ((!$_S_IS_BOT_)) {
                    // line 54
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 55
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    if ($this->getAttribute($_forumrow_, "CLICKS")) {
                        // line 56
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "CLICKS");
                        echo "</strong>
\t\t\t\t\t\t\t";
                    } elseif (((!$this->getAttribute($_forumrow_, "S_IS_LINK")) && $this->getAttribute($_forumrow_, "TOPICS"))) {
                        // line 58
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "TOPICS");
                        echo "</strong>
\t\t\t\t\t\t\t";
                    }
                    // line 60
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 64
                if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                if ($this->getAttribute($_forumrow_, "CLICKS")) {
                    // line 65
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "CLICKS");
                    echo "</span></dd>
\t\t\t\t";
                } elseif ((!$this->getAttribute($_forumrow_, "S_IS_LINK"))) {
                    // line 67
                    echo "\t\t\t\t\t<dd class=\"topics\">";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "TOPICS");
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 68
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    echo $this->getAttribute($_forumrow_, "POSTS");
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("POSTS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 70
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    if ($this->getAttribute($_forumrow_, "U_UNAPPROVED_TOPICS")) {
                        // line 71
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "U_UNAPPROVED_TOPICS");
                        echo "\">";
                        if (isset($context["UNAPPROVED_IMG"])) { $_UNAPPROVED_IMG_ = $context["UNAPPROVED_IMG"]; } else { $_UNAPPROVED_IMG_ = null; }
                        echo $_UNAPPROVED_IMG_;
                        echo "</a>
\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($_forumrow_, "U_UNAPPROVED_POSTS")) {
                        // line 73
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "U_UNAPPROVED_POSTS");
                        echo "\">";
                        if (isset($context["UNAPPROVED_POST_IMG"])) { $_UNAPPROVED_POST_IMG_ = $context["UNAPPROVED_POST_IMG"]; } else { $_UNAPPROVED_POST_IMG_ = null; }
                        echo $_UNAPPROVED_POST_IMG_;
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 75
                    echo "\t\t\t\t\t\t";
                    if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                    if ($this->getAttribute($_forumrow_, "LAST_POST_TIME")) {
                        echo "<dfn>";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t";
                        // line 76
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        if ($this->getAttribute($_forumrow_, "S_DISPLAY_SUBJECT")) {
                            // line 77
                            echo "\t\t\t\t\t\t\t";
                            if (isset($context["forumlist_body_last_post_title_prepend"])) { $_forumlist_body_last_post_title_prepend_ = $context["forumlist_body_last_post_title_prepend"]; } else { $_forumlist_body_last_post_title_prepend_ = null; }
                            // line 78
                            echo "\t\t\t\t\t\t\t<a href=\"";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "U_LAST_POST");
                            echo "\" title=\"";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "LAST_POST_SUBJECT");
                            echo "\" class=\"lastsubject\">";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "LAST_POST_SUBJECT_TRUNCATED");
                            echo "</a> <br />
\t\t\t\t\t\t";
                        }
                        // line 79
                        echo " 
\t\t\t\t\t\t";
                        // line 80
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "LAST_POSTER_FULL");
                        echo "
\t\t\t\t\t\t";
                        // line 81
                        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
                        if ((!$_S_IS_BOT_)) {
                            echo "<a href=\"";
                            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                            echo $this->getAttribute($_forumrow_, "U_LAST_POST");
                            echo "\">";
                            if (isset($context["LAST_POST_IMG"])) { $_LAST_POST_IMG_ = $context["LAST_POST_IMG"]; } else { $_LAST_POST_IMG_ = null; }
                            echo $_LAST_POST_IMG_;
                            echo "</a> ";
                        }
                        echo "<br />";
                        if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
                        echo $this->getAttribute($_forumrow_, "LAST_POST_TIME");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "<br />&nbsp;";
                    }
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 84
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 86
                echo "\t\t\t</dl>
\t\t\t";
                // line 87
                if (isset($context["forumlist_body_forum_row_append"])) { $_forumlist_body_forum_row_append_ = $context["forumlist_body_forum_row_append"]; } else { $_forumlist_body_forum_row_append_ = null; }
                // line 88
                echo "\t\t</li>
\t\t";
                // line 89
                if (isset($context["forumlist_body_forum_row_after"])) { $_forumlist_body_forum_row_after_ = $context["forumlist_body_forum_row_after"]; } else { $_forumlist_body_forum_row_after_ = null; }
                // line 90
                echo "\t";
            }
            // line 91
            echo "
\t";
            // line 92
            if (isset($context["forumrow"])) { $_forumrow_ = $context["forumrow"]; } else { $_forumrow_ = null; }
            if ($this->getAttribute($_forumrow_, "S_LAST_ROW")) {
                // line 93
                echo "\t\t\t</ul>

\t\t\t</div>
\t\t</div>
\t";
                // line 97
                if (isset($context["forumlist_body_last_row_after"])) { $_forumlist_body_last_row_after_ = $context["forumlist_body_last_row_after"]; } else { $_forumlist_body_last_row_after_ = null; }
                // line 98
                echo "\t";
            }
            // line 99
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 101
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 103
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 103,  441 => 101,  435 => 99,  432 => 98,  430 => 97,  424 => 93,  421 => 92,  418 => 91,  415 => 90,  413 => 89,  410 => 88,  408 => 87,  405 => 86,  401 => 84,  379 => 81,  372 => 80,  369 => 79,  356 => 78,  353 => 77,  350 => 76,  342 => 75,  332 => 73,  322 => 71,  303 => 67,  293 => 65,  290 => 64,  286 => 62,  282 => 60,  272 => 58,  262 => 56,  259 => 55,  256 => 54,  253 => 53,  250 => 52,  247 => 51,  238 => 49,  212 => 48,  207 => 47,  200 => 46,  193 => 44,  182 => 42,  178 => 41,  171 => 40,  162 => 39,  154 => 38,  126 => 36,  123 => 35,  115 => 34,  104 => 32,  102 => 31,  99 => 30,  96 => 29,  93 => 28,  90 => 27,  87 => 26,  78 => 20,  74 => 19,  70 => 18,  55 => 17,  48 => 12,  44 => 11,  42 => 10,  39 => 9,  32 => 4,  28 => 3,  22 => 2,  351 => 74,  348 => 73,  346 => 72,  343 => 71,  338 => 68,  336 => 67,  321 => 66,  319 => 70,  314 => 63,  311 => 68,  308 => 61,  305 => 60,  300 => 57,  297 => 56,  265 => 55,  263 => 54,  258 => 52,  255 => 51,  252 => 50,  249 => 49,  244 => 50,  241 => 45,  230 => 44,  216 => 43,  214 => 42,  211 => 41,  197 => 45,  194 => 39,  191 => 38,  188 => 37,  186 => 36,  183 => 35,  175 => 31,  170 => 30,  164 => 28,  160 => 27,  151 => 37,  148 => 24,  141 => 23,  134 => 22,  116 => 20,  110 => 33,  106 => 18,  103 => 17,  101 => 16,  98 => 15,  86 => 14,  83 => 13,  81 => 12,  72 => 9,  69 => 8,  66 => 7,  64 => 6,  61 => 5,  53 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
