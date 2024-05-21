<?php
if (isset($_POST['submit'])) {
    if (isset($_FILES['file'])) {
        $fileName = $_FILES['file']['name'];
        $fileTempPath = $_FILES['file']['tmp_name'];
        $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $newFilePath = uniqid() . '.' . $extension;
        $destination = "uploads/" . $newFilePath;
        $fileSize = $_FILES['file']['size'];
        $extensions = ["png", "jpg", "jpeg", "gif"];
        $message = [];

        // Validate file size
        if ($fileSize > 5000000) {
            $message['fileSize'] = "File size must be less than 5 MB";
        }

        // Validate file extension
        if (!in_array($extension, $extensions)) {
            $message['fileExtension'] = "File must be PNG, JPG, JPEG, or GIF";
        }

        // Create uploads directory if it doesn't exist
        if (!file_exists('uploads/')) {
            mkdir('uploads/', 0777, true);
        }

        // Move uploaded file to destination
        if (empty($message)) {
            if (move_uploaded_file($fileTempPath, $destination)) {
                $message['success'] = "File uploaded successfully!";
            } else {
                $message['uploadError'] = "There was an error moving the uploaded file.";
            }
        }
    } else {
        $message['fileError'] = "No file was uploaded.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php if (!empty($message)): ?>
        <div>
            <?php foreach ($message as $msg): ?>
                <p><?php echo $msg; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <label for="file">Upload file</label>
        <input type="file" name="file" id="file" required>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>
