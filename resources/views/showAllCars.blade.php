@include('navbar')
<table>
    @foreach($cars as $car)
    <tr>
        <td>{{$car->Model}} {{$car->Brand}}</td>
        <td>{{$car->color}}</td>
        <td>{{$car->VIN}}</td>
        <td>
            <a href="{{action('CarController@showAction',['id' => $car->id])}}">edit</a>
            <a href="{{action('CarController@deleteAction',['id' => $car->id])}}">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
@include('bottom')
