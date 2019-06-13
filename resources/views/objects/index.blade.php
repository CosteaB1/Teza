@include('layouts.header')
<h1>hello</h1>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nr.</th>
        <th>Nume, prenume</th>
        {{--<th>Clasa</th>--}}
    </tr>
    </thead>
    <tbody>
    @foreach($objects as $object)
    <tr>
        <td>{{$object->id}}</td>
        <td>{{$object->name}}</td>
{{--        <td>{{$object->classes->name}}</td>--}}
    </tr>
    @endforeach

    </tbody>
</table>


@include('layouts.footer')