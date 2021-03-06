@extends('admin.templates.main')

@section('title','Tag')
@section('article_title','Tag')

@section('func')
	<nav class="navbar navbar-light bg-dark" >
		
			<a href="{{ route('tags.create') }}" class="btn btn-outline-info btn-rounded btn-mg " tabindex="-1" role="button" aria-disabled="false"> 
				<i class="fas fa-plus" aria-hidden="true"> </i> Agregar
			</a>
		
			{!! Form::open(['route'=>'tags.index','method'=>'GET','class' =>"form-inline"  ]) !!}
				<div class="input-group">
					{!! Form::text('name',null,['class' =>"form-control mr-sm-2",'type'=> "search", 'aria-label' => "Search",'placeholder'=>'Buscar ...' ]) !!}
					 
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search" aria-hidden="true"></i></button>	
				</div>
			{!! Form::close() !!}
		
	</nav>
@endsection

@section ('content')
					
	<div class="table-responsive-xl">
		<table  class="table table-dark table-hover">
			<thead>
				<tr>
					<th scope="col"> ID</th>
					<th scope="col"> Nombre</th>
					<th scope="col"> Acciones</th>
				</tr>
			</thead>
			<tbody>

				@foreach($list as $c)
					<tr>
						<th scope="row">{{ $c->id }} </th>
						<td>{{ $c->name }}</td>
			
						<td>
							<a href="{{ route('tags.edit',$c->id) }}" class="btn btn-warning">
								<i class="fa fa-wrench" aria-hidden="true"></i>
							</a>
							<a href="{{  route('tags.destroy',$c->id)  }}" onclick="return confirm('¿Desea eliminar este registro?')" class="btn btn-danger">
								<i class="fa fa-minus-circle" aria-hidden="true"></i>
							</a>
						</td>
					</tr>
				@endforeach
				
			</tbody>
		</table>
		
	</div>
	{!! $list-> render() !!}
@endsection
