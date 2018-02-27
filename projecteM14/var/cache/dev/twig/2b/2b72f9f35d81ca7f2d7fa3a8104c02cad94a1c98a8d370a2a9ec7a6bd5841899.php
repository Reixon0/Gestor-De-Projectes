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
        $__internal_23331caf134c01dc684fb8548a7b9e0a7b020b7876886e8536428e3ff837c806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23331caf134c01dc684fb8548a7b9e0a7b020b7876886e8536428e3ff837c806->enter($__internal_23331caf134c01dc684fb8548a7b9e0a7b020b7876886e8536428e3ff837c806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_eaa93d0a58b1ceeba77725681f4a9867911e9013a58150710a5409fd34f0168c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa93d0a58b1ceeba77725681f4a9867911e9013a58150710a5409fd34f0168c->enter($__internal_eaa93d0a58b1ceeba77725681f4a9867911e9013a58150710a5409fd34f0168c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23331caf134c01dc684fb8548a7b9e0a7b020b7876886e8536428e3ff837c806->leave($__internal_23331caf134c01dc684fb8548a7b9e0a7b020b7876886e8536428e3ff837c806_prof);

        
        $__internal_eaa93d0a58b1ceeba77725681f4a9867911e9013a58150710a5409fd34f0168c->leave($__internal_eaa93d0a58b1ceeba77725681f4a9867911e9013a58150710a5409fd34f0168c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_955d977c049e761ee6ef4e6660bd4590d37c8fd10e66e910e7a2953eff55dbf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955d977c049e761ee6ef4e6660bd4590d37c8fd10e66e910e7a2953eff55dbf0->enter($__internal_955d977c049e761ee6ef4e6660bd4590d37c8fd10e66e910e7a2953eff55dbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6d36c2779debc2a2712594bd85b5eba0ae1d95632e9d1f7d61bc4eca3c9ad5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d36c2779debc2a2712594bd85b5eba0ae1d95632e9d1f7d61bc4eca3c9ad5b4->enter($__internal_6d36c2779debc2a2712594bd85b5eba0ae1d95632e9d1f7d61bc4eca3c9ad5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d36c2779debc2a2712594bd85b5eba0ae1d95632e9d1f7d61bc4eca3c9ad5b4->leave($__internal_6d36c2779debc2a2712594bd85b5eba0ae1d95632e9d1f7d61bc4eca3c9ad5b4_prof);

        
        $__internal_955d977c049e761ee6ef4e6660bd4590d37c8fd10e66e910e7a2953eff55dbf0->leave($__internal_955d977c049e761ee6ef4e6660bd4590d37c8fd10e66e910e7a2953eff55dbf0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_873d9cfe1a9d8dff0a9b8896471b78ebc94b5c1239e0de14368a259e6c876622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_873d9cfe1a9d8dff0a9b8896471b78ebc94b5c1239e0de14368a259e6c876622->enter($__internal_873d9cfe1a9d8dff0a9b8896471b78ebc94b5c1239e0de14368a259e6c876622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_04b4d7bf471f0f804b96fe2a2bbffaf3422817fddcde27abfbbf3d991458f827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b4d7bf471f0f804b96fe2a2bbffaf3422817fddcde27abfbbf3d991458f827->enter($__internal_04b4d7bf471f0f804b96fe2a2bbffaf3422817fddcde27abfbbf3d991458f827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04b4d7bf471f0f804b96fe2a2bbffaf3422817fddcde27abfbbf3d991458f827->leave($__internal_04b4d7bf471f0f804b96fe2a2bbffaf3422817fddcde27abfbbf3d991458f827_prof);

        
        $__internal_873d9cfe1a9d8dff0a9b8896471b78ebc94b5c1239e0de14368a259e6c876622->leave($__internal_873d9cfe1a9d8dff0a9b8896471b78ebc94b5c1239e0de14368a259e6c876622_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_643dfa71ddc1a146c73c3bf7f4fb6125befb589986bb744143fa39eee7532fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643dfa71ddc1a146c73c3bf7f4fb6125befb589986bb744143fa39eee7532fbd->enter($__internal_643dfa71ddc1a146c73c3bf7f4fb6125befb589986bb744143fa39eee7532fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4e3a3e5e00c5cfb5fb28cf008011c75b32c9d4a3e0c8d50ed331c1a11710298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e3a3e5e00c5cfb5fb28cf008011c75b32c9d4a3e0c8d50ed331c1a11710298->enter($__internal_b4e3a3e5e00c5cfb5fb28cf008011c75b32c9d4a3e0c8d50ed331c1a11710298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b4e3a3e5e00c5cfb5fb28cf008011c75b32c9d4a3e0c8d50ed331c1a11710298->leave($__internal_b4e3a3e5e00c5cfb5fb28cf008011c75b32c9d4a3e0c8d50ed331c1a11710298_prof);

        
        $__internal_643dfa71ddc1a146c73c3bf7f4fb6125befb589986bb744143fa39eee7532fbd->leave($__internal_643dfa71ddc1a146c73c3bf7f4fb6125befb589986bb744143fa39eee7532fbd_prof);

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
