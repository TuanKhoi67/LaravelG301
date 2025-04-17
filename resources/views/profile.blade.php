<h2>Chào, {{ auth()->user()->username }}</h2>
<p>Email: {{ auth()->user()->email }}</p>

<form method="POST" action="/logout">
    @csrf
    <button type="submit">Đăng xuất</button>
</form>
