<x-guest-layout>
    <x-frontend.breadcrumb title="FAQ" />

    <!-- Start Section-->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid gap-[30px]">

                <div id="accordion-collapseone" data-accordion="collapse" class="mt-6">
                    @foreach ($faqs as $item)
                        <div
                            class="relative shadow dark:shadow-gray-800 rounded-md overflow-hidden @if ($loop->index > 0) mt-4 @endif">
                            <h2 class="text-base font-semibold" id="accordion-collapse-heading-{{ $loop->index }}">
                                <button type="button"
                                    class="flex justify-between items-center p-5 w-full font-medium text-left"
                                    data-accordion-target="#accordion-collapse-body-{{ $loop->index }}"
                                    aria-expanded="true" aria-controls="accordion-collapse-body-{{ $loop->index }}">
                                    <span>{{ $item->question }}</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-{{ $loop->index }}" class="hidden"
                                aria-labelledby="accordion-collapse-heading-{{ $loop->index }}">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">{{ $item->answer }}</p>
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
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Have Question ?
                    Get in touch!</h3>

                <div class="mt-6">
                    <a href="{{ route('contact_us') }}"
                        class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md mr-2 mt-2"><i
                            class="uil uil-phone"></i> Contact us</a>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section-->
</x-guest-layout>
