<div>

    <h2 class="heading">@lang('Contactame')</h2>

    <div x-data="{ open: @entangle('showAlert') }">
        <div x-show="open" @click.outside="open = false" class="success border text-sm p-4 flex justify-between">
            <div>
                <div class="flex items-center">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 mr-2"
                        viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"
                        />
                    </svg>
                    <p>
                        <span class="font-bold success-span">Info:</span>
                        {{ $success }}
                    </p>
                </div>
            </div>
            <div id="successClose" class="close-success" @click="open = false">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </div>
        </div>
    </div>

    <form wire:submit.prevent="submit" method="POST">
        @csrf
        <div class="input-box">
                <input wire:model="name" type="text"
                name="name" id="name" placeholder="@lang('Nombre Completo')">
                <input wire:model="email" type="text"
                name="email" id="email" placeholder="@lang('Correo electrónico')">
        </div>
        <div class="grid gap-4 grid-cols-2">
            <div class="w-full text-left">
                @error('name')
                    <span class="text-amber-300 text-lg">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="w-full text-left">
                @error('email')
                    <span class="text-amber-300 text-lg">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="input-box">
            <input  wire:model="phone" type="text"
            name="phone" id="phone" placeholder="@lang('Número telefónico')">
            <input wire:model="subject" type="text"
            name="subject" id="subject"placeholder="@lang('Asunto del correo')">
        </div>
        <div class="grid gap-4 grid-cols-2">
            <div class="w-full text-left">
                @error('phone')
                    <span class="text-amber-300 text-lg">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="w-full text-left">
                @error('subject')
                    <span class="text-amber-300 text-lg">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <textarea wire:model="message" name="message"  id="message" cols="30" rows="10" placeholder="@lang('tu mensaje')"></textarea>
        @error('message')
            <span class="text-amber-300 text-lg">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <br>
        <button class="btn">@lang('enviar mensaje')</button>
    </form>


</div>
