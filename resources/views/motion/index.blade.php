@extends('/layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">運動</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Name</th>
        <th class="text-center">Mets</th>
        <th class="text-center">Delete</th>
      </tr>
      @foreach($motions as $motion)
      <tr>
        <td>
          <a href="/book/{{ $motion->id }}/edit">{{ $motion->id }}</a>
        </td>
        <td>{{ $motion->name }}</td>
        <td>{{ $motion->mets }}</td>
        <td>{{ $motion->delete }}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection