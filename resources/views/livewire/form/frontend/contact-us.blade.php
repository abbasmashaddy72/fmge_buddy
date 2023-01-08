<div class="mt-6">
    <form wire:submit.prevent="store">
        <p class="mb-0" id="error-msg"></p>
        @if ($success)
            <div id='success_page'>
                <h3>Email Sent Successfully.</h3>
                <p>Thank you <strong>{{ $name }}</strong>, we will contact you ASAP.</p>
            </div>
        @endif
        <div class="grid lg:grid-cols-12 lg:gap-6">
            <div class="lg:col-span-6 mb-5">
                <div class="text-left">
                    <label for="name" class="font-semibold">Your Name:</label>
                    <div class="form-icon relative mt-2">
                        <i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
                        <input name="name" id="name" type="text" class="form-input pl-11"
                            placeholder="Name :" wire:model="name" />
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6 mb-5">
                <div class="text-left">
                    <label for="email" class="font-semibold">Your Email:</label>
                    <div class="form-icon relative mt-2">
                        <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                        <input name="email" id="email" type="email" class="form-input pl-11"
                            placeholder="Email :" wire:model="email" />
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1">
            <div class="mb-5">
                <div class="text-left">
                    <label for="question" class="font-semibold">Your Question:</label>
                    <div class="form-icon relative mt-2">
                        <i data-feather="book" class="w-4 h-4 absolute top-3 left-4"></i>
                        <input name="question" id="question" class="form-input pl-11" placeholder="Question :"
                            wire:model='question' />
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <div class="text-left">
                    <label for="message" class="font-semibold">Your Message:</label>
                    <div class="form-icon relative mt-2">
                        <i data-feather="message-circle" class="w-4 h-4 absolute top-3 left-4"></i>
                        <textarea name="message" id="message" class="form-input pl-11 h-28" placeholder="Message :" wire:model='message'></textarea>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit"
            class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-center hover:pointer">
            Send Message
        </button>
    </form>
</div>
@push('scripts')
    @livewireScripts
@endpush
@push('styles')
    @livewireStyles
@endpush
