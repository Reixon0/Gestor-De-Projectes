<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a05233c31873a2c7a602c8c33937db8c6f18d1c7b22a7be75fecd8e7140fb33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b31ca53a4e2609eb751c1d6e05031efda922f10b128b024442763f02126cc75c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31ca53a4e2609eb751c1d6e05031efda922f10b128b024442763f02126cc75c->enter($__internal_b31ca53a4e2609eb751c1d6e05031efda922f10b128b024442763f02126cc75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0e866900fbf48544a1868b82aada488f511de1355131a80cb0e3ffa72bf2b8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e866900fbf48544a1868b82aada488f511de1355131a80cb0e3ffa72bf2b8c5->enter($__internal_0e866900fbf48544a1868b82aada488f511de1355131a80cb0e3ffa72bf2b8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b31ca53a4e2609eb751c1d6e05031efda922f10b128b024442763f02126cc75c->leave($__internal_b31ca53a4e2609eb751c1d6e05031efda922f10b128b024442763f02126cc75c_prof);

        
        $__internal_0e866900fbf48544a1868b82aada488f511de1355131a80cb0e3ffa72bf2b8c5->leave($__internal_0e866900fbf48544a1868b82aada488f511de1355131a80cb0e3ffa72bf2b8c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c90109e6e0914a365aea183d2d53cb7de56a1e7bf3901cc55c46aa7293ec7f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90109e6e0914a365aea183d2d53cb7de56a1e7bf3901cc55c46aa7293ec7f42->enter($__internal_c90109e6e0914a365aea183d2d53cb7de56a1e7bf3901cc55c46aa7293ec7f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_332f788d8ba974653b0e055de9d70cfb38842249de16a54f99aefefce5ce4ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332f788d8ba974653b0e055de9d70cfb38842249de16a54f99aefefce5ce4ef6->enter($__internal_332f788d8ba974653b0e055de9d70cfb38842249de16a54f99aefefce5ce4ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_332f788d8ba974653b0e055de9d70cfb38842249de16a54f99aefefce5ce4ef6->leave($__internal_332f788d8ba974653b0e055de9d70cfb38842249de16a54f99aefefce5ce4ef6_prof);

        
        $__internal_c90109e6e0914a365aea183d2d53cb7de56a1e7bf3901cc55c46aa7293ec7f42->leave($__internal_c90109e6e0914a365aea183d2d53cb7de56a1e7bf3901cc55c46aa7293ec7f42_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/opt/lampp/htdocs/m14/symfony/projecteM14/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
