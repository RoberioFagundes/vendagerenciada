@extends('default')
@section('body')

<!-- pra espaço col-12 -->
<div class="col-12">

</div>
<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda no dia atual de produto com caixa com cliente</h5>
            <class="card-text">
                <h7 class="card-title" id="CaixaDiaManha">Manhã:
                    @foreach ($valortotalCaixaManhaCliente as $ValortotalCaixaManha)
                        R$ {{$ValortotalCaixaManha->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title" id="CaixaDiaTarde">Tarde:
                    @foreach ($valortotalCaixaTardeCliente as $ValortotalCaixaTarde)
                        R$ {{$ValortotalCaixaTarde->valortotal}}
                    @endforeach
                </h7>

                <br>
                <h7 class="card-title">Noite:
                    @foreach ($valortotalCaixaNoiteCliente as $ValortotalCaixaNoite)
                        R$ {{$ValortotalCaixaNoite->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Todos os períodos:
                    @foreach ($valortotalCaixaTodosPeriodoCliente as $ValortotalCaixaTodosPeriodoCliente)
                        R$ {{$ValortotalCaixaTodosPeriodoCliente->valortotal}}
                    @endforeach
                </h7>
                </p>
        </div>
    </div>
</div>

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda no mês atual de produto com caixa com cliente</h5>
            <p class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($valortotalCaixaTodosPeriodoClienteMesManha as $ValortotalCaixaTodosPeriodoClienteMesManha)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteMesManha->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:
                    @foreach ($valortotalCaixaTodosPeriodoClienteMesTarde as $ValortotalCaixaTodosPeriodoClienteMesTarde)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteMesTarde->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Noite:
                    @foreach ($valortotalCaixaTodosPeriodoClienteMesNoite as $ValortotalCaixaTodosPeriodoClienteMesNoite)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteMesNoite->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Todos os períodos:
                    @foreach ($valortotalCaixaTodosPeriodoClienteMes as $ValortotalCaixaTodosPeriodoClienteMes)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteMes->valortotal}}
                    @endforeach
                </h7>
            </p>
        </div>
    </div>
</div>

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda no ano atual de produto com caixa com cliente</h5>
            <p class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($valortotalCaixaTodosPeriodoClienteAnoManha as $ValortotalCaixaTodosPeriodoClienteAnoManha)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteAnoManha->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:
                    @foreach ($valortotalCaixaTodosPeriodoClienteAnoTarde as $ValortotalCaixaTodosPeriodoClienteAnoTarde)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteAnoTarde->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Noite:
                    @foreach ($valortotalCaixaTodosPeriodoClienteAnoNoite as $ValortotalCaixaTodosPeriodoClienteAnoNoite)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteAnoNoite->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Todos os períodos:
                    @foreach ($valortotalCaixaTodosPeriodoClienteAno as $ValortotalCaixaTodosPeriodoClienteAno)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteAno->valortotal}}
                    @endforeach
                </h7>
            </p>
        </div>
    </div>
</div>

