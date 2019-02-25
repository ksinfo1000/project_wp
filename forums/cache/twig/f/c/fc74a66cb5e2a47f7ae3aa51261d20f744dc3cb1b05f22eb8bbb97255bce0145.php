<?php

/* acp_board.html */
class __TwigTemplate_fc74a66cb5e2a47f7ae3aa51261d20f744dc3cb1b05f22eb8bbb97255bce0145 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_board.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("TITLE_EXPLAIN");
        echo "</p>

";
        // line 9
        if (isset($context["S_ERROR"])) { $_S_ERROR_ = $context["S_ERROR"]; } else { $_S_ERROR_ = null; }
        if ($_S_ERROR_) {
            // line 10
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 12
            if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
            echo $_ERROR_MSG_;
            echo "</p>
\t</div>
";
        }
        // line 15
        echo "
<form id=\"acp_board\" method=\"post\" action=\"";
        // line 16
        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
        echo $_U_ACTION_;
        echo "\">

";
        // line 18
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "options", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
            // line 19
            echo "\t";
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if ($this->getAttribute($_options_, "S_LEGEND", array())) {
                // line 20
                echo "\t\t";
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                if ( !$this->getAttribute($_options_, "S_FIRST_ROW", array())) {
                    // line 21
                    echo "\t\t\t</fieldset>
\t\t";
                }
                // line 23
                echo "\t\t<fieldset>
\t\t\t<legend>";
                // line 24
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                echo $this->getAttribute($_options_, "LEGEND", array());
                echo "</legend>
\t";
            } else {
                // line 26
                echo "
\t\t<dl>
\t\t\t<dt><label for=\"";
                // line 28
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                echo $this->getAttribute($_options_, "KEY", array());
                echo "\">";
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                echo $this->getAttribute($_options_, "TITLE", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>";
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                if ($this->getAttribute($_options_, "S_EXPLAIN", array())) {
                    echo "<br /><span>";
                    if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                    echo $this->getAttribute($_options_, "TITLE_EXPLAIN", array());
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 29
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                echo $this->getAttribute($_options_, "CONTENT", array());
                echo "</dd>
\t\t</dl>

\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
";
        // line 35
        if (isset($context["S_AUTH"])) { $_S_AUTH_ = $context["S_AUTH"]; } else { $_S_AUTH_ = null; }
        if ($_S_AUTH_) {
            // line 36
            echo "\t</fieldset>
\t";
            // line 37
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "auth_tpl", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["auth_tpl"]) {
                // line 38
                echo "\t\t";
                if (isset($context["auth_tpl"])) { $_auth_tpl_ = $context["auth_tpl"]; } else { $_auth_tpl_ = null; }
                $location = (("" . $this->getAttribute($_auth_tpl_, "TEMPLATE_FILE", array())) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . $this->getAttribute($_auth_tpl_, "TEMPLATE_FILE", array())) . ""), "acp_board.html", 38)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 39
                echo "\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auth_tpl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t<fieldset>
\t\t<legend>";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("ACP_SUBMIT_CHANGES");
            echo "</legend>
";
        }
        // line 43
        echo "
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t</p>
\t";
        // line 48
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

";
        // line 52
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_board.html", 52)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_board.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 52,  207 => 48,  202 => 46,  198 => 45,  194 => 43,  189 => 41,  186 => 40,  172 => 39,  158 => 38,  140 => 37,  137 => 36,  134 => 35,  131 => 34,  119 => 29,  102 => 28,  98 => 26,  92 => 24,  89 => 23,  85 => 21,  81 => 20,  77 => 19,  72 => 18,  66 => 16,  63 => 15,  56 => 12,  52 => 11,  49 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
