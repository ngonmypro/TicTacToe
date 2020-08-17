@extends('newgame.master')
@section('title', 'Size table Tic-Tac-Toe')
@section('content')
  <div class="container"><br><br>
    <h1 align="center">Input size table play Tic-Tac-Toe</h1><br>
    <form action="{{route('newgame')}}" method="post">
      {{csrf_field()}}
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label class=""><b> Size table :</b></label>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <input type="number" class="form-control" name="size" placeholder="" min="3" required>
            </div>
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-outline-success">Confirm</button>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection
