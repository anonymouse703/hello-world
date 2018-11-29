
@include('nav')
<div class="form-group">
	<div class="row">
		 <label for="lastname">Last Name:</label>
		 {{ Form::textarea('notes', null, ['size' => '30x5'],['class'=>'form-control'] ) }}
	</div>
	<div class="row">
		 <label for="firstname">First Name:</label>
		 {{ Form::textarea('notes', null, ['size' => '30x5'],['class'=>'form-control'] ) }}
	</div>
	<div class="row">
		 <label for="address">Address:</label>
		 {{ Form::textarea('notes', null, ['size' => '30x5'],['class'=>'form-control'] ) }}
	</div>
	<div class="row">
		 <label for="contacts">Contact:</label>
		 {{ Form::textarea('notes', null, ['size' => '30x5'],['class'=>'form-control'] ) }}
	</div>
</div>

