@extends('layouts.admin.index')
@section('content')
<div class="content-wrapper">
    <section class="content">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Causes Table</h3>     
                    <div class="card-tools" style="margin-left:2em">
                        
                    <div class="input-group input-group-sm" >
                        <form action="{{ route('cause-search') }}" method="GET">
                            <input type="text" name="table_search"
                            class="form-control  " placeholder=" by title or status" >
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                           
                        </form>
                     
                    </div>

                    <a href="{{route('cause.create')}}"><i class="fas fa-plus">add</i></a>
                </div>
            </div>
        <div>
          
        </div>
        @if(count($causes)>0)
           

                @foreach ($causes as $cause) 
                {{-- <h2>Search Results</h2>
                <ul>
                    @foreach($results as $result)
                        <li>{{ $result->title }} - {{ $result->data }} - {{ $result->status }}</li>
                    @endforeach
                </ul> --}}
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
           
                    <tbody>
                        <thead>
                            <tr>
                             
                                <th>Author</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Cause </th>
                                   <th>Action</th>
                            </tr>
                        </thead>
                        <tr>
                            {{-- <td>183</td> --}}
                            {{-- get  login user --}}
                            <td>John Doe</td>
                            <td>{{$cause->created_at->format('d.m.Y')}}</td>
                            <td><span class="tag tag-success">{{$cause->status}}</span></td>
                            <td>{{$cause->title}}</td>
                            <td>
                                <a href={{route('cause.show',$cause->id)}}><i class="fas fa-eye"></i></a>  
                                <a href="{{route('cause.edit',$cause->id)}}"><i class="fas fa-edit"></i></a>
                                <span>
                                <form action={{route('cause.destroy',$cause->id)}} method="POST"> 
                                    @csrf
                                    @method('delete')
                                    <button><small> <i class="fas fa-trash"></i></small></button>
                                </form>
                                </span>
                            </td>
                        </tr>
                     


                    </tbody>


                </table>
            </div>
        
        @endforeach
       
    @else
        <p>no data inputed yet</p>
     
        @endif

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </div>
     
        </div>

    </div>
</div>
    </section>
</div>

@endsection