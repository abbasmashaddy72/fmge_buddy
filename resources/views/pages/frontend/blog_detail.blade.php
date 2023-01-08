<x-guest-layout>
    <!-- Start Hero -->
    <section
        class="relative table w-full py-32 lg:py-36 bg-[{{ url('assets/images/blog/bg.jpg') }}] bg-center bg-no-repeat">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center mt-10">
                <h3 class="mb-3 text-3xl leading-normal font-medium text-white">My Very Minimal <br> Interior Design
                    Ideas</h3>

                <ul class="list-none mt-6">
                    <li class="inline-block font-semibold text-white/50 mx-5"> <span class="text-white block">Client
                            :</span> <span class="block">Calvin Carlo</span></li>
                    <li class="inline-block font-semibold text-white/50 mx-5"> <span class="text-white block">Date
                            :</span> <span class="block">23th May, 2022</span></li>
                    <li class="inline-block font-semibold text-white/50 mx-5"> <span class="text-white block">Time
                            :</span> <span class="block">8 Min Read</span></li>
                </ul>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="absolute text-center z-10 bottom-5 right-0 left-0 mx-3">
            <ul class="breadcrumb tracking-[0.5px] breadcrumb-light mb-0 inline-block">
                <li
                    class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                    <a href="index.html">Techwind</a>
                </li>
                <li class="inline breadcrumb-item uppercase text-[13px] font-bold duration-500 ease-in-out text-white"
                    aria-current="page">Blogs</li>
            </ul>
        </div>
    </section>
    <!--end section-->
    <div class="relative">
        <div
            class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-white dark:text-slate-900">
            <svg class="w-full h-auto" viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Start Section-->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-6">
                    <div class="p-6 rounded-md shadow dark:shadow-gray-800">

                        <img src="{{ asset('assets/images/blog/slide02.jpg') }}" class="rounded-md" alt="">

                        <div class="mt-6">
                            <p class="text-slate-400">The most well-known dummy text is the 'Lorem Ipsum', which is said
                                to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin
                                language which more or less corresponds to 'proper' Latin. It contains a series of real
                                Latin words. This ancient dummy text is also incomprehensible, but it imitates the
                                rhythm of most European languages in Latin script.</p>
                            <p
                                class="text-slate-400 italic border-x-4 border-indigo-600 rounded-tl-xl rounded-br-xl mt-3 p-3">
                                " There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look even slightly believable. "</p>
                            <p class="text-slate-400 mt-3">The advantage of its Latin origin and the relative
                                meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or
                                distract the viewer's attention from the layout.</p>
                        </div>
                    </div>

                    <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                        <h5 class="text-lg font-semibold">Comments:</h5>

                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/client/01.jpg') }}"
                                        class="h-11 w-11 rounded-full shadow" alt="">

                                    <div class="ml-3 flex-1">
                                        <a href=""
                                            class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Calvin
                                            Carlo</a>
                                        <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                    </div>
                                </div>

                                <a href=""
                                    class="text-slate-400 hover:text-indigo-600 transition-all duration-500 ease-in-out ml-5"><i
                                        class="mdi mdi-reply"></i> Reply</a>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected
                                    humour "</p>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/client/02.jpg') }}"
                                        class="h-11 w-11 rounded-full shadow" alt="">

                                    <div class="ml-3 flex-1">
                                        <a href=""
                                            class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Calvin
                                            Carlo</a>
                                        <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                    </div>
                                </div>

                                <a href=""
                                    class="text-slate-400 hover:text-indigo-600 transition-all duration-500 ease-in-out ml-5"><i
                                        class="mdi mdi-reply"></i> Reply</a>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected
                                    humour "</p>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/client/03.jpg') }}"
                                        class="h-11 w-11 rounded-full shadow" alt="">

                                    <div class="ml-3 flex-1">
                                        <a href=""
                                            class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Calvin
                                            Carlo</a>
                                        <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                    </div>
                                </div>

                                <a href=""
                                    class="text-slate-400 hover:text-indigo-600 transition-all duration-500 ease-in-out ml-5"><i
                                        class="mdi mdi-reply"></i> Reply</a>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected
                                    humour "</p>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="{{ asset('assets/images/client/04.jpg') }}"
                                        class="h-11 w-11 rounded-full shadow" alt="">

                                    <div class="ml-3 flex-1">
                                        <a href=""
                                            class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Calvin
                                            Carlo</a>
                                        <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                    </div>
                                </div>

                                <a href=""
                                    class="text-slate-400 hover:text-indigo-600 transition-all duration-500 ease-in-out ml-5"><i
                                        class="mdi mdi-reply"></i> Reply</a>
                            </div>
                            <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration in some form, by injected
                                    humour "</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                        <h5 class="text-lg font-semibold">Leave A Comment:</h5>

                        <form class="mt-8">
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-left">
                                        <label for="name" class="font-semibold">Your Name:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
                                            <input name="name" id="name" type="text"
                                                class="form-input pl-11" placeholder="Name :">
                                        </div>
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold">Your Email:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                            <input name="email" id="email" type="email"
                                                class="form-input pl-11" placeholder="Email :">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <div class="text-left">
                                        <label for="comments" class="font-semibold">Your Comment:</label>
                                        <div class="form-icon relative mt-2">
                                            <i data-feather="message-circle"
                                                class="w-4 h-4 absolute top-3 left-4"></i>
                                            <textarea name="comments" id="comments" class="form-input pl-11 h-28" placeholder="Message :"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" name="send"
                                class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Send
                                Message</button>
                        </form>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-6">
                    <div class="sticky top-20">
                        <h5
                            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center">
                            Author</h5>
                        <div class="text-center mt-8">
                            <img src="{{ asset('assets/images/client/05.jpg') }}"
                                class="h-24 w-24 mx-auto rounded-full shadow mb-4" alt="">

                            <a href=""
                                class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Cristina
                                Romsey</a>
                            <p class="text-slate-400">Content Writer</p>
                        </div>

                        <h5
                            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                            Recent post</h5>
                        <div class="flex items-center mt-8">
                            <img src="{{ asset('assets/images/blog/06.jpg') }}"
                                class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                            <div class="ml-3">
                                <a href="" class="font-semibold hover:text-indigo-600">Consultant Business</a>
                                <p class="text-sm text-slate-400">1st May 2022</p>
                            </div>
                        </div>

                        <div class="flex items-center mt-4">
                            <img src="{{ asset('assets/images/blog/07.jpg') }}"
                                class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                            <div class="ml-3">
                                <a href="" class="font-semibold hover:text-indigo-600">Grow Your Business</a>
                                <p class="text-sm text-slate-400">1st May 2022</p>
                            </div>
                        </div>

                        <div class="flex items-center mt-4">
                            <img src="{{ asset('assets/images/blog/08.jpg') }}"
                                class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                            <div class="ml-3">
                                <a href="" class="font-semibold hover:text-indigo-600">Look On The Glorious
                                    Balance</a>
                                <p class="text-sm text-slate-400">1st May 2022</p>
                            </div>
                        </div>

                        <h5
                            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                            Social sites</h5>
                        <ul class="list-none text-center mt-8">
                            <li class="inline"><a href=""
                                    class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="facebook" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href=""
                                    class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="instagram" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href=""
                                    class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="twitter" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href=""
                                    class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="linkedin" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href=""
                                    class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="github" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href=""
                                    class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="youtube" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href=""
                                    class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i
                                        data-feather="gitlab" class="h-4 w-4"></i></a></li>
                        </ul>
                        <!--end icon-->

                        <h5
                            class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">
                            Tagscloud</h5>
                        <ul class="list-none text-center mt-8">
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Business</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Finance</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Marketing</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Fashion</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Bride</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Lifestyle</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Travel</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Beauty</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Video</a>
                            </li>
                            <li class="inline-block m-2"><a href=""
                                    class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Audio</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="md:flex justify-center">
                <div class="lg:w-2/3 text-center">
                    <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold mb-6">Subscribe our
                        weekly subscription</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Add some text to explain benefits of subscripton on your
                        services. We'll send you the best of our blog just once a weekly.</p>

                    <div class="mt-8">
                        <div class="text-center subcribe-form">
                            <form class="relative mx-auto max-w-xl">
                                <input type="email" id="subemail" name="name"
                                    class="pt-4 pr-40 pb-4 pl-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white/70 dark:bg-slate-900/70 border border-gray-100 dark:border-gray-700"
                                    placeholder="Enter your email id..">
                                <button type="submit"
                                    class="btn absolute top-[2px] right-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full">Subcribe
                                    Now</button>
                            </form>
                            <!--end form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->
</x-guest-layout>
