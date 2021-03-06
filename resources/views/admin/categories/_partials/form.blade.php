@csrf
<div class="form-group">
    <input type="text" value="{{ $category->title ?? old('title') }}" name="title" class="form-control" placeholder="Título">
</div>
<div class="form-group">
    <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Descrição">{{ $category->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success"><i class="fas fa-check-double"></i> Salvar</button>
</div>