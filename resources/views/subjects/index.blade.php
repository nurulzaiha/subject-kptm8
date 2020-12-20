<h1> hai Cubaan di rumah </h1>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <table class="table">
<thead>
<tr>
<th>ID</th>
<th>Subject Name</th>
<th>Description</th>
<th>Lecturer Name</th>
<th>Created at</th>
</tr>
</thead>
<tbody>
    @foreach($subjects as $subject)
               
            <tr>
            <td>{{$subject->id}}</td>
            <td>{{$subject->name}}</td>
            <td>{{$subject->description}}</td>
            <td>{{$subject->lecturer}}</td>
            <td>{{$subject->created_at ? $subject-> created_at->diffForHumans():'No data'}}</td>
            </tr>
    @endforeach
</tbody>
</table>
               
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
