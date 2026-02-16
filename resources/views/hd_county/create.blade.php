<h1>Create</h1>

<form action="{{ route('hd_county.store') }}">
    @csfr
    <fieldset>
        <label for="postal_codes">Postal codes</label>
        <input type="text" name="postal_codes" id="postal_codes">
    </fieldset> 
    <button type="submit">Save</button>
</form>