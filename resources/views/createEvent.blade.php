@extends('layouts.main')
@section('title', 'Company Events')
@section('content')
    <div class="container">
        <h1>Criar Evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="form-group">
                <label for="title">Evento</label>
                <input type="text" id="title" name="title" placeholder="Nome do evento" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" cols="20" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Banner</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="city">Cidade</label>
                <input type="text" id="city" name="city" placeholder="Cidade do evento" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Categoria</label>
                <select name="category" id="category" class="form-control">
                    <option value="Eventos">Eventos</option>
                    <option value="Festa e Shows">Festa e Shows</option>
                    <option value="Tours">Tours</option>
                </select>
            </div>
            <div class="form-group">
                <label for="feature">Esta em alta?</label>
                <select name="feature" id="feature" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="private">É privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Criar</button>
        </form>
    </div>

@endsection