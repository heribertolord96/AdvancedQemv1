{{ Form::hidden('user_id', auth()->user()->id) }}


    </div> 
    
        
     <!--div class="form-group">
        {*{ Form::label('category_id', 'Id commercio Usuario') }}
        {*{ Form::select('commerce_user_id', $commerceuser, null, ['class' => 'form-control']) }}
    </div> 
    <div class="form-group">
        {*{ Form::label('category_id', 'id Commercio rol') }}
        {*{ Form::select('commerce_role_id', $commercerole, null, ['class' => 'form-control']) }}
    </div--> 


<div class="form-group">
        {{ Form::label('nombre', 'Nombre de la Commerce') }}
        {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
    </div>
       <div class="form-group">
        {{ Form::label('slug', 'URL amigable') }}
        {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}

    </div>
    <div class="form-group">
            {{ Form::label('image', 'Imagen') }}
            {{ Form::file('image') }}
        </div>

    <div class="form-group">
        {{ Form::label('descripcion', 'Descripción') }}
        {{ Form::textarea('descripcion', null, ['class' => 'form-control']) }}
    </div>
    <div class="row">
        <div class="col">
                <div class="form-group bootstrap-timepicker">
                        {{ Form::label('hora_apertura', 'Horario de apertura') }}
                        {{ Form::text('hora_apertura', null, ['class' => 'form-control timepicker']) }}
                    </div>
        </div>
        <div class="col">
                <div class="form-group bootstrap-timepicker">
                        {{ Form::label('horario_cierre', 'Horario de cierre') }}
                        {{ Form::text('hora_cierre', null, ['class' => 'form-control timepicker']) }}
                    </div>
        </div>
    </div> <div class="row">
            <div class="col">
            <div class="form-group">
                    {{ Form::label('num_telefono', 'N Tel.') }}
                    {{ Form::text('num_telefono', null, ['class' => 'form-control']) }}
                </div> </div>
                <div class="col">
                <div class="form-group">
                        {{ Form::label('email', 'Email.') }}
                        {{ Form::email('email', null, ['class' => 'form-control']) }}
                    </div> </div>
            </div>
    <div class="form-group panel-footer">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary save' ]) }}
    </div>
    
    @section('scripts')
    <script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $("#nombre, #slug").stringToSlug({
                callback: function(text){
                    $('#slug').val(text);
                }
            });
        });
    </script>
    @endsection