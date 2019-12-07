@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="/">
    @csrf
    site: <input name="site"  /> sample: http://example.com
    <input type="submit" value="start">
</form>
