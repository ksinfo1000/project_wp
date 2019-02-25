<?php

/* ucp_zebra_friends.html */
class __TwigTemplate_8d12540a9bab8490238d0fbc64efe094f5c1d80a062de6ccd9a4cbd039e79425 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_zebra_friends.html", 1)->display($context);
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

\t<p>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("FRIENDS_EXPLAIN");
        echo "</p>

\t<fieldset class=\"fields2\">
\t";
        // line 13
        if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
        if ($_ERROR_) {
            echo "<p class=\"error\">";
            if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
            echo $_ERROR_;
            echo "</p>";
        }
        // line 14
        echo "\t";
        if (isset($context["ucp_friend_list_before"])) { $_ucp_friend_list_before_ = $context["ucp_friend_list_before"]; } else { $_ucp_friend_list_before_ = null; }
        // line 15
        echo "\t<dl>
\t\t<dt><label ";
        // line 16
        if (isset($context["S_USERNAME_OPTIONS"])) { $_S_USERNAME_OPTIONS_ = $context["S_USERNAME_OPTIONS"]; } else { $_S_USERNAME_OPTIONS_ = null; }
        if ($_S_USERNAME_OPTIONS_) {
            echo "for=\"usernames\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb')->lang("YOUR_FRIENDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("YOUR_FRIENDS_EXPLAIN");
        echo "</span></dt>
\t\t<dd>
\t\t\t";
        // line 18
        if (isset($context["S_USERNAME_OPTIONS"])) { $_S_USERNAME_OPTIONS_ = $context["S_USERNAME_OPTIONS"]; } else { $_S_USERNAME_OPTIONS_ = null; }
        if ($_S_USERNAME_OPTIONS_) {
            // line 19
            echo "\t\t\t\t<select name=\"usernames[]\" id=\"usernames\" multiple=\"multiple\" size=\"5\">";
            if (isset($context["S_USERNAME_OPTIONS"])) { $_S_USERNAME_OPTIONS_ = $context["S_USERNAME_OPTIONS"]; } else { $_S_USERNAME_OPTIONS_ = null; }
            echo $_S_USERNAME_OPTIONS_;
            echo "</select>
\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t<strong>";
            echo $this->env->getExtension('phpbb')->lang("NO_FRIENDS");
            echo "</strong>
\t\t\t";
        }
        // line 23
        echo "\t\t</dd>
\t</dl>
\t";
        // line 25
        if (isset($context["ucp_friend_list_after"])) { $_ucp_friend_list_after_ = $context["ucp_friend_list_after"]; } else { $_ucp_friend_list_after_ = null; }
        // line 26
        echo "\t<dl>
\t\t<dt><label for=\"add\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("ADD_FRIENDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("ADD_FRIENDS_EXPLAIN");
        echo "</span></dt>
\t\t<dd><textarea name=\"add\" id=\"add\" rows=\"3\" cols=\"30\" class=\"inputbox\">";
        // line 28
        if (isset($context["USERNAMES"])) { $_USERNAMES_ = $context["USERNAMES"]; } else { $_USERNAMES_ = null; }
        echo $_USERNAMES_;
        echo "</textarea></dd>
\t\t<dd><strong><a href=\"";
        // line 29
        if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
        echo $_U_FIND_USERNAME_;
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</a></strong></dd>
\t</dl>
\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 37
        if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
        echo $_S_HIDDEN_FIELDS_;
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp; 
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 39
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

";
        // line 43
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_zebra_friends.html", 43)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_zebra_friends.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 43,  146 => 39,  142 => 38,  135 => 37,  121 => 29,  116 => 28,  109 => 27,  106 => 26,  104 => 25,  100 => 23,  94 => 21,  87 => 19,  84 => 18,  71 => 16,  68 => 15,  65 => 14,  57 => 13,  51 => 10,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
