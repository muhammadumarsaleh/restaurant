<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    @include('pages.admin.includes.style')
</head>

<body>
    <div class="container-scroller">

        @include('pages.admin.includes.navbar')
        <div style="position: relative; top:60px; right: -150px">
            <table bgcolor="grey" border="3px">
                <tr>
                    <th style="padding: 30px">Name</th>
                    <th style="padding: 30px">Email</th>
                    <th style="padding: 30px">Action</th>
                </tr>
                @forelse($users as $user)
                    <tr align="center">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ route('user.delete', $user->id) }}">Delete</a></td>
                    </tr>
                @empty
                    <tr align="center">
                        <td>Data masih kosong</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>



    @include('pages.admin.includes.script')

</body>

</html>
