
<!DOCTYPE html>
<html>
 
<head>
    <title>Image Upload</title>
    <style>
        /* to make image size propotional */
        .img{
            width: 240px;
            border: 1px solid pink;
        }

        img {
            max-width: 100%;
            object-fit: contain;
        }
    </style>
</head>
 
<body>
    <div id="content">
 
        <form method="POST"
              action="<?= BASEURL?>/testingprocess"
              enctype="multipart/form-data">
            <input type="file"
                   name="uploadfile"
                   value="" />
 
            <div>
                <button type="submit"
                        name="upload">
                  UPLOAD
                </button>
            </div>
        </form>
        <div class="img">
            <?php 
        if(isset($data)){
            foreach ($data as $img) {?>
                <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($img['nama'])?>", height="auto", width="auto" />
            <?php };
        };
        ?>
        </div>
        
    </div>
</body>
 
</html>