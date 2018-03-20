<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ccf06df31639b7c9b2857bbf3c5e82ca65ad8846bad8b03705b504d691c84a56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f74692ec40b16726d012a0d7447e275f59d855a3a0a46adc9740c4a088669461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74692ec40b16726d012a0d7447e275f59d855a3a0a46adc9740c4a088669461->enter($__internal_f74692ec40b16726d012a0d7447e275f59d855a3a0a46adc9740c4a088669461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0c86c00ead81d0faac803b9d8cb10d6a009647eb94c534bc1ffce87d823235a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c86c00ead81d0faac803b9d8cb10d6a009647eb94c534bc1ffce87d823235a6->enter($__internal_0c86c00ead81d0faac803b9d8cb10d6a009647eb94c534bc1ffce87d823235a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f74692ec40b16726d012a0d7447e275f59d855a3a0a46adc9740c4a088669461->leave($__internal_f74692ec40b16726d012a0d7447e275f59d855a3a0a46adc9740c4a088669461_prof);

        
        $__internal_0c86c00ead81d0faac803b9d8cb10d6a009647eb94c534bc1ffce87d823235a6->leave($__internal_0c86c00ead81d0faac803b9d8cb10d6a009647eb94c534bc1ffce87d823235a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e88aedc05248f926c36108afc39f503427bb1469dfc6347717aee1d64bf4463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e88aedc05248f926c36108afc39f503427bb1469dfc6347717aee1d64bf4463->enter($__internal_9e88aedc05248f926c36108afc39f503427bb1469dfc6347717aee1d64bf4463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a44a6fc98e516d96708f5f79988a5dbaa2517565d3773cac5e34fc2e5e0369fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44a6fc98e516d96708f5f79988a5dbaa2517565d3773cac5e34fc2e5e0369fe->enter($__internal_a44a6fc98e516d96708f5f79988a5dbaa2517565d3773cac5e34fc2e5e0369fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a44a6fc98e516d96708f5f79988a5dbaa2517565d3773cac5e34fc2e5e0369fe->leave($__internal_a44a6fc98e516d96708f5f79988a5dbaa2517565d3773cac5e34fc2e5e0369fe_prof);

        
        $__internal_9e88aedc05248f926c36108afc39f503427bb1469dfc6347717aee1d64bf4463->leave($__internal_9e88aedc05248f926c36108afc39f503427bb1469dfc6347717aee1d64bf4463_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7f938d1a18bfed5f75c11e0716d12ec78f3c0c2577979514f6b72e6392b3bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f938d1a18bfed5f75c11e0716d12ec78f3c0c2577979514f6b72e6392b3bae->enter($__internal_c7f938d1a18bfed5f75c11e0716d12ec78f3c0c2577979514f6b72e6392b3bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08f0ed3adb2963497da0907b2894011c90a9d775ff9c8a318c8c8e767b3de53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f0ed3adb2963497da0907b2894011c90a9d775ff9c8a318c8c8e767b3de53a->enter($__internal_08f0ed3adb2963497da0907b2894011c90a9d775ff9c8a318c8c8e767b3de53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_08f0ed3adb2963497da0907b2894011c90a9d775ff9c8a318c8c8e767b3de53a->leave($__internal_08f0ed3adb2963497da0907b2894011c90a9d775ff9c8a318c8c8e767b3de53a_prof);

        
        $__internal_c7f938d1a18bfed5f75c11e0716d12ec78f3c0c2577979514f6b72e6392b3bae->leave($__internal_c7f938d1a18bfed5f75c11e0716d12ec78f3c0c2577979514f6b72e6392b3bae_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_263a152b646e4dd671183061c010c0af3071bd78d10efabbac37348a0948dc3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263a152b646e4dd671183061c010c0af3071bd78d10efabbac37348a0948dc3c->enter($__internal_263a152b646e4dd671183061c010c0af3071bd78d10efabbac37348a0948dc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_772fb7a0bbc57c093b5596595a37ddb5040c9be92b427d0217a7d8b0df9f02b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772fb7a0bbc57c093b5596595a37ddb5040c9be92b427d0217a7d8b0df9f02b2->enter($__internal_772fb7a0bbc57c093b5596595a37ddb5040c9be92b427d0217a7d8b0df9f02b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_772fb7a0bbc57c093b5596595a37ddb5040c9be92b427d0217a7d8b0df9f02b2->leave($__internal_772fb7a0bbc57c093b5596595a37ddb5040c9be92b427d0217a7d8b0df9f02b2_prof);

        
        $__internal_263a152b646e4dd671183061c010c0af3071bd78d10efabbac37348a0948dc3c->leave($__internal_263a152b646e4dd671183061c010c0af3071bd78d10efabbac37348a0948dc3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/m14/symfony/projecteM14/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
