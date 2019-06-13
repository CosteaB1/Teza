@include('layouts.header')
<h1>hello</h1>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nr.</th>
        <th>Nume, prenume</th>
        <th>Obiect</th>
    </tr>
    </thead>
    <tbody>
    @foreach($teachers as $teacher)
    <tr>
        <td>{{$teacher->id}}</td>
        <td>{{$teacher->name}}</td>
        <td>{{$teacher->objects->name}}</td>
    </tr>
    @endforeach

    </tbody>
</table>


@include('layouts.footer')