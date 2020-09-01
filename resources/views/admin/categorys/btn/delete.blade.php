{{ Form::open(array('url' => admin_url('category/'.$id),'method'=>"delete","class"=>"deleteSingleAdmin","id"=>"deleteSingleAdmin".$id,"onsubmit"=>"checkForm(#deleteSingleAdmin".$id.")")) }}
{{Form::token()}}
{{Form::button("<i class='fa fa-trash'></i>",["type"=>"submit","class"=>"btn btn-danger "])}}
{{ Form::close() }}


