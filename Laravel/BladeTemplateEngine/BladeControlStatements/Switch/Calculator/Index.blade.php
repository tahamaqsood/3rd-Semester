
@switch($sign)
@case("+")
 
<h2> The result after addition is: @php echo $num1+$num2; @endphp  </h2>
@break

@case("-")
<h2> The result after subtracting is: @php echo $num1-$num2; @endphp </h2>
@break

@case("*")
<h2> The result after multiplication is: @php echo $num1*$num2; @endphp </h2>
@break

@case("/") 
<h2> The result after division is: @php echo $num1/$num2; @endphp </h2>
@break

@Default
<h2> Invalid Operator </h2>
@break
@endswitch