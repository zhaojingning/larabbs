@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Rely / Show #{{ $rely->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('relies.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('relies.edit', $rely->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Topic_id</label>
<p>
	{{ $rely->topic_id }}
</p> <label>User_id</label>
<p>
	{{ $rely->user_id }}
</p> <label>Content</label>
<p>
	{{ $rely->content }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
