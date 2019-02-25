<?php

/* acp_email.html */
class __TwigTemplate_702755da3b31f15bf8093bcbae5abfc3c4473806a8b0fad5f453c0780f8aa2f6 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_email.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_MASS_EMAIL");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_MASS_EMAIL_EXPLAIN");
        echo "</p>

";
        // line 9
        if (isset($context["S_WARNING"])) { $_S_WARNING_ = $context["S_WARNING"]; } else { $_S_WARNING_ = null; }
        if ($_S_WARNING_) {
            // line 10
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 12
            if (isset($context["WARNING_MSG"])) { $_WARNING_MSG_ = $context["WARNING_MSG"]; } else { $_WARNING_MSG_ = null; }
            echo $_WARNING_MSG_;
            echo "</p>
\t</div>
";
        }
        // line 15
        echo "
<form id=\"acp_email\" method=\"post\" action=\"";
        // line 16
        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
        echo $_U_ACTION_;
        echo "\">

<fieldset>
\t<legend>";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("COMPOSE");
        echo "</legend>
<dl>
\t<dt><label for=\"group\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("SEND_TO_GROUP");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t";
        // line 22
        if (isset($context["acp_email_group_options_prepend"])) { $_acp_email_group_options_prepend_ = $context["acp_email_group_options_prepend"]; } else { $_acp_email_group_options_prepend_ = null; }
        // line 23
        echo "\t<dd><select id=\"group\" name=\"g\">";
        if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
        echo $_S_GROUP_OPTIONS_;
        echo "</select></dd>
\t";
        // line 24
        if (isset($context["acp_email_group_options_append"])) { $_acp_email_group_options_append_ = $context["acp_email_group_options_append"]; } else { $_acp_email_group_options_append_ = null; }
        // line 25
        echo "</dl>
<dl>
\t<dt><label for=\"usernames\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("SEND_TO_USERS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("SEND_TO_USERS_EXPLAIN");
        echo "</span></dt>
\t<dd><textarea name=\"usernames\" id=\"usernames\" rows=\"5\" cols=\"40\">";
        // line 28
        if (isset($context["USERNAMES"])) { $_USERNAMES_ = $context["USERNAMES"]; } else { $_USERNAMES_ = null; }
        echo $_USERNAMES_;
        echo "</textarea></dd>
\t<dd>";
        // line 29
        if (isset($context["acp_email_find_username_prepend"])) { $_acp_email_find_username_prepend_ = $context["acp_email_find_username_prepend"]; } else { $_acp_email_find_username_prepend_ = null; }
        echo "[ <a href=\"";
        if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
        echo $_U_FIND_USERNAME_;
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</a> ]";
        if (isset($context["acp_email_find_username_append"])) { $_acp_email_find_username_append_ = $context["acp_email_find_username_append"]; } else { $_acp_email_find_username_append_ = null; }
        echo "</dd>
</dl>
<dl>
\t<dt><label for=\"subject\">";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("SUBJECT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><input name=\"subject\" type=\"text\" id=\"subject\" value=\"";
        // line 33
        if (isset($context["SUBJECT"])) { $_SUBJECT_ = $context["SUBJECT"]; } else { $_SUBJECT_ = null; }
        echo $_SUBJECT_;
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"message\">";
        // line 36
        echo $this->env->getExtension('phpbb')->lang("MASS_MESSAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("MASS_MESSAGE_EXPLAIN");
        echo "</span></dt>
\t<dd><textarea id=\"message\" name=\"message\" rows=\"10\" cols=\"60\">";
        // line 37
        if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
        echo $_MESSAGE_;
        echo "</textarea></dd>
</dl>
<dl>
\t<dt><label for=\"priority\">";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("MAIL_PRIORITY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><select id=\"priority\" name=\"mail_priority_flag\">";
        // line 41
        if (isset($context["S_PRIORITY_OPTIONS"])) { $_S_PRIORITY_OPTIONS_ = $context["S_PRIORITY_OPTIONS"]; } else { $_S_PRIORITY_OPTIONS_ = null; }
        echo $_S_PRIORITY_OPTIONS_;
        echo "</select></dd>
</dl>
<dl>
\t<dt><label for=\"banned\">";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("MAIL_BANNED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("MAIL_BANNED_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"banned\" name=\"mail_banned_flag\" type=\"checkbox\" class=\"radio\" /></dd>
</dl>
<dl>
\t<dt><label for=\"send\">";
        // line 48
        echo $this->env->getExtension('phpbb')->lang("SEND_IMMEDIATELY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><input id=\"send\" type=\"checkbox\" class=\"radio\" name=\"send_immediately\" checked=\"checked\" /></dd>
</dl>

";
        // line 52
        if (isset($context["acp_email_options_after"])) { $_acp_email_options_after_ = $context["acp_email_options_after"]; } else { $_acp_email_options_after_ = null; }
        // line 53
        echo "
<p class=\"submit-buttons\">
\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 55
        echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL");
        echo "\" />&nbsp;
\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
</p>
";
        // line 58
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

";
        // line 62
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_email.html", 62)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 62,  193 => 58,  188 => 56,  184 => 55,  180 => 53,  178 => 52,  170 => 48,  160 => 44,  153 => 41,  148 => 40,  141 => 37,  134 => 36,  127 => 33,  122 => 32,  109 => 29,  104 => 28,  97 => 27,  93 => 25,  91 => 24,  85 => 23,  83 => 22,  78 => 21,  73 => 19,  66 => 16,  63 => 15,  56 => 12,  52 => 11,  49 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
