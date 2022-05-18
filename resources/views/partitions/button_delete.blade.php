<form action="{{ $route }}" method="post" class="form-delete" onsubmit="return confirm('Do you really want to delete?');">
    @method('delete')
    @csrf
    <button class="btn btn-outline-danger btn-sm"><img src="{{asset('img/delete.png')}}" alt=""></button>
</form>
