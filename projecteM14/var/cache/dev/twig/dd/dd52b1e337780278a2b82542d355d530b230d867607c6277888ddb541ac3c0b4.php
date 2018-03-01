<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8142be88f30ddc2e15c390a592bfe4d1edcf12b006788748e7c1a989bb635821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a0719cb6176f36cb81429a374f26748ba220d3cccb6f334166e5a30c6a4ebc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0719cb6176f36cb81429a374f26748ba220d3cccb6f334166e5a30c6a4ebc6->enter($__internal_1a0719cb6176f36cb81429a374f26748ba220d3cccb6f334166e5a30c6a4ebc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e5928a11ff24997549d091597b0aec77421f7b8ba26a119fe2b54bfac7f17aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5928a11ff24997549d091597b0aec77421f7b8ba26a119fe2b54bfac7f17aaa->enter($__internal_e5928a11ff24997549d091597b0aec77421f7b8ba26a119fe2b54bfac7f17aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1a0719cb6176f36cb81429a374f26748ba220d3cccb6f334166e5a30c6a4ebc6->leave($__internal_1a0719cb6176f36cb81429a374f26748ba220d3cccb6f334166e5a30c6a4ebc6_prof);

        
        $__internal_e5928a11ff24997549d091597b0aec77421f7b8ba26a119fe2b54bfac7f17aaa->leave($__internal_e5928a11ff24997549d091597b0aec77421f7b8ba26a119fe2b54bfac7f17aaa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb5ecd2e72f72d9cc562ca64c20079fedb3b78c8c4cca32730916ef7f523a76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5ecd2e72f72d9cc562ca64c20079fedb3b78c8c4cca32730916ef7f523a76b->enter($__internal_cb5ecd2e72f72d9cc562ca64c20079fedb3b78c8c4cca32730916ef7f523a76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a315103a111a925dc347209de4aa5878f9664eddf4e0d207afe8fe91875a794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a315103a111a925dc347209de4aa5878f9664eddf4e0d207afe8fe91875a794->enter($__internal_5a315103a111a925dc347209de4aa5878f9664eddf4e0d207afe8fe91875a794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5a315103a111a925dc347209de4aa5878f9664eddf4e0d207afe8fe91875a794->leave($__internal_5a315103a111a925dc347209de4aa5878f9664eddf4e0d207afe8fe91875a794_prof);

        
        $__internal_cb5ecd2e72f72d9cc562ca64c20079fedb3b78c8c4cca32730916ef7f523a76b->leave($__internal_cb5ecd2e72f72d9cc562ca64c20079fedb3b78c8c4cca32730916ef7f523a76b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6249b51a0148630d40f8d5a977a993f68b4b16a80bafff6d3c667db2705de26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6249b51a0148630d40f8d5a977a993f68b4b16a80bafff6d3c667db2705de26d->enter($__internal_6249b51a0148630d40f8d5a977a993f68b4b16a80bafff6d3c667db2705de26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e2a604c53ccbc3675f3004ab9cdb0e7f61a2545c42b35254a7bf1aab3f2c3548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a604c53ccbc3675f3004ab9cdb0e7f61a2545c42b35254a7bf1aab3f2c3548->enter($__internal_e2a604c53ccbc3675f3004ab9cdb0e7f61a2545c42b35254a7bf1aab3f2c3548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e2a604c53ccbc3675f3004ab9cdb0e7f61a2545c42b35254a7bf1aab3f2c3548->leave($__internal_e2a604c53ccbc3675f3004ab9cdb0e7f61a2545c42b35254a7bf1aab3f2c3548_prof);

        
        $__internal_6249b51a0148630d40f8d5a977a993f68b4b16a80bafff6d3c667db2705de26d->leave($__internal_6249b51a0148630d40f8d5a977a993f68b4b16a80bafff6d3c667db2705de26d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b802176ee7841c9f28026ccc00e90474a8a365c55bc6f5a198811ea45bd50d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b802176ee7841c9f28026ccc00e90474a8a365c55bc6f5a198811ea45bd50d2a->enter($__internal_b802176ee7841c9f28026ccc00e90474a8a365c55bc6f5a198811ea45bd50d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_895d12bc6586e1ca545200864453628969c8ebbe661f7950e201ff52185ff196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895d12bc6586e1ca545200864453628969c8ebbe661f7950e201ff52185ff196->enter($__internal_895d12bc6586e1ca545200864453628969c8ebbe661f7950e201ff52185ff196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_895d12bc6586e1ca545200864453628969c8ebbe661f7950e201ff52185ff196->leave($__internal_895d12bc6586e1ca545200864453628969c8ebbe661f7950e201ff52185ff196_prof);

        
        $__internal_b802176ee7841c9f28026ccc00e90474a8a365c55bc6f5a198811ea45bd50d2a->leave($__internal_b802176ee7841c9f28026ccc00e90474a8a365c55bc6f5a198811ea45bd50d2a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/opt/lampp/htdocs/m14/symfony/projecteM14/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
