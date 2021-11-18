<div class="table-responsive">
    <table class="table" id="enrollments-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Citizenship</th>
        <th>Religion</th>
        <th>Last School Attended</th>
        <th>Date Graduated</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($enrollments as $enrollment)
            <tr>
                <td>{{ $enrollment->Firstname }}</td>
            <td>{{ $enrollment->Middlename }}</td>
            <td>{{ $enrollment->Lastname }}</td>
            <td>{{ $enrollment->Birthdate }}</td>
            <td>{{ $enrollment->Gender }}</td>
            <td>{{ $enrollment->Address }}</td>
            <td>{{ $enrollment->Citizenship }}</td>
            <td>{{ $enrollment->Religion }}</td>
            <td>{{ $enrollment->Last_School_Attended }}</td>
            <td>{{ $enrollment->Date_Graduated }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['enrollments.destroy', $enrollment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('enrollments.show', [$enrollment->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('enrollments.edit', [$enrollment->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
