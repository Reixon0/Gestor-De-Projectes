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
        $__internal_6addcb2666bd4f03481e515de46aef085eb4bf377cbb6fc299ed4401794379ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6addcb2666bd4f03481e515de46aef085eb4bf377cbb6fc299ed4401794379ee->enter($__internal_6addcb2666bd4f03481e515de46aef085eb4bf377cbb6fc299ed4401794379ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_59e9e1ee21b644408bf32c8a1e729e878e00a3c4c40e7fdc941f1a529d609fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e9e1ee21b644408bf32c8a1e729e878e00a3c4c40e7fdc941f1a529d609fd1->enter($__internal_59e9e1ee21b644408bf32c8a1e729e878e00a3c4c40e7fdc941f1a529d609fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6addcb2666bd4f03481e515de46aef085eb4bf377cbb6fc299ed4401794379ee->leave($__internal_6addcb2666bd4f03481e515de46aef085eb4bf377cbb6fc299ed4401794379ee_prof);

        
        $__internal_59e9e1ee21b644408bf32c8a1e729e878e00a3c4c40e7fdc941f1a529d609fd1->leave($__internal_59e9e1ee21b644408bf32c8a1e729e878e00a3c4c40e7fdc941f1a529d609fd1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_14dd25e7a5f21a2754c4736b300635c3563fabbb343b379bce93f36ec0600616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14dd25e7a5f21a2754c4736b300635c3563fabbb343b379bce93f36ec0600616->enter($__internal_14dd25e7a5f21a2754c4736b300635c3563fabbb343b379bce93f36ec0600616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3e568e45a4a09d56c59389432d2c04f2126078a6e623b4ccb9135540d74e908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e568e45a4a09d56c59389432d2c04f2126078a6e623b4ccb9135540d74e908->enter($__internal_c3e568e45a4a09d56c59389432d2c04f2126078a6e623b4ccb9135540d74e908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c3e568e45a4a09d56c59389432d2c04f2126078a6e623b4ccb9135540d74e908->leave($__internal_c3e568e45a4a09d56c59389432d2c04f2126078a6e623b4ccb9135540d74e908_prof);

        
        $__internal_14dd25e7a5f21a2754c4736b300635c3563fabbb343b379bce93f36ec0600616->leave($__internal_14dd25e7a5f21a2754c4736b300635c3563fabbb343b379bce93f36ec0600616_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_aef424cfe923b0956c8e9b0f826ad541ba297db338a52809660b7030c3d9f580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef424cfe923b0956c8e9b0f826ad541ba297db338a52809660b7030c3d9f580->enter($__internal_aef424cfe923b0956c8e9b0f826ad541ba297db338a52809660b7030c3d9f580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c12aa9ba269725a0f26bc6f9c4817108ec6e026c061cd9d36122f20f9d392212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12aa9ba269725a0f26bc6f9c4817108ec6e026c061cd9d36122f20f9d392212->enter($__internal_c12aa9ba269725a0f26bc6f9c4817108ec6e026c061cd9d36122f20f9d392212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c12aa9ba269725a0f26bc6f9c4817108ec6e026c061cd9d36122f20f9d392212->leave($__internal_c12aa9ba269725a0f26bc6f9c4817108ec6e026c061cd9d36122f20f9d392212_prof);

        
        $__internal_aef424cfe923b0956c8e9b0f826ad541ba297db338a52809660b7030c3d9f580->leave($__internal_aef424cfe923b0956c8e9b0f826ad541ba297db338a52809660b7030c3d9f580_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2cca08ca22a4187c13e9e5ba611b2b13956efe2f789e3666516e6ccf94ba0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2cca08ca22a4187c13e9e5ba611b2b13956efe2f789e3666516e6ccf94ba0e6->enter($__internal_d2cca08ca22a4187c13e9e5ba611b2b13956efe2f789e3666516e6ccf94ba0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec8c009ef7dd8e9de878072e387ea987772ed19a5fbe1baf0f733b9d2760444c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8c009ef7dd8e9de878072e387ea987772ed19a5fbe1baf0f733b9d2760444c->enter($__internal_ec8c009ef7dd8e9de878072e387ea987772ed19a5fbe1baf0f733b9d2760444c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec8c009ef7dd8e9de878072e387ea987772ed19a5fbe1baf0f733b9d2760444c->leave($__internal_ec8c009ef7dd8e9de878072e387ea987772ed19a5fbe1baf0f733b9d2760444c_prof);

        
        $__internal_d2cca08ca22a4187c13e9e5ba611b2b13956efe2f789e3666516e6ccf94ba0e6->leave($__internal_d2cca08ca22a4187c13e9e5ba611b2b13956efe2f789e3666516e6ccf94ba0e6_prof);

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
