@inject('countries','App\Http\Utilities\Country')

	{{ csrf_field() }}
	
		<div class="form-group">
			<label for="street">Street:</label>
			<input type="text" name="street" id="street" class="form-control" value="{{ old('street') }}" required>
		</div>

		<div class="form-group">
			<label for="City">City:</label>
			<input type="text" name="city" id="City" class="form-control" value="{{ old('City') }}" required>
		</div>

		<div class="form-group">
			<label for="Zip">Zip/Postal Code:</label>
			<input type="text" name="zip" id="Zip" class="form-control" value="{{ old('Zip') }}" required>
		</div>

<!-- heeere call country class to use all countries names -->
		<div class="form-group">
			<label for="Country">Country:</label>
			<select id="Country" name="country" class="form-control">
				@foreach($countries::all() as $country => $code)
					<option value="{{ $code }}">{{ $country }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="state">State:</label>
			<input type="text" name="state" id="state" class="form-control" value="{{ old('state') }}" required>
		</div>

		<hr>

		<div class="form-group">
			<label for="price">Sale price:</label>
			<input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
		</div>

		<div class="form-group">
			<label for="description">Home Description:</label>
			<TEXTAREA type="text" name="description" id="description" class="form-control" value="{{ old('description') }}" rows="10" required>

			</TEXTAREA>
		</div>

		<!-- <div class="form-group">
			<label for="photos">Photos:</label>
			<input type="file" name="photos" id="photos" class="form-control" value="{{ old('photos') }}" rows="10" required>
		</div> -->

		<div class="form-group">
			<button class="btn btn-primary" type="submit">Create Flyer</button>
		</div>