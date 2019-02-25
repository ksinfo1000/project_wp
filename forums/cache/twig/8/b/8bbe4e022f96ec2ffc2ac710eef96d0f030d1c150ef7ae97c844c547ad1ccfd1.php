<?php

/* acp_contact.html */
class __TwigTemplate_8bbe4e022f96ec2ffc2ac710eef96d0f030d1c150ef7ae97c844c547ad1ccfd1 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_contact.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script type=\"text/javascript\">
// <![CDATA[

\tvar form_name = 'acp_contact';
\tvar text_name = 'contact_admin_info';
\tvar load_draft = false;
\tvar upload = false;
\tvar imageTag = false;

// ]]>
</script>

<a id=\"maincontent\"></a>

<h1>";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("ACP_CONTACT_SETTINGS");
        echo "</h1>

<p>";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("ACP_CONTACT_SETTINGS_EXPLAIN");
        echo "</p>

<form id=\"acp_contact\" method=\"post\" action=\"";
        // line 21
        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
        echo $_U_ACTION_;
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("GENERAL_OPTIONS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"contact_admin_form_enable\">";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("CONTACT_US_ENABLE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("CONTACT_US_ENABLE_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"contact_admin_form_enable\" name=\"contact_admin_form_enable\" value=\"1\"";
        // line 27
        if (isset($context["CONTACT_ENABLED"])) { $_CONTACT_ENABLED_ = $context["CONTACT_ENABLED"]; } else { $_CONTACT_ENABLED_ = null; }
        if ($_CONTACT_ENABLED_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("ENABLED");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"contact_admin_form_enable\" value=\"0\"";
        // line 28
        if (isset($context["CONTACT_ENABLED"])) { $_CONTACT_ENABLED_ = $context["CONTACT_ENABLED"]; } else { $_CONTACT_ENABLED_ = null; }
        if ( !$_CONTACT_ENABLED_) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("DISABLED");
        echo "</label>
\t\t\t</dd>
\t\t</dl>
\t</fieldset>

\t";
        // line 33
        if (isset($context["CONTACT_US_INFO_PREVIEW"])) { $_CONTACT_US_INFO_PREVIEW_ = $context["CONTACT_US_INFO_PREVIEW"]; } else { $_CONTACT_US_INFO_PREVIEW_ = null; }
        if ($_CONTACT_US_INFO_PREVIEW_) {
            // line 34
            echo "\t<fieldset>
\t\t<legend>";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US_INFO_PREVIEW");
            echo "</legend>
\t\t<p>";
            // line 36
            if (isset($context["CONTACT_US_INFO_PREVIEW"])) { $_CONTACT_US_INFO_PREVIEW_ = $context["CONTACT_US_INFO_PREVIEW"]; } else { $_CONTACT_US_INFO_PREVIEW_ = null; }
            echo $_CONTACT_US_INFO_PREVIEW_;
            echo "</p>
\t</fieldset>
\t";
        }
        // line 39
        echo "
\t<fieldset>
\t\t<legend>";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("CONTACT_US_INFO");
        echo "</legend>
\t\t<p>";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("CONTACT_US_INFO_EXPLAIN");
        echo "</p>

\t\t";
        // line 44
        $location = "acp_posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("acp_posting_buttons.html", "acp_contact.html", 44)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 45
        echo "
\t\t<dl class=\"responsive-columns\">
\t\t\t<dt style=\"width: 90px;\" id=\"color_palette_placeholder\" data-orientation=\"v\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\">
\t\t\t</dt>

\t\t\t<dd style=\"margin-";
        // line 50
        if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
        echo $_S_CONTENT_FLOW_BEGIN_;
        echo ": 90px;\">
\t\t\t\t<textarea name=\"contact_admin_info\" rows=\"10\" cols=\"60\" style=\"width: 95%;\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" data-bbcode=\"true\">";
        // line 51
        if (isset($context["CONTACT_US_INFO"])) { $_CONTACT_US_INFO_ = $context["CONTACT_US_INFO"]; } else { $_CONTACT_US_INFO_ = null; }
        echo $_CONTACT_US_INFO_;
        echo "</textarea>
\t\t\t</dd>

\t\t\t<dd style=\"margin-";
        // line 54
        if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
        echo $_S_CONTENT_FLOW_BEGIN_;
        echo ": 90px; margin-top: 5px;\">
\t\t\t\t";
        // line 55
        if (isset($context["S_BBCODE_ALLOWED"])) { $_S_BBCODE_ALLOWED_ = $context["S_BBCODE_ALLOWED"]; } else { $_S_BBCODE_ALLOWED_ = null; }
        if ($_S_BBCODE_ALLOWED_) {
            // line 56
            echo "\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_bbcode\"";
            if (isset($context["S_BBCODE_DISABLE_CHECKED"])) { $_S_BBCODE_DISABLE_CHECKED_ = $context["S_BBCODE_DISABLE_CHECKED"]; } else { $_S_BBCODE_DISABLE_CHECKED_ = null; }
            if ($_S_BBCODE_DISABLE_CHECKED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
            echo "</label>
\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t";
        if (isset($context["S_SMILIES_ALLOWED"])) { $_S_SMILIES_ALLOWED_ = $context["S_SMILIES_ALLOWED"]; } else { $_S_SMILIES_ALLOWED_ = null; }
        if ($_S_SMILIES_ALLOWED_) {
            // line 59
            echo "\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_smilies\"";
            if (isset($context["S_SMILIES_DISABLE_CHECKED"])) { $_S_SMILIES_DISABLE_CHECKED_ = $context["S_SMILIES_DISABLE_CHECKED"]; } else { $_S_SMILIES_DISABLE_CHECKED_ = null; }
            if ($_S_SMILIES_DISABLE_CHECKED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
            echo "</label>
\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t";
        if (isset($context["S_LINKS_ALLOWED"])) { $_S_LINKS_ALLOWED_ = $context["S_LINKS_ALLOWED"]; } else { $_S_LINKS_ALLOWED_ = null; }
        if ($_S_LINKS_ALLOWED_) {
            // line 62
            echo "\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"disable_magic_url\"";
            if (isset($context["S_MAGIC_URL_DISABLE_CHECKED"])) { $_S_MAGIC_URL_DISABLE_CHECKED_ = $context["S_MAGIC_URL_DISABLE_CHECKED"]; } else { $_S_MAGIC_URL_DISABLE_CHECKED_ = null; }
            if ($_S_MAGIC_URL_DISABLE_CHECKED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
            echo "</label>
\t\t\t\t";
        }
        // line 64
        echo "\t\t\t</dd>
\t\t\t<dd style=\"margin-";
        // line 65
        if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
        echo $_S_CONTENT_FLOW_BEGIN_;
        echo ": 90px; margin-top: 10px;\"><strong>";
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " </strong>";
        if (isset($context["BBCODE_STATUS"])) { $_BBCODE_STATUS_ = $context["BBCODE_STATUS"]; } else { $_BBCODE_STATUS_ = null; }
        echo $_BBCODE_STATUS_;
        echo " :: ";
        if (isset($context["IMG_STATUS"])) { $_IMG_STATUS_ = $context["IMG_STATUS"]; } else { $_IMG_STATUS_ = null; }
        echo $_IMG_STATUS_;
        echo " :: ";
        if (isset($context["FLASH_STATUS"])) { $_FLASH_STATUS_ = $context["FLASH_STATUS"]; } else { $_FLASH_STATUS_ = null; }
        echo $_FLASH_STATUS_;
        echo " :: ";
        if (isset($context["URL_STATUS"])) { $_URL_STATUS_ = $context["URL_STATUS"]; } else { $_URL_STATUS_ = null; }
        echo $_URL_STATUS_;
        echo " :: ";
        if (isset($context["SMILIES_STATUS"])) { $_SMILIES_STATUS_ = $context["SMILIES_STATUS"]; } else { $_SMILIES_STATUS_ = null; }
        echo $_SMILIES_STATUS_;
        echo "</dd>
\t\t</dl>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 70
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" name=\"preview\" value=\"";
        // line 71
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo "\" />
\t\t";
        // line 72
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
\t</fieldset>
</form>

";
        // line 76
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_contact.html", 76)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_contact.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 76,  247 => 72,  243 => 71,  239 => 70,  212 => 65,  209 => 64,  198 => 62,  194 => 61,  183 => 59,  179 => 58,  168 => 56,  165 => 55,  160 => 54,  153 => 51,  148 => 50,  141 => 45,  129 => 44,  124 => 42,  120 => 41,  116 => 39,  109 => 36,  105 => 35,  102 => 34,  99 => 33,  86 => 28,  77 => 27,  69 => 25,  64 => 23,  58 => 21,  53 => 19,  48 => 17,  31 => 2,  19 => 1,);
    }
}
