@extends('layouts.admin')

@section('page_name') Edit Portfolio  @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{route('cms_portfolio_update',$portfolio->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="pb-4">
                        <label for="title" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$portfolio->title}}" />
                    </div>

                
                    <div class="pb-4">
                        @if ($portfolio->image)
                            <img src="{{asset('img/portfolio/'.$portfolio->image)}}" height="100">
                        @endif
                    </div>
                    <div class="pb-4">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image"  />
                    </div>

                    <div class="pb-4">
                        <label for="alt" class="form-label">Alt Image</label>
                        <input type="text" class="form-control" id="alt" name="alt" value="{{$portfolio->alt}}" />
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select id="type" name="type" class="form-select">
                            <option>@if($portfolio->type){{$portfolio->type}}@else Select Type @endif</option>
                            <option value="billboard">Billboard</option>
                            <option value="carbranding">Car Branding</option>
                            <option value="lightbox">Light Box</option>
                            <option value="plexi">Plexi</option>
                            <option value="rollup">Rollup</option>
                            <option value="seethrough">See Through</option>
                            <option value="signs">Signs</option>
                            <option value="vinylcut">Vinyl Cut</option>
                        </select>
                
                    </div>
                    <div class="pb-3">
                     <button type="submit" class="btn btn-primary">Save</button>
                    </div>

            </div>
            </form>
        </div>
    </div>
</div>

@endsection
