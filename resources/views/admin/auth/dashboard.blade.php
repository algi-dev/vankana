<h1>Selamat Datang di Dashboard Admin</h1>
<form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
