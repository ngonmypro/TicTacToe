@extends('newgame.master')
@section('title', 'Game Tic-Tac-Toe')
@section('content')
<style media="screen">
.input {
  width: 100px;
  height: 100px;
  display: inline;
  margin-top: 4px;
  font-size: 100px;
  text-align: center;
  cursor: pointer;
}
</style>
  <div class="container"  align="center"><br><br>
    <div class="form-group" align="center">
      <h1 id="comment"><b></b></h1>
      <!-- <form action="" method="post"> -->
        @for($i = 1; $i <= $size*$size; $i++)
          @for($j = $size+1; $j <= $size*$size; $j+=$size)
            @if($i == $j)
              <br>
            @endif
          @endfor
            <input type="text" class="form-control input" id="TicTacToe{{$i}}" onclick="JavaScript:SelectChannel('{{$i}}');" value="" readonly>
        @endfor
        <br><br>
        <input type="text" id="size" value="{{ $size }}">
          <!-- <button type="submit" name="button" class="btn btn-outline-success">Check</button> -->
      <!-- </form> -->
      <div class="form-group" align="center">
        <a href="" class="btn btn-outline-info">New Game</a>
      </div>
      <input type="text" name="" id="data" value="X">
      <input type="text" name="" id="idTicTacToe" value="">
    </div>
  </div>

  <script type="text/javascript">
  $(document).ready(function(){
    var data = $("#data").val();
    $("#comment").html(data + " Select Channel");

    $(".btn").hide();
  });

    function SelectChannel(id) {
      var comment = $("#comment").html();
        if (comment == "X Win!" || comment == "O Win!" || comment == "X &amp; O Draw!") {
          alert("Please click on the new game.");
          exit();
        }

        var TicTacToe = $("#TicTacToe"+id).val();
        var data = $("#data").val();
        if (TicTacToe != "") {
          alert("Please select another channel.");
        }else {
          $("#TicTacToe"+id).val(data);
          $("#idTicTacToe").val(id);
          Process();
        }
    }

    function Process() {
      var size = $("#size").val();
      var TicTacToe = "";
      var data = $("#data").val();
      var idTicTacToe = $("#idTicTacToe").val();
      for (var i = 1; i <= size*size; i++) {
        if (i == 1) {
          TicTacToe = $("#TicTacToe"+i).val();
        }else {
          TicTacToe = TicTacToe + "," + $("#TicTacToe"+i).val();
        }
      }
      var sentdata = "size=" + size + "&data=" + data + "&idTicTacToe=" + idTicTacToe + "&TicTacToe=" + TicTacToe;
      // alert(sentdata)
      $.ajax({
          url: '{{url('/newgame/game/ChkProcess')}}',
          method: 'GET',
          data: sentdata,
          dataType: "text",
          success:function(result) {
            // alert(result);
            // if (result == "X" || result == "O") {
            //   $("#comment").html(result + " Select Channel");
            //   $("#data").val(result);
            //   // $(".btn").show();
            // }else {
            //   $("#comment").html(result);
            //   $("#data").val("");
            //   $(".btn").show();
            // }
          }
      });
    }
  </script>

@endsection
