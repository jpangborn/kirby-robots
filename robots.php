<?php

  $kirby->set('routes', array(
    'pattern' => 'robots.txt',
    'action'  => function() {
      $robots = tpl::load(__DIR__ . DS . 'template.php', array(), true);

      return new Response($robots, 'txt');
    }
  ));
