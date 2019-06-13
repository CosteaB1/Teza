@include('layouts.header')
<h1>Clasa {{$classes->name}}</h1>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nr.</th>
        <th>Nume, prenume</th>
    </tr>
    </thead>
    <tbody>

    @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>


@include('layouts.footer')