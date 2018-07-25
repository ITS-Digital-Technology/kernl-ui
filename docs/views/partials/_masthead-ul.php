<?php

/*
 * int $id                id of instance
 * str $masthead_classes  css classes assigned to masthead
 * str $banner_classes    css classes assigned to banner
 */

function masthead($id, $masthead_classes, $banner_classes)
{
    $url = '';

    if ($_SERVER['HTTP_HOST'] == 'kernl-ui.test') {
        $url = 'https://'. $_SERVER['HTTP_HOST'];
    } else {
        $url = 'http://nuweb28dev.neu.edu/kernl-ui';
    }

  ($masthead_classes == '--overlay' || $masthead_classes == 'bg--black') ? $logo = "-white" : $logo = "";

    echo '
<header class="masthead ' . $masthead_classes . '">
  <a class="__logo" href="' . $url . '">
    <img class="__logo__image" alt="Logo" src="'. $url .'/docs/images/logo' . $logo . '.png">
  </a>
  <button class="__toggler hidden--up@d" id="toggle_' . $id . '"><i data-feather="menu"></i></button>
  <nav class="__drawer" id="drawer_' . $id . '" role="navigation">
    <div class="w--100 d--flex justify--between hidden--up@d">
      <a class="__logo" href="' . $url .'">
        <img class="__logo__image" alt="Logo" src="'. $url .'/docs/images/logo-white.png">
      </a>
      <button class="__toggler menu-is-open"><i data-feather="x"></i></button>
    </div>

    <ul class="__list">
      <li class="__item">
        <a class="__link" href="' . $url .'">Lorem Ipsum</a>
      </li>
      <li class="__item +children --active">
        <a class="__link" href="' . $url .'">Bibendum</a>
        <ul class="__submenu">
          <li class="__item"><a class="__link" href="' . $url .'">Quam Vulputate Nibh</a></li>
          <li class="__item"><a class="__link" href="' . $url .'">Tortor Fusce</a></li>
        </ul>
      </li>
      <li class="__item +children">
        <a class="__link" href="' . $url .'">Pudgi Homunculi</a>
        <ul class="__submenu">
          <li class="__item"><a class="__link" href="' . $url .'">Malesuada Bibendum</a></li>
          <li class="__item"><a class="__link" href="' . $url .'">Bibendum Mattis Dapibus</a></li>
          <li class="__item"><a class="__link" href="' . $url .'">Venenatis Pharetra Sit Dolor</a></li>
        </ul>
      </li>
      <li class="__item +children">
        <a class="__link" href="' . $url .'">Malesuada Nucleus</a>
        <ul class="__submenu">
          <li class="__item"><a class="__link" href="' . $url .'">Quam Vulputate Nibh</a></li>
          <li class="__item"><a class="__link" href="' . $url .'">Tortor Fusce</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</header>
<div class="section banner --hero bg--img ta--c justify--center ' . $banner_classes . '">
  <h2 class="__title py--5@xs">{ <i>Example Hero</i> }</h2>
</div>';
}
