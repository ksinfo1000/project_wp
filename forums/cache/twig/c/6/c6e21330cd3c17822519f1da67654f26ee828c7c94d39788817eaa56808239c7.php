<?php

/* ucp_attachments.html */
class __TwigTemplate_c6e21330cd3c17822519f1da67654f26ee828c7c94d39788817eaa56808239c7 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_attachments.html", 1)->display($context);
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
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">
\t
\t<p>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS_EXPLAIN");
        echo "</p>

\t";
        // line 12
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "attachrow", array()))) {
            // line 13
            echo "\t\t<div class=\"action-bar top\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 15
            if (isset($context["NUM_ATTACHMENTS"])) { $_NUM_ATTACHMENTS_ = $context["NUM_ATTACHMENTS"]; } else { $_NUM_ATTACHMENTS_ = null; }
            echo $_NUM_ATTACHMENTS_;
            echo "
\t\t\t\t";
            // line 16
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                echo " 
\t\t\t\t\t";
                // line 17
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "ucp_attachments.html", 17)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 18
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 19
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t\t";
            }
            // line 21
            echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\"><a href=\"";
            // line 27
            if (isset($context["U_SORT_FILENAME"])) { $_U_SORT_FILENAME_ = $context["U_SORT_FILENAME"]; } else { $_U_SORT_FILENAME_ = null; }
            echo $_U_SORT_FILENAME_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("FILENAME");
            echo "</a></div></dt>
\t\t\t\t\t<dd class=\"extra\"><a href=\"";
            // line 28
            if (isset($context["U_SORT_DOWNLOADS"])) { $_U_SORT_DOWNLOADS_ = $context["U_SORT_DOWNLOADS"]; } else { $_U_SORT_DOWNLOADS_ = null; }
            echo $_U_SORT_DOWNLOADS_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("DOWNLOADS");
            echo "</a></dd>
\t\t\t\t\t<dd class=\"time\"><span><a href=\"";
            // line 29
            if (isset($context["U_SORT_POST_TIME"])) { $_U_SORT_POST_TIME_ = $context["U_SORT_POST_TIME"]; } else { $_U_SORT_POST_TIME_ = null; }
            echo $_U_SORT_POST_TIME_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("POST_TIME");
            echo "</a></span></dd>
\t\t\t\t\t<dd class=\"mark\">";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist responsive-show-columns\">

