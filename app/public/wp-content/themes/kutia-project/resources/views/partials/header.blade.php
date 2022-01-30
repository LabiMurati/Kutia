<header class="banner">
  <div class="container">
  <div class="header__logo">
    <div class="container">
        <a class="brand" href="{{ home_url('/') }}">
          <img src="@asset('images/black-logo.png')" alt="">
        </a>
      </div>
</div>
</div>
</div>
<div class="hamburger__hoolder">
  <div class="hamburger"><div></div></div>
  <input type="checkbox" class="toggler">
  <div class="hamburger"><div></div></div>
  <nav class="nav-primary">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
    <div class="hamburger">
    <input type="checkbox" class="toggler">
  </nav>
  <div class="menu">
   
        <div>
    
          </div>
          
          <div class="menu__right">
      @if (has_nav_menu('footer-drop'))
      <div class="header__logo header__logo--mod">
    <div class="container">
        <a class="brand" href="{{ home_url('/') }}">
          <img src="@asset('images/white-logo.png')" alt="">
        </a>
      </div>
</div>
               {!! wp_nav_menu(['theme_location' => 'footer-drop', 'menu_class' => '']) !!}
            
             @endif
    <div class="menu__title">
      <h3>SØK PA HAMMERVOLLPIND.NO</h3>
      <img src="@asset('images/Group 105555.png')" alt="">
      <input type="serarch" placeholder="Søk" >
      <div class="menu__contact">
  <h3>KONTAKT</h3>
  <div class="contact__left--mod">
                <ul>
                    <h4>Oslo</h4>
                    <li>Wergelandsveien 7</li>
                    <li>0167 Oslo</li>
                </ul>
                <ul>
                    <h4>Bergen</h4>
                    <li>Wergelandsveien 7</li>
                    <li>Wergelandsveien 7</li>
                </ul>
                <ul>
                    <h4>Halden</h4>
                    <li>Wergelandsveien 7</li>
                    <li>Wergelandsveien 7</li>
                </ul>
                <ul>
                    <h4>Stavanger</h4>
                    <li>Wergelandsveien 7</li>
                    <li>Wergelandsveien 7</li>
                </ul>
                
            </div>
  
    </div>
  </div>
</div>
    </div>
  </div>
</div>

    </div>
    <ul>
    </div>
   </div>
</header>