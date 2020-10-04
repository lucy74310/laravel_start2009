<h1><?= isset($greeting) === true ? "{$greeting}" : "Hello "; ?><?= $name; ?></h1>

<h1>{{$greeting or 'Hello'}} {{$name or '' }}</h1>

<!-- html 주석 안에서 {{$name}} 을 출력합니다.-->
{{-- 블레이드 주석 안에서 {{$name}} 을 출력합니다.--}}
<h1>{{$greeting or 'Hello'}} {{$name or '' }}</h1>


{{-- {{}} 안에 or 올때 문법 바뀐듯 .. <?=isset($greeting)? "{$greeting}" : "Hello "; ?> 와 같다고 되어 있으나 그렇지 않다. }}--}}
