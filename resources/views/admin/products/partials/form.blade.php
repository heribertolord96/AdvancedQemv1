
    <div class="form-group">
            {{ Form::label('commerce_id', 'Commerce') }}
            {{ Form::select('commerce_id', $commerces, null, ['class' => 'form-control']) }}
        </div> 
        <div class="form-group">
                {{ Form::label('department_id', 'Department') }}
                {{ Form::select('department_id', $departments, null, ['class' => 'form-control']) }}
            </div> 
            <div class="form-group">
                    {{ Form::label('category_id', 'Category') }}
                    {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
                </div> 



<div class="form-group">
        {{ Form::label('name', 'Nombre del articulo') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    </div>
    <div class="form-group">
        {{ Form::label('slug', 'URL amigable') }}
        {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
    </div>
    <div class="form-group">
            {{ Form::label('descripcion', 'Descripción') }}
            {{ Form::textarea('descripcion', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
                {{ Form::label('presentacion', 'Presentacion') }}
                {{ Form::text('presentacion', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                    {{ Form::label('precio', 'Precio') }}
                    {{ Form::text('precio', null, ['class' => 'form-control']) }}
                </div>
                        
    <div class="form-group">
            {{ Form::label('image', 'Imagen') }}
            {{ Form::file('image') }}
        </div>

    
     </div>
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