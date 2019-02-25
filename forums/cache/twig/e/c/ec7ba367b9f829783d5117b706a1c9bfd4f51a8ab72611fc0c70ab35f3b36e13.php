<?php

/* pagination.html */
class __TwigTemplate_ec7ba367b9f829783d5117b706a1c9bfd4f51a8ab72611fc0c70ab35f3b36e13 extends Twig_Template
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
        echo "<ul>
";
        // line 2
        if (isset($context["BASE_URL"])) { $_BASE_URL_ = $context["BASE_URL"]; } else { $_BASE_URL_ = null; }
        if (isset($context["TOTAL_PAGES"])) { $_TOTAL_PAGES_ = $context["TOTAL_PAGES"]; } else { $_TOTAL_PAGES_ = null; }
        if (($_BASE_URL_ && ($_TOTAL_PAGES_ > 6))) {
            // line 3
            echo "\t<li class=\"dropdown-container dropdown-button-control dropdown-page-jump page-jump\">
\t\t<a href=\"#\" class=\"dropdown-trigger\" title=\"";
            // line 4
            echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE_CLICK");
            echo "\" role=\"button\">";
            if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
            echo $_PAGE_NUMBER_;
            echo "</a>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t<li>";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</li>
\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" maxlength=\"6\" title=\"";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("JUMP_PAGE");
            echo "\" class=\"inputbox tiny\" data-per-page=\"";
            if (isset($context["PER_PAGE"])) { $_PER_PAGE_ = $context["PER_PAGE"]; } else { $_PER_PAGE_ = null; }
            echo $_PER_PAGE_;
            echo "\" data-base-url=\"";
            if (isset($context["BASE_URL"])) { $_BASE_URL_ = $context["BASE_URL"]; } else { $_BASE_URL_ = null; }
            echo twig_escape_filter($this->env, $_BASE_URL_, "html_attr");
            echo "\" data-start-name=\"";
            if (isset($context["START_NAME"])) { $_START_NAME_ = $context["START_NAME"]; } else { $_START_NAME_ = null; }
            echo $_START_NAME_;
            echo "\" />
\t\t\t\t\t<input class=\"button2\" value=\"";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" type=\"button\" />
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</li>
";
        }
        // line 17
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "pagination", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 18
            echo "\t";
            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
            if ($this->getAttribute($_pagination_, "S_IS_PREV", array())) {
                // line 19
                echo "\t<li class=\"previous\"><a href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo $this->getAttribute($_pagination_, "PAGE_URL", array());
                echo "\" rel=\"prev\" role=\"button\">";
                echo $this->env->getExtension('phpbb')->lang("PREVIOUS");
                echo "</a></li>
\t";
            } elseif ($this->getAttribute($_pagination_, "S_IS_CURRENT", array())) {
                // line 21
                echo "\t<li class=\"active\"><span>";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo $this->getAttribute($_pagination_, "PAGE_NUMBER", array());
                echo "</span></li>
\t";
            } elseif ($this->getAttribute($_pagination_, "S_IS_ELLIPSIS", array())) {
                // line 23
                echo "\t<li class=\"ellipsis\" role=\"separator\"><span>";
                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                echo "</span></li>
\t";
            } elseif ($this->getAttribute($_pagination_, "S_IS_NEXT", array())) {
                // line 25
                echo "\t<li class=\"next\"><a href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo $this->getAttribute($_pagination_, "PAGE_URL", array());
                echo "\" rel=\"next\" role=\"button\">";
                echo $this->env->getExtension('phpbb')->lang("NEXT");
                echo "</a></li>
\t";
            } else {
                // line 27
                echo "\t<li><a href=\"";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo $this->getAttribute($_pagination_, "PAGE_URL", array());
                echo "\" role=\"button\">";
                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                echo $this->getAttribute($_pagination_, "PAGE_NUMBER", array());
                echo "</a></li>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 30,  107 => 27,  98 => 25,  92 => 23,  85 => 21,  76 => 19,  72 => 18,  67 => 17,  58 => 11,  45 => 10,  39 => 8,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
