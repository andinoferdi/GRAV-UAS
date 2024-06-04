<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_bb71588a06803bb4ccea28085540197a3bc23f11bec2779dc4f1a071df77e1f3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 4);
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'header_navigation' => [$this, 'block_header_navigation'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->bodyClassFunc($context, [0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 5
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
<head>
";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 67
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('assets', $context, $blocks);
        // line 86
        echo "</head>





<body id=\"top\" class=\"";
        // line 92
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
    ";
        // line 94
        $this->displayBlock('header', $context, $blocks);
        // line 125
        echo "
    ";
        // line 126
        $this->displayBlock('hero', $context, $blocks);
        // line 127
        echo "
        <section id=\"start\">
        ";
        // line 129
        $this->displayBlock('body', $context, $blocks);
        // line 246
        echo "        </section>
    </div>

    ";
        // line 250
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 253
        echo "
    ";
        // line 254
        $this->displayBlock('mobile', $context, $blocks);
        // line 266
        echo "
";
        // line 267
        $this->displayBlock('bottom', $context, $blocks);
        // line 270
        echo "    ";
        // line 271
        echo "

</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 8
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 9
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 14
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
    ";
        // line 19
        echo "    <style>
        .sidebar-content .recent-post {
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px solid #F0F0F0;
            float: left;
            clear: both;
            width: 100%;
        }

        .sidebar-content [class~='recent-post']:last-of-type {
            border-bottom: none;
        }

        .sidebar-content .recent-post .recent-post-image,
        .sidebar-content .recent-post .recent-post-text {
            float: left;
        }

        .sidebar-content .recent-post .recent-post-image {
            margin-right: 10px;
        }

        .sidebar-content .recent-post .recent-post-text h4 {
            font-family: serif;
            margin-bottom: 10px;
        }

        .sidebar-content .recent-post .recent-post-text h4 a {
            color: #193441;
        }

        .sidebar-content .recent-post .recent-post-text p {
            font-family: Arial, sans-serif;
            font-size: 1.5rem;
            color: #737373;
            margin: 0;
        }

        .home-posts img {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
        }
    </style>
    ";
        // line 65
        echo "    
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 67
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 68
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 69
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 70
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 71
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 72
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 73
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        // line 77
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 78
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 79
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 82
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 83
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 84
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 92
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
    }

    // line 94
    public function block_header($context, array $blocks = [])
    {
        // line 95
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 96
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 99
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 99)->display($context);
        // line 100
        echo "                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        ";
        // line 104
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 107
        echo "                        </nav>

                        ";
        // line 109
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 110
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 110)->display($context);
            echo "</span>
                        ";
        }
        // line 112
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 104
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 105
        echo "                            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 105)->display($context);
        // line 106
        echo "                        ";
    }

    // line 126
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 129
    public function block_body($context, array $blocks = [])
    {
        // line 130
        echo "            <section id=\"body-wrapper\" class=\"section\" style=\"display: grid; grid-template-columns: 20% 60% 20%;\">
                ";
        // line 132
        echo "                ";
        // line 133
        echo "                ";
        if (($this->getAttribute(($context["uri"] ?? null), "path", []) == "/")) {
            // line 134
            echo "                    <div></div>
                    <div>
                        <section class=\"home-posts\" style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; max-width: 976px; width: 100%\">
                            ";
            // line 137
            $context["collection"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []);
            // line 138
            echo "                            ";
            $context["limit"] = 4;
            // line 139
            echo "                            ";
            $context["ignore_url_param_array"] = [0 => "event"];
            // line 140
            echo "                            ";
            call_user_func_array($this->env->getFunction('paginate')->getCallable(), [($context["collection"] ?? null), ($context["limit"] ?? null), ($context["ignore_url_param_array"] ?? null)]);
            // line 141
            echo "
                            ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 143
                echo "                                ";
                $context["bannerimage"] = $this->getAttribute($this->getAttribute($context["item"], "media", []), "banner.jpg", [], "array");
                // line 144
                echo "                                <div class=\"recent-post\">
                                    ";
                // line 145
                if (($context["bannerimage"] ?? null)) {
                    // line 146
                    echo "                                        <div class=\"recent-post-image\">
                                            ";
                    // line 147
                    echo $this->getAttribute(($context["bannerimage"] ?? null), "quality", [0 => 100], "method");
                    echo "
                                        </div>
                                    ";
                } else {
                    // line 150
                    echo "                                        <div class=\"recent-post-image\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.png"), "html", null, true);
                    echo "\" width=\"60\" height=\"60\"></div>
                                    ";
                }
                // line 152
                echo "                                    <div class=\"recent-post-text\">
                                        <h4><a href=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                echo "</a></h4>
                                        <p>";
                // line 154
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", []), "M j, Y"), "html", null, true);
                echo "</p>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "                        </section>
                        ";
            // line 160
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
                // line 161
                echo "                            ";
                $this->loadTemplate("partials/pagination.html.twig", "partials/base.html.twig", 161)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
                // line 162
                echo "                        ";
            }
            // line 163
            echo "                    </div>
                    
                    <div>
                        <div class=\"grav-youtube\">
                            <iframe src=\"https://www.youtube.com/embed/pM8Vhzq5uYE?si=NOJwYE1OIucfNwcE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div>
                          <div class=\"grav-youtube\">
                            <iframe src=\"https://www.youtube.com/embed/ZkTC8YKO2lA?si=6S2ZT9gYELL-bS8E\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div> 
                    </div>
                ";
            // line 174
            echo "
                ";
            // line 176
            echo "
                ";
        } elseif (preg_match("~page;~",         // line 177
($context["uri"] ?? null))) {
            // line 178
            echo "                    <div></div>
                    <div>
                        <section class=\"home-posts\" style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; max-width: 976px; width: 100%\">
                            ";
            // line 181
            $context["collection"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []);
            // line 182
            echo "                            ";
            $context["limit"] = 4;
            // line 183
            echo "                            ";
            $context["ignore_url_param_array"] = [0 => "event"];
            // line 184
            echo "                            ";
            call_user_func_array($this->env->getFunction('paginate')->getCallable(), [($context["collection"] ?? null), ($context["limit"] ?? null), ($context["ignore_url_param_array"] ?? null)]);
            // line 185
            echo "
                            ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 187
                echo "                                ";
                $context["bannerimage"] = $this->getAttribute($this->getAttribute($context["item"], "media", []), "banner.jpg", [], "array");
                // line 188
                echo "                                <div class=\"recent-post\">
                                    ";
                // line 189
                if (($context["bannerimage"] ?? null)) {
                    // line 190
                    echo "                                        <div class=\"recent-post-image\">
                                            ";
                    // line 191
                    echo $this->getAttribute(($context["bannerimage"] ?? null), "quality", [0 => 100], "method");
                    echo "
                                        </div>
                                    ";
                } else {
                    // line 194
                    echo "                                        <div class=\"recent-post-image\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.png"), "html", null, true);
                    echo "\" width=\"60\" height=\"60\"></div>
                                    ";
                }
                // line 196
                echo "                                    <div class=\"recent-post-text\">
                                        <h4><a href=\"";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                echo "</a></h4>
                                        <p>";
                // line 198
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", []), "M j, Y"), "html", null, true);
                echo "</p>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                        </section>
                        ";
            // line 204
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
                // line 205
                echo "                            ";
                $this->loadTemplate("partials/pagination.html.twig", "partials/base.html.twig", 205)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
                // line 206
                echo "                        ";
            }
            // line 207
            echo "                    </div>
                    <div>
                    ";
            // line 210
            echo "                        <div class=\"grav-youtube\">
                            <iframe  src=\"https://www.youtube.com/embed/pM8Vhzq5uYE?si=NOJwYE1OIucfNwcE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div>   
                        <div class=\"grav-youtube\">
                           <iframe src=\"https://www.youtube.com/embed/ZkTC8YKO2lA?si=6S2ZT9gYELL-bS8E\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div> 
                    ";
            // line 217
            echo "                    </div>
                ";
            // line 219
            echo "                ";
            // line 220
            echo "
                ";
            // line 222
            echo "                ";
        } else {
            // line 223
            echo "                    <div class=\"sidebar-content recent-posts\">
                        <h3>Recent Posts</h3>
                        ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []), "order", [0 => "date", 1 => "desc"], "method"), "slice", [0 => 0, 1 => 5], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 226
                echo "                            ";
                $context["bannerimage"] = $this->getAttribute($this->getAttribute($context["p"], "media", []), "banner.jpg", [], "array");
                // line 227
                echo "                            <div class=\"recent-post\">
                                
                                <div class=\"recent-post-text\">
                                    <h4><a href=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", []), "html", null, true);
                echo "</a></h4>
                                    <p>";
                // line 231
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "M j, Y"), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "                    </div>
                    ";
            // line 237
            echo "                    <section class=\"container ";
            echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 238
            $this->displayBlock('messages', $context, $blocks);
            // line 241
            echo "                        ";
            $this->displayBlock("content_surround", $context, $blocks);
            echo "
                    </section>
                ";
        }
        // line 244
        echo "            </section>
        ";
    }

    // line 238
    public function block_messages($context, array $blocks = [])
    {
        // line 239
        echo "                            ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 239);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 240
        echo "                        ";
    }

    // line 250
    public function block_footer($context, array $blocks = [])
    {
        // line 251
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 251)->display($context);
        // line 252
        echo "    ";
    }

    // line 254
    public function block_mobile($context, array $blocks = [])
    {
        // line 255
        echo "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 258
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 258)->display(twig_array_merge($context, ["mobile" => true]));
        // line 259
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 261
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 261)->display(twig_array_merge($context, ["tree" => true]));
        // line 262
        echo "            </nav>
        </div>
    </div>
    ";
    }

    // line 267
    public function block_bottom($context, array $blocks = [])
    {
        // line 268
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  675 => 268,  672 => 267,  665 => 262,  663 => 261,  659 => 259,  657 => 258,  652 => 255,  649 => 254,  645 => 252,  642 => 251,  639 => 250,  635 => 240,  624 => 239,  621 => 238,  616 => 244,  609 => 241,  607 => 238,  602 => 237,  599 => 235,  589 => 231,  583 => 230,  578 => 227,  575 => 226,  571 => 225,  567 => 223,  564 => 222,  561 => 220,  559 => 219,  556 => 217,  548 => 210,  544 => 207,  541 => 206,  538 => 205,  535 => 204,  532 => 202,  522 => 198,  516 => 197,  513 => 196,  507 => 194,  501 => 191,  498 => 190,  496 => 189,  493 => 188,  490 => 187,  486 => 186,  483 => 185,  480 => 184,  477 => 183,  474 => 182,  472 => 181,  467 => 178,  465 => 177,  462 => 176,  459 => 174,  447 => 163,  444 => 162,  441 => 161,  438 => 160,  435 => 158,  425 => 154,  419 => 153,  416 => 152,  410 => 150,  404 => 147,  401 => 146,  399 => 145,  396 => 144,  393 => 143,  389 => 142,  386 => 141,  383 => 140,  380 => 139,  377 => 138,  375 => 137,  370 => 134,  367 => 133,  365 => 132,  362 => 130,  359 => 129,  354 => 126,  350 => 106,  347 => 105,  344 => 104,  328 => 112,  322 => 110,  320 => 109,  316 => 107,  314 => 104,  308 => 100,  306 => 99,  300 => 96,  297 => 95,  294 => 94,  288 => 92,  281 => 84,  276 => 83,  273 => 82,  263 => 79,  260 => 78,  257 => 77,  254 => 76,  249 => 73,  246 => 72,  243 => 71,  238 => 70,  233 => 69,  230 => 68,  227 => 67,  221 => 65,  174 => 19,  170 => 17,  166 => 16,  163 => 15,  161 => 14,  150 => 10,  147 => 9,  144 => 8,  130 => 271,  128 => 270,  126 => 267,  123 => 266,  121 => 254,  118 => 253,  115 => 250,  110 => 246,  108 => 129,  104 => 127,  102 => 126,  99 => 125,  97 => 94,  92 => 92,  84 => 86,  82 => 82,  79 => 81,  77 => 76,  74 => 75,  72 => 67,  70 => 8,  65 => 6,  62 => 5,  60 => 3,  58 => 2,  56 => 1,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
{% use 'blocks/base.html.twig' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    {# Style sidebar #}
    <style>
        .sidebar-content .recent-post {
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px solid #F0F0F0;
            float: left;
            clear: both;
            width: 100%;
        }

        .sidebar-content [class~='recent-post']:last-of-type {
            border-bottom: none;
        }

        .sidebar-content .recent-post .recent-post-image,
        .sidebar-content .recent-post .recent-post-text {
            float: left;
        }

        .sidebar-content .recent-post .recent-post-image {
            margin-right: 10px;
        }

        .sidebar-content .recent-post .recent-post-text h4 {
            font-family: serif;
            margin-bottom: 10px;
        }

        .sidebar-content .recent-post .recent-post-text h4 a {
            color: #193441;
        }

        .sidebar-content .recent-post .recent-post-text p {
            font-family: Arial, sans-serif;
            font-size: 1.5rem;
            color: #737373;
            margin: 0;
        }

        .home-posts img {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
        }
    </style>
    {# End Style sidebar #}
    
{% endblock head %}
{% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
    {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
    {% do assets.addCss('theme://css/custom.css') %}
    {% do assets.addCss('theme://css/line-awesome.min.css') %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>





<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        {% block header_navigation %}
                            {% include 'partials/navigation.html.twig' %}
                        {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\" style=\"display: grid; grid-template-columns: 20% 60% 20%;\">
                {#Home#}
                {#Paginate Pertama#}
                {% if uri.path == '/' %}
                    <div></div>
                    <div>
                        <section class=\"home-posts\" style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; max-width: 976px; width: 100%\">
                            {% set collection = page.find('/blog').children %}
                            {% set limit = 4 %}
                            {% set ignore_url_param_array = [ 'event' ] %}
                            {% do paginate( collection, limit, ignore_url_param_array ) %}

                            {% for item in collection %}
                                {% set bannerimage = item.media['banner.jpg'] %}
                                <div class=\"recent-post\">
                                    {% if bannerimage %}
                                        <div class=\"recent-post-image\">
                                            {{ bannerimage.quality(100) | raw }}
                                        </div>
                                    {% else %}
                                        <div class=\"recent-post-image\"><img src=\"{{ url('theme://images/logo.png') }}\" width=\"60\" height=\"60\"></div>
                                    {% endif %}
                                    <div class=\"recent-post-text\">
                                        <h4><a href=\"{{item.url}}\">{{ item.title }}</a></h4>
                                        <p>{{ item.date|date(\"M j, Y\")}}</p>
                                    </div>
                                </div>
                            {% endfor %}
                        </section>
                        {# include the pagination bar #}
                        {% if config.plugins.pagination.enabled and collection.params.pagination %}
                            {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                        {% endif %}
                    </div>
                    
                    <div>
                        <div class=\"grav-youtube\">
                            <iframe src=\"https://www.youtube.com/embed/pM8Vhzq5uYE?si=NOJwYE1OIucfNwcE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div>
                          <div class=\"grav-youtube\">
                            <iframe src=\"https://www.youtube.com/embed/ZkTC8YKO2lA?si=6S2ZT9gYELL-bS8E\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div> 
                    </div>
                {#EndPaginate Pertama#}

                {#Paginate Seterusnya#}

                {% elseif uri matches '~page;~' %}
                    <div></div>
                    <div>
                        <section class=\"home-posts\" style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; max-width: 976px; width: 100%\">
                            {% set collection = page.find('/blog').children %}
                            {% set limit = 4 %}
                            {% set ignore_url_param_array = [ 'event' ] %}
                            {% do paginate( collection, limit, ignore_url_param_array ) %}

                            {% for item in collection %}
                                {% set bannerimage = item.media['banner.jpg'] %}
                                <div class=\"recent-post\">
                                    {% if bannerimage %}
                                        <div class=\"recent-post-image\">
                                            {{ bannerimage.quality(100) | raw }}
                                        </div>
                                    {% else %}
                                        <div class=\"recent-post-image\"><img src=\"{{ url('theme://images/logo.png') }}\" width=\"60\" height=\"60\"></div>
                                    {% endif %}
                                    <div class=\"recent-post-text\">
                                        <h4><a href=\"{{item.url}}\">{{ item.title }}</a></h4>
                                        <p>{{ item.date|date(\"M j, Y\")}}</p>
                                    </div>
                                </div>
                            {% endfor %}
                        </section>
                        {# include the pagination bar #}
                        {% if config.plugins.pagination.enabled and collection.params.pagination %}
                            {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                        {% endif %}
                    </div>
                    <div>
                    {#YT#}
                        <div class=\"grav-youtube\">
                            <iframe  src=\"https://www.youtube.com/embed/pM8Vhzq5uYE?si=NOJwYE1OIucfNwcE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div>   
                        <div class=\"grav-youtube\">
                           <iframe src=\"https://www.youtube.com/embed/ZkTC8YKO2lA?si=6S2ZT9gYELL-bS8E\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div> 
                    {#EndYT#}
                    </div>
                {#EndPaginate Seterusnya#}
                {#EndHome#}

                {#Sidebar#}
                {% else %}
                    <div class=\"sidebar-content recent-posts\">
                        <h3>Recent Posts</h3>
                        {% for p in page.find('/blog').children.order('date', 'desc').slice(0, 5) %}
                            {% set bannerimage = p.media['banner.jpg'] %}
                            <div class=\"recent-post\">
                                
                                <div class=\"recent-post-text\">
                                    <h4><a href=\"{{p.url}}\">{{ p.title }}</a></h4>
                                    <p>{{ p.date|date(\"M j, Y\")}}</p>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    {#EndSidebar#}
                    <section class=\"container {{ grid_size }}\">
                        {% block messages %}
                            {% include 'partials/messages.html.twig' ignore missing %}
                        {% endblock %}
                        {{ block('content_surround') }}
                    </section>
                {% endif %}
            </section>
        {% endblock %}
        </section>
    </div>

    {#Footer#}
    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

    {% block mobile %}
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>
    {% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}
    {#Endfooter#}


</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\GRAV-UAS\\user\\themes\\quark\\templates\\partials\\base.html.twig");
    }
    private $deferred;
}
