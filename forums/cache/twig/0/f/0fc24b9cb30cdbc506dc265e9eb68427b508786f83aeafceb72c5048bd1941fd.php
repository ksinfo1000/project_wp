<?php

/* acp_jabber.html */
class __TwigTemplate_0fc24b9cb30cdbc506dc265e9eb68427b508786f83aeafceb72c5048bd1941fd extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_jabber.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_JABBER_SETTINGS");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_JABBER_SETTINGS_EXPLAIN");
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
<form id=\"acp_jabber\" method=\"post\" action=\"";
        // line 16
        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
        echo $_U_ACTION_;
        echo "\">

<fieldset>
\t<legend>";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("ACP_JABBER_SETTINGS");
        echo "</legend>
";
        // line 20
        if (isset($context["S_GTALK_NOTE"])) { $_S_GTALK_NOTE_ = $context["S_GTALK_NOTE"]; } else { $_S_GTALK_NOTE_ = null; }
        if ($_S_GTALK_NOTE_) {
            // line 21
            echo "\t<p>";
            echo $this->env->getExtension('phpbb')->lang("JAB_GTALK_NOTE");
            echo "</p>
";
        }
        // line 23
        echo "<dl>
\t<dt><label for=\"jab_enable\">";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("JAB_ENABLE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JAB_ENABLE_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"jab_enable\" name=\"jab_enable\" value=\"1\"";
        // line 25
        if (isset($context["JAB_ENABLE"])) { $_JAB_ENABLE_ = $context["JAB_ENABLE"]; } else { $_JAB_ENABLE_ = null; }
        if ($_JAB_ENABLE_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("ENABLED");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"jab_enable\" value=\"0\"";
        // line 26
        if (isset($context["JAB_ENABLE"])) { $_JAB_ENABLE_ = $context["JAB_ENABLE"]; } else { $_JAB_ENABLE_ = null; }
        if ( !$_JAB_ENABLE_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("DISABLED");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"jab_host\">";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("JAB_SERVER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JAB_SERVER_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"text\" id=\"jab_host\" name=\"jab_host\" value=\"";
        // line 30
        if (isset($context["JAB_HOST"])) { $_JAB_HOST_ = $context["JAB_HOST"]; } else { $_JAB_HOST_ = null; }
        echo $_JAB_HOST_;
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"jab_port\">";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("JAB_PORT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JAB_PORT_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"number\" id=\"jab_port\" name=\"jab_port\" value=\"";
        // line 34
        if (isset($context["JAB_PORT"])) { $_JAB_PORT_ = $context["JAB_PORT"]; } else { $_JAB_PORT_ = null; }
        echo $_JAB_PORT_;
        echo "\" maxlength=\"5\" size=\"5\" /></dd>
</dl>
<dl>
\t<dt><label for=\"jab_username\">";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("JAB_USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JAB_USERNAME_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"text\" id=\"jab_username\" name=\"jab_username\" value=\"";
        // line 38
        if (isset($context["JAB_USERNAME"])) { $_JAB_USERNAME_ = $context["JAB_USERNAME"]; } else { $_JAB_USERNAME_ = null; }
        echo $_JAB_USERNAME_;
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"jab_password\">";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("JAB_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JAB_PASSWORD_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"password\" id=\"jab_password\" name=\"jab_password\" value=\"";
        // line 42
        if (isset($context["JAB_PASSWORD"])) { $_JAB_PASSWORD_ = $context["JAB_PASSWORD"]; } else { $_JAB_PASSWORD_ = null; }
        echo $_JAB_PASSWORD_;
        echo "\" autocomplete=\"off\" /></dd>
</dl>
";
        // line 44
        if (isset($context["S_CAN_USE_SSL"])) { $_S_CAN_USE_SSL_ = $context["S_CAN_USE_SSL"]; } else { $_S_CAN_USE_SSL_ = null; }
        if ($_S_CAN_USE_SSL_) {
            // line 45
            echo "<dl>
\t<dt><label for=\"jab_use_ssl\">";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("JAB_USE_SSL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("JAB_USE_SSL_EXPLAIN");
            echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"jab_use_ssl\" name=\"jab_use_ssl\" value=\"1\"";
            // line 47
            if (isset($context["JAB_USE_SSL"])) { $_JAB_USE_SSL_ = $context["JAB_USE_SSL"]; } else { $_JAB_USE_SSL_ = null; }
            if ($_JAB_USE_SSL_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"jab_use_ssl\" value=\"0\"";
            // line 48
            if (isset($context["JAB_USE_SSL"])) { $_JAB_USE_SSL_ = $context["JAB_USE_SSL"]; } else { $_JAB_USE_SSL_ = null; }
            if ( !$_JAB_USE_SSL_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
</dl>
";
        }
        // line 51
        echo "<dl>
\t<dt><label for=\"jab_package_size\">";
        // line 52
        echo $this->env->getExtension('phpbb')->lang("JAB_PACKAGE_SIZE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JAB_PACKAGE_SIZE_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"number\" id=\"jab_package_size\" name=\"jab_package_size\" value=\"";
        // line 53
        if (isset($context["JAB_PACKAGE_SIZE"])) { $_JAB_PACKAGE_SIZE_ = $context["JAB_PACKAGE_SIZE"]; } else { $_JAB_PACKAGE_SIZE_ = null; }
        echo $_JAB_PACKAGE_SIZE_;
        echo "\" maxlength=\"5\" size=\"5\" min=\"0\" max=\"99999\" /></dd>
</dl>

</fieldset>

<fieldset class=\"submit-buttons\">
\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 59
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 60
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t";
        // line 61
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

";
        // line 65
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_jabber.html", 65)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_jabber.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 65,  232 => 61,  228 => 60,  224 => 59,  214 => 53,  207 => 52,  204 => 51,  193 => 48,  184 => 47,  177 => 46,  174 => 45,  171 => 44,  165 => 42,  158 => 41,  151 => 38,  144 => 37,  137 => 34,  130 => 33,  123 => 30,  116 => 29,  105 => 26,  96 => 25,  89 => 24,  86 => 23,  80 => 21,  77 => 20,  73 => 19,  66 => 16,  63 => 15,  56 => 12,  52 => 11,  49 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
