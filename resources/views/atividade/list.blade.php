<h1>Lista de Atividades</h1>
<hr>

<!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif

@foreach($atividades as $atividade)
	<h3>{{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')}}</h3>
	<p><a href="/atividades/{{$atividade->id}}">{{$atividade->title}}</a></p>
	<p>{{$atividade->description}}</p>
	
	<br>
@endforeach

@auth
    <p>Ações: 
      <a href="/atividades/{{$atividade->id}}">Ver Mais</a>
      <a href="/atividades/{{$atividade->id}}/edit">Editar</a> 
      <a href="/atividades/{{$atividade->id}}/delete">Deletar</a>
    </p>
  @endauth
	<br>

<br>

@auth
  <p><a href="/atividades/create">Criar novo registro</a></p>
@endauth



<!-- \Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')  -->