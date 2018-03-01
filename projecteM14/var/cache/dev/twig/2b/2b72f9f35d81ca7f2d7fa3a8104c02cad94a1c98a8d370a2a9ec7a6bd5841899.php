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
        $__internal_22dd164591df287f73679054e0daef36e314b00bf287354f4601b5330688b6b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22dd164591df287f73679054e0daef36e314b00bf287354f4601b5330688b6b2->enter($__internal_22dd164591df287f73679054e0daef36e314b00bf287354f4601b5330688b6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_329ea93dbb1e687a2effd65e90ac5bdc3253fd02b1b86678176a439e42891209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329ea93dbb1e687a2effd65e90ac5bdc3253fd02b1b86678176a439e42891209->enter($__internal_329ea93dbb1e687a2effd65e90ac5bdc3253fd02b1b86678176a439e42891209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22dd164591df287f73679054e0daef36e314b00bf287354f4601b5330688b6b2->leave($__internal_22dd164591df287f73679054e0daef36e314b00bf287354f4601b5330688b6b2_prof);

        
        $__internal_329ea93dbb1e687a2effd65e90ac5bdc3253fd02b1b86678176a439e42891209->leave($__internal_329ea93dbb1e687a2effd65e90ac5bdc3253fd02b1b86678176a439e42891209_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40da7aa08ddc09d0deaccc1b5f315b8c7db245955896280b45197d14d8c598fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40da7aa08ddc09d0deaccc1b5f315b8c7db245955896280b45197d14d8c598fc->enter($__internal_40da7aa08ddc09d0deaccc1b5f315b8c7db245955896280b45197d14d8c598fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_801a774e3b367aa85f81860dfea7e102800dde9ab9670293900f267b20d10b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801a774e3b367aa85f81860dfea7e102800dde9ab9670293900f267b20d10b81->enter($__internal_801a774e3b367aa85f81860dfea7e102800dde9ab9670293900f267b20d10b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_801a774e3b367aa85f81860dfea7e102800dde9ab9670293900f267b20d10b81->leave($__internal_801a774e3b367aa85f81860dfea7e102800dde9ab9670293900f267b20d10b81_prof);

        
        $__internal_40da7aa08ddc09d0deaccc1b5f315b8c7db245955896280b45197d14d8c598fc->leave($__internal_40da7aa08ddc09d0deaccc1b5f315b8c7db245955896280b45197d14d8c598fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc1689417706b49f78b635d54e3aae16e638d9ae6b287a171f10a11272cf1a4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc1689417706b49f78b635d54e3aae16e638d9ae6b287a171f10a11272cf1a4d->enter($__internal_dc1689417706b49f78b635d54e3aae16e638d9ae6b287a171f10a11272cf1a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1e67eab7ae42bd946f36ee9c7977f0b8cc5a62cb003365655d086acfcea7d7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e67eab7ae42bd946f36ee9c7977f0b8cc5a62cb003365655d086acfcea7d7db->enter($__internal_1e67eab7ae42bd946f36ee9c7977f0b8cc5a62cb003365655d086acfcea7d7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1e67eab7ae42bd946f36ee9c7977f0b8cc5a62cb003365655d086acfcea7d7db->leave($__internal_1e67eab7ae42bd946f36ee9c7977f0b8cc5a62cb003365655d086acfcea7d7db_prof);

        
        $__internal_dc1689417706b49f78b635d54e3aae16e638d9ae6b287a171f10a11272cf1a4d->leave($__internal_dc1689417706b49f78b635d54e3aae16e638d9ae6b287a171f10a11272cf1a4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dcec618b40956e6fc52a2453f07650ef615e5f6d48da4d7fc89cfc0624d7b377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcec618b40956e6fc52a2453f07650ef615e5f6d48da4d7fc89cfc0624d7b377->enter($__internal_dcec618b40956e6fc52a2453f07650ef615e5f6d48da4d7fc89cfc0624d7b377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43c9bc6e249938c7f3ab5c451396294389ca940cb87efc03cb9dc84ad9add93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c9bc6e249938c7f3ab5c451396294389ca940cb87efc03cb9dc84ad9add93a->enter($__internal_43c9bc6e249938c7f3ab5c451396294389ca940cb87efc03cb9dc84ad9add93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_43c9bc6e249938c7f3ab5c451396294389ca940cb87efc03cb9dc84ad9add93a->leave($__internal_43c9bc6e249938c7f3ab5c451396294389ca940cb87efc03cb9dc84ad9add93a_prof);

        
        $__internal_dcec618b40956e6fc52a2453f07650ef615e5f6d48da4d7fc89cfc0624d7b377->leave($__internal_dcec618b40956e6fc52a2453f07650ef615e5f6d48da4d7fc89cfc0624d7b377_prof);

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
