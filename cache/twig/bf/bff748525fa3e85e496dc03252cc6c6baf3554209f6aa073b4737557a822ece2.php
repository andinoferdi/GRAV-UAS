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
        // line 66
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('assets', $context, $blocks);
        // line 85
        echo "</head>

<body id=\"top\" class=\"";
        // line 87
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
        ";
        // line 89
        $this->displayBlock('header', $context, $blocks);
        // line 117
        echo "
        ";
        // line 118
        $this->displayBlock('hero', $context, $blocks);
        // line 119
        echo "
        <section id=\"start\">
            ";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 290
        echo "        </section>
    </div>

    ";
        // line 294
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 297
        echo "
    ";
        // line 298
        $this->displayBlock('mobile', $context, $blocks);
        // line 310
        echo "
    ";
        // line 311
        $this->displayBlock('bottom', $context, $blocks);
        // line 314
        echo "</body>
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
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 66
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 67
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 68
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 69
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 70
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 71
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 72
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        // line 76
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 77
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 78
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 81
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 82
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 83
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 87
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
    }

    // line 89
    public function block_header($context, array $blocks = [])
    {
        // line 90
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 91
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 94
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 94)->display($context);
        // line 95
        echo "                    </section>
                    <section class=\"navbar-section desktop-menu\">
                        <nav class=\"dropmenu animated\">
                            ";
        // line 98
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 101
        echo "                        </nav>
                        ";
        // line 102
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 103
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 103)->display($context);
            echo "</span>
                        ";
        }
        // line 105
        echo "                    </section>
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

    // line 98
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 99
        echo "                                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 99)->display($context);
        // line 100
        echo "                            ";
    }

    // line 118
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 121
    public function block_body($context, array $blocks = [])
    {
        // line 122
        echo "            <section id=\"body-wrapper\" class=\"section\" style=\"display: grid; grid-template-columns: 20% 60% 20%;\">
                ";
        // line 124
        echo "                ";
        // line 125
        echo "                ";
        if (($this->getAttribute(($context["uri"] ?? null), "path", []) == "/")) {
            // line 126
            echo "                    <div></div>
                    <div>
                        ";
            // line 129
            echo "                        <div class=\"hero-section\">
                            <div class=\"container\">
                                <h1>D4 Perbankan dan Keuangan</h1>
                                <p>
                                    Bisnis pada bidang jasa keuangan berbasis teknologi akan terus tumbuh. Industri perbankan menjadi salah satu industri yang diharuskan untuk cepat menyesuaikan diri. Program studi D4 Perbankan dan Keuangan hadir untuk menjawab tantangan tersebut. Program studi ini berada di bawah naungan Departemen Bisnis Fakultas Vokasi. Lulusan yang dicetak mampu dan cakap dalam melakukan kegiatan manajerial pada industri perbankan. Lulusan juga dibekali dengan sertifikasi yang menunjang kompetensi mereka. Lapangan pekerjaan bagi lulusan D4 Perbankan dan Keuangan tidak hanya di sektor perbankan tapi juga bisa bekerja di lembaga keuangan non perbankan seperti pegadaian, lembaga financing, koperasi, asuransi, dan berwirausaha. Mahasiswa pada program studi D4 Perbankan dan Keuangan ditempuh dengan jumlah sks sebesar 144 sks.
                                </p>
                            </div>
                        </div>

                        <div class=\"accreditation-section\">
                            <div class=\"container\">
                                <h2>AKREDITASI</h2>
                                <p><h3>A</h3></p>
                            </div>
                        </div>

                        <style>
                            .hero-section {
                                padding: 20px 0;
                                background-color: #f9f9f9;
                                text-align: center;
                            }

                            .content-section {
                                padding: 20px 0;
                                background-color: #f9f9f9;
                            }

                            .container {
                                max-width: 976px;
                                width: 100%;
                                margin: 0 auto;
                            }

                            .accreditation-section {
                                padding: 20px 0;
                                text-align: center;
                            }
                        </style>

                        <div class=\"Post-section\">
                            <div class=\"container\">
                                <section class=\"home-posts\" style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; max-width: 976px; width: 100%\">
                                    ";
            // line 172
            $context["collection"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []);
            // line 173
            echo "                                    ";
            $context["limit"] = 4;
            // line 174
            echo "                                    ";
            $context["ignore_url_param_array"] = [0 => "event"];
            // line 175
            echo "                                    ";
            call_user_func_array($this->env->getFunction('paginate')->getCallable(), [($context["collection"] ?? null), ($context["limit"] ?? null), ($context["ignore_url_param_array"] ?? null)]);
            // line 176
            echo "
                                    ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 178
                echo "                                        ";
                $context["bannerimage"] = $this->getAttribute($this->getAttribute($context["item"], "media", []), "banner.jpg", [], "array");
                // line 179
                echo "                                        <div class=\"recent-post\">
                                            ";
                // line 180
                if (($context["bannerimage"] ?? null)) {
                    // line 181
                    echo "                                                <div class=\"recent-post-image\">
                                                    ";
                    // line 182
                    echo $this->getAttribute(($context["bannerimage"] ?? null), "quality", [0 => 100], "method");
                    echo "
                                                </div>
                                            ";
                } else {
                    // line 185
                    echo "                                                <div class=\"recent-post-image\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.png"), "html", null, true);
                    echo " \" width=\"60\" height=\"60\"></div>
                                            ";
                }
                // line 187
                echo "                                            <div class=\"recent-post-text\">
                                                <h4><a href=\"";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                echo "</a></h4>
                                                <p>";
                // line 189
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", []), "M j, Y"), "html", null, true);
                echo "</p>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "                                </section>
                            </div>
                        </div>
                        <style>
                            .recent-post .recent-post-image img {
                                width: 100%; 
                                height: auto; 
                                max-width: none; 
                            }
                        </style>


                        ";
            // line 206
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
                // line 207
                echo "                            ";
                $this->loadTemplate("partials/pagination.html.twig", "partials/base.html.twig", 207)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
                // line 208
                echo "                        ";
            }
            // line 209
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
            // line 219
            echo "
                ";
            // line 221
            echo "
                ";
        } elseif (preg_match("~page;~",         // line 222
($context["uri"] ?? null))) {
            // line 223
            echo "                    <div></div>
                    <div>
                        <section class=\"home-posts\" style=\"display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; max-width: 976px; width: 100%\">
                            ";
            // line 226
            $context["collection"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []);
            // line 227
            echo "                            ";
            $context["limit"] = 4;
            // line 228
            echo "                            ";
            $context["ignore_url_param_array"] = [0 => "event"];
            // line 229
            echo "                            ";
            call_user_func_array($this->env->getFunction('paginate')->getCallable(), [($context["collection"] ?? null), ($context["limit"] ?? null), ($context["ignore_url_param_array"] ?? null)]);
            // line 230
            echo "
                            ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 232
                echo "                                ";
                $context["bannerimage"] = $this->getAttribute($this->getAttribute($context["item"], "media", []), "banner.jpg", [], "array");
                // line 233
                echo "                                <div class=\"recent-post\">
                                    ";
                // line 234
                if (($context["bannerimage"] ?? null)) {
                    // line 235
                    echo "                                        <div class=\"recent-post-image\">
                                            ";
                    // line 236
                    echo $this->getAttribute(($context["bannerimage"] ?? null), "quality", [0 => 100], "method");
                    echo "
                                        </div>
                                    ";
                } else {
                    // line 239
                    echo "                                        <div class=\"recent-post-image\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/logo.png"), "html", null, true);
                    echo "\" width=\"60\" height=\"60\"></div>
                                    ";
                }
                // line 241
                echo "                                    <div class=\"recent-post-text\">
                                        <h4><a href=\"";
                // line 242
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                echo "</a></h4>
                                        <p>";
                // line 243
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", []), "M j, Y"), "html", null, true);
                echo "</p>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                        </section>
                        ";
            // line 249
            echo "                        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
                // line 250
                echo "                            ";
                $this->loadTemplate("partials/pagination.html.twig", "partials/base.html.twig", 250)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
                // line 251
                echo "                        ";
            }
            // line 252
            echo "                    </div>
                    <div>
                        ";
            // line 255
            echo "                        <div class=\"grav-youtube\">
                            <iframe src=\"https://www.youtube.com/embed/pM8Vhzq5uYE?si=NOJwYE1OIucfNwcE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div>
                        <div class=\"grav-youtube\">
                            <iframe src=\"https://www.youtube.com/embed/ZkTC8YKO2lA?si=6S2ZT9gYELL-bS8E\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div>
                        ";
            // line 262
            echo "                    </div>
                ";
            // line 264
            echo "                ";
            // line 265
            echo "
                ";
            // line 267
            echo "                ";
        } else {
            // line 268
            echo "                    <div class=\"sidebar-content recent-posts\">
                        <h3>Recent Posts</h3>
                        ";
            // line 270
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []), "order", [0 => "date", 1 => "desc"], "method"), "slice", [0 => 0, 1 => 5], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 271
                echo "                            ";
                $context["bannerimage"] = $this->getAttribute($this->getAttribute($context["p"], "media", []), "banner.jpg", [], "array");
                // line 272
                echo "                            <div class=\"recent-post\">
                                <div class=\"recent-post-text\">
                                    <h4><a href=\"";
                // line 274
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", []), "html", null, true);
                echo "</a></h4>
                                    <p>";
                // line 275
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "M j, Y"), "html", null, true);
                echo "</p>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            echo "                    </div>
                    ";
            // line 281
            echo "                    <section class=\"container ";
            echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 282
            $this->displayBlock('messages', $context, $blocks);
            // line 285
            echo "                        ";
            $this->displayBlock("content_surround", $context, $blocks);
            echo "
                    </section>
                ";
        }
        // line 288
        echo "            </section>
            ";
    }

    // line 282
    public function block_messages($context, array $blocks = [])
    {
        // line 283
        echo "                            ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 283);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 284
        echo "                        ";
    }

    // line 294
    public function block_footer($context, array $blocks = [])
    {
        // line 295
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 295)->display($context);
        // line 296
        echo "    ";
    }

    // line 298
    public function block_mobile($context, array $blocks = [])
    {
        // line 299
        echo "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 302
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 302)->display(twig_array_merge($context, ["mobile" => true]));
        // line 303
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 305
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 305)->display(twig_array_merge($context, ["tree" => true]));
        // line 306
        echo "            </nav>
        </div>
    </div>
    ";
    }

    // line 311
    public function block_bottom($context, array $blocks = [])
    {
        // line 312
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
        return array (  714 => 312,  711 => 311,  704 => 306,  702 => 305,  698 => 303,  696 => 302,  691 => 299,  688 => 298,  684 => 296,  681 => 295,  678 => 294,  674 => 284,  663 => 283,  660 => 282,  655 => 288,  648 => 285,  646 => 282,  641 => 281,  638 => 279,  628 => 275,  622 => 274,  618 => 272,  615 => 271,  611 => 270,  607 => 268,  604 => 267,  601 => 265,  599 => 264,  596 => 262,  588 => 255,  584 => 252,  581 => 251,  578 => 250,  575 => 249,  572 => 247,  562 => 243,  556 => 242,  553 => 241,  547 => 239,  541 => 236,  538 => 235,  536 => 234,  533 => 233,  530 => 232,  526 => 231,  523 => 230,  520 => 229,  517 => 228,  514 => 227,  512 => 226,  507 => 223,  505 => 222,  502 => 221,  499 => 219,  488 => 209,  485 => 208,  482 => 207,  479 => 206,  465 => 193,  455 => 189,  449 => 188,  446 => 187,  440 => 185,  434 => 182,  431 => 181,  429 => 180,  426 => 179,  423 => 178,  419 => 177,  416 => 176,  413 => 175,  410 => 174,  407 => 173,  405 => 172,  360 => 129,  356 => 126,  353 => 125,  351 => 124,  348 => 122,  345 => 121,  340 => 118,  336 => 100,  333 => 99,  330 => 98,  315 => 105,  309 => 103,  307 => 102,  304 => 101,  302 => 98,  297 => 95,  295 => 94,  289 => 91,  286 => 90,  283 => 89,  277 => 87,  270 => 83,  265 => 82,  262 => 81,  252 => 78,  249 => 77,  246 => 76,  243 => 75,  238 => 72,  235 => 71,  232 => 70,  227 => 69,  222 => 68,  219 => 67,  216 => 66,  166 => 19,  162 => 17,  158 => 16,  155 => 15,  153 => 14,  142 => 10,  139 => 9,  136 => 8,  124 => 314,  122 => 311,  119 => 310,  117 => 298,  114 => 297,  111 => 294,  106 => 290,  104 => 121,  100 => 119,  98 => 118,  95 => 117,  93 => 89,  88 => 87,  84 => 85,  82 => 81,  79 => 80,  77 => 75,  74 => 74,  72 => 66,  70 => 8,  65 => 6,  62 => 5,  60 => 3,  58 => 2,  56 => 1,  25 => 4,);
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
    {% if theme_var('spectre.icons') %}{% do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
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
                {# Home #}
                {# Paginate Pertama #}
                {% if uri.path == '/' %}
                    <div></div>
                    <div>
                        {# Add new section for \"D4 Perbankan dan Keuangan\" #}
                        <div class=\"hero-section\">
                            <div class=\"container\">
                                <h1>D4 Perbankan dan Keuangan</h1>
                                <p>
                                    Bisnis pada bidang jasa keuangan berbasis teknologi akan terus tumbuh. Industri perbankan menjadi salah satu industri yang diharuskan untuk cepat menyesuaikan diri. Program studi D4 Perbankan dan Keuangan hadir untuk menjawab tantangan tersebut. Program studi ini berada di bawah naungan Departemen Bisnis Fakultas Vokasi. Lulusan yang dicetak mampu dan cakap dalam melakukan kegiatan manajerial pada industri perbankan. Lulusan juga dibekali dengan sertifikasi yang menunjang kompetensi mereka. Lapangan pekerjaan bagi lulusan D4 Perbankan dan Keuangan tidak hanya di sektor perbankan tapi juga bisa bekerja di lembaga keuangan non perbankan seperti pegadaian, lembaga financing, koperasi, asuransi, dan berwirausaha. Mahasiswa pada program studi D4 Perbankan dan Keuangan ditempuh dengan jumlah sks sebesar 144 sks.
                                </p>
                            </div>
                        </div>

                        <div class=\"accreditation-section\">
                            <div class=\"container\">
                                <h2>AKREDITASI</h2>
                                <p><h3>A</h3></p>
                            </div>
                        </div>

                        <style>
                            .hero-section {
                                padding: 20px 0;
                                background-color: #f9f9f9;
                                text-align: center;
                            }

                            .content-section {
                                padding: 20px 0;
                                background-color: #f9f9f9;
                            }

                            .container {
                                max-width: 976px;
                                width: 100%;
                                margin: 0 auto;
                            }

                            .accreditation-section {
                                padding: 20px 0;
                                text-align: center;
                            }
                        </style>

                        <div class=\"Post-section\">
                            <div class=\"container\">
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
                                                <div class=\"recent-post-image\"><img src=\"{{ url('theme://images/logo.png') }} \" width=\"60\" height=\"60\"></div>
                                            {% endif %}
                                            <div class=\"recent-post-text\">
                                                <h4><a href=\"{{item.url}}\">{{ item.title }}</a></h4>
                                                <p>{{ item.date|date(\"M j, Y\")}}</p>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </section>
                            </div>
                        </div>
                        <style>
                            .recent-post .recent-post-image img {
                                width: 100%; 
                                height: auto; 
                                max-width: none; 
                            }
                        </style>


                        {# Include the pagination bar #}
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
                {# End Paginate Pertama #}

                {# Paginate Seterusnya #}

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
                        {# Include the pagination bar #}
                        {% if config.plugins.pagination.enabled and collection.params.pagination %}
                            {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                        {% endif %}
                    </div>
                    <div>
                        {# YT #}
                        <div class=\"grav-youtube\">
                            <iframe src=\"https://www.youtube.com/embed/pM8Vhzq5uYE?si=NOJwYE1OIucfNwcE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div>
                        <div class=\"grav-youtube\">
                            <iframe src=\"https://www.youtube.com/embed/ZkTC8YKO2lA?si=6S2ZT9gYELL-bS8E\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>
                        </div>
                        {# End YT #}
                    </div>
                {# End Paginate Seterusnya #}
                {# End Home #}

                {# Sidebar #}
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
                    {# End Sidebar #}
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

    {# Footer #}
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
</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\GRAV-UAS\\user\\themes\\quark\\templates\\partials\\base.html.twig");
    }
    private $deferred;
}
