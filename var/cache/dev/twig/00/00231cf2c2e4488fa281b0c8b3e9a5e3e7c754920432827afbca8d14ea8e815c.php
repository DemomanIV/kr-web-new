<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_21246bdf3c9161f895236ea27c28cd9d3f466ef9a304dd88c6ce0cab63013463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:index.html.twig", 2);
        $this->blocks = array(
            'body_title' => array($this, 'block_body_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f74694c382789f50af05bb32c773d0a2076557a74fad65e126cefe06ddbe819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f74694c382789f50af05bb32c773d0a2076557a74fad65e126cefe06ddbe819->enter($__internal_7f74694c382789f50af05bb32c773d0a2076557a74fad65e126cefe06ddbe819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $__internal_c3aceb978ef65043f7abbb9597babdc7afad0ef8223776a5c47226cb9720e09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3aceb978ef65043f7abbb9597babdc7afad0ef8223776a5c47226cb9720e09d->enter($__internal_c3aceb978ef65043f7abbb9597babdc7afad0ef8223776a5c47226cb9720e09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f74694c382789f50af05bb32c773d0a2076557a74fad65e126cefe06ddbe819->leave($__internal_7f74694c382789f50af05bb32c773d0a2076557a74fad65e126cefe06ddbe819_prof);

        
        $__internal_c3aceb978ef65043f7abbb9597babdc7afad0ef8223776a5c47226cb9720e09d->leave($__internal_c3aceb978ef65043f7abbb9597babdc7afad0ef8223776a5c47226cb9720e09d_prof);

    }

    // line 4
    public function block_body_title($context, array $blocks = array())
    {
        $__internal_e910def0499a2a8af444609182ac102df32e30e1c0bbf58d674975caecf16c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e910def0499a2a8af444609182ac102df32e30e1c0bbf58d674975caecf16c1e->enter($__internal_e910def0499a2a8af444609182ac102df32e30e1c0bbf58d674975caecf16c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        $__internal_9f46c171947ca383752950640d87a39b24bd491b94d65a564e7d7c544de5eb3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f46c171947ca383752950640d87a39b24bd491b94d65a564e7d7c544de5eb3d->enter($__internal_9f46c171947ca383752950640d87a39b24bd491b94d65a564e7d7c544de5eb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_title"));

        echo "Главная";
        
        $__internal_9f46c171947ca383752950640d87a39b24bd491b94d65a564e7d7c544de5eb3d->leave($__internal_9f46c171947ca383752950640d87a39b24bd491b94d65a564e7d7c544de5eb3d_prof);

        
        $__internal_e910def0499a2a8af444609182ac102df32e30e1c0bbf58d674975caecf16c1e->leave($__internal_e910def0499a2a8af444609182ac102df32e30e1c0bbf58d674975caecf16c1e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6c6c21298840043630bda3fc8e81f5759c9d40653269bda12c8a8096468a005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6c6c21298840043630bda3fc8e81f5759c9d40653269bda12c8a8096468a005->enter($__internal_e6c6c21298840043630bda3fc8e81f5759c9d40653269bda12c8a8096468a005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a5889c9b54ee43b1665f53b5dd964306725ce6bb0b9d89ba8f4f498673dc263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5889c9b54ee43b1665f53b5dd964306725ce6bb0b9d89ba8f4f498673dc263->enter($__internal_5a5889c9b54ee43b1665f53b5dd964306725ce6bb0b9d89ba8f4f498673dc263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 9
            echo "            <a class=\"btn btn-warning center-block\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_logout");
            echo "\">Выход</a>
        ";
        } else {
            // line 11
            echo "            <a class=\"btn btn-success center-block\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_security_login");
            echo "\">Вход</a>
        ";
        }
        // line 13
        echo "
        <hr>
        <hr>

        ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "            <a class=\"btn btn-success center-block\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_prepod");
            echo "\">Редактирование заявок</a>
        ";
        } else {
            // line 20
            echo "            <a class=\"btn btn-success center-block\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_bidd_new");
            echo "\">Подать заявку</a>
        ";
        }
        // line 22
        echo "
        <div id=\"info\">
            <hr>
            <h3>Установка</h3>
            <p><b>Создание базы<i>(symfonykrrr)</i>:</b> <i>php bin/console doctrine:database:create</i></p>
            <p><b>Создание таблиц:</b><br><i>php bin/console doctrine:migrations:diff</i><br><i>php bin/console doctrine:migrations:migrate</i></p>
            <p><b>Загрузка фикстур:</b> <i>php bin/console doctrine:fixtures:load</i></p>
            <hr>
            <h4>После в бд есть одна заявка и один преподаватель</h4>
            <p>Данные преподавателя:</p>
            <p><b>Логин:</b> <i>prepod</i></p>
            <p><b>Пароль:</b> <i>prepod</i></p>

        </div>
    </div>
";
        
        $__internal_5a5889c9b54ee43b1665f53b5dd964306725ce6bb0b9d89ba8f4f498673dc263->leave($__internal_5a5889c9b54ee43b1665f53b5dd964306725ce6bb0b9d89ba8f4f498673dc263_prof);

        
        $__internal_e6c6c21298840043630bda3fc8e81f5759c9d40653269bda12c8a8096468a005->leave($__internal_e6c6c21298840043630bda3fc8e81f5759c9d40653269bda12c8a8096468a005_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 22,  99 => 20,  93 => 18,  91 => 17,  85 => 13,  79 => 11,  73 => 9,  71 => 8,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block body_title %}Главная{% endblock %}

{% block body %}
    <div class=\"container\">
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <a class=\"btn btn-warning center-block\" href=\"{{ path('_security_logout') }}\">Выход</a>
        {% else %}
            <a class=\"btn btn-success center-block\" href=\"{{ path('_security_login') }}\">Вход</a>
        {% endif %}

        <hr>
        <hr>

        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <a class=\"btn btn-success center-block\" href=\"{{ path('blogger_blog_prepod') }}\">Редактирование заявок</a>
        {% else %}
            <a class=\"btn btn-success center-block\" href=\"{{ path('blogger_blog_bidd_new') }}\">Подать заявку</a>
        {% endif %}

        <div id=\"info\">
            <hr>
            <h3>Установка</h3>
            <p><b>Создание базы<i>(symfonykrrr)</i>:</b> <i>php bin/console doctrine:database:create</i></p>
            <p><b>Создание таблиц:</b><br><i>php bin/console doctrine:migrations:diff</i><br><i>php bin/console doctrine:migrations:migrate</i></p>
            <p><b>Загрузка фикстур:</b> <i>php bin/console doctrine:fixtures:load</i></p>
            <hr>
            <h4>После в бд есть одна заявка и один преподаватель</h4>
            <p>Данные преподавателя:</p>
            <p><b>Логин:</b> <i>prepod</i></p>
            <p><b>Пароль:</b> <i>prepod</i></p>

        </div>
    </div>
{% endblock %}", "BloggerBlogBundle:Page:index.html.twig", "D:\\krr\\kr\\src\\Blogger\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
