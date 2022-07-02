@extends('layouts.outer')

@section('content')
<div class="search_page">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form id="request" class="form_search">
                    <div class="row">
                        <div class="col-md-12">
                            <input class="searchbar" type="text" id="Search" onkeyup="search()" placeholder="Pesquisar">
                        </div>
                    </div>
                </form>

                <div class="">
                    @foreach ($areas as $area)
                        <figure style="text-align: center;">
                            <div id="circle">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <img src="assets/images/{{ $area -> name }}.png" alt="" width="70px">
                                </div>
                            </div>
                            <figcaption>{{ $area -> name }}</figcaption>
                        </figure>
                    @endforeach
                </div>

                @foreach ($favores as $favor)
                    <a href="/favor/{{ $favor -> id }}" class="favor">
                        <div class="favor">
                            <h3>{{ $favor -> title }}</h3>
                            <p>{{ $favor -> description }}</p>
                            <p>{{ $favor -> area -> name }}</p>
                            <p>{{ $favor -> date }}</p>
                            <p>{{ $favor -> hour }}</p>
                        </div>
                    </a>
                @endforeach


                {{-- <table id="Table" class="table table-bordered table-striped">
                    <tbody>
                        <tr style="font-weight: bold; text-align: center;">
                            <th>Titulo</th>
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Área</th>
                            <th>Descrição</th>
                        </tr>
                        @foreach ($favores as $favor)
                            <tr>
                                <td>{{ $favor -> title }}</td>
                                <td>{{ $favor -> date }}</td>
                                <td>{{ $favor -> hour  }}</td>
                                <td>{{ $favor -> area -> name }}</td>
                                <td>{{ $favor -> description }}</td>
                          </tr>
                        @endforeach
                    </tbody>
                </table> --}}
            </div>
        </div>
    </div>
</div>

<script>
    function search()
    {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("Search");
        filter = input.value.toUpperCase();
        table = document.getElementById("Table");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++)
        {
            td = tr[i].getElementsByTagName("td")[0];
            if (td)
            {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1)
                {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
@endsection
