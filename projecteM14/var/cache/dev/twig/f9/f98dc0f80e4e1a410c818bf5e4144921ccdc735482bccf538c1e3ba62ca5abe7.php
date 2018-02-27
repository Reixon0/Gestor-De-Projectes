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
        $__internal_f892d1f82cdbe23c76ae90f1dbce99d309d21536ac816efd5623ddc18c737d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f892d1f82cdbe23c76ae90f1dbce99d309d21536ac816efd5623ddc18c737d6f->enter($__internal_f892d1f82cdbe23c76ae90f1dbce99d309d21536ac816efd5623ddc18c737d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3ffb72f950eb4a9772eb040a81d386d43f2a114b84d2a43ad8a7490008ab621a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffb72f950eb4a9772eb040a81d386d43f2a114b84d2a43ad8a7490008ab621a->enter($__internal_3ffb72f950eb4a9772eb040a81d386d43f2a114b84d2a43ad8a7490008ab621a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f892d1f82cdbe23c76ae90f1dbce99d309d21536ac816efd5623ddc18c737d6f->leave($__internal_f892d1f82cdbe23c76ae90f1dbce99d309d21536ac816efd5623ddc18c737d6f_prof);

        
        $__internal_3ffb72f950eb4a9772eb040a81d386d43f2a114b84d2a43ad8a7490008ab621a->leave($__internal_3ffb72f950eb4a9772eb040a81d386d43f2a114b84d2a43ad8a7490008ab621a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2f477f71ad116163dff0c97073336d0ec18babf70be1c9aa821b55aca52e975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f477f71ad116163dff0c97073336d0ec18babf70be1c9aa821b55aca52e975->enter($__internal_e2f477f71ad116163dff0c97073336d0ec18babf70be1c9aa821b55aca52e975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aea93019589c08dcf5fc8e904c09459fe07f37f78b0f85fa7c5644a00e1556e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea93019589c08dcf5fc8e904c09459fe07f37f78b0f85fa7c5644a00e1556e1->enter($__internal_aea93019589c08dcf5fc8e904c09459fe07f37f78b0f85fa7c5644a00e1556e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_aea93019589c08dcf5fc8e904c09459fe07f37f78b0f85fa7c5644a00e1556e1->leave($__internal_aea93019589c08dcf5fc8e904c09459fe07f37f78b0f85fa7c5644a00e1556e1_prof);

        
        $__internal_e2f477f71ad116163dff0c97073336d0ec18babf70be1c9aa821b55aca52e975->leave($__internal_e2f477f71ad116163dff0c97073336d0ec18babf70be1c9aa821b55aca52e975_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c5a3ff5d5ed53087917e7003cad4d2af64a561d9b01ba4c02c2ef4684a423710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a3ff5d5ed53087917e7003cad4d2af64a561d9b01ba4c02c2ef4684a423710->enter($__internal_c5a3ff5d5ed53087917e7003cad4d2af64a561d9b01ba4c02c2ef4684a423710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dc3ba8db809da617cbaaa67476a3ec4d801f30008d1cd4b576b8ba484d91717d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3ba8db809da617cbaaa67476a3ec4d801f30008d1cd4b576b8ba484d91717d->enter($__internal_dc3ba8db809da617cbaaa67476a3ec4d801f30008d1cd4b576b8ba484d91717d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_dc3ba8db809da617cbaaa67476a3ec4d801f30008d1cd4b576b8ba484d91717d->leave($__internal_dc3ba8db809da617cbaaa67476a3ec4d801f30008d1cd4b576b8ba484d91717d_prof);

        
        $__internal_c5a3ff5d5ed53087917e7003cad4d2af64a561d9b01ba4c02c2ef4684a423710->leave($__internal_c5a3ff5d5ed53087917e7003cad4d2af64a561d9b01ba4c02c2ef4684a423710_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf973219de58d19134f12b28062416190b87e1206feb5c8f5c5702e18c0c0e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf973219de58d19134f12b28062416190b87e1206feb5c8f5c5702e18c0c0e19->enter($__internal_cf973219de58d19134f12b28062416190b87e1206feb5c8f5c5702e18c0c0e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b8bd805770d576ded16226b3c42a764112880b89caa77bda6ebf9c0508d05814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bd805770d576ded16226b3c42a764112880b89caa77bda6ebf9c0508d05814->enter($__internal_b8bd805770d576ded16226b3c42a764112880b89caa77bda6ebf9c0508d05814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b8bd805770d576ded16226b3c42a764112880b89caa77bda6ebf9c0508d05814->leave($__internal_b8bd805770d576ded16226b3c42a764112880b89caa77bda6ebf9c0508d05814_prof);

        
        $__internal_cf973219de58d19134f12b28062416190b87e1206feb5c8f5c5702e18c0c0e19->leave($__internal_cf973219de58d19134f12b28062416190b87e1206feb5c8f5c5702e18c0c0e19_prof);

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
