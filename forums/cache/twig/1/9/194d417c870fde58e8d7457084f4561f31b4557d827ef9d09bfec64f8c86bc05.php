<?php

/* ucp_main_drafts.html */
class __TwigTemplate_194d417c870fde58e8d7457084f4561f31b4557d827ef9d09bfec64f8c86bc05 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_drafts.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"postform\" method=\"post\" action=\"";
        // line 3
        if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
        echo $_S_UCP_ACTION_;
        echo "\"";
        if (isset($context["S_FORM_ENCTYPE"])) { $_S_FORM_ENCTYPE_ = $context["S_FORM_ENCTYPE"]; } else { $_S_FORM_ENCTYPE_ = null; }
        echo $_S_FORM_ENCTYPE_;
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("DRAFTS_EXPLAIN");
        echo "</p>

";
        // line 12
        if (isset($context["S_EDIT_DRAFT"])) { $_S_EDIT_DRAFT_ = $context["S_EDIT_DRAFT"]; } else { $_S_EDIT_DRAFT_ = null; }
        if ($_S_EDIT_DRAFT_) {
            // line 13
            echo "
\t\t";
            // line 14
            $location = "posting_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_editor.html", "ucp_main_drafts.html", 14)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 15
            echo "\t\t</div>
\t</div>

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
            // line 19
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "<input type=\"reset\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("SAVE");
            echo "\" class=\"button1\" />
\t\t\t\t";
            // line 21
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t\t</fieldset>

";
        } else {
            // line 25
            echo "
\t";
            // line 26
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "draftrow", array()))) {
                // line 27
                echo "\t\t<ul class=\"topiclist missing-column\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 30
                echo $this->env->getExtension('phpbb')->lang("DRAFT_TITLE");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"info\"><span>";
                // line 31
                echo $this->env->getExtension('phpbb')->lang("SAVE_DATE");
                echo "</span></dd>
\t\t\t\t\t<dd class=\"mark\">";
                // line 32
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist missing-column\">

\t\t";
                // line 38
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "draftrow", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["draftrow"]) {
                    // line 39
                    echo "\t\t\t<li class=\"row";
                    if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                    if (($this->getAttribute($_draftrow_, "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a class=\"topictitle\" href=\"";
                    // line 43
                    if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                    echo $this->getAttribute($_draftrow_, "U_VIEW_EDIT", array());
                    echo "\">";
                    if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                    echo $this->getAttribute($_draftrow_, "DRAFT_SUBJECT", array());
                    echo "</a><br />
\t\t\t\t\t\t\t";
                    // line 44
                    if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                    if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
                    if ($this->getAttribute($_draftrow_, "S_LINK_TOPIC", array())) {
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                        echo $this->getAttribute($_draftrow_, "U_VIEW", array());
                        echo "\">";
                        if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                        echo $this->getAttribute($_draftrow_, "TITLE", array());
                        echo "</a>
\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($_draftrow_, "S_LINK_FORUM", array())) {
                        // line 45
                        echo $this->env->getExtension('phpbb')->lang("FORUM");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                        echo $this->getAttribute($_draftrow_, "U_VIEW", array());
                        echo "\">";
                        if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                        echo $this->getAttribute($_draftrow_, "TITLE", array());
                        echo "</a>
\t\t\t\t\t\t\t";
                    } elseif ($_S_PRIVMSGS_) {
                        // line 47
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_FORUM");
                    }
                    // line 48
                    echo "\t\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t\t";
                    // line 49
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DATE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                    echo $this->getAttribute($_draftrow_, "DATE", array());
                    echo "</strong><br />
\t\t\t\t\t\t\t\t";
                    // line 50
                    if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                    if ($this->getAttribute($_draftrow_, "U_INSERT", array())) {
                        echo "<a href=\"";
                        if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                        echo $this->getAttribute($_draftrow_, "U_INSERT", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                        echo "</a> &bull; ";
                    }
                    echo "<a href=\"";
                    if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                    echo $this->getAttribute($_draftrow_, "U_VIEW_EDIT", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_EDIT");
                    echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"info\"><span>";
                    // line 54
                    if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                    echo $this->getAttribute($_draftrow_, "DATE", array());
                    echo "<br />";
                    if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                    if ($this->getAttribute($_draftrow_, "U_INSERT", array())) {
                        echo "<a href=\"";
                        if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                        echo $this->getAttribute($_draftrow_, "U_INSERT", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                        echo "</a> &bull; ";
                    }
                    echo "<a href=\"";
                    if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                    echo $this->getAttribute($_draftrow_, "U_VIEW_EDIT", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_EDIT");
                    echo "</a></span></dd>
\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"d[";
                    // line 55
                    if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                    echo $this->getAttribute($_draftrow_, "DRAFT_ID", array());
                    echo "]\" id=\"d";
                    if (isset($context["draftrow"])) { $_draftrow_ = $context["draftrow"]; } else { $_draftrow_ = null; }
                    echo $this->getAttribute($_draftrow_, "DRAFT_ID", array());
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draftrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t</ul>
\t";
            } else {
                // line 61
                echo "\t\t<p><strong>";
                echo $this->env->getExtension('phpbb')->lang("NO_SAVED_DRAFTS");
                echo "</strong></p>
\t";
            }
            // line 63
            echo "
\t\t</div>
\t</div>

\t";
            // line 67
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "draftrow", array()))) {
                // line 68
                echo "\t\t<fieldset class=\"display-actions\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"delete\" value=\"";
                // line 69
                echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                echo "\" />
\t\t\t<div><a href=\"#\" onclick=\"marklist('postform', '', true); return false;\">";
                // line 70
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> &bull; <a href=\"#\" onclick=\"marklist('postform', '', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></div>
\t\t\t";
                // line 71
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t</fieldset>
\t";
            }
            // line 74
            echo "
";
        }
        // line 76
        echo "
</form>

";
        // line 79
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_drafts.html", 79)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_drafts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 79,  293 => 76,  289 => 74,  282 => 71,  276 => 70,  272 => 69,  269 => 68,  266 => 67,  260 => 63,  254 => 61,  250 => 59,  236 => 55,  216 => 54,  196 => 50,  188 => 49,  185 => 48,  180 => 47,  168 => 45,  153 => 44,  145 => 43,  132 => 39,  127 => 38,  118 => 32,  114 => 31,  110 => 30,  105 => 27,  102 => 26,  99 => 25,  91 => 21,  87 => 20,  80 => 19,  74 => 15,  62 => 14,  59 => 13,  56 => 12,  51 => 10,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
