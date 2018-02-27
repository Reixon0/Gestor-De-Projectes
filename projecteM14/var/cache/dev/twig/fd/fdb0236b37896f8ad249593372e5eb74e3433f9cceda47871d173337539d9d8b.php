<?php

/* VallbonawebBundle:Default:article.html.twig */
class __TwigTemplate_22c0782307e51d57ac34e6766c3d6cca3d572ac78b9747e0139c16b291fae3be extends Twig_Template
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
        $__internal_8040d5e97d30a48352c0f1c2db61ccd0a3bbf901220eebda543b4465c0c34fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8040d5e97d30a48352c0f1c2db61ccd0a3bbf901220eebda543b4465c0c34fa7->enter($__internal_8040d5e97d30a48352c0f1c2db61ccd0a3bbf901220eebda543b4465c0c34fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonawebBundle:Default:article.html.twig"));

        $__internal_1f736e88b8dca13901cca4ba87af964bd5c22758c7e3907bd2d30212f83f983c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f736e88b8dca13901cca4ba87af964bd5c22758c7e3907bd2d30212f83f983c->enter($__internal_1f736e88b8dca13901cca4ba87af964bd5c22758c7e3907bd2d30212f83f983c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonawebBundle:Default:article.html.twig"));

        // line 1
        echo "Article amd id:  ";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo ", 
a = ";
        // line 2
        echo twig_escape_filter($this->env, ($context["a"] ?? $this->getContext($context, "a")), "html", null, true);
        echo "
b = ";
        // line 3
        echo twig_escape_filter($this->env, ($context["b"] ?? $this->getContext($context, "b")), "html", null, true);
        
        $__internal_8040d5e97d30a48352c0f1c2db61ccd0a3bbf901220eebda543b4465c0c34fa7->leave($__internal_8040d5e97d30a48352c0f1c2db61ccd0a3bbf901220eebda543b4465c0c34fa7_prof);

        
        $__internal_1f736e88b8dca13901cca4ba87af964bd5c22758c7e3907bd2d30212f83f983c->leave($__internal_1f736e88b8dca13901cca4ba87af964bd5c22758c7e3907bd2d30212f83f983c_prof);

    }

    public function getTemplateName()
    {
        return "VallbonawebBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Article amd id:  {{id}}, 
a = {{a}}
b = {{b}}", "VallbonawebBundle:Default:article.html.twig", "/opt/lampp/htdocs/m14/symfony/projecteM14/src/Vallbona/webBundle/Resources/views/Default/article.html.twig");
    }
}
