

@extends('layouts.admin.index')
@section('content')

{{-- @php
use Illuminate\Pagination\Paginator;
@endphp --}}
<div class="content-wrapper">
    <section class="content">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title" style="margin-top: 1.5em">Causes Table</h3>     
                    <div class="card-tools" style="margin-top: 1.5em">
                                  
                    <form class="form-inline" action="{{ route('cause-search') }}" method="GET" >
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search by title or status"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button  type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                              
                            </div>
                        </div>
                    </form>
                    <div style="margin-top: 1.5em">
                        <a href="{{route('cause.create')}}"><i class="fas fa-plus">add</i></a>     
                        </div>  
                </div>
            </div>
        <div>
          
        </div>
        @if(count($causes)>0)
           

                @foreach ($causes as $cause) 
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
                                <div class="d-flex flex-row ">
                                    <button class="btn btn-navbar"><small> <a href={{route('cause.show',$cause->id)}}><i class="fas fa-eye"></i></a>  </small></button>
                                        <button class="btn btn-navbar"><small> <a href={{route('cause.edit',$cause->id)}}><i class="fas fa-edit" style="color: rgb(245, 208, 43)"></i></a> </small></button>
                                <span>
                                <form action={{route('cause.destroy',$cause->id)}} method="POST"> 
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-navbar" style="color: red"><small> <i class="fas fa-trash"></i></small></button>
                                </form>
                                </span>
                                <div>
                            </td>
                        </tr>
                     


                    </tbody>


                </table>
            </div>
        
        @endforeach
        {{-- {{ $causes->links() }} --}}
    @else
        <p>no data inputed yet</p>
     
        @endif
        {{-- <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                {{ $causes->links() }}
            </ul>
        </nav> --}}
   
    
        
     
        </div>

    </div>
</div>
<div class="d-flex justify-content-center"> 
<a href="{{ $causes->previousPageUrl() }}" aria-label="Previous" class="btn btn-primary btn-sm mr-2{{ $causes->onFirstPage() ? ' disabled' : '' }}">
    Previous
</a>

<span>Page {{ $causes->currentPage() }} of {{ $causes->lastPage() }}</span>

<a href="{{ $causes->nextPageUrl() }}" aria-label="Next" class="btn btn-primary ml-2{{ $causes->hasMorePages() ? '' : ' disabled' }}">
    Next
</a>
</div>
    </section>
</div>

@endsection