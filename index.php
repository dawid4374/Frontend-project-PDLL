<?php

require './vendor/smarty/smarty/libs/Smarty.class.php';

$projects = [
    [
        'id' => 1,
        'name' => 'START',
        'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias illum alias in!',
        'views' => [
            'Strona główna', 'Widok podstron', 'Widok aktualności',
        ],
        'price' => [
            'current' => '1020',
            'old' => '2550',
        ],
    ],
    [
        'id' => 2,
        'name' => 'PRO',
        'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit!',
        'views' => [
            'Strona główna', 'Widok podstron', 'Widok aktualności', 'Widok oferty',
        ],
        'price' => [
            'current' => '1845',
            'old' => '3699',
        ],
    ],
    [
        'id' => 3,
        'name' => 'DEDYK',
        'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias illum alias in!',
        'views' => [
            'Strona główna', 'Widok podstron', 'Widok aktualności', 'Widok oferty', 'Widok kontaktu', 'oraz inne',
        ],
        'price' => [
            'current' => 'Wycena indywidualna',
            'old' => 'płatność za rok',
        ],
    ]
];

$projectsDesigns = [
    [
      'id' => 0,
      'name' => "RWD#01",
      'img' => [
          'a' => "https://picsum.photos/id/0/85/50",
          'h' => "https://picsum.photos/id/0/300/150"
      ],
    ],
    [
        'id' => 1,
        'name' => "RWD#02",
        'img' => [
            'a' => "https://picsum.photos/id/1/85/50",
            'h' => "https://picsum.photos/id/1/300/150"
        ],
      ],
      [
        'id' => 2,
        'name' => "RWD#03",
        'img' => [
            'a' => "https://picsum.photos/id/2/85/50",
            'h' => "https://picsum.photos/id/2/300/150"
        ],
      ],
      [
        'id' => 3,
        'name' => "RWD#04",
        'img' => [
            'a' => "https://picsum.photos/id/3/85/50",
            'h' => "https://picsum.photos/id/3/300/150"
        ],
      ],
      [
        'id' => 4,
        'name' => "RWD#05",
        'img' => [
            'a' => "https://picsum.photos/id/4/85/50",
            'h' => "https://picsum.photos/id/4/300/150"
        ],
      ],
      [
        'id' => 5,
        'name' => "RWD#06",
        'img' => [
            'a' => "https://picsum.photos/id/5/85/50",
            'h' => "https://picsum.photos/id/5/300/150"
        ],
      ],
      [
        'id' => 6,
        'name' => "RWD#07",
        'img' => [
            'a' => "https://picsum.photos/id/6/85/50",
            'h' => "https://picsum.photos/id/6/300/150"
        ],
      ],
      [
        'id' => 7,
        'name' => "RWD#08",
        'img' => [
            'a' => "https://picsum.photos/id/7/85/50",
            'h' => "https://picsum.photos/id/7/300/150"
        ],
      ],
      [
        'id' => 8,
        'name' => "RWD#09",
        'img' => [
            'a' => "https://picsum.photos/id/8/85/50",
            'h' => "https://picsum.photos/id/8/300/150"
        ],
      ],
      [
        'id' => 9,
        'name' => "RWD#10",
        'img' => [
            'a' => "https://picsum.photos/id/9/85/50",
            'h' => "https://picsum.photos/id/9/300/150"
        ],
      ],
  ];

$questions = ['Czy muszę sam kupić domenę?', 'Czy otrzymam gwarancję?', 'Jakie są dodatkowe koszty?', 'Ile trwa zrobienie strony?', 'Ile pracy na mnie czeka?', 'Czy mogę samodzielnie tworzyć menu?', 'Jak trudny jest CMS?', 'Gdzie znajdę pomoc?'];

$smarty = new Smarty;

$smarty->setTemplateDir('./views');
$smarty->setCompileDir('./views/compiled');
$smarty->setCacheDir('./views/cache');
$smarty->setPluginsDir(array('./views/plugins','./class/smarty/plugins','./class/smarty/plugins/this'));


$smarty->assign('title', 'Pdll - Strony internetowe');
$smarty->assign('publicDomain', 'http://localhost/pdll/');
//$smarty->assign('publicDomain', 'http://stazftp.cg2.pl/pdll/');
$smarty->assign('projects', $projects);
$smarty->assign('projectsDesigns', $projectsDesigns);
$smarty->assign('questions', $questions);

//var_dump($_GET['cg2']);
$projectsJSON = json_encode($projects);

$smarty->assign('projectsJSON', $projectsJSON);

if(!empty($_GET['cg2'])) {
    $smarty->assign('bodyClass', 'view_templates-'.$_GET['cg2']);
    $smarty->display('./templates/'.$_GET['cg2'].'.tpl');
}
else{
    $smarty->assign('bodyClass', 'view_templates-home');
    $smarty->display('./templates/home.tpl');
}
?>
