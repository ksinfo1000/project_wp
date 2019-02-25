<?php

/* ucp_groups_membership.html */
class __TwigTemplate_2b9341f0642adc374b9bbc4c3c89f96c121665431158ae0358c9a25f9cf98c79 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_groups_membership.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
        echo "</h2>

<form id=\"ucp\" method=\"post\" action=\"";
        // line 5
        if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
        echo $_S_UCP_ACTION_;
        echo "\"";
        if (isset($context["S_FORM_ENCTYPE"])) { $_S_FORM_ENCTYPE_ = $context["S_FORM_ENCTYPE"]; } else { $_S_FORM_ENCTYPE_ = null; }
        echo $_S_FORM_ENCTYPE_;
        echo ">

<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("GROUPS_EXPLAIN");
        echo "</p>
\t";
        // line 11
        if (isset($context["SHOW_BUTTONS"])) { $_SHOW_BUTTONS_ = $context["SHOW_BUTTONS"]; } else { $_SHOW_BUTTONS_ = null; }
        $value = 0;
        $context['definition']->set('SHOW_BUTTONS', $value);
        // line 12
        echo "\t";
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "leader", array()))) {
            // line 13
            echo "\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("SELECT");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-columns\">

\t\t";
            // line 23
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "leader", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                // line 24
                echo "\t\t";
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                if ( !$this->getAttribute($_leader_, "GROUP_SPECIAL", array())) {
                    // line 25
                    echo "\t\t\t";
                    if (isset($context["SHOW_BUTTONS"])) { $_SHOW_BUTTONS_ = $context["SHOW_BUTTONS"]; } else { $_SHOW_BUTTONS_ = null; }
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 26
                    echo "\t\t";
                }
                // line 27
                echo "\t\t<li class=\"row";
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                if (($this->getAttribute($_leader_, "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 31
                if (isset($context["S_CHANGE_DEFAULT"])) { $_S_CHANGE_DEFAULT_ = $context["S_CHANGE_DEFAULT"]; } else { $_S_CHANGE_DEFAULT_ = null; }
                if ($_S_CHANGE_DEFAULT_) {
                    echo "<input title=\"";
                    echo $this->env->getExtension('phpbb')->lang("CHANGE_DEFAULT_GROUP");
                    echo "\" type=\"radio\" name=\"default\"";
                    if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                    if ($this->getAttribute($_leader_, "S_GROUP_DEFAULT", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"";
                    if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                    echo $this->getAttribute($_leader_, "GROUP_ID", array());
                    echo "\" /> ";
                }
                // line 32
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                echo $this->getAttribute($_leader_, "U_VIEW_GROUP", array());
                echo "\" class=\"forumtitle\"";
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                if ($this->getAttribute($_leader_, "GROUP_COLOUR", array())) {
                    echo " style=\"color:#";
                    if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                    echo $this->getAttribute($_leader_, "GROUP_COLOUR", array());
                    echo "\"";
                }
                echo ">";
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                echo $this->getAttribute($_leader_, "GROUP_NAME", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 33
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                if ($this->getAttribute($_leader_, "GROUP_DESC", array())) {
                    echo "<br />";
                    if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                    echo $this->getAttribute($_leader_, "GROUP_DESC", array());
                }
                // line 34
                echo "\t\t\t\t\t\t";
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                if ( !$this->getAttribute($_leader_, "GROUP_SPECIAL", array())) {
                    echo "<br /><i>";
                    if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                    echo $this->getAttribute($_leader_, "GROUP_STATUS", array());
                    echo "</i>";
                }
                // line 35
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"mark\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 37
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                echo $this->getAttribute($_leader_, "GROUP_ID", array());
                echo "\" ";
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                if ($this->getAttribute($_leader_, "GROUP_SPECIAL", array())) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t</ul>
\t";
        }
        // line 43
        echo "
\t";
        // line 44
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "member", array()))) {
            // line 45
            echo "\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBER");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("SELECT");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-columns\">

\t\t";
            // line 55
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "member", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 56
                echo "\t\t";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ( !$this->getAttribute($_member_, "GROUP_SPECIAL", array())) {
                    // line 57
                    echo "\t\t\t";
                    if (isset($context["SHOW_BUTTONS"])) { $_SHOW_BUTTONS_ = $context["SHOW_BUTTONS"]; } else { $_SHOW_BUTTONS_ = null; }
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 58
                    echo "\t\t";
                }
                echo "\t\t
\t\t<li class=\"row";
                // line 59
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if (($this->getAttribute($_member_, "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 63
                if (isset($context["S_CHANGE_DEFAULT"])) { $_S_CHANGE_DEFAULT_ = $context["S_CHANGE_DEFAULT"]; } else { $_S_CHANGE_DEFAULT_ = null; }
                if ($_S_CHANGE_DEFAULT_) {
                    echo "<input title=\"";
                    echo $this->env->getExtension('phpbb')->lang("CHANGE_DEFAULT_GROUP");
                    echo "\" type=\"radio\" name=\"default\"";
                    if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                    if ($this->getAttribute($_member_, "S_GROUP_DEFAULT", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"";
                    if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                    echo $this->getAttribute($_member_, "GROUP_ID", array());
                    echo "\" /> ";
                }
                // line 64
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                echo $this->getAttribute($_member_, "U_VIEW_GROUP", array());
                echo "\" class=\"forumtitle\"";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ($this->getAttribute($_member_, "GROUP_COLOUR", array())) {
                    echo " style=\"color:#";
                    if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                    echo $this->getAttribute($_member_, "GROUP_COLOUR", array());
                    echo "\"";
                }
                echo ">";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                echo $this->getAttribute($_member_, "GROUP_NAME", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 65
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ($this->getAttribute($_member_, "GROUP_DESC", array())) {
                    echo "<br />";
                    if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                    echo $this->getAttribute($_member_, "GROUP_DESC", array());
                }
                // line 66
                echo "\t\t\t\t\t\t";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ( !$this->getAttribute($_member_, "GROUP_SPECIAL", array())) {
                    echo "<br /><i>";
                    if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                    echo $this->getAttribute($_member_, "GROUP_STATUS", array());
                    echo "</i>";
                }
                // line 67
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"mark\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 69
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                echo $this->getAttribute($_member_, "GROUP_ID", array());
                echo "\" ";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ($this->getAttribute($_member_, "GROUP_SPECIAL", array())) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t</ul>
\t";
        }
        // line 75
        echo "\t</div>
</div>\t

";
        // line 78
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pending", array()))) {
            // line 79
            echo "<div class=\"panel\">
\t<div class=\"inner\">\t
\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("GROUP_PENDING");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("SELECT");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-columns\">

\t\t";
            // line 91
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "pending", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pending"]) {
                // line 92
                echo "\t\t";
                if (isset($context["pending"])) { $_pending_ = $context["pending"]; } else { $_pending_ = null; }
                if ( !$this->getAttribute($_pending_, "GROUP_SPECIAL", array())) {
                    // line 93
                    echo "\t\t\t";
                    if (isset($context["SHOW_BUTTONS"])) { $_SHOW_BUTTONS_ = $context["SHOW_BUTTONS"]; } else { $_SHOW_BUTTONS_ = null; }
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 94
                    echo "\t\t";
                }
                echo "\t\t\t
\t\t<li class=\"row";
                // line 95
                if (isset($context["pending"])) { $_pending_ = $context["pending"]; } else { $_pending_ = null; }
                if (($this->getAttribute($_pending_, "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                // line 99
                if (isset($context["pending"])) { $_pending_ = $context["pending"]; } else { $_pending_ = null; }
                echo $this->getAttribute($_pending_, "U_VIEW_GROUP", array());
                echo "\" class=\"forumtitle\"";
                if (isset($context["pending"])) { $_pending_ = $context["pending"]; } else { $_pending_ = null; }
                if ($this->getAttribute($_pending_, "GROUP_COLOUR", array())) {
                    echo " style=\"color:#";
                    if (isset($context["pending"])) { $_pending_ = $context["pending"]; } else { $_pending_ = null; }
                    echo $this->getAttribute($_pending_, "GROUP_COLOUR", array());
                    echo "\"";
                }
                echo ">";
                if (isset($context["pending"])) { $_pending_ = $context["pending"]; } else { $_pending_ = null; }
                echo $this->getAttribute($_pending_, "GROUP_NAME", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 100
                if (isset($context["pending"])) { $_pending_ = $context["pending"]; } else { $_pending_ = null; }
                if ($this->getAttribute($_pending_, "GROUP_DESC", array())) {
                    echo "<br />";
                    if (isset($context["pending"])) { $_pending_ = $context["pending"]; } else { $_pending_ = null; }
                    echo $this->getAttribute($_pending_, "GROUP_DESC", array());
                }
                // line 101
                echo "\t\t\t\t\t\t";
                if (isset($context["pending"])) { $_pending_ = $context["pending"]; } else { $_pending_ = null; }
                if ( !$this->getAttribute($_pending_, "GROUP_SPECIAL", array())) {
                    echo "<br /><i>";
                    if (isset($context["pending"])) { $_pending_ = $context["pending"]; } else { $_pending_ = null; }
                    echo $this->getAttribute($_pending_, "GROUP_STATUS", array());
                    echo "</i>";
                }
                // line 102
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"mark\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 104
                if (isset($context["pending"])) { $_pending_ = $context["pending"]; } else { $_pending_ = null; }
                echo $this->getAttribute($_pending_, "GROUP_ID", array());
                echo "\" ";
                if (isset($context["pending"])) { $_pending_ = $context["pending"]; } else { $_pending_ = null; }
                if ($this->getAttribute($_pending_, "GROUP_SPECIAL", array())) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pending'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "\t\t</ul>
\t</div>
</div>
";
        }
        // line 112
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "nonmember", array()))) {
            // line 113
            echo "<div class=\"panel\">
\t<div class=\"inner\">
\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
            // line 118
            echo $this->env->getExtension('phpbb')->lang("GROUP_NONMEMBER");
            echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
            // line 119
            echo $this->env->getExtension('phpbb')->lang("SELECT");
            echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-columns\">

\t\t";
            // line 125
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "nonmember", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["nonmember"]) {
                // line 126
                echo "\t\t";
                if (isset($context["nonmember"])) { $_nonmember_ = $context["nonmember"]; } else { $_nonmember_ = null; }
                if ($this->getAttribute($_nonmember_, "S_CAN_JOIN", array())) {
                    // line 127
                    echo "\t\t\t";
                    if (isset($context["SHOW_BUTTONS"])) { $_SHOW_BUTTONS_ = $context["SHOW_BUTTONS"]; } else { $_SHOW_BUTTONS_ = null; }
                    $value = 1;
                    $context['definition']->set('SHOW_BUTTONS', $value);
                    // line 128
                    echo "\t\t";
                }
                echo "\t\t
\t\t<li class=\"row";
                // line 129
                if (isset($context["nonmember"])) { $_nonmember_ = $context["nonmember"]; } else { $_nonmember_ = null; }
                if (($this->getAttribute($_nonmember_, "S_ROW_COUNT", array()) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                // line 133
                if (isset($context["nonmember"])) { $_nonmember_ = $context["nonmember"]; } else { $_nonmember_ = null; }
                echo $this->getAttribute($_nonmember_, "U_VIEW_GROUP", array());
                echo "\" class=\"forumtitle\"";
                if (isset($context["nonmember"])) { $_nonmember_ = $context["nonmember"]; } else { $_nonmember_ = null; }
                if ($this->getAttribute($_nonmember_, "GROUP_COLOUR", array())) {
                    echo " style=\"color:#";
                    if (isset($context["nonmember"])) { $_nonmember_ = $context["nonmember"]; } else { $_nonmember_ = null; }
                    echo $this->getAttribute($_nonmember_, "GROUP_COLOUR", array());
                    echo "\"";
                }
                echo ">";
                if (isset($context["nonmember"])) { $_nonmember_ = $context["nonmember"]; } else { $_nonmember_ = null; }
                echo $this->getAttribute($_nonmember_, "GROUP_NAME", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 134
                if (isset($context["nonmember"])) { $_nonmember_ = $context["nonmember"]; } else { $_nonmember_ = null; }
                if ($this->getAttribute($_nonmember_, "GROUP_DESC", array())) {
                    echo "<br />";
                    if (isset($context["nonmember"])) { $_nonmember_ = $context["nonmember"]; } else { $_nonmember_ = null; }
                    echo $this->getAttribute($_nonmember_, "GROUP_DESC", array());
                }
                // line 135
                echo "\t\t\t\t\t\t";
                if (isset($context["nonmember"])) { $_nonmember_ = $context["nonmember"]; } else { $_nonmember_ = null; }
                if ( !$this->getAttribute($_nonmember_, "GROUP_SPECIAL", array())) {
                    echo "<br /><i>";
                    if (isset($context["nonmember"])) { $_nonmember_ = $context["nonmember"]; } else { $_nonmember_ = null; }
                    echo $this->getAttribute($_nonmember_, "GROUP_STATUS", array());
                    echo "</i>";
                }
                // line 136
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"mark\"><input type=\"radio\" name=\"selected\" value=\"";
                // line 138
                if (isset($context["nonmember"])) { $_nonmember_ = $context["nonmember"]; } else { $_nonmember_ = null; }
                echo $this->getAttribute($_nonmember_, "GROUP_ID", array());
                echo "\" ";
                if (isset($context["nonmember"])) { $_nonmember_ = $context["nonmember"]; } else { $_nonmember_ = null; }
                if ( !$this->getAttribute($_nonmember_, "S_CAN_JOIN", array())) {
                    echo "disabled=\"disabled\"";
                }
                echo " /></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nonmember'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t</ul>
\t\t</div>
\t</div>
";
        }
        // line 146
        echo "\t

\t";
        // line 148
        if (isset($context["S_CHANGE_DEFAULT"])) { $_S_CHANGE_DEFAULT_ = $context["S_CHANGE_DEFAULT"]; } else { $_S_CHANGE_DEFAULT_ = null; }
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if (($_S_CHANGE_DEFAULT_ || ($this->getAttribute($_definition_, "SHOW_BUTTONS", array()) == 1))) {
            // line 149
            echo "\t<fieldset>
\t\t";
            // line 150
            if (isset($context["S_CHANGE_DEFAULT"])) { $_S_CHANGE_DEFAULT_ = $context["S_CHANGE_DEFAULT"]; } else { $_S_CHANGE_DEFAULT_ = null; }
            if ($_S_CHANGE_DEFAULT_) {
                // line 151
                echo "\t\t<div class=\"left-box\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"change_default\" value=\"";
                // line 152
                echo $this->env->getExtension('phpbb')->lang("CHANGE_DEFAULT_GROUP");
                echo "\" />
\t\t\t";
                // line 153
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t</div>
\t\t";
            }
            // line 156
            echo "
\t\t";
            // line 157
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            if (($this->getAttribute($_definition_, "SHOW_BUTTONS", array()) == 1)) {
                // line 158
                echo "\t\t<div class=\"right-box\">
\t\t\t<label for=\"action\">";
                // line 159
                echo $this->env->getExtension('phpbb')->lang("SELECT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label> 
\t\t\t<select name=\"action\" id=\"action\">
\t\t\t\t<option value=\"join\">";
                // line 161
                echo $this->env->getExtension('phpbb')->lang("JOIN_SELECTED");
                echo "</option>
\t\t\t\t<option value=\"resign\">";
                // line 162
                echo $this->env->getExtension('phpbb')->lang("RESIGN_SELECTED");
                echo "</option>
\t\t\t\t<option value=\"demote\">";
                // line 163
                echo $this->env->getExtension('phpbb')->lang("DEMOTE_SELECTED");
                echo "</option>
\t\t\t</select>&nbsp;
\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                // line 165
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />
\t\t\t";
                // line 166
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t</div>
\t\t";
            }
            // line 169
            echo "\t</fieldset>
\t";
        }
        // line 171
        echo "
</form>

";
        // line 174
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_groups_membership.html", 174)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_groups_membership.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 174,  610 => 171,  606 => 169,  599 => 166,  595 => 165,  590 => 163,  586 => 162,  582 => 161,  576 => 159,  573 => 158,  570 => 157,  567 => 156,  560 => 153,  556 => 152,  553 => 151,  550 => 150,  547 => 149,  543 => 148,  539 => 146,  533 => 142,  517 => 138,  513 => 136,  504 => 135,  497 => 134,  481 => 133,  469 => 129,  464 => 128,  459 => 127,  455 => 126,  450 => 125,  441 => 119,  437 => 118,  430 => 113,  427 => 112,  421 => 108,  405 => 104,  401 => 102,  392 => 101,  385 => 100,  369 => 99,  357 => 95,  352 => 94,  347 => 93,  343 => 92,  338 => 91,  329 => 85,  325 => 84,  318 => 79,  315 => 78,  310 => 75,  306 => 73,  290 => 69,  286 => 67,  277 => 66,  270 => 65,  253 => 64,  238 => 63,  226 => 59,  221 => 58,  216 => 57,  212 => 56,  207 => 55,  198 => 49,  194 => 48,  189 => 45,  186 => 44,  183 => 43,  179 => 41,  163 => 37,  159 => 35,  150 => 34,  143 => 33,  126 => 32,  111 => 31,  98 => 27,  95 => 26,  90 => 25,  86 => 24,  81 => 23,  72 => 17,  68 => 16,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
