
<header class="section --banner bg--img">
  <div class="__body">
    <h2 class="__title">Example Interior/On-Page Nav</h2>
  </div>
</header>

<section class="section measure--narrow mx--auto">
  <div class="row">
    <div class="col --12@xs --5@md --4@lg --3@xl mb--1@xs">
      <div class="hidden--up@md ta--c">
        <button class="__toggler btn --sm" data-component="button" data-toggle="collapse" data-target="#page_menu">
          <i class="__icon --left" data-feather="menu"></i>
          Page Menu
        </button>
      </div>
      <nav class="nav --interior collapse" id="page_menu">
        <ul class="__list">
          <li class="__item --title">
            <a class="__link" href="#">Ipsum Magna Aenean</a>
          </li>
          <li class="__item">
            <a class="__link" href="#">Dolor Fermentum Ullamcorper Fringilla</a>
          </li>
          <li class="__item --active +children">
            <a class="__link" href="#">Lorem Aenean Sit Sem</a>
            <ul class="__list">
              <li class="__item">
                <a class="__link" href="#">Cras Lorem</a>
              </li>
              <li class="__item --active">
                <a class="__link" href="#">Ridiculus Purus Ultricies Vehicula Euismod Sit Parturient Pellentesque Magna Sem</a>
              </li>
              <li class="__item">
                <a class="__link" href="#">Tristique Ultricies Ligula Parturient</a>
              </li>
            </ul>
          </li>
          <li class="__item">
            <a class="__link" href="#">Sit Parturient Pellentesque Magna Sem Ridiculus Ultricies Euismod</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="col --12@xs --7@md --8@lg --9@xl">
      <h2>Page Content Here</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Nullam quis risus eget urna mollis ornare vel eu leo. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
      <h3>Change the viewport width</h3>
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue.</p>
      <h3>Morbi leo risus</h3>
      <p>Porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
    </div>
  </div>
</section>

<section class="section --banner --50 +bgimg +nav">
  <div class="__body">
    <h1 class="__title">Banner with Tabbed Navigation</h1>
    <div class="__subtitle">Includes Background Image</div>
  </div>
  <nav class="nav --tabbed">
    <ul class="__list" role="tablist">
      <li class="__item --title">
        <a class="__link --active" data-toggle="tab" href="#tab_1" role="tab" aria-expanded="true">Tab Number One</a>
      </li>
      <li class="__item">
        <a class="__link" data-toggle="tab" href="#tab_2" role="tab" aria-expanded="false">The Second Tab</a>
      </li>
      <li class="__item">
        <a class="__link" data-toggle="tab" href="#tab_3" role="tab" aria-expanded="false">Number Three Tab</a>
      </li>
      <li class="__item">
        <a class="__link" data-toggle="tab" href="#tab_4" role="tab" aria-expanded="false">And Tab the Fourth</a>
      </li>
    </ul>
  </nav>
</section>

