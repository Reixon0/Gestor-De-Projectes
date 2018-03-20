<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c87710f357776402c9631da4bda3850b78ef8adca6273d8bd36cbe5e2fe827f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_982d85122a23fe4507584625414979cd25e864b7124b49bd9049dbe749d98620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982d85122a23fe4507584625414979cd25e864b7124b49bd9049dbe749d98620->enter($__internal_982d85122a23fe4507584625414979cd25e864b7124b49bd9049dbe749d98620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_047468b5d49f2174bd76e703dcfb6d287d6ad6acb15f5821d90c6852122dc222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047468b5d49f2174bd76e703dcfb6d287d6ad6acb15f5821d90c6852122dc222->enter($__internal_047468b5d49f2174bd76e703dcfb6d287d6ad6acb15f5821d90c6852122dc222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_982d85122a23fe4507584625414979cd25e864b7124b49bd9049dbe749d98620->leave($__internal_982d85122a23fe4507584625414979cd25e864b7124b49bd9049dbe749d98620_prof);

        
        $__internal_047468b5d49f2174bd76e703dcfb6d287d6ad6acb15f5821d90c6852122dc222->leave($__internal_047468b5d49f2174bd76e703dcfb6d287d6ad6acb15f5821d90c6852122dc222_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77903dc964c8f533e6465d1fc3f3dfe721be43824ecaf00cc16c7b86e168ccf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77903dc964c8f533e6465d1fc3f3dfe721be43824ecaf00cc16c7b86e168ccf3->enter($__internal_77903dc964c8f533e6465d1fc3f3dfe721be43824ecaf00cc16c7b86e168ccf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_56a07958a471f9cb517c980ae47cfea5b54f81e24cbbf700e279793381835e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a07958a471f9cb517c980ae47cfea5b54f81e24cbbf700e279793381835e61->enter($__internal_56a07958a471f9cb517c980ae47cfea5b54f81e24cbbf700e279793381835e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_56a07958a471f9cb517c980ae47cfea5b54f81e24cbbf700e279793381835e61->leave($__internal_56a07958a471f9cb517c980ae47cfea5b54f81e24cbbf700e279793381835e61_prof);

        
        $__internal_77903dc964c8f533e6465d1fc3f3dfe721be43824ecaf00cc16c7b86e168ccf3->leave($__internal_77903dc964c8f533e6465d1fc3f3dfe721be43824ecaf00cc16c7b86e168ccf3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5a5190d38b56a8e867244ca682ed1c9fbd5dfb74dcc64365290dbc07c9c47e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a5190d38b56a8e867244ca682ed1c9fbd5dfb74dcc64365290dbc07c9c47e0->enter($__internal_a5a5190d38b56a8e867244ca682ed1c9fbd5dfb74dcc64365290dbc07c9c47e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_54713cd396dc54771e57fbf9dd1cb83da5cb3aa795e31e3d923df3c928e8e47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54713cd396dc54771e57fbf9dd1cb83da5cb3aa795e31e3d923df3c928e8e47e->enter($__internal_54713cd396dc54771e57fbf9dd1cb83da5cb3aa795e31e3d923df3c928e8e47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_54713cd396dc54771e57fbf9dd1cb83da5cb3aa795e31e3d923df3c928e8e47e->leave($__internal_54713cd396dc54771e57fbf9dd1cb83da5cb3aa795e31e3d923df3c928e8e47e_prof);

        
        $__internal_a5a5190d38b56a8e867244ca682ed1c9fbd5dfb74dcc64365290dbc07c9c47e0->leave($__internal_a5a5190d38b56a8e867244ca682ed1c9fbd5dfb74dcc64365290dbc07c9c47e0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf170a0c47cd5ab3fcf0f3f7dc64f4754f847698feb69ea651cd92be6271c7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf170a0c47cd5ab3fcf0f3f7dc64f4754f847698feb69ea651cd92be6271c7ac->enter($__internal_cf170a0c47cd5ab3fcf0f3f7dc64f4754f847698feb69ea651cd92be6271c7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0c5f95d99b7c8542b0a3bbafa3599abde60d8f3b60f2ea55a0d8507020efda6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c5f95d99b7c8542b0a3bbafa3599abde60d8f3b60f2ea55a0d8507020efda6->enter($__internal_b0c5f95d99b7c8542b0a3bbafa3599abde60d8f3b60f2ea55a0d8507020efda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b0c5f95d99b7c8542b0a3bbafa3599abde60d8f3b60f2ea55a0d8507020efda6->leave($__internal_b0c5f95d99b7c8542b0a3bbafa3599abde60d8f3b60f2ea55a0d8507020efda6_prof);

        
        $__internal_cf170a0c47cd5ab3fcf0f3f7dc64f4754f847698feb69ea651cd92be6271c7ac->leave($__internal_cf170a0c47cd5ab3fcf0f3f7dc64f4754f847698feb69ea651cd92be6271c7ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/opt/lampp/htdocs/m14/symfony/projecteM14/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
