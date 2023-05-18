<div>
    <x-modal wire:model="show">
        <div
            class="block">
            <div class="max-h-[36rem] aspect-video text-center mx-auto">
                <img
                class="border-t-4 border-x-4 border-white rounded-t-2xl max-h-[36rem] aspect-video"
                src="{{ $obj['banner'] ?? '' }}"
                alt="" />
            </div>

            <div class="p-6 text-white" >
                <h5
                class="mb-2 text-6xl font-medium leading-tight">
                    {{ isset($obj['name']) ? GoogleTranslate::trans($obj['name'], app()->getLocale()) : '' }}
                </h5>
                <p class="text-3xl">
                    {{ isset($obj['description']) ? GoogleTranslate::trans($obj['description'], app()->getLocale()) : '' }}
                </p>
            </div>
            <div class="social-media text-center ">
                <a class="!my-2" href="{{ $obj['url'] ?? '' }}" target="_blank"><i class='bx bx-link-external' ></i></a>
                <a class="!my-2" href="{{ $obj['url_github'] ?? '' }}" target="_blank"><i class='bx bxl-github'></i></i></a>
            </div>
        </div>
    </x-modal>
</div>
