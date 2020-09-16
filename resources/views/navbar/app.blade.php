<nav class="navbar bg-light navbar-expand-lg navbar-light sticky-top" >
    <div class="container">
    <span data-aos="fade-right"><a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a></span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse scale-up-tr" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto" data-aos="fade-right">
        <li class="nav-item active " data-aos="fade-right">
          <a class="nav-link" href="#start"id="navbar-start-link" >Home</a><span class="sr-only">(current)</span>
        </li>
        <li class="nav-item" data-aos="fade-right">
          <a class="nav-link" href="#services"  id="navbar-services-link">Services</a>
        </li>
        <li class="nav-item" data-aos="fade-right">
          <a class="nav-link" href="#team" id="navbar-team-link">Team</a>
        </li>
        <li class="nav-item" data-aos="fade-right">
          <a class="nav-link" href="#contact" id="navbar-contact-link">Contact us</a>
        </li> 
      </ul>
    </div>
    </div>
</nav>