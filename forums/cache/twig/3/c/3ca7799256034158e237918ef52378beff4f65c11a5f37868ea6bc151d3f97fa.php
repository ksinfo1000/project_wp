<?php

/* ucp_notifications.html */
class __TwigTemplate_3ca7799256034158e237918ef52378beff4f65c11a5f37868ea6bc151d3f97fa extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_notifications.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
        echo $_S_UCP_ACTION_;
        echo "\"";
        if (isset($context["S_FORM_ENCTYPE"])) { $_S_FORM_ENCTYPE_ = $context["S_FORM_ENCTYPE"]; } else { $_S_FORM_ENCTYPE_ = null; }
        echo $_S_FORM_ENCTYPE_;
        echo ">

<h2>";
        // line 5
        if (isset($context["TITLE"])) { $_TITLE_ = $context["TITLE"]; } else { $_TITLE_ = null; }
        echo $_TITLE_;
        echo "</h2>
<div class=\"panel\">
\t<div class=\"inner\">

\t\t<p>";
        // line 9
        if (isset($context["TITLE_EXPLAIN"])) { $_TITLE_EXPLAIN_ = $context["TITLE_EXPLAIN"]; } else { $_TITLE_EXPLAIN_ = null; }
        echo $_TITLE_EXPLAIN_;
        echo "</p>

