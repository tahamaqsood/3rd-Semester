

<form action="{{ url('/data') }}" method="post">
@csrf
<input type="text" name="name" placeholder="Enter Name" required>
<br>

<input type="email" name="email" placeholder="Enter Email" required>
<br>

<input type="number" name="age" placeholder="Enter age" required>
<br>

<input type="submit" value="Submit">
</form>
