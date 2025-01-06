@if( $casestudies->count() > 0 || $posts->count() > 0)
 <nav>
     <a href="#experience">Experience <span class="mobile-hidden"> &amp; Expertise<span></a>
        @if($casestudies->count() > 0)
     <a href="#case-studies">Case Studies</a>
     @endif
     @if($posts->count() > 0)
     <a href="#">Writing</a>
     @endif
     <a href="/resume.pdf" target="_blank" class="cta"><x-tabler-file-cv />Resume</a>
 </nav>
@endif
