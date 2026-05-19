<h1><?php if( isset($foo)) echo $foo; ?></h1>

<form action="/upload" method="post" enctype="multipart/form-data">
    <input type="file" name="receipt">
    <button type="submit">Upload</button>
</form>