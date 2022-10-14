<x-guest-layout>
    <x-frontend.breadcrumb title="Contact Us" />

    <!-- Start Section-->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                <div class="text-center px-6 mt-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-phone"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Phone</h5>
                        <p class="text-slate-400 mt-3">General Enquires & Queries</p>

                        <div class="mt-5">
                            <a href="tel:+91-8042-053-054"
                                class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">+91-8042-053-054</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6 mt-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-envelope"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Email</h5>
                        <p class="text-slate-400 mt-3">For Feedback, Complaint & More</p>

                        <div class="mt-5">
                            <a href="mailto:fmgebuddy@gmail.com"
                                class="btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">fmgebuddy@gmail.com</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6 mt-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-map-marker"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Location</h5>
                        <p class="text-slate-400 mt-3">No.2122/5, Opp. BWSSB Office D Block, Behind Adiga's
                            Hotel, Sahakar Nagar, Bengaluru, Karnataka - 560092</p>

                        <div class="mt-5">
                            <a href="https://goo.gl/maps/KpVDhaMe4GF9oicu8" target="__blank"
                                class="video-play-icon read-more lightbox btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">View
                                on Google map</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-7 md:col-span-6">
                    <img src="{{ asset('assets/images/contact.svg') }}" alt="">
                </div>

                <div class="lg:col-span-5 md:col-span-6 mt-8 md:mt-0">
                    <div class="lg:ml-5">
                        @livewire('form.frontend.contact-us')
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section-->

    <div class="container-fluid relative">
        <div class="grid grid-cols-1">
            <div class="w-full leading-[0] border-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242.9144197548936!2d77.58678149255624!3d13.059161968994957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae18204498bbff%3A0x4da04d63f0291abb!2sBWSSB%20Sahakaranagar!5e0!3m2!1sen!2sin!4v1664167099273!5m2!1sen!2sin"
                    style="border:0" class="w-full h-[500px]" allowfullscreen loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!--end grid-->
    </div>
    <!--end container-->
</x-guest-layout>
