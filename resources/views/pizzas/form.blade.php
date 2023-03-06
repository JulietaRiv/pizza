<div class="row">
    <div class="col-12">
        @if(Session::has('error'))
        <div class="alert alert-danger">
            {{Session::get('error')}}
        </div>
        @endif

        <div style="padding:30px;background-color:#f4f6f9;">
            <div class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pizzas</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="card-body">
                            <form method="post" action="{{ route('storePizza') }}" name="pizzasForm" role="form">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" type="text" placeholder="Name" value="{{$pizza->name ?? null}}">
                                </div><br>
                                <div class="form-group">
                                    <label>Ingredients</label>
                                    <ol>
                                        @foreach ($ingredients as $ingredient)
                                        @php $checked = ''; @endphp
                                        @if($pizza) @if($pizza->ingredients->pluck('id')->contains($ingredient->id))
                                        @php $checked = 'checked'; @endphp
                                        @endif
                                        @endif
                                        <li>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" value="{{$ingredient->id}}" name="ingredients[]" {{$checked}}>
                                                <label class="form-check-label" for="exampleCheck1">
                                                    {{$ingredient->name}}&nbsp;&nbsp;&nbsp;( ${{$ingredient->cost}} )
                                                </label>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ol>
                                </div>
                                <input type="hidden" value="{{$pizza->id ?? null}}" name="id">
                                <br>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
