<?php

/* acp_prune_users.html */
class __TwigTemplate_019c76a7e631b117cf9c632675d9adbda96d48a070e034ab12fb0e21ed392eaf extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_prune_users.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_USERS");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_USERS_EXPLAIN");
        echo "</p>

<form id=\"acp_prune\" method=\"post\" action=\"";
        // line 9
        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
        echo $_U_ACTION_;
        echo "\">
\t
<fieldset>
\t<legend>";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("CRITERIA");
        echo "</legend>
<dl>
\t<dt><label for=\"username\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><input type=\"text\" id=\"username\" name=\"username\" /></dd>
</dl>
<dl>
\t<dt><label for=\"email\">";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><input type=\"text\" id=\"email\" name=\"email\" /></dd>
</dl>
<dl>
\t<dt><label for=\"joined_after\">";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("JOINED_EXPLAIN");
        echo "</span></dt>
\t<dd>
\t\t<strong>";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("AFTER");
        echo "</strong> <input type=\"text\" id=\"joined_after\" name=\"joined_after\" />
\t\t<br /> <br /> <strong>";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("BEFORE");
        echo "</strong> <input type=\"text\" id=\"joined_before\" name=\"joined_before\" />
\t</dd>
</dl>
<dl>
\t<dt><label for=\"active\">";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE_EXPLAIN");
        echo "</span></dt>
\t<dd><select name=\"active_select\">";
        // line 30
        if (isset($context["S_ACTIVE_OPTIONS"])) { $_S_ACTIVE_OPTIONS_ = $context["S_ACTIVE_OPTIONS"]; } else { $_S_ACTIVE_OPTIONS_ = null; }
        echo $_S_ACTIVE_OPTIONS_;
        echo "</select> <input type=\"text\" id=\"active\" name=\"active\" /></dd>
</dl>
<dl>
\t<dt><label for=\"count\">";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><select name=\"count_select\">";
        // line 34
        if (isset($context["S_COUNT_OPTIONS"])) { $_S_COUNT_OPTIONS_ = $context["S_COUNT_OPTIONS"]; } else { $_S_COUNT_OPTIONS_ = null; }
        echo $_S_COUNT_OPTIONS_;
        echo "</select> <input type=\"number\" id=\"count\" name=\"count\" /></dd>
</dl>
<dl>
\t<dt><label for=\"posts_on_queue\">";
        // line 37
        echo $this->env->getExtension('phpbb')->lang("POSTS_ON_QUEUE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><select name=\"queue_select\">";
        // line 38
        if (isset($context["S_COUNT_OPTIONS"])) { $_S_COUNT_OPTIONS_ = $context["S_COUNT_OPTIONS"]; } else { $_S_COUNT_OPTIONS_ = null; }
        echo $_S_COUNT_OPTIONS_;
        echo "</select> <input type=\"number\" id=\"posts_on_queue\" name=\"posts_on_queue\" /></dd>
</dl>
";
        // line 40
        if (isset($context["S_GROUP_LIST"])) { $_S_GROUP_LIST_ = $context["S_GROUP_LIST"]; } else { $_S_GROUP_LIST_ = null; }
        if ($_S_GROUP_LIST_) {
            // line 41
            echo "<dl>
\t<dt><label for=\"group_id\">";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("GROUP");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("PRUNE_USERS_GROUP_EXPLAIN");
            echo "</span></dt>
\t<dd><select id=\"group_id\" name=\"group_id\">";
            // line 43
            if (isset($context["S_GROUP_LIST"])) { $_S_GROUP_LIST_ = $context["S_GROUP_LIST"]; } else { $_S_GROUP_LIST_ = null; }
            echo $_S_GROUP_LIST_;
            echo "</select></dd>
</dl>
";
        }
        // line 46
        echo "</fieldset>

<fieldset>
\t<legend>";
        // line 49
        echo $this->env->getExtension('phpbb')->lang("USERNAMES");
        echo "</legend>
<dl>
\t<dt><label for=\"users\">";
        // line 51
        echo $this->env->getExtension('phpbb')->lang("ACP_PRUNE_USERS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("SELECT_USERS_EXPLAIN");
        echo "</span></dt>
\t<dd><textarea id=\"users\" name=\"users\" cols=\"40\" rows=\"5\"></textarea></dd>
\t<dd>";
        // line 53
        if (isset($context["acp_prune_users_find_username_prepend"])) { $_acp_prune_users_find_username_prepend_ = $context["acp_prune_users_find_username_prepend"]; } else { $_acp_prune_users_find_username_prepend_ = null; }
        echo "[ <a href=\"";
        if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
        echo $_U_FIND_USERNAME_;
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</a> ]";
        if (isset($context["acp_prune_users_find_username_append"])) { $_acp_prune_users_find_username_append_ = $context["acp_prune_users_find_username_append"]; } else { $_acp_prune_users_find_username_append_ = null; }
        echo "</dd>
</dl>
</fieldset>

<fieldset>
\t<legend>";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo "</legend>
<dl>
\t<dt><label for=\"deleteposts\">";
        // line 60
        echo $this->env->getExtension('phpbb')->lang("DELETE_USER_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("DELETE_USER_POSTS_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" name=\"deleteposts\" value=\"1\" /> ";
        // line 61
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" id=\"deleteposts\" name=\"deleteposts\" value=\"0\" checked=\"checked\" /> ";
        // line 62
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"deactivate\">";
        // line 65
        echo $this->env->getExtension('phpbb')->lang("DEACTIVATE_DELETE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("DEACTIVATE_DELETE_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" name=\"action\" value=\"delete\" /> ";
        // line 66
        echo $this->env->getExtension('phpbb')->lang("DELETE_USERS");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" id=\"deactivate\" name=\"action\" value=\"deactivate\" checked=\"checked\" /> ";
        // line 67
        echo $this->env->getExtension('phpbb')->lang("DEACTIVATE");
        echo "</label></dd>
</dl>

<p class=\"submit-buttons\">
\t<input type=\"hidden\" name=\"prune\" value=\"1\" />

\t<input class=\"button1\" type=\"submit\" id=\"update\" name=\"update\" value=\"";
        // line 73
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 74
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t";
        // line 75
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</p>
</fieldset>
</form>

";
        // line 80
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_prune_users.html", 80)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_prune_users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 80,  233 => 75,  229 => 74,  225 => 73,  216 => 67,  212 => 66,  205 => 65,  199 => 62,  195 => 61,  188 => 60,  183 => 58,  168 => 53,  160 => 51,  155 => 49,  150 => 46,  143 => 43,  136 => 42,  133 => 41,  130 => 40,  124 => 38,  119 => 37,  112 => 34,  107 => 33,  100 => 30,  93 => 29,  86 => 25,  82 => 24,  74 => 22,  66 => 18,  58 => 14,  53 => 12,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
