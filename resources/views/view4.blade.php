@if($itemCount = count($items))
    <p>{{$itemCount}} 종류의 과일이 있습니다.</p>
@else
    <p>엥~ 아무것도 없는데요 </p>
@endif

{{-- @unless는 @if(!조건식) 과 동일 --}}
@unless($itemCount = count($items))
    <p>엥~ 아무것도 없는데요 </p>
@else
    <p>{{$itemCount}} 종류의 과일이 있습니다.</p>
@endunless


<ul>
    @foreach($items as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>


<ul>
    @for($i = 0; $i < 10; $i++)
        <li>The current value is {{$i}}</li>
    @endfor
</ul>


<ul>
    @forelse($items as $item)
        <li>{{$item}}</li>
    @empty
        <li>암것도 없는디요</li>
    @endforelse

</ul>
