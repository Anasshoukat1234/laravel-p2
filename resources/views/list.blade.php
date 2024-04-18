<h1>membres list</h1>
 <table border="1">
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td>OPERATION</td>
    {{-- <td>OPERATION</td>
    <td>OPERATION</td> --}}
</tr>

 @foreach($data as  $value)
 <tr>
    <td>{{ $value['id'] }}</td>
    <td>{{ $value['name'] }}</td>
    <td>{{ $value['email'] }}</td>
    <td><a href={{ "delete/".  $value['id'] }}>Delete</a>

        <a href={{ "edit/".  $value['id'] }}>edit</a>

        <a href={{ "show-form"}}>ADD</a>
    </td>
</tr>
 @endforeach
</table>
