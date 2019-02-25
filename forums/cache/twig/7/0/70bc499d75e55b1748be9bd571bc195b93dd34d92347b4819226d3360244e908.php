<?php

/* message_body.html */
class __TwigTemplate_70bc499d75e55b1748be9bd571bc195b93dd34d92347b4819226d3360244e908 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "message_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div ";
        // line 3
        if (isset($context["S_USER_NOTICE"])) { $_S_USER_NOTICE_ = $context["S_USER_NOTICE"]; } else { $_S_USER_NOTICE_ = null; }
        if ($_S_USER_NOTICE_) {
            echo "class=\"successbox\"";
        } else {
            echo "class=\"errorbox\"";
        }
        echo ">
\t<h3>";
        // line 4
        if (isset($context["MESSAGE_TITLE"])) { $_MESSAGE_TITLE_ = $context["MESSAGE_TITLE"]; } else { $_MESSAGE_TITLE_ = null; }
        echo $_MESSAGE_TITLE_;
        echo "</h3>
\t<p>";
        // line 5
        if (isset($context["MESSAGE_TEXT"])) { $_MESSAGE_TEXT_ = $context["MESSAGE_TEXT"]; } else { $_MESSAGE_TEXT_ = null; }
        echo $_MESSAGE_TEXT_;
        echo "</p>
</div>

";
        // line 8
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "message_body.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "message_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  48 => 5,  43 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
