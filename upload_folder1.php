<?php
if ($_FILES["file1"]["error"] === UPLOAD_ERR_OK) {
  $uploadDir = "folder1/"; // Direktori penyimpanan Folder 1
  $targetFile = $uploadDir . basename($_FILES["file1"]["name"]);
  
  // Memeriksa dan menyimpan gambar
  if (move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFile)) {
    echo "Unggahan berhasil ke Folder 1.";
  } else {
    echo "Gagal mengunggah gambar ke Folder 1.";
  }
} else {
  echo "Terjadi masalah saat mengunggah gambar ke Folder 1.";
}
?>
