<h1>Welcome, Admin!</h1>
<p>This is your dashboard.</p>


<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
