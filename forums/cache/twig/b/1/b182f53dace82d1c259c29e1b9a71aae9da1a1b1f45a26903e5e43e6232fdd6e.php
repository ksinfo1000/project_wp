<?php

/* acp_captcha.html */
class __TwigTemplate_b182f53dace82d1c259c29e1b9a71aae9da1a1b1f45a26903e5e43e6232fdd6e extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_captcha.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_VC_SETTINGS");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_VC_SETTINGS_EXPLAIN");
        echo "</p>

<p>";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("ACP_VC_EXT_GET_MORE");
        echo "</p>

";
        // line 11
        if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
        if ($_ERROR_MSG_) {
            // line 12
            echo "<div class=\"errorbox\">
\t<h3>";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t<p>";
            // line 14
            if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
            echo $_ERROR_MSG_;
            echo "</p>
</div>
";
        }
        // line 17
        echo "
<form id=\"acp_captcha\" method=\"post\" action=\"";
        // line 18
        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
        echo $_U_ACTION_;
        echo "\">

<fieldset>
<legend>";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("GENERAL_OPTIONS");
        echo "</legend>

<dl>
\t<dt><label for=\"enable_confirm\">";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("VISUAL_CONFIRM_REG");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("VISUAL_CONFIRM_REG_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"enable_confirm\" name=\"enable_confirm\" value=\"1\"";
        // line 25
        if (isset($context["REG_ENABLE"])) { $_REG_ENABLE_ = $context["REG_ENABLE"]; } else { $_REG_ENABLE_ = null; }
        if ($_REG_ENABLE_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("ENABLED");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_confirm\" value=\"0\"";
        // line 26
        if (isset($context["REG_ENABLE"])) { $_REG_ENABLE_ = $context["REG_ENABLE"]; } else { $_REG_ENABLE_ = null; }
        if ( !$_REG_ENABLE_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("DISABLED");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"max_reg_attempts\">";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("REG_LIMIT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("REG_LIMIT_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"max_reg_attempts\" type=\"number\" size=\"4\" maxlength=\"4\" min=\"0\" max=\"9999\" name=\"max_reg_attempts\" value=\"";
        // line 30
        if (isset($context["REG_LIMIT"])) { $_REG_LIMIT_ = $context["REG_LIMIT"]; } else { $_REG_LIMIT_ = null; }
        echo $_REG_LIMIT_;
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"max_login_attempts\">";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("MAX_LOGIN_ATTEMPTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("MAX_LOGIN_ATTEMPTS_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"max_login_attempts\" type=\"number\" size=\"4\" maxlength=\"4\" min=\"0\" max=\"9999\" name=\"max_login_attempts\" value=\"";
        // line 34
        if (isset($context["MAX_LOGIN_ATTEMPTS"])) { $_MAX_LOGIN_ATTEMPTS_ = $context["MAX_LOGIN_ATTEMPTS"]; } else { $_MAX_LOGIN_ATTEMPTS_ = null; }
        echo $_MAX_LOGIN_ATTEMPTS_;
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"enable_post_confirm\">";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("VISUAL_CONFIRM_POST");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("VISUAL_CONFIRM_POST_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"enable_post_confirm\" name=\"enable_post_confirm\" value=\"1\"";
        // line 38
        if (isset($context["POST_ENABLE"])) { $_POST_ENABLE_ = $context["POST_ENABLE"]; } else { $_POST_ENABLE_ = null; }
        if ($_POST_ENABLE_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("ENABLED");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_post_confirm\" value=\"0\"";
        // line 39
        if (isset($context["POST_ENABLE"])) { $_POST_ENABLE_ = $context["POST_ENABLE"]; } else { $_POST_ENABLE_ = null; }
        if ( !$_POST_ENABLE_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("DISABLED");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"confirm_refresh\">";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("VISUAL_CONFIRM_REFRESH");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("VISUAL_CONFIRM_REFRESH_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"confirm_refresh\" name=\"confirm_refresh\" value=\"1\"";
        // line 43
        if (isset($context["CONFIRM_REFRESH"])) { $_CONFIRM_REFRESH_ = $context["CONFIRM_REFRESH"]; } else { $_CONFIRM_REFRESH_ = null; }
        if ($_CONFIRM_REFRESH_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("ENABLED");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"confirm_refresh\" value=\"0\"";
        // line 44
        if (isset($context["CONFIRM_REFRESH"])) { $_CONFIRM_REFRESH_ = $context["CONFIRM_REFRESH"]; } else { $_CONFIRM_REFRESH_ = null; }
        if ( !$_CONFIRM_REFRESH_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("DISABLED");
        echo "</label></dd>
</dl>
</fieldset>

<fieldset>
<legend>";
        // line 49
        echo $this->env->getExtension('phpbb')->lang("AVAILABLE_CAPTCHAS");
        echo "</legend>
<dl>
\t<dt><label for=\"captcha_select\">";
        // line 51
        echo $this->env->getExtension('phpbb')->lang("CAPTCHA_SELECT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("CAPTCHA_SELECT_EXPLAIN");
        echo "</span></dt>
\t<dd><select id=\"captcha_select\" name=\"select_captcha\" onchange=\"(document.getElementById('acp_captcha')).submit()\" >";
        // line 52
        if (isset($context["CAPTCHA_SELECT"])) { $_CAPTCHA_SELECT_ = $context["CAPTCHA_SELECT"]; } else { $_CAPTCHA_SELECT_ = null; }
        echo $_CAPTCHA_SELECT_;
        echo "</select></dd>
</dl>
 ";
        // line 54
        if (isset($context["S_CAPTCHA_HAS_CONFIG"])) { $_S_CAPTCHA_HAS_CONFIG_ = $context["S_CAPTCHA_HAS_CONFIG"]; } else { $_S_CAPTCHA_HAS_CONFIG_ = null; }
        if ($_S_CAPTCHA_HAS_CONFIG_) {
            // line 55
            echo "<dl>
\t<dt><label for=\"configure\">";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("CAPTCHA_CONFIGURE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("CAPTCHA_CONFIGURE_EXPLAIN");
            echo "</span></dt>
\t<dd><input class=\"button2\" type=\"submit\" id=\"configure\" name=\"configure\" value=\"";
            // line 57
            echo $this->env->getExtension('phpbb')->lang("CONFIGURE");
            echo "\" /></dd>
</dl>
";
        }
        // line 60
        echo "</fieldset>

";
        // line 62
        if (isset($context["CAPTCHA_PREVIEW_TPL"])) { $_CAPTCHA_PREVIEW_TPL_ = $context["CAPTCHA_PREVIEW_TPL"]; } else { $_CAPTCHA_PREVIEW_TPL_ = null; }
        if ($_CAPTCHA_PREVIEW_TPL_) {
            // line 63
            echo "<fieldset>
\t<legend>";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("PREVIEW");
            echo "</legend>
";
            // line 65
            if (isset($context["CAPTCHA_PREVIEW_TPL"])) { $_CAPTCHA_PREVIEW_TPL_ = $context["CAPTCHA_PREVIEW_TPL"]; } else { $_CAPTCHA_PREVIEW_TPL_ = null; }
            $location = (("" . $_CAPTCHA_PREVIEW_TPL_) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . $_CAPTCHA_PREVIEW_TPL_) . ""), "acp_captcha.html", 65)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 66
            echo "</fieldset>
";
        }
        // line 68
        echo "
<fieldset>
\t<legend>";
        // line 70
        echo $this->env->getExtension('phpbb')->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"main_submit\" name=\"main_submit\" value=\"";
        // line 72
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"form_reset\" name=\"reset\" value=\"";
        // line 73
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />&nbsp;
\t</p>
\t";
        // line 75
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

";
        // line 79
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_captcha.html", 79)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_captcha.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 79,  281 => 75,  276 => 73,  272 => 72,  267 => 70,  263 => 68,  259 => 66,  246 => 65,  242 => 64,  239 => 63,  236 => 62,  232 => 60,  226 => 57,  219 => 56,  216 => 55,  213 => 54,  207 => 52,  200 => 51,  195 => 49,  182 => 44,  173 => 43,  166 => 42,  155 => 39,  146 => 38,  139 => 37,  132 => 34,  125 => 33,  118 => 30,  111 => 29,  100 => 26,  91 => 25,  84 => 24,  78 => 21,  71 => 18,  68 => 17,  61 => 14,  57 => 13,  54 => 12,  51 => 11,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
