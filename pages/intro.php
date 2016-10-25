<section id="intro" class="hero is-dark is-fullheight">
  <div class="hero-body">
    <div class="container">
      <h1 class="title bold has-text-centered animate">
        <strong><?= $logo_name ?></strong>
      </h1>
      <h2 class="subtitle has-text-centered animated  flip">
        <?= $logo_name_sub ?>
      </h2>
      <p class="has-text-centered ">
      <a href="#services">
      <br> <br>
        <i class="fa fa-arrow-down animated slow-animated bounceOutDown" aria-hidden="true"></i>
        <br> <br>
        <i id="arrow2" class="fa fa-arrow-down animated islow-animated bounceOutDown" aria-hidden="true"></i>
        <br> <br>
        <i class="fa fa-arrow-down animated slow-animated bounceOutDown" aria-hidden="true"></i>
        </a>
      </p>
    </div>
  </div>
</section>
<style type="text/css">
  .fa-arrow-down {
    color: white ;
}
  .fa-arrow-down:hover {
    color: #00d1b2 ;
}

</style>
<script type="text/javascript">
var intro_title = document.querySelector(".animate");
var ar2 = document.querySelector("#arrow2");
  document.addEventListener("DOMContentLoaded", function(event) {
    //
    intro_title.classList.add("animated");
      intro_title.classList.add("rollin");
            setTimeout( function(){
  intro_title.classList.remove("rollin");
    ar2.classList.remove("bounceOutDown");
    ar2.classList.add("bounce");
      }, 1000 );
  });
  document.addEventListener("wheel", function(){

    intro_title.classList.add("animated");
      intro_title.classList.add("flip");
       
      setTimeout( function(){
  intro_title.classList.remove("flip");
      }, 3000 );

  });
</script>