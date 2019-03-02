<?php
$dogs = [
    [
        'Nextwalk' => date('Y l'),
        'History' => 'something',
        'Dog' => 'boris',
        'date' => date('l jS \of F Y h:i:s A')
    ],
    [
        'Nextwalk' => date('Y l'),
        'History' => 'something',
        'Dog' => 'snickers',
        'date' => date('l jS \of F Y h:i:s A')
    ],
    [
        'Nextwalk' => date('Y l'),
        'History' => 'something',
        'Dog' => 'tina',
        'date' => date('l jS \of F Y h:i:s A')
    ],
    [
        'Nextwalk' => date('Y l'),
        'History' => 'something',
        'Dog' => 'kingen',
        'date' => date('l jS \of F Y h:i:s A')
    ],
];



?>
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Next Walk</th>
            <th scope="col">History</th>
            <th scope="col">Dog</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
            <th scope="row"></th>
              <tr class="table-active">
                @foreach ($dogs as $i => $dog)
                    <td> {{$dog['Nextwalk']}} </td>
                    <td> {{$dog['History']}} </td>
                    <td> {{$dog['Dog']}} </td>
                    <td> {{$dog['date']}} </td>
                </tr>
                @endforeach
        </tbody>
</table>