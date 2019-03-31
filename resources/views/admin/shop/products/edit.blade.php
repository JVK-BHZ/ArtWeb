@extends('layouts.admin_shop')


@section ('content')

 @include('includes.error')

<div class="panel panel-default">
    <div class="panel-heading">
         Edit Product 
    </div>
    <div class="panel-body">
        <form action="{{ route('product.update', ['id'=>$product->id]) }}" method="post" enctype="multipart/form-data" >
              {{ csrf_field() }}
              <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" name="name" class="form-control" value="{{$product->name}}">
                </div>

                <div class="form-group">
                    <label for="dimension">Dimensions</label>
                    <input type="text" name="dimension" class="form-control" value="{{$product->dimension}}">
                </div>
                <div class="form-group">
                    <label for="material">Material</label>
                    <input type="text" name="material" class="form-control" value="{{$product->material}}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" value="{{$product->price}}">
                </div>

                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="text" name="stock" class="form-control" value="{{$product->stock}}">
                </div>

  <hr/>
                <label for="featured">Images</label>
                <div class="form-group" >
                   
                    <label id="image-wraper" >  
                        
                        @foreach($images as $image)
                            <label class="image-container">
                                        <button type="button" class= "x text-center">
                                            x
                                        </button>
                                        <label for="">
                                            <a href="#"  class="image_link" id="image_link_1" >
                                            <img id="btn_image_1" src="{{asset($image->image_name)}}" width="100px" height="100px" >
                                            </a>
                                            <input type="file" class="my_file" id="my_file_1" name="images[]" style="display: none;" />  

                                        </label>
                            <input type="text" name='image_names[]' value="{{$image->image_name}}" hidden>        
                            </label>
                            

                        @endforeach
                
                
                    </label> 

                        

                        <button type="button" width="100px" id="addImageBtn"> <img src="{{asset('images/add.png')}}" alt="add image"></button>

  <hr/>                    

                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category_id" id="category" class="form-control" >
                        @foreach($categories as $category)

                            <option value="{{$category->id}}"  
                            dump($product);
                                @if( $category->id == $product->category_id)

                                        selected
                                @endif
                                
                                >{{$category->name}}
                            </option>
                        @endforeach
                    </select>
                   
                </div>

    <hr/>

                <div class="form-group  ">
                    <label >Other Specs</label>
                        <div id="specs-wrapper" >
                @foreach($specs as $spec)
                            <div class="spec-container row">
                                <div class=" col-md-3 pr-1">
                                    <div>Spec Name</div>
                                    <input class="form-control" type="text" name="spec_key[]" value="{{$spec->key}}">
                                </div>
                                <div class="col-md-7 px-1">
                                        <div> Spec Value</div>
                                        <input class="form-control" type="text" name="spec_value[]" value="{{$spec->value}}">     
                                </div>
                                <div class="col-md-2 pl-1">
                                        <div >&nbsp</div>
                                        <button  class="removeSpecBtn btn btn-danger">Remove</button>     
                                </div>
                            </div>

                @endforeach



                            

                    </div>
                
                </div> 
                <button class="btn btn-primary" type="button" id="addSpecsBtn">Add New Spec</button>

    <hr/>

                <div class="form-group">
                <label for="tags">Select Tags</label>
                    @foreach($tags as $tag)
                        <div class="checkbox">
                            <label ><input class="px-2" type="checkbox" name="tags[]" value="{{ $tag->id}}"

                            @foreach($product->tags as $t)
                                @if($tag->id==$t->id))

                                    checked

                                @endif
                            @endforeach

                            >{{$tag->tag}}</label>
                        
                        </div>
                    @endforeach
                
                </div>
<hr/>

                <div class="form-group">
                    <label for="detail">ِDescription</label>
                   <textarea name="detail" id="detail" class="form-control">{{$product->detail}}</textarea>
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-success btn-sm"> Save Product</button>
                   <a href="{{route('admin.products')}}" class="btn btn-danger btn-sm"> Cancel</a> 
                </div>



        </form>
    </div>
</div>

@endSection 

@Section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

<script src={{asset('js/edit_products.js')}}></script>
@stop

@Section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
@stop