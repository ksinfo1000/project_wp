<?php

/* acp_prune_forums.html */
class __TwigTemplate_5db11353a8ac390a9a13deb37fee339418b17c1bc4ea8e85f2d109e9c9ceebc2 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_prune_forums.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (isset($context["S_PRUNED"])) { $_S_PRUNED_ = $context["S_PRUNED"]; } else { $_S_PRUNED_ = null; }
        if (isset($context["S_SELECT_FORUM"])) { $_S_SELECT_FORUM_ = $context["S_SELECT_FORUM"]; } else { $_S_SELECT_FORUM_ = null; }
        if ($_S_PRUNED_) {
            // line 6
            echo "
\t<h1>";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE");
            echo "</h1>

\t<p>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("PRUNE_SUCCESS");
            echo "</p>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("FORUM");
            echo "</th>
\t\t<th>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("TOPICS_PRUNED");
            echo "</th>
\t\t<th>";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("POSTS_PRUNED");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 20
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "pruned", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["pruned"]) {
                // line 21
                echo "\t<tr>
\t\t<td style=\"text-align: center;\">";
                // line 22
                if (isset($context["pruned"])) { $_pruned_ = $context["pruned"]; } else { $_pruned_ = null; }
                echo $this->getAttribute($_pruned_, "FORUM_NAME", array());
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 23
                if (isset($context["pruned"])) { $_pruned_ = $context["pruned"]; } else { $_pruned_ = null; }
                echo $this->getAttribute($_pruned_, "NUM_TOPICS", array());
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 24
                if (isset($context["pruned"])) { $_pruned_ = $context["pruned"]; } else { $_pruned_ = null; }
                echo $this->getAttribute($_pruned_, "NUM_POSTS", array());
                echo "</td>
\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 27
                echo "\t\t<tr>
\t\t\t<td colspan=\"3\" class=\"row3\" style=\"text-align: center;\">";
                // line 28
                echo $this->env->getExtension('phpbb')->lang("NO_PRUNE");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pruned'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t</tbody>
\t</table>

";
        } elseif ($_S_SELECT_FORUM_) {
            // line 35
            echo "
\t<h1>";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_FORUMS");
            echo "</h1>

\t<p>";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_FORUMS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_prune\" method=\"post\" action=\"";
            // line 40
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">
\t
\t<fieldset>
\t\t<legend>";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("SELECT_FORUM");
            echo "</legend>
\t\t<p>";
            // line 44
            echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUMS_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt>";
            // line 46
            if (isset($context["acp_prune_forums_prepend"])) { $_acp_prune_forums_prepend_ = $context["acp_prune_forums_prepend"]; } else { $_acp_prune_forums_prepend_ = null; }
            echo "<label for=\"forum\">";
            echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>";
            if (isset($context["acp_prune_forums_append"])) { $_acp_prune_forums_append_ = $context["acp_prune_forums_append"]; } else { $_acp_prune_forums_append_ = null; }
            echo "</dt>
\t\t<dd><select id=\"forum\" name=\"f[]\" multiple=\"multiple\" size=\"10\">";
            // line 47
            if (isset($context["S_FORUM_OPTIONS"])) { $_S_FORUM_OPTIONS_ = $context["S_FORUM_OPTIONS"]; } else { $_S_FORUM_OPTIONS_ = null; }
            echo $_S_FORUM_OPTIONS_;
            echo "</select></dd>
\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"all_forums\" value=\"1\" /> ";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
            echo "</label></dd>
\t</dl>
\t
\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" value=\"";
            // line 52
            echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
            echo "\" />
\t</p>
\t</fieldset>

\t</form>

";
        } else {
            // line 59
            echo "
\t<a href=\"";
            // line 60
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_FORUMS");
            echo "</h1>

\t<p>";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_FORUMS_EXPLAIN");
            echo "</p>

\t<h2>";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("FORUM");
            echo "</h2>

\t<p>";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("SELECTED_FORUMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            if (isset($context["FORUM_LIST"])) { $_FORUM_LIST_ = $context["FORUM_LIST"]; } else { $_FORUM_LIST_ = null; }
            echo $_FORUM_LIST_;
            echo "</p>

\t<form id=\"acp_prune\" method=\"post\" action=\"";
            // line 70
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"prune_days\">";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("PRUNE_NOT_POSTED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"number\" id=\"prune_days\" name=\"prune_days\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"prune_vieweddays\">";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("PRUNE_NOT_VIEWED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"number\" id=\"prune_vieweddays\" name=\"prune_vieweddays\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"polls\">";
            // line 83
            echo $this->env->getExtension('phpbb')->lang("PRUNE_OLD_POLLS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("PRUNE_OLD_POLLS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_old_polls\" value=\"1\" /> ";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"polls\" name=\"prune_old_polls\" value=\"0\" checked=\"checked\" /> ";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"announce\">";
            // line 88
            echo $this->env->getExtension('phpbb')->lang("PRUNE_ANNOUNCEMENTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_announce\" value=\"1\" /> ";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"announce\" name=\"prune_announce\" value=\"0\" checked=\"checked\" /> ";
            // line 90
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sticky\">";
            // line 93
            echo $this->env->getExtension('phpbb')->lang("PRUNE_STICKY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_sticky\" value=\"1\" /> ";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"sticky\" name=\"prune_sticky\" value=\"0\" checked=\"checked\" /> ";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t
\t<p class=\"quick\">
\t\t";
            // line 99
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "
\t\t";
            // line 100
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t</fieldset>
\t</form>

";
        }
        // line 107
        echo "
";
        // line 108
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_prune_forums.html", 108)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_prune_forums.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 108,  310 => 107,  301 => 101,  296 => 100,  291 => 99,  284 => 95,  280 => 94,  275 => 93,  269 => 90,  265 => 89,  260 => 88,  254 => 85,  250 => 84,  243 => 83,  235 => 79,  227 => 75,  222 => 73,  215 => 70,  206 => 68,  201 => 66,  196 => 64,  191 => 62,  180 => 60,  177 => 59,  167 => 52,  160 => 48,  155 => 47,  146 => 46,  141 => 44,  137 => 43,  130 => 40,  125 => 38,  120 => 36,  117 => 35,  111 => 31,  102 => 28,  99 => 27,  90 => 24,  85 => 23,  80 => 22,  77 => 21,  71 => 20,  64 => 16,  60 => 15,  56 => 14,  48 => 9,  43 => 7,  40 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
