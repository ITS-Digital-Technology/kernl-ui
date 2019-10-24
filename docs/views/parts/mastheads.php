<?php $opt = (isset($_GET['opt']) ? $_GET['opt'] : null); ?>
<!-- start base masthead -->

<div id="nu__globalheader">
  <?= chromeHeader(); ?>
</div>

<header class="masthead<?= ' ' . $opt ?> -support -navbar">
  <a class="masthead_logo" href="#">
    <img class="masthead_image" alt="Logo" src="/docs/images/logo<?= ($opt == '-overlay' || $opt == '-dark') ? '-white' : '' ?>.png">
  </a>
  <div class="masthead_toggle">
    <button type="button" class="nav_handle hidden-up@d">
      <span class="sr-only">Menu</span>
    </button>
  </div>
  <nav class="nav masthead_nav" data-navigation-handle=".nav_handle" data-navigation-content=".masthead_toggle">
    <div class="w-100 d-flex justify-between hidden-up@d">
      <a class="masthead_logo pl-1 mb-0h" href="#">
        <img class="masthead_image" alt="Logo" src="/docs/images/logo<?= ($opt == '-dark') ? '-white' : '' ?>.png">
      </a>
      <button type="button" class="nav_handle hidden-up@d mr-1">
        <span class="sr-only">Close Menu</span>
      </button>
    </div>
    <div class="input_enclosed -search bg-gray-50 mx-1 mb-3h hidden-up@d pl-1 br">
      <label class="sr-only">Search</label>
      <input type="text" placeholder="Search">
      <button type="submit" class="btn tt-caps">Go</button>
    </div>


    <!-- local id navbar list -->
    <div class="masthead_navbar">
      <a class="masthead_navbar_id" href="#">
        Identifier
      </a>
      <ul class="nav_list">
        <li class="nav_item">
        <li class="nav_item">
          <a class="nav_link" href="#">Parturient Lorem</a>
        </li>
        <li class="nav_item +children">
          <a class="nav_link" href="#">Parturient</a>
          <ul class="nav_sublist">
            <li class="nav_back"><a href="#">Parturient</a></li>
            <li class="nav_subitem">
              <a class="nav_sublink" href="#">Something</a>
            </li>
            <li class="nav_subitem">
              <a class="nav_sublink" href="#">Something Else</a>
            </li>
          </ul>
        </li>
        <li class="nav_item">
          <a class="nav_link" href="#">Tellus Cursus</a>
        </li>
        <li class="nav_item">
          <a class="nav_link" href="#">Fermentum Euismod</a>
        </li>
      </ul>
    </div>
    <!-- standard nav list -->

    <div class="masthead_central">
      <ul class="nav_list">
        <li class="nav_item">
          <a class="nav_link" href="#">Lorem Ipsum</a>
        </li>
        <li class="nav_item +children">
          <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Bibendum</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="0">
            <li class="nav_back"><a href="#">Bibendum</a></li>
            <li class="nav_subitem">
              <a class="nav_sublink" href="#">Quam Vulputate Nibh</a>
            </li>
            <li class="nav_subitem">
              <a class="nav_sublink" href="#">Tortor Fusce</a>
            </li>
          </ul>
        </li>
        <li class="nav_item +children">
          <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Pudgi Homunculi</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="0">
            <li class="nav_back"><a href="#">Pudgi Homunculi</a></li>
            <li class="nav_subitem">
              <a class="nav_sublink" href="#">Malesuada Bibendum</a>
            </li>
            <li class="nav_subitem">
              <a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a>
            </li>
            <li class="nav_subitem +children">
              <a class="nav_sublink" href="#" aria-haspopup="true" aria-expanded="false">Venenatis Pharetra Sit Dolor</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Venenatis Pharetra Sit Dolor</a></li>
                <li class="nav_subitem">
                  <a class="nav_sublink" href="#">Mollis Aliquam</a>
                </li>
                <li class="nav_subitem">
                  <a class="nav_sublink" href="#">Ut Porttitor</a>
                </li>
                <li class="nav_subitem">
                  <a class="nav_sublink" href="#">Leo Dolor</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav_item +children">
          <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Nucleus</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="0">
            <li class="nav_back"><a href="#">Malesuada Nucleus</a></li>
            <li class="nav_subitem">
              <a class="nav_sublink" href="#">Quam Vulputate Nibh</a>
            </li>
            <li class="nav_subitem">
              <a class="nav_sublink" href="#">Tortor Fusce</a>
            </li>
          </ul>
        </li>
        <li class="nav_item hidden-down@t">
          <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
              <circle cx="9.5" cy="9.5" r="6.5" />
              <path d="M18 18l-3.2-3.2" /></svg>
          </a>
        </li>
      </ul>
    </div>
    <?php /*
<!-- // megamenu list -->
    <div class="masthead_central">
      <ul class="nav_list">
        <li class="nav_item +children">
          <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Lorem Ipsum</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="0">
            <li class="nav_back"><a href="#">Lorem Ipsum</a></li>
            <li class="nav_subitem +children">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Bibendum</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Malesuada Bibendum</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
              </ul>
            </li>
            <li class="nav_subitem +children">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Tortor Fusce</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Tortor Fusce</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
              </ul>
            </li>
            <li class="nav_subitem +children">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Quam Vulputate Nibh</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
              </ul>
            </li>
            <li class="nav_subitem +children -feature">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Bibendum Mattis Dapibus</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Vulputate Nibh Quam</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav_item +children">
          <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Bibendum</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="0">
            <li class="nav_back"><a href="#">Bibendum</a></li>
            <li class="nav_subitem +children">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Tortor Fusce</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Tortor Fusce</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
              </ul>
            </li>
            <li class="nav_subitem +children">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Quam Vulputate Nibh</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
              </ul>
            </li>
            <li class="nav_subitem +children">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Bibendum</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Malesuada Bibendum</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
              </ul>
            </li>
            <li class="nav_subitem +children -feature">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Purus Magna Pellentesque</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Purus Magna Pellentesque</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Vulputate Nibh Quam</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav_item +children">
          <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Pudgi Homunculi</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="0">
            <li class="nav_back"><a href="#">Pudgi Homunculi</a></li>
            <li class="nav_subitem +children">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Quam Vulputate Nibh</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
              </ul>
            </li>
            <li class="nav_subitem +children">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Bibendum</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Malesuada Bibendum</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
              </ul>
            </li>
            <li class="nav_subitem +children">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Tortor Fusce</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Tortor Fusce</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
              </ul>
            </li>
            <li class="nav_subitem +children -feature">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Vulputate Nibh Quam</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Vulputate Nibh Quam</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav_item +children">
          <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Nucleus</a>
          <ul class="nav_sublist" aria-expanded="false" data-depth="0">
            <li class="nav_back"><a href="#">Malesuada Nucleus</a></li>
            <li class="nav_subitem +children">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Malesuada Bibendum</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Malesuada Bibendum</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
              </ul>
            </li>
            <li class="nav_subitem +children">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Quam Vulputate Nibh</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
              </ul>
            </li>
            <li class="nav_subitem +children">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Mollis Elit</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Mollis Elit</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Bibendum Mattis Dapibus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
              </ul>
            </li>
            <li class="nav_subitem +children -feature">
              <a class="nav_sublink -heading" href="#" aria-haspopup="true" aria-expanded="false">Dapibus Ornare Tellus</a>
              <ul class="nav_sublist" aria-expanded="false" data-depth="1">
                <li class="nav_back"><a href="#">Dapibus Ornare Tellus</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Vulputate Nibh Quam</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Quam Vulputate Nibh</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Tortor Fusce</a></li>
                <li class="nav_subitem"><a class="nav_sublink" href="#">Malesuada Bibendum</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav_item +icon hidden-down@t">
          <a class="nav_link" href="#" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="9.5" cy="9.5" r="6.5"/><path d="M18 18l-3.2-3.2"/></svg>
          </a>
        </li>
      </ul>
    </div>
*/ ?>
    <ul class="nav_list masthead_support">
      <li class="nav_item">
        <a class="nav_link" href="#">About</a>
      </li>
      <li class="nav_item">
        <a class="nav_link" href="#">Forms</a>
      </li>
      <li class="nav_item">
        <a class="nav_link" href="#">Faculty &amp; Staff</a>
      </li>
    </ul>

  </nav>
  <a class="masthead_navbar_id bwt-1 hidden-up@d" href="#">
    Identifier
  </a>
</header>
<main id="main_content">
  <!--   <div class="section bg-img -hero -center">
    <div class="section_header">
      <h2 class="section_title">{ <i>Example Hero</i> }</h2>
    </div>
  </div> -->

  <div class="banner -bottom bg-blue-dark">
    <div class="section_header">
      <h2 class="section_title">Banner Example</h2>
      <div class="section_subtitle">Here's a little example subtitle</div>
    </div>
  </div>
</main>
