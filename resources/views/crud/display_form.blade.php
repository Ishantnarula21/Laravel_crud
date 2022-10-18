<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Form</title>
    <style>
        .pagination svg {
            height: 50px;
        }
    </style>
</head>

<body>
    @if (!empty($edata))
        <form method="post" action="{{ url('edit_insert/' . $edata[0]->id) }}">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Firstname</td>
                    <td><input type="text" name="firstname"
                            value="{{ isset($edata[0]->firstname) ? $edata[0]->firstname : '' }}" /></td>
                </tr>
                <tr>
                    <td>lastname</td>
                    <td><input type=" text" name="lastname"
                            value="{{ isset($edata[0]->lastname) ? $edata[0]->lastname : '' }}" /></td>
                </tr>
                <tr>
                    <td>marks1</td>
                    <td><input type="text" name="marks1"
                            value="{{ isset($edata[0]->marks1) ? $edata[0]->marks1 : '' }}" /></td>
                </tr>
                <tr>
                    <td>marks2</td>
                    <td><input type="text" name="marks2"
                            value="{{ isset($edata[0]->marks2) ? $edata[0]->marks2 : '' }}" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" /></td>
                    <td colspan="2"><button><a
                                href="{{ '/laravel/firstProject/public/display_form' }}">Reset</a></button></td>
                </tr>
            </table>
        </form>
    @else
        <form method="post" action="{{ url('form_insert') }}">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Firstname</td>
                    <td><input type="text" name="firstname" /></td>
                </tr>
                <tr>
                    <td>lastname</td>
                    <td><input type=" text" name="lastname" /></td>
                </tr>
                <tr>
                    <td>marks1</td>
                    <td><input type="text" name="marks1" /></td>
                </tr>
                <tr>
                    <td>marks2</td>
                    <td><input type="text" name="marks2" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" /></td>
                    <td colspan="2"><button><a
                                href="{{ '/laravel/firstProject/public/display_form' }}">Reset</a></button></td>
                </tr>
            </table>
        </form>
    @endif
    <br />
    <form action="{{ url('search_data') }}" method="post">
        {{ csrf_field() }}
        <input type="text" name="search" />
        <input type="submit" name="sea" />
    </form>
    <table border="1" width="80%">
        <tr>
            <td><b>ID</b></td>
            <td><b>Firstname</b></td>
            <td><b>Lastname</b></td>
            <td><b>Marks1</b></td>
            <td><b>Marks2</b></td>
            <td><b>Delete</b></td>
            <td><b>Edit</b></td>
        </tr>
        @foreach ($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->firstname }}</td>
                <td>{{ $row->lastname }}</td>
                <td>{{ $row->marks1 }}</td>
                <td>{{ $row->marks2 }}</td>
                <td><a href="{{ 'delete_data/' . $row->id }}">Delete</a></td>
                <td><a href="{{ '/laravel/firstProject/public/display_form/' . $row->id }}">Edit</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
