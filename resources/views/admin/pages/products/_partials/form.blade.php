@include('admin.includes.alerts')

<div class="form-group">
    <label>* Título:</label>
    <input type="text" name="title" class="form-control" placeholder="Título:" value="{{ $product->title ?? old('title') }}">
</div>
<div class="form-group">
    <label>* Link:</label>
    <input type="text" name="link" class="form-control" placeholder="Link:" value="{{ $product->link ?? old('link') }}">
</div>
<div class="form-group">
    <label>* Imagem:</label>
    <input type="file" name="image" class="form-control">
</div>
<div class="form-group">
    <label>* Historia:</label>
    <textarea name="description" ols="30" rows="5" class="form-control">{{ $product->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
