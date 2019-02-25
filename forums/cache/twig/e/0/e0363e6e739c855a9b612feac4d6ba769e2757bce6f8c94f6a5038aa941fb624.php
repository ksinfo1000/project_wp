<?php

/* permission_forum_copy.html */
class __TwigTemplate_e0363e6e739c855a9b612feac4d6ba769e2757bce6f8c94f6a5038aa941fb624 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "permission_forum_copy.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

\t<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_FORUM_PERMISSIONS_COPY");
        echo "</h1>

\t";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_FORUM_PERMISSIONS_COPY_EXPLAIN");
        echo "

\t<form id=\"forum_perm_copy\" method=\"post\" action=\"";
        // line 9
        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
        echo $_U_ACTION_;
        echo "\">

\t<fieldset>
\t\t<legend>";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
        echo "</legend>

\t\t<dl>
\t\t\t<dt>";
        // line 15
        if (isset($context["acp_permission_forum_copy_src_forum_prepend"])) { $_acp_permission_forum_copy_src_forum_prepend_ = $context["acp_permission_forum_copy_src_forum_prepend"]; } else { $_acp_permission_forum_copy_src_forum_prepend_ = null; }
        echo "<label for=\"src_forum\">";
        echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS_FROM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS_FORUM_FROM_EXPLAIN");
        echo "</span>";
        if (isset($context["acp_permission_forum_copy_src_forum_append"])) { $_acp_permission_forum_copy_src_forum_append_ = $context["acp_permission_forum_copy_src_forum_append"]; } else { $_acp_permission_forum_copy_src_forum_append_ = null; }
        echo "</dt>
\t\t\t<dd><select id=\"src_forum\" name=\"src_forum_id\"><option value=\"0\">";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("SELECT_FORUM");
        echo "</option><option value=\"-1\">------------------</option>";
        if (isset($context["S_FORUM_OPTIONS"])) { $_S_FORUM_OPTIONS_ = $context["S_FORUM_OPTIONS"]; } else { $_S_FORUM_OPTIONS_ = null; }
        echo $_S_FORUM_OPTIONS_;
        echo "</select></dd>
\t\t</dl>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
        echo "</legend>
\t\t<p>";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUMS_EXPLAIN");
        echo "</p>

\t\t<dl>
\t\t\t<dt>";
        // line 25
        if (isset($context["acp_permission_forum_copy_dest_forum_prepend"])) { $_acp_permission_forum_copy_dest_forum_prepend_ = $context["acp_permission_forum_copy_dest_forum_prepend"]; } else { $_acp_permission_forum_copy_dest_forum_prepend_ = null; }
        echo "<label for=\"dest_forums\">";
        echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS_TO");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS_FORUM_TO_EXPLAIN");
        echo "</span>";
        if (isset($context["acp_permission_forum_copy_dest_forum_append"])) { $_acp_permission_forum_copy_dest_forum_append_ = $context["acp_permission_forum_copy_dest_forum_append"]; } else { $_acp_permission_forum_copy_dest_forum_append_ = null; }
        echo "</dt>
\t\t\t<dd><select id=\"dest_forums\" name=\"dest_forum_ids[]\" multiple=\"multiple\" size=\"10\">";
        // line 26
        if (isset($context["S_FORUM_OPTIONS"])) { $_S_FORUM_OPTIONS_ = $context["S_FORUM_OPTIONS"]; } else { $_S_FORUM_OPTIONS_ = null; }
        echo $_S_FORUM_OPTIONS_;
        echo "</select></dd>
\t\t</dl>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t\t";
        // line 34
        if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
        echo $_S_HIDDEN_FIELDS_;
        echo "
\t\t";
        // line 35
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
\t</fieldset>

\t</form>

";
        // line 40
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "permission_forum_copy.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "permission_forum_copy.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 40,  128 => 35,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  102 => 26,  91 => 25,  85 => 22,  81 => 21,  70 => 16,  59 => 15,  53 => 12,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
