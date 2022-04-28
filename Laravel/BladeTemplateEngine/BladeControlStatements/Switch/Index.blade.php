
@switch($drink)
@case("Pakola")
<h2> You have selected Pakola </h2>
@break

@case("Pepsi")
<h2> You have selected Pepsi </h2>
@break

@case("Sting")
<h2> You have selected Sting </h2>
@break

@case("Sprite")
<h2> You have selected Sprite </h2>
@break

@case("Fresh Lime")
<h2> You have selected Fresh Lime </h2>
@break

@Default
<h2> Your drink is not available right now </h2>
@break
@endswitch