@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Rely
          <a class="btn btn-success float-xs-right" href="{{ route('relies.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($relies->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Topic_id</th> <th>User_id</th> <th>Content</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($relies as $rely)
              <tr>
                <td class="text-xs-center"><strong>{{$rely->id}}</strong></td>

                <td>{{$rely->topic_id}}</td> <td>{{$rely->user_id}}</td> <td>{{$rely->content}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('relies.show', $rely->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('relies.edit', $rely->id) }}">
                    E
                  </a>

                  <form action="{{ route('relies.destroy', $rely->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $relies->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
