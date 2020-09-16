 
   @if(session('error'))
       <div class="notifications p-3 m-5 rounded border-danger shadow text-danger scale-in-right"  >
            <div class="row">
                <div class="col-10" data-aos="fade-right">
                    {{session('error')}}
                </div>
                 <div class="col-lg-2" data-aos="fade-right">
                     <a href="{{ 'home' }}" class="btn btn-default">more</a>
                </div>
            </div>
       </div>

   @endif   

   @if(session('success'))
       <div class="notifications p-3 m-5 rounded border-success shadow text-success"data-aos="fade-right" >
            <div class="row">
                <div class="col-10" data-aos="fade-right">
                    {{session('success')}}
                </div>
                 <div class="col-lg-2" data-aos="fade-right">
                     <a href="{{ 'home' }}" class="btn btn-default" >more</a>
                </div>
            </div>
       </div>

   @endif
 

