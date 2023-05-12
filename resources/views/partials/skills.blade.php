<h2 class="heading">@lang('My Skills')</h2>

<div class="skills-container">

    @foreach ($user->technologies as $tech)
        <div class="skill-box">
            {!! $tech->icon !!}
            <h3>{{ $tech->name }}</h3>
            <div class="progress">
                <div class="progress-bar bg-progress " role="progressbar" style="width: {{$tech->pivot->expertise}}%" aria-valuenow="{{$tech->pivot->expertise}}" aria-valuemin="0" aria-valuemax="100"><span class="font-extrabold text-2xl">{{$tech->pivot->expertise}}%</span></div>
            </div>
        </div>
    @endforeach

</div>
