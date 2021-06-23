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

/* liste_produits/distributeurs.html.twig */
class __TwigTemplate_84d3426357bd083a17aab753bff8a11b9053b3cb8afaed08a952063c75c31d8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_produits/distributeurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_produits/distributeurs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "liste_produits/distributeurs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
 
   <table class=\"table mx-auto\" border=\"2\" style=\"width:400px\" > 
        <tr> 
 
            <th>Distributeur</th> 
           <th> 
           <table> 
                 <th width=\"120px\">Produit</th> 
                 <th>Référence</th> 
           </table> 
           </th> 
        </tr> 
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["distributeurs"]) || array_key_exists("distributeurs", $context) ? $context["distributeurs"] : (function () { throw new RuntimeError('Variable "distributeurs" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["distributeur"]) {
            echo " 
            <tr> 
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["distributeur"], "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "</td> 
                <td> 
                    <table border=\"2\" style=\"background-color:grey; \"> 
            ";
            // line 21
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["distributeur"], "produit", [], "any", false, false, false, 21))) {
                echo " 
            ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["distributeur"], "produit", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    echo " 
                   <tr> 
                <td align=\"center\">";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 24), "html", null, true);
                    echo "</td> 
                 <td align=\"center\">";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "reference", [], "any", false, false, false, 25), "numero", [], "any", false, false, false, 25), "html", null, true);
                    echo "</td> 
                  </tr> 
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo " 
            ";
            }
            // line 28
            echo " 
                    </table> 
                </td> 
            </tr> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['distributeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo " 
    </table> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "liste_produits/distributeurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  123 => 28,  119 => 27,  110 => 25,  106 => 24,  99 => 22,  95 => 21,  89 => 18,  82 => 16,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} 
 
{% block body %} 
 
   <table class=\"table mx-auto\" border=\"2\" style=\"width:400px\" > 
        <tr> 
 
            <th>Distributeur</th> 
           <th> 
           <table> 
                 <th width=\"120px\">Produit</th> 
                 <th>Référence</th> 
           </table> 
           </th> 
        </tr> 
        {% for distributeur in distributeurs %} 
            <tr> 
                <td>{{ distributeur.nom }}</td> 
                <td> 
                    <table border=\"2\" style=\"background-color:grey; \"> 
            {% if distributeur.produit is not empty %} 
            {% for produit in distributeur.produit %} 
                   <tr> 
                <td align=\"center\">{{ produit.nom }}</td> 
                 <td align=\"center\">{{ produit.reference.numero }}</td> 
                  </tr> 
            {%  endfor %} 
            {% endif %} 
                    </table> 
                </td> 
            </tr> 
        {% endfor %} 
    </table> 
{% endblock %} ", "liste_produits/distributeurs.html.twig", "C:\\wamp64\\www\\monapplisymf\\templates\\liste_produits\\distributeurs.html.twig");
    }
}
