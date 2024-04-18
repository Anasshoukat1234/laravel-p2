<h1>Add Membre</h1>
<form action={{ route("customer.store") }} method="POST">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <button type="submit">Store</button>
</form>
