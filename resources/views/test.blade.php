blade
{{$name}}
<br>
{{$token . $name}}
<br>
{{2 + 2}}
<br>
{{isset($test) ? $test : "null"}}
<br>
<!--php7-->
{{$test??"null"}}
<br>
{{$test or "null"}}
<hr>
{{"<h1>eee</h1>"}}
{!!"<h1>eee</h1>"!!}