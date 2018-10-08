@extends('layouts.app')

@section('content')
<p class="h1">Lista de Atividades</p>

  <!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
  <div class="container">
      <div class="alert alert-success">
        {{\Session::get('success')}}
      </div>
  </div>
  @endif

<!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif

@foreach($listaAtividades as $atividade)
	<h3>{{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')}}</h3>
	<p><a href="/atividades/{{$atividade->id}}">{{$atividade->title}}</a></p>
	<p>{{$atividade->description}}</p>
	
	<br>
  @auth
    <p>Ações: 
      <a class="btn btn-outline-primary btn-sm" href="/atividades/{{$atividade->id}}">Ver Mais</a>
      <a class="btn btn-outline-primary btn-sm" href="/atividades/{{$atividade->id}}/edit">Editar</a> 
      <a class="btn btn-outline-primary btn-sm" href="/atividades/{{$atividade->id}}/delete">Deletar</a>
    </p>
  @endauth
	<br>
@endforeach
<br>

@auth
  <p><a href="/atividades/create">Criar novo registro</a></p>
@endauth



@endsection



<!-- \Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')  -->