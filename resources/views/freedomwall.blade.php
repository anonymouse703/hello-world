
@include('nav')
<div class="form-group">
	<div class="row">
		 <label for="lastname">Last Name:</label>
		 {{ Form::textarea('notes', null, ['size' => '30x5'],['class'=>'form-control'] ) }}
	</div>
</div>

