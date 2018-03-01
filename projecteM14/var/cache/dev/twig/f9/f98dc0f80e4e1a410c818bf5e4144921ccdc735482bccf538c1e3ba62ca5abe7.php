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
        $__internal_f26b328f99f10c13e35e3c1aa948087dd7481288494b64bfce594f5379766f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26b328f99f10c13e35e3c1aa948087dd7481288494b64bfce594f5379766f24->enter($__internal_f26b328f99f10c13e35e3c1aa948087dd7481288494b64bfce594f5379766f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_41748736d40ee733625c8b60221c42608c8be6f78e24ce048d58c75ffe3db45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41748736d40ee733625c8b60221c42608c8be6f78e24ce048d58c75ffe3db45a->enter($__internal_41748736d40ee733625c8b60221c42608c8be6f78e24ce048d58c75ffe3db45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f26b328f99f10c13e35e3c1aa948087dd7481288494b64bfce594f5379766f24->leave($__internal_f26b328f99f10c13e35e3c1aa948087dd7481288494b64bfce594f5379766f24_prof);

        
        $__internal_41748736d40ee733625c8b60221c42608c8be6f78e24ce048d58c75ffe3db45a->leave($__internal_41748736d40ee733625c8b60221c42608c8be6f78e24ce048d58c75ffe3db45a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0011f60ce18c1f0f03ee92fc9a77fdf3349c67c38dcf96fa3f9f58401c9f07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0011f60ce18c1f0f03ee92fc9a77fdf3349c67c38dcf96fa3f9f58401c9f07d->enter($__internal_d0011f60ce18c1f0f03ee92fc9a77fdf3349c67c38dcf96fa3f9f58401c9f07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_821a8d8ed4a2b33922f2a65950241168562c767353a19960946fdd2acd47a243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_821a8d8ed4a2b33922f2a65950241168562c767353a19960946fdd2acd47a243->enter($__internal_821a8d8ed4a2b33922f2a65950241168562c767353a19960946fdd2acd47a243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_821a8d8ed4a2b33922f2a65950241168562c767353a19960946fdd2acd47a243->leave($__internal_821a8d8ed4a2b33922f2a65950241168562c767353a19960946fdd2acd47a243_prof);

        
        $__internal_d0011f60ce18c1f0f03ee92fc9a77fdf3349c67c38dcf96fa3f9f58401c9f07d->leave($__internal_d0011f60ce18c1f0f03ee92fc9a77fdf3349c67c38dcf96fa3f9f58401c9f07d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e56fd55ec6700d0bcb6246003de9f6e66d07e35aca49a1fe8bd10f10b14fdcc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56fd55ec6700d0bcb6246003de9f6e66d07e35aca49a1fe8bd10f10b14fdcc7->enter($__internal_e56fd55ec6700d0bcb6246003de9f6e66d07e35aca49a1fe8bd10f10b14fdcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9c27347c78de5973f73c7740b6aa11e48266ff2bba6f3abff9b52a1514f2f94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c27347c78de5973f73c7740b6aa11e48266ff2bba6f3abff9b52a1514f2f94c->enter($__internal_9c27347c78de5973f73c7740b6aa11e48266ff2bba6f3abff9b52a1514f2f94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9c27347c78de5973f73c7740b6aa11e48266ff2bba6f3abff9b52a1514f2f94c->leave($__internal_9c27347c78de5973f73c7740b6aa11e48266ff2bba6f3abff9b52a1514f2f94c_prof);

        
        $__internal_e56fd55ec6700d0bcb6246003de9f6e66d07e35aca49a1fe8bd10f10b14fdcc7->leave($__internal_e56fd55ec6700d0bcb6246003de9f6e66d07e35aca49a1fe8bd10f10b14fdcc7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_242e2fdaa718ffdbd56ef55118a11550e0b1d85440ec12fa26ffc273c0113a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242e2fdaa718ffdbd56ef55118a11550e0b1d85440ec12fa26ffc273c0113a1e->enter($__internal_242e2fdaa718ffdbd56ef55118a11550e0b1d85440ec12fa26ffc273c0113a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d976a7fd8a5aa07de85ee781200c21aa34a6f48ef965486cac0f2164e0292774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d976a7fd8a5aa07de85ee781200c21aa34a6f48ef965486cac0f2164e0292774->enter($__internal_d976a7fd8a5aa07de85ee781200c21aa34a6f48ef965486cac0f2164e0292774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d976a7fd8a5aa07de85ee781200c21aa34a6f48ef965486cac0f2164e0292774->leave($__internal_d976a7fd8a5aa07de85ee781200c21aa34a6f48ef965486cac0f2164e0292774_prof);

        
        $__internal_242e2fdaa718ffdbd56ef55118a11550e0b1d85440ec12fa26ffc273c0113a1e->leave($__internal_242e2fdaa718ffdbd56ef55118a11550e0b1d85440ec12fa26ffc273c0113a1e_prof);

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
