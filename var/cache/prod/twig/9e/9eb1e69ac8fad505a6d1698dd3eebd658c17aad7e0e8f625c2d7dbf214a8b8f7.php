<?php

/* @PrestaShop/Admin/Common/pagination_quicknav.html.twig */
class __TwigTemplate_167fc3ee39edce3fa8f59134bc529dcd793fe90c33a4e1a5eb2a5724e8f1ff18 extends Twig_Template
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
        // line 25
        if ((($context["previous_url"] ?? null) || ($context["next_url"] ?? null))) {
            // line 26
            echo "<nav>
    <ul class=\"pagination\">
        <li class=\"page-item ";
            // line 28
            if (($context["first_url"] ?? null)) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 29
            if (($context["first_url"] ?? null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["first_url"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">1</a>
        </li>
        <li class=\"page-item ";
            // line 31
            if (($context["previous_url"] ?? null)) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 32
            if (($context["previous_url"] ?? null)) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["previous_url"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" style=\"width: 4em;\"
                   value=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["current_page"] ?? null), "html", null, true);
            echo "\" psurl=\"";
            echo twig_escape_filter($this->env, ($context["jump_page_url"] ?? null), "html", null, true);
            echo "\" psmax=\"";
            echo twig_escape_filter($this->env, ($context["page_count"] ?? null), "html", null, true);
            echo "\" pslimit=\"";
            echo twig_escape_filter($this->env, ($context["limit"] ?? null), "html", null, true);
            echo "\" />
        </li>
        <li class=\"page-item ";
            // line 38
            if (((isset($context["next_url"]) || array_key_exists("next_url", $context)) && (($context["next_url"] ?? null) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" id=\"pagination_next_url\" ";
            // line 39
            if (((isset($context["next_url"]) || array_key_exists("next_url", $context)) && (($context["next_url"] ?? null) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["next_url"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&gt;</a>
        </li>
        <li class=\"page-item ";
            // line 41
            if (((isset($context["last_url"]) || array_key_exists("last_url", $context)) && (($context["last_url"] ?? null) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 42
            if (((isset($context["last_url"]) || array_key_exists("last_url", $context)) && (($context["last_url"] ?? null) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["last_url"] ?? null), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">";
            echo twig_escape_filter($this->env, ($context["page_count"] ?? null), "html", null, true);
            echo "</a>
        </li>
    </ul>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/pagination_quicknav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  92 => 41,  81 => 39,  74 => 38,  63 => 36,  50 => 32,  43 => 31,  32 => 29,  25 => 28,  21 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/pagination_quicknav.html.twig", "/opt/lampp/htdocs/elbarco/src/PrestaShopBundle/Resources/views/Admin/Common/pagination_quicknav.html.twig");
    }
}
