<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")

    <div style="position: absolute; top: 150px; right: 720px;">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
        @csrf 
            <div style="margin-bottom: 10px;">
                <label for="title">Title</label>
                <input style="color: blue;" type="text" name="title" id="title" placeholder="Write a title">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="price">Price</label>
                <input style="color: blue;" type="number" name="price" id="price" placeholder="Price">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="description">Description</label>
                <input style="color: blue;" type="text" name="description" id="description" placeholder="Description">
            </div>
            <div>
                <input style="color: black; background-color: lightgray; padding: 5px 10px;" type="submit" value="Save">
            </div>
        </form>
    </div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminscript")
  </body>
</html>
