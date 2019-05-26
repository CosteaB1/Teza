@include('layouts.header')

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Order</th>
        <th>Description</th>
        <th>Deadline</th>
        <th>Status</th>
        <th>Amount</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Alphabet puzzle</td>
        <td>2016/01/15</td>
        <td>Done</td>
        <td data-order="1000">€1.000,00</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Layout for poster</td>
        <td>2016/01/31</td>
        <td>Planned</td>
        <td data-order="1834">€1.834,00</td>
    </tr>

    </tbody>
</table>


@include('layouts.footer')