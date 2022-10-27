Suggestion: store the images in a directory.

why not DB you ask?

read/write to a DB is always slower than a filesystem
your DB backups will become more time consuming
so, here is my solution.

STEP 1: create a directory userPhotos

STEP 2: create a form

<form action="upload.php" method="post" enctype="multipart/form-data">
 Select your profile picture:
 <input type="file" name="fileToUpload" id="fileToUpload">
 <input type="Upload" value="Upload Image" name="submit">
</form>
STEP 3: create a file called upload.php which handles file uploads.

<?php
$target_dir = "userPhotos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$newfilename = ;//assign unique user ID
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    if (move_uploaded_file($_FILES["fileToUpload"][$newfilename.$imageFileType], $target_file)) {
      echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";$uploadOk = 1;
} 
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}
}
if($uploadOK==1){
 store the path of image in DB as "/userPhotos/".$newfilename
 echo "uploaded photo : <img src='userphotos/".$newfilename."'">
}
//to display the image fetch the path using user ID as put it in src of img tag. 
?>