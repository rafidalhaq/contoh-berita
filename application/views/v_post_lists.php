<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Berita</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
    
  

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?= base_url().'assets/css/style.css'?>">
<title>Title</title>
</head>
<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2>Portal Berita</h2><hr/>
            <form method="post" action="<?= base_url() .'index.php/post_berita/simpan_post'?>" enctype="multipart/form-data">
                <input class="form-control" type="text" name="judul" placeholder="judul berita" required><br/>
                <textarea name="berita" id="ckeditor" class="form-control" required></textarea>
                <input type="file" name="file foto" required>
                <button class="btn btn-primary btn-lg" type="submit">Post Berita</button>
            </form>
        
        </div>
    </div>


<script src="<?= base_url().'assets/jquery/jquery-3.5.1.js'?>"></script>
<script type="text/javascript" src="<?= base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?= base_url().'assets/ckeditor/ckeditor.js'?>"></script>
<script type="text/javascript">
    $(function () {
        CKEDITOR.replace('ckeditor');        
    });
</script>
</body>
</html>