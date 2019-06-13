@include('layouts.header')
<h1>{{$students->name}}</h1>
<h2>Clasa: <a href="/admin/classes/show/{{$students->class_id}}">{{$students->classes->name}}</a></h2>

@foreach($objects as $object)
    <h2>{{$object->name}}</h2>
<table class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nr.</th>
        <th>Nota</th>
        <th>Data</th>
        {{--<th>Obiect</th>--}}
    </tr>
    </thead>
    <tbody>
        @foreach($object->notes as $note)
            <tr>
                <td>{{$note->id}}</td>
                <td>{{$note->note}}</td>
                <td>{{$note->created_at}}</td>
                {{--<td>{{$studentNote->objects->name}}</td>--}}
            </tr>
        @endforeach


    </tbody>
</table>

@endforeach

@include('layouts.footer')