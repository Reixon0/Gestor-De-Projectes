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
        $__internal_537f9207c1e5a132931e8d22119bb39f44f31673e76ddb52cc8ed4a0b07aefff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537f9207c1e5a132931e8d22119bb39f44f31673e76ddb52cc8ed4a0b07aefff->enter($__internal_537f9207c1e5a132931e8d22119bb39f44f31673e76ddb52cc8ed4a0b07aefff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e089ea013a19c132118092229d8f328d08d2023709c127fa9094b1ec78d89c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e089ea013a19c132118092229d8f328d08d2023709c127fa9094b1ec78d89c2a->enter($__internal_e089ea013a19c132118092229d8f328d08d2023709c127fa9094b1ec78d89c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_537f9207c1e5a132931e8d22119bb39f44f31673e76ddb52cc8ed4a0b07aefff->leave($__internal_537f9207c1e5a132931e8d22119bb39f44f31673e76ddb52cc8ed4a0b07aefff_prof);

        
        $__internal_e089ea013a19c132118092229d8f328d08d2023709c127fa9094b1ec78d89c2a->leave($__internal_e089ea013a19c132118092229d8f328d08d2023709c127fa9094b1ec78d89c2a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d3dc9c0b56801fd67c0bb9d0c96f63f62fea65becfd62bdc1704b3e19a8b92f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3dc9c0b56801fd67c0bb9d0c96f63f62fea65becfd62bdc1704b3e19a8b92f->enter($__internal_4d3dc9c0b56801fd67c0bb9d0c96f63f62fea65becfd62bdc1704b3e19a8b92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f880ab18bebafcd45e656889e52a0d772d3b1241041d11a5f8449673eabc8499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f880ab18bebafcd45e656889e52a0d772d3b1241041d11a5f8449673eabc8499->enter($__internal_f880ab18bebafcd45e656889e52a0d772d3b1241041d11a5f8449673eabc8499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f880ab18bebafcd45e656889e52a0d772d3b1241041d11a5f8449673eabc8499->leave($__internal_f880ab18bebafcd45e656889e52a0d772d3b1241041d11a5f8449673eabc8499_prof);

        
        $__internal_4d3dc9c0b56801fd67c0bb9d0c96f63f62fea65becfd62bdc1704b3e19a8b92f->leave($__internal_4d3dc9c0b56801fd67c0bb9d0c96f63f62fea65becfd62bdc1704b3e19a8b92f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b56b12dd568a41f026f9e02295482bb45636609e65b52dcbd2e2146e0baf784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b56b12dd568a41f026f9e02295482bb45636609e65b52dcbd2e2146e0baf784->enter($__internal_8b56b12dd568a41f026f9e02295482bb45636609e65b52dcbd2e2146e0baf784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_238442ec9f18cf6861ed3f037c9f7c0b5e52a1257f96eacfbcc897fe7e6e5233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238442ec9f18cf6861ed3f037c9f7c0b5e52a1257f96eacfbcc897fe7e6e5233->enter($__internal_238442ec9f18cf6861ed3f037c9f7c0b5e52a1257f96eacfbcc897fe7e6e5233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_238442ec9f18cf6861ed3f037c9f7c0b5e52a1257f96eacfbcc897fe7e6e5233->leave($__internal_238442ec9f18cf6861ed3f037c9f7c0b5e52a1257f96eacfbcc897fe7e6e5233_prof);

        
        $__internal_8b56b12dd568a41f026f9e02295482bb45636609e65b52dcbd2e2146e0baf784->leave($__internal_8b56b12dd568a41f026f9e02295482bb45636609e65b52dcbd2e2146e0baf784_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7f3ab79827b286adca874444115ef1fd4198e2028e7725e63030d94dd1cd20f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f3ab79827b286adca874444115ef1fd4198e2028e7725e63030d94dd1cd20f->enter($__internal_c7f3ab79827b286adca874444115ef1fd4198e2028e7725e63030d94dd1cd20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_21d299018749f09a9a675084507e8399f5bd93e89709ffff9568f5ce14168704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d299018749f09a9a675084507e8399f5bd93e89709ffff9568f5ce14168704->enter($__internal_21d299018749f09a9a675084507e8399f5bd93e89709ffff9568f5ce14168704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_21d299018749f09a9a675084507e8399f5bd93e89709ffff9568f5ce14168704->leave($__internal_21d299018749f09a9a675084507e8399f5bd93e89709ffff9568f5ce14168704_prof);

        
        $__internal_c7f3ab79827b286adca874444115ef1fd4198e2028e7725e63030d94dd1cd20f->leave($__internal_c7f3ab79827b286adca874444115ef1fd4198e2028e7725e63030d94dd1cd20f_prof);

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
