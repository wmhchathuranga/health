<?php include("header.php"); ?>
<section class="mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-5">
        <h1 class="display-4">About Us</h1>
      </div>
    </div>
  </div>
</section>
<section class="mybootstrap-services">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-3 pb-5 mybootstrap-aside-stretch-left mybootstrap-inside">
        <div class="mb-3 pt-5">
          <h2 class="h6">About</h2>
          <ul class="list-unstyled mybootstrap-light mb-4">
            <li class="active"><a href="#">History</a></li>
            <li><a href="#">Staffs</a></li>
            <li><a href="#">Career</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-9 pl-md-5 pb-5 pl-0 mybootstrap-inside">
        <h1 class="mt-4 mb-4">History</h1>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
          blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
          ocean.</p>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
          paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One
          day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of
          Grammar.</p>
        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and
          devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial
          into the belt and made herself on the way.</p>
        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her
          hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.
          Pityful a rethoric question ran over her cheek, then she continued her way.</p>
        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have
          been rewritten a thousand times and everything that was left from its origin would be the word "and" and the
          Little Blind Text should turn around and return to its own, safe country. </p>
        <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers
          ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her
          for their.</p>
      </div>
    </div>
  </div>
</section>
<section class="mybootstrap-subscribe">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12">
        <h2 class="h1 text-white">Subscribe Newsletter</h2>
        <p class="lead text-white">Far far away, behind the word mountains, far from the countries Vokalia.</p>
      </div>
    </div>
    <form action="#" method="post">
      <div class="row">
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Name">
        </div>
        <div class="col-md-4 mb-md-0 mb-3">
          <input type="text" class="form-control" placeholder="Email">
        </div>
        <div class="col-md-4">
          <input type="submit" value="Subscribe" class="btn btn-primary btn-block">
        </div>
      </div>
    </form>
  </div>
</section>

<script>
  document.getElementById('home').classList.remove('active');
  document.getElementById('app').classList.remove('active');
  document.getElementById('about').classList.add('active');
  document.getElementById('contact').classList.remove('active');
</script>

<?php include("footer.php"); ?>