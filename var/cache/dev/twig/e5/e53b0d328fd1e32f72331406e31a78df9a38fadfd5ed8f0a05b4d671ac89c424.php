<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_e728caebc3b50490e241cfbaaefd94e22f5e1c1146af6378d1d8f4f6bdeedeb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcf8574f8dc11e68f1ce465de09acc716fb3b84b2198e0dea5f16aedcc18a7e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf8574f8dc11e68f1ce465de09acc716fb3b84b2198e0dea5f16aedcc18a7e0->enter($__internal_bcf8574f8dc11e68f1ce465de09acc716fb3b84b2198e0dea5f16aedcc18a7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $__internal_f84b5e9b8ab7995371caf673726133a627d8bf021e909a159bb83c644b7247d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84b5e9b8ab7995371caf673726133a627d8bf021e909a159bb83c644b7247d3->enter($__internal_f84b5e9b8ab7995371caf673726133a627d8bf021e909a159bb83c644b7247d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcf8574f8dc11e68f1ce465de09acc716fb3b84b2198e0dea5f16aedcc18a7e0->leave($__internal_bcf8574f8dc11e68f1ce465de09acc716fb3b84b2198e0dea5f16aedcc18a7e0_prof);

        
        $__internal_f84b5e9b8ab7995371caf673726133a627d8bf021e909a159bb83c644b7247d3->leave($__internal_f84b5e9b8ab7995371caf673726133a627d8bf021e909a159bb83c644b7247d3_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

", "BloggerBlogBundle::layout.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle/Resources/views/layout.html.twig");
    }
}
