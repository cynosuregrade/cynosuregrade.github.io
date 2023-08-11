<?php
if ($_FILES["file2"]["error"] === UPLOAD_ERR_OK) {
  $uploadDir = "folder2/"; // Direktori penyimpanan Folder 2
  $targetFile = $uploadDir . basename($_FILES["file2"]["name"]);
  
  // Memeriksa dan menyimpan gambar
  if (move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFile)) {
    echo "Unggahan berhasil ke Folder 2.";
  } else {
    echo "Gagal mengunggah gambar ke Folder 2.";
  }
} else {
  echo "Terjadi masalah saat mengunggah gambar ke Folder 2.";
}
?>
