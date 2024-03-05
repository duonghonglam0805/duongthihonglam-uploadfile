{{-- <form action="/upload-file" method="POST">
    <h3>Form Upload File PHP</h3>
    <label for="">Tên file: </label>
    <input type="file" name="myfFile" id="">
    
</form> --}}
<form action="/upload" method="post" enctype="multipart/form-data">
    <h3>Form Upload File PHP</h3>
    Tên file:
    @csrf
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit"  name="submit"/>
  </form>