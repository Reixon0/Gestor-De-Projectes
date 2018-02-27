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
        $__internal_4e71a68d21e39f3a8bdb2de7f6da69ee2239d2db1b624f3c53b5403a98a9fa1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e71a68d21e39f3a8bdb2de7f6da69ee2239d2db1b624f3c53b5403a98a9fa1a->enter($__internal_4e71a68d21e39f3a8bdb2de7f6da69ee2239d2db1b624f3c53b5403a98a9fa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_983c7f6df2aa216a2c7d8d89ac524f42c1cb41e52ab3349c4f9b8f6056554016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983c7f6df2aa216a2c7d8d89ac524f42c1cb41e52ab3349c4f9b8f6056554016->enter($__internal_983c7f6df2aa216a2c7d8d89ac524f42c1cb41e52ab3349c4f9b8f6056554016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e71a68d21e39f3a8bdb2de7f6da69ee2239d2db1b624f3c53b5403a98a9fa1a->leave($__internal_4e71a68d21e39f3a8bdb2de7f6da69ee2239d2db1b624f3c53b5403a98a9fa1a_prof);

        
        $__internal_983c7f6df2aa216a2c7d8d89ac524f42c1cb41e52ab3349c4f9b8f6056554016->leave($__internal_983c7f6df2aa216a2c7d8d89ac524f42c1cb41e52ab3349c4f9b8f6056554016_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_284d522d44c8150f109bdd62859b29112b559602a673b62ae33bcfbd3dc3d772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284d522d44c8150f109bdd62859b29112b559602a673b62ae33bcfbd3dc3d772->enter($__internal_284d522d44c8150f109bdd62859b29112b559602a673b62ae33bcfbd3dc3d772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b3b9af2d56d97a3142f10086211e542808da4bcad45ed3673cd40c9d00dd6fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b9af2d56d97a3142f10086211e542808da4bcad45ed3673cd40c9d00dd6fa7->enter($__internal_b3b9af2d56d97a3142f10086211e542808da4bcad45ed3673cd40c9d00dd6fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b3b9af2d56d97a3142f10086211e542808da4bcad45ed3673cd40c9d00dd6fa7->leave($__internal_b3b9af2d56d97a3142f10086211e542808da4bcad45ed3673cd40c9d00dd6fa7_prof);

        
        $__internal_284d522d44c8150f109bdd62859b29112b559602a673b62ae33bcfbd3dc3d772->leave($__internal_284d522d44c8150f109bdd62859b29112b559602a673b62ae33bcfbd3dc3d772_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_429427c659d313af91958e906b26723c47f27641eecabce3153b97f3f00197a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429427c659d313af91958e906b26723c47f27641eecabce3153b97f3f00197a4->enter($__internal_429427c659d313af91958e906b26723c47f27641eecabce3153b97f3f00197a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_27c4bd74f71027105d5e0e5eb8f285c27cf21731a13566cbaf86b93ada77f71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c4bd74f71027105d5e0e5eb8f285c27cf21731a13566cbaf86b93ada77f71b->enter($__internal_27c4bd74f71027105d5e0e5eb8f285c27cf21731a13566cbaf86b93ada77f71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_27c4bd74f71027105d5e0e5eb8f285c27cf21731a13566cbaf86b93ada77f71b->leave($__internal_27c4bd74f71027105d5e0e5eb8f285c27cf21731a13566cbaf86b93ada77f71b_prof);

        
        $__internal_429427c659d313af91958e906b26723c47f27641eecabce3153b97f3f00197a4->leave($__internal_429427c659d313af91958e906b26723c47f27641eecabce3153b97f3f00197a4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdb093d900c74eb19ab829da6304a5cd95996b404e03a368455459278c91578c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb093d900c74eb19ab829da6304a5cd95996b404e03a368455459278c91578c->enter($__internal_fdb093d900c74eb19ab829da6304a5cd95996b404e03a368455459278c91578c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_175266bef6788b2d154fd16b7ded3c5427ac250c89e22b0ae14e43412ee8777c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175266bef6788b2d154fd16b7ded3c5427ac250c89e22b0ae14e43412ee8777c->enter($__internal_175266bef6788b2d154fd16b7ded3c5427ac250c89e22b0ae14e43412ee8777c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_175266bef6788b2d154fd16b7ded3c5427ac250c89e22b0ae14e43412ee8777c->leave($__internal_175266bef6788b2d154fd16b7ded3c5427ac250c89e22b0ae14e43412ee8777c_prof);

        
        $__internal_fdb093d900c74eb19ab829da6304a5cd95996b404e03a368455459278c91578c->leave($__internal_fdb093d900c74eb19ab829da6304a5cd95996b404e03a368455459278c91578c_prof);

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
