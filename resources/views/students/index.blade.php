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
    @foreach($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->classes->name}}</td>
    </tr>
    @endforeach

    </tbody>
</table>


@include('layouts.footer')