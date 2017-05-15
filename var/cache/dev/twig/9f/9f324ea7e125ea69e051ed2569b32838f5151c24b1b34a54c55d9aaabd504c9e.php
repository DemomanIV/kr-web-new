<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f650a24941d14f5aa1de3dd0a26809b71283c7de3d68e6a25d9bb83411427702 extends Twig_Template
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
        $__internal_48a08d38283dbb70deb033246cac663fc38bf7c51914a2289b14a65113d0dbe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a08d38283dbb70deb033246cac663fc38bf7c51914a2289b14a65113d0dbe5->enter($__internal_48a08d38283dbb70deb033246cac663fc38bf7c51914a2289b14a65113d0dbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_487e20288e49c4889d856e5c2ed23d82012814760f56344bf2bdd8edfe670b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487e20288e49c4889d856e5c2ed23d82012814760f56344bf2bdd8edfe670b13->enter($__internal_487e20288e49c4889d856e5c2ed23d82012814760f56344bf2bdd8edfe670b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_48a08d38283dbb70deb033246cac663fc38bf7c51914a2289b14a65113d0dbe5->leave($__internal_48a08d38283dbb70deb033246cac663fc38bf7c51914a2289b14a65113d0dbe5_prof);

        
        $__internal_487e20288e49c4889d856e5c2ed23d82012814760f56344bf2bdd8edfe670b13->leave($__internal_487e20288e49c4889d856e5c2ed23d82012814760f56344bf2bdd8edfe670b13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "D:\\krr\\kr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