<section class="section k_bg-light">
  <header class="k_section__header">Tabbed Nav</header>
  <div class="row">
    <div class="col --12@xs">
      <nav class="nav --tabbed">
        <ul class="__list" role="tablist">
          <li class="__item">
            <a class="__link --active" data-toggle="tab" href="#tab_1" role="tab" aria-expanded="true">Tab 1</a>
          </li>
          <li class="__item">
            <a class="__link" data-toggle="tab" href="#tab_2" role="tab" aria-expanded="false">Tab 2</a>
          </li>
          <li class="__item">
            <a class="__link" data-toggle="tab" href="#tab_3" role="tab" aria-expanded="false">Tab 3</a>
          </li>
          <li class="__item">
            <a class="__link" data-toggle="tab" href="#tab_4" role="tab" aria-expanded="false">Tab 4</a>
          </li>
        </ul>
      </nav>
      <div class="nav__content">
        <div class="hidden pt--1@xs --active" id="tab_1" role="tabpanel">
          <h3>Content 1</h3>
          <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="hidden pt--1@xs" id="tab_2" role="tabpanel">
          <h3>Content 2</h3>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
        <div class="hidden pt--1@xs" id="tab_3" role="tabpanel">
          <h3>Content 3</h3>
          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
        </div>
        <div class="hidden pt--1@xs" id="tab_4" role="tabpanel">
          <h3>Content 4</h3>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor. Donec id elit non mi porta gravida at eget metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <header class="k_section__header" style="border-bottom: 0 none;">Tabbed Nav: Bordered</header>
  <p class="mb--2@xs"><i>Add <code>--bordered</code> to the <code>nav</code> element to give a line of separation from the sibling content below.</i></p>
  <div class="row">
    <div class="col --12@xs">
      <nav class="nav --tabbed --bordered">
        <ul class="__list" role="tablist">
          <li class="__item">
            <a class="__link --active" data-toggle="tab" href="#tab_5" role="tab" aria-expanded="true">Mozzarella Sticks</a>
          </li>
          <li class="__item">
            <a class="__link" data-toggle="tab" href="#tab_6" role="tab" aria-expanded="false">Mushroom Pizza Pie</a>
          </li>
          <li class="__item">
            <a class="__link" data-toggle="tab" href="#tab_7" role="tab" aria-expanded="false">Fried Ice Cream</a>
          </li>
        </ul>
      </nav>
      <div class="nav__content">
        <div class="hidden pt--1@xs --active" id="tab_5" role="tabpanel">
          <h3>Mozzarella Sticks</h3>
          <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="hidden pt--1@xs" id="tab_6" role="tabpanel">
          <h3>Mushroom Pizza Pie</h3>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
        <div class="hidden pt--1@xs" id="tab_7" role="tabpanel">
          <h3>Fried Ice Cream</h3>
          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <header class="k_section__header" style="border-bottom: 0 none;">Tabbed Nav: Bordered with Bordered Content</header>
  <p class="mb--2@xs"><i>Same as above, just add <code>--bordered</code> to both the <code>nav</code> and its sibling content <code>div</code>.</i></p>
  <div class="row">
    <div class="col --12@xs">
      <nav class="nav --tabbed --bordered">
        <ul class="__list" role="tablist">
          <li class="__item">
            <a class="__link --active" data-toggle="tab" href="#tab_50" role="tab" aria-expanded="true">Mozzarella Sticks</a>
          </li>
          <li class="__item">
            <a class="__link" data-toggle="tab" href="#tab_60" role="tab" aria-expanded="false">Mushroom Pizza Pie</a>
          </li>
          <li class="__item">
            <a class="__link" data-toggle="tab" href="#tab_70" role="tab" aria-expanded="false">Fried Ice Cream</a>
          </li>
        </ul>
      </nav>
      <div class="nav__content --bordered">
        <div class="hidden pt--1@xs --active" id="tab_50" role="tabpanel">
          <h3>Mozzarella Sticks</h3>
          <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="hidden pt--1@xs" id="tab_60" role="tabpanel">
          <h3>Mushroom Pizza Pie</h3>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
        <div class="hidden pt--1@xs" id="tab_70" role="tabpanel">
          <h3>Fried Ice Cream</h3>
          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section k_bg-light">
  <header class="k_section__header">Tabbed Nav: Buttons</header>
  <div class="row">
    <div class="col --12@xs">
      <p>Button Tabs should default to no active selection, requiring engagement to reveal content, as if targeting differing content to a specific audience group.
      <p><b>Information for:</b></p>
      <nav class="nav --tabbed --buttons">
        <ul class="__list" role="tablist">
          <li class="__item">
            <a class="__link" data-toggle="tab" href="#tab_8" role="tab" aria-expanded="true">Undergraduates</a>
          </li>
          <li class="__item">
            <a class="__link" data-toggle="tab" href="#tab_9" role="tab" aria-expanded="false">Graduate Students</a>
          </li>
          <li class="__item">
            <a class="__link" data-toggle="tab" href="#tab_10" role="tab" aria-expanded="false">Alumni</a>
          </li>
        </ul>
      </nav>
      <div class="nav__content">
        <div class="hidden pt--1@xs pt--1@xs" id="tab_8" role="tabpanel">
          <h3>Undergraduate Students</h3>
          <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="hidden pt--1@xs" id="tab_9" role="tabpanel">
          <h3>Graduate Students</h3>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec sed odio dui. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>
        <div class="hidden pt--1@xs" id="tab_10" role="tabpanel">
          <h3>Alumni</h3>
          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <header class="k_section__header mb--2@xs">Pagination</header>
  <nav class="nav --pagination" aria-label="Page navigation">
    <ul class="__list">
      <li class="__item">
        <a class="__link" href="#" aria-label="Previous">
          <i aria-hidden="true" class="icon--arrow-left"></i>
          <span class="sr--only">Previous</span>
        </a>
      </li>
      <li class="__item"><a class="__link" href="#">1</a></li>
      <li class="__item"><a class="__link" href="#">2</a></li>
      <li class="__item"><a class="__link --active" href="#">3</a></li>
      <li class="__item"><a class="__link" href="#">4</a></li>
      <li class="__item"><a class="__link" href="#">5</a></li>
      <li class="__item">
        <a class="__link" href="#" aria-label="Next">
          <i aria-hidden="true" class="icon--arrow-right"></i>
          <span class="sr--only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</section>
