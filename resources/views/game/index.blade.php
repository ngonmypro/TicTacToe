<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tic Tac Toe</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
  <style media="screen">
    .input {
      width: 200px;
      height: 200px;
      display: inline;
      margin-top: 4px;
      font-size: 100px;
      text-align: center;
      cursor: pointer;
    }
  </style>
  <body>
    <div class="container"><br><br><br><br>
      <div class="form-group" align="center">
        <h1 id="comment"><b></b></h1>
        @for($i = 1; $i <= 9; $i++)
        @if($i == 4 || $i == 7)
          <br>
        @endif
        <input type="text" class="form-control input" id="TicTacToe{{$i}}" OnClick="JavaScript:Select<?php echo $i;?>();" value="" readonly>
        @endfor
      </div>

      <div class="form-group" align="center">
        <a href="{{route('game.index')}}" class="btn btn-outline-info">New Game</a>
      </div>
      <input type="hidden" name="" id="data" value="X">
    </div>
  </body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
      var data = $("#data").val();
      $("#comment").html(data + " Select Channel");

      $(".btn").hide();
    });

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

  function Select1() {
    var comment = $("#comment").html();
      if (comment == "X Win!" || comment == "O Win!" || comment == "X &amp; O Draw!") {
        alert("Please click on the new game.");
        exit();
      }

    var TicTacToe1 = $("#TicTacToe1").val();
    var data = $("#data").val();
    if (TicTacToe1 != "") {
      alert("Please select another channel.");
    }else {
      $("#TicTacToe1").val(data);
      ProcessData();
    }
  }

  function Select2() {
    var comment = $("#comment").html();
      if (comment == "X Win!" || comment == "O Win!" || comment == "X &amp; O Draw!") {
        alert("Please click on the new game.");
        exit();
      }

    var TicTacToe2 = $("#TicTacToe2").val();
    var data = $("#data").val();
    if (TicTacToe2 != "") {
      alert("Please select another channel.");
    }else {
      $("#TicTacToe2").val(data);
      ProcessData();
    }
  }

  function Select3() {
    var comment = $("#comment").html();
      if (comment == "X Win!" || comment == "O Win!" || comment == "X &amp; O Draw!") {
        alert("Please click on the new game.");
        exit();
      }

    var TicTacToe3 = $("#TicTacToe3").val();
    var data = $("#data").val();
    if (TicTacToe3 != "") {
      alert("Please select another channel.");
    }else {
      $("#TicTacToe3").val(data);
      ProcessData();
    }
  }

  function Select4() {
    var comment = $("#comment").html();
      if (comment == "X Win!" || comment == "O Win!" || comment == "X &amp; O Draw!") {
        alert("Please click on the new game.");
        exit();
      }

    var TicTacToe4 = $("#TicTacToe4").val();
    var data = $("#data").val();
    if (TicTacToe4 != "") {
      alert("Please select another channel.");
    }else {
      $("#TicTacToe4").val(data);
      ProcessData();
    }
  }

  function Select5() {
    var comment = $("#comment").html();
      if (comment == "X Win!" || comment == "O Win!" || comment == "X &amp; O Draw!") {
        alert("Please click on the new game.");
        exit();
      }

    var TicTacToe5 = $("#TicTacToe5").val();
    var data = $("#data").val();
    if (TicTacToe5 != "") {
      alert("Please select another channel.");
    }else {
      $("#TicTacToe5").val(data);
      ProcessData();
    }
  }

  function Select6() {
    var comment = $("#comment").html();
      if (comment == "X Win!" || comment == "O Win!" || comment == "X &amp; O Draw!") {
        alert("Please click on the new game.");
        exit();
      }

    var TicTacToe6 = $("#TicTacToe6").val();
    var data = $("#data").val();
    if (TicTacToe6 != "") {
      alert("Please select another channel.");
    }else {
      $("#TicTacToe6").val(data);
      ProcessData();
    }
  }

  function Select7() {
    var comment = $("#comment").html();
      if (comment == "X Win!" || comment == "O Win!" || comment == "X &amp; O Draw!") {
        alert("Please click on the new game.");
        exit();
      }

    var TicTacToe7 = $("#TicTacToe7").val();
    var data = $("#data").val();
    if (TicTacToe7 != "") {
      alert("Please select another channel.");
    }else {
      $("#TicTacToe7").val(data);
      ProcessData();
    }
  }

  function Select8() {
    var comment = $("#comment").html();
      if (comment == "X Win!" || comment == "O Win!" || comment == "X &amp; O Draw!") {
        alert("Please click on the new game.");
        exit();
      }

    var TicTacToe8 = $("#TicTacToe8").val();
    var data = $("#data").val();
    if (TicTacToe8 != "") {
      alert("Please select another channel.");
    }else {
      $("#TicTacToe8").val(data);
      ProcessData();
    }
  }

  function Select9() {
    var comment = $("#comment").html();
      if (comment == "X Win!" || comment == "O Win!" || comment == "X &amp; O Draw!") {
        alert("Please click on the new game.");
        exit();
      }

    var TicTacToe9 = $("#TicTacToe9").val();
    var data = $("#data").val();
    if (TicTacToe9 != "") {
      alert("Please select another channel.");
    }else {
      $("#TicTacToe9").val(data);
      ProcessData();
    }
  }

  function ProcessData() {
    var TicTacToe1 = $("#TicTacToe1").val();
    var TicTacToe2 = $("#TicTacToe2").val();
    var TicTacToe3 = $("#TicTacToe3").val();
    var TicTacToe4 = $("#TicTacToe4").val();
    var TicTacToe5 = $("#TicTacToe5").val();
    var TicTacToe6 = $("#TicTacToe6").val();
    var TicTacToe7 = $("#TicTacToe7").val();
    var TicTacToe8 = $("#TicTacToe8").val();
    var TicTacToe9 = $("#TicTacToe9").val();
    var data = $("#data").val();
    var result = "TicTacToe1=" + TicTacToe1 + "&TicTacToe2=" + TicTacToe2 + "&TicTacToe3=" + TicTacToe3 + "&TicTacToe4=" + TicTacToe4 + "&TicTacToe5=" + TicTacToe5 + "&TicTacToe6=" + TicTacToe6 + "&TicTacToe7=" + TicTacToe7 + "&TicTacToe8=" + TicTacToe8 + "&TicTacToe9=" + TicTacToe9 + "&data=" + data;
    $.ajax({
        url: "{{Route('game.action')}}",
        type: 'POST',
        data: result,
        dataType: "text",
        success:function(result) {
          // alert(result);
          if (result == "X" || result == "O") {
            $("#comment").html(result + " Select Channel");
            $("#data").val(result);
            // $(".btn").show();
          }else {
            $("#comment").html(result);
            $("#data").val("");
            $(".btn").show();
          }
        }
    });
  }
</script>
