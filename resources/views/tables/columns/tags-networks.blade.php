<div>
    <div class="filament-tables-tags-column flex flex-wrap items-center gap-1 px-4 py-3">
        @foreach ($getState() as $network)
            <span class="inline-flex items-center justify-center min-h-6 px-2 py-0.5 text-sm font-medium tracking-tight rounded-xl text-primary-700 bg-primary-500/10 whitespace-normal dark:text-primary-500">
                {!! $network->networkInfo->icon !!} <span class="px-2">{{ $network->networkInfo->name }}</span>
            </span>
        @endforeach
    </div>
</div>
