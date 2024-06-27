<x-backendTheme.layouts.master>

<div class="container-fluid p-0">

        <h1 class="h3 mb-3"> Dashboard</h1>

     <div class="card-header">
         create Product <a class="btn btn-info" href="{{route('products.index')}}">List</a>

     </div>

      <div class="card-body">
          <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                  <label for="inputTitle" class="col-sm-3 col-form-label">Title</label>
                  <div class="col-8">
                      <input type="text"
                      class="form-control"
                      id="inputTitle"
                      name="title"
                      value="">
                      @error('title')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>
              </div>
              <div class="mb-3">
                  <label for="inputPrice" class="col-sm-3 col-form-label">Price</label>
                  <div class="col-8">
                      <input type="text"
                             class="form-control"
                             id="inputPrice"
                             name="price"
                             value="">

                      @error('price')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>
              </div>
              <div class="mb-3">
                  <label for="" class="col-sm-3 col-form-label">Description</label>
                  <div class="col-8">
                      <textarea class="form-control" rows="2"
                                name="description"
                                value ="" placeholder="Textarea">

                      </textarea>

                      @error('description')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>
              </div>

              <div class="mb-3">
                  <label for="inputPicture" class="col-sm-3 col-form-label">Picture</label>
                  <div class="col-8">
                      <input type="file"
                             class="form-control"
                             id="inputPicture"
                             name="image"
                             value="">

                      @error('image')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                  </div>
              </div>

              <div class="mb-3">
                  <div class="col-sm-8">
                   <button type="submit" class="btn btn-info">Submit</button>
                  </div>

              </div>

          </form>
      </div>

</div>

</x-backendTheme.layouts.master>

