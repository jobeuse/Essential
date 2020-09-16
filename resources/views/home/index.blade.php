@extends('layout.app')
@section('content')
@include('navbar.app')
@include('message.app')
<div class="container-fluid">
<div class="row mt-5 pt-2">
    <div class="col-lg-12 bannerheader " data-aos="zoom-in-up" id="start">
        <div class="row" data-aos="zoom-in-up">
            <div class="col-lg-12 weathertop" data-aos="zoom-in">
                @include('weather.app')
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-lg-12">

                        <h1 data-aos="fade-right" class="mySlides tracking-in-expand-fwd ">
                        We are in the business of building capabilities for our clients.
                        </h1> 
                        <br>
                        


                         <h1 data-aos="fade-right" class="mySlides tracking-in-expand-fwd ">
                        Let us take you into a deeper experience,
                        </h1> 
                        <br> 
                    </div>
                    <div class="col-lg-12 text-center mt-5 pt-5 bestlink">
                        <a href="" class="bounce-top">Start Today</a> <a href="" class="more bounce-top">More </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 weatherbottom" data-aos="zoom-in">
                @include('weather.app')
            </div>
        </div>
        
    </div>
    <div class="col-lg-12 bannerservice "  id="services" data-aos="zoom-in-up">
        <div class="container">
        <div class="row  ">
            <div class="col-lg-5 bg-white  shadow-sm  p-4 m-3  bannerservicecontainer " data-aos="fade-right">
                 <div class="row">

                    <div class="col-lg-4 icontop">
                        <p class="" data-aos="zoom-in">
                            <i class="fa fa-desktop"></i>
                         </p>
                    </div>

                    <div class="col-lg-8 mt-3 pb-5 mb-2">
                        <h3 class="heading   " data-aos="zoom-in">Web Design</h3>
                        <p data-aos="zoom-in">Responsive web Design for all platforms</p>
                    </div>
                    <div class="col-lg-4">
                        <p class="icon" data-aos="zoom-in">
                            <i class="fa fa-desktop"></i>
                         </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 shadow-sm bg-white p-4 m-3 bannerservicecontainer " data-aos="fade-right">
                <div class="row">

                    <div class="col-lg-4 icontop">
                        <p class="" data-aos="zoom-in">
                            <i class="fa fa-code"></i>
                        </p>
                    </div>
                    <div class="col-lg-8 mt-3 pb-5 mb-2" >
                        <h3 class="heading mb-3" data-aos="zoom-in">E-commerce Website Development</h3>
                        <p data-aos="zoom-in">Online Shoping Websites  with different payment methods</p>
                    </div>
                    <div class="col-lg-4">
                        <p class="icon" data-aos="zoom-in">
                            <i class="fa fa-code"></i>
                        </p>
                    </div>
                </div>

            </div>

            <div class="col-lg-5 shadow-sm bg-white p-4 m-3 bannerservicecontainer " data-aos="fade-right">
                <div class="row">

                    <div class="col-lg-4 icontop">
                        <p class="" data-aos="zoom-in">
                           <i class="fa fa-book" aria-hidden="true"></i>
                        </p>
                    </div>
                    <div class="col-lg-8 mt-3 pb-4">
                        <h3 class="heading mb-3 pb-2" data-aos="zoom-in">Online ICT Trainings</h3>
                        <p data-aos="zoom-in">
                            We help you to gain ability to converse with people through various technologies. 
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <p class="icon" data-aos="zoom-in">
                            <i class="fa fa-book" aria-hidden="true"></i>
                        </p>
                    </div>
                    <div class="col-lg-12 mt-5 pt-5">
                        <a href="#" class="startudy shadow" data-aos="zoom-in">
                            Start Today
                        </a>
                    </div>
                </div>

            </div>

            </div>
        </div>
        </div>

        <div class="col-lg-12  bannerservicefounder" id="team" data-aos="zoom-in-up">
            <div class="container " data-aos="zoom-in-up">
            <div class="row mt-5">
                <div class="col-lg-5 mb-5  bannerservicefounderimage  "  data-aos="flip-right">
                    <div class="img__wrap mb-5">
                        <img class="img__img img-thumbnail mt-5  pb-2 border-0" src="images/IMG-20200327-WA0010.jpg" alt="job Iradukunda" />
                        <p class="img__description">
                            Iradukunda <span>Job</span></p>
                    </div>
                </div>
                <div class="col-lg-7 pt-5 mb-5 pb-3 mt-2">
                    <h1 class="headerofcreator"  data-aos="fade-right">Web <span>Designer </span>, and <br> CEO & Founder of <span>{{ config('app.name') }}</span></h1>
                    <p class="mt-3 bodyofcreator" data-aos="fade-right" >
                    Let us take you into a deeper experience, make a moment a lasting conveyable memory. Let us help build your tribe .</p>
                </div>


                <div class="col-lg-7 pt-5 pb-5 mt-5 mb-5">
                    <h1 class="headerofcreator"  data-aos="fade-right">Web <span>Designer </span>, and <br> CEO & Founder of <span>{{ config('app.name') }}</span></h1>
                    <p class="mt-3 mb-5 bodyofcreator"  data-aos="fade-right">
                        Web design is not just about creating pretty layouts. It's about understanding the marketing challenge behind your business
                    </p>
                </div>


                <div class="col-lg-5 mb-5 pb-5 mt-5 bannerservicefounderimage pt-5" data-aos="flip-right">
                    <div class="img__wrap  justify-content-center">
                        <img class="img__img img-thumbnail border-0 mt-4" src="images/hgyfs.jpg" alt="Byusa Muclack" />
                        <p class="img__description">
                            Byusa <span>Muclack</span></p>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="col-lg-12 mb-5 contactsection" id="contact" data-aos="zoom-in-up">
            <div class="row">


                <div class="col-lg-12 text-right text-center mt-5 p-5">
                    <div class="row">

                        <div class="col-lg-6 mt-5">
                            <a href="" class="sociallinks ml-2">
                            <i class="fa fa-facebook">
                            </i>
                            </a>
                            <a href="" class="sociallinks ml-2">
                                 <i class="fa fa-twitter"></i>
                            </a>
                            <a href="" class="sociallinks ml-2">
                             <i class="fa fa-instagram"></i>
                            </a>
                        </div>

                        <div class="col-lg-6 mb-5 pb-5">
                            <p class="connectsocial"  data-aos="fade-right"><span>Connect</span> With Us </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 p-5 mt-5"  data-aos="fade-right">
                    <h3>Feel Free To Contact Us Any Time</h3>
                    <hr>
                </div>
                <div class="col-lg-7 mt-5" data-aos="fade-right">
                    {!! Form::open(['method' => 'POST', 'action'=>'MessagesController@store']) !!}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group" data-aos="fade-right">
                            <input type="text" class="form-control" placeholder="Your Name"  name="name" autocomplete="name" >

                            </div>
                                @error('name')
                                <span class="text-danger font-weight-bold">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group" data-aos="fade-right"> 
                            <input type="email" class="form-control" placeholder="Your Email" name="email" autocomplete="email"  >
                            </div>

                             @error('email')
                            <span class="text-danger font-weight-bold">{{ $message }}</span>
                            @enderror

                        </div>

                    </div>

                    <div class="form-group" data-aos="fade-right"> 
                    <select class="form-control" name="subject">
                        <option value="website">looking for Website services</option>
                        <option value="Feedback">Comment & Feedback</option>
                    </select>
                    </div>
                    @error('subject')
                    <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror


                    <div class="form-group" data-aos="fade-right"> 
                    <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"  ></textarea>

                    @error('message')
                    <span class="text-danger font-weight-bold">{{ $message }}</span>
                    @enderror

                    </div>
                    <div class="form-group" data-aos="fade-right">
                    <button type="submit" class="btn text-white py-3 px-5 sendmessage">
                        Send Message
                    </button>
                    </div>
                   {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-lg-12 p-5 footersection" data-aos="zoom-in-up">
            <div class="row justify-content-center">
                <div class="col-lg-4 ">
                    <p class="footerappname " data-aos="fade-right">
                    {{ config('app.name') }}</p>
                    <hr data-aos="fade-right">
                    <br>
                    <p class="text-light mt-5" data-aos="fade-right"> We are in the business of building capabilities for our clients.
                    </p>
                </div>

                 <div class="col-lg-4 mt-5">
                     <h4 data-aos="fade-right">LINKS</h4>
                     <hr data-aos="fade-right">
                     <br>
                     <ul class="list-inline  mt-5" data-aos="fade-right">
                        <li>
                            <a href="#home"> Home</a>
                        </li>
                        <li>
                            <a href="#services"> Services</a>
                        </li>
                        <li>
                            <a href="#team"> Team</a>
                        </li>
                        <li>
                            <a href="#contact"> Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 mt-5">

                    <h4 data-aos="fade-right"> HAVE A QUESTION ?</h4>
                    <hr data-aos="fade-right">
                    <br>
                    <ul class="list-inline mt-5" data-aos="fade-right"> 
                        <li>
                            <a href="tel:+2507080809031">
                                <i class="fa fa-phone"></i> +2507080809031
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{ config('app.name') }}{{ '@gmail.com' }}">
                                 <i class="fa fa-envelope"></i> {{ config('app.name') }}{{ '@gmail.com' }}
                            </a>
                        </li>
                </div>
            </div>
        </div>
        <div class="col-lg-12 footercopyright text-center text-muted" data-aos="fade-right">
            We are  {{ config('app.name') }} , <?php echo date('Y')?>
        </div>
    </div>
</div>


@endsection
