
<footer class="content-info">
   <div class="footer">
     <div class="container">
       <a class="copyright" href="#">© 2019 Advokatfirmaet Hammervoll Pind AS</a>
       <nav class="footer__nav">
         @if (has_nav_menu('footerLocationTwo'))
           {!! wp_nav_menu(['theme_location' => 'footerLocationTwo', 'menu_class' => 'footer']) !!}
         @endif
         <div class="footer__social">
                  <h3>Følg oss</h3>
                  <ul><li><a href=""><img src="@asset('images/random-girl.png')" alt=""></li></a></ul>
                  <ul><li><a href=""><img src="@asset('images/random-girl.png')" alt=""></li></a></ul>
         </div>
       </nav>
     </div>
   </div>
 </footer>
