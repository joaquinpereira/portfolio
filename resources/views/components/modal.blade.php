<div
    x-data="{
        show: @entangle($attributes->wire('model')).defer
    }"
    x-show="show"
    x-on:keydown.escape.window="show = false"
    :class="show && 'fixed'"
    class="inset-0 overflow-y-auto px-4 py-6 md:py-24 sm:px-0 z-40" >
    <div x-show="show" class="fixed inset-0 transform" x-on:click="show = false">
        <div class="absolute inset-0 bg-gray-800 opacity-75"></div>
    </div>
    <div x-show="show" class="bg-slate-900 rounded-lg overflow-hidden transform sm:w-full sm:mx-auto max-w-5xl py-6 mt-24 px-6">
        {{ $slot }}
    </div>
</div>
