<?php

kirby()->routes(array(
  array(
    'pattern' => 'robots.txt',
    'action'  => function() {
      $robots = tpl::load(__DIR__ . DS . 'template.php', array(), true);

      new Response($robots, 'txt');
    }
  )
));