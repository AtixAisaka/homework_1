@include('navbar')
<form method="post" action="{{ action('CarController@insertAction') }}">
    Brand:<br>
    <input type="text" name="Brand" placeholder="Model" value=""><br>
    Model:<br>
    <input type="text" name="Model" placeholder="Model" value=""><br>
    Color:<br>
    <input type="text" name="color" placeholder="Model" value=""><br>
    VIN:<br>
    <input type="text" name="VIN" placeholder="Model" value=""><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="submit" value="submit"><br>
</form>
@include('bottom')
