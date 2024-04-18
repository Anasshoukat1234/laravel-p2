<h1>Membre list</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
<input type="text" name="name" value="{{ $data->name }}"><br><br>
<input type="text" name="id" value="{{ $data->id }}" ><br><br>
<input type="text" name="email"value="{{ $data->email }}" ><br><br>
<button type="submit">Update</button>
</form>
