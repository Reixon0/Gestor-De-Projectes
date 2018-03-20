<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6bdc415026468751b0fd3b8ea4bb5b8b9e992dbfca85e1c86f20068b91fbe660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb32b39f8d183b911433002b426dfe4acc9e2fb6aae9c2743b7f2068dc274bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb32b39f8d183b911433002b426dfe4acc9e2fb6aae9c2743b7f2068dc274bb1->enter($__internal_fb32b39f8d183b911433002b426dfe4acc9e2fb6aae9c2743b7f2068dc274bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1296e222bedb6bc76fa4c0d8a340d639d0123450118ff98f5d22dbba6eaa21e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1296e222bedb6bc76fa4c0d8a340d639d0123450118ff98f5d22dbba6eaa21e6->enter($__internal_1296e222bedb6bc76fa4c0d8a340d639d0123450118ff98f5d22dbba6eaa21e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb32b39f8d183b911433002b426dfe4acc9e2fb6aae9c2743b7f2068dc274bb1->leave($__internal_fb32b39f8d183b911433002b426dfe4acc9e2fb6aae9c2743b7f2068dc274bb1_prof);

        
        $__internal_1296e222bedb6bc76fa4c0d8a340d639d0123450118ff98f5d22dbba6eaa21e6->leave($__internal_1296e222bedb6bc76fa4c0d8a340d639d0123450118ff98f5d22dbba6eaa21e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_367e49c402ecf92b5559b1e7b3bdda37c33bd26d3fba688677ca7c8e1e5fe082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367e49c402ecf92b5559b1e7b3bdda37c33bd26d3fba688677ca7c8e1e5fe082->enter($__internal_367e49c402ecf92b5559b1e7b3bdda37c33bd26d3fba688677ca7c8e1e5fe082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f8c1a2ccce9778349399b75e9e9efb97401f398c2b92db70eca08f218a4cf8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c1a2ccce9778349399b75e9e9efb97401f398c2b92db70eca08f218a4cf8f7->enter($__internal_f8c1a2ccce9778349399b75e9e9efb97401f398c2b92db70eca08f218a4cf8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f8c1a2ccce9778349399b75e9e9efb97401f398c2b92db70eca08f218a4cf8f7->leave($__internal_f8c1a2ccce9778349399b75e9e9efb97401f398c2b92db70eca08f218a4cf8f7_prof);

        
        $__internal_367e49c402ecf92b5559b1e7b3bdda37c33bd26d3fba688677ca7c8e1e5fe082->leave($__internal_367e49c402ecf92b5559b1e7b3bdda37c33bd26d3fba688677ca7c8e1e5fe082_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67d95423acbaf53fd3f07e7a7252aaee5f9060bd25ee3e219ce31278bde1f95a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d95423acbaf53fd3f07e7a7252aaee5f9060bd25ee3e219ce31278bde1f95a->enter($__internal_67d95423acbaf53fd3f07e7a7252aaee5f9060bd25ee3e219ce31278bde1f95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3f2598068f66aa8ecdda030ea60fdb2e16c003773beecedc9f6c883d9694c316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2598068f66aa8ecdda030ea60fdb2e16c003773beecedc9f6c883d9694c316->enter($__internal_3f2598068f66aa8ecdda030ea60fdb2e16c003773beecedc9f6c883d9694c316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3f2598068f66aa8ecdda030ea60fdb2e16c003773beecedc9f6c883d9694c316->leave($__internal_3f2598068f66aa8ecdda030ea60fdb2e16c003773beecedc9f6c883d9694c316_prof);

        
        $__internal_67d95423acbaf53fd3f07e7a7252aaee5f9060bd25ee3e219ce31278bde1f95a->leave($__internal_67d95423acbaf53fd3f07e7a7252aaee5f9060bd25ee3e219ce31278bde1f95a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b788f3d50720624980d9527f31ac3a553b41e4eb61ecf5dfaa0fe22d4a65227a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b788f3d50720624980d9527f31ac3a553b41e4eb61ecf5dfaa0fe22d4a65227a->enter($__internal_b788f3d50720624980d9527f31ac3a553b41e4eb61ecf5dfaa0fe22d4a65227a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a60310f935749331ddfaf0a5d27c42f3a489ff993e5cfb1dabe2efff2006657e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60310f935749331ddfaf0a5d27c42f3a489ff993e5cfb1dabe2efff2006657e->enter($__internal_a60310f935749331ddfaf0a5d27c42f3a489ff993e5cfb1dabe2efff2006657e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a60310f935749331ddfaf0a5d27c42f3a489ff993e5cfb1dabe2efff2006657e->leave($__internal_a60310f935749331ddfaf0a5d27c42f3a489ff993e5cfb1dabe2efff2006657e_prof);

        
        $__internal_b788f3d50720624980d9527f31ac3a553b41e4eb61ecf5dfaa0fe22d4a65227a->leave($__internal_b788f3d50720624980d9527f31ac3a553b41e4eb61ecf5dfaa0fe22d4a65227a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/m14/symfony/projecteM14/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
