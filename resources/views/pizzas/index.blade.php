<html>
<div style="padding:30px;background-color:#f4f6f9;">
    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="box-title">Kitchen</h1>
            </div>
            <div class="col-sm-6">
                <div>
                    <button class="btn btn-success" onclick="window.location.href=`/pizza`">
                        Pizza +</button>
                    <button class="btn btn-primary" onclick="window.location.href=`/ingredients`">
                        Ingredients</button>
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
                    <h3 class="card-title">Pizzas</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-sm">
                        <thead>
                            <tr style="border: 1px solid;">
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Ingredients</th>
                                <th style="width: 40px">Actions</th>
                            </tr>
                        </thead>
                        @foreach($pizzas as $pizza)
                        <tbody>
                            <tr>
                                <td style="border: 1px solid;">{{$pizza->id}}</td>
                                <td style="border: 1px solid;">{{$pizza->name}}</td>
                                <td style="border: 1px solid;">
                                    @foreach ($pizza->ingredients as $i => $ingredient)
                                    @if ($i != 0) - @endif
                                    {{$ingredient->name}}
                                    @endforeach</td>
                                <td style="border: 1px solid;">
                                    <button class="btn-xs btn-warning" onclick="window.location.href=`{{ route('pizza', $pizza->id) }}`">Edit</button>
                                    <button class="btn-xs btn-danger" onclick="window.location.href=`{{ route('deletePizza', $pizza->id) }}`">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </body>
    </div>
</div>
</html>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
