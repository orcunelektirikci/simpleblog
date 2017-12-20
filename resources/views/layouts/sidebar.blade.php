 <aside class="col-sm-3 ml-sm-auto blog-sidebar">
        <div class="sidebar-module">
            <h4>Kategoriler</h4>
            @if($categories)
                <ul class="list-unstyled">
                    @foreach($categories as $category)
                        <li>

                            <a href="{{route('category.show',$category->id)}}">{{$category->category}}</a>


                            <a href="{{route('category.edit',$category->id)}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
 </aside>