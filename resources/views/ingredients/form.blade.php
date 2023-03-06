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
                            <form method="post" action="{{ route('storeIngredient') }}" name="ingredientsForm" role="form">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" type="text" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label>Cost</label>
                                    <input name="cost" type="numeric" placeholder="$0.0">
                                </div>
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
