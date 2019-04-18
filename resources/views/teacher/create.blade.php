<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel  </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="max-width: 600px; margin: 60px auto;">
      <h2><center>Tambah Guru Baru</h2><br/></center>

      <form action="{{ route('teacher.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="code">Code</label>
          <input type="text" class="form-control" name="code" placeholder="09">
          @if ($errors->has('code'))
            <strong>{{ $errors->first('code')}}</strong> <br>
          @endif
        </div>

        <div class="form-group">
          <label for="name_id">Name_id</label>
          <input type="text" class="form-control" name="name_id" placeholder="Sigit wasis subekti">
          @if ($errors->has('name_id'))
            <strong>{{ $errors->first('name_id')}}</strong> <br>
          @endif
        </div>

        <div class="form-group">
          <label for="name_ar">Name_ar</label>
          <input type="text" class="form-control" name="name_ar" placeholder="عربي">
          @if ($errors->has('name_ar'))
            <strong>{{ $errors->first('name_ar')}}</strong> <br>
          @endif
        </div>

        <div class="form-group">
          <label for="nip">NIP</label>
          <input type="text" class="form-control" name="nip" placeholder="1846777">
          @if ($errors->has('nip'))
            <strong>{{ $errors->first('nip')}}</strong> <br>
          @endif
        </div>

        <div class="form-group">
          <label for="gender">Gender</label>
          <select class="form-control" name="gender">
            <option>laki-laki</option>
            <option>perempuan</option>
          </select>
          @if ($errors->has('gender'))
            <strong>{{ $errors->first('gender')}}</strong> <br>
          @endif
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('teacher.index')}}" class="btn btn-danger">Batal</a>
      </form>
      
      <div class="footer">Copyright@2019 - Created by <a href="http://sigitsmkn1liwa.blogspot.com/"> Pesagi Code.</div></a>
    </div>
  </body>
</html>