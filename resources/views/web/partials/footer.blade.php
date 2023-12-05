 <!-- Start: Footer -->
 <footer class="footer__wrapper">
     <!-- Start: Footer 2 -->
     <div class="footer__container">
         <div id="module-91" class="footer__body expand">
             <div class="footer__content">
                 @foreach ($info as $item)
                     <div class="custom">

                         <h3 style="font-size:1.1rem;  font-weight: bold; width:350px; text-transform:uppercase;color:white;padding-top:2rem"><a href="#" target="_blank"
                                 rel="noopener noreferrer">
                                 {{ $item->name }}</a></h3>
                         {{-- <p style="font-size:0.8rem;"> {{$item->about}}</p> --}}
                         <div class="about pt-3">
                             <p style="color:rgb(209, 214, 218); line-height:normal;font-size:15px">{!! $item->note !!}</p>
                         </div>

                     </div>
                 @endforeach
             </div>
         </div>

         <div id="module-90" class="footer__body expand">
             <div class="footer__content">
                 <div class="custom">

                     <h3 style="font-size:1.1rem;  font-weight: bold; padding-left:50px;text-transform:uppercase; color:white;padding-top:2rem"><a href="#"
                             target="_blank" rel="noopener noreferrer">Useful Links</a></h3>
                     <ul class="footer_manu" style="padding-left:30px;padding-top:7px; ">
                         <li class="menu-item item-105  no-college"><a class=" no-college" style="color:rgb(209, 214, 218);font-size:15px"
                                 href="{{ route('about') }}">About Us</a></li>
                         <li class="menu-item item-106 no-college"><a class="no-college" style="color:rgb(209, 214, 218);font-size:15px"
                                 href="{{ route('contact.index') }}">Contact Us</a></li>
                         <li class="menu-item item-165 no-college"><a class="no-college"style="color:rgb(209, 214, 218);font-size:15px"
                                 href="{{ route('faculty') }}"><span>Faculty Information</span></a></li>
                         <li class="menu-item item-116 current active"><a  class="no-college"style="color:rgb(209, 214, 218);font-size:15px"href="{{ 'photoGallery' }}"><span>Photo
                                     Gallery
                                 </span></a></li>
                         <li class="menu-item item-107"><a class="no-college"style="color:rgb(209, 214, 218);font-size:15px" href="{{ route('videoGallery') }}"><span>Video
                                     Gallery</span></a></li>
                         <li class="menu-item item-155"><a class="no-college"style="color:rgb(209, 214, 218);font-size:15px" href="{{ route('course') }}"><span>Course Information
                                 </span></a></li>
                         {{-- <li class="menu-item item-159"><a href="#"><span>College
                                    Calendar 2023-24</span></a></li>
                        <li class="menu-item item-163"><a href="#">Cookie Policy</a></li> --}}
                     </ul>
                 </div>
             </div>
         </div>

         <div id="module-104" class="footer__body expand">
             <div class="footer__content">

                 @foreach ($info as $item)
                     <div class="custom" style="text-align: left; width:100% ">
                         <h3 style="font-size:1.1rem;  font-weight: bold;text-transform:uppercase; color:white;padding-top:2rem "><a href="#" target="_blank"
                                 rel="noopener noreferrer">
                                 Social Media</a></h3>
                         <p style="font-size:0.8rem; padding-top:10px ;color:rgb(209, 214, 218);font-size:14px "><i class="fa fa-envelope-o "
                                 ></i><a href="#"  target="blank"> {{ $item->email }}<br />
                         </p>
                         <p style="font-size:0.8rem; color:rgb(209, 214, 218);font-size:15px "><i class="fa fa-facebook " style="padding-right:1rem;"></i> <a
                                 href="#" target="blank"> {{ $item->facebook }}</a></p>
                         <p style="font-size:0.8rem;color:rgb(209, 214, 218);font-size:15px "><i class="fa fa-instagram" style="padding-right:1rem;"></i> <a
                                 href="#" target="blank"> {{ $item->instragram }}</a></p>
                         <p style="font-size:0.8rem;color:rgb(209, 214, 218);font-size:15px "><i class="fa fa-twitter" style="padding-right:1rem;"></i><a
                                 href="#" target="blank">{{ $item->twitter }}</a></p>
                         <p style="font-size:0.8rem;color:rgb(209, 214, 218)"><i class="fa fa-linkedin" style="padding-right:1rem;"></i><a
                                 href="#" target="blank"> {{ $item->linkdln }}</a></p>

                     </div>
                 @endforeach
             </div>
         </div>



         <div id="module-104" class="footer__body expand">
             <div class="footer__content">
                 <h3 style="font-size:1.1rem;  font-weight: bold; text-transform:uppercase;color:white;padding-top:2rem ">
                     Location On Map
                 </h3>
                 <div class="map" style="padding-top: 15px">
                     <iframe
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3383268412404!2d90.36660897514449!3d23.80656538661818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c72d1a5bf2a9%3A0x25a0f9a592e96ad8!2sLink-Up%20Technology%20Ltd.!5e0!3m2!1sen!2sbd!4v1698740549907!5m2!1sen!2sbd"
                         width="99%" height="180px" style="border:0;" allowfullscreen="" loading="lazy"
                         referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>
             </div>
         </div>


     </div>
     <!-- End: Footer 2 -->

 </footer>

 <footer class="footer__wrapper" style="background-color: black;">
     <!-- End: Footer Modules Container -->
     <div class="container">

     <div class="row">
         <div class="col-lg-6">
             <div class="copyright" style="color:rgb(209, 214, 218);padding-left:60px">

                 <p>Copyright © 2023 All rights reserved St. Peter's College</p>
             </div>
         </div>
         <div class="col-lg-6" >
             <div class="copyright text-end" style="color:rgb(209, 214, 218);padding-right:48px">

                 <p>Developed By <a href="#"> Link-Up Technology Ltd.</a></p>
             </div>
         </div>
     </div>
    </div>

 </footer>
 <!-- End: Footer -->
