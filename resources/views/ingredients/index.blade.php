<html>
<div style="padding:30px;background-color:#f4f6f9;">
    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="box-title">Kitchen</h1>
            </div>
            <div class="col-sm-6">
                <div>
                    <button class="btn btn-success" onclick="window.location.href=`/ingredient`">
                        Ingredient +</button>
                    <button class="btn btn-primary" onclick="window.location.href=`{{ route('pizzas') }}`">Pizzas</button>
                </div><br>
            </div>
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
            @endif
        </div>
    </div>
    <div class="content">
        <body>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ingredients</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Cost</th>
                                <th style="width: 40px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ingredients as $ingredient)
                            <tr>
                                <td>{{$ingredient->id}}</td>
                                <td>{{$ingredient->name}}</td>
                                <td>{{$ingredient->cost}}</td>
                                <td><button class="btn-xs btn-danger" onclick="window.location.href=`{{ route('deleteIngredient', $ingredient->id) }}`">
                                        Delete </button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
    </div>
</html>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
