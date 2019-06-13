@include('layouts.header')
<h1>hello</h1>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nr.</th>
        <th>Nume, prenume</th>
        <th>Clasa</th>
    </tr>
    </thead>
    <tbody>

    <tr>
        <td>{{$students->id}}</td>
        <td>{{$students->name}}</td>
        <td><a href="/admin/classes/show/{{$students->class_id}}">{{$students->classes->name}}</a> </td>
    </tr>


    </tbody>
</table>


@include('layouts.footer')