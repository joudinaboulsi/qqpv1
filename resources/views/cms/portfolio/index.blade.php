@extends('layouts.admin')

@section('page_name') Portfolio Page @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('header_portfolio_store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="pb-4">
                        <label for="title_header" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_header" name="title_header" value={{$page->title_header}} />
                    </div>

                    <div class="pb-4">
                        @if($page->image_header)
                          <img src="{{asset('assets/portfolio/'.$page->image_header)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">
                        <label for="image_header" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image_header" name="image_header" />
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

    <div class="divider divider-info">
        <div class="divider-text">Details</div>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="{{route('cms_portfolio_create')}}" class="btn btn-primary">Add Portfolio</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="client_table"  class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Alt</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($portfolios as $portfolio)
                        <tr  class="gradeX">
                            <td>{{ $portfolio->title }}</td>
                            <td>{{ $portfolio->type}}</td>
                            <td>
                                @if ($portfolio->image)
                                <img src="{{asset('img/portfolio/'.$portfolio->image)}}" height="100">
                                @endif
                            </td>
                            <td>{{ $portfolio->alt}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('cms_portfolio_edit', $portfolio->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                    <form action="{{ route('cms_portfolio_delete', $portfolio->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //script for Data Table
    $(document).ready(function(){
    
    
        $('#client_table').DataTable({
            order: [0, 'desc' ],
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                {extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},
                {extend: 'print',
                 customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');
    
                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                }
                }
            ]
        });
    
    });   
    

</script>
@endsection
