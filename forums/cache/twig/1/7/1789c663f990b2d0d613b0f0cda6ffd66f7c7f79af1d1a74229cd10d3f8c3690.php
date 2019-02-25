<?php

/* auth_provider_oauth.html */
class __TwigTemplate_1789c663f990b2d0d613b0f0cda6ffd66f7c7f79af1d1a74229cd10d3f8c3690 extends Twig_Template
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
        echo "
<div id=\"auth_oauth_settings\">
\t<p>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("AUTH_PROVIDER_OAUTH_EXPLAIN");
        echo "</p>

\t";
        // line 5
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "oauth_services", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["oauth_services"]) {
            // line 6
            echo "\t<fieldset>
\t\t<legend>";
            // line 7
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "ACTUAL_NAME", array());
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"oauth_service_";
            // line 9
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "NAME", array());
            echo "_key\">";
            echo $this->env->getExtension('phpbb')->lang("AUTH_PROVIDER_OAUTH_KEY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"text\" id=\"oauth_service_";
            // line 10
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "NAME", array());
            echo "_key\" size=\"40\" name=\"config[auth_oauth_";
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "NAME", array());
            echo "_key]\" value=\"";
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "KEY", array());
            echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"oauth_service_";
            // line 13
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "NAME", array());
            echo "_secret\">";
            echo $this->env->getExtension('phpbb')->lang("AUTH_PROVIDER_OAUTH_SECRET");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"text\" id=\"oauth_service_";
            // line 14
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "NAME", array());
            echo "_secret\" size=\"40\" name=\"config[auth_oauth_";
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "NAME", array());
            echo "_secret]\" value=\"";
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "SECRET", array());
            echo "\" /></dd>
\t\t</dl>
\t</fieldset>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oauth_services'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "auth_provider_oauth.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  71 => 14,  63 => 13,  50 => 10,  42 => 9,  36 => 7,  33 => 6,  28 => 5,  23 => 3,  19 => 1,);
    }
}
