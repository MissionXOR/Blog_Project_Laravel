<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .post_tittle{
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: white;
        }
        .div_center{
            text-align: center;
            padding: 30px;
        }
        label{
            display:inline-block;
            width: 200px;
        }
        
    </style>
  </head>
  <body>
        @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
        @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
            <div class="page-content">
                <h1 class="post_tittle">ADD POST</h1>

                <div>
                    <form action="{{ route('addPost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="div_center">
                                <label for="">Post Tittle</label>
                                <input type="text" name="title">
                            </div>

                            <div class="div_center">
                                <label for="">Post Description</label>
                                <textarea name="description"  cols="30" rows="10"></textarea>
                            </div>

                            <div class="div_center">
                                <label for="">Add Image</label>
                                <input type="file" name="image">
                            </div>

                            <div class="div_center">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                    </form>
                </div>
            </div>
       @include('admin.footer')
  </body>
</html>