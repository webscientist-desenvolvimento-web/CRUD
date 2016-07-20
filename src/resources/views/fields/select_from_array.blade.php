<!-- select -->
<div @include('crud::inc.fieldWrapperAttributes') >
    <label>{{ $field['label'] }}</label>
    <select
        name="{{ $field['name'] }}"
        @include('crud::inc.fieldAttributes')
    	>

        @if (isset($field['allows_null']) && $field['allows_null']==true)
            <option value="">-</option>
        @endif

	    	@if (count($field['options']))
	    		@foreach ($field['options'] as $key => $value)
	    			<option value="{{ $key }}"
						@if ((isset($field['value']) && $key==$field['value']) || (old($field['name']) == $key) )
							 selected
						@endif
	    			>{{ $value }}</option>
	    		@endforeach
	    	@endif
	</select>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>