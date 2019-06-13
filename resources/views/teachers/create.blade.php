@include('layouts.header')
<form method="POST" action="/admin/students/store">
    {{ csrf_field() }}


    <div class="col-md-10" style="margin-bottom: 30px;">
        <h4 style="font-weight: bold; margin-left: 50px;">Adauga student</h4>


        <div class="col-md-3">


            <h5>Nume</h5>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="col-md-3">


            <h5>Clasa</h5>
            <select class="form-control show-tick selectpicker" name='class_id' data-live-search="true">
                @foreach($classes as $class)
                    <option value='{{ $class->id }}'>{{ $class->name }}</option>
                @endforeach
            </select>
        </div>

        <input class="btnbtn" type="submit" value="Salveaza">
    </div>


</form>


@include('layouts.footer')