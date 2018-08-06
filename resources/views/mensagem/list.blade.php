<h1>Lista de Mensagens</h1>
<hr>
@foreach($mensagens as $mensagem)
	<h3>{{$mensagem->titulo}}</h3>
	<p>{{$mensagem->texto}}</p>
	<p>{{$mensagem->autor}}</p>
	<br>
@endforeach