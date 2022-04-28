
@if($per >= 80)
<h2> A-1 Grade </h2>

@elseif($per >= 70)
<h2> A Grade </h2>

@elseif($per >= 60)
<h2> B Grade </h2>

@elseif($per >= 50)
<h2> C Grade </h2>

@elseif($per >= 40)
<h2> D Grade </h2>

@else
<h2> Failed..! </h2>
@endif