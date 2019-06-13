@include('layouts.header')
<h1>hello</h1>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nr.</th>
        <th>Clasa</th>

    </tr>
    </thead>
    <tbody>
    @foreach($classes as $class)
    <tr>
        <td>{{$class->id}}</td>
        <td>{{$class->name}}</td>
    </tr>
    @endforeach

    </tbody>
</table>


@include('layouts.footer')