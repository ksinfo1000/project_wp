<?php

/* memberlist_email.html */
class __TwigTemplate_255066c7385d042f10d8d3e2ab426eb6d7be4fad1e4a33327e931c474fd03d78 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_email.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (isset($context["S_CONTACT_ADMIN"])) { $_S_CONTACT_ADMIN_ = $context["S_CONTACT_ADMIN"]; } else { $_S_CONTACT_ADMIN_ = null; }
        if (isset($context["S_SEND_USER"])) { $_S_SEND_USER_ = $context["S_SEND_USER"]; } else { $_S_SEND_USER_ = null; }
        if ($_S_CONTACT_ADMIN_) {
            // line 4
            echo "<h2 class=\"titlespace\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_ADMIN");
            echo "</h2>
";
        } elseif ($_S_SEND_USER_) {
            // line 6
            echo "<h2 class=\"titlespace\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "</h2>
";
        } else {
            // line 8
            echo "<h2 class=\"titlespace\">";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
            echo "</h2>
";
        }
        // line 10
        echo "
<form method=\"post\" action=\"";
        // line 11
        if (isset($context["S_POST_ACTION"])) { $_S_POST_ACTION_ = $context["S_POST_ACTION"]; } else { $_S_POST_ACTION_ = null; }
        echo $_S_POST_ACTION_;
        echo "\" id=\"post\">

\t";
        // line 13
        if (isset($context["CONTACT_INFO"])) { $_CONTACT_INFO_ = $context["CONTACT_INFO"]; } else { $_CONTACT_INFO_ = null; }
        if ($_CONTACT_INFO_) {
            // line 14
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<div class=\"postbody\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t";
            // line 18
            if (isset($context["CONTACT_INFO"])) { $_CONTACT_INFO_ = $context["CONTACT_INFO"]; } else { $_CONTACT_INFO_ = null; }
            echo $_CONTACT_INFO_;
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<br class=\"clear\" />
\t";
        }
        // line 25
        echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t<div class=\"content\">

\t\t";
        // line 30
        if (isset($context["ERROR_MESSAGE"])) { $_ERROR_MESSAGE_ = $context["ERROR_MESSAGE"]; } else { $_ERROR_MESSAGE_ = null; }
        if ($_ERROR_MESSAGE_) {
            echo "<p class=\"error\">";
            if (isset($context["ERROR_MESSAGE"])) { $_ERROR_MESSAGE_ = $context["ERROR_MESSAGE"]; } else { $_ERROR_MESSAGE_ = null; }
            echo $_ERROR_MESSAGE_;
            echo "</p>";
        }
        // line 31
        echo "\t\t<fieldset class=\"fields2\">
