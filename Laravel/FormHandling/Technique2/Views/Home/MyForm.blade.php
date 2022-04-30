
<!-- Form -->
{{ Form::open(['url'=>'/GetMyForm' , 'method'=>'post']); }}

<!-- For Name -->
{{ Form::label('Enter Name'); }}
{{ Form::text('name'); }}
<br><br>

<!-- For Age -->
{{ Form::label('Enter Age'); }}
{{ Form::number('age','5'); }}
<br><br>

<!-- For Gender -->
{{ Form::label('Select Gender'); }}
<br>
{{ Form::label('Male'); }}
{{ Form::radio('gender','Male') }}

{{ Form::label('Female'); }}
{{ Form::radio('gender','Female') }}
<br><br>

<!-- For Email -->
{{ Form::label('Enter Email'); }}
{{ Form::email('email'); }}
<br><br>

<!-- For Country -->
{{ Form::label('Select Country'); }}
{{ Form::select('country' , array('Pakistan'=>'Pakistan' , 'China'=>'China' , 'Russia'=>'Russia' , 'Australia'=>'Australia')); }}
<br><br>

<!-- For Check Box -->
{{ Form::checkbox('agreement'); }}
{{ Form::label('Are you agrre with our terms and conditions?') }}
<br><br>

<!-- For Submit Button -->
{{ Form::submit('Submit'); }}

{{ Form::close(); }}