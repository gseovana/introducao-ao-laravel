  <div class="input-field">
    <label>Título</label>
    <input type="text" name="titulo" value="{{ isset($registro->titulo) ? $registro->titulo : ''}}">
  </div>

  <div class="input-field">
    <label>Descrição</label>
    <input type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : ''}}">
  </div>

  <div class="input-field">
    <label>Valor</label>
    <input type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : ''}}">
  </div>

  <div class="file-field input-field">
    <div class="btn blue">
      <span>Imagem</span>
      <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
      <input class="file-path validate" type="text">
    </div>

    @if(isset($registro->imagem))
    <div class="input-field">
      <img width="150" src="{{asset($registro->imagem)}}">
    </div>
    @endif
  </div>

  <div class="input-field left">
    <p>
      <label>
        <input type="checkbox" id="test5" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : ''}} value="true" />
        <span>Publicar</span>
      </label>
    </p>
    <br><br>
  </div>
