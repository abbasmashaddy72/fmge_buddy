<!-- Start Section-->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
            @foreach ($blogs as $item)
                <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">

                    <div class="content p-6">
                        <a href="{{ route('blog_detail', ['id' => $item->id]) }}"
                            class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">{{ $item->title }}</a>
                        <p class="text-slate-400 mt-3">{{ $item->excerpt }}</p>

                        <div class="mt-4">
                            <a href="{{ route('blog_detail', ['id' => $item->id]) }}"
                                class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read
                                More <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--blog end-->

        </div>
        <!--end grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                {{ $blogs->links() }}
            </div>
        </div>
        <!--end grid-->
    </div>
    <!--end container-->

    <!--end container-->
</section>
<!--end section-->
