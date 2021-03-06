<?php

return [
    'production' => false,
    'baseUrl' => 'https://nam-le.netlify.app/',
    'site' => [
        'title' => '',
        'description' => '',
        'image' => '',
    ],
    'owner' => [
        'name' => 'ai đây?',
        
    ],
    'services' => [
        'cmsVersion' => '2.10.111',
        'analytics' => 'UA-XXXXX-Y',
        'disqus' => 'disqus_Sl1FolgPm7',
        'cloudinary' => [
            'cloudName' => 'nam-le',
            'apiKey' => '377554192597786',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
