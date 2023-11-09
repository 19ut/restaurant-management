<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <!-- <h1>Admin data</h1> -->
    <x-app-layout>
    </x-app-layout>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        @include("admin.admincss")
        <style>
            .user-table {
                position: absolute;
                top: 150px; /* Adjust this value to your preferred vertical position */
                right: 720px; /* Adjust this value to your preferred horizontal position */
            }
        </style>
    </head>
    <body>
        <div class="container-scroller">
            @include("admin.navbar")
            <div class="user-table">
                <table bgcolor="grey" border="3px">
                    <tr>
                        <th style="padding: 30px">Name</th>
                        <th style="padding: 30px">Email</th>
                        <th style="padding: 30px">Action</th>
                    </tr>
                    @foreach($data as $user)
                    <tr align="center">
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        @if($user->usertype=="0")
                        <td><a href="{{url('/deleteuser', $user->id)}}">Delete</a></td>
                        @else
                        <td><a>Not allowed</a></td>
                        @endif
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include("admin.adminscript")
    </body>
</html>
</body>
</html>
