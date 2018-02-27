<?php

/* VallbonawebBundle:Default:index.html.twig */
class __TwigTemplate_8eee843ce754adecc0c80dc3b3e0fa2cba69d33b324a8b64509e6060d2f416a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0728301ae0b847c405f4f81b12d5ad899d5a22428da25f0202eab5a5819a5119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0728301ae0b847c405f4f81b12d5ad899d5a22428da25f0202eab5a5819a5119->enter($__internal_0728301ae0b847c405f4f81b12d5ad899d5a22428da25f0202eab5a5819a5119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonawebBundle:Default:index.html.twig"));

        $__internal_4aaa8517957ac2edff8c2b4690acdf9f73116dc06b5fbbc4fd7edbd53ac74013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aaa8517957ac2edff8c2b4690acdf9f73116dc06b5fbbc4fd7edbd53ac74013->enter($__internal_4aaa8517957ac2edff8c2b4690acdf9f73116dc06b5fbbc4fd7edbd53ac74013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VallbonawebBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_0728301ae0b847c405f4f81b12d5ad899d5a22428da25f0202eab5a5819a5119->leave($__internal_0728301ae0b847c405f4f81b12d5ad899d5a22428da25f0202eab5a5819a5119_prof);

        
        $__internal_4aaa8517957ac2edff8c2b4690acdf9f73116dc06b5fbbc4fd7edbd53ac74013->leave($__internal_4aaa8517957ac2edff8c2b4690acdf9f73116dc06b5fbbc4fd7edbd53ac74013_prof);

    }

    public function getTemplateName()
    {
        return "VallbonawebBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "VallbonawebBundle:Default:index.html.twig", "/opt/lampp/htdocs/m14/symfony/projecteM14/src/Vallbona/webBundle/Resources/views/Default/index.html.twig");
    }
}
