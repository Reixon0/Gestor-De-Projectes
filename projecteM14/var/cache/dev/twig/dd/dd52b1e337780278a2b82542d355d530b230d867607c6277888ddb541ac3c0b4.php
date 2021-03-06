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
        $__internal_2580829eb8797c42a70518348312a3819f237f46b3480a08e69e7fc3cc14fcbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2580829eb8797c42a70518348312a3819f237f46b3480a08e69e7fc3cc14fcbe->enter($__internal_2580829eb8797c42a70518348312a3819f237f46b3480a08e69e7fc3cc14fcbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1f06abe161acb87ea65cca1f68cb9428c1582c52078b8f7389daee4eebdf302d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f06abe161acb87ea65cca1f68cb9428c1582c52078b8f7389daee4eebdf302d->enter($__internal_1f06abe161acb87ea65cca1f68cb9428c1582c52078b8f7389daee4eebdf302d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_2580829eb8797c42a70518348312a3819f237f46b3480a08e69e7fc3cc14fcbe->leave($__internal_2580829eb8797c42a70518348312a3819f237f46b3480a08e69e7fc3cc14fcbe_prof);

        
        $__internal_1f06abe161acb87ea65cca1f68cb9428c1582c52078b8f7389daee4eebdf302d->leave($__internal_1f06abe161acb87ea65cca1f68cb9428c1582c52078b8f7389daee4eebdf302d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f13e5dffccd9965979fd99a75de62fa8673e8825e2fea268a85ce1f25da4bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f13e5dffccd9965979fd99a75de62fa8673e8825e2fea268a85ce1f25da4bc9->enter($__internal_3f13e5dffccd9965979fd99a75de62fa8673e8825e2fea268a85ce1f25da4bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0548e9750b555b0d290d9adc0b24b4f0ed937c11858825460deb622bff40c6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0548e9750b555b0d290d9adc0b24b4f0ed937c11858825460deb622bff40c6ae->enter($__internal_0548e9750b555b0d290d9adc0b24b4f0ed937c11858825460deb622bff40c6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0548e9750b555b0d290d9adc0b24b4f0ed937c11858825460deb622bff40c6ae->leave($__internal_0548e9750b555b0d290d9adc0b24b4f0ed937c11858825460deb622bff40c6ae_prof);

        
        $__internal_3f13e5dffccd9965979fd99a75de62fa8673e8825e2fea268a85ce1f25da4bc9->leave($__internal_3f13e5dffccd9965979fd99a75de62fa8673e8825e2fea268a85ce1f25da4bc9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e02ba18b9e56ad1b81a3009e6fea39e7ec2de3313357ec8d3dac06c93e2dbe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e02ba18b9e56ad1b81a3009e6fea39e7ec2de3313357ec8d3dac06c93e2dbe8->enter($__internal_8e02ba18b9e56ad1b81a3009e6fea39e7ec2de3313357ec8d3dac06c93e2dbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_11a05a6995d2277fa7f6b910d853ba4315c24adc1cc68268e80ab0f5e7bf14eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a05a6995d2277fa7f6b910d853ba4315c24adc1cc68268e80ab0f5e7bf14eb->enter($__internal_11a05a6995d2277fa7f6b910d853ba4315c24adc1cc68268e80ab0f5e7bf14eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_11a05a6995d2277fa7f6b910d853ba4315c24adc1cc68268e80ab0f5e7bf14eb->leave($__internal_11a05a6995d2277fa7f6b910d853ba4315c24adc1cc68268e80ab0f5e7bf14eb_prof);

        
        $__internal_8e02ba18b9e56ad1b81a3009e6fea39e7ec2de3313357ec8d3dac06c93e2dbe8->leave($__internal_8e02ba18b9e56ad1b81a3009e6fea39e7ec2de3313357ec8d3dac06c93e2dbe8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc59e9187a3b212b3ddb6fd04045294ef8fb94191596d3be68887af327a2592d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc59e9187a3b212b3ddb6fd04045294ef8fb94191596d3be68887af327a2592d->enter($__internal_dc59e9187a3b212b3ddb6fd04045294ef8fb94191596d3be68887af327a2592d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20a622c6350daa032eff5d0d58e31eef3a7e6573880bccd00395a64a4f34adf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a622c6350daa032eff5d0d58e31eef3a7e6573880bccd00395a64a4f34adf6->enter($__internal_20a622c6350daa032eff5d0d58e31eef3a7e6573880bccd00395a64a4f34adf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20a622c6350daa032eff5d0d58e31eef3a7e6573880bccd00395a64a4f34adf6->leave($__internal_20a622c6350daa032eff5d0d58e31eef3a7e6573880bccd00395a64a4f34adf6_prof);

        
        $__internal_dc59e9187a3b212b3ddb6fd04045294ef8fb94191596d3be68887af327a2592d->leave($__internal_dc59e9187a3b212b3ddb6fd04045294ef8fb94191596d3be68887af327a2592d_prof);

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
