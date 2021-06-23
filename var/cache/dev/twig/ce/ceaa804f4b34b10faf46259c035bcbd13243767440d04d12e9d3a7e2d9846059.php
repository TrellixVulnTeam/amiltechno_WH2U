<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* test/hello.html.twig */
class __TwigTemplate_ccfdbf0226b3d5c55b13a833169b803427e4912aa61f9f13ba8542c2ee95900d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/hello.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/hello.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "test/hello.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Page de bienvenue";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
<h2>Bienvenue à ";
        // line 6
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 6, $this->source); })())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) || array_key_exists("prenom", $context) ? $context["prenom"] : (function () { throw new RuntimeError('Variable "prenom" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h2> 
 
";
        // line 8
        echo " 
";
        // line 9
        if ((1 === twig_compare((isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new RuntimeError('Variable "age" does not exist.', 9, $this->source); })()), 60))) {
            echo " 
<h3>Vous êtes un senior S</h3> 
";
        } else {
            // line 11
            echo " 
<h3>Vous êtes un junior J</h3> 
";
        }
        // line 13
        echo " 

";
        // line 15
        echo (isset($context["messageHtml"]) || array_key_exists("messageHtml", $context) ? $context["messageHtml"] : (function () { throw new RuntimeError('Variable "messageHtml" does not exist.', 15, $this->source); })());
        echo "
";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["monTableau"]) || array_key_exists("monTableau", $context) ? $context["monTableau"] : (function () { throw new RuntimeError('Variable "monTableau" does not exist.', 16, $this->source); })()));
        echo "

";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monTableau"]) || array_key_exists("monTableau", $context) ? $context["monTableau"] : (function () { throw new RuntimeError('Variable "monTableau" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["element"]) {
            echo " 
";
            // line 19
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, $context["element"], "html", null, true);
            echo "<br> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo " 
 
<button> 
    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test");
        echo "\" title=\"vers Test\">To Test</a> 
</button> 

    <div id=\"components-demo\"> 
          <button-counter class=\"btn btn-info\"  data-toggle=\"popover\" title=\"test Popover\" data-content=\"Bouton géré par Vue JS via WebPack\">
</button-counter> 
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "test/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 23,  141 => 20,  131 => 19,  125 => 18,  120 => 16,  116 => 15,  112 => 13,  107 => 11,  101 => 9,  98 => 8,  91 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 
 
{% block title %}{{ parent() }} Page de bienvenue{% endblock %} 
 
{% block body %} 
<h2>Bienvenue à {{ nom | upper }} {{ prenom }}</h2> 
 
{# test de l'age du participant  #} 
{% if age > 60 %} 
<h3>Vous êtes un senior S</h3> 
{% else %} 
<h3>Vous êtes un junior J</h3> 
{% endif %} 

{{ messageHtml | raw }}
{{ dump (monTableau)}}

{% for key, element in monTableau %} 
{{key }} : {{ element }}<br> 
{% endfor %} 
 
<button> 
    <a href=\"{{ path('test') }}\" title=\"vers Test\">To Test</a> 
</button> 

    <div id=\"components-demo\"> 
          <button-counter class=\"btn btn-info\"  data-toggle=\"popover\" title=\"test Popover\" data-content=\"Bouton géré par Vue JS via WebPack\">
</button-counter> 
    </div>


{% endblock %} 
", "test/hello.html.twig", "C:\\wamp64\\www\\monapplisymf\\templates\\test\\hello.html.twig");
    }
}
