
<h2> Code Snippet:01 </h2>
@php $i = 0; @endphp

@while($i<=10)
<h2> {{ $i }} </h2>
@php $i++ @endphp
@endwhile

<br><br>

<h2> Code Snippet:02 </h2>
@php $i = 0; @endphp

@while($i<=10)
<h2> {{ $i++ }} </h2>
@endwhile