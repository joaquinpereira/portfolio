<div>
    <h2 class="heading">@lang('Latest Project')</h2>

    <div class="portfolio-container" x-data="{ openProject: false }">

        @foreach ($projects as $obj)
            <div class="portfolio-box">
                <img src="{{$obj->banner}}" alt="{{$obj->name}}">
                <div class="portfolio-layer">
                    <h4>{{$obj->name}}</h4>
                    <p>{{ GoogleTranslate::trans($obj->excerpt, app()->getLocale()) }}</p>
                    <div>
                        <button class="btn btn-project" wire:click="$emitTo('project', 'show', '{{$obj}}')">
                            <i class='bx bx-show' ></i>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <livewire:project />
</div>
