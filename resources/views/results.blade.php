<h2>Meta Data</h2>
<p>	Total number found : {{$data->hits->total}}</p>
<p>Maximum Score Value : {{$data->hits->max_score}}</p>

<div>
	<table class="table .table-striped">
	<tbody>
		@foreach ($data->hits->hits as $item) 
		 <tr>
		 <td>
		 <p>
		  	{{$item->_source->name}}
		  </p>
		  <p>
		  	{{$item->_source->address}}
		  	{{$item->_source->city}}
		  	{{$item->_source->state}}
		  	{{$item->_source->zip}}

		  </p>
		  <p>
		  	{{$item->_source->donee_type}}
		  </p>
		</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>


