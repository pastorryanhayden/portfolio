@if($casestudies->count() > 0)
<section class="case-studies" id="case-studies">
<h2><x-tabler-tie />Case Studies</h2>
<div class="items">
    @foreach($casestudies as $study)
<a href="/case-studies/original-burger" >
    <h3>Congregation Hub</h3>
    <p><span>Ux/Ui</span><span>Dev</span></p>
</a>
@endforeach
</div>
</section>
@endif
