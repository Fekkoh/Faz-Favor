@extends('layouts.outer')

@section('content')
<div class="search_page">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form id="request" class="form_search">
                    <div class="row">
                        <div class="col-md-12 ">
                            <input class="searchbar" type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquisar pedido, área, e data">
                        </div>
                    </div>
                </form>

                <ul id="myUL">
                    @foreach ($favores as $favor)
                        @if (Auth::id() == $favor->user_request_id )
                            @if ($favor->finished == 0)
                                <li class="borda">
                                    <a href="/favor/{{ $favor -> id }}" class="favor">
                                        <div class="col-md-12">
                                            <div class="favor row">
                                                <div class="col-md-12">
                                                    <h3 style="font-size: 25px">{{ $favor -> title }}</h3>
                                                </div>
                                            </div>

                                            <div class="favor row">
                                                <div class="col-md-12">
                                                    <p>{{ $favor -> area -> name }}</p>
                                                    <p style="font-size: 20px">{{ $favor -> description }}</p>
                                                </div>
                                            </div>

                                            <div class="favor row">
                                                <div class="col-md-2">
                                                    <p>{{ $favor -> date }}</p>
                                                </div>

                                                <div class="col-md-1">
                                                    <p>{{ $favor -> hour }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    function myFunction() {
      // Declare variables
      var input, filter, ul, li, a, i, txtValue;
      input = document.getElementById('myInput');
      filter = input.value.toUpperCase();
      ul = document.getElementById("myUL");
      li = ul.getElementsByTagName('li');

      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    }
    </script>
@endsection