\t\t";
            // line 36
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "attachrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachrow"]) {
                // line 37
                echo "\t\t<li class=\"row";
                if (isset($context["attachrow"])) { $_attachrow_ = $context["attachrow"]; } else { $_attachrow_ = null; }
                if (($this->getAttribute($_attachrow_, "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                // line 41
                if (isset($context["attachrow"])) { $_attachrow_ = $context["attachrow"]; } else { $_attachrow_ = null; }
                echo $this->getAttribute($_attachrow_, "U_VIEW_ATTACHMENT", array());
                echo "\" class=\"topictitle attachment-filename ellipsis-text\" title=\"";
                if (isset($context["attachrow"])) { $_attachrow_ = $context["attachrow"]; } else { $_attachrow_ = null; }
                echo $this->getAttribute($_attachrow_, "FILENAME", array());
                echo "\">";
                if (isset($context["attachrow"])) { $_attachrow_ = $context["attachrow"]; } else { $_attachrow_ = null; }
                echo $this->getAttribute($_attachrow_, "FILENAME", array());
                echo "</a> (";
                if (isset($context["attachrow"])) { $_attachrow_ = $context["attachrow"]; } else { $_attachrow_ = null; }
                echo $this->getAttribute($_attachrow_, "SIZE", array());
                echo ")<br />
\t\t\t\t\t\t";
                // line 42
                if (isset($context["attachrow"])) { $_attachrow_ = $context["attachrow"]; } else { $_attachrow_ = null; }
                if ($this->getAttribute($_attachrow_, "S_IN_MESSAGE", array())) {
                    echo $this->env->getExtension('phpbb')->lang("PM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                }
                echo "<a href=\"";
                if (isset($context["attachrow"])) { $_attachrow_ = $context["attachrow"]; } else { $_attachrow_ = null; }
                echo $this->getAttribute($_attachrow_, "U_VIEW_TOPIC", array());
                echo "\">";
                if (isset($context["attachrow"])) { $_attachrow_ = $context["attachrow"]; } else { $_attachrow_ = null; }
                echo $this->getAttribute($_attachrow_, "TOPIC_TITLE", array());
                echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"extra\">";
                // line 45
                if (isset($context["attachrow"])) { $_attachrow_ = $context["attachrow"]; } else { $_attachrow_ = null; }
                echo $this->getAttribute($_attachrow_, "DOWNLOAD_COUNT", array());
                echo "</dd>
\t\t\t\t<dd class=\"time\"><span>";
                // line 46
                if (isset($context["attachrow"])) { $_attachrow_ = $context["attachrow"]; } else { $_attachrow_ = null; }
                echo $this->getAttribute($_attachrow_, "POST_TIME", array());
                echo "</span></dd>
\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"attachment[";
                // line 47
                if (isset($context["attachrow"])) { $_attachrow_ = $context["attachrow"]; } else { $_attachrow_ = null; }
                echo $this->getAttribute($_attachrow_, "ATTACH_ID", array());
                echo "]\" value=\"1\" /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "\t\t</ul>

\t\t<fieldset class=\"display-options\">
\t\t\t<label for=\"sk\">";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            if (isset($context["S_SORT_OPTIONS"])) { $_S_SORT_OPTIONS_ = $context["S_SORT_OPTIONS"]; } else { $_S_SORT_OPTIONS_ = null; }
            echo $_S_SORT_OPTIONS_;
            echo "</select></label> 
\t\t\t<label><select name=\"sd\" id=\"sd\">";
            // line 55
            if (isset($context["S_ORDER_SELECT"])) { $_S_ORDER_SELECT_ = $context["S_ORDER_SELECT"]; } else { $_S_ORDER_SELECT_ = null; }
            echo $_S_ORDER_SELECT_;
            echo "</select></label>
\t\t\t<input class=\"button2\" type=\"submit\" name=\"sort\" value=\"";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("SORT");
            echo "\" />
\t\t\t";
            // line 57
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t</fieldset>

\t\t<hr />

\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 64
            if (isset($context["TOTAL_ATTACHMENTS"])) { $_TOTAL_ATTACHMENTS_ = $context["TOTAL_ATTACHMENTS"]; } else { $_TOTAL_ATTACHMENTS_ = null; }
            echo $_TOTAL_ATTACHMENTS_;
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "
\t\t\t\t";
            // line 65
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination", array()))) {
                echo " 
\t\t\t\t\t";
                // line 66
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "ucp_attachments.html", 66)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 67
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 68
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t\t";
            }
            // line 70
            echo "\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 74
            echo "\t\t<p><strong>";
            echo $this->env->getExtension('phpbb')->lang("UCP_NO_ATTACHMENTS");
            echo "</strong></p>
\t";
        }
        // line 76
        echo "
\t</div>
</div>
\t
";
        // line 80
        if (isset($context["S_ATTACHMENT_ROWS"])) { $_S_ATTACHMENT_ROWS_ = $context["S_ATTACHMENT_ROWS"]; } else { $_S_ATTACHMENT_ROWS_ = null; }
        if ($_S_ATTACHMENT_ROWS_) {
            // line 81
            echo "\t<fieldset class=\"display-actions\">\t
\t\t<input class=\"button2\" type=\"submit\" name=\"delete\" value=\"";
            // line 82
            echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
            echo "\" />
\t\t<div><a href=\"#\" onclick=\"marklist('ucp', 'attachment', true); return false;\">";
            // line 83
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('ucp', 'attachment', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
\t\t";
            // line 84
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
";
        }
        // line 87
        echo "</form>

";
        // line 89
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_attachments.html", 89)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_attachments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 89,  317 => 87,  310 => 84,  304 => 83,  300 => 82,  297 => 81,  294 => 80,  288 => 76,  282 => 74,  276 => 70,  270 => 68,  265 => 67,  253 => 66,  248 => 65,  241 => 64,  230 => 57,  226 => 56,  221 => 55,  213 => 54,  208 => 51,  197 => 47,  192 => 46,  187 => 45,  166 => 42,  152 => 41,  139 => 37,  134 => 36,  125 => 30,  118 => 29,  111 => 28,  104 => 27,  96 => 21,  90 => 19,  85 => 18,  73 => 17,  68 => 16,  63 => 15,  59 => 13,  56 => 12,  51 => 10,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
