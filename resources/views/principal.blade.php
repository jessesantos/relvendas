<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Projeto Laravel @yield('pageTitle')</title>
    <link href="http://{{ $_SERVER['HTTP_HOST'] }}/css/styles.css" rel="stylesheet"/>
    <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/dist/css/styles.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <style type="text/css">
        .ajuste-margem {
            margin-right: 15px;
            margin-left: 15px;
        }
    </style>
</head>
<body class="sb-nav-fixed">
@include('topo')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                @include('menuprincipal')
            </div>
            <div class="sb-sidenav-footer">
                @guest
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <div class="small">Logado como:</div>
                    {{ Auth::user()->name }}
                @endguest
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">@yield('pageTitle')</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"><a href="http://localhost:3000">Início</a> / @yield('breadcrumb')</li>
                </ol>
                <div class="row">
                    @yield('conteudo')
                </div>
        </main>
        @include('rodape')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="http://{{ $_SERVER['HTTP_HOST'] }}/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/dist/assets/demo/datatables-demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
<script>
    function printDataTable()
    {
        var divToPrint = document.getElementById("dataTable");
        newWin = window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    }
</script>
</body>
</html>
