@include('navbar')
<form method="post" action="{{ action('CarController@updateAction', ['id' => $car->id]) }}">
    Brand:<br>
    <input type="text" name="Brand" value="{{ $car-> Brand }}"><br>
    Model:<br>
    <input type="text" name="Model" value="{{ $car -> Model }}"><br>
    Color:<br>
    <input type="text" name="color" value="{{ $car -> color }}"><br>
    VIN:<br>
    <input type="text" name="VIN" value="{{ $car -> VIN }}"><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="submit" value="submit"><br>
</form>
@include('bottom')
