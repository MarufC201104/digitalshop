<x-backendTheme.layouts.master>

    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"> Dashboard</h1>

        <div class="card-header">
             Product <a class="btn btn-info" href="{{route('products.create')}}">List</a>

        </div>

        <div class="card-body">

            <h2>Title:{{$product->title}}</h2>
            <h2>Price:{{$product->price}}</h2>
            <h2>Description:{{$product->description}}</h2>

                <img src="/storage/{{$product->image}}">


        </div>

    </div>

</x-backendTheme.layouts.master>

