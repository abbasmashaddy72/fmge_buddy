<x-backend.custom-form>
    <form wire:submit.prevent="submit">
        @csrf
        @wire('debounce.200ms')
            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Company Details') }}
            </h4>

            {{-- Logo Start --}}
            @if ($this->logo_light)
                <div class="my-4">
                    <div class="mb-2">
                        <label class="block">
                            <x-form-label label="Uploaded Logo Light Preview" />
                            <img src="{{ $this->logoLightIsUploaded ? $this->logo_light->temporaryUrl() : url('storage/' . $this->logo_light) }}"
                                class="mt-2" width="250" height="300">
                        </label>
                    </div>
                </div>
            @endif

            <div class="my-4">
                <div class="mb-2">
                    <label class="block">
                        <x-form-label label="Logo Light" />
                        <input type="file" accept="image/*" wire:model="logo_light"
                            class="block w-full mt-2 text-xl font-normal text-gray-500 border rounded outline-none focus:border-blue-400 focus:shadow">
                    </label>
                </div>
                <x-form-errors name="logo_light" />
            </div>
            {{-- Logo End --}}

            {{-- Logo Start --}}
            @if ($this->logo_dark)
                <div class="my-4">
                    <div class="mb-2">
                        <label class="block">
                            <x-form-label label="Uploaded Logo Dark Preview" />
                            <img src="{{ $this->logoDarkIsUploaded ? $this->logo_dark->temporaryUrl() : url('storage/' . $this->logo_dark) }}"
                                class="mt-2" width="250" height="300">
                        </label>
                    </div>
                </div>
            @endif

            <div class="my-4">
                <div class="mb-2">
                    <label class="block">
                        <x-form-label label="Logo Dark" />
                        <input type="file" accept="image/*" wire:model="logo_dark"
                            class="block w-full mt-2 text-xl font-normal text-gray-500 border rounded outline-none focus:border-blue-400 focus:shadow">
                    </label>
                </div>
                <x-form-errors name="logo_dark" />
            </div>
            {{-- Logo End --}}

            <x-form-input name="contact_no" label="Contact Number" type="number" />

            <x-form-input name="email" label="Email" type="text" />

            <x-form-textarea name="address" label="Address" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Hero Area Section') }}
            </h4>

            <x-form-input name="welcome_title" label="Welcome Title" type="text" />

            <x-form-textarea name="welcome_message" label="Welcome Message" />

            <x-form-input name="tag_line" label="Tag Line" type="text" />

            <x-form-input name="tag_by" label="Tag By" type="text" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('About Us Section') }}
            </h4>

            <x-form-input name="about_title" label="About Title" />

            <x-form-textarea name="about_message" label="About Message" />

            <h2 class="my-4 text-xl font-medium card-title" wire:ignore>
                {{ __('About Section 1') }}
            </h2>

            <x-form-input name="about_title_1" label="About Title 1?" />

            <x-form-textarea name="about_message_1" label="About Message 1" />

            <x-form-textarea name="about_1_points"
                label="About 1 Points (Please Note Use Title and then Point separated by ';')" />

            {{-- About 1 Image Start --}}
            @if ($this->about_1_image)
                <div class="my-4">
                    <div class="mb-2">
                        <label class="block">
                            <x-form-label label="Uploaded About 1 Image Preview" />
                            <img src="{{ $this->About1ImageIsUploaded ? $this->about_1_image->temporaryUrl() : url('storage/' . $this->about_1_image) }}"
                                class="mt-2" width="250" height="300">
                        </label>
                    </div>
                </div>
            @endif

            <div class="my-4">
                <div class="mb-2">
                    <label class="block">
                        <x-form-label label="About 1 Image" />
                        <input type="file" accept="image/*" wire:model="about_1_image"
                            class="block w-full mt-2 text-xl font-normal text-gray-500 border rounded outline-none focus:border-blue-400 focus:shadow">
                    </label>
                </div>
                <x-form-errors name="about_1_image" />
            </div>
            {{-- About 1 Image end --}}

            <h2 class="my-4 text-xl font-medium card-title" wire:ignore>
                {{ __('About Section 2') }}
            </h2>
            <x-form-input name="about_title_2" label="About Title 2?" />

            <x-form-textarea name="about_2_points" label="About 2 Points (Please Note Use Point separated by ';')" />

            {{-- About 2 Image Start --}}
            @if ($this->about_2_image)
                <div class="my-4">
                    <div class="mb-2">
                        <label class="block">
                            <x-form-label label="Uploaded About 2 Image Preview" />
                            <img src="{{ $this->About2ImageIsUploaded ? $this->about_2_image->temporaryUrl() : url('storage/' . $this->about_2_image) }}"
                                class="mt-2" width="250" height="300">
                        </label>
                    </div>
                </div>
            @endif

            <div class="my-4">
                <div class="mb-2">
                    <label class="block">
                        <x-form-label label="About 2 Image" />
                        <input type="file" accept="image/*" wire:model="about_2_image"
                            class="block w-full mt-2 text-xl font-normal text-gray-500 border rounded outline-none focus:border-blue-400 focus:shadow">
                    </label>
                </div>
                <x-form-errors name="about_2_image" />
            </div>
            {{-- About 2 Image end --}}

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Team Section') }}
            </h4>

            <x-form-input name="team_header" label="Team Header" type="text" />

            <x-form-input name="team_title" label="Team Title" type="text" />

            <x-form-textarea name="team_message" label="Team Message" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Pricing Section') }}
            </h4>

            <x-form-input name="pricing_title" label="Pricing Title" />

            <x-form-textarea name="pricing_message"
                label="Pricing Message (Please Note: If You Need Contact Number and Email in this Section Please Replace By '__contact_no' & '__email')" />

            <h2 class="my-4 text-xl font-medium card-title" wire:ignore>
                {{ __('Pricing Section 1') }}
            </h2>
            <x-form-input name="subscription_title_1" label="Subscription Title 1" type="text" />

            <x-form-input name="subscription_description_1" label="Subscription Description 1" type="text" />

            <x-form-textarea name="subscription_points_1"
                label="Subscription Points 1 (Please Note: Points separated by ';')" />

            <h2 class="my-4 text-xl font-medium card-title" wire:ignore>
                {{ __('Pricing Section 2') }}
            </h2>

            <x-form-input name="subscription_title_2" label="Subscription Title 2" type="text" />

            <x-form-input name="subscription_description_2" label="Subscription Description 2" type="text" />

            <x-form-textarea name="subscription_points_2"
                label="Subscription Points 2 (Please Note: Points separated by ';')" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Contact Us Section') }}
            </h4>

            <x-form-input name="contact_us_title" label="Contact Us Title" type="text" />

            <x-form-textarea name="contact_us_message" label="Contact Us Message" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Social Media Links') }}
            </h4>

            <x-form-input name="twitter" label="Twitter" type="text" />

            <x-form-input name="facebook" label="Facebook" type="text" />

            <x-form-input name="instagram" label="Instagram" type="text" />

            <x-form-input name="linkedin" label="Linkedin" type="text" />

            <x-form-input name="youtube" label="Youtube" type="text" />

            <x-form-input name="google_business" label="Google Business" type="text" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Google Map') }}
            </h4>

            <x-form-input name="embed_map_link"
                label="Embed Map Link(Directly from Google Maps Search, Share, Embed copy src link & paste)"
                type="text" />
        @endwire
        <div class="mt-3">
            <x-backend.submit-button>
                {{ __('Update') }}
            </x-backend.submit-button>
        </div>
    </form>
</x-backend.custom-form>
