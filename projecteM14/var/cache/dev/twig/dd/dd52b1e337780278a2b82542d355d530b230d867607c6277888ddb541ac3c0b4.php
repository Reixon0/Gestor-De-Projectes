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
        $__internal_8573621495f077c15297c58e331a188a5583952aa0db65da46b59c0bdd210738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8573621495f077c15297c58e331a188a5583952aa0db65da46b59c0bdd210738->enter($__internal_8573621495f077c15297c58e331a188a5583952aa0db65da46b59c0bdd210738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9d454b42ee3fda4b0119897d0c08c77b3600a6da934bab36964ad163b50cfee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d454b42ee3fda4b0119897d0c08c77b3600a6da934bab36964ad163b50cfee9->enter($__internal_9d454b42ee3fda4b0119897d0c08c77b3600a6da934bab36964ad163b50cfee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8573621495f077c15297c58e331a188a5583952aa0db65da46b59c0bdd210738->leave($__internal_8573621495f077c15297c58e331a188a5583952aa0db65da46b59c0bdd210738_prof);

        
        $__internal_9d454b42ee3fda4b0119897d0c08c77b3600a6da934bab36964ad163b50cfee9->leave($__internal_9d454b42ee3fda4b0119897d0c08c77b3600a6da934bab36964ad163b50cfee9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1da0323bac9361d5fcf4de40b14adb2dd977fd35e36ec3f47b7cb8330752888d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da0323bac9361d5fcf4de40b14adb2dd977fd35e36ec3f47b7cb8330752888d->enter($__internal_1da0323bac9361d5fcf4de40b14adb2dd977fd35e36ec3f47b7cb8330752888d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_603ffdf312c768dae07f1a505f83f156fd8a3c417b6d0e8c3b78094e3fff0dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603ffdf312c768dae07f1a505f83f156fd8a3c417b6d0e8c3b78094e3fff0dfd->enter($__internal_603ffdf312c768dae07f1a505f83f156fd8a3c417b6d0e8c3b78094e3fff0dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_603ffdf312c768dae07f1a505f83f156fd8a3c417b6d0e8c3b78094e3fff0dfd->leave($__internal_603ffdf312c768dae07f1a505f83f156fd8a3c417b6d0e8c3b78094e3fff0dfd_prof);

        
        $__internal_1da0323bac9361d5fcf4de40b14adb2dd977fd35e36ec3f47b7cb8330752888d->leave($__internal_1da0323bac9361d5fcf4de40b14adb2dd977fd35e36ec3f47b7cb8330752888d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c7a7c74f357d724269b2867985609ebfb0eb2fc48165ffaa71074d83c4b76eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7a7c74f357d724269b2867985609ebfb0eb2fc48165ffaa71074d83c4b76eb->enter($__internal_8c7a7c74f357d724269b2867985609ebfb0eb2fc48165ffaa71074d83c4b76eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f158ef9f3bbec303103b74f102504dd4463a61908250849d1fb3d74f7bffbe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f158ef9f3bbec303103b74f102504dd4463a61908250849d1fb3d74f7bffbe3->enter($__internal_7f158ef9f3bbec303103b74f102504dd4463a61908250849d1fb3d74f7bffbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7f158ef9f3bbec303103b74f102504dd4463a61908250849d1fb3d74f7bffbe3->leave($__internal_7f158ef9f3bbec303103b74f102504dd4463a61908250849d1fb3d74f7bffbe3_prof);

        
        $__internal_8c7a7c74f357d724269b2867985609ebfb0eb2fc48165ffaa71074d83c4b76eb->leave($__internal_8c7a7c74f357d724269b2867985609ebfb0eb2fc48165ffaa71074d83c4b76eb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e410a27d03bd79f3e62ad331bd2a83b00f1ea0d5744e8360d33b7617cdb0235a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e410a27d03bd79f3e62ad331bd2a83b00f1ea0d5744e8360d33b7617cdb0235a->enter($__internal_e410a27d03bd79f3e62ad331bd2a83b00f1ea0d5744e8360d33b7617cdb0235a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13db3c26aa2ec1918e56370661694528fb907bda81774a04a56d411ec684ca7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13db3c26aa2ec1918e56370661694528fb907bda81774a04a56d411ec684ca7e->enter($__internal_13db3c26aa2ec1918e56370661694528fb907bda81774a04a56d411ec684ca7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_13db3c26aa2ec1918e56370661694528fb907bda81774a04a56d411ec684ca7e->leave($__internal_13db3c26aa2ec1918e56370661694528fb907bda81774a04a56d411ec684ca7e_prof);

        
        $__internal_e410a27d03bd79f3e62ad331bd2a83b00f1ea0d5744e8360d33b7617cdb0235a->leave($__internal_e410a27d03bd79f3e62ad331bd2a83b00f1ea0d5744e8360d33b7617cdb0235a_prof);

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