<!-- venda com caixa sem cliente  -->
<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">total de Venda no dia atual de produto com caixa</h5>
            <class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($valortotalCaixaSemClienteManha as $ValortotalCaixaSemClienteManha)
                        R$ {{$ValortotalCaixaSemClienteManha->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:
                    @foreach ($valortotalCaixaSemClienteTarde as $ValortotalCaixaSemClienteTarde)
                        R$ {{$ValortotalCaixaSemClienteTarde->valortotal}}
                    @endforeach
                </h7>

                <br>
                <h7 class="card-title">Noite:
                    @foreach ($valortotalCaixaSemClienteNoite as $ValortotalCaixaSemClienteNoite)
                        R$ {{$ValortotalCaixaSemClienteNoite->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Todos os períodos:
                    @foreach ($valortotalCaixaSemClienteTodosPeriodo as $ValortotalCaixaSemClienteTodosPeriodo)
                        R$ {{$ValortotalCaixaSemClienteTodosPeriodo->valortotal}}
                    @endforeach
                </h7>
                </p>
        </div>
    </div>
</div>

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">total de Venda no mês atual de produto com caixa</h5>
            <p class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($valortotalCaixaTodosPeriodoClienteMesManha as $ValortotalCaixaTodosPeriodoClienteMesManha)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteMesManha->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:
                    @foreach ($valortotalCaixaTodosPeriodoClienteMesTarde as $ValortotalCaixaTodosPeriodoClienteMesTarde)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteMesTarde->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Noite:
                    @foreach ($valortotalCaixaTodosPeriodoClienteMesNoite as $ValortotalCaixaTodosPeriodoClienteMesNoite)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteMesNoite->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Todos os períodos:
                    @foreach ($valortotalCaixaTodosPeriodoClienteMes as $ValortotalCaixaTodosPeriodoClienteMes)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteMes->valortotal}}
                    @endforeach
                </h7>
            </p>
        </div>
    </div>
</div>

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">total de Venda no ano atual de produto com caixa</h5>
            <p class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($valortotalCaixaTodosPeriodoClienteAnoManha as $ValortotalCaixaTodosPeriodoClienteAnoManha)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteAnoManha->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:
                    @foreach ($valortotalCaixaTodosPeriodoClienteAnoTarde as $ValortotalCaixaTodosPeriodoClienteAnoTarde)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteAnoTarde->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Noite:
                    @foreach ($valortotalCaixaTodosPeriodoClienteAnoNoite as $ValortotalCaixaTodosPeriodoClienteAnoNoite)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteAnoNoite->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Todos os períodos:
                    @foreach ($valortotalCaixaTodosPeriodoClienteAno as $ValortotalCaixaTodosPeriodoClienteAno)
                        R$ {{$ValortotalCaixaTodosPeriodoClienteAno->valortotal}}
                    @endforeach
                </h7>
            </p>
        </div>
    </div>
</div>
<!-- fim da venda com caixa sem cliente -->

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda no dia de produto com unidade com Cliente </h5>
            <p class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($ValortotalVendaUnidadeClientePerimetroManha as $valortotalVendaUnidadeClientePerimetroManha)
                        R$ {{$valortotalVendaUnidadeClientePerimetroManha->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:
                    @foreach ($ValortotalVendaUnidadeClientePerimetroTarde as $valortotalVendaUnidadeClientePerimetroTarde)
                        R$ {{$valortotalVendaUnidadeClientePerimetroTarde->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Noite:
                    @foreach ($ValortotalVendaUnidadeClientePerimetroNoite as $valortotalVendaUnidadeClientePerimetroNoite)
                        R$ {{$valortotalVendaUnidadeClientePerimetroNoite->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Todos os períodos:
                    @foreach ($ValortotalVendaUnidadeClienteTodoPerimetro as $valortotalVendaUnidadeClienteTodoPerimetro)
                        R$ {{$valortotalVendaUnidadeClienteTodoPerimetro->valortotal}}
                    @endforeach
                </h7>
            </p>
        </div>
    </div>
</div>

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda no mês de produto com unidade com Cliente</h5>
            <p class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($valortotalUnidadeTodosPeriodoClienteMesManha as $ValortotalUnidadeTodosPeriodoClienteMesManha)
                        R$ {{$ValortotalUnidadeTodosPeriodoClienteMesManha->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:
                    @foreach ($valortotalUnidadeTodosPeriodoClienteMesTarde as $ValortotalUnidadeTodosPeriodoClienteMesTarde)
                        R$ {{$ValortotalUnidadeTodosPeriodoClienteMesTarde->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Noite:
                    @foreach ($valortotalUnidadeTodosPeriodoClienteMesNoite as $ValortotalUnidadeTodosPeriodoClienteMesNoite)
                        R$ {{$ValortotalUnidadeTodosPeriodoClienteMesNoite->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Todos os períodos:
                    @foreach ($valortotalUnidadeTodosPeriodoClienteMes as $ValortotalUnidadeTodosPeriodoClienteMes)
                        R$ {{$ValortotalUnidadeTodosPeriodoClienteMes->valortotal}}
                    @endforeach
                </h7>
            </p>
        </div>
    </div>
</div>

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda no ano de produto com unidade com Cliente</h5>
            <p class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($valortotalUnidadeTodosPeriodoClienteAnoManha as $ValortotalUnidadeTodosPeriodoClienteAnoManha)
                        R$ {{$ValortotalUnidadeTodosPeriodoClienteAnoManha->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:
                    @foreach ($valortotalUnidadeTodosPeriodoClienteAnoTarde as $ValortotalUnidadeTodosPeriodoClienteAnoTarde)
                        R$ {{$ValortotalUnidadeTodosPeriodoClienteAnoTarde->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Noite:
                    @foreach ($valortotalVendaUnidadeSemClientePerimetroNoite as $ValortotalVendaUnidadeSemClientePerimetroNoite)
                        R$ {{$ValortotalVendaUnidadeSemClientePerimetroNoite->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Todos os períodos:
                    @foreach ($valortotalUnidadeTodosPeriodoClienteAno as $ValortotalUnidadeTodosPeriodoClienteAno)
                        R$ {{$ValortotalUnidadeTodosPeriodoClienteAno->valortotal}}
                    @endforeach
                </h7>
            </p>
        </div>
    </div>
</div>

<!-- inicio de venda geral sem cliente -->
<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda Geral de produto no dia com Unidade</h5>
            <valortotalVendaUnidadeSemClientePerimetroTodoPeriodo class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($valortotalVendaUnidadeSemClientePerimetroManhaDia as $ValortotalUnidadeSemclientesTodosPeriodoClienteDia)
                        R$ {{$ValortotalUnidadeSemclientesTodosPeriodoClienteDia->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:
                    @foreach ($valortotalVendaUnidadeSemClientePerimetroTardeDayUnidade as $valortotalVendaUnidadeSemClientePerimetroTardeDayUnidade)
                        R$ {{$valortotalVendaUnidadeSemClientePerimetroTardeDayUnidade->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Noite:
                    @foreach ($valortotalVendaUnidadeSemClientePerimetroNoiteDia as $ValortotalVendaUnidadeSemClientePerimetroNoite)
                        R$ {{$ValortotalVendaUnidadeSemClientePerimetroNoite->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Todos os períodos:

                    @foreach ($valortotalUnidadeSemclientesTodosPeriodoClienteDia as $ValortotalVendaUnidadeSemClientePerimetroTodoPeriodo)
                        R$ {{$ValortotalVendaUnidadeSemClientePerimetroTodoPeriodo->valortotal}}
                    @endforeach
                </h7>
                </p>
        </div>
    </div>
</div>

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda Geral de produto no mes com unidade</h5>
            <p class="card-text">

                <h7 class="card-title">Manhã:
                    @foreach ($valortotalVendaUnidadeSemClientePerimetroManhaMes as $ValortotalVendaUnidadeSemClientePerimetroNoiteMes)
                        R$ {{$ValortotalVendaUnidadeSemClientePerimetroNoiteMes->valortotal}}
                    @endforeach
                </h7><br>

                <h7 class="card-title">Tarde:
                    @foreach ($valortotalVendaUnidadeSemClientePerimetroTardeMes as $ValortotalVendaUnidadeSemClientePerimetroTardeMes)
                        R$ {{$ValortotalVendaUnidadeSemClientePerimetroTardeMes->valortotal}}
                    @endforeach
                </h7><br>

                <h7 class="card-title">Noite:
                    @foreach ($valortotalVendaUnidadeSemClientePerimetroNoiteMes as $ValortotalVendaUnidadeSemClientePerimetroNoiteMes)
                        R$ {{$ValortotalVendaUnidadeSemClientePerimetroNoiteMes->valortotal}}
                    @endforeach
                </h7><br>

                <h7 class="card-title">Todos os períodos:
                    @foreach ($valortotalVendaUnidadeSemClientePerimetroTodoPeriodoMes as $ValortotalVendaUnidadeSemClientePerimetroTodoPeriodoMes)
                        R$ {{$ValortotalVendaUnidadeSemClientePerimetroTodoPeriodoMes->valortotal}}
                    @endforeach
                </h7>
            </p>
        </div>
    </div>
</div>

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda Geral de produto no ano com unidade</h5>
            <p class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($valortotalVendaUnidadeSemClientePerimetroManhaAno as $valortotalVendaUnidadeSemClientePerimetroManhaYEAR)
                        R$ {{$valortotalVendaUnidadeSemClientePerimetroManhaYEAR->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:
                    @foreach ($valortotalVendaUnidadeSemClientePerimetroTardeAno as $valortotalVendaUnidadeSemClientePerimetroTardeYEAR)
                        R$ {{$valortotalVendaUnidadeSemClientePerimetroTardeYEAR->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Noite:

                    @foreach ($valortotalVendaUnidadeSemClientePerimetroNoiteAno as $valortotalVendaUnidadeSemClientePerimetroNoiteYEAR)
                        R$ {{$valortotalVendaUnidadeSemClientePerimetroNoiteYEAR->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Todos os períodos:

                    @foreach ($valortotalVendaUnidadeSemClientePerimetroTodoPeriodoAno as $valortotalVendaUnidadeSemClientePerimetroTodoPeriodoYEAR)
                        R$ {{$valortotalVendaUnidadeSemClientePerimetroTodoPeriodoYEAR->valortotal}}
                    @endforeach
                </h7>
            </p>
        </div>
    </div>
</div>

<!-- fim de venda geral -->

<!-- venda com cliente com cartela -->
<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda no dia de produto com cartela com cliente</h5>
            <valortotalVendaUnidadeSemClientePerimetroTodoPeriodoDay class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($valortotalVendaCartelaComClientePerimetroTodoPeriodoDay as $ValortotalVendaCartelaComClientePerimetroTodoPeriodoDay)
                        R$ {{$ValortotalVendaCartelaComClientePerimetroTodoPeriodoDay->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:

                    @foreach ($valortotalVendaCartelaComClientePerimetroTodoPerioTardedoDay as $ValortotalVendaCartelaComClientePerimetroTodoPerioTardedoDayCartela)
                        R$ {{$ValortotalVendaCartelaComClientePerimetroTodoPerioTardedoDayCartela->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Noite:

                    @foreach ($valortotalVendaCartelaComClientePerimetroTodoPerioNoitedoDay as $ValortotalVendaCartelaComClientePerimetroTodoPerioNoitedoDay)
                        R$ {{$ValortotalVendaCartelaComClientePerimetroTodoPerioNoitedoDay->valortotal}}
                    @endforeach

                </h7><br>
                <h7 class="card-title">Todos os períodos:

                    @foreach ($valortotalVendaCartelaComClientePerimetroTodoPerioDay as $ValortotalVendaCartelaComClientePerimetroTodoPerioDay)
                        R$ {{$ValortotalVendaCartelaComClientePerimetroTodoPerioDay->valortotal}}
                    @endforeach

                </h7>
                </p>
        </div>
    </div>
</div>

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda no mes de produto com cartela com cliente</h5>
            <p class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($valortotalVendaCartelaComClientePerimetroTodoPerioManhadoMonth as $ValortotalVendaCartelaComClientePerimetroTodoPerioManhadoMonth)
                        R$ {{$ValortotalVendaCartelaComClientePerimetroTodoPerioManhadoMonth->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:

                    @foreach ($valortotalVendaCartelaComClientePerimetroTodoPerioTardedoMonth as $ValortotalVendaCartelaComClientePerimetroTodoPerioTardedoMonth)
                        R$ {{$ValortotalVendaCartelaComClientePerimetroTodoPerioTardedoMonth->valortotal}}
                    @endforeach



                </h7><br>
                <h7 class="card-title">Noite:


                    @foreach ($valortotalVendaCartelaComClientePerimetroTodoPerioNoitedoMonth as $ValortotalVendaCartelaComClientePerimetroTodoPerioNoitedoMonth)
                        R$ {{$ValortotalVendaCartelaComClientePerimetroTodoPerioNoitedoMonth->valortotal}}
                    @endforeach


                </h7><br>
                <h7 class="card-title">Todos os períodos:

                    @foreach ($valortotalVendaCartelaComClientePerimetroTodoPeriodoMonth as $ValortotalVendaCartelaComClientePerimetroTodoPeriodoMonth)
                        R$ {{$ValortotalVendaCartelaComClientePerimetroTodoPeriodoMonth->valortotal}}
                    @endforeach


                </h7>
            </p>
        </div>
    </div>
</div>

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda no ano de produto com cartela com cliente</h5>
            <p class="card-text">
                <h7 class="card-title">Manhã:

                    @foreach ($valortotalVendaCartelaComClientePerimetroTodoPerioManhadoYEAR as $ValortotalVendaCartelaComClientePerimetroTodoPerioManhadoYEAR)
                        R$ {{$ValortotalVendaCartelaComClientePerimetroTodoPerioManhadoYEAR->valortotal}}
                    @endforeach

                </h7><br>
                <h7 class="card-title">Tarde:

                    @foreach ($valortotalVendaCartelaComClientePerimetroTodoPerioTardedoYEAR as $ValortotalVendaCartelaComClientePerimetroTodoPerioTardedoYEAR)
                        R$ {{$ValortotalVendaCartelaComClientePerimetroTodoPerioTardedoYEAR->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Noite:
                    @foreach ($valortotalVendaCartelaComClientePerimetroTodoPerioNoitedoYEAR as $ValortotalVendaCartelaComClientePerimetroTodoPerioNoitedoYEAR)
                        R$ {{$ValortotalVendaCartelaComClientePerimetroTodoPerioNoitedoYEAR->valortotal}}
                    @endforeach

                </h7><br>
                <h7 class="card-title">Todos os períodos:

                    @foreach ($valortotalVendaCartelaComClientePerimetroTodoPeriodoYEAR as $ValortotalVendaCartelaComClientePerimetroTodoPeriodoYEAR)
                        R$ {{$ValortotalVendaCartelaComClientePerimetroTodoPeriodoYEAR->valortotal}}
                    @endforeach

                </h7>
            </p>
        </div>
    </div>
</div>



<!-- fim da venda com cartela com cliente -->

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda no dia de produto com cartela</h5>
            <valortotalVendaUnidadeSemClientePerimetroTodoPeriodoDay class="card-text">
                <h7 class="card-title">Manhã:
                    @foreach ($ValortotalVendaCartelaSemClientePerimetroManha as $valortotalVendaCartelaSemClientePerimetroManhaCartela)
                        R$ {{$valortotalVendaCartelaSemClientePerimetroManhaCartela->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:

                    @foreach ($ValortotalVendaCartelaSemClientePerimetroTarde as $ValortotalVendaCartelaSemClientePerimetroTardeCartela)
                        R$ {{$ValortotalVendaCartelaSemClientePerimetroTardeCartela->valortotal}}
                    @endforeach

                </h7><br>
                <h7 class="card-title">Noite:

                    @foreach ($ValortotalVendaCartelaSemClientePerimetroNoite as $ValortotalVendaCartelaSemClientePerimetroNoiteCartela)
                        R$ {{$ValortotalVendaCartelaSemClientePerimetroNoiteCartela->valortotal}}
                    @endforeach


                </h7><br>
                <h7 class="card-title">Todos os períodos:

                    @foreach ($ValortotalVendaCartelaSemClienteTodosPerimetroDia as $ValortotalVendaCartelaSemClienteTodosPerimetroDiaCartela)
                        R$ {{$ValortotalVendaCartelaSemClienteTodosPerimetroDiaCartela->valortotal}}
                    @endforeach

                </h7>
                </p>
        </div>
    </div>
</div>

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda de produto no mes com cartela</h5>
            <p class="card-text">
                <h7 class="card-title">Manhã:

                    @foreach ($valortotalVendaUnidadeSemClientePerimetroManhaMONTH as $ValortotalVendaUnidadeSemClientePerimetroTodoPeriodoMONTH)
                        R$ {{$ValortotalVendaUnidadeSemClientePerimetroTodoPeriodoMONTH->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:
                    @foreach ($valortotalVendaUnidadeSemClientePerimetroTardeMONTH as $ValortotalVendaUnidadeSemClientePerimetroTardeMONTH)
                        R$ {{$ValortotalVendaUnidadeSemClientePerimetroTardeMONTH->valortotal}}
                    @endforeach


                </h7><br>
                <h7 class="card-title">Noite:
                    @foreach ($valortotalVendaUnidadeSemClientePerimetroNoiteMONTH as $ValortotalVendaUnidadeSemClientePerimetroNoiteMONTH)
                        R$ {{$ValortotalVendaUnidadeSemClientePerimetroNoiteMONTH->valortotal}}
                    @endforeach

                </h7><br>
                <h7 class="card-title">Todos os períodos:

                    @foreach ($valortotalVendaUnidadeSemClientePerimetroTodoPeriodoMONTH as $ValortotalVendaUnidadeSemClientePerimetroTodoPeriodoMONTH)
                        R$ {{$ValortotalVendaUnidadeSemClientePerimetroTodoPeriodoMONTH->valortotal}}
                    @endforeach
                </h7>
            </p>
        </div>
    </div>
</div>

<div class="col-sm-4 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venda no ano de produto com cartela</h5>
            <p class="card-text">
                <h7 class="card-title">Manhã:

                    @foreach ($valortotalVendaCartelaSemClientePerimetroManhaYEAR as $ValortotalVendaCartelaSemClientePerimetroManhaYEAR)
                        R$ {{$ValortotalVendaCartelaSemClientePerimetroManhaYEAR->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Tarde:

                    @foreach ($valortotalVendaCartelaSemClientePerimetroTardeYEAR as $ValortotalVendaCartelaSemClientePerimetroTardeYEAR)
                        R$ {{$ValortotalVendaCartelaSemClientePerimetroTardeYEAR->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Noite:

                    @foreach ($valortotalVendaCartelaSemClientePerimetroNoiteYEAR as $ValortotalVendaCartelaSemClientePerimetroNoiteYEAR)
                        R$ {{$ValortotalVendaCartelaSemClientePerimetroNoiteYEAR->valortotal}}
                    @endforeach
                </h7><br>
                <h7 class="card-title">Todos os períodos:

                    @foreach ($valortotalVendaCartelaSemClientePerimetroTodoPeriodoYEAR as $ValortotalVendaCartelaSemClientePerimetroTodoPeriodoYEAR)
                        R$ {{$ValortotalVendaCartelaSemClientePerimetroTodoPeriodoYEAR->valortotal}}
                    @endforeach
                </h7>
            </p>
        </div>
    </div>
</div>

<!-- fim do dia -->

<!-- inicio do mes -->
<div class="col-md-12">
    <div class="col-md-12 mt-5">
        <div class="row">
            <!-- inicio do mes -->
            <div class="col-md-12">
                <div class="col-md-12 mt-5">
                    <div class="row">
                        <div class="col-sm-4 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Venda de produto com Caixa + Produto com Unidade + Produto
                                        com Cartela no dia</h5>
                                    <R$ class="card-text">
                                        <h7 class="card-title">Manhã: R$ {{$somarCaixaUnidadeCartelaDay}}</h7><br>
                                        <h7 class="card-title">Tarde: R$ {{ $somarCaixaComUnidadeComCartelaDayTarde}}
                                        </h7><br>
                                        <h7 class="card-title">Noite: R$ {{$somarCaixaComUnidadeComCartelaDayNoite}}
                                        </h7><br>
                                        <h7 class="card-title">Todos os períodos:
                                            R$ {{$dayTodoPeriodo}}
                                        </h7>
                                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Venda de produto com Caixa + Unidade + Cartela no mês</h5>
                                    <R class="card-text">
                                        <h7 class="card-title">Manhã:
                                            R$ {{$somarCaixaComUnidadeComCartelaMonthManha}}
                                        </h7><br>
                                        <h7 class="card-title">Tarde:
                                            R$ {{$CaixaComUnidadeComCartelaMonthTarde}}
                                        </h7><br>
                                        <h7 class="card-title">Noite:
                                            R$ {{$somarCaixaComUnidadecomCartelaNoite}}
                                        </h7><br>
                                        <h7 class="card-title">Todos os períodos: <br>
                                            R$ {{$somarCaixaComUnidadeComCartelaDayTodoPeriodo}}
                                        </h7>
                                        </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Venda de Produto com Caixa + Unidade + Cartela no ano</h5>
                                    <R class="card-text">
                                        <h7 class="card-title">Manhã:
                                            R$ {{$somarCaixaComUnidadeComCartelaYEARManha}}
                                        </h7><br>
                                        <h7 class="card-title">Tarde:
                                            R$ {{$somarCaixaComUnidadeComCartelaYearTarde}}
                                        </h7>
                                        <br>
                                        <h7 class="card-title">Noite:
                                            R$ {{$somarCaixaComUnidadeComCartelaYearNoite}}
                                        </h7><br>
                                        <h7 class="card-title">Todos os períodos:
                                            R$ {{$TodoPeriodoAnoYearCaixaComUnidadeComCartela}}
                                        </h7>
                                        </p>
                                </div>
                            </div>
                        </div>


                        <!-- fim do mes -->




                    </div>

                    <div class="card mt-5">
                        <div class="card-body">
                            <!-- <div class="row">
								<div class="col-4">
									<a class="btn btn-primary" href="{{route('venda_nova')}}">Nova venda</a>
								</div>
								<div class="col-8">
									<form class="d-flex" action="{{route('venda_index')}}" method="get">
										<input class="form-control me-2" name="searchCaixaCliente" type="text" placeholder="Pesquisar">
										<input type="submit" class="btn btn-primary mx-2" value="Pesquisar">
									</form>
								</div>
							</div> -->
                            <!-- inicio da tabela de venda realizada periodo de manhã -->
                            @if ($searchCaixaCliente)

                            @else
                            @endif

                            <a href="{{ route('vendas.gerar-pdf') }}" class="btn btn-warning btn-sm">Gerar PDF</a>
                            <div class="card-body">
                                <div class="table-responsive table-striped">
                                    <h4><b>Tabela de Venda de produto com caixa com cliente cadastrado pelo dia</b>
                                    </h4>
                                    <!-- <h6 id="venda_dia"></h6> -->
                                    <!-- table-sm mostrar a tabela mais pequena -->
                                    <table class="table mb-0" id="paginator">

                                        <thead>
                                            <tr>
                                                <th>
                                                    Cliente
                                                </th>
                                                <th>
                                                    produto
                                                </th>
                                                <th>
                                                    Valor
                                                </th>

                                                <th>
                                                    Quantidade
                                                </th>
                                                <th>
                                                    Data da venda
                                                </th>
                                                <th>
                                                    Horario
                                                </th>
                                                <th>
                                                    Forma de Pagamento
                                                </th>

                                                <th>
                                                    Estado
                                                </th>
                                                <th>
                                                    Ações
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="vendasClienteCaixa">
                                            @if (count($vendasClienteCaixa) > 0)
                                            @forelse($vendasClienteCaixa as $VendasClienteCaixaManha)

                                                    <tr>
                                                    <td class="cliente" name="nome">
                                                        {{$VendasClienteCaixaManha->nomeCliente}}
                                                    </td>
                                                    <td class="produto">
                                                        {{$VendasClienteCaixaManha->produto}}
                                                    </td>

                                                    <td class="valor">
                                                        {{number_format($VendasClienteCaixaManha->valortotalvenda, 2, ',', '.')}}
                                                    </td>
                                                    <td class="quantidade">
                                                        {{number_format($VendasClienteCaixaManha->quantidade, 2, ',', '.')}}
                                                    </td>
                                                    <td class="data">
                                                        {{ date('d/m/Y', strtotime($VendasClienteCaixaManha->created_at))}}
                                                    </td>
                                                    <td class="horario">
                                                        {{ date('H:i:s', strtotime($VendasClienteCaixaManha->created_at))}}
                                                    </td>
                                                    <td>
                                                        {{$VendasClienteCaixaManha->forma_pagamento}}
                                                    </td>


                                                    <td class="py-1">
                                                        @if($VendasClienteCaixaManha->estado == 'Novo')
                                                            <label class="badge badge-info">Novo</label>
                                                        @elseif($VendasClienteCaixaManha->estado == 'Rejeitado')
                                                            <label class="badge badge-warning">Rejeitado</label>
                                                        @elseif($VendasClienteCaixaManha->estado == 'Cancelado')
                                                            <label class="badge badge-danger">Cancelado</label>
                                                        @else
                                                            <label class="badge badge-success">Aprovado</label>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <form
                                                            action="{{route('venda_delete', ['id' => $VendasClienteCaixaManha->id])}}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')

                                                            <input type="submit" class="btn btn-danger" value="Apagar">
                                                        </form>

                                                        <form
                                                            action="{{route('vendas_show_caixa_pdf', ['id' => $VendasClienteCaixaManha->id])}}">
                                                            <input type="submit" class="btn btn-success" value="Gera PDF">
                                                        </form>
                                                    </td>

                                                </tr>

                                                @endforeach



                                            @else
                                            <p>Não foi encontrado nem registro.</p>
                                            @endif


                                        </tbody>
                                    </table>


                                    {{$vendasClienteCaixa->appends(['nomeCliente' => 'nomeCliente'])->links('pagination::bootstrap-4') }}

                                    <div class="col-lg-12">


                                    </div>

                                </div>
                            </div>
                            <div class=""></div>


                            <!-- fim da tabela de venda realizada periodo de dia -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-striped">
                            <h4>Tabela de Vendas realizadas de produto com caixa sem cliente registrado pelo Dia</h4>
                            <table class="table-sm table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            medicamento
                                        </th>
                                        <th>
                                            Valor
                                        </th>
                                        <th>
                                            Quantidade
                                        </th>

                                        <th>
                                            Data da venda
                                        </th>
                                        <th>
                                            Horário
                                        </th>
                                        <th>
                                            Forma de Pagamento
                                        </th>
                                        <th>
                                            Estado
                                        </th>

                                        <th>
                                            Ações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($VendaCaixaPerimetroManhaSemCliente as $VendaCaixaSemClienteManha)
                                            <tr>
                                            <td class="produto">
                                                {{$VendaCaixaSemClienteManha->produto}}
                                            </td>

                                            <td class="valor">
                                                {{number_format($VendaCaixaSemClienteManha->valortotalvenda, 2, ',', '.')}}
                                            </td>
                                            <td class="quantidade">
                                                {{number_format($VendaCaixaSemClienteManha->quantidade, 2, ',', '.')}}
                                            </td>
                                            <td class="data">
                                                {{ date('d/m/Y', strtotime($VendaCaixaSemClienteManha->created_at))}}
                                            </td>
                                            <td class="horario">
                                                {{ date('H:i:s', strtotime($VendaCaixaSemClienteManha->created_at))}}
                                            </td>
                                            <td>
                                                {{$VendaCaixaSemClienteManha->forma_pagamento}}
                                            </td>


                                            <td class="py-1">
                                                @if($VendaCaixaSemClienteManha->estado == 'Novo')
                                                    <label class="badge badge-info">Novo</label>
                                                @elseif($VendaCaixaSemClienteManha->estado == 'Rejeitado')
                                                    <label class="badge badge-warning">Rejeitado</label>
                                                @elseif($VendaCaixaSemClienteManha->estado == 'Cancelado')
                                                    <label class="badge badge-danger">Cancelado</label>
                                                @else
                                                    <label class="badge badge-success">Aprovado</label>
                                                @endif
                                            </td>
                                            <td>

                                                <form
                                                    action="{{route('venda_delete', ['id' => $VendaCaixaSemClienteManha->id])}}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <input type="submit" class="btn btn-danger" value="Apagar">
                                                </form>
                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $VendaCaixaPerimetroManhaSemCliente->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="row">
							<div class="col-4">
								<a class="btn btn-primary" href="{{route('venda_nova')}}">Nova venda</a>
							</div>
							<div class="col-8">
								<form class="d-flex">
									<input class="form-control me-2" type="text" placeholder="Pesquisar">
									<button class="btn btn-primary mx-2" type="button">Pesquisar</button>
								</form>
							</div>
						</div> -->

                        <div class="table-responsive">

                            <h4>Vendas realizadas de produto com Unidade com Cliente pelo Dia</h4>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Cliente
                                        </th>
                                        <th>
                                            Produto
                                        </th>
                                        <th>
                                            Valor
                                        </th>
                                        <th>
                                            Unidade
                                        </th>
                                        <th>
                                            Data
                                        </th>
                                        <th>
                                            Horário
                                        </th>
                                        <th>
                                            Forma de Pagamento
                                        </th>
                                        <th>
                                            Estado
                                        </th>
                                        <th>
                                            Ações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($VendaUnidadeClientePerimetroManha as $vendaUnidadeClientePerimetroManha)
                                            <tr>
                                            <td class="cliente">
                                                {{$vendaUnidadeClientePerimetroManha->nomeCliente}}
                                            </td>
                                            <td class="produto">
                                                {{$vendaUnidadeClientePerimetroManha->produto}}
                                            </td>

                                            <td class="valor">
                                                {{number_format($vendaUnidadeClientePerimetroManha->valortotalvenda, 2, ',', '.')}}
                                            </td>
                                            <td class="quantidade">
                                                {{number_format($vendaUnidadeClientePerimetroManha->quantidadeUnidade, 2, ',', '.')}}
                                            </td>
                                            <td class="data">
                                                {{ date('d/m/Y', strtotime($vendaUnidadeClientePerimetroManha->created_at))}}
                                            </td>
                                            <td class="horario">
                                                {{ date('H:i:s', strtotime($vendaUnidadeClientePerimetroManha->created_at))}}
                                            </td>
                                            <td>
                                                {{$vendaUnidadeClientePerimetroManha->forma_pagamento}}
                                            </td>


                                            <td class="py-1">
                                                @if($vendaUnidadeClientePerimetroManha->estado == 'Novo')
                                                    <label class="badge badge-info">Novo</label>
                                                @elseif($vendaUnidadeClientePerimetroManha->estado == 'Rejeitado')
                                                    <label class="badge badge-warning">Rejeitado</label>
                                                @elseif($vendaUnidadeClientePerimetroManha->estado == 'Cancelado')
                                                    <label class="badge badge-danger">Cancelado</label>
                                                @else
                                                    <label class="badge badge-success">Aprovado</label>
                                                @endif
                                            </td>
                                            <td>

                                                <form
                                                    action="{{route('venda_unidade_delete', ['id' => $vendaUnidadeClientePerimetroManha->id])}}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <input type="submit" class="btn btn-danger" value="Apagar">
                                                </form>
                                            </td>
                                            <td>
                                                <form
                                                    action="{{route('vendas_show_unidade_pdf', ['id' => $vendaUnidadeClientePerimetroManha->id])}}">
                                                    <input type="submit" class="btn btn-success" value="Gera PDF">
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $VendaUnidadeClientePerimetroManha->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="row">
							<div class="col-4">
								<a class="btn btn-primary" href="{{route('venda_nova')}}">Nova venda</a>
							</div>
							<div class="col-8">
								<form class="d-flex">
									<input class="form-control me-2" type="text" placeholder="Pesquisar">
									<button class="btn btn-primary mx-2" type="button">Pesquisar</button>
								</form>
							</div>
						</div> -->

                        <div class="table-responsive">

                            <h4>Vendas realizadas de produto com unidade pelo Dia sem cliente</h4>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Produto
                                        </th>
                                        <th>
                                            Valor
                                        </th>
                                        <th>
                                            Unidade
                                        </th>
                                        <th>
                                            Data
                                        </th>
                                        <th>
                                            Horário
                                        </th>
                                        <th>
                                            Forma de Pagamento
                                        </th>
                                        <th>
                                            Estado
                                        </th>
                                        <th>
                                            Ações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($VendaUnidadeSemClientePerimetroManha as $vendaUnidadeSemClientePerimetroManha)
                                            <tr>
                                            <td class="produto">
                                                {{$vendaUnidadeSemClientePerimetroManha->produto}}
                                            </td>

                                            <td class="valor">
                                                {{number_format($vendaUnidadeSemClientePerimetroManha->valortotalvenda, 2, ',', '.')}}
                                            </td>
                                            <td class="quantidade">
                                                {{number_format($vendaUnidadeSemClientePerimetroManha->quantidadeUnidade, 2, ',', '.')}}
                                            </td>
                                            <td class="data">
                                                {{ date('d/m/Y', strtotime($vendaUnidadeSemClientePerimetroManha->created_at))}}
                                            </td>
                                            <td class="horario">
                                                {{ date('H:i:s', strtotime($vendaUnidadeSemClientePerimetroManha->created_at))}}
                                            </td>
                                            <td>
                                                {{$vendaUnidadeSemClientePerimetroManha->forma_pagamento}}
                                            </td>


                                            <td class="py-1">
                                                @if($vendaUnidadeSemClientePerimetroManha->estado == 'Novo')
                                                    <label class="badge badge-info">Novo</label>
                                                @elseif($vendaUnidadeSemClientePerimetroManha->estado == 'Rejeitado')
                                                    <label class="badge badge-warning">Rejeitado</label>
                                                @elseif($vendaUnidadeSemClientePerimetroManha->estado == 'Cancelado')
                                                    <label class="badge badge-danger">Cancelado</label>
                                                @else
                                                    <label class="badge badge-success">Aprovado</label>
                                                @endif
                                            </td>
                                            <td>

                                                <form
                                                    action="{{route('venda_unidade_delete', ['id' => $vendaUnidadeSemClientePerimetroManha->id])}}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <input type="submit" class="btn btn-danger" value="Apagar">
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $VendaUnidadeSemClientePerimetroManha->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>



            {{-- fim da venda com unidade sem cliente --}}

            {{-- inicio da venda com cartela --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="row">
							<div class="col-4">
								<a class="btn btn-primary" href="{{route('venda_nova')}}">Nova venda</a>
							</div>
							<div class="col-8">
								<form class="d-flex">
									<input class="form-control me-2" type="text" placeholder="Pesquisar">
									<button class="btn btn-primary mx-2" type="button">Pesquisar</button>
								</form>
							</div>
						</div> -->

                        <div class="table-responsive">

                            <h4>Vendas realizadas de produto com cartela Pelo Dia</h4>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Cliente
                                        </th>
                                        <th>
                                            Produto
                                        </th>
                                        <th>
                                            Valor
                                        </th>
                                        <th>
                                            Unidade
                                        </th>
                                        <th>
                                            Data
                                        </th>
                                        <th>
                                            Horário
                                        </th>
                                        <th>
                                            Forma de Pagamento
                                        </th>
                                        <th>
                                            Estado
                                        </th>
                                        <th>
                                            Ações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($VendaCartelaClientePerimetroManha as $vendaCartelaClientePerimetroManha)
                                            <tr>
                                            <td class="cliente">
                                                {{$vendaCartelaClientePerimetroManha->nomeCliente}}
                                            </td>
                                            <td class="produto">
                                                {{$vendaCartelaClientePerimetroManha->produto}}
                                            </td>

                                            <td class="valor">
                                                {{number_format($vendaCartelaClientePerimetroManha->valortotalvenda, 2, ',', '.')}}
                                            </td>
                                            <td class="quantidade">
                                                {{number_format($vendaCartelaClientePerimetroManha->quantidadecartela, 2, ',', '.')}}
                                            </td>
                                            <td class="data">
                                                {{ date('d/m/Y', strtotime($vendaCartelaClientePerimetroManha->created_at))}}
                                            </td>
                                            <td class="horario">
                                                {{ date('H:i:s', strtotime($vendaCartelaClientePerimetroManha->created_at))}}
                                            </td>
                                            <td>
                                                {{$vendaCartelaClientePerimetroManha->forma_pagamento}}
                                            </td>


                                            <td class="py-1">
                                                @if($vendaCartelaClientePerimetroManha->estado == 'Novo')
                                                    <label class="badge badge-info">Novo</label>
                                                @elseif($vendaCartelaClientePerimetroManha->estado == 'Rejeitado')
                                                    <label class="badge badge-warning">Rejeitado</label>
                                                @elseif($vendaCartelaClientePerimetroManha->estado == 'Cancelado')
                                                    <label class="badge badge-danger">Cancelado</label>
                                                @else
                                                    <label class="badge badge-success">Aprovado</label>
                                                @endif
                                            </td>
                                            <td>

                                                <form
                                                    action="{{route('venda_cartela_delete', ['id' => $vendaCartelaClientePerimetroManha->id])}}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <input type="submit" class="btn btn-danger" value="Apagar">
                                                </form>

                                            <td>
                                                <form
                                                    action="{{route('vendas_show_cartela_cliente_pdf', ['id' => $vendaCartelaClientePerimetroManha->id])}}">
                                                    <input type="submit" class="btn btn-success" value="Gera PDF">
                                                </form>
                                            </td>
                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$VendaCartelaClientePerimetroManha->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- venda com cartela sem cliente -->

            {{-- inicio da venda com cartela --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <div class="row">
							<div class="col-4">
								<a class="btn btn-primary" href="{{route('venda_nova')}}">Nova venda</a>
							</div>
							<div class="col-8">
								<form class="d-flex">
									<input class="form-control me-2" type="text" placeholder="Pesquisar">
									<button class="btn btn-primary mx-2" type="button">Pesquisar</button>
								</form>
							</div>
						</div> -->

                        <div class="table-responsive">

                            <h4>Vendas realizadas de produto com cartela Pelo Dia sem cliente</h4>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Produto
                                        </th>
                                        <th>
                                            Valor
                                        </th>
                                        <th>
                                            Unidade
                                        </th>
                                        <th>
                                            Data
                                        </th>
                                        <th>
                                            Horário
                                        </th>
                                        <th>
                                            Forma de Pagamento
                                        </th>
                                        <th>
                                            Estado
                                        </th>
                                        <th>
                                            Ações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($VendaCartelaSemClientePerimetroManha as $vendaCartelaSemClientePerimetroManha)
                                            <tr>
                                            <td class="produto">
                                                {{$vendaCartelaSemClientePerimetroManha->produto}}
                                            </td>

                                            <td class="valor">
                                                {{number_format($vendaCartelaSemClientePerimetroManha->valortotalvenda, 2, ',', '.')}}
                                            </td>
                                            <td class="quantidade">
                                                {{number_format($vendaCartelaSemClientePerimetroManha->quantidadecartela, 2, ',', '.')}}
                                            </td>
                                            <td class="data">
                                                {{ date('d/m/Y', strtotime($vendaCartelaSemClientePerimetroManha->created_at))}}
                                            </td>
                                            <td class="horario">
                                                {{ date('H:i:s', strtotime($vendaCartelaSemClientePerimetroManha->created_at))}}
                                            </td>
                                            <td>
                                                {{$vendaCartelaSemClientePerimetroManha->forma_pagamento}}
                                            </td>


                                            <td class="py-1">
                                                @if($vendaCartelaSemClientePerimetroManha->estado == 'Novo')
                                                    <label class="badge badge-info">Novo</label>
                                                @elseif($vendaCartelaSemClientePerimetroManha->estado == 'Rejeitado')
                                                    <label class="badge badge-warning">Rejeitado</label>
                                                @elseif($vendaCartelaSemClientePerimetroManha->estado == 'Cancelado')
                                                    <label class="badge badge-danger">Cancelado</label>
                                                @else
                                                    <label class="badge badge-success">Aprovado</label>
                                                @endif
                                            </td>
                                            <td>
                                                <form
                                                    action="{{route('venda_cartela_delete', ['id' => $vendaCartelaSemClientePerimetroManha->id])}}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <input type="submit" class="btn btn-danger" value="Apagar">
                                                </form>
                                            </td>


                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$VendaCartelaClientePerimetroManha->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- fim da venda com cartela sem cliente -->




            {{-- fim da venda com cartela sem cliente --}}
            @endsection


            <script defer>

                window.addEventListener("load", function () {

                    /*
                    var itemcartela = document.querySelectorAll(".valortotalcartela");
        	
                var tamanhodoarray = itemcartela.length;
        	
                var array = [];
        	
                // console.log("valor da classe",valorClasse);
        	
                for (var index = 0; index < tamanhodoarray; index++) {
                  var element = itemcartela[index].textContent;
                  var primeiro = itemcartela[0];
                  var conversaoStringToNumero = element.replace(",", ".");
        	
                  var numero = parseFloat(conversaoStringToNumero);
        	
                  array.push(numero);
                  total += numero;
                }
                	
                	
                    */
                    // para calcular o valor total de venda com cliente 
                    $('#paginator').simplePaginator({
                        totalPages: 10,
                        pageChange: function (page) {
                            console.log(page);
                        }
                    })
                    classVendasClienteCaixa = document.querySelectorAll(".valor");
                    listaVendasClienteCaixa = [];

                    var total = 0

                    for (var index = 0; index < classVendasClienteCaixa.length; index++) {
                        var element = classVendasClienteCaixa[index].textContent;

                        var conversaoStringToNumero = element.replace(",", ".");

                        var numero = parseFloat(conversaoStringToNumero);
                        listaVendasClienteCaixa.push(numero);

                        total += numero

                    }
                    console.log(total);
                    document.getElementById("venda_dia").innerHTML = 'Valor total pela manhã: R$ ' + total.toFixed(2)

                    // para saber venda por horario
                    classVendasClienteCaixaHoras = document.querySelectorAll(".horario")
                    listaVendasClienteCaixaHorario = []
                    var totalhorario = 0

                    for (var index = 0; index < classVendasClienteCaixaHoras.length; index++) {
                        const element = classVendasClienteCaixaHoras[index].textContent

                        // \n\t\t\t\t\t\t\t\t\t
                        str = element.replaceAll("x\\^(\\d+(?:\\.\\d+)?)", "Math.pow(x, $1)");
                        listaVendasClienteCaixaHorario.push(str)



                        var d = new Date();
                        var year = d.getFullYear();
                        var month = d.getMonth();
                        var day = d.getDay();

                        var reserv = new Date(year, month, day, str);

                        reserv.getTime();
                        // Milliseconds since Jan 1, 1970, 00:00:00.000 GMT
                        console.log("horas", reserv.getTime());



                        // var h= new date(listaVendasClienteCaixaHorario);

                        console.log("verificando o tempo", str);
                    }


                })



            </script>