\t\t";
        // line 11
        if (isset($context["MODE"])) { $_MODE_ = $context["MODE"]; } else { $_MODE_ = null; }
        if (($_MODE_ == "notification_options")) {
            // line 12
            echo "\t\t\t<table class=\"table1\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("NOTIFICATION_TYPE");
            echo "</th>
\t\t\t\t\t\t";
            // line 16
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "notification_methods", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                // line 17
                echo "\t\t\t\t\t\t\t<th class=\"mark\">";
                if (isset($context["notification_methods"])) { $_notification_methods_ = $context["notification_methods"]; } else { $_notification_methods_ = null; }
                echo $this->getAttribute($_notification_methods_, "NAME", array());
                echo "</th>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t\t\t\t<th class=\"mark\">";
            echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
            echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
            // line 23
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "notification_types", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_types"]) {
                // line 24
                echo "\t\t\t\t\t";
                if (isset($context["notification_types"])) { $_notification_types_ = $context["notification_types"]; } else { $_notification_types_ = null; }
                if ($this->getAttribute($_notification_types_, "GROUP_NAME", array())) {
                    // line 25
                    echo "\t\t\t\t\t\t<tr class=\"bg3\">
\t\t\t\t\t\t\t<td colspan=\"";
                    // line 26
                    if (isset($context["NOTIFICATION_TYPES_COLS"])) { $_NOTIFICATION_TYPES_COLS_ = $context["NOTIFICATION_TYPES_COLS"]; } else { $_NOTIFICATION_TYPES_COLS_ = null; }
                    echo $_NOTIFICATION_TYPES_COLS_;
                    echo "\">";
                    if (isset($context["notification_types"])) { $_notification_types_ = $context["notification_types"]; } else { $_notification_types_ = null; }
                    echo $this->getAttribute($_notification_types_, "GROUP_NAME", array());
                    echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                } else {
                    // line 29
                    echo "\t\t\t\t\t\t<tr class=\"";
                    if (isset($context["notification_types"])) { $_notification_types_ = $context["notification_types"]; } else { $_notification_types_ = null; }
                    if (($this->getAttribute($_notification_types_, "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 31
                    if (isset($context["notification_types"])) { $_notification_types_ = $context["notification_types"]; } else { $_notification_types_ = null; }
                    echo $this->getAttribute($_notification_types_, "NAME", array());
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 32
                    if (isset($context["notification_types"])) { $_notification_types_ = $context["notification_types"]; } else { $_notification_types_ = null; }
                    if ($this->getAttribute($_notification_types_, "EXPLAIN", array())) {
                        echo "<br />&nbsp; &nbsp;";
                        if (isset($context["notification_types"])) { $_notification_types_ = $context["notification_types"]; } else { $_notification_types_ = null; }
                        echo $this->getAttribute($_notification_types_, "EXPLAIN", array());
                    }
                    // line 33
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                    // line 34
                    if (isset($context["notification_types"])) { $_notification_types_ = $context["notification_types"]; } else { $_notification_types_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_notification_types_, "notification_methods", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                        // line 35
                        echo "\t\t\t\t\t\t\t\t<td class=\"mark\"><input type=\"checkbox\" name=\"";
                        if (isset($context["notification_types"])) { $_notification_types_ = $context["notification_types"]; } else { $_notification_types_ = null; }
                        echo $this->getAttribute($_notification_types_, "TYPE", array());
                        echo "_";
                        if (isset($context["notification_methods"])) { $_notification_methods_ = $context["notification_methods"]; } else { $_notification_methods_ = null; }
                        echo $this->getAttribute($_notification_methods_, "METHOD", array());
                        echo "\"";
                        if (isset($context["notification_methods"])) { $_notification_methods_ = $context["notification_methods"]; } else { $_notification_methods_ = null; }
                        if ($this->getAttribute($_notification_methods_, "SUBSCRIBED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " /></td>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "\t\t\t\t\t\t\t<td class=\"mark\"><input type=\"checkbox\" name=\"";
                    if (isset($context["notification_types"])) { $_notification_types_ = $context["notification_types"]; } else { $_notification_types_ = null; }
                    echo $this->getAttribute($_notification_types_, "TYPE", array());
                    echo "_notification\"";
                    if (isset($context["notification_types"])) { $_notification_types_ = $context["notification_types"]; } else { $_notification_types_ = null; }
                    if ($this->getAttribute($_notification_types_, "SUBSCRIBED", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " /></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_types'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
        } else {
            // line 44
            echo "\t\t\t";
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "notification_list", array()))) {
                // line 45
                echo "\t\t\t\t<div class=\"action-bar top\">
\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t";
                // line 47
                if (isset($context["U_MARK_ALL"])) { $_U_MARK_ALL_ = $context["U_MARK_ALL"]; } else { $_U_MARK_ALL_ = null; }
                if ($_U_MARK_ALL_) {
                    echo "<a href=\"";
                    if (isset($context["U_MARK_ALL"])) { $_U_MARK_ALL_ = $context["U_MARK_ALL"]; } else { $_U_MARK_ALL_ = null; }
                    echo $_U_MARK_ALL_;
                    echo "\" class=\"mark\">";
                    echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS_MARK_ALL_READ");
                    echo "</a> &bull; ";
                }
                // line 48
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo " [<strong>";
                if (isset($context["TOTAL_COUNT"])) { $_TOTAL_COUNT_ = $context["TOTAL_COUNT"]; } else { $_TOTAL_COUNT_ = null; }
                echo $_TOTAL_COUNT_;
                echo "</strong>]
\t\t\t\t\t\t";
                // line 49
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                    // line 50
                    echo "\t\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 50)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 51
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t\t &bull; ";
                    if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                    echo $_PAGE_NUMBER_;
                    echo "
\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t<div class=\"notification_list\">
\t\t\t\t<ul class=\"topiclist two-columns\">
\t\t\t\t\t<li class=\"header\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 61
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "</div></dt>
\t\t\t\t\t\t\t<dd class=\"mark\">";
                // line 62
                echo $this->env->getExtension('phpbb')->lang("MARK_READ");
                echo "</dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"topiclist cplist two-columns\">
\t\t\t\t\t";
                // line 67
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "notification_list", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["notification_list"]) {
                    // line 68
                    echo "\t\t\t\t\t\t<li class=\"row";
                    if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                    if ($this->getAttribute($_notification_list_, "UNREAD", array())) {
                        echo " bg3";
                    } else {
                        if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                        if (($this->getAttribute($_notification_list_, "S_ROW_COUNT", array()) % 2 == 1)) {
                            echo " bg1";
                        } else {
                            echo " bg2";
                        }
                    }
                    if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                    if ($this->getAttribute($_notification_list_, "STYLING", array())) {
                        echo " ";
                        if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                        echo $this->getAttribute($_notification_list_, "STYLING", array());
                    }
                    echo "\">
\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t\t<div class=\"list-inner\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                    // line 72
                    if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                    if ($this->getAttribute($_notification_list_, "AVATAR", array())) {
                        if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                        echo $this->getAttribute($_notification_list_, "AVATAR", array());
                    } else {
                        echo "<img src=\"";
                        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
                        echo $_T_THEME_PATH_;
                        echo "/images/no_avatar.gif\" alt=\"\" />";
                    }
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"notifications\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 74
                    if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                    if ($this->getAttribute($_notification_list_, "URL", array())) {
                        echo "<a href=\"";
                        if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                        if ($this->getAttribute($_notification_list_, "UNREAD", array())) {
                            if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                            echo $this->getAttribute($_notification_list_, "U_MARK_READ", array());
                        } else {
                            if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                            echo $this->getAttribute($_notification_list_, "URL", array());
                        }
                        echo "\">";
                    }
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"notifications_title\">";
                    if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                    echo $this->getAttribute($_notification_list_, "FORMATTED_TITLE", array());
                    if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                    if ($this->getAttribute($_notification_list_, "REFERENCE", array())) {
                        echo " ";
                        if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                        echo $this->getAttribute($_notification_list_, "REFERENCE", array());
                    }
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 76
                    if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                    if ($this->getAttribute($_notification_list_, "URL", array())) {
                        echo "</a>";
                    }
                    echo "\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 77
                    if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                    if ($this->getAttribute($_notification_list_, "FORUM", array())) {
                        echo "<p class=\"notifications_forum\">";
                        if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                        echo $this->getAttribute($_notification_list_, "FORUM", array());
                        echo "</p>";
                    }
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                    if ($this->getAttribute($_notification_list_, "REASON", array())) {
                        echo "<p class=\"notifications_reason\">";
                        if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                        echo $this->getAttribute($_notification_list_, "REASON", array());
                        echo "</p>";
                    }
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t\t<p class=\"notifications_time\">";
                    if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                    echo $this->getAttribute($_notification_list_, "TIME", array());
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dt>

\t\t\t\t\t\t\t\t<dd class=\"mark\">&nbsp;<input type=\"checkbox\" name=\"mark[]\" value=\"";
                    // line 84
                    if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                    echo $this->getAttribute($_notification_list_, "NOTIFICATION_ID", array());
                    echo "\"";
                    if (isset($context["notification_list"])) { $_notification_list_ = $context["notification_list"]; } else { $_notification_list_ = null; }
                    if ( !$this->getAttribute($_notification_list_, "UNREAD", array())) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " /> <dfn>";
                    echo $this->env->getExtension('phpbb')->lang("MARK_READ");
                    echo "</dfn>&nbsp;</dd>
\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"action-bar bottom\">
\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t";
                // line 93
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo " [<strong>";
                if (isset($context["TOTAL_COUNT"])) { $_TOTAL_COUNT_ = $context["TOTAL_COUNT"]; } else { $_TOTAL_COUNT_ = null; }
                echo $_TOTAL_COUNT_;
                echo "</strong>]
\t\t\t\t\t";
                // line 94
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                    // line 95
                    echo "\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 95)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 96
                    echo "\t\t\t\t\t";
                } else {
                    // line 97
                    echo "\t\t\t\t\t\t  &bull; ";
                    if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                    echo $_PAGE_NUMBER_;
                    echo "
\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
            } else {
                // line 103
                echo "\t\t\t\t<p><strong>";
                echo $this->env->getExtension('phpbb')->lang("NO_NOTIFICATIONS");
                echo "</strong></p>
\t\t\t";
            }
            // line 105
            echo "
\t\t";
        }
        // line 107
        echo "\t</div>
</div>

";
        // line 110
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_loops_, "notification_types", array())) || twig_length_filter($this->env, $this->getAttribute($_loops_, "notification_list", array())))) {
            // line 111
            echo "<fieldset class=\"display-actions\">
\t<input type=\"hidden\" name=\"form_time\" value=\"";
            // line 112
            if (isset($context["FORM_TIME"])) { $_FORM_TIME_ = $context["FORM_TIME"]; } else { $_FORM_TIME_ = null; }
            echo $_FORM_TIME_;
            echo "\" />
\t";
            // line 113
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "
\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 114
            if (isset($context["MODE"])) { $_MODE_ = $context["MODE"]; } else { $_MODE_ = null; }
            if (($_MODE_ == "notification_options")) {
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            } else {
                echo $this->env->getExtension('phpbb')->lang("MARK_READ");
            }
            echo "\" class=\"button1\" />
\t<div><a href=\"#\" onclick=\"\$('#ucp input:checkbox').prop('checked', true); return false;\">";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"\$('#ucp input:checkbox').prop('checked', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
\t";
            // line 116
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
</fieldset>
";
        }
        // line 119
        echo "
</form>

";
        // line 122
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_notifications.html", 122)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_notifications.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 122,  480 => 119,  473 => 116,  467 => 115,  458 => 114,  453 => 113,  448 => 112,  445 => 111,  442 => 110,  437 => 107,  433 => 105,  427 => 103,  421 => 99,  414 => 97,  411 => 96,  398 => 95,  395 => 94,  388 => 93,  381 => 88,  363 => 84,  353 => 79,  344 => 78,  336 => 77,  329 => 76,  317 => 75,  303 => 74,  300 => 73,  289 => 72,  265 => 68,  260 => 67,  252 => 62,  248 => 61,  239 => 54,  232 => 52,  229 => 51,  216 => 50,  213 => 49,  205 => 48,  195 => 47,  191 => 45,  187 => 44,  182 => 41,  176 => 40,  163 => 37,  145 => 35,  140 => 34,  137 => 33,  130 => 32,  125 => 31,  114 => 29,  104 => 26,  101 => 25,  97 => 24,  92 => 23,  84 => 19,  74 => 17,  69 => 16,  65 => 15,  60 => 12,  57 => 11,  51 => 9,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
