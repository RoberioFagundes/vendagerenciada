@yield('cadastro')
@if (session('sucesso-cadastro-evento'))
<div class="alert alert-success">
    {{ session('sucesso-cadastro-evento') }}
 </div>
@endif
@if (@session('produto-salvo'))
<div class="alert alert-success">
        @yield('produto-salvo')
        {{session('produto-salvo')}}
    </div>
@endif