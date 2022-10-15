<x-guest-layout>
    <!-- Start Hero -->
    <section class="relative table w-full py-36 lg:py-44">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
                <div class="md:col-span-7">
                    <div class="md:mr-6">
                        <h4
                            class="font-semibold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 text-black dark:text-white">
                            {{ $welcome_title }}
                        </h4>
                        <p class="text-slate-500 text-lg max-w-xl">
                            {{ $welcome_message }}
                        <div class="mt-4 font-semibold">
                            {{ $tag_line }}
                            <div class="text-right">- {{ $tag_by }}.</div>
                        </div>
                        </p>

                        <div class="mt-6">
                            <a href="{{ route('contact_us') }}"
                                class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mr-2 mt-2">
                                <i class="uil uil-envelope"></i> Register</a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="md:col-span-5">
                    <img src="{{ asset('storage/' . $hero_image) }}" alt="" />
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                    {{ $about_title }}
                </h3>

                <p class="text-slate-500 max-w-xl mx-auto">{{ $about_message }}</p>
            </div>
            <!--end grid-->

            <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
                <div class="lg:col-span-5">
                    <img src="{{ asset('storage/' . $about_1_image) }}" alt="" />
                </div>
                <div class="lg:col-span-7 mt-8 md:mt-0">
                    <div class="lg:ml-10">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                            {{ $about_title_1 }}
                        </h3>
                        <p class="text-slate-500 max-w-xl">
                            {{ $about_message_1 }}
                        </p>
                        <ul class="list-none text-slate-500 mt-4">
                            @php
                                $about1points = explode(';', $about_1_points);
                            @endphp
                            @for ($i = 0; $i < count($about1points); $i++)
                                @if ($i % 2 == 0)
                                    {{ $about1points[$i] }}
                                @else
                                    <li class="mb-1 flex">
                                        <i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i>
                                        {{ $about1points[$i] }}
                                    </li>
                                @endif
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center mt-10 gap-[30px]">
                <div class="lg:col-span-7 mt-8 md:mt-0">
                    <div class="lg:ml-10">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                            {{ $about_title_2 }}
                        </h3>
                        <ul class="list-none text-slate-500 mt-4">
                            @foreach (explode(';', $about_2_points) as $item)
                                <li class="mb-1 flex">
                                    <i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="lg:col-span-5">
                    <img src="{{ asset('storage/' . $about_2_image) }}" alt="" />
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h6 class="mb-4 text-base font-medium text-indigo-600">
                    {{ $team_header }}
                </h6>
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                    {{ $team_title }}
                </h3>

                <p class="text-slate-500 max-w-xl mx-auto">{{ $team_message }}</p>
            </div>
            <!--end grid-->

            <div class="grid relative grid-cols-1 mt-8">
                <div class="tiny-two-item">
                    @foreach ($teams as $item)
                        <div class="tiny-slide">
                            <div
                                class="lg:flex p-6 lg:p-0 relative rounded-md shadow dark:shadow-gray-800 overflow-hidden m-2">
                                <img class="w-24 h-24 lg:w-48 lg:h-auto lg:rounded-none rounded-full mx-auto"
                                    src="{{ asset('storage/' . $item->image) }}" alt="" width="384"
                                    height="512" />
                                <div class="pt-6 lg:p-6 text-center lg:text-left space-y-4">
                                    <p class="text-base text-slate-500">{{ $item->qualification }}</p>

                                    <div>
                                        <span class="text-indigo-600 block mb-1">{{ $item->name }}</span>
                                        <span
                                            class="text-slate-500 text-sm dark:text-white/60 block">{{ $item->department }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container md:mt-24 mt-16">
            <div class="grid lg:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-5">
                    <div class="lg:text-left text-center">
                        <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                            {{ $pricing_title }}
                        </h3>

                        <p class="text-slate-500 max-w-xl mx-auto">
                            @php
                                $vars = [
                                    '__contact_no' => "<a href='tel:$contact_no' class='btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out'>$contact_no</a>",
                                    '__email' => "<a href='mailto:$email' class='btn btn-link text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out'>$email</a>",
                                ];
                            @endphp
                            {!! strtr($pricing_message, $vars) !!}
                        </p>
                    </div>
                </div>
                <!--end col-->

                <div class="lg:col-span-7
                                mt-8 lg:mt-0">
                    <div class="lg:ml-8">
                        <div class="grid md:grid-cols-2 grid-cols-1 md:gap-0 gap-[30px]">
                            <div
                                class="group border-b-[3px] dark:border-gray-700 relative shadow dark:shadow-gray-800 rounded-md md:scale-110 z-3 bg-white dark:bg-slate-900">
                                <div class="p-6 py-8">
                                    <h6 class="font-bold uppercase mb-5 text-indigo-600">
                                        {{ $subscription_title_1 }}
                                    </h6>

                                    <p class="flex mb-5 text-xl font-semibold">{{ $subscription_description_1 }}</p>

                                    <ul class="list-none text-slate-500">
                                        @foreach (explode(';', $subscription_points_1) as $item)
                                            <li class="mb-1 flex">
                                                <i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i>
                                                {{ $item }}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="{{ route('contact_us') }}"
                                        class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Get
                                        Started</a>
                                </div>
                            </div>

                            <div
                                class="group border-b-[3px] dark:border-gray-700 relative shadow dark:shadow-gray-800 rounded-md z-2 bg-gray-50 dark:bg-slate-800">
                                <div class="p-6 py-8 md:pl-10">
                                    <h6 class="font-bold uppercase mb-5 text-indigo-600">
                                        {{ $subscription_title_2 }}
                                    </h6>

                                    <p class="flex mb-5 text-xl font-semibold">{{ $subscription_description_2 }}</p>


                                    <ul class="list-none text-slate-500">
                                        @foreach (explode(';', $subscription_points_2) as $item)
                                            <li class="mb-1 flex">
                                                <i class="uil uil-check-circle text-indigo-600 text-xl mr-2"></i>
                                                {{ $item }}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="{{ route('contact_us') }}"
                                        class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mt-5">Try
                                        it Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="relative">
        <div
            class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-gray-50 dark:text-slate-800">
            <svg class="w-full h-auto" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End -->

    <!-- Start -->
    <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
        <div class="container">
            <div class="grid md:grid-cols-2 grid-cols-1 gap-[30px]">

                @foreach ($faqs as $item)
                    <div class="flex">
                        <i data-feather="help-circle" class="fea icon-ex-md text-indigo-600 mr-3"></i>
                        <div class="flex-1">
                            <h5 class="mb-2 text-xl font-semibold">
                                {{ $item->question }}
                            </h5>
                            <p class="text-slate-500 whitespace-pre-line">
                                {{ $item->answer }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container md:mt-24 mt-16 md:mb-12">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">
                    {{ $contact_us_title }}
                </h3>

                <p class="text-slate-500 max-w-xl mx-auto">{{ $contact_us_message }}</p>

                @livewire('form.frontend.contact-us')
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="relative">
        <div class="shape absolute right-0 sm:-bottom-px -bottom-[2px] left-0 overflow-hidden z-1 text-dark-footer">
            <svg class="w-full h-auto" viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End -->
</x-guest-layout>
