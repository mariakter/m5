
 @extends('Layout.master')
 @section('content')

<!--  contact -->
<div  class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Contact Us</h2>
                  </div>
               </div>
               <div class=" col-md-10 offset-md-1">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Your Name" type="type" name="Your Name"> 
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Phone number" type="type" name="Phone number">                          
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->

      @endsection