<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/GRAV-UAS/user/pages/01.home/default.md',
    'modified' => 1717392893,
    'size' => 169,
    'data' => [
        'header' => [
            'title' => 'Home',
            'body_classes' => 'title-center title-h1h2',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'header.date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'limit' => 10
            ]
        ],
        'frontmatter' => 'title: Home
body_classes: "title-center title-h1h2"
content:
  items: "@self.children"
  order:
    by: header.date
    dir: desc
  pagination: true
  limit: 10',
        'markdown' => ''
    ]
];
