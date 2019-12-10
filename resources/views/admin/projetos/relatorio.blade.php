{{-- Montagem do Relatório --}}

<h1>{{$projeto->nomeProjeto}}</h1>
@foreach ($projeto->etapas as $etapa)
    <h2> Etapa: {{ $etapa->descricao }} </h2>
    <ul>
        @foreach($etapa->tarefas as $tarefa)
        <li>{{$tarefa->descricao}} ({{$tarefa->status->descricao}})</li>
        @endforeach
    </ul>
@endforeach