\t\t";
        // line 32
        if (isset($context["S_SEND_USER"])) { $_S_SEND_USER_ = $context["S_SEND_USER"]; } else { $_S_SEND_USER_ = null; }
        if (isset($context["S_CONTACT_ADMIN"])) { $_S_CONTACT_ADMIN_ = $context["S_CONTACT_ADMIN"]; } else { $_S_CONTACT_ADMIN_ = null; }
        if ($_S_SEND_USER_) {
            // line 33
            echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 35
            if (isset($context["USERNAME_FULL"])) { $_USERNAME_FULL_ = $context["USERNAME_FULL"]; } else { $_USERNAME_FULL_ = null; }
            echo $_USERNAME_FULL_;
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"subject\">";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"1\" value=\"";
            // line 39
            if (isset($context["SUBJECT"])) { $_SUBJECT_ = $context["SUBJECT"]; } else { $_SUBJECT_ = null; }
            echo $_SUBJECT_;
            echo "\" /></dd>
\t\t\t</dl>
\t\t";
        } elseif ($_S_CONTACT_ADMIN_) {
            // line 42
            echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 44
            echo $this->env->getExtension('phpbb')->lang("ADMINISTRATOR");
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            // line 46
            if (isset($context["S_IS_REGISTERED"])) { $_S_IS_REGISTERED_ = $context["S_IS_REGISTERED"]; } else { $_S_IS_REGISTERED_ = null; }
            if ( !$_S_IS_REGISTERED_) {
                // line 47
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"email\">";
                // line 48
                echo $this->env->getExtension('phpbb')->lang("SENDER_EMAIL_ADDRESS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"1\" value=\"";
                // line 49
                if (isset($context["EMAIL"])) { $_EMAIL_ = $context["EMAIL"]; } else { $_EMAIL_ = null; }
                echo $_EMAIL_;
                echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"name\">";
                // line 52
                echo $this->env->getExtension('phpbb')->lang("SENDER_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"2\" value=\"";
                // line 53
                if (isset($context["NAME"])) { $_NAME_ = $context["NAME"]; } else { $_NAME_ = null; }
                echo $_NAME_;
                echo "\" /></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 56
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"subject\">";
            // line 57
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"3\" value=\"";
            // line 58
            if (isset($context["SUBJECT"])) { $_SUBJECT_ = $context["SUBJECT"]; } else { $_SUBJECT_ = null; }
            echo $_SUBJECT_;
            echo "\" /></dd>
\t\t\t</dl>
\t\t";
        } else {
            // line 61
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"email\">";
            // line 62
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"email\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"2\" value=\"";
            // line 63
            if (isset($context["EMAIL"])) { $_EMAIL_ = $context["EMAIL"]; } else { $_EMAIL_ = null; }
            echo $_EMAIL_;
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"name\">";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("REAL_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"3\" value=\"";
            // line 67
            if (isset($context["NAME"])) { $_NAME_ = $context["NAME"]; } else { $_NAME_ = null; }
            echo $_NAME_;
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang\">";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("DEST_LANG");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("DEST_LANG_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><select name=\"lang\">";
            // line 72
            if (isset($context["S_LANG_OPTIONS"])) { $_S_LANG_OPTIONS_ = $context["S_LANG_OPTIONS"]; } else { $_S_LANG_OPTIONS_ = null; }
            echo $_S_LANG_OPTIONS_;
            echo "</select></dd>
\t\t\t</dl>
\t\t";
        }
        // line 75
        echo "\t\t<dl>
\t\t\t<dt><label for=\"message\">";
        // line 76
        echo $this->env->getExtension('phpbb')->lang("MESSAGE_BODY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br />
\t\t\t<span>";
        // line 77
        echo $this->env->getExtension('phpbb')->lang("EMAIL_BODY_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><textarea class=\"inputbox\" name=\"message\" id=\"message\" rows=\"15\" cols=\"76\" tabindex=\"4\">";
        // line 78
        if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
        echo $_MESSAGE_;
        echo "</textarea></dd>
\t\t</dl>
\t\t";
        // line 80
        if (isset($context["S_REGISTERED_USER"])) { $_S_REGISTERED_USER_ = $context["S_REGISTERED_USER"]; } else { $_S_REGISTERED_USER_ = null; }
        if ($_S_REGISTERED_USER_) {
            // line 81
            echo "\t\t<dl>
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><label for=\"cc_sender\"><input type=\"checkbox\" name=\"cc_sender\" id=\"cc_sender\" value=\"1\" checked=\"checked\" tabindex=\"5\" /> ";
            // line 83
            echo $this->env->getExtension('phpbb')->lang("CC_SENDER");
            echo "</label></dd>
\t\t</dl>
\t\t";
        }
        // line 86
        echo "\t\t</fieldset>
\t</div>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">
\t<div class=\"content\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"submit\" tabindex=\"6\" name=\"submit\" class=\"button1\" value=\"";
        // line 96
        echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL");
        echo "\" />
\t\t</fieldset>
\t</div>
\t</div>
";
        // line 100
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</div>

</form>

";
        // line 105
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_email.html", 105)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 105,  285 => 100,  278 => 96,  266 => 86,  260 => 83,  256 => 81,  253 => 80,  247 => 78,  243 => 77,  238 => 76,  235 => 75,  228 => 72,  224 => 71,  219 => 70,  212 => 67,  207 => 66,  200 => 63,  195 => 62,  192 => 61,  185 => 58,  180 => 57,  177 => 56,  170 => 53,  165 => 52,  158 => 49,  153 => 48,  150 => 47,  147 => 46,  142 => 44,  137 => 43,  134 => 42,  127 => 39,  122 => 38,  115 => 35,  110 => 34,  107 => 33,  103 => 32,  100 => 31,  92 => 30,  85 => 25,  74 => 18,  68 => 14,  65 => 13,  59 => 11,  56 => 10,  50 => 8,  44 => 6,  38 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
