<form action="{{route('PostData')}}" method="post">
    {{ csrf_field() }}
    Name:
    <input type="text" name="Name">
    Age: <input type="text" name="Age">
    <input type="submit">

</form>