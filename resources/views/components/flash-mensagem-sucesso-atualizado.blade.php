@yield('professor')
@if (session('success-professor'))
<div class="alert alert-success">
    {{ session('success-professor') }}
</div>
    
@endif
@yield('update')
@if (session('sucesso-update-evento'))

 <div class="alert alert-success">
    {{ session('sucesso-update-evento') }}
 </div>

@endif

@yield('cadastro')
@if (session('sucesso-cadastro-evento'))
<div class="alert alert-success">
    {{ session('sucesso-cadastro-evento') }}
 </div>
@endif

@yield('apagar-evento')
@if (@session('apagar-cadastro-evento'))

    <div class="alert alert-danger">
            {{ session('apagar-cadastro-evento') }}
    </div>
@endif

@yield('cadastro-depoimento')

@if(@session('sucesso-depoimento-cadastro'))
    <div class="alert alert-success">
            {{ session('sucesso-depoimento-cadastro') }}
    </div>
@endif

@yield('sucesso-depoimento-apagar')

@if (@session('sucesso-depoimento-apagar'))
    <div class="alert alert-danger">
        {{ session('sucesso-depoimento-apagar') }}
    </div>
@endif

@yield('sucesso-depoimento-atualizacao')

@if (@session('sucesso-depoimento-atualizacao'))

    <div class="alert alert-success">
        {{ session('sucesso-depoimento-atualizacao') }}
    </div>

@endif

@yield('sucess_apagado_polo')

@if (@session('sucess_apagado_polo'))
    <div class="alert alert-danger">
        {{session('sucess_apagado_polo')}}
    </div>    
@endif

@yield('sucess_atualizado_polo')
@if (@session('sucess_atualizado_polo'))
    <div class="alert alert-success">
        {{session('sucess_atualizado_polo')}}
    </div>   
@endif

@yield('sucess_cadastrado_polo')
@if (@session('sucess_cadastrado_polo'))
    <div class="alert alert-danger">
        
    </div>
@endif

@yield('curso_sucesso')
@if(@session('curso_sucesso'))
    <div class="alert alert-success">
        
    </div>
@endif

@yield('dados-enviado')
@if (@session('dados-enviado'))
    <div class="alert alert-success">
        {{ session('dados-enviado') }}
    </div>
@endif
@yield('responsavel')
@if (@session('confirmacao-matricula'))
    <div class="alert alert-success">
        {{ session('confirmacao-matricula') }}
    </div>
@endif

<div class="alert alert-danger">
        
</div>
    
@endif

